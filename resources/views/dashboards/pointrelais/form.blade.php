<div class="row">
    <div class="col-lg-12">
        <div class="card">

            <div class="card-header">
                <h4 class="card-title mb-0">Nouveau point de relais </h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mt-4 mt-xl-0">

                                <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input"> Pays de depart    @error('country_at') <span class="text-danger">{{ $message }}</span> @enderror </label>
                                    <input type="text" class="form-control" placeholder="France" wire:model="country_at">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input"> Ville de depart     @error('city_at') <span class="text-danger">{{ $message }}</span> @enderror </label>
                                    <input type="text" class="form-control" placeholder="Paris" wire:model="city_at">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input"> Pays d'arrivée      @error('country_end') <span class="text-danger">{{ $message }}</span> @enderror </label>
                                    <input type="text" class="form-control" placeholder="Benin" wire:model="country_end">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input"> Ville  d'arrivée      @error('city_end') <span class="text-danger">{{ $message }}</span> @enderror </label>
                                    <input type="text" class="form-control" placeholder="Lome" wire:model="city_end">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input"> Prix       @error('price') <span class="text-danger">{{ $message }}</span> @enderror </label>
                                    <input type="number" class="form-control" placeholder="45" wire:model="price">
                                </div>
                                @if($delevryId)
                                <button type="button" wire:click="update" class="btn btn-primary">Modifier</button>
                                @else
                                <button type="button" wire:click="store" class="btn btn-primary">Enregistrer</button>
                                @endif
                                <button class="btn btn-warning" wire:click="cancel">Retourner</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
