<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Boutique;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\PaymentAdresse;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use Intervention\Image\ImageManagerStatic as Image;

class HomeController extends Controller
{

    public function renitialiseImage(Request $request) {

        if($request->paypalMethod == "paypal") {
            dd('paypal');
        } elseif($request->paypalMethod == "card") {
            dd('card');
        }


        // notify()->success('Laravel Notify is awesome!');
        // return redirect()->route('home');
;
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome', [
            'allProducts'=> Product::all(),
            'allCategories'=> Category::all()
        ]);
    }

    public function allBoutique() {
        return view('home.boutique', [
            'allSellers'=> Boutique::all()
        ]);
    }

    public function boutiqueSeller($id) {
        $boutique = Boutique::where('id', $id)->first();
     $product  =  Product::where('boutique_id',$boutique->id)->get();
        return view('home.singleBoutique', [
            'boutique'=>  $boutique,
            'productStore'=>  $product
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
