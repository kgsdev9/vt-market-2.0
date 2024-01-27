<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Mail\SendOrderEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class PaymentNotificationController extends Controller
{

    protected $orderStatusService ;

    public function __construct()
    {

    }


    public function successFullPayment() {
        $commande =  Commande::where('user_id', Auth::user()->id)
        ->orderByDesc('created_at')->first();
        $update= $commande->update([
        'status' =>'refuse'
        ]);


        return view('notifications.Payments.sucess');
    }

    
    public function failedPayment() {
        $commande =  Commande::where('user_id', Auth::user()->id)
                    ->orderByDesc('created_at')->first();
        $update= $commande->update([
            'status' =>'refuse'
        ]);

        return view('notifications.Payments.failled', [
            'singleOrderFalied' =>  $commande
        ]);
    }

    public function cancelPayment()  {

        return view('notifications.Payments.cancel');
    }
}
