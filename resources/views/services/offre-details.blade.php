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
        style="background-image: url({{ $offre->img_offre != null ? asset($offre->img_offre) : asset('img/contactbanner.png') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">{{ $offre->titre }}</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href={{ url('/') }}>Accueil <i
                                    class="ion-ios-arrow-forward"></i></a></span>
                        <span class="mr-2">
                            <a href={{ url('/services') }}>
                                Services <i class="ion-ios-arrow-forward"></i>
                            </a>
                        </span>
                        <span class="mr-2"><a href={{ route('stages-et-emplois') }}>Stages et emplois <i
                                    class="ion-ios-arrow-forward"></i></a></span>
                        <span>Details de l'offre <i class="ion-ios-arrow-forward"></i></span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ftco-animate">
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
                    <h2 class="mb-3">{{ $offre->titre }}</h2>
                    <div>
                        <p style="margin: 0;"><strong>Entreprise:</strong> {{ $offre->entreprise }}</p>
                        <p style="margin: 0;"><strong>Type d'offre:</strong> {{ $offre->type_offre }}</p>
                        <p style="margin-top: 0;"><strong>Date limite:</strong>
                            {{ $offre->date_limite != null ? date('d F Y', strtotime($offre->date_limite)) : 'Aucune' }}
                        </p>
                    </div>
                    <p>
                        <img src="{{ $offre->img_offre != null ? asset($offre->img_offre) : asset('img/contactbanner.png') }}"
                            alt="" class="img-fluid">
                    </p>
                    <p>
                        {{ $offre->description }}
                    </p>
                    <div class="about-author d-flex p-4 bg-light">
                        <span>Publiée par <strong>{{ $offre->entreprise }}</strong></span>
                    </div>

                    <div class="mt-5">
                        <div class="comment-form-wrap pt-5">
                            <h3 class="mb-5 h4 font-weight-bold">Soumettre sa candidature</h3>
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
                                @if (Auth::check())
                                    {{-- TODO: Fix upload issue --}}
                                    <form action="{{ route('candidate-to-an-offer') }}" method="POST"
                                        id="candidate-form" class="p-5 bg-light">
                                        @csrf
                                        @method('POST')
                                        <div class="form-group">
                                            <label for="motivations">Lettre de motivation</label>
                                            <input required type="file" accept="application/pdf"
                                                class="form-control file-upload-default" name="motivations">
                                        </div>
                                        @if ($authUser->etudiant != null && $authUser->etudiant->cv_path != null)
                                            <div class="form-group">
                                                <label>CV</label>
                                                <div class="alert alert-info" role="alert">
                                                    Nous joindrons le CV de votre profil à votre candidature.
                                                </div>
                                            </div>
                                        @else
                                            <div class="form-group">
                                                <label for="cv">Importer un CV</label>
                                                <input required class="form-control  file-upload-default" type="file"
                                                    accept="application/pdf" name="cv">
                                            </div>
                                        @endif
                                        <div class="form-group">
                                            <input type="submit" value="Postuler maintenant"
                                                class="btn py-3 px-4 btn-primary" form="candidate-form">
                                        </div>

                                    </form>
                                @else
                                    <a href="{{ route('login-with-back-redirection') }}"
                                        class="btn py-3 px-4 btn-primary">
                                        Se connecter pour postuler
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div> <!-- .col-md-8 -->

                <div class="col-lg-4 sidebar ftco-animate">
                    {{-- <div class="sidebar-box">
                        <form action="#" class="search-form">
                            <div class="form-group">
                                <span class="icon icon-search"></span>
                                <input type="text" class="form-control" placeholder="Saisir mot-clé et taper entrée">
                            </div>
                        </form>
                    </div>
                    <div class="sidebar-box ftco-animate">
                        <h3>Categories</h3>
                        <ul class="categories">
                            <li><a href="#">Business <span>(1)</span></a></li>
                            <li><a href="#">Recherche <span>(1)</span></a></li>
                            <li><a href="#">Éducation <span>(1)</span></a></li>
                        </ul>
                    </div> --}}

                    <div class="sidebar-box ftco-animate">
                        <h3>Offres similaires</h3>
                        @foreach ($offres_similaires as $offre)
                            <div class="block-21 mb-4 d-flex">
                                <a class="blog-img mr-4"
                                    style='background-image: url("{{ $offre->img_offre != null ? asset($offre->img_offre) : asset('img/contactbanner.png') }}");'></a>
                                <div class="text">
                                    <h3 class="heading" style="font-size: 13px;"><a
                                            href="{{ route('offre-details', ['id' => $offre->id]) }}">{{ $offre->description }}</a>
                                    </h3>
                                    <div class="meta">
                                        <div><span class="icon-timer"></span> Limite:
                                            {{ $offre->date_limite != null ? date('d/m/Y', strtotime($offre->date_limite)) : 'Aucune' }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>

                    {{-- <div class="sidebar-box ftco-animate">
                        <h3>Archives</h3>
                        <ul class="categories">
                            <li><a href="#">Decembre 2018 <span>(30)</span></a></li>
                            <li><a href="#">Novemmbre 2018 <span>(20)</span></a></li>
                            <li><a href="#">Septembre 2018 <span>(6)</span></a></li>
                            <li><a href="#">Août 2018 <span>(8)</span></a></li>
                        </ul>
                    </div> --}}

                </div>
                <!-- END COL -->
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
