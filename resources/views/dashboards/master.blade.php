
<!doctype html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="../../assets/libs/flatpickr/dist/flatpickr.min.css">
        <!-- Required meta tags -->
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="Codescandy" />

<!-- Favicon icon-->
<link rel="shortcut icon" type="image/x-icon" href="../../assets/images/favicon/favicon.ico" />

<!-- darkmode js -->
<script src="../../assets/js/vendors/darkMode.js"></script>

<!-- Libs CSS -->
<link href="../../assets/fonts/feather/feather.css" rel="stylesheet" />
<link href="../../assets/libs/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet" />
<link href="../../assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet" />

<!-- Theme CSS -->
<link rel="stylesheet" href="../../assets/css/theme.min.css">
<link rel="canonical" href="admin-dashboard.html">
 <title>Panel d'administration vtp market</title>
 @livewireStyles
    </head>

    <body>
        <!-- Wrapper -->
        <div id="db-wrapper">
            <!-- navbar vertical -->
            <!-- Sidebar -->
<nav class="navbar-vertical navbar">
    <div class="vh-100" data-simplebar>
        <!-- Brand logo -->
        <a class="navbar-brand" href="#">
            <img src="#" alt="VTP MARKET" />
        </a>
        <!-- Navbar nav -->
        <ul class="navbar-nav flex-column" id="sideNavbar">
            <li class="nav-item">
                <a
                    class="nav-link "
                    href="#"

                   >
                    <i class="nav-icon fe fe-home me-2"></i>
                    Mon Espace
                </a>

            </li>
            <li class="nav-item">
                <a
                    class="nav-link"
                    href="#"
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

            <!-- Nav item -->
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

            <!-- Nav item -->
            <li class="nav-item">
                <a
                    class="nav-link"
                    href="#"
                    >
                    <i class="nav-icon fe fe-file me-2"></i>
                    Livraison & Point rélais
                </a>

            </li>



            <li class="nav-item">
                <div class="nav-divider"></div>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
                <div class="navbar-heading">Facture/commande</div>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link " href="chat-app.html">
                    <i class="nav-icon fe fe-message-square me-2"></i>
                   Gestion commannde
                </a>
            </li>
        </ul>
        
    </div>
</nav>

            <!-- Page Content -->
            <main id="page-content">
                <div class="header">
            <!-- navbar -->
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
                                    <h5 class="mb-1">Annette Black</h5>
                                    <p class="mb-0">annette@geeksui.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <ul class="list-unstyled">
                            <li class="dropdown-submenu dropstart-lg">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                                    <i class="fe fe-circle me-2"></i>
                                    Status
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <span class="badge-dot bg-success me-2"></span>
                                            Online
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <span class="badge-dot bg-secondary me-2"></span>
                                            Offline
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <span class="badge-dot bg-warning me-2"></span>
                                            Away
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <span class="badge-dot bg-danger me-2"></span>
                                            Busy
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="dropdown-item" href="../profile-edit.html">
                                    <i class="fe fe-user me-2"></i>
                                    Profile
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="../student-subscriptions.html">
                                    <i class="fe fe-star me-2"></i>
                                    Subscription
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="fe fe-settings me-2"></i>
                                    Settings
                                </a>
                            </li>
                        </ul>
                        <div class="dropdown-divider"></div>
                        <ul class="list-unstyled">
                            <li>
                                <a class="dropdown-item" href="../../index.html">
                                    <i class="fe fe-power me-2"></i>
                                    Sign Out
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
            </div>
            </nav>
            </div>
            
                <!-- Page Header -->
                <!-- Container fluid -->
                @yield('master')
            </main>
        </div>

        <!-- Script -->

        <!-- Libs JS -->
<script src="../../assets/libs/%40popperjs/core/dist/umd/popper.min.js"></script>
<script src="../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../../assets/libs/simplebar/dist/simplebar.min.js"></script>

<!-- Theme JS -->
<script src="../../assets/js/theme.min.js"></script>

        <script src="../../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
        <script src="../../assets/js/vendors/chart.js"></script>
        <script src="../../assets/libs/flatpickr/dist/flatpickr.min.js"></script>
        <script src="../../assets/js/vendors/flatpickr.js"></script>
        @livewireScripts
    </body>
</html>
