<?php

namespace App\Services ;

use App\Repositories\PaymentAdresseRepository;

class   PaymentAdresseService {

public $paymentAdresseRepository ;

public function __construct(PaymentAdresseRepository $paymentAdresseRepository)
{
    $this->paymentAdresseRepository = $paymentAdresseRepository ;
}

public function allAdressePayment() {
    return $this->paymentAdresseRepository->allAdressePayment();
}

}
