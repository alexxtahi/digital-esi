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
