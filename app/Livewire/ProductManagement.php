<?php

namespace App\Livewire;

use App\Models\City;
use App\Models\Image;
use App\Models\Country;
use App\Models\Product;
use App\Models\Vendeur;
use Livewire\Component;
use App\Models\Boutique;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class ProductManagement extends Component
{
    use WithFileUploads;
    //boutiques
    public $nom , $logo, $image_couverture, $city_id, $country_id, $adresse, $vendeur_id;

    //product//

    public $images = [];




    public function render()
    {
        return view('livewire.product-management',[
            'allCities'=> City::all(),
            'countryAll'=> Country::all(),
            'allSellers'=> Vendeur::all()
        ]);
    }

    public function registerStore() {

        $image=$this->logo->store('public/vendeur/logo');
        Boutique::create([
            'nom'=> $this->nom,
            'slug'=> $this->nom,
            'description'=> 'cette boutique est de vtp',
            'country_id'=> $this->country_id,
            'city_id' => $this->city_id,
            'adresse' => $this->adresse,
            'vendeur_id'=> $this->vendeur_id,
            'image_couverture' => $image,
        ]);
        return redirect()->route('product.management');
    }


    public function storeProduct() {
       $product =  Product::create([
            'title'=>"Samsung galaxy S3",
            'slug'=> Str::random(10),
            'description'=> "ce produit est cerrifié vtp",
            'category_id' => 1,
            'prix' => rand(100, 340),
            'view' =>1,
            'boutique_id'=> 1
        ]);

        foreach($this->images as $image) {
            Image::create([
                'image' =>$image->store('public/product/images'),
                'product_id' => $product->id
            ]);
        }

        return redirect()->route('product.management');

    }







}
