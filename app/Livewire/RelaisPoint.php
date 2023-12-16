<?php

namespace App\Livewire;

use App\Models\RelaisPoint as ModelsRelaisPoint;
use Livewire\Component;

class RelaisPoint extends Component
{
    public $country_at, $country_end, $city_at, $city_end, $price, $delevryId, $mode = true;

    protected $rules = [
        'country_at'=> 'required',
        'country_end' => 'required',
        'city_at' => 'required',
        'city_end'=> 'required',
        'price' => 'required'
    ];

    public function displayForm() {
        $this->mode = false ;
    }

    public function dataSaveDeja()  {

       return  ModelsRelaisPoint::where('country_at', '=', $this->country_at)
                         ->where('country_end', '=' ,$this->country_end)
                         ->where('city_at', '=' ,$this->city_at)
                         ->where('city_end', '=' ,$this->city_end)
                         ->where('price', '=' ,$this->price)
                         ->exists();
    }


    public function store() {
        $this->validate();

        if($this->dataSaveDeja()){

        } else {
            ModelsRelaisPoint::create([
                'country_at'=> $this->country_at,
                'country_end' => $this->country_end,
                'city_at' => $this->city_at,
                'city_end'=> $this->city_end,
                'price' => $this->price
            ]);
            $this->mode = true ;
        }
    }


    public function cancel() {
        $this->mode = true ;
        $this->reset();
    }

    public function edit($id) {
        $ressourceMarque = ModelsRelaisPoint::find($id);
        $this->country_at = $ressourceMarque->country_at;
        $this->country_end = $ressourceMarque->country_end;
        $this->city_at = $ressourceMarque->city_at;
        $this->city_end = $ressourceMarque->city_end;
        $this->price = $ressourceMarque->price;
        $this->delevryId = $ressourceMarque->id;
        $this->mode = false;
    }


    public function update() {

        $this->validate();
        try {
            ModelsRelaisPoint::whereId($this->delevryId)->update([
                'country_at'=> $this->country_at,
                'country_end' => $this->country_end,
                'city_at' => $this->city_at,
                'city_end'=> $this->city_end,
                'price' => $this->price
            ]);
            session()->flash('success','Livraison mise à jour avec success!!');
            $this->mode= true;
        } catch (\Exception $ex) {
            session()->flash('success','Quelsue chose est mal !!');
        }
    }


    public function destroy($id) {
        {
            try{
                ModelsRelaisPoint::find($id)->delete();
                session()->flash('success',"Point relais supprimé avec succès !!!");
            }catch(\Exception $e){
                session()->flash('error',"Quelque chose ne va pas!!");
            }
        }
    }


    public function render()
    {
        return view('livewire.relais-point', [
            'allPointsRelais'=>ModelsRelaisPoint::all()
        ]);
    }
}
