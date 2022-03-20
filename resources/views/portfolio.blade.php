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

    <section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('img/blog/blog3.jpg')}});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Portfolio</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href={{url('/')}}>Accueil <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Portfolio <i
                                class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row no-gutters justify-content-center mb-5">
                <div class="col-md-6 text-center heading-section ftco-animate">
                    <h2 class="mb-4">Le Portfolio de l'ESI</h2>
                    <p>Ici vous retrouverez notre gallerie de projets réalisés par nos étudiants ingénieurs et
                        techniciens supérieurs.</p>
                </div>
            </div>
            <div class="row">
                @foreach ($projets as $projet)
                <div class="col-md-4">
                    <div class="project">
                        @if (isset($projet->img_projet) && !empty($projet->img_projet))
                        <div class="img rounded mb-4"
                            style='background-image: url("{{ asset($projet->img_projet) }}");'>
                        </div>
                        @else
                        <div class="img rounded mb-4"
                            style="background-image: url({{ asset('img/contactbanner.png') }});">
                        </div>
                        @endif
                        <div class="text w-100 text-center">
                            <span class="cat">{{ $projet->domaine_projet }}</span>
                            <h3><a href="#">{{ $projet->titre_projet }}</a></h3>
                            <p>{{ $projet->description_projet }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
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



    @include('components/js')

</body>

</html>
