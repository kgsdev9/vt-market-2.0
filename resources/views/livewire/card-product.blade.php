<div wire:init="loadPosts">
    <div class="page-section bestsellers cont-mb-20">
        <div class="page-margin">
            <div class="page-margin__content">
                <div class="page-section__header">
                    <h2>Produits recemments ajoutés </h2>
                </div>
                <div class="page-section__body">
                    <div class="products-grid">
                        <div class="row products-grid-row">
                            @foreach ($latestProduct as $product)
                            <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-6 grid-item-col">
                                <div class="grid-item">
                                    <div class="product-grid-item">
                                        <div class="product">
                                            <a class="a-block" href="product.html">
                                                <div class="product__image">
                                                    <img src="{{Storage::url($product->image)}}" alt="IMG">
                                                    <div class="discount">
                                                        <span>-43%</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="product__description">
                                                <a class="a-block" href="product.html">
                                                    <div class="product_prices">
                                                        <b>94 990 ₽</b>
                                                        <span>120 555 ₽</span>
                                                    </div>
                                                    <div class="product_rating">
                                                        <div class="product_rating-stars">
                                                            <span class="rating-star">
                                                                <svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                                                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                                </svg>
                                                            </span>
                                                            <span class="rating-star">
                                                                <svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                                                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                                </svg>
                                                            </span>
                                                            <span class="rating-star">
                                                                <svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                                                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                                </svg>
                                                            </span>
                                                            <span class="rating-star">
                                                                <svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                                                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                                </svg>
                                                            </span>
                                                            <span class="rating-star">
                                                                <svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                                                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                                </svg>
                                                            </span>
                                                            <span class="rating-feedback">5.8</span>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="product_name">
                                                    <a href="product.html">Smartphone Apple iPhone 13 mini 128GB Starlight (MLLW3RU / A)</a>
                                                </div>
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
    </div>
</div>
