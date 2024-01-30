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

    public function store(RegisterVendorRequest $request) {
        $data = $request->all();
        $name = "VTP-VENDEUR". rand(1000, 45000);
        $user =  User::create([
            'name' => $name,
            'role_id' => $this->giveRoleVendors(),
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        Auth::login($user);
        Alert::success('Bienvenue', 'Votre compte a été crée avec succes RDV sur votre espace pour renseigner vos informations et gerer votre boutique');
        return redirect()->route('dashboard');
    }


    public function confirmatedAcompteSeller() {

    }




}
