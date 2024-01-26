<?php

namespace App\Livewire;

use App\Models\Commande;
use Livewire\Component;

class SuiviComponent extends Component
{
    //   3863
    public $reference, $commande;

   public function statusOrder() {
    $this->commande = Commande::where('reference', $this->reference)->first();
    if($this->commande) {
        return $this->commande;
    }
    session()->flash('message', 'Post successfully updated.');

   }

    public function render()
    {
        return view('livewire.suivi-component', [
            'commande' =>  $this->commande
        ]);
    }
}
