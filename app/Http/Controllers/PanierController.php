<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanierController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     
    public function __invoke()
    {
        return view('panier.cart');
    }

}
