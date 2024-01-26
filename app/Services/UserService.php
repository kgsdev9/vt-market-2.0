<?php

namespace App\Services ;

use App\Repositories\BoutiqueRepository;

class UserService  {

    protected $userRepository;

    public function __construct(BoutiqueRepository $userRepository)
    {
        $this->userRepository = $userRepository ;
    }

    public function count() {
           return  $this->userRepository->count();
    }

}
