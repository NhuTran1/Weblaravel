<?php

use App\Http\Controllers\Backend\AuthController;
use Illuminate\Support\Facades\Route;

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

//cach 2:  Route::view('/', 'welcome');

Route::get('/', function(){
    return view('welcome');
});
//điều hướng người dùng đến trang /login, giúp quản lí router dễ dàng thông qua auth.login, :: tham chiếu đến tên class đầy đủ
//Route::get('login', [AuthController::class, 'login'])->name('auth.login');

