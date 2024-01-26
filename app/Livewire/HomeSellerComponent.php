<?php

namespace App\Livewire;

use App\Models\City;
use App\Models\Country;
use Livewire\Component;
use App\Models\Boutique;

class HomeSellerComponent extends Component
{
    public function render()
    {

        return view('livewire.home-seller-component', [
            'allSellers'=> Boutique::all(),
            'allcities' => City::all(),
            'allcountries'=> Country::all()
        ]);
    }
}
