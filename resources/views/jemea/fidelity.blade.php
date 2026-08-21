@extends('layouts.jemea')

@section('content')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

<div class="jf-page">

    <!-- HERO -->
    <section class="jf-hero">
        <div class="jf-hero-blob jf-blob-1"></div>
        <div class="jf-hero-blob jf-blob-2"></div>
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 jf-reveal">
                    <span class="jf-eyebrow">Programme de fidélité</span>
                    <h1 class="jf-hero-title">Chaque achat<br>rapproche <span class="jf-highlight">votre carte</span><br>d'une récompense.</h1>
                    <p class="jf-hero-sub">
                        Rejoignez le programme de fidélité JEMEA : recevez un tampon à chaque achat
                        en boutique. Après 5 tampons, profitez de <strong>15% de réduction</strong>
                        — et tentez de gagner d'autres lots en cours de route.
                    </p>
                    <a href="#jf-cta" class="jf-btn jf-btn-primary">
                        Découvrir comment ça marche
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" style="margin-left:8px;"><path d="M12 4v16m0 0l-6-6m6 6l6-6" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </a>
                </div>

                <div class="col-lg-6 jf-reveal" style="transition-delay:.12s;">
                    <!-- SIGNATURE ELEMENT : la carte à tampons -->
                    <div class="jf-stampcard">
                        <div class="jf-stampcard-head">
                            <span class="jf-stampcard-brand">JEMEA</span>
                            <span class="jf-stampcard-label">Carte fidélité</span>
                        </div>
                        <div class="jf-stamp-row" id="jfStampRow">
                            <div class="jf-stamp jf-stamp-filled" style="--d:0"><svg viewBox="0 0 24 24" width="20" height="20" fill="none"><path d="M20 6L9 17l-5-5" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                            <div class="jf-stamp jf-stamp-filled" style="--d:1"><svg viewBox="0 0 24 24" width="20" height="20" fill="none"><path d="M20 6L9 17l-5-5" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                            <div class="jf-stamp jf-stamp-filled" style="--d:2"><svg viewBox="0 0 24 24" width="20" height="20" fill="none"><path d="M20 6L9 17l-5-5" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                            <div class="jf-stamp" style="--d:3"></div>
                            <div class="jf-stamp jf-stamp-reward" style="--d:4">
                                <svg viewBox="0 0 24 24" width="22" height="22" fill="none"><path d="M20 12v9H4v-9M2 7h20v5H2V7zm10 0V3m0 0c-1.5 0-3.5-.5-3.5-2S10 0 12 0s3.5 1 3.5 2S13.5 3 12 3z" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </div>
                        </div>
                        <div class="jf-stampcard-foot">
                            3 / 5 tampons — encore 2 achats en boutique avant vos -15%
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- C'EST QUOI -->
    <section class="jf-section jf-reveal">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <span class="jf-eyebrow jf-eyebrow-dark">C'est quoi ?</span>
                    <h2 class="jf-section-title">Le programme de fidélité JEMEA, expliqué simplement</h2>
                    <p class="jf-section-text">
                        C'est simple : à chaque achat en boutique, vous recevez un tampon sur votre
                        carte de fidélité digitale. Dès que vous atteignez <strong>5 tampons</strong>,
                        vous profitez automatiquement de <strong>15% de réduction</strong> — et vous
                        entrez en course pour gagner d'autres lots JEMEA au passage.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- POURQUOI REJOINDRE -->
    <section class="jf-section jf-section-tint jf-reveal">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-lg-7 text-center">
                    <span class="jf-eyebrow jf-eyebrow-dark">Avantages</span>
                    <h2 class="jf-section-title">Pourquoi rejoindre le programme</h2>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="jf-feature">
                        <div class="jf-feature-icon jf-icon-mango">
                            <svg width="26" height="26" viewBox="0 0 24 24" fill="none"><path d="M20 12a8 8 0 11-8-8" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><path d="M12 4c2 2 3 4.5 3 8s-1 6-3 8" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
                        </div>
                        <h5 class="jf-feature-title">Des récompenses réelles</h5>
                        <p class="jf-feature-text">Chaque tampon vous rapproche d'un produit offert ou d'une réduction sur vos prochains achats.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="jf-feature">
                        <div class="jf-feature-icon jf-icon-papaya">
                            <svg width="26" height="26" viewBox="0 0 24 24" fill="none"><path d="M13 2L4 14h7l-1 8 9-12h-7l1-8z" stroke="currentColor" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"/></svg>
                        </div>
                        <h5 class="jf-feature-title">Simple et rapide</h5>
                        <p class="jf-feature-text">Inscription gratuite, carte 100% digitale. Aucun papier à conserver, aucune app à installer.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="jf-feature">
                        <div class="jf-feature-icon jf-icon-green">
                            <svg width="26" height="26" viewBox="0 0 24 24" fill="none"><path d="M20.8 4.6a5.5 5.5 0 00-7.8 0L12 5.6l-1-1a5.5 5.5 0 10-7.8 7.8l1 1L12 21l7.8-7.6 1-1a5.5 5.5 0 000-7.8z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/></svg>
                        </div>
                        <h5 class="jf-feature-title">Réservé aux fidèles</h5>
                        <p class="jf-feature-text">Des offres exclusives, pensées uniquement pour nos clients réguliers.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- LOTS À GAGNER -->
    <section class="jf-section jf-reveal">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-lg-7 text-center">
                    <span class="jf-eyebrow jf-eyebrow-dark">À gagner</span>
                    <h2 class="jf-section-title">Quelques lots à gagner</h2>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-lg-3 col-6">
                    <div class="jf-prize jf-prize-1">
                        <span class="jf-prize-tag">Carte complète</span>
                        <h6 class="jf-prize-title">15% de réduction</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="jf-prize jf-prize-2">
                        <span class="jf-prize-tag">Lot</span>
                        <h6 class="jf-prize-title">Carton de 6 jus 33cl</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="jf-prize jf-prize-3">
                        <span class="jf-prize-tag">Lot</span>
                        <h6 class="jf-prize-title">Pot de confiture JEMEA</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="jf-prize jf-prize-4">
                        <span class="jf-prize-tag">Lot</span>
                        <h6 class="jf-prize-title">Moulin à poivre</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="jf-cta" id="jf-cta">
        <div class="container">
            <div class="jf-cta-card jf-reveal">
                <div class="jf-cta-blob"></div>
                <h3 class="jf-cta-title">Prêt à remplir votre première carte ?</h3>
                <p class="jf-cta-text">Inscrivez-vous gratuitement et commencez à cumuler dès votre prochain achat JEMEA.</p>
                <a href="https://jemeafidelity.com" target="_blank" rel="noopener" class="jf-btn jf-btn-white">
                    Rejoindre le programme
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" style="margin-left:8px;"><path d="M7 17L17 7M17 7H9M17 7v8" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </a>
            </div>
        </div>
    </section>

</div>

<style>
    .jf-page{ --jf-green:#145f01; --jf-green-deep:#0a3d00; --jf-mango:#f5a300; --jf-papaya:#ff6a3d; --jf-cream:#fffaf2; --jf-ink:#132808; font-family:'Inter',sans-serif; color:var(--jf-ink); overflow-x:hidden; }
    .jf-page h1, .jf-page h2, .jf-page h3, .jf-page h5, .jf-page h6 { font-family:'Baloo 2', sans-serif; }

    /* reveal-on-scroll */
    .jf-reveal{ opacity:0; transform:translateY(24px); transition:opacity .7s ease, transform .7s ease; }
    .jf-reveal.jf-in{ opacity:1; transform:translateY(0); }
    @media (prefers-reduced-motion: reduce){ .jf-reveal{ opacity:1; transform:none; transition:none; } }

    /* HERO */
    .jf-hero{ position:relative; background:radial-gradient(120% 140% at 10% 0%, var(--jf-green-deep) 0%, var(--jf-green) 55%, #0d4a01 100%); padding:100px 0 90px; overflow:hidden; }
    .jf-hero-blob{ position:absolute; border-radius:50%; filter:blur(60px); opacity:.35; pointer-events:none; }
    .jf-blob-1{ width:420px; height:420px; background:var(--jf-mango); top:-160px; right:-100px; }
    .jf-blob-2{ width:300px; height:300px; background:var(--jf-papaya); bottom:-140px; left:-80px; opacity:.25; }

    .jf-eyebrow{ display:inline-block; font-family:'Inter',sans-serif; font-weight:700; font-size:12px; letter-spacing:2px; text-transform:uppercase; color:#d9f2c9; background:rgba(255,255,255,.12); padding:6px 14px; border-radius:99px; margin-bottom:18px; }
    .jf-eyebrow-dark{ color:var(--jf-green); background:rgba(20,95,1,.09); }

    .jf-hero-title{ color:#fff; font-weight:800; font-size:44px; line-height:1.12; margin-bottom:20px; }
    .jf-highlight{ color:var(--jf-mango); }
    .jf-hero-sub{ color:rgba(255,255,255,.85); font-size:16.5px; line-height:1.7; max-width:460px; margin-bottom:30px; }

    .jf-btn{ display:inline-flex; align-items:center; font-family:'Inter',sans-serif; font-weight:700; font-size:15px; padding:15px 28px; border-radius:99px; text-decoration:none; transition:transform .25s ease, box-shadow .25s ease; }
    .jf-btn-primary{ background:var(--jf-mango); color:#1a1200; box-shadow:0 10px 24px rgba(245,163,0,.35); }
    .jf-btn-primary:hover{ transform:translateY(-3px); box-shadow:0 16px 30px rgba(245,163,0,.45); color:#1a1200; }
    .jf-btn-white{ background:#fff; color:var(--jf-green); }
    .jf-btn-white:hover{ transform:translateY(-3px); color:var(--jf-green-deep); box-shadow:0 16px 30px rgba(0,0,0,.18); }

    /* SIGNATURE STAMP CARD */
    .jf-stampcard{ background:rgba(255,255,255,.08); border:1px solid rgba(255,255,255,.18); backdrop-filter:blur(14px); border-radius:22px; padding:28px 26px 24px; max-width:440px; margin:0 auto; box-shadow:0 30px 60px rgba(0,0,0,.25); }
    .jf-stampcard-head{ display:flex; align-items:baseline; justify-content:space-between; margin-bottom:22px; }
    .jf-stampcard-brand{ font-family:'Baloo 2',sans-serif; font-weight:800; font-size:20px; color:#fff; letter-spacing:.5px; }
    .jf-stampcard-label{ font-size:12px; color:rgba(255,255,255,.65); text-transform:uppercase; letter-spacing:1px; }
    .jf-stamp-row{ display:flex; gap:10px; flex-wrap:wrap; margin-bottom:18px; }
    .jf-stamp{ width:48px; height:48px; border-radius:50%; border:2px dashed rgba(255,255,255,.35); display:flex; align-items:center; justify-content:center; opacity:0; transform:scale(.5); animation:jfStampPop .5s ease forwards; animation-delay:calc(var(--d) * .12s + .3s); }
    .jf-stamp-filled{ background:var(--jf-mango); border:2px solid var(--jf-mango); box-shadow:0 6px 16px rgba(245,163,0,.4); }
    .jf-stamp-reward{ border:2px solid var(--jf-papaya); color:var(--jf-papaya); background:rgba(255,106,61,.12); }
    @keyframes jfStampPop{ 0%{opacity:0; transform:scale(.5);} 70%{opacity:1; transform:scale(1.12);} 100%{opacity:1; transform:scale(1);} }
    @media (prefers-reduced-motion: reduce){ .jf-stamp{ animation:none; opacity:1; transform:none; } }
    .jf-stampcard-foot{ font-size:13.5px; color:rgba(255,255,255,.8); border-top:1px solid rgba(255,255,255,.15); padding-top:14px; }

    /* SECTIONS */
    .jf-section{ padding:80px 0; }
    .jf-section-tint{ background:var(--jf-cream); }
    .jf-section-title{ font-weight:700; font-size:30px; color:var(--jf-ink); margin-bottom:16px; }
    .jf-section-text{ font-size:16px; line-height:1.8; color:#4a5545; }

    /* FEATURES */
    .jf-feature{ background:#fff; border:1px solid #eef1ea; border-radius:18px; padding:32px 26px; height:100%; transition:transform .25s ease, box-shadow .25s ease; }
    .jf-feature:hover{ transform:translateY(-6px); box-shadow:0 20px 40px rgba(20,95,1,.1); }
    .jf-feature-icon{ width:52px; height:52px; border-radius:14px; display:flex; align-items:center; justify-content:center; margin-bottom:18px; }
    .jf-icon-mango{ background:rgba(245,163,0,.14); color:var(--jf-mango); }
    .jf-icon-papaya{ background:rgba(255,106,61,.14); color:var(--jf-papaya); }
    .jf-icon-green{ background:rgba(20,95,1,.12); color:var(--jf-green); }
    .jf-feature-title{ font-weight:700; font-size:17px; margin-bottom:8px; }
    .jf-feature-text{ font-size:14.5px; color:#5c6656; line-height:1.6; margin:0; }

    /* PRIZES */
    .jf-prize{ border-radius:16px; padding:26px 18px; text-align:center; height:100%; color:#fff; position:relative; overflow:hidden; }
    .jf-prize-1{ background:linear-gradient(145deg, var(--jf-green), var(--jf-green-deep)); }
    .jf-prize-2{ background:linear-gradient(145deg, var(--jf-mango), #d98600); }
    .jf-prize-3{ background:linear-gradient(145deg, var(--jf-papaya), #d94a1e); }
    .jf-prize-4{ background:linear-gradient(145deg, #2f7a10, var(--jf-green-deep)); }
    .jf-prize-tag{ display:inline-block; font-size:11px; font-weight:700; text-transform:uppercase; letter-spacing:1.5px; background:rgba(255,255,255,.2); padding:4px 10px; border-radius:99px; margin-bottom:12px; color:#fff !important; }
    .jf-prize-title{ font-size:14.5px; font-weight:700; margin:0; color:#fff !important; }

    /* CTA */
    .jf-cta{ padding:20px 0 90px; }
    .jf-cta-card{ position:relative; background:linear-gradient(135deg, var(--jf-green) 0%, var(--jf-green-deep) 100%); border-radius:26px; padding:64px 40px; text-align:center; overflow:hidden; }
    .jf-cta-blob{ position:absolute; width:300px; height:300px; background:var(--jf-mango); opacity:.25; border-radius:50%; filter:blur(50px); top:-100px; right:-60px; }
    .jf-cta-title{ color:#fff; font-weight:800; font-size:28px; margin-bottom:10px; position:relative; }
    .jf-cta-text{ color:rgba(255,255,255,.85); font-size:16px; margin-bottom:28px; position:relative; }

    @media (max-width: 991px){
        .jf-hero{ padding:70px 0 60px; text-align:center; }
        .jf-hero-sub{ margin-left:auto; margin-right:auto; }
        .jf-hero-title{ font-size:32px; }
        .jf-stampcard{ margin-top:40px; }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var items = document.querySelectorAll('.jf-reveal');
    if (!('IntersectionObserver' in window) || !items.length) {
        items.forEach(function(el){ el.classList.add('jf-in'); });
        return;
    }
    var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('jf-in');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.15 });
    items.forEach(function (el) { observer.observe(el); });
});
</script>

@endsection