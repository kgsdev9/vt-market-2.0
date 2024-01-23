<section class="container-fluid p-4">
    <div class="row">
        <!-- Page header -->
        <div class="col-lg-12 col-md-12 col-12">
            <div class="border-bottom pb-3 mb-3 d-md-flex align-items-center justify-content-between">
                <div class="mb-3 mb-md-0">
                    <h1 class="mb-1 h2 fw-bold">Renseigner brievement toutes les informations</h1>  
                </div>
                <div>
                    <a href="#" class="btn btn-outline-secondary">Retourner</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
            <!-- Card -->
            <div class="card border-0 mb-4">
                <!-- Card header -->
                <div class="card-header">
                    <h4 class="mb-0">Renseigner les informations si vous voulez etre vendeur </h4>
                </div>
                <form class="needs-validation" novalidate="">
                    <div class="card-body">
                        <div>
                            <!-- Form -->
                            <div class="row">
                                <!-- Date -->
                                <div class="mb-3 col-md-4">
                                    <label for="selectDate" class="form-label">Nom Du vendeur légale</label>
                                    <input type="text" class="form-control" wire:model="nom_vendeur" placeholder="GDRD GODO" required="" >
                                 
                                </div>

                                <div class="mb-3 col-md-4">
                                    <label for="selectDate" class="form-label">Prénom du vendeur</label>
                                    <input type="text" class="form-control" wire:model="prenom_vendeur"  placeholder="Guy stephane" required="" >
                                  
                                </div>

                                <div class="mb-3 col-md-4">
                                    <label for="selectDate" class="form-label">Adresse Vendeur</label>
                                    <input type="text" class="form-control" wire:model="adresse" placeholder="DOKUI CHAINE-AVION" required="" >
                                 
                                </div>


                                <div class="mb-3 col-md-4">
                                    <label for="selectDate" class="form-label">Piece  d'identité Cni</label>
                                    <input type="file" wire:model="piece"   class="form-control">
                                 
                                </div>

                                <div class="mb-3 col-md-4">
                                    <label for="selectDate" class="form-label">Contact 1 </label>
                                    <input type="text"   wire:model="telephone"  class="form-control">
                                 
                                </div>

                                <div class="mb-3 col-md-4">
                                    <label for="selectDate" class="form-label">Contact 2 </label>
                                    <input type="text" wire:model="contact"  class="form-control">
                                 
                                </div>

                                <hr>
                                <h3>Information sur la boutique </h3>

                                <div class="mb-3 col-md-12">
                                    <label for="basic-url" class="form-label">Entrer le nom votre boutique</label>
                                    <div class="input-group mb-1">
                                        <span class="input-group-text">https://vtp-market.com/</span>
                                        <input type="text" class="form-control" wire:model="libelle_boutique">
                                    </div>
                                    <small>Entrer simplement le nom sans caractere speciaux</small>
                                </div>
                                

                                <div class="mb-3 col-md-4">
                                    <label for="selectDate" class="form-label">Logo de la boutique </label>
                                    <input type="file" class="form-control" wire:model="logo_boutique">
                                 
                                </div>

                                <div class="mb-3 col-md-4">
                                    <label for="selectDate" class="form-label">Adresse de la boutique </label>
                                    <input type="text" class="form-control" placeholder="RUE GABON BINGERVILLE">
                                 
                                </div>

                                <div class="mb-3 col-md-4">
                                    <label for="selectDate" class="form-label">Selectionner un pays    </label>
                                    <select wire:model="city_id"  class="form-control">
                                        <option value="">Choisir </option>
                                        @foreach ($countryAll as $country)
                                            <option value="{{$country->id}}">{{$country->nom}}</option>
                                        @endforeach
                                    </select>
                                 
                                </div>


                                <div class="mb-3 col-md-4">
                                    <label for="selectDate" class="form-label">Selectionner une ville   </label>
                                    <select  wire:model="country_id" class="form-control">
                                        <option value="">Choisir </option>
                                        @foreach ($allCities as $city)
                                            <option value="{{$city->id}}">{{$city->nom}}</option>
                                            
                                        @endforeach
                                    </select>
                                
                                </div>
                
                                <div class="mb-3 col-md-12">
                                    <label for="Excerpt" class="form-label">Expliquer en quoi votre boutique est spécialite </label>
                                    <textarea rows="3"  class="form-control text-dark" placeholder="Prouvez nous que vous etes serieux" wire:model="description"></textarea>

                                </div>
                            </div>
                        </div>
                        <button type="button" wire:click="registerStore()" class="btn btn-outline-secondary">Enregistrer mes informations</button>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
</section>