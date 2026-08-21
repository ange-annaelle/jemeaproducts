@extends('layouts.jemea')

@section('content')


<!-- SINGLE PRODUCT WRAPPER -->
        <div class="product-wrapper product-card pb-5 pt-lg-5 pt-3 md-mt-6">
            <div class="container">
                <div class="row">

                    <div class="col-lg-5 col-md-6 col-sm-6 sm-mb-3">
                        <div class="card text-center border-0 w-100 ovh">
                            <div class="owl-carousel product-banner owl-theme overflow-hidden overflow-visible-xl nav-none owl-dots-none owl-arrow-center">


                            @foreach($product->pictures as $picture)
                                <div class="item bg-current-shade p-5 text-center d-block me-0">
                                    <img src="{{ url('images/product/'.$picture->picture) }}" alt="{{$product->name}}" class="w-150 d-inline-block">
                                </div>

                            @endforeach

                            </div>
                        </div>
                        <div class="card text-center border-0 w-100 mt-3 justify-content-center flex-row">
                            @foreach($product->pictures as $picture)
                            <a href="#" class="d-inline-block m-1">
                                <img src="{{ url('images/product/'.$picture->picture) }}" alt="{{$product->name}}" class="w-45 p-3 border">
                            </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product-card border-0">

                            <ul class="breadcrumb-link list-inline">
                                <li class="list-inline-item"><a href="{{ url('/') }}">{{ trans('ws.home') }}</a></li>
                                <li class="list-inline-item"><a href="{{ url('product-category/'.$product->category->slug) }}">{{ $product->category->name }}</a></li>
                                <li class="list-inline-item">{{ $product->name }}</li>
                            </ul>
                            <h2 class="fw-700 text-grey-800 font-sm ls-0 mt-0 mb-2 tag-name lh-3">{{ $product->name }}</h2>
                            <!-- <div class="star d-inline text-left">
                                <img src="{{url('ui/images')}}/star.png" alt="star" class="w-10 me-1 float-start me-1 float-start">
                                <img src="{{url('ui/images')}}/star.png" alt="star" class="w-10 me-1 float-start me-1 float-start">
                                <img src="{{url('ui/images')}}/star.png" alt="star" class="w-10 me-1 float-start me-1 float-start">
                                <img src="{{url('ui/images')}}/star.png" alt="star" class="w-10 me-1 float-start me-1 float-start">
                                <img src="{{url('ui/images')}}/star-disable.png" alt="star" class="w-10 me-1 float-start me-2 float-start">
                                <span class="fw-600 font-xssss text-grey-500 float-start lh-1">4.5 Rating </span>
                            </div> -->
                            <div class="clearfix"></div>
                            <h6 class="font-lg ls-3 fw-700 text-current float-start mt-3 mb-3">
                                <span class="font-xssss text-grey-500">FCFA</span>{{$product->price}}
                                <!-- <span class="tag-weight">500 gm</span> -->
                            </h6>
                            <div class="clearfix"></div>
                            <p class="font-xssss fw-500 mt-0 text-grey-500 lh-24">
                                {!! $product->descripton!!}
                            </p>

                            <!-- <div class="alert-warning text-danger p-2 text-center w-100 font-xssss fw-600 rounded-6 mb-4">Out of Stock</div> -->

                            <!-- <h5 class="font-xssss fw-500 text-grey-500 mb-2 mt-2 lh-3"><b class="text-grey-700">Brand:</b> <a href="#" class="text-current fw-600">Orgomart</a> </h5> -->
                            <!-- <h5 class="font-xssss fw-500 text-grey-500 mb-2 mt-2 lh-3"><b class="text-grey-700">Vendor:</b> <a href="#" class="text-current fw-600">Local Store</a> </h5> -->
                            <h5 class="font-xssss fw-500 text-grey-500 mb-2 mt-2 lh-3"><b class="text-grey-700">{{ trans('ws.category') }}:</b> {{$product->category->name}} </h5>
                            <!-- <h5 class="font-xssss fw-500 text-grey-500 mb-2 mt-2 lh-3"><b class="text-grey-700">Tags:</b> chicken, natural, organic</h5> -->

                            <!-- <h5 class="font-xssss fw-500 text-grey-500 mt-4 d-flex"><i class="feather-bookmark font-xs text-current me-2 mt-n1"></i> <b class="text-grey-700 me-1">2 Month</b> Brand Warranty </h5> -->
                            <h5 class="font-xssss fw-500 text-grey-500 mt-3 d-flex"><i class="feather-help-circle font-xs text-current me-2 mt-n1"></i> <b class="text-grey-700 me-1">100% </b> Organic Product</h5>
                            <!-- <h5 class="font-xssss fw-500 text-grey-500 mt-3 d-flex mb-4"><i class="feather-alert-triangle font-xs text-current me-2 mt-n1"></i> <b class="text-grey-700 me-1">30 Days </b> Money back Return</h5> -->
                            <div class="cart-card d-flex border-0">
                                <form action="{{ url('cart/add') }}" method="get">
                                    <input type="hidden" name="product" value="{{$product->id}}" />
                                    <div class="cart-count float-end me-2">

                                        <div class="number">
                                            <span class="minus">-</span>
                                            <input type="text" class="open-font cart-input" name="quantity" value="1">
                                            <span class="plus">+</span>
                                        </div>
                                    </div>
                                    <br/>
                                    <!-- <a href="#" class="bg-current text-white rounded-6 btn-cart">Add to Cart</a> -->
                                    <button type="submit" class="bg-current text-white rounded-6 btn-cart">{{ trans('ws.add_to_cart') }}t</button>
                                </form>
                            </div>
                            <div class="share-card d-flex mt-lg-5 mt-3">
                                <h5 class="fw-600 text-grey-700 me-3 mt-2 lh-26 font-xssss">Share :</h5>
                                <a href="#" class="btn-round btn-round-md ms-1 z-index-1 bg-facebook"><i class="ti-facebook text-white"></i></a>
                                <a href="#" class="btn-round btn-round-md ms-1 z-index-1 bg-twiiter"><i class="ti-twitter-alt text-white"></i></a>
                                <a href="#" class="btn-round btn-round-md ms-1 z-index-1 bg-linkedin"><i class="ti-linkedin text-white"></i></a>
                                <a href="#" class="btn-round btn-round-md ms-1 z-index-1 bg-instagram"><i class="ti-instagram text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--<div class="col-lg-3 ps-5 d-none d-lg-block">-->
                    <!--    <a href="#" class="d-inline-block">-->
                    <!--        <img src="{{url('ui/images')}}/add-banner.jpg" alt="add-banner" class="rounded-6 ovh w-100">-->
                    <!--    </a>-->
                    <!--</div>-->
                </div>
            </div>
        </div>
        <!-- SINGLE PRODUCT WRAPPER -->
        <!-- RELATED PRODUCT -->
        <div class="related-product pb-5 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="fw-700 font-xss mb-4 mt-2">{{ trans('ws.related_products') }}s</h4>
                    </div>
                    <div class="col-lg-12">
                        <div class="related-product-slider border">


                            <div class="banner-slider-5 owl-carousel owl-theme dot-none owl-nav-link owl-arrow-top">
                                @foreach($product->category->products->random(6) as $relatedProduct)
                                @php($image = $relatedProduct->pictures()->first())

                                <div class="owl-items card rounded-0 border-0 p-3">

                                    <a href="#" class="posa right-0 top-0 mt-3 me-3"><i class="ti-heart font-xs text-grey-500"></i></a>
                                    <div class="clearfix"></div>
                                    <a href="#" class="d-block text-center" data-bs-toggle="modal" data-bs-target="#productmodal">
                                        <img src="{{ $image ? url('images/product/'.$image->picture) : url('ui/images/no-image.png') }}" alt="product-image" class="w-100 mt-3 mb-3 d-inline-block p-2 pt-0">
                                    </a>
                                    <div class="star d-inline text-left">
                                        <img src="{{url('ui/images')}}/star.png" alt="star" class="w-10 me-1 float-start">
                                        <img src="{{url('ui/images')}}/star.png" alt="star" class="w-10 me-1 float-start">
                                        <img src="{{url('ui/images')}}/star.png" alt="star" class="w-10 me-1 float-start">
                                        <img src="{{url('ui/images')}}/star.png" alt="star" class="w-10 me-1 float-start">
                                        <img src="{{url('ui/images')}}/star-disable.png" alt="star" class="w-10 me-1 float-start">
                                    </div>
                                    <div class="clearfix"></div>
                                    <h2 class="mt-2">
                                        <a href="{{ url('product/'.$relatedProduct->slug) }}" class="text-grey-700 fw-600 font-xsss lh-22 d-block ls-0">{{ $relatedProduct->name }}</a>
                                    </h2>
                                    <h6 class="font-xss ls-3 fw-700 text-current d-flex">
                                        <span class="font-xsssss text-grey-500">FCFA</span>{{$relatedProduct->price}}
                                        <!-- <span class="ms-auto text-grey-500 fw-500 mt-1 font-xsssss">500gm</span> -->
                                    </h6>
                                    <!-- <div class="cart-count d-flex mt-4">
                                        <div class="number">
                                            <span class="minus">-</span>
                                            <input type="text" class="open-font" value="1">
                                            <span class="plus">+</span>
                                        </div>
                                    </div> -->
                                </div>

                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- RELATED PRODUCT -->


@endsection