<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Boutique;
use App\Models\Commande;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function index() {
        if(Auth::user()->role->nom == "user")  {
            return view('clients.dashboards.index', [
                'countOrders'=> Commande::where('user_id', Auth::user()->id)->count()
            ]);
         } elseif(Auth::user()->role->nom == "admin") {
             return view('dashboards.index', [
                'countCommande' => Commande::count(),
                'countProducts'  =>  Product::count(),
                'countRevenues'  =>  DB::table('order_product')->sum('total'),
                'countBoutique'  => Boutique::count(),
                'countUsers' => User::count()
             ]);
         } else {
            return view('dashboards.index');
         }
    }
}
