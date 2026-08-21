@extends('layouts.jemea')

@section('content')

<div class="contact-wrapp pt-5 pb-5 mt-lg-3 mb-lg-3">
    <div class="container">

        <div class="row justify-content-center mb-5">
            <div class="col-lg-7 text-center">
                <span class="jc-eyebrow">{{ trans('ws.reach_us') }}</span>
                <h2 class="jc-title">On est là pour vous répondre</h2>
                <p class="jc-subtitle">Une question sur nos produits, une commande, ou juste envie de nous dire bonjour — écrivez-nous.</p>
            </div>
        </div>

        <div class="row g-4 justify-content-center">

            <!-- INFOS CONTACT -->
            <div class="col-lg-5">
                <div class="jc-card jc-card-dark h-100">
                    <h4 class="jc-card-title">Douala</h4>

                    <div class="jc-info-item">
                        <span class="jc-info-icon"><i class="feather-map-pin"></i></span>
                        <div>
                            <span class="jc-info-label">Adresse</span>
                            <p class="jc-info-value">123 Rue Dorot<br>Bekoko, Littoral</p>
                        </div>
                    </div>

                    <div class="jc-info-item">
                        <span class="jc-info-icon"><i class="feather-phone"></i></span>
                        <div>
                            <span class="jc-info-label">Téléphone</span>
                            <p class="jc-info-value">
                                <a href="tel:+237694992229">+237 694 992 229</a><br>
                                <a href="tel:+237677090155">+237 677 090 155</a>
                            </p>
                        </div>
                    </div>

                    <div class="jc-info-item mb-0">
                        <span class="jc-info-icon"><i class="feather-mail"></i></span>
                        <div>
                            <span class="jc-info-label">Email</span>
                            <p class="jc-info-value mb-0"><a href="mailto:info@jemeaproducts.com">info@jemeaproducts.com</a></p>
                        </div>
                    </div>

                    <div class="jc-social">
                        <a href="#" class="jc-social-btn"><i class="feather-facebook"></i></a>
                        <a href="#" class="jc-social-btn"><i class="feather-instagram"></i></a>
                        <a href="https://api.whatsapp.com/send/?phone=237694994229" target="_blank" rel="noopener" class="jc-social-btn"><i class="feather-message-circle"></i></a>
                    </div>
                </div>
            </div>

            <!-- FORMULAIRE -->
            <div class="col-lg-6">
                <div class="jc-card h-100">
                    <h6 class="jc-form-title">{{ trans('ws.get_in_touch') }}</h6>

                    <form action="{{ url('contact') }}" method="post">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="jc-label">{{ trans('ws.name') }}</label>
                                <input type="text" name="name" placeholder="{{ trans('ws.name') }}" class="jc-input">
                            </div>
                            <div class="col-md-6">
                                <label class="jc-label">Email</label>
                                <input type="email" name="email" placeholder="Email" class="jc-input">
                            </div>
                            <div class="col-12">
                                <label class="jc-label">{{ trans('ws.phone') }}</label>
                                <input type="text" name="phone" placeholder="{{ trans('ws.phone') }}" class="jc-input">
                            </div>
                            <div class="col-12">
                                <label class="jc-label">Message</label>
                                <textarea name="message" class="jc-input jc-textarea" rows="5" placeholder="{{ trans('ws.message') }}"></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="jc-btn">{{ trans('ws.send') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<style>
    .contact-wrapp{ --jc-green:#145f01; --jc-green-deep:#0a3d00; --jc-ink:#1c2a17; }

    .jc-eyebrow{ display:inline-block; font-weight:700; font-size:12px; letter-spacing:2px; text-transform:uppercase; color:var(--jc-green); background:rgba(20,95,1,.08); padding:6px 14px; border-radius:99px; margin-bottom:14px; }
    .jc-title{ font-weight:700; font-size:28px; color:var(--jc-ink); margin-bottom:10px; }
    .jc-subtitle{ font-size:15px; color:#697563; margin:0; }

    .jc-card{ background:#fff; border:1px solid #eef1ea; border-radius:18px; padding:36px 32px; box-shadow:0 8px 24px rgba(20,40,10,.05); }
    .jc-card-dark{ background:linear-gradient(160deg, var(--jc-green) 0%, var(--jc-green-deep) 100%); color:#fff; border:none; }
    .jc-card-title{ font-weight:700; font-size:20px; margin-bottom:26px; color:#fff !important; }

    .jc-info-item{ display:flex; align-items:flex-start; gap:14px; margin-bottom:22px; }
    .jc-info-icon{ width:38px; height:38px; flex:0 0 38px; border-radius:10px; background:rgba(255,255,255,.14); display:flex; align-items:center; justify-content:center; font-size:16px; }
    .jc-info-label{ display:block; font-size:11px; text-transform:uppercase; letter-spacing:1px; color:rgba(255,255,255,.6) !important; margin-bottom:3px; }
    .jc-info-value{ font-size:14.5px; line-height:1.5; margin:0; color:#fff !important; }
    .jc-info-value a{ color:#fff !important; text-decoration:none; }
    .jc-info-value a:hover{ text-decoration:underline; }

    .jc-social{ display:flex; gap:10px; margin-top:8px; }
    .jc-social-btn{ width:38px; height:38px; border-radius:50%; background:rgba(255,255,255,.14); display:flex; align-items:center; justify-content:center; color:#fff; transition:background .2s ease; }
    .jc-social-btn:hover{ background:rgba(255,255,255,.28); color:#fff; }

    .jc-form-title{ font-weight:700; font-size:16px; color:var(--jc-ink); margin-bottom:22px; }
    .jc-label{ display:block; font-size:12.5px; font-weight:600; color:#5c6656; margin-bottom:6px; }
    .jc-input{ width:100%; border:1px solid #e3e8dd; border-radius:10px; padding:11px 14px; font-size:14px; color:var(--jc-ink); transition:border-color .2s ease, box-shadow .2s ease; }
    .jc-input:focus{ outline:none; border-color:var(--jc-green); box-shadow:0 0 0 3px rgba(20,95,1,.1); }
    .jc-textarea{ resize:vertical; min-height:120px; }

    .jc-btn{ width:100%; border:none; background:var(--jc-green); color:#fff; font-weight:700; font-size:14.5px; padding:13px 24px; border-radius:10px; letter-spacing:.5px; transition:background .2s ease, transform .2s ease; }
    .jc-btn:hover{ background:var(--jc-green-deep); transform:translateY(-1px); }

    @media (max-width: 991px){
        .jc-card{ padding:30px 24px; }
    }
</style>

@endsection