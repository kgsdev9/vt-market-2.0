<?php

namespace App\Http\Controllers\Auth;

use App\Models\City;
use App\Models\User;
use App\Models\Country;
use App\Traits\GiveRole;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    public function store(Request $request) {
        $data = $request->all();
        $password = "password";
        $name = "VTP-VENDEUR". rand(1000, 45000);
       $user =  User::create([
            'name' => $name,
            'role_id' => $this->giveRoleVendors(),
            'email' => $data['email'],
            'password' => Hash::make($password),
        ]);

        Auth::login($user);
        return redirect()->route('home');
    }


    public function confirmatedAcompteSeller() {

    }




}
