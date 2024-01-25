<?php

namespace App\Livewire;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\WithPagination;

class UserManagement extends Component
{

    use WithPagination;

    protected $theme = "bootstrap";

    public $userId, $name, $email, $mode = true, $search ="", $password, $role_id;

    protected $rules = [
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
        'role_id' => 'required'
    ];

    public function displayForm() {
        $this->mode = false;
    }

    public function store()
    {
        $this->validate();
        try {
            User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => Hash::make(($this->password)),
                'role_id' => $this->role_id
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
            $user = User::findOrFail($id);
            if( !$user) {
                session()->flash('error','user not found');
            } else {
                $this->name = $user->name;
                $this->email = $user->email;
                $this->role_id = $user->role_id;
                $this->password = $user->password;
                $this->userId = $user->id;
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
            User::whereId($this->userId)->update([
                'name' => $this->name,
                'email' => $this->email,
                'role_id' => $this->role_id
            ]);
            session()->flash('success','Utilisateur modifié avec succes');
            $this->resetFields();
            $this->mode = true;
        } catch (\Exception $ex) {
            session()->flash('success','Something goes wrong!!');
        }
    }


    public function resetFields(){
        $this->name = '';
        $this->email = '';
        $this->role_id = '';
    }


    public function delete($id)
    {
        try{
            User::find($id)->delete();
            session()->flash('success',"Utilisateur supprimé avec succes!!");
        }catch(\Exception $e){
            session()->flash('error',"Something goes wrong!!");
        }
    }


    public function render()
    {
        return view('livewire.user-management', [
            'allUsers'=> User::where('email', 'like', '%'.$this->search.'%')->orderByDesc('created_at')->paginate(10),
            'allRoles' => Role::all()
        ]);
    }
}
