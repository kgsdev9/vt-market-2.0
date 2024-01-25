<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define('is_seller', function (User $user) {
            return $user->role->nom == "vendeur";
        });

        Gate::define('is_administrateur', function (User $user) {
            return $user->role->nom == "admin";
        });


        Gate::define('register_boutique',function(User $user){
            return  $user->role->nom=='vendeur' && $user->owner_id !=NULL ;
          });



        Gate::define('is_admin',function(User $user){
            return  $user->role->nom=='admin' && $user->owner_id !=NULL ;
          });


    }
}
