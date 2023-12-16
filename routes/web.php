<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PointRelaisController;
use App\Http\Controllers\ProductManagementController;
use App\Http\Controllers\SocialiteConnecteControlller;
use App\Http\Controllers\VendeurRegisterController;
use App\Livewire\ProductManagement;

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

Route::get('/store/seller/vtp/{id}', [HomeController::class, 'boutiqueSeller'])->name('boutique.seller');
Route::get('/annuaire-categories', CategoryController::class)->name('categorie.index');
Route::get('/all/stores/vtp', [HomeController::class, 'allBoutique'])->name('boutique.index');
Route::get('/points-relais', PointRelaisController::class)->name('point.relais.index');


//product-category-controllers

Route::get('/category-product/{slug}', [HomeController::class ,'categoryProduct'])->name('product.categories');


//mes routes  pour la connexion des des services de connexions par socialies


Route::get("redirect/{provider}", [SocialiteConnecteControlller::class, 'redirect'])->name('socialite.redirect');


Route::get('/product-management', ProductManagementController::class)->name('product.management');
