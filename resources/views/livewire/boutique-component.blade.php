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
            @foreach ($allProducts as $product)
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
                            <h4><a href="#" class="text-inherit">{{$product->title}}</a></h4>
                            <!-- rating -->

                        </div>
                        <div class="d-flex justify-content-between">
                            <!-- text -->
                            <h4 class="mb-0">{{$product->prix}} €</h4>
                            <!-- color -->
                            
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        @include('dashboards.products.form')
        @endif
    </div>
</div>
