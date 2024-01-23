
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="VTP market" />
    <meta name="author" content="KGS INFORMATIQUE" />
    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="#" />

    <!-- Libs CSS -->
    <link href="{{asset('assets/fonts/feather/feather.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/libs/bootstrap-icons/font/bootstrap-icons.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('assets/libs/simplebar/dist/simplebar.min.css')}}">
    <!-- Theme CSS -->

    <link rel="stylesheet" href="{{asset('assets/css/theme.min.css')}}">
    <link rel="canonical" href="vtp-market.com" />
    <title>Commercialiser vos produits avec nous  </title>
  </head>

  <body >
    <main class="bg-white">
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid px-0">
          <a class="navbar-brand text-dark" href="/">VTP MARKET </a>
          <div class="ms-auto d-flex align-items-center order-lg-3">
            <ul class="navbar-nav navbar-right-wrap ms-2 flex-row d-none d-md-block">
              <li class="dropdown ms-2 d-inline-block position-static">
                <a class="rounded-circle" href="#" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                  <div class="avatar avatar-md avatar-indicators avatar-online">
                    <img alt="avatar" src="{{asset('assets/images/avatar/avatar-1.jpg')}}" class="rounded-circle" />
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end position-absolute mx-3 my-5">
                  <div class="dropdown-item">
                    <div class="d-flex">
                      <div class="avatar avatar-md avatar-indicators avatar-online">
                        <img alt="avatar" src="{{asset('assets/images/avatar/avatar-1.jpg')}}" class="rounded-circle" />
                      </div>
                      <div class="ms-3 lh-1">
                        <h5 class="mb-1">Annette Black</h5>
                        <p class="mb-0">annette@geeksui.com</p>
                      </div>
                    </div>
                  </div>
                  <div class="dropdown-divider"></div>
                  <ul class="list-unstyled">
                    @guest
                    <li>
                        <a class="dropdown-item" href="{{route('login')}}">
                          <i class="fe fe-star me-2"></i>
                          Se Connecter
                        </a>
                      </li>
                    @else
                    <li>
                        <a class="dropdown-item" href="/dashboard">
                          <i class="fe fe-user me-2"></i>
                         Mon compte
                        </a>
                    @endguest
                    </li>
                    <li>
                      <a class="dropdown-item" href="pages/student-subscriptions.html">
                        <i class="fe fe-star me-2"></i>
                        Mes commandes
                      </a>
                    </li>
                    <li>
                     
                    </li>
                  </ul>
                  <div class="dropdown-divider"></div>
                  <ul class="list-unstyled">
                    <li>
                      <a class="dropdown-item" href="index.html">
                        <i class="fe fe-power me-2"></i>
                        Deconnexion
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
          <div>
            <button
              class="navbar-toggler collapsed ms-2"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbar-default"
              aria-controls="navbar-default"
              aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="icon-bar top-bar mt-0"></span>
              <span class="icon-bar middle-bar"></span>
              <span class="icon-bar bottom-bar"></span>
            </button>
          </div>
          <!-- Collapse -->
          <div class="collapse navbar-collapse">
            <ul class="navbar-nav mt-3 mt-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="{{route('home')}}">Accueil</a>

              </li>
              <li class="nav-item">
                <a class="nav-link" href="">Les Catalogues </a>

              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('boutique.index')}}">Les professionelles</a>

              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">Deals du jour</a>

              </li>

            </ul>
            <form class="mt-3 mt-lg-0 ms-lg-3 d-flex align-items-center">
              <span class="position-absolute ps-3 search-icon">
                <i class="fe fe-search"></i>
              </span>
              <label for="search" class="visually-hidden"></label>
              <input type="search" id="search" class="form-control ps-6" placeholder="Rechercher un produit" />
            </form>
          </div>
        </div>
      </nav>

      @yield('content')

    </main>
    <!-- Footer -->
    <!-- Footer -->
    <footer class="pt-lg-8 pt-5 footer bg-white">
        <div class="container mt-lg-2">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- about company -->
                    <div class="mb-4">
                        <img src="#" alt="VTP MARKET" class="">
                        <div class="mt-4">
                            <p> VTP-MARKET est une plateforme d'achat et de vente de produits inernationaux, nous collectons des vendeurs de plusieurs pays d'Afrique et d'Europe afin de satisfaire le besoin de nos clients.</p>
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
                        <!-- list -->
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
                        <!-- list -->
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
                    <!-- contact info -->
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
                <!-- Desc -->
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
    

    <!--Script du site -->
    <script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/libs/simplebar/dist/simplebar.min.js')}}"></script>
    <script src="{{asset('assets/js/theme.min.js')}}"></script>
  </body>
</html>
