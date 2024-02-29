<div>
    @can('register_boutique')
    @if($mode)
    <section class="container-fluid p-4">
        <div class="row">
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
        <div class="p-4 row">
            <form class="d-flex align-items-center col-12 col-md-8 col-lg-3">
                <span class="position-absolute ps-3 search-icon">
                    <i class="fe fe-search"></i>
                </span>
                <input type="search" wire:model.live="search" class="form-control ps-6" placeholder="Rechercher">
            </form>
        </div>
        <div class="row mb-6">
            @foreach ($allProducts as $product)
            <div class="col-lg-3 col-md-6 col-12 mt-2">
                <div class="card card-hover">
                    <a href="{{route('single.product', $product->slug)}}">
                        @foreach ($product->images  as $article)
                         @if($article->id > 1)
                         <img src="{{asset('s3/product/'.$article->image)}}" alt="Article" class="card-img-top"></a>
                            @break
                         @endif
                        @endforeach
                    <div class="card-body">
                        <h4 class="mb-2 text-truncate-line-2"><a href="{{route('single.product', $product->slug)}}" class="text-inherit">{{$product->title}}</a></h4>
                        <small>Boutique: {{$product->boutique?->libelle_boutique}}</small>
                            <p>{{Str::limit($product->description,100)}}..</p>
                    </div>
                    <div class="card-footer">
                        <div class="row align-items-center g-0">
                            <div class="col">
                                <h5 class="mb-0">{{$product->prix}} €</h5>
                            </div>
                            <div class="col-auto">
                                <button  type="button"  class="btn btn-outline-secondary">
                                    <i class="fe fe-eye text-dark align-middle me-2"></i>

                                </button>


                                <a  href="{{route('edit.product', $product->slug)}}"  class="btn btn-outline-secondary">
                                    <i class="fe fe-edit text-dark align-middle me-2"></i>

                                </a>
                                <button class="btn btn-danger" wire:click="delete({{$product->id}})"><i class="fe fe-trash"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
          </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="card rounded-3">
                    <div class="card-footer">
                        <nav>
                            <ul class="pagination justify-content-center mb-0">
                               {{$allProducts->links()}}
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
            <div class="card text-center">
                <div class="card-body">
                    <div class="mb-6">
                        <h2 class="mb-0">Pour avoir la possiblité d'etre vendeur sur cette plateforme vous devez renseigner vos informations</h2>
                        <p class="mb-0">Nous allons vérifier toutes les informations au cas ou c'est bon nous vous tiendrons informer!</p>
                        <a href="{{route('product.management')}}" class="btn btn-outline-secondary">Je m'enregistre avant de créer ma boutique</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
    @endcan

