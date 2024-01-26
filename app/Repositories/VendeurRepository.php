<?php
namespace App\Repositories ;

use App\Models\Boutique;


class   VendeurRepository {

public $vendeur ;


public function __construct(Boutique $vendeur)
{
    $this->vendeur = $vendeur ;
}

public function allSellers() {
    return $this->vendeur->orderBy('created_at')->get();
}




}
