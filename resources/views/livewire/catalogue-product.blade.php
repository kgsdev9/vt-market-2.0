<div>
    <main id="site__main" class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]">

        <div class="2xl:max-w-[1220px] max-w-[1065px] ">

            <div class="page-heading">

                <h1 class="page-title"> Catalogue produit  </h1>

                <nav class=" flex items-center justify-between">



                    <!-- right button icons -->
                    <div class="flex items-center gap-4">
                        <button class="flex items-center gap-0.5 py-1.5 px-2 bg-primary text-white shadow rounded-md">
                            <ion-icon class="text-lg md hydrated" name="add" role="img" aria-label="add"></ion-icon>
                            <span class="text-xs font-medium pr-1">Create</span>
                        </button>
                        <select class="bg-white shadow focus:!border-transparent focus:!ring-transparent max-sm:hidden md:w-40 dark:bg-dark2">
                            <option value="1">Latest</option>
                            <option value="3">Popular</option>
                            <option value="4">Newest</option>
                        </select>
                    </div>

                </nav>

            </div>


            <!-- blog grid -->
            <div class="grid 2xl:grid-cols-5 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 gap-2.5 mt-10" uk-scrollspy="target: > div; cls: uk-animation-slide-bottom-small; delay: 100 ;repeat: true">


                @foreach ($allProducts as $product)


                <div class="card uk-scrollspy-inview " style="">
                    <a href="blog-read.html">
                        <div class="card-media h-36">
                            <img src="{{Storage::url($product->image)}}" alt="">
                            <div class="card-overly"></div>
                            <span class="absolute bg-black bg-opacity-60 bottom-1 font-semibold px-1.5 py-0.5 left-2 rounded text-white text-xs z-10"> Life style </span>
                        </div>
                    </a>
                    <div class="card-body">
                        <a href="blog-read.html"> <p class="card-text"> Jesse Steeve  </p> </a>
                        <a href="blog-read.html">
                            <h4 class="card-title text-sm line-clamp-2 mt-1.5"> Top amazing web demos and experiments in 2024 should know about </h4>
                        </a>
                        <div class="card-list-info items-center gap-4">
                            <div class="flex items-center gap-1.5">
                                <ion-icon name="heart-outline" class="text-lg md hydrated" role="img" aria-label="heart outline"></ion-icon>
                                45
                            </div>
                            <div class="flex items-center gap-1.5">
                                <ion-icon name="chatbubble-ellipses-outline" class="text-lg md hydrated" role="img" aria-label="chatbubble ellipses outline"></ion-icon>
                                156.9K
                            </div>
                            <button type="button" class="flex ml-auto">
                                <ion-icon name="arrow-redo-outline" class="text-lg md hydrated" role="img" aria-label="arrow redo outline"></ion-icon>
                            </button>
                        </div>

                    </div>
                </div>
                @endforeach





            </div>

            <div class="flex justify-center my-6">
                <button type="button" class="bg-white py-2 px-5 rounded-full shadow-md font-semibold text-sm dark:bg-dark2">Load more...</button>
            </div>


        </div>

    </main>
</div>
