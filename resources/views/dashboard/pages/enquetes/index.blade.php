@extends('dashboard.layout')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                    <div class="mr-md-3 mr-xl-5">
                        <h2>Enquêtes</h2>
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
                                    <th>Theme</th>
                                    <th>Domaine</th>
                                    <th>Description</th>
                                    <th>Date de publication</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($enquetes as $enquete)
                                    <tr>
                                        <td>
                                            {{ $enquete->theme }}
                                        </td>
                                        <td>
                                            {{ $enquete->domaine }}
                                        </td>
                                        <td>
                                            {{ $enquete->description }}
                                        </td>
                                        <td>
                                            {{ $enquete->date_publication }}
                                        </td>
                                        <td class="custom-actions-td">
                                            <button type="button"
                                                onclick="redirectBtn('{{ url('/dashboard/enquetes/edit/' . $enquete->id) }}')"
                                                class="btn btn-inverse-info btn-icon">
                                                <i class="mdi mdi-table-edit"></i>
                                            </button>
                                            <button type="button" class="btn btn-inverse-danger btn-icon"
                                                data-toggle="modal" data-target="#deleteModal{{ $enquete->id }}">
                                                <i class="mdi mdi-delete"></i>
                                            </button>
                                            {{-- Modal --}}
                                            <div class="modal fade" id="deleteModal{{ $enquete->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="exampleModalLabel{{ $enquete->id }}"
                                                aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title"
                                                                id="exampleModalLabel{{ $enquete->id }}">Suppression
                                                            </h5>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Voulez vous vraiment supprimer cet enregistrement ?</p>
                                                            <form id="delete-enreg-{{ $enquete->id }}" method="POST"
                                                                action="{{ url('/dashboard/enquetes/delete/' . $enquete->id) }}">
                                                                @method('delete')
                                                                @csrf
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Annuler</button>
                                                            <button form="delete-enreg-{{ $enquete->id }}" type="submit"
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
