@extends('layouts.layout')
@section('content')

<div class="row">
	<div class="col-12 col-lg d-flex align-items-start mb-4">
		<div class="rounded-circle user-profile-image overflow-hidden d-inline-block border border-grey-light" style="width: 120px; height: 120px;">
			<img src="https://media.bazarafrique.com/upload/profile/65b0d9ce7ca1f257064911.jpeg" data-sizes="auto" data-src="https://media.bazarafrique.com/upload/profile/65b0d9ce7ca1f257064911.jpeg" alt="Koma" title="Koma" class="bg-gray-light lazyautosizes ls-is-cached lazyloaded" sizes="118px" style="background-position: center center; background-repeat: no-repeat;">
		</div>
		<div class="ps-3 flex-grow-1">
			<h2 class="mb-0">Koma</h2>
			<div class="text-muted mt-2">
				<i class="ba-icon-map-location"></i>
				 Côte d’Ivoire
			</div>
			<div class="opacity-70 text-muted mt-2">
				Membre depuis 6 jours
			</div>
			<div class="mt-4 w-75">
				<ul class="list-unstyled row text-nowrap g-2">
					<li class="col">
						<span><span class="fw-bold">0</span> vendu</span>
					</li>
					<li class="col">
						<span><span class="fw-bold">1</span> annonce</span>
					</li>
					<li class="col">
						<span><span class="fw-bold">0</span> abonné</span>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-12 col-lg d-flex align-items-start justify-content-lg-end justify-content-center mb-4">
		<ul class="list-unstyled d-flex gap-1 mb-0">
			<li><button type="button" class="btn btn-sm shadow-none btn-primary">Suivre</button></li>
		</ul>
	</div>
</div>


<section class="bg-white border-bottom border-gray mb-5">
	<div class="container mb-4 home-top-categories-container">
		<div class="swiper slider-categories swiper-initialized swiper-horizontal swiper-pointer-events">
			<div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
				<div class="swiper-slide slide-item swiper-slide-active" style="width: 133.333px;">
					<a href="/electronique" class="d-block text-center">
						<div class="icon-box text-center d-flex flex-column justify-content-center align-items-center">
							<div class="icon-box-media bg-grey-light text-primary rounded-circle mb-3 d-flex justify-content-center align-items-center">
								<i class="fs-4 ba-icon-cat-electronic"></i>
							</div>
							<span class="icon-box-title fs-sm">Électronique</span>
						</div>
					</a>
				</div>
				<div class="swiper-slide slide-item swiper-slide-next" style="width: 133.333px;">
					<a href="/vehicules" class="d-block text-center">
						<div class="icon-box text-center d-flex flex-column justify-content-center align-items-center">
							<div class="icon-box-media bg-grey-light text-primary rounded-circle mb-3 d-flex justify-content-center align-items-center">
								<i class="fs-4 ba-icon-cat-cars"></i>
							</div>
							<span class="icon-box-title fs-sm">Véhicules</span>
						</div>
					</a>
				</div>
				<div class="swiper-slide slide-item" style="width: 133.333px;">
					<a href="/emploi" class="d-block text-center">
						<div class="icon-box text-center d-flex flex-column justify-content-center align-items-center">
							<div class="icon-box-media bg-grey-light text-primary rounded-circle mb-3 d-flex justify-content-center align-items-center">
								<i class="fs-4 ba-icon-cat-job"></i>
							</div>
							<span class="icon-box-title fs-sm">Emploi</span>
						</div>
					</a>
				</div>
				<div class="swiper-slide slide-item" style="width: 133.333px;">
					<a href="/electromenager" class="d-block text-center">
						<div class="icon-box text-center d-flex flex-column justify-content-center align-items-center">
							<div class="icon-box-media bg-grey-light text-primary rounded-circle mb-3 d-flex justify-content-center align-items-center">
								<i class="fs-4 ba-icon-cat-appliances"></i>
							</div>
							<span class="icon-box-title fs-sm">Electroménager</span>
						</div>
					</a>
				</div>
				<div class="swiper-slide slide-item" style="width: 133.333px;">
					<a href="/immobilier" class="d-block text-center">
						<div class="icon-box text-center d-flex flex-column justify-content-center align-items-center">
							<div class="icon-box-media bg-grey-light text-primary rounded-circle mb-3 d-flex justify-content-center align-items-center">
								<i class="fs-4 ba-icon-cat-real-estate"></i>
							</div>
							<span class="icon-box-title fs-sm">Immobilier</span>
						</div>
					</a>
				</div>
				<div class="swiper-slide slide-item" style="width: 133.333px;">
					<a href="/services" class="d-block text-center">
						<div class="icon-box text-center d-flex flex-column justify-content-center align-items-center">
							<div class="icon-box-media bg-grey-light text-primary rounded-circle mb-3 d-flex justify-content-center align-items-center">
								<i class="fs-4 ba-icon-cat-services"></i>
							</div>
							<span class="icon-box-title fs-sm">Services</span>
						</div>
					</a>
				</div>
				<div class="swiper-slide slide-item" style="width: 133.333px;">
					<a href="/mode" class="d-block text-center">
						<div class="icon-box text-center d-flex flex-column justify-content-center align-items-center">
							<div class="icon-box-media bg-grey-light text-primary rounded-circle mb-3 d-flex justify-content-center align-items-center">
								<i class="fs-4 ba-icon-cat-mode"></i>
							</div>
							<span class="icon-box-title fs-sm">Mode</span>
						</div>
					</a>
				</div>
				<div class="swiper-slide slide-item" style="width: 133.333px;">
					<a href="/pour-l-enfant" class="d-block text-center">
						<div class="icon-box text-center d-flex flex-column justify-content-center align-items-center">
							<div class="icon-box-media bg-grey-light text-primary rounded-circle mb-3 d-flex justify-content-center align-items-center">
								<i class="fs-4 ba-icon-cat-child"></i>
							</div>
							<span class="icon-box-title fs-sm">Pour l’enfant</span>
						</div>
					</a>
				</div>
				<div class="swiper-slide slide-item" style="width: 133.333px;">
					<a href="/pour-la-maison" class="d-block text-center">
						<div class="icon-box text-center d-flex flex-column justify-content-center align-items-center">
							<div class="icon-box-media bg-grey-light text-primary rounded-circle mb-3 d-flex justify-content-center align-items-center">
								<i class="fs-4 ba-icon-cat-home"></i>
							</div>
							<span class="icon-box-title fs-sm">Pour la maison</span>
						</div>
					</a>
				</div>
				<div class="swiper-slide slide-item" style="width: 133.333px;">
					<a href="/materiel-pro" class="d-block text-center">
						<div class="icon-box text-center d-flex flex-column justify-content-center align-items-center">
							<div class="icon-box-media bg-grey-light text-primary rounded-circle mb-3 d-flex justify-content-center align-items-center">
								<i class="fs-4 ba-icon-cat-pro-equipment"></i>
							</div>
							<span class="icon-box-title fs-sm">Matériel Pro</span>
						</div>
					</a>
				</div>
				<div class="swiper-slide slide-item" style="width: 133.333px;">
					<a href="/loisirs" class="d-block text-center">
						<div class="icon-box text-center d-flex flex-column justify-content-center align-items-center">
							<div class="icon-box-media bg-grey-light text-primary rounded-circle mb-3 d-flex justify-content-center align-items-center">
								<i class="fs-4 ba-icon-cat-hobbies"></i>
							</div>
							<span class="icon-box-title fs-sm">Loisirs</span>
						</div>
					</a>
				</div>
				<div class="swiper-slide slide-item" style="width: 133.333px;">
					<a href="/animaux" class="d-block text-center">
						<div class="icon-box text-center d-flex flex-column justify-content-center align-items-center">
							<div class="icon-box-media bg-grey-light text-primary rounded-circle mb-3 d-flex justify-content-center align-items-center">
								<i class="fs-4 ba-icon-cat-animals"></i>
							</div>
							<span class="icon-box-title fs-sm">Animaux</span>
						</div>
					</a>
				</div>
				<div class="swiper-slide slide-item" style="width: 133.333px;">
					<a href="/divers" class="d-block text-center">
						<div class="icon-box text-center d-flex flex-column justify-content-center align-items-center">
							<div class="icon-box-media bg-grey-light text-primary rounded-circle mb-3 d-flex justify-content-center align-items-center">
								<i class="fs-4 ba-icon-cat-various"></i>
							</div>
							<span class="icon-box-title fs-sm">Divers</span>
						</div>
					</a>
				</div>
			</div>
			<div class="swiper-pagination"></div>
			<div class="swiper-button swiper-button-prev swiper-button-disabled"></div>
			<div class="swiper-button swiper-button-next"></div>
		</div>
	</div>
</section>

<div class="page-wrapper" style="height: auto !important;">
	<header class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm" style="">
		<div class="container">
			<a href="/" aria-label="Page d'accueil BazarAfrique" class="navbar-brand me-1 me-sm-4 nuxt-link-active">
				<div class="position-relative">
					<div class="logo d-none d-md-block">
						<svg class="logo-svg" viewBox="0 0 453 91" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M79 39.5C79 61.3152 61.3152 79 39.5 79C17.6848 79 0 61.3152 0 39.5C0 17.6848 17.6848 0 39.5 0C61.3152 0 79 17.6848 79 39.5Z" fill="#F89A00"></path>
							<path d="M39 91L25.1436 73H52.8564L39 91Z" fill="#F89A00"></path>
							<path d="M24.4242 21.9211C24.4665 20.8481 25.3487 20 26.4226 20H52.0519C53.136 20 54.0227 20.8637 54.0512 21.9474L54.946 55.9474C54.9756 57.0722 54.0719 58 52.9467 58H25.0805C23.945 58 23.0373 57.0557 23.0821 55.9211L24.4242 21.9211Z" fill="white"></path>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M38.6875 33.125C40.8884 33.125 43.4906 31.572 45.6425 27.9855C45.9267 27.5119 46.5409 27.3583 47.0145 27.6425C47.4881 27.9266 47.6416 28.5409 47.3575 29.0145C45.0094 32.928 41.8616 35.125 38.6875 35.125C35.4567 35.125 32.6664 32.8586 31.0715 28.8714C30.8664 28.3586 31.1158 27.7766 31.6286 27.5715C32.1414 27.3664 32.7234 27.6158 32.9285 28.1286C34.3336 31.6414 36.5433 33.125 38.6875 33.125Z" fill="#F89A00"></path>
							<path d="M100.96 62.36C100.28 62.36 99.48 62.32 98.56 62.24C97.68 62.2 96.76 62.12 95.8 62C94.88 61.92 94 61.82 93.16 61.7C92.32 61.54 91.6 61.38 91 61.22V21.2C91.72 21 92.52 20.84 93.4 20.72C94.28 20.56 95.18 20.44 96.1 20.36C97.06 20.24 97.98 20.16 98.86 20.12C99.78 20.08 100.62 20.06 101.38 20.06C103.62 20.06 105.74 20.24 107.74 20.6C109.78 20.96 111.56 21.56 113.08 22.4C114.6 23.24 115.8 24.36 116.68 25.76C117.6 27.12 118.06 28.82 118.06 30.86C118.06 33.1 117.48 35.02 116.32 36.62C115.2 38.18 113.68 39.26 111.76 39.86C112.96 40.14 114.06 40.54 115.06 41.06C116.06 41.58 116.94 42.26 117.7 43.1C118.46 43.9 119.04 44.9 119.44 46.1C119.88 47.26 120.1 48.66 120.1 50.3C120.1 54.22 118.54 57.22 115.42 59.3C112.3 61.34 107.48 62.36 100.96 62.36ZM95.08 42.08V58.46C95.68 58.54 96.58 58.64 97.78 58.76C98.98 58.84 100.2 58.88 101.44 58.88C103.28 58.88 105.06 58.76 106.78 58.52C108.54 58.28 110.08 57.84 111.4 57.2C112.72 56.56 113.78 55.68 114.58 54.56C115.38 53.44 115.78 52 115.78 50.24C115.78 48.64 115.5 47.32 114.94 46.28C114.38 45.2 113.58 44.36 112.54 43.76C111.5 43.12 110.22 42.68 108.7 42.44C107.22 42.2 105.56 42.08 103.72 42.08H95.08ZM95.08 38.6H103C104.48 38.6 105.88 38.5 107.2 38.3C108.52 38.06 109.66 37.66 110.62 37.1C111.62 36.5 112.4 35.72 112.96 34.76C113.52 33.76 113.8 32.5 113.8 30.98C113.8 29.62 113.5 28.48 112.9 27.56C112.3 26.6 111.44 25.82 110.32 25.22C109.24 24.62 107.94 24.2 106.42 23.96C104.9 23.68 103.22 23.54 101.38 23.54C99.9 23.54 98.64 23.58 97.6 23.66C96.6 23.74 95.76 23.84 95.08 23.96V38.6Z" fill="black"></path>
							<path d="M138.333 59.18C139.853 59.18 141.173 59.14 142.293 59.06C143.453 58.94 144.433 58.8 145.233 58.64V47.72C144.793 47.52 144.093 47.32 143.133 47.12C142.173 46.88 140.853 46.76 139.173 46.76C138.213 46.76 137.213 46.84 136.173 47C135.133 47.12 134.173 47.42 133.293 47.9C132.413 48.34 131.693 48.96 131.133 49.76C130.573 50.56 130.293 51.62 130.293 52.94C130.293 54.1 130.473 55.08 130.833 55.88C131.233 56.68 131.773 57.32 132.453 57.8C133.173 58.28 134.013 58.64 134.973 58.88C135.973 59.08 137.093 59.18 138.333 59.18ZM137.973 30.26C140.013 30.26 141.733 30.56 143.133 31.16C144.573 31.72 145.733 32.52 146.613 33.56C147.493 34.56 148.133 35.76 148.533 37.16C148.933 38.56 149.133 40.08 149.133 41.72V61.28C148.733 61.4 148.153 61.54 147.393 61.7C146.633 61.82 145.753 61.96 144.753 62.12C143.753 62.28 142.633 62.4 141.393 62.48C140.193 62.6 138.953 62.66 137.673 62.66C136.033 62.66 134.513 62.48 133.113 62.12C131.753 61.76 130.553 61.2 129.513 60.44C128.513 59.64 127.713 58.64 127.113 57.44C126.553 56.2 126.273 54.7 126.273 52.94C126.273 51.26 126.593 49.82 127.233 48.62C127.873 47.42 128.773 46.44 129.933 45.68C131.093 44.88 132.473 44.3 134.073 43.94C135.673 43.58 137.413 43.4 139.293 43.4C139.853 43.4 140.433 43.44 141.033 43.52C141.673 43.56 142.273 43.64 142.833 43.76C143.433 43.84 143.933 43.94 144.333 44.06C144.773 44.14 145.073 44.22 145.233 44.3V42.38C145.233 41.3 145.153 40.26 144.993 39.26C144.833 38.22 144.473 37.3 143.913 36.5C143.393 35.66 142.633 35 141.633 34.52C140.673 34 139.393 33.74 137.793 33.74C135.513 33.74 133.813 33.9 132.693 34.22C131.573 34.54 130.753 34.8 130.233 35L129.693 31.58C130.373 31.26 131.413 30.96 132.813 30.68C134.253 30.4 135.973 30.26 137.973 30.26Z" fill="black"></path>
							<path d="M178.34 34.16C177.42 35.2 176.22 36.64 174.74 38.48C173.26 40.32 171.68 42.38 170 44.66C168.32 46.9 166.66 49.26 165.02 51.74C163.38 54.18 161.94 56.5 160.7 58.7H178.88V62H156.2V59.18C157.24 57.22 158.52 55.06 160.04 52.7C161.6 50.34 163.2 48.02 164.84 45.74C166.48 43.42 168.08 41.26 169.64 39.26C171.2 37.22 172.52 35.56 173.6 34.28H157.1V30.98H178.34V34.16Z" fill="black"></path>
							<path d="M196.165 59.18C197.685 59.18 199.005 59.14 200.125 59.06C201.285 58.94 202.265 58.8 203.065 58.64V47.72C202.625 47.52 201.925 47.32 200.965 47.12C200.005 46.88 198.685 46.76 197.005 46.76C196.045 46.76 195.045 46.84 194.005 47C192.965 47.12 192.005 47.42 191.125 47.9C190.245 48.34 189.525 48.96 188.965 49.76C188.405 50.56 188.125 51.62 188.125 52.94C188.125 54.1 188.305 55.08 188.665 55.88C189.065 56.68 189.605 57.32 190.285 57.8C191.005 58.28 191.845 58.64 192.805 58.88C193.805 59.08 194.925 59.18 196.165 59.18ZM195.805 30.26C197.845 30.26 199.565 30.56 200.965 31.16C202.405 31.72 203.565 32.52 204.445 33.56C205.325 34.56 205.965 35.76 206.365 37.16C206.765 38.56 206.965 40.08 206.965 41.72V61.28C206.565 61.4 205.985 61.54 205.225 61.7C204.465 61.82 203.585 61.96 202.585 62.12C201.585 62.28 200.465 62.4 199.225 62.48C198.025 62.6 196.785 62.66 195.505 62.66C193.865 62.66 192.345 62.48 190.945 62.12C189.585 61.76 188.385 61.2 187.345 60.44C186.345 59.64 185.545 58.64 184.945 57.44C184.385 56.2 184.105 54.7 184.105 52.94C184.105 51.26 184.425 49.82 185.065 48.62C185.705 47.42 186.605 46.44 187.765 45.68C188.925 44.88 190.305 44.3 191.905 43.94C193.505 43.58 195.245 43.4 197.125 43.4C197.685 43.4 198.265 43.44 198.865 43.52C199.505 43.56 200.105 43.64 200.665 43.76C201.265 43.84 201.765 43.94 202.165 44.06C202.605 44.14 202.905 44.22 203.065 44.3V42.38C203.065 41.3 202.985 40.26 202.825 39.26C202.665 38.22 202.305 37.3 201.745 36.5C201.225 35.66 200.465 35 199.465 34.52C198.505 34 197.225 33.74 195.625 33.74C193.345 33.74 191.645 33.9 190.525 34.22C189.405 34.54 188.585 34.8 188.065 35L187.525 31.58C188.205 31.26 189.245 30.96 190.645 30.68C192.085 30.4 193.805 30.26 195.805 30.26Z" fill="black"></path>
							<path d="M227.472 30.38C228.752 30.38 229.952 30.48 231.072 30.68C232.232 30.88 233.032 31.08 233.472 31.28L232.692 34.64C232.372 34.48 231.712 34.32 230.712 34.16C229.752 33.96 228.472 33.86 226.872 33.86C225.192 33.86 223.832 33.98 222.792 34.22C221.792 34.46 221.132 34.66 220.812 34.82V62H216.912V32.42C217.912 31.98 219.292 31.54 221.052 31.1C222.812 30.62 224.952 30.38 227.472 30.38Z" fill="black"></path>
							<path d="M266.834 62C266.394 60.56 265.894 59.08 265.334 57.56C264.814 56.04 264.294 54.52 263.774 53H247.574C247.054 54.52 246.514 56.04 245.954 57.56C245.434 59.08 244.954 60.56 244.514 62H234.794C236.354 57.52 237.834 53.38 239.234 49.58C240.634 45.78 241.994 42.2 243.314 38.84C244.674 35.48 245.994 32.3 247.274 29.3C248.594 26.26 249.954 23.3 251.354 20.42H260.294C261.654 23.3 262.994 26.26 264.314 29.3C265.634 32.3 266.954 35.48 268.274 38.84C269.634 42.2 271.014 45.78 272.414 49.58C273.814 53.38 275.294 57.52 276.854 62H266.834ZM255.614 29.84C255.414 30.44 255.114 31.26 254.714 32.3C254.314 33.34 253.854 34.54 253.334 35.9C252.814 37.26 252.234 38.76 251.594 40.4C250.994 42.04 250.374 43.76 249.734 45.56H261.554C260.914 43.76 260.294 42.04 259.694 40.4C259.094 38.76 258.514 37.26 257.954 35.9C257.434 34.54 256.974 33.34 256.574 32.3C256.174 31.26 255.854 30.44 255.614 29.84Z" fill="black"></path>
							<path d="M295.316 15.44C296.996 15.44 298.536 15.62 299.936 15.98C301.336 16.3 302.416 16.62 303.176 16.94L301.436 24.08C300.636 23.72 299.756 23.46 298.796 23.3C297.876 23.1 297.016 23 296.216 23C295.136 23 294.216 23.16 293.456 23.48C292.736 23.76 292.156 24.16 291.716 24.68C291.316 25.2 291.016 25.82 290.816 26.54C290.656 27.26 290.576 28.04 290.576 28.88V30.44H301.616V37.88H290.576V62H281.636V28.76C281.636 24.68 282.776 21.44 285.056 19.04C287.376 16.64 290.796 15.44 295.316 15.44Z" fill="black"></path>
							<path d="M325.968 38.36C325.168 38.16 324.228 37.96 323.148 37.76C322.068 37.52 320.908 37.4 319.668 37.4C319.108 37.4 318.428 37.46 317.628 37.58C316.868 37.66 316.288 37.76 315.888 37.88V62H306.948V32.12C308.548 31.56 310.428 31.04 312.588 30.56C314.788 30.04 317.228 29.78 319.908 29.78C320.388 29.78 320.968 29.82 321.648 29.9C322.328 29.94 323.008 30.02 323.688 30.14C324.368 30.22 325.048 30.34 325.728 30.5C326.408 30.62 326.988 30.78 327.468 30.98L325.968 38.36Z" fill="black"></path>
							<path d="M341.201 62H332.261V30.44H341.201V62ZM342.041 21.32C342.041 22.96 341.501 24.26 340.421 25.22C339.381 26.14 338.141 26.6 336.701 26.6C335.261 26.6 334.001 26.14 332.921 25.22C331.881 24.26 331.361 22.96 331.361 21.32C331.361 19.68 331.881 18.4 332.921 17.48C334.001 16.52 335.261 16.04 336.701 16.04C338.141 16.04 339.381 16.52 340.421 17.48C341.501 18.4 342.041 19.68 342.041 21.32Z" fill="black"></path>
							<path d="M357.225 46.46C357.225 52.18 359.345 55.04 363.585 55.04C364.505 55.04 365.405 54.92 366.285 54.68C367.205 54.44 367.945 54.14 368.505 53.78V37.64C368.065 37.56 367.505 37.5 366.825 37.46C366.145 37.38 365.405 37.34 364.605 37.34C362.165 37.34 360.325 38.18 359.085 39.86C357.845 41.5 357.225 43.7 357.225 46.46ZM348.105 46.22C348.105 43.78 348.465 41.56 349.185 39.56C349.945 37.52 351.025 35.78 352.425 34.34C353.825 32.86 355.545 31.72 357.585 30.92C359.625 30.12 361.945 29.72 364.545 29.72C365.625 29.72 366.745 29.78 367.905 29.9C369.105 29.98 370.265 30.1 371.385 30.26C372.545 30.42 373.645 30.62 374.685 30.86C375.725 31.06 376.645 31.28 377.445 31.52V73.1H368.505V61.22C367.505 61.66 366.465 62 365.385 62.24C364.305 62.48 363.145 62.6 361.905 62.6C357.425 62.6 354.005 61.14 351.645 58.22C349.285 55.26 348.105 51.26 348.105 46.22Z" fill="black"></path>
							<path d="M412.756 60.92C411.236 61.36 409.276 61.76 406.876 62.12C404.476 62.52 401.956 62.72 399.316 62.72C396.636 62.72 394.396 62.36 392.596 61.64C390.836 60.92 389.436 59.92 388.396 58.64C387.356 57.32 386.616 55.76 386.176 53.96C385.736 52.16 385.516 50.18 385.516 48.02V30.44H394.456V46.94C394.456 49.82 394.836 51.9 395.596 53.18C396.356 54.46 397.776 55.1 399.856 55.1C400.496 55.1 401.176 55.08 401.896 55.04C402.616 54.96 403.256 54.88 403.816 54.8V30.44H412.756V60.92Z" fill="black"></path>
							<path d="M419.648 46.46C419.648 43.66 420.068 41.22 420.908 39.14C421.788 37.02 422.928 35.26 424.328 33.86C425.728 32.46 427.328 31.4 429.128 30.68C430.968 29.96 432.848 29.6 434.768 29.6C439.248 29.6 442.788 30.98 445.388 33.74C447.988 36.46 449.288 40.48 449.288 45.8C449.288 46.32 449.268 46.9 449.228 47.54C449.188 48.14 449.148 48.68 449.108 49.16H428.828C429.028 51 429.888 52.46 431.408 53.54C432.928 54.62 434.968 55.16 437.528 55.16C439.168 55.16 440.768 55.02 442.328 54.74C443.928 54.42 445.228 54.04 446.228 53.6L447.428 60.86C446.948 61.1 446.308 61.34 445.508 61.58C444.708 61.82 443.808 62.02 442.808 62.18C441.848 62.38 440.808 62.54 439.688 62.66C438.568 62.78 437.448 62.84 436.328 62.84C433.488 62.84 431.008 62.42 428.888 61.58C426.808 60.74 425.068 59.6 423.668 58.16C422.308 56.68 421.288 54.94 420.608 52.94C419.968 50.94 419.648 48.78 419.648 46.46ZM440.648 43.04C440.608 42.28 440.468 41.54 440.228 40.82C440.028 40.1 439.688 39.46 439.208 38.9C438.768 38.34 438.188 37.88 437.468 37.52C436.788 37.16 435.928 36.98 434.888 36.98C433.888 36.98 433.028 37.16 432.308 37.52C431.588 37.84 430.988 38.28 430.508 38.84C430.028 39.4 429.648 40.06 429.368 40.82C429.128 41.54 428.948 42.28 428.828 43.04H440.648Z" fill="black"></path>
							<path d="M342.041 21.32C342.041 22.96 341.501 24.26 340.421 25.22C339.381 26.14 338.141 26.6 336.701 26.6C335.261 26.6 334.001 26.14 332.921 25.22C331.881 24.26 331.361 22.96 331.361 21.32C331.361 19.68 331.881 18.4 332.921 17.48C334.001 16.52 335.261 16.04 336.701 16.04C338.141 16.04 339.381 16.52 340.421 17.48C341.501 18.4 342.041 19.68 342.041 21.32Z" fill="#F89A00"></path>
							<path d="M342.041 21.32C342.041 22.96 341.501 24.26 340.421 25.22C339.381 26.14 338.141 26.6 336.701 26.6C335.261 26.6 334.001 26.14 332.921 25.22C331.881 24.26 331.361 22.96 331.361 21.32C331.361 19.68 331.881 18.4 332.921 17.48C334.001 16.52 335.261 16.04 336.701 16.04C338.141 16.04 339.381 16.52 340.421 17.48C341.501 18.4 342.041 19.68 342.041 21.32Z" fill="#F89A00"></path>
						</svg>
					</div>
					<div class="logo-mobile d-md-none">
						<svg class="logo-mobile-svg" viewBox="0 0 79 91" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M79 39.5C79 61.3152 61.3152 79 39.5 79C17.6848 79 0 61.3152 0 39.5C0 17.6848 17.6848 0 39.5 0C61.3152 0 79 17.6848 79 39.5Z" fill="#F89A00"></path>
							<path d="M39 91L25.1436 73H52.8564L39 91Z" fill="#F89A00"></path>
							<path d="M24.4242 21.9211C24.4665 20.8481 25.3487 20 26.4226 20H52.0519C53.136 20 54.0227 20.8637 54.0512 21.9474L54.946 55.9474C54.9756 57.0722 54.0719 58 52.9467 58H25.0805C23.945 58 23.0373 57.0557 23.0821 55.9211L24.4242 21.9211Z" fill="white"></path>
							<path d="M46.5 28.5C42 36 35 36 32 28.5" stroke="#F89A00" stroke-width="2" stroke-linecap="round"></path>
						</svg>
					</div>
					<!---->
				</div>
			</a>
			<a href="/search" class="btn btn-sm d-lg-none order-lg-3 ms-auto"><i class="ba-icon-search fs-6"></i></a>
			<button class="btn btn-primary btn-sm ms-4 d-lg-none order-lg-3">
				<i class="ba-icon-publish fs-6 me-2"></i>
				<span>Déposer<span class="d-none d-sm-inline"> une annonce</span></span>
			</button>
			<button type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler ms-4"><span class="navbar-toggler-icon"></span></button>
			<div id="navbarNav" class="order-lg-3 collapse navbar-collapse flex-grow-0">
				<ul class="navbar-nav align-items-lg-center">
					<li class="nav-item"><a href="/account/login" class="btn btn-sm nav-link text-start">Se connecter</a></li>
					<li class="nav-item d-none d-sm-inline">
						<button class="btn btn-primary btn-sm ms-lg-2">
							<i class="ba-icon-publish fs-6 me-2"></i>
							<span>Déposer<span class="d-none d-sm-inline"> une annonce</span></span>
						</button>
					</li>
					<li class="nav-item">
						<div class="dropdown dropdown-hovering">
							<a id="dropdownMenuLangSwitcherTrigger2" data-bs-toggle="dropdown" data-bs-auto-close="true" data-bs-display="dynamic" aria-expanded="false" aria-label="dropdown" href="#" role="button" class="nav-link pe-lg-0 dropdown-toggle">FR  </a>
							<ul aria-labelledby="dropdownMenuLangSwitcherTrigger2" class="dropdown-menu dropdown-menu-end dropdown-menu-sm-start">
								<li><button class="dropdown-item text-nowrap py-1">English</button></li>
								<li><button class="dropdown-item text-nowrap py-1">Français</button></li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
			<div class="navbar-collapse order-lg-2 d-none d-lg-block">
				<form action="/search" method="get" class="form-group d-block p-0 mt-3 mt-lg-0 position-relative header-search-form flex-grow-0_6">
					<div class="row g-0">
						<div class="col-md-12 d-sm-flex align-items-center">
							<div data-bs-toggle="select" class="dropdown dropdown-category-select-element">
								<button type="button" class="btn btn-sm btn-link dropdown-toggle w-100 text-start d-flex justify-content-between align-items-center">
									<i class="me-1 ba-icon-cat-various"></i>
									<span class="dropdown-toggle-label me-3 flex-grow-1 d-block text-truncate">Catégories</span>
								</button>
							</div>
							<hr class="d-sm-none">
							<div class="input-group input-group-sm border-end-after-sm">
								<input type="text" placeholder="Que recherchez-vous ?" class="form-control">
							</div>
							<!---->
							<button type="submit" aria-label="Rechercher" class="btn btn-grey-light btn-search m-0 w-100 w-sm-auto border-top-sm-0 border-top border-start-md btn-sm">
								<i class="ba-icon-search fs-5"></i>
								<span class="d-sm-none d-inline">Rechercher</span>
							</button>
						</div>
					</div>
					<div class="dropdown">
						<button id="dropdownMenuCategoriesTrigger3" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-display="dynamic" aria-expanded="false" class="btn btn-link d-none dropdown-toggle"></button>
						<div aria-labelledby="dropdownMenuCategoriesTrigger3" class="dropdown-menu dropdown-menu-categories w-100 pt-0 pb-0">
							<div class="row dropdown-menu-container">
								<div class="col-5 border-end pe-0">
									<ul class="list-group list-group-flush pt-2 h-100 list-group-borderless">
										<!---->
										<li class="list-group-item">
											<a href="#" class="btn btn-sm btn-category-selection-item w-100 text-start d-flex justify-content-between align-items-center">
												<i class="text-primary me-3 fs-5 ba-icon-cat-various"></i>
												<span class="flex-grow-1">Toutes les catégories</span>
											</a>
										</li>
										<li class="list-group-item">
											<a href="#" class="btn btn-sm btn-category-selection-item w-100 text-start d-flex justify-content-between align-items-center btn-toggle btn-toggle-end">
												<i class="text-primary me-3 fs-5 ba-icon-cat-electronic"></i>
												<span class="flex-grow-1">Électronique</span>
											</a>
										</li>
										<li class="list-group-item">
											<a href="#" class="btn btn-sm btn-category-selection-item w-100 text-start d-flex justify-content-between align-items-center btn-toggle btn-toggle-end">
												<i class="text-primary me-3 fs-5 ba-icon-cat-cars"></i>
												<span class="flex-grow-1">Véhicules</span>
											</a>
										</li>
										<li class="list-group-item">
											<a href="#" class="btn btn-sm btn-category-selection-item w-100 text-start d-flex justify-content-between align-items-center btn-toggle btn-toggle-end">
												<i class="text-primary me-3 fs-5 ba-icon-cat-job"></i>
												<span class="flex-grow-1">Emploi</span>
											</a>
										</li>
										<li class="list-group-item">
											<a href="#" class="btn btn-sm btn-category-selection-item w-100 text-start d-flex justify-content-between align-items-center btn-toggle btn-toggle-end">
												<i class="text-primary me-3 fs-5 ba-icon-cat-appliances"></i>
												<span class="flex-grow-1">Electroménager</span>
											</a>
										</li>
										<li class="list-group-item">
											<a href="#" class="btn btn-sm btn-category-selection-item w-100 text-start d-flex justify-content-between align-items-center btn-toggle btn-toggle-end">
												<i class="text-primary me-3 fs-5 ba-icon-cat-real-estate"></i>
												<span class="flex-grow-1">Immobilier</span>
											</a>
										</li>
										<li class="list-group-item">
											<a href="#" class="btn btn-sm btn-category-selection-item w-100 text-start d-flex justify-content-between align-items-center btn-toggle btn-toggle-end">
												<i class="text-primary me-3 fs-5 ba-icon-cat-services"></i>
												<span class="flex-grow-1">Services</span>
											</a>
										</li>
										<li class="list-group-item">
											<a href="#" class="btn btn-sm btn-category-selection-item w-100 text-start d-flex justify-content-between align-items-center btn-toggle btn-toggle-end">
												<i class="text-primary me-3 fs-5 ba-icon-cat-mode"></i>
												<span class="flex-grow-1">Mode</span>
											</a>
										</li>
										<li class="list-group-item">
											<a href="#" class="btn btn-sm btn-category-selection-item w-100 text-start d-flex justify-content-between align-items-center btn-toggle btn-toggle-end">
												<i class="text-primary me-3 fs-5 ba-icon-cat-child"></i>
												<span class="flex-grow-1">Pour l’enfant</span>
											</a>
										</li>
										<li class="list-group-item">
											<a href="#" class="btn btn-sm btn-category-selection-item w-100 text-start d-flex justify-content-between align-items-center btn-toggle btn-toggle-end">
												<i class="text-primary me-3 fs-5 ba-icon-cat-home"></i>
												<span class="flex-grow-1">Pour la maison</span>
											</a>
										</li>
										<li class="list-group-item">
											<a href="#" class="btn btn-sm btn-category-selection-item w-100 text-start d-flex justify-content-between align-items-center btn-toggle btn-toggle-end">
												<i class="text-primary me-3 fs-5 ba-icon-cat-pro-equipment"></i>
												<span class="flex-grow-1">Matériel Pro</span>
											</a>
										</li>
										<li class="list-group-item">
											<a href="#" class="btn btn-sm btn-category-selection-item w-100 text-start d-flex justify-content-between align-items-center btn-toggle btn-toggle-end">
												<i class="text-primary me-3 fs-5 ba-icon-cat-hobbies"></i>
												<span class="flex-grow-1">Loisirs</span>
											</a>
										</li>
										<li class="list-group-item">
											<a href="#" class="btn btn-sm btn-category-selection-item w-100 text-start d-flex justify-content-between align-items-center btn-toggle btn-toggle-end">
												<i class="text-primary me-3 fs-5 ba-icon-cat-animals"></i>
												<span class="flex-grow-1">Animaux</span>
											</a>
										</li>
										<li class="list-group-item">
											<a href="#" class="btn btn-sm btn-category-selection-item w-100 text-start d-flex justify-content-between align-items-center btn-toggle btn-toggle-end">
												<i class="text-primary me-3 fs-5 ba-icon-cat-various"></i>
												<span class="flex-grow-1">Divers</span>
											</a>
										</li>
									</ul>
								</div>
								<div class="col-7">
									<ul class="list-group list-group-flush pt-2 h-100 list-group-borderless">
										<!---->
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!---->
				</form>
			</div>
		</div>
		<!---->
	</header>
	<main role="main" class="pt-1 pt-sm-5 pt-md-5 pt-lg-0" style="height: auto !important;">
		<div class="container pt-6 pt-sm-6 my-5 my-md-6" style="height: auto !important;">
			<nav aria-label="breadcrumb" class="mb-3 d-none d-md-block">
				<ol class="breadcrumb">
					<li aria-current="false" class="breadcrumb-item"><a href="/">Accueil</a></li>
					<li aria-current="false" class="breadcrumb-item"><a href="/materiel-pro">Matériel Pro</a></li>
					<li aria-current="false" class="breadcrumb-item"><a href="/btp-chantier-gros-oeuvre-outillage">BTP - Chantier- Gros Oeuvre - Outillage</a></li>
					<li aria-current="page" class="breadcrumb-item text-truncate w-50">LOCATION ET VENTE DE NACELLES ELEVATRICES AUTOMOTRICES ET CHARIOTS TELESCOPIQUES</li>
				</ol>
			</nav>
			<div class="my-4 text-center mt-0 mb-4">
				<script async="async" src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2372499842645737" crossorigin="anonymous" data-checked-head="true"></script>
				<ins data-ad-client="ca-pub-2372499842645737" data-ad-slot="6946515058" class="adsbygoogle" style="display: inline-block; width: 1100px; height: 130px;" data-adsbygoogle-status="done" data-ad-status="filled">
					<div id="aswift_0_host" tabindex="0" title="Advertisement" aria-label="Advertisement" style="border: none; height: 130px; width: 1100px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: inline-block;">
						<iframe id="aswift_0" name="aswift_0" browsingtopics="true" style="left:0;position:absolute;top:0;border:0;width:1100px;height:130px;" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" width="1100" height="130" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allow="attribution-reporting" src="https://googleads.g.doubleclick.net/pagead/ads?gdpr=0&amp;client=ca-pub-2372499842645737&amp;output=html&amp;h=130&amp;slotname=6946515058&amp;adk=2883003958&amp;adf=3334088446&amp;pi=t.ma~as.6946515058&amp;w=1100&amp;lmt=1706399011&amp;format=1100x130&amp;url=https%3A%2F%2Fci.bazarafrique.com%2Fbtp-chantier-gros-oeuvre-outillage%2F1704458909-location-et-vente-de-nacelles-elevatrices-automotrices-et-chariots-telescopiques&amp;wgl=1&amp;uach=WyJXaW5kb3dzIiwiMTQuMC4wIiwieDg2IiwiIiwiMTIxLjAuNjE2Ny44NSIsbnVsbCwwLG51bGwsIjY0IixbWyJOb3QgQShCcmFuZCIsIjk5LjAuMC4wIl0sWyJHb29nbGUgQ2hyb21lIiwiMTIxLjAuNjE2Ny44NSJdLFsiQ2hyb21pdW0iLCIxMjEuMC42MTY3Ljg1Il1dLDBd&amp;dt=1706399011557&amp;bpp=3&amp;bdt=100487&amp;idt=3&amp;shv=r20240122&amp;mjsv=m202401230101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3D80a85617aba9898e%3AT%3D1706398915%3ART%3D1706398915%3AS%3DALNI_MZtcM1VMFr0TsHiY3F0Px4VJhjnPg&amp;gpic=UID%3D00000d02475dfea8%3AT%3D1706398915%3ART%3D1706398915%3AS%3DALNI_MZ6m6XLPo5ZdvacRFOKm3PeL4ldCg&amp;prev_fmts=1200x280%2C0x0%2C0x0%2C1200x280%2C294x600%2C294x600&amp;nras=2&amp;correlator=14864104448&amp;frm=20&amp;pv=1&amp;ga_vid=1802284261.1706398912&amp;ga_sid=1706398913&amp;ga_hid=1807960872&amp;ga_fc=1&amp;u_tz=60&amp;u_his=10&amp;u_h=900&amp;u_w=1600&amp;u_ah=852&amp;u_aw=1600&amp;u_cd=24&amp;u_sd=1&amp;dmc=8&amp;adx=242&amp;ady=130&amp;biw=1583&amp;bih=731&amp;scr_x=0&amp;scr_y=0&amp;eid=44759876%2C44759927%2C31079438%2C31080533%2C31080662%2C95322329%2C95320891%2C95321626%2C95322163%2C95323005%2C31078663%2C31078665%2C31078668%2C31078670&amp;oid=2&amp;psts=AOrYGslSORaUHY6EBQ5qtjpLtt-DfaGSnJL4YFlve_wVMqIfv7xfuT9-lE2P9P1_Oy9cRRwXAmIzlRS4oIDNaSQzkEnNBXr3%2CAOrYGslXYWe4I1hLCRNBtjBrBCkNjJonXXztauIu587iFoQLP2sNf9I5Qp0QkykQ7vSRKaHS6JE_Xk2NqrS96_RQsAnNVvh4%2CAOrYGsnzTuwtTGEKqGItAf7IZ6TmlRhPZnm1j1SfeIfUklHPTyAaIdIgQAN9uSUMwPEfstAammPWi4AbDcneauMmlM6ZTjm1%2CAOrYGsnVkJZkcWZMTPVeOXs-gVnuAkiIgcEnjVrmGCYATL1-hVfYpgRJyD2Fn71XfX-QV5bza0Uqe_S3-PyqbMEW5EELiw&amp;pvsid=494714511243508&amp;tmod=2010668055&amp;uas=3&amp;nvt=1&amp;ref=https%3A%2F%2Fwww.google.com%2F&amp;fc=896&amp;brdim=0%2C0%2C0%2C0%2C1600%2C0%2C1600%2C852%2C1600%2C731&amp;vis=1&amp;rsz=%7C%7CeE%7C&amp;abl=CS&amp;pfx=0&amp;fu=0&amp;bc=31&amp;bz=1&amp;td=1&amp;psd=W251bGwsbnVsbCxudWxsLDNd&amp;nt=1&amp;ifi=7&amp;uci=a!7&amp;fsb=1&amp;dtd=9" data-google-container-id="a!7" data-google-query-id="CKnVqtjf_oMDFTK8JwIdXMUO2A" data-load-complete="true"></iframe>
					</div>
				</ins>
				<script>
					(adsbygoogle = window.adsbygoogle || []).push({
					});
				</script>
			</div>
			<div class="row" style="height: auto !important;">
				<div class="col-12 col-lg-8">
					<div class="row g-2 g-md-3 gallery flex-nowrap overflow-hidden">
						<div class="col-8">
							<div class="gallery-item rounded rounded-md-3">
								<img src="https://media.bazarafrique.com/upload/post/6597f09928c35158323760.jpg" data-sizes="auto" data-src="https://media.bazarafrique.com/upload/post/6597f09928c35158323760.jpg" alt="LOCATION ET VENTE DE NACELLES ELEVATRICES AUTOMOTRICES ET CHARIOTS TELESCOPIQUES" title="LOCATION ET VENTE DE NACELLES ELEVATRICES AUTOMOTRICES ET CHARIOTS TELESCOPIQUES" class="bg-gray-light lazyautosizes ls-is-cached lazyloaded" sizes="257px" style="background-position: center center; background-repeat: no-repeat;">
							</div>
						</div>
						<div class="col-4">
							<div class="row g-0 h-100">
								<div class="col-12 pb-3 h-50">
									<div class="gallery-item rounded rounded-md-3 mb-2 mb-md-3">
										<img src="https://media.bazarafrique.com/upload/post/6597f09f4dafd938263499.jpg" data-sizes="auto" data-src="https://media.bazarafrique.com/upload/post/6597f09f4dafd938263499.jpg" alt="LOCATION ET VENTE DE NACELLES ELEVATRICES AUTOMOTRICES ET CHARIOTS TELESCOPIQUES" title="LOCATION ET VENTE DE NACELLES ELEVATRICES AUTOMOTRICES ET CHARIOTS TELESCOPIQUES" class="bg-gray-light lazyautosizes lazyloaded" sizes="126px" style="background-position: center center; background-repeat: no-repeat;">
									</div>
								</div>
								<div class="col-12 h-50">
									<div class="gallery-item rounded-1 rounded-md-2 more-item gallery-item-overlay gallery-item-indicator">
										<img src="https://media.bazarafrique.com/upload/post/6597f0b2f4035174397748.jpg" data-sizes="auto" data-src="https://media.bazarafrique.com/upload/post/6597f0b2f4035174397748.jpg" alt="LOCATION ET VENTE DE NACELLES ELEVATRICES AUTOMOTRICES ET CHARIOTS TELESCOPIQUES" title="LOCATION ET VENTE DE NACELLES ELEVATRICES AUTOMOTRICES ET CHARIOTS TELESCOPIQUES" class="bg-gray-light lazyautosizes lazyloaded" sizes="126px" style="background-position: center center; background-repeat: no-repeat;">
										<span class="gallery-item-caption fs-3">+7</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!---->
					<a href="/profile/ac846b5c-eeb2-4541-8a12-838658b49162" class="d-flex align-items-center border-bottom pb-4 text-decoration-none mb-3 w-100 text-muted link-chevron-right mt-4 d-flex d-lg-none">
						<div class="rounded-circle user-profile-image overflow-hidden d-inline-block border border-grey-light" style="width: 64px; height: 64px;">
							<img src="https://media.bazarafrique.com/upload/profile/6597eb2f87506675179012.jpg" data-sizes="auto" data-src="https://media.bazarafrique.com/upload/profile/6597eb2f87506675179012.jpg" alt="GBP" title="GBP" class="bg-gray-light lazyautosizes ls-is-cached lazyloaded" sizes="62px" style="background-position: center center; background-repeat: no-repeat;">
						</div>
						<div class="ps-3 flex-grow-1">
							<h5 class="mb-0">
								GBP
							</h5>
							<div class="small opacity-70 text-muted">
								Membre depuis 23 jours
							</div>
							<div class="small text-primary">
								1 annonce
							</div>
						</div>
					</a>
					<div class="border-bottom pt-2 pb-4 py-lg-4">
						<!---->
						<h1 class="h3 mb-2 break-long-words">LOCATION ET VENTE DE NACELLES ELEVATRICES AUTOMOTRICES ET CHARIOTS TELESCOPIQUES</h1>
						<h2 class="h4 fw-normal">60 000 CFA</h2>
						<p class="mb-2 pb-1 fs-sm text-muted">
							Abidjan, Côte d’Ivoire
						</p>
						<!---->
					</div>
					<div class="py-4 border-bottom">
						<div class="row align-items-center">
							<div class="col">
								<ul class="d-flex list-unstyled mb-0 fs-sm">
									<li class="mb-0 me-3 pe-3 border-end text-muted">
										<span>Publié le : <b>07/01/2024 12:47</b></span>
									</li>
									<li class="mb-0 me-3 pe-3">
										<a href="/btp-chantier-gros-oeuvre-outillage" class="text-muted nuxt-link-active">
											<span>Catégorie : <b>BTP - Chantier- Gros Oeuvre - Outillage</b></span>
										</a>
									</li>
								</ul>
							</div>
							<div class="col-auto d-flex justify-content-end">
								<ul class="d-flex list-unstyled mb-0 fs-sm">
									<li class="mb-0 me-0">
										<div class="dropdown">
											<a id="dropdownContentShareTrigger5" data-bs-toggle="dropdown" data-bs-auto-close="true" data-bs-display="dynamic" aria-expanded="false" aria-label="dropdown" href="#" role="button" class="btn btn-sm btn-outline-grey text-muted d-flex align-items-center bg-white dropdown-toggle">
												<div class="d-flex">
													<i class="ba-icon-share me-1"></i>
													 Partager
												</div>
											</a>
											<div aria-labelledby="dropdownContentShareTrigger5" class="dropdown-menu">
												<div class="px-3 mt-2 text-nowrap">
													<p class="fw-bold fs-6">
														Partager l'annonce
													</p>
													<ul class="list-unstyled d-grid gap-2">
														<li>
															<button class="btn ps-0 fw-normal text-nowrap py-1"><i class="ba-icon-share me-1"></i> Copier le lien</button>
														</li>
														<li>
															<button type="button" class="btn ps-0 fw-normal text-nowrap py-1"><i class="ba-icon-facebook me-1"></i> Facebook</button>
														</li>
														<li>
															<button type="button" class="btn ps-0 fw-normal text-nowrap py-1"><i class="ba-icon-whatsapp me-1"></i> Whatsapp</button>
														</li>
														<li>
															<button type="button" class="btn ps-0 fw-normal text-nowrap py-1"><i class="ba-icon-twitter me-1"></i> Twitter</button>
														</li>
														<li>
															<button type="button" class="btn ps-0 fw-normal text-nowrap py-1"><i class="ba-icon-messages me-1"></i> Email</button>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="mt-4 pb-5 border-bottom">
						<span class="h5 d-block">Description de l'annonce</span>
						<div data-v-6627b135="">
							<p data-v-6627b135="" class="line-breaks break-long-words mb-0">
								GLOBAL BUSINESS PARTNER (GBP) est une société  spécialisée dans la vente , la location et l'entretien de nacelles élévatrice automotrices , de chariots télescopique ( Manitou ) et divers engins ou matériels de chantier.NOUS VOUS PROPOSONS  :- Une gamme variée de nacelles automotrice de 6 à 100 mètres de hauteur - Des chariots élévateur télescopique de 12 à 21 mètres de hauteur avec une charge de 3 à 4,5 tonne.
							</p>
							<!---->
						</div>
					</div>
					<div class="my-4 text-center my-4 d-lg-none">
						<script async="async" src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2372499842645737" crossorigin="anonymous" data-checked-head="true"></script>
						<ins data-ad-client="ca-pub-2372499842645737" data-ad-slot="2111114287" data-ad-format="auto" data-full-width-responsive="true" class="adsbygoogle" style="display: block;" data-adsbygoogle-status="done"></ins>
						<script>
							(adsbygoogle = window.adsbygoogle || []).push({
							});
						</script>
					</div>
					<div class="pt-5 pb-6">
						<p class="d-flex align-items-center fw-bold">
							<i class="ba-icon-map-location fs-3"></i>
							 Abidjan, Côte d’Ivoire
						</p>
						<a href="https://www.google.com/maps/search/?api=1&amp;query=Abidjan%2C%20C%C3%B4te%20d%E2%80%99Ivoire" target="_blank" rel="nofollow"><img src="https://maps.googleapis.com/maps/api/staticmap?center=Abidjan%2C%20C%C3%B4te%20d%E2%80%99Ivoire&amp;key=AIzaSyBn05FavSwbkc4z77YStzNaVok7dbGt2W0&amp;markers=color%3Ared%7Csize%3Amid%7CAbidjan%2C%20C%C3%B4te%20d%E2%80%99Ivoire&amp;scale=2&amp;size=600x250&amp;zoom=12" data-sizes="auto" data-src="https://maps.googleapis.com/maps/api/staticmap?center=Abidjan%2C%20C%C3%B4te%20d%E2%80%99Ivoire&amp;key=AIzaSyBn05FavSwbkc4z77YStzNaVok7dbGt2W0&amp;markers=color%3Ared%7Csize%3Amid%7CAbidjan%2C%20C%C3%B4te%20d%E2%80%99Ivoire&amp;scale=2&amp;size=600x250&amp;zoom=12" alt="Abidjan, Côte d’Ivoire" title="Abidjan, Côte d’Ivoire" width="600" class="bg-gray-light w-100 lazyautosizes lazyloaded" heigth="250" style="background-position: center center; background-repeat: no-repeat;" sizes="388px"></a>
					</div>
					<div>
						<div class="d-flex justify-content-between align-items-center mb-5">
							<div class="d-flex w-100 justify-content-between flex-column">
								<div class="h4 mb-0">
									Les annonces de GBP
								</div>
								<!---->
							</div>
							<!---->
						</div>
						<div class="content-wrapper">
							<div class="row">
								<div class="col-6 col-sm-4 col-md-3">
									<div class="position-relative post-box rounded-3">
										<a href="/profile/ac846b5c-eeb2-4541-8a12-838658b49162" class="d-flex align-items-center mb-3">
											<div class="rounded-circle user-profile-image overflow-hidden d-inline-block border border-grey-light" style="width: 27px; height: 27px;">
												<img src="https://media.bazarafrique.com/upload/profile/6597eb2f87506675179012.jpg" data-sizes="auto" data-src="https://media.bazarafrique.com/upload/profile/6597eb2f87506675179012.jpg" alt="GBP" title="GBP" class="bg-gray-light lazyautosizes ls-is-cached lazyloaded" sizes="25px" style="background-position: center center; background-repeat: no-repeat;">
											</div>
											<div class="ps-2">
												<h4 class="fw-normal text-muted fs-xs lh-base mb-0">GBP</h4>
											</div>
										</a>
										<div class="position-relative overflow-hidden mb-3 post-box-image-container post-box-small">
											<div class="position-absolute end-0 top-0 pt-3 pe-3">
												<button type="button" aria-label="Favoris" class="btn text-danger btn-sm bg-dark bg-opacity-10 btn-icon rounded-circle"><i class="ba-icon-heart-2 fs-4 ba-icon-heart-2 text-white"></i></button>
											</div>
											<div class="position-absolute end-0 bottom-0 pb-3 pe-3">
												<span class="badge rounded-pill bg-dark bg-opacity-75 text-center fw-bold">7</span>
											</div>
											<a href="/btp-chantier-gros-oeuvre-outillage/1704458909-location-et-vente-de-nacelles-elevatrices-automotrices-et-chariots-telescopiques" aria-current="page" class="active nuxt-link-active"><img src="https://media.bazarafrique.com/upload/post/6597f09928c35158323760.jpg" data-sizes="auto" data-src="https://media.bazarafrique.com/upload/post/6597f09928c35158323760.jpg" alt="LOCATION ET VENTE DE NACELLES ELEVATRICES AUTOMOTRICES ET CHARIOTS TELESCOPIQUES" title="LOCATION ET VENTE DE NACELLES ELEVATRICES AUTOMOTRICES ET CHARIOTS TELESCOPIQUES" class="bg-gray-light rounded-2 lazyautosizes ls-is-cached lazyloaded" sizes="182px" style="background-position: center center; background-repeat: no-repeat;"></a>
										</div>
										<div class="pb-3 position-relative">
											<h3 class="h5 mb-2"><a href="/btp-chantier-gros-oeuvre-outillage/1704458909-location-et-vente-de-nacelles-elevatrices-automotrices-et-chariots-telescopiques" aria-current="page" class="nav-link stretched-link text-truncate active nuxt-link-active">LOCATION ET VENTE DE NACELLES ELEVATRICES AUTOMOTRICES ET CHARIOTS TELESCOPIQUES</a></h3>
											<div class="fw-normal">
												60 000 CFA
											</div>
											<p class="mb-1 fs-xs text-muted">
												BTP - Chantier- Gros Oeuvre - Outillage
											</p>
											<p class="mb-1 fs-xs text-muted">
												Abidjan, Côte d’Ivoire
											</p>
											<p class="fs-xs text-muted text-capitalize-first-letter">
												il y a 20 jours
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<hr class="my-5">
					<div>
						<div class="d-flex justify-content-between align-items-center mb-5">
							<div class="d-flex w-100 justify-content-between flex-column">
								<div class="h4 mb-0">
									Autres annonces qui peuvent vous intéresser
								</div>
								<!---->
							</div>
							<!---->
						</div>
						<div class="content-wrapper">
							<div class="row">
								<div class="col-6 col-sm-4 col-md-3">
									<div class="position-relative post-box rounded-3">
										<a href="/profile/7fe4098c-ed7c-4a4b-8888-6a0f179d60ce" class="d-flex align-items-center mb-3">
											<div class="rounded-circle user-profile-image overflow-hidden d-inline-block border border-grey-light" style="width: 27px; height: 27px;">
												<img src="https://media.bazarafrique.com/upload/profile/655e2a105ca01557831507.jpg" data-sizes="auto" data-src="https://media.bazarafrique.com/upload/profile/655e2a105ca01557831507.jpg" alt="ALM" title="ALM" class="bg-gray-light lazyautosizes ls-is-cached lazyloaded" sizes="25px" style="background-position: center center; background-repeat: no-repeat;">
											</div>
											<div class="ps-2">
												<h4 class="fw-normal text-muted fs-xs lh-base mb-0">ALM</h4>
											</div>
										</a>
										<div class="position-relative overflow-hidden mb-3 post-box-image-container post-box-small">
											<div class="position-absolute end-0 top-0 pt-3 pe-3">
												<button type="button" aria-label="Favoris" class="btn text-danger btn-sm bg-dark bg-opacity-10 btn-icon rounded-circle"><i class="ba-icon-heart-2 fs-4 ba-icon-heart-2 text-white"></i></button>
											</div>
											<div class="position-absolute end-0 bottom-0 pb-3 pe-3">
												<span class="badge rounded-pill bg-dark bg-opacity-75 text-center fw-bold">10</span>
											</div>
											<a href="/btp-chantier-gros-oeuvre-outillage/1700671103-location-vente-de-nacelles-elevatrices-automotrice-de-chariots-telescopiques" class=""><img src="https://media.bazarafrique.com/upload/post/655e2a791daad956126235.jpg" data-sizes="auto" data-src="https://media.bazarafrique.com/upload/post/655e2a791daad956126235.jpg" alt="LOCATION &amp; VENTE DE NACELLES ELEVATRICES AUTOMOTRICE &amp; DE CHARIOTS TELESCOPIQUES" title="LOCATION &amp; VENTE DE NACELLES ELEVATRICES AUTOMOTRICE &amp; DE CHARIOTS TELESCOPIQUES" class="bg-gray-light rounded-2 lazyautosizes ls-is-cached lazyloaded" sizes="182px" style="background-position: center center; background-repeat: no-repeat;"></a>
										</div>
										<div class="pb-3 position-relative">
											<h3 class="h5 mb-2"><a href="/btp-chantier-gros-oeuvre-outillage/1700671103-location-vente-de-nacelles-elevatrices-automotrice-de-chariots-telescopiques" class="nav-link stretched-link text-truncate">LOCATION &amp; VENTE DE NACELLES ELEVATRICES AUTOMOTRICE &amp; DE CHARIOTS TELESCOPIQUES</a></h3>
											<div class="fw-normal">
												60 000 CFA
											</div>
											<p class="mb-1 fs-xs text-muted">
												BTP - Chantier- Gros Oeuvre - Outillage
											</p>
											<p class="mb-1 fs-xs text-muted">
												Abidjan, Côte d’Ivoire
											</p>
											<p class="fs-xs text-muted text-capitalize-first-letter">
												il y a environ 2 mois
											</p>
										</div>
									</div>
								</div>
								<div class="col-6 col-sm-4 col-md-3">
									<div class="position-relative post-box rounded-3">
										<a href="/profile/1b854355-9f32-4872-b5ff-d442f046143a" class="d-flex align-items-center mb-3">
											<div class="rounded-circle user-profile-image overflow-hidden d-inline-block border border-grey-light" style="width: 27px; height: 27px;">
												<img src="https://media.bazarafrique.com/upload/profile/654969f60b473478335140.jpeg" data-sizes="auto" data-src="https://media.bazarafrique.com/upload/profile/654969f60b473478335140.jpeg" alt="ochogni22" title="ochogni22" class="bg-gray-light lazyautosizes lazyloaded" sizes="25px" style="background-position: center center; background-repeat: no-repeat;">
											</div>
											<div class="ps-2">
												<h4 class="fw-normal text-muted fs-xs lh-base mb-0">ochogni22</h4>
											</div>
										</a>
										<div class="position-relative overflow-hidden mb-3 post-box-image-container post-box-small">
											<div class="position-absolute end-0 top-0 pt-3 pe-3">
												<button type="button" aria-label="Favoris" class="btn text-danger btn-sm bg-dark bg-opacity-10 btn-icon rounded-circle"><i class="ba-icon-heart-2 fs-4 ba-icon-heart-2 text-white"></i></button>
											</div>
											<div class="position-absolute end-0 bottom-0 pb-3 pe-3">
												<span class="badge rounded-pill bg-dark bg-opacity-75 text-center fw-bold">10</span>
											</div>
											<a href="/btp-chantier-gros-oeuvre-outillage/1699311516-prestation-de-service" class=""><img src="https://media.bazarafrique.com/upload/post/65496e37bfa51806772264.jpg" data-sizes="auto" data-src="https://media.bazarafrique.com/upload/post/65496e37bfa51806772264.jpg" alt="prestation de service" title="prestation de service" class="bg-gray-light rounded-2 lazyautosizes ls-is-cached lazyloaded" sizes="182px" style="background-position: center center; background-repeat: no-repeat;"></a>
										</div>
										<div class="pb-3 position-relative">
											<h3 class="h5 mb-2"><a href="/btp-chantier-gros-oeuvre-outillage/1699311516-prestation-de-service" class="nav-link stretched-link text-truncate">prestation de service</a></h3>
											<div class="fw-normal">
												0 CFA
											</div>
											<p class="mb-1 fs-xs text-muted">
												BTP - Chantier- Gros Oeuvre - Outillage
											</p>
											<p class="mb-1 fs-xs text-muted">
												Abidjan, Côte d’Ivoire
											</p>
											<p class="fs-xs text-muted text-capitalize-first-letter">
												il y a 3 mois
											</p>
										</div>
									</div>
								</div>
								<div class="col-6 col-sm-4 col-md-3">
									<div class="position-relative post-box rounded-3">
										<a href="/profile/8d5d3920-7219-46a7-bf8a-04881023040b" class="d-flex align-items-center mb-3">
											<div class="rounded-circle user-profile-image overflow-hidden d-inline-block border border-grey-light" style="width: 27px; height: 27px;">
												<img src="https://media.bazarafrique.com/upload/profile/6492f63325a78301953022.jpeg" data-sizes="auto" data-src="https://media.bazarafrique.com/upload/profile/6492f63325a78301953022.jpeg" alt="simbtp20" title="simbtp20" class="bg-gray-light lazyautosizes lazyloaded" sizes="25px" style="background-position: center center; background-repeat: no-repeat;">
											</div>
											<div class="ps-2">
												<h4 class="fw-normal text-muted fs-xs lh-base mb-0">simbtp20</h4>
											</div>
										</a>
										<div class="position-relative overflow-hidden mb-3 post-box-image-container post-box-small">
											<div class="position-absolute end-0 top-0 pt-3 pe-3">
												<button type="button" aria-label="Favoris" class="btn text-danger btn-sm bg-dark bg-opacity-10 btn-icon rounded-circle"><i class="ba-icon-heart-2 fs-4 ba-icon-heart-2 text-white"></i></button>
											</div>
											<div class="position-absolute end-0 bottom-0 pb-3 pe-3">
												<span class="badge rounded-pill bg-dark bg-opacity-75 text-center fw-bold">3</span>
											</div>
											<a href="/btp-chantier-gros-oeuvre-outillage/1687353186-location-d-engins-btp" class=""><img src="https://media.bazarafrique.com/upload/post/6514221bd5585320001424.jpg" data-sizes="auto" data-src="https://media.bazarafrique.com/upload/post/6514221bd5585320001424.jpg" alt="LOCATION D'ENGINS BTP" title="LOCATION D'ENGINS BTP" class="bg-gray-light rounded-2 lazyautosizes lazyloaded" sizes="182px" style="background-position: center center; background-repeat: no-repeat;"></a>
										</div>
										<div class="pb-3 position-relative">
											<h3 class="h5 mb-2"><a href="/btp-chantier-gros-oeuvre-outillage/1687353186-location-d-engins-btp" class="nav-link stretched-link text-truncate">LOCATION D'ENGINS BTP</a></h3>
											<div class="fw-normal">
												0 CFA
											</div>
											<p class="mb-1 fs-xs text-muted">
												BTP - Chantier- Gros Oeuvre - Outillage
											</p>
											<p class="mb-1 fs-xs text-muted">
												Abidjan, Côte d’Ivoire
											</p>
											<p class="fs-xs text-muted text-capitalize-first-letter">
												il y a 4 mois
											</p>
										</div>
									</div>
								</div>
								<div class="col-6 col-sm-4 col-md-3">
									<div class="position-relative post-box rounded-3">
										<a href="/profile/92b2cd58-9c91-454f-86e5-3bfc7a149cbe" class="d-flex align-items-center mb-3">
											<div class="rounded-circle user-profile-image overflow-hidden d-inline-block border border-grey-light" style="width: 27px; height: 27px;">
												<img src="https://media.bazarafrique.com/upload/profile/64de222723c3a853558310.jpeg" data-sizes="auto" data-src="https://media.bazarafrique.com/upload/profile/64de222723c3a853558310.jpeg" alt="agbmachinefr" title="agbmachinefr" class="bg-gray-light lazyautosizes lazyloaded" sizes="25px" style="background-position: center center; background-repeat: no-repeat;">
											</div>
											<div class="ps-2">
												<h4 class="fw-normal text-muted fs-xs lh-base mb-0">agbmachinefr</h4>
											</div>
										</a>
										<div class="position-relative overflow-hidden mb-3 post-box-image-container post-box-small">
											<div class="position-absolute end-0 top-0 pt-3 pe-3">
												<button type="button" aria-label="Favoris" class="btn text-danger btn-sm bg-dark bg-opacity-10 btn-icon rounded-circle"><i class="ba-icon-heart-2 fs-4 ba-icon-heart-2 text-white"></i></button>
											</div>
											<div class="position-absolute end-0 bottom-0 pb-3 pe-3">
												<span class="badge rounded-pill bg-dark bg-opacity-75 text-center fw-bold">8</span>
											</div>
											<a href="/btp-chantier-gros-oeuvre-outillage/1692791621-machine-a-blocs-de-beton-parpaings-paves-bordures-etc" class=""><img src="https://media.bazarafrique.com/upload/post/64e5f1914d746645032462.jpg" data-sizes="auto" data-src="https://media.bazarafrique.com/upload/post/64e5f1914d746645032462.jpg" alt="Machine à Blocs de Béton (Parpaings, Pavés, Bordures, etc.)" title="Machine à Blocs de Béton (Parpaings, Pavés, Bordures, etc.)" class="bg-gray-light rounded-2 lazyautosizes lazyloaded" sizes="182px" style="background-position: center center; background-repeat: no-repeat;"></a>
										</div>
										<div class="pb-3 position-relative">
											<h3 class="h5 mb-2"><a href="/btp-chantier-gros-oeuvre-outillage/1692791621-machine-a-blocs-de-beton-parpaings-paves-bordures-etc" class="nav-link stretched-link text-truncate">Machine à Blocs de Béton (Parpaings, Pavés, Bordures, etc.)</a></h3>
											<div class="fw-normal">
												1 CFA
											</div>
											<p class="mb-1 fs-xs text-muted">
												BTP - Chantier- Gros Oeuvre - Outillage
											</p>
											<p class="mb-1 fs-xs text-muted">
												Abidjan, Côte d’Ivoire
											</p>
											<p class="fs-xs text-muted text-capitalize-first-letter">
												il y a 5 mois
											</p>
										</div>
									</div>
								</div>
								<div class="col-6 col-sm-4 col-md-3">
									<div class="position-relative post-box rounded-3">
										<a href="/profile/3bb72f4e-6d9a-4f22-97de-2befcbc7e7cc" class="d-flex align-items-center mb-3">
											<div class="rounded-circle user-profile-image overflow-hidden d-inline-block border border-grey-light" style="width: 27px; height: 27px;">
												<img src="https://media.bazarafrique.com/upload/profile/62c701b5b378f397981874.jpg" data-sizes="auto" data-src="https://media.bazarafrique.com/upload/profile/62c701b5b378f397981874.jpg" alt="megacentralesbeton" title="megacentralesbeton" class="bg-gray-light lazyautosizes lazyloaded" sizes="25px" style="background-position: center center; background-repeat: no-repeat;">
											</div>
											<div class="ps-2">
												<h4 class="fw-normal text-muted fs-xs lh-base mb-0">megacentralesbeton</h4>
											</div>
										</a>
										<div class="position-relative overflow-hidden mb-3 post-box-image-container post-box-small">
											<div class="position-absolute end-0 top-0 pt-3 pe-3">
												<button type="button" aria-label="Favoris" class="btn text-danger btn-sm bg-dark bg-opacity-10 btn-icon rounded-circle"><i class="ba-icon-heart-2 fs-4 ba-icon-heart-2 text-white"></i></button>
											</div>
											<div class="position-absolute end-0 bottom-0 pb-3 pe-3">
												<span class="badge rounded-pill bg-dark bg-opacity-75 text-center fw-bold">6</span>
											</div>
											<a href="/btp-chantier-gros-oeuvre-outillage/1691046277-centrale-a-beton-de-200-m3-mega-200-tw" class=""><img src="https://media.bazarafrique.com/upload/post/64cb50efac419718401457.jpg" data-sizes="auto" data-src="https://media.bazarafrique.com/upload/post/64cb50efac419718401457.jpg" alt="CENTRALE À BÉTON DE 200 m3 - MEGA 200.TW" title="CENTRALE À BÉTON DE 200 m3 - MEGA 200.TW" class="bg-gray-light rounded-2 lazyautosizes lazyloaded" sizes="182px" style="background-position: center center; background-repeat: no-repeat;"></a>
										</div>
										<div class="pb-3 position-relative">
											<h3 class="h5 mb-2"><a href="/btp-chantier-gros-oeuvre-outillage/1691046277-centrale-a-beton-de-200-m3-mega-200-tw" class="nav-link stretched-link text-truncate">CENTRALE À BÉTON DE 200 m3 - MEGA 200.TW</a></h3>
											<div class="fw-normal">
												3 750 CFA
											</div>
											<p class="mb-1 fs-xs text-muted">
												BTP - Chantier- Gros Oeuvre - Outillage
											</p>
											<p class="mb-1 fs-xs text-muted">
												Abidjan, Côte d’Ivoire
											</p>
											<p class="fs-xs text-muted text-capitalize-first-letter">
												il y a 6 mois
											</p>
										</div>
									</div>
								</div>
								<div class="col-6 col-sm-4 col-md-3">
									<div class="position-relative post-box rounded-3">
										<a href="/profile/3bb72f4e-6d9a-4f22-97de-2befcbc7e7cc" class="d-flex align-items-center mb-3">
											<div class="rounded-circle user-profile-image overflow-hidden d-inline-block border border-grey-light" style="width: 27px; height: 27px;">
												<img src="https://media.bazarafrique.com/upload/profile/62c701b5b378f397981874.jpg" data-sizes="auto" data-src="https://media.bazarafrique.com/upload/profile/62c701b5b378f397981874.jpg" alt="megacentralesbeton" title="megacentralesbeton" class="bg-gray-light lazyautosizes lazyloaded" sizes="25px" style="background-position: center center; background-repeat: no-repeat;">
											</div>
											<div class="ps-2">
												<h4 class="fw-normal text-muted fs-xs lh-base mb-0">megacentralesbeton</h4>
											</div>
										</a>
										<div class="position-relative overflow-hidden mb-3 post-box-image-container post-box-small">
											<div class="position-absolute end-0 top-0 pt-3 pe-3">
												<button type="button" aria-label="Favoris" class="btn text-danger btn-sm bg-dark bg-opacity-10 btn-icon rounded-circle"><i class="ba-icon-heart-2 fs-4 ba-icon-heart-2 text-white"></i></button>
											</div>
											<div class="position-absolute end-0 bottom-0 pb-3 pe-3">
												<span class="badge rounded-pill bg-dark bg-opacity-75 text-center fw-bold">6</span>
											</div>
											<a href="/btp-chantier-gros-oeuvre-outillage/1691046436-mega-centrale-a-beton-30-m3-malaxeur-a-beton-planetaire" class=""><img src="https://media.bazarafrique.com/upload/post/64cb51a8e4ca1353180444.jpg" data-sizes="auto" data-src="https://media.bazarafrique.com/upload/post/64cb51a8e4ca1353180444.jpg" alt="MEGA CENTRALE À BÉTON 30 m3 - MALAXEUR À BÉTON ‘PLANÉTAIRE’" title="MEGA CENTRALE À BÉTON 30 m3 - MALAXEUR À BÉTON ‘PLANÉTAIRE’" class="bg-gray-light rounded-2 lazyautosizes lazyloaded" sizes="182px" style="background-position: center center; background-repeat: no-repeat;"></a>
										</div>
										<div class="pb-3 position-relative">
											<h3 class="h5 mb-2"><a href="/btp-chantier-gros-oeuvre-outillage/1691046436-mega-centrale-a-beton-30-m3-malaxeur-a-beton-planetaire" class="nav-link stretched-link text-truncate">MEGA CENTRALE À BÉTON 30 m3 - MALAXEUR À BÉTON ‘PLANÉTAIRE’</a></h3>
											<div class="fw-normal">
												2 250 CFA
											</div>
											<p class="mb-1 fs-xs text-muted">
												BTP - Chantier- Gros Oeuvre - Outillage
											</p>
											<p class="mb-1 fs-xs text-muted">
												Abidjan, Côte d’Ivoire
											</p>
											<p class="fs-xs text-muted text-capitalize-first-letter">
												il y a 6 mois
											</p>
										</div>
									</div>
								</div>
								<div class="col-6 col-sm-4 col-md-3">
									<div class="position-relative post-box rounded-3">
										<a href="/profile/89603433-e97b-484c-b6a9-19159e37b124" class="d-flex align-items-center mb-3">
											<div class="rounded-circle user-profile-image overflow-hidden d-inline-block" style="width: 27px; height: 27px;">
												<img src="/img/user-profile.svg" data-sizes="auto" data-src="/img/user-profile.svg" alt="Datchy03" title="Datchy03" class="bg-gray-light lazyautosizes ls-is-cached lazyloaded" sizes="27px" style="background-position: center center; background-repeat: no-repeat;">
											</div>
											<div class="ps-2">
												<h4 class="fw-normal text-muted fs-xs lh-base mb-0">Datchy03</h4>
											</div>
										</a>
										<div class="position-relative overflow-hidden mb-3 post-box-image-container post-box-small">
											<div class="position-absolute end-0 top-0 pt-3 pe-3">
												<button type="button" aria-label="Favoris" class="btn text-danger btn-sm bg-dark bg-opacity-10 btn-icon rounded-circle"><i class="ba-icon-heart-2 fs-4 ba-icon-heart-2 text-white"></i></button>
											</div>
											<div class="position-absolute end-0 bottom-0 pb-3 pe-3">
												<span class="badge rounded-pill bg-dark bg-opacity-75 text-center fw-bold">4</span>
											</div>
											<a href="/btp-chantier-gros-oeuvre-outillage/1690056000-machine-de-fabrication-de-briques" class=""><img src="https://media.bazarafrique.com/upload/post/64bc33f08f928791502712.jpg" data-sizes="auto" data-src="https://media.bazarafrique.com/upload/post/64bc33f08f928791502712.jpg" alt="MACHINE DE FABRICATION DE BRIQUES" title="MACHINE DE FABRICATION DE BRIQUES" class="bg-gray-light rounded-2 lazyautosizes lazyloaded" sizes="182px" style="background-position: center center; background-repeat: no-repeat;"></a>
										</div>
										<div class="pb-3 position-relative">
											<h3 class="h5 mb-2"><a href="/btp-chantier-gros-oeuvre-outillage/1690056000-machine-de-fabrication-de-briques" class="nav-link stretched-link text-truncate">MACHINE DE FABRICATION DE BRIQUES</a></h3>
											<div class="fw-normal">
												12 500 000 CFA
											</div>
											<p class="mb-1 fs-xs text-muted">
												BTP - Chantier- Gros Oeuvre - Outillage
											</p>
											<p class="mb-1 fs-xs text-muted">
												Abidjan, Côte d’Ivoire
											</p>
											<p class="fs-xs text-muted text-capitalize-first-letter">
												il y a 6 mois
											</p>
										</div>
									</div>
								</div>
								<div class="col-6 col-sm-4 col-md-3">
									<div class="position-relative post-box rounded-3">
										<a href="/profile/89603433-e97b-484c-b6a9-19159e37b124" class="d-flex align-items-center mb-3">
											<div class="rounded-circle user-profile-image overflow-hidden d-inline-block" style="width: 27px; height: 27px;">
												<img src="/img/user-profile.svg" data-sizes="auto" data-src="/img/user-profile.svg" alt="Datchy03" title="Datchy03" class="bg-gray-light lazyautosizes ls-is-cached lazyloaded" sizes="27px" style="background-position: center center; background-repeat: no-repeat;">
											</div>
											<div class="ps-2">
												<h4 class="fw-normal text-muted fs-xs lh-base mb-0">Datchy03</h4>
											</div>
										</a>
										<div class="position-relative overflow-hidden mb-3 post-box-image-container post-box-small">
											<div class="position-absolute end-0 top-0 pt-3 pe-3">
												<button type="button" aria-label="Favoris" class="btn text-danger btn-sm bg-dark bg-opacity-10 btn-icon rounded-circle"><i class="ba-icon-heart-2 fs-4 ba-icon-heart-2 text-white"></i></button>
											</div>
											<div class="position-absolute end-0 bottom-0 pb-3 pe-3">
												<span class="badge rounded-pill bg-dark bg-opacity-75 text-center fw-bold">1</span>
											</div>
											<a href="/btp-chantier-gros-oeuvre-outillage/1690056341-bulldozer-d8-sur-chenilles-a-vendre" class=""><img src="https://media.bazarafrique.com/upload/post/64bc3634074eb436661538.jpg" data-sizes="auto" data-src="https://media.bazarafrique.com/upload/post/64bc3634074eb436661538.jpg" alt="BULLDOZER D8 SUR CHENILLES À VENDRE" title="BULLDOZER D8 SUR CHENILLES À VENDRE" class="bg-gray-light rounded-2 lazyautosizes lazyloaded" sizes="182px" style="background-position: center center; background-repeat: no-repeat;"></a>
										</div>
										<div class="pb-3 position-relative">
											<h3 class="h5 mb-2"><a href="/btp-chantier-gros-oeuvre-outillage/1690056341-bulldozer-d8-sur-chenilles-a-vendre" class="nav-link stretched-link text-truncate">BULLDOZER D8 SUR CHENILLES À VENDRE</a></h3>
											<div class="fw-normal">
												21 000 000 CFA
											</div>
											<p class="mb-1 fs-xs text-muted">
												BTP - Chantier- Gros Oeuvre - Outillage
											</p>
											<p class="mb-1 fs-xs text-muted">
												Abidjan, Côte d’Ivoire
											</p>
											<p class="fs-xs text-muted text-capitalize-first-letter">
												il y a 6 mois
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-4 d-none d-lg-block" style="height: auto !important;">
					<div class="card shadow-sm mb-4 user-info-card">
						<div class="card-body">
							<a href="/profile/ac846b5c-eeb2-4541-8a12-838658b49162" class="d-flex align-items-center border-bottom pb-4 text-decoration-none mb-3 w-100 text-muted link-chevron-right">
								<div class="rounded-circle user-profile-image overflow-hidden d-inline-block border border-grey-light" style="width: 64px; height: 64px;">
									<img src="https://media.bazarafrique.com/upload/profile/6597eb2f87506675179012.jpg" data-sizes="auto" data-src="https://media.bazarafrique.com/upload/profile/6597eb2f87506675179012.jpg" alt="GBP" title="GBP" class="bg-gray-light lazyautosizes ls-is-cached lazyloaded" sizes="62px" style="background-position: center center; background-repeat: no-repeat;">
								</div>
								<div class="ps-3 flex-grow-1">
									<h5 class="mb-0">
										GBP
									</h5>
									<div class="small opacity-70 text-muted">
										Membre depuis 23 jours
									</div>
									<div class="small text-primary">
										1 annonce
									</div>
								</div>
							</a>
							<div class="py-2">
								<div>
									<div class="row gy-2">
										<div class="col-12">
											<button type="button" class="btn btn-outline-primary d-block w-100"><i class="ba-icon-phone"></i> Contacter</button>
										</div>
										<div class="col-12">
											<button type="button" class="btn btn-primary d-block w-100 mt-3"><i class="ba-icon-messages-2"></i> Envoyer un message</button>
										</div>
										<div class="col-12">
											<button type="button" class="btn btn-outline-grey text-muted d-flex align-items-center justify-content-center w-100 mt-3 bg-white"><i class="ba-icon-heart-2 me-1"></i> Favoris  </button>
										</div>
									</div>
									<!---->
									<!---->
								</div>
							</div>
						</div>
					</div>
					<!---->
					<!---->
					<div class="my-4 text-center">
						<script async="async" src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2372499842645737" crossorigin="anonymous" data-checked-head="true"></script>
						<ins data-ad-client="ca-pub-2372499842645737" data-ad-slot="6280308059" data-ad-format="auto" data-full-width-responsive="true" class="adsbygoogle" style="display: block; height: 280px;" data-adsbygoogle-status="done" data-ad-status="filled">
							<div id="aswift_3_host" tabindex="0" title="Advertisement" aria-label="Advertisement" style="border: none; height: 280px; width: 409px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: inline-block; overflow: visible;">
								<iframe id="aswift_3" name="aswift_3" browsingtopics="true" style="left:0;position:absolute;top:0;border:0;width:409px;height:280px;" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" width="409" height="280" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allow="attribution-reporting" src="https://googleads.g.doubleclick.net/pagead/ads?gdpr=0&amp;client=ca-pub-2372499842645737&amp;output=html&amp;h=280&amp;slotname=6280308059&amp;adk=2361436531&amp;adf=1339383085&amp;pi=t.ma~as.6280308059&amp;w=409&amp;fwrn=4&amp;fwrnh=100&amp;lmt=1706399011&amp;rafmt=1&amp;format=409x280&amp;url=https%3A%2F%2Fci.bazarafrique.com%2Fbtp-chantier-gros-oeuvre-outillage%2F1704458909-location-et-vente-de-nacelles-elevatrices-automotrices-et-chariots-telescopiques&amp;fwr=0&amp;fwrattr=true&amp;rpe=1&amp;resp_fmts=3&amp;wgl=1&amp;uach=WyJXaW5kb3dzIiwiMTQuMC4wIiwieDg2IiwiIiwiMTIxLjAuNjE2Ny44NSIsbnVsbCwwLG51bGwsIjY0IixbWyJOb3QgQShCcmFuZCIsIjk5LjAuMC4wIl0sWyJHb29nbGUgQ2hyb21lIiwiMTIxLjAuNjE2Ny44NSJdLFsiQ2hyb21pdW0iLCIxMjEuMC42MTY3Ljg1Il1dLDBd&amp;dt=1706399011675&amp;bpp=1&amp;bdt=100605&amp;idt=-M&amp;shv=r20240122&amp;mjsv=m202401230101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3D80a85617aba9898e%3AT%3D1706398915%3ART%3D1706398915%3AS%3DALNI_MZtcM1VMFr0TsHiY3F0Px4VJhjnPg&amp;gpic=UID%3D00000d02475dfea8%3AT%3D1706398915%3ART%3D1706398915%3AS%3DALNI_MZ6m6XLPo5ZdvacRFOKm3PeL4ldCg&amp;prev_fmts=1200x280%2C0x0%2C0x0%2C1200x280%2C294x600%2C294x600%2C1100x130&amp;nras=2&amp;correlator=14864104448&amp;frm=20&amp;pv=1&amp;ga_vid=1802284261.1706398912&amp;ga_sid=1706398913&amp;ga_hid=1807960872&amp;ga_fc=1&amp;u_tz=60&amp;u_his=10&amp;u_h=900&amp;u_w=1600&amp;u_ah=852&amp;u_aw=1600&amp;u_cd=24&amp;u_sd=1&amp;dmc=8&amp;adx=1020&amp;ady=433&amp;biw=1583&amp;bih=731&amp;scr_x=0&amp;scr_y=0&amp;eid=44759876%2C44759927%2C31079438%2C31080533%2C31080662%2C95322329%2C95320891%2C95321626%2C95322163%2C95323005%2C31078663%2C31078665%2C31078668%2C31078670&amp;oid=2&amp;psts=AOrYGslSORaUHY6EBQ5qtjpLtt-DfaGSnJL4YFlve_wVMqIfv7xfuT9-lE2P9P1_Oy9cRRwXAmIzlRS4oIDNaSQzkEnNBXr3%2CAOrYGslXYWe4I1hLCRNBtjBrBCkNjJonXXztauIu587iFoQLP2sNf9I5Qp0QkykQ7vSRKaHS6JE_Xk2NqrS96_RQsAnNVvh4%2CAOrYGsnzTuwtTGEKqGItAf7IZ6TmlRhPZnm1j1SfeIfUklHPTyAaIdIgQAN9uSUMwPEfstAammPWi4AbDcneauMmlM6ZTjm1%2CAOrYGsnVkJZkcWZMTPVeOXs-gVnuAkiIgcEnjVrmGCYATL1-hVfYpgRJyD2Fn71XfX-QV5bza0Uqe_S3-PyqbMEW5EELiw&amp;pvsid=494714511243508&amp;tmod=2010668055&amp;uas=3&amp;nvt=1&amp;ref=https%3A%2F%2Fwww.google.com%2F&amp;fc=896&amp;brdim=0%2C0%2C0%2C0%2C1600%2C0%2C1600%2C852%2C1600%2C731&amp;vis=1&amp;rsz=%7C%7CEe%7C&amp;abl=CS&amp;pfx=0&amp;fu=128&amp;bc=31&amp;bz=1&amp;td=1&amp;psd=W251bGwsbnVsbCxudWxsLDNd&amp;nt=1&amp;ifi=8&amp;uci=a!8&amp;fsb=1&amp;dtd=10" data-google-container-id="a!8" data-google-query-id="CI76sNjf_oMDFVGwJwIdjDsLaA" data-load-complete="true"></iframe>
							</div>
						</ins>
						<script>
							(adsbygoogle = window.adsbygoogle || []).push({
							});
						</script>
					</div>
					<div class="my-4 text-center">
						<script async="async" src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2372499842645737" crossorigin="anonymous" data-checked-head="true"></script>
						<ins data-ad-client="ca-pub-2372499842645737" data-ad-slot="6280308059" data-ad-format="auto" data-full-width-responsive="true" class="adsbygoogle" style="display: block; height: 280px;" data-adsbygoogle-status="done" data-ad-status="filled">
							<div id="aswift_4_host" tabindex="0" title="Advertisement" aria-label="Advertisement" style="border: none; height: 280px; width: 409px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: inline-block; overflow: visible;">
								<iframe id="aswift_4" name="aswift_4" browsingtopics="true" style="left:0;position:absolute;top:0;border:0;width:409px;height:280px;" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" width="409" height="280" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allow="attribution-reporting" src="https://googleads.g.doubleclick.net/pagead/ads?gdpr=0&amp;client=ca-pub-2372499842645737&amp;output=html&amp;h=280&amp;slotname=6280308059&amp;adk=2361436531&amp;adf=2553081058&amp;pi=t.ma~as.6280308059&amp;w=409&amp;fwrn=4&amp;fwrnh=100&amp;lmt=1706399011&amp;rafmt=1&amp;format=409x280&amp;url=https%3A%2F%2Fci.bazarafrique.com%2Fbtp-chantier-gros-oeuvre-outillage%2F1704458909-location-et-vente-de-nacelles-elevatrices-automotrices-et-chariots-telescopiques&amp;fwr=0&amp;fwrattr=true&amp;rpe=1&amp;resp_fmts=3&amp;wgl=1&amp;uach=WyJXaW5kb3dzIiwiMTQuMC4wIiwieDg2IiwiIiwiMTIxLjAuNjE2Ny44NSIsbnVsbCwwLG51bGwsIjY0IixbWyJOb3QgQShCcmFuZCIsIjk5LjAuMC4wIl0sWyJHb29nbGUgQ2hyb21lIiwiMTIxLjAuNjE2Ny44NSJdLFsiQ2hyb21pdW0iLCIxMjEuMC42MTY3Ljg1Il1dLDBd&amp;dt=1706399011675&amp;bpp=1&amp;bdt=100605&amp;idt=1&amp;shv=r20240122&amp;mjsv=m202401230101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3D80a85617aba9898e%3AT%3D1706398915%3ART%3D1706398915%3AS%3DALNI_MZtcM1VMFr0TsHiY3F0Px4VJhjnPg&amp;gpic=UID%3D00000d02475dfea8%3AT%3D1706398915%3ART%3D1706398915%3AS%3DALNI_MZ6m6XLPo5ZdvacRFOKm3PeL4ldCg&amp;prev_fmts=1200x280%2C0x0%2C0x0%2C1200x280%2C294x600%2C294x600%2C1100x130%2C409x280&amp;nras=2&amp;correlator=14864104448&amp;frm=20&amp;pv=1&amp;ga_vid=1802284261.1706398912&amp;ga_sid=1706398913&amp;ga_hid=1807960872&amp;ga_fc=1&amp;u_tz=60&amp;u_his=10&amp;u_h=900&amp;u_w=1600&amp;u_ah=852&amp;u_aw=1600&amp;u_cd=24&amp;u_sd=1&amp;dmc=8&amp;adx=1020&amp;ady=729&amp;biw=1583&amp;bih=731&amp;scr_x=0&amp;scr_y=0&amp;eid=44759876%2C44759927%2C31079438%2C31080533%2C31080662%2C95322329%2C95320891%2C95321626%2C95322163%2C95323005%2C31078663%2C31078665%2C31078668%2C31078670&amp;oid=2&amp;psts=AOrYGslSORaUHY6EBQ5qtjpLtt-DfaGSnJL4YFlve_wVMqIfv7xfuT9-lE2P9P1_Oy9cRRwXAmIzlRS4oIDNaSQzkEnNBXr3%2CAOrYGslXYWe4I1hLCRNBtjBrBCkNjJonXXztauIu587iFoQLP2sNf9I5Qp0QkykQ7vSRKaHS6JE_Xk2NqrS96_RQsAnNVvh4%2CAOrYGsnzTuwtTGEKqGItAf7IZ6TmlRhPZnm1j1SfeIfUklHPTyAaIdIgQAN9uSUMwPEfstAammPWi4AbDcneauMmlM6ZTjm1%2CAOrYGsnVkJZkcWZMTPVeOXs-gVnuAkiIgcEnjVrmGCYATL1-hVfYpgRJyD2Fn71XfX-QV5bza0Uqe_S3-PyqbMEW5EELiw&amp;pvsid=494714511243508&amp;tmod=2010668055&amp;uas=3&amp;nvt=1&amp;ref=https%3A%2F%2Fwww.google.com%2F&amp;fc=896&amp;brdim=0%2C0%2C0%2C0%2C1600%2C0%2C1600%2C852%2C1600%2C731&amp;vis=1&amp;rsz=%7C%7CEe%7C&amp;abl=CS&amp;pfx=0&amp;fu=128&amp;bc=31&amp;bz=1&amp;td=1&amp;psd=W251bGwsbnVsbCxudWxsLDNd&amp;nt=1&amp;ifi=9&amp;uci=a!9&amp;fsb=1&amp;dtd=20" data-google-container-id="a!9" data-google-query-id="COqBsdjf_oMDFSRypAQdb5kKQw" data-load-complete="true"></iframe>
							</div>
						</ins>
						<script>
							(adsbygoogle = window.adsbygoogle || []).push({
							});
						</script>
					</div>
				</div>
			</div>
		</div>
	</main>
	<footer class="footer pt-lg-5 pt-4 bg-dark text-white">
		<div class="container mb-4 py-4 pb-lg-5">
			<div class="row gy-4">
				<div class="col-lg-3 col-md-6 col-sm-4">
					<div class="mb-3">
						<a href="/" aria-label="Page d'accueil BazarAfrique" class="d-inline-block nuxt-link-active">
							<div class="position-relative">
								<div class="logo d-none d-md-block">
									<svg class="logo-svg" viewBox="0 0 453 91" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M79 39.5C79 61.3152 61.3152 79 39.5 79C17.6848 79 0 61.3152 0 39.5C0 17.6848 17.6848 0 39.5 0C61.3152 0 79 17.6848 79 39.5Z" fill="white"></path>
										<path d="M39 91L25.1436 73H52.8564L39 91Z" fill="white"></path>
										<path d="M24.4242 21.9211C24.4665 20.8481 25.3487 20 26.4226 20H52.0519C53.136 20 54.0227 20.8637 54.0512 21.9474L54.946 55.9474C54.9756 57.0722 54.0719 58 52.9467 58H25.0805C23.945 58 23.0373 57.0557 23.0821 55.9211L24.4242 21.9211Z" fill="#F89A00"></path>
										<path fill-rule="evenodd" clip-rule="evenodd" d="M38.6875 33.125C40.8884 33.125 43.4906 31.572 45.6425 27.9855C45.9267 27.5119 46.5409 27.3583 47.0145 27.6425C47.4881 27.9266 47.6416 28.5409 47.3575 29.0145C45.0094 32.928 41.8616 35.125 38.6875 35.125C35.4567 35.125 32.6664 32.8586 31.0715 28.8714C30.8664 28.3586 31.1158 27.7766 31.6286 27.5715C32.1414 27.3664 32.7234 27.6158 32.9285 28.1286C34.3336 31.6414 36.5433 33.125 38.6875 33.125Z" fill="white"></path>
										<path d="M101.36 62.36C100.68 62.36 99.88 62.32 98.96 62.24C98.08 62.2 97.16 62.12 96.2 62C95.28 61.92 94.4 61.82 93.56 61.7C92.72 61.54 92 61.38 91.4 61.22V21.2C92.12 21 92.92 20.84 93.8 20.72C94.68 20.56 95.58 20.44 96.5 20.36C97.46 20.24 98.38 20.16 99.26 20.12C100.18 20.08 101.02 20.06 101.78 20.06C104.02 20.06 106.14 20.24 108.14 20.6C110.18 20.96 111.96 21.56 113.48 22.4C115 23.24 116.2 24.36 117.08 25.76C118 27.12 118.46 28.82 118.46 30.86C118.46 33.1 117.88 35.02 116.72 36.62C115.6 38.18 114.08 39.26 112.16 39.86C113.36 40.14 114.46 40.54 115.46 41.06C116.46 41.58 117.34 42.26 118.1 43.1C118.86 43.9 119.44 44.9 119.84 46.1C120.28 47.26 120.5 48.66 120.5 50.3C120.5 54.22 118.94 57.22 115.82 59.3C112.7 61.34 107.88 62.36 101.36 62.36ZM95.48 42.08V58.46C96.08 58.54 96.98 58.64 98.18 58.76C99.38 58.84 100.6 58.88 101.84 58.88C103.68 58.88 105.46 58.76 107.18 58.52C108.94 58.28 110.48 57.84 111.8 57.2C113.12 56.56 114.18 55.68 114.98 54.56C115.78 53.44 116.18 52 116.18 50.24C116.18 48.64 115.9 47.32 115.34 46.28C114.78 45.2 113.98 44.36 112.94 43.76C111.9 43.12 110.62 42.68 109.1 42.44C107.62 42.2 105.96 42.08 104.12 42.08H95.48ZM95.48 38.6H103.4C104.88 38.6 106.28 38.5 107.6 38.3C108.92 38.06 110.06 37.66 111.02 37.1C112.02 36.5 112.8 35.72 113.36 34.76C113.92 33.76 114.2 32.5 114.2 30.98C114.2 29.62 113.9 28.48 113.3 27.56C112.7 26.6 111.84 25.82 110.72 25.22C109.64 24.62 108.34 24.2 106.82 23.96C105.3 23.68 103.62 23.54 101.78 23.54C100.3 23.54 99.04 23.58 98 23.66C97 23.74 96.16 23.84 95.48 23.96V38.6Z" fill="white"></path>
										<path d="M138.733 59.18C140.253 59.18 141.573 59.14 142.693 59.06C143.853 58.94 144.833 58.8 145.633 58.64V47.72C145.193 47.52 144.493 47.32 143.533 47.12C142.573 46.88 141.253 46.76 139.573 46.76C138.613 46.76 137.613 46.84 136.573 47C135.533 47.12 134.573 47.42 133.693 47.9C132.813 48.34 132.093 48.96 131.533 49.76C130.973 50.56 130.693 51.62 130.693 52.94C130.693 54.1 130.873 55.08 131.233 55.88C131.633 56.68 132.173 57.32 132.853 57.8C133.573 58.28 134.413 58.64 135.373 58.88C136.373 59.08 137.493 59.18 138.733 59.18ZM138.373 30.26C140.413 30.26 142.133 30.56 143.533 31.16C144.973 31.72 146.133 32.52 147.013 33.56C147.893 34.56 148.533 35.76 148.933 37.16C149.333 38.56 149.533 40.08 149.533 41.72V61.28C149.133 61.4 148.553 61.54 147.793 61.7C147.033 61.82 146.153 61.96 145.153 62.12C144.153 62.28 143.033 62.4 141.793 62.48C140.593 62.6 139.353 62.66 138.073 62.66C136.433 62.66 134.913 62.48 133.513 62.12C132.153 61.76 130.953 61.2 129.913 60.44C128.913 59.64 128.113 58.64 127.513 57.44C126.953 56.2 126.673 54.7 126.673 52.94C126.673 51.26 126.993 49.82 127.633 48.62C128.273 47.42 129.173 46.44 130.333 45.68C131.493 44.88 132.873 44.3 134.473 43.94C136.073 43.58 137.813 43.4 139.693 43.4C140.253 43.4 140.833 43.44 141.433 43.52C142.073 43.56 142.673 43.64 143.233 43.76C143.833 43.84 144.333 43.94 144.733 44.06C145.173 44.14 145.473 44.22 145.633 44.3V42.38C145.633 41.3 145.553 40.26 145.393 39.26C145.233 38.22 144.873 37.3 144.313 36.5C143.793 35.66 143.033 35 142.033 34.52C141.073 34 139.793 33.74 138.193 33.74C135.913 33.74 134.213 33.9 133.093 34.22C131.973 34.54 131.153 34.8 130.633 35L130.093 31.58C130.773 31.26 131.813 30.96 133.213 30.68C134.653 30.4 136.373 30.26 138.373 30.26Z" fill="white"></path>
										<path d="M178.74 34.16C177.82 35.2 176.62 36.64 175.14 38.48C173.66 40.32 172.08 42.38 170.4 44.66C168.72 46.9 167.06 49.26 165.42 51.74C163.78 54.18 162.34 56.5 161.1 58.7H179.28V62H156.6V59.18C157.64 57.22 158.92 55.06 160.44 52.7C162 50.34 163.6 48.02 165.24 45.74C166.88 43.42 168.48 41.26 170.04 39.26C171.6 37.22 172.92 35.56 174 34.28H157.5V30.98H178.74V34.16Z" fill="white"></path>
										<path d="M196.565 59.18C198.085 59.18 199.405 59.14 200.525 59.06C201.685 58.94 202.665 58.8 203.465 58.64V47.72C203.025 47.52 202.325 47.32 201.365 47.12C200.405 46.88 199.085 46.76 197.405 46.76C196.445 46.76 195.445 46.84 194.405 47C193.365 47.12 192.405 47.42 191.525 47.9C190.645 48.34 189.925 48.96 189.365 49.76C188.805 50.56 188.525 51.62 188.525 52.94C188.525 54.1 188.705 55.08 189.065 55.88C189.465 56.68 190.005 57.32 190.685 57.8C191.405 58.28 192.245 58.64 193.205 58.88C194.205 59.08 195.325 59.18 196.565 59.18ZM196.205 30.26C198.245 30.26 199.965 30.56 201.365 31.16C202.805 31.72 203.965 32.52 204.845 33.56C205.725 34.56 206.365 35.76 206.765 37.16C207.165 38.56 207.365 40.08 207.365 41.72V61.28C206.965 61.4 206.385 61.54 205.625 61.7C204.865 61.82 203.985 61.96 202.985 62.12C201.985 62.28 200.865 62.4 199.625 62.48C198.425 62.6 197.185 62.66 195.905 62.66C194.265 62.66 192.745 62.48 191.345 62.12C189.985 61.76 188.785 61.2 187.745 60.44C186.745 59.64 185.945 58.64 185.345 57.44C184.785 56.2 184.505 54.7 184.505 52.94C184.505 51.26 184.825 49.82 185.465 48.62C186.105 47.42 187.005 46.44 188.165 45.68C189.325 44.88 190.705 44.3 192.305 43.94C193.905 43.58 195.645 43.4 197.525 43.4C198.085 43.4 198.665 43.44 199.265 43.52C199.905 43.56 200.505 43.64 201.065 43.76C201.665 43.84 202.165 43.94 202.565 44.06C203.005 44.14 203.305 44.22 203.465 44.3V42.38C203.465 41.3 203.385 40.26 203.225 39.26C203.065 38.22 202.705 37.3 202.145 36.5C201.625 35.66 200.865 35 199.865 34.52C198.905 34 197.625 33.74 196.025 33.74C193.745 33.74 192.045 33.9 190.925 34.22C189.805 34.54 188.985 34.8 188.465 35L187.925 31.58C188.605 31.26 189.645 30.96 191.045 30.68C192.485 30.4 194.205 30.26 196.205 30.26Z" fill="white"></path>
										<path d="M227.872 30.38C229.152 30.38 230.352 30.48 231.472 30.68C232.632 30.88 233.432 31.08 233.872 31.28L233.092 34.64C232.772 34.48 232.112 34.32 231.112 34.16C230.152 33.96 228.872 33.86 227.272 33.86C225.592 33.86 224.232 33.98 223.192 34.22C222.192 34.46 221.532 34.66 221.212 34.82V62H217.312V32.42C218.312 31.98 219.692 31.54 221.452 31.1C223.212 30.62 225.352 30.38 227.872 30.38Z" fill="white"></path>
										<path d="M267.234 62C266.794 60.56 266.294 59.08 265.734 57.56C265.214 56.04 264.694 54.52 264.174 53H247.974C247.454 54.52 246.914 56.04 246.354 57.56C245.834 59.08 245.354 60.56 244.914 62H235.194C236.754 57.52 238.234 53.38 239.634 49.58C241.034 45.78 242.394 42.2 243.714 38.84C245.074 35.48 246.394 32.3 247.674 29.3C248.994 26.26 250.354 23.3 251.754 20.42H260.694C262.054 23.3 263.394 26.26 264.714 29.3C266.034 32.3 267.354 35.48 268.674 38.84C270.034 42.2 271.414 45.78 272.814 49.58C274.214 53.38 275.694 57.52 277.254 62H267.234ZM256.014 29.84C255.814 30.44 255.514 31.26 255.114 32.3C254.714 33.34 254.254 34.54 253.734 35.9C253.214 37.26 252.634 38.76 251.994 40.4C251.394 42.04 250.774 43.76 250.134 45.56H261.954C261.314 43.76 260.694 42.04 260.094 40.4C259.494 38.76 258.914 37.26 258.354 35.9C257.834 34.54 257.374 33.34 256.974 32.3C256.574 31.26 256.254 30.44 256.014 29.84Z" fill="white"></path>
										<path d="M295.716 15.44C297.396 15.44 298.936 15.62 300.336 15.98C301.736 16.3 302.816 16.62 303.576 16.94L301.836 24.08C301.036 23.72 300.156 23.46 299.196 23.3C298.276 23.1 297.416 23 296.616 23C295.536 23 294.616 23.16 293.856 23.48C293.136 23.76 292.556 24.16 292.116 24.68C291.716 25.2 291.416 25.82 291.216 26.54C291.056 27.26 290.976 28.04 290.976 28.88V30.44H302.016V37.88H290.976V62H282.036V28.76C282.036 24.68 283.176 21.44 285.456 19.04C287.776 16.64 291.196 15.44 295.716 15.44Z" fill="white"></path>
										<path d="M326.368 38.36C325.568 38.16 324.628 37.96 323.548 37.76C322.468 37.52 321.308 37.4 320.068 37.4C319.508 37.4 318.828 37.46 318.028 37.58C317.268 37.66 316.688 37.76 316.288 37.88V62H307.348V32.12C308.948 31.56 310.828 31.04 312.988 30.56C315.188 30.04 317.628 29.78 320.308 29.78C320.788 29.78 321.368 29.82 322.048 29.9C322.728 29.94 323.408 30.02 324.088 30.14C324.768 30.22 325.448 30.34 326.128 30.5C326.808 30.62 327.388 30.78 327.868 30.98L326.368 38.36Z" fill="white"></path>
										<path d="M341.601 62H332.661V30.44H341.601V62ZM342.441 21.32C342.441 22.96 341.901 24.26 340.821 25.22C339.781 26.14 338.541 26.6 337.101 26.6C335.661 26.6 334.401 26.14 333.321 25.22C332.281 24.26 331.761 22.96 331.761 21.32C331.761 19.68 332.281 18.4 333.321 17.48C334.401 16.52 335.661 16.04 337.101 16.04C338.541 16.04 339.781 16.52 340.821 17.48C341.901 18.4 342.441 19.68 342.441 21.32Z" fill="white"></path>
										<path d="M357.625 46.46C357.625 52.18 359.745 55.04 363.985 55.04C364.905 55.04 365.805 54.92 366.685 54.68C367.605 54.44 368.345 54.14 368.905 53.78V37.64C368.465 37.56 367.905 37.5 367.225 37.46C366.545 37.38 365.805 37.34 365.005 37.34C362.565 37.34 360.725 38.18 359.485 39.86C358.245 41.5 357.625 43.7 357.625 46.46ZM348.505 46.22C348.505 43.78 348.865 41.56 349.585 39.56C350.345 37.52 351.425 35.78 352.825 34.34C354.225 32.86 355.945 31.72 357.985 30.92C360.025 30.12 362.345 29.72 364.945 29.72C366.025 29.72 367.145 29.78 368.305 29.9C369.505 29.98 370.665 30.1 371.785 30.26C372.945 30.42 374.045 30.62 375.085 30.86C376.125 31.06 377.045 31.28 377.845 31.52V73.1H368.905V61.22C367.905 61.66 366.865 62 365.785 62.24C364.705 62.48 363.545 62.6 362.305 62.6C357.825 62.6 354.405 61.14 352.045 58.22C349.685 55.26 348.505 51.26 348.505 46.22Z" fill="white"></path>
										<path d="M413.156 60.92C411.636 61.36 409.676 61.76 407.276 62.12C404.876 62.52 402.356 62.72 399.716 62.72C397.036 62.72 394.796 62.36 392.996 61.64C391.236 60.92 389.836 59.92 388.796 58.64C387.756 57.32 387.016 55.76 386.576 53.96C386.136 52.16 385.916 50.18 385.916 48.02V30.44H394.856V46.94C394.856 49.82 395.236 51.9 395.996 53.18C396.756 54.46 398.176 55.1 400.256 55.1C400.896 55.1 401.576 55.08 402.296 55.04C403.016 54.96 403.656 54.88 404.216 54.8V30.44H413.156V60.92Z" fill="white"></path>
										<path d="M420.048 46.46C420.048 43.66 420.468 41.22 421.308 39.14C422.188 37.02 423.328 35.26 424.728 33.86C426.128 32.46 427.728 31.4 429.528 30.68C431.368 29.96 433.248 29.6 435.168 29.6C439.648 29.6 443.188 30.98 445.788 33.74C448.388 36.46 449.688 40.48 449.688 45.8C449.688 46.32 449.668 46.9 449.628 47.54C449.588 48.14 449.548 48.68 449.508 49.16H429.228C429.428 51 430.288 52.46 431.808 53.54C433.328 54.62 435.368 55.16 437.928 55.16C439.568 55.16 441.168 55.02 442.728 54.74C444.328 54.42 445.628 54.04 446.628 53.6L447.828 60.86C447.348 61.1 446.708 61.34 445.908 61.58C445.108 61.82 444.208 62.02 443.208 62.18C442.248 62.38 441.208 62.54 440.088 62.66C438.968 62.78 437.848 62.84 436.728 62.84C433.888 62.84 431.408 62.42 429.288 61.58C427.208 60.74 425.468 59.6 424.068 58.16C422.708 56.68 421.688 54.94 421.008 52.94C420.368 50.94 420.048 48.78 420.048 46.46ZM441.048 43.04C441.008 42.28 440.868 41.54 440.628 40.82C440.428 40.1 440.088 39.46 439.608 38.9C439.168 38.34 438.588 37.88 437.868 37.52C437.188 37.16 436.328 36.98 435.288 36.98C434.288 36.98 433.428 37.16 432.708 37.52C431.988 37.84 431.388 38.28 430.908 38.84C430.428 39.4 430.048 40.06 429.768 40.82C429.528 41.54 429.348 42.28 429.228 43.04H441.048Z" fill="white"></path>
										<path d="M342.441 21.32C342.441 22.96 341.901 24.26 340.821 25.22C339.781 26.14 338.541 26.6 337.101 26.6C335.661 26.6 334.401 26.14 333.321 25.22C332.281 24.26 331.761 22.96 331.761 21.32C331.761 19.68 332.281 18.4 333.321 17.48C334.401 16.52 335.661 16.04 337.101 16.04C338.541 16.04 339.781 16.52 340.821 17.48C341.901 18.4 342.441 19.68 342.441 21.32Z" fill="white"></path>
										<path d="M342.441 21.32C342.441 22.96 341.901 24.26 340.821 25.22C339.781 26.14 338.541 26.6 337.101 26.6C335.661 26.6 334.401 26.14 333.321 25.22C332.281 24.26 331.761 22.96 331.761 21.32C331.761 19.68 332.281 18.4 333.321 17.48C334.401 16.52 335.661 16.04 337.101 16.04C338.541 16.04 339.781 16.52 340.821 17.48C341.901 18.4 342.441 19.68 342.441 21.32Z" fill="white"></path>
									</svg>
								</div>
								<div class="logo-mobile d-md-none">
									<svg class="logo-mobile-svg" viewBox="0 0 79 91" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M79 39.5C79 61.3152 61.3152 79 39.5 79C17.6848 79 0 61.3152 0 39.5C0 17.6848 17.6848 0 39.5 0C61.3152 0 79 17.6848 79 39.5Z" fill="white"></path>
										<path d="M39 91L25.1436 73H52.8564L39 91Z" fill="white"></path>
										<path d="M24.4242 21.9211C24.4665 20.8481 25.3487 20 26.4226 20H52.0519C53.136 20 54.0227 20.8637 54.0512 21.9474L54.946 55.9474C54.9756 57.0722 54.0719 58 52.9467 58H25.0805C23.945 58 23.0373 57.0557 23.0821 55.9211L24.4242 21.9211Z" fill="#F89A00"></path>
										<path fill-rule="evenodd" clip-rule="evenodd" d="M38.6875 33.125C40.8884 33.125 43.4906 31.572 45.6425 27.9855C45.9267 27.5119 46.5409 27.3583 47.0145 27.6425C47.4881 27.9266 47.6416 28.5409 47.3575 29.0145C45.0094 32.928 41.8616 35.125 38.6875 35.125C35.4567 35.125 32.6664 32.8586 31.0715 28.8714C30.8664 28.3586 31.1158 27.7766 31.6286 27.5715C32.1414 27.3664 32.7234 27.6158 32.9285 28.1286C34.3336 31.6414 36.5433 33.125 38.6875 33.125Z" fill="white"></path>
									</svg>
								</div>
								<!---->
							</div>
						</a>
					</div>
					<p>
						Télécharger gratuitement l'application BazarAfrique disponible sur Android et IOS.
					</p>
					<ul class="nav nav-light">
						<li class="nav-item mb-2 w-100">
							<a target="_blank" rel="noopener noreferrer" aria-label="Télécharger l'application IOS de BazarAfrique sur l'App Store" href="https://apps.apple.com/app/apple-store/id1482649809?pt=120527380&amp;ct=website_footer&amp;mt=8">
								<div class="nav-link p-0 fw-normal text-light text-nowrap">
									<svg class="app-store-badge" viewBox="0 0 144 45" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_1599_9116)">
											<path d="M132.282 2.41797e-05H10.9789C10.5649 2.41797e-05 10.1558 2.41798e-05 9.74294 0.00227418C9.3973 0.00452418 9.05441 0.0110604 8.70545 0.0165617C7.94735 0.0254512 7.19103 0.09191 6.44306 0.21536C5.69615 0.341498 4.97263 0.579304 4.29698 0.920735C3.62216 1.26505 3.00555 1.71246 2.46954 2.24673C1.93071 2.77949 1.48155 3.39529 1.13933 4.07045C0.796178 4.74427 0.558231 5.46633 0.433714 6.21169C0.308013 6.95611 0.240372 7.70911 0.231399 8.46394C0.220922 8.80887 0.219815 9.15494 0.214294 9.49991V35.5035C0.219815 35.8528 0.220922 36.1912 0.231399 36.5406C0.240375 37.2954 0.308016 38.0483 0.433714 38.7927C0.557888 39.5385 0.795848 40.261 1.13933 40.9351C1.48139 41.608 1.93061 42.2214 2.46954 42.7512C3.00352 43.2878 3.62053 43.7355 4.29698 44.0772C4.97262 44.4195 5.69606 44.6588 6.44306 44.7868C7.19115 44.9093 7.9474 44.9758 8.70545 44.9857C9.05441 44.9934 9.3973 44.9978 9.74294 44.9978C10.1558 45 10.5649 45 10.9789 45H132.282C132.688 45 133.1 45 133.506 44.9978C133.85 44.9978 134.202 44.9934 134.547 44.9857C135.303 44.9763 136.058 44.9098 136.804 44.7868C137.554 44.6579 138.28 44.4187 138.959 44.0772C139.635 43.7353 140.251 43.2876 140.785 42.7512C141.322 42.2193 141.772 41.6064 142.119 40.9351C142.46 40.2605 142.695 39.5381 142.818 38.7927C142.944 38.0482 143.014 37.2954 143.027 36.5406C143.032 36.1912 143.032 35.8528 143.032 35.5035C143.04 35.0947 143.04 34.6883 143.04 34.2729V10.7282C143.04 10.3162 143.04 9.90749 143.032 9.49991C143.032 9.15494 143.032 8.80887 143.027 8.46389C143.014 7.709 142.944 6.95617 142.818 6.21165C142.695 5.46672 142.459 4.74472 142.119 4.07041C141.422 2.71712 140.317 1.61555 138.959 0.920634C138.28 0.580037 137.554 0.342295 136.804 0.215259C136.058 0.0912648 135.303 0.0247829 134.547 0.0164042C134.202 0.0109142 133.85 0.00432168 133.506 0.00212793C133.1 -0.00012207 132.688 -0.00012207 132.282 -0.00012207V2.41797e-05Z" fill="#A6A6A6"></path>
											<path d="M9.74844 44.0156C9.40447 44.0156 9.06879 44.0112 8.72751 44.0036C8.02052 43.9944 7.31518 43.9331 6.61727 43.8201C5.96651 43.7084 5.33609 43.5007 4.74682 43.2037C4.16295 42.9092 3.63042 42.5231 3.16962 42.06C2.70215 41.6025 2.31296 41.0718 2.01747 40.489C1.71873 39.9024 1.51198 39.2736 1.40443 38.6246C1.28828 37.9273 1.22544 37.2221 1.21645 36.5153C1.20929 36.278 1.19992 35.488 1.19992 35.488V9.49988C1.19992 9.49988 1.2099 8.72205 1.21651 8.49353C1.22512 7.78779 1.28759 7.08374 1.40338 6.38745C1.51113 5.73666 1.71805 5.10609 2.01695 4.51758C2.31135 3.93519 2.69838 3.4041 3.16302 2.94489C3.62716 2.48133 4.1614 2.09318 4.74627 1.79461C5.33419 1.49861 5.96341 1.29232 6.61285 1.18268C7.31305 1.06857 8.02085 1.00687 8.73029 0.998111L9.74901 0.984375H133.5L134.531 0.998663C135.234 1.00699 135.935 1.06813 136.629 1.18158C137.285 1.2926 137.921 1.50032 138.516 1.79791C139.687 2.39961 140.641 3.35156 141.242 4.52033C141.536 5.10478 141.74 5.7302 141.846 6.37536C141.964 7.07737 142.029 7.78696 142.043 8.49848C142.046 8.81708 142.046 9.1593 142.046 9.49988C142.055 9.92176 142.055 10.3233 142.055 10.7281V34.2729C142.055 34.6816 142.055 35.0804 142.046 35.4825C142.046 35.8484 142.046 36.1835 142.041 36.5284C142.028 37.2272 141.964 37.9242 141.849 38.6136C141.743 39.2673 141.538 39.901 141.239 40.4924C140.941 41.0688 140.554 41.5949 140.092 42.0513C139.631 42.5168 139.098 42.9052 138.512 43.2016C137.919 43.5008 137.285 43.7093 136.629 43.8201C135.931 43.9337 135.226 43.995 134.519 44.0036C134.188 44.0112 133.842 44.0156 133.506 44.0156L132.282 44.0179L9.74844 44.0156Z" fill="black"></path>
											<path d="M28.1815 22.8382C28.1936 21.8992 28.4439 20.9786 28.9091 20.1619C29.3743 19.3452 30.0392 18.659 30.842 18.1672C30.332 17.4414 29.6592 16.8441 28.877 16.4227C28.0948 16.0013 27.2248 15.7675 26.336 15.7398C24.4402 15.5415 22.6023 16.8702 21.6362 16.8702C20.6514 16.8702 19.1639 15.7595 17.5622 15.7923C16.5261 15.8257 15.5164 16.1259 14.6314 16.6637C13.7464 17.2015 13.0164 17.9586 12.5123 18.8612C10.3288 22.6281 11.9575 28.1643 14.0491 31.2092C15.0955 32.7003 16.3186 34.3658 17.9188 34.3067C19.4848 34.242 20.0697 33.3117 21.96 33.3117C23.8327 33.3117 24.3814 34.3067 26.0142 34.2692C27.6945 34.242 28.7533 32.7715 29.763 31.2664C30.5149 30.204 31.0934 29.0298 31.4773 27.7873C30.501 27.3759 29.6679 26.6871 29.0818 25.8071C28.4958 24.927 28.1826 23.8945 28.1815 22.8382Z" fill="white"></path>
											<path d="M25.0975 13.7372C26.0137 12.6413 26.4651 11.2326 26.3558 9.8103C24.956 9.9568 23.663 10.6234 22.7344 11.6774C22.2804 12.1922 21.9327 12.7912 21.7111 13.4401C21.4896 14.089 21.3985 14.775 21.4432 15.4589C22.1433 15.4661 22.836 15.3149 23.469 15.0167C24.102 14.7185 24.6588 14.281 25.0975 13.7372Z" fill="white"></path>
											<path d="M40.4689 16.5393V10.7753H38.3497V9.82666H43.6298V10.7753H41.5151V16.5393H40.4689Z" fill="white"></path>
											<path d="M48.4953 15.1716C48.359 15.6345 48.0636 16.035 47.6609 16.3029C47.2582 16.5709 46.7738 16.6892 46.2924 16.6371C45.9575 16.6459 45.6247 16.582 45.317 16.4498C45.0094 16.3176 44.7343 16.1202 44.5108 15.8715C44.2874 15.6227 44.121 15.3284 44.0231 15.0091C43.9252 14.6898 43.8982 14.3531 43.944 14.0224C43.8994 13.6906 43.9269 13.3532 44.0245 13.033C44.1222 12.7127 44.2877 12.4171 44.51 12.1661C44.7323 11.9152 45.006 11.7147 45.3128 11.5784C45.6196 11.442 45.9521 11.3729 46.288 11.3758C47.7026 11.3758 48.5559 12.3388 48.5559 13.9295V14.2784H44.9661V14.3344C44.9504 14.5203 44.9738 14.7074 45.0349 14.8837C45.096 15.0601 45.1934 15.2218 45.3209 15.3584C45.4484 15.495 45.6031 15.6036 45.7752 15.6772C45.9472 15.7508 46.1328 15.7877 46.32 15.7856C46.56 15.8143 46.8031 15.7713 47.0185 15.6619C47.2339 15.5526 47.4117 15.3818 47.5295 15.1715L48.4953 15.1716ZM44.9661 13.539H47.5339C47.5465 13.369 47.5234 13.1982 47.4658 13.0376C47.4083 12.8771 47.3177 12.7303 47.1998 12.6067C47.082 12.4831 46.9395 12.3855 46.7815 12.32C46.6235 12.2546 46.4536 12.2228 46.2825 12.2267C46.109 12.2245 45.9368 12.257 45.776 12.3222C45.6153 12.3873 45.4693 12.4839 45.3466 12.6062C45.2239 12.7285 45.127 12.8741 45.0617 13.0343C44.9963 13.1945 44.9638 13.3661 44.9661 13.539H44.9661ZM45.6849 10.6265L46.8569 9.02637H48.0333L46.7213 10.6265H45.6849Z" fill="white"></path>
											<path d="M49.9495 9.49597H50.9528V16.5393H49.9495V9.49597Z" fill="white"></path>
											<path d="M56.8988 15.1716C56.7625 15.6345 56.4671 16.035 56.0644 16.3029C55.6617 16.5709 55.1773 16.6892 54.6959 16.6371C54.361 16.6459 54.0281 16.582 53.7205 16.4498C53.4128 16.3176 53.1377 16.1202 52.9143 15.8715C52.6909 15.6227 52.5244 15.3284 52.4266 15.0091C52.3287 14.6898 52.3017 14.3531 52.3475 14.0224C52.3029 13.6906 52.3304 13.3532 52.428 13.033C52.5257 12.7127 52.6912 12.4171 52.9135 12.1661C53.1357 11.9152 53.4095 11.7147 53.7163 11.5784C54.023 11.442 54.3556 11.3729 54.6915 11.3758C56.106 11.3758 56.9594 12.3388 56.9594 13.9295V14.2784H53.3695V14.3344C53.3538 14.5203 53.3773 14.7074 53.4384 14.8837C53.4995 15.0601 53.5969 15.2218 53.7244 15.3584C53.8518 15.495 54.0066 15.6036 54.1786 15.6772C54.3507 15.7508 54.5362 15.7877 54.7234 15.7856C54.9634 15.8143 55.2066 15.7713 55.422 15.6619C55.6373 15.5526 55.8152 15.3818 55.9329 15.1715L56.8988 15.1716ZM53.3695 13.539H55.9373C55.95 13.369 55.9268 13.1982 55.8693 13.0376C55.8117 12.8771 55.7211 12.7303 55.6033 12.6067C55.4854 12.4831 55.3429 12.3855 55.185 12.32C55.027 12.2546 54.857 12.2228 54.686 12.2267C54.5124 12.2245 54.3402 12.257 54.1795 12.3222C54.0187 12.3873 53.8727 12.4839 53.75 12.6062C53.6274 12.7285 53.5305 12.8741 53.4651 13.0343C53.3998 13.1945 53.3673 13.3661 53.3695 13.539ZM54.0884 10.6265L55.2604 9.02637H56.4368L55.1248 10.6265H54.0884Z" fill="white"></path>
											<path d="M61.6353 13.1292C61.5713 12.8666 61.415 12.6354 61.1948 12.4776C60.9746 12.3198 60.7049 12.2458 60.4346 12.269C59.5945 12.269 59.0807 12.9106 59.0807 13.99C59.0807 15.0881 59.5989 15.744 60.4346 15.744C60.7022 15.7749 60.9719 15.7073 61.193 15.5539C61.4141 15.4006 61.5714 15.172 61.6353 14.9112H62.611C62.5465 15.4242 62.2834 15.8917 61.8779 16.2142C61.4723 16.5366 60.9564 16.6884 60.4401 16.6372C60.1002 16.6479 59.762 16.5844 59.4493 16.4513C59.1365 16.3182 58.8567 16.1186 58.6295 15.8664C58.4022 15.6143 58.233 15.3157 58.1337 14.9916C58.0343 14.6675 58.0072 14.3257 58.0543 13.9901C58.0096 13.6569 58.0384 13.318 58.1387 12.9971C58.239 12.6762 58.4084 12.381 58.6351 12.1321C58.8618 11.8831 59.1402 11.6865 59.451 11.5559C59.7618 11.4253 60.0975 11.3638 60.4346 11.3759C60.9551 11.3281 61.4738 11.4846 61.8802 11.8121C62.2867 12.1395 62.5489 12.6121 62.611 13.1293L61.6353 13.1292Z" fill="white"></path>
											<path d="M63.9429 9.49597H64.9374V12.2876H65.0168C65.1501 11.9959 65.3705 11.7522 65.6479 11.5898C65.9253 11.4274 66.2462 11.3542 66.5669 11.3801C66.8129 11.3668 67.0589 11.4077 67.2873 11.5C67.5157 11.5923 67.7208 11.7337 67.888 11.9141C68.0553 12.0945 68.1805 12.3094 68.2547 12.5435C68.329 12.7777 68.3505 13.0253 68.3177 13.2687V16.5393H67.3133V13.5153C67.3133 12.7062 66.9351 12.2964 66.2262 12.2964C66.0537 12.2823 65.8803 12.3059 65.718 12.3656C65.5556 12.4253 65.4084 12.5196 65.2864 12.6419C65.1645 12.7642 65.0709 12.9116 65.0121 13.0738C64.9533 13.236 64.9308 13.4089 64.9461 13.5807V16.5393H63.9428L63.9429 9.49597Z" fill="white"></path>
											<path d="M69.579 15.1067C69.579 14.1948 70.2604 13.6691 71.4698 13.5944L72.8469 13.5153V13.0781C72.8469 12.543 72.4919 12.2409 71.8061 12.2409C71.246 12.2409 70.8579 12.4458 70.7466 12.804H69.7753C69.8778 11.9338 70.6992 11.3757 71.8524 11.3757C73.127 11.3757 73.8453 12.008 73.8453 13.0781V16.5393H72.88V15.8274H72.8006C72.6395 16.0828 72.4133 16.2909 72.145 16.4307C71.8767 16.5704 71.576 16.6367 71.2736 16.6228C71.0602 16.6449 70.8445 16.6222 70.6404 16.5562C70.4363 16.4901 70.2484 16.3822 70.0888 16.2394C69.9291 16.0965 69.8012 15.9219 69.7134 15.7269C69.6256 15.5318 69.5799 15.3205 69.579 15.1067ZM72.8469 14.6738V14.2503L71.6055 14.3294C70.9053 14.3761 70.5878 14.6134 70.5878 15.06C70.5878 15.5159 70.9847 15.7812 71.5305 15.7812C71.6904 15.7974 71.852 15.7813 72.0055 15.7339C72.1591 15.6866 72.3015 15.6089 72.4243 15.5056C72.5471 15.4023 72.6479 15.2754 72.7205 15.1325C72.7931 14.9896 72.8361 14.8336 72.8469 14.6738L72.8469 14.6738Z" fill="white"></path>
											<path d="M75.4164 11.4736H76.3822V12.2504H76.4572C76.5653 11.9807 76.7564 11.7522 77.003 11.5975C77.2496 11.4429 77.5391 11.3701 77.8298 11.3896C77.9801 11.3876 78.1302 11.4016 78.2774 11.4313V12.418C78.0933 12.3788 77.9056 12.3585 77.7174 12.3575C77.5519 12.3427 77.3851 12.3626 77.2278 12.4158C77.0705 12.469 76.9261 12.5545 76.8039 12.6666C76.6817 12.7788 76.5844 12.9152 76.5182 13.067C76.452 13.2189 76.4185 13.3829 76.4197 13.5484V16.5395H75.4164L75.4164 11.4736Z" fill="white"></path>
											<path d="M79.2003 17.0464H80.2267C80.3116 17.4138 80.7361 17.6512 81.4131 17.6512C82.2488 17.6512 82.7438 17.2556 82.7438 16.586V15.6137H82.6688C82.5115 15.8859 82.2816 16.1094 82.0048 16.2596C81.7279 16.4097 81.4147 16.4807 81.0999 16.4646C79.8023 16.4646 78.9996 15.4649 78.9996 13.9482C78.9996 12.4036 79.8111 11.3895 81.1098 11.3895C81.4325 11.3783 81.7521 11.4557 82.0337 11.6132C82.3152 11.7707 82.5479 12.0023 82.7063 12.2827H82.7857V11.4735H83.7471V16.581C83.7471 17.7396 82.8364 18.4745 81.3987 18.4745C80.1286 18.4746 79.3072 17.9071 79.2003 17.0464ZM82.7625 13.9433C82.7625 12.9341 82.2388 12.2876 81.3844 12.2876C80.5211 12.2876 80.036 12.9342 80.036 13.9433C80.036 14.9529 80.5211 15.5995 81.3844 15.5995C82.2444 15.5995 82.7625 14.9579 82.7625 13.9432V13.9433Z" fill="white"></path>
											<path d="M89.6445 15.1716C89.5082 15.6346 89.2129 16.0351 88.8102 16.303C88.4075 16.5709 87.9231 16.6892 87.4417 16.6372C87.1067 16.646 86.7739 16.5821 86.4662 16.4498C86.1586 16.3176 85.8835 16.1203 85.6601 15.8715C85.4366 15.6227 85.2702 15.3285 85.1723 15.0092C85.0744 14.6899 85.0475 14.3532 85.0933 14.0224C85.0487 13.6907 85.0761 13.3533 85.1738 13.033C85.2714 12.7127 85.437 12.4171 85.6592 12.1662C85.8815 11.9152 86.1553 11.7148 86.462 11.5784C86.7688 11.4421 87.1014 11.373 87.4373 11.3758C88.8518 11.3758 89.7052 12.3388 89.7052 13.9296V14.2784H86.1153V14.3344C86.0996 14.5203 86.1231 14.7074 86.1842 14.8838C86.2453 15.0601 86.3427 15.2218 86.4702 15.3584C86.5976 15.4951 86.7524 15.6037 86.9244 15.6772C87.0964 15.7508 87.282 15.7877 87.4692 15.7857C87.7092 15.8144 87.9524 15.7713 88.1677 15.6619C88.3831 15.5526 88.561 15.3819 88.6787 15.1715L89.6445 15.1716ZM86.1153 13.539H88.6831C88.6957 13.369 88.6726 13.1982 88.615 13.0377C88.5575 12.8771 88.4669 12.7303 88.349 12.6067C88.2312 12.4832 88.0887 12.3855 87.9307 12.3201C87.7727 12.2546 87.6028 12.2228 87.4317 12.2267C87.2582 12.2246 87.086 12.257 86.9253 12.3222C86.7645 12.3874 86.6185 12.484 86.4958 12.6063C86.3731 12.7286 86.2763 12.8741 86.2109 13.0343C86.1456 13.1945 86.1131 13.3661 86.1153 13.539H86.1153Z" fill="white"></path>
											<path d="M91.0525 11.4736H92.0184V12.2504H92.0933C92.2015 11.9807 92.3926 11.7522 92.6392 11.5975C92.8858 11.4429 93.1753 11.3701 93.466 11.3896C93.6163 11.3876 93.7663 11.4016 93.9136 11.4313V12.418C93.7295 12.3788 93.5418 12.3585 93.3535 12.3575C93.1881 12.3427 93.0213 12.3626 92.864 12.4158C92.7066 12.469 92.5622 12.5545 92.44 12.6666C92.3178 12.7788 92.2205 12.9152 92.1543 13.067C92.0881 13.2189 92.0546 13.3829 92.0558 13.5484V16.5395H91.0525V11.4736Z" fill="white"></path>
											<path d="M97.5287 14.0042C97.5287 12.4035 98.3546 11.3895 99.639 11.3895C99.9567 11.3749 100.272 11.4507 100.548 11.6081C100.824 11.7655 101.05 11.9979 101.198 12.2782H101.273V9.49597H102.276V16.5393H101.315V15.7389H101.235C101.076 16.0174 100.842 16.2469 100.561 16.4027C100.279 16.5585 99.9607 16.6346 99.639 16.6228C98.3457 16.6228 97.5287 15.6088 97.5287 14.0042ZM98.5652 14.0042C98.5652 15.0787 99.0734 15.7252 99.9235 15.7252C100.769 15.7252 101.292 15.0693 101.292 14.0086C101.292 12.9528 100.764 12.2876 99.9235 12.2876C99.0789 12.2876 98.5651 12.9386 98.5651 14.0042H98.5652Z" fill="white"></path>
											<path d="M103.632 15.1067C103.632 14.1948 104.314 13.6691 105.523 13.5944L106.9 13.5153V13.0781C106.9 12.543 106.545 12.2409 105.86 12.2409C105.299 12.2409 104.911 12.4458 104.8 12.804H103.829C103.931 11.9338 104.753 11.3757 105.906 11.3757C107.18 11.3757 107.899 12.008 107.899 13.0781V16.5393H106.933V15.8274H106.854C106.693 16.0828 106.467 16.2909 106.198 16.4307C105.93 16.5704 105.629 16.6367 105.327 16.6228C105.114 16.6449 104.898 16.6222 104.694 16.5562C104.49 16.4901 104.302 16.3822 104.142 16.2394C103.982 16.0965 103.855 15.9219 103.767 15.7268C103.679 15.5318 103.633 15.3205 103.632 15.1067ZM106.9 14.6738V14.2503L105.659 14.3294C104.959 14.3761 104.641 14.6134 104.641 15.06C104.641 15.5159 105.038 15.7812 105.584 15.7812C105.744 15.7974 105.905 15.7813 106.059 15.7339C106.212 15.6866 106.355 15.6089 106.478 15.5056C106.601 15.4023 106.701 15.2754 106.774 15.1325C106.846 14.9896 106.889 14.8336 106.9 14.6738V14.6738Z" fill="white"></path>
											<path d="M109.47 11.4736H110.436V12.2784H110.511C110.638 11.9893 110.853 11.747 111.125 11.5853C111.397 11.4235 111.713 11.3503 112.028 11.3758C112.276 11.3573 112.524 11.3945 112.755 11.4846C112.986 11.5747 113.194 11.7154 113.363 11.8964C113.532 12.0773 113.658 12.2938 113.731 12.5299C113.805 12.7659 113.824 13.0155 113.788 13.26V16.5394H112.785V13.511C112.785 12.697 112.43 12.2921 111.688 12.2921C111.52 12.2843 111.352 12.3128 111.196 12.3756C111.04 12.4384 110.9 12.5341 110.785 12.656C110.669 12.7779 110.582 12.9233 110.528 13.082C110.474 13.2408 110.456 13.4093 110.474 13.5759V16.5394H109.47V11.4736Z" fill="white"></path>
											<path d="M117.198 11.3757C118.341 11.3757 119.089 11.9058 119.187 12.799H118.224C118.132 12.4271 117.767 12.1898 117.198 12.1898C116.638 12.1898 116.212 12.4546 116.212 12.8501C116.212 13.1527 116.469 13.3434 117.02 13.4692L117.865 13.6642C118.832 13.8878 119.285 14.3019 119.285 15.0463C119.285 15.9999 118.393 16.6371 117.179 16.6371C115.97 16.6371 115.181 16.0927 115.092 15.1951H116.097C116.183 15.4088 116.339 15.5872 116.54 15.7019C116.74 15.8165 116.974 15.8607 117.202 15.8274C117.827 15.8274 118.272 15.5484 118.272 15.1435C118.272 14.8414 118.034 14.6458 117.524 14.525L116.638 14.3201C115.671 14.0921 115.223 13.6598 115.223 12.9061C115.223 12.008 116.049 11.3757 117.198 11.3757Z" fill="white"></path>
											<path d="M39.9529 20.3252H42.0521V34.296H39.9529V20.3252Z" fill="white"></path>
											<path d="M44.5813 25.4371L45.7279 20.3252H47.7676L46.3784 25.4371H44.5813Z" fill="white"></path>
											<path d="M55.7003 30.52H50.3564L49.073 34.296H46.8095L51.8712 20.3252H54.2229L59.2847 34.296H56.9826L55.7003 30.52ZM50.9098 28.7775H55.1458L53.0576 22.6488H52.9992L50.9098 28.7775Z" fill="white"></path>
											<path d="M70.2152 29.2039C70.2152 32.369 68.5151 34.4026 65.9495 34.4026C65.2996 34.4365 64.6532 34.2873 64.0844 33.9721C63.5157 33.657 63.0474 33.1886 62.7334 32.6206H62.6848V37.6655H60.5867V24.11H62.6176V25.8041H62.6562C62.9847 25.2389 63.4608 24.7729 64.0339 24.4558C64.607 24.1387 65.2557 23.9824 65.9109 24.0035C68.5051 24.0035 70.2152 26.0469 70.2152 29.2039ZM68.0586 29.2039C68.0586 27.1412 66.9892 25.7855 65.3574 25.7855C63.7543 25.7855 62.6761 27.1698 62.6761 29.2039C62.6761 31.2561 63.7543 32.6305 65.3574 32.6305C66.9892 32.6305 68.0586 31.2847 68.0586 29.2039Z" fill="white"></path>
											<path d="M81.4649 29.2039C81.4649 32.369 79.7648 34.4026 77.1992 34.4026C76.5493 34.4365 75.9029 34.2873 75.3341 33.9721C74.7654 33.657 74.2971 33.1886 73.9831 32.6206H73.9346V37.6655H71.837V24.11H73.8673V25.8041H73.9059C74.2344 25.2389 74.7106 24.7729 75.2837 24.4558C75.8568 24.1387 76.5054 23.9824 77.1606 24.0035C79.7549 24.0035 81.4649 26.0469 81.4649 29.2039ZM79.3083 29.2039C79.3083 27.1412 78.2389 25.7855 76.6071 25.7855C75.004 25.7855 73.9258 27.1698 73.9258 29.2039C73.9258 31.2561 75.004 32.6305 76.6071 32.6305C78.2389 32.6305 79.3083 31.2847 79.3083 29.2039Z" fill="white"></path>
											<path d="M88.9003 30.4035C89.0558 31.7889 90.4064 32.6985 92.252 32.6985C94.0205 32.6985 95.2928 31.7888 95.2928 30.5397C95.2928 29.4553 94.5255 28.8061 92.7085 28.3611L90.8915 27.9244C88.3171 27.3048 87.1219 26.1051 87.1219 24.1583C87.1219 21.7479 89.23 20.0923 92.2233 20.0923C95.1858 20.0923 97.2167 21.7479 97.2851 24.1583H95.1671C95.0403 22.7642 93.8838 21.9226 92.1936 21.9226C90.5034 21.9226 89.3469 22.7741 89.3469 24.0133C89.3469 25.001 90.0856 25.5822 91.8926 26.0271L93.4372 26.405C96.3137 27.0829 97.5089 28.2348 97.5089 30.2782C97.5089 32.8919 95.4196 34.5288 92.0966 34.5288C88.9874 34.5288 86.8882 32.9303 86.7526 30.4035L88.9003 30.4035Z" fill="white"></path>
											<path d="M102.038 21.6996V24.11H103.982V25.7656H102.038V31.3813C102.038 32.2536 102.427 32.6601 103.282 32.6601C103.513 32.6561 103.743 32.6399 103.972 32.6117V34.2575C103.588 34.329 103.197 34.3614 102.807 34.3542C100.737 34.3542 99.9301 33.5796 99.9301 31.6043V25.7656H98.4438V24.11H99.9301V21.6996H102.038Z" fill="white"></path>
											<path d="M105.106 29.2038C105.106 25.9985 107.001 23.9847 109.954 23.9847C112.918 23.9847 114.803 25.9985 114.803 29.2038C114.803 32.4173 112.928 34.4223 109.954 34.4223C106.982 34.4223 105.106 32.4173 105.106 29.2038ZM112.665 29.2038C112.665 27.0049 111.654 25.7074 109.954 25.7074C108.254 25.7074 107.244 27.0148 107.244 29.2038C107.244 31.4109 108.254 32.6986 109.954 32.6986C111.654 32.6986 112.665 31.4109 112.665 29.2038H112.665Z" fill="white"></path>
											<path d="M116.533 24.1099H118.534V25.8436H118.583C118.718 25.3021 119.036 24.8236 119.484 24.4885C119.932 24.1534 120.482 23.9821 121.041 24.0034C121.283 24.0025 121.524 24.0287 121.76 24.0814V26.0369C121.455 25.9439 121.137 25.9013 120.818 25.9106C120.513 25.8983 120.209 25.9518 119.927 26.0676C119.645 26.1834 119.391 26.3587 119.183 26.5814C118.976 26.804 118.819 27.0689 118.723 27.3577C118.628 27.6465 118.597 27.9524 118.631 28.2545V34.2959H116.533L116.533 24.1099Z" fill="white"></path>
											<path d="M131.433 31.3044C131.151 33.1534 129.343 34.4223 127.031 34.4223C124.058 34.4223 122.212 32.4371 122.212 29.2521C122.212 26.0568 124.068 23.9847 126.943 23.9847C129.771 23.9847 131.55 25.9205 131.55 29.0093V29.7256H124.33V29.852C124.297 30.2268 124.344 30.6045 124.468 30.9598C124.593 31.3151 124.792 31.64 125.052 31.9129C125.312 32.1857 125.627 32.4003 125.977 32.5424C126.327 32.6845 126.703 32.7508 127.08 32.737C127.576 32.7833 128.073 32.6689 128.499 32.4107C128.924 32.1526 129.254 31.7646 129.44 31.3044L131.433 31.3044ZM124.34 28.2644H129.45C129.469 27.9274 129.418 27.59 129.3 27.2736C129.182 26.9572 128.999 26.6685 128.764 26.4257C128.528 26.1829 128.245 25.9913 127.932 25.8627C127.619 25.7342 127.282 25.6716 126.943 25.6788C126.602 25.6768 126.263 25.7422 125.947 25.8714C125.63 26.0005 125.343 26.1907 125.101 26.4311C124.859 26.6715 124.667 26.9573 124.537 27.272C124.406 27.5866 124.339 27.9239 124.34 28.2644Z" fill="white"></path>
										</g>
										<defs>
											<clipPath id="clip0_1599_9116">
												<rect width="142.826" height="45" fill="white" transform="translate(0.214294)"></rect>
											</clipPath>
										</defs>
									</svg>
								</div>
							</a>
						</li>
						<li class="nav-item mb-2 w-100">
							<a target="_blank" rel="noopener noreferrer" aria-label="Télécharger l'application Android de BazarAfrique sur Google Play" href="https://play.google.com/store/apps/details?id=bazarafrique.app.bazarafriqueapp&amp;utm_source=website_footer">
								<div class="nav-link p-0 fw-normal text-light text-nowrap">
									<svg class="play-store-badge" viewBox="0 0 154 46" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_1599_9434)">
											<path d="M147.54 0.133301H5.6746C2.54061 0.133301 0 2.6517 0 5.7583V39.5083C0 42.6149 2.54061 45.1333 5.6746 45.1333H147.54C150.674 45.1333 153.214 42.6149 153.214 39.5083V5.7583C153.214 2.6517 150.674 0.133301 147.54 0.133301Z" fill="black"></path>
											<path d="M147.54 1.0333C148.804 1.0333 150.016 1.53111 150.91 2.41722C151.804 3.30333 152.306 4.50515 152.306 5.7583V39.5083C152.306 40.7614 151.804 41.9633 150.91 42.8494C150.016 43.7355 148.804 44.2333 147.54 44.2333H5.6746C4.4104 44.2333 3.19798 43.7355 2.30406 42.8494C1.41014 41.9633 0.907937 40.7614 0.907937 39.5083V5.7583C0.907937 4.50515 1.41014 3.30333 2.30406 2.41722C3.19798 1.53111 4.4104 1.0333 5.6746 1.0333H147.54ZM147.54 0.133301H5.6746C4.1696 0.133301 2.72625 0.725933 1.66205 1.78083C0.597858 2.83572 0 4.26646 0 5.7583V39.5083C0 41.0001 0.597858 42.4309 1.66205 43.4858C2.72625 44.5407 4.1696 45.1333 5.6746 45.1333H147.54C149.045 45.1333 150.488 44.5407 151.552 43.4858C152.616 42.4309 153.214 41.0001 153.214 39.5083V5.7583C153.214 4.26646 152.616 2.83572 151.552 1.78083C150.488 0.725933 149.045 0.133301 147.54 0.133301Z" fill="#A6A6A6"></path>
											<path d="M77.3335 24.6021C76.3805 24.6065 75.4502 24.8907 74.66 25.4188C73.8697 25.9468 73.255 26.6951 72.8934 27.5691C72.5318 28.4432 72.4396 29.4038 72.6282 30.3298C72.8169 31.2558 73.2781 32.1056 73.9535 32.772C74.629 33.4385 75.4885 33.8916 76.4235 34.0743C77.3585 34.2569 78.3272 34.1609 79.2072 33.7984C80.0873 33.4359 80.8392 32.823 81.3683 32.0373C81.8973 31.2515 82.1796 30.328 82.1796 29.3833C82.1889 28.751 82.0697 28.1233 81.8291 27.5376C81.5885 26.9519 81.2316 26.4201 80.7794 25.974C80.3272 25.5279 79.7891 25.1765 79.1971 24.9408C78.6051 24.7051 77.9713 24.5899 77.3335 24.6021ZM77.3335 32.2858C76.7474 32.3264 76.1625 32.1914 75.6549 31.8981C75.1473 31.6049 74.7404 31.1671 74.4871 30.6415C74.2339 30.116 74.1459 29.5272 74.2348 28.9515C74.3236 28.3758 74.5851 27.8399 74.9853 27.4135C75.3855 26.9871 75.9058 26.6898 76.4786 26.5604C77.0515 26.431 77.6503 26.4754 78.1974 26.6879C78.7444 26.9004 79.2143 27.271 79.546 27.7517C79.8777 28.2324 80.0559 28.8009 80.0573 29.3833C80.0756 29.7523 80.0191 30.1212 79.8913 30.4683C79.7634 30.8153 79.5668 31.1335 79.3129 31.404C79.0591 31.6745 78.7532 31.8919 78.4132 32.0434C78.0732 32.1948 77.7061 32.2772 77.3335 32.2858ZM66.7674 24.6021C65.8139 24.6043 64.8824 24.8866 64.0907 25.4133C63.299 25.94 62.6826 26.6875 62.3192 27.5614C61.9559 28.4352 61.862 29.3962 62.0494 30.323C62.2368 31.2497 62.6971 32.1006 63.3721 32.7681C64.0471 33.4357 64.9065 33.8899 65.8419 34.0735C66.7772 34.2571 67.7465 34.1617 68.6272 33.7995C69.5079 33.4373 70.2605 32.8245 70.79 32.0385C71.3195 31.2524 71.6021 30.3285 71.6021 29.3833C71.6114 28.751 71.4922 28.1233 71.2516 27.5376C71.0111 26.9519 70.6541 26.4201 70.2019 25.974C69.7498 25.5279 69.2117 25.1765 68.6197 24.9408C68.0277 24.7051 67.3939 24.5899 66.756 24.6021H66.7674ZM66.7674 32.2858C66.181 32.3287 65.5952 32.1957 65.0861 31.9039C64.5771 31.6122 64.1685 31.1753 63.9134 30.6502C63.6584 30.125 63.5688 29.5359 63.6562 28.9596C63.7437 28.3832 64.0041 27.8463 64.4037 27.4187C64.8033 26.9911 65.3234 26.6927 65.8965 26.5623C66.4696 26.4319 67.069 26.4755 67.6167 26.6875C68.1644 26.8994 68.635 27.27 68.9674 27.7508C69.2997 28.2316 69.4782 28.8005 69.4798 29.3833C69.4981 29.7523 69.4417 30.1212 69.3138 30.4683C69.186 30.8153 68.9893 31.1335 68.7355 31.404C68.4816 31.6745 68.1757 31.8919 67.8357 32.0434C67.4958 32.1948 67.1286 32.2772 66.756 32.2858H66.7674ZM54.1811 26.0758V28.1008H59.084C59.0071 29.0546 58.6071 29.9546 57.949 30.6546C57.4585 31.1498 56.8689 31.5378 56.218 31.7936C55.5671 32.0493 54.8694 32.1672 54.1698 32.1396C52.725 32.1396 51.3393 31.5706 50.3177 30.5579C49.2961 29.5452 48.7221 28.1717 48.7221 26.7396C48.7221 25.3074 49.2961 23.9339 50.3177 22.9212C51.3393 21.9085 52.725 21.3396 54.1698 21.3396C55.5519 21.3172 56.8865 21.8391 57.8809 22.7908L59.3223 21.3621C58.651 20.6882 57.85 20.1548 56.9669 19.7934C56.0838 19.4321 55.1365 19.2501 54.1811 19.2583C53.1722 19.2194 52.1657 19.3828 51.2219 19.7387C50.2782 20.0945 49.4167 20.6356 48.6889 21.3294C47.9612 22.0233 47.3823 22.8556 46.9868 23.7765C46.5914 24.6975 46.3875 25.688 46.3875 26.6889C46.3875 27.6898 46.5914 28.6804 46.9868 29.6013C47.3823 30.5223 47.9612 31.3546 48.6889 32.0484C49.4167 32.7423 50.2782 33.2833 51.2219 33.6392C52.1657 33.9951 53.1722 34.1585 54.1811 34.1196C55.1525 34.1631 56.1221 33.9998 57.0246 33.6408C57.927 33.2818 58.7415 32.7354 59.4131 32.0383C60.6021 30.7433 61.237 29.041 61.1836 27.2908C61.1872 26.8644 61.1492 26.4387 61.0701 26.0196L54.1811 26.0758ZM105.604 27.6508C105.308 26.7876 104.755 26.0339 104.017 25.4895C103.279 24.9451 102.392 24.6356 101.473 24.6021C100.852 24.6009 100.238 24.7259 99.6679 24.9694C99.0977 25.2129 98.584 25.5698 98.1586 26.0179C97.7331 26.466 97.4049 26.9959 97.1941 27.5747C96.9834 28.1536 96.8948 28.7691 96.9336 29.3833C96.9198 30.0121 97.034 30.6372 97.2693 31.2212C97.5047 31.8053 97.8564 32.3363 98.3035 32.7826C98.7505 33.2289 99.2837 33.5813 99.8712 33.8187C100.459 34.0561 101.089 34.1738 101.723 34.1646C102.517 34.1688 103.299 33.9778 104 33.6087C104.702 33.2396 105.3 32.7039 105.741 32.0496L104.095 30.9246C103.849 31.3304 103.502 31.6662 103.086 31.8989C102.67 32.1315 102.2 32.2533 101.723 32.2521C101.231 32.2706 100.745 32.1422 100.328 31.8833C99.9115 31.6245 99.5828 31.2473 99.385 30.8008L105.843 28.1571L105.604 27.6508ZM99.0218 29.2483C98.9988 28.9003 99.0461 28.5513 99.1609 28.2217C99.2756 27.892 99.4556 27.5884 99.6902 27.3286C99.9249 27.0688 100.209 26.858 100.527 26.7085C100.845 26.5591 101.19 26.474 101.541 26.4583C101.907 26.4344 102.273 26.5176 102.591 26.6976C102.91 26.8776 103.169 27.1465 103.335 27.4708L99.0218 29.2483ZM93.7785 33.8833H95.9008V19.8208H93.7785V33.8833ZM90.3056 25.6708H90.2262C89.9063 25.3163 89.5145 25.0328 89.0764 24.839C88.6383 24.6451 88.1637 24.5452 87.684 24.5458C86.4437 24.6054 85.2741 25.1358 84.4176 26.027C83.5611 26.9181 83.0834 28.1018 83.0834 29.3327C83.0834 30.5635 83.5611 31.7472 84.4176 32.6384C85.2741 33.5296 86.4437 34.0599 87.684 34.1196C88.1649 34.1276 88.6418 34.031 89.081 33.8366C89.5202 33.6423 89.9111 33.3548 90.2262 32.9946H90.2943V33.6808C90.2943 35.5146 89.3069 36.4933 87.718 36.4933C87.1888 36.481 86.6753 36.3129 86.2428 36.0104C85.8103 35.7079 85.4783 35.2847 85.2893 34.7946L83.4394 35.5596C83.7876 36.3992 84.3809 37.1166 85.1433 37.6197C85.9056 38.1228 86.8022 38.3887 87.718 38.3833C90.2035 38.3833 92.2577 36.9321 92.2577 33.3996V24.8833H90.3056V25.6708ZM87.8769 32.2858C87.1448 32.2219 86.4635 31.8884 85.9671 31.3511C85.4708 30.8139 85.1955 30.1118 85.1955 29.3833C85.1955 28.6548 85.4708 27.9527 85.9671 27.4155C86.4635 26.8782 87.1448 26.5448 87.8769 26.4808C88.2399 26.4993 88.5954 26.5896 88.9227 26.7463C89.2499 26.9031 89.5422 27.1233 89.7823 27.3937C90.0223 27.6642 90.2054 27.9796 90.3206 28.3213C90.4358 28.663 90.4809 29.0241 90.4532 29.3833C90.4841 29.7441 90.4409 30.1073 90.3262 30.4511C90.2115 30.7949 90.0277 31.112 89.7858 31.3833C89.5439 31.6546 89.249 31.8745 88.919 32.0296C88.5889 32.1847 88.2305 32.2719 87.8655 32.2858H87.8769ZM115.546 19.8208H110.473V33.8833H112.595V28.5508H115.558C116.162 28.5939 116.77 28.513 117.342 28.3131C117.914 28.1133 118.438 27.7988 118.882 27.3892C119.326 26.9797 119.68 26.4839 119.922 25.9327C120.164 25.3816 120.289 24.7869 120.289 24.1858C120.289 23.5847 120.164 22.99 119.922 22.4389C119.68 21.8877 119.326 21.3919 118.882 20.9824C118.438 20.5728 117.914 20.2583 117.342 20.0585C116.77 19.8586 116.162 19.7777 115.558 19.8208H115.546ZM115.546 26.5708H112.584V21.7783H115.592C116.237 21.7783 116.856 22.0325 117.313 22.4851C117.77 22.9376 118.026 23.5514 118.026 24.1914C118.026 24.8314 117.77 25.4452 117.313 25.8978C116.856 26.3503 116.237 26.6046 115.592 26.6046L115.546 26.5708ZM128.632 24.5458C127.859 24.5 127.09 24.679 126.419 25.0607C125.747 25.4425 125.203 26.0104 124.853 26.6946L126.737 27.4708C126.922 27.1315 127.204 26.8529 127.546 26.6692C127.889 26.4854 128.278 26.4043 128.666 26.4358C128.935 26.4046 129.208 26.4269 129.469 26.5014C129.73 26.5759 129.973 26.7011 130.184 26.8697C130.395 27.0383 130.571 27.247 130.7 27.4834C130.829 27.7199 130.909 27.9795 130.936 28.2471V28.3933C130.254 28.0356 129.494 27.8501 128.723 27.8533C126.691 27.8533 124.637 28.9783 124.637 31.0146C124.657 31.4487 124.765 31.8745 124.954 32.2667C125.143 32.659 125.409 33.0096 125.737 33.2981C126.065 33.5865 126.448 33.8068 126.863 33.946C127.279 34.0851 127.718 34.1403 128.155 34.1083C128.69 34.1463 129.225 34.0411 129.704 33.8035C130.183 33.566 130.589 33.205 130.879 32.7583H130.947V33.8833H132.99V28.4721C132.99 26.0083 131.106 24.5796 128.689 24.5796L128.632 24.5458ZM128.371 32.2521C127.679 32.2521 126.714 31.9033 126.714 31.0596C126.714 29.9346 127.917 29.5633 128.984 29.5633C129.658 29.5468 130.324 29.71 130.913 30.0358C130.842 30.6449 130.551 31.208 130.095 31.6215C129.638 32.0349 129.046 32.2709 128.428 32.2858L128.371 32.2521ZM140.435 24.8833L138.006 30.9808H137.938L135.419 24.8833H133.149L136.928 33.4108L134.772 38.1471H136.985L142.796 24.8833H140.435ZM121.357 33.8833H123.479V19.8208H121.357V33.8833Z" fill="white"></path>
											<path d="M11.8486 8.61586C11.4787 9.05586 11.292 9.61913 11.3265 10.1909V35.0759C11.292 35.6476 11.4787 36.2109 11.8486 36.6509L11.928 36.7296L25.9897 22.8021V22.4759L11.928 8.53711L11.8486 8.61586Z" fill="url(#paint0_linear_1599_9434)"></path>
											<path d="M30.6429 27.4484L25.9897 22.8021V22.4759L30.6429 17.8184L30.745 17.8746L36.3175 21.0134C37.9064 21.9021 37.9064 23.3646 36.3175 24.2646L30.7677 27.3921L30.6429 27.4484Z" fill="url(#paint1_linear_1599_9434)"></path>
											<path d="M30.7791 27.3808L25.9897 22.6333L11.8486 36.6508C12.1724 36.933 12.5856 37.0942 13.0166 37.1065C13.4476 37.1189 13.8695 36.9815 14.2092 36.7183L30.7904 27.3808" fill="url(#paint2_linear_1599_9434)"></path>
											<path d="M30.779 17.8858L14.1979 8.54829C13.8581 8.28506 13.4363 8.14774 13.0053 8.16006C12.5742 8.17239 12.1611 8.33359 11.8372 8.6158L25.9897 22.6333L30.779 17.8858Z" fill="url(#paint3_linear_1599_9434)"></path>
											<path opacity="0.2" d="M30.6429 27.2795L14.1979 36.5608C13.8702 36.8036 13.4721 36.9349 13.0629 36.9349C12.6538 36.9349 12.2557 36.8036 11.928 36.5608L11.8486 36.6395L11.928 36.7183C12.2549 36.9629 12.6534 37.0952 13.0629 37.0952C13.4725 37.0952 13.8709 36.9629 14.1979 36.7183L30.779 27.3808L30.6429 27.2795Z" fill="black"></path>
											<path opacity="0.12" d="M11.8486 36.4933C11.4787 36.0533 11.292 35.49 11.3265 34.9183V35.0871C11.292 35.6588 11.4787 36.2221 11.8486 36.6621L11.928 36.5833L11.8486 36.4933ZM36.3175 24.0958L30.6429 27.2796L30.745 27.3808L36.3175 24.2533C36.6337 24.1061 36.9051 23.8788 37.1043 23.5943C37.3036 23.3099 37.4237 22.9784 37.4524 22.6333C37.3886 22.9468 37.2531 23.2417 37.0563 23.4952C36.8596 23.7488 36.6068 23.9542 36.3175 24.0958Z" fill="black"></path>
											<path opacity="0.25" d="M14.1979 8.70579L36.3175 21.1708C36.6068 21.3124 36.8596 21.5178 37.0563 21.7713C37.2531 22.0249 37.3885 22.3197 37.4524 22.6333C37.4236 22.2882 37.3036 21.9567 37.1043 21.6723C36.9051 21.3878 36.6336 21.1605 36.3175 21.0133L14.1979 8.54829C12.609 7.65954 11.3152 8.40204 11.3152 10.202V10.3708C11.3492 8.55954 12.6203 7.81704 14.1979 8.70579Z" fill="white"></path>
											<path d="M46.8495 14.7583V8.00833H48.9378C49.3978 7.98774 49.8573 8.05988 50.2884 8.22037C50.7195 8.38087 51.1133 8.62639 51.4459 8.94208C51.762 9.26422 52.0086 9.64683 52.1705 10.0666C52.3325 10.4863 52.4065 10.9343 52.3879 11.3833C52.4065 11.8323 52.3325 12.2804 52.1705 12.7001C52.0086 13.1198 51.762 13.5024 51.4459 13.8246C51.1133 14.1403 50.7195 14.3858 50.2884 14.5463C49.8573 14.7068 49.3978 14.7789 48.9378 14.7583H46.8495ZM47.7234 13.9258H48.9264C49.2683 13.9435 49.6102 13.8928 49.9319 13.7769C50.2536 13.6609 50.5485 13.482 50.799 13.2508C51.0368 13.0028 51.2209 12.7092 51.3399 12.388C51.459 12.0669 51.5105 11.725 51.4913 11.3833C51.5205 11.0431 51.4745 10.7007 51.3566 10.3799C51.2388 10.0591 51.0518 9.76758 50.8088 9.52562C50.5658 9.28366 50.2725 9.09707 49.9494 8.97881C49.6263 8.86055 49.2811 8.81347 48.9378 8.84083H47.6667L47.7234 13.9258ZM53.6136 14.7583V8.00833H54.4762V14.7583H53.6136ZM57.9604 14.9046C57.4375 14.8953 56.9302 14.7264 56.5077 14.4208C56.0377 14.1024 55.7055 13.6206 55.5771 13.0708L56.3715 12.7558C56.4625 13.1189 56.6647 13.445 56.9503 13.6896C57.2232 13.9365 57.5796 14.073 57.949 14.0721C58.298 14.0835 58.641 13.9807 58.9251 13.7796C59.0561 13.6893 59.1622 13.5678 59.2336 13.4263C59.305 13.2847 59.3394 13.1277 59.3336 12.9696C59.3408 12.8033 59.3075 12.6377 59.2363 12.4869C59.1652 12.3361 59.0584 12.2045 58.9251 12.1033C58.5333 11.8418 58.0997 11.6478 57.6426 11.5296C57.134 11.3944 56.6639 11.1441 56.2694 10.7983C56.1184 10.6523 55.9992 10.4771 55.9191 10.2836C55.8391 10.0901 55.7999 9.88242 55.804 9.67333C55.8044 9.43456 55.8563 9.19863 55.9561 8.98133C56.0559 8.76403 56.2014 8.57037 56.3829 8.41333C56.7907 8.04313 57.3282 7.84534 57.8809 7.86208C58.3858 7.8394 58.8829 7.99043 59.2883 8.28958C59.612 8.5238 59.8572 8.84915 59.9919 9.22333L59.1975 9.54958C59.1279 9.31023 58.9802 9.10052 58.7775 8.95333C58.5246 8.77297 58.2209 8.67593 57.9093 8.67593C57.5977 8.67593 57.294 8.77297 57.0411 8.95333C56.9302 9.03296 56.8403 9.13794 56.779 9.25937C56.7178 9.3808 56.687 9.51509 56.6893 9.65083C56.6888 9.77595 56.7184 9.89938 56.7756 10.0109C56.8329 10.1224 56.9161 10.2188 57.0184 10.2921C57.3111 10.4992 57.6374 10.6552 57.9831 10.7533C58.2686 10.8431 58.549 10.9482 58.8229 11.0683C59.0634 11.1796 59.2916 11.3153 59.5039 11.4733C59.7284 11.6319 59.9082 11.845 60.0259 12.0921C60.1505 12.3639 60.2125 12.6598 60.2075 12.9583C60.2131 13.263 60.143 13.5644 60.0032 13.8358C59.8759 14.0804 59.6886 14.2893 59.4585 14.4433C59.2354 14.5951 58.9906 14.7127 58.7321 14.7921C58.4817 14.8661 58.2218 14.904 57.9604 14.9046ZM62.4206 14.7583H61.5467V8.00833H63.8166C64.3719 8.00123 64.9085 8.20675 65.3147 8.58208C65.5155 8.76541 65.6758 8.98803 65.7855 9.23588C65.8952 9.48374 65.9518 9.75144 65.9518 10.0221C65.9518 10.2927 65.8952 10.5604 65.7855 10.8083C65.6758 11.0561 65.5155 11.2788 65.3147 11.4621C64.9091 11.8384 64.3721 12.0441 63.8166 12.0358H62.4206V14.7583ZM62.4206 11.1921H63.8847C64.0506 11.1982 64.2159 11.1681 64.3689 11.1039C64.5219 11.0398 64.6588 10.9431 64.7699 10.8208C64.8798 10.7159 64.9671 10.5901 65.0268 10.4509C65.0865 10.3117 65.1172 10.1621 65.1172 10.0108C65.1172 9.85961 65.0865 9.70994 65.0268 9.57077C64.9671 9.43159 64.8798 9.30577 64.7699 9.20083C64.6588 9.07851 64.5219 8.98187 64.3689 8.91772C64.2159 8.85357 64.0506 8.82348 63.8847 8.82958H62.4206V11.1921ZM72.6349 13.8808C71.9714 14.5348 71.0738 14.902 70.1381 14.902C69.2024 14.902 68.3047 14.5348 67.6413 13.8808C66.9964 13.2042 66.6371 12.3086 66.6371 11.3777C66.6371 10.4468 66.9964 9.55124 67.6413 8.87458C67.9683 8.54804 68.3573 8.28888 68.7858 8.11202C69.2143 7.93517 69.6739 7.84412 70.1381 7.84412C70.6023 7.84412 71.0619 7.93517 71.4904 8.11202C71.9189 8.28888 72.3079 8.54804 72.6349 8.87458C73.2824 9.54995 73.6434 10.446 73.6434 11.3777C73.6434 12.3094 73.2824 13.2055 72.6349 13.8808ZM68.2882 13.3183C68.7795 13.8033 69.4447 14.0756 70.1381 14.0756C70.8315 14.0756 71.4967 13.8033 71.988 13.3183C72.4729 12.7885 72.7415 12.0987 72.7415 11.3833C72.7415 10.668 72.4729 9.97818 71.988 9.44833C71.4967 8.96332 70.8315 8.69101 70.1381 8.69101C69.4447 8.69101 68.7795 8.96332 68.2882 9.44833C67.8033 9.97818 67.5347 10.668 67.5347 11.3833C67.5347 12.0987 67.8033 12.7885 68.2882 13.3183ZM74.848 14.7583V8.00833H75.9148L79.2288 13.2621V8.00833H80.1027V14.7583H79.1948L75.7333 9.25708V14.7583H74.848ZM81.6575 14.7583V8.00833H82.5314V14.7583H81.6575ZM84.0863 14.7583V8.00833H86.549C87.0604 7.99876 87.556 8.18398 87.9336 8.52583C88.1233 8.68897 88.2744 8.89143 88.3764 9.11888C88.4784 9.34633 88.5287 9.59322 88.5238 9.84208C88.5291 10.142 88.442 10.4363 88.2741 10.6858C88.1075 10.9282 87.8755 11.1192 87.6045 11.2371C87.9337 11.3451 88.2224 11.549 88.433 11.8221C88.6512 12.0977 88.7674 12.4392 88.7621 12.7896C88.7679 13.0489 88.716 13.3064 88.6101 13.5436C88.5042 13.7808 88.3468 13.992 88.1493 14.1621C87.7541 14.5234 87.2342 14.7207 86.6966 14.7133L84.0863 14.7583ZM84.9602 10.8996H86.549C86.6974 10.9057 86.8454 10.8797 86.9826 10.8234C87.1198 10.767 87.243 10.6817 87.3435 10.5733C87.444 10.483 87.5251 10.3736 87.582 10.2515C87.6388 10.1294 87.6703 9.99727 87.6746 9.86288C87.6788 9.72849 87.6557 9.59464 87.6066 9.46929C87.5575 9.34395 87.4835 9.22969 87.3889 9.13333C87.294 9.02699 87.1768 8.94263 87.0453 8.88625C86.9139 8.82987 86.7716 8.80284 86.6285 8.80708H84.9602V10.8996ZM84.9602 13.9258H86.7193C86.873 13.9309 87.0259 13.9023 87.1672 13.842C87.3085 13.7818 87.4345 13.6913 87.5364 13.5771C87.7365 13.3713 87.8501 13.0978 87.8542 12.8121C87.8542 12.5137 87.7346 12.2276 87.5218 12.0166C87.3089 11.8056 87.0203 11.6871 86.7193 11.6871H84.9602V13.9258ZM89.9311 14.7583V8.00833H90.7936V13.9258H93.7444V14.7583H89.9311ZM98.8289 8.84083H95.7305V10.9783H98.5224V11.7883H95.7305V13.9258H98.8289V14.7583H94.8567V8.00833H98.8289V8.84083ZM104.118 14.9046C103.595 14.8953 103.087 14.7264 102.665 14.4208C102.195 14.1024 101.863 13.6206 101.734 13.0708L102.529 12.7558C102.62 13.1189 102.822 13.445 103.108 13.6896C103.38 13.9365 103.737 14.073 104.106 14.0721C104.455 14.0835 104.798 13.9807 105.082 13.7796C105.213 13.6893 105.319 13.5678 105.391 13.4263C105.462 13.2847 105.497 13.1277 105.491 12.9696C105.498 12.8033 105.465 12.6377 105.394 12.4869C105.322 12.3361 105.216 12.2045 105.082 12.1033C104.691 11.8418 104.257 11.6478 103.8 11.5296C103.291 11.3944 102.821 11.1441 102.427 10.7983C102.276 10.6523 102.156 10.4771 102.076 10.2836C101.996 10.0901 101.957 9.88242 101.961 9.67333C101.962 9.43456 102.013 9.19863 102.113 8.98133C102.213 8.76403 102.359 8.57037 102.54 8.41333C102.953 8.04444 103.494 7.85056 104.05 7.87333C104.554 7.85065 105.052 8.00168 105.457 8.30083C105.781 8.53505 106.026 8.8604 106.16 9.23458L105.366 9.56083C105.296 9.32148 105.149 9.11177 104.946 8.96458C104.693 8.78422 104.389 8.68718 104.078 8.68718C103.766 8.68718 103.463 8.78422 103.21 8.96458C103.099 9.04421 103.009 9.14919 102.948 9.27062C102.886 9.39205 102.856 9.52634 102.858 9.66208C102.857 9.7872 102.887 9.91063 102.944 10.0221C103.001 10.1337 103.085 10.23 103.187 10.3033C103.48 10.5105 103.806 10.6665 104.152 10.7646C104.437 10.8543 104.718 10.9595 104.992 11.0796C105.232 11.1909 105.46 11.3266 105.672 11.4846C105.897 11.6432 106.077 11.8562 106.195 12.1033C106.319 12.3752 106.381 12.6711 106.376 12.9696C106.382 13.2743 106.312 13.5756 106.172 13.8471C106.044 14.0916 105.857 14.3005 105.627 14.4546C105.404 14.6064 105.159 14.724 104.901 14.8033C104.646 14.8746 104.382 14.9087 104.118 14.9046ZM110.019 14.9046C109.68 14.9182 109.341 14.86 109.026 14.7339C108.711 14.6078 108.427 14.4167 108.192 14.1733C107.711 13.6491 107.458 12.9577 107.488 12.2496V8.00833H108.362V12.2833C108.34 12.7507 108.489 13.2103 108.782 13.5771C109.101 13.9001 109.535 14.0868 109.991 14.0973C110.447 14.1078 110.888 13.9413 111.222 13.6333C111.515 13.2666 111.665 12.807 111.642 12.3396V8.00833H112.516V12.2496C112.548 12.9539 112.304 13.6431 111.835 14.1733C111.602 14.4159 111.32 14.6065 111.006 14.7326C110.693 14.8586 110.357 14.9173 110.019 14.9046ZM113.946 14.7583V8.00833H116.216C116.771 8.00123 117.308 8.20675 117.714 8.58208C118.087 8.92197 118.313 9.39149 118.344 9.89254C118.376 10.3936 118.211 10.8874 117.884 11.2708C117.595 11.62 117.195 11.8618 116.749 11.9571L118.656 14.7583H117.623L115.762 12.0246H114.786V14.7583H113.946ZM114.82 11.2146H116.227C116.559 11.2213 116.88 11.1003 117.124 10.8771C117.244 10.7694 117.34 10.6373 117.405 10.4898C117.469 10.3424 117.501 10.1828 117.498 10.0221C117.496 9.72054 117.378 9.43112 117.169 9.21208C117.058 9.08976 116.921 8.99312 116.768 8.92897C116.615 8.86482 116.45 8.83473 116.284 8.84083H114.82V11.2146Z" fill="white" stroke="white" stroke-width="0.2" stroke-miterlimit="10"></path>
										</g>
										<defs>
											<linearGradient id="paint0_linear_1599_9434" x1="24.7413" y1="9.93211" x2="5.8645" y2="28.9753" gradientUnits="userSpaceOnUse">
												<stop stop-color="#00A0FF"></stop>
												<stop offset="0.01" stop-color="#00A1FF"></stop>
												<stop offset="0.26" stop-color="#00BEFF"></stop>
												<stop offset="0.51" stop-color="#00D2FF"></stop>
												<stop offset="0.76" stop-color="#00DFFF"></stop>
												<stop offset="1" stop-color="#00E3FF"></stop>
											</linearGradient>
											<linearGradient id="paint1_linear_1599_9434" x1="38.3944" y1="22.6334" x2="10.9406" y2="22.6334" gradientUnits="userSpaceOnUse">
												<stop stop-color="#FFE000"></stop>
												<stop offset="0.41" stop-color="#FFBD00"></stop>
												<stop offset="0.78" stop-color="#FFA500"></stop>
												<stop offset="1" stop-color="#FF9C00"></stop>
											</linearGradient>
											<linearGradient id="paint2_linear_1599_9434" x1="28.1801" y1="25.2208" x2="2.57598" y2="51.0394" gradientUnits="userSpaceOnUse">
												<stop stop-color="#FF3A44"></stop>
												<stop offset="1" stop-color="#C31162"></stop>
											</linearGradient>
											<linearGradient id="paint3_linear_1599_9434" x1="8.28492" y1="0.335792" x2="19.7145" y2="11.8661" gradientUnits="userSpaceOnUse">
												<stop stop-color="#32A071"></stop>
												<stop offset="0.07" stop-color="#2DA771"></stop>
												<stop offset="0.48" stop-color="#15CF74"></stop>
												<stop offset="0.8" stop-color="#06E775"></stop>
												<stop offset="1" stop-color="#00F076"></stop>
											</linearGradient>
											<clipPath id="clip0_1599_9434">
												<rect width="153.214" height="45" fill="white" transform="translate(0 0.133301)"></rect>
											</clipPath>
										</defs>
									</svg>
								</div>
							</a>
						</li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-4">
					<h3 class="fs-base text-light text-uppercase">Informations</h3>
					<ul class="list-unstyled fs-sm">
						<li><a href="/about" class="nav-link-light">A propos de nous</a></li>
						<li><a href="/terms" class="nav-link-light">Conditions d'utilisation</a></li>
						<li><a href="/privacy" class="nav-link-light">Politique de confidentialité</a></li>
						<li><a href="mailto:contact@bazarafrique.com" class="nav-link-light">Nous contacter</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4">
					<h3 class="fs-base text-light text-uppercase">Ressources</h3>
					<ul class="list-unstyled fs-sm">
						<li><a href="https://blog.bazarafrique.com" target="_blank" class="nav-link-light">Blog</a></li>
						<li><a href="https://help.bazarafrique.com/fr/collections/1673845679-questions-frequentes" target="_blank" class="nav-link-light">Questions-réponses</a></li>
						<li><a href="https://help.bazarafrique.com/fr/articles/1673802882-comment-deposer-une-annonce-sur-bazarafrique" target="_blank" class="nav-link-light">Comment déposer une annonce ?</a></li>
						<li><a href="https://help.bazarafrique.com/fr/articles/1673824480-comment-contacter-un-vendeur" target="_blank" class="nav-link-light">Comment contacter un vendeur ?</a></li>
						<li><a href="https://help.bazarafrique.com/fr" target="_blank" class="nav-link-light">Centre d'aide</a></li>
					</ul>
				</div>
				<div class="col-lg-3 offset-lg-1">
					<h3 class="h5 text-light text-uppercase">Newsletter</h3>
					<p class="fs-sm mb-4 opacity-60">
						Restez informer des actualités et des meilleures annonces en Afrique en vous inscrivant à la newsletter !
					</p>
					<form class="form-group form-group-light">
						<div class="input-group input-group-sm">
							<input type="email" placeholder="Votre email" class="form-control">
						</div>
						<button type="button" class="btn btn-primary btn-sm">S'abonner</button>
					</form>
				</div>
			</div>
		</div>
		<div class="py-4 border-top border-light">
			<div class="container">
				<div class="footer-countries-container py-3">
					<div class="row g-4 justify-content-center">
						<div class="col-auto">
							<a href="https://ne.bazarafrique.com" class="icon-box card card-light flex-row align-items-center card-hover rounded-pill px-3">
								<div class="icon-box-media">
									<img src="https://media.bazarafrique.com/static/flags/ne.svg" data-sizes="auto" data-src="https://media.bazarafrique.com/static/flags/ne.svg" alt="Niger" title="Niger" width="27" height="27" class="bg-gray-light border border-grey-light lazyautosizes lazyloaded" style="background-position:center;background-repeat:no-repeat;" sizes="27px">
								</div>
								<span class="icon-box-title text-light small m-0">Niger</span>
							</a>
						</div>
						<div class="col-auto">
							<a href="https://ga.bazarafrique.com" class="icon-box card card-light flex-row align-items-center card-hover rounded-pill px-3">
								<div class="icon-box-media">
									<img src="https://media.bazarafrique.com/static/flags/ga.svg" data-sizes="auto" data-src="https://media.bazarafrique.com/static/flags/ga.svg" alt="Gabon" title="Gabon" width="27" height="27" class="bg-gray-light border border-grey-light lazyautosizes lazyloaded" style="background-position:center;background-repeat:no-repeat;" sizes="27px">
								</div>
								<span class="icon-box-title text-light small m-0">Gabon</span>
							</a>
						</div>
						<div class="col-auto">
							<a href="https://cg.bazarafrique.com" class="icon-box card card-light flex-row align-items-center card-hover rounded-pill px-3">
								<div class="icon-box-media">
									<img src="https://media.bazarafrique.com/static/flags/cg.svg" data-sizes="auto" data-src="https://media.bazarafrique.com/static/flags/cg.svg" alt="Congo-Brazzaville" title="Congo-Brazzaville" width="27" height="27" class="bg-gray-light border border-grey-light lazyautosizes lazyloaded" style="background-position:center;background-repeat:no-repeat;" sizes="27px">
								</div>
								<span class="icon-box-title text-light small m-0">Congo-Brazzaville</span>
							</a>
						</div>
						<div class="col-auto">
							<a href="https://cm.bazarafrique.com" class="icon-box card card-light flex-row align-items-center card-hover rounded-pill px-3">
								<div class="icon-box-media">
									<img src="https://media.bazarafrique.com/static/flags/cm.svg" data-sizes="auto" data-src="https://media.bazarafrique.com/static/flags/cm.svg" alt="Cameroun" title="Cameroun" width="27" height="27" class="bg-gray-light border border-grey-light lazyautosizes lazyloaded" style="background-position:center;background-repeat:no-repeat;" sizes="27px">
								</div>
								<span class="icon-box-title text-light small m-0">Cameroun</span>
							</a>
						</div>
						<div class="col-auto">
							<a href="https://cf.bazarafrique.com" class="icon-box card card-light flex-row align-items-center card-hover rounded-pill px-3">
								<div class="icon-box-media">
									<img src="https://media.bazarafrique.com/static/flags/cf.svg" data-sizes="auto" data-src="https://media.bazarafrique.com/static/flags/cf.svg" alt="République centrafricaine" title="République centrafricaine" width="27" height="27" class="bg-gray-light border border-grey-light lazyautosizes lazyloaded" style="background-position:center;background-repeat:no-repeat;" sizes="27px">
								</div>
								<span class="icon-box-title text-light small m-0">République centrafricaine</span>
							</a>
						</div>
						<div class="col-auto">
							<a href="https://bf.bazarafrique.com" class="icon-box card card-light flex-row align-items-center card-hover rounded-pill px-3">
								<div class="icon-box-media">
									<img src="https://media.bazarafrique.com/static/flags/bf.svg" data-sizes="auto" data-src="https://media.bazarafrique.com/static/flags/bf.svg" alt="Burkina Faso" title="Burkina Faso" width="27" height="27" class="bg-gray-light border border-grey-light lazyautosizes lazyloaded" style="background-position:center;background-repeat:no-repeat;" sizes="27px">
								</div>
								<span class="icon-box-title text-light small m-0">Burkina Faso</span>
							</a>
						</div>
						<div class="col-auto">
							<a href="https://bj.bazarafrique.com" class="icon-box card card-light flex-row align-items-center card-hover rounded-pill px-3">
								<div class="icon-box-media">
									<img src="https://media.bazarafrique.com/static/flags/bj.svg" data-sizes="auto" data-src="https://media.bazarafrique.com/static/flags/bj.svg" alt="Bénin" title="Bénin" width="27" height="27" class="bg-gray-light border border-grey-light lazyautosizes lazyloaded" style="background-position:center;background-repeat:no-repeat;" sizes="27px">
								</div>
								<span class="icon-box-title text-light small m-0">Bénin</span>
							</a>
						</div>
						<div class="col-auto">
							<a href="https://ci.bazarafrique.com" class="icon-box card card-light flex-row align-items-center card-hover rounded-pill px-3">
								<div class="icon-box-media">
									<img src="https://media.bazarafrique.com/static/flags/ci.svg" data-sizes="auto" data-src="https://media.bazarafrique.com/static/flags/ci.svg" alt="Côte d’Ivoire" title="Côte d’Ivoire" width="27" height="27" class="bg-gray-light border border-grey-light lazyautosizes ls-is-cached lazyloaded" style="background-position:center;background-repeat:no-repeat;" sizes="27px">
								</div>
								<span class="icon-box-title text-light small m-0">Côte d’Ivoire</span>
							</a>
						</div>
						<div class="col-auto">
							<a href="https://gn.bazarafrique.com" class="icon-box card card-light flex-row align-items-center card-hover rounded-pill px-3">
								<div class="icon-box-media">
									<img src="https://media.bazarafrique.com/static/flags/gn.svg" data-sizes="auto" data-src="https://media.bazarafrique.com/static/flags/gn.svg" alt="Guinée" title="Guinée" width="27" height="27" class="bg-gray-light border border-grey-light lazyautosizes lazyloaded" style="background-position:center;background-repeat:no-repeat;" sizes="27px">
								</div>
								<span class="icon-box-title text-light small m-0">Guinée</span>
							</a>
						</div>
						<div class="col-auto">
							<a href="https://mg.bazarafrique.com" class="icon-box card card-light flex-row align-items-center card-hover rounded-pill px-3">
								<div class="icon-box-media">
									<img src="https://media.bazarafrique.com/static/flags/mg.svg" data-sizes="auto" data-src="https://media.bazarafrique.com/static/flags/mg.svg" alt="Madagascar" title="Madagascar" width="27" height="27" class="bg-gray-light border border-grey-light lazyautosizes lazyloaded" style="background-position:center;background-repeat:no-repeat;" sizes="27px">
								</div>
								<span class="icon-box-title text-light small m-0">Madagascar</span>
							</a>
						</div>
						<div class="col-auto">
							<a href="https://sn.bazarafrique.com" class="icon-box card card-light flex-row align-items-center card-hover rounded-pill px-3">
								<div class="icon-box-media">
									<img src="https://media.bazarafrique.com/static/flags/sn.svg" data-sizes="auto" data-src="https://media.bazarafrique.com/static/flags/sn.svg" alt="Sénégal" title="Sénégal" width="27" height="27" class="bg-gray-light border border-grey-light lazyautosizes lazyloaded" style="background-position:center;background-repeat:no-repeat;" sizes="27px">
								</div>
								<span class="icon-box-title text-light small m-0">Sénégal</span>
							</a>
						</div>
						<div class="col-auto">
							<a href="https://tg.bazarafrique.com" class="icon-box card card-light flex-row align-items-center card-hover rounded-pill px-3">
								<div class="icon-box-media">
									<img src="https://media.bazarafrique.com/static/flags/tg.svg" data-sizes="auto" data-src="https://media.bazarafrique.com/static/flags/tg.svg" alt="Togo" title="Togo" width="27" height="27" class="bg-gray-light border border-grey-light lazyautosizes lazyloaded" style="background-position:center;background-repeat:no-repeat;" sizes="27px">
								</div>
								<span class="icon-box-title text-light small m-0">Togo</span>
							</a>
						</div>
						<div class="col-auto">
							<a href="https://ml.bazarafrique.com" class="icon-box card card-light flex-row align-items-center card-hover rounded-pill px-3">
								<div class="icon-box-media">
									<img src="https://media.bazarafrique.com/static/flags/ml.svg" data-sizes="auto" data-src="https://media.bazarafrique.com/static/flags/ml.svg" alt="Mali" title="Mali" width="27" height="27" class="bg-gray-light border border-grey-light lazyautosizes lazyloaded" style="background-position:center;background-repeat:no-repeat;" sizes="27px">
								</div>
								<span class="icon-box-title text-light small m-0">Mali</span>
							</a>
						</div>
						<div class="col-auto">
							<a href="https://td.bazarafrique.com" class="icon-box card card-light flex-row align-items-center card-hover rounded-pill px-3">
								<div class="icon-box-media">
									<img src="https://media.bazarafrique.com/static/flags/td.svg" data-sizes="auto" data-src="https://media.bazarafrique.com/static/flags/td.svg" alt="Tchad" title="Tchad" width="27" height="27" class="bg-gray-light border border-grey-light lazyautosizes lazyloaded" style="background-position:center;background-repeat:no-repeat;" sizes="27px">
								</div>
								<span class="icon-box-title text-light small m-0">Tchad</span>
							</a>
						</div>
						<div class="col-auto">
							<a href="https://za.bazarafrique.com" class="icon-box card card-light flex-row align-items-center card-hover rounded-pill px-3">
								<div class="icon-box-media">
									<img src="https://media.bazarafrique.com/static/flags/za.svg" data-sizes="auto" data-src="https://media.bazarafrique.com/static/flags/za.svg" alt="Afrique du Sud" title="Afrique du Sud" width="27" height="27" class="bg-gray-light border border-grey-light lazyautosizes lazyloaded" style="background-position:center;background-repeat:no-repeat;" sizes="27px">
								</div>
								<span class="icon-box-title text-light small m-0">Afrique du Sud</span>
							</a>
						</div>
						<div class="col-auto">
							<a href="https://tn.bazarafrique.com" class="icon-box card card-light flex-row align-items-center card-hover rounded-pill px-3">
								<div class="icon-box-media">
									<img src="https://media.bazarafrique.com/static/flags/tn.svg" data-sizes="auto" data-src="https://media.bazarafrique.com/static/flags/tn.svg" alt="Tunisie" title="Tunisie" width="27" height="27" class="bg-gray-light border border-grey-light lazyautosizes lazyloaded" style="background-position:center;background-repeat:no-repeat;" sizes="27px">
								</div>
								<span class="icon-box-title text-light small m-0">Tunisie</span>
							</a>
						</div>
						<div class="col-auto">
							<a href="https://ma.bazarafrique.com" class="icon-box card card-light flex-row align-items-center card-hover rounded-pill px-3">
								<div class="icon-box-media">
									<img src="https://media.bazarafrique.com/static/flags/ma.svg" data-sizes="auto" data-src="https://media.bazarafrique.com/static/flags/ma.svg" alt="Maroc" title="Maroc" width="27" height="27" class="bg-gray-light border border-grey-light lazyautosizes lazyloaded" style="background-position:center;background-repeat:no-repeat;" sizes="27px">
								</div>
								<span class="icon-box-title text-light small m-0">Maroc</span>
							</a>
						</div>
						<div class="col-auto">
							<a href="https://sd.bazarafrique.com" class="icon-box card card-light flex-row align-items-center card-hover rounded-pill px-3">
								<div class="icon-box-media">
									<img src="https://media.bazarafrique.com/static/flags/sd.svg" data-sizes="auto" data-src="https://media.bazarafrique.com/static/flags/sd.svg" alt="Soudan" title="Soudan" width="27" height="27" class="bg-gray-light border border-grey-light lazyautosizes lazyloaded" style="background-position:center;background-repeat:no-repeat;" sizes="27px">
								</div>
								<span class="icon-box-title text-light small m-0">Soudan</span>
							</a>
						</div>
						<div class="col-auto">
							<a href="https://dz.bazarafrique.com" class="icon-box card card-light flex-row align-items-center card-hover rounded-pill px-3">
								<div class="icon-box-media">
									<img src="https://media.bazarafrique.com/static/flags/dz.svg" data-sizes="auto" data-src="https://media.bazarafrique.com/static/flags/dz.svg" alt="Algérie" title="Algérie" width="27" height="27" class="bg-gray-light border border-grey-light lazyautosizes lazyloaded" style="background-position:center;background-repeat:no-repeat;" sizes="27px">
								</div>
								<span class="icon-box-title text-light small m-0">Algérie</span>
							</a>
						</div>
						<div class="col-auto">
							<a href="https://gh.bazarafrique.com" class="icon-box card card-light flex-row align-items-center card-hover rounded-pill px-3">
								<div class="icon-box-media">
									<img src="https://media.bazarafrique.com/static/flags/gh.svg" data-sizes="auto" data-src="https://media.bazarafrique.com/static/flags/gh.svg" alt="Ghana" title="Ghana" width="27" height="27" class="bg-gray-light border border-grey-light lazyautosizes lazyloaded" style="background-position:center;background-repeat:no-repeat;" sizes="27px">
								</div>
								<span class="icon-box-title text-light small m-0">Ghana</span>
							</a>
						</div>
						<div class="col-auto">
							<a href="https://cd.bazarafrique.com" class="icon-box card card-light flex-row align-items-center card-hover rounded-pill px-3">
								<div class="icon-box-media">
									<img src="https://media.bazarafrique.com/static/flags/cd.svg" data-sizes="auto" data-src="https://media.bazarafrique.com/static/flags/cd.svg" alt="Congo-Kinshasa" title="Congo-Kinshasa" width="27" height="27" class="bg-gray-light border border-grey-light lazyautosizes lazyloaded" style="background-position:center;background-repeat:no-repeat;" sizes="27px">
								</div>
								<span class="icon-box-title text-light small m-0">Congo-Kinshasa</span>
							</a>
						</div>
						<div class="col-auto">
							<a href="https://dj.bazarafrique.com" class="icon-box card card-light flex-row align-items-center card-hover rounded-pill px-3">
								<div class="icon-box-media">
									<img src="https://media.bazarafrique.com/static/flags/dj.svg" data-sizes="auto" data-src="https://media.bazarafrique.com/static/flags/dj.svg" alt="Djibouti" title="Djibouti" width="27" height="27" class="bg-gray-light border border-grey-light lazyautosizes lazyloaded" style="background-position:center;background-repeat:no-repeat;" sizes="27px">
								</div>
								<span class="icon-box-title text-light small m-0">Djibouti</span>
							</a>
						</div>
						<div class="col-auto">
							<a href="https://ng.bazarafrique.com" class="icon-box card card-light flex-row align-items-center card-hover rounded-pill px-3">
								<div class="icon-box-media">
									<img src="https://media.bazarafrique.com/static/flags/ng.svg" data-sizes="auto" data-src="https://media.bazarafrique.com/static/flags/ng.svg" alt="Nigeria" title="Nigeria" width="27" height="27" class="bg-gray-light border border-grey-light lazyautosizes lazyloaded" style="background-position:center;background-repeat:no-repeat;" sizes="27px">
								</div>
								<span class="icon-box-title text-light small m-0">Nigeria</span>
							</a>
						</div>
						<div class="col-auto">
							<a href="https://mu.bazarafrique.com" class="icon-box card card-light flex-row align-items-center card-hover rounded-pill px-3">
								<div class="icon-box-media">
									<img src="https://media.bazarafrique.com/static/flags/mu.svg" data-sizes="auto" data-src="https://media.bazarafrique.com/static/flags/mu.svg" alt="Maurice" title="Maurice" width="27" height="27" class="bg-gray-light border border-grey-light lazyautosizes lazyloaded" style="background-position:center;background-repeat:no-repeat;" sizes="27px">
								</div>
								<span class="icon-box-title text-light small m-0">Maurice</span>
							</a>
						</div>
						<div class="col-auto">
							<a href="https://rw.bazarafrique.com" class="icon-box card card-light flex-row align-items-center card-hover rounded-pill px-3">
								<div class="icon-box-media">
									<img src="https://media.bazarafrique.com/static/flags/rw.svg" data-sizes="auto" data-src="https://media.bazarafrique.com/static/flags/rw.svg" alt="Rwanda" title="Rwanda" width="27" height="27" class="bg-gray-light border border-grey-light lazyautosizes lazyloaded" style="background-position:center;background-repeat:no-repeat;" sizes="27px">
								</div>
								<span class="icon-box-title text-light small m-0">Rwanda</span>
							</a>
						</div>
						<div class="col-auto">
							<a href="https://bi.bazarafrique.com" class="icon-box card card-light flex-row align-items-center card-hover rounded-pill px-3">
								<div class="icon-box-media">
									<img src="https://media.bazarafrique.com/static/flags/bi.svg" data-sizes="auto" data-src="https://media.bazarafrique.com/static/flags/bi.svg" alt="Burundi" title="Burundi" width="27" height="27" class="bg-gray-light border border-grey-light lazyautosizes lazyloaded" style="background-position:center;background-repeat:no-repeat;" sizes="27px">
								</div>
								<span class="icon-box-title text-light small m-0">Burundi</span>
							</a>
						</div>
						<div class="col-auto">
							<a href="https://gq.bazarafrique.com" class="icon-box card card-light flex-row align-items-center card-hover rounded-pill px-3">
								<div class="icon-box-media">
									<img src="https://media.bazarafrique.com/static/flags/gq.svg" data-sizes="auto" data-src="https://media.bazarafrique.com/static/flags/gq.svg" alt="Guinée équatoriale" title="Guinée équatoriale" width="27" height="27" class="bg-gray-light border border-grey-light lazyautosizes lazyloaded" style="background-position:center;background-repeat:no-repeat;" sizes="27px">
								</div>
								<span class="icon-box-title text-light small m-0">Guinée équatoriale</span>
							</a>
						</div>
						<div class="col-auto">
							<a href="https://gm.bazarafrique.com" class="icon-box card card-light flex-row align-items-center card-hover rounded-pill px-3">
								<div class="icon-box-media">
									<img src="https://media.bazarafrique.com/static/flags/gm.svg" data-sizes="auto" data-src="https://media.bazarafrique.com/static/flags/gm.svg" alt="Gambie" title="Gambie" width="27" height="27" class="bg-gray-light border border-grey-light lazyautosizes lazyloaded" style="background-position:center;background-repeat:no-repeat;" sizes="27px">
								</div>
								<span class="icon-box-title text-light small m-0">Gambie</span>
							</a>
						</div>
						<div class="col-auto">
							<a href="https://eg.bazarafrique.com" class="icon-box card card-light flex-row align-items-center card-hover rounded-pill px-3">
								<div class="icon-box-media">
									<img src="https://media.bazarafrique.com/static/flags/eg.svg" data-sizes="auto" data-src="https://media.bazarafrique.com/static/flags/eg.svg" alt="Égypte" title="Égypte" width="27" height="27" class="bg-gray-light border border-grey-light lazyautosizes lazyloaded" style="background-position:center;background-repeat:no-repeat;" sizes="27px">
								</div>
								<span class="icon-box-title text-light small m-0">Égypte</span>
							</a>
						</div>
						<div class="col-auto">
							<a href="https://et.bazarafrique.com" class="icon-box card card-light flex-row align-items-center card-hover rounded-pill px-3">
								<div class="icon-box-media">
									<img src="https://media.bazarafrique.com/static/flags/et.svg" data-sizes="auto" data-src="https://media.bazarafrique.com/static/flags/et.svg" alt="Éthiopie" title="Éthiopie" width="27" height="27" class="bg-gray-light border border-grey-light lazyautosizes lazyloaded" style="background-position:center;background-repeat:no-repeat;" sizes="27px">
								</div>
								<span class="icon-box-title text-light small m-0">Éthiopie</span>
							</a>
						</div>
						<div class="col-auto">
							<a href="https://ao.bazarafrique.com" class="icon-box card card-light flex-row align-items-center card-hover rounded-pill px-3">
								<div class="icon-box-media">
									<img src="https://media.bazarafrique.com/static/flags/ao.svg" data-sizes="auto" data-src="https://media.bazarafrique.com/static/flags/ao.svg" alt="Angola" title="Angola" width="27" height="27" class="bg-gray-light border border-grey-light lazyautosizes lazyloaded" style="background-position:center;background-repeat:no-repeat;" sizes="27px">
								</div>
								<span class="icon-box-title text-light small m-0">Angola</span>
							</a>
						</div>
						<div class="col-auto">
							<a href="https://cv.bazarafrique.com" class="icon-box card card-light flex-row align-items-center card-hover rounded-pill px-3">
								<div class="icon-box-media">
									<img src="https://media.bazarafrique.com/static/flags/cv.svg" data-sizes="auto" data-src="https://media.bazarafrique.com/static/flags/cv.svg" alt="Cap-Vert" title="Cap-Vert" width="27" height="27" class="bg-gray-light border border-grey-light lazyautosizes lazyloaded" style="background-position:center;background-repeat:no-repeat;" sizes="27px">
								</div>
								<span class="icon-box-title text-light small m-0">Cap-Vert</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="py-4 border-top border-light">
			<div class="container d-flex flex-column flex-lg-row align-items-center justify-content-between py-2">
				<p class="order-lg-1 order-2 fs-sm mb-2 mb-lg-0">
					<span class="text-light opacity-60">Copyright © 2024</span>
					&nbsp;
					<a href="/" target="_blank" rel="noopener" class="nav-link-light fw-bold nuxt-link-active">BazarAfrique</a>
				</p>
				<div class="d-flex flex-lg-row flex-column align-items-center order-lg-2 order-1 ms-lg-4 mb-lg-0 mb-4">
					<div class="d-flex align-items-center">
						<div class="dropdown">
							<a id="dropdownMenuLangSwitcherTrigger1" data-bs-toggle="dropdown" data-bs-auto-close="true" data-bs-display="dynamic" aria-expanded="false" aria-label="dropdown" href="#" role="button" class="nav-link nav-link-light fs-sm align-items-center p-0 fw-normal dropdown-toggle">FR  </a>
							<ul aria-labelledby="dropdownMenuLangSwitcherTrigger1" class="dropdown-menu dropdown-menu-dark my-1">
								<li><button class="dropdown-item text-nowrap py-1">English</button></li>
								<li><button class="dropdown-item text-nowrap py-1">Français</button></li>
							</ul>
						</div>
						<div class="text-nowrap socials-links ms-4 ps-lg-2">
							<a href="https://facebook.com/bazarafrique" target="_blank" rel="noopener nofollow noreferrer" aria-label="Facebook" class="btn btn-icon rounded-circle me-2 btn-translucent-light btn-xs"><i class="ba-icon-facebook"></i></a>
							<a href="https://instagram.com/bazarafrique" target="_blank" rel="noopener nofollow noreferrer" aria-label="Instagram" class="btn btn-icon rounded-circle me-2 btn-translucent-light btn-xs"><i class="ba-icon-instagram"></i></a>
							<a href="https://twitter.com/bazarafrique" target="_blank" rel="noopener nofollow noreferrer" aria-label="Twitter" class="btn btn-icon rounded-circle me-2 btn-translucent-light btn-xs"><i class="ba-icon-twitter"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<div></div>
	<div></div>

    <div class="field"><div class="row g-4 row-cols-6 untouched pristine required changed"><div class="col-12 col-sm-4 col-md-3 col-lg-3"><div><form action="/" method="post" data-plugin="dropzone" class="dz-dropzone dz-clickable post-media-dropzone dz-dropzone-boxed"> <div class="dz-message d-flex flex-column justify-content-center align-items-center w-100 h-100"><figure class="dz-drag-n-drop-icon m-0"><i class="ba-icon-photo m-0 text-grey fs-2"></i></figure> <div class="text-gray fw-bold">
        Photo n°1
      </div></div></form> <div class="dropzone-previews post-media-dropzone d-none"></div> <div class="d-none"><div class="position-relative w-100 h-100"><div class="position-absolute w-100 h-100 upload-preview-info rounded-3"><div class="position-absolute top-0 end-0 p-3"><button type="button" data-dz-remove="" class="btn btn-xs btn-white text-danger btn-icon rounded-circle"><i class="m-0 ba-icon-close fs-5"></i></button></div></div> <img data-dz-thumbnail="" src="#" alt="" class="preview-img img-fluid w-100 h-100 rounded-3"></div></div></div></div><div class="col-12 col-sm-4 col-md-3 col-lg-3"><div><form action="/" method="post" data-plugin="dropzone" class="dz-dropzone dz-clickable post-media-dropzone dz-dropzone-boxed"> <div class="dz-message d-flex flex-column justify-content-center align-items-center w-100 h-100"><figure class="dz-drag-n-drop-icon m-0"><i class="ba-icon-photo m-0 text-grey fs-2"></i></figure> <div class="text-gray fw-bold">
        Photo n°2
      </div></div></form> <div class="dropzone-previews post-media-dropzone d-none"></div> <div class="d-none"><div class="position-relative w-100 h-100"><div class="position-absolute w-100 h-100 upload-preview-info rounded-3"><div class="position-absolute top-0 end-0 p-3"><button type="button" data-dz-remove="" class="btn btn-xs btn-white text-danger btn-icon rounded-circle"><i class="m-0 ba-icon-close fs-5"></i></button></div></div> <img data-dz-thumbnail="" src="#" alt="" class="preview-img img-fluid w-100 h-100 rounded-3"></div></div></div></div><div class="col-12 col-sm-4 col-md-3 col-lg-3"><div><form action="/" method="post" data-plugin="dropzone" class="dz-dropzone dz-clickable post-media-dropzone dz-dropzone-boxed"> <div class="dz-message d-flex flex-column justify-content-center align-items-center w-100 h-100"><figure class="dz-drag-n-drop-icon m-0"><i class="ba-icon-photo m-0 text-grey fs-2"></i></figure> <div class="text-gray fw-bold">
        Photo n°3
      </div></div></form> <div class="dropzone-previews post-media-dropzone d-none"></div> <div class="d-none"><div class="position-relative w-100 h-100"><div class="position-absolute w-100 h-100 upload-preview-info rounded-3"><div class="position-absolute top-0 end-0 p-3"><button type="button" data-dz-remove="" class="btn btn-xs btn-white text-danger btn-icon rounded-circle"><i class="m-0 ba-icon-close fs-5"></i></button></div></div> <img data-dz-thumbnail="" src="#" alt="" class="preview-img img-fluid w-100 h-100 rounded-3"></div></div></div></div><div class="col-12 col-sm-4 col-md-3 col-lg-3"><div><form action="/" method="post" data-plugin="dropzone" class="dz-dropzone dz-clickable post-media-dropzone dz-dropzone-boxed"> <div class="dz-message d-flex flex-column justify-content-center align-items-center w-100 h-100"><figure class="dz-drag-n-drop-icon m-0"><i class="ba-icon-photo m-0 text-grey fs-2"></i></figure> <div class="text-gray fw-bold">
        Photo n°4
      </div></div></form> <div class="dropzone-previews post-media-dropzone d-none"></div> <div class="d-none"><div class="position-relative w-100 h-100"><div class="position-absolute w-100 h-100 upload-preview-info rounded-3"><div class="position-absolute top-0 end-0 p-3"><button type="button" data-dz-remove="" class="btn btn-xs btn-white text-danger btn-icon rounded-circle"><i class="m-0 ba-icon-close fs-5"></i></button></div></div> <img data-dz-thumbnail="" src="#" alt="" class="preview-img img-fluid w-100 h-100 rounded-3"></div></div></div></div><div class="col-12 col-sm-4 col-md-3 col-lg-3"><div><form action="/" method="post" data-plugin="dropzone" class="dz-dropzone dz-clickable post-media-dropzone dz-dropzone-boxed"> <div class="dz-message d-flex flex-column justify-content-center align-items-center w-100 h-100"><figure class="dz-drag-n-drop-icon m-0"><i class="ba-icon-photo m-0 text-grey fs-2"></i></figure> <div class="text-gray fw-bold">
        Photo n°5
      </div></div></form> <div class="dropzone-previews post-media-dropzone d-none"></div> <div class="d-none"><div class="position-relative w-100 h-100"><div class="position-absolute w-100 h-100 upload-preview-info rounded-3"><div class="position-absolute top-0 end-0 p-3"><button type="button" data-dz-remove="" class="btn btn-xs btn-white text-danger btn-icon rounded-circle"><i class="m-0 ba-icon-close fs-5"></i></button></div></div> <img data-dz-thumbnail="" src="#" alt="" class="preview-img img-fluid w-100 h-100 rounded-3"></div></div></div></div><div class="col-12 col-sm-4 col-md-3 col-lg-3"><div><form action="/" method="post" data-plugin="dropzone" class="dz-dropzone dz-clickable post-media-dropzone dz-dropzone-boxed"> <div class="dz-message d-flex flex-column justify-content-center align-items-center w-100 h-100"><figure class="dz-drag-n-drop-icon m-0"><i class="ba-icon-photo m-0 text-grey fs-2"></i></figure> <div class="text-gray fw-bold">
        Photo n°6
      </div></div></form> <div class="dropzone-previews post-media-dropzone d-none"></div> <div class="d-none"><div class="position-relative w-100 h-100"><div class="position-absolute w-100 h-100 upload-preview-info rounded-3"><div class="position-absolute top-0 end-0 p-3"><button type="button" data-dz-remove="" class="btn btn-xs btn-white text-danger btn-icon rounded-circle"><i class="m-0 ba-icon-close fs-5"></i></button></div></div> <img data-dz-thumbnail="" src="#" alt="" class="preview-img img-fluid w-100 h-100 rounded-3"></div></div></div></div><div class="col-12 col-sm-4 col-md-3 col-lg-3"><div><form action="/" method="post" data-plugin="dropzone" class="dz-dropzone dz-clickable post-media-dropzone dz-dropzone-boxed"> <div class="dz-message d-flex flex-column justify-content-center align-items-center w-100 h-100"><figure class="dz-drag-n-drop-icon m-0"><i class="ba-icon-photo m-0 text-grey fs-2"></i></figure> <div class="text-gray fw-bold">
        Photo n°7
      </div></div></form> <div class="dropzone-previews post-media-dropzone d-none"></div> <div class="d-none"><div class="position-relative w-100 h-100"><div class="position-absolute w-100 h-100 upload-preview-info rounded-3"><div class="position-absolute top-0 end-0 p-3"><button type="button" data-dz-remove="" class="btn btn-xs btn-white text-danger btn-icon rounded-circle"><i class="m-0 ba-icon-close fs-5"></i></button></div></div> <img data-dz-thumbnail="" src="#" alt="" class="preview-img img-fluid w-100 h-100 rounded-3"></div></div></div></div><div class="col-12 col-sm-4 col-md-3 col-lg-3"><div><form action="/" method="post" data-plugin="dropzone" class="dz-dropzone dz-clickable post-media-dropzone dz-dropzone-boxed"> <div class="dz-message d-flex flex-column justify-content-center align-items-center w-100 h-100"><figure class="dz-drag-n-drop-icon m-0"><i class="ba-icon-photo m-0 text-grey fs-2"></i></figure> <div class="text-gray fw-bold">
        Photo n°8
      </div></div></form> <div class="dropzone-previews post-media-dropzone d-none"></div> <div class="d-none"><div class="position-relative w-100 h-100"><div class="position-absolute w-100 h-100 upload-preview-info rounded-3"><div class="position-absolute top-0 end-0 p-3"><button type="button" data-dz-remove="" class="btn btn-xs btn-white text-danger btn-icon rounded-circle"><i class="m-0 ba-icon-close fs-5"></i></button></div></div> <img data-dz-thumbnail="" src="#" alt="" class="preview-img img-fluid w-100 h-100 rounded-3"></div></div></div></div><div class="col-12 col-sm-4 col-md-3 col-lg-3"><div><form action="/" method="post" data-plugin="dropzone" class="dz-dropzone dz-clickable post-media-dropzone dz-dropzone-boxed"> <div class="dz-message d-flex flex-column justify-content-center align-items-center w-100 h-100"><figure class="dz-drag-n-drop-icon m-0"><i class="ba-icon-photo m-0 text-grey fs-2"></i></figure> <div class="text-gray fw-bold">
        Photo n°9
      </div></div></form> <div class="dropzone-previews post-media-dropzone d-none"></div> <div class="d-none"><div class="position-relative w-100 h-100"><div class="position-absolute w-100 h-100 upload-preview-info rounded-3"><div class="position-absolute top-0 end-0 p-3"><button type="button" data-dz-remove="" class="btn btn-xs btn-white text-danger btn-icon rounded-circle"><i class="m-0 ba-icon-close fs-5"></i></button></div></div> <img data-dz-thumbnail="" src="#" alt="" class="preview-img img-fluid w-100 h-100 rounded-3"></div></div></div></div><div class="col-12 col-sm-4 col-md-3 col-lg-3"><div><form action="/" method="post" data-plugin="dropzone" class="dz-dropzone dz-clickable post-media-dropzone dz-dropzone-boxed"> <div class="dz-message d-flex flex-column justify-content-center align-items-center w-100 h-100"><figure class="dz-drag-n-drop-icon m-0"><i class="ba-icon-photo m-0 text-grey fs-2"></i></figure> <div class="text-gray fw-bold">
        Photo n°10
      </div></div></form> <div class="dropzone-previews post-media-dropzone d-none"></div> <div class="d-none"><div class="position-relative w-100 h-100"><div class="position-absolute w-100 h-100 upload-preview-info rounded-3"><div class="position-absolute top-0 end-0 p-3"><button type="button" data-dz-remove="" class="btn btn-xs btn-white text-danger btn-icon rounded-circle"><i class="m-0 ba-icon-close fs-5"></i></button></div></div> <img data-dz-thumbnail="" src="#" alt="" class="preview-img img-fluid w-100 h-100 rounded-3"></div></div></div></div></div> <!----></div>
</div>

@endsection
