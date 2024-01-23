@extends('layouts.layout')
@section('content')
<section class="pt-5 pb-5">
    <div class="container">
        <div class="row align-items-center">
            <!-- User info -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                <!-- Bg -->
                <div class="rounded-top" style="background: url(../assets/images/background/profile-bg.jpg) no-repeat; background-size: cover; height: 100px"></div>
                <div class="card px-4 pt-2 pb-4 shadow-sm rounded-top-0 rounded-bottom-0 rounded-bottom-md-2">
                    <div class="d-flex align-items-end justify-content-between">
                        <div class="d-flex align-items-center">
                            <div class="me-2 position-relative d-flex justify-content-end align-items-end mt-n5">
                                <img src="../assets/images/avatar/avatar-3.jpg" class="avatar-xl rounded-circle border border-4 border-white" alt="avatar">
                            </div>
                            <div class="lh-1">
                                <h2 class="mb-0">
                                    Bienvenue {{Auth::user()->name}}

                                </h2>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

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

                          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <form action="{{route('register.adresse')}}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <!-- input -->
                                                <div class="mb-3 col-md-12">
                                                    <label class="form-label" for="firstNameForAddress">Nom et prénom</label>
                                                    <input type="text"  name="fullname" class="form-control" placeholder="Enter first name" id="firstNameForAddress">
                                                </div>

                                                <div class="mb-3 col-12">
                                                    <label class="form-label" for="contryForAddress">Pays</label>
                                                    <select  name="country_id" class="form-select">
                                                        <option selected="">Selectionner un pays </option>
                                                        @foreach ($country as $pays)
                                                        <option value="{{$pays->id}}">{{$pays->nom}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="mb-3 col-12">
                                                    <label class="form-label" for="contryForAddress">Ville</label>
                                                    <select  name="city_id" class="form-select">
                                                        <option selected="">Selectionner une ville </option>
                                                        @foreach ($allCities as $city)
                                                        <option value="{{$city->id}}">{{$city->nom}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="mb-3 col-12">
                                                    <label class="form-label" for="addressForAddress">Addresse</label>
                                                  <textarea name="description" class="form-control" id="" cols="30" rows="3"></textarea>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                                    <button type="submit" class="btn btn-primary" >Enregistrer</button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>

                                </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
