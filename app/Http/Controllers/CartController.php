<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class CartController extends Controller
{
    public function dd (){
        dd(Session::forget('cart'));
        dd(Session::get('cart'));
    }

    public function cart() {
        return view('paniers.index');
    }
    public function addToCart($id, Request $request)  {

        if($request->header('hx-request')) {
            $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "title" => $product->title,
                "quantity" => 1,
                "prix" => $product->prix,
                "product_id" => $product->id,
            ];
        }
        session()->put('cart', $cart);
        Alert::success('Success', 'Produit ajoute au panier avec success');

        }
    }
}
