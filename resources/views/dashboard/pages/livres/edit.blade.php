@extends('dashboard.layout')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                    <div class="mr-md-3 mr-xl-5">
                        <h2>Modifier un livre</h2>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <!-- Message après opération -->
                    @if ($result != null)
                        @switch($result['state'])
                            @case('success')
                                <div class="alert alert-success" role="alert">
                                    {{ $result['message'] }} Cliquez <a
                                        href="{{ route('dashboard.pages.livres.index') }}">ici</a>
                                    pour voir tous les livres
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
                    <form class="forms-sample" action="{{ url('/dashboard/livres/update/' . $livre->id) }}"
                        method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <div class="custom-flex">
                            <div class="form-group">
                                <label>Image actuelle</label>
                                <div class="input-group col-xs-12">
                                    <img src="{{ asset($livre->img_couverture) }}" alt="" class="custom-enreg-img">
                                </div>
                            </div>
                            <div class="align-items-center align-self-center" style="margin-left: 25px">
                                <h1>{{ $livre->titre }}</h1>
                                <p>
                                    <strong>Auteur:</strong> {{ $livre->auteur }}
                                </p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="titre">Titre <span class="custom-required-mark">*</span></label>
                            <input required type="text" name="titre" class="form-control" id="titre"
                                placeholder="Titre du livre" value="{{ $livre->titre }}">
                        </div>

                        <div class="form-group">
                            <label for="resume">Résumé <span class="custom-required-mark">*</span></label>
                            <input required type="text" name="resume" class="form-control" id="resume"
                                placeholder="Résumé du livre" value="{{ $livre->resume }}">
                        </div>

                        <div class="form-group">
                            <label for="auteur">Auteur <span class="custom-required-mark">*</span></label>
                            <input required type="text" name="auteur" class="form-control" id="auteur"
                                placeholder="Auteur du livre" value="{{ $livre->auteur }}">
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="img_couverture">Image de couverture</label>
                                <input type="file" accept="image/*" id="img_couverture" name="img_couverture"
                                    class="file-upload-default">
                                <div class="input-group col-xs-6">
                                    <input type="text" name="image" class="form-control file-upload-info" disabled
                                        placeholder="Image du livre" value="{{ $livre->img_couverture }}">
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" type="button">Choisir</button>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="fichier">Fichier</label>
                                <input type="file" accept="application/pdf" id="fichier" name="fichier"
                                    class="file-upload-default">
                                <div class="input-group col-xs-6">
                                    <input type="text" name="image" class="form-control file-upload-info" disabled
                                        placeholder="Fichier du livre" value="{{ $livre->fichier }}">
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" type="button">Choisir</button>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Valider</button>
                        <button type="reset" class="btn btn-light">Effacer</button>
                    </form>
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
