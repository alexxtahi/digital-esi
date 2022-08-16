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

    <section class="hero-wrap hero-wrap-2"
        style="background-image: url({{ asset('img/services/etudiants-diplomes.jpg') }});">
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
                    {{-- Bouton des filtres --}}
                    <div class="col-md-12 col-lg-12 ftco-animate">
                        <div class="sidebar-box">
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#filtre-modal">
                                Afficher les filtres
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Filtres --}}
    <section class="ftco-section">
        <div class="container">
            {{-- Modal --}}
            <div class="modal fade" id="filtre-modal" tabindex="-1" role="dialog" aria-labelledby="filtreModal"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="filtreModal">Filtres</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Recherchez selon vos préférences</p>
                            <form action="{{ route('etudiants-diplomes.filtres') }}" id="filtre-enreg" method="GET">
                                {{-- Nom --}}
                                <div class="row">
                                    <div class="col-md-6 col-lg-12 ftco-animate">
                                        <div class="form-group">
                                            <label>Nom</label>
                                            <input type="text" class="form-control" name="nom_complet"
                                                placeholder="Recherchez des diplômés par nom"
                                                value="{{ $_GET['nom_complet'] ?? null }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    {{-- Filiere --}}
                                    <div class="col-md-6 col-lg-6 ftco-animate">
                                        <div class="form-group">
                                            <label>Filière</label>
                                            <select class="form-control" name="filiere">
                                                <option value="">-- Filière --</option>
                                                @foreach ($filieres as $filiere)
                                                    <option value="{{ $filiere->id }}"
                                                        {{ isset($_GET['filiere']) && $_GET['filiere'] == $filiere->id ? 'selected' : '' }}>
                                                        {{ $filiere->lib_filiere }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    {{-- Promotion --}}
                                    <div class="col-md-6 col-lg-6 ftco-animate">
                                        <div class="form-group">
                                            <label>Promotion</label>
                                            <select class="form-control" name="promotion">
                                                <option value="">-- Promotion --</option>
                                                @foreach ($promotions as $promotion)
                                                    <option value="{{ $promotion }}"
                                                        {{ isset($_GET['promotion']) && $_GET['promotion'] == $promotion ? 'selected' : '' }}>
                                                        {{ $promotion }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                {{-- Ordre --}}
                                <div class="row">
                                    <div class="col-md-2 col-lg-12 ftco-animate">
                                        <div class="form-group">
                                            <label>Ordre</label>
                                            <select class="form-control" name="ordre">
                                                <option value="">-- Ordre --</option>
                                                <option value="ASC"
                                                    {{ isset($_GET['ordre']) && $_GET['ordre'] == 'ASC' ? 'selected' : '' }}>
                                                    Orde alphabaétique
                                                </option>
                                                <option value="DESC"
                                                    {{ isset($_GET['ordre']) && $_GET['ordre'] == 'DESC' ? 'selected' : '' }}>
                                                    Orde alphabaétique inverse
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <a href="{{ route('etudiants-diplomes') }}" class="btn btn-dark">Réinitialiser</a>
                            <button form="filtre-enreg" type="submit" class="btn btn-primary">Rechercher</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Liste des enregistrements --}}
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
                    @if ($current_route == 'etudiants-diplomes.filtres')
                        <h1>Aucun résultat trouvé</h1>
                    @else
                        <h1>Pas encore disponible</h1>
                    @endif
                @endforelse
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
