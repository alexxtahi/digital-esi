@extends('dashboard.layout')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                    <div class="mr-md-3 mr-xl-5">
                        <h2>Ajouter une information</h2>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" action="{{ route('dashboard.pages.actualites.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="title">Titre <span class="custom-required-mark">*</span></label>
                            <input required type="text" name="title" class="form-control" id="title"
                                placeholder="Titre de l'information">
                        </div>
                        <div class="form-group">
                            <label for="resume">Résumé <span class="custom-required-mark">*</span></label>
                            <input required type="text" name="resume" class="form-control" id="resume"
                                placeholder="Résumé de l'article">
                        </div>

                        <div class="form-group">
                            <label for="content">Contenu <span class="custom-required-mark">*</span></label>
                            <textarea required class="form-control" name="content" id="articleContent" rows="4"></textarea>
                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" id="" name="img[]" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="text" name="image" class="form-control file-upload-info" disabled
                                    placeholder="Image de l'article">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">Ouvrir</button>
                                </span>
                            </div>
                        </div>


                        <button type="submit" class="btn btn-primary mr-2">Valider</button>
                        <button type="reset" class="btn btn-light">Annuler</button>
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
