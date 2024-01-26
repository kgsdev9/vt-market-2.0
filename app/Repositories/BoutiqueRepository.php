<?php
namespace App\Repositories ;

use App\Models\Boutique;

class   BoutiqueRepository {

public $boutique ;

public function __construct(Boutique $boutique)
{
    $this->boutique = $boutique ;
}

public function count() {
    return $this->boutique->count();
}


}
