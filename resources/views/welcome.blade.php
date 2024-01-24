@extends('layouts.layout')
@section('content')
    <!-- Page Content -->
    <section class="bg-white py-8 bg-cover">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div>
                        <div class="text-center text-md-start">
                            <!-- heading -->
                            <h1 class="display-2 fw-bold mb-3">Commercialiser vos produits avec le monde </h1>
                            <!-- lead -->
                            <p class="lead">Echanger c'est créer un lien reciproque, Alors n'attendez plus pour construire une relation solide ...</p>
                        </div>
                        <div class="mt-8">
                            <!-- card -->
                            <div class="bg-white rounded-md-pill">
                                <!-- card body -->
                                <div class="p-md-2 p-4">
                                    <div class="row">
                                        <!-- col -->
                                        <div class="col-md-6">
                                            <div class="d-grid mb-2 mb-md-0">
                                                <!-- btn -->
                                                <a href="#" class="btn btn-danger">
                                                    <i class="fe fe-heart me-2"></i>
                                                    Commencer à vendre
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-grid">
                                                <a href="{{route('boutique.index')}}" class="btn btn-outline-secondary">
                                                    <i class="fe fe-shopping-cart me-2"></i>

                                                    Consulter les boutiques
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-5 col-12 text-center">
                    <div class="position-relative d-none d-lg-block">
                        <img src="{{asset('panier.png')}}" class="img-fluid" alt="img" >



                    </div>
                </div>
            </div>
        </div>
    </section>


      <section class="bg-white py-4 shadow-sm">
        <div class="container">
          <div class="row align-items-center g-0">
            <!-- Features -->
            <div class="col-xl-4 col-lg-4 col-md-6 mb-lg-0 mb-4">
              <div class="d-flex align-items-center">
                <span class="icon-shape icon-lg  rounded-circle text-center text-dark-warning fs-4">
                  <i class="fe fe-video"></i>
                </span>
                <div class="ms-3">
                  <h4 class="mb-0 fw-semibold">Discuter avec les vendeurs</h4>
                  <p class="mb-0">Discuter avec les vendeurs</p>
                </div>
              </div>
            </div>
            <!-- Features -->
            <div class="col-xl-4 col-lg-4 col-md-6 mb-lg-0 mb-4">
              <div class="d-flex align-items-center">
                <span class="icon-shape icon-lg  rounded-circle text-center text-dark-warning fs-4">
                  <i class="fe fe-shopping-bag"></i>
                </span>
                <div class="ms-3">
                  <h4 class="mb-0 fw-semibold">Historique de livraison</h4>
                  <p class="mb-0">Suivez l'evolution de votre commande</p>
                </div>
              </div>
            </div>
            <!-- Features -->
            <div class="col-xl-4 col-lg-4 col-md-12">
              <div class="d-flex align-items-center">
                <span class="icon-shape icon-lg rounded-circle text-center text-dark-warning fs-4">
                  <i class="fe fe-clock"></i>
                </span>
                <div class="ms-3">
                  <h4 class="mb-0 fw-semibold">Livraison Garantie</h4>
                  <p class="mb-0">Nous livrons les colis partout en Afrique</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>



      @livewire('card-product')


            <section class="py-8 bg-light card">
                <div class="container my-lg-8">
                    <div class="row">
                        <div class="offset-lg-2 col-lg-8 col-md-12 col-12 text-center">
                            <span class="fs-4 text-warning ls-md text-uppercase fw-semibold">Commencer maintenant </span>
                            <!-- heading  -->
                            <h2 class="display-3 mt-4 mb-3 fw-bold">Commercialiser vos produits et faites des révenus</h2>
                            <!-- para  -->
                            <p class="lead px-lg- 8 mb-6">Béneficiez des avantages considérables avec VTP MARKET .</p>
                            <a href="#" class="btn btn-outline-secondary">Commencer maintenant</a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="container">
                <section class="py-6">
                    <div class="container">

                        <div class="row mt-6">
                            <div class="col-md-12">
                                <!-- title -->
                                <h2 class="mb-4">Nos collections</h2>
                            </div>
                            @foreach ($allCategories as $category)
                            <div class="col-xl-3 col-md-6 col-12">
                                <div class="card mb-4 card-hover border">
                                    <a href="#!">
                                        <img src="{{Storage::url($category->image)}}" alt="writing" class="img-fluid w-100 h-100 rounded-top-3">
                                    </a>

                                </div>
                            </div>

                            @endforeach

                        </div>
                    </div>
                </section>
            </section>

            <section class="py-lg-8 py-6 bg-gray-100">
                <div class="container my-lg-8">
                    <div class="row">
                        <div class="col-xl-10 offset-xl-1 col-md-12 col-12">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-12 col-12">
                                    <div class="mb-5 mb-lg-0">
                                        <h2 class="display-4 fw-bold mb-3">
                                            Une Experience unique avec nous

                                        </h2>
                                        <p class="mb-5 lead">Afin de garantir une expérience d'achat réussie a nos propects, sur VTP-MARKET se sont les vendeurs qui supportent la charge des frais d'envoi de colis..</p>
                                        <a href="#!" class="btn btn-outline-secondary">Contactez nous </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 offset-lg-1 col-md-12 col-12">
                                    <div class="d-flex justify-content-center align-items-center position-relative rounded border-gray-100 border border-4 rounded-3 bg-cover" style="background-image: url(); height: 300px">
                                        <a class="glightbox icon-shape rounded-circle btn-play icon-xl" href="#">
                                            <i class="fe fe-play"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

@endsection
