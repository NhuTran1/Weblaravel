<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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
Route::get('/', [PagesController::class, 'index']);
Route::get('/about-animal', [PagesController::class, 'about']);
Route::get('about-animal', function(){
    return view('animal.about-animal');
});

Route::get('/posts', [PostsController::class, 'index']);

Route::get('/homeController', [HomeController::class, 'index']);
Route::get('/homeController1', [HomeController::class, 'contact'])->name('contact');
// Route::get('products/{productName}/{id}', [
//     ProductsController::class,
//     'detail'
// ])->where([
//     'id'=>'[0-9]+',
//     'productName' => '[a-Za-Z0-9]'
// ]);

// Route::get('/', function(){
//     return view('home');
// });

// Route::get('/', function () {
//     // return view('welcome');
//     return env('MY_NAME');
// });

// Route::get('/users', function () {
//     return "This is the user page";
// });

// Route::get('/food', function(){
//     return ['susi', 'hello'];
// }) ;

// //Response object
// Route::get('/absolute', function () {
//     return response()->json([ //response
//         'name'=> "Qaung Nhu",
//         'email'=>'Nhu@gmail.com'
//     ]);
// });

// // response another request = redirect
// Route::get('/something', function () {
//     return redirect('welcome');
// });
