<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Trang chủ
Route::get('/', 'ShopController@index');

// Trang liên hệ
Route::get('/lien-he', 'ShopController@contact')->name('shop.contact');
Route::post('/postContact', 'ShopController@postContact')->name('shop.postContact');

// Trang danh mục sản phẩm
Route::get('/danh-muc-san-pham/{slug}', 'ShopController@listProducts')->name('shop.listProducts');

// Trang chi tiết sản phẩm
Route::get('/chi-tiet-san-pham/{slug}', 'ShopController@detailProduct')->name('shop.detailProduct');

// Trang danh sách tin tức
Route::get('/tin-tuc', 'ShopController@listArticles')->name('shop.listArticles');

// Trang chi tiết tin tức
Route::get('/chi-tiet-tin-tuc/{slug}', 'ShopController@detailArticle')->name('shop.detailArticle');

// Trang giới thiệu
Route::get('/gioi-thieu', 'ShopController@introCompany')->name('shop.intro');

// Trang dịch vụ
Route::get('/dich-vu', 'ShopController@serviceStore')->name('shop.service');

// Trang Chính sách bảo mật
Route::get('/chinh-sach-bao-mat', 'ShopController@privacyPolicy')->name('shop.policy');

// Trang Chính sách bảo hành
Route::get('/chinh-sach-bao-hanh', 'ShopController@warrantyPolicy')->name('shop.warranty');

// Trang Quy định sao lưu dữ liệu
Route::get('/quy-dinh-sao-luu-du-lieu', 'ShopController@backupRegulations')->name('shop.backup');

// Trang Faq
Route::get('/cau-hoi-thuong-gap', 'ShopController@fluentQuestion')->name('shop.question');

// Thêm sản phẩm vào giỏ hàng
Route::get('/them-san-pham-vao-gio/{id}', 'ShopController@addToCart')->name('shop.addToCart');
// Màn hình danh sách sản phẩm trong giỏ
Route::get('/gio-hang', 'ShopController@cart')->name('shop.cart');
// Nút hủy đơn hàng
Route::get('/huy-don-hang', 'ShopController@cancelCart')->name('shop.cancelCart');
// Xóa sản phẩm trong giỏ hàng
Route::get('/xoa-san-pham-trong-gio-hang/{rowId}', 'ShopController@removeProductToCart')->name('shop.removeProductToCart');
// Cập nhật số lượng
Route::get('/cap-nhat-so-luong/{rowId}/{qty}', 'ShopController@updateCart')->name('shop.updateCart');
// Màn hình thông tin Khách Hàng và giỏ hàng
Route::get('/dat-hang', 'ShopController@order')->name('shop.order');
// Gửi dữ liệu khách hàng về database
Route::post('/dat-hang', 'ShopController@postOrder')->name('shop.postOrder');
// Thông báo khách hàng về đơn hàng
Route::get('/dat-hang-thanh-cong', 'ShopController@orderSuccess')->name('shop.orderSuccess');

// Trang tìm kiếm sản phẩm
Route::get('/tim-kiem', 'ShopController@search')->name('shop.search');

// Trang quản trị admin BackEnd
Route::get('/admin/login', 'LoginController@index')->name('admin.login');
Route::post('/admin/postLogin', 'LoginController@postLogin')->name('admin.postLogin');
Route::get('/admin/logout', 'LoginController@logout')->name('admin.logout');

// Gom nhóm route của trang admin thông qua hàm group
Route::group(['prefix' => 'admin','as' => 'admin.', 'middleware' => 'checkLogin'], function() {
    //Bảng Dashboard (hiển thị số đơn hàng , số sản phẩm , số bài viết và số người dùng)
    Route::get('/', 'LoginController@dashBoard')->name('dashboard');
    //Quản lý Danh Mục
    Route::resource('category', 'CategoryController');
    //Quản lý Banner
    Route::resource('banner', 'BannerController');
    //Quản lý sản phẩm
    Route::resource('product', 'ProductController');
    //Quản lý Thương Hiệu
    Route::resource('brand', 'BrandController');
    //Quản lý Nhà Cung Cấp
    Route::resource('vendor', 'VendorController');
    //Quản lý Người Dùng
    Route::resource('user', 'UserController');
    //Quản lý bài viết
    Route::resource('article', 'ArticleController');
    //Cấu hình website
    Route::resource('setting', 'SettingController');
    //Quản Lý đơn hàng
    Route::resource('order', 'OrderController');
    //Quản lý liên hệ
    Route::resource('contact', 'ContactController');
});

Route::get('/{str}', 'ShopController@errors')->name('error.URL');
