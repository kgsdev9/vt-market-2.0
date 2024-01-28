<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CityManagementController;
use App\Http\Controllers\Admin\CountryManagementController;
use App\Http\Controllers\Admin\ManagementBoutiqueController;
use App\Http\Controllers\Admin\RoleManagementController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AdresseController;
use App\Http\Controllers\Auth\RegisterVendorController;
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
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SocialiteConnecteControlller;
use App\Http\Controllers\SuiviController;
use App\Http\Controllers\VendeurRegisterController;
use App\Livewire\DetailProduct;
use App\Livewire\SingleBoutiqueSellerComponent;

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

Auth::routes();

//user and vendors user et visiteurs routes
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/espace-client', [DashboardUserController::class, 'customerDashboard'])->name('espace.client');
Route::get('/mes-commandes', [DashboardUserController::class, 'orderCustomer'])->name('espace.orders');
Route::get('/commande/{id}', [DashboardUserController::class, 'showOrder'])->name('show.orders');
Route::get('/adresses-delivry', [DashboardUserController::class, 'adresseCustomer'])->name('adresse.client');
Route::post('/registerAdresse', [AdresseController::class, 'store'])->name('register.adresse');
Route::get('/become-seller', [VendeurRegisterController::class, 'registerSeller'])->name('register.seller');
Route::get('/catalogue-product',[HomeController::class, 'catalogueProduct'])->name('catalogue.product');
Route::get('/annuaire-categories', CategoryController::class)->name('categorie.index');
Route::get('/all/stores/vtp', [HomeController::class, 'allBoutique'])->name('boutique.index');
Route::get('/category-product/{slug}', [HomeController::class ,'categoryProduct'])->name('product.categories');
Route::get('/product/detail/{slug}', DetailProduct::class)->name('single.product');
Route::get('/product-management', ProductManagementController::class)->name('product.management');
Route::get('/gestion-boutique', BoutiqueController::class)->name('gestion.boutique');
Route::get('/cart', PanierController::class)->name('cart');
Route::get('/sommary-oders', [HomeController::class, 'sommaryOrders'])->name('sommary.orders')->middleware('auth');
Route::get('/boutique/officielle/{slug}', SingleBoutiqueSellerComponent::class)->name('store.seller');

//mes routes  pour la connexion des des services de connexions par socialies
Route::get("redirect/{provider}", [SocialiteConnecteControlller::class, 'redirect'])->name('socialite.redirect');

//notifications payement url
Route::post('/initialise-payment-gateway', [PaymentController::class, 'initialisePayment'])->name('initialise.payment');
Route::get('/success-payment', [PaymentNotificationController::class, 'successFullPayment'])->name('payment.sucess');
Route::get('/failled-payment', [PaymentNotificationController::class, 'failedPayment'])->name('failled.payment');
Route::get('/cancel-payment', [PaymentNotificationController::class, 'cancelPayment'])->name('cancel.payment');


//administration gestion routes
Route::middleware(['is_admin', 'auth'])->group(function () {
    Route::get('/all/commandes', [AdminController::class, 'allCommandes'])->name('all.commandes');
    Route::get('/detail/order/{id}', [AdminController::class, 'singleViewInvoice'])->name('view.order');
    Route::get('/gestion-users', UserController::class)->name('geston.users');
    Route::get('/all-boutique', ManagementBoutiqueController::class)->name('management.store');
    Route::get('/role-management', RoleManagementController::class)->name('role.management');
    Route::get('/city-management', CityManagementController::class)->name('city.management');
    Route::get('/country-management', CountryManagementController::class)->name('country.management');
});

//pages statiques

Route::get('/comment-ca-marche', function () {
    return view('pages.comment-ca-marche');
});

//Suivis livraisons

Route::get('/suivi-commande', SuiviController::class)->name('suivi.delivry');

//make functionnalités search
Route::get('/search-product', SearchController::class)->name('search');
Route::get('/vendors/register', [RegisterVendorController::class, 'registerFormVendor'])->name('vendors.registration');
Route::post('/vendors/registration', [RegisterVendorController::class, 'store'])->name('vendors.store');

//testingpage
Route::get('/detail/page', function() {
    return view('detail');
});
