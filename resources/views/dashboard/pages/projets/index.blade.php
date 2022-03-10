@extends('dashboard.layout')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                    <div class="mr-md-3 mr-xl-5">
                        <h2>Gestions des projets</h2>
                    </div>
                </div>
            </div>
        </div>
        {{-- Tableau --}}
        <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Image
                          </th>
                          <th>
                            Domaine
                          </th>
                          <th>
                            Titre
                          </th>
                          <th>
                            Description
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($projets as $projet)
                            <tr>
                                <td class="py-1">
                                    <img src="{{ asset($projet->img_projet) }}" alt="image"/>
                                </td>
                                <td>
                                    Herman Beck
                                </td>
                                <td>
                                    <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td>
                                    $ 77.99
                                </td>
                                <td>
                                    May 15, 2015
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
