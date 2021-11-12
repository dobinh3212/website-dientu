<?php

namespace App\Http\Controllers;

use App\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $banners = Banner::all(); // lấy toàn bộ dữ liệu
        $listBanners = Banner::latest()->paginate(5); // sắp sếp theo thứ tự mới nhất && phân trang

        if($request->has('search')){

            $listBanners = Banner::where('title','like',"%{$request->get('search')}%")->paginate(10);
        }

        return view('admin.banner.index',[
            'data' => $listBanners,
            'banners' => $banners
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $banners = Banner::all(); // lấy toàn bộ dữ liệu

        return view('admin.banner.create',[
            'banners' => $banners
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
        $title = $request->input('title'); // tên
        $url = $request->input('url'); // url
        $target = $request->input('target'); // muc tieu
        $type = $request->input('type'); // loai
        $position = $request->input('position'); // vị trí
        $description = $request->input('description');
        $is_active = $request->input('is_active'); // hiển thị

        // xác thực tính đúng đắn của dữ liệu
        $request->validate([
            'title' => 'required|max:255',
            'image' => 'required|mimes:jpg,png,jpeg,gif,svg',
        ],[
            'title.required'=> 'Tiêu đề không được để trống !!!',
            'title.unique' => 'Tiêu đề đã tồn tại !!!',
            'title.max' => 'Tiêu đề không được quá 255 ký tự !!!',
            'image.mimes' => 'Image không hợp lệ [ jpg , png , jpeg , gif , svg ]',
            'image.required' => 'Bạn chưa tải ảnh lên',
        ]); // nếu có lỗi return back url create , kèm theo một danh sách ,lỗi lưu vào biên $errors

        // B2: khoi tao model
        $banner = new Banner();
        $banner->title = $title;
        $banner->slug = str_slug($title);
        $banner->url = $url;
        $banner->target = $target;
        $banner->type = $type;
        $banner->position = $position;
        $banner->description = $description;
        $banner->is_active = $is_active ? $is_active : 0;

        // xử lý lưu ảnh
        if ($request->hasFile('image')) { // dòng này Kiểm tra xem có image có được chọn
            // get file
            $file = $request->file('image');
            // tên file image
            $filename = $file->getClientOriginalName(); // tên ban đầu của image
            // Định nghĩa đường dẫn sẽ upload lên
            $path_upload = 'uploads/banner/';
            // Thực hiện upload file
            $file->move($path_upload,$filename);

            $banner->image = $path_upload.$filename;
        }

        $banner->save();

        // Bước 3: chuyển về trang danh sách
        return redirect()->route('admin.banner.index');
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
        $banner = Banner::find($id);
        $banners = Banner::all();

        return view('admin.banner.edit',[
            'banner' => $banner,
            'banners' => $banners
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
        $title = $request->input('title'); // tên
        $url = $request->input('url'); // url
        $target = $request->input('target'); // muc tieu
        $type = $request->input('type'); // loai
        $position = $request->input('position'); // vị trí
        $description = $request->input('description'); //mô tả
        $is_active = $request->input('is_active'); // hiển thị

        // xác thực tính đúng đắn của dữ liệu
        $request->validate([
            'title' => 'required|max:255',
            'image' => 'mimes:jpg,png,jpeg,gif,svg',
        ],[
            'title.required' => 'Bạn chưa nhập tiêu đề',
            'image.mimes' => 'Image không hợp lệ [ jpg , png , jpeg , gif , svg ]',
        ]); // nếu có lỗi return back url create , kèm theo một danh sách ,lỗi lưu vào biên $errors

        // B2: khoi tao model
        $banner = Banner::find($id);
        $banner->title = $title;
        $banner->slug = str_slug($title);
        $banner->url = $url;
        $banner->target = $target;
        $banner->type = $type;
        $banner->position = $position;
        $banner->description = $description;
        $banner->is_active = $is_active ? $is_active : 0;

        // xử lý lưu ảnh
        if ($request->hasFile('image')) {
            // get file
            $file = $request->file('image');
            // tên file image
            $filename = $file->getClientOriginalName();
            // Định nghĩa đường dẫn sẽ upload lên
            $path_upload = 'uploads/banner/';
            // Thực hiện upload file
            $file->move($path_upload,$filename);

            $banner->image = $path_upload.$filename;
        }

        $banner->save();

        // Bước 3: chuyển về trang danh sách
        return redirect()->route('admin.banner.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Banner::destroy($id); // DELETE FROM categories WHERE id = 56

        return response()->json(['status' => true], 200);
    }
}
