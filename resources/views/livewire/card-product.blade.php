<div wire:init="loadPosts">
    <section class="bg-white mt-4">
        <div class="container mb-lg-8">
            <div class="row">
                <div class="col-md-12">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                        @foreach ($allProducts as $product)
                        <div class="col">
                            <div class="card card-hover">
                                <a href="{{route('single.product', $product->slug)}}">
                                    @foreach ($product->images  as $article)
                                     @if($article->id > 1)
                                     <img src="{{Storage::url($article->image)}}" alt="Article" class="card-img-top"></a>
                                        @break
                                     @endif
                                    @endforeach

                                <div class="card-body">
                                    <h4 class="mb-2 text-truncate-line-2"><a href="{{route('single.product', $product->slug)}}" class="text-inherit">{{$product->title}}</a></h4>
                                    <small>Boutique: {{$product->boutique->libelle_boutique}}</small>
                                        <p>{{$product->description}}..</p>
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
