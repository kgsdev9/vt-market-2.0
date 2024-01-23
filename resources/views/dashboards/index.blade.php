@extends('dashboards.master')

@section('master')
<section class="container-fluid p-4">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <div class="border-bottom pb-3 mb-3 d-lg-flex justify-content-between align-items-center">
                <div class="mb-3 mb-lg-0">
                    <h1 class="mb-0 h2 fw-bold">Bienenue </h1>
                </div>
               
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-12 col-12">
            <!-- Card -->
            <div class="card mb-4">
                <!-- Card body -->
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                        <div>
                            <span class="fs-6 text-uppercase fw-semibold ls-md">Total commande </span>
                        </div>
                        <div>
                            <span class="fe fe-shopping-bag fs-3 text-primary"></span>
                        </div>
                    </div>
                    <h2 class="fw-bold mb-1">$10,800</h2>
                    <span class="text-success fw-semibold">
                        <i class="fe fe-trending-up me-1"></i>
                        +20.9$
                    </span>
                    <span class="ms-1 fw-medium">Number of sales</span>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-12 col-12">
            <!-- Card -->
            <div class="card mb-4">
                <!-- Card body -->
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                        <div>
                            <span class="fs-6 text-uppercase fw-semibold ls-md">Mes révénus </span>
                        </div>
                        <div>
                            <span class="fe fe-book-open fs-3 text-primary"></span>
                        </div>
                    </div>
                    <h2 class="fw-bold mb-1">2,456</h2>
                    <span class="text-danger fw-semibold">120+</span>
                    <span class="ms-1 fw-medium">Number of pending</span>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-12 col-12">
            <!-- Card -->
            <div class="card mb-4">
                <!-- Card body -->
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                        <div>
                            <span class="fs-6 text-uppercase fw-semibold ls-md">Total produit</span>
                        </div>
                        <div>
                            <span class="fe fe-users fs-3 text-primary"></span>
                        </div>
                    </div>
                    <h2 class="fw-bold mb-1">1,22,456</h2>
                    <span class="text-success fw-semibold">
                        <i class="fe fe-trending-up me-1"></i>
                        +1200
                    </span>
                    <span class="ms-1 fw-medium">Mes boutiques</span>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-12 col-12">
            <!-- Card -->
            <div class="card mb-4">
                <!-- Card body -->
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                        <div>
                            <span class="fs-6 text-uppercase fw-semibold ls-md">Etat financier</span>
                        </div>
                        <div>
                            <span class="fe fe-user-check fs-3 text-primary"></span>
                        </div>
                    </div>
                    <h2 class="fw-bold mb-1">22,786</h2>
                    <span class="text-success fw-semibold">
                        <i class="fe fe-trending-up me-1"></i>
                        +200
                    </span>
                    <span class="ms-1 fw-medium">Instructor</span>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection
