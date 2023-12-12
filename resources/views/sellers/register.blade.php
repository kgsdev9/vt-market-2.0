<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Devenir vendeur</title>
    <link rel="stylesheet" href="{{asset('assets/css/tailwind.css')}}">
</head>
<body>

    <div class="min-h-screen flex items-center justify-center">
        <div class="container">
            <div class="max-w-xl mx-auto">
                <div class=" mb-6">
                    <div class="">
                        <div class="bg-white shadow-md md:p-10 p-5 rounded-xl ">
                            <div class="mb-12">
                                <a href="https://fintou.com">
                                    <img src="{{asset('vtp.png')}}" alt="logo-img" class="h-20">
                                </a>
                            </div>
                            <h6 class="text-base/[1.6] font-semibold text-gray-600 mb-0 mt-4">Ouvrer gratuitement  un  compte vendeur </h6>
                            <p class="text-gray-500 text-sm/[1.6] mt-1 mb-6">
                                Remplissez correctement les champs avec vos informations
                            </p>

                            <!-- form -->
                            <form action="https://fintou.com/auth/register" method="post">
                                <input type="hidden" name="_token" value="bs8D4HNVLAmbWBcYlty2eqza9Pa8tu7iDQCs8Hh7">                            <div class="">

                                    <!-- about -->
                                    <div class="w-full" id="wiz1">
                                        <div>
                                            <div class="space-y-4 font-normal text-sm">
                                                <h4 class="font-semibold text-base text-black dark:text-white">Informations personnelles</h4>

                                                <div class="grid grid-cols-2 space-x-2 justify-between mb-4 w-full">
                                                    <div class="">
                                                        <input type="text" id="nom" name="nom" class="py-2 px-4 leading-6 block w-full border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0" placeholder="Nom" value="">
                                                        <label for="nom" class="text-red-500">  </label>
                                                    </div>

                                                    <div class="">
                                                        <input type="text" id="prenom" name="prenom" class="py-2 px-4 leading-6 block w-full border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0" placeholder="Prénom (s)" value="">
                                                        <label for="prenom" class="text-red-500">  </label>
                                                    </div>
                                                </div>
                                                <div class="hidden">
                                                    <input type="number" id="indicatif" name="indicatif" value="228" class="py-2 px-4 leading-6 block w-full border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0" placeholder="Indicatif">
                                                    <label for="indicatif" class="text-red-500">  </label>
                                                </div>

                                                <div class="w-full mb-4 space-y-1">
                                                    <label for="phone">Téléphone</label>
                                                    <input type="tel" id="phone" name="phone" class="py-2.5 px-5 leading-6 block w-full border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0" value="">
                                                    <label for="phone" class="text-red-500">  </label>
                                                </div>

                                                <div class="hidden">
                                                    <label for="country">Pays de résidence</label>
                                                    <input id="country" name="country" class="py-2 px-4 leading-6 block w-full border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0" value="Togo">
                                                    <label for="country" class="text-red-500">  </label>
                                                </div>

                                                <div class="mb-4 space-y-1">
                                                    <label for="birthday">Date de naissance</label>
                                                    <input type="date" id="birthday" name="birthday" class="py-2 px-4 leading-6 block w-full border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0" placeholder="Date de naissance" max="2005-12-19" value="">
                                                    <label for="birthday" class="text-red-500">  </label>
                                                </div>

                                                <div class="mb-4  space-y-1">
                                                    <label for="sexe">Sexe</label>
                                                    <select type="date" id="sexe" name="sexe" class="py-2 px-4 leading-6 block w-full border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0" placeholder="Date de naissance" value="">
                                                        <option value="">Choisir</option>
                                                        <option value="mascular">Masculin</option>
                                                        <option value="female">Féminin</option>
                                                    </select>
                                                    <label for="sexe" class="text-red-500">  </label>
                                                </div>

                                                <div class="font-medium text-sm">
                                                    <div>
                                                        <label for="checkbox1" class="flex mx-auto">
                                                            <input class="rounded mt-1" type="checkbox" name="checkbox1" id="checkbox1" value="3" required>
                                                            <span class="ml-3"> J'ai lu et accepte les <a href="#" target="_blank" class="underline">conditions d'utilisations</a> et
                                                                <a href="#" target="_blank" class="underline">politique de protection de vie privé</a> du service</b> </span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <div class="mb-0 ml-3 text-center">
                                                        <button class="w-full bg-blue-500 text-white font-medium leading-6 text-center align-middle select-none shadow-xl py-3 px-4 text-base rounded-md transition-all hover:shadow-lg hover:shadow-primary/30" type="button">Continuer</button>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- add image -->
                                    <div class="w-full uk-transition-active" id="wiz2" style="display: none;">
                                        <div class="space-y-4 font-normal text-sm" uk-scrollspy="target: > div; cls: uk-animation-scale-up; delay: 300;repeat:true">
                                            <h4 class="font-semibold text-base text-black dark:text-white">Informations d'identification</h4>

                                            <div class="mb-4">
                                                <input type="text" id="email" name="email" class="py-2 px-4 leading-6 block w-full border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0" placeholder="Adresse email" value="">
                                                <label for="email" class="text-red-500">  </label>
                                            </div>

                                            <div class="relative mt-1 mb-4">
                                                <input type="password" name="password" id="password" class="text-base block w-full rounded-[10px] ps-5 pe-14 border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0" placeholder="Mot de passe">
                                                <span class="text-primary absolute right-3 top-1/2 -translate-y-1/2 cursor-pointer">
                                                    <i class="mdi mdi-eye mdi-18px" id="eye"></i>
                                                    <i class="mdi mdi-eye-off hidden mdi-18px" id="eyeoff"></i>
                                                </span>
                                            </div>
                                            <label for="password" class="text-red-500">  </label>

                                            <div class="relative mt-1 mb-4">
                                                <input type="password" name="password_confirmation" id="password_confirmation" class="text-base block w-full rounded-[10px] ps-5 pe-14 border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0" placeholder="Confirmer le mot de passe">
                                                <span class="text-primary absolute right-3 top-1/2 -translate-y-1/2 cursor-pointer">
                                                    <i class="mdi mdi-eye mdi-18px" id="eyes"></i>
                                                    <i class="mdi mdi-eye-off hidden mdi-18px" id="eyeoffs"></i>
                                                </span>
                                            </div>
                                            <label for="password_confirmation" class="text-red-500">  </label>

                                            <div class="flex">
                                                <div class="mb-0 text-center">
                                                    <button onclick="retWizard1();" class="w-full bg-white text-secon border font-medium leading-6 text-center align-middle select-none shadow-xl py-3 px-4 text-base rounded-md transition-all hover:shadow-lg hover:shadow-primary/30" type="button">Retour</button>
                                                </div>
                                                <div class="mb-0 ml-3 text-center">
                                                    <button class=" bg-primary text-white font-medium leading-6 text-center align-middle select-none shadow-xl py-3 px-4 text-base rounded-md transition-all hover:shadow-lg hover:shadow-primary/30" type="submit">S'inscrire</button>
                                                    <button class="button bg-blue-500 dark:bg-pink-700/30 text-white text-white">sss</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </form>
                            <!-- end form-->

                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>

</body>
</html>
