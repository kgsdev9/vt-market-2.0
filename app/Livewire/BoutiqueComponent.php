<?php

namespace App\Livewire;


use App\Models\Product;
use Livewire\Component;
use App\Models\Boutique;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use App\Models\Image as ModelsImage;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class BoutiqueComponent extends Component
{
    use WithFileUploads;
    use WithPagination;
    use LivewireAlert;

    protected $paginationTheme = 'bootstrap';

    public $images = [], $title, $description, $marque_id, $prix, $boutique_id, $mode = true, $boutique, $search, $category_id;

    protected $rules =  [
        'title' => 'required',
        'description' => 'required',
        'category_id' => 'required',
        'prix' => 'required|integer',
        'images' => 'required',
    ];

    public function resetField() {
        $this->title = "";
        $this->prix = "";
        $this->description = "";
        $this->category_id = "";
        $this->images = [];
    }

    public function displayForm() {
        return $this->mode = false;
    }

    public function store()
    {
        $this->validate();
        $product =  Product::create([
             'title'=> $this->title,
             'slug'=> Str::slug($this->title),
             'description'=> $this->description,
             'marque_id' => 1,
             'category_id' => $this->category_id,
             'prix' =>  $this->prix,
             'view' =>1,
             'boutique_id'=> $this->boutique->id
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
                $this->resetField();
                $this->mode = true;
     }

     public function delete($id) {
      $images=   ModelsImage::where('product_id', $id)->get();
      foreach($images as $image) {
       $image =  Storage::url($image);
       if($image) {
        Storage::delete($image);
       }
      }
      Product::find($id)->delete();
      $this->mode = true;
     }

        public function remove()  {
            $this->images = [];
        }





        public function render()
    {
        $this->boutique =  Boutique::where('user_id', Auth::user()->id)->first();
        return view('livewire.boutique-component', [
        'boutique'=> $this->boutique,
        'allCategories' => Category::all(),
        'allProducts' => Product::where('boutique_id',  $this->boutique?->id)->orderByDesc('created_at')->where('title', 'like', '%'.$this->search.'%')->paginate(10)
        ]);
    }
}
