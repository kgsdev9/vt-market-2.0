<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Traits\WithProduct;

class SearchComponent extends Component
{
    use WithProduct;


    public $search = '';






    public function render()
    {
        $allPrdouct =  Product::where('title','like','%'. $this->search. '%')->get();
        $allCategories =  Category::all();
        return view('livewire.search-component',[
            'allPrdouct' => $allPrdouct,
            'allCategories' =>$allCategories
        ]);
    }



}
