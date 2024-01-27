<?php

namespace App\Traits  ;
use Jantinnerezo\LivewireAlert\LivewireAlert;

use App\Models\Image;
use App\Models\Product;

trait   WithProduct  {

    use LivewireAlert;

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

        $this->alert('success', 'Produit ajouté au panier');


        // $this->emit('updateCartCount');
    }

    public function increment($id) {
        $cart = session()->get('cart', []);
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        }
        $this->alert('success', 'Quantité mise à jour');
        session()->put('cart', $cart);

    }

    public function delete($id) {
        $cart = session()->get('cart');
        unset($cart[$id]);
        session()->put('cart', $cart);
        $this->alert('warning', 'produit supprimé');
        // $this->emit('updateCartCount');
    }


    public function decrement($id) {
        $cart = session()->get('cart', []);
        if(isset($cart[$id])) {
            if($cart[$id]['quantity'] >1 ) {
                $cart[$id]['quantity']--;
                session()->put('cart', $cart);
                $this->alert('success', 'Quantité mise à jour');
            } else {
                //messsage
            }

        }
    }

    public function shareProduct()  {
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
        return $lienPartage;
    }




}
