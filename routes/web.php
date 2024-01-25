<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CityManagementController;
use App\Http\Controllers\Admin\CountryManagementController;
use App\Http\Controllers\Admin\ManagementBoutiqueController;
use App\Http\Controllers\Admin\RoleManagementController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AdresseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BoutiqueController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PaymentNotificationController;
use App\Http\Controllers\ProductManagementController;
use App\Http\Controllers\SocialiteConnecteControlller;
use App\Http\Controllers\VendeurRegisterController;

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

Route::get('/store/seller/vtp/{id}', [HomeController::class, 'boutiqueSeller'])->name('boutique.seller');
Route::get('/annuaire-categories', CategoryController::class)->name('categorie.index');
Route::get('/all/stores/vtp', [HomeController::class, 'allBoutique'])->name('boutique.index');

//user profile
Route::get('/espace-client', [DashboardUserController::class, 'customerDashboard'])->name('espace.client');
Route::get('/mes-commandes', [DashboardUserController::class, 'orderCustomer'])->name('espace.orders');
Route::get('/commande/{id}', [DashboardUserController::class, 'showOrder'])->name('show.orders');
Route::get('/adresses-delivry', [DashboardUserController::class, 'adresseCustomer'])->name('adresse.client');
Route::post('/registerAdresse', [AdresseController::class, 'store'])->name('register.adresse');
//product-category-controllers

Route::get('/category-product/{slug}', [HomeController::class ,'categoryProduct'])->name('product.categories');
Route::get('/product/detail/{slug}', [HomeController::class, 'singleProduct'])->name('single.product');

//mes routes  pour la connexion des des services de connexions par socialies

Route::get("redirect/{provider}", [SocialiteConnecteControlller::class, 'redirect'])->name('socialite.redirect');
Route::get('/product-management', ProductManagementController::class)->name('product.management');
Route::get('/gestion-boutique', BoutiqueController::class)->name('gestion.boutique');
//gestions du paniers et paiement
Route::get('/cart', PanierController::class)->name('cart');
Route::get('/sommary-oders', [HomeController::class, 'sommaryOrders'])->name('sommary.orders')->middleware('auth');
Auth::routes();
//
Route::post('/resise', [HomeController::class, 'renitialiseImage'])->name('image.resize');


//mes routes de notifications de paiement
Route::get('/succes-payment', [PaymentNotificationController::class, 'successPayment']);
Route::get('/echec-payment', [PaymentNotificationController::class, 'echecPayment']);


//PaymentControllers
Route::post('/initialise-payment-gateway', [PaymentController::class, 'initialisePayment'])->name('initialise.payment');


//notifications payement url

Route::get('/success-payment', [PaymentNotificationController::class, 'successFullPayment'])->name('payment.sucess');
Route::get('/failled-payment', [PaymentNotificationController::class, 'failedPayment'])->name('failled.payment');
Route::get('/cancel-payment', [PaymentNotificationController::class, 'cancelPayment'])->name('cancel.payment');


//administration gestion routes

Route::get('/all/commandes', [AdminController::class, 'allCommandes'])->name('all.commandes');
Route::get('/detail/order/{id}', [AdminController::class, 'singleViewInvoice'])->name('view.order');
Route::get('/gestion-users', UserController::class)->name('geston.users');
Route::get('/all-boutique', ManagementBoutiqueController::class)->name('management.store');
Route::get('/role-management', RoleManagementController::class)->name('role.management');
Route::get('/city-management', CityManagementController::class)->name('city.management');
Route::get('/country-management', CountryManagementController::class)->name('country.management');
