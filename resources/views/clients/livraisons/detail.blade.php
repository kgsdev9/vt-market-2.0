@extends('layouts.layout')
@section('title', 'Liste de mes commandes')
@section('content')
<section class="pt-5 pb-5">
    <div class="container">
        @include('clients.dashboards.header')

        <!-- Content -->

        <div class="row mt-0 mt-md-4">
            <div class="col-lg-3 col-md-4 col-12">
                <!-- Side navbar -->
                @include('clients.dashboards.slidebar')
            </div>

            <div class="col-lg-9 col-md-8 col-12">
                <div class="card border-0" id="invoice">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-6">
                            <div>
                                <h4 class="mb-0">Code Livraison</h4>
                                <small>{{$livraison->reference}}</small>
                            </div>

                            <div>
                                <h4 class="mb-0">Status de la livraison</h4>
                                <small>{{$livraison->status}}</small>
                            </div>

                        </div>
                        <!-- Row -->
                        <div class="row">
                            <div class="col-md-8 col-12">
                                <span class="fs-6">Rédigé par  </span>
                                <h5 class="mb-3"> {{Auth::user()->name}}</h5>
                            </div>
                        </div>
                        <!-- Row -->
                        <div class="row mb-5">
                            <div class="col-8">
                                <span class="fs-6">Nom du destinataire </span>
                                <h6 class="mb-0">{{$livraison->nom}} {{$livraison->prenom}} </h6>
                            </div>
                            <div class="col-4">
                                <span class="fs-6">Adresse destinataire</span>
                                <h6 class="mb-0">{{$livraison->adresse}}</h6>
                            </div>
                            <div class="col-4">
                                <span class="fs-6">Télephone destinataire</span>
                                <h6 class="mb-0">{{$livraison->telephone}}</h6>
                            </div>
                            <div class="col-4">
                                <span class="fs-6">Contact destinataire </span>
                                <h6 class="mb-0">{{$livraison->contact}}</h6>
                            </div>
                        </div>
                        <!-- Table -->
                        <div class="table-responsive mb-8">
                            <table class="table mb-0 text-nowrap table-borderless">
                                <thead class="table-light">
                                    <tr>
                                        <th>Désignation</th>
                                        <th>Poids</th>
                                        <th>Prix livraison</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($articledelevery  as $article)


                                    <tr class="text-dark">
                                        <td>
                                            {{ $article->designation}}
                                        </td>
                                        <td> {{ $article->poids}}</td>
                                        <td> {{ $article->poids * 2}} €</td>

                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr class="text-dark">
                                        <td colspan="2"></td>
                                        <td colspan="1" class="border-top py-1 fw-bold">Total</td>
                                        <td class="border-top py-1 fw-bold">140</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-9 col-md-8 col-12">
                <!-- Card -->
                <div class="card mb-4">
                    <!-- Card header -->
                    <div class="card-header border-bottom-0">
                        <h3 class="mb-0">Mes livraisons </h3>
                        <span>Liste de mes livraisons  .</span>
                    </div>
                    <!-- Table -->
                    <div class="table-responsive">
                        <table class="table mb-0 text-nowrap table-hover table-centered">
                            <thead class="table-light">
                                <tr>
                                    <th>Réference</th>
                                    <th>Destinataire </th>
                                    <th>Télephone</th>
                                    <th>Ville</th>
                                    <th>Adresse</th>
                                     <th>Status</th>
                                    <th>Action</th>
                                    <th>Réglement</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($livraison as $delivry)
                                <tr>
                                    <td>{{$delivry->reference}}</td>
                                    <td>{{$delivry->client}}</td>
                                    <td>{{$delivry->telephone}}</td>
                                    <td>{{$delivry->country_id}}</td>
                                    <td>{{$delivry->adresse}}</td>
                                     <td>{{$delivry->statut}}</td>
                                    <td>
                                        <a href="" class="text-dark"><i class="fe fe-eye"></i></a>

                                    </td>
                                  <td>
                                    <a href="" class="btn btn-outline-warning">Confirmer la commande</a>
                                  </td>

                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>
@endsection
