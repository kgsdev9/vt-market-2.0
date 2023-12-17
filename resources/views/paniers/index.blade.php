@extends('layouts.layout')
@section('title', 'Mon panier')
@section('content')

<main  class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]">

    <div class="flex max-lg:flex-col 2xl:gap-12 gap-10 2xl:max-w-[1220px] max-w-[1065px] mx-auto" id="js-oversized">

        <div class="flex-1">
            <div class="max-w-[680px] w-full  content-area">

                <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 gap-2.5 mt-4">

                    <div class="card">
                        <a href="timeline-event.html">
                            <div class="card-media h-32">
                                <img src="assets/images/events/img-1.jpg" alt="">
                                <div class="card-overly"></div>
                            </div>
                        </a>
                        <div class="card-body">
                            <p class="text-xs font-medium text-black text-red-600 mb-1"> WED JUL 10,2024 AT 10PM </p>
                            <a href="timeline-event.html"><h4 class="card-title text-sm"> The global creative  </h4> </a>
                            <a href="#"> <p class="card-text text-black mt-2"> Japan </p> </a>
                            <div class="card-list-info text-xs mt-1">
                                <div> 15 Intersted</div>
                                <div class="md:block hidden">·</div>
                                <div> 2 Going</div>
                            </div>
                            <div class="flex gap-2">
                                <button type="button" class="button bg-primary text-white flex-1">Intersted</button>
                                <button type="button" class="button bg-secondery !w-auto"> <ion-icon name="arrow-redo" class="text-lg md hydrated" role="img" aria-label="arrow redo"></ion-icon> </button>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <a href="timeline-event.html">
                            <div class="card-media h-32">
                                <img src="assets/images/events/img-2.jpg" alt="">
                                <div class="card-overly"></div>
                            </div>
                        </a>
                        <div class="card-body">
                            <p class="text-xs font-semibold text-teal-600 mb-1">Opening</p>
                            <a href="timeline-event.html"><h4 class="card-title text-sm"> Wedding trend Ideas  </h4> </a>
                            <a href="#"> <p class="card-text text-black mt-2"> Turkey </p></a>
                            <div class="card-list-info text-xs mt-1">
                                <div> 20 Intersted</div>
                                <div class="md:block hidden">·</div>
                                <div> 16 Going</div>
                            </div>
                            <div class="flex gap-2">
                                <button type="button" class="button bg-primary text-white flex-1">Intersted</button>
                                <button type="button" class="button bg-secondery !w-auto"> <ion-icon name="arrow-redo" class="text-lg md hydrated" role="img" aria-label="arrow redo"></ion-icon> </button>
                            </div>

                        </div>
                    </div>

                    <div class="card">
                        <a href="timeline-event.html">
                            <div class="card-media h-32">
                                <img src="assets/images/events/img-3.jpg" alt="">
                                <div class="card-overly"></div>
                            </div>
                        </a>
                        <div class="card-body">
                            <p class="text-xs font-medium text-black text-red-600 mb-1"> WED JUL 10,2024 AT 10PM </p>
                            <a href="timeline-event.html"><h4 class="card-title text-sm"> About Safety and Flight  </h4> </a>
                            <a href="#"> <p class="card-text text-black mt-2"> Dubai </p> </a>
                            <div class="card-list-info text-xs mt-1">
                                <div> 26 Intersted</div>
                                <div class="md:block hidden">·</div>
                                <div> 8 Going</div>
                            </div>
                            <div class="flex gap-2">
                                <button type="button" class="button bg-primary text-white flex-1">Intersted</button>
                                <button type="button" class="button bg-secondery !w-auto"> <ion-icon name="arrow-redo" class="text-lg md hydrated" role="img" aria-label="arrow redo"></ion-icon> </button>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <a href="timeline-event.html">
                            <div class="card-media h-32">
                                <img src="assets/images/events/img-4.jpg" alt="">
                                <div class="card-overly"></div>
                            </div>
                        </a>
                        <div class="card-body">
                            <p class="text-xs font-semibold text-teal-600 mb-1">Opening</p>
                            <a href="timeline-event.html"><h4 class="card-title text-sm"> Perspective is everything  </h4> </a>
                            <a href="#"> <p class="card-text text-black mt-2"> London </p></a>
                            <div class="card-list-info text-xs mt-1">
                                <div> 20 Intersted</div>
                                <div class="md:block hidden">·</div>
                                <div> 16 Going</div>
                            </div>
                            <div class="flex gap-2">
                                <button type="button" class="button bg-primary text-white flex-1">Intersted</button>
                                <button type="button" class="button bg-secondery !w-auto"> <ion-icon name="arrow-redo" class="text-lg md hydrated" role="img" aria-label="arrow redo"></ion-icon> </button>
                            </div>

                        </div>
                    </div>
                    <div class="card">
                        <a href="timeline-event.html">
                            <div class="card-media h-32">
                                <img src="assets/images/events/img-4.jpg" alt="">
                                <div class="card-overly"></div>
                            </div>
                        </a>
                        <div class="card-body">
                            <p class="text-xs font-semibold text-teal-600 mb-1">Opening</p>
                            <a href="timeline-event.html"><h4 class="card-title text-sm"> Perspective is everything  </h4> </a>
                            <a href="#"> <p class="card-text text-black mt-2"> London </p></a>
                            <div class="card-list-info text-xs mt-1">
                                <div> 20 Intersted</div>
                                <div class="md:block hidden">·</div>
                                <div> 16 Going</div>
                            </div>
                            <div class="flex gap-2">
                                <button type="button" class="button bg-primary text-white flex-1">Intersted</button>
                                <button type="button" class="button bg-secondery !w-auto"> <ion-icon name="arrow-redo" class="text-lg md hydrated" role="img" aria-label="arrow redo"></ion-icon> </button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- sidebar -->
        <div class="2xl:w-[380px] lg:w-[330px] w-full">

            <div class="lg:space-y-6 space-y-4 lg:pb-8 max-lg:grid sm:grid-cols-2 max-lg:gap-6 uk-sticky" uk-sticky="media: 1024; end: #js-oversized; offset: 80" style="">


                <!-- peaple you might know -->
                <div class="box p-5 px-6 border1 dark:bg-dark2">

                    <div class="flex justify-between text-black dark:text-white">
                        <h3 class="font-bold text-base"> Sommaire du panier </h3>
                        <button type="button"> <ion-icon name="sync-outline" class="text-xl md hydrated" role="img" aria-label="sync outline"></ion-icon> </button>
                    </div>

                    <div class="space-y-4 capitalize text-xs font-normal mt-5 mb-2 text-gray-500 dark:text-white/80">

                        <div class="flex items-center gap-3">
                            <a href="timeline.html">
                                <img src="assets/images/avatars/avatar-7.jpg" alt="" class="bg-gray-200 rounded-full w-10 h-10">
                            </a>
                            <div class="flex-1">
                                <a href="timeline.html"><h4 class="font-semibold text-sm text-black dark:text-white">  Johnson smith</h4></a>
                                <div class="mt-0.5"> Suggested For You </div>
                            </div>
                            <button type="button" class="text-sm rounded-full py-1.5 px-4 font-semibold bg-secondery"> Follow </button>
                        </div>
                        <div class="flex items-center gap-3">
                            <a href="timeline.html">
                                <img src="assets/images/avatars/avatar-5.jpg" alt="" class="bg-gray-200 rounded-full w-10 h-10">
                            </a>
                            <div class="flex-1">
                                <a href="timeline.html"><h4 class="font-semibold text-sm text-black dark:text-white"> James Lewis</h4></a>
                                <div class="mt-0.5"> Followed by Johnson </div>
                            </div>
                            <button type="button" class="text-sm rounded-full py-1.5 px-4 font-semibold bg-secondery"> Follow </button>
                        </div>
                        <div class="flex items-center gap-3">
                            <a href="timeline.html">
                                <img src="assets/images/avatars/avatar-2.jpg" alt="" class="bg-gray-200 rounded-full w-10 h-10">
                            </a>
                            <div class="flex-1">
                                <a href="timeline.html"><h4 class="font-semibold text-sm text-black dark:text-white"> John Michael</h4></a>
                                <div class="mt-0.5"> Followed by Monroe  </div>
                            </div>
                            <button type="button" class="text-sm rounded-full py-1.5 px-4 font-semibold bg-secondery"> Follow </button>
                        </div>
                        <div class="flex items-center gap-3">
                            <a href="timeline.html">
                                <img src="assets/images/avatars/avatar-3.jpg" alt="" class="bg-gray-200 rounded-full w-10 h-10">
                            </a>
                            <div class="flex-1">
                                <a href="timeline.html"><h4 class="font-semibold text-sm text-black dark:text-white">  Monroe Parker</h4></a>
                                <div class="mt-0.5"> Suggested For You </div>
                            </div>
                            <button type="button" class="text-sm rounded-full py-1.5 px-4 font-semibold bg-secondery"> Follow </button>
                        </div>
                        <div class="flex items-center gap-3">
                            <a href="timeline.html">
                                <img src="assets/images/avatars/avatar-4.jpg" alt="" class="bg-gray-200 rounded-full w-10 h-10">
                            </a>
                            <div class="flex-1">
                                <a href="timeline.html"><h4 class="font-semibold text-sm text-black dark:text-white">  Martin Gray</h4></a>
                                <div class="mt-0.5"> Suggested For You </div>
                            </div>
                            <button type="button" class="text-sm rounded-full py-1.5 px-4 font-semibold bg-secondery"> Follow </button>
                        </div>
                    </div>

                </div>

            </div><div class="uk-sticky-placeholder" style="height: 764px; width: 330px; margin: 0px;" hidden=""></div>

        </div>

    </div>

</main>
@endsection
