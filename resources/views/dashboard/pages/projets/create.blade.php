@extends('dashboard.layout')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                    <div class="mr-md-3 mr-xl-5">
                        <h2>Ajouter un projet</h2>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class="row">


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
                                    {{ $result['message'] }} Cliquez <a href="{{ route('dashboard.pages.projets.index') }}">ici</a>
                                    pour voir tous les projets
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
                    <form class="forms-sample" action="{{ route('dashboard.pages.projets.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="titre_projet">Titre <span class="custom-required-mark">*</span></label>
                            <input required type="text" name="titre_projet" class="form-control" id="titre_projet"
                                placeholder="Titre du projet">
                        </div>

                        <div class="form-group">
                            <label for="domaine_projet">Domaine</label>
                            <select required class="form-control" name="domaine_projet" id="domaine_projet">
                                <option value="">-- Choisissez un domaine --</option>
                                @foreach ($specs as $spec)
                                    <option value="{{ $spec->lib_spec }}">{{ $spec->lib_spec }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="description_projet">Description <span class="custom-required-mark">*</span></label>
                            <textarea required class="form-control" name="description_projet" id="articleContent" rows="4"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="img_projet">Image</label>
                            <input type="file" id="img_projet" name="img_projet" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="text" name="image" class="form-control file-upload-info" disabled
                                    placeholder="Image du projet">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">Choisir</button>
                                </span>
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
        /*
                                                                                function showInfo(){
                                                                                    alert(document.getElementById('aa').value)
                                                                                }
                                                                                */
        tinymce.init({
            selector: '#articleContent',
            language: 'fr_FR'
        });
    </script>
@endsection
