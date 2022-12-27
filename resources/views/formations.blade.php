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

    <section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('img/articles/blog3.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Nos formations</h1>
                    <p class="breadcrumbs">
                        <span class="mr-2">
                            <a href={{ url('/') }}>
                                Accueil <i class="ion-ios-arrow-forward"></i>
                            </a>
                        </span>
                        <span>Formations <i class="ion-ios-arrow-forward"></i></span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Nos formations -->
    <section class="ftco-section testimony-section">
        <div class="container-fluid px-md-5">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <span class="subheading">Formation</span>
                    <h2 class="mb-4">Nos filières</h2>
                    <p>Les parcours de formation proposés par l'ESI</p>
                </div>
            </div>
            <div class="row ftco-animate justify-content-center">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">
                        @foreach ($filieres as $fil)
                            <div class="item">
                                <div class="testimony-wrap d-flex"
                                    @if ($fil->lib_filiere === 'STIC') style="background: linear-gradient(to left, #222c, #555c), center / cover no-repeat url({{ asset('img/specialites/info.jpg') }});"
                                @elseif ($fil->lib_filiere === 'STGP')
                                    style="background: linear-gradient(to left, #222c, #555c), center / cover no-repeat url({{ asset('img/specialites/chimie.jpg') }});"
                                @else
                                    style="background: linear-gradient(to left, #222c, #555c), center / cover no-repeat url({{ asset('img/specialites/mecatronic.jpg') }});" @endif>
                                    <div class="text pl-4">
                                        <span class="quote d-flex align-items-center justify-content-center">
                                            {{-- <i class="icon-quote-left"></i> --}}
                                        </span>
                                        {{-- <span class="position">ESI</span> --}}
                                        <h3 class="text-white bold" style="margin-bottom: 0;">{{ $fil->lib_filiere }}
                                        </h3>
                                        <p class="text-white" style="font-size: 13px;">{{ $fil->description_filiere }}
                                        </p>
                                        {{-- <h6 class="text-white">Objectifs de la formation</h6>
                                        <h6 class="text-white">Organisation de la formation</h6> --}}
                                        <div>
                                            <h6 class="text-white">Spécialités</h6>
                                            <ul class="text-white" style="font-size: 10px">
                                                @foreach ($specs as $spec)
                                                    @if ($spec->id_filiere == $fil->id)
                                                        <li>{{ $spec->lib_spec }}</li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb"
        style="background-image: url({{ asset('img/header-pic.jpg') }});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-md-6 py-5 px-md-5">
                    <div class="py-md-5">
                        <div class="heading-section heading-section-white ftco-animate mb-5">
                            <h2 class="mb-4">L'industrialisation pour l'émergence.</h2>
                            <p> Intégrer l'ESI pour finir sur des débouchés tels que: </p>
                            <div class="custom-debouches-box" style="color: rgba(255, 255, 255, 0.9);">
                                <ul>
                                    <li>Agro-industrie</li>
                                    <li>Energie</li>
                                    <li>Mécanique</li>
                                    <li>Electricité</li>
                                    <li>Automatismes indutriels</li>
                                    <li>Maintenance industrielle</li>
                                    <li>Industries chimiques et agroalimentaires</li>
                                    <li>Informatique et télécommunications</li>
                                </ul>
                                <ul>
                                    <li>Automobile</li>
                                    <li>Manutention</li>
                                    <li>Audit</li>
                                    <li>Assistance et conseil</li>
                                    <li>Bureaux d'études et de réalisation</li>
                                    <li>Maintenance</li>
                                    <li>Enseignement</li>
                                    <li>Innovation technologique</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section ftco-no-pt">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <span class="subheading">Admissibilité</span>
                    <h2 class="mb-4" id="specs">Comment intégrer l'ESI ?</h2>
                    <p>Décpuvrez ici comment entrer à l'Ecole Supérieure d'Industrie</p>
                </div>
            </div>
            <div class="row tabulation mt-4 ftco-animate">
                <div class="col-md-4">
                    <ul class="nav nav-pills nav-fill d-md-flex d-block flex-column">
                        <li class="nav-item text-left">
                            <a class="nav-link active py-4" data-toggle="tab" href="#services-1"><span
                                    class="flaticon-analysis mr-2"></span> Cycle court (BAC +3)</a>
                        </li>
                        <li class="nav-item text-left">
                            <a class="nav-link py-4" data-toggle="tab" href="#services-2"><span
                                    class="flaticon-business mr-2"></span> Cycle long (BAC +5)</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-8">
                    <div class="tab-content">
                        <div class="tab-pane container p-0 active" id="services-1">
                            <div class="img"
                                style="background-image: url({{ asset('img/specialites/mecatronic.jpg') }});">
                            </div>
                            <h3><a href="#">Cycle Technicien Supérieur (BAC +3)</a></h3>
                            <p>
                                L'admission au cycle des techniciens supérieurs des nationaux se fait par voie de
                                concours ou sur titre après le baccalauréat scientifique (C, D, E, F1, F2, F3, F4, F7)
                                ou un BT option STIC, STGP, STGI de l'année en cours.
                            </p>
                        </div>
                        <div class="tab-pane container p-0 fade" id="services-2">
                            <div class="img"
                                style="background-image: url({{ asset('img/specialites/info.jpg') }});">
                            </div>
                            <h3><a href="#">Cycle Ingénieur (BAC +5)</a></h3>
                            <p>
                                L'admission au cycle ingénieur se fait par voie de concours après deux années de classes
                                préparatoires et à partir de la licence dans le domaine des sciences industrielles
                                (mathématiques, physique, chimie) ou par voie de passerelle (meilleurs étduiants) après
                                le Cycle Technicien Supérieur. La formation dure trois années avec un tronc commun.
                            </p>
                        </div>
                        <div class="tab-pane container p-0 fade" id="services-3">
                            <div class="img"
                                style="background-image: url({{ asset('img/specialites/electrotech.jpg') }});"></div>
                            <h3><a href="#">Electrotechnique</a></h3>
                            <p>Formation pour les intéressés des circuits éléectriques, du courant et de ses
                                applications dans nos équipements.</p>
                        </div>
                        <div class="tab-pane container p-0 fade" id="services-4">
                            <div class="img"
                                style="background-image: url({{ asset('img/specialites/mecatronic.jpg') }});"></div>
                            <h3><a href="#">Mécatronique</a></h3>
                            <p>Formation sur les technologies touchant au domaine de l'automobile et de l'électronique
                                axée sur les véhicules de nos jours.</p>
                        </div>
                        <div class="tab-pane container p-0 fade" id="services-5">
                            <div class="img"
                                style="background-image: url({{ asset('img/specialites/alimentation.jpg') }});">
                            </div>
                            <h3><a href="#">Alimentation</a></h3>
                            <p>Formation aux métiers de l'alimentation, de la nutrition et des sciences de production.
                            </p>
                        </div>
                        <div class="tab-pane container p-0 fade" id="services-6">
                            <div class="img"
                                style="background-image: url({{ asset('img/specialites/production.jpg') }});"></div>
                            <h3><a href="#">Production de masse</a></h3>
                            <p>Formation sur les sytèmes et outils de production de masse dans l'industrie, les chaines
                                de production et bien d'autres.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('components.footer')

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>



    @include('components.js')

</body>

</html>
