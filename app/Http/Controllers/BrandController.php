<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Brand::latest()->paginate(20);

        return view('admin.brand.index', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::all();

        return view('admin.brand.create', [
            'brands' => $brands
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Bước 1: Nhận được data từ request
        $name = $request->input('name'); // tên thương hiệu
        $website = $request->input('website'); // website
        $position = $request->input('position'); // vị trí
        $is_active = $request->input('is_active'); // hiển thị

        // xác thực tính đúng đắn của dữ liệu
        $request->validate([
            'name' => 'required|max:255',
            'image' => 'required|file|mimes:jpeg,png,jpg,gif,svg'
        ],[
            'name.required' => 'Bạn chưa nhập tên',
            'image.required' => 'Bạn chưa chọn ảnh',
            'image.mimes' => 'Ảnh chỉ hỗ trợ các định dạng file : jpeg,png,jpg,gif,svg'
        ]); // nếu có lỗi return back url create , kèm theo một danh sách ,lỗi lưu vào biên $errors

        // B2: khoi tao model
        $brand = new Brand();
        $brand->name = $name;
        $brand->slug = str_slug($name);
        $brand->website = $website;
        $brand->position = $position;
        $brand->is_active = $is_active ? $is_active : 0;

        // xử lý lưu ảnh
        if ($request->hasFile('image')) { // dòng này Kiểm tra xem có image có được chọn
            // get file
            $file = $request->file('image');
            // tên file image
            $filename = $file->getClientOriginalName(); // tên ban đầu của image
            // Định nghĩa đường dẫn sẽ upload lên
            $path_upload = 'uploads/brand/';
            // Thực hiện upload file
            $file->move($path_upload,$filename);

            $brand->image = $path_upload.$filename;
        }

        $brand->save();

        // Bước 3: chuyển về trang danh sách
        return redirect()->route('admin.brand.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand = Brand::find($id);
        $brands = Brand::all();

        return view('admin.brand.edit',[
            'brand' => $brand,
            'brands' => $brands
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Bước 1: Nhận được data từ request
        $name = $request->input('name'); // tên thương hiệu
        $website = $request->input('website'); // website
        $position = $request->input('position'); // vị trí
        $is_active = $request->input('is_active'); // hiển thị

        // xác thực tính đúng đắn của dữ liệu
        $request->validate([
            'name' => 'required|max:255',
            //'image' => 'required|file|mimes:jpeg,png,jpg,gif,svg'
        ],[
            'name.required' => 'Bạn chưa nhập tiêu đề',
            //'image.required' => 'Bạn chưa chọn ảnh',
            //'image.mimes' => 'Ảnh chỉ hỗ trợ các định dạng file : jpeg,png,jpg,gif,svg'
        ]); // nếu có lỗi return back url create , kèm theo một danh sách ,lỗi lưu vào biên $errors

        // B2: khoi tao model
        $brand = Brand::findorFail($id);
        $brand->name = $name;
        $brand->slug = str_slug($name);
        $brand->website = $website;
        $brand->position = $position;
        $brand->is_active = $is_active ? $is_active : 0;

        // xử lý lưu ảnh
        if ($request->hasFile('image')) { // dòng này Kiểm tra xem có image có được chọn
            // Xóa file cũ
            @unlink(public_path($brand->image));
            // get file
            $file = $request->file('image');
            // tên file image
            $filename = $file->getClientOriginalName(); // tên ban đầu của image
            // Định nghĩa đường dẫn sẽ upload lên
            $path_upload = 'uploads/brand/';
            // Thực hiện upload file
            $file->move($path_upload,$filename);

            $brand->image = $path_upload.$filename;
        }

        $brand->save();

        // Bước 3: chuyển về trang danh sách
        return redirect()->route('admin.brand.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Brand::destroy($id); // DELETE FROM categories WHERE id = 56

        return response()->json(['status' => true], 200);
    }
}
