<?php
namespace App\Repositories ;

use App\Models\User;

class   UserRepository {

public $user ;

public function __construct(User $user)
{
    $this->user = $user ;
}

public function count() {
    return $this->user->count();
}


}
