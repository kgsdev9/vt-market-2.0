<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class CardProduct extends Component
{
    public $readyToLoad = false;

    public function loadPosts()
    {
        $this->readyToLoad = true;
    }


    public function render()
    {
        return view('livewire.card-product', [
            'latestProduct' => $this->readyToLoad
                ? Product::all()
                : [],
        ]);

    }
}
