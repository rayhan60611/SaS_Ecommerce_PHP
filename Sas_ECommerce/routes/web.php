<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminPagesController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\BrandController;


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



Route::get('/', [homeController::class , 'homePage'])->name('home');
Route::get('/contact', [ContactController::class , 'contact'])->name('contact');

//product route for frontend
Route::group(['prefix' => 'products'], function(){

Route::get('/', [ProductController::class , 'allProduct'])->name('products');
Route::get('/{slug}', [ProductController::class , 'show'])->name('products.show');
Route::get('/products/search', [PagesController::class , 'productSearch'])->name('products.search');
Route::get('/category/{slug}', [PagesController::class , 'categoryShow'])->name('categories.show');


});












//Admin Routes
Route::group(['prefix' => 'admin'], function(){

    //Admin Basic Routes
    Route::get('/', [AdminPagesController::class , 'index'])->name('admin.index');  
    // Route::get('/', [AdminPagesController::class , 'index'])->name('admin.index');  
    // Route::get('/', [AdminPagesController::class , 'index'])->name('admin.index');  

     //Admin Product Routes
    Route::group(['prefix' => '/products'], function(){

        Route::get('/', [AdminProductController::class , 'show'])->name('admin.products'); 
        Route::get('/create', [AdminProductController::class , 'create'])->name('admin.create'); 
        Route::post('/create', [AdminProductController::class , 'store'])->name('admin.create.store');
        Route::get('/edit/{id}', [AdminProductController::class , 'edit'])->name('admin.products.edit'); 
        Route::post('/edit{id}', [AdminProductController::class , 'update'])->name('admin.products.update');
        Route::post('/delete/{id}', [AdminProductController::class , 'delete'])->name('admin.product.delete');
    });


     //Admin Category Routes
     Route::group(['prefix' => '/category'], function(){

        Route::get('/', [CategoryController::class , 'showCategory'])->name('admin.category'); 
        Route::get('/create', [CategoryController::class , 'addCategory'])->name('admin.category.create'); 
        Route::post('/create', [CategoryController::class , 'addCategoryStore'])->name('admin.category.store'); 
        Route::get('/edit/{id}', [CategoryController::class , 'edit'])->name('admin.category.edit'); 
        Route::post('/edit{id}', [CategoryController::class , 'update'])->name('admin.category.update');
        Route::post('/delete/{id}', [CategoryController::class , 'delete'])->name('admin.category.delete');
       
    });

      //Admin Category Routes
      Route::group(['prefix' => '/brand'], function(){

        Route::get('/', [BrandController::class , 'showBrand'])->name('admin.brand'); 
        Route::get('/create', [BrandController::class , 'addBrand'])->name('admin.brand.create'); 
        Route::post('/create', [BrandController::class , 'addBrandStore'])->name('admin.brand.store'); 
        Route::get('/edit/{id}', [BrandController::class , 'edit'])->name('admin.brand.edit'); 
        Route::post('/edit{id}', [BrandController::class , 'update'])->name('admin.brand.update');
        Route::post('/delete/{id}', [BrandController::class , 'delete'])->name('admin.brand.delete');
       
    });

});


