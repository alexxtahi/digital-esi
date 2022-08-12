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
        style="background-image: url({{ asset('img/services/stages-et-emplois.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Offres de stages et d'emplois</h1>
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
                        <span>Stages et emplois <i class="ion-ios-arrow-forward"></i></span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">

                @foreach ($offres as $offre)
                    <div class="col-md-6 col-lg-4 ftco-animate">
                        <div class="blog-entry custom-offre-card">
                            <a href="{{ route('offre-details', ['id' => $offre->id]) }}"
                                class="block-20 d-flex align-items-end"
                                style='background-image: url("{{ $offre->img_offre != null ? asset($offre->img_offre) : asset('img/contactbanner.png') }}");'>
                                <div class="meta-date text-center p-2" style="background: maroon;">
                                    <span
                                        class="day">{{ date(' d', strtotime($offre->date_publication)) }}</span>
                                    <span
                                        class="mos">{{ date('M', strtotime($offre->date_publication)) }}</span>
                                    <span
                                        class="yr">{{ date('Y', strtotime($offre->date_publication)) }}</span>
                                </div>
                            </a>
                            <div class="text border border-top-0 p-4">
                                <h3 class="heading"><a href="#">{{ $offre->titre }}</a></h3>
                                <h6><strong>Type d'offre:</strong> {{ $offre->type_offre }}</h6>
                                <p>{{ $offre->description }}</p>
                                <div class="d-flex align-items-center mt-4">
                                    <p class="mb-0"><a
                                            href="{{ route('offre-details', ['id' => $offre->id]) }}"
                                            class="btn btn-primary">Voir l'offre <span
                                                class="ion-ios-arrow-round-forward"></span></a></p>
                                    <p class="ml-auto mb-0">
                                        Date limite:
                                        {{ $offre->date_limite != null ? date('d/m/Y', strtotime($offre->date_limite)) : 'Aucune' }}
                                    </p>

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
