<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;

class CatalogueProduct extends Component
{

    public $selectedCategories = [];


    public function render()
    {


        $products = Product::when(count($this->selectedCategories), function ($query) {
            return $query->whereIn('cats', $this->selectedCategories);
        })->get();

        $categories  = Category::all();

        return view('livewire.catalogue-product',  [
            'allProducts'=>  $products,
            'allCategories'=> $categories
        ]);
    }
}
