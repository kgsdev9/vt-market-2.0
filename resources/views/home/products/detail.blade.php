@extends('layouts.layout')
@section('content')

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
                background-color: #ccc;
            }
        </style>

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
                                <a href="admin-dashboard.html">Accueil</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Produit</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Products Details</li>
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
                                <a href="{{Storage::url($product->image)}}" class="glightbox" data-gallery="gallery2">
                                    <img src="{{Storage::url($product->image)}}" alt="image" class="img-fluid rounded-3 w-100">
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
                                   Boutique officielle de
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
                            <!-- col -->
                            <div class="col-md-6">
                                <div class="d-grid mb-2 mb-md-0">
                                    <!-- btn -->
                                    <a href="#" class="btn btn-danger">
                                        <i class="fe fe-shopping-cart me-2"></i>
                                       Acheter le produit
                                    </a>
                                </div>
                            </div>
                            <!-- col -->
                            <div class="col-md-6">
                                <div class="d-grid">
                                    <!-- btn -->
                                    <a href="#" class="btn btn-outline-secondary">
                                        <i class="fe fe-heart me-2"></i>
                                        Consulter la boutique
                                    </a>
                                </div>
                            </div>
                        </div>
                        <hr class="mt-4 mb-2">
                        <div class="mb-4" id="ecommerceAccordion">
                            <!-- List group -->
                            <ul class="list-group list-group-flush">
                                <!-- List group item -->
                                <li class="list-group-item px-0">
                                    <!-- Toggle -->
                                    <a class="d-flex align-items-center text-inherit fw-semibold mb-0" data-bs-toggle="collapse" href="#productDetails" role="button" aria-expanded="false" aria-controls="productDetails">
                                        <div class="me-auto">Detail du produit </div>
                                        <!-- Chevron -->
                                        <span class="chevron-arrow ms-4">
                                            <i class="fe fe-chevron-down fs-4"></i>
                                        </span>
                                    </a>
                                    <!-- Row -->
                                    <!-- Collapse -->
                                    <div class="collapse show" id="productDetails" data-bs-parent="#ecommerceAccordion">
                                        <div class="py-3">
                                            <p>
                                                {{$singleProduct->description}}
                                            </p>
                                        </div>
                                    </div>
                                </li>

                                {!! $partage !!}
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
