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
                        <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <rect x="5" y="4" width="14" height="17" rx="2" stroke="#33363F" stroke-width="2"></rect> <path d="M9 9H15" stroke="#33363F" stroke-width="2" stroke-linecap="round"></path> <path d="M9 13H15" stroke="#33363F" stroke-width="2" stroke-linecap="round"></path> <path d="M9 17H13" stroke="#33363F" stroke-width="2" stroke-linecap="round"></path> </g></svg>
                        Mes commandes
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('adresse.client')}}">
                        <svg width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="layer1"> <path d="M 5 3 L 5 4 L 0 4 L 0 18 L 20 18 L 20 4 L 15 4 L 15 3 L 14 3 L 14 4 L 6 4 L 6 3 L 5 3 z M 1 5 L 5 5 L 5 6 L 6 6 L 6 5 L 14 5 L 14 6 L 15 6 L 15 5 L 19 5 L 19 17 L 1 17 L 1 5 z M 2 8 L 2 15 L 8 15 L 8 8 L 2 8 z M 3 9 L 7 9 L 7 14 L 3 14 L 3 9 z M 10 9 L 10 10 L 17 10 L 17 9 L 10 9 z M 10 11 L 10 12 L 17 12 L 17 11 L 10 11 z M 10 13 L 10 14 L 17 14 L 17 13 L 10 13 z " style="fill:#222222; fill-opacity:1; stroke:none; stroke-width:0px;"></path> </g> </g></svg>
                          Adresse Paiement
                    </a>
                </li>


            </ul>
            <span class="navbar-header">Compte</span>
            <ul class="list-unstyled ms-n2 mb-0">


                <li class="nav-item">
                    <a class="nav-link" href="#">
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
