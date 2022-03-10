@extends('dashboard.layout')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                    <div class="mr-md-3 mr-xl-5">
                        <h2>Ajouter un article</h2>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Informations de l'article</h4>
                    <p class="card-description">
                        Veuillez remplir le formulaire...
                    </p>
                    <form class="forms-sample" action="{{route('dashboard.pages.articles.store')}}" method="POST">
                        @method("POST")
                        @csrf

                        <div class="form-group">
                            <label for="title">Titre</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Titre de l'article">
                        </div>
                        <div class="form-group">
                            <label for="resume">Résumé</label>
                            <input type="text" name="resume" class="form-control" id="resume" placeholder="Résumé de l'article">
                        </div>

                        <div class="form-group">
                            <label for="content">Contenu</label>
                            <textarea class="form-control" name="content" id="articleContent" rows="4"></textarea>
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
                        <button class="btn btn-light">Annuler</button>
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
