@extends('dashboard.layout')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                    <div class="mr-md-3 mr-xl-5">
                        <h2>Modifier un article</h2>
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
                                        href="{{ route('dashboard.pages.articles.index') }}">ici</a>
                                    pour voir tous les articles
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
                    <form class="forms-sample" action="{{ url('/dashboard/articles/update/' . $article->id) }}"
                        method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <div class="custom-flex">
                            <div class="form-group">
                                <label>Image actuelle</label>
                                <div class="input-group col-xs-12">
                                    <img src="{{ asset($article->img_article) }}" alt="" class="custom-enreg-img">
                                </div>
                            </div>
                            <div class="align-items-center align-self-center" style="margin-left: 25px">
                                <h1>{{ $article->titre_article }}</h1>
                                <p>
                                    {{ $article->resume_article }}
                                </p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="titre_article">Titre <span class="custom-required-mark">*</span></label>
                            <input required type="text" name="titre_article" class="form-control" id="titre_article"
                                placeholder="Titre de l'article" value="{{ $article->titre_article }}">
                        </div>
                        <div class="form-group">
                            <label for="resume_article">Résumé <span class="custom-required-mark">*</span></label>
                            <input required type="text" name="resume_article" class="form-control" id="resume_article"
                                placeholder="Résumé de l'article" value="{{ $article->resume_article }}">
                        </div>

                        <div class="form-group">
                            <label for="contenu_article">Contenu <span class="custom-required-mark">*</span></label>
                            <textarea required class="form-control" name="contenu_article" rows="4">
                                 {{ $article->contenu_article }}
                            </textarea>
                        </div>

                        <div class="form-group">
                            <label for="img_article">Changer l'image</label>
                            <input type="file" accept="image/*" id="img_article" name="img_article"
                                class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="text" name="image" class="form-control file-upload-info" disabled
                                    placeholder="Image de l'article">
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
        tinymce.init({
            selector: '#articleContent',
            language: 'fr_FR'
        });
    </script>
@endsection
