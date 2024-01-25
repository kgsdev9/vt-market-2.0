
<section class="container-fluid p-4">

    <div class="row">
        <div class="col-xl-12 col-lg-8 col-md-12 col-12">
            <!-- Card -->
            <div class="card border-0 mb-4">
                <!-- Card header -->
                <div class="card-header">
                    <h4 class="mb-0">Nouveau produit </h4>
                    <span>En cas d'erreur vous supprimer le produit et récommencer le processus </span>
                </div>
                <form class="needs-validation" novalidate="">
                    <div class="card-body">
                        <div class="row mt-4">
                            <div class="col-xl-3 col-lg-6 col-12">
                                <div class="card mb-4">
                                    <!-- card body  -->
                                    <div class="card-body">
                                        <p>Exemple photo</p>
                                        <div class="d-flex align-items-center">
                                            <div class="">
                                                <img src="../../../assets/images/ecommerce/product-slide-2.jpg" alt="image" class="img-fluid rounded-3 w-100">
                                            </div>

                                        </div>
                                        <div class="mt-4 lh-1 d-flex align-items-center">
                                            <input type="file" wire:model="images" class="btn-check mb-1 mb-md-0" name="options" id="option1" autocomplete="off">
                                            <label class="btn btn-outline-secondary" for="option1">
                                                <i class="fe fe-image me-1"></i>
                                                Téleverser vos images
                                            </label>

                                        </div>

                                        <div class="mt-4 lh-1 d-flex align-items-center">
                                        <button class="btn btn-outline-secondary" type="button" wire:click="remove"> Retirer tout </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @php
                                $nombre = 0;
                            @endphp
                            @foreach ($images as $image)
                            @php
                            $nombre +=1;
                        @endphp
                            <div class="col-xl-3 col-lg-6 col-12">
                                <div class="card mb-4">
                                    <!-- card body  -->
                                    <div class="card-body">
                                        <p>photo {{$nombre}}</p>
                                        <div class="d-flex align-items-center">
                                            <div class="">


                                                <img src="{{ $image->temporaryUrl() }}" alt="image" class="img-fluid rounded-3 w-100" style="height:150px;">
                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>
                            @endforeach



                        </div>
                        <div class="mt-4">
                            <!-- Form -->
                            <div class="row">
                                <!-- Date -->
                                <div class="mb-3 col-md-4">
                                    <label for="selectDate" class="form-label">Title du produit</label>
                                    <input type="text" class="form-control" wire:model="title" placeholder="Samsung 3D"  required="">

                                </div>

                                <div class="mb-3 col-md-4">
                                    <label for="selectDate" class="form-label">Catégorie du produit </label>
                                    {{-- <select wire:model="marque_id" class="form-control">
                                        <option value="">Choisir</option>
                                        @foreach ($allMarques as $marque)
                                            <option value="{{$marque->id}}">{{$marque->nom}}</option>
                                        @endforeach
                                    </select> --}}

                                </div>

                                <div class="mb-3 col-md-4">
                                    <label for="selectDate" class="form-label">Prix du produit </label>
                                    <input type="number" class="form-control" wire:model="prix" placeholder="3400" required="">
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label for="Excerpt" class="form-label">Description</label>
                                    <textarea wire:model="description" class="form-control" cols="30" rows="2"></textarea>
                                </div>

                            </div>
                        </div>
                        <!-- Editor -->

                        <!-- button -->

                        <button type="button"  wire:click="store" class="btn btn-outline-secondary">Enregistrer le produit </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</section>




