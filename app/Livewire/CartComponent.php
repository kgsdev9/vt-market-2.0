<?php

namespace App\Livewire;

use App\Traits\WithProduct;
use Livewire\Component;

class CartComponent extends Component
{

    use WithProduct;
    public function render()
    {
        return view('livewire.cart-component');
    }
}
