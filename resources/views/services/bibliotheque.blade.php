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

    <section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('img/services/bibliotheque.jpg') }});">
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
                            <form action="{{ route('bibliotheque.filtres') }}" id="filtre-enreg" method="GET">
                                {{-- Mots clés --}}
                                <div class="row">
                                    <div class="col-md-6 col-lg-12 ftco-animate">
                                        <div class="form-group">
                                            <label>Mots clés</label>
                                            <input type="text" class="form-control" name="keywords"
                                                placeholder="Recherchez des mots clés"
                                                value="{{ $_GET['keywords'] ?? null }}">
                                        </div>
                                    </div>
                                </div>
                                {{-- Auteur --}}
                                <div class="row">
                                    <div class="col-md-6 col-lg-12 ftco-animate">
                                        <div class="form-group">
                                            <label>Auteur</label>
                                            <input type="text" class="form-control" name="auteur"
                                                placeholder="Recherchez des auteurs"
                                                value="{{ $_GET['auteur'] ?? null }}">
                                        </div>
                                    </div>
                                </div>
                                {{-- Catégories --}}
                                <div class="row">
                                    <div class="col-md-2 col-lg-12 ftco-animate">
                                        <div class="form-group">
                                            <label>Catégorie</label>
                                            <select class="form-control" name="id_type_livre">
                                                <option value="">-- Catégorie --</option>
                                                @foreach ($type_livres as $type_livre)
                                                    <option value="{{ $type_livre->id }}"
                                                        {{ isset($_GET['id_type_livre']) && $_GET['id_type_livre'] == $type_livre->id ? 'selected' : '' }}>
                                                        {{ $type_livre->lib_type_livre }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <a href="{{ route('bibliotheque') }}" class="btn btn-dark">Réinitialiser</a>
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
                @forelse ($livres as $livre)
                    <div class="col-md-6 col-lg-4 ftco-animate">
                        <div class="blog-entry custom-offre-card">
                            <a href="{{ route('livre-details', ['id' => $livre->id]) }}"
                                class="block-20 d-flex align-items-end"
                                style='background-image: url("{{ $livre->img_couverture != null ? asset($livre->img_couverture) : asset('img/contactbanner.png') }}");'>
                            </a>
                            <div class="text border border-top-0 p-4">
                                <h3 class="heading"><a href="#">{{ $livre->titre }}</a></h3>
                                <h6><strong>Catégorie: </strong> {{ $livre->lib_type_livre }}</h6>
                                <h6><strong>Auteur: </strong> {{ $livre->auteur }}</h6>
                                <hr>
                                <p>{{ $livre->resume }}</p>
                                <div class="d-flex align-items-center mt-4">
                                    <p class="mb-0"><a href="{{ route('livre-details', ['id' => $livre->id]) }}"
                                            class="btn btn-primary">Lire <span
                                                class="ion-ios-arrow-round-forward"></span></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    @if ($current_route == 'bibliotheque.filtres')
                        <h1>Aucun résultat trouvé</h1>
                    @else
                        <h1>Pas encore disponible</h1>
                    @endif
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
