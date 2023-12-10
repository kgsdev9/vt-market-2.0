@extends('layouts.layout')
@section('content')
<div class="page-container home">
    <!-- ~~~~~~~~~~~~~~~~~ Homepage hero section [START] ~~~~~~~~~~~~~~~~~ -->
    <div class="page-section hero">
        <div class="page-section__body">
            <div class="page-margin">
                <div class="page-margin__content">
                    <div class="hero-slider">
                        <div class="swiper" id="hero-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="catalog-filter.html" class="a-block">
                                        <div class="slide-cont">
                                            <img src="assets/images/dist/hero-banners/img-2-2250x800.png" alt="IMG">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="catalog-filter.html" class="a-block">
                                        <div class="slide-cont">
                                            <img src="assets/images/dist/hero-banners/img-2-2250x800.png" alt="IMG">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="catalog-filter.html" class="a-block">
                                        <div class="slide-cont">
                                            <img src="assets/images/dist/hero-banners/img-1-2250x800.png" alt="IMG">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-button-prev">
                                <button class="btn slider-btn prev">
                                    <svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                                        <polyline points="15 18 9 12 15 6"></polyline>
                                    </svg>
                                </button>
                            </div>
                            <div class="swiper-button-next">
                                <button class="btn slider-btn next">
                                    <svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~ Homepage hero section [END] ~~~~~~~~~~~~~~~~~ -->
    <!-- ~~~~~~~~~~~~~~~~~ Homepage bestsellers section [START] ~~~~~~~~~~~~~~~~~ -->
    @livewire('card-product')
    <!-- ~~~~~~~~~~~~~~~~~ Homepage bestsellers section [END] ~~~~~~~~~~~~~~~~~ -->
    <!-- ~~~~~~~~~~~~~~~~~ Homepage promo banner-slides section [START] ~~~~~~~~~~~~~~~~~ -->
    <div class="page-section promo-banners">
        <div class="page-margin">
            <div class="page-margin__content">
                <div class="page-section__header">
                    <h2>Categorie populaire</h2>
                </div>
                <div class="page-section__body">
                    <div class="promos-slider">
                        <div class="swiper" id="promos-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="product.html">
                                        <div class="slide-cont">
                                            <img src="images/dist/promos/img-1-820x516.jpg" alt="IMG">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="product.html">
                                        <div class="slide-cont">
                                            <img src="images/dist/promos/img-2-820x516.jpg" alt="IMG">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="product.html">
                                        <div class="slide-cont">
                                            <img src="images/dist/promos/img-3-820x516.jpg" alt="IMG">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="product.html">
                                        <div class="slide-cont">
                                            <img src="images/dist/promos/img-4-820x516.jpg" alt="IMG">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="product.html">
                                        <div class="slide-cont">
                                            <img src="images/dist/promos/img-5-820x516.jpg" alt="IMG">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="product.html">
                                        <div class="slide-cont">
                                            <img src="images/dist/promos/img-6-820x516.jpg" alt="IMG">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="product.html">
                                        <div class="slide-cont">
                                            <img src="images/dist/promos/img-7-820x516.jpg" alt="IMG">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="product.html">
                                        <div class="slide-cont">
                                            <img src="images/dist/promos/img-8-820x516.jpg" alt="IMG">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-button-prev">
                                <button class="btn slider-btn prev">
                                    <svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                                        <polyline points="15 18 9 12 15 6"></polyline>
                                    </svg>
                                </button>
                            </div>
                            <div class="swiper-button-next">
                                <button class="btn slider-btn next">
                                    <svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~ Homepage promo banner-slides section [END] ~~~~~~~~~~~~~~~~~ -->

    <!-- ~~~~~~~~~~~~~~~~~ Homepage blog posts section [START] ~~~~~~~~~~~~~~~~~ -->
    <div class="page-section blog-posts">
        <div class="page-margin">
            <div class="page-margin__content">
                <div class="page-section__header">
                    <h2>Nos vendeurs</h2>
                </div>
                <div class="page-section__body">
                    <div class="blog-slider">
                        <div class="swiper" id="blog-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="slide-cont">
                                        <div class="blog-post-item">
                                            <div class="article">
                                                <a class="a-block" href="blog-post.html">
                                                    <div class="article__image">
                                                        <img src="images/dist/blog/img-1.jpg" alt="IMG">
                                                        <div class="article__type">
                                                            <span>Review with video</span>
                                                        </div>
                                                    </div>
                                                    <div class="article__description">
                                                        <span class="article__title">Smartphone Samsung Galaxy S21 + 5G 8/128 GB</span>
                                                        <span class="article__caption">Samsung Galaxy S21 + 5G 8/128 GB is the most balanced smartphone from the brand's new lineup. I'll tell you about the advantages and disadvantages of the model, and compare it with its analogues.</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slide-cont">
                                        <div class="blog-post-item">
                                            <div class="article">
                                                <a class="a-block" href="blog-post.html">
                                                    <div class="article__image">
                                                        <img src="images/dist/blog/img-2.jpg" alt="IMG">
                                                        <div class="article__type">
                                                            <span>Review with video</span>
                                                        </div>
                                                    </div>
                                                    <div class="article__description">
                                                        <span class="article__title">XBOX Series S - Best Console! Disadvantages and main advantages.</span>
                                                        <span class="article__caption">Today we're going to talk about a console like the Xbox</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slide-cont">
                                        <div class="blog-post-item">
                                            <div class="article">
                                                <a class="a-block" href="blog-post.html">
                                                    <div class="article__image">
                                                        <img src="images/dist/blog/img-3.jpg" alt="IMG">
                                                        <div class="article__type">
                                                            <span>Review with video</span>
                                                        </div>
                                                    </div>
                                                    <div class="article__description">
                                                        <span class="article__title">Now you can take it. Smartphones of 2021 that are strong</span>
                                                        <span class="article__caption">Buying a smartphone at the start of sales is a risky business.</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slide-cont">
                                        <div class="blog-post-item">
                                            <div class="article">
                                                <a class="a-block" href="blog-post.html">
                                                    <div class="article__image">
                                                        <img src="images/dist/blog/img-4.jpg" alt="IMG">
                                                        <div class="article__type">
                                                            <span>Review with video</span>
                                                        </div>
                                                    </div>
                                                    <div class="article__description">
                                                        <span class="article__title">3 laptops (Republic Of Gamers) where AMD Ryzen does not overheat and keeps frequencies stably</span>
                                                        <span class="article__caption">No, well, can you imagine - there are still enough people</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slide-cont">
                                        <div class="blog-post-item">
                                            <div class="article">
                                                <a class="a-block" href="blog-post.html">
                                                    <div class="article__image">
                                                        <img src="images/dist/blog/img-5.jpg" alt="IMG">
                                                        <div class="article__type">
                                                            <span>Review with video</span>
                                                        </div>
                                                    </div>
                                                    <div class="article__description">
                                                        <span class="article__title">Sony SRS-RA5000 review of an expensive experimental speaker</span>
                                                        <span class="article__caption">The Sony SRS-RA5000 is an intriguing but expensive speaker that doesn't quite live up to the hype.</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-prev">
                                <button class="btn slider-btn prev">
                                    <svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                                        <polyline points="15 18 9 12 15 6"></polyline>
                                    </svg>
                                </button>
                            </div>
                            <div class="swiper-button-next">
                                <button class="btn slider-btn next">
                                    <svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~ Homepage blog posts section [END] ~~~~~~~~~~~~~~~~~ -->
    <!-- ~~~~~~~~~~~~~~~~~ Homepage top brands section [START] ~~~~~~~~~~~~~~~~~ -->
    <div class="page-section top-brands">
        <div class="page-margin">
            <div class="page-margin__content">
                <div class="page-section__header">
                    <h2>Marque populaire </h2>
                </div>
                <div class="page-section__body">
                    <div class="brands-slider">
                        <div class="swiper" id="brands-slider">
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
                            <div class="swiper-button-prev">
                                <button class="btn slider-btn prev">
                                    <svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                                        <polyline points="15 18 9 12 15 6"></polyline>
                                    </svg>
                                </button>
                            </div>
                            <div class="swiper-button-next">
                                <button class="btn slider-btn next">
                                    <svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~ Homepage top brands section [END] ~~~~~~~~~~~~~~~~~ -->
    <!-- ~~~~~~~~~~~~~~~~~ Homepage site features section [START] ~~~~~~~~~~~~~~~~~ -->
    <div class="page-section features">
        <div class="page-margin">
            <div class="page-margin__content">
                <div class="page-section__body">
                    <div class="site-features">
                        <div class="row align-items-stretch">
                            <div class="col-xxl-3 col-xl-3 col-lg-6 col-12">
                                <div class="site-features__item">
                                    <div class="top-line">
                                        <div class="icon">
                                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="https://www.w3.org/2000/svg">
                                                <path d="M36 18C36 27.941 27.941 36 18 36C8.059 36 0 27.941 0 18C0 8.059 8.059 0 18 0C27.941 0 36 8.059 36 18Z" fill="#FFCC4D"/>
                                                <path d="M18 21C14.377 21 11.973 20.578 9 20C8.321 19.869 7 20 7 22C7 26 11.595 31 18 31C24.404 31 29 26 29 22C29 20 27.679 19.868 27 20C24.027 20.578 21.623 21 18 21Z" fill="#664500"/>
                                                <path d="M9 22C9 22 12 23 18 23C24 23 27 22 27 22C27 22 25 26 18 26C11 26 9 22 9 22Z" fill="white"/>
                                                <path d="M15.682 4.413L11.14 5.214L8.8 0.961C8.542 0.492 8.012 0.241 7.488 0.333C6.961 0.426 6.551 0.844 6.469 1.372L5.724 6.169L1.182 6.97C0.647 7.064 0.234 7.495 0.161 8.034C0.088 8.573 0.372 9.097 0.864 9.331L4.934 11.263L4.186 16.075C4.103 16.611 4.375 17.139 4.859 17.384C5.038 17.474 5.23 17.517 5.421 17.517C5.748 17.517 6.071 17.389 6.312 17.145L9.824 13.584L14.342 15.729C14.832 15.961 15.416 15.852 15.788 15.457C16.16 15.062 16.234 14.473 15.973 13.998L13.625 9.73L16.79 6.522C17.172 6.135 17.259 5.545 17.007 5.063C16.753 4.581 16.214 4.32 15.682 4.413V4.413ZM20.318 4.413L24.86 5.214L27.2 0.961C27.458 0.492 27.988 0.241 28.512 0.333C29.038 0.426 29.448 0.844 29.53 1.372L30.275 6.169L34.817 6.97C35.353 7.064 35.766 7.494 35.838 8.033C35.91 8.572 35.627 9.096 35.135 9.33L31.065 11.262L31.813 16.074C31.896 16.61 31.624 17.138 31.14 17.383C30.961 17.473 30.769 17.516 30.578 17.516C30.251 17.516 29.928 17.388 29.687 17.144L26.175 13.583L21.657 15.728C21.167 15.96 20.583 15.851 20.211 15.456C19.839 15.061 19.765 14.472 20.026 13.997L22.374 9.73L19.209 6.522C18.827 6.135 18.74 5.545 18.992 5.063C19.247 4.581 19.786 4.32 20.318 4.413V4.413Z" fill="#E95F28"/>
                                            </svg>
                                        </div>
                                        <div class="text">
                                            <b>96%</b>
                                        </div>
                                    </div>
                                    <div class="bot-line">
                                        Possibilité de discuter avec les vendeurs
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-6 col-12">
                                <div class="site-features__item">
                                    <div class="top-line">
                                        <div class="icon">
                                            <svg width="28" height="36" viewBox="0 0 28 36" fill="none" xmlns="https://www.w3.org/2000/svg">
                                                <path d="M19.1068 20.8847L17.3858 14.0247L13.4388 5.20868C12.9368 3.91168 13.5818 2.45267 14.8788 1.95167C16.1748 1.44567 17.6348 2.09467 18.1368 3.39167L24.3398 19.1607L19.1068 20.8847Z" fill="#90603E"/>
                                                <path d="M27.4558 18.3967C26.9678 15.8157 25.4678 11.8737 25.4678 11.8737L19.6808 1.38468C19.0548 0.142683 17.5388 -0.355317 16.2978 0.269683C15.0558 0.895683 14.5558 2.41068 15.1828 3.65268L20.5128 13.1997C20.5258 13.2217 21.9258 18.6907 21.9258 18.6907C20.8478 17.6957 19.3188 16.3317 17.9108 15.0727C14.8128 12.3007 12.9748 11.2617 12.9748 11.2617C12.2648 10.8187 11.7958 10.7557 10.8428 11.2027L4.9708 13.7707C4.8138 13.8487 4.6808 13.9587 4.5758 14.0997L2.2628 17.1857C1.3698 18.2527 1.5108 19.8407 2.5778 20.7327C3.6438 21.6257 5.2308 21.4827 6.1258 20.4187C6.1738 20.3607 7.9058 17.8587 8.0618 17.7787C9.0988 17.2457 11.0268 16.3317 11.8698 16.3587C12.7668 16.3877 18.1508 22.3157 18.1508 22.3157C18.3568 22.5747 18.3808 22.9337 18.2108 23.2177L15.2958 28.4457C15.2168 28.5767 15.1028 28.6817 14.9658 28.7487L12.2918 30.2487C12.1378 30.3237 11.9638 30.3477 11.7958 30.3157L6.5258 28.0437C6.2638 27.9307 6.0458 27.7237 5.9338 27.4607C5.1468 25.6107 5.0358 23.8417 5.0348 23.8217C4.9698 22.4317 3.7908 21.3587 2.4008 21.4237C1.0138 21.4797 -0.0622033 22.6667 0.00279665 24.0567C0.0157967 24.3197 0.353796 29.6967 4.7298 33.3487C7.2578 35.4567 10.3838 36.2727 14.3788 35.7357C18.9908 35.1167 21.8478 34.5027 25.8848 26.1777C27.0018 23.8727 27.7878 20.1537 27.4558 18.3967V18.3967Z" fill="#AF7E57"/>
                                            </svg>
                                        </div>
                                        <div class="text">
                                            <b>1, 804+</b>
                                        </div>
                                    </div>
                                    <div class="bot-line">
                                        nous mettons à votre disposition les meilleurs vendeurs
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-6 col-12">
                                <div class="site-features__item">
                                    <div class="top-line">
                                        <div class="icon">
                                            <svg width="35" height="36" viewBox="0 0 35 36" fill="none" xmlns="https://www.w3.org/2000/svg">
                                                <path d="M34.5895 18.958C34.5895 16.896 34.2225 14.919 33.5495 13.09C33.0895 18.479 30.2165 21.247 27.2145 19.958C24.4025 18.75 26.2975 14.041 26.4375 11.794C26.6735 7.985 26.4255 3.625 19.5065 0C22.3815 5.5 19.8395 8.917 17.1735 9.125C14.2155 9.356 11.5065 6.583 12.5065 2.083C9.26854 4.469 9.17454 8.485 10.1735 11.083C11.2155 13.791 10.1315 16.041 7.59054 16.291C4.75054 16.571 3.17254 13.25 4.62754 7.958C2.10954 10.923 0.589539 14.763 0.589539 18.958C0.589539 28.347 8.20054 35.958 17.5895 35.958C26.9785 35.958 34.5895 28.347 34.5895 18.958Z" fill="#F4900C"/>
                                                <path d="M27.9835 23.957C28.1315 27.041 25.4225 28.25 23.9645 27.666C21.8585 26.823 22.4235 25.375 21.8815 22.375C21.3395 19.375 19.2565 17.292 16.1735 16.375C18.4235 22.708 14.9265 25.042 13.0935 25.459C11.2215 25.885 9.34054 25.458 9.12554 21.452C6.94154 23.626 5.58954 26.634 5.58954 29.958C5.58954 30.326 5.61254 30.688 5.64454 31.048C8.71454 34.082 12.9315 35.958 17.5895 35.958C22.2475 35.958 26.4645 34.082 29.5345 31.048C29.5665 30.688 29.5895 30.326 29.5895 29.958C29.5895 27.771 29.0055 25.722 27.9835 23.957Z" fill="#FFCC4D"/>
                                            </svg>
                                        </div>
                                        <div class="text">
                                            <b>4.9</b>
                                        </div>
                                    </div>
                                    <div class="bot-line">
                                        nous faisons la promition de vos produits chez les clients potentiels
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-6 col-12">
                                <div class="site-features__item">
                                    <div class="top-line">
                                        <div class="icon">
                                            <svg width="37" height="36" viewBox="0 0 37 36" fill="none" xmlns="https://www.w3.org/2000/svg">
                                                <path d="M5.71188 4.77H11.7119C12.8159 4.77 13.5889 4.666 13.5889 5.77V3.77C13.5889 2.666 12.8159 1.77 11.7119 1.77H3.71188C1.71188 1.77 0.128883 3.895 0.711883 6.77C0.711883 6.77 2.50288 16.145 2.62888 16.728C2.96188 18.27 4.75288 19.77 6.66988 19.77H13.6279C14.7329 19.77 13.5889 17.874 13.5889 16.77V14.77C13.5889 15.874 12.8159 16.77 11.7119 16.77H7.71188C6.60788 16.77 5.87888 15.728 5.71188 14.77C5.54488 13.812 4.12788 7.437 4.12788 7.437C3.79488 5.52 4.60688 4.77 5.71188 4.77ZM31.5239 4.77H25.5239C24.4199 4.77 22.5889 4.666 22.5889 5.77V3.77C22.5889 2.666 24.4199 1.77 25.5239 1.77H33.5239C35.5239 1.77 37.1079 3.895 36.5239 6.77C36.5239 6.77 34.8909 16.189 34.7529 16.77C34.3989 18.27 32.7109 19.77 30.7529 19.77H23.6069C22.5029 19.77 22.5889 17.874 22.5889 16.77V14.77C22.5889 15.874 24.4199 16.77 25.5239 16.77H29.5239C30.6279 16.77 31.3579 15.728 31.5239 14.77C31.6899 13.812 33.1079 7.437 33.1079 7.437C33.4399 5.52 32.6289 4.77 31.5239 4.77V4.77ZM21.4209 21.77C21.4209 14.812 18.7119 21.77 18.7119 21.77C18.7119 21.77 15.7119 14.812 15.7119 21.77C15.7119 28.728 12.4209 31.77 12.4209 31.77H24.7129C24.7119 31.77 21.4209 28.728 21.4209 21.77Z" fill="#FFAC33"/>
                                                <path d="M29.7119 6.347C29.7119 13.122 22.9419 24.539 18.7119 24.539C14.4809 24.539 7.71188 13.122 7.71188 6.347C7.71188 1.152 8.71188 0.0280011 10.7119 0.0280011C12.0859 0.0280011 16.7369 0.00100109 18.7119 0.00100109L25.7119 1.09164e-06C28.6289 -0.000998908 29.7119 0.684001 29.7119 6.347V6.347Z" fill="#FFCC4D"/>
                                                <path d="M27.5889 32.77C27.5889 33.874 27.8159 34.77 26.7119 34.77H10.7119C9.60688 34.77 9.58888 33.874 9.58888 32.77V31.77C9.58888 30.666 10.7529 29.77 11.7949 29.77H25.7119C26.7539 29.77 27.5889 30.666 27.5889 31.77V32.77V32.77Z" fill="#C1694F"/>
                                                <path d="M29.5889 34.395C29.5889 35.155 29.7539 35.77 28.3369 35.77H9.08688C7.79488 35.77 7.58888 35.155 7.58888 34.395V34.145C7.58888 33.385 8.32688 32.77 9.08688 32.77H28.3369C29.0959 32.77 29.5889 33.385 29.5889 34.145V34.395V34.395Z" fill="#C1694F"/>
                                            </svg>
                                        </div>
                                        <div class="text">
                                            <b>17+</b>
                                        </div>
                                    </div>
                                    <div class="bot-line">
                                        les vendeurs avec le plus de produits recoivent une recompense
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~ Homepage site features section [END] ~~~~~~~~~~~~~~~~~ -->
</div>
@endsection
