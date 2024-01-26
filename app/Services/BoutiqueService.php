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

    public function single($id)  {
        return $this->boutiqueRepository->single($id);
    }

    public function  getProductByBoutiqueId($id) {
        return $this->boutiqueRepository->getProductByBoutiqueId($id);
      }

}
