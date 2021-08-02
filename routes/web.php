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

// Trang chu
Route::get('/', 'ShopController@index');

// Trang liên hệ
Route::get('/lien-he', 'ShopController@contact')->name('shop.contact');
Route::post('/postContact', 'ShopController@postContact')->name('shop.postContact');

// Trang danh mục
Route::get('/danh-muc-san-pham/{slug}', 'ShopController@listProducts')->name('shop.listProducts');

// Trang chi tiết sản phẩm
Route::get('/chi-tiet-san-pham/{slug}', 'ShopController@detailProduct')->name('shop.detailProduct');

// Trang danh sach tin tuc
Route::get('/tin-tuc', 'ShopController@listArticles')->name('shop.listArticles');

// Trang chi tiet tin tuc
Route::get('/chi-tiet-tin-tuc/{slug}', 'ShopController@detailArticle')->name('shop.detailArticle');

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
// Màn hình thông tin Khách Hàng
Route::get('/dat-hang', 'ShopController@order')->name('shop.order');
// Gửi dữ liệu về database
Route::post('/dat-hang', 'ShopController@postOrder')->name('shop.postOrder');
// Thông báo khách hàng
Route::get('/dat-hang-thanh-cong', 'ShopController@orderSuccess')->name('shop.orderSuccess');

Route::get('/tim-kiem', 'ShopController@search')->name('shop.search');

Route::get('/admin/login', 'LoginController@index')->name('admin.login');
Route::post('/admin/postLogin', 'LoginController@postLogin')->name('admin.postLogin');
Route::get('/admin/logout', 'LoginController@logout')->name('admin.logout');

// Gom nhóm route của trang admin thông qua hàm group
Route::group(['prefix' => 'admin','as' => 'admin.', 'middleware' => 'checkLogin'], function() {
    //giúp cho chúng ta tạo các url  tương ứng với controller truyền vào
    Route::resource('category', 'CategoryController');
    Route::resource('banner', 'BannerController');
    Route::resource('product', 'ProductController');
    Route::resource('vendor', 'VendorController');
    Route::resource('user', 'UserController');
    Route::resource('article', 'ArticleController');
    Route::resource('setting', 'SettingController');
    Route::resource('order', 'OrderController');
});
