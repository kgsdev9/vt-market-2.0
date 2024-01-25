<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
        <!-- Card -->
        <div class="card border-0 mb-4">
            <!-- Card header -->
            <div class="card-header">
                <h4 class="mb-0">Renseigner les informations si vous voulez etre vendeur </h4>
            </div>

                <div class="card-body">
                    <div>
                        <!-- Form -->
                        <div class="row">
                            <!-- Date -->
                            <div class="mb-3 col-md-4">
                                <label for="selectDate" class="form-label">Nom d'utilisateur</label>
                                <input type="text" class="form-control" wire:model="name" placeholder="GDRD GODO" required="">

                            </div>

                            <div class="mb-3 col-md-4">
                                <label for="selectDate" class="form-label">Adresse email</label>
                                <input type="email" class="form-control" wire:model="email" placeholder="kgsdev8@gmail.com" required="">

                            </div>

                            <div class="mb-3 col-md-4">
                                <label for="selectDate" class="form-label">Role</label>
                                <select wire:model="role_id" id="" class="form-control">
                                    <option value="">Selectionner</option>
                                    @foreach ($allRoles as $role)
                                    <option value="{{$role->id}}">{{$role->nom}}</option>
                                    @endforeach

                                </select>

                            </div>


                            <div class="mb-3 col-md-4">
                                <label for="selectDate" class="form-label">Mot de passe </label>
                                <input type="password" class="form-control" wire:model="password"  required="">
                            </div>
                        </div>
                    </div>
                    @if($userId)
                    <button type="button" wire:click="update()" class="btn btn-outline-secondary">Modifier l'utilisateur </button>
                     @else
                     <button type="button" wire:click="store()" class="btn btn-outline-secondary">Enregistrer l'utilisateur </button>
                     @endif
                     <button type="button" wire:click="cancel()" class="btn btn-outline-secondary">Retourner</button>
                </div>

        </div>
    </div>

</div>
