<?php

namespace App\Livewire;


use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Models\Image as ModelsImage;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class EditPrdouct extends Component
{
    use WithFileUploads;
    public $slug;
    public $productSelected ;
    public $vproductImage;
    public $allCategories;

    public $images = [], $title, $description, $marque_id, $prix, $boutique_id, $mode = true, $boutique, $search, $category_id;

    public function mount($slug) {
     $this->productSelected = Product::where('slug', $slug)->first();
     $this->title = $this->productSelected->title;
     $this->category_id = $this->productSelected->category_id;
     $this->prix = $this->productSelected->prix;
     $this->description = $this->productSelected->description;
     $this->vproductImage = ModelsImage::where('product_id', $this->productSelected->id)->get();
     $this->allCategories = Category::all();
    }

    public function update() {

        foreach($this->images as $photo) {
            $filename = $photo->getClientOriginalName();
            $img = Image::make($photo);
            $img->resize(600, 600)->save(public_path('s3/product/'.$filename));
               ModelsImage::create([
                    'image' =>$filename,
                    'product_id' => $this->productSelected->id
                ]);
            }
        $product =  Product::where('id', $this->productSelected->id)->update([
            'title'=> $this->title,
            'slug'=> Str::slug($this->title),
            'description'=> $this->description,
            'marque_id' => 1,
            'category_id' => $this->category_id,
            'prix' =>  $this->prix,
            'view' =>1,
        ]);

        $this->reset();
        return redirect()->route('gestion.boutique');

    }


    public function removeImage($id) {
        $imageproduct = ModelsImage::where('id', $id)->first();

        if(!is_null($imageproduct) && !empty($imageproduct))
        {
            $path = "s3/product/".$imageproduct->image;
            if(file_exists($path)) {
              File::delete($path);
            }
        }
        $imageproduct->delete();
        return redirect()->route('edit.product', ['slug' =>$this->productSelected->slug]);

    }




    public function render()
    {
        return view('livewire.edit-prdouct', [

        ])->extends('dashboards.master')->section('master');
    }
}
