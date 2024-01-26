<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuiviController extends Controller
{
    /**
     * .
     */
    public function __invoke()
    {
        return view('suivi.suivi');
    }
}
