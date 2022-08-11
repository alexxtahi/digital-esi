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
                    <h1 class="mb-2 bread">Nos étudiants diplômés</h1>
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
                        <span>Etudiants diplômés <i class="ion-ios-arrow-forward"></i></span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                @forelse ($etudiants_diplomes as $etudiant)
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="staff border">
                            <div class="img-wrap d-flex align-items-stretch">
                                <div class="img align-self-stretch"
                                    style="background-image: url('{{ $etudiant->photo != null ? asset($etudiant->photo) : asset('img/etudiants/default-avatar.jpg') }}');">
                                </div>
                            </div>
                            <div class="text pt-3 px-3 pb-4 text-center">
                                <h3>{{ $etudiant->nom_user . ' ' . $etudiant->prenom_user }}</h3>
                                <span
                                    class="position mb-2">{{ $etudiant->filiere_diplome . ' ' . $etudiant->promotion }}</span>
                                <div class="faded">
                                    <p>{{ $etudiant->bio }}</p>
                                    {{-- <ul class="ftco-social text-center">
                                        <li class="ftco-animate"><a href="#"
                                                class="d-flex align-items-center justify-content-center"><span
                                                    class="icon-twitter"></span></a></li>
                                        <li class="ftco-animate"><a href="#"
                                                class="d-flex align-items-center justify-content-center"><span
                                                    class="icon-facebook"></span></a></li>
                                        <li class="ftco-animate"><a href="#"
                                                class="d-flex align-items-center justify-content-center"><span
                                                    class="icon-google-plus"></span></a></li>
                                        <li class="ftco-animate"><a href="#"
                                                class="d-flex align-items-center justify-content-center"><span
                                                    class="icon-instagram"></span></a></li>
                                    </ul> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <h1 class="mb-2 bread">Pas encore disponible</h1>
                @endforelse
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
