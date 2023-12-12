<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VendeurRegisterController;
use Illuminate\Support\Facades\Route;

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



Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/become-seller', [VendeurRegisterController::class, 'registerSeller'])->name('register.seller');

Route::get('/sellers-testing-products', [VendeurRegisterController::class, 'index'])->name('gestion-testing');

Route::get('/catalogue-product',[HomeController::class, 'catalogueProduct']);

//authentification routes

Route::get('/fr/auth', [RegisterController::class, 'register']);
