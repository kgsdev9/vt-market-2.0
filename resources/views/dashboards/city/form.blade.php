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
                                <label for="selectDate" class="form-label">Libelle de la ville </label>
                                <input type="text" class="form-control" wire:model="nom" placeholder="Abidjan" required="">

                            </div>

                        </div>
                    </div>
                    @if($cityId)
                    <button type="button" wire:click="update()" class="btn btn-outline-secondary">Modifier l'utilisateur </button>
                     @else
                     <button type="button" wire:click="store()" class="btn btn-outline-secondary">Enregistrer l'utilisateur </button>
                     @endif
                     <button type="button" wire:click="cancel()" class="btn btn-outline-secondary">Retourner</button>
                </div>

        </div>
    </div>

</div>
