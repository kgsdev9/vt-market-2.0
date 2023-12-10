<?php

namespace App\Http\Controllers;

use App\Models\VendeurRegister;
use Illuminate\Http\Request;

class VendeurRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function registerSeller()
    {
        return view('sellers.register');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function index()
    {
        return view('gestion.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(VendeurRegister $vendeurRegister)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VendeurRegister $vendeurRegister)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, VendeurRegister $vendeurRegister)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VendeurRegister $vendeurRegister)
    {
        //
    }
}
