@extends('layouts.jemea')

@section('content')

<!-- LISTING WRAPPER -->
<div class="listing-wrapper pt-3 pb-3 md-mt-6">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div class="row m-0">
                    <div class="card d-flex flex-row justify-content-start p-3 bg-greylight border-0 mb-3">
                        <!-- Options de tri (désactivées) -->
                    </div>
                </div>

                <div class="row border rounded-6 m-0">

                    @forelse($products as $product)
                        @php
                            // Gestion sécurisée de l'image pour éviter l'erreur 500
                            $firstPicture = $product->pictures->first();
                            $imageSrc = $firstPicture 
                                ? asset('images/product/' . $firstPicture->picture) 
                                : asset('images/default-product.png');
                        @endphp

                        <div class="col-lg-4 col-md-4 col-xs-6 p-4 border-end rounded-0 posr">
                            <a href="{{ url('product/'.$product->slug) }}" class="posa right-0 top-0 mt-3 me-3">
                                <i class="ti-heart font-xs text-grey-500"></i>
                            </a>
                            <div class="clearfix"></div>

                            <a href="{{ url('product/'.$product->slug) }}" class="d-block text-center">
                                <img src="{{ $imageSrc }}" alt="{{ $product->name }}" class="w-100 mt-3 mb-3 d-inline-block p-2 pt-0">
                            </a>

                            <div class="star d-inline text-left">
                                <img src="{{ asset('ui/images/star.png') }}" alt="star" class="w-10 me-1 float-start">
                                <img src="{{ asset('ui/images/star.png') }}" alt="star" class="w-10 me-1 float-start">
                                <img src="{{ asset('ui/images/star.png') }}" alt="star" class="w-10 me-1 float-start">
                                <img src="{{ asset('ui/images/star.png') }}" alt="star" class="w-10 me-1 float-start">
                                <img src="{{ asset('ui/images/star-disable.png') }}" alt="star" class="w-10 me-1 float-start">
                            </div>
                            <div class="clearfix"></div>

                            <h2 class="mt-2">
                                <a href="{{ url('product/'.$product->slug) }}" class="text-grey-700 fw-600 font-xsss lh-22 d-block ls-0">
                                    {{ $product->name }}
                                </a>
                            </h2>

                            <h6 class="font-xss ls-3 fw-700 text-current d-flex">
                                <span class="font-xsssss text-grey-500 me-1">FCFA</span>{{ number_format($product->price, 0, ',', ' ') }}
                            </h6>
                        </div>
                    @empty
                        <div class="col-12 text-center py-5">
                            <h4 class="text-grey-600 fw-600">Aucun produit trouvé.</h4>
                            <p class="text-grey-500">Essayez de vérifier l'orthographe ou d'utiliser d'autres mots-clés.</p>
                        </div>
                    @endforelse

                </div>
            </div>

        </div>
    </div>
</div>
<!-- LISTING WRAPPER -->

@endsection