<?php

namespace App\Services ;

use App\Repositories\CountryRepository;

class   CountryService {

public $countryRepository ;

public function __construct(CountryRepository $countryRepository)
{
    $this->countryRepository = $countryRepository ;
}

public function all() {
    return $this->countryRepository->all();
}

}
