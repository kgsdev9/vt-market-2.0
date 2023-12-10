<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>DreaM - Electronics eCommerce HTML Template</title>
		<meta name="robots" content="noindex, follow"/>
		<!-- ~~~~~~~~~~~~~ Favicon icon ~~~~~~~~~~~~~ -->
		<link rel="shortcut icon" href="assets/images/dist/logos/favicon.png" type="image/png">
		<!-- ~~~~~~~~~~~~~~~~~ Google Fonts ~~~~~~~~~~~~~~~~~ -->
		<link rel="stylesheet" href="assets/fonts/Inter/inter-fontfaces.css">
		<!-- ~~~~~~~~~~~~~~~~~ Vendor CSS ~~~~~~~~~~~~~~~~~ -->
		<link rel="stylesheet" href="assets/css/vendor/bootstrapv5-0-2/bootstrapv5-0-2.css">
		<!-- ~~~~~~~~~~~~~~~~~ Style CSS ~~~~~~~~~~~~~~~~~ -->
		<link rel="stylesheet" href="assets/css/main.min.css">
        @livewireStyles
	</head>
	<body>
		<!-- ~~~~~~~~~~~~~~~~~ Main navigation header [START] ~~~~~~~~~~~~~~~~~ -->
		<header class="main-header-section catgmenu-opens" id="main-nav-header">
			<div class="main-header-section__topline">
				<div class="page-margin">
					<div class="page-margin__content">
						<div class="d-flex align-items-center">
							<div class="flex-item">
								<div class="event-trigger-wrap">
									<span class="event-trigger" data-toggle="modal" data-target="#select-city">
										<span class="icon">
											<svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin">
												<path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
												<circle cx="12" cy="10" r="3"></circle>
											</svg>
										</span>
										<span class="text">Istanbul</span>
									</span>
								</div>
							</div>
							<div class="flex-item mobile-dev-logo">
								<a href="index.html"><img src="assets/images/dist/logos/logo.png" alt="Site Logo"></a>
							</div>
							<div class="flex-item flex-1 quick-nav-links-wrap">
								<div class="quick-nav-links">
									<a href="blog.html">Dévenir vendeur</a>
									<a href="faq.html">Dévenir transporteur</a>
									<a href="faq.html" class="mr-auto">Points de rélais</a>
									<a href="tel:+088898878778">Dévenir partenaire</a>
								</div>
							</div>
							<div class="flex-item">
								<div class="event-trigger-wrap">
									<a href="tel:+0123456789" class="a-block">
										<span class="event-trigger">
											<span class="icon">
												<svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone">
													<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
												</svg>
											</span>
											<span class="text">+225 3456 789</span>
										</span>
									</a>
								</div>
							</div>
							<div class="flex-item ui-languages">
								<div class="langs-links">
									<a href="#">US</a>
									<a href="#" class="active">FR</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="main-header-section__midline">
				<div class="page-margin">
					<div class="page-margin__content">
						<div class="d-flex align-items-center">
							<div class="flex-item">
								<div class="logo">
									<a href="index.html"><img src="images/dist/logos/logo.png" alt="IMG"></a>
								</div>
							</div>
							<div class="flex-item">
								<div class="catalog-btn">
									<button class="btn catalog-btn__closed" id="catgmenu-btn">
										<span class="icon icon-closed">
											<svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid">
												<rect x="3" y="3" width="7" height="7"></rect>
												<rect x="14" y="3" width="7" height="7"></rect>
												<rect x="14" y="14" width="7" height="7"></rect>
												<rect x="3" y="14" width="7" height="7"></rect>
											</svg>
										</span>
										<span class="icon icon-open">
											<svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
												<line x1="18" y1="6" x2="6" y2="18"></line>
												<line x1="6" y1="6" x2="18" y2="18"></line>
											</svg>
										</span>
									</button>
								</div>
							</div>
							<div class="flex-item flex-1">
								<form action="https://www.mansurtl.com/templates/dream/catalog-departments.html" method="post">
									<div class="searchbar-holder">
										<input type="text" placeholder="e.g. iPhone 13 Pro Max">
										<button class="searchbar-btn">
											<svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
												<circle cx="11" cy="11" r="8"></circle>
												<line x1="21" y1="21" x2="16.65" y2="16.65"></line>
											</svg>
										</button>
									</div>
								</form>
							</div>
							<div class="flex-item">
								<div class="user-nav-items">
									<div class="d-flex align-items-center">
										<div class="flex-item">
											<a href="profile-favorites.html" class="nav-item" title="Favorites">
												<span class="nav-item__btn">
													<span class="icon">
														<svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
															<path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
														</svg>
													</span>
													<small class="count-ind"></small>
												</span>
											</a>
										</div>
										<div class="flex-item">
											<a href="profile-orders.html" class="nav-item" title="Your orders">
												<span class="nav-item__btn">
													<span class="icon">
														<svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-package">
															<line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line>
															<path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
															<polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
															<line x1="12" y1="22.08" x2="12" y2="12"></line>
														</svg>
													</span>
												</span>
											</a>
										</div>
										<div class="flex-item">
											<a href="basket.html" class="nav-item" title="Your cart">
												<span class="nav-item__btn">
													<span class="icon">
														<svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag">
															<path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
															<line x1="3" y1="6" x2="21" y2="6"></line>
															<path d="M16 10a4 4 0 0 1-8 0"></path>
														</svg>
													</span>
													<small class="count-ind"></small>
												</span>
											</a>
										</div>
										<div class="flex-item">
											<a href="profile-data.html" class="nav-item" title="Profile">
												<span class="nav-item__btn">
													<span class="icon">
														<svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
															<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
															<circle cx="12" cy="7" r="4"></circle>
														</svg>
													</span>
												</span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="main-header-section__catgmenu" id="catgmenu-layout">
				<div class="catgmenu-wrap">
					<div class="catgmenu">
						<div class="page-margin">
							<div class="page-margin__content">
								<div class="row">
									<div class="col-xxl-3 col-xl-3 col-lg-6 col-12">
										<div class="catgmenu__departments">
											<div class="departments-nav">
												<a href="catalog-departments.html" class="departments-nav__item">
													<span class="emoji-icon">
														<svg width="23" height="36" viewBox="0 0 23 36" fill="none" xmlns="https://www.w3.org/2000/svg">
															<path d="M4.47826 36C4.47826 36 0.478256 36 0.478256 32V4C0.478256 4 0.478256 0 4.47826 0H18.4783C18.4783 0 22.4783 0 22.4783 4V32C22.4783 32 22.4783 36 18.4783 36H4.47826Z" fill="#31373D"/>
															<path d="M2.47826 5H20.4783V31H2.47826V5Z" fill="#55ACEE"/>
														</svg>
													</span>
													<span class="text">Mobile phones & Accessories</span>
													<span class="icon">
														<svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
															<polyline points="9 18 15 12 9 6"></polyline>
														</svg>
													</span>
												</a>
												<a href="catalog-departments.html" class="departments-nav__item">
													<span class="emoji-icon">
														<svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="https://www.w3.org/2000/svg">
															<path d="M34.4783 30.0963C34.4783 30.0963 34.4783 34.0963 30.4783 34.0963H4.47827C0.478271 34.0963 0.478271 30.0963 0.478271 30.0963V11.0963C0.478271 7.09625 4.47827 7.09625 4.47827 7.09625H30.4783C30.4783 7.09625 34.4783 7.09625 34.4783 11.0963V30.0963Z" fill="#31373D"/>
															<path d="M20.7813 9.48525C21.1723 9.87625 21.1723 10.5083 20.7813 10.8993C20.3903 11.2903 19.7583 11.2903 19.3673 10.8993L10.1753 1.70725C9.78427 1.31625 9.78427 0.68425 10.1753 0.29325C10.5663 -0.09775 11.1983 -0.09775 11.5893 0.29325L20.7813 9.48525V9.48525Z" fill="#31373D"/>
															<path d="M14.1753 9.48525C13.7843 9.87625 13.7843 10.5083 14.1753 10.8993C14.5663 11.2903 15.1983 11.2903 15.5893 10.8993L24.7813 1.70725C25.1723 1.31625 25.1723 0.68425 24.7813 0.29325C24.3903 -0.09775 23.7583 -0.09775 23.3673 0.29325L14.1753 9.48525Z" fill="#31373D"/>
															<path d="M17.4783 10.0962C25.4783 10.0962 27.4783 11.0962 28.4783 12.0962C29.4783 13.0962 30.4783 15.0962 30.4783 20.0962C30.4783 25.0962 29.4783 27.0962 28.4783 28.0962C27.4783 29.0962 25.4783 30.0962 17.4783 30.0962C9.47827 30.0962 7.47827 29.0962 6.47827 28.0962C5.47827 27.0962 4.47827 25.0962 4.47827 20.0962C4.47827 15.0962 5.47827 13.0962 6.47827 12.0962C7.47827 11.0962 9.47827 10.0962 17.4783 10.0962Z" fill="#55ACEE"/>
															<path d="M30.9783 32.0963C31.8067 32.0963 32.4783 31.4247 32.4783 30.5963C32.4783 29.7678 31.8067 29.0963 30.9783 29.0963C30.1498 29.0963 29.4783 29.7678 29.4783 30.5963C29.4783 31.4247 30.1498 32.0963 30.9783 32.0963Z" fill="#66757F"/>
															<path d="M3.97827 32.0963C4.8067 32.0963 5.47827 31.4247 5.47827 30.5963C5.47827 29.7678 4.8067 29.0963 3.97827 29.0963C3.14984 29.0963 2.47827 29.7678 2.47827 30.5963C2.47827 31.4247 3.14984 32.0963 3.97827 32.0963Z" fill="#66757F"/>
														</svg>
													</span>
													<span class="text">TVs & Accessories</span>
													<span class="icon">
														<svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
															<polyline points="9 18 15 12 9 6"></polyline>
														</svg>
													</span>
												</a>
												<a href="catalog-departments.html" class="departments-nav__item">
													<span class="emoji-icon">
														<svg width="37" height="30" viewBox="0 0 37 30" fill="none" xmlns="https://www.w3.org/2000/svg">
															<path d="M34.4783 23.096C34.0613 22.133 33.5823 21.088 32.4783 21.088H31.4783C32.5823 21.088 33.4783 20.189 33.4783 19.08V2.008C33.4783 0.899 32.5823 0 31.4783 0H5.47827C4.37427 0 3.47827 0.899 3.47827 2.008V19.08C3.47827 20.189 4.37427 21.088 5.47827 21.088H4.47827C3.37427 21.088 2.81127 22.092 2.47827 23.096L0.478271 27.991C0.478271 29.101 1.37427 30 2.47827 30H34.4783C35.5823 30 36.4783 29.101 36.4783 27.992L34.4783 23.096V23.096Z" fill="#CCD6DD"/>
															<path d="M0.486267 28.075L0.492267 28.132L0.662267 28.824C0.978267 29.516 1.67027 30 2.47827 30H34.4783C35.5543 30 36.4253 29.145 36.4703 28.075H0.486267Z" fill="#9AAAB4"/>
															<path d="M31.4783 18.075C31.4783 18.63 31.0313 19.079 30.4783 19.079H6.47827C5.92627 19.079 5.47827 18.63 5.47827 18.075V3.013C5.47827 2.458 5.92627 2.009 6.47827 2.009H30.4783C31.0313 2.009 31.4783 2.459 31.4783 3.013V18.075Z" fill="#5DADEC"/>
															<path d="M33.3843 25.042L32.6243 22.867C32.3853 22.407 31.9893 22.03 31.4363 22.03H5.58826C5.03626 22.03 4.68226 22.438 4.43226 23.066L3.74426 25.043C3.52526 25.639 4.19226 26.047 4.74426 26.047H12.3223C12.3223 26.047 13.2593 26 13.4253 25.439C13.6173 24.791 13.8403 23.815 13.8883 23.643C13.9623 23.379 14.2763 23.112 14.7443 23.112H23.3223C23.8223 23.112 24.0683 23.365 24.1333 23.678C24.1753 23.882 24.4453 24.819 24.5713 25.46C24.6823 26.031 25.7923 26.046 25.7923 26.046H32.3863C32.9373 26.046 33.6033 25.575 33.3843 25.042V25.042Z" fill="#AEBBC1"/>
															<path d="M22.8533 27.113H15.0723C14.6973 27.113 14.5343 26.77 14.5883 26.438C14.6423 26.107 14.9473 24.645 14.9713 24.475C14.9943 24.304 15.2453 24.1 15.4953 24.1H22.5103C22.8073 24.1 23.0003 24.263 23.0603 24.589C23.1193 24.916 23.3623 26.23 23.3813 26.53C23.4003 26.831 23.2123 27.113 22.8533 27.113V27.113Z" fill="#9AAAB4"/>
														</svg>
													</span>
													<span class="text">Laptops & Accessories</span>
													<span class="icon">
														<svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
															<polyline points="9 18 15 12 9 6"></polyline>
														</svg>
													</span>
												</a>
												<a href="catalog-departments.html" class="departments-nav__item">
													<span class="emoji-icon">
														<svg width="37" height="36" viewBox="0 0 37 36" fill="none" xmlns="https://www.w3.org/2000/svg">
															<path d="M18.4783 36C28.4194 36 36.4783 27.9411 36.4783 18C36.4783 8.05887 28.4194 0 18.4783 0C8.53715 0 0.478271 8.05887 0.478271 18C0.478271 27.9411 8.53715 36 18.4783 36Z" fill="#88C9F9"/>
															<path d="M3.29027 25.375C3.22827 24.375 3.22827 24.188 3.22827 23C3.22827 21.812 3.79027 22 4.35327 21.438C4.91627 20.876 4.79127 20.813 5.72827 20.197C6.66527 19.581 6.16627 18.876 6.10327 18.501C6.04027 18.126 5.47827 18.438 4.54027 18.562C3.60227 18.686 3.91627 18.25 3.35327 18C2.79027 17.75 2.54127 17.375 2.16527 16.25C1.78927 15.125 1.72727 14.812 1.85327 13.875C1.97927 12.938 2.41627 13.812 2.47827 14.812C2.54027 15.812 3.41627 15.437 3.41627 16.062C3.41627 16.687 4.66627 17.374 4.97827 17.562C5.29027 17.75 6.16627 16.624 6.47827 16.312C6.79027 16 7.16627 15.562 7.29027 15.312C7.41427 15.062 8.97827 14.874 9.29027 14.874C9.60227 14.874 10.3523 15.812 10.3523 16.249C10.3523 16.686 10.7273 17.874 11.0403 18.561C11.3533 19.248 12.0403 19.373 12.6653 19.873C13.2903 20.373 13.6033 19.935 13.6033 19.935C13.6033 19.935 13.3533 18.873 13.3533 17.997C13.3533 17.121 14.1033 16.372 14.1033 16.372C14.1033 16.372 15.2913 17.247 15.3533 17.497C15.4153 17.747 16.3533 18.622 16.4153 19.059C16.4773 19.496 16.9773 20.059 17.8983 20.184C18.8193 20.309 18.1653 19.122 18.4773 18.309C18.7893 17.496 19.2273 17.371 19.7893 17.247C20.3513 17.123 20.7893 16.622 21.1643 16.122C21.5393 15.622 22.2263 14.934 22.1643 14.372C22.1023 13.81 21.9143 13.434 21.6643 12.747C21.4143 12.06 22.4143 11.809 22.8523 10.997C23.2903 10.185 22.8523 10.997 23.8523 10.747C24.8523 10.497 24.4143 10.497 24.6023 10.122C24.7903 9.747 24.9143 9.372 24.7273 8.684C24.5403 7.996 23.8523 8.684 23.1653 8.684C22.4783 8.684 23.4163 7.75 23.4783 7C23.5403 6.25 24.4163 6.438 25.0403 6.375C25.6643 6.312 25.8523 7.187 26.0403 7.375C26.2283 7.563 28.1653 6.125 28.6653 5.437C29.1653 4.749 28.2283 4.938 28.4783 4.648C28.7283 4.358 26.9783 4.299 26.2903 4.188C25.6023 4.077 23.8533 4 23.1663 3.576C22.4793 3.152 19.8543 3.472 19.1663 3.813C18.4783 4.154 18.0413 3.784 17.7283 3.313C17.4153 2.842 16.1033 3.078 15.7283 2.813C15.3533 2.548 14.9783 3.25 14.4783 3.438C13.9783 3.626 13.7903 3.688 13.1663 3.313C12.5423 2.938 13.3533 2.5 12.4783 2.188C11.8923 1.979 11.1903 2.101 10.0983 2.077C4.38027 5.092 0.478271 11.087 0.478271 18C0.478271 21.42 1.44927 24.605 3.10527 27.327C3.41327 26.809 3.33627 26.11 3.29027 25.375ZM17.7903 24.188C18.2283 24.25 19.4783 24.188 18.4783 23.376C17.4783 22.564 16.9163 23.188 17.0403 22.251C17.1643 21.314 16.4153 21.313 16.4153 21.313C16.4153 22.001 15.9153 22.751 16.4153 23.438C16.9153 24.125 17.3533 24.125 17.7903 24.188Z" fill="#5C913B"/>
															<path d="M24.1663 13.75C23.1663 12.938 23.9163 13.188 24.0413 12.25C24.1663 11.312 23.4163 11.312 23.4163 11.312C23.4163 12 22.9163 12.75 23.4163 13.437C23.9163 14.124 22.4163 14.687 22.8543 14.749C23.2923 14.811 25.1663 14.562 24.1663 13.75V13.75ZM20.2863 23.5C20.9063 24.188 20.6663 23.5 21.4783 23.188C22.2903 22.876 20.7903 22.188 20.2903 21.813C19.7903 21.438 19.2933 21.424 18.8563 22.251C18.3603 23.188 19.6663 22.812 20.2863 23.5V23.5ZM27.6033 24.75C27.2913 24.375 26.6033 24.188 25.8533 24.205C25.1033 24.223 25.1653 23.375 24.4153 23.437C23.6653 23.499 23.1293 22.933 22.7903 22.758C22.0533 22.378 22.5403 23.249 22.7903 24.204C23.0403 25.159 23.9783 24.436 24.8523 24.936C25.7263 25.436 25.7903 24.748 26.6023 24.998C27.4143 25.248 27.7273 25.81 28.5063 25.748C29.2853 25.686 27.9163 25.125 27.6033 24.75V24.75ZM25.9783 27.5C25.6663 26.875 24.7523 26.312 24.3773 25.995C24.0023 25.678 23.4153 25.571 22.9153 25.755C22.4153 25.939 22.1033 25.755 21.8533 25.26C21.6033 24.765 21.1653 24.938 20.7913 25C20.4173 25.062 18.9163 25.688 18.0413 26.125C17.1663 26.562 16.7683 26.942 16.1943 27.5C15.2963 28.374 15.7913 27.812 16.1943 28.375C16.5973 28.937 15.7523 30.687 15.6903 31.687C15.6283 32.687 17.2923 31.375 17.9173 31.249C18.5423 31.123 18.3583 30.749 18.8583 30.374C19.3583 29.999 19.6833 29.911 20.2323 30.411C20.7813 30.911 21.5003 31.374 21.5003 31.936C21.5003 32.498 23.4793 33.436 24.2293 33.061C24.9793 32.686 25.4173 31.936 26.1043 31.311C26.7913 30.686 26.5423 29.499 26.7293 28.749C26.9163 27.999 26.2903 28.125 25.9783 27.5V27.5Z" fill="#5C913B"/>
														</svg>
													</span>
													<span class="text">Network hardware</span>
													<span class="icon">
														<svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
															<polyline points="9 18 15 12 9 6"></polyline>
														</svg>
													</span>
												</a>
											</div>
										</div>
									</div>
									<div class="col-xxl-3 col-xl-3 col-lg-6 col-12">
										<div class="catgmenu__departments">
											<div class="departments-nav">
												<a href="catalog-departments.html" class="departments-nav__item">
													<span class="emoji-icon">
														<svg width="37" height="36" viewBox="0 0 37 36" fill="none" xmlns="https://www.w3.org/2000/svg">
															<path d="M18.4783 0C10.1943 0 3.47827 6.716 3.47827 15V24H6.47827V15C6.47827 8 11.7473 2.812 18.4783 2.812C25.2083 2.812 30.4783 8 30.4783 15V25L33.4783 24V15C33.4783 6.716 26.7623 0 18.4783 0Z" fill="#66757F"/>
															<path d="M6.47827 27C6.47827 28.104 5.58227 29 4.47827 29H2.47827C1.37427 29 0.478271 28.104 0.478271 27V18C0.478271 16.896 1.37427 16 2.47827 16H4.47827C5.58227 16 6.47827 16.896 6.47827 18V27ZM36.4783 27C36.4783 28.104 35.5823 29 34.4783 29H32.4783C31.3743 29 30.4783 28.104 30.4783 27V18C30.4783 16.896 31.3743 16 32.4783 16H34.4783C35.5823 16 36.4783 16.896 36.4783 18V27Z" fill="#31373D"/>
															<path d="M19.6603 10.016L13.2963 11.329C12.8463 11.422 12.4783 11.873 12.4783 12.333V28.518C11.8403 28.291 11.1373 28.158 10.3913 28.158C7.60627 28.158 5.34927 29.913 5.34927 32.08C5.34927 34.245 7.60727 35.907 10.3913 35.907C13.1273 35.905 15.4003 34 15.4783 32V16.39L19.6823 15.518C20.1313 15.425 20.4783 14.973 20.4783 14.514V10.682C20.4783 10.224 20.1103 9.923 19.6603 10.016V10.016ZM27.6603 13.167L23.3633 14.032C22.9133 14.125 22.4783 14.576 22.4783 15.035V26.44C22.4783 26.288 21.6003 26.2 21.0783 26.2C19.0543 26.2 17.4453 27.476 17.4453 29.052C17.4453 30.626 19.1033 31.903 21.1283 31.903C23.1533 31.903 24.8053 30.626 24.8053 29.052L24.7913 17.766L27.6603 17.168C28.1103 17.075 28.4783 16.624 28.4783 16.165V13.835C28.4783 13.376 28.1103 13.075 27.6603 13.167V13.167Z" fill="#55ACEE"/>
														</svg>
													</span>
													<span class="text">Headphones & Accessories</span>
													<span class="icon">
														<svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
															<polyline points="9 18 15 12 9 6"></polyline>
														</svg>
													</span>
												</a>
												<a href="catalog-departments.html" class="departments-nav__item">
													<span class="emoji-icon">
														<svg width="37" height="36" viewBox="0 0 37 36" fill="none" xmlns="https://www.w3.org/2000/svg">
															<path d="M3.17527 11.7422C2.78427 12.1332 2.78427 12.7652 3.17527 13.1562C3.56627 13.5473 4.19827 13.5473 4.58927 13.1562L13.7813 3.96425C14.1723 3.57325 14.1723 2.94125 13.7813 2.55025C13.3903 2.15925 12.7583 2.15925 12.3673 2.55025L3.17527 11.7422V11.7422Z" fill="#292F33"/>
															<path d="M36.4783 31.3533C36.4783 35.3533 32.4783 35.3533 32.4783 35.3533H4.47827C4.47827 35.3533 0.478271 35.3533 0.478271 31.3533V13.3533C0.478271 13.3533 0.478271 9.35325 4.47827 9.35325H32.4783C36.4783 9.35325 36.4783 13.3533 36.4783 13.3533V31.3533Z" fill="#99AAB5"/>
															<path d="M16.0393 2.41425C15.6483 2.80525 15.0163 2.80525 14.6253 2.41425L13.9183 1.70725C13.5273 1.31625 13.5273 0.68425 13.9183 0.29325C14.3093 -0.09775 14.9413 -0.09775 15.3323 0.29325L16.0393 1.00025C16.4293 1.39025 16.4293 2.02325 16.0393 2.41425Z" fill="#292F33"/>
															<path d="M27.9783 23.3533C31.0158 23.3533 33.4783 20.8908 33.4783 17.8533C33.4783 14.8157 31.0158 12.3533 27.9783 12.3533C24.9407 12.3533 22.4783 14.8157 22.4783 17.8533C22.4783 20.8908 24.9407 23.3533 27.9783 23.3533Z" fill="#292F33"/>
															<path d="M27.9783 32.3533C29.9113 32.3533 31.4783 30.7862 31.4783 28.8533C31.4783 26.9203 29.9113 25.3533 27.9783 25.3533C26.0453 25.3533 24.4783 26.9203 24.4783 28.8533C24.4783 30.7862 26.0453 32.3533 27.9783 32.3533Z" fill="#292F33"/>
															<path d="M27.9783 21.3533C29.9113 21.3533 31.4783 19.7862 31.4783 17.8533C31.4783 15.9203 29.9113 14.3533 27.9783 14.3533C26.0453 14.3533 24.4783 15.9203 24.4783 17.8533C24.4783 19.7862 26.0453 21.3533 27.9783 21.3533Z" fill="#66757F"/>
															<path d="M27.9783 30.3533C28.8067 30.3533 29.4783 29.6817 29.4783 28.8533C29.4783 28.0248 28.8067 27.3533 27.9783 27.3533C27.1498 27.3533 26.4783 28.0248 26.4783 28.8533C26.4783 29.6817 27.1498 30.3533 27.9783 30.3533Z" fill="#66757F"/>
															<path d="M10.9783 26.3533C11.8067 26.3533 12.4783 25.6817 12.4783 24.8533C12.4783 24.0248 11.8067 23.3533 10.9783 23.3533C10.1498 23.3533 9.47827 24.0248 9.47827 24.8533C9.47827 25.6817 10.1498 26.3533 10.9783 26.3533Z" fill="#292F33"/>
															<path d="M5.97827 26.3533C6.8067 26.3533 7.47827 25.6817 7.47827 24.8533C7.47827 24.0248 6.8067 23.3533 5.97827 23.3533C5.14984 23.3533 4.47827 24.0248 4.47827 24.8533C4.47827 25.6817 5.14984 26.3533 5.97827 26.3533Z" fill="#292F33"/>
															<path d="M10.9783 21.3533C11.8067 21.3533 12.4783 20.6817 12.4783 19.8533C12.4783 19.0248 11.8067 18.3533 10.9783 18.3533C10.1498 18.3533 9.47827 19.0248 9.47827 19.8533C9.47827 20.6817 10.1498 21.3533 10.9783 21.3533Z" fill="#292F33"/>
															<path d="M15.9783 21.3533C16.8067 21.3533 17.4783 20.6817 17.4783 19.8533C17.4783 19.0248 16.8067 18.3533 15.9783 18.3533C15.1498 18.3533 14.4783 19.0248 14.4783 19.8533C14.4783 20.6817 15.1498 21.3533 15.9783 21.3533Z" fill="#292F33"/>
															<path d="M15.9783 26.3533C16.8067 26.3533 17.4783 25.6817 17.4783 24.8533C17.4783 24.0248 16.8067 23.3533 15.9783 23.3533C15.1498 23.3533 14.4783 24.0248 14.4783 24.8533C14.4783 25.6817 15.1498 26.3533 15.9783 26.3533Z" fill="#292F33"/>
															<path d="M15.9783 31.3533C16.8067 31.3533 17.4783 30.6817 17.4783 29.8533C17.4783 29.0248 16.8067 28.3533 15.9783 28.3533C15.1498 28.3533 14.4783 29.0248 14.4783 29.8533C14.4783 30.6817 15.1498 31.3533 15.9783 31.3533Z" fill="#292F33"/>
															<path d="M5.97827 31.3533C6.8067 31.3533 7.47827 30.6817 7.47827 29.8533C7.47827 29.0248 6.8067 28.3533 5.97827 28.3533C5.14984 28.3533 4.47827 29.0248 4.47827 29.8533C4.47827 30.6817 5.14984 31.3533 5.97827 31.3533Z" fill="#292F33"/>
															<path d="M5.97827 21.3533C6.8067 21.3533 7.47827 20.6817 7.47827 19.8533C7.47827 19.0248 6.8067 18.3533 5.97827 18.3533C5.14984 18.3533 4.47827 19.0248 4.47827 19.8533C4.47827 20.6817 5.14984 21.3533 5.97827 21.3533Z" fill="#292F33"/>
															<path d="M10.9783 16.3533C11.8067 16.3533 12.4783 15.6817 12.4783 14.8533C12.4783 14.0248 11.8067 13.3533 10.9783 13.3533C10.1498 13.3533 9.47827 14.0248 9.47827 14.8533C9.47827 15.6817 10.1498 16.3533 10.9783 16.3533Z" fill="#292F33"/>
															<path d="M15.9783 16.3533C16.8067 16.3533 17.4783 15.6817 17.4783 14.8533C17.4783 14.0248 16.8067 13.3533 15.9783 13.3533C15.1498 13.3533 14.4783 14.0248 14.4783 14.8533C14.4783 15.6817 15.1498 16.3533 15.9783 16.3533Z" fill="#292F33"/>
															<path d="M5.97827 16.3533C6.8067 16.3533 7.47827 15.6817 7.47827 14.8533C7.47827 14.0248 6.8067 13.3533 5.97827 13.3533C5.14984 13.3533 4.47827 14.0248 4.47827 14.8533C4.47827 15.6817 5.14984 16.3533 5.97827 16.3533Z" fill="#292F33"/>
															<path d="M10.9783 31.3533C11.8067 31.3533 12.4783 30.6817 12.4783 29.8533C12.4783 29.0248 11.8067 28.3533 10.9783 28.3533C10.1498 28.3533 9.47827 29.0248 9.47827 29.8533C9.47827 30.6817 10.1498 31.3533 10.9783 31.3533Z" fill="#292F33"/>
														</svg>
													</span>
													<span class="text">Portable acoustics</span>
													<span class="icon">
														<svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
															<polyline points="9 18 15 12 9 6"></polyline>
														</svg>
													</span>
												</a>
												<a href="catalog-departments.html" class="departments-nav__item">
													<span class="emoji-icon">
														<svg width="37" height="36" viewBox="0 0 37 36" fill="none" xmlns="https://www.w3.org/2000/svg">
															<path d="M36.4783 22C36.4783 24.209 34.6873 26 32.4783 26H4.47827C2.26927 26 0.478271 24.209 0.478271 22V4C0.478271 1.791 2.26927 0 4.47827 0H32.4783C34.6873 0 36.4783 1.791 36.4783 4V22Z" fill="#CCD6DD"/>
															<path d="M4.47827 4H32.4783V22H4.47827V4Z" fill="#5DADEC"/>
															<path d="M13.4783 26H23.4783V32H13.4783V26Z" fill="#CCD6DD"/>
															<path d="M13.4783 26H23.4783V28H13.4783V26Z" fill="#9AAAB4"/>
															<path d="M36.4783 33C36.4783 31.343 35.1353 30 33.4783 30H3.47827C1.82127 30 0.478271 31.343 0.478271 33C0.478271 34.657 1.82127 36 3.47827 36H33.4783C35.1353 36 36.4783 34.657 36.4783 33Z" fill="#E1E8ED"/>
															<path d="M3.47827 32H5.47827V34H3.47827V32ZM7.47827 32H9.47827V34H7.47827V32ZM11.4783 32H13.4783V34H11.4783V32ZM15.4783 32H17.4783V34H15.4783V32ZM19.4783 32H21.4783V34H19.4783V32ZM23.4783 32H25.4783V34H23.4783V32ZM27.4783 32H29.4783V34H27.4783V32ZM31.4783 32H33.4783V34H31.4783V32Z" fill="#F5F8FA"/>
														</svg>
													</span>
													<span class="text">Computers & Accessories</span>
													<span class="icon">
														<svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
															<polyline points="9 18 15 12 9 6"></polyline>
														</svg>
													</span>
												</a>
												<a href="catalog-departments.html" class="departments-nav__item">
													<span class="emoji-icon">
														<svg width="37" height="28" viewBox="0 0 37 28" fill="none" xmlns="https://www.w3.org/2000/svg">
															<path d="M4.47827 1C4.47827 1 4.47827 0 5.47827 0H11.4783C11.4783 0 12.4783 0 12.4783 1V3H4.47827V1Z" fill="#66757F"/>
															<path d="M0.478271 6C0.478271 6 0.478271 2 4.47827 2H32.4783C32.4783 2 36.4783 2 36.4783 6V24C36.4783 24 36.4783 28 32.4783 28H4.47827C4.47827 28 0.478271 28 0.478271 24V6Z" fill="#31373D"/>
															<path d="M21.4783 25C27.0011 25 31.4783 20.5228 31.4783 15C31.4783 9.47715 27.0011 5 21.4783 5C15.9554 5 11.4783 9.47715 11.4783 15C11.4783 20.5228 15.9554 25 21.4783 25Z" fill="#CCD6DD"/>
															<path d="M21.4783 23C25.8965 23 29.4783 19.4183 29.4783 15C29.4783 10.5817 25.8965 7 21.4783 7C17.06 7 13.4783 10.5817 13.4783 15C13.4783 19.4183 17.06 23 21.4783 23Z" fill="#31373D"/>
															<path d="M21.4783 20C24.2397 20 26.4783 17.7614 26.4783 15C26.4783 12.2386 24.2397 10 21.4783 10C18.7168 10 16.4783 12.2386 16.4783 15C16.4783 17.7614 18.7168 20 21.4783 20Z" fill="#3B88C3"/>
															<path d="M32.9783 7C33.8067 7 34.4783 6.32843 34.4783 5.5C34.4783 4.67157 33.8067 4 32.9783 4C32.1498 4 31.4783 4.67157 31.4783 5.5C31.4783 6.32843 32.1498 7 32.9783 7Z" fill="white"/>
															<path d="M12.4783 5.5C12.4783 6.329 11.8073 7 10.9783 7H5.97827C5.14927 7 4.47827 6.329 4.47827 5.5C4.47827 4.671 5.14927 4 5.97827 4H10.9783C11.8073 4 12.4783 4.671 12.4783 5.5Z" fill="#F5F8FA"/>
														</svg>
													</span>
													<span class="text">Photo & Video cameras</span>
													<span class="icon">
														<svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
															<polyline points="9 18 15 12 9 6"></polyline>
														</svg>
													</span>
												</a>
											</div>
										</div>
									</div>
									<div class="col-xxl-3 col-xl-3 col-lg-6 col-12">
										<div class="catgmenu__departments">
											<div class="departments-nav">
												<a href="catalog-departments.html" class="departments-nav__item">
													<span class="emoji-icon">
														<svg width="37" height="26" viewBox="0 0 37 26" fill="none" xmlns="https://www.w3.org/2000/svg">
															<path d="M2.53327 7.805L2.52927 7.803C2.52927 7.803 0.478271 20.22 0.478271 22.01C0.478271 23.834 1.82127 25.312 3.47827 25.312C4.15827 25.312 4.77827 25.054 5.28127 24.634L15.4473 15.696L2.53327 7.805ZM34.2233 7.805L34.2273 7.803C34.2273 7.803 36.2783 20.22 36.2783 22.01C36.2783 23.834 34.9353 25.312 33.2783 25.312C32.5983 25.312 31.9783 25.054 31.4753 24.634L21.3093 15.696L34.2233 7.805Z" fill="#31373D"/>
															<path d="M26.3783 17C31.0727 17 34.8783 13.1944 34.8783 8.5C34.8783 3.80558 31.0727 0 26.3783 0C21.6839 0 17.8783 3.80558 17.8783 8.5C17.8783 13.1944 21.6839 17 26.3783 17Z" fill="#14171A"/>
															<path d="M10.3783 17C15.0727 17 18.8783 13.1944 18.8783 8.5C18.8783 3.80558 15.0727 0 10.3783 0C5.68388 0 1.8783 3.80558 1.8783 8.5C1.8783 13.1944 5.68388 17 10.3783 17Z" fill="#14171A"/>
															<path d="M10.3783 0H26.3783V16.87H10.3783V0Z" fill="#14171A"/>
															<path d="M13.4783 21.25C16.2397 21.25 18.4783 19.0114 18.4783 16.25C18.4783 13.4886 16.2397 11.25 13.4783 11.25C10.7168 11.25 8.47827 13.4886 8.47827 16.25C8.47827 19.0114 10.7168 21.25 13.4783 21.25Z" fill="#14171A"/>
															<path d="M23.2783 21.25C26.0397 21.25 28.2783 19.0114 28.2783 16.25C28.2783 13.4886 26.0397 11.25 23.2783 11.25C20.5168 11.25 18.2783 13.4886 18.2783 16.25C18.2783 19.0114 20.5168 21.25 23.2783 21.25Z" fill="#14171A"/>
															<path d="M23.2783 19.25C24.9351 19.25 26.2783 17.9069 26.2783 16.25C26.2783 14.5931 24.9351 13.25 23.2783 13.25C21.6214 13.25 20.2783 14.5931 20.2783 16.25C20.2783 17.9069 21.6214 19.25 23.2783 19.25Z" fill="#67757F"/>
															<path d="M13.4783 19.25C15.1351 19.25 16.4783 17.9069 16.4783 16.25C16.4783 14.5931 15.1351 13.25 13.4783 13.25C11.8214 13.25 10.4783 14.5931 10.4783 16.25C10.4783 17.9069 11.8214 19.25 13.4783 19.25Z" fill="#67757F"/>
															<path d="M26.1383 5.685C27.0236 5.685 27.7413 4.96731 27.7413 4.082C27.7413 3.19669 27.0236 2.479 26.1383 2.479C25.253 2.479 24.5353 3.19669 24.5353 4.082C24.5353 4.96731 25.253 5.685 26.1383 5.685Z" fill="#FFCC4D"/>
															<path d="M26.1383 12.159C27.0236 12.159 27.7413 11.4413 27.7413 10.556C27.7413 9.67069 27.0236 8.953 26.1383 8.953C25.253 8.953 24.5353 9.67069 24.5353 10.556C24.5353 11.4413 25.253 12.159 26.1383 12.159Z" fill="#77B255"/>
															<path d="M22.9013 8.922C23.7866 8.922 24.5043 8.20431 24.5043 7.319C24.5043 6.43369 23.7866 5.716 22.9013 5.716C22.016 5.716 21.2983 6.43369 21.2983 7.319C21.2983 8.20431 22.016 8.922 22.9013 8.922Z" fill="#50A5E6"/>
															<path d="M29.3753 8.922C30.2606 8.922 30.9783 8.20431 30.9783 7.319C30.9783 6.43369 30.2606 5.716 29.3753 5.716C28.49 5.716 27.7723 6.43369 27.7723 7.319C27.7723 8.20431 28.49 8.922 29.3753 8.922Z" fill="#DD2E44"/>
															<path d="M11.5513 5.463V3.295C11.5513 3.016 11.3253 2.79 11.0463 2.79H9.48826C9.20926 2.79 8.98326 3.016 8.98326 3.295V5.463L10.2673 6.748L11.5513 5.463V5.463ZM8.98226 9.093V11.261C8.98226 11.54 9.20826 11.766 9.48726 11.766H11.0453C11.3243 11.766 11.5503 11.54 11.5503 11.261V9.093L10.2663 7.808L8.98226 9.093ZM14.2513 5.993H12.0833L10.7983 7.278L12.0833 8.563H14.2513C14.5303 8.563 14.7563 8.336 14.7563 8.058V6.499C14.7563 6.22 14.5303 5.993 14.2513 5.993V5.993ZM8.45226 5.993H6.28326C6.00426 5.993 5.77826 6.22 5.77826 6.498V8.056C5.77826 8.335 6.00426 8.561 6.28326 8.561H8.45126L9.73626 7.276L8.45226 5.993V5.993Z" fill="#8899A6"/>
														</svg>
													</span>
													<span class="text">Gaming consoles</span>
													<span class="icon">
														<svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
															<polyline points="9 18 15 12 9 6"></polyline>
														</svg>
													</span>
												</a>
												<a href="catalog-departments.html" class="departments-nav__item">
													<span class="emoji-icon">
														<svg width="37" height="36" viewBox="0 0 37 36" fill="none" xmlns="https://www.w3.org/2000/svg">
															<path d="M36.2783 32C36.2783 34.209 34.4873 36 32.2783 36H4.27826C2.06926 36 0.278259 34.209 0.278259 32V4C0.278259 1.791 2.06926 0 4.27826 0H32.2783C34.4873 0 36.2783 1.791 36.2783 4V32Z" fill="#292F33"/>
															<path d="M34.2783 18C34.2783 26.837 27.1153 34 18.2783 34C9.44226 34 2.27826 26.837 2.27826 18C2.27826 9.164 9.44226 2 18.2783 2C27.1153 2 34.2783 9.164 34.2783 18ZM18.2783 15.333C16.8053 15.333 15.6113 16.527 15.6113 18C15.6113 19.473 16.8053 20.667 18.2783 20.667C19.7513 20.667 20.9453 19.473 20.9453 18C20.9453 16.527 19.7513 15.333 18.2783 15.333Z" fill="#FFD983"/>
															<path d="M14.0892 17.535C14.1982 16.553 14.6202 15.667 15.2822 15.005L8.22124 7.943C5.99524 10.169 4.50924 13.13 4.14624 16.43L14.0892 17.535ZM22.4672 18.465C22.3582 19.446 21.9352 20.332 21.2732 20.995L28.3352 28.057C30.5612 25.831 32.0472 22.87 32.4102 19.57L22.4672 18.465V18.465Z" fill="#FFAC33"/>
															<path d="M18.7473 22.189L19.8583 32.13C23.1533 31.765 26.1113 30.28 28.3343 28.056L21.2723 20.994C20.6113 21.656 19.7263 22.08 18.7473 22.189V22.189ZM17.8373 13.809L16.7893 3.856C13.4563 4.203 10.4653 5.699 8.22028 7.943L15.2823 15.005C15.9503 14.337 16.8463 13.913 17.8373 13.809Z" fill="#FFE8B6"/>
															<path d="M36.2783 21C36.2783 22.104 35.3823 23 34.2783 23H23.2783C22.1743 23 21.2783 22.104 21.2783 21V15C21.2783 13.896 22.1743 13 23.2783 13H34.2783C35.3823 13 36.2783 13.896 36.2783 15V21Z" fill="#F5F8FA"/>
														</svg>
													</span>
													<span class="text">Videogames</span>
													<span class="icon">
														<svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
															<polyline points="9 18 15 12 9 6"></polyline>
														</svg>
													</span>
												</a>
												<a href="catalog-departments.html" class="departments-nav__item">
													<span class="emoji-icon">
														<svg width="27" height="36" viewBox="0 0 27 36" fill="none" xmlns="https://www.w3.org/2000/svg">
															<path d="M19.2783 32C19.2783 34.209 17.4873 36 15.2783 36H9.27826C7.06926 36 5.27826 34.209 5.27826 32V4C5.27826 1.791 7.06926 0 9.27826 0H15.2783C17.4873 0 19.2783 1.791 19.2783 4V32Z" fill="#31373D"/>
															<path d="M26.2783 18C26.2783 16.896 25.3823 16 24.2783 16H23.2783C22.1743 16 21.2783 16.896 21.2783 18C21.2783 19.104 22.1743 20 23.2783 20H24.2783C25.3823 20 26.2783 19.104 26.2783 18Z" fill="#99AAB5"/>
															<path d="M0.278259 18C0.278259 11.373 5.65126 6 12.2783 6C18.9063 6 24.2783 11.373 24.2783 18C24.2783 24.627 18.9063 30 12.2783 30C5.65126 30 0.278259 24.627 0.278259 18Z" fill="#CCD6DD"/>
															<path d="M4.27826 18C4.27826 13.582 7.86026 10 12.2783 10C16.6973 10 20.2783 13.582 20.2783 18C20.2783 22.418 16.6973 26 12.2783 26C7.86026 26 4.27826 22.418 4.27826 18Z" fill="#F5F8FA"/>
															<path d="M17.2783 22C17.1033 22 16.9253 21.954 16.7643 21.857L11.7643 18.857C11.4633 18.677 11.2783 18.352 11.2783 18V11C11.2783 10.448 11.7263 10 12.2783 10C12.8303 10 13.2783 10.448 13.2783 11V17.434L17.7943 20.142C18.2683 20.426 18.4213 21.04 18.1373 21.514C17.9493 21.827 17.6183 22 17.2783 22V22Z" fill="#66757F"/>
														</svg>
													</span>
													<span class="text">Smart watches & Bracelets</span>
													<span class="icon">
														<svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
															<polyline points="9 18 15 12 9 6"></polyline>
														</svg>
													</span>
												</a>
												<a href="catalog-departments.html" class="departments-nav__item">
													<span class="emoji-icon">
														<svg width="35" height="36" viewBox="0 0 35 36" fill="none" xmlns="https://www.w3.org/2000/svg">
															<path d="M34.2783 26C34.2783 28.209 32.4873 30 30.2783 30H4.27826C2.06926 30 0.278259 28.209 0.278259 26V6.313C0.278259 4.104 6.06926 0 8.27826 0H28.9033C31.9973 0 34.2783 2.312 34.2783 5.375V26Z" fill="#F4900C"/>
															<path d="M32.2783 30C32.2783 32.209 30.4873 34 28.2783 34H6.27826C4.06926 34 2.27826 32.209 2.27826 30V6C2.27826 1.881 2.25726 2 7.27826 2H28.2783C30.4873 2 32.2783 3.791 32.2783 6V30Z" fill="#CCD6DD"/>
															<path d="M30.2783 31C30.2783 32.657 28.9353 34 27.2783 34H3.27826C1.62126 34 0.278259 32.657 0.278259 31V7C0.278259 5.343 1.62126 4 3.27826 4H27.2783C28.9353 4 30.2783 5.343 30.2783 7V31Z" fill="#E1E8ED"/>
															<path d="M30.2783 32C30.2783 34.209 28.4873 36 26.2783 36H5.27826C3.06926 36 1.27826 34.209 1.27826 32V10C1.27826 7.791 3.06926 6 5.27826 6H26.2783C28.4873 6 30.2783 7.791 30.2783 10V32Z" fill="#F4900C"/>
															<path d="M28.2783 32C28.2783 34.209 26.4873 36 24.2783 36H5.27826C3.06926 36 1.27826 34.209 1.27826 32V12C1.27826 9.791 3.06926 8 5.27826 8H24.6133C26.8223 8 28.2783 9.456 28.2783 11.665V32Z" fill="#FFAC33"/>
															<path d="M5.27826 6C3.59026 6 3.54726 4.078 4.27826 3.25C5.11026 2.309 6.40326 2 8.71626 2H10.2783V0H7.55926C3.59026 0 0.278259 2.5 0.278259 5.375V32C0.278259 34.209 2.06926 36 4.27826 36H6.27826V6H5.27826Z" fill="#F4900C"/>
														</svg>
													</span>
													<span class="text">E-books & Accessories</span>
													<span class="icon">
														<svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
															<polyline points="9 18 15 12 9 6"></polyline>
														</svg>
													</span>
												</a>
											</div>
										</div>
									</div>
									<div class="col-xxl-3 col-xl-3 col-lg-6 col-12">
										<div class="catgmenu__departments">
											<div class="departments-nav">
												<a href="catalog-departments.html" class="departments-nav__item">
													<span class="emoji-icon">
														<svg width="37" height="36" viewBox="0 0 37 36" fill="none" xmlns="https://www.w3.org/2000/svg">
															<path d="M36.2772 10.917C36.2772 14.72 33.1952 17.802 29.3922 17.802C25.5902 17.802 22.5082 14.72 22.5082 10.917C22.5082 7.115 25.5902 4.033 29.3922 4.033C33.1952 4.033 36.2772 7.115 36.2772 10.917Z" fill="#8899A6"/>
															<path d="M33.0882 17.568C32.7522 17.904 32.2072 17.904 31.8712 17.568L22.7442 8.44C22.4082 8.104 22.4082 7.559 22.7442 7.223L23.9612 6.006C24.2972 5.67 24.8422 5.67 25.1782 6.006L34.3052 15.134C34.6412 15.47 34.6412 16.015 34.3052 16.351L33.0882 17.568V17.568ZM27.0172 17.704L22.6922 13.377C21.9142 12.598 20.6972 12.644 19.9732 13.478L10.8152 24.052C9.59624 25.46 9.35424 27.406 10.1042 28.782L5.19324 33.694L6.60224 35.103L11.4792 30.226C12.8602 31.066 14.8902 30.835 16.3412 29.578L26.9162 20.421C27.7502 19.698 27.7972 18.481 27.0172 17.704V17.704Z" fill="#31373D"/>
															<path d="M4.27826 5V13.122C3.96426 13.047 3.63026 13 3.27826 13C1.62126 13 0.278259 13.896 0.278259 15C0.278259 16.104 1.62126 17 3.27826 17C4.93526 17 6.27826 16.104 6.27826 15V8.889L11.2783 11.111V16.122C10.9643 16.047 10.6303 16 10.2783 16C8.62126 16 7.27826 16.896 7.27826 18C7.27826 19.104 8.62126 20 10.2783 20C11.9353 20 13.2773 19.104 13.2783 18V9L4.27826 5ZM18.2783 0V8.123C17.9633 8.048 17.6313 8 17.2783 8C15.6213 8 14.2783 8.895 14.2783 10C14.2783 11.104 15.6213 12 17.2783 12C18.9343 12 20.2783 11.104 20.2783 10V0H18.2783Z" fill="#55ACEE"/>
														</svg>
													</span>
													<span class="text">Audio & Video</span>
													<span class="icon">
														<svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
															<polyline points="9 18 15 12 9 6"></polyline>
														</svg>
													</span>
												</a>
												<a href="catalog-departments.html" class="departments-nav__item">
													<span class="emoji-icon">
														<svg width="35" height="36" viewBox="0 0 35 36" fill="none" xmlns="https://www.w3.org/2000/svg">
															<path d="M4.24472 32.8078C2.48772 34.5658 0.746723 35.6738 0.355723 35.2828C-0.0352773 34.8918 1.07372 33.1508 2.83072 31.3938C4.58772 29.6358 6.32872 28.5278 6.71972 28.9188C7.10972 29.3098 6.00172 31.0498 4.24472 32.8078V32.8078Z" fill="#C1694F"/>
															<path d="M6.71974 28.9198L4.59774 26.7978C4.59774 26.7978 3.51474 28.1908 2.31374 30.4278C1.41374 32.1038 1.06274 33.1618 1.06274 33.1618L1.76974 33.8688L2.47674 34.5758C2.47674 34.5758 3.53574 34.2238 5.21074 33.3248C7.44774 32.1238 8.83974 31.0408 8.83974 31.0408L6.71974 28.9198V28.9198Z" fill="#FFCC4D"/>
															<path d="M34.2967 1.34178C30.7617 -2.19422 16.1327 11.6388 15.4257 12.3458C14.7187 13.0528 14.1217 13.6938 14.4977 14.0698L12.3767 16.1908C10.2547 18.3128 3.89074 26.0898 4.59774 26.7968L6.71974 28.9188L8.84074 31.0398C9.54774 31.7468 17.3257 25.3828 19.4477 23.2618L21.5687 21.1408C21.9447 21.5168 22.5857 20.9188 23.2927 20.2118C23.9997 19.5058 37.8327 4.87778 34.2967 1.34178V1.34178Z" fill="#31373D"/>
															<path d="M23.2927 20.2128C23.3777 20.1288 23.6547 19.8378 24.0667 19.3958L16.2437 11.5738C15.8017 11.9848 15.5117 12.2628 15.4267 12.3478C14.7197 13.0548 14.1227 13.6958 14.4987 14.0718L18.0337 17.6078L21.5697 21.1428C21.9447 21.5168 22.5857 20.9198 23.2927 20.2128V20.2128Z" fill="#FFCC4D"/>
															<path d="M31.4887 1.36278C30.5617 0.435782 29.3247 -0.536218 27.5567 0.347782C25.7887 1.23178 20.2437 4.78878 17.6787 7.35278C16.3567 8.67478 16.4317 9.45478 16.9277 9.51778C17.7487 9.62378 18.2977 9.60578 19.0497 8.85478C19.7997 8.10378 19.9327 6.82178 19.9327 6.82178C19.9327 6.82178 22.9827 4.47978 25.3907 3.04378C27.7997 1.60678 28.6587 1.36178 29.5007 2.20378C30.3427 3.04578 31.4887 1.36278 31.4887 1.36278V1.36278Z" fill="#FFAC33"/>
															<path d="M29.1467 1.84878L33.7897 6.49178C34.1427 5.78278 34.4207 5.10778 34.6077 4.48078L31.1577 1.03078C30.5307 1.21878 29.8567 1.49678 29.1467 1.84878V1.84878Z" fill="#FFAC33"/>
														</svg>
													</span>
													<span class="text">Office equipment</span>
													<span class="icon">
														<svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
															<polyline points="9 18 15 12 9 6"></polyline>
														</svg>
													</span>
												</a>
												<a href="catalog-departments.html" class="departments-nav__item">
													<span class="emoji-icon">
														<svg width="23" height="36" viewBox="0 0 23 36" fill="none" xmlns="https://www.w3.org/2000/svg">
															<path d="M4.87408 36C4.87408 36 0.874084 36 0.874084 32V4C0.874084 4 0.874084 0 4.87408 0H18.8741C18.8741 0 22.8741 0 22.8741 4V32C22.8741 32 22.8741 36 18.8741 36H4.87408Z" fill="#31373D"/>
															<path d="M3 4C3 3.44772 3.44772 3 4 3H20C20.5523 3 21 3.44772 21 4V31C21 31.5523 20.5523 32 20 32H4C3.44772 32 3 31.5523 3 31V4Z" fill="#55ACEE"/>
															<circle cx="12" cy="34" r="1" fill="#55ACEE"/>
														</svg>
													</span>
													<span class="text">Tablets & Accessories</span>
													<span class="icon">
														<svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
															<polyline points="9 18 15 12 9 6"></polyline>
														</svg>
													</span>
												</a>
												<a href="catalog-departments.html" class="departments-nav__item">
													<span class="emoji-icon">
														<svg width="37" height="36" viewBox="0 0 37 36" fill="none" xmlns="https://www.w3.org/2000/svg">
															<path d="M29.5865 16.3058L29.5975 16.2998C28.1315 16.9598 26.4955 17.0948 24.9215 16.6718C23.2955 16.2358 21.9155 15.2488 20.9745 13.8758C20.9935 13.9038 21.0085 13.9338 21.0285 13.9618L19.6095 13.8138L19.3965 15.1158C20.4155 16.5588 21.8225 17.6508 23.4655 18.2898L23.3815 18.6008C22.9735 20.1218 23.1065 21.8968 23.2475 23.7768C23.4315 26.2268 23.6225 28.7608 22.5825 30.7098C21.6045 32.5388 19.6615 33.6288 17.3775 33.6288H17.3455C15.2165 33.6188 13.2825 32.6488 12.5325 31.2138C11.9945 30.1838 11.9355 28.7828 11.8725 27.3018C11.7715 24.9088 11.6585 22.1978 9.60447 19.8588L5.65547 15.3578L4.15247 16.6768L8.10147 21.1768C9.68947 22.9878 9.78347 25.2228 9.87447 27.3858C9.94347 29.0218 10.0145 30.7138 10.7595 32.1398C11.8605 34.2458 14.4415 35.6158 17.3365 35.6288H17.3785C20.4135 35.6288 23.0165 34.1448 24.3465 31.6518C25.6605 29.1908 25.4385 26.2348 25.2415 23.6268C25.1135 21.9228 24.9925 20.3118 25.3125 19.1208L25.3975 18.8028C25.8485 18.8718 26.2995 18.9158 26.7495 18.9158C28.0015 18.9148 29.2365 18.6388 30.3935 18.1208L30.6095 16.8138L29.5865 16.3058Z" fill="#31373D"/>
															<path d="M1.86749 18.6808C0.410494 17.0208 0.575494 14.4928 2.23549 13.0358C3.89549 11.5788 6.42349 11.7438 7.88049 13.4038C9.33749 15.0648 9.17249 17.5918 7.51249 19.0488C5.85249 20.5058 3.32449 20.3418 1.86749 18.6808V18.6808Z" fill="#99AAB5"/>
															<path d="M3.37148 17.3618C2.64248 16.5318 2.72548 15.2678 3.55548 14.5398C4.38548 13.8108 5.64948 13.8938 6.37748 14.7238C7.10648 15.5538 7.02348 16.8178 6.19348 17.5458C5.36348 18.2748 4.09948 18.1918 3.37148 17.3618V17.3618Z" fill="#31373D"/>
															<path d="M30.4005 18.1318L29.5865 16.3058C31.5225 15.4408 32.9485 13.7718 33.4975 11.7268L34.2755 8.82979C34.5615 7.76479 33.9275 6.66579 32.8625 6.37879L33.3825 4.44679C35.5125 5.01979 36.7795 7.21779 36.2075 9.34779L35.4295 12.2448C34.7225 14.8748 32.8895 17.0198 30.4005 18.1318V18.1318ZM19.3945 15.1178C17.8395 12.9208 17.3475 10.1718 18.0445 7.57579L18.8225 4.67879C19.3945 2.54779 21.5935 1.28079 23.7225 1.85279L23.2035 3.78479C22.1365 3.49879 21.0395 4.13279 20.7535 5.19779L19.9755 8.09579C19.4325 10.1148 19.8155 12.2538 21.0265 13.9628L19.3945 15.1178V15.1178Z" fill="#99AAB5"/>
															<path d="M23.1695 5.84579C22.3695 5.63079 21.8955 4.80779 22.1105 4.00779L22.8885 1.11079C23.1035 0.310789 23.9265 -0.163211 24.7265 0.0517889C25.5265 0.266789 26.0005 1.08979 25.7855 1.88979L25.0075 4.78679C24.7925 5.58679 23.9695 6.06079 23.1695 5.84579V5.84579ZM31.8615 8.18079C31.0615 7.96579 30.5875 7.14279 30.8025 6.34279L31.5805 3.44579C31.7955 2.64579 32.6185 2.17179 33.4185 2.38679C34.2185 2.60179 34.6925 3.42479 34.4785 4.22479L33.7005 7.12179C33.4845 7.92179 32.6615 8.39579 31.8615 8.18079V8.18079Z" fill="#31373D"/>
														</svg>
													</span>
													<span class="text">Electronics care products</span>
													<span class="icon">
														<svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
															<polyline points="9 18 15 12 9 6"></polyline>
														</svg>
													</span>
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="catgmenu__brands">
									<div class="swiper" id="catgmenu-brands-slider">
										<div class="swiper-wrapper">
											<div class="swiper-slide">
												<div class="slide-cont">
													<div class="product-brand-item">
														<div class="brand">
															<div class="brand__logo">
																<a href="catalog-departments.html" class="a-block"><img src="images/dist/brands/img-1.png" alt="Brand logo"></a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="swiper-slide">
												<div class="slide-cont">
													<div class="product-brand-item">
														<div class="brand">
															<div class="brand__logo">
																<a href="catalog-departments.html" class="a-block"><img src="images/dist/brands/img-2.png" alt="Brand logo"></a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="swiper-slide">
												<div class="slide-cont">
													<div class="product-brand-item">
														<div class="brand">
															<div class="brand__logo">
																<a href="catalog-departments.html" class="a-block"><img src="images/dist/brands/img-3.png" alt="Brand logo"></a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="swiper-slide">
												<div class="slide-cont">
													<div class="product-brand-item">
														<div class="brand">
															<div class="brand__logo">
																<a href="catalog-departments.html" class="a-block"><img src="images/dist/brands/img-4.png" alt="Brand logo"></a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="swiper-slide">
												<div class="slide-cont">
													<div class="product-brand-item">
														<div class="brand">
															<div class="brand__logo">
																<a href="catalog-departments.html" class="a-block"><img src="images/dist/brands/img-5.png" alt="Brand logo"></a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="swiper-slide">
												<div class="slide-cont">
													<div class="product-brand-item">
														<div class="brand">
															<div class="brand__logo">
																<a href="catalog-departments.html" class="a-block"><img src="images/dist/brands/img-6.png" alt="Brand logo"></a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="swiper-slide">
												<div class="slide-cont">
													<div class="product-brand-item">
														<div class="brand">
															<div class="brand__logo">
																<a href="catalog-departments.html" class="a-block"><img src="images/dist/brands/img-7.png" alt="Brand logo"></a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="swiper-slide">
												<div class="slide-cont">
													<div class="product-brand-item">
														<div class="brand">
															<div class="brand__logo">
																<a href="catalog-departments.html" class="a-block"><img src="images/dist/brands/img-8.png" alt="Brand logo"></a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="swiper-slide">
												<div class="slide-cont">
													<div class="product-brand-item">
														<div class="brand">
															<div class="brand__logo">
																<a href="catalog-departments.html" class="a-block"><img src="images/dist/brands/img-9.png" alt="Brand logo"></a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            @livewire('category')
		</header>
		<!-- ~~~~~~~~~~~~~~~~~ Main navigation header [END] ~~~~~~~~~~~~~~~~~ -->
        @yield('content')
		<!-- ~~~~~~~~~~~~~~~~~ Main preloader [START] ~~~~~~~~~~~~~~~~~ -->
		<div class="main-content-preloader anim-zoominout" id="main-content-preloader">
			<div class="preloader-layout">
				<div class="preloader-layout__circle">
					<div class="preloader-layout__dot"></div>
				</div>
			</div>
		</div>
		<!-- ~~~~~~~~~~~~~~~~~ Main preloader [END] ~~~~~~~~~~~~~~~~~ -->
		<!-- ~~~~~~~~~~~~~~~~~ Main mobile navbar[START] ~~~~~~~~~~~~~~~~~ -->
		<div class="main-mobnav-section">
			<a href="index.html" class="main-mobnav-section__item-link active">
				<span class="main-mobnav-section__item">
					<span class="icon">
						<svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
							<path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
							<polyline points="9 22 9 12 15 12 15 22"></polyline>
						</svg>
					</span>
				</span>
			</a>
			<a href="catalog-departments.html" class="main-mobnav-section__item-link">
				<span class="main-mobnav-section__item">
					<span class="icon">
						<svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
							<circle cx="11" cy="11" r="8"></circle>
							<line x1="21" y1="21" x2="16.65" y2="16.65"></line>
						</svg>
					</span>
				</span>
			</a>
			<a href="profile-favorites.html" class="main-mobnav-section__item-link">
				<span class="main-mobnav-section__item">
					<span class="icon">
						<svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
							<path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
						</svg>
						<small class="count-ind"></small>
					</span>
				</span>
			</a>
			<a href="profile-data.html" class="main-mobnav-section__item-link">
				<span class="main-mobnav-section__item">
					<span class="icon">
						<svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
							<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
							<circle cx="12" cy="7" r="4"></circle>
						</svg>
					</span>
				</span>
			</a>
			<a href="basket.html" class="main-mobnav-section__item-link">
				<span class="main-mobnav-section__item">
					<span class="icon">
						<svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag">
							<path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
							<line x1="3" y1="6" x2="21" y2="6"></line>
							<path d="M16 10a4 4 0 0 1-8 0"></path>
						</svg>
						<small class="count-ind"></small>
					</span>
				</span>
			</a>
		</div>
		<!-- ~~~~~~~~~~~~~~~~~ Main mobile navbar[END] ~~~~~~~~~~~~~~~~~ -->
		<!-- ~~~~~~~~~~~~~~~~~ Main navigation footer [START] ~~~~~~~~~~~~~~~~~ -->
		<footer class="main-footer-section">
			<div class="main-footer-section__topline">
				<div class="page-margin">
					<div class="page-margin__content">
						<div class="main-footer-section__subscribe">
							<div class="row">
								<div class="col-xl-4">
									<div class="main-footer-section__subscribe-cta">
										<div class="subscribe-cta">
											<div class="subscribe-cta__icon">
												<svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="https://www.w3.org/2000/svg">
													<path d="M17 36C26.3888 36 34 28.3888 34 19C34 9.61116 26.3888 2 17 2C7.61116 2 0 9.61116 0 19C0 28.3888 7.61116 36 17 36Z" fill="#FFCC4D"/>
													<path d="M17.999 28.5C19.1036 28.5 19.999 27.3807 19.999 26C19.999 24.6193 19.1036 23.5 17.999 23.5C16.8944 23.5 15.999 24.6193 15.999 26C15.999 27.3807 16.8944 28.5 17.999 28.5Z" fill="#664500"/>
													<path d="M8.111 21.383C7.929 21.383 7.744 21.333 7.579 21.229C7.112 20.935 6.972 20.318 7.266 19.85C8.182 18.397 10.967 15.912 14.956 16.888C15.492 17.019 15.82 17.561 15.689 18.097C15.557 18.633 15.013 18.959 14.48 18.83C10.876 17.948 8.978 20.886 8.959 20.916C8.768 21.218 8.443 21.383 8.111 21.383V21.383ZM20.084 17.641C19.794 17.641 19.508 17.516 19.31 17.275C18.96 16.848 19.022 16.217 19.45 15.867C22.626 13.263 26.212 14.305 27.665 15.221C28.132 15.515 28.272 16.133 27.977 16.6C27.684 17.065 27.069 17.207 26.601 16.915C26.463 16.831 23.549 15.092 20.717 17.414C20.531 17.567 20.307 17.641 20.084 17.641Z" fill="#664500"/>
													<path d="M13.346 31.273C13.278 31.273 13.209 31.264 13.141 31.245C12.743 31.132 12.511 30.718 12.624 30.319C13.061 28.779 12.882 27.29 12.134 26.233C11.637 25.531 10.929 25.102 10.191 25.055C9.77699 25.03 9.46299 24.673 9.48899 24.26C9.51499 23.847 9.86999 23.509 10.284 23.559C11.477 23.633 12.597 24.292 13.357 25.366C14.368 26.795 14.627 28.749 14.066 30.727C13.973 31.058 13.672 31.273 13.346 31.273ZM24.383 28.212C24.241 28.212 24.098 28.172 23.971 28.088C22.804 27.318 22.151 25.971 22.179 24.393C22.208 22.758 22.988 21.24 24.163 20.524C24.516 20.308 24.977 20.42 25.193 20.775C25.409 21.129 25.297 21.589 24.942 21.805C24.207 22.253 23.698 23.304 23.678 24.419C23.658 25.474 24.067 26.355 24.796 26.836C25.142 27.064 25.237 27.529 25.009 27.875C24.865 28.094 24.627 28.212 24.383 28.212V28.212Z" fill="#E2A62D"/>
													<path d="M17.179 2.72C17.136 2.671 17.069 2.644 16.99 2.629C16.99 2.629 1.066 -0.393996 0.377 0.214004C-0.311 0.823004 0.74 16.998 0.74 16.998C0.745 17.079 0.763 17.148 0.807 17.197C1.411 17.881 5.565 15.193 10.086 11.196C14.608 7.198 17.783 3.404 17.179 2.72V2.72Z" fill="#DD2E44"/>
													<path d="M0.349005 0.271003C0.334005 0.301003 0.321005 0.342003 0.311005 0.394003C0.470005 1.765 2.006 13.046 2.963 16.572C4.399 15.769 5.858 14.678 7.572 13.319C6.116 10.654 1.158 0.146003 0.349005 0.271003Z" fill="#EA596E"/>
													<path d="M29.902 29.229L19.329 27.926C18.199 27.824 16.212 27.814 16.314 26.024C16.407 24.401 18.354 24.651 19.793 24.864L30.431 26.638L29.902 29.229V29.229Z" fill="#3B88C3"/>
													<path d="M30.43 26.639L26.208 25.915C25.714 25.826 25.274 26.562 25.252 27.341C25.227 28.207 25.479 28.645 25.978 28.747L30.122 29.259L30.43 26.639V26.639Z" fill="#88C9F9"/>
													<path d="M34.918 26.341L32.296 28.752L27.609 23.655L30.231 21.244C31.592 19.992 33.73 20.082 34.982 21.443L35.117 21.59C36.368 22.952 36.279 25.089 34.918 26.341Z" fill="#3B88C3"/>
													<path d="M32.2944 28.7534C33.4205 27.7179 33.2844 25.7375 31.9903 24.33C30.6961 22.9225 28.7341 22.6209 27.608 23.6564C26.4818 24.6918 26.618 26.6722 27.9121 28.0797C29.2062 29.4872 31.1682 29.7888 32.2944 28.7534Z" fill="#88C9F9"/>
													<path d="M31.357 27.7338C31.92 27.2161 31.7471 26.1119 30.9707 25.2675C30.1943 24.423 29.1085 24.1582 28.5454 24.6759C27.9823 25.1937 28.1552 26.2979 28.9316 27.1423C29.708 27.9867 30.7939 28.2516 31.357 27.7338Z" fill="#226699"/>
													<path d="M2.5 35C3.32843 35 4 34.3284 4 33.5C4 32.6716 3.32843 32 2.5 32C1.67157 32 1 32.6716 1 33.5C1 34.3284 1.67157 35 2.5 35Z" fill="#55ACEE"/>
													<path d="M29 4C30.1046 4 31 3.10457 31 2C31 0.89543 30.1046 0 29 0C27.8954 0 27 0.89543 27 2C27 3.10457 27.8954 4 29 4Z" fill="#55ACEE"/>
													<path d="M4.864 29.246L2.526 23.63L0.412003 29.675L4.864 29.246ZM26 5L22 6L23 2L26 5Z" fill="#EA596E"/>
													<path d="M31.999 13L36 7.999L33 6L31.999 13Z" fill="#77B255"/>
												</svg>
											</div>
											<div class="subscribe-cta__text">
												<h2>VTP MARKETPLACE</h2>
												<p>
													vtp market est une  plateforme d'echange et de vente de produit d'afrique à l'afrique et de l'europe à l'afrique .
												</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4">
									<div class="main-footer-section__subscribe-form">
										<form action="#" class="form">
											<div class="form-group flex-1">
												<div class="email-input">
													<input class="form-control" type="email" placeholder="kgsdev8@gmail.com">
													<button class="subscribe-btn" type="button">
														<svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send">
															<line x1="22" y1="2" x2="11" y2="13"></line>
															<polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
														</svg>
													</button>
												</div>
												<div class="subscribe-tos">
													<span>
														en entrant votre email vous acceptez les conditions d'utilisations de vtp
														<a href="#">Politique de confidentialité</a>
														et
														<a href="#">charte.</a>
													</span>
												</div>
											</div>
										</form>
									</div>
								</div>
								<div class="col-xl-4">
									<div class="main-footer-section__qr-code">
										<div class="qr-code">
											<div class="qr-code__image">
												<img src="assets/images/dist/QR/img-1.png" alt="QR code">
											</div>
											<div class="qr-code__links">
												<div class="qr-code__text">
													<span>Télecharger notre application sur les differentes stores </span>
												</div>
												<div class="qr-code__get-apps">
													<a href="#">
														<svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
															<path fill-rule="evenodd" clip-rule="evenodd" d="M13.17 11.96l-7.65 9.4C4.38 21.33 3.6 20.4 3.6 19V5c0-1.4.78-2.35 1.95-2.35h.03l.04.01 7.55 9.3zm3.81-3.1l2.1 1.2c.85.5 1.32 1.18 1.32 1.94 0 .75-.47 1.44-1.32 1.93l-2.05 1.18-2.57-3.16 2.52-3.1zm-.88-.5L7.5 3.37l6.32 7.78 2.28-2.8zM7.33 20.71l6.49-7.97 2.33 2.87-8.82 5.1z" fill="#B2B3C2"/>
														</svg>
													</a>
													<a href="#">
														<svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
															<path fill-rule="evenodd" clip-rule="evenodd" d="M7.61 2C3.51 2 2 3.5 2 7.61v8.78C2 20.49 3.5 22 7.61 22h8.78c4.1 0 5.61-1.5 5.61-5.61V7.6C22 3.51 20.5 2 16.39 2H7.6zm3.11 11.6h.8l-.4-.94-.4.94zm-.2.47l-.23.55h-.54L10.9 12h.47l1.15 2.62h-.56l-.24-.55h-1.2zm8.73.54h.53V12h-.53v2.61zm-2.08-1.12h.96v-.48h-.96v-.53h1.4V12h-1.93v2.62h1.98v-.48h-1.45v-.65zm-2.09.31L14.5 12h-.43l-.6 1.8-.58-1.8h-.56l.91 2.62h.44l.6-1.72.6 1.72h.43l.91-2.62h-.55l-.58 1.8zm-6.13-.3c0 .42-.22.65-.6.65-.39 0-.6-.23-.6-.67V12h-.53v1.5c0 .74.41 1.16 1.12 1.16.72 0 1.14-.43 1.14-1.18V12h-.53v1.5zm-3-1.5h.53v2.62h-.53v-1.06h-1.2v1.06h-.53V12h.53v1.06h1.2V12zm2.72-6.67a3.34 3.34 0 006.66 0h-.47a2.87 2.87 0 01-5.72 0h-.47z" fill="#B2B3C2"/>
														</svg>
													</a>
													<a href="#">
														<svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
															<path d="M20.49 16.59c-.3.7-.66 1.34-1.08 1.93a9.82 9.82 0 01-1.38 1.67c-.55.51-1.15.77-1.78.79-.46 0-1-.13-1.64-.4a4.72 4.72 0 00-1.77-.39c-.57 0-1.18.13-1.82.4a4.9 4.9 0 01-1.58.4c-.6.03-1.21-.23-1.82-.8a11.99 11.99 0 01-2.98-4.78A11.15 11.15 0 014 11.8c0-1.34.29-2.5.87-3.46a5.1 5.1 0 014.28-2.54c.49 0 1.12.15 1.9.44.8.3 1.3.45 1.52.45.16 0 .72-.18 1.67-.53.9-.32 1.66-.46 2.28-.4 1.68.13 2.94.8 3.79 2a4.21 4.21 0 00-2.24 3.82 4.55 4.55 0 002.77 4.09c-.1.32-.23.63-.35.93zM16.63 1.4c0 1-.36 1.93-1.1 2.8-.87 1.03-1.93 1.62-3.09 1.53a4.38 4.38 0 011.14-3.2c.37-.44.84-.79 1.41-1.07s1.11-.43 1.62-.46l.02.4z" fill="#B2B3C2"/>
														</svg>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="main-footer-section__midline">
				<div class="page-margin">
					<div class="page-margin__content">
						<div class="main-footer-section__midline-links">
							<a href="catalog-departments.html">Devenir transporteur</a>
							<a href="blog.html">Dévenir vendeur</a>
							<a href="aboutus.html">A propos </a>
							<a href="faq.html">F.A.Qs</a>
							<a href="privacy-policy.html">Catalogue produit</a>
							<a href="terms-of-use.html">Terme et conditions</a>
							<a href="contact.html">Devenir partenaire</a>
							<a href="#" class="ml-auto">&copy; VTP market - All rights reserved.</a>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- ~~~~~~~~~~~~~~~~~ Main navigation footer [END] ~~~~~~~~~~~~~~~~~ -->
		<!-- ~~~~~~~~~~~~~~~~~ Main support chat button [START] ~~~~~~~~~~~~~~~~~ -->
		<div class="bottom-chat">
			<div class="bottom-chat__options" id="bottom-chat-options">
				<div class="bottom-chat__option-item-wrap">
					<a href="#" target="_blank" class="bottom-chat__option-item discord">
						<svg xmlns="https://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
							<path d="M467.16 303.6a205.69 205.69 0 004.9-45.15c0-116.32-95.69-210.7-213.79-210.7a221.83 221.83 0 00-36.52 3A123.58 123.58 0 00155.93 32C87.55 32 32 86.72 32 154.15A119.56 119.56 0 0049 216a211.16 211.16 0 00-4.32 42.35c0 116.44 95.69 210.7 213.67 210.7a214 214 0 0039.09-3.5A125.45 125.45 0 00356.07 480C424.57 480 480 425.28 480 357.85a118 118 0 00-12.84-54.25zM368 359c-9.92 13.76-24.51 24.73-43.41 32.43S283.36 403 257.69 403c-30.69 0-56.36-5.37-76.55-15.87a101 101 0 01-35.24-30.8c-9.11-12.83-13.66-25.66-13.66-38 0-7.7 3-14.35 8.87-19.95 5.84-5.37 13.42-8.17 22.29-8.17 7.35 0 13.65 2.1 18.79 6.42 4.9 4.08 9.1 10.15 12.48 18.08A108.09 108.09 0 00207 336.15q6.32 8.22 17.86 13.65c7.82 3.62 18.2 5.48 31 5.48 17.62 0 32.09-3.73 42.94-11.08 10.74-7.12 15.88-15.75 15.88-26.25 0-8.28-2.69-14.82-8.29-19.95-5.83-5.37-13.42-9.57-22.87-12.37-9.69-3-22.87-6.18-39.21-9.56-22.17-4.67-41-10.27-56-16.57-15.28-6.42-27.65-15.4-36.76-26.48-9.22-11.32-13.77-25.55-13.77-42.24a67.86 67.86 0 0114.47-42.58c9.57-12.25 23.46-21.82 41.55-28.35 17.74-6.53 38.86-9.8 62.66-9.8 19.14 0 35.83 2.22 49.83 6.42s25.91 10.15 35.36 17.38 16.34 14.93 20.77 23 6.66 16.22 6.66 24c0 7.46-2.92 14.35-8.76 20.3a29.65 29.65 0 01-21.94 9.1c-7.93 0-14.12-1.87-18.43-5.6-4-3.5-8.17-8.87-12.72-16.69-5.37-9.91-11.79-17.85-19.14-23.45-7.24-5.36-19.14-8.16-35.71-8.16-15.29 0-27.77 3-37 9-8.87 5.72-13.19 12.37-13.19 20.18a18.26 18.26 0 004.32 12.25 38.13 38.13 0 0012.72 9.57 90.14 90.14 0 0017.15 6.53c6 1.64 15.87 4.09 29.53 7.12 17.38 3.62 33.25 7.82 47.26 12.13 14.24 4.55 26.49 10 36.52 16.45a72.93 72.93 0 0124.16 25.09c5.72 10 8.64 22.63 8.64 37.1A75.09 75.09 0 01368 359z"/>
						</svg>
					</a>
				</div>
				<div class="bottom-chat__option-item-wrap">
					<a href="#" target="_blank" class="bottom-chat__option-item skype">
						<svg xmlns="https://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
							<path d="M464 66.52A50 50 0 00414.12 17L97.64 16A49.65 49.65 0 0048 65.52V392c0 27.3 22.28 48 49.64 48H368l-13-44 109 100zM324.65 329.81s-8.72-10.39-16-19.32C340.39 301.55 352.5 282 352.5 282a139 139 0 01-27.85 14.25 173.31 173.31 0 01-35.11 10.39 170.05 170.05 0 01-62.72-.24 184.45 184.45 0 01-35.59-10.4 141.46 141.46 0 01-17.68-8.21c-.73-.48-1.45-.72-2.18-1.21-.49-.24-.73-.48-1-.48-4.36-2.42-6.78-4.11-6.78-4.11s11.62 19.09 42.38 28.26c-7.27 9.18-16.23 19.81-16.23 19.81-53.51-1.69-73.85-36.47-73.85-36.47 0-77.06 34.87-139.62 34.87-139.62 34.87-25.85 67.8-25.12 67.8-25.12l2.42 2.9c-43.59 12.32-63.44 31.4-63.44 31.4s5.32-2.9 14.28-6.77c25.91-11.35 46.5-14.25 55-15.21a24 24 0 014.12-.49 205.62 205.62 0 0148.91-.48 201.62 201.62 0 0172.89 22.95s-19.13-18.15-60.3-30.45l3.39-3.86s33.17-.73 67.81 25.16c0 0 34.87 62.56 34.87 139.62 0-.28-20.35 34.5-73.86 36.19z"/>
							<path d="M212.05 218c-13.8 0-24.7 11.84-24.7 26.57s11.14 26.57 24.7 26.57c13.8 0 24.7-11.83 24.7-26.57.25-14.76-10.9-26.57-24.7-26.57zM300.43 218c-13.8 0-24.7 11.84-24.7 26.57s11.14 26.57 24.7 26.57c13.81 0 24.7-11.83 24.7-26.57S314 218 300.43 218z"/>
						</svg>
					</a>
				</div>
				<div class="bottom-chat__option-item-wrap">
					<a href="#" target="_blank" class="bottom-chat__option-item snapchat">
						<svg xmlns="https://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
							<path d="M496 347.21a190.31 190.31 0 01-32.79-5.31c-27.28-6.63-54.84-24.26-68.12-52.43-6.9-14.63-2.64-18.59 11.86-24 14.18-5.27 29.8-7.72 36.86-23 5.89-12.76 1.13-27.76-10.41-35.49-15.71-10.53-30.35-.21-46.62 2.07 3.73-46.66 8.66-88.57-22.67-127.73C338.14 48.86 297.34 32 256.29 32s-81.86 16.86-107.81 49.33c-31.38 39.26-26.4 81.18-22.67 127.92-16.32-2.25-30.81-12.79-46.63-2.18-14.72 9.85-17 29.76-5.44 43s31.64 9.5 43.45 20.6c6.49 6.09 3.49 12.61-.35 20.14-14.48 28.4-39.26 45.74-69.84 51.56-4 .76-22.31 2.87-31 3.65 0 9.28.52 16.78 1.63 21.73 2.94 13.06 12.32 23.58 23.69 30.1 11.18 6.4 35.48 6.43 41.68 15.51 3 4.48 1.76 12.28 5.33 17.38a23.8 23.8 0 0015.37 9.75c18.61 3.61 37.32-7.2 56.42-2.1 14.85 3.95 26.52 15.87 39.26 24 15.51 9.85 32.34 16.42 50.83 17.49 38.1 2.21 59.93-18.91 90.58-36.42 19.5-11.14 38.15-3.86 58.88-2.68 20.1 1.15 23.53-9.25 29.62-24.88a27.37 27.37 0 001.54-4.85 10.52 10.52 0 002.28-1.47c2-1.57 10.55-2.34 12.76-2.86 10.28-2.44 20.34-5.15 29.17-11.2 11.31-7.76 17.65-18.5 19.58-32.64a93.73 93.73 0 001.38-15.67zM208 128c8.84 0 16 10.74 16 24s-7.16 24-16 24-16-10.74-16-24 7.16-24 16-24zm103.62 77.7c-15.25 15-35 23.3-55.62 23.3a78.37 78.37 0 01-55.66-23.34 8 8 0 0111.32-11.32A62.46 62.46 0 00256 213c16.39 0 32.15-6.64 44.39-18.7a8 8 0 0111.23 11.4zM304 176c-8.84 0-16-10.75-16-24s7.16-24 16-24 16 10.75 16 24-7.16 24-16 24z"/>
						</svg>
					</a>
				</div>
				<div class="bottom-chat__option-item-wrap">
					<a href="#" target="_blank" class="bottom-chat__option-item whatsapp">
						<svg xmlns="https://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
							<path d="M414.73 97.1A222.14 222.14 0 00256.94 32C134 32 33.92 131.58 33.87 254a220.61 220.61 0 0029.78 111L32 480l118.25-30.87a223.63 223.63 0 00106.6 27h.09c122.93 0 223-99.59 223.06-222A220.18 220.18 0 00414.73 97.1zM256.94 438.66h-.08a185.75 185.75 0 01-94.36-25.72l-6.77-4-70.17 18.32 18.73-68.09-4.41-7A183.46 183.46 0 0171.53 254c0-101.73 83.21-184.5 185.48-184.5a185 185 0 01185.33 184.64c-.04 101.74-83.21 184.52-185.4 184.52zm101.69-138.19c-5.57-2.78-33-16.2-38.08-18.05s-8.83-2.78-12.54 2.78-14.4 18-17.65 21.75-6.5 4.16-12.07 1.38-23.54-8.63-44.83-27.53c-16.57-14.71-27.75-32.87-31-38.42s-.35-8.56 2.44-11.32c2.51-2.49 5.57-6.48 8.36-9.72s3.72-5.56 5.57-9.26.93-6.94-.46-9.71-12.54-30.08-17.18-41.19c-4.53-10.82-9.12-9.35-12.54-9.52-3.25-.16-7-.2-10.69-.2a20.53 20.53 0 00-14.86 6.94c-5.11 5.56-19.51 19-19.51 46.28s20 53.68 22.76 57.38 39.3 59.73 95.21 83.76a323.11 323.11 0 0031.78 11.68c13.35 4.22 25.5 3.63 35.1 2.2 10.71-1.59 33-13.42 37.63-26.38s4.64-24.06 3.25-26.37-5.11-3.71-10.69-6.48z" fill-rule="evenodd"/>
						</svg>
					</a>
				</div>
				<div class="bottom-chat__option-item-wrap">
					<a href="#" target="_blank" class="bottom-chat__option-item telegram">
						<svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="feather" fill="#239bcd">
							<path d="M9.78,18.65L10.06,14.42L17.74,7.5C18.08,7.19 17.67,7.04 17.22,7.31L7.74,13.3L3.64,12C2.76,11.75 2.75,11.14 3.84,10.7L19.81,4.54C20.54,4.21 21.24,4.72 20.96,5.84L18.24,18.65C18.05,19.56 17.5,19.78 16.74,19.36L12.6,16.3L10.61,18.23C10.38,18.46 10.19,18.65 9.78,18.65Z"></path>
						</svg>
					</a>
				</div>
			</div>
			<div class="bottom-chat__trigger">
				<button class="chat-button chat-button_closed" id="support-chat-button">
					<span class="chat-button__icon chat-button__icon_closed">
						<svg xmlns="https://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
							<path d="M431 320.6c-1-3.6 1.2-8.6 3.3-12.2a33.68 33.68 0 012.1-3.1A162 162 0 00464 215c.3-92.2-77.5-167-173.7-167-83.9 0-153.9 57.1-170.3 132.9a160.7 160.7 0 00-3.7 34.2c0 92.3 74.8 169.1 171 169.1 15.3 0 35.9-4.6 47.2-7.7s22.5-7.2 25.4-8.3a26.44 26.44 0 019.3-1.7 26 26 0 0110.1 2l56.7 20.1a13.52 13.52 0 003.9 1 8 8 0 008-8 12.85 12.85 0 00-.5-2.7z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32"/>
							<path d="M66.46 232a146.23 146.23 0 006.39 152.67c2.31 3.49 3.61 6.19 3.21 8s-11.93 61.87-11.93 61.87a8 8 0 002.71 7.68A8.17 8.17 0 0072 464a7.26 7.26 0 002.91-.6l56.21-22a15.7 15.7 0 0112 .2c18.94 7.38 39.88 12 60.83 12A159.21 159.21 0 00284 432.11" fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32"/>
						</svg>
					</span>
					<span class="chat-button__icon chat-button__icon_opened">
						<svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
							<line x1="18" y1="6" x2="6" y2="18"></line>
							<line x1="6" y1="6" x2="18" y2="18"></line>
						</svg>
					</span>
				</button>
			</div>
		</div>
		<!-- ~~~~~~~~~~~~~~~~~ Main support chat button [END] ~~~~~~~~~~~~~~~~~ -->
		<!-- ~~~~~~~~~~~~~~~~~ User location Selection modal window [START] ~~~~~~~~~~~~~~~~~ -->
		<div class="modal fade region-selector" tabindex="-1" role="dialog" id="select-city">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">
							Select Region or City
						</h5>
						<button type="button" class="btn btn-icon-only" data-dismiss="modal">
							<svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
								<line x1="18" y1="6" x2="6" y2="18"></line>
								<line x1="6" y1="6" x2="18" y2="18"></line>
							</svg>
						</button>
					</div>
					<div class="modal-body">
						<div class="selector-form">
							<form action="#" class="form">
								<div class="form-group mb-20">
									<div class="selector-input">
										<input type="text" class="form-control" placeholder="E.g. Istanbul">
										<button class="searchbar-btn">
											<svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
												<circle cx="11" cy="11" r="8"></circle>
												<line x1="21" y1="21" x2="16.65" y2="16.65"></line>
											</svg>
										</button>
									</div>
								</div>
								<div class="form-group">
									<div class="locations-list">
										<div class="locations-list__item active">
											<span class="text">Istanbul</span>
											<span class="icon">
												<svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
													<polyline points="20 6 9 17 4 12"></polyline>
												</svg>
											</span>
										</div>
										<div class="locations-list__item">
											<span class="text">Antalya</span>
										</div>
										<div class="locations-list__item">
											<span class="text">Paris</span>
										</div>
										<div class="locations-list__item">
											<span class="text">New York City</span>
										</div>
										<div class="locations-list__item">
											<span class="text">London</span>
										</div>
										<div class="locations-list__item">
											<span class="text">Bangkok</span>
										</div>
										<div class="locations-list__item">
											<span class="text">Hong Kong</span>
										</div>
										<div class="locations-list__item">
											<span class="text">Dubai</span>
										</div>
										<div class="locations-list__item">
											<span class="text">Singapore</span>
										</div>
										<div class="locations-list__item">
											<span class="text">Rome</span>
										</div>
										<div class="locations-list__item">
											<span class="text">Macau</span>
										</div>
										<div class="locations-list__item">
											<span class="text">Kuala Lumpur</span>
										</div>
										<div class="locations-list__item">
											<span class="text">Delhi</span>
										</div>
										<div class="locations-list__item">
											<span class="text">Tokyo</span>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary btn-icon btn-lg btn-block outline">
							<span class="icon">
								<svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-compass">
									<circle cx="12" cy="12" r="10"></circle>
									<polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"></polygon>
								</svg>
							</span>
							<span class="text">Detect automatically</span>
						</button>
					</div>
				</div>
			</div>
		</div>
		<!-- ~~~~~~~~~~~~~~~~~ User location Selection modal window [END] ~~~~~~~~~~~~~~~~~ -->
		<!-- ~~~~~~~~~~~~~~~~~ JS Plugins ~~~~~~~~~~~~~~~~~ -->
		<script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
		<script src="assets/js/plugins/swiper-bundle.min.js"></script>
		<script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
		<!-- ~~~~~~~~~~~~~~~~~ JS Files (Main JS) ~~~~~~~~~~~~~~~~~ -->
		<script src="assets/js/main.js"></script>
		<script src="assets/js/pages/home/script.master.js"></script>
        @livewireScripts
	</body>
</html>

