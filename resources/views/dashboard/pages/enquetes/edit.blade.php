@extends('dashboard.layout')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                    <div class="mr-md-3 mr-xl-5">
                        <h2>Modifier une enquête</h2>
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
                                        href="{{ route('dashboard.pages.enquetes.index') }}">ici</a>
                                    pour voir toutes les enquêtes
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
                    <form class="forms-sample" action="{{ url('/dashboard/enquetes/update/' . $enquete->id) }}"
                        method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <div class="form-group">
                            <label for="theme">Thème <span class="custom-required-mark">*</span></label>
                            <input required type="text" name="theme" class="form-control" id="theme"
                                placeholder="Thème de l'enquête" value="{{ $enquete->theme }}">
                        </div>

                        <div class="form-group">
                            <label for="domaine">Domaine <span class="custom-required-mark">*</span></label>
                            <select required class="form-control" name="domaine" id="domaine">
                                <option value="">-- Choisissez un domaine --</option>
                                @foreach ($specs as $spec)
                                    <option value="{{ $spec->lib_spec }}"
                                        @if ($enquete->domaine === $spec->lib_spec) selected @endif>
                                        {{ $spec->lib_spec }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="description">Description <span class="custom-required-mark">*</span></label>
                            <textarea required class="form-control" name="description" rows="4">
                                 {{ $enquete->description }}
                            </textarea>
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
