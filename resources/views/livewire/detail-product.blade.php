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

<section class="container p-4">

<div class="row">
    <div class="col-lg-12 col-md-12 col-12">
        <!-- Page header -->
        <div class="border-bottom pb-3 mb-3 d-md-flex align-items-center justify-content-between">
            <div class="mb-2 mb-lg-0">
                <h1 class="mb-0 h2 fw-bold">Fiche produit </h1>
                <!-- Breadcrumb -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{route('home')}}" class="text-dark">Accueil</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#" class="text-dark">Produit</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{$singleProduct->title}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- card -->
<div class="card">
    <div class="card-body p-5">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="row">
                    @foreach ($singleProduct->images as $product)
                    <div class="col-lg-6 col-12">
                        <div class="mb-4">
                            <!-- Gallery -->
                            <a href="{{asset('s3/product/'.$product->image)}}" class="glightbox" data-gallery="gallery2">
                                <img src="{{asset('s3/product/'.$product->image)}}" alt="image" class="img-fluid rounded-3 w-100">
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="my-5 mx-lg-8">
                    <div>
                        <h1>{{$singleProduct->title}}</h1>
                        <div>
                            <span>
                               Boutique officielle    {{$singleProduct->boutique->libelle_boutique}}
                            </span>
                        </div>
                    </div>
                    <hr class="my-3">
                    <div class="mb-5">
                        <!-- text -->
                        <h4 class="mb-1">
                            {{$singleProduct->prix}} €

                        </h4>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-grid mb-2 mb-md-0">
                                <!-- btn -->
                                <button wire:click="productAddCart({{$singleProduct->id}})" class="btn btn-danger">
                                    <i class="fe fe-shopping-cart me-2"></i>
                                  Ajouter au panier
                                </button>
                            </div>
                        </div>
                    </div>
                    <hr class="mt-4 mb-2">
                    <div class="mb-4" id="ecommerceAccordion">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item px-0">
                                <a class="d-flex align-items-center text-inherit fw-semibold mb-0" data-bs-toggle="collapse" href="#productDetails" role="button" aria-expanded="false" aria-controls="productDetails">
                                    <div class="me-auto">Description</div>
                                </a>
                                <div class="collapse show">
                                    <div class="py-3">
                                        <p>
                                            {{$singleProduct->description}}
                                        </p>
                                    </div>

                                    {!! $partage !!}
                                </div>
                            </li>


                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</section>
</div>
