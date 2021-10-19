<?php

use App\Http\Controllers\BukuController;
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
Route::get('/dashboard', [HomeController::class, 'dashboard']);
Route::get('/dashboard/book', [HomeController::class, 'book']);
Route::get('/dashboard/customer', [HomeController::class, 'customer']);
Route::get('/dashboard/customer/add', [HomeController::class, 'addCustomer']);