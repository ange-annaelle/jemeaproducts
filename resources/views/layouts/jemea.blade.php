<!DOCTYPE html>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name')}} &bull; {{ $title }}</title>

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" href="{{url('/')}}/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{url('/')}}/favicon.svg" />
    <link rel="shortcut icon" href="{{url('/')}}/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{url('/')}}/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="Jemea" />
    <link rel="manifest" href="{{url('/')}}/site.webmanifest" />
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{url('ui/')}}/css/style.css">

    <script async src='https://d2mpatx37cqexb.cloudfront.net/delightchat-whatsapp-widget/embeds/embed.min.js'></script>

    @if(Cart::total() == 0)
        <script>
            var wa_btnSetting = {"btnColor":"#1ca301","ctaText":"Send us a message.","cornerRadius":40,"marginBottom":20,"marginLeft":20,"marginRight":20,"btnPosition":"left","whatsAppNumber":"237694994229","welcomeMessage":"Hi ! ","zIndex":999999,"btnColorScheme":"light"};
            window.onload = () => {
            _waEmbed(wa_btnSetting);
            };
        </script>
    @else

<?php

$c = "";
foreach(\Cart::content() as $carted) {
    $c = $c . "- ".$carted->name . " - ". $carted->price ." x ".$carted->qty." = ". $carted->price*$carted->qty."\n";
}

$orderContent = "\rJEMEA PRODUCTS Web/WhatsApp Order
⁠- - - - - -\r
Date : ".date('Y/m/d')." - Time : ".date('H:i:s')."\r
⁠- - - - - -\r
". $c ."
⁠- - - - - -\r
Logistics : 1500\r
Total : ".\Cart::total()." FCFA\r
⁠- - - - - -\r";
?>
        <script>
            var msg = "{{ htmlspecialchars($orderContent, ENT_QUOTES, 'UTF-8') }}"
            var wa_btnSetting = {"btnColor":"#16BE45","ctaText":"Place order now.","cornerRadius":40,"marginBottom":20,"marginLeft":20,"marginRight":20,"btnPosition":"left","whatsAppNumber":"237694994229","welcomeMessage":msg,"zIndex":999999,"btnColorScheme":"light"};
            window.onload = () => {
            _waEmbed(wa_btnSetting);
            };
        </script>
    @endif




</head>

<body class="color-theme-green mont-font">

    <div class="preloader"></div>
    <!-- main wrapper  -->
    <div class="main-wrapper">

        <!-- HEADER WRAPPER -->
        <div class="header-menu-mob pt-2 pb-2 shadow-xss position-fixed w-100 z-index-5 bg-white d-none d-block-md">
            <div class="container">
                <div class="row">
                    <div class="col text-start"><button class="navbar-toggler border-0" type="button" data-bs-toggle="modal" data-bs-target="#menumodal"><span class="navbar-toggler-icon"></span></button></div>
                    <div class="col text-center"><a href="{{ url('/') }}"><img src="https://jemeaproducts.com/jemea-products-logo-1.jpeg" alt="logo" class="logo w-100 pt-1"></a></div>
                    <div class="col text-end"><a href="#" class="nav-icon mt-1 d-inline-block" data-bs-toggle="modal" data-bs-target="#cartmodal"><i class="feather-shopping-bag text-grey-500 font-xl"></i></a></div>
                </div>
            </div>
        </div>
        <div class="upper-header bg-lightgrey pt-2 pb-2 d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="nav">
                            <!-- <li class="nav-item"><a class=" ps-0" href="">About Us</a></li>
                            <li class="nav-item"><a href="">Order Tracking</a></li> -->
                        </ul>
                    </div>
                    <div class="col-lg-6 text-end">
                        <ul class="navbar-nav float-end">
                            <li class="nav-item nav-item-toggle active dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">{{ LaravelLocalization::getCurrentLocaleName() }} </a>
                                <ul class="dropdown-menu border-0 shadow-xss">

                                  @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <li>
            <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                {{ $properties['native'] }}
            </a>
        </li>
    @endforeach
                                </ul>
                            </li>

                            <!-- <li class="nav-item nav-item-toggle active dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">FCFA</a>
                                <ul class="dropdown-menu border-0 shadow-xss">
                                  <li><a class="dropdown-item" href=""> EUR</a></li>
                                </ul>
                            </li> -->

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-wrapper pt-4 pb-4 z-index-5 ovh bg-white d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 d-flex">
                        <!-- <a href="#" class="nav-icon ps-0 ms-0 ms-n1" data-bs-toggle="modal" data-bs-target="#categorymodal"><i class="feather-menu font-lg text-grey-500"></i></a> -->
                        <a href="{{ url('/') }}"><img src="https://jemeaproducts.com/jemea-products-logo-1.jpeg" alt="Jemea Products Logo" class="logo"></a>
                        <div class="header-search ms-auto me-2 d-flex">
                            <!-- <a href="#" class="location me-3" data-bs-toggle="modal" data-bs-target="#locationmodal">
                                <span class="fw-600 font-xssss text-grey-400">Delivery to</span>
                                <i class="feather-map-pin text-grey-500"></i>
                                <h4 class="fw-600 font-xssss mt-0 text-current mb-0 ls-0">Downtown New York..</h4>
                            </a> -->
                            <form type="get" action="{{ url('product-search') }}">
                            <div class="form-group mb-0 icon-input d-none d-xl-block me-2">
                                <i class="feather-search font-sm text-grey-400"></i>
                                <input name="q" type="text" placeholder="{{ trans('ws.start_typing_to_search') }}" value="{{@$_GET['q']!=null ? $_GET['q'] : ''}}" class="lh-38 pt-2 pb-2 ps-5 pe-3 font-xssss fw-500 rounded-xl posr" onchange="submit();">
                            </div>
                            </form>
                            <!-- <a href="#" class="nav-icon"><span class="dot-count bg-warning"></span><i class="feather-bell text-grey-500"></i></a> -->
                            <!-- <a href="#" class="nav-icon" data-bs-toggle="modal" data-bs-target="#savedmodal"><i class="feather-heart text-grey-500"></i></a> -->
                            <a href="#" class="nav-icon" data-bs-toggle="modal" data-bs-target="#cartmodal">
                                @if(Cart::total() == 0)
                                <i class="feather-shopping-bag text-grey-500"></i>
                                @else
                                <i class="feather-shopping-bag text-danger-500"></i>
                                @endif
                            </a>



                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="lower-header pt-0 pb-0 shadow-xss z-index-1 bg-invert bg-deepgreen d-none d-lg-block">
            <div class="container">
                <div class="row">

                    <div class="col-lg-9">
                        <div class="navbar navbar-expand-lg p-0">
                            <div class="navbar-collapse collapse show" id="main_nav" style="">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="true" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                                <ul class="navbar-nav">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{ url('/') }}" >{{trans('ws.home')}} </a>
                                    </li>

                                    <li class="nav-item active dropdown nav-item-toggle">
                                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">{{trans('ws.product_category')}} </a>
                                        <ul class="dropdown-menu border-0 shadow-xss">
                                        @foreach(\App\Models\Subcategory::all() as $category)
                                          <li><a class="dropdown-item" href="{{ url('product-category/'.$category->slug) }}"> {{$category->name}} </a></li>
                                          @endforeach
                                        </ul>
                                    </li>

                                    <!--<li class="nav-item">-->
                                    <!--    <a class="nav-link" href="{{url('about')}}" >About </a>-->
                                    <!--</li>-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('contact')}}" >{{trans('ws.contact')}} </a>
                                    </li>


                                    <!-- <li class="nav-item active dropdown nav-item-toggle">
                                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
                                        <ul class="dropdown-menu border-0 shadow-xss">
                                          <li><a class="dropdown-item" href="about.html"> About</a></li>
                                          <li><a class="dropdown-item" href="contact.html"> Contact </a></li>
                                        </ul>
                                    </li> -->
                                </ul>
                                <ul class="navbar-nav ms-auto">
                                    <li class="nav-item text-grey-200 fw-500 font-xssss">
                                        {{ trans('ws.need_help_call_us') }} : <a href="" class="fw-700 text-white">+237 694 992 229 / 677 090 155</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- HEADER WRAPPER -->

        @yield('content')


        <!-- FOOTER WRAPPER -->
        
        <div class="upper-footer bg-black">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12"><hr /></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 pt-5 mt-5"></div>
                    <div class="col-md-6 col-xs-12 sm-mb-3">
                        <h3>{{trans('ws.about')}}</h3>
                        <p class="text-white">
                           Jemea est une marque familiale qui propose des produits frais, directement de la ferme à votre table. Ancrés dans le respect de la terre, la qualité et le savoir-faire, nous cultivons et transformons nos ingrédients avec soin et intention. Chaque produit est récolté et préparé avec attention afin d’offrir fraîcheur, saveur et authenticité, pour une alimentation saine et digne de confiance.
                        </p>
                        
                    </div>


                    
                    <div class="col-md-3 col-xs-12 sm-mb-3">
                        <h3>{{trans('ws.contact')}}</h3>
                        <p class="text-white">
                            +237 694 992 229 <br/>
                            +237 677 090 155 <br/>
                            <!--info@jemeaproducts.com <br/>-->
                            3 Rue Dorot, Lobe, Bekoko Littoral.

                        </p>
                    </div>
                    
                    <div class="col-md-3 col-xs-12 sm-mb-3">
                        
                        <p>
                            <strong style="color:grey;"> Condition de paiement : Cash au livreur ou Momo:  677090155  ou OM 694994229</strong>
                        </p>
                        <br>
                        <p>
                            <img src="{{ url('momo.JPG') }}" width="50" />
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <img src="{{ url('om.PNG') }}" width="50" />
                        </p>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="lower-footer bg-black pb-2 pt-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-sm-start xs-mb-3"><p class="text-grey-500 fw-500 font-xssss mb-0">@ Copyright {{date('Y')}} {{config('app.name')}}, Jojo's Farms All rights reserved.</p></div>
                    <div class="col-md-6 text-center text-sm-end">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="https://www.facebook.com/share/1GgEFeg6zd/?mibextid=wwXIfr" target="_blank"><i class="ti-facebook text-white"></i></a></li>
                            
                            <li class="list-inline-item"><a href="https://www.instagram.com/jemeaproducts?igsh=cnd3am9maXRzZ29s" target="_blank"><i class="ti-instagram text-white"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER WRAPPER -->


    </div>





    <!-- LOCATION MODAL -->
    <div class="modal fade modal-scrollable" id="locationmodal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 320px;">
            <div class="modal-content theme-dark-bg p-4">
                <button type="button" class="btn-close z-index-5 posa right-0 top-0 mt-3 me-3" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body p-0 vw100 text-center pt-3 pb-0">
                    <i class="feather-map-pin bg-greylight text-grey-900 btn-round-xxxl font-xl text-center rounded-6"></i>
                    <h2 class="font-xss fw-700 text-grey-700 mt-4">Select your location</h2>
                    <p class="text-grey-500 font-xsssss mt-1">Implementation of technologies to store <br> unchange data based on specific</p>
                    <div class="inner-addon left-addon">
                        <input type="text" class="form-control ps-5 font-xssss border-sizelg rounded-6 bg-color-none fw-600 border text-grey-500" value="675 Camac Street Down">
                        <i class="ti-location-arrow text-current ps-3 font-xss posa left-0 mt-3"></i>
                    </div>
                    <a href="#" class="btn rounded-6 w-100 lh-2 d-block p-3 mt-2 text-white bg-current font-xssss text-uppercase fw-600 ls-3" data-dismiss="modal" aria-label="Close">Current Location </a>
                </div>
            </div>
        </div>
    </div>

    <!-- MENU MODAL -->
    <div class="modal fade left modal-scrollable" id="menumodal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content theme-dark-bg p-0 border-0 rounded-0">
                <button type="button" class="btn-close z-index-5 bg-grey font-xsssss w-26 h-26 text-center rounded-circle posa right-0 top-0 mt-4 me-3" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body vw100 text-start p-0 h-100">
                    <div class="card p-4 border-0 text-start h-100 ">
                        <h4 class="fw-700 font-lg text-grey-900 text-start mb-3 d-block ls-0"> Menu</h4>

                        <ul class="navbar-nav">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{ url('/') }}" >{{trans('ws.home')}} </a>
                                    </li>

                                    <li class="nav-item active dropdown nav-item-toggle">
                                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">{{trans('ws.product_category')}} </a>
                                        <ul class="dropdown-menu border-0 shadow-xss">
                                        @foreach(\App\Models\SubCategory::all() as $category)
                                          <li><a class="dropdown-item" href="{{ url('product-category/'.$category->slug) }}"> {{$category->name}} </a></li>
                                          @endforeach
                                        </ul>
                                    </li>

                                    <!--<li class="nav-item">-->
                                    <!--    <a class="nav-link" href="{{url('about')}}" >About </a>-->
                                    <!--</li>-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('contact')}}" >{{trans('ws.contact')}} </a>
                                    </li>


                                    <!-- <li class="nav-item active dropdown nav-item-toggle">
                                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
                                        <ul class="dropdown-menu border-0 shadow-xss">
                                          <li><a class="dropdown-item" href="about.html"> About</a></li>
                                          <li><a class="dropdown-item" href="contact.html"> Contact </a></li>
                                        </ul>
                                    </li> -->
                                </ul>


                        <div class="card h-auto mt-auto p-4 w-100 rounded-10 theme-bg border-0 text-center bg-image-cover" style="background-image: url({{url('ui/')}}/images/slider-11.jpg);">
                            <!--<div class="card-body text-center p-2 mb-2">-->
                            <!--    <h4 class="text-grey-900 white-text mb-3 font-sm fw-500">Become a <b class="text-grey-900 white-text">pro</b> <br> Get more <b class="text-grey-900 white-text">features</b></h4>-->
                            <!--    <a href="login-one.html" class="btn rounded-25 bg-current white-text text-white w-150">Upgrade</a>-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CATEGORY MODAL -->


    <!-- CART MODAL -->
    <div class="modal fade right modal-scrollable" id="cartmodal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="width: 350px;">
            <div class="modal-content theme-dark-bg p-0 border-0 rounded-0">
                <button type="button" class="btn-close z-index-5 bg-grey font-xsssss w-26 h-26 text-center rounded-circle posa right-0 top-0 mt-3 me-3" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="cart-box vh-100" >
                    <div class="modal-body vh-100 text-start p-0 d-flex align-items-start flex-column">
                        <div class="card w-100 p-4 pb-0 border-0 text-start">
                            <h4 class="fw-700 font-lg text-grey-900 text-start mb-3 mt-n2 d-block"> Cart</h4>
                            @if(Cart::total() > 0)
                                <a href="{{url('cart/empty')}}" class="btn btn-sm btn-danger">Empty cart</a>
                            @endif
                            @if(Cart::total() == 0)
                            <p>
                                Cart is empty !
                            </p>
                            @endif
                            @foreach(Cart::content() as $carted)
                            <div class="row mb-3">
                                <div class="col-md-5 col-xs-5">
                                    <a href="{{$carted->options->links}}" class="d-block text-center" data-bs-toggle="modal" data-bs-target="#productmodal">
                                        <img src="{{$carted->options->image}}" alt="product-image" class="w-100 d-inline-block pt-3 pb-3 bg-greylight rounded-6">
                                    </a>
                                </div>
                                <div class="col-md-7 col-xs-7 ps-0">
                                    <!-- <span class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">500gm</span> -->
                                    <a href="" class="text-grey-900 fw-600 font-xssss lh-22 d-block ls-0 mb-2">{{$carted->name}} </a>
                                    <h6 class="font-xs ls-3 fw-700 text-current float-start mt-1">
                                        <span class="font-xsssss text-grey-500">FCFA</span>{{$carted->price}}
                                    </h6>
                                    <div class="cart-count float-end ">
                                        <div class="number">
                                            <!-- <span class="minus">-</span> -->
                                            <form method="get" action="{{url('cart/update')}}">
                                                <input type="hidden" name="id" value="{{$carted->rowId}}" />

                                            <input type="number" class="open-font" name="quantity" value="{{$carted->qty}}" onchange="submit()">
                                            <!-- <span class="plus">+</span> -->
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <div class="card w-100 p-4 pt-0 border-0 text-start mt-auto">
                            <!-- <hr /> -->
                             @if(Cart::total() > 0)

                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="text-grey-900 font-xssss fw-600 mb-2 d-flex">{{ trans('ws.subtotal') }} <span class="ms-auto text-grey-500">FCFA {{Cart::total()}}</span></h4>
                                    <!-- <h4 class="text-grey-900 font-xssss fw-600 mb-3 d-flex">Tax <span class="ms-auto text-grey-500">$ 0.99</span></h4> -->
                                    <h4 class="text-grey-900 font-xss fw-600 mb-3 d-flex">Total <span class="ms-auto">FCFA {{Cart::total()}}</span></h4>
                                    <!-- <h5 class="bg-greylight p-4 rounded-6 mt-3 mb-3 w-100 fw-600 text-grey-500 font-xssss d-flex">Apply Promo Code : <span class="ms-auto fw-700 text-grey-900">2 Promos</span></h5> -->
                                </div>
                            </div>

                            <a href="{{\App\Models\User::generateWhatsAppMessage()}}" class="w-100 bg-current text-white rounded-6 text-center btn" id="checkout">{{trans('ws.send_us_a_message')}} WhatsApp</a>
                            @endif


                        </div>
                    </div>
                </div>
                <!-- <div class="checkout-box vh-100" style="display: none;">
                    <div class="modal-body vh-100 text-start p-0 d-flex align-items-start flex-column">
                        <div class="card w-100 p-4 pb-0 border-0 text-start">
                            <h4 class="fw-700 font-lg text-grey-900 text-start mb-4 mt-n2 d-block"> Checkout</h4>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="Name">Name</label>
                                        <input type="text" class="form-control bg-greylight border-0" placeholder="Enter your name" id="Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="Email">Email</label>
                                        <input type="text" class="form-control bg-greylight border-0" placeholder="Enter your email" id="Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="Phone">Phone</label>
                                        <input type="text" class="form-control bg-greylight border-0" placeholder="Enter your phone" id="Phone">
                                    </div>
                                    <div class="form-group">
                                        <label for="Address">Address</label>
                                        <input type="text" class="form-control bg-greylight border-0" placeholder="Enter your address" id="Address">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="Zip">Zip Code</label>
                                        <input type="text" class="form-control bg-greylight border-0" placeholder="Enter here" id="Zip">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="City">City</label>
                                        <input type="text" class="form-control bg-greylight border-0" placeholder="Enter here" id="City">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="Location">Location</label>
                                        <input type="text" class="form-control bg-greylight border-0" placeholder="Enter here location" id="Location">
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input font-xs" type="checkbox" value="Drinks" id="flexCheckStock7">
                                        <label class="form-check-label" for="flexCheckStock7">Save shipping address</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card w-100 p-4 pt-0 border-0 text-start mt-auto">
                            <a href="#" class="w-100 bg-current text-white rounded-6 text-center btn" id="payment">Payment</a>
                        </div>
                    </div>
                </div> -->

                <!-- <div class="payment-box vh-100" style="display: none;">
                    <div class="modal-body vh-100 text-start p-0 d-flex align-items-start flex-column">
                        <div class="card w-100 p-4 pb-0 border-0 text-start">
                            <h4 class="fw-700 font-lg text-grey-900 text-start mb-4 mt-n2 d-block"> Payment</h4>
                            <div class="col-lg-12 mt-2">


                                <div class="card bg-white rounded-6 border-0 shadow-xss p-0">
                                    <div class="card-body d-flex justify-content-between align-items-end p-4">
                                        <div>
                                            <h4 class="text-grey-600 mb-0 d-flex font-xsss align-items-center justify-content-between mt-0 fw-600">
                                                <img src="{{url('ui/')}}/images/b-10.png" alt="image" class="float-left me-4">
                                                 4321 4432 6565 ****
                                            </h4>
                                        </div>
                                        <div class="round float-right mb-2">
                                            <input id="radio-1" class="radio-custom" name="radio-group" type="radio" checked="">
                                            <label for="radio-1" class="radio-custom-label m-0"></label>
                                        </div>

                                    </div>
                                </div>

                                <div class="card bg-white rounded-6 border-0 shadow-xss mt-3 p-0">
                                    <div class="card-body d-flex justify-content-between align-items-end p-4">
                                        <div>
                                            <h4 class="text-grey-600 mb-0 d-flex font-xsss align-items-center justify-content-between mt-0 fw-600">
                                                <img src="{{url('ui/')}}/images/b-9.png" alt="image" class="float-left me-4">
                                                ***port@gmail.com
                                            </h4>
                                        </div>
                                        <div class="round float-right mb-2">
                                            <input id="radio-2" class="radio-custom" name="radio-group" type="radio">
                                            <label for="radio-2" class="radio-custom-label m-0"></label>
                                        </div>

                                    </div>
                                </div>


                                <div class="card bg-white rounded-6 border-0 shadow-xss mt-3 p-0">
                                    <div class="card-body d-flex justify-content-between align-items-end p-4">
                                        <div>
                                            <h4 class="text-grey-600 mb-0 d-flex font-xsss align-items-center justify-content-between mt-0 fw-600">
                                                <img src="{{url('ui/')}}/images/b-12.png" alt="image" class="float-left me-4">
                                                 4321 4432 6565 ****
                                            </h4>
                                        </div>
                                        <div class="round float-right mb-2">
                                            <input id="radio-4" class="radio-custom" name="radio-group" type="radio">
                                            <label for="radio-4" class="radio-custom-label m-0"></label>
                                        </div>

                                    </div>
                                </div>
                                <div class="card bg-greylight p-4 mt-3 mb-3 border-0">
                                    <h4 class="font-xsssss fw-700 ls-3 mb-4">ADD NEW CARD</h4>

                                    <div class="form-group mb-2">
                                        <input type="text" class="form-control bg-white border-0" placeholder="Card Number">
                                    </div>
                                    <div class="form-group mb-2">
                                        <input type="text" class="form-control bg-white border-0" placeholder="Card Holder Name">
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 pe-2">
                                            <div class="form-group">
                                                <input type="text" class="form-control bg-white border-0" placeholder="Month">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 ps-2">
                                            <div class="form-group">
                                                <input type="text" class="form-control bg-white border-0" placeholder="Year">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input font-xs" type="checkbox" value="Drinks" id="flexCheckStock9">
                                        <label class="form-check-label" for="flexCheckStock9">Save as default</label>
                                    </div>
                                    <a href="#" class="w-100 bg-black-08 text-white rounded-6 text-center btn mt-2">Save</a>

                                </div>

                            </div>
                        </div>
                        <div class="card w-100 p-4 pt-0 border-0 text-start mt-auto">
                            <a href="#" class="w-100 bg-current text-white rounded-6 text-center btn" id="checkout3">place Order</a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- CART MODAL -->

    <!-- SAVED MODAL -->
    <div class="modal fade right modal-scrollable" id="savedmodal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="width: 350px;">
            <div class="modal-content theme-dark-bg p-0 border-0 rounded-0">
                <button type="button" class="btn-close z-index-5 bg-grey font-xsssss w-26 h-26 text-center rounded-circle posa right-0 top-0 mt-3 me-3" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="cart-box vh-100" >
                    <div class="modal-body vh-100 text-start p-0 d-flex align-items-start flex-column">
                        <div class="card w-100 p-4 pb-0 border-0 text-start">
                            <h4 class="fw-700 font-lg text-grey-900 text-start mb-3 mt-n2 d-block"> Saved</h4>
                            <div class="row mb-3">
                                <div class="col-md-5 col-xs-5"><a href="#" class="d-block text-center" data-bs-toggle="modal" data-bs-target="#productmodal"><img src="{{url('ui/')}}/images/g-15.png" alt="product-image" class="w-100 d-inline-block pt-3 pb-3 bg-greylight rounded-6"></a></div>
                                <div class="col-md-7 col-xs-7 ps-0">
                                    <span class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">500gm</span>
                                    <a href="single-product-1.html" class="text-grey-900 fw-600 font-xssss lh-22 d-block ls-0 mb-2">Blue Diamond Almonds Lightly Salted</a>
                                    <h6 class="font-xs ls-3 fw-700 text-current float-start mt-1"><span class="font-xsssss text-grey-500">$</span>29 </h6>
                                    <a href="#" class="text-uppercase font-xsssss text-grey-900 fw-700 ls-1 bg-greylight float-end w-125 lh-20 rounded-6 btn">{{trans('ws.add_to_cart')}}</a>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-5 col-xs-5"><a href="#" class="d-block text-center"><img src="{{url('ui/')}}/images/g-16.png" alt="product-image" class="w-100 d-inline-block pt-3 pb-3 bg-greylight rounded-6"></a></div>
                                <div class="col-md-7 col-xs-7 ps-0">
                                    <span class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">500gm</span>
                                    <a href="single-product-1.html" class="text-grey-900 fw-600 font-xssss lh-22 d-block ls-0 mb-2">Blue Diamond Almonds Lightly Salted</a>
                                    <h6 class="font-xs ls-3 fw-700 text-current float-start mt-1"><span class="font-xsssss text-grey-500">$</span>49 </h6>
                                    <a href="#" class="text-uppercase font-xsssss text-grey-900 fw-700 ls-1 bg-greylight float-end w-125 lh-20 rounded-6 btn">{{trans('ws.add_to_cart')}}</a>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-5 col-xs-5"><a href="#" class="d-block text-center"><img src="{{url('ui/')}}/images/g-17.png" alt="product-image" class="w-100 d-inline-block pt-3 pb-3 bg-greylight rounded-6"></a></div>
                                <div class="col-md-7 col-xs-7 ps-0">
                                    <span class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">100gm</span>
                                    <a href="single-product-1.html" class="text-grey-900 fw-600 font-xssss lh-22 d-block ls-0 mb-2">Blue Diamond Almonds Lightly Salted</a>
                                    <h6 class="font-xs ls-3 fw-700 text-current float-start mt-1"><span class="font-xsssss text-grey-500">$</span>99 </h6>
                                    <a href="#" class="text-uppercase font-xsssss text-grey-900 fw-700 ls-1 bg-greylight float-end w-125 lh-20 rounded-6 btn">{{trans('ws.add_to_cart')}}</a>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-5 col-xs-5"><a href="#" class="d-block text-center"><img src="{{url('ui/')}}/images/g-18.png" alt="product-image" class="w-100 d-inline-block pt-3 pb-3 bg-greylight rounded-6"></a></div>
                                <div class="col-md-7 col-xs-7 ps-0">
                                    <span class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">2Kg</span>
                                    <a href="single-product-1.html" class="text-grey-900 fw-600 font-xssss lh-22 d-block ls-0 mb-2">Blue Diamond Almonds Lightly Salted</a>
                                    <h6 class="font-xs ls-3 fw-700 text-current float-start mt-1"><span class="font-xsssss text-grey-500">$</span>39 </h6>
                                    <a href="#" class="text-uppercase font-xsssss text-grey-900 fw-700 ls-1 bg-greylight float-end w-125 lh-20 rounded-6 btn">{{trans('ws.add_to_cart')}}</a>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-5 col-xs-5"><a href="#" class="d-block text-center"><img src="{{url('ui/')}}/images/g-19.png" alt="product-image" class="w-100 d-inline-block pt-3 pb-3 bg-greylight rounded-6"></a></div>
                                <div class="col-md-7 col-xs-7 ps-0">
                                    <span class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">2Kg</span>
                                    <a href="single-product-1.html" class="text-grey-900 fw-600 font-xssss lh-22 d-block ls-0 mb-2">Blue Diamond Almonds Lightly Salted</a>
                                    <h6 class="font-xs ls-3 fw-700 text-current float-start mt-1"><span class="font-xsssss text-grey-500">$</span>39 </h6>
                                    <a href="#" class="text-uppercase font-xsssss text-grey-900 fw-700 ls-1 bg-greylight float-end w-125 lh-20 rounded-6 btn">{{trans('ws.add_to_cart')}}</a>
                                </div>
                            </div>
                        </div>
                        <div class="card w-100 p-4 pt-0 border-0 text-start mt-auto">
                            <a href="#" class="w-100 bg-current text-white rounded-6 text-center btn">Cart</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- SAVED MODAL -->


    <script src="{{url('ui/')}}/js/plugin.js"></script>
    <script src="{{url('ui/')}}/js/scripts.js"></script>


</body>

</html>
