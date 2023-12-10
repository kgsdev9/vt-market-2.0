<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;

class GestionProduct extends Component
{
    use WithFileUploads;
    public $title, $description, $image, $prix, $category_id;


    protected $rules = [
        'title'=> 'required',
        'description'=> 'required',
        'image' => 'required',
        'prix' => 'required',
        'category_id' => 'nullable'
    ];

    public function enregistrer() {
        $data = $this->validate() ;

        $image=$this->image->store('public/articles');

         Product::create([
            'title' => $this->title,
            'description' => $this->description,
            'prix' => $this->prix,
            'category_id' => $this->category_id,
            'image' => $image
         ]);
         dd('données enregistrés');
    }

    public function render()
    { 
        return view('livewire.gestion-product',[
            'allCategories'=> Category::all()
        ]);
    }
}
