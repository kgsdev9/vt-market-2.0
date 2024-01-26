<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Boutique;
use App\Traits\WithProduct;

class SingleBoutiqueSellerComponent extends Component
{
    use WithProduct;

    public $id , $boutique, $productStore;
    public function mount($id) {
        $this->boutique = Boutique::where('id', $id)->first();
        $this->productStore = Product::where('boutique_id', $this->boutique->id)->get() ?? [];
    }

    public function render()
    {
        return view('livewire.single-boutique-seller-component')
        ->extends('layouts.layout')->section('content');
    }
}
