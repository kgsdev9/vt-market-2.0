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
                                    <th>Action</th>

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
                                    <td>
                                        <a href="{{route('delivry.show', $delivry->slug)}}">Voir</a>
                                        <a href="{{route('delivry.edit', $delivry->slug)}}">Edition</a>
                                    </td>

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
