@extends('layouts.layout')
@section('content')
<main>
    <div class="py-8 bg-light">
        <div class="container">
            <div class="row">
                <div class="offset-md-2 col-md-8 col-12">
                    <!-- caption-->
                    <h1 class="fw-bold mb-1 display-4">Frequently Asked Questions</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- container  -->
    <div class="pt-3">
        <div class="container">
            <div class="row">
                <div class="offset-md-2 col-md-8 col-12">
                    <div>
                        <!-- breadcrumb  -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="help-center.html">Help Center</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Faq</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="py-8">
        <div class="container">
            <div class="row">
                <div class="offset-md-2 col-md-8 col-12">
                    <div class="mb-4">
                        <h2 class="mb-0 fw-semibold">Most asked</h2>
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
            <div class="row">
                <div class="offset-md-2 col-md-8 col-12">
                    <div class="mb-4 mt-6">
                        <h2 class="mb-0 fw-semibold">General inquiries</h2>
                    </div>
                    <!-- accordion  -->
                    <div class="accordion accordion-flush" id="accordionExample2">
                        <div class="border p-3 rounded-3 mb-2" id="headingEight">
                            <h3 class="mb-0 fs-4">
                                <a href="#" class="d-flex align-items-center text-inherit" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    <span class="me-auto">Is there a 14-days trial?</span>
                                    <span class="collapse-toggle ms-4">
                                        <i class="fe fe-chevron-down"></i>
                                    </span>
                                </a>
                            </h3>
                            <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample2">
                                <div class="pt-2">
                                    Vestibulum nec porta tortor. Phasellus metus quam, semper ut tincidunt sit amet, viverra quis neque. Nullam mattis mollis massa nec pulvinar. In eu tellus
                                    quis urna vestibulum pulvinar.
                                </div>
                            </div>
                        </div>
                        <!-- Card  -->
                        <!-- Card header  -->
                        <div class="border p-3 rounded-3 mb-2" id="headingNine">
                            <h3 class="mb-0 fs-4">
                                <a href="#" class="d-flex align-items-center text-inherit" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    <span class="me-auto">What’s the benefits of the Premium Membership?</span>
                                    <span class="collapse-toggle ms-4">
                                        <i class="fe fe-chevron-down"></i>
                                    </span>
                                </a>
                            </h3>
                            <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample2">
                                <div class="pt-3">
                                    Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <!-- Card  -->
                        <!-- Card header  -->
                        <div class="border p-3 rounded-3 mb-2" id="headingTen">
                            <h3 class="mb-0 fs-4">
                                <a href="#" class="d-flex align-items-center text-inherit active" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                    <span class="me-auto">How much time I will need to learn this app?</span>
                                    <span class="collapse-toggle ms-4">
                                        <i class="fe fe-chevron-down"></i>
                                    </span>
                                </a>
                            </h3>
                            <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample2">
                                <div class="pt-3">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                            </div>
                        </div>
                        <!-- Card  -->
                        <!-- Card header  -->
                        <div class="border p-3 rounded-3 mb-2" id="headingEleven">
                            <h3 class="mb-0 fs-4">
                                <a href="#" class="d-flex align-items-center text-inherit active" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                    <span class="me-auto">Are there any free tutorials available?</span>
                                    <span class="collapse-toggle ms-4">
                                        <i class="fe fe-chevron-down"></i>
                                    </span>
                                </a>
                            </h3>
                            <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExample2">
                                <div class="pt-3">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="offset-md-2 col-md-8 col-12">
                    <div class="mb-4 mt-6">
                        <h2 class="mb-0 fw-semibold">Support</h2>
                    </div>
                    <div class="accordion accordion-flush" id="accordionExample3">
                        <div class="border p-3 rounded-3 mb-2" id="headingTwelve">
                            <h3 class="mb-0 fs-4">
                                <a href="#" class="d-flex align-items-center text-inherit" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                    <span class="me-auto">Are there any free tutorials available?</span>
                                    <span class="collapse-toggle ms-4">
                                        <i class="fe fe-chevron-down"></i>
                                    </span>
                                </a>
                            </h3>
                            <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve" data-bs-parent="#accordionExample3">
                                <div class="pt-2">
                                    Vestibulum nec porta tortor. Phasellus metus quam, semper ut tincidunt sit amet, viverra quis neque. Nullam mattis mollis massa nec pulvinar. In eu tellus
                                    quis urna vestibulum pulvinar.
                                </div>
                            </div>
                        </div>
                        <!-- Card  -->
                        <!-- Card header  -->
                        <div class="border p-3 rounded-3 mb-2" id="headingThirteen">
                            <h3 class="mb-0 fs-4">
                                <a href="#" class="d-flex align-items-center text-inherit" data-bs-toggle="collapse" data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                                    <span class="me-auto">Is there a month-to-month payment option?</span>
                                    <span class="collapse-toggle ms-4">
                                        <i class="fe fe-chevron-down"></i>
                                    </span>
                                </a>
                            </h3>
                            <div id="collapseThirteen" class="collapse" aria-labelledby="headingThirteen" data-bs-parent="#accordionExample3">
                                <div class="pt-3">
                                    Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <!-- Card  -->
                        <!-- Card header  -->
                        <div class="border p-3 rounded-3 mb-2" id="headingFourteen">
                            <h3 class="mb-0 fs-4">
                                <a href="#" class="d-flex align-items-center text-inherit active" data-bs-toggle="collapse" data-bs-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                                    <span class="me-auto">How do I take a Geeks course?</span>
                                    <span class="collapse-toggle ms-4">
                                        <i class="fe fe-chevron-down"></i>
                                    </span>
                                </a>
                            </h3>
                            <div id="collapseFourteen" class="collapse" aria-labelledby="headingFourteen" data-bs-parent="#accordionExample3">
                                <div class="pt-3">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                            </div>
                        </div>
                        <!-- Card  -->
                        <!-- Card header  -->
                        <div class="border p-3 rounded-3 mb-2" id="headingFifteen">
                            <h3 class="mb-0 fs-4">
                                <a href="#" class="d-flex align-items-center text-inherit active" data-bs-toggle="collapse" data-bs-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
                                    <span class="me-auto">How Does Geeks Courses Work?</span>
                                    <span class="collapse-toggle ms-4">
                                        <i class="fe fe-chevron-down"></i>
                                    </span>
                                </a>
                            </h3>
                            <div id="collapseFifteen" class="collapse" aria-labelledby="headingFifteen" data-bs-parent="#accordionExample3">
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
</main>
@endsection
