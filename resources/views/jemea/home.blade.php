@extends('layouts.jemea')

@section('content')

<!-- BANNER WRAPPER -->
<div class="banner-wrapper pt-4 pb-4 md-mt-6" style="background-image: url({{url('ui/')}}/images/background-2.jpg); background-size: cover; background-position: center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="owl-carousel slider-banner banner-wrap owl-theme ovh nav-none owl-arrow-center arrow-container shadow-sm" style="border-radius: 12px; overflow: hidden;">
                    <div class="item ovh style1 d-flex justify-content-center">
                        <div class="banner-slide" style="border-radius: 12px; overflow: hidden; width:100%;">
                            <img src="{{url('Jemea-Website-Banner-1.jpg')}}" alt="Jemea banner 1" class="banner-slide-img">
                        </div>
                    </div>

                    <div class="item ovh style1 d-flex justify-content-start">
                        <div class="banner-slide" style="border-radius: 12px; overflow: hidden; width:100%;">
                            <img src="{{url('Jemea-Website-Banner-3.jpg')}}" alt="Jemea banner 3" class="banner-slide-img">
                        </div>
                    </div>

                    <div class="item ovh style1 d-flex justify-content-center">
                        <div class="banner-slide" style="border-radius: 12px; overflow: hidden; width:100%;">
                            <img src="{{url('Jemea-Website-Banner-2.jpg')}}" alt="Jemea banner 2" class="banner-slide-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BANNER WRAPPER -->

<!-- MAIN CONTENT WRAPPER -->
<div class="product-wrapper pt-4 pb-0">
    <div class="container">
        <div class="row">
            
            <!-- CATEGORIES SIDEBAR -->
            <div class="col-lg-3">
                <div class="card border-0 shadow-sm p-4 mb-4" style="border-radius: 12px; background-color: #fff; border: 1px solid #f1f5f9 !important;">
                    <div class="form-group mb-3 pb-3 border-bottom">
                        <h6 class="fw-700 text-grey-900 font-xss mb-0 text-uppercase" style="letter-spacing: 1px; font-size: 11px; color: #64748b;">Catégories</h6>
                    </div>

                    <div class="category-list">
                        @foreach($categories as $category)
                        <div class="d-flex font-xssss lh-22 fw-500 mb-2 align-items-center justify-content-between p-2 rounded-3 tech-category-item" style="transition: all 0.2s ease;"> 
                            <a href="{{ url('product-category/'.$category->slug) }}" class="text-grey-600 text-decoration-none" style="transition: color 0.2s ease; font-weight: 600; font-size: 13px;"> 
                                {{$category->name}} 
                            </a>  
                            <i class="feather-chevron-right text-grey-400 font-xssss"></i>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- TREND PRODUCTS -->
            <div class="col-lg-9">
                <div class="d-flex align-items-center justify-content-between mb-4 mt-2 border-bottom pb-2">
                    <h4 class="fw-700 font-xs mb-0 text-grey-800 text-uppercase" style="letter-spacing: 0.5px; font-size: 14px; color: #0f172a;">Produits Tendances</h4>
                </div>
                
                <div class="banner-slider-4 owl-carousel owl-theme dot-none owl-nav-link owl-arrow-top border-0">
                    @foreach(\App\Models\Product::get()->random(6) as $product)
                        @php($image = $product->pictures()->first())
                        <div class="owl-items p-2">
                            <div class="card border-0 shadow-sm p-3 posr tech-product-card" style="border-radius: 12px; background: #fff; border: 1px solid #f1f5f9; transition: all 0.2s ease;">
                                <a href="{{ url('product/'.$product->slug) }}" class="posa right-0 top-0 mt-3 me-3 z-index-5">
                                    <i class="feather-heart font-xs text-grey-400 hover-text-danger" style="transition: color 0.2s;"></i>
                                </a>
                                
                                <a href="{{ url('product/'.$product->slug) }}" class="d-block text-center p-2 mb-2" style="height: 180px; display: flex !important; align-items: center; justify-content: center; background: #f8fafc; border-radius: 8px; overflow: hidden;">
                                    <img src="{{ $image ? url('images/product/'.$image->picture) : url('ui/images/no-image.png') }}" alt="{{ $product->name }}" class="img-fluid" style="max-height: 100%; width: auto; object-fit: contain; transition: transform 0.2s ease;">
                                </a>

                                <div class="clearfix"></div>
                                <h2 class="mt-2 mb-1" style="min-height: 40px; display: flex; align-items: center;">
                                    <a href="{{ url('product/'.$product->slug) }}" class="text-grey-800 fw-600 font-xsss lh-2 text-decoration-none" style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; font-size: 13px;">
                                        {{ $product->name }}
                                    </a>
                                </h2>
                                <h6 class="font-xs fw-700 text-success d-flex align-items-baseline mt-2">
                                    <span class="font-xsssss text-grey-500 me-1 fw-500">FCFA</span>{{ number_format($product->price, 0, ',', ' ') }}
                                </h6>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</div>

<!-- DEALS & FEATURED SECTIONS -->
<div class="product-wrapper pt-3 pb-5">
    <div class="container">
        <div class="row">
            
            <!-- DEAL OF THE DAY -->
            <div class="col-lg-12 mb-5">
                <div class="d-flex align-items-center justify-content-between mb-4 mt-2 border-bottom pb-2">
                    <h4 class="fw-700 font-xs mb-0 text-grey-800 text-uppercase" style="letter-spacing: 0.5px; font-size: 14px; color: #0f172a;">Offres du jour</h4>
                </div>
                
                <div class="banner-slider-5 owl-carousel owl-theme dot-none owl-nav-link owl-arrow-top border-0">
                    @foreach(\App\Models\Product::get()->random(6) as $product)
                    @php($image = $product->pictures()->first())
                    <div class="owl-items p-2">
                        <div class="card border-0 shadow-sm p-3 posr tech-product-card" style="border-radius: 12px; background: #fff; border: 1px solid #f1f5f9; transition: all 0.2s ease;">
                            <a href="{{ url('product/'.$product->slug) }}" class="posa right-0 top-0 mt-3 me-3 z-index-5">
                                <i class="feather-heart font-xs text-grey-400"></i>
                            </a>
                            
                            <a href="{{ url('product/'.$product->slug) }}" class="d-block text-center p-2 mb-2" style="height: 180px; display: flex !important; align-items: center; justify-content: center; background: #f8fafc; border-radius: 8px; overflow: hidden;">
                                <img src="{{ $image ? url('images/product/'.$image->picture) : url('ui/images/no-image.png') }}" alt="{{ $product->name }}" class="img-fluid" style="max-height: 100%; width: auto; object-fit: contain;">
                            </a>

                            <div class="clearfix"></div>
                            <h2 class="mt-2 mb-1" style="min-height: 40px; display: flex; align-items: center;">
                                <a href="{{ url('product/'.$product->slug) }}" class="text-grey-800 fw-600 font-xsss lh-2 text-decoration-none" style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; font-size: 13px;">
                                    {{ $product->name }}
                                </a>
                            </h2>
                            <h6 class="font-xs fw-700 text-success d-flex align-items-baseline mt-2">
                                <span class="font-xsssss text-grey-500 me-1 fw-500">FCFA</span>{{ number_format($product->price, 0, ',', ' ') }}
                            </h6>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- FEATURED PRODUCTS -->
            <div class="col-lg-12">
                <div class="d-flex align-items-center justify-content-between mb-4 mt-2 border-bottom pb-2">
                    <h4 class="fw-700 font-xs mb-0 text-grey-800 text-uppercase" style="letter-spacing: 0.5px; font-size: 14px; color: #0f172a;">Produits Vedettes</h4>
                </div>
                
                <div class="banner-slider-5 owl-carousel owl-theme dot-none owl-nav-link owl-arrow-top border-0">
                    @foreach(\App\Models\Product::get()->random(6) as $product)
                    @php($image = $product->pictures()->first())
                    <div class="owl-items p-2">
                        <div class="card border-0 shadow-sm p-3 posr tech-product-card" style="border-radius: 12px; background: #fff; border: 1px solid #f1f5f9; transition: all 0.2s ease;">
                            <a href="{{ url('product/'.$product->slug) }}" class="posa right-0 top-0 mt-3 me-3 z-index-5">
                                <i class="feather-heart font-xs text-grey-400"></i>
                            </a>
                            
                            <a href="{{ url('product/'.$product->slug) }}" class="d-block text-center p-2 mb-2" style="height: 180px; display: flex !important; align-items: center; justify-content: center; background: #f8fafc; border-radius: 8px; overflow: hidden;">
                                <img src="{{ $image ? url('images/product/'.$image->picture) : url('ui/images/no-image.png') }}" alt="{{ $product->name }}" class="img-fluid" style="max-height: 100%; width: auto; object-fit: contain;">
                            </a>

                            <div class="clearfix"></div>
                            <h2 class="mt-2 mb-1" style="min-height: 40px; display: flex; align-items: center;">
                                <a href="{{ url('product/'.$product->slug) }}" class="text-grey-800 fw-600 font-xsss lh-2 text-decoration-none" style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; font-size: 13px;">
                                    {{ $product->name }}
                                </a>
                            </h2>
                            <h6 class="font-xs fw-700 text-success d-flex align-items-baseline mt-2">
                                <span class="font-xsssss text-grey-500 me-1 fw-500">FCFA</span>{{ number_format($product->price, 0, ',', ' ') }}
                            </h6>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</div>

<style>
    /* Banner responsive: mobile-first */
    .slider-banner .item { padding: 0; }
    .banner-slide-img {
        width: 100%;
        height: 180px; /* mobile default */
        object-fit: contain; /* montre toute l'image sans crop */
        display: block;
        background-color: #fff;
    }
    @media (min-width: 576px) {
        .banner-slide-img { height: 220px; }
    }
    @media (min-width: 768px) {
        .banner-slide-img { height: 280px; }
    }
    @media (min-width: 992px) {
        .banner-slide-img { height: 360px; } /* desktop */
    }

    /* Amélioration: enlever tout background-image sur les .item si présent */
    .slider-banner .item.bg-image-cover {
        background-image: none !important;
        background-size: unset !important;
        background-position: unset !important;
    }

    /* Hover effects (conservés) */
    .tech-product-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 24px rgba(15, 23, 42, 0.04) !important;
        border-color: #cbd5e1 !important;
    }
    .tech-product-card:hover img {
        transform: scale(1.02);
    }
    .tech-category-item:hover {
        background-color: #f1f5f9;
    }
    .tech-category-item:hover a {
        color: #145f01 !important;
    }
</style>

<!-- Fallback JS pour s'assurer que le modal panier s'ouvre (si data-bs-* ne fonctionne pas) -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Attache un handler de secours sur tous les triggers qui ciblent #cartmodal
    var cartTriggers = document.querySelectorAll('[data-bs-target="#cartmodal"], [data-target="#cartmodal"]');
    if (!cartTriggers.length) return;
    cartTriggers.forEach(function (el) {
        el.addEventListener('click', function (e) {
            // Laisser le comportement natif si Bootstrap fonctionne normalement
            setTimeout(function () {
                try {
                    if (typeof bootstrap !== 'undefined' && bootstrap.Modal) {
                        var cartModalEl = document.getElementById('cartmodal');
                        if (cartModalEl) {
                            // Utiliser l'API Bootstrap Modal si nécessaire
                            var instance = bootstrap.Modal.getInstance(cartModalEl);
                            if (!instance) instance = new bootstrap.Modal(cartModalEl);
                            instance.show();
                        } else {
                            console.warn('Element #cartmodal introuvable dans le DOM.');
                        }
                    }
                } catch (err) {
                    console.error('Erreur lors de l\'ouverture du modal panier :', err);
                }
            }, 50);
        });
    });
});
</script>

@endsection