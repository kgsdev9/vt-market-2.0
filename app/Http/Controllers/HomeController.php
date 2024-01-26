<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Boutique;
use App\Models\PaymentAdresse;
use App\Services\BoutiqueService;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void

     * @return \Illuminate\Contracts\Support\Renderable
     */

     protected $boutiqueService;

     public function __construct(BoutiqueService $boutiqueService)
     {
        $this->boutiqueService = $boutiqueService;
     }

    public function index()
    {
        return view('welcome', [

        ]);
    }

    public function allBoutique() {
        return view('home.boutique', [
        ]);
    }

    public function singleProduct($slug) {

        $currentUrl = url()->current();
        $lienPartage = \Share::page(
           $currentUrl
        )
        ->facebook()
        ->twitter()
        ->linkedin()
        ->telegram()
        ->whatsapp()
        ->reddit();

            return  view('home.products.detail', [
                'singleProduct'=> Product::where('slug', $slug)->first(),
                'partage' => $lienPartage
            ]);
    }

    public function sommaryOrders() {

        return view('home.payment.index', [
            'allAdresseUser' => PaymentAdresse::where('user_id', Auth::user()->id)->get(),
        ]);
    }
}
