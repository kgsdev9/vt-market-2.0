<?php

namespace App\Livewire;

use App\Models\Product;
use App\Traits\WithProduct;
use Livewire\Component;

class CardProduct extends Component
{

    use WithProduct;

    
    public $readyToLoad = false;

    public function loadPosts()
    {
        $this->readyToLoad = true;
    }


    public function render()
    {
        return view('livewire.card-product', [
            'allProducts' => $this->readyToLoad
                ? Product::all()
                : [],
        ]);

    }
}
