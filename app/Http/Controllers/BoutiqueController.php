<?php

namespace App\Http\Controllers;

class BoutiqueController extends Controller
{
    public function __invoke()
    {
        return view('boutique.index');
    }
}
