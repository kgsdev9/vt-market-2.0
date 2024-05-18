<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\User;
use App\Models\Country;
use App\Models\Boutique;
use App\Traits\GiveRole;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\VendeurRegister;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class VendeurRegisterController extends Controller
{
    use GiveRole;

    /**
     * Display a listing of the resource.

     * Show the form for creating a new resource.
     */
    public function index()
    {

        $boutique = Boutique::where('user_id', Auth::user()->id)->first();
        $countryAll = Country::all();
        $allCities  = City::all();
        return view('gestion.index', compact('countryAll', 'allCities', 'boutique'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {

        // dd($request->all());
        $data = $request->all();

        $logo = $request->file('logo_boutique')->store('public/vendeur/logo');
        $piece = $request->file('logo_boutique')->store('public/vendeur/piece');

        $name = "VTP-VENDEUR". rand(1000, 45000);
        $user =  User::create([
            'name' => $name,
            'role_id' => $this->giveRoleVendors(),
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

       $boutique =  Boutique::create([
            'libelle_boutique'=> $data['libelle_boutique'],
            'slug'=> Str::slug( $data['libelle_boutique']),
            'nom_vendeur'=> $data['nom_vendeur'],
            'prenom_vendeur'=> $data['prenom_vendeur'],
            'description'=> $data['description'],
            'telephone'=>$data['telephone'],
            'contact'=> $data['contact'],
            'logo_boutique'=> $logo,
            'piece'=> $piece,
            'city_id' => $data['city_id'],
            'country_id' =>  $data['country_id'],
            'adresse' =>$data['adresse'],
            'user_id' => $user->id,

        ]);

        Auth::login($user);

        DB::table('users')
        ->where('id', '=', Auth::user()->id)
        ->update(['owner_id' => $boutique->id]);

        Alert::success('Bienvenue', 'Votre compte a été crée avec succes RDV sur votre espace pour renseigner vos informations et gerer votre boutique');
        return redirect()->route('dashboard');
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $boutiqueUser = Boutique::find($id);

        // dd($boutiqueUser);
        $data=  $request->input();

        $logo= "";
        $piece= "";
        if(is_null($request->file('logo_boutique')) ) {
            $logo = $boutiqueUser->logo_boutique;
        }else {
            $logo = $request->file('logo_boutique')->store('public/vendeur/logo');
        }

        if(is_null($request->file('piece')) ) {
            $piece = $boutiqueUser->piece;
        }else {
            $piece = $request->file('piece')->store('public/vendeur/piece');
        }

        $boutiqueUser->update([
            'libelle_boutique'=> $data['libelle_boutique'],
            'slug'=> Str::slug( $data['libelle_boutique']),
            'nom_vendeur'=> $data['nom_vendeur'],
            'prenom_vendeur'=> $data['prenom_vendeur'],
            'description'=> $data['description'],
            'telephone'=>$data['telephone'],
            'contact'=> $data['contact'],
            'logo_boutique'=> $logo,
            'piece'=> $piece,
            'city_id' =>  $request->city_id,
            'country_id' =>  $request->country_id,
            'adresse' =>$data['adresse'],
        ]);

        // dd($boutiqueUser);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */

}
