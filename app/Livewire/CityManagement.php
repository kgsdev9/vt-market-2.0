<?php

namespace App\Livewire;

use App\Models\City;
use Livewire\Component;
use Livewire\WithPagination;

class CityManagement extends Component
{

    use WithPagination;

    protected $theme = "bootstrap";

    public $cityId, $nom, $search ="", $mode= true;

    protected $rules = [
        'nom' => 'required',
    ];

    public function displayForm() {
        $this->mode = false;
    }

    public function store()
    {
        $this->validate();
        try {
            City::create([
                'nom' => $this->nom,
            ]);
            session()->flash('success','Utilisateur ajouté avec success!!');
            $this->resetFields();
            $this->mode = true;
        } catch (\Exception $ex) {
            session()->flash('error','Oups quelque chose ...!!');
        }
    }

    public function edit($id){
        try {
            $city = City::findOrFail($id);
            if( !$city) {
                session()->flash('error','city not found');
            } else {
                $this->nom = $city->nom;
                $this->cityId = $city->id;
                $this->mode = false;
            }
        } catch (\Exception $ex) {
            session()->flash('error','Something goes wrong!!');
        }

    }

    public function cancel() {
        $this->mode = true;
        $this->resetFields();
    }

    public function update()
    {
        $this->validate();
        try {
            City::whereId($this->cityId)->update([
                'nom' => $this->nom,
            ]);
            session()->flash('success','Ville supprimé avec sucess');
            $this->resetFields();
            $this->mode = true;
        } catch (\Exception $ex) {
            session()->flash('success','Something goes wrong!!');
        }
    }

    public function resetFields(){
        $this->nom = '';
    }


    public function delete($id)
    {
        try{
            City::find($id)->delete();
            session()->flash('success',"Pays supprimé avec success!!");
        }catch(\Exception $e){
            session()->flash('error',"Something goes wrong!!");
        }
    }



    public function render()
    {
        return view('livewire.city-management', [
            'allCities'=> City::orderBY('nom')->where('nom', 'like','%'. $this->search. '%')->paginate(10)
        ]);
    }
}
