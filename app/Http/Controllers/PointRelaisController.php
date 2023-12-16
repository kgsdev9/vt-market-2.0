<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PointRelaisController extends Controller
{
     public function __invoke()
     {
        return view('dashboards.pointrelais.gestion');
     }
}
