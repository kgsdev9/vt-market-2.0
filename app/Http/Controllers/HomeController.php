<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('welcome', [
            'categoris'=> Category::all(),
            'catalogueProduct'=> Product::all()
        ]);
    }

     /**
     * catalogue de tous les produits de la plateforme.
     */

    public function catalogueProduct() {
        return view('catalogue.products.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function liste()
    {
     // Logique pour récupérer les données à renvoyer via AJAX
         $data = "Contenu à renvoyer";
         return view('requete', compact('data'));
    }
}
