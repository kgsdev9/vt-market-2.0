<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\PaymentAdresse;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PaymentRequest;

class PaymentController extends Controller
{
    protected $notificationPayment ;

    public function __construct(PaymentNotificationController $notificationPayment)
    {
        $this->notificationPayment = $notificationPayment;
    }

    public function convertionAmount(int $value) {
       return ($value *  655);
    }

    public function initialisePayment(PaymentRequest $request)  {
        $customerData =   PaymentAdresse::where('id', $request->adresse_id)->first();
        $carts = session()->get('cart');
       $commande =  Commande::create([
            'reference'=>rand(1300, 4000),
            'price_delivry'=> 50,
            'user_id'=>Auth::user()->id,
            'paymentadresse_id'=>$customerData->id,
        ]);
        foreach($carts as $cart){
            $commande->products()->attach( $cart['product_id'],
               [
                'quantity'=>$cart['quantity'],
                'total'=>$cart['prix']*$cart['quantity']
               ]);
         };
            $data = array(
                'merchantId' => "PP-F2197",
                'amount' => $this->convertionAmount($request->amount),
                'description' => 344,
                'channel' => $request->paypalMethod,
                'countryCurrencyCode' => "952",
                'referenceNumber' => "REF-".time(),
                'customerEmail' => Auth::user()->email,
                'customerFirstName' => $customerData->fullname,
                'customerLastname' => $customerData->fullname,
                'customerPhoneNumber' => $customerData->contact,
                'notificationURL' => route('payment.sucess'),
                'returnURL' => route('failled.payment'),
                'returnContext' => '',
            );
            $data = json_encode($data);
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://www.paiementpro.net/webservice/onlinepayment/init/curl-init.php");
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8'));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, FALSE);
            curl_setopt($ch, CURLOPT_POST, TRUE);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
            $response = curl_exec($ch);
            $obj = json_decode($response);
            $urlPayement = $obj->url ;
            return redirect()->to($urlPayement);
            // curl_close($ch);

        }


}
