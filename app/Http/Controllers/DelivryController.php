<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Tlivraison;
use Illuminate\Http\Request;

class DelivryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $designations = $request->input('designation');
        $prixes = $request->input('poids');

        foreach ($designations as $key => $designation) {
            Tlivraison::create([
                'designation' => $designation,
                'poids' => $prixes[$key],
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
