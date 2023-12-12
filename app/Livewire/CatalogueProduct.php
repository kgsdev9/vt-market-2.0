<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Models\Marque;

class CatalogueProduct extends Component
{

    public $category = "" ;
    public $products;

    public function render()
    {

       $product = Product::query();


        if($this->category != "") {

            $product->where('category_id', '=', $this->category);
        }

        $categories  = Category::all();
        $marques = Marque::all();

        return view('livewire.catalogue-product',  [
            'allProducts'=> $product->get(),
            'allCategories'=> $categories,
            'allMarques'=>$marques
        ]);
    }
}
