<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController ;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Admin\ReportController;

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

// Route đăng ký người dùng
Route::get('register', [AuthController::class, 'showRegistrationForm'])->name( 'register');
Route::post('register', [AuthController::class, 'register' ]);

// Route đăng nhập người dùng
Route::get('login', [AuthController::class, 'showLoginForm'])->name( 'login');
Route::post('login', [AuthController::class, 'login']);

// Route đăng xuất
Route::post('logout', [AuthController::class, 'logout'])->name( 'logout');

// Route dành cho admin (sử dụng middleware để kiểm tra quyền)
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // Route quản lý sản phẩm
    Route::resource('/admin/products', ProductController::class,[
        'as' => 'admin' //Đặt tiền tố 'admin' cho tất cả các route của products
    ]);

    // Route quản lý danh mục
    Route::resource('/admin/categories', CategoryController::class,[
        'as' => 'admin' //Đặt tiền tố 'admin' cho tất cả các route của categories
    ]);

    // Route quản lý đơn hàng
    Route::get('/admin/orders', [App\Http\Controllers\Admin\OrderController::class, 'index'])->name('admin.orders.index');
    Route::patch('/admin/orders/{order}', [App\Http\Controllers\Admin\OrderController::class, 'updateStatus'])->name('admin.orders.updateStatus');

    // Route chi tiết đơn hàng
    Route::get('/admin/orders/{order}', [App\Http\Controllers\Admin\OrderController::class, 'show'])->name('admin.orders.show');

    // Route quản lý báo cáo
    Route::get('/admin/reports', [ReportController::class, 'index'])->name('admin.reports.index');
});

// Route cho người dùng bình thường
Route::middleware(['auth'])->group(function () {
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/{product}', [ProductController::class, 'show_normal'])->name('products.show');

    Route::post('/search', [ProductController::class, 'search'])->name('products.search');
    // Route hiển thị sản phẩm theo danh mục
    Route::get('/products/category/{category}', [ProductController::class, 'productsByCategory'])->name('products.byCategory');

    //Đặt hàng
    Route::get('/orders', [OrderController::class, 'index'])->name('order.index');
    Route::post('/orders', [OrderController::class, 'store'])->name('order.store');
    //Chi tiết đơn hàng
    Route::get('/orders/{id}', [OrderController::class, 'show'])->name('order.show');
}); 

// Route để thêm sản phẩm vào giỏ hàng
Route::middleware(['auth'])->post('/cart/add/{product}', [CartController::class, 'add'])->name('cart.add');
// Route để hiển thị giỏ hàng
Route::middleware(['auth'])->get('/cart', [CartController::class, 'index'])->name('cart.index');
// Route để xoá sản phẩm khỏi giỏ hàng
Route::middleware(['auth'])->delete('/cart/remove/{product}', [CartController::class, 'remove'])->name('cart.remove');
// Route cập nhật thông tin giỏ hàng
Route::patch('/cart/{id}', [CartController::class, 'update'])->name('cart.update');
