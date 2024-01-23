@extends('layouts.layout')
@section('content')
<section class="bg-primary">
    <div class="container">
        <div class="row align-items-center text-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                <div class="py-4 py-lg-6">
                    <h1 class="mb-0 text-white display-4">Liste de nos vendeurs par pays </h1>
                    <p class="text-white mb-0 lead">Acheter vos produits en fonction de vos pays d'origine</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-7">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="row justify-content-between align-items-center">
                    <div class="col-xl-8 col-md-6 col-12">
                        <h4 class="mb-3 mb-md-0">Filter les vendeurs</h4>
                    </div>
                    <div class="col-xl-2 col-md-3 col-6 pe-0">
                        <!-- Custom select -->
                        <select class="form-select">
                            <option value="">Category</option>
                            <option value="2">Design</option>
                            <option value="3">Development</option>
                            <option value="3">Program</option>
                        </select>
                    </div>
                    <!-- Custom select -->
                    <div class="col-xl-2 col-md-3 col-6">
                        <select class="form-select">
                            <option value="">Sort by</option>
                            <option value="1">Newest</option>
                            <option value="2">Popularity</option>
                            <option value="3">Rated</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="container">
    <div class="row">
        @foreach ($allSellers as $seller)

        <div class="col-xl-3 col-lg-6 col-12">
            <!-- card  -->
            <div class="card mb-4">
                <!-- card body  -->
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="avatar avatar-lg">
                            <img src="{{Storage::url($seller->logo_entreprise)}}" alt="" class="rounded-circle">
                        </div>
                        <div class="ms-3">
                            <h4 class="mb-0"><a href="#" class="text-inherit">{{$seller->libelle_boutique}}</a></h4>
                            <p class="mb-0"> Pays {{$seller->country->nom}} Ville {{$seller->city->nom}}</p>
                        </div>
                    </div>
                    <div class="mt-4 lh-1 d-flex align-items-center">
                      

                        <a href="{{route('boutique.seller', $seller->id)}}" class="text-body text-primary-hover me-3 texttooltip" data-template="video">
                            <i class="fe fe-eye fs-4"></i>
                        </a>
                        <a href="{{route('boutique.seller', $seller->id)}}" class="btn btn-outline-dark">Consulter</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    
    </div>
</div>
@endsection
