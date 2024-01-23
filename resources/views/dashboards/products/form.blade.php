<div class="offset-xl-3 col-xl-6 col-12">
    <!-- card -->
   
        <div class="card mb-4">
            <!-- card body -->
            <div class="card-body">
                <h4 class="mb-4">Nouveau Produit </h4>

                <!-- row -->
                <div class="row gx-3">
                    <!-- input -->
                    <div class="mb-3 col-md-12">
                        <label class="form-label">Nom du produit </label>
                        <input type="text" class="form-control" wire:model="title" placeholder="Samsung 3D"  required="">
                     
                    </div>
                    <!-- input -->
                    <div class="mb-3 col-md-12">
                        <label class="form-label" for="lastName">Prix</label>
                        <input type="text" class="form-control" wire:model="prix" placeholder="3400" required="">
                    </div>
                    <!-- input -->

                    <!-- input -->
                    <div class="mb-3 col-md-12">
                        <label class="form-label" >Selectionner une catégorie</label>
                        <select wire:model="marque_id" class="form-control">
                            <option value="">Choisir</option>
                            @foreach ($allMarques as $marque)
                                <option value="{{$marque->id}}">{{$marque->nom}}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- input -->
                   
                    <!-- input -->
                    <div class="mb-3 col-md-12">
                        <label class="form-label" for="phone">Description du produit </label>
                        <textarea wire:model="description" class="form-control" cols="30" rows="2"></textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Selectionner une image</label>
                                <input type="file" wire:model="images" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Selectionner une image</label>
                                <input type="file" wire:model="images" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Selectionner une image</label>
                                <input type="file" wire:model="images" class="form-control">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <a href="#" class="btn btn-outline-primary me-2">Cancel</a>
            <button class="btn btn-primary" type="button" wire:click="store">Enregistrer</button>
        </div>
   
</div>