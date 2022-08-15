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
                            <form action="{{ route('stages-et-emplois.filtres') }}" id="filtre-enreg" method="GET">
                                {{-- Date limite --}}
                                <div class="row">
                                    <div class="col-md-6 col-lg-12 ftco-animate">
                                        <div class="form-group">
                                            <label>Date limite</label>
                                            <input type="date" class="form-control" name="date_limite"
                                                value="{{ $_GET['date_limite'] ?? null }}">
                                        </div>
                                    </div>
                                </div>
                                {{-- Type d'offre --}}
                                <div class="row">
                                    <div class="col-md-2 col-lg-6 ftco-animate">
                                        <div class="form-group">
                                            <label>Type d'offre</label>
                                            <select class="form-control" name="type_offre">
                                                <option value="">Tous</option>
                                                <option value="Stage"
                                                    {{ isset($_GET['type_offre']) && $_GET['type_offre'] == 'Stage' ? 'selected' : '' }}>
                                                    Stage
                                                </option>
                                                <option value="Emploi"
                                                    {{ isset($_GET['type_offre']) && $_GET['type_offre'] == 'Emploi' ? 'selected' : '' }}>
                                                    Emploi
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    {{-- Ordre --}}
                                    <div class="col-md-2 col-lg-6 ftco-animate">
                                        <div class="form-group">
                                            <label>Ordre</label>
                                            <select class="form-control" name="ordre">
                                                <option value="DESC"
                                                    {{ isset($_GET['ordre']) && $_GET['ordre'] == 'DESC' ? 'selected' : '' }}>
                                                    Plus récent
                                                </option>
                                                <option value="ASC"
                                                    {{ isset($_GET['ordre']) && $_GET['ordre'] == 'ASC' ? 'selected' : '' }}>
                                                    Moins récent
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <a href="{{ route('stages-et-emplois') }}" class="btn btn-dark">Réinitialiser</a>
                            <button form="filtre-enreg" type="submit" class="btn btn-primary">Rechercher</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Liste enregistrements --}}
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
                                    <span class="day">{{ date(' d', strtotime($offre->date_publication)) }}</span>
                                    <span class="mos">{{ date('M', strtotime($offre->date_publication)) }}</span>
                                    <span class="yr">{{ date('Y', strtotime($offre->date_publication)) }}</span>
                                </div>
                            </a>
                            <div class="text border border-top-0 p-4">
                                <h3 class="heading"><a href="#">{{ $offre->titre }}</a></h3>
                                <h6><strong>Type d'offre:</strong> {{ $offre->type_offre }}</h6>
                                <p>{{ $offre->description }}</p>
                                <div class="d-flex align-items-center mt-4">
                                    <p class="mb-0"><a href="{{ route('offre-details', ['id' => $offre->id]) }}"
                                            class="btn btn-primary">Voir l'offre <span
                                                class="ion-ios-arrow-round-forward"></span></a></p>
                                    <p class="ml-auto mb-0" style="font-size: 12px;">
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
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg>
    </div>


    @include('components.js')

</body>

</html>
