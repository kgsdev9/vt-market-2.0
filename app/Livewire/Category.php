<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category as ModelCategory;

class Category extends Component
{
    public function render()
    {
        return view('livewire.category', [
            'categoris'=> ModelCategory::all()
        ]);
    }
}
