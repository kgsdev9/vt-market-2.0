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

                        <div class="card-img-top text-center">
                            <svg fill="#000000" height="64px" width="64px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 511 511" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M445.663,469.921l-14.362-359.041C430.968,102.537,424.165,96,415.814,96H351v-0.5C351,42.841,308.159,0,255.5,0 S160,42.841,160,95.5V96H95.187c-8.351,0-15.153,6.536-15.488,14.88L65.337,469.921c-0.434,10.842,3.468,21.122,10.985,28.946 C83.84,506.691,93.956,511,104.806,511h301.389c10.851,0,20.966-4.309,28.484-12.133 C442.195,491.042,446.097,480.763,445.663,469.921z M175,95.5c0-44.388,36.112-80.5,80.5-80.5S336,51.112,336,95.5V96H175V95.5z M423.862,488.474c-4.663,4.853-10.938,7.526-17.667,7.526H104.806c-6.73,0-13.004-2.672-17.667-7.525 c-4.663-4.853-7.083-11.229-6.813-17.954L94.687,111.48c0.011-0.27,0.23-0.48,0.5-0.48H160v48.5c0,4.142,3.358,7.5,7.5,7.5 s7.5-3.358,7.5-7.5V111h161v48.5c0,4.142,3.358,7.5,7.5,7.5s7.5-3.358,7.5-7.5V111h64.814c0.269,0,0.488,0.21,0.499,0.48 l14.362,359.041C430.944,477.245,428.524,483.621,423.862,488.474z"></path> </g></svg>
                        </div>

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
