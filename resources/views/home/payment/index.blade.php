@extends('layouts.layout')
@section('title', 'Proceder au peiement ')
@section('content')
    <div class="container mt-4">
        <form action="{{route('initialise.payment')}}" method="POST">
            @csrf
            <div class="row">
            <div class="col-md-8">
                <div class="row">
                    @php
                        $nombre = 0;
                    @endphp
                    @forelse ($allAdresseUser as $adresse )
                     @php
                         $nombre += 1;
                     @endphp
                    <div class="col-lg-6 col-12 mb-4">
                        <!-- form -->
                        @error('adresseSelected')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <div class="border p-4 rounded-3">
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="adresse_id" value="{{$adresse->id}}">
                                <label class="form-check-label text-dark fw-semibold" for="homeRadio">Adresse {{$nombre}}</label>
                            </div>
                            <!-- address -->
                            <p class="mb-0">
                                {{$adresse->fullname}}
                                <br>
                                {{$adresse->adresse}}
                                <br>
                                {{$adresse->city->nom}}
                                <br>
                                {{$adresse->country->nom}}
                                <br>
                                {{$adresse->contact}}
                            </p>
                        </div>
                    </div>
                    @empty
                    <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Enregistrer une adresse de paiement
                       </button>
                    @endforelse
                </div>
                    @csrf
                <div class="row">

                    <div class="col-xl-2 col-lg-6 col-12">
                        <div class="card-body">
                            <div class="d-md-flex">
                                <div >
                                    <input class="form-check-input" type="radio" name="paypalMethod" value="card">
                                    <label class="form-check-label ms-2 w-100" ></label>
                                </div>
                                <div class="d-flex justify-content-between align-items-center w-100">
                                    <div class="d-flex align-items-start">
                                        <img src="{{asset('master_card.png')}}" alt="" style="height:40px;">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-6 col-12">
                        <div class="card-body">
                            <div class="d-md-flex">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="paymentMethod" value="PAYPAL">
                                    <label class="form-check-label ms-2 w-100" for="nextDelivery"></label>
                                </div>
                                <div class="d-flex justify-content-between align-items-center w-100">
                                    <div class="d-flex align-items-start">
                                        <img src="{{asset('paypal.png')}}" alt="" style="height:40px;">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-6 col-12">
                        <div class="card-body">
                            <div class="d-md-flex">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="paymentMethod" value="ORANGE CI">
                                    <label class="form-check-label ms-2 w-100" for="nextDelivery"></label>
                                </div>
                                <div class="d-flex justify-content-between align-items-center w-100">
                                    <div class="d-flex align-items-start">
                                        <img src="{{asset('orange-money.png')}}" alt="" style="height:40px;">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-2 col-lg-6 col-12">
                        <div class="card-body">
                            <div class="d-md-flex">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="paymentMethod" value="MOOV CI">
                                    <label class="form-check-label ms-2 w-100" for="nextDelivery"></label>
                                </div>
                                <div class="d-flex justify-content-between align-items-center w-100">
                                    <div class="d-flex align-items-start">
                                        <img src="{{asset('moov-money.png')}}" alt="" style="height:40px;">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-6 col-12">
                        <div class="card-body">
                            <div class="d-md-flex">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="paymentMethod" value="MTN CI">
                                    <label class="form-check-label ms-2 w-100" for="nextDelivery"></label>
                                </div>
                                <div class="d-flex justify-content-between align-items-center w-100">
                                    <div class="d-flex align-items-start">
                                        <img src="{{asset('mtn.jpg')}}" alt="" style="height:40px;">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-4">

                <div class="card mt-4 mt-lg-0">
                    <div class="card-body">
                        <div class="mb-4 d-flex justify-content-between align-items-center">
                            <h4 class="mb-1">Sommaire de la commande </h4>

                        </div>
                        @php
                            $total = 0;
                        @endphp
                        @foreach( (array)session('cart') as $id => $details)
                        @php
                            $total +=  $details['prix'] * $details['quantity']
                        @endphp
                        <div class="d-md-flex my-3">
                            <div>
                                <img src="{{asset('s3/product/'.$details['image'])}}" alt="" class="img-4by3-xl rounded">
                            </div>
                            <div class="ms-md-4 mt-2">
                                <h4 class="mb-1 text-primary-hover">{{ $details['title']}}</h4>
                                <h5>
                                    {{ $details['prix']}} €
                                </h5>
                                <span>Qty:    {{ $details['quantity']}}</span>
                                <h5>
                                    {{ $details['prix'] * $details['quantity']}}€
                                </h5>
                            </div>
                        </div>
                         @endforeach

                    </div>
                    <div class="card-body border-top pt-2">
                        <ul class="list-group list-group-flush mb-0">
                            <li class="d-flex justify-content-between list-group-item px-0">
                                <span>Sous-total </span>
                                <span class="text-dark fw-semibold">{{$total}} € </span>
                            </li>
                            <li class="d-flex justify-content-between list-group-item px-0">
                                <span>Prix de livraison</span>
                                <span class="text-dark fw-semibold">50 €</span>
                            </li>


                            <li class="d-flex justify-content-between list-group-item px-0 pb-0">
                                <span class="fs-4 fw-semibold text-dark">Total</span>
                                <input type="hidden" value="{{$total + 50}}" name="amount">
                                <span class="fw-semibold text-dark">{{$total + 50}} € </span>
                            </li>

                            <li class="d-flex justify-content-between list-group-item px-0 pb-0">
                           <button type="submit" class="btn btn-outline-dark">Proceder au paiement</button>
                            </li>



                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
     </form>
     @include('forms.modals.paymentadresse')
@endsection
