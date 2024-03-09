<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Livraison;
use App\Models\Tlivraison;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DelivryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

       $livraison =  DB::select("SELECT slug,  CONCAT(nom, '', prenom) as client, country_id, reference, status as statut, telephone, adresse  from livraisons  as query inner join tlivraisons where query.id = tlivraisons.livraison_id  AND user_id like ".Auth::user()->id." ");
    //    dd($livraison);

        return view('clients.livraisons.maliste', compact('livraison'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('livraisons.create' , [
            'allCities'=> City::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        dd($request->all());


        $designations = $request->input('designation');
        $prixes = $request->input('poids');
        $livraison =  Livraison::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'contact' => $request->contact,
            'adresse' => $request->adresse,
            'country_id' =>1,
            'reference'=> rand(1000, 5000),
            'user_id'=> Auth::user()->id
        ]);

        foreach ($designations as $key => $designation) {
            Tlivraison::create([
                'designation' => $designation,
                'poids' => $prixes[$key],
                'livraison_id'=>$livraison->id
            ]);
        }
        dd('enregistrés');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
