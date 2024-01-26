<?php
namespace App\Repositories ;

use App\Models\Commande;
use App\Mail\SendOrderEmail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class   CommandeRepository {

public $commande ;


public function __construct(Commande $commande)
{
    $this->commande = $commande ;
}
public function single($id) {
    return $this->commande
                ->where('id', $id)
                ->first();
}

public function collecteOders()  {
    if(Auth::user()->role->nom == "user") {
        return $this->commande->where('user_id', Auth::user()->id)
                             ->get();
    } else  {
        return $this->commande->count();
    }
}


public function allOrdersUser() {
    return $this->commande
                ->where('user_id', Auth::user()->id)
                ->paginate(10);
}

public function updateFailledStatusPayment() {
    $lastPaymentUser =  $this->commande->where('user_id', Auth::user()->id)
                                        ->orderByDesc('created_at')
                                        ->first();
        if($lastPaymentUser) {
            $lastPaymentUser->update([
                    'status' =>'refuse'
                    ]);
        }
}

public function updateSuccessStatusPayment() {
    $lastPaymentUser =  $this->commande->where('user_id', Auth::user()->id)
                                        ->orderByDesc('created_at')
                                        ->first();
        if($lastPaymentUser) {
            $lastPaymentUser->update([
                    'status' =>'validee'
                    ]);
        }
 Mail::to(Auth::user()->email)->queue(new SendOrderEmail($lastPaymentUser));
 return $lastPaymentUser;
}

public function all() {
    return $this->commande->all();
}

public function countOrders()  {
    if(Auth::user()->role->nom == "user") {
        return $this->commande->where('user_id', Auth::user()->id)
                             ->count();
    } else  {
        return $this->commande->count();
    }
}

public function   getSommeTotalOrders() {
    return   DB::table('order_product')->sum('total');
}


}
