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
                <!-- Card -->
                <div class="card mb-4">
                    <!-- Card header -->
                    <div class="card-header border-bottom-0">
                        <h3 class="mb-0">Mes Commmandes </h3>
                        <span>Liste de vos commandes .</span>
                    </div>
                    <!-- Table -->
                    <div class="table-responsive">
                        <table class="table mb-0 text-nowrap table-hover table-centered">
                            <thead class="table-light">
                                <tr>
                                    <th>Produit</th>
                                    <th>Total</th>
                                    <th>Réference</th>
                                    <th>Status</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>
                                        <h5 class="mb-0">
                                            <a href="#" class="text-inherit">HTML5 Web Front End Development</a>
                                        </h5>
                                    </td>
                                    <td>$129</td>
                                    <td>#10020</td>
                                    <td>June 9, 2020</td>
                                    <td>Consulter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
