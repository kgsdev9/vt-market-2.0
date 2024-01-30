@extends('layouts.layout')
@section('title', 'Connexion')
@section('content')
<div class="row align-items-center justify-content-center g-0 h-lg-100 py-8">
    <div class="offset-xxl-1 col-xxl-5 col-lg-6 col-md-12">
        <!-- Card -->
        <div class="card smooth-shadow-md" style="z-index: 1">
            <!-- Card body -->
            <div class="card-body p-xl-6">
                <div class="mb-4">
                    <h1 class="mb-4 lh-1 fw-bold h2 text-center">Se Connecter</h1>

                    <div class="mt-3 mb-5 row g-2">
                        <!-- btn group -->
                        <div class="btn-group mb-2 mb-md-0 col-md-12" role="group" aria-label="socialButton">
                            <a  href="{{ url('/login/google') }}" class="btn btn-light shadow-sm">
                                <span class="me-1 align-text-bottom">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-google text-danger" viewBox="0 0 16 16">
                                        <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z">
                                    </path></svg>
                                </span>
                                <span>Google</span>

                            </a>


                        </div>
                        <span class="text-center">NB: Si vous etes vendeur votre seule moyen de connexion se trouve ci dessous
                        </span>
                        <span class="text-center">
                            <svg width="20px" height="20px" viewBox="0 -4.5 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>chevron-down</title> <desc>Created with Sketch Beta.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage"> <g id="Icon-Set-Filled" sketch:type="MSLayerGroup" transform="translate(-574.000000, -1201.000000)" fill="#000000"> <path d="M597.405,1201.63 C596.576,1200.8 595.23,1200.8 594.401,1201.63 L586.016,1210.88 L577.63,1201.63 C576.801,1200.8 575.455,1200.8 574.626,1201.63 C573.797,1202.46 573.797,1203.81 574.626,1204.64 L584.381,1215.4 C584.83,1215.85 585.429,1216.05 586.016,1216.01 C586.603,1216.05 587.201,1215.85 587.65,1215.4 L597.405,1204.64 C598.234,1203.81 598.234,1202.46 597.405,1201.63" id="chevron-down" sketch:type="MSShapeGroup"> </path> </g> </g> </g></svg>
                        </span>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="border-bottom"></div>
                    <div class="text-center mt-n2 lh-1">
                        <span class="bg-white px-2 fs-6 rounded">ou</span>
                    </div>
                </div>
                <!-- Form -->
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <!-- Username -->
                    <div class="mb-3">
                        <label for="email" class="form-label visually-hidden">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <!-- Password -->
                    <div class="mb-3">
                        <label for="password" class="form-label visually-hidden">Mot de passe</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    </div>

                    <div class="mb-4 d-flex align-items-center justify-content-between">
                        <div class="form-check">
                           <input class="form-check-input" type="checkbox" id="rememberMeCheckbox">
                           <label class="form-check-label" for="rememberMeCheckbox">Se souvenir de moi </label>
                        </div>

                        <div><a href="{{route('password.request')}}" class="text-primary">Mot de passe oublié</a></div>
                     </div>
                    <!-- Button -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Connnexion</button>
                    </div>
                </form>
            </div>
            <!-- Card Footer -->


            <div class="card-footer px-6 py-4 text-center">
                <p class="mb-0">
                   Vous n'avez pas de compte alors
                    <a href="{{route('register')}}" class="text-inherit fw-semibold">Inscrivez -vous </a>
                </p>
            </div>
        </div>

    </div>
</div>
@endsection
