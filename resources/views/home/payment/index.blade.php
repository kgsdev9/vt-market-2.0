@extends('layouts.layout')

@section('content')
<div class="container mt-4">
	<div class="row">
		<div class="col-md-8">
			<div class="mb-5">
				<h3 class="mb-1">Information sur la commande </h3>
				<p class="mb-0">
					Choissisez une adresse de livraison du colis
				</p>
			</div>
			<!-- row -->
			<div class="row">
                @php
                    $nombre = 0;
                @endphp
                @foreach ($allAdresseUser as $adresse)
                 @php
                     $nombre += 1;
                 @endphp
                <div class="col-lg-6 col-12 mb-4">
					<!-- form -->
					<div class="border p-4 rounded-3">
						<div class="form-check mb-2">
							<input class="form-check-input" type="radio" name="" value="{{$adresse->id}}">
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

                @endforeach

			</div>
			<div>
				<!-- heading -->
				<h4 class="mb-4">Moyen de paiement </h4>


				<div class="card card-bordered shadow-none">
					<!-- card body -->

					<div class="card-body">
						<div class="d-md-flex">
							<div class="form-check">
								<!-- input -->
								<input class="form-check-input" type="radio" name="flexRadioDefault" id="DHLExpress">
								<label class="form-check-label ms-2 w-100" for="DHLExpress"></label>
							</div>
							<div class="d-flex justify-content-between align-items-center w-100">
								<!-- img -->
								<div class="d-flex align-items-start">
									<img src="{{asset('visa-master-card.png ')}}" alt="" style="height:40px;">
									<!-- text -->
									<div class="ms-2">
										<h5 class="mb-1">
											Paiement Par Card
										</h5>

									</div>
								</div>
								<!-- text -->

							</div>
						</div>
					</div>
                    <hr>
                    <div class="card-body">
						<div class="d-md-flex">
							<div class="form-check">
								<!-- input -->
								<input class="form-check-input" type="radio" name="flexRadioDefault" id="DHLExpress">
								<label class="form-check-label ms-2 w-100" for="DHLExpress"></label>
							</div>
							<div class="d-flex justify-content-between align-items-center w-100">
								<!-- img -->
								<div class="d-flex align-items-start">
									<img src="{{asset('paypal.png')}}" alt="" style="height:40px;">
									<!-- text -->
									<div class="ms-2">
										<h5 class="mb-1">
											Paiement Par Card
										</h5>

									</div>
								</div>
								<!-- text -->

							</div>

						</div>
					</div>
                    <hr>
                    <div class="card-body">
						<div class="d-md-flex">
							<div class="form-check">
								<!-- input -->
								<input class="form-check-input" type="radio" name="flexRadioDefault" id="DHLExpress">
								<label class="form-check-label ms-2 w-100" for="DHLExpress"></label>
							</div>
							<div class="d-flex justify-content-between align-items-center w-100">
								<!-- img -->
								<div class="d-flex align-items-start">
									<img src="{{asset('orange-money.png')}}" alt="" style="height:40px;">
									<!-- text -->
									<div class="ms-2">
										<h5 class="mb-1">
											Paiement Orange money Cote d'ivoire
										</h5>

									</div>
								</div>
								<!-- text -->

							</div>

						</div>
					</div>

                    <hr>
                    <div class="card-body">
						<div class="d-md-flex">
							<div class="form-check">
								<!-- input -->
								<input class="form-check-input" type="radio" name="flexRadioDefault" id="DHLExpress">
								<label class="form-check-label ms-2 w-100" for="DHLExpress"></label>
							</div>
							<div class="d-flex justify-content-between align-items-center w-100">
								<!-- img -->
								<div class="d-flex align-items-start">
									<img src="{{asset('mtn.jpg')}}" alt="" style="height:40px;">
									<!-- text -->
									<div class="ms-2">
										<h5 class="mb-1">
											Paiement  par Mtn Money Cote d'ivoire
										</h5>

									</div>
								</div>
								<!-- text -->

							</div>

						</div>
					</div>
                    <hr>
                    <div class="card-body">
						<div class="d-md-flex">
							<div class="form-check">
								<!-- input -->
								<input class="form-check-input" type="radio" name="flexRadioDefault" id="DHLExpress">
								<label class="form-check-label ms-2 w-100" for="DHLExpress"></label>
							</div>
							<div class="d-flex justify-content-between align-items-center w-100">
								<!-- img -->
								<div class="d-flex align-items-start">
									<img src="{{asset('moov-money.png')}}" alt="" style="height:40px;">
									<!-- text -->
									<div class="ms-2">
										<h5 class="mb-1">
											Paiement  par Mtn Money Cote d'ivoire
										</h5>

									</div>
								</div>
								<!-- text -->

							</div>

						</div>
					</div>
				</div>
			</div>
			<!-- Button -->
			<div class="d-md-flex justify-content-between mt-4">
				<button class="btn btn-outline-primary mb-2 mb-md-0" >Retourner</button>
				<!-- Button -->
				<button class="btn btn-primary" >Confirmer le paiement <i class="fe fe-credit-card ms-2"></i></button>
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
							<img src="{{asset('product-1 (1).jpg')}}" alt="" class="img-4by3-xl rounded">
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
							<span class="text-dark fw-semibold">{{$total}}</span>
						</li>
						<li class="d-flex justify-content-between list-group-item px-0">
							<span>Prix de livraison</span>
							<span class="text-dark fw-semibold">50 €</span>
						</li>


						<li class="d-flex justify-content-between list-group-item px-0 pb-0">
							<span class="fs-4 fw-semibold text-dark">Total</span>
							<span class="fw-semibold text-dark">{{$total + 50}}</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
