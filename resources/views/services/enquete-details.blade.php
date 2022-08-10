<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ecole Supérieure d'Industrie - INP-HB</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('components.css')

</head>

<body>
    @include('components.header')

    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('img/contactbanner.png') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">{{ $enquete->theme }}</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href={{ url('/') }}>Accueil <i
                                    class="ion-ios-arrow-forward"></i></a></span>
                        <span class="mr-2">
                            <a href={{ url('/services') }}>
                                Services <i class="ion-ios-arrow-forward"></i>
                            </a>
                        </span>
                        <span class="mr-2"><a href={{ route('enquetes') }}>Enquêtes <i
                                    class="ion-ios-arrow-forward"></i></a></span>
                        <span>Details de l'enquête <i class="ion-ios-arrow-forward"></i></span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ftco-animate">
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
                    <h2 class="mb-3">{{ $enquete->theme }}</h2>
                    <div>
                        <p style="margin: 0;"><strong>Domaine:</strong> {{ $enquete->domaine }}</p>
                        <p style="margin-top: 0;"><strong>Date de publication:</strong>
                            {{ date('d F Y', strtotime($enquete->date_publication)) }}
                        </p>
                    </div>
                    <p>
                        <img src="{{ asset('img/contactbanner.png') }}" alt="" class="img-fluid">
                    </p>

                    <div class="about-author d-flex p-4 bg-light">
                        {{ $enquete->description }}
                        <br>
                    </div>

                    <div class="pt-5 mt-5">
                        <h3 class="mb-5 h4 font-weight-bold">{{ count($comments) }}
                            Commentaire{{ count($comments) > 1 ? 's' : '' }}</h3>
                        <ul class="comment-list">
                            @forelse ($comments as $comment)
                                <li class="comment">
                                    <div class="vcard bio">
                                        <img src="{{ asset('img/tanoh-aka.jpg') }}" alt="Image placeholder">
                                    </div>
                                    <div class="comment-body">
                                        <h3>{{ $comment->nom_user . ' ' . $comment->prenom_user }}</h3>
                                        <div class="meta mb-2">
                                            {{ date('d/m/Y H:i:s', strtotime($comment->date_com)) }}
                                        </div>
                                        <p>{{ $comment->contenu_com }}</p>
                                        {{-- <p><a href="#" class="reply">Reply</a></p> --}}
                                    </div>
                                </li>
                            @empty
                            @endforelse
                        </ul>

                    </div>

                    <div class="mt-5">
                        <div class="comment-form-wrap pt-5">
                            <h3 class="mb-5 h4 font-weight-bold">Donnez un avis</h3>
                            <div class="form-group">
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
                                @if (Auth::check())
                                    <form action="{{ route('comment-an-enquete') }}" method="POST" id="comment-form"
                                        class="p-5 bg-light">
                                        @csrf
                                        @method('POST')
                                        <div class="form-group">
                                            <label for="motivations">Commentaire</label>
                                            <textarea required class="form-control" name="commentaire" cols="30" rows="10"></textarea>
                                            <input type="hidden" name="id_enquete" value="{{ $enquete->id }}">
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" value="Envoyer" class="btn py-3 px-4 btn-primary"
                                                form="comment-form">
                                        </div>
                                    </form>
                                @else
                                    <a href="{{ route('login-with-back-redirection') }}"
                                        class="btn py-3 px-4 btn-primary">
                                        Se connecter pour commenter
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div> <!-- .col-md-8 -->

                <div class="col-lg-4 sidebar ftco-animate">
                    {{-- <div class="sidebar-box">
                        <form action="#" class="search-form">
                            <div class="form-group">
                                <span class="icon icon-search"></span>
                                <input type="text" class="form-control" placeholder="Saisir mot-clé et taper entrée">
                            </div>
                        </form>
                    </div>
                    <div class="sidebar-box ftco-animate">
                        <h3>Categories</h3>
                        <ul class="categories">
                            <li><a href="#">Business <span>(1)</span></a></li>
                            <li><a href="#">Recherche <span>(1)</span></a></li>
                            <li><a href="#">Éducation <span>(1)</span></a></li>
                        </ul>
                    </div> --}}

                    <div class="sidebar-box ftco-animate">
                        <h3>Enquêtes similaires</h3>
                        @foreach ($enquetes_similaires as $enquete)
                            <div class="block-21 mb-4 d-flex">
                                <a class="blog-img mr-4"
                                    style='background-image: url("{{ asset('img/contactbanner.png') }}");'></a>
                                <div class="text">
                                    <h3 class="heading" style="font-size: 13px;"><a
                                            href="{{ route('enquete-details', ['id' => $enquete->id]) }}">{{ $enquete->description }}</a>
                                    </h3>
                                    <div class="meta">
                                        <div><span class="icon-calendar"></span> Date:
                                            {{ date('d/m/Y', strtotime($enquete->date_publication)) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>

                    {{-- <div class="sidebar-box ftco-animate">
                        <h3>Archives</h3>
                        <ul class="categories">
                            <li><a href="#">Decembre 2018 <span>(30)</span></a></li>
                            <li><a href="#">Novemmbre 2018 <span>(20)</span></a></li>
                            <li><a href="#">Septembre 2018 <span>(6)</span></a></li>
                            <li><a href="#">Août 2018 <span>(8)</span></a></li>
                        </ul>
                    </div> --}}

                </div>
                <!-- END COL -->
            </div>
        </div>
    </section>

    @include('components.footer')



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg></div>


    @include('components.js')

</body>

</html>
