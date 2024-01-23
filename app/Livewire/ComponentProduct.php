<?php

namespace App\Livewire;

use Livewire\Component;

class ComponentProduct extends Component
{   
    public $images = [];

    
    public function render()
    {
        return view('livewire.component-product');
    }

    public function storeProduct() {
        $product =  Product::create([
             'title'=>"Samsung galaxy S3",
             'slug'=> Str::random(10),
             'description'=> "ce produit est cerrifié vtp",
             'category_id' => 1,
             'prix' => rand(100, 340),
             'view' =>1,
             'boutique_id'=> 1
         ]);
         foreach($this->images as $image) {
             Image::create([
                 'image' =>$image->store('public/product/images'),
                 'product_id' => $product->id
             ]);
         }
         return redirect()->route('product.management');
     }
 

     
}
