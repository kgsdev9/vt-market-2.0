@extends('layouts.layout')
@section('title', 'Echec de Paiement ')
@section('content')

    <div class="container row-justify-content-center text-center">
        <div class="card mt-4">
            <!-- card body -->
            <div class="card-body">
                <div class="mb-4">
                    <!-- heading -->
                    <h2 class="mb-0">Echec du paiment </h2>
                    <p>Parfois, des problèmes de connexion Internet peuvent entraîner des échecs de transactions en ligne. Assurez-vous d'avoir une connexion stable. </p>
                            <a class="btn btn-outline-secondary"  href="{{route('cart')}}">Recommencer</a>
                </div>
                <svg width="64px" height="64px" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M6 12A6 6 0 106 0a6 6 0 000 12zM3 5a1 1 0 000 2h6a1 1 0 100-2H3z" fill="#000000"></path> </g></svg>
            </div>
        </div>

    </div>


@endsection
