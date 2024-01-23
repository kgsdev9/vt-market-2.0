@extends('layouts.layout')
@section('content')
<section class="pt-5 pb-5">
    <div class="container">
        <div class="row align-items-center">
            <!-- User info -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                <!-- Bg -->
                <div class="rounded-top" style="background: url(../assets/images/background/profile-bg.jpg) no-repeat; background-size: cover; height: 100px"></div>
                <div class="card px-4 pt-2 pb-4 shadow-sm rounded-top-0 rounded-bottom-0 rounded-bottom-md-2">
                    <div class="d-flex align-items-end justify-content-between">
                        <div class="d-flex align-items-center">
                            <div class="me-2 position-relative d-flex justify-content-end align-items-end mt-n5">
                                <img src="../assets/images/avatar/avatar-3.jpg" class="avatar-xl rounded-circle border border-4 border-white" alt="avatar">
                            </div>
                            <div class="lh-1">
                                <h2 class="mb-0">
                                    Bienvenue {{Auth::user()->name}}

                                </h2>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Content -->

        <div class="row mt-0 mt-md-4">
            <div class="col-lg-3 col-md-4 col-12">
                <!-- Side navbar -->
                @include('clients.dashboards.slidebar')
            </div>
            <div class="col-lg-9 col-md-8 col-12">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-12">
                        <!-- Card -->
                        <div class="card mb-4">
                            <div class="p-4">
                                <span class="fs-6 text-uppercase fw-semibold">TOTAL COMMANDE </span>
                                <h2 class="mt-4 fw-bold mb-1 d-flex align-items-center h1 lh-1">467.34</h2>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 col-12">
                        <!-- Card -->
                        <div class="card mb-4">
                            <div class="p-4">
                                <span class="fs-6 text-uppercase fw-semibold">Total  message</span>
                                <h2 class="mt-4 fw-bold mb-1 d-flex align-items-center h1 lh-1">12000</h2>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-12">
                        <!-- Card -->
                        <div class="card mb-4">
                            <div class="p-4">
                                <span class="fs-6 text-uppercase fw-semibold">Total remarque</span>
                                <h2 class="mt-4 fw-bold mb-1 d-flex align-items-center h1 lh-1">480</h2>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card -->



            </div>
        </div>
    </div>
</section>
@endsection
