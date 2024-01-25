<?php

namespace App\Services;

use App\Repositories\PaymentRepository;

class PaymentService
{

    protected $paymentAdresseRepository;

    public function __construct(PaymentRepository $paymentAdresseRepository)
    {
        $this->$paymentAdresseRepository = $$paymentAdresseRepository;
    }

    public function test() {
        return $this->paymentAdresseRepository->sin();
    }

    public function single($id) {
        return $this->paymentAdresseRepository->single();

    }


}
