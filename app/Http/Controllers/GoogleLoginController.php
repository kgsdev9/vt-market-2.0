<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\WelcomeUserApp;
use App\Traits\GiveRole;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Laravel\Socialite\Facades\Socialite;
use RealRashid\SweetAlert\Facades\Alert;
use App\Notifications\WelcomeUserNotification;

class GoogleLoginController extends Controller
{

    use GiveRole;


    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->stateless()->user();
        $user = User::where('email', $googleUser->email)->first();
        if(!$user)
        {
            $user = User::create([
             'name' => $googleUser->name,
             'role_id' => $this->giveRoleUser(),
             'email' => $googleUser->email,
              'password' => \Hash::make(rand(100000,999999)
            )]);
        }
        Auth::login($user);
        $delay = now()->addMinutes(1);
        $user->notify((new WelcomeUserApp())->delay($delay));
        Alert::success('Bienvenue', 'Authentification reussie');
        return redirect(RouteServiceProvider::HOME);

    }
}
