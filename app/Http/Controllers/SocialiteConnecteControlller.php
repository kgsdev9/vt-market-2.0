<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialiteConnecteControlller extends Controller
{
    protected $providers = [ "google", "github", "facebook" ];

   public function redirect(Request $request) {
    $provider = $request->provider;

    if (in_array($provider, $this->providers)) {
        return Socialite::driver($provider)->redirect(); // On redirige vers le provider
    }
    abort(404); // Si le provider n'est pas autorisé

  }




}
