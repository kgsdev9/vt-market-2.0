<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class SearchComponent extends Component
{
    public $search = "";

    public function render()
    {
        return view('livewire.search-component', [
            'product'=> Product::where('title','like','%'. $this->search. '%')->get()
        ]);
    }
}
