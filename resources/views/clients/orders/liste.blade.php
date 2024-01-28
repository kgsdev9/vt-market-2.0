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
                <!-- Card -->
                <div class="card mb-4">
                    <!-- Card header -->
                    <div class="card-header border-bottom-0">
                        <h3 class="mb-0">Mes Commmandes </h3>
                        <span>Liste de vos commandes .</span>
                    </div>
                    <!-- Table -->
                    <div class="table-responsive">
                        <table class="table mb-0 text-nowrap table-hover table-centered">
                            <thead class="table-light">
                                <tr>
                                    <th>Réference</th>
                                    <th>Client</th>
                                    <th>Pays</th>
                                    <th>Ville</th>
                                    <th>Télephone</th>
                                    <th>Status de la commande</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($allCommandeUser as $commande)
                                <tr>
                                    <td>
                                        <h5 class="mb-0">
                                            <a href="#" class="text-inherit">{{$commande->reference}}</a>
                                        </h5>
                                    </td>
                                    <td>{{$commande->owneradresse->fullname}}</td>
                                    <td>{{$commande->owneradresse->country->nom}}</td>
                                    <td>{{$commande->owneradresse->city->nom}}</td>
                                    <td>{{$commande->owneradresse->contact}}</td>
                                    <td>
                                        @if($commande->status == "validee")
                                        <span class="badge bg-success me-4">Validée</span>
                                        @elseif($commande->status == "refuse")
                                        <span class="badge bg-danger me-4">Echec</span>
                                        @elseif($commande->status == "encours")
                                        <span class="badge bg-warning me-4">Encours</span>
                                        @endif
                                    </td>
                                    <td><a href="{{route('show.orders', $commande->id)}}">Voir</a></td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
