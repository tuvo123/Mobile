<?php

use App\Http\Controllers\Admin\Users\LoginConTroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\User\MainController;
use App\Http\Controllers\User\Users\UploadProduct;
use App\Http\Controllers\User\Users\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/trang-chu', [UserController::class, 'index']);
Route::get('/dang-nhap-admin', [LoginConTroller::class, 'index']);
Route::get('/chi-tiet-san-pham',[UserController::class,'product_detail']);
Route::get('/san-pham', [UserController::class, 'product']);
Route::get('/thanh-toan', [UserConTroller::class, 'pay']);
Route::get('/lich-su-hoa-don',[UserController::class,'order']);
Route::get('/user/order',[UserController::class,'order']);
Route::get('/gio-hang',[UserController::class,'cart']);
Route::get('/user/product_detail',[UserController::class,'product_detail']);
Route::get('/user/product', [UserController::class, 'product']);
Route::get('/user/pay', [UserConTroller::class, 'pay']);
Route::get('/user/order',[UserController::class,'order']);
Route::get('/user/cart',[UserController::class,'cart']);
Route::post('/trang-chu/dang-nhap-nguoi-dung', [UserController::class, 'Login']);

// Login
Route::resource('/trang-chu', UploadProduct::class);