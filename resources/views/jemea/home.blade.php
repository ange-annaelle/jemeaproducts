@extends('layouts.jemea')

@section('content')

<!-- BANNER WRAPPER -->


        <!-- BANNER WRAPPER -->
        <div class="banner-wrapper pt-4 pb-4 md-mt-6" style="background-image: url({{url('ui/')}}/images/background-2.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="owl-carousel slider-banner banner-wrap owl-theme ovh nav-none owl-arrow-center arrow-container">
                            <div class="item rounded-6 bg-image-cover ovh style1 d-flex justify-content-center" style="background-image: url({{url('Jemea-Website-Banner-1.jpg')}});">
                                <div class="slide-content text-center w-50">
                                    <!--<span class="text-grey-700">All natural products</span>-->
                                    <!--<h2 class="text-grey-900"><b>Jemea Products</b> Organic market</h2>-->
                                    <!--<p class="text-grey-600">Organic food is food produced by methods that comply with the standard of farming.</p>-->
                                    <!--<div class="clearfix"></div>-->
                                    <!--<a href="#" class="btn-lg rounded-25 btn bg-current">Order now</a>-->
                                </div>
                            </div>
                            <div class="item rounded-6 bg-image-cover ovh style1 d-flex justify-content-start" style="background-image: url({{url('Jemea-Website-Banner-3.jpg')}});">
                                <div class="slide-content text-left w-50 ps-lg-5">
                                    <!--<span class="text-grey-700">All natural products</span>-->
                                    <!--<h2 class="text-grey-900"><b>Jemea Products</b> of the week</h2>-->
                                    <!--<p class="text-grey-600">Organic food is food produced by methods that comply with the standard of farming.</p>-->
                                    <!--<div class="clearfix">-->
                                        
                                    <!--</div>-->
                                    <!-- <a href="#" class="btn-lg rounded-25 btn bg-current">Order now</a> -->
                                </div>
                            </div>
                            <div class="item rounded-6 bg-image-cover ovh style1 d-flex justify-content-center" style="background-image: url({{url('Jemea-Website-Banner-2.jpg')}});">
                                <div class="slide-content text-center w-50">
                                    <!--<span class="text-grey-700">All natural products</span>-->
                                    <!--<h2 class="text-grey-900"><b>Jemea Products</b> Organic market</h2>-->
                                    <!--<p class="text-grey-600">Organic food is food produced by methods that comply with top standards.</p>-->
                                    <!--<div class="clearfix"></div>-->
                                    <!-- <a href="#" class="btn-lg rounded-25 btn bg-current">Order NOW</a> -->
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--<div class="col-lg-3 ps-lg-0 d-none d-lg-block">-->
                    <!--    <div class="card w-100 border-0 shadow-none ovh rounded-6 hover-zoom-image">-->
                    <!--        <img src="{{url('ui/')}}/images/banner-slider-6.jpg" alt="" class="w-100">-->
                    <!--        <div class="p-4 posa top-0 w-100">-->
                    <!--            <span class="fw-700 ls-3 text-white bg-current ps-2 pe-2 lh-24 rounded-6 d-inline-block font-xsssss">30% OFF</span>-->
                    <!--            <h4 class="font-md fw-700 lh-28 text-grey-900 mb-1 mt-3 ls-0">High Quality <br> Products</h4>-->
                    <!--            <a href="#" class="fw-700 ls-1 border-bottom border-dark lh-20 d-inline-block text-grey-900 font-xsssss">SHOP NOW</a>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
            </div>
        </div>
        <!-- BANNER WRAPPER -->


        <!--<div class="banner-bg">-->
        <!--    <div class="container">-->
        <!--        <div class="row">-->
        <!--            <div class="col-lg-12">-->
        <!--                <div class="card border-0 banner-wrap bg-image-cover bg-image-center" style="background-image: url({{url('ui/')}}/images/bg-grocery-2.jpg);">-->
        <!--                    <div class="slide-content style4 text-center w-100">-->
        <!--                        <span class="text-current">All natural products</span>-->
                                <!-- <h2 class="text-grey-900"><b class="d-block">Best offers </b>of the week</h2> -->
        <!--                        <div class="clearfix"></div>-->
        <!--                        <a href="#" class="btn-lg rounded-25 btn bg-current">Order now</a>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->

        <!-- DEAL OF THE DAY -->
        <div class="product-wrapper pt-4 pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        
                    </div>
                    <div class="col-lg-3">
                        <div class="card border-0 bg-lightgrey p-4 rounded-6">
                            <div class="form-group mb-3">
                                <h6 class="fw-600 text-grey-900 font-xsss mb-1 text-capitalize">Product Categoires</h6>
                            </div>

                            @foreach($categories as $category)
                            <h6 class="d-flex font-xssss lh-22 fw-500 text-grey-600"  > <a style="color:grey; href="{{ url('product-category/'.$category->slug) }}"> {{$category->name}} </a>  <i class="feather-chevron-right ms-auto"></i></h6>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <h4 class="fw-700 font-xs mb-4 mt-2">Trend Products</h4>
                        <div class="banner-slider-4 owl-carousel owl-theme dot-none owl-nav-link owl-arrow-top border rounded-6">

                        @foreach(\App\Models\Product::get()->random(6) as $product)
                            <div class="owl-items">
                                <div class="col-lg-12 p-3 rounded-0 posr">
                                    <!-- <h4 class="ls-3 font-xsssss text-white text-uppercase bg-current fw-700 p-2 d-inline-block posa rounded-3">30% off</h4> -->
                                    <a href="{{ url('product/'.$product->slug) }}" class="posa right-0 top-0 mt-3 me-3"><i class="ti-heart font-xs text-grey-500"></i></a>
                                    <div class="clearfix"></div>
                                    <a href="{{ url('product/'.$product->slug) }}" class="d-block text-center p-2" data-bs-toggle="modal" data-bs-target="#productmodal">
                                        <img src="{{ url('images/product/'.$product->pictures()->first()->picture) }}" alt="product-image" class="w-100 mt-1 d-inline-block">
                                    </a>

                                    <div class="clearfix"></div>
                                    <h2 class="mt-1"><a href="{{ url('product/'.$product->slug) }}" class="text-grey-700 fw-600 font-xsss lh-2 ls-0">{{ $product->name }}</a></h2>
                                    <h6 class="font-xss ls-3 fw-700 text-current d-flex">
                                        <span class="font-xsssss text-grey-500">FCFA</span>{{$product->price}}
                                    </h6>

                                </div>
                            </div>
                        @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- DEAL OF THE DAY -->

        <!-- DEAL OF THE DAY -->
        <div class="product-wrapper pt-3 pb-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="fw-700 font-xs mb-4 mt-2">Deal of the day</h4>
                    </div>
                    <div class="col-lg-12">
                        <div class="banner-slider-5 owl-carousel owl-theme dot-none owl-nav-link owl-arrow-top border rounded-6">
                            @foreach(\App\Models\Product::get()->random(6) as $product)
                            <div class="owl-items">
                                <div class="col-lg-12 p-3 rounded-0 posr">
                                    <!-- <h4 class="ls-3 font-xsssss text-white text-uppercase bg-current fw-700 p-2 d-inline-block posa rounded-3">30% off</h4> -->
                                    <a href="{{ url('product/'.$product->slug) }}" class="posa right-0 top-0 mt-3 me-3"><i class="ti-heart font-xs text-grey-500"></i></a>
                                    <div class="clearfix"></div>
                                    <a href="{{ url('product/'.$product->slug) }}" class="d-block text-center p-2" data-bs-toggle="modal" data-bs-target="#productmodal">
                                        <img src="{{ url('images/product/'.$product->pictures()->first()->picture) }}" alt="product-image" class="w-100 mt-1 d-inline-block">
                                    </a>

                                    <div class="clearfix"></div>
                                    <h2 class="mt-1"><a href="{{ url('product/'.$product->slug) }}" class="text-grey-700 fw-600 font-xsss lh-2 ls-0">{{ $product->name }}</a></h2>
                                    <h6 class="font-xss ls-3 fw-700 text-current d-flex">
                                        <span class="font-xsssss text-grey-500">FCFA</span>{{$product->price}}
                                    </h6>

                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- DEAL OF THE DAY -->



        <!-- DEAL OF THE DAY -->
        <div class="product-wrapper pt-2 pb-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="fw-700 font-xs mb-4 mt-2">Featured Products</h4>
                    </div>
                    <div class="col-lg-12">
                        <div class="banner-slider-5 owl-carousel owl-theme dot-none owl-nav-link owl-arrow-top border rounded-6">
                            @foreach(\App\Models\Product::get()->random(6) as $product)
                            <div class="owl-items">
                                <div class="col-lg-12 p-3 rounded-0 posr">
                                    <!-- <h4 class="ls-3 font-xsssss text-white text-uppercase bg-current fw-700 p-2 d-inline-block posa rounded-3">30% off</h4> -->
                                    <a href="{{ url('product/'.$product->slug) }}" class="posa right-0 top-0 mt-3 me-3"><i class="ti-heart font-xs text-grey-500"></i></a>
                                    <div class="clearfix"></div>
                                    <a href="{{ url('product/'.$product->slug) }}" class="d-block text-center p-2" data-bs-toggle="modal" data-bs-target="#productmodal">
                                        <img src="{{ url('images/product/'.$product->pictures()->first()->picture) }}" alt="product-image" class="w-100 mt-1 d-inline-block">
                                    </a>

                                    <div class="clearfix"></div>
                                    <h2 class="mt-1"><a href="{{ url('product/'.$product->slug) }}" class="text-grey-700 fw-600 font-xsss lh-2 ls-0">{{ $product->name }}</a></h2>
                                    <h6 class="font-xss ls-3 fw-700 text-current d-flex">
                                        <span class="font-xsssss text-grey-500">FCFA</span>{{$product->price}}
                                    </h6>

                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- DEAL OF THE DAY -->







@endsection
