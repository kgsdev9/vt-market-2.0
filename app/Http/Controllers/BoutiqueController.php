<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoutiqueController extends Controller
{
    public function __invoke()
    {

   


        return view('boutique.index');
    }
}
