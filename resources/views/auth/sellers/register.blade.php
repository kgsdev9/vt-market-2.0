@extends('layouts.layout')
@section('title', 'Inscription de vendeur professionelle')
@section('content')
<section class="py-8 bg-light">
    <div class="container">
        <div class="row">
            <div class="offset-md-2 col-md-8 col-12">
                <h1 class="fw-bold mb-0 display-4 lh-1">Créer votre compte vendeur et commencer à vendre vos produits</h1>
            </div>
        </div>
    </div>
</section>
<section class="py-8">

    <div>
        <section class="container ">

            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                    <!-- Card -->
                    <div class="card border-0 mb-4">
                        <!-- Card header -->
                        <div class="card-header">
                            <h4 class="mb-0">Renseigner les informations si vous voulez etre vendeur </h4>
                        </div>
                        <form  action="{{route('vendeur.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div>
                                    <!-- Form -->
                                    <div class="row">
                                        <!-- Date -->
                                        <div class="mb-3 col-md-3">
                                            <label for="selectDate" class="form-label">Nom Du vendeur légale</label>
                                            <input type="text" class="form-control" name="nom_vendeur" placeholder="GDRD GODO" required="" >

                                        </div>

                                        <div class="mb-3 col-md-3">
                                            <label for="selectDate" class="form-label">Prénom du vendeur</label>
                                            <input type="text" class="form-control" name="prenom_vendeur"  placeholder="Guy stephane" required="" >

                                        </div>

                                        <div class="mb-3 col-md-3">
                                            <label for="selectDate" class="form-label">Adresse Vendeur</label>
                                            <input type="text" class="form-control" name="adresse" placeholder="DOKUI CHAINE-AVION" required="" >

                                        </div>

                                        <div class="mb-3 col-md-3">
                                            <label for="selectDate" class="form-label">Email du vendeur</label>
                                            <input type="email" class="form-control" name="email" placeholder="vendeur@gmail.coml" required="" >

                                        </div>

                                        <div class="mb-3 col-md-3">
                                            <label for="selectDate" class="form-label">Mot de passe</label>
                                            <input type="password" class="form-control" name="password" placeholder="*******" required="" >

                                        </div>


                                        <div class="mb-3 col-md-3">
                                            <label for="selectDate" class="form-label">Piece  d'identité Cni</label>
                                            <input type="file" name="piece"   class="form-control"  required="" >
                                        </div>

                                        <div class="mb-3 col-md-3">
                                            <label for="selectDate" class="form-label">Contact 1 </label>
                                            <input type="text"   name="telephone"  class="form-control"  required="" >

                                        </div>

                                        <div class="mb-3 col-md-3">
                                            <label for="selectDate" class="form-label">Contact 2 </label>
                                            <input type="text" name="contact"  class="form-control"  required="" >

                                        </div>

                                        <hr>
                                        <h3>Information sur la boutique </h3>

                                        <div class="mb-3 col-md-12">
                                            <label for="basic-url" class="form-label">Entrer le nom votre boutique</label>
                                            <div class="input-group mb-1">
                                                <span class="input-group-text">https://vtp-market.com/</span>
                                                <input type="text" class="form-control" name="libelle_boutique"  required="" >
                                            </div>
                                            <small>Entrer simplement le nom sans caractere speciaux</small>
                                        </div>


                                        <div class="mb-3 col-md-4">
                                            <label for="selectDate" class="form-label">Logo de la boutique </label>
                                            <input type="file" class="form-control" name="logo_boutique"  required="" >

                                        </div>

                                        <div class="mb-3 col-md-4">
                                            <label for="selectDate" class="form-label">Selectionner un pays  </label>
                                            <select name="city_id"  class="form-control"  required="" >
                                                <option value="">Choisir </option>
                                                @foreach ($countryAll as $country)
                                                    <option value="{{$country->id}}">{{$country->nom}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="mb-3 col-md-4">
                                            <label for="selectDate" class="form-label">Selectionner une ville   </label>
                                            <select name="country_id" class="form-control"  required="" >
                                                <option value="">Choisir </option>
                                                @foreach ($allCities as $city)
                                                    <option value="{{$city->id}}">{{$city->nom}}</option>
                                                @endforeach
                                            </select>

                                        </div>

                                        <div class="mb-3 col-md-12">
                                            <label for="Excerpt" class="form-label"  >Expliquer en quoi votre boutique est spécialite </label>
                                            <textarea rows="3"  class="form-control text-dark" placeholder="Prouvez nous que vous etes serieux" name="description" required=""></textarea>

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


</section>

@endsection
