<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use App\Models\Category as ModelCategory;
use Illuminate\Support\Facades\Storage;

class Category extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $dynamique_paginate =10 ;

    public $image;
    public $new_image ;
    public $slug;
    public $total_produit;
    public $nom ;
    public $mode = false ;
    public $marqueId;
    public $search= "";

    public function prepareBeforeValidation($value) {

        return Str::slug($value);
    }

    protected function rules()
    {
        return [
            'nom' => 'required|min:6|max:255|unique:marques,nom,' . $this->marqueId,
            'image' => 'required',
            'total_produit' => 'required|integer',
            'new_image' => 'nullable'
        ];
    }


    public function displayform() {
        $this->mode = true;
    }

    public function cancelCreate() {
        $this->mode = false ;
        $this->reset();
        $this->resetValidation();
    }


    public function create()

    {
       $data = $this->validate() ;
       $image=$this->image->store('public/marques');
       $data=ModelCategory::create([
            'nom' => $data['nom'],
            'slug' => $this->prepareBeforeValidation($this->nom),
            'image' => $image,
            'total_produit' => $data['total_produit'],
            'total_restant_produit' => $data['total_produit'],
        ]);

        $this->reset();
        $this->mode = false;

    }


    public function edit($id) {
        $ressourceMarque = ModelCategory::find($id);
        dd($ressourceMarque);
        $this->nom = $ressourceMarque->nom;
        $this->image = $ressourceMarque->image;
        $this->marqueId = $ressourceMarque->id;
        $this->mode = true;
    }


    public function update()
    {
        $this->validate();
         $marque =ModelCategory::findOrFail($this->marqueId);

        if($this->new_image) {
            $photo = $marque->image;
            Storage::delete($marque->image);
            $photo = $this->new_image->store('public/marques');
        } else {

            $photo = $marque->image;

        }

            $marque->update([
                'nom' => $this->nom,
                'image' => $photo,
                'total_produit' => $this->total_produit,
                'total_restant_produit' => $this->total_produit,
            ]);
            $this->marqueId='';

            $this->mode  = false ;
            $this->reset('nom', 'image', 'marqueId');

    }

    public function destroy($id) {
        {
            try{
                ModelCategory::find($id)->delete();
                session()->flash('success',"Marque supprimé avec succès !!!");
            }catch(\Exception $e){
                session()->flash('error',"Quelque chose ne va pas!!");
            }
        }
    }


    public function updatingSearch() {

        $this->resetPage();
    }


    public function render()
    {
        return view('livewire.category', [
            'allCategories'=> ModelCategory::paginate(10)
        ]);
    }
}
