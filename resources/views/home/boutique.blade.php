@extends('layouts.layout')
@section('content')
<section id="home">

    <div class="flex flex-col justify-center mt-6 text-center gap-6">
        <div>
            <img src="assets/images/logo-icon-2.png" alt="" class="max-md:w-24  mx-auto">
        </div>
        <p class="max-w-2xl mx-auto text-gray-500 sm:text-lg text-sm leading-relaxed dark:text-white"> Les vendeurs professionels de tous les pays à votre service pour satisfaire vos demandes</p>
    </div>

    <div class="md:flex justify-center items-center gap-4 mt-8 font-semibold text-sm hidden">
        <a href="#demos" uk-scroll="" class="flex items-center gap-2 bg-slate-100 rounded-lg px-5 py-3 text-black dark:bg-slate-900 dark:text-white">
            <ion-icon name="eye-outline" class="hidden md hydrated" role="img" aria-label="eye outline"></ion-icon>
            Deals
        </a>
        <a class="flex items-center gap-3 rounded-lg px-5 py-2.5 bg-black text-white shadow dark:bg-white/90 dark:text-black" target="_blank" href="https://themeforest.net/item/socialite-online-community-html-template/26345647">
            Catalogue Premium
        </a>
    </div>

    <div class="">


    </div>

</section>

<section class=" md:py-20 py-8 md:my-20 my-8 relative ">

    <div class="max-w-5xl mx-auto max-lg:p-8">
        <div class="grid md:grid-cols-4 sm:grid-cols-3 grid-cols-2 gap-2.5 uk-active">



            @foreach ($allSellers as $seller)

            <div class="card">
                <a href="timeline-event.html">
                    <div class="card-media h-32">
                        <img src="assets/images/events/img-3.jpg" alt="">
                        <div class="card-overly"></div>
                    </div>
                </a>
                <div class="card-body">
                    <p class="text-xs font-medium text-blue-600 mb-1">{{$seller->boutique?->nom}} </p>
                    <a href="timeline-event.html"><h4 class="card-title text-sm"> {{$seller->nom}} </h4> </a>
                    <a href="#"> <p class="card-text text-black mt-2"> {{$seller->boutique?->city->nom}}  -  {{$seller->boutique?->country->nom}}  </p>   </a>
                    <div class="card-list-info text-xs mt-1">
                        <div> {{0}}  Articles ajoutés  </div>
                        <div class="md:block hidden">·</div>

                    </div>
                    <div class="flex gap-2">
                        <a class="button bg-primary text-white flex-1" href="{{route('boutique.seller', $seller->id)}}" hx-boost="true">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"></path>
                              </svg>

                            Boutique</a>

                        <button type="button" class="button bg-secondery !w-auto"> <ion-icon name="arrow-redo" class="text-lg md hydrated" role="img" aria-label="arrow redo"></ion-icon> </button>
                    </div>
                </div>
            </div>

            @endforeach




        </div>

    </div>

</section>





@endsection
