<?php

namespace App\Services ;

use App\Repositories\CityRepository;

class   CityService {

public $cityRepository ;

public function __construct(CityRepository $cityRepository)
{
    $this->cityRepository = $cityRepository ;
}

public function all() {
    return $this->cityRepository->all();
}

}
