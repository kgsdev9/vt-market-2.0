<?php

namespace App\Livewire;

use App\Models\City;
use App\Models\Country;
use Livewire\Component;
use App\Models\Boutique;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class ProductManagement extends Component
{
    use WithFileUploads;
    public $libelle_boutique, $nom_vendeur, $prenom_vendeur, $description, $telephone, $contact, $piece,  $logo_boutique, $city_id, $country_id, $adresse;
   
    protected $rules = [
        'libelle_boutique'=> 'required',
        'nom_vendeur'=> 'required',
        'prenom_vendeur'=> 'required',
        'description'=> 'required',
        'telephone'=> 'required',
        'contact'=> 'required',
        'piece'=> 'required',
        'logo_boutique'=> 'required',
        'city_id'=> 'required',
        'country_id'=> 'required',
        'adresse'=> 'required',
    ];

    public function registerStore() {
        // $this->validate(); 
        $logo=$this->logo_boutique->store('public/vendeur/logo');
        $piece=$this->piece->store('public/vendeur/piece');
       $boutique =  Boutique::create([
            'libelle_boutique'=> $this->libelle_boutique,
            'slug'=> $this->libelle_boutique,
            'nom_vendeur'=> $this->nom_vendeur,
            'prenom_vendeur'=> $this->prenom_vendeur,
            'description'=> $this->description,
            'telephone'=> $this->telephone,
            'contact'=> $this->contact,
            'contact'=> $this->contact,
            'logo_boutique'=> $logo,
            'piece'=> $piece,
            'city_id' => $this->city_id,
            'country_id' => $this->country_id,
            'adresse' => $this->adresse,
            'user_id' => Auth::user()->id,
        ]);
        dd($boutique);
        return redirect()->route('product.management');
    }
    
    public function render()
    {
        return view('livewire.product-management',[
            'allCities'=> City::all(),
            'countryAll'=> Country::all(),
        ]);
    }

}
