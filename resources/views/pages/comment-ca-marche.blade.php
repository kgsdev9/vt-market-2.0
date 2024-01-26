@extends('layouts.layout')
@section('content')
<section class="py-8 bg-warning">
    <div class="container my-lg-8">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-6 col-12">
                <!-- caption-->
                <h1 class="fw-bold mb-1 display-3">Comment ca marche ?</h1>
                <!-- para -->
                <p class="mb-5 text-dark">Consulter la politique d'utilisation et confidentialité et de paiement du groupe VTP </p>


            </div>
            <div class="col-md-6 col-12">
                <div class="d-flex align-items-center justify-content-end">
                    <!-- img  -->
                    <img src="../assets/images/png/3d-girl.png" alt="girlsetting" class="text-center img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-8">
    <div class="container">
        <div class="row">
            <div class="offset-md-2 col-md-8 col-12">
                <div class="mb-4">
                    <h2 class="mb-0 fw-semibold">Comment ca marche ?</h2>
                </div>
                <div class="accordion accordion-flush" id="accordionExample">
                    <div class="border p-3 rounded-3 mb-2" id="headingOne">
                        <h3 class="mb-0 fs-4">
                            <a href="#" class="d-flex align-items-center text-inherit active collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                <span class="me-auto">Is there a 14-days trial?</span>
                                <span class="collapse-toggle ms-4">
                                    <i class="fe fe-chevron-down"></i>
                                </span>
                            </a>
                        </h3>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
                            <div class="pt-2">
                                Vestibulum nec porta tortor. Phasellus metus quam, semper ut tincidunt sit amet, viverra quis neque. Nullam mattis mollis massa nec pulvinar. In eu tellus
                                quis urna vestibulum pulvinar.
                            </div>
                        </div>
                    </div>
                    <!-- Card  -->
                    <!-- Card header  -->
                    <div class="border p-3 rounded-3 mb-2" id="headingTwo">
                        <h3 class="mb-0 fs-4">
                            <a href="#" class="d-flex align-items-center text-inherit collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <span class="me-auto">What’s the benefits of the Premium Membership?</span>
                                <span class="collapse-toggle ms-4">
                                    <i class="fe fe-chevron-down"></i>
                                </span>
                            </a>
                        </h3>

                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="pt-3">
                                Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                <br>
                                <br>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur sit quos facere? Eum praesentium aut voluptatem, ullam, quia tempora quam non, beatae
                                repudiandae esse excepturi sapiente tempore illo nobis fugiat nulla. Obcaecati voluptatum quos a vero minus dicta veniam illo cupiditate. Ipsam, fuga!
                            </div>
                        </div>
                    </div>
                    <!-- Card  -->
                    <!-- Card header  -->
                    <div class="border p-3 rounded-3 mb-2" id="headingThree">
                        <h3 class="mb-0 fs-4">
                            <a href="#" class="d-flex align-items-center text-inherit active" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                <span class="me-auto">How much time I will need to learn this app?</span>
                                <span class="collapse-toggle ms-4">
                                    <i class="fe fe-chevron-down"></i>
                                </span>
                            </a>
                        </h3>

                        <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample" style="">
                            <div class="pt-3">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                brunch. Food truck quinoa nesciunt laborum eiusmod.
                            </div>
                        </div>
                    </div>
                    <!-- Card  -->
                    <!-- Card header  -->
                    <div class="border p-3 rounded-3 mb-2" id="headingFour">
                        <h3 class="mb-0 fs-4">
                            <a href="#" class="d-flex align-items-center text-inherit active collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <span class="me-auto">Are there any free tutorials available?</span>
                                <span class="collapse-toggle ms-4">
                                    <i class="fe fe-chevron-down"></i>
                                </span>
                            </a>
                        </h3>

                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample" style="">
                            <div class="pt-3">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                brunch. Food truck quinoa nesciunt laborum eiusmod.
                            </div>
                        </div>
                    </div>
                    <div class="border p-3 rounded-3 mb-2" id="headingFive">
                        <h3 class="mb-0 fs-4">
                            <a href="#" class="d-flex align-items-center text-inherit active collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <span class="me-auto">Is there a month-to-month payment option?</span>
                                <span class="collapse-toggle ms-4">
                                    <i class="fe fe-chevron-down"></i>
                                </span>
                            </a>
                        </h3>

                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                            <div class="pt-3">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                brunch. Food truck quinoa nesciunt laborum eiusmod.
                            </div>
                        </div>
                    </div>
                    <div class="border p-3 rounded-3 mb-2" id="headingSix">
                        <h3 class="mb-0 fs-4">
                            <a href="#" class="d-flex align-items-center text-inherit active collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                <span class="me-auto">How do I take a Geeks course?</span>
                                <span class="collapse-toggle ms-4">
                                    <i class="fe fe-chevron-down"></i>
                                </span>
                            </a>
                        </h3>

                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                            <div class="pt-3">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                brunch. Food truck quinoa nesciunt laborum eiusmod.
                            </div>
                        </div>
                    </div>
                    <div class="border p-3 rounded-3 mb-2" id="headingSeven">
                        <h3 class="mb-0 fs-4">
                            <a href="#" class="d-flex align-items-center text-inherit active collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                <span class="me-auto">How Does Geeks Courses Work?</span>
                                <span class="collapse-toggle ms-4">
                                    <i class="fe fe-chevron-down"></i>
                                </span>
                            </a>
                        </h3>

                        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                            <div class="pt-3">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                brunch. Food truck quinoa nesciunt laborum eiusmod.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>


@endsection
