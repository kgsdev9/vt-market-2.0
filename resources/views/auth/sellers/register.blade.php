@extends('layouts.layout')
@section('content')
<section class="py-8 bg-light">
    <div class="container">
        <div class="row">
            <div class="offset-md-2 col-md-8 col-12">
                <!-- caption-->
                <h1 class="fw-bold mb-0 display-4 lh-1">Créer votre compte vendeur et commencer à vendre vos produits</h1>
            </div>
        </div>
    </div>
</section>




<section class="py-8">
    <div class="container my-lg-4">
        <div class="row">
            <div class="offset-md-2 col-md-8 col-12">

                <div>
                    <!-- card -->
                    <div class="card border">
                        <!-- card body  -->
                        <div class="card-body p-5">
                            <h2 class="mb-4 fw-semibold">S'inscrire en tant que vendeur </h2>
                            <p>nous allons vous envoyer un lien pour renseigner vos informations de votre boutique</p>
                            <!-- form  -->
                            <form class="needs-validation"  action="{{route('vendors.store')}}"  method="Post">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label" for="company">Email</label>
                                    <input class="form-control" type="email" name="email" placeholder="es@gmail.com"  required="">
                                </div>


                                <button class="btn btn-primary" type="submit">Je debute ma procedure</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
