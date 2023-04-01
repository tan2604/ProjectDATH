<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
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

Route::get('/',[MainController::class, 'home']);
Route::get('/about',[MainController::class, 'about']);
Route::get('/blog',[MainController::class, 'blog']);
Route::get('/contact',[MainController::class, 'contact']);
Route::get('/shop',[MainController::class, 'shop']);
Route::get('/shop-fillter',[MainController::class, 'fillter']);

//admin

Route::get('/admin', [AdminController::class, 'dashboard']);
Route::get('/login', [AdminController::class, 'login']);
Route::get('/forgot-password', [AdminController::class, 'forgot']);
