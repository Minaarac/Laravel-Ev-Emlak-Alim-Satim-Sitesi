<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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
Route::get('/home2', function () {
    return view('welcome');
});

Route::get('/',function () {
    return view('home.index');
});

Route::get('/home',[HomeController::class,'index'])->name('home');

Route::get('/test/{id}/{name}',[\App\Http\Controllers\HomeController::class,'test'])->whereNumber('id')->whereAlpha('name')->name('test');


Route::middleware('auth')->prefix('admin')->group(function(){

    Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');
});


Route::get('/admin/login',[HomeController::class,'login'])->name('admin_login');
Route::get('/admin/logout',[HomeController::class,'login'])->name('admin_logout');
Route::post('/admin/logincheck',[HomeController::class,'logincheck'])->name('admin_logincheck');








Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
