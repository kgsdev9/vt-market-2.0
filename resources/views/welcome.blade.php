@extends('layouts.layout')
@section('title', 'Bienvenue sur VTP MARKET-PLACE')
 @section('content')

 <main class="md:mt-10 -mt-8 pt-8">

    <div class="relative md:mb-44">
        <div class="max-w-5xl mx-auto space-y-32 max-md:p-8">

            <!-- hero -->
            <section>


                <div class="flex flex-col justify-center mt-6 text-center gap-6">
                    <div>

                        <h1 class="text-4xl font-medium tracking-tight font-heading text-skin-primary sm:leading-none lg:text-6xl">
                            Notre communauté s'aggrandir avec vous
                            </h1>
                    </div>
                    <p class="max-w-2xl mx-auto text-gray-500 sm:text-lg text-sm leading-relaxed dark:text-white"> Echanger c'est créer un lien reciproque, Alors n'attendez plus pour construire une relation solide entre l'Afrique et L'Europe.</p>
                </div>

                <div class="md:flex justify-center items-center gap-4 mt-8 font-semibold text-sm hidden">
                    <div hx-boost="true">
                        <a href="/become-seller" uk-scroll class="flex items-center gap-2 bg-slate-100 rounded-lg px-5 py-3 text-black dark:bg-slate-900 dark:text-white">
                            <ion-icon name="eye-outline" class="hidden"></ion-icon>
                            Devenir vendeur
                        </a>
                    </div>

                    <a class="flex items-center gap-3 rounded-lg px-5 py-2.5 bg-black text-white shadow dark:bg-white/90 dark:text-black" target="_blank" href="#">
                        Consulter les boutiques
                    </a>

                </div>

                <!-- hero -->
                <div class="flex items-center justify-center relative md:mt-32 mt-20" >

                    <div class="lg:rounded-xl rounded-md shadow-xl z-10 scale-125 overflow-hidden relative w-1/2">
                        <img src="{{asset('producs/APPLE_MS.gif')}}" alt="" class="">
                    </div>

                    <div class="w-1/2 absolute left-0 delay-500 uk-animation-slide-right-medium">
                        <div class="lg:rounded-xl rounded-md shadow-md overflow-hidden -skew-x-6">
                            <img src="{{asset('producs/CI_W50_S_ACD_Naimadolls-RF.gif')}}" alt="">
                        </div>
                    </div>
                    <div class="w-1/2 absolute right-0 duration-50 uk-animation-slide-left-medium">
                        <div class="lg:rounded-xl rounded-md shadow-md overflow-hidden skew-x-6">
                            <img src="{{asset('producs/ecran.png')}}" alt="">
                        </div>
                    </div>

                </div>


            </section>
        </div>
    </div>

    <div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" class="absolute -bottom-40 w-full max-lg:hidden -rotate-6">
            <path fill="#f1f5f9" d="M 0 0 c 0 0 200 50 500 50 s 500 -50 500 -50 v 101 h -1000 v -100 z" class="fill-current text-slate-50/80 dark:text-slate-800/40"></path>
        </svg>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" class="absolute -bottom-44 w-full max-lg:hidden">
            <path fill="#f1f5f9" d="M 0 0 c 0 0 200 50 500 50 s 500 -50 500 -50 v 101 h -1000 v -100 z" class="fill-current text-slate-100 dark:text-slate-800"></path>
        </svg>

    </div>


    <section class="max-w-5xl mx-auto max-lg:p-8 py-20">
        <div class="sm:my-6 my-3 flex items-center justify-between">
            <div>
                <h2 class="md:text-lg text-base font-semibold text-black"> Categories </h2>
                <p class="font-normal text-sm text-gray-500 leading-6">Trouver une catégorie qui correspont à vos attentes </p>
            </div>

        </div>



        <div tabindex="-1" uk-slider="finite:true" class="uk-slider">

            <div class="uk-slider-container pb-1">

                <ul class="uk-slider-items grid-small" style="transform: translate3d(-183.391px, 0px, 0px);">
                    @foreach ($categoris as $category)
                    <li class="md:w-1/5 sm:w-1/3 w-1/2" tabindex="-1">

                        <a href="#">
                            <div class="relative rounded-lg overflow-hidden">
                                <img src="{{asset('categories/2.jpg')}}" alt="" class="h-300 w-full object-cover">
                                <div class="w-full bottom-0 absolute left-0 bg-gradient-to-t from-black/60 pt-10">
                                    <div class="text-white p-5 text-lg leading-3"> {{$category->nom}} </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    @endforeach


                </ul>

            </div>

            <!-- slide nav icons -->
            <a class="nav-prev" href="#" uk-slider-item="previous"> <ion-icon name="chevron-back" class="text-2xl md hydrated" role="img" aria-label="chevron back"></ion-icon> </a>
            <a class="nav-next" href="#" uk-slider-item="next"> <ion-icon name="chevron-forward" class="text-2xl md hydrated" role="img" aria-label="chevron forward"></ion-icon></a>

        </div>

    </section>



    <div class="max-w-5xl mx-auto md:space-y-32 max-md:p-8 relative lg:mt-36 m-10">

        <!-- code preview -->
        <section>

            <div class="flex max-md:flex-col items-center md:gap-20 gap-10">

                <div class="flex-1 md:space-y-8 space-y-3">

                    <div class="rounded-full  bg-slate-200 dark:bg-slate-700 md:p-1.5 p-2 inline-flex ring right-2 ring-slate-100 ring-offset-1 dark:ring-slate-800 dark:ring-offset-slate-500">
                        <ion-icon name="reader" class="md:text-4xl text-2xl text-white drop-shadow-md slate-800 md hydrated" role="img" aria-label="reader"></ion-icon>
                    </div>

                    <div class="md:text-3xl text-lg md:font-bold font-semibold text-black dark:text-white">Pourquoi VTP </div>
                    <p class="max-w-3xl mx-auto text-gray-500  md:text-lg leading-loose  dark:text-white/80">
                       Faites vos achats et recevez vos colis dans plus de 12 Pays en Afrique.
                        <br class="max-md:hidden"> <br class="max-md:hidden">
                        Construisons l'avenir des echanges avec VTP MARKET </p>

                </div>
                <div class="md:w-3/5 w-full">

                    <a href="#">
                        <div class=" relative">
                            <div class="bg-gray-950 w-full py-1.5 px-3 md:rounded-t-xl rounded-t-md"> <svg class="w-6" viewBox="0 0 420 100" focusable="false"><circle fill="#ff5f57" cx="50" cy="50" r="50"></circle><circle fill="#febc2e" cx="210" cy="50" r="50"></circle><circle fill="#28c840" cx="370" cy="50" r="50"></circle></svg> </div>
                            <img src="{{asset('shoping.jpg')}}" alt="" class="w-full h-full object-cover inset-0 md:rounded-b-xl rounded-b-md shadow-lg">

                            <img src="{{asset('earth.png')}}" alt="" class="w-12 h-12 rounded-full absolute  top-8 -right-6 bg-white shadow-md p-1.5">
                            <img src="{{asset('trophy.png')}}" alt="" class="w-12 h-12 rounded-full absolute  -bottom-5 right-6 bg-white shadow-md p-1.5">

                        </div>
                    </a>

                </div>


            </div>

        </section>



    </div>


    <div class="max-w-5xl mx-auto md:space-y-32 max-md:p-8 relative lg:mt-36">
        <div class="grid sm:grid-cols-3 grid-cols-2 gap-3 uk-active" uk-scrollspy="target: > div; cls: uk-animation-scale-up; delay: 100 ;repeat: true">
            @foreach ($catalogueProduct as $product)


            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="card-list-media md:w-[320px] md:h-[180px] sm:aspect-[3/1.2] aspect-[3/1.5]">
                    <img src="{{Storage::url($product->image)}}" alt="">

                    <span class="absolute bg-black bg-opacity-60 bottom-1 font-semibold px-1.5 py-0.5 right-1 rounded text-white text-xs z-10"> 12:21</span>
                </div>
                <div class="p-5">
                    <a href="#">
                        <h5 class="card-title font-bold tracking-tight text-gray-900 dark:text-white">{{Str::limit($product->title, 70)}}</h5>
                    </a>
                </div>

                <div class="card-body">

                    <button type="button" class="button bg-blue-500 dark:bg-pink-700/30 text-white text-white">Acheter</button>
                </div>
            </div>
            @endforeach

        </div>

    </div>






    <div class="max-w-5xl mx-auto md:space-y-32 max-md:p-8 relative lg:mt-36">

    </div>

        <div class="max-w-5xl mx-auto md:space-y-32 max-md:p-8 relative lg:mt-36">
            <section>

                <div class="grid md:grid-cols-3 grid-cols-2 gap-5 md:gap-y-10 md:mt-8 -mt-6 md:text-xl text-sm font-medium" id="features" uk-scrollspy="target: > div; cls: uk-animation-scale-up; delay: 100">

                    <div class="space-x-4 flex items-center uk-scrollspy-inview " style="">
                        <div class="rounded-full  bg-pink-200 md:p-1.5 p-1 inline-flex ring right-2 ring-pink-50 ring-offset-1 dark:ring-slate-600">
                           <img src="{{asset('visa_card.png')}}" alt="">
                        </div>
                    </div>
                    <div class="space-x-4 flex items-center uk-scrollspy-inview " style="">
                        <div class="rounded-full  bg-yellow-200 md:p-1.5 p-1 inline-flex ring right-2 ring-yellow-50 ring-offset-1 dark:ring-slate-600">
                            <img src="{{asset('master_card.png')}}" alt="">
                        </div>

                    </div>
                    <div class="space-x-4 flex items-center uk-scrollspy-inview " style="">
                        <div class="rounded-full  bg-emerald-200 md:p-1.5 p-1 inline-flex ring right-2 ring-emerald-50 ring-offset-1 dark:ring-slate-600">
                            <img src="{{asset('orange-money.png')}}" alt="" style="height:100px;">
                        </div>

                    </div>
                    <div class="space-x-4 flex items-center uk-scrollspy-inview " style="">
                        <div class="rounded-full  bg-sky-200 md:p-1.5 p-1 inline-flex ring ring-sky-50 ring-offset-1 dark:ring-slate-600">
                            <img src="{{asset('moov-money.png')}}" alt="" style="height:140px;">
                        </div>

                    </div>
                    <div class="space-x-4 flex items-center uk-scrollspy-inview " style="">
                        <div class="rounded-full  bg-purple-200 md:p-1.5 p-1 inline-flex ring right-2 ring-purple-50 ring-offset-1 dark:ring-slate-600">
                            <img src="{{asset('mtn.jpg')}}" alt="" style="height:70px;">
                        </div>

                    </div>
                    <div class="space-x-4 flex items-center uk-scrollspy-inview " style="">
                        <div class="rounded-full  bg-purple-200 md:p-1.5 p-1 inline-flex ring right-2 ring-purple-50 ring-offset-1 dark:ring-slate-600">
                            <img src="{{asset('paypal.png')}}" alt="" style="height:90px;">
                        </div>

                    </div>

                </div>

            </section>
        </div>


</main>
 @endsection
