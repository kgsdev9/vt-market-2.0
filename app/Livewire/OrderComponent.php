<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\PaymentAdresse;
use Illuminate\Support\Facades\Auth;


class OrderComponent extends Component
{
    public function render()
    {
        return view('livewire.order-component', [
            'allAdresseUser' => PaymentAdresse::where('user_id', Auth::user()->id)->get()
        ]);
    }


}

