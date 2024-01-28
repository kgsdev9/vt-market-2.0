
<!doctype html>
<html lang="en">
<head>
<link rel="stylesheet" href="../../assets/libs/flatpickr/dist/flatpickr.min.css">
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="VTP MARKET" />
<link rel="shortcut icon" type="image/x-icon" href="../../assets/images/favicon/favicon.ico" />
<link href="{{asset('assets/fonts/feather/feather.css')}}" rel="stylesheet" />
<link href="{{asset('assets/libs/bootstrap-icons/font/bootstrap-icons.min.css')}}" rel="stylesheet" />
<link href="{{asset('assets/libs/simplebar/dist/simplebar.min.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('assets/css/theme.min.css')}}">
 <title>@yield('title')</title>
 @livewireStyles
 </head>
    <body>
    <div id="db-wrapper">
    <nav class="navbar-vertical navbar">
    <div class="vh-100" data-simplebar>
        <a class="navbar-brand text-dark" href="{{route('home')}}" target="_blank">
          VTP MARKET
        </a>
        <ul class="navbar-nav flex-column" id="sideNavbar">
            <li class="nav-item">
                <a
                    class="nav-link "
                    href="{{route('dashboard')}}"
                   >
                    <i class="nav-icon fe fe-home me-2"></i>
                    Mon Espace
                </a>
            </li>
            @can('is_administrateur')
            <li class="nav-item">
                <a
                    class="nav-link"
                    href="{{route('management.store')}}"
                    >
                    <i class="nav-icon fe fe-book me-2"></i>
                    Gestion vendeurs
                </a>
            </li>

            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('categorie.index')}}" >
                    <i class="nav-icon fe fe-user me-2"></i>
                    Gestion Catégories
                </a>

            </li>
            <li class="nav-item">
                <a class="nav-link  collapsed " href="{{route('role.management')}}">
                    <i class="nav-icon fe fe-book-open me-2"></i>
                  Gestion des roles
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link  collapsed " href="{{route('geston.users')}}">
                    <i class="nav-icon fe fe-book-open me-2"></i>
                   Gestion des utilisateurs
                </a>
            </li>
            @endcan
            <!-- Nav item -->
            @can('is_seller')
            <li class="nav-item">
                <a class="nav-link  collapsed " href="{{route('product.management')}}">
                    <i class="nav-icon fe fe-book-open me-2"></i>
                   Profil vendeur
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link  collapsed " href="{{route('gestion.boutique')}}">
                    <i class="nav-icon fe fe-book-open me-2"></i>
                   Ma boutique
                </a>
            </li>
            @endcan

            @can('is_administrateur')
            <li class="nav-item">
                <div class="nav-divider"></div>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
                <div class="navbar-heading">Facture/commande</div>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link " href="{{route('all.commandes')}}">
                    <i class="nav-icon fe fe-message-square me-2"></i>
                   Gestion commannde
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="{{route('country.management')}}">
                    <i class="nav-icon fe fe-message-square me-2"></i>
                  Gestion pays
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="{{route('city.management')}}">
                    <i class="nav-icon fe fe-message-square me-2"></i>
                  Gestion ville
                </a>
            </li>
            @endcan
        </ul>

    </div>
</nav>

            <!-- Page Content -->
            <main id="page-content">
                <div class="header">
            <nav class="navbar-default navbar navbar-expand-lg">
            <a id="nav-toggle" href="#">
            <i class="fe fe-menu"></i>
            </a>
            <div class="ms-auto d-flex">
            <ul class="navbar-nav navbar-right-wrap ms-2 d-flex nav-top-wrap">
                <li class="dropdown ms-2">
                    <a class="rounded-circle" href="#" role="button" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="avatar avatar-md avatar-indicators avatar-online">
                            <img alt="avatar" src="../../assets/images/avatar/avatar-1.jpg" class="rounded-circle" />
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
                        <div class="dropdown-item">
                            <div class="d-flex">
                                <div class="avatar avatar-md avatar-indicators avatar-online">
                                    <img alt="avatar" src="../../assets/images/avatar/avatar-1.jpg" class="rounded-circle" />
                                </div>
                                <div class="ms-3 lh-1">
                                    <h5 class="mb-1">{{Auth::user()->name}}</h5>
                                    <p class="mb-0">{{Auth::user()->email}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>

                        <div class="dropdown-divider"></div>
                        <ul class="list-unstyled">
                            <li>
                                <a class="dropdown-item" href="../../index.html">
                                    <i class="fe fe-power me-2"></i>
                                    Déconnexion
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
            </div>
            </nav>
            </div>
                @yield('master')
            </main>
        </div>
        <script src="../../assets/libs/%40popperjs/core/dist/umd/popper.min.js"></script>
        <script src="../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="../../assets/libs/simplebar/dist/simplebar.min.js"></script>
        <script src="../../assets/js/theme.min.js"></script>
         <script src="../../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
        <script src="../../assets/js/vendors/chart.js"></script>
        <script src="../../assets/libs/flatpickr/dist/flatpickr.min.js"></script>
        <script src="../../assets/js/vendors/flatpickr.js"></script>
        @livewireScripts
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <x-livewire-alert::scripts />
    </body>
</html>
