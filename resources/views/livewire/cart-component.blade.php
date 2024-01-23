<div>
    <div class="container">
        <section class="container-fluid p-4">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <!-- Page header -->
                    <div class="border-bottom pb-3 mb-3">
                        <div class="mb-2 mb-lg-0">
                            <h1 class="mb-0 h2 fw-bold">Votre panier</h1>
                            <!-- Breadcrumb -->
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="admin-dashboard.html">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="#">Ecommerce</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-12 mb-2">
                    <!-- alert -->
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        Les vendeurs peuvent vous un coupon ca ne nous engage pas
                    </div>
                </div>
                <div class="col-lg-8">
                    <!-- card -->
                    <div class="card">
                        <!-- card header -->
                        <div class="card-header">
                            <div class="d-flex">
                                <!-- heading -->
                                <h4 class="mb-0">
                                   Liste de mon panier
                                    <span>(Mes articles )</span>
                                </h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table-card">
                                <!-- Table -->
                                <table class="table mb-0 text-nowrap">
                                    <!-- Table Head -->
                                    <thead class="table-light">
                                        <tr>
                                            <th>Article</th>
                                            <th>Prix</th>
                                            <th>Qunatité</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $total = 0;
                                    @endphp


                                        @foreach( (array)session('cart') as $id => $details)
                                        @php
                                        $total +=  $details['prix'] * $details['quantity']
                                        @endphp
                                        <tr>
                                            <td>
                                                <div class="d-flex">
                                                    <div>
                                                        <img src="{{Storage::url($details['image'])}}" alt="" class="img-4by3-md rounded">
                                                    </div>
                                                    <div class="ms-4 mt-2 mt-lg-0">
                                                        <h4 class="mb-1 text-primary-hover">{{ Str::limit($details['title'], 30)}}</h4>

                                                        <div class="mt-4">

                                                            <button type="button" wire:click="delete({{$details['product_id']}})"  class="btn btn-outline-primary"><i class="fe fe-trash"></i></a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h4 class="mb-0">{{$details['prix']}} € </h4>
                                            </td>
                                            <td>
                                              <div class="row">
                                                <button class="btn btn-outline-secondary" wire:click="increment({{$details['product_id']}})"><i class="fe fe-plus"></i></button>
                                                <span>{{$details['quantity']}}</span>
                                                <button class="btn btn-outline-secondary" wire:click="decrement({{$details['product_id']}})" ><i class="fe fe-plus"></i>retirer</button>
                                              </div>
                                            </td>
                                            <td>
                                                <h4 class="mb-0">{{ $details['prix'] * $details['quantity'] }} €</h4>
                                            </td>
                                        </tr>
                                        @endforeach

                                        <tr>
                                            <td class="align-middle border-top-0 border-bottom-0"></td>
                                            <td class="align-middle border-top-0 border-bottom-0">
                                                <h4 class="mb-0">Total</h4>
                                            </td>

                                            <td>
                                                <h4 class="mb-0">{{$total}} €</h4>
                                            </td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex justify-content-between">
                        <a href="#" class="btn btn-outline-primary">Retourner</a>
                        <a href="{{route('sommary.orders')}}" class="btn btn-primary">Continuer </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <!-- card -->
                    <div class="card mb-4 mt-4 mt-lg-0">
                        <!-- card body -->
                        <div class="card-body">
                            <h4 class="mb-3">Vous avez un code promo  ?</h4>
                            <!-- row -->
                            <div class="row g-3">
                                <!-- col -->
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="GKDIS15%">
                                </div>
                                <!-- col -->
                                <div class="col-auto">
                                    <a href="#" class="btn btn-dark">Appliquer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card -->
                    <div class="card mb-4">

                        <div class="card">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="d-flex align-items-center">

                                    <div class="ms-4">
                                        <h4 class="mb-0">VTP INFORMATION</h4>
                                        <p class="mb-1 fs-6">Note d'information </p>

                                    </div>
                                </div>

                                <p>I am an Innovation designer focussing on UX/UI based in Berlin. As a creative
                                    resident at Figma explored the city of the future and how new technologies.</p>
                                <a href="#" class="btn btn-outline-secondary btn-sm">Politique du site </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</div>
