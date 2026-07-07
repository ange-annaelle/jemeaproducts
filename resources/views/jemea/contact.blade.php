@extends('layouts.jemea')

@section('content')


<div class="contact-wrapp pt-5 pb-5 mt-lg-3 mb-lg-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="card pt-4 bg-white border-0 mb-3">
                            <div class="form-group mb-5">
                                <h6 class="fw-700 text-grey-900 font-sm mb-0">{{trans('ws.reach_us')}}</h6>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 mb-3 mb-lg-5">
                                    <h4 class="text-grey-700 fw-700 font-xss">Douala</h4>
                                    <h5 class="font-xssss lh-22 fw-500 text-grey-500 mt-3">123 Rue Dorot <br> Bekoko, Littoral</h5>
                                    <h5 class="font-xssss lh-22 fw-500 text-grey-500 mt-3 mb-0"> +237 694 992 229</h5>
                                    <h5 class="font-xssss lh-22 fw-500 text-grey-500 mt-3 mb-0"> +237  677 090 155</h5>
                                    <h5 class="font-xssss lh-22 fw-500 text-grey-500 mt-0">info@jemeaproducts.com</h5>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 ">
                        <div class="card p-lg-5 p-4 bg-lightgrey border-0">
                            <div class="form-group mb-3">
                                <h6 class="fw-700 text-grey-900 font-sm mb-0">{{ trans('ws.get_in_touch') }}</h6>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="{{ trans('ws.name') }}" class="lh-38 p-2 ps-3 font-xssss fw-500 rounded-6 posr border border-light w-100">
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" class="lh-38 p-2 ps-3 font-xssss fw-500 rounded-6 posr border border-light w-100">
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="{{ trans('ws.phone') }}" class="lh-38 p-2 ps-3 font-xssss fw-500 rounded-6 posr border border-light w-100">
                            </div>
                            <div class="form-group mb-1">
                                <textarea name="message" class="border-light border font-xssss fw-500 text-grey-600 p-2 rounded-6 ovh w-100 ps-3" cols="30" rows="6">{{ trans('ws.message') }}</textarea>
                            </div>
                            <a href="#" class="btn-lg rounded-6 font-xssss p-3 fw-600 ls-3 text-white  btn bg-current">{{ trans('ws.send') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        


@endsection
