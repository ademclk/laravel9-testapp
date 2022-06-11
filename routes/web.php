<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use \App\Http\Controllers\Admin\ProductController as AdminProductController;
use \App\Http\Controllers\Admin\ImageController as AdminImageController;

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
// 1- Do something in route
Route::get('/hello', function (){
    return 'Hello World';
});

// 2- Call view in route
Route::get('/welcome', function () {
    return view('welcome');
});

// 3- Call controller function
Route::get('/',[HomeController::class,'index'])->name('home');

// 4- Route -> Controller -> View
Route::get('/test',[HomeController::class,'test'])->name('test');

// 5- Route with parameters
Route::get('/param/{id}/{number}',[HomeController::class,'param'])->name('param');

// 6- Route with post
Route::post('/save',[HomeController::class,'save'])->name('save');

// Admin panel route
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name('admin');

// Admin category routes
    Route::prefix('category')->name('admin_category_')->controller(AdminCategoryController::class)->group(function () {
    Route::get('', 'index')->name('');
    Route::get('/create','create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/edit/{id}','edit')->name('edit');
    Route::put('/update/{id}', 'update')->name('update');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::get('/show/{id}', 'show')->name('show');
    Route::get('/destroy/{id}', 'destroy')->name('destroy');
    });

    // Admin product routes
    Route::prefix('product')->name('admin_product_')->controller(AdminProductController::class)->group(function () {
        Route::get('', 'index')->name('');
        Route::get('/create','create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::put('/update/{id}', 'update')->name('update');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::get('/show/{id}', 'show')->name('show');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
    });

    // Admin image routes
    Route::prefix('image')->name('admin_image_')->controller(AdminImageController::class)->group(function () {
        Route::get('/{pid}', 'index')->name('index');
        Route::post('/store/{pid}', 'store')->name('store');
        Route::get('/destroy/{pid}/{id}', 'destroy')->name('destroy');
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
