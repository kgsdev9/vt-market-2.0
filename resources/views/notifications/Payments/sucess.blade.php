@extends('layouts.layout')
@section('title', 'Paiement efféctué avec success')
@section('content')
    <div class="container row-justify-content-center text-center">
        <div class="card mt-4">
            <div class="card-body">
                <div class="mb-4">
                    <h2 class="mb-0">Transaction efféctuée avec succès </h2>
                    <p>Paiement effectué avec succès. Vous recevrez bientôt un courriel de confirmation. </p>
                    <a class="btn btn-outline-secondary"  href="{{route('espace.orders')}}">Consulter vos commandes </a>
                </div>
                <svg width="64px" height="64px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <defs> <style>.cls-1{fill:none;stroke:#000000;stroke-linecap:round;stroke-linejoin:round;stroke-width:20px;}</style> </defs> <g data-name="Layer 2" id="Layer_2"> <g data-name="E408, Success, Media, media player, multimedia" id="E408_Success_Media_media_player_multimedia"> <circle class="cls-1" cx="256" cy="256" r="246"></circle> <polyline class="cls-1" points="115.54 268.77 200.67 353.9 396.46 158.1"></polyline> </g> </g> </g></svg>
            </div>
        </div>
    </div>
@endsection
