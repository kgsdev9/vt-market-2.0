<div>

<section class="container-fluid p-4">
    <div class="row">
        <div class="col-xl-12 col-lg-8 col-md-12 col-12">
            <div class="card border-0 mb-4">
                <div class="card-header">
                    <h4 class="mb-0">Modifiication du  produit  produit </h4>

                </div>
                <div class="needs-validation">
                    <div class="card-body">
                        <div class="row mt-4">
                            <div class="col-xl-3 col-lg-6 col-12">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <p>Exemple photo</p>
                                        @error('images')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                        <div class="d-flex align-items-center">
                                            <div class="">
                                                <img src="../../../assets/images/ecommerce/product-slide-2.jpg" alt="image" class="img-fluid rounded-3 w-100">
                                            </div>
                                        </div>
                                        <div class="mt-4 lh-1 d-flex align-items-center">
                                            <input type="file" wire:model="images"  class="btn-check mb-1 mb-md-0" name="options" id="option1" autocomplete="off" multiple>
                                            <label class="btn btn-outline-secondary" for="option1">
                                                <i class="fe fe-image me-1"></i>
                                                Téleverser vos images
                                            </label>

                                        </div>


                                    </div>
                                </div>
                            </div>

                            @foreach ($vproductImage as $product)

                            <div class="col-xl-3 col-lg-6 col-12">
                                <div class="card mb-4">
                                    <div class="card-body">

                                        <div class="d-flex align-items-center">
                                            <div class="">
                                                <button wire:click="removeImage({{$product->id}})" class="btn btn-outline-danger"><i class="fe fe-trash"></i></button>
                                                <img src="{{asset('s3/product/'.$product->image)}}" alt="image" class="img-fluid rounded-3 w-100" style="height:150px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                            @php
                            $nombre = 0;
                        @endphp
                        @foreach ($images as $image)
                        @php
                        $nombre +=1;
                        @endphp
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card mb-4">
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
                            <div class="row">
                                <div class="mb-3 col-md-4">
                                    <label for="selectDate" class="form-label">Title du produit @error('title')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror</label>
                                    <input type="text" class="form-control" wire:model="title" placeholder="Samsung 3D"  required="">
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="selectDate" class="form-label">Catégorie du produit @error('category_id')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror </label>
                                     <select wire:model="category_id" class="form-control">
                                        <option value="">Choisir</option>
                                        @foreach ($allCategories as $category)
                                            <option value="{{$category->id}}">{{$category->nom}}</option>
                                        @endforeach
                                    </select>

                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="selectDate" class="form-label">Prix du produit @error('prix')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror </label>
                                    <input type="number" class="form-control" wire:model="prix" placeholder="3400" required="">
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label for="Excerpt" class="form-label">Description @error('description')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror</label>
                                    <textarea wire:model="description" class="form-control" cols="30" rows="2"></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="button"  wire:click="update" class="btn btn-outline-secondary">Enregistrer le produit </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





</div>
