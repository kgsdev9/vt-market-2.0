<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CountryManagementController extends Controller
{
    public function __invoke()
    {
        return view('dashboards.country.index');
    }
}
