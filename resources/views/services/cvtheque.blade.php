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

    <section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('img/services/cvtheque.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">CVthèque</h1>
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
                        <span>CVthèque <i class="ion-ios-arrow-forward"></i></span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">

                @forelse ($etudiants as $etudiant)
                    <div class="col-md-6 col-lg-4 ftco-animate">
                        <div class="blog-entry custom-offre-card">
                            <div class="block-20 d-flex align-items-end" style='height: 400px;'>
                                <iframe style="width: 100%; height: 100%;" src="{{ asset($etudiant->cv_path) }}"
                                    frameborder="0"></iframe>
                            </div>
                            <div class="text border border-top-0 p-4">
                                <h3 class="heading"><a
                                        href="#">{{ $etudiant->nom_user . ' ' . $etudiant->prenom_user }}</a></h3>
                                <h6><strong>Classe: </strong>
                                    {{ $etudiant->lib_classe . ' ' . $etudiant->promotion }}</h6>
                                {{-- <p>{{ $etudiant->bio }}</p> --}}
                                <div class="d-flex align-items-center mt-4">
                                    <p class="mb-0"><a href="{{ asset($etudiant->cv_path) }}"
                                            target="_blank" class="btn btn-primary">Voir le CV <span
                                                class="ion-ios-arrow-round-forward"></span></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <h1>Pas encore disponible</h1>
                @endforelse
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
