@extends('layouts.layout')

@section('content')
<!-- Page Content -->
<section class="bg-white shadow-sm py-8 bg-cover">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row align-items-center">
			<div class="col-lg-6 col-12">
				<div>
					<div class="text-center text-md-start">
						<!-- heading -->
						<h1 class="display-2 fw-bold mb-3">Commercialiser vos produits avec le monde </h1>
						<!-- lead -->
						<p class="lead">
							Echanger c'est créer un lien reciproque, Alors n'attendez plus pour construire une relation solide ...
						</p>
					</div>
					<div class="mt-8">
						<!-- card -->
						<div class="bg-white rounded-md-pill">
							<!-- card body -->
							<div class="p-md-2 p-4">
								<div class="row">
									<!-- col -->
									<div class="col-md-6">
										<div class="d-grid mb-2 mb-md-0">
											<!-- btn -->
											<a href="{{route('vendors.registration')}}" class="btn btn-danger"><i class="fe fe-heart me-2"></i>Commencer à vendre</a>
										</div>
									</div>
									<div class="col-md-6">
										<div class="d-grid">
											<a href="{{route('boutique.index')}}" class="btn btn-outline-secondary"><i class="fe fe-shopping-cart me-2"></i>Consulter les boutiques</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="offset-lg-1 col-lg-5 col-12 text-center">
				<div class="position-relative d-none d-lg-block">
					<img src="{{asset('panier.png')}}" class="img-fluid" alt="img" >
				</div>
			</div>
		</div>
	</div>
</section>
<section class="bg-white py-4 shadow-sm">
	<div class="container">
		<div class="row align-items-center g-0">
			<!-- Features -->
			<div class="col-xl-4 col-lg-4 col-md-6 mb-lg-0 mb-4">
				<div class="d-flex align-items-center">
					<span class="icon-shape icon-lg  rounded-circle text-center text-dark-warning fs-4"><i class="fe fe-video"></i></span>
					<div class="ms-3">
						<h4 class="mb-0 fw-semibold">Discuter avec les vendeurs</h4>
						<p class="mb-0">
							Discuter avec les vendeurs
						</p>
					</div>
				</div>
			</div>
			<!-- Features -->
			<div class="col-xl-4 col-lg-4 col-md-6 mb-lg-0 mb-4">
				<div class="d-flex align-items-center">
					<span class="icon-shape icon-lg  rounded-circle text-center text-dark-warning fs-4"><i class="fe fe-shopping-bag"></i></span>
					<div class="ms-3">
						<h4 class="mb-0 fw-semibold">Historique de livraison</h4>
						<p class="mb-0">
							Suivez l'evolution de votre commande
						</p>
					</div>
				</div>
			</div>
			<!-- Features -->
			<div class="col-xl-4 col-lg-4 col-md-12">
				<div class="d-flex align-items-center">
					<span class="icon-shape icon-lg rounded-circle text-center text-dark-warning fs-4"><i class="fe fe-clock"></i></span>
					<div class="ms-3">
						<h4 class="mb-0 fw-semibold">Livraison Garantie</h4>
						<p class="mb-0">
							Nous livrons les colis partout en Afrique
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@livewire('card-product')
<section class="pb-lg-8 pb-6">
	<div class="container mb-lg-8">
		<div class="row">
			<div class="col-xl-6 offset-xl-3 col-md-12 col-12">
				<div class="text-center mb-lg-8 mb-6">
					<h2 class="h1 fw-bold">les opportuinités avec nous</h2>
					<p class="lead mb-0">
						La plus belle formule que nous avons trouver de vous proposer des produits de tout continent et sphere et un moyen de paiemnt souple.
					</p>
				</div>
			</div>
		</div>
		<div class="row align-items-center">
			<div class="col-xl-5 col-lg-6 col-md-12 col-12">
				<div class="mb-6 mb-lg-0">
					<div class="mb-2">
						<img src="{{asset('hs.jpg')}}" alt="certificate" class="img-fluid w-100">
					</div>
				</div>
			</div>
			<div class="col-xl-6 offset-xl-1 col-lg-6 col-md-12 col-12">
				<div class="row row-cols-2">
					<div class="col">
						<div class="mb-4 mb-xl-6">
							<div class="mb-4">
								<svg height="64px" width="64px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:#000000;} </style> <g> <path class="st0" d="M311.069,130.515c-0.963-5.641-5.851-9.768-11.578-9.768H35.43c-7.61,0-13.772,6.169-13.772,13.765 c0,7.61,6.162,13.772,13.772,13.772h64.263c7.61,0,13.772,6.17,13.772,13.773c0,7.603-6.162,13.772-13.772,13.772H13.772 C6.169,175.829,0,181.998,0,189.601c0,7.603,6.169,13.764,13.772,13.764h117.114c6.72,0,12.172,5.46,12.172,12.18 c0,6.72-5.452,12.172-12.172,12.172H68.665c-7.61,0-13.772,6.17-13.772,13.773c0,7.602,6.162,13.772,13.772,13.772h45.857 c6.726,0,12.179,5.452,12.179,12.172c0,6.719-5.453,12.172-12.179,12.172H51.215c-7.61,0-13.772,6.169-13.772,13.772 c0,7.603,6.162,13.772,13.772,13.772h87.014l5.488,31.042h31.52c-1.854,4.504-2.911,9.421-2.911,14.598 c0,21.245,17.218,38.464,38.464,38.464c21.237,0,38.456-17.219,38.456-38.464c0-5.177-1.057-10.094-2.911-14.598h100.04 L311.069,130.515z M227.342,352.789c0,9.146-7.407,16.553-16.553,16.553c-9.152,0-16.56-7.407-16.56-16.553 c0-6.364,3.627-11.824,8.892-14.598h15.329C223.714,340.965,227.342,346.424,227.342,352.789z"></path> <path class="st0" d="M511.598,314.072l-15.799-77.941l-57.689-88.759H333.074l32.534,190.819h38.42 c-1.846,4.504-2.904,9.421-2.904,14.598c0,21.245,17.219,38.464,38.456,38.464c21.246,0,38.464-17.219,38.464-38.464 c0-5.177-1.057-10.094-2.91-14.598h16.741c6.039,0,11.759-2.708,15.582-7.386C511.273,326.136,512.8,319.988,511.598,314.072z M392.529,182.882h26.314l34.162,52.547h-51.512L392.529,182.882z M456.14,352.789c0,9.146-7.407,16.553-16.56,16.553 c-9.138,0-16.552-7.407-16.552-16.553c0-6.364,3.635-11.824,8.892-14.598h15.329C452.513,340.965,456.14,346.424,456.14,352.789z"></path> </g> </g></svg>
							</div>
							<div>
								<h4>Livraison garantie et sécurisée </h4>
								<p>
									Nous vous livrons vos colis en Afrique avec nos partenaires de transports fiables.
								</p>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="mb-lg-6 mb-4">
							<div class="mb-4">
                                <svg fill="#000000" height="64px" width="64px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 511.999 511.999" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M493.714,66.178h-69.659H197.661h-69.661c-10.099,0-18.286,8.187-18.286,18.286v63.563h18.286h18.286h10.203h32.195 c12.566-12.003,21.598-27.666,25.337-45.277h193.674c7.188,33.842,33.891,60.545,67.734,67.734v89.183 c-33.843,7.186-60.547,33.891-67.734,67.734h-17.598v36.572h33.958h69.659c10.099,0,18.286-8.186,18.286-18.286v-69.66V154.121 V84.464C512,74.364,503.813,66.178,493.714,66.178z"></path> </g> </g> <g> <g> <path d="M335.24,184.597H146.285h-36.572H18.286C8.187,184.597,0,192.784,0,202.882v54.857h353.526v-54.857 C353.526,192.784,345.339,184.597,335.24,184.597z"></path> </g> </g> <g> <g> <path d="M0,294.311v133.224c0,10.099,8.187,18.286,18.286,18.286H335.24c10.099,0,18.286-8.186,18.286-18.286v-63.564V327.4 v-33.089H0z M152.383,367.454H91.429c-10.099,0-18.286-8.187-18.286-18.286c0-10.099,8.187-18.286,18.286-18.286h60.954 c10.099,0,18.286,8.187,18.286,18.286C170.668,359.267,162.481,367.454,152.383,367.454z"></path> </g> </g> </g></svg>
							</div>
							<div>
								<h4>Paiment Flexible</h4>
								<p>
									Nous avons pensé à vous avec des moyens des paiement locaux telsque mobile money.
								</p>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="mb-4 mb-md-0">
							<div class="mb-4">
								<svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M9.56443 8.73049L10.0789 10.5926C10.5639 12.3481 10.8064 13.2259 11.5194 13.6252C12.2323 14.0244 13.1374 13.7892 14.9474 13.3188L16.8673 12.8199C18.6774 12.3495 19.5824 12.1143 19.9941 11.4227C20.4057 10.7312 20.1632 9.85344 19.6782 8.09788L19.1638 6.2358C18.6788 4.48023 18.4363 3.60244 17.7233 3.20319C17.0103 2.80394 16.1052 3.03915 14.2952 3.50955L12.3753 4.00849C10.5652 4.47889 9.66021 4.71409 9.24856 5.40562C8.83692 6.09714 9.07943 6.97493 9.56443 8.73049Z" fill="#1C274C"></path> <path d="M2.27749 5.24694C2.38823 4.84781 2.80157 4.61402 3.2007 4.72476L4.9044 5.19744C5.82129 5.45183 6.5469 6.15866 6.80003 7.07489L8.95106 14.8609L9.10935 15.4075C9.74249 15.6438 10.2863 16.0866 10.6314 16.6747L10.9414 16.579L19.8115 14.2739C20.2124 14.1697 20.6219 14.4102 20.7261 14.8111C20.8303 15.212 20.5897 15.6214 20.1888 15.7256L11.3515 18.0223L11.0228 18.1238C11.0161 19.3947 10.1392 20.5555 8.81236 20.9003C7.22189 21.3136 5.58709 20.3982 5.16092 18.8556C4.73476 17.313 5.67861 15.7274 7.26908 15.3141C7.3479 15.2936 7.42682 15.2764 7.5057 15.2623L5.35419 7.47433C5.24592 7.08242 4.92897 6.76092 4.50338 6.64284L2.79968 6.17016C2.40054 6.05942 2.16675 5.64608 2.27749 5.24694Z" fill="#1C274C"></path> </g></svg>
							</div>
							<div>
								<h4>Suivie  de la livraison</h4>
								<p>
									Suivez en temps réel l'evolution de votre colis jusqu'à vos portes
								</p>
							</div>
						</div>
					</div>
					<div class="col">
						<div>
							<div class="mb-4">
								<svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 8L3.29289 8.70711L2.58579 8L3.29289 7.29289L4 8ZM9 20C8.44772 20 8 19.5523 8 19C8 18.4477 8.44772 18 9 18L9 20ZM8.29289 13.7071L3.29289 8.70711L4.70711 7.29289L9.70711 12.2929L8.29289 13.7071ZM3.29289 7.29289L8.29289 2.29289L9.70711 3.70711L4.70711 8.70711L3.29289 7.29289ZM4 7L14.5 7L14.5 9L4 9L4 7ZM14.5 20L9 20L9 18L14.5 18L14.5 20ZM21 13.5C21 17.0898 18.0898 20 14.5 20L14.5 18C16.9853 18 19 15.9853 19 13.5L21 13.5ZM14.5 7C18.0899 7 21 9.91015 21 13.5L19 13.5C19 11.0147 16.9853 9 14.5 9L14.5 7Z" fill="#33363F"></path> </g></svg>
							</div>
							<div>
								<h4>Remboursement garantie</h4>
								<p>
									Remboursement garantie en cas de probleme de la totalité de vos commandes.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection
