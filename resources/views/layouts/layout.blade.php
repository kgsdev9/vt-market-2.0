
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="VTP market" />
    <meta name="author" content="KGS INFORMATIQUE" />
    <link rel="shortcut icon" type="image/x-icon" href="#" />
    <link href="{{asset('assets/fonts/feather/feather.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/libs/bootstrap-icons/font/bootstrap-icons.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('assets/libs/simplebar/dist/simplebar.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/theme.min.css')}}">
    <link rel="canonical" href="vtp-market.com" />
    <title>@yield('title')</title>
  </head>
  <body>
    <main class="bg-white">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid px-0">
                <div class="d-flex">
                    <a class="navbar-brand text-dark" href="/">
                     <strong> VTP MARKET</strong>
                    </a>
                </div>
                <div class="order-lg-3">
                    <div class="d-flex align-items-center">
                        @guest
                        <a href="{{route('login')}}" class="btn btn-outline-secondary ms-2"> <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 21C4 17.4735 6.60771 14.5561 10 14.0709M19.8726 15.2038C19.8044 15.2079 19.7357 15.21 19.6667 15.21C18.6422 15.21 17.7077 14.7524 17 14C16.2923 14.7524 15.3578 15.2099 14.3333 15.2099C14.2643 15.2099 14.1956 15.2078 14.1274 15.2037C14.0442 15.5853 14 15.9855 14 16.3979C14 18.6121 15.2748 20.4725 17 21C18.7252 20.4725 20 18.6121 20 16.3979C20 15.9855 19.9558 15.5853 19.8726 15.2038ZM15 7C15 9.20914 13.2091 11 11 11C8.79086 11 7 9.20914 7 7C7 4.79086 8.79086 3 11 3C13.2091 3 15 4.79086 15 7Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg> Se Connecter</a>
                            @else
                            <a href="{{route('dashboard')}}" class="btn btn-outline-secondary ms-2"> <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 21C4 17.4735 6.60771 14.5561 10 14.0709M19.8726 15.2038C19.8044 15.2079 19.7357 15.21 19.6667 15.21C18.6422 15.21 17.7077 14.7524 17 14C16.2923 14.7524 15.3578 15.2099 14.3333 15.2099C14.2643 15.2099 14.1956 15.2078 14.1274 15.2037C14.0442 15.5853 14 15.9855 14 16.3979C14 18.6121 15.2748 20.4725 17 21C18.7252 20.4725 20 18.6121 20 16.3979C20 15.9855 19.9558 15.5853 19.8726 15.2038ZM15 7C15 9.20914 13.2091 11 11 11C8.79086 11 7 9.20914 7 7C7 4.79086 8.79086 3 11 3C13.2091 3 15 4.79086 15 7Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg> Mon Espace</a>
                        @endguest
                        <a  href="{{route('cart')}}" class="btn btn-icon btn-light rounded-circle d-none d-md-inline-flex ms-2">
                            <i class="fe fe-shopping-cart align-middle"></i> </a>
                        <button class="navbar-toggler collapsed ms-2 ms-lg-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar top-bar mt-0"></span>
                            <span class="icon-bar middle-bar"></span>
                            <span class="icon-bar bottom-bar"></span>
                        </button>
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="navbar-default">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="navbarLanding"> <svg width="20px" height="2Opx" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" stroke-width="3" stroke="#000000" fill="none"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M43.21,54.62H12a2.93,2.93,0,0,1-3-2.84V26.19"></path><line x1="49.01" y1="26.36" x2="49.01" y2="37.37"></line><polyline points="23.26 54.55 23.26 37.48 34.84 37.48 34.84 54.55"></polyline><path d="M5.45,18.2s-1.1,7.76,6.45,9a7.15,7.15,0,0,0,6.1-2A7.43,7.43,0,0,0,29,25a7.37,7.37,0,0,0,5,2.49,11.77,11.77,0,0,0,5.89-2.15,6.67,6.67,0,0,0,4.68,2.15,8,8,0,0,0,7.92-9.3L47.79,8.08a1,1,0,0,0-.94-.66H11a1,1,0,0,0-.94.66Z"></path><line x1="5.45" y1="18.2" x2="52.54" y2="18.2"></line><line x1="18.05" y1="18.2" x2="18.05" y2="7.42"></line><line x1="29.05" y1="18.2" x2="29.05" y2="7.42"></line><line x1="40.02" y1="18.2" x2="40.02" y2="7.42"></line><circle cx="49.01" cy="46.97" r="9.6"></circle><polyline points="49.01 40.86 49.01 47.27 52.58 50.01"></polyline></g></svg>  Les Professionelles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="navbarPages" > <svg width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <defs> <style>.cls-1{fill:none;stroke:#000000;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5px;}</style> </defs> <g id="ic-ecommerce-basket"> <path class="cls-1" d="M17.89,20.85H6.11a1.42,1.42,0,0,1-1.38-1.08L2.08,9.16a.7.7,0,0,1,.68-.87H21.24a.7.7,0,0,1,.68.87L19.27,19.77A1.42,1.42,0,0,1,17.89,20.85Z"></path> <line class="cls-1" x1="9.8" y1="3.15" x2="6.9" y2="8.29"></line> <line class="cls-1" x1="13.88" y1="3.15" x2="16.79" y2="8.29"></line> </g> </g></svg> Catalogue produit </a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" > <svg width="20px" height="20px" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><defs><style>.a{fill:none;stroke:#000000;stroke-linecap:round;stroke-linejoin:round;}</style></defs><circle class="a" cx="24" cy="24" r="21.5"></circle><path class="a" d="M9.3874,11.974V27.847c7.6216,1.255,14.384,2.87,19.378,5.2271V18.2211a47.8844,47.8844,0,0,0-19.378-6.247Z"></path><path class="a" d="M40.113,15.926V31.544a99.4176,99.4176,0,0,0-19.57,5.4821V22.1731c5.7077-3.8293,12.444-5.4926,19.57-6.247Z"></path></g></svg> Rubriques formations</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" > <svg width="20px" height="20px" viewBox="0 0 48 48" id="b" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <defs> <style>.c{fill:none;stroke:#000000;stroke-linecap:round;stroke-linejoin:round;}</style> </defs> <g> <path class="c" d="m37.9413,27.8362c.5924-.2403,1.647-.5589,1.9642-.1743.3434.4163-.0906,1.3195-.4901,2.0213"></path> <path class="c" d="m27.03,28.1145c.9368.7439,3.7041,1.8828,6.6523,1.8828,2.8105,0,4.5262-1.0182,5.4162-1.6402"></path> </g> <g> <path class="c" d="m41.68,13h-16.91c-2-.1-5.93-4.23-8.19-4.23H6.68c-1.204-.0003-2.1803.9754-2.1806,2.1794,0,.0169.0002.0337.0006.0506h0v7.29h39v-3.42c.0221-1.0104-.7791-1.8475-1.7895-1.8696-.0102-.0002-.0203-.0004-.0305-.0004Z"></path> <path class="c" d="m43.5,18.28H4.5v18.72c-.0111,1.2039.956,2.1889,2.1599,2.1999.0034,0,.0067,0,.0101,0h34.65c1.204,0,2.18-.9759,2.1801-2.1799,0-.0067,0-.0134,0-.0201h0v-18.72Z"></path> </g> </g></svg> Comment ca marche</a>
                        </li>
                        <form class="m d-flex align-items-center">
                            <span class="position-absolute ps-3 search-icon">
                                <i class="fe fe-search"></i>
                            </span>
                            <label for="search" class="visually-hidden"></label>
                            <input type="search" id="search" class="form-control ps-6" placeholder="Rechercher....">
                        </form>
                    </ul>
                </div>
            </div>
        </nav>
      @yield('content')
    </main>
    <footer class="pt-lg-8 pt-5 footer bg-white">
        <div class="container mt-lg-2">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="mb-4">
                       VTP MARKET
                        <div class="mt-4">
                            <p class="lead"> VTP-MARKET est une plateforme d'achat et de vente de produits inernationaux, nous collectons des vendeurs de plusieurs pays d'Afrique et d'Europe afin de satisfaire le besoin de nos clients.</p>
                            <!-- social media -->
                            <div class="fs-4 mt-4">
                                <!--Facebook-->
                                <a href="#" class="me-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                                    </svg>
                                </a>
                                <!--Twitter-->
                                <a href="#" class="me-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                                    </svg>
                                </a>

                                <!--GitHub-->
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-2 col-md-3 col-6">
                    <div class="mb-4">
                        <h3 class="fw-bold mb-3">Mode de paiement </h3>
                        <ul class="list-unstyled nav nav-footer flex-column nav-x-0">
                            <li><a href="#" class="nav-link">Orange Money CI </a></li>
                            <li><a href="#" class="nav-link">MTN MONEY CI</a></li>
                            <li><a href="#" class="nav-link">WAVE CI </a></li>
                            <li><a href="#" class="nav-link">MASTER-CARD</a></li>
                            <li><a href="#" class="nav-link">PAYPAL</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6">
                    <div class="mb-4">
                        <h3 class="fw-bold mb-3">Gagner de l'argent</h3>
                        <ul class="list-unstyled nav nav-footer flex-column nav-x-0">
                            <li><a href="#" class="nav-link">Vendre sur Vtp</a></li>
                            <li><a href="#" class="nav-link">Catalogue produit</a></li>
                            <li><a href="#" class="nav-link">Agence et point rélais</a></li>
                            <li><a href="#" class="nav-link">FAQ’s</a></li>
                            <li><a href="#" class="nav-link">Pourquoi nous </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="mb-4">
                        <h3 class="fw-bold mb-3">Contact pro </h3>
                        <p>Paris France Rue corneille Saint germain </p>
                        <p class="mb-1">
                            Email:
                            <a href="#" class="text-dark">vtp-sas-france@gmail.com</a>
                        </p>
                        <p>
                              Télephone:
                            <span class="text-dark fw-semibold">(+33)08677655665</span>
                        </p>
                        <div class="d-flex">
                            <a href="#"><img src="../../assets/images/svg/appstore.svg" alt="" class="img-fluid"></a>
                            <a href="#" class="ms-2"><img src="../../assets/images/svg/playstore.svg" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center g-0 border-top py-2 mt-6">
                <div class="col-md-10 col-12">
                    <div class="d-lg-flex align-items-center">
                        <div class="me-4">
                            <span>
                                ©
                                <span id="copyright5">
                                    <script>
                                        document.getElementById("copyright5").appendChild(document.createTextNode(new Date().getFullYear()));
                                    </script>2024
                                </span>
                                GROUP VTP
                            </span>
                        </div>
                        <div>
                            <nav class="nav nav-footer">
                                <a class="nav-link ps-0" href="#">Une Production de KGS INFORMATIQUE</a>
                                <a class="nav-link px-2 px-md-3" href="#">Politique de confidentialité</a>
                                <a class="nav-link d-none d-lg-block" href="#">Dénoncer quelque chose</a>
                                <a class="nav-link" href="#">Terme et condition</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/libs/simplebar/dist/simplebar.min.js')}}"></script>
    <script src="{{asset('assets/js/theme.min.js')}}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    @livewireScripts
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <x-livewire-alert::scripts />
  </body>
</html>
