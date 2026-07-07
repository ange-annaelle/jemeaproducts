@extends('layouts.jemea')

@section('content')

 <!-- BANNER WRAPPER -->
        <div class="page-nav md-mt-6" style="background-image: url({{url('ui/images')}}/bg-grocery-4.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center"><h1>{{trans('ws.about_us')}}</h1> <span>{{trans('ws.home')}} / {{trans('ws.about_us')}} </span></div>
                </div>
            </div>
        </div>
        <!-- BANNER WRAPPER -->

        <!-- BLOG WRAPPER -->
        <div class="blog-wrapper pt-lg-5 pb-lg-5 py-4 my-lg-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="fw-700 text-grey-800 display1-size display1-sm-size lh-3 mb-3 pe-lg-5">We provide <span class="text-current">advanced solutions</span> to grow in your online business</h2>
                        <p class="text-grey-500 font-xssss fw-500 lh-26 pe-lg-5 me-lg-5">We believe everyone deserves to have a website or online store. Innovation and simplicity makes us happy: our goal is to remove any technical or financial barriers that can prevent business owners from making their own website.</p>
                        <p class="text-grey-500 font-xssss fw-500 lh-26 pe-lg-5 me-lg-5">We believe everyone deserves to have a website or online store. Innovation and simplicity makes us happy: our goal is to remove any technical or financial barriers that can prevent business.</p>
                    </div>
                    <div class="col-lg-6">
                        <img src="{{url('ui/images')}}/about-1.jpg" alt="about" class="w-100 rounded-6">
                    </div>
                    <!-- <div class="col-lg-3 text-center mt-lg-5 mt-4">
                        <i class="btn-round-md rounded-10 feather-heart border text-current font-md"></i>
                        <h2 class="display2-size fw-700 text-grey-900 mt-2">750k</h2>
                        <h6 class="text-grey-500 fw-500 font-xssss lh-18">Web pages created <br>by users</h6>
                    </div>
                    <div class="col-lg-3 text-center mt-lg-5 mt-4">
                        <i class="btn-round-md rounded-10 feather-home border text-current font-md"></i>
                        <h2 class="display2-size fw-700 text-grey-900 mt-2">14.5M</h2>
                        <h6 class="text-grey-500 fw-500 font-xssss lh-18">In house grocery <br>templates</h6>
                    </div>
                    <div class="col-lg-3 text-center mt-lg-5 mt-4">
                        <i class="btn-round-md rounded-10 feather-aperture border text-current font-md"></i>
                        <h2 class="display2-size fw-700 text-grey-900 mt-2">900K</h2>
                        <h6 class="text-grey-500 fw-500 font-xssss lh-18">Web pages created <br>by users</h6>
                    </div>
                    <div class="col-lg-3 text-center mt-lg-5 mt-4">
                        <i class="btn-round-md rounded-10 feather-box border text-current font-md"></i>
                        <h2 class="display2-size fw-700 text-grey-900 mt-2">4.7 <span class="font-sm">/ 5</span></h2>
                        <h6 class="text-grey-500 fw-500 font-xssss lh-18">Web pages created <br>by users</h6>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- BLOG WRAPPER -->
        <div class="how-wrapper bg-lightgrey pt-lg-5 pb-lg-5 py-4 ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2 class="fw-700 text-grey-900 font-xxl lh-3 pe-lg-5">Customer Feedback</h2>
                        <p class="text-grey-500 font-xssss fw-500 lh-26">We believe everyone deserves to have a website or online. Innovation and simplicity makes us happy: our goal is to remove.</p>
                    </div>

                </div>
                <div class="row justify-content-center mt-lg-4 mt-3 mb-3">
                    <div class="banner-slider-3 owl-carousel owl-theme dot-none owl-nav-link owl-arrow-none rounded-6">
                        <div class="owl-items m-3">
                            <div class="card bg-white border-0 rounded-6 p-lg-5 p-4">
                                <div class="section full">
                                    <div class="row">
                                        <div class="col-3 text-left">
                                            <figure class="avatar float-left mb-0"><img src="{{url('ui/images')}}/user-7.png" alt="image" class="shadow-none w-55"></figure>
                                        </div>
                                        <div class="col-9 ps-3">
                                            <div class="content">
                                                <h6 class="author-name font-xsss fw-700 mb-2 text-grey-800 mt-1 pt-1">Hurin Seary</h6>
                                                <div class="star float-none">
                                                    <img src="{{url('ui/images')}}/star.png" alt="star" class="w-12 float-start me-1">
                                                    <img src="{{url('ui/images')}}/star.png" alt="star" class="w-12 float-start me-1">
                                                    <img src="{{url('ui/images')}}/star.png" alt="star" class="w-12 float-start me-1">
                                                    <img src="{{url('ui/images')}}/star.png" alt="star" class="w-12 float-start me-1">
                                                    <img src="{{url('ui/images')}}/star-disable.png" alt="star" class="w-12 float-start me-1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <p class="font-xssss fw-500 mt-3 mb-0 text-grey-600 lh-28">Enjoyed this a lot and well done. We are an early stage digitally native vertical.website or online.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-items m-3">
                            <div class="card bg-white border-0 rounded-6 p-lg-5 p-4">
                                <div class="section full">
                                    <div class="row">
                                        <div class="col-3 text-left">
                                            <figure class="avatar float-left mb-0"><img src="{{url('ui/images')}}/user-6.png" alt="image" class="shadow-none w-55"></figure>
                                        </div>
                                        <div class="col-9 ps-3">
                                            <div class="content">
                                                <h6 class="author-name font-xsss fw-700 mb-2 text-grey-800 mt-1 pt-1">Hurin Seary</h6>
                                                <div class="star float-none">
                                                    <img src="{{url('ui/images')}}/star.png" alt="star" class="w-12 float-start me-1">
                                                    <img src="{{url('ui/images')}}/star.png" alt="star" class="w-12 float-start me-1">
                                                    <img src="{{url('ui/images')}}/star.png" alt="star" class="w-12 float-start me-1">
                                                    <img src="{{url('ui/images')}}/star-disable.png" alt="star" class="w-12 float-start me-1">
                                                    <img src="{{url('ui/images')}}/star-disable.png" alt="star" class="w-12 float-start me-1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <p class="font-xssss fw-500 mt-3 mb-0 text-grey-600 lh-28">Enjoyed this a lot and well done. We are an early stage digitally native vertical.website or online.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-items m-3">
                            <div class="card bg-white border-0 rounded-6 p-lg-5 p-4">
                                <div class="section full">
                                    <div class="row">
                                        <div class="col-3 text-left">
                                            <figure class="avatar float-left mb-0"><img src="{{url('ui/images')}}/user-8.png" alt="image" class="shadow-none w-55"></figure>
                                        </div>
                                        <div class="col-9 ps-3">
                                            <div class="content">
                                                <h6 class="author-name font-xsss fw-700 mb-2 text-grey-800 mt-1 pt-1">Hurin Seary</h6>
                                                <div class="star float-none">
                                                    <img src="{{url('ui/images')}}/star.png" alt="star" class="w-12 float-start me-1">
                                                    <img src="{{url('ui/images')}}/star.png" alt="star" class="w-12 float-start me-1">
                                                    <img src="{{url('ui/images')}}/star.png" alt="star" class="w-12 float-start me-1">
                                                    <img src="{{url('ui/images')}}/star.png" alt="star" class="w-12 float-start me-1">
                                                    <img src="{{url('ui/images')}}/star-disable.png" alt="star" class="w-12 float-start me-1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <p class="font-xssss fw-500 mt-3 mb-0 text-grey-600 lh-28">Enjoyed this a lot and well done. We are an early stage digitally native vertical.website or online.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="how-wrapper pt-lg-5 pb-lg-5 py-4 ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="fw-700 text-grey-900 font-xxl lh-3 pe-lg-5">Frequently Asked Questions</h2>
                    </div>
                    <div class="col-lg-6 text-center">
                        <p class="text-grey-500 font-xssss fw-500 lh-26">We believe everyone deserves to have a website or online. Innovation and simplicity makes us happy: our goal is to remove.</p>
                    </div>
                </div>
                <div class="row mt-lg-5">
                    <div class="col-lg-6">
                        <div class="accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item border-0 mb-3 shadow-xss rounded-6">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button bg-transparent shadow-none border-bottom border-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                                        <h4 class="font-xsss fw-600 mb-0 text-grey-900 mt-0 ls-0">How do I make a yearly payment?</h4>
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse" aria-labelledby="panelsStayOpen-headingOne" style="">
                                    <div class="accordion-body">
                                        <div class="card border-0 shadow-none w-100 mb-2">
                                            <p class="mb-0 lh-24 font-xssss">Serenity Is Multi-Faceted Blockchain Based Ecosystem, Energy Retailer For The People, Focusing On The Promotion Of Sustainable Living, Renewable Energy Production And Smart Energy Grid Utility Services.Serenity Is Multi-Faceted Blockchain Based Ecosystem, Energy Retailer For The People, Focusing On The Promotion Of Sustainable Living, Renewable Energy Production And Smart Energy Grid Utility Services.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 mb-3 shadow-xss rounded-6">
                                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                    <button class="accordion-button bg-transparent shadow-none collapsed border-bottom border-light" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                        <h4 class="font-xsss fw-600 mb-0 text-grey-900 mt-0 ls-0">How this technology works?</h4>
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                    <div class="accordion-body">
                                            <div class="card border-0 shadow-none w-100 mb-2">
                                                <p class="mb-0 lh-24 font-xssss">Serenity Is Multi-Faceted Blockchain Based Ecosystem, Energy Retailer For The People, Focusing On The Promotion Of Sustainable Living, Renewable Energy Production And Smart Energy Grid Utility Services.Serenity Is Multi-Faceted Blockchain Based Ecosystem, Energy Retailer For The People, Focusing On The Promotion Of Sustainable Living, Renewable Energy Production And Smart Energy Grid Utility Services.</p>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 mb-3 shadow-xss rounded-6">
                                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                    <button class="accordion-button bg-transparent shadow-none collapsed border-bottom border-light" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                        <h4 class="font-xsss fw-600 mb-0 text-grey-900 mt-0 ls-0">What is the comunity benefit? </h4>
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                    <div class="accordion-body">
                                            <div class="card border-0 shadow-none w-100 mb-2">
                                                <p class="mb-0 lh-24 font-xssss">Serenity Is Multi-Faceted Blockchain Based Ecosystem, Energy Retailer For The People, Focusing On The Promotion Of Sustainable Living, Renewable Energy Production And Smart Energy Grid Utility Services.Serenity Is Multi-Faceted Blockchain Based Ecosystem, Energy Retailer For The People, Focusing On The Promotion Of Sustainable Living, Renewable Energy Production And Smart Energy Grid Utility Services.</p>

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item border-0 mb-3 shadow-xss rounded-6">
                                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                    <button class="accordion-button bg-transparent shadow-none collapsed border-bottom border-light" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                        <h4 class="font-xsss fw-600 mb-0 text-grey-900 mt-0 ls-0">Technical or account support</h4>
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                                    <div class="accordion-body">
                                            <div class="card border-0 shadow-none w-100 mb-0 mt-3">
                                            </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item border-0 mb-3 shadow-xss rounded-6">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button bg-transparent shadow-none border-bottom border-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
                                        <h4 class="font-xsss fw-600 mb-0 text-grey-900 mt-0 ls-0">Focus critical developer resources</h4>
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseFive" class="accordion-collapse" aria-labelledby="panelsStayOpen-headingOne" style="">
                                    <div class="accordion-body">
                                        <div class="card border-0 shadow-none w-100 mb-2">
                                            <p class="mb-0 lh-24 font-xssss">Serenity Is Multi-Faceted Blockchain Based Ecosystem, Energy Retailer For The People, Focusing On The Promotion Of Sustainable Living, Renewable Energy Production And Smart Energy Grid Utility Services.Serenity Is Multi-Faceted Blockchain Based Ecosystem, Energy Retailer For The People, Focusing On The Promotion Of Sustainable Living, Renewable Energy Production And Smart Energy Grid Utility Services.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 mb-3 shadow-xss rounded-6">
                                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                    <button class="accordion-button bg-transparent shadow-none collapsed border-bottom border-light" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false" aria-controls="panelsStayOpen-collapseSix">
                                        <h4 class="font-xsss fw-600 mb-0 text-grey-900 mt-0 ls-0">Improve conversion from international</h4>
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                    <div class="accordion-body">
                                            <div class="card border-0 shadow-none w-100 mb-2">
                                                <p class="mb-0 lh-24 font-xssss">Serenity Is Multi-Faceted Blockchain Based Ecosystem, Energy Retailer For The People, Focusing On The Promotion Of Sustainable Living, Renewable Energy Production And Smart Energy Grid Utility Services.Serenity Is Multi-Faceted Blockchain Based Ecosystem, Energy Retailer For The People, Focusing On The Promotion Of Sustainable Living, Renewable Energy Production And Smart Energy Grid Utility Services.</p>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 mb-3 shadow-xss rounded-6">
                                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                    <button class="accordion-button bg-transparent shadow-none collapsed border-bottom border-light" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSeven" aria-expanded="false" aria-controls="panelsStayOpen-collapseSeven">
                                        <h4 class="font-xsss fw-600 mb-0 text-grey-900 mt-0 ls-0">Eget nunc scelerisque viverra mauris</h4>
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                    <div class="accordion-body">
                                            <div class="card border-0 shadow-none w-100 mb-2">
                                                <p class="mb-0 lh-24 font-xssss">Serenity Is Multi-Faceted Blockchain Based Ecosystem, Energy Retailer For The People, Focusing On The Promotion Of Sustainable Living, Renewable Energy Production And Smart Energy Grid Utility Services.Serenity Is Multi-Faceted Blockchain Based Ecosystem, Energy Retailer For The People, Focusing On The Promotion Of Sustainable Living, Renewable Energy Production And Smart Energy Grid Utility Services.</p>

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item border-0 mb-3 shadow-xss rounded-6">
                                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                    <button class="accordion-button bg-transparent shadow-none collapsed border-bottom border-light" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseEight" aria-expanded="false" aria-controls="panelsStayOpen-collapseEight">
                                        <h4 class="font-xsss fw-600 mb-0 text-grey-900 mt-0 ls-0">How do I make a yearly payment?</h4>
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseEight" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                                    <div class="accordion-body">
                                            <div class="card border-0 shadow-none w-100 mb-2">
                                                <p class="mb-0 lh-24 font-xssss">Serenity Is Multi-Faceted Blockchain Based Ecosystem, Energy Retailer For The People, Focusing On The Promotion Of Sustainable Living, Renewable Energy Production And Smart Energy Grid Utility Services.Serenity Is Multi-Faceted Blockchain Based Ecosystem, Energy Retailer For The People, Focusing On The Promotion Of Sustainable Living, Renewable Energy Production And Smart Energy Grid Utility Services.</p>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
