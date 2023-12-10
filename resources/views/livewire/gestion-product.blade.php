<div>
    <div class="container">
        <div>
            <label for="">Entrer votre title du produit </label>
            <input type="text" class="form-control" wire:model="title">
        </div>

        <div>
            <label for="">Entrer le prix  </label>
            <input type="text" class="form-control" wire:model="prix">
        </div>

        <div>
            <label for="">Ajouter une  image  </label>
            <input type="file" class="form-control" wire:model="image">
        </div>

        <div>
            <label for="">Selectionner une catégorie  </label>
            <select wire:model="category_id" id="" class="form-control">
                <option value="">Selectionner une catégorie</option>
                @foreach ($allCategories as $categorie)
                <option value="{{$categorie->id}}">{{$categorie->name}}</option>
                @endforeach

            </select>
        </div>



        <div>
            <label for="">Entrer la description </label>
           <textarea wire:model="description" id="" cols="30" rows="10"></textarea>
        </div>

        <button class="btn btn-primary" type="button" wire:click="enregistrer">Enregistrer</button>

    </div>


</div>
