<div>
    <style>
        div#social-links {
            margin: 0 auto;
            max-width: 500px;
        }
        div#social-links ul li {
            display: inline-block;
        }
        div#social-links ul li a {
            padding: 20px;
            border: 1px solid #ccc;
            margin: 1px;
            font-size: 30px;
            color: #222;

            background-color: white;
        }
    </style>

@section('title',  $singleProduct->title)

<br><br><br>
<section class="container p-4 mt-10">
    <section class="pb-8">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-12 mt-n8 mb-4 mb-lg-0">
                    <div class="card rounded-3">
                        <div class="card-header border-bottom-0 p-0">
                            <div>
                                <ul class="nav nav-lb-tab" id="tab" role="tablist">
                                    <li class="nav-item" role="presentation"><a class="nav-link active" id="table-tab" data-bs-toggle="pill" href="#table" role="tab" aria-controls="table" aria-selected="true">Fiche de description de l'article </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="tabContent">
                                <div class="tab-pane fade show active" id="table" role="tabpanel" aria-labelledby="table-tab">
                                    <!-- Card -->
                                    <div class="accordion" id="courseAccordion">
                                        <div class="row">
                                            @foreach ($singleProduct->images as $product)
                                            <div class="col-lg-6 col-12">
                                                <div class="mb-4">
                                                    <a href="{{asset('s3/product/'.$product->image)}}" class="glightbox" data-gallery="gallery2">
                                                        <img src="{{asset('s3/product/'.$product->image)}}" alt="image" class="img-fluid rounded-3 w-100">
                                                    </a>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                        <div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item px-0 pt-0">
                                                    <a class="h4 mb-0 d-flex align-items-center active">
                                                        <div class="me-auto">
                                                            {{$singleProduct->title}}
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="list-group-item px-0">

                                                    {!!$singleProduct->description!!}
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12 mt-lg-n8">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="position-relative">
                                    {{-- <img src="{{asset('assets/images/avatar/avatar-1.jpg')}}" alt="avatar" class="rounded-circle avatar-xl"> --}}
                                    <a href="#" class="position-absolute mt-2 ms-n3" data-bs-toggle="tooltip" data-placement="top" aria-label="Verifed" data-bs-original-title="Verifed"><img src="{{asset('assets/images/svg/checked-mark.svg')}}" alt="checked-mark" height="30" width="30"></a>
                                </div>
                                <div class="ms-4">
                                    <h4 class="mb-0">  {{$singleProduct->boutique->libelle_boutique}}</h4>
                                    <p class="mb-1 fs-6">
                                        Vendeur certifié par VTP Market
                                    </p>

                                </div>
                            </div>
                            <div class="border-top row mt-3 border-bottom mb-3 g-0">
                                <div class="col">
                                    <div class="pe-1 ps-2 py-3">
                                        <h5 class="mb-0">
                                           Pays
                                        </h5>
                                        <span>  {{$singleProduct->boutique->country->nom}}</span>
                                    </div>
                                </div>
                                <div class="col border-start">
                                    <div class="pe-1 ps-3 py-3">
                                        <h5 class="mb-0">
                                            {{$singleProduct->boutique->city->nom}}
                                        </h5>
                                        <span>Ville</span>
                                    </div>
                                </div>

                            </div>

                            <h5>Prix   {{$singleProduct->prix}} € Soit  {{$singleProduct->prix * 650}} en FCFA  </h5>

                            <p>
                                {{Str::limit($singleProduct->boutique->description, 220)}}
                            </p>
                            {{-- <a href="#" class="btn btn-outline-secondary btn-sm">Consulter la boutique</a>
                            <a href="#" class="btn btn-outline-danger btn-sm">Démarcher avec le vendeur</a> --}}
                        </div>
                    </div>

                    <div class="card mb-3 mb-4 mt-2">
                        <div class="card-body">
                            <div class="d-grid">
                                <button wire:click="productAddCart({{$singleProduct->id}})"  class="btn btn-danger mb-2">
                                    <i class="fe fe-shopping-cart me-2"></i>

                                    Ajouter au panier</button>
                            </div>
                            <br>

                            <a href="https://www.facebook.com/sharer/sharer.php?u=http://localhost:8000/product/detail/{{$singleProduct->slug}}" target="_blank"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="50px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path fill="#808184" d="M16-0.035C7.159-0.035-0.035,7.159-0.035,16S7.159,32.035,16,32.035S32.035,24.841,32.035,16 S24.841-0.035,16-0.035z M16,30.965C7.748,30.965,1.035,24.252,1.035,16S7.748,1.035,16,1.035S30.965,7.748,30.965,16 S24.252,30.965,16,30.965z"></path> <path fill="#808184" d="M19.5,7h-2.668C13.652,7,13,8.737,13,11.345L13.002,13H11.5c-0.276,0-0.5,0.224-0.5,0.5v3 c0,0.276,0.224,0.5,0.5,0.5H13v7.5c0,0.276,0.224,0.5,0.5,0.5h3.058c0.276,0,0.5-0.224,0.5-0.5L17.06,17h2.44 c0.276,0,0.5-0.224,0.5-0.5v-3c0-0.276-0.224-0.5-0.5-0.5h-2.441l0.003-1.396c0-0.673,0-0.673,0.629-0.674L19.48,11 c0.127,0.004,0.268-0.045,0.366-0.139S20,10.636,20,10.5v-3C20,7.224,19.776,7,19.5,7z M19,9.98l-1.289-0.05 c-1.521,0-1.648,0.827-1.648,1.672l-0.004,1.896c0,0.133,0.052,0.26,0.146,0.354C16.298,13.947,16.425,14,16.558,14H19v2h-2.44 c-0.276,0-0.5,0.224-0.5,0.5L16.058,24H14v-7.5c0-0.276-0.224-0.5-0.5-0.5H12v-2h1.503c0.133,0,0.26-0.053,0.354-0.147 c0.094-0.094,0.146-0.221,0.146-0.354L14,11.344C14,9.079,14.424,8,16.832,8H19V9.98z"></path> </g> </g></svg></a>
                            <a href="https://wa.me/?text=http://localhost:8000/product/detail/{{$singleProduct->slug}}" target="_blank"> &nbsp;
                              <svg width="30px" height="50px" viewBox="0 0 48 48" id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><defs><style>.cls-1{fill:none;stroke:#000000;stroke-linecap:round;stroke-linejoin:round;}</style></defs><path class="cls-1" d="M24,2.5A21.52,21.52,0,0,0,5.15,34.36L2.5,45.5l11.14-2.65A21.5,21.5,0,1,0,24,2.5ZM13.25,12.27h5.86a1,1,0,0,1,1,1,10.4,10.4,0,0,0,.66,3.91,1.93,1.93,0,0,1-.66,2.44l-2.05,2a18.6,18.6,0,0,0,3.52,4.79A18.6,18.6,0,0,0,26.35,30l2-2.05c1-1,1.46-1,2.44-.66a10.4,10.4,0,0,0,3.91.66,1.05,1.05,0,0,1,1,1v5.86a1.05,1.05,0,0,1-1,1,23.68,23.68,0,0,1-15.64-6.84,23.6,23.6,0,0,1-6.84-15.64A1.07,1.07,0,0,1,13.25,12.27Z"></path></g></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card -->

        </div>
    </section>



</section>
</div>
