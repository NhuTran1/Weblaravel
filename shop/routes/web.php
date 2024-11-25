<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandProduct;
use App\Http\Controllers\CategoryProduct;
use App\Http\Controllers\ProductController;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function() {
    return view('welcome');
});

// giúp người dùng khi nhấn vào trang chủ or menu home thì đều ra trang chủ
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/trang-chu', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'index']);

Route::get('/product', function () {
    return view('pages.home');
});
Route::get('/product', function () {
    return view('pages.product');
});
Route::get('/news', function () {
    return view('pages.news');
});
Route::get('/contact', function () {
    return view('pages.contact');
});

// admin
Route::get('/admin', [AdminController::class, 'index']);

Route::get('/dashboard', [AdminController::class, 'show_dashboard']);

Route::post('/admin-dashboard', [AdminController::class, 'dashboard'])->name('admin-dashboard');

Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

//Danh muc sp
Route::get('/add-category-product', [CategoryProduct::class, 'add_category_product']);

Route::get('/all-category-product', [CategoryProduct::class, 'all_category_product']);

Route::post('/save-category-product', [CategoryProduct::class, 'save_category_product'])->name('save-category-product');

Route::get('/delete-category-product/{category_product_id}', [CategoryProduct::class, 'delete_category_product']);

//Cập nhật lại trạng thái ẩn hiện sản phẩm
Route::get('/active-category-product/{category_product_id}', [CategoryProduct::class, 'active_category_product']);

Route::get('/unactive-category-product/{category_product_id}', [CategoryProduct::class, 'unactive_category_product']);

// taoj màu cho mục đc chọn 
// Route::get('danh-muc-san-pham/{slug_category_product}', [CategoryProduct::class, 'show_Category_Product']);

Route::get('/edit-category-product/{category_product_id}', [CategoryProduct::class, 'edit_category_product']);

Route::post('/update-category-product/{category_product_id}', [CategoryProduct::class, 'update_category_product']);


//Thương hiệu sp
Route::get('add-brand-product', [BrandProduct::class, 'add_brand_product']);

Route::get('/all-brand-product', [BrandProduct::class, 'all_brand_product']);

Route::post('/save-brand-product',[BrandProduct::class, 'save_brand_product']);

Route::get('/unactive-brand-product/{brand_product_id}', [BrandProduct::class, 'unactive_brand_product']);

Route::get('/active-brand-product/{brand_product_id}', [BrandProduct::class, 'active_brand_product']);

//edit brand
Route::get('/edit-brand-product/{brand_product_id}', [BrandProduct::class, 'edit_brand_product']);

//gọi nút câph nhật dl
Route::post('/update-brand-product/{brand_product_id}', [BrandProduct::class, 'update_brand_product']);

//Xoa danh muc sp
Route::get('delete-brand-product/{brand_product_id}', [BrandProduct::class, 'delete_brand_product']);

//taoj màu cho mục đc chọn 
// Route::get('/thuong-hieu-san-pham/{brand_product_id}', [BrandProduct::class, 'show_brand_product']);

//product, them sp

Route::get('/all-product', [ProductController::class, 'all_product']);

Route::get('/add-product', [ProductController::class, 'add_product']);

Route::post('/save-product', [ProductController::class, 'save_product']);

Route::get('/edit-product/{product_id}', [ProductController::class, 'edit_product']);

Route::post('/update-product/{product_id}', [ProductController::class, 'update_product']);

Route::get('/delete-product/{product_id}', [ProductController::class, 'delete_product']);

//hien thi theo category, brand
Route::get('/danh-muc-san-phan/{slug_category_product}', [CategoryProduct::class, 'show_category_home']);

Route::get('/thuong-hieu-san-pham/{brand_slug}', [BrandProduct::class, 'show_brand_home']);

//gia thap->cao or cao->thap
Route::get('/filter-price/{order}', [HomeController::class, 'filterPrice']);
Route::get('/filter-category-price/{slug_category_product}/{order}', [CategoryProduct::class, 'filter_category_price']);
Route::get('/filter-brand-price/{brand_slug}/{order}', [BrandProduct::class, 'filter_brand_price']);

//chi tiết sp
Route::get('chi-tiet-san-pham/{product_slug}', [ProductController::class, 'details_product']);

Route::get('/slide', function () {
    return view('elements.slide');
});