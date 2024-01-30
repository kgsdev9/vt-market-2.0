@extends('layouts.layout')
@section('title', 'Inscription')
@section('content')
<div class="row align-items-center justify-content-center g-0 h-lg-100 py-8">
    <div class="offset-xxl-1 col-xxl-5 col-lg-6 col-md-12">
        <div class="card smooth-shadow-md" style="z-index: 1">
            <div class="card-body p-xl-6">
                <div class="mb-4">
                    <h1 class="mb-4 lh-1 fw-bold h2 text-center">Inscription </h1>
                    <div class="mt-3 mb-5 row g-2">
                        <div class="btn-group mb-2 mb-md-0 col-md-12" role="group" aria-label="socialButton">
                            <a  href="{{ url('/login/google') }}" class="btn btn-light shadow-sm">
                                <span class="me-1 align-text-bottom">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-google text-danger" viewBox="0 0 16 16">
                                        <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z">
                                    </path></svg>
                                </span>
                                <span>Google (Google valide nos  informations donc cette possibilité n'est pas disponible pour le moment)</span>
                            </a>
                        </div>

                       <span class="text-center">Cliquer ici pour vous inscrire en tant que vendeur <a href="{{route('vendors.registration')}}">Devenir vendeur</a></span>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="border-bottom"></div>
                    <div class="text-center mt-n2 lh-1">
                        <span class="bg-white px-2 fs-6 rounded">ou</span>
                    </div>
                </div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label visually-hidden">Nom d'utilisateur </label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Entrer votre nom d'utilisateur" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label visually-hidden"></label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Entrer votre adresse email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label visually-hidden">Mot de passe</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Entrer votre mot de passe ">

                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label visually-hidden">Confirmer le mot  de passe</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="confirmer le mot de passe">

                    </div>
                    <!-- Button -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Inscription</button>
                    </div>
                </form>
            </div>
            <!-- Card Footer -->
            <div class="card-footer px-6 py-4 text-center">
                <p class="mb-0">
                   Vous n'avez pas de compte alors
                    <a href="{{route('login')}}" class="text-inherit fw-semibold">Connexion </a>
                </p>
            </div>
        </div>

    </div>
</div>
@endsection
