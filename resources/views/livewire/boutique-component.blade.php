<div>
    <div class="container-fluid p-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="border-bottom pb-3 mb-3">
                    <div class="mb-2 mb-lg-0">
                        <h1 class="mb-0 h2 fw-bold">Liste produit </h1>
                    </div>
                </div>
            </div>
        </div>

        @if ($mode)
        <div class="mb-4">
            <!-- row -->
            <div class="row justify-content-between">
                <div class="col-xxl-2 col-lg-3 col-md-5 col-12 mb-2 mb-lg-0">
                    <!-- input -->
                    <input type="search" class="form-control" placeholder="Rechercher">
                </div>
                <div class="col-xxl-3 col-lg-5 col-md-7 col-12">
                    <!-- row -->
                    <div class="row justify-content-md-end">
                        <!-- input -->
                      
                        <button type="button" wire:click="displayForm()" class="btn btn-outline-dark">Nouveau prodduit</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3 row-cols-xxl-4">
            <div class="col mb-4">
                <!-- card -->
                <div class="card h-100">
                    <div id="carouselExampleIndicators" class="carousel slide pointer-event" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <!-- button -->
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
                            <!-- button -->
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
                            <!-- button -->
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
                        </div>
                        <div class="carousel-inner">
                            <!-- img -->
                            <div class="carousel-item active">
                                <img src="../../../assets/images/ecommerce/product-shoe-01.jpg" class="d-block w-100 rounded-top-md" alt="...">
                            </div>
                            <!-- img -->
                            <div class="carousel-item">
                                <img src="../../../assets/images/ecommerce/product-shoe-02.jpg" class="d-block w-100 rounded-top-md" alt="...">
                            </div>
                            <!-- img -->
                            <div class="carousel-item">
                                <img src="../../../assets/images/ecommerce/product-shoe-03.jpg" class="d-block w-100 rounded-top-md" alt="...">
                            </div>
                        </div>
                    </div>
                    <!-- card body -->
                    <div class="card-body">
                        <div class="mb-4">
                            <!-- text -->
                            <h4><a href="product-single.html" class="text-inherit">White Adidas Top Sneakers</a></h4>
                            <!-- rating -->
                            <span class="fw-semibold">
                                5.0
                                <span><i class="bi bi-star-fill text-warning fs-6"></i></span>
                            </span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <!-- text -->
                            <h4 class="mb-0">$49.00</h4>
                            <!-- color -->
                            <div>
                                <span class="icon-shape icon-xxs bg-danger rounded-circle border border-2 border-white shadow"></span>
                                <span class="icon-shape icon-xxs bg-warning rounded-circle border border-2 border-white shadow mx-n1"></span>
                                <span class="icon-shape icon-xxs bg-dark rounded-circle border border-2 border-white shadow"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <!-- card -->
                <div class="card h-100">
                    <div>
                        <a href="product-single.html">
                            <!-- img -->
                            <img src="../../../assets/images/ecommerce/product-shoe-02.jpg" alt="" class="img-fluid rounded-top-md">
                        </a>
                    </div>
                    <!-- card body -->
                    <div class="card-body">
                        <div class="mb-4">
                            <h4><a href="product-single.html" class="text-inherit">Red Converse shoe</a></h4>
                            <!-- rating -->
                            <span class="fw-semibold">
                                4.6
                                <span><i class="bi bi-star-fill text-warning fs-6"></i></span>
                            </span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <!-- heading -->
                            <h4 class="mb-0">$139.00</h4>
                            <!-- color -->
                            <div>
                                <span class="icon-shape icon-xxs bg-danger rounded-circle border border-2 border-white shadow"></span>
                                <span class="icon-shape icon-xxs bg-warning rounded-circle border border-2 border-white shadow mx-n1"></span>
                                <span class="icon-shape icon-xxs bg-info rounded-circle border border-2 border-white shadow"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <!-- card -->
                <div class="card h-100">
                    <div>
                        <a href="product-single.html">
                            <!-- img -->
                            <img src="../../../assets/images/ecommerce/product-shoe-03.jpg" alt="" class="img-fluid rounded-top-md">
                            <!-- badge -->
                            <div class="position-absolute top-0 end-0 p-2">
                                <span class="badge bg-danger">Sale</span>
                            </div>
                        </a>
                    </div>
                    <!-- card body -->
                    <div class="card-body">
                        <div class="mb-4">
                            <h4><a href="product-single.html" class="text-inherit">Unpaired maroon plimsoll</a></h4>
                            <!-- rating -->
                            <span class="fw-semibold">
                                3.6
                                <span><i class="bi bi-star-fill text-warning fs-6"></i></span>
                            </span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <!-- text -->
                            <h4 class="mb-0">
                                $39.00
                                <span class="text-decoration-line-through">$49.00</span>
                            </h4>
                            <!-- color -->
                            <div>
                                <span class="icon-shape icon-xxs bg-danger rounded-circle border border-2 border-white shadow"></span>
                                <span class="icon-shape icon-xxs bg-warning rounded-circle border border-2 border-white shadow mx-n1"></span>
                                <span class="icon-shape icon-xxs bg-info rounded-circle border border-2 border-white shadow"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <!-- card -->
                <div class="card h-100">
                    <div>
                        <a href="product-single.html">
                            <img src="../../../assets/images/ecommerce/product-shoe-04.jpg" alt="" class="img-fluid rounded-top-md">
                        </a>
                    </div>
                    <!-- card body -->
                    <div class="card-body">
                        <div class="mb-4">
                            <!-- heading -->
                            <h4><a href="product-single.html" class="text-inherit">Nike SuperRep Go</a></h4>
                            <!-- rating -->
                            <span class="fw-semibold">
                                4.8
                                <span><i class="bi bi-star-fill text-warning fs-6"></i></span>
                            </span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h4 class="mb-0">$69.00</h4>
                            <!-- color -->
                            <div>
                                <span class="icon-shape icon-xxs bg-danger rounded-circle border border-2 border-white shadow"></span>
                                <span class="icon-shape icon-xxs bg-success rounded-circle border border-2 border-white shadow mx-n1"></span>
                                <span class="icon-shape icon-xxs bg-dark rounded-circle border border-2 border-white shadow"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <!-- card -->
                <div class="card h-100">
                    <div>
                        <a href="product-single.html">
                            <!-- img -->
                            <img src="../../../assets/images/ecommerce/product-shoe-05.jpg" alt="" class="img-fluid rounded-top-md">
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="mb-4">
                            <!-- heading -->
                            <h4><a href="product-single.html" class="text-inherit">Unpaired maroon plimsoll</a></h4>
                            <!-- rating -->
                            <span class="fw-semibold">
                                4.2
                                <span><i class="bi bi-star-fill text-warning fs-6"></i></span>
                            </span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h4 class="mb-0">$49.00</h4>
                            <!-- color -->
                            <div>
                                <span class="icon-shape icon-xxs bg-danger rounded-circle border border-2 border-white shadow"></span>
                                <span class="icon-shape icon-xxs bg-warning rounded-circle border border-2 border-white shadow mx-n1"></span>
                                <span class="icon-shape icon-xxs bg-dark rounded-circle border border-2 border-white shadow"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <!-- card -->
                <div class="card h-100">
                    <div>
                        <a href="product-single.html">
                            <!-- img -->
                            <img src="../../../assets/images/ecommerce/product-shoe-06.jpg" alt="" class="img-fluid rounded-top-md">
                            <!-- badge -->
                            <div class="position-absolute top-0 end-0 p-2">
                                <span class="badge bg-primary">New</span>
                            </div>
                        </a>
                    </div>
                    <!-- card body -->
                    <div class="card-body">
                        <div class="mb-4">
                            <h4><a href="product-single.html" class="text-inherit">Nike Legend Essential 2</a></h4>
                            <span class="fw-semibold">
                                3.8
                                <span><i class="bi bi-star-fill text-warning fs-6"></i></span>
                            </span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h4 class="mb-0">$39.00</h4>
                            <!-- color -->
                            <div>
                                <span class="icon-shape icon-xxs bg-primary rounded-circle border border-2 border-white shadow"></span>
                                <span class="icon-shape icon-xxs bg-dark rounded-circle border border-2 border-white shadow ms-n1"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <!-- card -->
                <div class="card h-100">
                    <div>
                        <!-- img -->
                        <a href="product-single.html">
                            <img src="../../../assets/images/ecommerce/product-shoe-07.jpg" alt="" class="img-fluid rounded-top-md">
                        </a>
                    </div>
                    <!-- card body -->
                    <div class="card-body">
                        <div class="mb-4">
                            <h4><a href="product-single.html" class="text-inherit">Nike Black and White</a></h4>
                            <span class="fw-semibold">
                                3.9
                                <span><i class="bi bi-star-fill text-warning fs-6"></i></span>
                            </span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <!-- text -->
                            <h4 class="mb-0">$239.00</h4>
                            <!-- color -->
                            <div>
                                <span class="icon-shape icon-xxs bg-danger rounded-circle border border-2 border-white shadow"></span>
                                <span class="icon-shape icon-xxs bg-dark rounded-circle border border-2 border-white shadow ms-n1"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <!-- card -->
                <div class="card h-100">
                    <div>
                        <a href="product-single.html">
                            <!-- img -->
                            <img src="../../../assets/images/ecommerce/product-shoe-08.jpg" alt="" class="img-fluid rounded-top-md">
                        </a>
                    </div>
                    <!-- card body -->
                    <div class="card-body">
                        <div class="mb-4">
                            <!-- text -->
                            <h4><a href="product-single.html" class="text-inherit">Nike shoes Dark Brown</a></h4>
                            <span class="fw-semibold">
                                2.8
                                <span><i class="bi bi-star-fill text-warning fs-6"></i></span>
                            </span>
                        </div>
                        <!-- price -->
                        <div class="d-flex justify-content-between">
                            <h4 class="mb-0">$29.00</h4>
                            <!-- color -->
                            <div>
                                <span class="icon-shape icon-xxs bg-warning rounded-circle border border-2 border-white shadow"></span>
                                <span class="icon-shape icon-xxs bg-dark rounded-circle border border-2 border-white shadow ms-n1"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else
        @include('dashboards.products.form')
        @endif
    </div>
</div>
