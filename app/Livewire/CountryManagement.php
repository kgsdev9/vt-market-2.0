<?php

namespace App\Livewire;

use App\Models\Country;
use Livewire\Component;
use Livewire\WithPagination;

class CountryManagement extends Component
{

    use WithPagination;

    protected $theme = "bootstrap";

    public $CountryId, $nom = true, $search ="", $mode= true;

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
            Country::create([
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
            $Country = Country::findOrFail($id);
            if( !$Country) {
                session()->flash('error','Country not found');
            } else {
                $this->nom = $Country->nom;
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
            Country::whereId($this->CountryId)->update([
                'nom' => $this->name,
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
            Country::find($id)->delete();
            session()->flash('success',"Pays supprimé avec success!!");
        }catch(\Exception $e){
            session()->flash('error',"Something goes wrong!!");
        }
    }









    public function render()
    {
        return view('livewire.country-management');
    }
}
