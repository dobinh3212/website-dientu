<?php

namespace App\Http\Controllers;

use App\Article;
use App\Banner;
use App\Brand;
use App\Order;
use App\OrderProduct;
use App\Setting;
use App\Contact;
use App\Category;
use App\Product;
use App\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Cart;

class ShopController extends Controller
{
    public $categories; // danh sách danh mục

    public function __construct()
    {
        // lấy dữ liệu setting và chia sẻ ra toàn bộ trang
        // 1. cấu hình website
        $settings = Setting::first();

        // 2. Lấy dữ liệu - Danh mục, có trạng thái là hiển thị
        $this->categories = Category::where([
            'is_active' => 1,
            'type' => 1, // lấy ra danh mục sản phẩm
        ])->get(); // bao gồm cả menu cha và con

        // 3. Lấy dữ liệu - Banner
        $banners = Banner::where(['is_active' => 1,'type' => 1])->orderBy('id', 'asc')->get();

        // 4. lấy dữ liệu tin tức mới nhất
        $articlesNew = Article::where('is_active', 1)
            ->orderBy('id', 'desc')
            ->limit(3)
            ->get();

        // 5. lấy dữ liệu thương hiệu
        $brandsNew = Brand::where('is_active', 1)
            ->orderBy('id', 'asc')
            ->get();


        // Chia sẻ dữ qua các layout khác
        view()->share([
            'settings' => $settings,
            'categories' => $this->categories,
            'banners' => $banners,
            'articlesNew' => $articlesNew,
            'brandsNew' => $brandsNew
        ]);
    }

    // Trang Chủ
    public function index()
    {
        $listCategories = $this->categories; // lấy toàn bộ danh mục cho vào 1 biến

        $data = []; // biến data chứa dữ liệu bao gồm danh muc và sản phẩm

        foreach($listCategories as $key => $category) {
            if ($category->parent_id == 0) { // kiểm tra xem có phải danh mục cha
                $data[$key]['category'] = $category; // b1 . lấy danh mục
                //$data[$key]['products'] = []; // b2 . láy toàn bộ sản phẩm của cả nhóm danh mục


                $ids = []; // mảng các id của nhóm danh mục cha
                $ids[] = $category->id;  // id danh muc cha

                foreach ($listCategories as $key2 => $child) {
                    if ($child->parent_id == $category->id) {
                        $ids[] = $child->id; // $ids : 1,7

                        foreach ($listCategories as $key3 => $child2) {
                            if ($child2->parent_id == $child->id) {
                                $ids[] = $child2->id; // // $ids : 1,7,60

                            }
                        }
                    }
                }


                //SELECT * FROM `products` WHERE is_active = 1  AND category_id IN(1,7,60)
                $data[$key]['products'] = Product::where(['is_active' => 1])
                    ->whereIn('category_id' , $ids) // category_id IN(1,7,60)
                    ->limit(10)
                    ->orderBy('id', 'desc')
                    ->get();
            }
        }


        return view('shop.index', [
              'data' => $data
        ]);
    }

    // Trang liên hệ với cửa hàng
    public function contact()
    {
        return view('shop.contact');
    }

    // Trang danh sách sản phẩm
    public function listProducts(request $request, $slug)
    {
        $filter_brands = $request->query('thuong-hieu');
        $filter_price = $request->query('gia');
        $filter_sort = $request->query('sap-sep');

        $branch_ids = []; // mảng id của các thương hiệu
        if ($filter_brands) {
            $arr_filter_brands = explode(',', $filter_brands); // chuyển đổi 1 chuỗi thành 1 mảng ngăn cách bằng dấu , ['apple', 'xiaomi', 'dell']
            $arr_brands = Brand::whereIn('slug' , $arr_filter_brands)->get(); // lấy slug giống với các thương hiệu trong mảng

            foreach ($arr_brands as $item) {
                $branch_ids[] = $item->id; // thêm phần tử vào mảng
            }
        }

        // Thương hiệu sản phẩm
        $branchs = Brand::all();

        // B1 : lấy chi tiết thể loại
        $cate = Category::where(['slug' => $slug])->first();

        if ($cate) {
            // B1.1: Kiểm tra danh mục cha -> lấy toàn bộ danh mục con để where In
            $ids = []; // mảng lưu toàn id của danh mục cha + id - danh mục con

            $ids[] = $cate->id; // lấy id toàn bộ danh mục
            $child_categories = []; // lưu danh mục con

            foreach ($this->categories as $child) {
                if ($child->parent_id == $cate->id) {
                    $ids[] = $child->id; // thêm id của danh mục con vào mảng ids
                    $child_categories[] = $child;
                }
            } // ids = 1,7,8,9,11

            // Hàm query tác động tới bảng
            $query = DB::table('products')->select('*')
                ->whereIn('category_id', $ids)
                ->where('is_active', '=', 1);

            // Lọc theo thương hiệu
            if (!empty($branch_ids)) {
                $query->whereIn('brand_id', $branch_ids);
            }

            // Lọc theo giá cả
            if ($filter_price) {
                $arr_price = explode('-', $filter_price); // chuyển thành mảng [2000000, 4000000]
                if ($arr_price) {
                    $min_price = (int)$arr_price[0];
                    $max_price = (int)$arr_price[1];

                    if ($min_price > 0) {
                        $query->where('sale', '>=' , $min_price);
                    }

                    if ($max_price > 0) {
                        $query->where('sale', '<=' , $max_price);
                    }
                }
            }

            // Sắp sếp
            if ($filter_sort) {
                if ($filter_sort == 'noi-bat') {
                    $query->orderBy('is_hot', 'DESC'); // xếp sản phẩm nổi bật theo độ hot
                } elseif ($filter_sort == 'gia-thap-den-cao') {
                    $query->orderBy('sale', 'ASC'); // xếp sản phẩm giá từ cao đến thấp
                } elseif ($filter_sort == 'gia-cao-den-thap') {
                    $query->orderBy('sale', 'DESC'); // xếp sản phẩm giá từ thấp đến cao
                }

            } else {
                $query->orderBy('id', 'DESC');
            }

            $list_products = $query->paginate(9);

            return view('shop.list-products',[
                'category' => $cate,
                'products' => $list_products,
                'branchs' => $branchs, // thương hiệu
                'filter_sort' => $filter_sort,
                'filter_price' => $filter_price ? $filter_price : '',
                'arr_filter_brands' => json_encode($branch_ids)
            ]);

        } else {
            return $this->notfound();
        }
    }

    // trang chi tiet san pham
    public function detailProduct($slug)
    {
        $product = Product::where(['slug' => $slug, 'is_active' => 1])->firstOrFail();

        // khai báo mảng chứa danh sách các sản phẩm đã xem
        $viewedProducts = [];

        // xử lý lưu tin đã xem
        if (isset($_COOKIE['list_product_viewed'])) {
            $list_products_viewed = $_COOKIE['list_product_viewed']; // list id sản phẩm
            $list_products_viewed = json_decode($list_products_viewed); // chuyển chuỗi list id=> mảng

            // kiểm tra nếu chưa tồn tại trong list đã xem ??
            if (!in_array($product->id, $list_products_viewed)) {
                $list_products_viewed[] = $product->id;  // thêm id tiếp theo vào mảng đã xem

                // 44 , 9, 10 ,13, 67, 99 ,89, 70, 71
                // lấy ra 4 cái id mới nhất
                $list_products_viewed = array_slice($list_products_viewed,-4,4);

                // danh sách bị thay đổi => nạp lại giá trị cho key
                $_list = json_encode($list_products_viewed);
                setcookie('list_product_viewed', $_list , time() + (7*86400));
            }

            // lấy ra danh sách sách sản phẩm đã xem từ mảng : $list_products_viewed
            $viewedProducts = Product::where([
                ['is_active' , '=', 1],
                ['id', '<>' , $product->id]
            ])->whereIn('id' , $list_products_viewed)
                ->take(4)
                ->get();
        } else {
            // lưu id sẩn phẩm đã xem lần đầu vào cookie
            $arr_product_id = [$product->id];
            $arr_product_id = json_encode($arr_product_id); // { "ten" : "gia tri"  }
            setcookie('list_product_viewed', $arr_product_id , time() + (7*86400));
        }


        $relatedProducts = Product::where([ ['is_active' , '=', 1],
                                            ['category_id', '=' , $product->category_id ],
                                            ['id', '<>' , $product->id]
                                        ])->orderBy('id', 'desc')
                                            ->simplepaginate(3);
        $category = Category::find($product->category_id);

        return view('shop.detail-product',[
            'product' => $product,
            'category'=>$category,
            'relatedProducts' => $relatedProducts,
            'viewedProducts' => $viewedProducts
        ]);
    }

    // trang danh sach tin tuc
    public function listArticles()
    {
        $articles = Article::where(['is_active' => 1 ])->orderBy('id','desc')->simplePaginate(6);

        return view('shop.list-articles',[
            'articles' => $articles
        ]);
    }

    public function detailArticle($slug)
    {
        $article = Article::where(['slug' => $slug, 'is_active' => 1])->firstOrFail();

        // lấy toàn bộ bài viết liên quan có chia thể loại rõ ràng : tin tức thường ngày, tin tức khuyến mại, tin tức nổi bật
        $relatedArticle = Article::where([ ['is_active' , '=', 1],
                                            ['type' , '=' ,$article->type],
                                            ['id', '<>' , $article->id]
                                            ])->orderBy('id', 'desc')
                                            ->simplepaginate(4);

        return view('shop.detail-article',[
            'article' => $article,
            'relatedArticle' => $relatedArticle
        ]);
    }

    // trang giới thiệu cửa hàng
    public function introCompany()
    {
        return view('shop.intro-company');
    }

    // trang dịch vụ cửa hàng
    public function serviceStore()
    {
        return view('shop.service-store');
    }

    // trang chính sách bảo mật *sub*
    public function privacyPolicy()
    {
        return view('shop.privacy-policy');
    }

    // trang chính sách bảo hành *sub*
    public function warrantyPolicy()
    {
        return view('shop.warranty-policy');
    }

    // trang quy định sao lưu dữ liệu *sub*
    public function backupRegulations()
    {
        return view('shop.backup-regulations');
    }

    // trang câu hỏi thường gặp *sub*
    public function fluentQuestion()
    {
        return view('shop.faq');
    }

    // thêm dữ liệu khách hàng liên hệ vào bảng contact
    public function postContact(Request $request)
    {
        //validate
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email'
        ]);

        //luu vào csdl
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->phone = $request->input('phone');
        $contact->email = $request->input('email');
        $contact->content = $request->input('content');
        $contact->save();

        // chuyển về trang chủ
        return redirect('/');
    }

    // Thêm sản phẩm vào giỏ hàng
    public function addToCart($id)
    {
        $product = Product::findOrFail($id);

        // thông tin sẽ lưu vào giỏ

        // gọi đến thư viện thêm sản phẩm vào giỏ hàng
        Cart::add(
            ['id' => $product->id, 'name' => $product->name, 'qty' => 1, 'price' => $product->sale,'tax' => 0, 'priceTax' => 0, 'options' => ['tax' => 0 , 'priceTax' => 0, 'image' => $product->image]]
        );

        //session(['totalItem' => Cart::count()]);

        // chuyển về trang danh sách sản phảm trong giỏ hàng
        return redirect()->route('shop.cart');
    }

    // Danh sách đặt hàng - giỏ hàng
    public function cart()
    {
        // lấy dữ liệu = tất cả sản phẩm trong giỏ hàng
        // b1. lấy toàn bộ sản phẩm đã lưu trong giỏ
        $listProducts = Cart::content();

        // lấy tổng giá của đơn hàng
        $totalPrice = Cart::subtotal(0,",",".");

        return view('shop.cart.index', [
            'listProducts' => $listProducts,
            'totalPrice' => $totalPrice
        ]);

    }

    // Hủy Đơn Hàng
    public function cancelCart()
    {
        Cart::destroy();

        return redirect('/');
    }

    // Xóa sản phẩm trong giỏ hàng
    public function removeProductToCart($rowId)
    {
        Cart::remove($rowId);

        return redirect()->route('shop.cart');
    }

    public function updateCart($rowId, $qty)
    {
        // Cập nhật số lượng sản phẩm
        Cart::update($rowId, $qty);

        return redirect()->route('shop.cart');
    }

    // Lưu được thông tin sản phẩm
    public function order()
    {
        $listProducts = Cart::content();
        $totalPrice = Cart::subtotal(0,",",".");
        return view('shop.cart.order',[
            'listProducts' => $listProducts,
            'totalPrice' => $totalPrice
        ]);
    }

    // Xử lý lưu dữ liệu vào database
    public function postOrder(Request $request)
    {
        $request->validate([
            'fullname' => 'required|max:255',
            'phone' => 'required',
            'email' => 'required|email',
            'address' => 'required',
        ]);

        // Lưu vào bảng đơn đặt hàng - orders
        $order = new Order();
        $order->fullname = $request->input('fullname');
        $order->phone = $request->input('phone');
        $order->email = $request->input('email');
        $order->address = $request->input('address');
        $order->note = $request->input('note');

        // lấy tổng giá của đơn hàng
        $totalPrice = Cart::subtotal(0,",",'');
        $order->total = $totalPrice;
        $order->order_status_id = 1; // 1 = mới , 2 = đang xử lý , 3 = Hoàn Thành, 4 = Hủy
        $order->code = 'DH-'.date('d').date('m').date('Y').'-'.time();
        //$order->save();

        if ($order->save()) {
            // Xử lý lưu chi tiết
            $id_order = $order->id;

            // lấy toàn bộ sản phẩm đã lưu trong giỏ
            $listProducts = Cart::content();

            foreach ($listProducts as $product)
            {
                $_detail = new OrderProduct();
                $_detail->order_id = $id_order;
                $_detail->name = $product->name;
                $_detail->image = $product->options->image;
                $_detail->product_id = $product->id;
                $_detail->qty = $product->qty;
                $_detail->price = $product->price;
                $_detail->save();

            }

            // Xóa thông tin giỏ hàng Hiện tại
            Cart::destroy();


            // Chuyển về trang thông báo đặt hàng thành công
            return redirect()->route('shop.orderSuccess');

        }
    }

    // Trang Thông báo đơn hàng
    public function orderSuccess()
    {
        return view('shop.cart.orderSuccess');
    }

    // Trang Tìm Kiếm
    public function search(Request $request)
    {
        // mục tiêu : lấy từ khóa + tìm trong bảng sản phẩm

        // b1. Lấy từ khóa tìm kiếm
        $keyword = trim($request->input('keyword'));

        $slug = str_slug($keyword); // chuyen doi ve dang slug

        //$sql = "SELECT * FROM products WHERE is_active = 1 AND slug like '%$keyword%'";
        // b2 : lấy sản phẩm gần giống vs từ khóa tìm kiếm
        $products = Product::where([
            ['is_active', '=', 1],
            ['slug', 'LIKE', '%' . $slug . '%']
        ])->paginate(9);

        $totalResult = $products->total(); // số lượng kết quả tìm kiếm

        return view('shop.search', [
            'products' => $products,
            'totalResult' => $totalResult,
            'keyword' => $keyword ? $keyword : ''
        ]);
    }
}
