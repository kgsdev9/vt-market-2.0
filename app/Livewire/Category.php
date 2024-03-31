<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use App\Models\Category as ModelCategory;

class Category extends Component
{

    use WithPagination;
    use WithFileUploads;


    protected $paginationTheme = 'bootstrap';

    public $dynamique_paginate =10 ;

    public $image;
    public $new_image ;
    public $slug;
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
       $this->validate() ;
         $image = $this->image->getClientOriginalName();
        $img = Image::make($this->image);
        $img->resize(522, 310)->save(public_path('s3/category/'.$image));
        ModelCategory::create([
            'nom' => $this->nom,
            'slug' => $this->prepareBeforeValidation($this->nom),
            'image' => $image,
        ]);

        $this->reset();
        $this->mode = false;
    }


    public function edit($id) {
        $ressourceMarque = ModelCategory::find($id);
        $this->nom = $ressourceMarque->nom;
        $this->new_image = $ressourceMarque->image;
        $this->marqueId = $ressourceMarque->id;
        $this->mode = true;
    }


    public function update()
    {
        $this->validate();
         $marque =ModelCategory::findOrFail($this->marqueId);
         $photo = $marque->image;
         if($this->image)
         {
            Storage::delete($photo);
            $photo = $this->image->getClientOriginalName();
            $img = Image::make($this->image);
            $img->resize(522, 310)->save(public_path('s3/category/'.$photo));

         }else{
             $photo = $marque->image;
         }
            $marque->update([
                'nom' => $this->nom,
                'image' => $photo,
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
            'allCategories'=> ModelCategory::where('nom', 'LIKE', '%'.$this->search. '%')->paginate(10)
        ]);
    }
}
