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

Route::get('/', [HomeController::class, 'index']);
Route::get('/login', [HomeController::class, 'login']);
Route::get('/buku', [HomeController::class, 'buku']);
Route::get('/buku/kategori', [HomeController::class, 'kategori']);
Route::get('/customer', [HomeController::class, 'cust']);
Route::get('/order', [HomeController::class, 'pinjam']);
Route::get('/anggota/dashboard', [HomeController::class, 'angdash']);
Route::get('/buku/tambahbuku', [HomeController::class, 'tambahbuku']);
