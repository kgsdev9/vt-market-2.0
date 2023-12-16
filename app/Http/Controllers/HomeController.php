<?php

namespace App\Http\Controllers;

use App\Models\Boutique;
use App\Models\Category;
use App\Models\Product;
use App\Models\Vendeur;
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


    public function boutiqueSeller($id, Request $request) {


        return view('home.singleBoutique', [
            'sellerStore'=> Boutique::where('vendeur_id', $id)->first()
        ]);
    }
     /**
     * catalogue de tous les produits de la plateforme.
     */

    public function catalogueProduct() {
        return view('catalogue.products.index');
    }

    public function allBoutique() {
        return view('home.boutique', [
            'allSellers'=> Vendeur::all()
        ]);
    }


    public function categoryProduct($slug) {

       $category =  Category::where('slug', $slug)->first();
        return view('home.categoryproduct', $category);
    }

}
