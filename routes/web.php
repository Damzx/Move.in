<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\JasaController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [DashboardController::class, 'home'])->middleware('guest');

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->middleware('auth');
Route::put('/profile/edit', [ProfileController::class, 'update'])->middleware('auth');
Route::delete('/profile/delete', [ProfileController::class, 'delete'])->middleware('auth');

Route::get('/book/movein', [JasaController::class, 'movein'])->middleware('auth');
Route::get('/book/packin', [JasaController::class, 'packin'])->middleware('auth');
Route::get('/book/edit/{id}', [JasaController::class, 'edit'])->middleware('auth');
Route::put('/book/edit', [JasaController::class, 'update'])->middleware('auth');
Route::delete('/book/delete', [JasaController::class, 'delete'])->middleware('auth');
Route::get('/checkout', [JasaController::class, 'checkout'])->middleware('auth');
Route::post('/checkout', [JasaController::class, 'store'])->middleware('auth');
Route::get('/payment/movein', [JasaController::class, 'paymentMovein'])->middleware('auth');
Route::get('/payment/packin', [JasaController::class, 'paymentPackin'])->middleware('auth');
Route::get('/history', [JasaController::class, 'history'])->middleware('auth');