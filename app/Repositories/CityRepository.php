<?php
namespace App\Repositories ;

use App\Models\City;

class   CityRepository {

public $city ;

public function __construct(City $city)
{
    $this->city = $city ;
}

public function all() {
    return $this->city->orderBy('nom')->get();
}


}
