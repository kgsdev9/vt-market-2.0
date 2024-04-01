<?php

namespace App\Http\Controllers;
use App\Mail\SendOrderEmail;
use App\Services\CommandeService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class PaymentNotificationController extends Controller
{
    protected $commandeService ;
    public function __construct(CommandeService $commandeService)
    {
        $this->commandeService = $commandeService;
    }

    public function successFullPayment() {
      $commande =   $this->commandeService->updateSuccessStatusPayment();
      Mail::to(['kgsdev8@gmail.com', 'vtp.sas.france@gmail.com', Auth::user()->email])->send(new SendOrderEmail($commande));
        return view('notifications.Payments.sucess');
    }

    public function failedPayment()
    {
        $commande =  $this->commandeService->updateFailledStatusPayment();
        return view('notifications.Payments.failled', [
        ]);
    }

    public function cancelPayment()
    {
        return view('notifications.Payments.cancel');
    }
}
