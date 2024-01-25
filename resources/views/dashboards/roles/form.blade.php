<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
        <div class="card border-0 mb-4">

                <div class="card-body">
                    <div>
                        <!-- Form -->
                        <div class="row">
                            <!-- Date -->
                            <div class="mb-3 col-md-4">
                                <label for="selectDate" class="form-label">Libelle role  </label>
                                <input type="text" class="form-control" wire:model="nom" placeholder="user" required="">

                            </div>

                        </div>
                    </div>
                    @if($roleId)
                    <button type="button" wire:click="update()" class="btn btn-outline-secondary">Modifier  </button>
                     @else
                     <button type="button" wire:click="store()" class="btn btn-outline-secondary">Enregistrer </button>
                     @endif
                     <button type="button" wire:click="cancel()" class="btn btn-outline-secondary">Retourner</button>
                </div>

        </div>
    </div>

</div>
