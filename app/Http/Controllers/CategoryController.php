<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function  __invoke()
    {
        return view('dashboards.categories.index');
    }
}
