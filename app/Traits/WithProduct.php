<?php

namespace App\Traits  ;

use App\Models\Image;
use App\Models\Product;

trait   WithProduct  {

//     @foreach ($product->images  as $article)
//     @if($article->id > 1)
//     <img src="{{Storage::url($article->image)}}" alt="Article" class="card-img-top"></a>
//        @break
//     @endif
//    @endforeach

    public function productAddCart($id) {
      $product = Product::findOrFail($id);
      $images =   Image::where('product_id', $product->id)->get();
        foreach($images as $productImage) {
            if($productImage->id > 1) {
                $productImage->image;
            }
            break;
        }
        $cart = session()->get('cart', []);
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "title" => $product->title,
                "quantity" => 1,
                "prix" => $product->prix,
                "image" => $productImage->image,
                "product_id"  =>$product->id,
            ];
        }
        session()->put('cart', $cart);
        // $this->dispatch('alert',[
        //     'type'=>'success',
        //     'message'=>"Produit Ajouté à votre commande"
        // ]);
        // $this->emit('updateCartCount');
    }

    public function increment($id) {
        $cart = session()->get('cart', []);
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        }
        // $this->dispatchBrowserEvent('alert',[
        //     'type'=>'success',
        //     'message'=>"Quantitté mise à jour"
        // ]);
        session()->put('cart', $cart);
    }

    public function delete($id) {
        $cart = session()->get('cart');
        unset($cart[$id]);
        session()->put('cart', $cart);
        // $this->emit('updateCartCount');
    }


    public function decrement($id) {
        $cart = session()->get('cart', []);
        if(isset($cart[$id])) {
            if($cart[$id]['quantity'] >1 ) {
                $cart[$id]['quantity']--;
                session()->put('cart', $cart);
                $this->dispatch('alert',[
                    'type'=>'success',
                    'message'=>"Quantité mise à jour"
                ]);
            } else {
                //messsage
            }

        }
    }



}
