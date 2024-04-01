@extends('layouts.layout')
@section('title','Création une  nouvelle  livraison')
@section('content')

<section class="py-8 container ">
   <div class="my-lg-4">
       <div class="row">
           <div class="col-md-8 col-12">

               <div>
                   <!-- card -->
                   <div class="card border">
                       <!-- card body  -->
                       <div class="card-body p-5">
                           <h2 class="mb-4 fw-semibold">Renseigner les informations du destinataire </h2>
                           <!-- form  -->

                               <!-- input  -->
                               <div class="mb-3">
                                   <label class="form-label" for="name">Nom du destinataire </label>
                                   <input class="form-control" type="text" name="nom" placeholder="Votre nom" id="nom" required="" >

                               </div>
                               <!-- input  -->
                               <div class="mb-3">
                                   <label class="form-label" for="company">Prénom du destinataire</label>
                                   <input class="form-control" type="text" name="prenom" placeholder="Votre prénom" id="prenom" required="" >
                               </div>
                               <!-- input  -->
                               <div class="mb-3">
                                   <label class="form-label" for="email">
                                       Adresse email
                                       <span class="text-danger">*</span>
                                   </label>
                                   <input class="form-control" type="text" name="email" placeholder="Adresse email" id="email" required="" >
                               </div>

                               <div class="mb-3">
                                   <label class="form-label" for="telephone">
                                      Télephone
                                       <span class="text-danger">*</span>
                                   </label>
                                   <input class="form-control" type="text" name="telephone" placeholder="Entrer votre numro de telephone" id="telephone" required="" >
                               </div>


                               <div class="mb-3">
                                   <label class="form-label" for="contact">
                                      Contact WHattssap
                                       <span class="text-danger">*</span>
                                   </label>
                                   <input class="form-control" type="text" name="contact" placeholder="Entrer votre whattsap" id="contact" required="" >
                               </div>

                               <div class="mb-3">
                                   <label class="form-label" for="contact">
                                     Ville
                                       <span class="text-danger">*</span>
                                   </label>
                                   <select name="city_id" id="city_id" class="form-control" >
                                       <option value="">Selectionner un pays</option>
                                       @foreach ($allCities as $city)
                                       <option value="{{$city->id}}">{{$city->nom}}</option>
                                       @endforeach

                                   </select>
                               </div>

                               <div class="mb-3">
                                   <label class="form-label" for="adresse">
                                      Adresse
                                       <span class="text-danger">*</span>
                                   </label>
                                   <textarea name="adresse" class="form-control" id="adresse" cols="30" rows="2" ></textarea>

                               </div>
                               <div class="mb-3">
                                   <div id="designationRows">

                                   </div>
                                   <br>
                                   <div class="row">
                                       <div class="col-md-6">
                                           <button type="button" class="btn btn-outline-success" onclick="ajouterDesItems()">Ajouter Une nouveau article</button>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="file" name="images[]" id="images" multiple accept="image/*" class="form-control">
                                        </div>

                                   </div>
                               </div>
                               <div id="previewContainer"></div>
                               <br>
                               <button class="btn btn-outline-primary" onclick="saveLivraison()">Enregistrer la livraison</button>
                       </div>
                   </div>
               </div>
           </div>
           {{-- <div class="col-md-4">

               <div id="preview"></div>
           </div> --}}
       </div>
   </div>
</section>
@endsection

@push('script')
<script src="{{asset('assets/functionnalites/livraison.js')}}">
</script>

@endpush
