<div>
    <div>
        <div class="container mt-4">

        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
              <div class="mb-5">
                <h2 class="mb-1">Produits associés à la categorie {{$category->nom}} </h2>
                <p class="mb-0">
                 Les tendances populaires du moment 
                </p>
              </div>
            </div>
          </div>
          <div>
            <div class="row">
                 @foreach ($product as $vproduct)
                <div class="col-lg-3 col-md-6 col-12 mt-2">
                    <div class="card card-hover">
                        <a href="{{route('single.product', $vproduct->slug)}}">
                            @foreach ($vproduct->images  as $article)
                             @if($article->id > 1)
                             <img src="{{asset('s3/product/'.$article->image)}}" alt="Article" class="card-img-top"></a>
                                @break
                             @endif
                            @endforeach

                        <div class="card-body">
                            <h4 class="mb-2 text-truncate-line-2"><a href="{{route('single.product', $vproduct->slug)}}" class="text-inherit">{{$vproduct->title}}</a></h4>
                            <small>Boutique: {{$vproduct->boutique->libelle_boutique}}</small>
                                <p>{{Str::limit($vproduct->description,20)}}..</p>
                        </div>
                        <!-- Card Footer -->
                        <div class="card-footer">
                            <div class="row align-items-center g-0">
                                <div class="col">
                                    <h5 class="mb-0">{{$vproduct->prix}} €</h5>
                                </div>

                                <div class="col-auto">
                                    <button  type="button" wire:click="productAddCart({{$vproduct->id}})" class="btn btn-outline-secondary">
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

</div>
