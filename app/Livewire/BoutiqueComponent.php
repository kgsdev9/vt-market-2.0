<?php

namespace App\Livewire;

use App\Models\Marque;
use App\Models\Product;
use Livewire\Component;
use App\Models\Boutique;
use App\Models\Image;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
;

class BoutiqueComponent extends Component
{
    use WithFileUploads;

    public $images = [], $title, $description, $marque_id, $prix, $boutique_id, $mode = true, $boutique;





    public function displayForm() {
        return $this->mode = false;
    }

    public function store() {
        $product =  Product::create([
             'title'=> $this->title,
             'slug'=> Str::slug($this->title),
             'description'=> $this->title,
             'marque_id' => $this->marque_id,
             'prix' =>  $this->prix,
             'view' =>1,
             'boutique_id'=> $this->boutique->id
         ]);
         foreach($this->images as $image) {
             Image::create([
                 'image' =>$image->store('public/product/images'),
                 'product_id' => $product->id
             ]);
         }
         return redirect()->route('gestion.boutique');
     }

        public function remove()  {
            $this->images = [];

        }

    public function render()
    {
        $this->boutique =  Boutique::where('user_id', Auth::user()->id)->first();

        return view('livewire.boutique-component', [
        'boutique'=> $this->boutique,
        'allProducts' => Product::where('boutique_id',  $this->boutique?->id)->get(),
        'allMarques'=>  Marque::all()
        ]);
    }
}
