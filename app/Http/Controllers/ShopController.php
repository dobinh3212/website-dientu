<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Setting;
use App\Contact;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function __construct()
    {
        // lấy dữ liệu setting và chia sẻ global
        // 1. cấu hình website
        $settings = Setting::first();

        // 2. Lấy dữ liệu - Danh mục, có trạng thái là hiển thị
        $categories = Category::where([
            'is_active'=> 1,
            'type'=> 1
            ])->get();

        // Chia sẻ dữ qua tất các layout
        view()->share([
            'settings' => $settings,
            'categories'=> $categories
        ]);
    }

    // trang chu
    public function index()
    {
        $sliderBanners =  Banner::where(['is_active' => 1,'type' => 1])->get();
        $leftBanners =  Banner::where(['is_active' => 1,'type' => 2])->get();
        $rightBanners =  Banner::where(['is_active' => 1,'type' => 3])->get();

        return view('shop.index', [
            'banners' => $sliderBanners,
            'leftBanners' => $leftBanners,
            'rightBanners' => $rightBanners
        ]);
    }

    // trang lien he
    public function contact()
    {
        return view('shop.contact');
    }

    // trang danh sach san pham
    public function listProducts()
    {
        return view('shop.list-products');
    }

    // trang chi tiet san pham
    public function detailProduct()
    {
        return view('shop.detail-product');
    }

    // trang danh sach tin tuc
    public function listArticles()
    {
        return view('shop.list-articles');
    }

    public function detailArticle()
    {
        return view('shop.detail-article');
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
}
