<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KuliahController;
use App\Http\Controllers\ProductController;


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

// Auth::routes();
//cek

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [HomeController::class, 'index']) -> name('home');
Route::get('/pengalaman', [KuliahController::class, 'kuliah']) -> name('pengalaman');
Route::prefix('profil') -> group (function () {
    Route::get('/alif', [ProfileController::class, 'alif']);
    Route::get('/andika', [ProfileController::class, 'andika']);
}) -> name('profil');
Route::get('/product', [ProductController::class, 'tampil']) -> name('product');



