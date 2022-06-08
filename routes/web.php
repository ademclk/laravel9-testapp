<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;

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
Route::get('/admin', [AdminHomeController::class,'index'] )->name('admin');

// Admin category routes
Route::get('/admin/category', [AdminCategoryController::class,'index'] )->name('admin_category');
Route::get('/admin/category/create', [AdminCategoryController::class,'create'] )->name('admin_category_create');
Route::post('/admin/category/store', [AdminCategoryController::class,'store'] )->name('admin_category_store');
Route::get('/admin/category/edit/{id}', [AdminCategoryController::class,'edit'] )->name('admin_category_edit');
Route::put('/admin/category/update/{id}', [AdminCategoryController::class,'update'] )->name('admin_category_update');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
