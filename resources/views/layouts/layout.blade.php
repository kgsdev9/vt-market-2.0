
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link href="{{asset('vtp.png')}}" rel="icon" type="image/png">

    <title>@yield('title')</title>
    <meta name="description" content="Bienvenue sur vtp-market-place">
    <!-- css files kgs informatique -->
    <link rel="stylesheet" href="{{asset('assets/css/tailwind.css')}}">
    <script src="https://unpkg.com/htmx.org@1.9.9" integrity="sha384-QFjmbokDn2DjBjq+fM+8LUIVrAgqcNW2s0PjAxHETgRn9l4fvX31ZxDxvwQnyMOX" crossorigin="anonymous"></script>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- custom style -->
    <style>
        #header-nav nav a.uk-active         { color: brown}
        .dark #header-nav nav a.uk-active   { color:#fff !important}
    </style>
    @livewireStyles
</head>
<body  >

    <!-- header -->
    <header class="lg:py-4 lg:px-6 py-3 px-4 border-b border-slate-200/60 dark:border-slate-600/40 bg-white/95 backdrop-blur-xl z-40 dark:bg-slate-900/80 uk-animation-slide-top-small" uk-sticky>
        <div class="max-w-5xl mx-auto">
            <div class="flex justify-between items-center">

                <div class="flex gap-2 items-center z-20 relative">
                    <button type="button" class="p-2.5 text-lg max-md:flex hidden group z" uk-toggle="target: #header-nav ; cls:max-md:hidden">
                        <ion-icon name="menu" class="group-aria-expanded:inline hidden"></ion-icon>
                        <ion-icon name="close" class="group-aria-expanded:hidden"></ion-icon>
                    </button>
                  <h1 class="lg:py-1.5 py-2.5 px-3 duration-500 hover:text-black">VTP </h1>
                </div>

                <div id="header-nav" class="max-md:hidden max-md:bg-white max-md:p-5 max-md:fixed max-md:top-0 max-md:shadow-md max-md:left-0 max-md:pt-14 max-md:w-full max-md:z-10">
                    <nav class="flex lg:items-center font-medium text-slate-500 dark:text-white/70 lg:gap-1 max-md:border-t max-md:pt-2 max-md:flex max-md:flex-col" uk-scrollspy-nav="closest: a ; scroll: true">
                        <a class="lg:py-1.5 py-2.5 px-3 duration-500 hover:text-black" href="/" hx-boost="true">Accueil</a>
                        <a class="lg:py-1.5 py-2.5 px-3 duration-500 hover:text-black" href="/all/stores/vtp" hx-boost="true">Boutique</a>
                        <a class="lg:py-1.5 py-2.5 px-3 duration-500 hover:text-black" href="#">Catalogue Produit</a>
                        <a class="lg:py-1.5 py-2.5 px-3 duration-500 hover:text-black" href="#">Deals  Voyage</a>

                    </nav>
                </div>

                <div class="flex items-center z-20 relative">

                    <div class="flex items-center gap-4 relative pl-6 text-slate-600">
                        <a class="bg-blue-500 dark:bg-pink-700/30 text-white shadow px-4 h-9 text-sm rounded-md flex items-center gap-2 font-semibold" href="{{route('cart')}}" hx-boost="true">
                            <ion-icon name="cart-outline" class="text-xl"></ion-icon>
                        </a>

                        <div hx-boost="true">
                            <a class="flex items-center gap-3 rounded-lg px-5 py-2.5 bg-black text-white" href="/fr/auth">
                                <svg width="20px" height="15px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M5 21C5 17.134 8.13401 14 12 14C15.866 14 19 17.134 19 21M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>  Connexion
                            </a>
                        </div>


                        <div class="w-[1px] bg-slate-200 h-6 absolute left-0 hidden"></div>
                    </div>

                </div>

            </div>
        </div>
    </header>

    @yield('content')

    <footer>
        <div class="max-w-5xl mx-auto mb-6 mt-32 pt-6 border-t dark:border-slate-800">
            <div class="flex justify-center text-sm dark:to-white">
               Une conception de  <a class="ml-2 hover:underline hover:text-blue-500" href="#">KGS INFORMATIQUE</a>
            </div>
        </div>
    </footer>
    <script src="{{asset('assets/js/uikit.min.js')}}"></script>
    <script src="{{asset('assets/js/script.js')}}"> </script>
    <script src="{{asset('assets/js/simplebar.js')}}"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    @livewireScripts
    @include('sweetalert::alert')
</body>
</html>
