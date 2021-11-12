<?php

namespace App\Http\Controllers;

use App\Article;
use App\Banner;
use App\Brand;
use App\Category;
use App\Order;
use App\Product;
use App\User;
use App\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function dashBoard()
    {
        // Đếm số đơn hàng, bài viết , Sản phẩm và người dùng
        $numOrder = Order::count();
        $numArticle = Article::count();
        $numProduct = Product::count();
        $numUser = User::count();
        $numCategory = Category::count();
        $numBanner = Banner::count();
        $numVendor = Vendor::count();
        $numBrand = Brand::count();

        return view('admin.dashboard', [
            'numOrder' => $numOrder,
            'numArticle' => $numArticle,
            'numProduct' => $numProduct,
            'numUser' => $numUser,
            'numCategory' => $numCategory,
            'numBanner' => $numBanner,
            'numVendor' => $numVendor,
            'numBrand' => $numBrand
        ]);
    }

    public function index()
    {
        return view('admin.login');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6'
        ],[
            'email.required' => 'Bạn chưa nhập Email',
            'password.required' => 'Bạn chưa nhập Password',
        ]);

        // Lấy email và password từ form Login
        /*$data = [
            'email' => trim($request->input('email')),
            'password' => trim($request->input('password'))
        ];*/

        $data = $request->only('email', 'password');

        $remember = $request->input('remember');

        // check success
        if (Auth::attempt($data, $remember)) {
            return redirect()->route('admin.dashboard')->with('msg1','Đăng nhập thành công !!!');
        }

        return redirect()->back()->with('msg', 'Email hoặc Password không chính xác');
    }

    public function logout()
    {
        // Xoá phiên đăng nhập
        Auth::logout();
        // chuyển về trang đăng nhập
        return redirect()->route('admin.login');
    }
}
