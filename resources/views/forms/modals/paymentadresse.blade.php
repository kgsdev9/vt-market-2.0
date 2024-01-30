<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <form action="{{route('register.adresse')}}" method="POST">
                    @csrf
                    <div class="row">
                        <!-- input -->
                        <div class="mb-3 col-md-12">
                            <label class="form-label">Nom et prénom</label>
                            <input type="text"  name="fullname" class="form-control" placeholder="Entrer votre nom et prénom" >
                        </div>

                        <div class="mb-3 col-md-12">
                            <label class="form-label" for="firstNameForAddress">Télephone</label>
                            <input type="text"  name="contact" class="form-control" placeholder="+22449998989" >
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
                          <textarea name="adresse" class="form-control" id="" cols="30" rows="3" placeholder="Préciser l'adresse de livraison du colis"></textarea>
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
