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

    <section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('img/entree-inp2.jpg') }});">
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
            <div class="row justify-content-center">
                {{-- CVThèque --}}
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <a href="{{ route('cvtheque') }}">
                        <div class="staff border">
                            <div class="text pt-3 px-3 pb-4 text-center">
                                <span class="ion-md-document"></span>
                                <h3>CVthèque</h3>
                                <span class=" position mb-2">Documents</span>
                                <div class="faded">
                                    <p style="color:rgba(50,50,50,0.5);">La librarie de CV pour nos ingénieurs et
                                        techniciens</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                {{-- Offre d'emploi --}}
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <a href="{{ route('stages-et-emplois') }}">
                        <div class="staff border">
                            <div class="text pt-3 px-3 pb-4 text-center">
                                <span class="ion-md-document"></span>
                                <h3>Stages et emplois</h3>
                                <span class=" position mb-2">Offres</span>
                                <div class="faded">
                                    <p style="color:rgba(50,50,50,0.5);">Là où les étudiants se confrontent au monde de
                                        l'entreprise</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                {{-- Annuaire --}}
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <a href="{{ route('etudiants-diplomes') }}">
                        <div class="staff border">
                            <div class="text pt-3 px-3 pb-4 text-center">
                                <span class="ion-md-document"></span>
                                <h3>Etudiants diplomés</h3>
                                <span class=" position mb-2">Annuaire</span>
                                <div class="faded">
                                    <p style="color:rgba(50,50,50,0.5);">Nous conservons les liens avec nos étudiants
                                        diplomés</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                {{-- Bibliothèque --}}
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <a href="{{ route('bibliotheque') }}">
                        <div class="staff border">
                            <div class="text pt-3 px-3 pb-4 text-center">
                                <span class="ion-md-document"></span>
                                <h3>Les livres du savoir</h3>
                                <span class=" position mb-2">Bibliothèque</span>
                                <div class="faded">
                                    <p style="color:rgba(50,50,50,0.5);">Un registre de livres et documents utiles
                                        pour apprendre</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                {{-- Enquête --}}
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <a href="{{ route('enquetes') }}">
                        <div class="staff border">
                            <div class="text pt-3 px-3 pb-4 text-center">
                                <span class="ion-md-document"></span>
                                <h3>Avis des diplomés</h3>
                                <span class=" position mb-2">Enquêtes</span>
                                <div class="faded">
                                    <p style="color:rgba(50,50,50,0.5);">Les avis de nos diplomés sur nos formations</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                {{-- Gestion Admin --}}
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <a href="#">
                        <div class="staff border">
                            <div class="text pt-3 px-3 pb-4 text-center">
                                <span class="ion-md-document"></span>
                                <h3>Gestion administrative</h3>
                                <span class=" position mb-2">Gestion</span>
                                <div class="faded">
                                    <p style="color:rgba(50,50,50,0.5);">Pour gérer les détails administratifs de
                                        l'école </p>
                                </div>
                            </div>
                        </div>
                    </a>
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
