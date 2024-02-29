<?php

namespace App\Livewire;

use App\Models\City;
use App\Models\Country;
use Livewire\Component;
use App\Models\Boutique;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ProductManagement extends Component
{
    use WithFileUploads;
    use LivewireAlert;

    protected $paginationTheme = 'bootstrap';

    public $libelle_boutique, $nom_vendeur, $prenom_vendeur, $description, $telephone, $contact, $piece,  $logo_boutique, $city_id, $country_id, $adresse, $countryAll, $allCities;

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

    public function mount() {
        $boutique =  Boutique::where('user_id', Auth::user()->id)->first();
        $this->nom_vendeur = $boutique?->nom_vendeur;
        $this->prenom_vendeur = $boutique?->prenom_vendeur;
        $this->adresse = $boutique?->adresse;
        $this->contact = $boutique?->contact;
        $this->telephone = $boutique?->telephone;
        $this->city_id = $boutique?->city_id;
        $this->country_id = $boutique?->country_id;
        $this->libelle_boutique = $boutique?->libelle_boutique;
        $this->description = $boutique?->description;
        $this->countryAll = Country::all();
        $this->allCities = City::all();
    }

    public function registerStore() {
        $boutique = Boutique::where('user_id', Auth::user()->id)->exists();
        if($boutique)  {
            Boutique::where('user_id', Auth::user()->id)->update([
                'libelle_boutique'=> $this->libelle_boutique,
                'slug'=> $this->libelle_boutique,
                'nom_vendeur'=> $this->nom_vendeur,
                'prenom_vendeur'=> $this->prenom_vendeur,
                'description'=> $this->description,
                'telephone'=> $this->telephone,
                'contact'=> $this->contact,
                'contact'=> $this->contact,
                'city_id' => $this->city_id,
                'country_id' => $this->country_id,
                'adresse' => $this->adresse,
                'user_id' => Auth::user()->id,
            ]);
            $this->alert('success', 'vos informations mise à jour avec succes');
            return redirect()->route('gestion.boutique');

        } else {
            $this->validate();
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
                'city_id' => 1,
                'country_id' => 1,
                'adresse' => $this->adresse,
                'user_id' => Auth::user()->id,
            ]);
            DB::table('users')
            ->where('id', '=', Auth::user()->id)
            ->update(['owner_id' => $boutique->id]);
            $this->alert('success', 'vos informations ont été ajoutés avec succes, Vous pourrez gérer votre boutique nous vous notifierons en cas de probleme');
            return redirect()->route('gestion.boutique');
        }
        }

    public function render()
    {
        return view('livewire.product-management',[


        ]);
    }

}
