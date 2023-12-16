<div>
    <div class="ltr:flex flex-1 rtl:flex-row-reverse">
        <div class="page-wrapper relative ltr:ml-auto rtl:mr-auto rtl:ml-0 w-[calc(100%-260px)] px-4 pt-[64px] duration-300">
            <div class="xl:w-full">
                <div class="flex flex-wrap">
                    <div class="flex items-center py-4 w-full">
                        <div class="w-full">
                            <div class="flex flex-wrap justify-between">
                                <div class="items-center ">
                                    <h1 class="font-medium text-3xl block dark:text-slate-100">Gestion de ma boutique</h1>
                                    <ol class="list-reset flex text-sm">
                                        <li><a href="#" class="text-gray-500 dark:text-slate-400">Robotech</a></li>
                                        <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
                                        <li class="text-gray-500 dark:text-slate-400">Apps</li>
                                        <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
                                        <li class="text-primary-500 hover:text-primary-600 dark:text-primary-400">Contact List</li>
                                    </ol>
                                </div><!--end /div-->
                                <div class="flex items-center">
                                    <div class="today-date leading-5 mt-2 lg:mt-0 form-input w-auto rounded-md border inline-block border-primary-500/60 dark:border-primary-500/60 text-primary-500 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-primary-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                        <input type="text" class="dash_date border-0 focus:border-0 focus:outline-none flatpickr-input" readonly="readonly" required="">
                                    </div>
                                </div><!--end /div-->
                            </div><!--end /div-->
                        </div><!--end /div-->
                    </div><!--end /div-->
                </div><!--end /div-->
            </div><!--end container-->
            <div class="container my-4">
                <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">

                    <div class="sm:col-span-12  md:col-span-12 lg:col-span-8 xl:col-span-8 ">
                        <div class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative mb-4">
                            <div class="border-b border-slate-200 dark:border-slate-700/40 py-3 px-4 dark:text-slate-300/70">
                                <h4 class="font-medium">Information de la boutique </h4>
                            </div><!--end header-title-->
                            <div class="flex-auto p-4">
                                <div >
                                    <div class="col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2">
                                        <div class="mb-2">
                                            <label for="First_Name" class="font-medium text-sm text-slate-600 dark:text-slate-400">Nom de la boutique <small class="text-red-600 text-sm">*</small></label>
                                            <input class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700" wire:model="nom" placeholder="VTP STORE" type="text">
                                        </div>
                                    </div>
                                    <div class="col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2">
                                        <div class="mb-2">
                                            <label for="Last_name" class="font-medium text-sm text-slate-600 dark:text-slate-400">Logo de la boutique <small class="text-red-600 text-sm">*</small></label>
                                            <input   wire:model="logo" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700" placeholder="Last name" type="file">
                                        </div>
                                    </div>

                                </div>
                                <div class="grid grid-cols-4 gap-4">
                                    <div class="col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2">
                                        <div class="mb-2">
                                            <label for="Delivery_Address" class="font-medium text-sm text-slate-600 dark:text-slate-400">Adresse physique de la boutique <small class="text-red-600 text-sm">*</small></label>
                                            <input wire:model="adresse" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700" placeholder="Address" type="text">
                                        </div>
                                    </div>

                                </div>

                                <div class="grid grid-cols-4 gap-4">
                                    <div class="col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2">
                                        <div class="mb-2">
                                            <label for="Delivery_Address" class="font-medium text-sm text-slate-600 dark:text-slate-400">Selectionner un vendeur <small class="text-red-600 text-sm">*</small></label>
                                        <select wire:model="vendeur_id" id="">
                                            <option value="">Selectionner un vendeur</option>
                                            @foreach ($allSellers as $seller)
                                                <option value="{{$seller->id}}">{{$seller->nom}}</option>
                                            @endforeach
                                        </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="grid grid-cols-3 gap-4">
                                    <div class="col-span-4 md:col-span-2 lg:col-span-1 xl:col-span-1">
                                        <div class="mb-2">
                                            <label for="City" class="font-medium text-sm text-slate-600 dark:text-slate-400">Pays<small class="text-red-600 text-sm">*</small></label>
                                            <select id="City" wire:model="country_id" class="w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-[6.5px] focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700">
                                                <option class="dark:text-slate-700">-- select --</option>
                                                @foreach ($countryAll as $country)
                                                <option class="dark:text-slate-700" value="{{$country->id}}">{{$country->nom}}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-span-4 md:col-span-2 lg:col-span-1 xl:col-span-1">
                                        <div class="mb-2">
                                            <label for="City" class="font-medium text-sm text-slate-600 dark:text-slate-400">Ville<small class="text-red-600 text-sm">*</small></label>
                                            <select id="City" wire:model="city_id" class="w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-[6.5px] focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700">
                                                <option class="dark:text-slate-700">-- select --</option>
                                                @foreach ($allCities as $city)
                                                <option class="dark:text-slate-700" value="{{$city->id}}">{{$city->nom}}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>


                                </div>


                                <div class="mt-3">
                                    <button class="inline-block focus:outline-none text-white hover:bg-brand-500 hover:text-white bg-brand-500 border border-gray-200 text-sm font-medium py-1 px-3 rounded" type="button " wire:click="registerStore()">Enregistrer</button>
                                </div>
                            </div><!--end card-body-->
                        </div> <!--end card-->

                        <div>
                            <h1>mes porudits</h1>
                            <input type="file" wire:model="images" id="">
                            <input type="file" wire:model="images" id="">
                            <input type="file" wire:model="images" id="">
                            <button wire:click="storeProduct">Enregistrer</button>
                        </div>
                    </div><!--end col-->
                </div><!--end inner-grid-->
            </div>
                                        @if ($images)
                                        @foreach ($images  as  $image)
                                            <img src="{{ $image->temporaryUrl() }}">
                                        
                                        @endforeach
                                        @endif

        </div><!--end page-wrapper-->
    </div>
</div>
