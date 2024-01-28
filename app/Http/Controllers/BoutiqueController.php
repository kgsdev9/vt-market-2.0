<?php

namespace App\Http\Controllers;

class BoutiqueController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function __invoke()
    {
        return view('boutique.index');
    }
}
