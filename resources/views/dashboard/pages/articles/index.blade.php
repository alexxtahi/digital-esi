@extends('dashboard.layout')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                    <div class="mr-md-3 mr-xl-5">
                        <h2>Actualités</h2>
                    </div>
                </div>
            </div>
        </div>
        {{-- Tableau --}}
        <div class="col-lg-12 grid-margin stretch-card">
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
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Titre</th>
                                    <th>Résumé</th>
                                    <th>Contenu</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($articles as $article)
                                    <tr>
                                        <td class="py-1">
                                            <img src="{{ $article->img_article != null ? asset($article->img_article) : asset('img/articles/blog3.jpg') }}"
                                                alt="image de l'information {{ $article->titre_article }}" />
                                        </td>
                                        <td>
                                            {{ $article->titre_article }}
                                        </td>
                                        <td>
                                            {{ $article->resume_article }}
                                        </td>
                                        <td>
                                            {{ $article->contenu_article }}
                                        </td>
                                        <td class="custom-actions-td">
                                            <button type="button"
                                                onclick="redirectBtn('{{ url('/dashboard/articles/edit/' . $article->id) }}')"
                                                class="btn btn-inverse-info btn-icon">
                                                <i class="mdi mdi-table-edit"></i>
                                            </button>
                                            <button type="button" class="btn btn-inverse-danger btn-icon"
                                                data-toggle="modal" data-target="#deleteModal{{ $article->id }}">
                                                <i class="mdi mdi-delete"></i>
                                            </button>
                                            {{-- Modal --}}
                                            <div class="modal fade" id="deleteModal{{ $article->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="exampleModalLabel{{ $article->id }}"
                                                aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title"
                                                                id="exampleModalLabel{{ $article->id }}">Suppression
                                                            </h5>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Voulez vous vraiment supprimer cet enregistrement ?</p>
                                                            <form id="delete-enreg-{{ $article->id }}" method="POST"
                                                                action="{{ url('/dashboard/articles/delete/' . $article->id) }}">
                                                                @method('delete')
                                                                @csrf
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Annuler</button>
                                                            <button form="delete-enreg-{{ $article->id }}" type="submit"
                                                                class="btn btn-danger">Supprimer</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
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
