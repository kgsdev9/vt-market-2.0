<div>
    <div class="m d-flex align-items-center">
        <span class="position-absolute ps-3 search-icon">
            <i class="fe fe-search"></i>
        </span>
        <label for="search" class="visually-hidden"></label>
        <input type="search"  data-bs-toggle="modal" data-bs-target="#searchmodal"  class="form-control ps-6" placeholder="Rechercher....">
    </div>
    <i class="fa fa-search"></i>

      <div class="modal fade" wire:ignore.self  id="searchmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Rechercher un produit </h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <section class="bg-white mt-4">
                    <div class="container mb-lg-8">
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="text" wire:model.live="search" class="form-control"  placeholder="Rechercher un produit">
                            </div>

                        </div>


                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                                    @foreach ($allPrdouct as $product )
                                    <div class="col">
                                        <div class="card card-hover">
                                            <a href="{{route('single.product', $product->slug)}}" wire:navigate>
                                                @foreach ($product->images  as $article)
                                                 @if($article->id > 1)
                                                 <img src="{{asset('s3/product/'.$article->image)}}" alt="Article" class="card-img-top"></a>
                                                    @break
                                                 @endif
                                                @endforeach

                                            <div class="card-body">
                                                <h4 class="mb-2 text-truncate-line-2"><a href="{{route('single.product', $product->slug)}}" class="text-inherit">{{$product->title}}</a></h4>
                                                <small>Boutique: {{$product->boutique->libelle_boutique}}</small>
                                                    <p>{{Str::limit($product->description, 20)}}..</p>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">{{$product->prix}} €</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <button  type="button" wire:click="productAddCart({{$product->id}})" class="btn btn-outline-secondary">
                                                            <i class="fe fe-shopping-cart text-dark align-middle me-2"></i>
                                                            Ajouter au panier
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>

            </div>
          </div>
        </div>
      </div>
</div>
