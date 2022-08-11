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
                                        <p class="text-white">{{ $fil->description_filiere }}</p>
                                        <p class="name text-white">{{ $fil->lib_filiere }}</p>
                                        <span class="position">ESI</span>
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
