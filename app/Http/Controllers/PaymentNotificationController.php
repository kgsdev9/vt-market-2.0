<?php

namespace App\Http\Controllers;
use App\Services\CommandeService;


class PaymentNotificationController extends Controller
{

    protected $commandeService ;

    public function __construct(CommandeService $commandeService)
    {
        $this->commandeService = $commandeService;
    }

    public function successFullPayment() {
        $this->commandeService->updateSuccessStatusPayment();
        return view('notifications.Payments.sucess');
    }

    public function failedPayment() {
         $this->commandeService->updateFailledStatusPayment();
        return view('notifications.Payments.failled', [
        ]);
    }

    public function cancelPayment()  {

        return view('notifications.Payments.cancel');
    }
}
