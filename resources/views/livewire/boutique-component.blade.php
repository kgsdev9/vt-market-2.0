<div>
    @can('register_boutique')
    @if($mode)
    <section class="container-fluid p-4">
        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12 col-md-12 col-12">
                <div class="border-bottom pb-3 mb-3 d-flex align-items-center justify-content-between">
                    <div>
                        <h1 class="mb-1 h2 fw-bold">Liste de ma boutique</h1>

                    </div>
                    <div>

                        <a href="#" class="btn btn-primary" wire:click="displayForm()">Nouveau produit</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Card -->
                <div class="card rounded-3">

                    <div class="p-4 row">
                        <!-- Form -->
                        <form class="d-flex align-items-center col-12 col-md-8 col-lg-3">
                            <span class="position-absolute ps-3 search-icon">
                                <i class="fe fe-search"></i>
                            </span>
                            <input type="search" class="form-control ps-6" placeholder="Rechercher">
                        </form>
                    </div>
                    <div>
                        <div class="table-responsive">
                            <!-- Table -->
                            <table class="table mb-0 text-nowrap table-centered table-hover table-with-checkbox table-centered table-hover">
                                <!-- Table Head -->
                                <thead class="table-light">
                                    <tr>

                                        <th>Libellé</th>

                                        <th>Prix</th>
                                        <th>Categorie</th>
                                        <th>Image</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Table body -->
                                    @foreach ($allProducts as $product)
                                    <tr>

                                        <td>
                                            <h5 class="mb-0">
                                                <a href="#" class="text-inherit">{{Str::limit($product->title, 30)}}</a>
                                            </h5>
                                        </td>
                                        <td>
                                            <a href="#" class="text-inherit">{{$product->prix}} €</a>
                                        </td>
                                        <td>
                                            <a href="#" class="text-inherit">Courses</a>
                                        </td>

                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="{{Storage::url($product->image)}}" alt="" class="rounded-circle avatar-xs me-2">

                                            </div>
                                        </td>

                                        <td>
                                            <a href="#" class="btn btn-outline-secondary btn-sm">Supprimer</a>
                                            <a href="#" class="btn btn-success btn-sm">Detail</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                    <!-- Card Footer -->
                    <div class="card-footer">
                        <nav>
                            <ul class="pagination justify-content-center mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link mx-1 rounded" href="#" tabindex="-1" aria-disabled="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z">
                                        </path></svg>
                                    </a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link mx-1 rounded" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link mx-1 rounded" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link mx-1 rounded" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link mx-1 rounded" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path></svg>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @else
    @include('dashboards.products.form')
    @endif
    @else
    <div class="row justify-content-center mt-4">
        <div class="col-lg-8 col-12">
            <!-- card -->
            <div class="card text-center">
                <!-- card body -->
                <div class="card-body">
                    <div class="mb-6">
                        <!-- heading -->
                        <h2 class="mb-0">Pour avoir la possiblité d'etre vendeur sur cette plateforme vous devez renseigner vos informations</h2>
                        <p class="mb-0">Nous allons vérifier toutes les informations au cas ou c'est bon nous vous tiendrons informer!</p>
                    </div>

                </div>
            </div>

        </div>
    </div>

</div>
    @endcan

