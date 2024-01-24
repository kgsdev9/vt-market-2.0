@extends('layouts.layout')
@section('content')
<section class="pt-5 pb-5">
    <div class="container">
        <div class="row align-items-center">
            <!-- User info -->
            @include('clients.dashboards.header')
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
                                <h2 class="mt-4 fw-bold mb-1 d-flex align-items-center h1 lh-1">{{$countOrders}}</h2>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 col-12">
                        <!-- Card -->
                        <div class="card mb-4">
                            <div class="p-4">
                                <span class="fs-6 text-uppercase fw-semibold">Total  message</span>
                                <h2 class="mt-4 fw-bold mb-1 d-flex align-items-center h1 lh-1">0</h2>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-12">
                        <!-- Card -->
                        <div class="card mb-4">
                            <div class="p-4">
                                <span class="fs-6 text-uppercase fw-semibold">Total remarque</span>
                                <h2 class="mt-4 fw-bold mb-1 d-flex align-items-center h1 lh-1">0</h2>

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
