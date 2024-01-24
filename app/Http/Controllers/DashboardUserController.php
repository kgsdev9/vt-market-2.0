<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Commande;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Models\PaymentAdresse;
use Illuminate\Support\Facades\Auth;

class DashboardUserController extends Controller
{
    public function customerDashboard() {
        return view('clients.dashboards.index');
    }

    public function orderCustomer() {
        return view('clients.orders.liste', [
            'allCommandeUser' => Commande::where('user_id', Auth::user()->id)->get()
        ]);
    }

    public function adresseCustomer() {
        return view('clients.adresses.index', [
            'allCities'=> City::all(),
            'country'=> Country::all(),
            'allAdresseUser' => PaymentAdresse::where('user_id', Auth::user()->id)->get()
        ]);
    }

    public function showOrder($id)  {

        return view('clients.orders.detail', [
            'singleOrder'=> Commande::find($id)
        ]);
    }
}
