<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Traits\WithProduct;

class CatalogueProduct extends Component
{

    use WithProduct;
    
    public $category = "" ;
    public $products;

    public function render()
    {

       $product = Product::query();

        if($this->category != "") {

            $product->where('category_id', '=', $this->category);
        }

        $categories  = Category::all();


        return view('livewire.catalogue-product',  [
            'allProducts'=> $product->get(),
            'allCategories'=> $categories,
        ]);
    }
}
