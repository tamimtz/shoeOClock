<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManageController;
use App\Http\Controllers\ProductController;

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


Route::get('/adminLogin', function(){
    return view('auth.login');
});

route::get('/', function(){
    return view('base.home');
} )->name('home');


Auth::routes();

Route::resource('products', ProductController::class );

Route::resource('manage', ManageController::class);

Route::get('allProducts',[ProductController::class, 'allProducts'])->name('products.allProducts');
Route::get('men',[ProductController::class, 'menHome'])->name('products.menHome');

Route::get('/home', function() {
    return view('base.home');
});
