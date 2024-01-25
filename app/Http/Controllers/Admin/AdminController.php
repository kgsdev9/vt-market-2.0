<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Commande;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function allCommandes() {
        $allCommandes = Commande::paginate(20);
        return view('dashboards.commandes.liste', [
            'allCommandes'=> $allCommandes
        ]);
    }

    public function singleViewInvoice($id) {
            return view('dashboards.commandes.detail', [
                'singleOrder' =>  Commande::where('id', $id)->first()
            ]);
    }
}
