<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CityManagementController extends Controller
{
    public function __invoke()
    {
        return view('dashboards.city.index');
    }

}
