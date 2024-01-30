<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaymentAdresse;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\PaymentAdresseRequest;

class AdresseController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(PaymentAdresseRequest $request)
    {
      $payement =   PaymentAdresse::create([
            'fullname'=> $request->fullname,
            'country_id'=>$request->country_id,
            'city_id' => $request->city_id,
            'adresse' => $request->adresse,
            'contact' => $request->contact,
            'user_id' =>Auth::user()->id,
        ]);
        Alert::success('Super', 'Adresse ajoutée avec sucess');
        return redirect()->back();
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

        $payment = PaymentAdresse::find($id);
        $payment->delete();
        Alert::success('Oups', 'Adresse suprimée avec succes');
        return redirect()->back();
    }
}
