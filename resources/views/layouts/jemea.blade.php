<!DOCTYPE html>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} &bull; {{ $title }}</title>

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" href="{{ url('/') }}/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ url('/') }}/favicon.svg" />
    <link rel="shortcut icon" href="{{ url('/') }}/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('/') }}/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="Jemea" />
    <link rel="manifest" href="{{ url('/') }}/site.webmanifest" />

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{ url('ui/') }}/css/style.css">

    <!-- WhatsApp Widget Script -->
    <script async src='https://d2mpatx37cqexb.cloudfront.net/delightchat-whatsapp-widget/embeds/embed.min.js'></script>

    @if(Cart::total() == 0)
        <script>
            var wa_btnSetting = {
                "btnColor": "#1ca301",
                "ctaText": "Send us a message.",
                "cornerRadius": 40,
                "marginBottom": 20,
                "marginLeft": 20,
                "marginRight": 20,
                "btnPosition": "left",
                "whatsAppNumber": "237694994229",
                "welcomeMessage": "Hi ! ",
                "zIndex": 999999,
                "btnColorScheme": "light"
            };
            window.onload = () => {
                _waEmbed(wa_btnSetting);
            };
        </script>
    @else
        <?php
            $c = "";
            foreach(\Cart::content() as $carted) {
                
                $c .= "- " . $carted->name . " - " . $carted->price . " x " . $carted->qty . " = " . ($carted->price * $carted->qty) . "\n";
            }

            $orderContent = "\rJEMEA PRODUCTS Web/WhatsApp Order\r- - - - - -\rDate : " . date('Y/m/d') . " - Time : " . date('H:i:s') . "\r- - - - - -\r" . $c . "- - - - - -\rLogistics : 1500\rTotal : " . \Cart::total() . " FCFA\r- - - - - -\r";
        ?>
        <script>
            var msg = {!! json_encode($orderContent) !!};
            var wa_btnSetting = {
                "btnColor": "#16BE45",
                "ctaText": "Place order now.",
                "cornerRadius": 40,
                "marginBottom": 20,
                "marginLeft": 20,
                "marginRight": 20,
                "btnPosition": "left",
                "whatsAppNumber": "237694994229",
                "welcomeMessage": msg,
                "zIndex": 999999,
                "btnColorScheme": "light"
            };
            window.onload = () => {
                _waEmbed(wa_btnSetting);
            };
        </script>
    @endif

    <style>
        /* Charte Graphique Verte Jemea */
        .bg-jemea-green {
            background-color: #f9fdf9 !important;
        }
        .text-jemea-green {
            color: #02641e !important;
        }
        .upper-header-new {
            background-color: #036d1e !important;
            color: #fcfcfc;
        }
        .upper-header-new a {
            color: #ffffff !important;
            text-decoration: none;
        }
        .upper-header-new a:hover {
            opacity: 0.8;
        }

        /* Correctif pour le menu déroulant des langues */
        .upper-header-new .dropdown-menu .dropdown-item {
            color: #000000 !important;
        }
        .upper-header-new .dropdown-menu .dropdown-item:hover {
            background-color: #f8f9fa !important;
            color: #000000 !important;
        }

        .cart-badge {
            position: absolute;
            top: -5px;
            right: -8px;
            background-color: #035e1d;
            color: #ffffff;
            border-radius: 50%;
            padding: 2px 6px;
            font-size: 10px;
            font-weight: bold;
        }
        .nav-icon-new {
            position: relative;
            display: inline-block;
            padding: 8px;
        }
        .nav-link-dark {
            color: #111111 !important;
        }

        /* Banner / Hero */
        .site-banner img, .hero-banner img {
            width: 100%;
            height: 320px;
            object-fit: contain;
            display: block;
            margin: 0 auto;
            background-color: #fff;
        }

        /* Footer Jemea Nature */
        .upper-footer,
        .upper-footer.bg-black {
            background-color: #0b6b2e !important;
            color: #ffffff;
        }
        .upper-footer h3, .upper-footer p, .upper-footer a {
            color: #ffffff !important;
        }
        .lower-footer {
            background-color: #0b6b2e !important;
            color: #e9f4ea;
            border-top-color: rgba(29, 129, 4, 0.774);
        }
        .lower-footer p, .lower-footer a, .lower-footer i {
            color: #e9f4ea !important;
        }

        img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>

<body class="color-theme-green mont-font">

    <div class="preloader"></div>

    <!-- MAIN WRAPPER -->
    <div class="main-wrapper">

        <!-- HEADER MOBILE -->
        <div class="header-menu-mob pt-2 pb-2 shadow-sm fixed-top w-100 z-1 bg-white d-block d-md-none">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col text-start">
                        <button class="navbar-toggler border-0" type="button" data-bs-toggle="modal" data-bs-target="#menumodal">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                    <div class="col text-center">
                        <a href="{{ url('/') }}">
                            <img src="https://jemeaproducts.com/jemea-products-logo-1.jpeg" alt="Jemea Logo" class="logo pt-1" style="max-height: 45px; width: auto;">
                        </a>
                    </div>
                    <div class="col text-end">
                        <a href="#" class="nav-icon-new position-relative d-inline-block text-decoration-none" data-bs-toggle="modal" data-bs-target="#cartmodal">
                            <i class="feather-shopping-bag text-grey-600 font-xl"></i>
                            @if(Cart::count() > 0)
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-jemea-green text-white" style="font-size: 10px; padding: 4px 6px;">
                                    {{ Cart::count() }}
                                </span>
                            @endif
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- HEADER DESKTOP -->
        <div class="upper-header-new pt-2 pb-2 d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <span class="font-xssss fw-500">
                            <i class="feather-mail me-2"></i>Besoin d'aide ? Appelez-nous : +237 694 992 229 / 677 090 155
                        </span>
                    </div>
                    <div class="col-lg-6 text-end">
                        <ul class="navbar-nav float-end m-0 p-0">
                            <li class="nav-item nav-item-toggle active dropdown list-inline-item">
                                <a class="nav-link dropdown-toggle font-xssss fw-600 text-white" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ strtoupper(LaravelLocalization::getCurrentLocale()) }}
                                </a>
                                <ul class="dropdown-menu border-0 shadow-xss dropdown-menu-end">
                                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                        <li>
                                            <a class="dropdown-item font-xssss" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                {{ $properties['native'] }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- SEARCH & CART SECTION -->
        <div class="header-wrapper pt-3 pb-3 z-index-5 ovh bg-white d-none d-lg-block border-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <a href="{{ url('/') }}">
                            <img src="https://jemeaproducts.com/jemea-products-logo-1.jpeg" alt="Jemea Products Logo" class="logo" style="max-height: 65px; width: auto;">
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <form method="GET" action="{{ url('product-search') }}">
                            <div class="form-group mb-0 icon-input position-relative">
                                <i class="feather-search font-sm text-grey-400 position-absolute" style="left: 15px; top: 50%; transform: translateY(-50%);"></i>
                                <input name="q" type="text" placeholder="{{ trans('ws.start_typing_to_search') }}" value="{{ request('q') }}" class="w-100 lh-38 pt-2 pb-2 ps-5 pe-3 font-xssss fw-500 rounded-xl border border-greylight bg-light" onchange="this.form.submit();">
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 text-end d-flex justify-content-end align-items-center">
                        <a href="#" class="nav-icon-new me-3"><i class="feather-user text-grey-600 font-xl"></i></a>
                        <a href="javascript:void(0)" class="nav-icon-new open-cart" data-bs-toggle="modal" data-bs-target="#cartmodal" role="button">
                            <i class="feather-shopping-bag text-grey-600 font-xl"></i>
                            <span class="cart-badge">{{ Cart::count() }}</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- LOWER NAVIGATION MENU -->
        <div class="lower-header pt-0 pb-0 shadow-xss z-index-1 bg-jemea-green d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="navbar navbar-expand-lg p-0">
                            <div class="navbar-collapse collapse show" id="main_nav">
                                <ul class="navbar-nav">
                                    <li class="nav-item active">
                                        <a class="nav-link nav-link-dark fw-600" href="{{ url('/') }}">{{ trans('ws.home') }}</a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a class="nav-link nav-link-dark fw-600" href="{{ url('fidelity') }}">Ma Fidélité</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link nav-link-dark fw-600" href="{{ url('contact') }}">{{ trans('ws.contact') }}</a>
                                    </li>
                                </ul>
                                <ul class="navbar-nav ms-auto">
                                    <li class="nav-item text-white fw-500 font-xssss">
                                        {{ trans('ws.need_help_call_us') }} : <a href="tel:+237694992229" class="fw-700 text-white">+237 694 992 229 / 677 090 155</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- PAGE CONTENT -->
        @yield('content')

        <!-- FOOTER -->
        <div class="upper-footer bg-black">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12"><hr class="border-grey-800" /></div>
                </div>
            </div>
            <div class="container">
                <div class="row pt-5 pb-5">
                    <div class="col-md-6 col-xs-12 sm-mb-3">
                        <h3 class="text-white mb-3">{{ trans('ws.about') }}</h3>
                        <p class="text-white font-xssss lh-26">
                            Jemea est une marque familiale qui propose des produits frais, directement de la ferme à votre table. Ancrés dans le respect de la terre, la qualité et le savoir-faire, nous cultivons et transformons nos ingrédients avec soin et intention. Chaque produit est récolté et préparé avec attention afin d’offrir fraîcheur, saveur et authenticité, pour une alimentation saine et digne de confiance.
                        </p>
                    </div>
                    <div class="col-md-3 col-xs-12 sm-mb-3">
                        <h3 class="text-white mb-3">{{ trans('ws.contact') }}</h3>
                        <p class="text-white font-xssss lh-26">
                            +237 694 992 229 <br/>
                            +237 677 090 155 <br/>
                            3 Rue Dorot, Lobe, Bekoko Littoral.
                        </p>
                    </div>
                    <div class="col-md-3 col-xs-12 sm-mb-3">
                        <p class="font-xssss">
                            <strong style="color: #ffffff; font-weight: 600;">Condition de paiement : Cash au livreur ou Momo: 677090155 ou OM 694994229</strong>
                        </p>
                        <br>
                        <p>
                            <img src="{{ url('momo.JPG') }}" width="50" alt="Momo" />
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <img src="{{ url('om.PNG') }}" width="50" alt="OM" />
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="lower-footer bg-black pb-3 pt-3 border-top border-grey-800">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-sm-start xs-mb-3">
                        <p class="text-grey-500 fw-500 font-xssss mb-0">@ Copyright {{ date('Y') }} {{ config('app.name') }}, Jojo's Farms All rights reserved.</p>
                    </div>
                    <div class="col-md-6 text-center text-sm-end">
                        <ul class="list-inline m-0">
                            <li class="list-inline-item"><a href="https://www.facebook.com/share/1GgEFeg6zd/?mibextid=wwXIfr" target="_blank"><i class="ti-facebook text-white"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.instagram.com/jemeaproducts?igsh=cnd3am9maXRzZ29s" target="_blank"><i class="ti-instagram text-white"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- END MAIN WRAPPER -->

    <!-- MENU MODAL (MOBILE) -->
    <div class="modal fade left modal-scrollable" id="menumodal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content theme-dark-bg p-0 border-0 rounded-0">
                <button type="button" class="btn-close z-index-5 bg-grey font-xsssss w-26 h-26 text-center rounded-circle posa right-0 top-0 mt-4 me-3" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body vw100 text-start p-0 h-100">
                    <div class="card p-4 border-0 text-start h-100">
                        <h4 class="fw-700 font-lg text-grey-900 text-start mb-3 d-block ls-0">Menu</h4>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link nav-link-dark fw-600" href="{{ url('/') }}">{{ trans('ws.home') }}</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link nav-link-dark fw-600" href="{{ url('fidelity') }}">Ma Fidélité</a>
                            </li>
                           
                            <li class="nav-item">
                                <a class="nav-link nav-link-dark fw-600" href="{{ url('contact') }}">{{ trans('ws.contact') }}</a>
                            </li>
                        </ul>
                        <div class="mt-auto">
                            <span class="d-block font-xssss text-grey-500 mb-2">{{ trans('ws.need_help_call_us') }}</span>
                            <a href="tel:+237694992229" class="fw-700 text-jemea-green d-block">+237 694 992 229 / 677 090 155</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CART MODAL -->
    <div class="modal fade right modal-scrollable" id="cartmodal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="width: 350px;">
            <div class="modal-content theme-dark-bg p-0 border-0 rounded-0">
                <button type="button" class="btn-close z-index-5 bg-grey font-xsssss w-26 h-26 text-center rounded-circle posa right-0 top-0 mt-3 me-3" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="cart-box vh-100">
                    <div class="modal-body vh-100 text-start p-0 d-flex align-items-start flex-column">
                        <div class="card w-100 p-4 pb-0 border-0 text-start">
                            <h4 class="fw-700 font-lg text-grey-900 text-start mb-3 mt-n2 d-block">Panier</h4>

                            @if(Cart::count() > 0)
                                <a href="{{ url('cart/empty') }}" class="w-100 btn text-white rounded-6 text-center mb-4 fw-700" style="background-color:#d9251c;">Vider le panier</a>
                            @endif

                            @forelse(Cart::content() as $item)
                                <div class="row mb-3 align-items-center border-bottom pb-2">
                                    <div class="col-4">
                                        @php
                                            $imgPath = $item->options->image ?? $item->options['image'] ?? null;
                                        @endphp

                                        @if($imgPath)
                                            <img src="{{ Str::startsWith($imgPath, 'http') ? $imgPath : asset($imgPath) }}" 
                                                 alt="{{ $item->name }}" 
                                                 class="w-100 rounded-6 p-1 bg-greylight" 
                                                 style="max-height: 70px; object-fit: contain;">
                                        @else
                                            <img src="https://jemeaproducts.com/jemea-products-logo-1.jpeg" 
                                                 alt="{{ $item->name }}" 
                                                 class="w-100 rounded-6 p-1 bg-greylight" 
                                                 style="max-height: 70px; object-fit: contain;">
                                        @endif
                                    </div>

                                    <div class="col-8 ps-2">
                                        <a href="{{ $item->options->link ?? '#' }}" class="text-grey-900 fw-600 font-xssss lh-20 d-block mb-1">
                                            {{ $item->name }}
                                        </a>
                                        
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6 class="font-xs fw-700 text-jemea-green mb-0">
                                                {{ number_format($item->price, 0, ',', ' ') }} FCFA
                                            </h6>
                                            
                                            <form action="{{ url('cart/update') }}" method="GET" class="cart-count">
                                                <input type="hidden" name="id" value="{{ $item->rowId }}">
                                                <input type="number" min="1" name="quantity" value="{{ $item->qty }}" 
                                                       class="form-control form-control-sm text-center p-1" 
                                                       style="width: 45px; height: 30px;" 
                                                       onchange="this.form.submit()">
                                            </form>
                                        </div>

                                        <div class="mt-1">
                                            <a href="{{ url('cart/remove').'?id='.$item->rowId }}" class="font-xsssss text-danger fw-600">
                                                Retirer
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <p class="text-grey-500 font-xssss text-center py-4">Votre panier est vide.</p>
                            @endforelse
                        </div>

                        @if(Cart::count() > 0)
                            <div class="card w-100 p-4 pt-0 border-0 text-start mt-auto">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h6 class="text-grey-700 font-xsss fw-600 mb-2 d-flex">Sous-total <span class="ms-auto">{{ Cart::subtotal() }} FCFA</span></h6>
                                        <h4 class="text-grey-900 font-xss fw-700 mb-3 d-flex">Total <span class="ms-auto">{{ Cart::total() }} FCFA</span></h4>
                                    </div>
                                </div>
                                <a href="{{ url('placing-order') }}" class="w-100 text-white rounded-6 text-center btn fw-700" style="background-color:#036d1e;">Envoyez-nous un message WhatsApp</a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SCRIPTS -->
    <script src="{{ url('ui/') }}/js/plugin.js"></script>
    <script src="{{ url('ui/') }}/js/scripts.js"></script>

</body>
</html>