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
                            <form action="{{ route('cvtheque.filtres') }}" id="filtre-enreg" method="GET">
                                {{-- Nom --}}
                                <div class="row">
                                    <div class="col-md-6 col-lg-12 ftco-animate">
                                        <div class="form-group">
                                            <label>Nom</label>
                                            <input type="text" class="form-control" name="nom_complet"
                                                placeholder="Recherchez des étudiants par nom"
                                                value="{{ $_GET['nom_complet'] ?? null }}">
                                        </div>
                                    </div>
                                </div>
                                {{-- Filiere --}}
                                <div class="row">
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
                                    {{-- Classe --}}
                                    <div class="col-md-6 col-lg-6 ftco-animate">
                                        <div class="form-group">
                                            <label>Classe</label>
                                            <select class="form-control" name="classe">
                                                <option value="">-- Classe --</option>
                                                @foreach ($classes as $classe)
                                                    <option value="{{ $classe->id }}"
                                                        {{ isset($_GET['classe']) && $_GET['classe'] == $classe->id ? 'selected' : '' }}>
                                                        {{ $classe->lib_classe }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                {{-- Statut --}}
                                <div class="row">
                                    <div class="col-md-2 col-lg-12 ftco-animate">
                                        <div class="form-group">
                                            <label>Statut</label>
                                            <select class="form-control" name="statut">
                                                <option value="">-- Statut --</option>
                                                <option value="Etudiant"
                                                    {{ isset($_GET['statut']) && $_GET['statut'] == 'Etudiant' ? 'selected' : '' }}>
                                                    Etudiant
                                                </option>
                                                <option value="Diplômé"
                                                    {{ isset($_GET['statut']) && $_GET['statut'] == 'Diplômé' ? 'selected' : '' }}>
                                                    Diplômé
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <a href="{{ route('cvtheque') }}" class="btn btn-dark">Réinitialiser</a>
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

                @forelse ($etudiants as $etudiant)
                    <div class="col-md-6 col-lg-4 ftco-animate">
                        <div class="blog-entry custom-offre-card">
                            <div class="block-20 d-flex align-items-end" style='height: 400px;'>
                                <iframe style="width: 100%; height: 100%;" src="{{ asset($etudiant->cv_path) }}"
                                    frameborder="0"></iframe>
                            </div>
                            <div class="text border border-top-0 p-4">
                                <h3 class="heading"><a
                                        href="#">{{ $etudiant->nom_user . ' ' . $etudiant->prenom_user }}</a>
                                </h3>
                                <h6><strong>Filière: </strong>
                                    {{ $etudiant->lib_filiere }}</h6>
                                <h6><strong>{{ $etudiant->est_diplome ? 'Promotion' : 'Classe' }}: </strong>
                                    {{ $etudiant->est_diplome ? $etudiant->filiere_diplome : $etudiant->lib_classe . ' ' . $etudiant->promotion }}
                                </h6>
                                <h6><strong>Statut: </strong>
                                    {{ $etudiant->est_diplome ? 'Diplômé' : 'Etudiant' }}</h6>
                                {{-- <p>{{ $etudiant->bio }}</p> --}}
                                <div class="d-flex align-items-center mt-4">
                                    <p class="mb-0"><a href="{{ asset($etudiant->cv_path) }}" target="_blank"
                                            class="btn btn-primary">Voir le CV <span
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
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg>
    </div>


    @include('components.js')

</body>

</html>
