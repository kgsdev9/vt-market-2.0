<?php

namespace App\Traits  ;

use App\Models\Role;

trait   GiveRole  {

    protected $role;

    public function __construct(Role $role) {
        $this->role =  $role;
    }


    public function giveRoleUser() {
        $role = Role::where('nom', 'user')->first();
        return $role->id;
    }

    public function giveRoleVendors() {
        $role = Role::where('nom', 'vendeur')->first();
       return $role->id;
    }


}
