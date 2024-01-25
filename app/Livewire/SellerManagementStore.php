<?php

namespace App\Livewire;

use App\Models\Boutique;
use Livewire\Component;

class SellerManagementStore extends Component
{
    public $search  = "";
    public function render()
    {
        return view('livewire.seller-management-store', [
            'allStoreSellers'=> Boutique::where('libelle_boutique', 'like', '%'.$this->search.'%')->paginate(10)
        ]);
    }
}
