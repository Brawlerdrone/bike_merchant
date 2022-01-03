<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('category', CategoryController::class);

Route::prefix('/admin')->namespace('Admin')->group(function(){
    Route::match(['get','post'],'/',[AdminController::class,'login']);
    Route::group(['middleware'=>['admin']], function(){
        Route::get('dashboard',[AdminController::class,'dashboard']);
        Route::get('create', [AdminController::class, 'create'])->name('Admin.create');
        // Route::get('getAll', [AdminController::class,'getAll'])->name('admin.all');
        
        Route::get('logout', [AdminController::class, 'logout'])->name('admin.logout');
        
    });
    
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
