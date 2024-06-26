<?php

namespace App\Repositories;
use App\Models\PaymentAdresse;

class PaymentRepository
{
    public $paymentAdresse;

    public function __construct(PaymentAdresse $paymentAdresse)
    {
        $this->paymentAdresse = $paymentAdresse;
    }

    public function single($id) {
        return $this->paymentAdresse
                    ->where('id', $id)
                    ->first();
    }

}
