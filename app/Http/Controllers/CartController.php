<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function __construct()
    {
        // lấy dữ liệu setting và chia sẻ global
        // 4. cấu hình website
        $settings = Setting::first();

        // Chia sẻ dữ qua tất các layout
        view()->share([
            'settings' => $settings
        ]);
    }
    // trang danh sach san pham dat hang
    public function index()
    {
        return view('shop.cart.index');
    }
}
