<?php

namespace App\Livewire;

use App\Models\Marque;
use App\Models\Product;
use Livewire\Component;
use App\Models\Boutique;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use App\Models\Image as ModelsImage;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
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
             'marque_id' => 1,
             'prix' =>  $this->prix,
             'view' =>1,
             'boutique_id'=> $this->boutique->id
         ]);
            foreach($this->images as $photo) {
                $path =   $photo->hashName('public/product/images');
                $image = Image::make($photo)->fit(825, 600);
                Storage::put($path, (string)$image->encode());
                    ModelsImage::create([
                        'image' =>$path,
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
        'allProducts' => Product::where('boutique_id',  $this->boutique?->id)->get()
        ]);
    }
}
