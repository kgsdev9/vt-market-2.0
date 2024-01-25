<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentNotificationController extends Controller
{
    public function successFullPayment() {
        return view('notifications.Payments.sucess');
    }

    public function failedPayment() {
        return view('notifications.Payments.failled');
    }

    public function cancelPayment()  {
        return view('notifications.Payments.cancel');
    }
}
