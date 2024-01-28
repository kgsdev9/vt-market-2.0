@extends('layouts.layout')
@section('title', 'Mes adresses')
@section('content')
<section class="pt-5 pb-5">
    <div class="container">
        @include('clients.dashboards.header')


        <div class="row mt-0 mt-md-4">
            <div class="col-lg-3 col-md-4 col-12">
                <!-- Side navbar -->
                @include('clients.dashboards.slidebar')
            </div>
            <div class="col-lg-9 col-md-8 col-12">
                <!-- Card -->
                <div class="card mb-4">
                    <!-- Card header -->
                    <div class="card-header">
                        <div class="mb-lg-0 mb-3">
                            <h3 class="mb-1">Liste de mes adresse</h3>

                        </div>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">
                        <!-- List group -->
                        <ul class="list-group list-group-flush mb-4">
                            <!-- List group item  -->
                           @foreach ($allAdresseUser as $adresse)

                            <li class="list-group-item px-0 pt-0 pb-4">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-check">

                                            <label class="form-check-label" for="customRadio1">
                                                <span class="h4">{{$adresse->country->nom}} -  {{$adresse->city->nom}}</span>
                                                <span> {{$adresse->fullname}}</span>
                                                <span class="d-block">{{$adresse->adresse}}</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#" class="btn btn-outline-secondary btn-sm">Suprimer</a>
                                    </div>
                                </div>
                            </li>
                            @endforeach

                        </ul>
                        <!-- button -->

                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                           Enregistrer une adresse
                          </button>
                       @include('forms.modals.paymentadresse')
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
