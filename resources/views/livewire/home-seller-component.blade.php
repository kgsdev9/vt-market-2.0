<div>
    <section class="bg-white py-5 feature-list">
        <div class="container py-4">
            <div class="mb-4">
                <div >
                    <div class="text-center">
                        <h3 class="pb-0 fw-bold text-dark mb-1">Consulter les boutiques branchées du monde </h3>
                        <p class="text-muted m-0">
                           Tout ce qui n'existe pas dans le monde existe sur VTP
                        </p>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 row-cols-xl-5 g-4">
                @foreach ($allSellers as $seller)



                <div class="col">
                    <div class="card h-100 shadow-sm rounded-3 overflow-hidden video-card-item border position-relative">
                        <div class="card-body p-3 text-center">
                            <h5 class="card-title mb-1 text-dark">
                                {{$seller->libelle_boutique}}
                            </h5>
                            <p class="card-text text-muted small">
                                Pays {{$seller->country->nom}} Ville {{$seller->city->nom}}
                            </p>
                        </div>
                        <div class="card-footer bg-white border-0 d-flex align-items-center justify-content-between p-3 border-top">
                            <p class="text-muted small mb-0">
                                {{count($seller->products)}} Produits
                            </p>
                            <button type="button" class="btn btn-secondary btn-sm px-2 py-0">+ Consulter</button>
                        </div>
                        <a href="{{route('store.seller', $seller->slug)}}" class="stretched-link"></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    </section>
</div>
