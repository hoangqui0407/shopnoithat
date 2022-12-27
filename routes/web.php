<?php

use Illuminate\Support\Facades\Route;
 use \App\Http\Controllers\Admin\Users\LoginController;
 use \App\Http\Controllers\Admin\MainController;
 use \App\Http\Controllers\Admin\Menu\MenuController;
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


Auth::routes();

// Route::get('/shopnoithat', [LoginController::class, 'index2']);

//trang đăng nhập hệ thống
Route::get('admin/users/login',[LoginController::class,'index'])->name('login');
Route::get('admin/users/register',[LoginController::class,'index'])->name('register');
//kiểm tra tài khoản đúng không
Route::post('admin/users/login/store',[LoginController::class,'store'])->name('login.store');
//vào trang chủ admin và kiểm tra có đăng nhập thành công chưa nếu chưa sẽ trả về trang đăng nhập với middleware(bảo vệ kiểm tra)
Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function (){
      Route::get('/',[MainController::class, 'index'])->name('admin');
      Route::get('main',[MainController::class, 'index']);
      
      //Nhóm group của menu
      Route::prefix('menus')->group(function (){
        Route::get('add', [MenuController::class, 'create'])->name('add');
        Route::post('add', [MenuController::class, 'store'])->name('add.store');
        Route::get('list', [MenuController::class, 'create2'])->name('list');
        Route::post('destroy', [MenuController::class, 'destroy'])->name('destroy');
      });
    });
});