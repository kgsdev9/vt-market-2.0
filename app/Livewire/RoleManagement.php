<?php

namespace App\Livewire;

use App\Models\Role;
use Livewire\Component;
use Livewire\WithPagination;

class RoleManagement extends Component
{

    use WithPagination;

    protected $theme = "bootstrap";

    public $roleId, $nom , $search ="", $mode= true;

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
            Role::create([
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
            $Role = Role::findOrFail($id);
            if( !$Role) {
                session()->flash('error','Role not found');
            } else {
                $this->nom = $Role->nom;
                $this->roleId = $Role->id;
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
            Role::whereId($this->roleId)->update([
                'nom' => $this->nom,
            ]);
            session()->flash('success','Ville supprimé avec sucess');
            $this->resetFields();
            $this->mode = true;
        } catch (\Exception $ex) {
            session()->flash('success','Something goes wrong!!');
        }
    }

    public function delete($id)
    {
        try{
            Role::find($id)->delete();
            session()->flash('success',"Pays supprimé avec success!!");
        }catch(\Exception $e){
            session()->flash('error',"Something goes wrong!!");
        }
    }

    public function resetFields(){
        $this->nom = '';
    }


    public function render()
    {
        return view('livewire.role-management', [
            'allRoles'=> Role::orderBY('nom')->where('nom', 'like','%'. $this->search. '%')->paginate(10)
        ]);
    }
}
