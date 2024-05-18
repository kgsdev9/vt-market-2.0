@extends('dashboards.master')
@section('title', 'Profil Vendeur')
@section('master')
<div>
    <section class="container-fluid p-4">
        <div class="row">
            <!-- Page header -->
            <div class="col-lg-12 col-md-12 col-12">
                <div class="border-bottom pb-3 mb-3 d-md-flex align-items-center justify-content-between">
                    <div class="mb-3 mb-md-0">
                        <h1 class="mb-1 h2 fw-bold">Information de votre boutique </h1>
                    </div>
                    <div>
                        <a href="#" class="btn btn-outline-secondary">Retourner</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                <!-- Card -->
                <div class="card border-0 mb-4">
                    <!-- Card header -->
                    <div class="card-header">
                        <h4 class="mb-0">Renseigner les informations si vous voulez etre vendeur </h4>
                    </div>
                    <form  action="{{route('vendeur.update', $boutique->id)}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <div>
                                <!-- Form -->
                                <div class="row">
                                    <!-- Date -->
                                    <div class="mb-3 col-md-4">
                                        <label for="selectDate" class="form-label">Nom Du vendeur légale</label>
                                        <input type="text" class="form-control" name="nom_vendeur" placeholder="GDRD GODO" required="" value="{{$boutique->nom_vendeur}}">

                                    </div>

                                    <div class="mb-3 col-md-4">
                                        <label for="selectDate" class="form-label">Prénom du vendeur</label>
                                        <input type="text" class="form-control" name="prenom_vendeur"  placeholder="Guy stephane" required="" value="{{$boutique->prenom_vendeur}}">

                                    </div>

                                    <div class="mb-3 col-md-4">
                                        <label for="selectDate" class="form-label">Adresse Vendeur</label>
                                        <input type="text" class="form-control" name="adresse" placeholder="DOKUI CHAINE-AVION" required=""  value="{{$boutique->adresse}}">

                                    </div>

                                    <div class="mb-3 col-md-4">
                                        <label for="selectDate" class="form-label">Piece  d'identité Cni</label>
                                        <input type="file" name="piece"   class="form-control">
                                    </div>

                                    <div class="mb-3 col-md-4">
                                        <label for="selectDate" class="form-label">Contact 1 </label>
                                        <input type="text"   name="telephone"  class="form-control" value="{{$boutique->telephone}}">

                                    </div>

                                    <div class="mb-3 col-md-4">
                                        <label for="selectDate" class="form-label">Contact 2 </label>
                                        <input type="text" name="contact"  class="form-control" value="{{$boutique->contact}}">

                                    </div>

                                    <hr>
                                    <h3>Information sur la boutique </h3>

                                    <div class="mb-3 col-md-12">
                                        <label for="basic-url" class="form-label">Entrer le nom votre boutique</label>
                                        <div class="input-group mb-1">
                                            <span class="input-group-text">https://vtp-market.com/</span>
                                            <input type="text" class="form-control" name="libelle_boutique" value="{{$boutique->libelle_boutique}}">
                                        </div>
                                        <small>Entrer simplement le nom sans caractere speciaux</small>
                                    </div>


                                    <div class="mb-3 col-md-4">
                                        <label for="selectDate" class="form-label">Logo de la boutique </label>
                                        <input type="file" class="form-control" name="logo_boutique">

                                    </div>

                                    <div class="mb-3 col-md-4">
                                        <label for="selectDate" class="form-label">Selectionner un pays  </label>
                                        <select name="country_id"  class="form-control">
                                            <option value="">Choisir </option>
                                            @foreach ($countryAll as $country)
                                                <option value="{{$country->id}}" {{$country->id == $boutique->country_id ? 'selected' : ''}}>{{$country->nom}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="mb-3 col-md-4">
                                        <label for="selectDate" class="form-label">Selectionner une ville   </label>
                                        <select name="city_id" class="form-control">
                                            <option value="">Choisir </option>
                                            @foreach ($allCities as $city)
                                                <option value="{{$city->id}}" {{ $boutique->city_id == $city->id ? 'selected' : ''}} >{{$city->nom}}</option>

                                            @endforeach
                                        </select>

                                    </div>

                                    <div class="mb-3 col-md-12">
                                        <label for="Excerpt" class="form-label">Expliquer en quoi votre boutique est spécialite </label>
                                        <textarea rows="3"  class="form-control text-dark" placeholder="Prouvez nous que vous etes serieux" name="description">{{$boutique->description}}</textarea>

                                    </div>
                                </div>
                            </div>
                            <button type="submit"  class="btn btn-outline-secondary">Enregistrer mes informations</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>
</div>


@endsection
