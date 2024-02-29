<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Traits\WithProduct;

class DetailProduct extends Component
{
    use WithProduct;

    public $slug ,$singleProduct;

    public function mount($slug) {
        $this->singleProduct = Product::where('slug', $slug)->first();



    }

    public function render()
    {
        $url = url()->current();
        
        $partage = \Share::page(
            $url
         )
         ->facebook()
         ->twitter()
         ->linkedin()
         ->telegram()
         ->whatsapp()
         ->reddit();
        return view('livewire.detail-product', [
            'partage'=> $partage
        ])->extends('layouts.layout')->section('content');
    }
}
