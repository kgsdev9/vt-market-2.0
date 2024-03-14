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
                            {!! $partage !!}
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card -->

        </div>
    </section>



</section>
</div>
