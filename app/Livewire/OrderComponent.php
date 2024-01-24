<?php

namespace App\Livewire;

use App\Jobs\AdminiNotificationJob;
use Livewire\Component;
use App\Models\Commande;
use App\Mail\SendOrderEmail;
use App\Models\PaymentAdresse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class OrderComponent extends Component
{

    public $adresseSelected, $reference, $delivry_status, $price_delivry, $user_id, $amount = 0  ;


    public function  store() {
        $this->getSommeCart();
        return redirect()->back();
    }

    public function getSommeCart()  {
        $carts = session()->get('cart');
        foreach( (array) $carts as $cart )  {
            $this->amount += $cart['prix']*$cart['quantity'];
        }
       $commande =  Commande::create([
            'reference'=>244,
            'price_delivry'=> 50,
            'user_id'=>Auth::user()->id,
            'paymentadresse_id'=> $this->adresseSelected,
        ]);
        foreach($carts as $cart){
            $commande->products()->attach( $cart['product_id'],
               [
                'quantity'=>$cart['quantity'],
                'total'=>$cart['prix']*$cart['quantity']
               ]);
         };
        Mail::to(Auth::user()->email)->queue(new SendOrderEmail($commande));
        AdminiNotificationJob::dispatch($commande)->delay(now()->addSecond(10));
    }


    public function render()
    {
        return view('livewire.order-component', [
            'allAdresseUser' => PaymentAdresse::where('user_id', Auth::user()->id)->get()
        ]);
    }


}

