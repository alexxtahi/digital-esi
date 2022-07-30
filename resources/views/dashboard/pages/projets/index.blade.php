@extends('dashboard.layout')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                    <div class="mr-md-3 mr-xl-5">
                        <h2>Projets</h2>
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
                                    <th>Domaine</th>
                                    <th>Titre</th>
                                    <th>Nom</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($projets as $projet)
                                    <tr>
                                        <td class="py-1">
                                            <img src="{{ $projet->img_projet != null ? asset($projet->img_projet) : asset('img/contactbanner.png') }}"
                                                alt="image du projet {{ $projet->titre_projet }}" />
                                        </td>
                                        <td>
                                            {{ $projet->domaine_projet }}
                                        </td>
                                        <td>
                                            {{ $projet->titre_projet }}
                                        </td>
                                        <td>
                                            {{ $projet->nom_solution_projet }}
                                        </td>

                                        <td>
                                            {{ $projet->description_projet }}
                                        </td>
                                        <td class="custom-actions-td">
                                            <button type="button"
                                                onclick="redirectBtn('{{ url('/dashboard/projets/edit/' . $projet->id) }}')"
                                                class="btn btn-inverse-info btn-icon">
                                                <i class="mdi mdi-table-edit"></i>
                                            </button>
                                            <button type="button" class="btn btn-inverse-danger btn-icon"
                                                data-toggle="modal" data-target="#delete-modal-{{ $projet->id }}">
                                                <i class="mdi mdi-delete"></i>
                                            </button>
                                            {{-- Modal --}}
                                            <div class="modal fade" id="delete-modal-{{ $projet->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Suppression</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Voulez vous vraiment supprimer cet enregistrement ?</p>
                                                            <form id="delete-enreg-{{ $projet->id }}" method="POST"
                                                                action="{{ url('/dashboard/projets/delete/' . $projet->id) }}">
                                                                @method('delete')
                                                                @csrf
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Annuler</button>
                                                            <button form="delete-enreg-{{ $projet->id }}" type="submit"
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
