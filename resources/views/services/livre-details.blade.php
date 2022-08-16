<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ecole Supérieure d'Industrie - INP-HB</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('components.css')

</head>

<body>
    @include('components.header')

    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2"
        style="background-image: url({{ $livre->img_couverture != null ? asset($livre->img_couverture) : asset('img/contactbanner.png') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">{{ $livre->titre }}</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href={{ url('/') }}>Accueil <i
                                    class="ion-ios-arrow-forward"></i></a></span>
                        <span class="mr-2">
                            <a href={{ url('/services') }}>
                                Services <i class="ion-ios-arrow-forward"></i>
                            </a>
                        </span>
                        <span class="mr-2"><a href={{ route('bibliotheque') }}>Bibliothèque<i
                                    class="ion-ios-arrow-forward"></i></a></span>
                        <span>Details du livre <i class="ion-ios-arrow-forward"></i></span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                {{-- Infos --}}
                <div class="col-lg-12 ftco-animate">
                    <!-- Message après opération -->
                    @if ($result != null)
                        @switch($result['state'])
                            @case('success')
                                <div class="alert alert-success" role="alert">
                                    {{ $result['message'] }}
                                </div>
                            @break

                            @case('warning')
                                <div class="alert alert-warning" role="alert">
                                    {{ $result['message'] }}
                                </div>
                            @break

                            @case('error')
                                <div class="alert alert-danger" role="alert">
                                    {{ $result['message'] }}
                                </div>
                            @break

                            @default
                        @endswitch
                    @endif
                    <h2 class="mb-3">{{ $livre->titre }}</h2>
                    <div>
                        <p style="margin: 0;"><strong>Catégorie:</strong> {{ $livre->lib_type_livre }}</p>
                        <p style="margin-top: 0;"><strong>Auteur:</strong> {{ $livre->auteur }}</p>
                    </div>
                    <p>
                        {{ $livre->resume }}
                    </p>
                    <div class="about-author d-flex p-4 bg-light">
                        <span>Publié par <strong>{{ $livre->auteur }}</strong></span>
                    </div>
                    <div class="mt-5">
                        <div class="comment-form-wrap pt-5">
                            <h3 class="mb-5 h4 font-weight-bold">Contenu du livre</h3>
                            <div class="form-group">
                                <!-- Message après opération -->
                                @if ($result != null)
                                    @switch($result['state'])
                                        @case('success')
                                            <div class="alert alert-success" role="alert">
                                                {{ $result['message'] }}
                                            </div>
                                        @break

                                        @case('warning')
                                            <div class="alert alert-warning" role="alert">
                                                {{ $result['message'] }}
                                            </div>
                                        @break

                                        @case('error')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $result['message'] }}
                                            </div>
                                        @break

                                        @default
                                    @endswitch
                                @endif

                                <form class="p-5 bg-light">
                                    <iframe class="custom-cv-iframe" src="{{ asset($livre->fichier) }}"
                                        frameborder="0"></iframe>
                                    <a href="{{ asset($livre->fichier) }}" target="_blank"
                                        class="btn py-3 px-4 btn-primary">
                                        Ouvrir en plein écran
                                    </a>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- .col-md-8 -->
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
