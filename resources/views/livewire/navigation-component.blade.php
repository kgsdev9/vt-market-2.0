<nav class="navbar navbar-expand-lg">
    <div class="container-fluid px-0">
        <div class="d-flex">
            <a class="navbar-brand" href="{{URL('/')}}" wire:navigate><img src="{{asset('vtp-logo.png')}}" alt="VTP MARKET" style="height:40px;"></a>
        </div>
        <div class="order-lg-3">
            <div class="d-flex align-items-center">
                @guest
                <a href="{{route('login')}}" class="btn btn-outline-secondary ms-2" wire:navigate> <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 21C4 17.4735 6.60771 14.5561 10 14.0709M19.8726 15.2038C19.8044 15.2079 19.7357 15.21 19.6667 15.21C18.6422 15.21 17.7077 14.7524 17 14C16.2923 14.7524 15.3578 15.2099 14.3333 15.2099C14.2643 15.2099 14.1956 15.2078 14.1274 15.2037C14.0442 15.5853 14 15.9855 14 16.3979C14 18.6121 15.2748 20.4725 17 21C18.7252 20.4725 20 18.6121 20 16.3979C20 15.9855 19.9558 15.5853 19.8726 15.2038ZM15 7C15 9.20914 13.2091 11 11 11C8.79086 11 7 9.20914 7 7C7 4.79086 8.79086 3 11 3C13.2091 3 15 4.79086 15 7Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg> Se Connecter</a>
                    @else
                    <a href="{{route('dashboard')}}" class="btn btn-outline-secondary ms-2" wire:navigate> <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 21C4 17.4735 6.60771 14.5561 10 14.0709M19.8726 15.2038C19.8044 15.2079 19.7357 15.21 19.6667 15.21C18.6422 15.21 17.7077 14.7524 17 14C16.2923 14.7524 15.3578 15.2099 14.3333 15.2099C14.2643 15.2099 14.1956 15.2078 14.1274 15.2037C14.0442 15.5853 14 15.9855 14 16.3979C14 18.6121 15.2748 20.4725 17 21C18.7252 20.4725 20 18.6121 20 16.3979C20 15.9855 19.9558 15.5853 19.8726 15.2038ZM15 7C15 9.20914 13.2091 11 11 11C8.79086 11 7 9.20914 7 7C7 4.79086 8.79086 3 11 3C13.2091 3 15 4.79086 15 7Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg> Mon Espace</a>
                @endguest
                <a  href="{{route('cart')}}" class="btn btn-icon btn rounded-circle  d-md-inline-flex ms-2" wire:navigate>
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
                    <a class="nav-link" href="{{route('boutique.index')}}" wire:navigate> Les Professionelles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('catalogue.product')}}" wire:navigate> Catalogue produit </a>

                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('suivi.delivry')}}" wire:navigate>  Suivre une commande </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/comment-ca-marche" wire:navigate>  Comment ca marche</a>
                </li>
              @livewire('search-component')
              &nbsp;&nbsp;

            </ul>
        </div>
    </div>
</nav>
