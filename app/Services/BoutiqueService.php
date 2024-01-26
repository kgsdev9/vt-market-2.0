<?php

namespace App\Services ;

use App\Repositories\BoutiqueRepository;


class BoutiqueService  {

    protected $boutiqueRepository;

    public function __construct(BoutiqueRepository $boutiqueRepository)
    {
        $this->boutiqueRepository = $boutiqueRepository ;
    }

    
    public function count() {
           return  $this->boutiqueRepository->count();
    }

}
