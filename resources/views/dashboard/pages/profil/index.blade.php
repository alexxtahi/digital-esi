@extends('dashboard.layout')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                    <div class="mr-md-3 mr-xl-5">
                        <h2>Profil</h2>
                    </div>
                </div>
            </div>
        </div>
        {{-- Infos personnelles --}}
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
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
                    <h4 class="card-title">Informations personnelles</h4>
                    <div class="form-sample">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nom</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="{{ $user->nom_user }}"
                                            disabled />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Prénom(s)</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="{{ $user->prenom_user }}"
                                            disabled />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Adresse mail</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="{{ $user->email }}" disabled />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Contact</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="{{ $user->tel_user ?? 'Aucun' }}"
                                            disabled />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Statut</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="{{ $user->role_user }}"
                                            disabled />
                                    </div>
                                </div>
                            </div>
                            @if ($user->etudiant != null)
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Matricule</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control"
                                                value="{{ $user->etudiant->matri_etud }}" disabled />
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        @if ($user->etudiant != null)
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Filière</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control"
                                                value="{{ $user->etudiant->filiere != null ? $user->etudiant->filiere->lib_filiere : 'INDISPONIBLE' }}"
                                                disabled />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Classe</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control"
                                                value="{{ $user->etudiant->classe != null ? $user->etudiant->classe->lib_classe : 'INDISPONIBLE' }}"
                                                disabled />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if ($user->etudiant->cv_path != null)
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">CV</label>
                                            <div class="col-sm-9">
                                                <iframe class="custom-cv-iframe"
                                                    src="{{ asset($user->etudiant->cv_path) }}" frameborder="0"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <form class="form-sample" id="cv-form" enctype="multipart/form-data"
                                            action="{{ route('dashboard.pages.profil.updateCV') }}" method="POST">
                                            @csrf
                                            @method('POST')
                                            <div class="col">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Changer de CV</label>
                                                    <div class="col-sm-9">
                                                        <input required type="file" accept="application/pdf" name="cv"
                                                            class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input type="text" name="cv_name"
                                                                class="form-control file-upload-info" disabled
                                                                placeholder="Importer un fichier">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary"
                                                                    type="button">Importer</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <button form="cv-form" type="submit"
                                                        class="btn btn-primary btn-lg btn-block">
                                                        <i class="mdi mdi-check"></i>
                                                        Valider la modification du CV
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            @else
                                <form class="row" id="cv-form" enctype="multipart/form-data"
                                    action="{{ route('dashboard.pages.profil.updateCV') }}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Importer un CV</label>
                                            <div class="col-sm-9">
                                                <input required type="file" accept="application/pdf" name="cv"
                                                    class="file-upload-default">
                                                <div class="input-group col-xs-12">
                                                    <input type="text" name="cv_name" class="form-control file-upload-info"
                                                        disabled placeholder="Importer un fichier">
                                                    <span class="input-group-append">
                                                        <button class="file-upload-browse btn btn-primary"
                                                            type="button">Importer</button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <button form="cv-form" type="submit" class="btn btn-primary btn-lg btn-block">
                                                <i class="mdi mdi-check"></i>
                                                Importer le CV
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('majestic-master/js/file-upload.js') }}"></script>
    <script src="{{ asset('tinymce/tinymce.min.js') }}"></script>
    <script>
        tinymce.init({
            selector: '#articleContent',
            language: 'fr_FR'
        });
    </script>
@endsection
