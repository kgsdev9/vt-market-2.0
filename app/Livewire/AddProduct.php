<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Boutique;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Models\Image as ModelsImage;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class AddProduct extends Component
{
    use WithFileUploads;
    use WithPagination;
    use LivewireAlert;

    public $images = [], $title, $description, $marque_id, $prix, $boutique, $search, $category_id;


    public function store()
    {

        $this->boutique =  Boutique::where('user_id', Auth::user()->id)->first();

        // dd($this->description);
        // $this->validate();
        $product =  Product::create([
             'title'=> $this->title,
             'slug'=> Str::slug($this->title),
             'description'=> $this->description,
             'marque_id' => 1,
             'category_id' => $this->category_id,
             'prix' =>  $this->prix,
             'view' =>1,
             'boutique_id'=> $this->boutique->id ?? 1
         ]);
            foreach($this->images as $photo) {
                $filename = $photo->getClientOriginalName();
                $img = Image::make($photo);
                $img->resize(600, 600)->save(public_path('s3/product/'.$filename));
                    ModelsImage::create([
                        'image' =>$filename,
                        'product_id' => $product->id
                    ]);
                }
                $this->alert('success', 'Produit ajouté au panier');
                return redirect()->route('gestion.boutique');

     }


    public function render()
    {
        return view('livewire.add-product', [
            'allCategories'=> Category::all()
        ])
               ->extends('dashboards.master')
               ->section('master');
    }
}
