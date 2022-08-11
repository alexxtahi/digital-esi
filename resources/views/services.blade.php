<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ecole Supérieure d'Industrie - INP-HB</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">

    @include('components/css')

</head>

<body>
    @include('components/header')

    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('img/inp-centre.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Nos Services</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href={{ url('/') }}>Accueil <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Services <i
                                class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                {{-- CVThèque --}}
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="blog-entry custom-offre-card">
                        <a href="{{ route('cvtheque') }}" class="block-20 d-flex align-items-end"
                            style='background-image: url("{{ asset('img/contactbanner.png') }}");'>
                        </a>
                        <div class="text border border-top-0 p-4">
                            <h3 class="heading"><a href="#">CVthèque</a></h3>
                            <h6><strong>Archive de CVs</strong></h6>
                            <p>La librarie de CV pour nos ingénieurs et techniciens</p>
                        </div>
                    </div>
                </div>
                {{-- Stages et emplois --}}
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="blog-entry custom-offre-card">
                        <a href="{{ route('stages-et-emplois') }}" class="block-20 d-flex align-items-end"
                            style='background-image: url("{{ asset('img/contactbanner.png') }}");'>
                        </a>
                        <div class="text border border-top-0 p-4">
                            <h3 class="heading"><a href="#">Stages et emplois</a></h3>
                            <h6><strong>Offres</strong></h6>
                            <p>Là où les étudiants se confrontent au monde de
                                l'entreprise</p>
                        </div>
                    </div>
                </div>
                {{-- Annuaire --}}
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="blog-entry custom-offre-card">
                        <a href="{{ route('etudiants-diplomes') }}" class="block-20 d-flex align-items-end"
                            style='background-image: url("{{ asset('img/contactbanner.png') }}");'>
                        </a>
                        <div class="text border border-top-0 p-4">
                            <h3 class="heading"><a href="#">Etudiants diplomés</a></h3>
                            <h6><strong>Annuaire</strong></h6>
                            <p>Nous conservons les liens avec nos étudiants
                                diplomés</p>
                        </div>
                    </div>
                </div>
                {{-- Bibliothèque --}}
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="blog-entry custom-offre-card">
                        <a href="{{ route('bibliotheque') }}" class="block-20 d-flex align-items-end"
                            style='background-image: url("{{ asset('img/contactbanner.png') }}");'>
                        </a>
                        <div class="text border border-top-0 p-4">
                            <h3 class="heading"><a href="#">Les documents</a></h3>
                            <h6><strong>Bibliothèque</strong></h6>
                            <p>Un registre de livres et documents utiles
                                pour apprendre</p>
                        </div>
                    </div>
                </div>
                {{-- Enquête --}}
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="blog-entry custom-offre-card">
                        <a href="{{ route('enquetes') }}" class="block-20 d-flex align-items-end"
                            style='background-image: url("{{ asset('img/contactbanner.png') }}");'>
                        </a>
                        <div class="text border border-top-0 p-4">
                            <h3 class="heading"><a href="#">Avis des diplomés</a></h3>
                            <h6><strong>Enquêtes</strong></h6>
                            <p>Les avis de nos diplomés sur nos formations et
                                services</p>
                        </div>
                    </div>
                </div>
                {{-- Gestion Admin --}}
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="blog-entry custom-offre-card">
                        <a href="{{ route('enquetes') }}" class="block-20 d-flex align-items-end"
                            style='background-image: url("{{ asset('img/contactbanner.png') }}");'>
                        </a>
                        <div class="text border border-top-0 p-4">
                            <h3 class="heading"><a href="#">Gestion administrative</a></h3>
                            <h6><strong>Gestion</strong></h6>
                            <p>Pour gérer les détails administratifs de
                                l'école </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('components.footer')

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg></div>



    @include('components.js')

</body>

</html>
