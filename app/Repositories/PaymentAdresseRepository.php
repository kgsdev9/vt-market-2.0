<?php
namespace App\Repositories ;

use App\Models\PaymentAdresse;
use Illuminate\Support\Facades\Auth;

class   PaymentAdresseRepository {

public $paymentAdresse ;

public function __construct(PaymentAdresse $paymentAdresse)
{
    $this->paymentAdresse = $paymentAdresse ;
}

public function count() {
    return $this->paymentAdresse->count();
}

public function allAdressePayment() {
    return $this->paymentAdresse
                ->where('user_id', Auth::user()->id)
                ->get();
}


}
