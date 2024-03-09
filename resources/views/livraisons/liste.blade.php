@extends('layouts.layout')
@section('content')
<section class="py-8 bg-white">
    <div class="container my-lg-4">
        <div class="row">
            <div class="offset-lg-2 col-lg-8 col-md-12 col-12 mb-8">
                <!-- caption-->
                <h1 class="display-2 fw-bold mb-3">
                  Livraison Express en Afrique
                    <span class="text-danger">Avec VTP EXPRESS LIVRAISON</span>
                </h1>
                <!-- para -->
                <p class="h2 mb-3">
                    Nous sommes heureux de vous informer que vous nous pouvons transporteur vos colis dans plusieurs destination en afrique à moindre cout, remboursement garantie en cas de probleme
                </p>
                <p class="mb-0 h4 text-body lh-lg text-center">
                  <a href="{{route('delivry.create')}}" class="btn btn-outline-dark"> <i class="fe fe-plus"></i>Je Depose une livraison</a>
                  <a href="" class="btn btn-outline-dark"> <i class="fe fe-eye"></i> Suivre une livraison</a>
                </p>
            </div>
        </div>
        <!-- gallery -->
        <div class="gallery mb-8">
            <!-- gallery-item -->
            <figure class="gallery__item gallery__item--1 mb-0">
                <img src="{{asset('livraison01.jpg')}}" alt="Gallery image 1" class="gallery__img rounded-3">
            </figure>
            <!-- gallery-item -->
            <figure class="gallery__item gallery__item--2 mb-0">
                <img src="{{asset('livraisonfemme2.jpg')}}" alt="Gallery image 2" class="gallery__img rounded-3">
            </figure>
            <!-- gallery-item -->
            <figure class="gallery__item gallery__item--3 mb-0">
                <img src="{{asset('livraison08.jpg')}}" alt="Gallery image 3" class="gallery__img rounded-3">
            </figure>
            <!-- gallery-item -->
            <figure class="gallery__item gallery__item--4 mb-0">
                <img src="{{asset('livraison11.jpg')}}" alt="Gallery image 4" class="gallery__img rounded-3">
            </figure>
            <!-- gallery-item -->
            <figure class="gallery__item gallery__item--5 mb-0">
                <img src="{{asset('livraison03.jpg')}}" alt="Gallery image 5" class="gallery__img rounded-3">
            </figure>
            <!-- gallery-item -->
            <figure class="gallery__item gallery__item--6 mb-0">
                <img src="{{asset('livraison05.jpg')}}" alt="Gallery image 6" class="gallery__img rounded-3">
            </figure>
        </div>

    </div>

</section>

<section class="py-7 py-lg-8">
    <div class="container my-lg-8">
        <div class="row mb-8 justify-content-center">
            <div class="col-lg-6 col-md-12 col-12 text-center">
                <!-- caption -->
                <h2 class="mb-2 display-4 fw-bold">Les questions frequemment posées par nos clients.</h2>
            </div>
        </div>
        <!-- row -->

        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-12">
                <div class="accordion accordion-flush" id="accordionExample">
                    <div class="border-bottom py-3" id="headingOne">
                        <h3 class="mb-0 fw-bold">
                            <a href="#" class="d-flex align-items-center text-inherit active collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                <span class="me-auto">Comment vous gérer les echecs des livraisons</span>
                                <span class="collapse-toggle ms-4">
                                    <i class="fe fe-plus text-primary"></i>
                                </span>
                            </a>
                        </h3>
                    </div>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
                        <div class="py-3 fs-4">En cas de perte du colis comment sommes nous dédommager .</div>
                    </div>
                    <!-- Card  -->
                    <!-- Card header  -->
                    <div class="border-bottom py-3" id="headingTwo">
                        <h3 class="mb-0 fw-bold">
                            <a href="#" class="d-flex align-items-center text-inherit collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <span class="me-auto">En cas de perte du colis comment sommes nous dédommager ?</span>
                                <span class="collapse-toggle ms-4">
                                    <i class="fe fe-plus text-primary"></i>
                                </span>
                            </a>
                        </h3>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample" style="">
                        <div class="py-3 fs-4">
                            Vue que nous payons avant les frais de livraison diretement
                        </div>
                    </div>
                    <!-- Card  -->
                    <!-- Card header  -->
                    <div class="border-bottom py-3" id="headingThree">
                        <h3 class="mb-0 fw-bold">
                            <a href="#" class="d-flex align-items-center text-inherit active collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <span class="me-auto">Quand le produit arrive sommes nous contacter pour récuperer nos colis</span>
                                <span class="collapse-toggle ms-4">
                                    <i class="fe fe-plus text-primary"></i>
                                </span>
                            </a>
                        </h3>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample" style="">
                        <div class="py-3 fs-4">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                            Food truck quinoa nesciunt laborum eiusmod.
                        </div>
                    </div>
                    <!-- Card  -->
                    <!-- Card header  -->
                    <div class="pt-3" id="headingFour">
                        <h3 class="mb-0 fw-bold">
                            <a href="#" class="d-flex align-items-center text-inherit active" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                <span class="me-auto">Sommes nous dédommager en cas de retard d'une livraison ?</span>
                                <span class="collapse-toggle ms-4">
                                    <i class="fe fe-plus text-primary"></i>
                                </span>
                            </a>
                        </h3>
                    </div>
                    <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionExample" style="">
                        <div class="py-3 fs-4">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                            Food truck quinoa nesciunt laborum eiusmod.
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection
