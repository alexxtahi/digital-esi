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
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($projets as $projet)
                                    <tr>
                                        <td class="py-1">
                                            <img src="{{ asset($projet->img_projet) }}"
                                                alt="image du projet {{ $projet->titre_projet }}" />
                                        </td>
                                        <td>
                                            {{ $projet->domaine_projet }}
                                        </td>
                                        <td>
                                            {{ $projet->titre_projet }}
                                        </td>
                                        <td>
                                            {{ $projet->description_projet }}
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-inverse-info btn-icon">
                                                <i class="mdi mdi-table-edit"></i>
                                                <form action="#">
                                                </form>
                                            </button>
                                            <button form="delete-enreg-{{ $projet->id }}" type="submit"
                                                class="btn btn-inverse-danger btn-icon">
                                                <i class="mdi mdi-delete"></i>
                                                <form id="delete-enreg-{{ $projet->id }}" method="POST"
                                                    action="{{ url('/dashboard/projets/delete/' . $projet->id) }}">
                                                    @method('delete')
                                                    @csrf
                                                </form>

                                            </button>
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
