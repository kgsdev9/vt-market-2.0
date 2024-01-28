@extends('dashboards.master')

@section('master')
<section class="container-fluid p-4">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <div class="border-bottom pb-3 mb-3 d-lg-flex justify-content-between align-items-center">
                <div class="mb-3 mb-lg-0">
                    <h1 class="mb-0 h2 fw-bold">Bienenue {{Auth::user()->name}} </h1>
                </div>
            </div>
        </div>
    </div>
    @can('is_administrateur')
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-12 col-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                        <div>
                            <span class="fs-6 text-uppercase fw-semibold ls-md">Total commande </span>
                        </div>
                    </div>
                    <h2 class="fw-bold mb-1">{{$countCommande}}</h2>
                    <span class="ms-1 fw-medium">Toutes les commandes ainsi que  les echecs </span>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-12 col-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                        <div>
                            <span class="fs-6 text-uppercase fw-semibold ls-md">Mes révénus </span>
                        </div>
                    </div>
                    <h2 class="fw-bold mb-1">{{$countRevenues}} €  - {{$countRevenues * 650}} Fcfa </h2>
                    <span class="ms-1 fw-medium">Cet total prend en compte les echecs de paiement </span>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-12 col-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                        <div>
                            <span class="fs-6 text-uppercase fw-semibold ls-md">Total produit</span>
                        </div>
                    </div>
                    <h2 class="fw-bold mb-1">{{$countProducts}}</h2>
                    <span class="text-success fw-semibold">
                        <i class="fe fe-trending-up me-1"></i>
                       Pour {{$countBoutique}}
                    </span>
                    <span class="ms-1 fw-medium">boutiques</span>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-12 col-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                        <div>
                            <span class="fs-6 text-uppercase fw-semibold ls-md">Total client </span>
                        </div>
                        <div>
                            <span class="fe fe-user-check fs-3 text-primary"></span>
                        </div>
                    </div>
                    <h2 class="fw-bold mb-1">{{$countUsers}}</h2>
                    <span class="ms-1 fw-medium">Tous les utilisateurs </span>
                </div>
            </div>
        </div>
    </div>
    @endcan
    @can('is_seller')
    <div class="col-xl-3 col-lg-6 col-md-12 col-12">
        <div class="card mb-4">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                    <div>
                        <span class="fs-6 text-uppercase fw-semibold ls-md">Mes produits</span>
                    </div>
                </div>
                <h2 class="fw-bold mb-1"> {{$countProducts}} </h2>
                <span class="ms-1 fw-medium">Total des produits ajoutés </span>
            </div>
        </div>
    </div>


    @endcan
</section>
@endsection
