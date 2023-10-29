<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\BrandController;
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


        ####      PRODUCTS      ####

Route::resource('products', ProductController::class );



Route::get('allProducts',[ProductController::class, 'allProducts'])->name('products.allProducts');

Route::get('men',[ProductController::class, 'menHome'])->name('products.menHome');

Route::get('allProducts/Men/FootWear/Trainers', [ProductController::class,'menTrainers'])->name('products.menTrainers');

Route::get('allProducts/Men/Brands', [ProductController::class, 'menBrands'])->name('products.menBrands');

// Route::get('allProducts/Men/Brands/Nike/Categories', [ProductController::class, 'menBrandsCategoriesNike'])->name('products.menBrandsCategoriesNike');


    ###### PRODUCTS WOMEN SECTION #############

Route::get('allProducts/Women/Brands', [ProductController::class, 'womenBrands'])->name('products.womenBrands');    


     ####      Manage      ####

Route::resource('manage', ManageController::class);

Route::get('/manageProducts', [ManageController::class, 'manageProducts'])->name('manage.products');

Route::get('manageProducts/NewProduct', [ManageController::class, 'newProduct'])->name('manage.newProduct');

Route::get('/manageProducts/NewProduct/NewShoe',[ManageController::class, 'newShoes'])->name('manage.newShoes');

Route::get('/manageProducts/NewProduct/NewWatches',[ManageController::class, 'newWatches'])->name('manage.newWatches');

Route::post('/manageProducts/NewProduct/NewWatches/add',[ManageController::class, 'storeWatches'])->name('manage.storeWatches');

Route::get('/manageProducts/NewProduct/NewGarments',[ManageController::class, 'newGarments'])->name('manage.newGarments');

Route::post('/manageProducts/NewProduct/NewGarments/add',[ManageController::class, 'storeGarments'])->name('manage.storeGarments');





    ####      Cart     ####

Route::resource('cart', CartController::class);

Route::post('/products/addProductToCart', [CartController::class, 'addProductToCart'])->name('cart.addProductToCart');

Route::get('/checkout', [CartController::class, 'checkout'])->name('cart.checkout');





Route::get('/home', function() {
    return view('base.home');
});

    ####      Brand     ####

Route::resource('brand', BrandController::class);

Route::get('allBrands', [BrandController::class, 'brands'])->name('brand.all');
Route::get('allProducts/Men/Brands/{id}/AllCategories', [BrandController::class, 'dynamicBrandCategoriesMen'])->name('brand.dynamicBrandCategoriesMen');