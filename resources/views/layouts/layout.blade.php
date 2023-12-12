
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
<body class="bg-white dark:bg-slate-950 overflow-x-hidden">

    <!-- header -->
    <header class="lg:py-4 lg:px-6 py-3 px-4 border-b border-slate-200/60 dark:border-slate-600/40 bg-white/95 backdrop-blur-xl z-40 dark:bg-slate-900/80 uk-animation-slide-top-small" uk-sticky>
        <div class="max-w-5xl mx-auto">
            <div class="flex justify-between items-center">

                <div class="flex gap-2 items-center z-20 relative">
                    <button type="button" class="p-2.5 text-lg max-md:flex hidden group z" uk-toggle="target: #header-nav ; cls:max-md:hidden">
                        <ion-icon name="menu" class="group-aria-expanded:inline hidden"></ion-icon>
                        <ion-icon name="close" class="group-aria-expanded:hidden"></ion-icon>
                    </button>
                  <h1 class="lg:py-1.5 py-2.5 px-3 duration-500 hover:text-black">VTP MARKET </h1>
                </div>

                <div id="header-nav" class="max-md:hidden max-md:bg-white max-md:p-5 max-md:fixed max-md:top-0 max-md:shadow-md max-md:left-0 max-md:pt-14 max-md:w-full max-md:z-10">
                    <nav class="flex lg:items-center font-medium text-slate-500 dark:text-white/70 lg:gap-1 max-md:border-t max-md:pt-2 max-md:flex max-md:flex-col" uk-scrollspy-nav="closest: a ; scroll: true">
                        <a class="lg:py-1.5 py-2.5 px-3 duration-500 hover:text-black" href="#home">Accueil</a>
                        <a class="lg:py-1.5 py-2.5 px-3 duration-500 hover:text-black" href="#features">Boutique</a>
                        <a class="lg:py-1.5 py-2.5 px-3 duration-500 hover:text-black" href="#demos">Catalogue Produit</a>
                        <a class="lg:py-1.5 py-2.5 px-3 duration-500 hover:text-black" href="#faq"></a>
                        <div hx-boost="true">
                            <a href="/catalogue-product">Blog</a>
                        </div>
                    </nav>
                </div>

                <div class="flex items-center z-20 relative">

                    <div class="flex items-center gap-4 relative pl-6 text-slate-600">

                        <a class="bg-blue-500 dark:bg-pink-700/30 text-white shadow px-4 h-9 text-sm rounded-md flex items-center gap-2 font-semibold" target="_blank" href="https://themeforest.net/item/socialite-online-community-html-template/26345647">
                            <ion-icon name="cart-outline" class="text-xl"></ion-icon> Rejoindre
                        </a>

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

               une conception de  <a class="ml-2 hover:underline hover:text-blue-500" href="https://foxthemes.net/">KGS INFORMATIQUE</a>

            </div>

        </div>
    </footer>


    <!-- Uikit js you can use cdn  https://getuikit.com/docs/installation  or fine the latest  https://getuikit.com/docs/installation -->
    <script src="assets/js/uikit.min.js"></script>
    <script src="assets/js/script.js"></script>

    <!-- Ion icon -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>


    @livewireScripts
</body>
</html>
