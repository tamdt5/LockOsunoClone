<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [IndexController::class,'index']);

Route::get('login', [LoginController::class, 'getLogin'])->name('getLogin');
Route::post('login', [LoginController::class, 'postLogin'])->name('postLogin');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::prefix('admin')->name('admin.')->middleware('check_login')->group(function () {
    Route::post('ckeditor/image_upload', [CkeditorController::class, 'upload'])->name('upload');
    Route::controller(CategoryController::class)->prefix('categories')->name('categories.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/delete/{id}', 'destroy')->name('destroy');
    });
    Route::controller(ProductController::class)->prefix('products')->name('products.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/delete/{id}', 'destroy')->name('destroy');
    });
    Route::controller(UserController::class)->prefix('users')->name('users.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
    });
    Route::controller(NewsController::class)->prefix('new')->name('new.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
    });
    Route::controller(OrderController::class)->prefix('order')->name('order.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
    });
});

Route::prefix('/')->name('website.')->group(function () {
    Route::controller(IndexController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/danh-muc-san-pham/{tentheloai?}', 'detailCategory')->name('detailCategory');
        Route::get('/chi-tiet-san-pham/{tensanpham}', 'detailProduct')->name('detailProduct');
        Route::post('/cham-soc-khach-hang', 'cskh')->name('cskh');
        Route::post('/danhgia', 'danhgia')->name('danhgia');
        Route::get('/san-pham-ban-chay', 'sanphambanchay')->name('sanphambanchay');
        Route::get('/danh-muc-san-pham/{tentheloai}/{range?}', 'filter')->name('filter');
        Route::get('/san-pham-ban-chay/{range}', 'filterBanChay')->name('filterBanChay');
        Route::get('/tin-tuc/{type?}', 'categoryNews')->name('categoryNews');
        Route::get('/thongtin/{id}', 'detailNews')->name('detailNews');
        Route::get('/gioi-thieu', 'gioithieu')->name('gioithieu');
        
    });
    Route::get('/gio-hang',[CartController::class, 'cart'])->name('cart');
    Route::get('/add-to-cart/{id}/{quantity?}',[CartController::class, 'addtoCart'])->name('addtoCart');
    Route::get('/thanh-toan',[CartController::class, 'payment'])->name('payment');
    Route::get('/xoa-san-pham/{id}',[CartController::class, 'removeItem'])->name('removeItem');
    Route::post('/cap-nhat',[CartController::class, 'updateCart'])->name('updateCart');
    Route::get('/post-order',[CartController::class, 'PostOrder'])->name('PostOrder');
    
});
// Route::controller(CategoryController::class)->middleware('check_login')->group(function () {
//     Route::get('/admin1/category', 'index')->name('index');
//     Route::get('/admin1/category/edit/{id}', 'edit')->name('edit');
//     Route::post('/admin1/category/update/{id}', 'update')->name('update');
//     Route::get('/admin1/category/create', 'create')->name('create');
//     Route::post('/admin1/category/store', 'store')->name('store');
//     Route::get('/admin1/category/delete/{id}', 'destroy')->name('destroy');
// });

// Route::controller(ProductController::class)->middleware('check_login')->group(function () {
//     Route::get('/admin1/product', 'index')->name('index');
//     Route::get('/edit/{id}', 'edit')->name('edit');
//     Route::post('/update/{id}', 'update')->name('update');
//     Route::get('/create', 'create')->name('create');
//     Route::post('/store', 'store')->name('store');
//     Route::get('/delete/{id}', 'destroy')->name('destroy');
// });
