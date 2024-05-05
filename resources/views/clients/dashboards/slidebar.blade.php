<nav class="navbar navbar-expand-md shadow-sm mb-4 mb-lg-0 sidenav">
    <!-- Menu -->
    <a class="d-xl-none d-lg-none d-md-none text-inherit fw-bold" href="#">Menu</a>
    <!-- Button -->
    <button class="navbar-toggler d-md-none icon-shape icon-sm rounded bg-primary text-light" type="button" data-bs-toggle="collapse" data-bs-target="#sidenav" aria-controls="sidenav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fe fe-menu"></span>
    </button>
    <!-- Collpase navbar -->
    <div class="collapse navbar-collapse" id="sidenav">
        <div class="navbar-nav flex-column">
            <span class="navbar-header">Mon espace</span>
            <ul class="list-unstyled ms-n2 mb-4">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('espace.orders')}}">
                       <i class="fe fe-shopping-bag nav-icon"></i>
                        Mes commandes
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('adresse.client')}}">
                        <i class="fe fe-clipboard nav-icon"></i>
                          Adresse Paiement
                    </a>
                </li>


            </ul>
            <span class="navbar-header">Compte</span>
            <ul class="list-unstyled ms-n2 mb-0">


                <li class="nav-item">
                    <a class="nav-link" href="{{route('profile')}}">
                        <i class="fe fe-user nav-icon"></i>
                        Mon profile
                    </a>
                </li>
                <!-- Nav item -->
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <i class="fe fe-power nav-icon"></i>
                        Déconnexion
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>

            </ul>
        </div>
    </div>
</nav>
