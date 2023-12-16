@extends('layouts.layout')
@section('content')
<main id="site__main" class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]">

    <div class="max-w-[1065px] ">

        <!-- cover  -->
        <div class="bg-white shadow lg:rounded-b-2xl lg:-mt-10 dark:bg-dark2">

            <!-- cover -->
            <div class="relative overflow-hidden lg:h-60 h-44 w-full">
                <img src="{{asset('group-cover.jpg')}}" alt="" class="h-full w-full object-cover inset-0">

                <!-- overly -->
                <div class="w-full bottom-0 absolute left-0 bg-gradient-to-t from -black/60 pt-10 z-10"></div>

            </div>

            <div class="lg:p-5 p-3 lg:px-10 pb-8">

                <div class="flex flex-col justify-center -mt-20">

                    <div class="relative h-20 w-20 mb-4 z-10">
                        <div class="relative overflow-hidden rounded-full md:border-[2px] border-gray-100 shrink-0 dark:border-slate-900 shadow">
                            <img src="assets/images/group/group-avature.jpg" alt="" class="h-full w-full object-cover inset-0">
                        </div>
                    </div>

                    <div class="flex lg:items-end justify-between max-md:flex-col lg:pb-3">

                        <div>
                            <h3 class="md:text-2xl text-base md:font-semibold font-medium text-black dark:text-white"> Bienvenue dans ma boutique   {{$sellerStore->nom}} </h3>
                            <div class="font-normal text-gray-500 mt-2 text-sm dark:text-white/70">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"></path>
                                </svg>
                                <a href="#" class="font-normal text-gray-800 hover:text-blue-600 dark:text-white">  Emplacement  {{$sellerStore->city->nom}} {{$sellerStore->country->nom}}  </a>

                            </div>
                        </div>
                        <div class="flex items-center gap-4 lg:mt-1 mt-4 max-md:w-full">
                            <button class="button bg-primary text-white text-sm py-2 !px-6 shadow max-md:flex-1"> Suivre </button>
                            <button type="button" class="button bg-secondery text-sm py-2 !px-6 max-md:flex-1"> Partager </button>
                        </div>

                    </div>


                </div>

            </div>


        </div>

        <div class="grid sm:grid-cols-3 grid-cols-2 gap-3 mt-4" uk-scrollspy="target: > div; cls: uk-animation-scale-up; delay: 100 ;repeat: true">
            <div class="card uk-transition-toggle uk-scrollspy-inview " style="">
                <a href="product-view-1.html">
                    <div class="card-media sm:aspect-[2/1.7] h-36">
                        <img src="assets/images/product/product-10.jpg" alt="">
                        <div class="card-overly"></div>
                    </div>
                </a>
                <div class="card-body flex justify-between">
                    <div class="flex-1">
                        <p class="card-text text-black font-medium line-clamp-1"> Herbel </p>
                        <div class="text-xs line-clamp-1 mt-1"> Herbal Shampoo </div>
                    </div>
                    <h4 class="card-title"> 19$ </h4>
                </div>
                <div class="absolute w-full bottom-0 bg-white/20 backdrop-blur-sm uk-transition-slide-bottom-small max-xl:h-full z-[2] flex flex-col justify-center">
                    <div class="flex gap-3 py-4 px-3">
                        <button type="button" class="button bg-primary text-white flex-1">Chat</button>
                        <button type="button" class="button border bg-white !w-auto">Veiw</button>
                    </div>
                </div>
            </div>
            <div class="card uk-transition-toggle uk-scrollspy-inview " style="">
                <a href="product-view-1.html">
                    <div class="card-media sm:aspect-[2/1.7] h-36">
                        <img src="assets/images/product/product-8.jpg" alt="">
                        <div class="card-overly"></div>
                    </div>
                </a>
                <div class="card-body flex justify-between">
                    <div class="flex-1">
                        <p class="card-text text-black font-medium line-clamp-1">   Parfum  </p>
                        <div class="text-xs line-clamp-1 mt-1">  Parfum Spray </div>
                    </div>
                    <h4 class="card-title"> 20$ </h4>
                </div>
                <div class="absolute w-full bottom-0 bg-white/20 backdrop-blur-sm uk-transition-slide-bottom-small max-xl:h-full z-[2] flex flex-col justify-center">
                    <div class="flex gap-3 py-4 px-3">
                        <button type="button" class="button bg-primary text-white flex-1">Chat</button>
                        <button type="button" class="button border bg-white !w-auto">Veiw</button>
                    </div>
                </div>
            </div>
            <div class="card uk-transition-toggle uk-scrollspy-inview " style="">
                <a href="product-view-1.html">
                    <div class="card-media sm:aspect-[2/1.7] h-36">
                        <img src="assets/images/product/product-9.jpg" alt="">
                        <div class="card-overly"></div>
                    </div>
                </a>
                <div class="card-body flex justify-between">
                    <div class="flex-1">
                        <p class="card-text text-black font-medium line-clamp-1">  Furniture</p>
                        <div class="text-xs line-clamp-1 mt-1">   Wood Chair  </div>
                    </div>
                    <h4 class="card-title"> 34$ </h4>
                </div>
                <div class="absolute w-full bottom-0 bg-white/20 backdrop-blur-sm uk-transition-slide-bottom-small max-xl:h-full z-[2] flex flex-col justify-center">
                    <div class="flex gap-3 py-4 px-3">
                        <button type="button" class="button bg-primary text-white flex-1">Chat</button>
                        <button type="button" class="button border bg-white !w-auto">Veiw</button>
                    </div>
                </div>
            </div>
            <div class="card uk-transition-toggle uk-scrollspy-inview " style="">
                <a href="product-view-1.html">
                    <div class="card-media sm:aspect-[2/1.7] h-36">
                        <img src="assets/images/product/product-3.jpg" alt="">
                        <div class="card-overly"></div>
                    </div>
                </a>
                <div class="card-body flex justify-between">
                    <div class="flex-1">
                        <p class="card-text text-black font-medium line-clamp-1">  Electronic </p>
                        <div class="text-xs line-clamp-1 mt-1">  Gaming Mouse </div>
                    </div>
                    <h4 class="card-title"> 26$ </h4>
                </div>
                <div class="absolute w-full bottom-0 bg-white/20 backdrop-blur-sm uk-transition-slide-bottom-small max-xl:h-full z-[2] flex flex-col justify-center">
                    <div class="flex gap-3 py-4 px-3">
                        <button type="button" class="button bg-primary text-white flex-1">Chat</button>
                        <button type="button" class="button border bg-white !w-auto">Veiw</button>
                    </div>
                </div>
            </div>
            <div class="card uk-transition-toggle uk-scrollspy-inview " style="">
                <a href="product-view-1.html">
                    <div class="card-media sm:aspect-[2/1.7] h-36">
                        <img src="assets/images/product/product-1.jpg" alt="">
                        <div class="card-overly"></div>
                    </div>
                </a>
                <div class="card-body flex justify-between">
                    <div class="flex-1">
                        <p class="card-text text-black font-medium line-clamp-1">  Shampo </p>
                        <div class="text-xs line-clamp-1 mt-1">  Deep Cleanse </div>
                    </div>
                    <h4 class="card-title"> 12$ </h4>
                </div>
                <div class="absolute w-full bottom-0 bg-white/20 backdrop-blur-sm uk-transition-slide-bottom-small max-xl:h-full z-[2] flex flex-col justify-center">
                    <div class="flex gap-3 py-4 px-3">
                        <button type="button" class="button bg-primary text-white flex-1">Chat</button>
                        <button type="button" class="button border bg-white !w-auto">Veiw</button>
                    </div>
                </div>
            </div>
            <div class="card uk-transition-toggle uk-scrollspy-inview " style="">
                <a href="product-view-1.html">
                    <div class="card-media sm:aspect-[2/1.7] h-36">
                        <img src="assets/images/product/product-10.jpg" alt="">
                        <div class="card-overly"></div>
                    </div>
                </a>
                <div class="card-body flex justify-between">
                    <div class="flex-1">
                        <p class="card-text text-black font-medium line-clamp-1"> Herbel </p>
                        <div class="text-xs line-clamp-1 mt-1"> Herbal Shampoo </div>
                    </div>
                    <h4 class="card-title"> 19$ </h4>
                </div>
                <div class="absolute w-full bottom-0 bg-white/20 backdrop-blur-sm uk-transition-slide-bottom-small max-xl:h-full z-[2] flex flex-col justify-center">
                    <div class="flex gap-3 py-4 px-3">
                        <button type="button" class="button bg-primary text-white flex-1">Chat</button>
                        <button type="button" class="button border bg-white !w-auto">Veiw</button>
                    </div>
                </div>
            </div>

        </div>

    </div>

</main>
@endsection
