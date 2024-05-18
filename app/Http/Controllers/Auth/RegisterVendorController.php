<?php

namespace App\Http\Controllers\Auth;

use App\Models\City;
use App\Models\User;
use App\Models\Country;
use App\Traits\GiveRole;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterVendorRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class RegisterVendorController extends Controller
{

    use GiveRole;

    public function __construct()
    {
        $this->middleware('guest');
    }



    public  function registerFormVendor() {
        return view('auth.sellers.register', [
            'countryAll'=> Country::all(),
            'allCities' => City::all()
        ]);
    }

    


    public function confirmatedAcompteSeller() {

    }




}
