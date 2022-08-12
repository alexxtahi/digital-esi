<!DOCTYPE html>
<html lang="en">

<head>
    <title>ESI - Ecole Supérieure d'Industrie</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('components.css')

</head>

<body>
    @include('components.header')
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2"
        style="background-image: url({{ asset('img/services/bibliotheque.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Bibliothèque</h1>
                    <p class="breadcrumbs">
                        <span class="mr-2">
                            <a href={{ url('/') }}>
                                Accueil <i class="ion-ios-arrow-forward"></i>
                            </a>
                        </span>
                        <span class="mr-2">
                            <a href={{ url('/services') }}>
                                Services <i class="ion-ios-arrow-forward"></i>
                            </a>
                        </span>
                        <span>Bibliothèque <i class="ion-ios-arrow-forward"></i></span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">

                @foreach ($livres as $livre)
                    <div class="col-md-6 col-lg-4 ftco-animate">
                        <div class="blog-entry custom-offre-card">
                            <a href="{{ route('livre-details', ['id' => $livre->id]) }}"
                                class="block-20 d-flex align-items-end"
                                style='background-image: url("{{ $livre->img_couverture != null ? asset($livre->img_couverture) : asset('img/contactbanner.png') }}");'>
                            </a>
                            <div class="text border border-top-0 p-4">
                                <h3 class="heading"><a href="#">{{ $livre->titre }}</a></h3>
                                <h6><strong>Auteur: </strong> {{ $livre->auteur }}</h6>
                                <p>{{ $livre->resume }}</p>
                                <div class="d-flex align-items-center mt-4">
                                    <p class="mb-0"><a
                                            href="{{ route('livre-details', ['id' => $livre->id]) }}"
                                            class="btn btn-primary">Lire <span
                                                class="ion-ios-arrow-round-forward"></span></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach




            </div>
        </div>
    </section>

    @include(' components.footer')
    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg>
    </div>


    @include('components.js')

</body>

</html>
