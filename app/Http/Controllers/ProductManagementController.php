<?php

namespace App\Http\Controllers;


class ProductManagementController extends Controller
{
    public function __invoke()
    {
        return view('dashboards.products.liste');
    }
}
