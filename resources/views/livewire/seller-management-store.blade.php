 @section('title', 'Liste des boutiques')
<div>

    <section class="container-fluid p-4">
        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12 col-md-12 col-12">
                <div class="border-bottom pb-3 mb-3 d-flex justify-content-between align-items-center">
                    <div class="mb-2 mb-lg-0">
                        <h1 class="mb-1 h2 fw-bold">
                           Liste des vendeurs
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                        <div class="mb-4">
                            <input type="search" wire:model.live="search" class="form-control" placeholder="Rechercher par nom de la boutique">
                        </div>
                        <div class="row">
                            @foreach ($allStoreSellers as $seller)
                            <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                                <!-- Card -->
                                <div class="card mb-4">
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <div class="text-center">

                                            <h4 class="mb-0">{{$seller->nom_vendeur}} {{$seller->prenom_vendeur}}</h4>
                                            <p class="mb-0">Boutique :  {{$seller->libelle_boutique}} </p>
                                            <p class="mb-0">Télephone :  {{$seller->telephone}} </p>
                                        </div>
                                        <div class="d-flex justify-content-between border-bottom py-2 mt-4">
                                            <span>Pays</span>
                                            <span class="text-dark"> {{$seller->city->nom}}</span>
                                        </div>
                                        <div class="d-flex justify-content-between border-bottom py-2">
                                            <span>Ville</span>
                                            <span class="text-warning">
                                                {{$seller->country->nom}}

                                            </span>
                                        </div>
                                        <div class="d-flex justify-content-between pt-2">
                                            <span>Produit</span>
                                            <span class="text-dark">{{count($seller->products)}}</span>
                                        </div>
                                        <div class="text-center">
                                            <button class="btn btn-outline-dark">Voir la boutique</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>



            </div>
        </div>
    </section>


    </div>

