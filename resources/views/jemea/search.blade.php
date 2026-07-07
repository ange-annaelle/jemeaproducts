@extends('layouts.jemea')

@section('content')


 <!-- LISTING WRAPPER -->
        <div class="listing-wrapper pt-3 pb-3 md-mt-6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card d-flex flex-wrap flex-row w-100 p-lg-5 p-4 border-0 bg-image-cover bg-image-center mb-3" style="background-image: url({{url('ui/images')}}/slider-12.jpg);">
                            <div class="col-lg-5 col-md-12">
                                <h2 class="fw-700 display1-size display1-sm-size ls-0 text-grey-900 mb-0">{{$title}}</h2>
                                <span class="text-grey-700 fw-500 font-xssss mt-1 d-block">&nbsp;</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="row m-0">
                            <div class="card d-flex flex-row justify-content-start p-3 bg-greylight border-0 mb-3">
                                <!-- <a href="#" class="mt-1"><span class="feather-grid text-grey-600 font-xs"></span></a> -->
                                <!--<select class="form-select ms-auto float-end" aria-label="Default select example">-->
                                <!--    <option selected>Sort by latest</option>-->
                                <!--    <option value="1">Sort by popularity</option>-->
                                <!--    <option value="2">Sort by price : low to high</option>-->
                                <!--    <option value="3">Sort by price : high to low</option>-->
                                <!--</select>-->
                            </div>
                        </div>
                        <div class="row border rounded-6 m-0">


                        @foreach($products as $product)
                            <div class="col-lg-4 col-md-4 col-xs-6 p-4 border-end rounded-0 posr">
                                <!-- <span class="ls-3 font-xsssss text-white text-uppercase bg-current fw-700 p-2 lh-1 d-inline-block posa rounded-3 left-15 top-15">30% off</span> -->
                                <a href="{{ url('product/'.$product->slug) }}" class="posa right-0 top-0 mt-3 me-3"><i class="ti-heart font-xs text-grey-500"></i></a>
                                <div class="clearfix"></div>
                                <a href="{{ url('product/'.$product->slug) }}" class="d-block text-center" data-bs-toggle="modal" data-bs-target="#productmodal">
                                    <img src="{{ url('images/product/'.$product->pictures()->first()->picture) }}" alt="product-image" class="w-100 mt-3 mb-3 d-inline-block p-2 pt-0">
                                </a>
                                <div class="star d-inline text-left">
                                    <img src="{{url('ui/images')}}/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="{{url('ui/images')}}/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="{{url('ui/images')}}/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="{{url('ui/images')}}/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="{{url('ui/images')}}/star-disable.png" alt="star" class="w-10 me-1 float-start">
                                </div>
                                <div class="clearfix"></div>
                                <h2 class="mt-2"><a href="{{ url('product/'.$product->slug) }}" class="text-grey-700 fw-600 font-xsss lh-22 d-block ls-0">{{$product->name}}</a></h2>
                                <h6 class="font-xss ls-3 fw-700 text-current d-flex">
                                    <span class="font-xsssss text-grey-500">FCFA</span>{{$product->price}}
                                    <!-- <span class="ms-auto text-grey-500 fw-500 mt-1 font-xsssss">500gm</span> -->
                                </h6>
                                <!-- <div class="cart-count d-flex mt-4">
                                    <div class="number">
                                        <span class="minus">-</span>
                                        <input type="text" class="open-font" value="1"/>
                                        <span class="plus">+</span>
                                    </div>
                                </div> -->
                            </div>

                        @endforeach




                        </div>
                        <!-- <div class="row">
                            <div class="col-lg-12 mt-5 mb-4">
                                <nav aria-label="Page navigation example">
                                  <ul class="pagination justify-content-center">
                                    <li class="page-item disabled"><a class="page-link" href="#"><i class="feather-chevron-left"></i></a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><i class="feather-chevron-right"></i></a></li>
                                  </ul>
                                </nav>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- LISTING WRAPPER -->







@endsection
