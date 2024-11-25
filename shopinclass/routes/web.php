<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
// Nho them dg dan moi khi Route::
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('layout');
// });

// giúp người dùng khi nhấn vào trang chủ or menu home thì đều ra trang chủ
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/trang-chu', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'index']);

Route::get('/product', function() {
    return view('pages.product');
});

Route::get('/pages', function() {
    return view('pages.pages');
});

Route::get('/news', function() {
    return view('pages.news');
});

Route::get('/contact', function() {
    return view('page.contacts');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/about', [AboutController::class, 'index']);

require __DIR__.'/auth.php';
