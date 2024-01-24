@extends('layouts.layout')
@section('content')
<main>
    <!-- Bg cover -->
    <section class="py-8" style="background: linear-gradient(270deg, #1c1b1d 0%, #959595 100%)"></section>
    <!-- Page header -->
    <section class="bg-white shadow-sm">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                    <div class="d-md-flex align-items-center justify-content-between bg-white pt-3 pb-3 pb-lg-5">
                        <div class="d-md-flex align-items-center text-lg-start text-center">
                            <div class="me-3 mt-n8">
                                <img src="{{asset('assets/images/job/png/job-logo.png')}}" class="avatar-xxl rounded border p-4 bg-white" alt="bootstarp ">
                            </div>
                            <div class="mt-3 mt-md-0">
                                <h1 class="mb-0 fw-bold me-3">{{$boutique->libelle_boutique}}</h1>
                            </div>

                        </div>
                        <!-- Dropdown -->
                        <div class="mt-3 mt-lg-0 text-lg-start text-center">
                            <a href="https://wa.me/+2250768365866?text=Vendeur sur vtp market"><svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M3.50002 12C3.50002 7.30558 7.3056 3.5 12 3.5C16.6944 3.5 20.5 7.30558 20.5 12C20.5 16.6944 16.6944 20.5 12 20.5C10.3278 20.5 8.77127 20.0182 7.45798 19.1861C7.21357 19.0313 6.91408 18.9899 6.63684 19.0726L3.75769 19.9319L4.84173 17.3953C4.96986 17.0955 4.94379 16.7521 4.77187 16.4751C3.9657 15.176 3.50002 13.6439 3.50002 12ZM12 1.5C6.20103 1.5 1.50002 6.20101 1.50002 12C1.50002 13.8381 1.97316 15.5683 2.80465 17.0727L1.08047 21.107C0.928048 21.4637 0.99561 21.8763 1.25382 22.1657C1.51203 22.4552 1.91432 22.5692 2.28599 22.4582L6.78541 21.1155C8.32245 21.9965 10.1037 22.5 12 22.5C17.799 22.5 22.5 17.799 22.5 12C22.5 6.20101 17.799 1.5 12 1.5ZM14.2925 14.1824L12.9783 15.1081C12.3628 14.7575 11.6823 14.2681 10.9997 13.5855C10.2901 12.8759 9.76402 12.1433 9.37612 11.4713L10.2113 10.7624C10.5697 10.4582 10.6678 9.94533 10.447 9.53028L9.38284 7.53028C9.23954 7.26097 8.98116 7.0718 8.68115 7.01654C8.38113 6.96129 8.07231 7.046 7.84247 7.24659L7.52696 7.52195C6.76823 8.18414 6.3195 9.2723 6.69141 10.3741C7.07698 11.5163 7.89983 13.314 9.58552 14.9997C11.3991 16.8133 13.2413 17.5275 14.3186 17.8049C15.1866 18.0283 16.008 17.7288 16.5868 17.2572L17.1783 16.7752C17.4313 16.5691 17.5678 16.2524 17.544 15.9269C17.5201 15.6014 17.3389 15.308 17.0585 15.1409L15.3802 14.1409C15.0412 13.939 14.6152 13.9552 14.2925 14.1824Z" fill="#000000"></path> </g></svg></a>
                        

                        </div>
                    </div>
                    <!-- Nav tab -->

                </div>
            </div>
        </div>
    </section>
    <!-- Content  -->
    <div wire:init="loadPosts">
        <section class="bg-white mt-4">
            <div class="container mb-lg-8">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                            @foreach ($productStore as $product)
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

</main>
@endsection
