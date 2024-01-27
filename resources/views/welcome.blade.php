@extends('layouts.layout')
@section('content')
    <!-- Page Content -->
    <section class="bg-white shadow-sm py-8 bg-cover">
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
                                                <a href="{{route('vendors.registration')}}" class="btn btn-danger">
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

      <section class="pb-lg-8 pb-6">
        <div class="container mb-lg-8">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-md-12 col-12">
                    <div class="text-center mb-lg-8 mb-6">
                        <h2 class="h1 fw-bold">
                           les opportuinités avec nous

                        </h2>
                        <p class="lead mb-0">La plus belle formule que nous avons trouver de vous proposer des produits de tout continent et sphere et un moyen de paiemnt souple.</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-6 col-md-12 col-12">
                    <div class="mb-6 mb-lg-0">
                        <div class="mb-2">
                            <img src="{{asset('hs.jpg')}}" alt="certificate" class="img-fluid w-100">
                        </div>

                    </div>
                </div>
                <div class="col-xl-6 offset-xl-1 col-lg-6 col-md-12 col-12">
                    <div class="row row-cols-2">
                        <div class="col">
                            <div class="mb-4 mb-xl-6">
                                <div class="mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="var(--gk-primary)" class="bi bi-trophy" viewBox="0 0 16 16">
                                        <path d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5zm.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935zM3.504 1c.007.517.026 1.006.056 1.469.13 2.028.457 3.546.87 4.667C5.294 9.48 6.484 10 7 10a.5.5 0 0 1 .5.5v2.61a1 1 0 0 1-.757.97l-1.426.356a.5.5 0 0 0-.179.085L4.5 15h7l-.638-.479a.501.501 0 0 0-.18-.085l-1.425-.356a1 1 0 0 1-.757-.97V10.5A.5.5 0 0 1 9 10c.516 0 1.706-.52 2.57-2.864.413-1.12.74-2.64.87-4.667.03-.463.049-.952.056-1.469H3.504z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4>Livraison garantie et sécurisée </h4>
                                    <p>Nous vous livrons vos colis en Afrique avec nos partenaires de transports fiables.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-lg-6 mb-4">
                                <div class="mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="var(--gk-primary)" class="bi bi-star" viewBox="0 0 16 16">
                                        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4>Paiment Flexible</h4>
                                    <p>Nous avons pensé à vous avec des moyens des paiement locaux telsque mobile money.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-4 mb-md-0">
                                <div class="mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="var(--gk-primary)" class="bi bi-shield-lock" viewBox="0 0 16 16">
                                        <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"></path>
                                        <path d="M9.5 6.5a1.5 1.5 0 0 1-1 1.415l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99a1.5 1.5 0 1 1 2-1.415z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4>Suivie  de la livraison</h4>
                                    <p>Suivez en temps réel l'evolution de votre colis jusqu'à vos portes</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <div class="mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="var(--gk-primary)" class="bi bi-nut" viewBox="0 0 16 16">
                                        <path d="m11.42 2 3.428 6-3.428 6H4.58L1.152 8 4.58 2h6.84zM4.58 1a1 1 0 0 0-.868.504l-3.428 6a1 1 0 0 0 0 .992l3.428 6A1 1 0 0 0 4.58 15h6.84a1 1 0 0 0 .868-.504l3.429-6a1 1 0 0 0 0-.992l-3.429-6A1 1 0 0 0 11.42 1H4.58z"></path>
                                        <path d="M6.848 5.933a2.5 2.5 0 1 0 2.5 4.33 2.5 2.5 0 0 0-2.5-4.33zm-1.78 3.915a3.5 3.5 0 1 1 6.061-3.5 3.5 3.5 0 0 1-6.062 3.5z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4>Remboursement garantie</h4>
                                    <p>Remboursement garantie en cas de probleme de la totalité de vos commandes.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-8 bg-white">
        <div class="container my-lg-4">
            <div class="row">
                <div class="offset-lg-2 col-lg-8 col-md-12 col-12 mb-8">
                    <!-- caption-->
                    <h1 class="display-2 fw-bold mb-3">
                        Nos Collections
                        <span class="text-danger">VTP</span>
                    </h1>
                    <!-- para -->
                    <p class="h2 mb-3">
                        Une plateforme unique pour tous vos besoins professionnels
                    </p>
                    <p class="mb-0 h4 text-body lh-lg">
                        Vendez en ligne depuis votre boutique e-commerce ou sur les réseaux sociaux avec VTP.
                    </p>
                </div>
            </div>
            <!-- gallery -->
            <div class="gallery mb-8">
                <!-- gallery-item -->
                <figure class="gallery__item gallery__item--1 mb-0">
                    <img src="../assets/images/about/geeksui-img-1.jpg" alt="Gallery image 1" class="gallery__img rounded-3">
                </figure>
                <!-- gallery-item -->
                <figure class="gallery__item gallery__item--2 mb-0">
                    <img src="../assets/images/about/geeksui-img-2.jpg" alt="Gallery image 2" class="gallery__img rounded-3">
                </figure>
                <!-- gallery-item -->
                <figure class="gallery__item gallery__item--3 mb-0">
                    <img src="../assets/images/about/geeksui-img-3.jpg" alt="Gallery image 3" class="gallery__img rounded-3">
                </figure>
                <!-- gallery-item -->
                <figure class="gallery__item gallery__item--4 mb-0">
                    <img src="../assets/images/about/geeksui-img-4.jpg" alt="Gallery image 4" class="gallery__img rounded-3">
                </figure>
                <!-- gallery-item -->
                <figure class="gallery__item gallery__item--5 mb-0">
                    <img src="../assets/images/about/geeksui-img-5.jpg" alt="Gallery image 5" class="gallery__img rounded-3">
                </figure>
                <!-- gallery-item -->
                <figure class="gallery__item gallery__item--6 mb-0">
                    <img src="../assets/images/about/geeksui-img-6.jpg" alt="Gallery image 6" class="gallery__img rounded-3">
                </figure>
            </div>
            <div class="row">
                <!-- row -->
                <div class="col-md-6 offset-right-md-6">
                    <!-- heading -->
                    <h1 class="display-4 fw-bold mb-3">Expédition simplifiée</h1>
                    <!-- para -->
                    <p class="lead">Traitez une ou plusieurs commandes en un seul clic et offrez à vos clients des frais d'expédition négociés, grâce à la solution d'expédition de VTP ..</p>
                </div>
            </div>
        </div>
    </section>

            <section class="py-5 bg-light-subtle" data-cue="fadeIn" data-show="true" style="animation-name: fadeIn; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                <div class="container my-lg-7" data-cues="zoomIn" data-disabled="true">
                   <div class="row justify-content-center text-center" data-cue="zoomIn" data-show="true" style="animation-name: zoomIn; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                      <div class="col-lg-6 col-md-9 col-12 d-flex flex-column gap-4">

                         <div>
                            <h2 class="fs-1">Recevoir les nouvelles </h2>
                            <p class="mb-0">Recevoir les dernieres nouvelles et les informatios nouvelles .</p>
                         </div>
                         <div>
                            <form class="row g-2 d-flex mx-lg-7" action="https://codescandy.us1.list-manage.com/subscribe/post?u=b838b4eb099ebf09c3407db0f&amp;id=b01fb647c7&amp;f_id=00e5e0e5f0" method="post" name="mc-embedded-subscribe-form" novalidate="">
                               <div class="col-md-9 col-12">
                                  <label for="notificationEmail" class="visually-hidden"></label>
                                  <input type="email" id="notificationEmail" class="form-control" name="EMAIL" placeholder="Email" required="">
                                  <div class="invalid-feedback text-start">Email.</div>
                               </div>
                               <div class="col-md-3 col-12">
                                  <div class="d-grid">
                                     <button class="btn btn-dark" type="submit" name="subscribe">Souscrire</button>
                                  </div>
                               </div>
                               <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups -->
                               <div style="position: absolute; left: -5000px" aria-hidden="true">
                                  <input class="subscription-form-antispam" type="text" name="b_b838b4eb099ebf09c3407db0f_b01fb647c7" tabindex="-1">
                               </div>
                            </form>
                         </div>
                      </div>
                   </div>
                </div>
             </section>


@endsection
