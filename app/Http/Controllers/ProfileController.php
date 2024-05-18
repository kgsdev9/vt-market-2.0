<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('clients.profil.edit');
    }


    public function update(Request $request)
    {
            $validated = $request->validate([
                'email' => 'required|email',
                'name' => 'required',
            ]);

        $password = "";
        $users  = User::where('id', Auth::user()->id)->first();
        if(is_null($request->passowrd) || empty($request->passowrd))
        {
           $password =  $users->password;
        }else
        {
           $password = Hash::make($request->passowrd);
        }

       $emailexiste=  User::where('email', $request->email)->exists() ;

        User::where('id', Auth::user()->id)->update([
            'name'=> $request->name,
            'email' => $request->email,
            'password'=> $password
        ]);

        Alert::success('Super', 'Profile mis à jour avec succes');

        return redirect()->back();
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
