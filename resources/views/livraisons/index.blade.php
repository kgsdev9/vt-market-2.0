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
                  <a href="" class="btn btn-outline-dark"> <i class="fe fe-plus"></i>Je Depose une livraison</a>
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

    </div>

</section>

<section class="py-7 py-lg-8">
    <div class="container my-lg-8">
        <div class="row mb-8 justify-content-center">
            <div class="col-lg-6 col-md-12 col-12 text-center">
                <!-- caption -->
                <span class="text-primary mb-3 d-block text-uppercase fw-semibold ls-xl">Need to Know</span>
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
                                <span class="me-auto">What is the cost of an online course</span>
                                <span class="collapse-toggle ms-4">
                                    <i class="fe fe-plus text-primary"></i>
                                </span>
                            </a>
                        </h3>
                    </div>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
                        <div class="py-3 fs-4">Create beautiful website with this Geeks UI template. Get started building a site today.</div>
                    </div>
                    <!-- Card  -->
                    <!-- Card header  -->
                    <div class="border-bottom py-3" id="headingTwo">
                        <h3 class="mb-0 fw-bold">
                            <a href="#" class="d-flex align-items-center text-inherit collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <span class="me-auto">What do I need to take a course?</span>
                                <span class="collapse-toggle ms-4">
                                    <i class="fe fe-plus text-primary"></i>
                                </span>
                            </a>
                        </h3>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample" style="">
                        <div class="py-3 fs-4">
                            Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                    <!-- Card  -->
                    <!-- Card header  -->
                    <div class="border-bottom py-3" id="headingThree">
                        <h3 class="mb-0 fw-bold">
                            <a href="#" class="d-flex align-items-center text-inherit active collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <span class="me-auto">What do I receive for taking this course?</span>
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
                                <span class="me-auto">What willI get if I subscribe to this Certificate?</span>
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
                <div class="mt-8 text-center">
                    <a href="#" class="btn btn-outline-primary">More questions? Visit the Learner Help Center.</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-7 py-lg-8 bg-gray-100">
    <div class="container my-lg-8">
        <div class="row mb-8 justify-content-center">
            <div class="col-lg-6 col-md-12 col-12 text-center">
                <!-- caption -->
                <span class="text-primary mb-3 d-block text-uppercase fw-semibold ls-xl">Testimonials</span>
                <h2 class="mb-2 display-4 fw-bold">What our learners are saying</h2>
                <p class="lead">12+ million people are already learning on Geeks</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-12 mb-4 mb-lg-0">
                <!-- Card -->
                <div class="card shadow-lg">
                    <!-- Card body -->
                    <div class="card-body p-4 p-md-8 text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-quote text-light-primary" viewBox="0 0 16 16">
                            <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z">
                        </path></svg>
                        <p class="lead text-dark mt-3">
                            The generated lorem Ipsum is therefore always free from repetition, injected humour, or words etc generate lorem Ipsum which looks racteristic reasonable.
                        </p>
                    </div>
                    <!-- Card Footer -->
                    <div class="card-footer bg-primary text-center border-top-0">
                        <div class="mt-n8"><img src="../../assets/images/avatar/avatar-1.jpg" alt="avatar" class="rounded-circle border-primary avatar-xl border border-4"></div>
                        <div class="mt-2 text-white">
                            <h3 class="text-white mb-0">Gladys Colbert</h3>
                            <p class="text-white-50 mb-1">Software Engineer at Palansite</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <!-- Card -->
                <div class="card shadow-lg">
                    <div class="card-body p-4 p-md-8 text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-quote text-light-info" viewBox="0 0 16 16">
                            <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z">
                        </path></svg>
                        <p class="lead text-dark mt-3">
                            Lorem ipsum dolor sit amet, consectetur adipi scing elit. Sed vel felis imperdiet, lacinia metus malesuada diamamus rutrum turpis leo, id tincidunt magna
                            sodales.
                        </p>
                    </div>
                    <!-- Card Footer -->
                    <div class="card-footer bg-info text-center border-top-0">
                        <div class="mt-n8"><img src="../../assets/images/avatar/avatar-2.jpg" alt="avatar" class="rounded-circle border-info avatar-xl border border-4"></div>
                        <div class="mt-2 text-white">
                            <h3 class="text-white mb-0">Ella Jones</h3>
                            <p class="text-white-50 mb-1">Software Engineer at Classroom</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-8">
    <div class="container my-lg-8">
        <div class="row">
            <div class="col-lg-6 col-md-8 col-12 mb-6">
                <!-- caption -->
                <h2 class="display-4 mb-3 fw-bold">Our core values</h2>
                <p class="lead">Our core values are the fundamental beliefs of a person or organization geeks academy. We help people understand the difference between right and wrong.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-12">
                <!-- card -->
                <div class="card mb-4 mb-lg-0">
                    <!-- card body -->
                    <div class="card-body p-5">
                        <!-- icon -->
                        <div class="mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-mortarboard text-primary" viewBox="0 0 16 16">
                                <path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917l-7.5-3.5ZM8 8.46 1.758 5.965 8 3.052l6.242 2.913L8 8.46Z"></path>
                                <path d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466 4.176 9.032Zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46l-3.892-1.556Z"></path>
                            </svg>
                        </div>
                        <h3 class="mb-2">Make Education Accessible</h3>
                        <p class="mb-0">Quis cursus turpis in habitant sagittis amet dolor malesuada ut. Volutpat nunc id blanvolutpat nunc.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <!-- card -->
                <div class="card mb-4 mb-lg-0">
                    <!-- card body -->
                    <div class="card-body p-5">
                        <!-- icon -->
                        <div class="mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-people-fill text-primary" viewBox="0 0 16 16">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"></path>
                            </svg>
                        </div>
                        <h3 class="mb-2">Learn and Grow</h3>
                        <p class="mb-0">Quis cursus turpis in habitant sagittis amet dolor malesuada ut. Volutpat nunc id blanvolutpat nunc.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <!-- card -->
                <div class="card mb-4 mb-lg-0">
                    <!-- card body -->
                    <div class="card-body p-5">
                        <!-- icon -->
                        <div class="mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-graph-up-arrow text-primary" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5Z"></path>
                            </svg>
                        </div>
                        <h3 class="mb-2">Make Education Accessible</h3>
                        <p class="mb-0">Quis cursus turpis in habitant sagittis amet dolor malesuada ut. Volutpat nunc id blanvolutpat nunc.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
