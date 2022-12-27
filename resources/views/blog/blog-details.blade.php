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

    <section class="hero-wrap hero-wrap-2"
        style="background-image: url({{ $article->img_article != null ? asset($article->img_article) : asset('img/articles/blog3.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">{{ $article->titre_article }}</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href={{ url('/') }}>Accueil <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a
                                href={{ url('/blog') }}>Blog <i class="ion-ios-arrow-forward"></i></a></span>
                        <span>Details du blog <i class="ion-ios-arrow-forward"></i></span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ftco-animate">
                    <h2 class="mb-3">#. {{ $article->titre_article }}</h2>
                    <p>
                        <img src="{{ $article->img_article != null ? asset($article->img_article) : asset('img/articles/blog3.jpg') }}"
                            alt="" class="img-fluid">
                    </p>

                    <div class="about-author d-flex p-4 bg-light">
                        {!! $article->contenu_article !!}
                        <br>
                        {{-- <span>Ecrit par {{ $author->nom_user . ' ' . $author->prenom_user }}</span> --}}
                    </div>

                    <div class="pt-5 mt-5">
                        <h3 class="mb-5 h4 font-weight-bold">{{ count($commentaires) }} Commentaires</h3>
                        <ul class="comment-list">
                            @foreach ($commentaires as $commentaire)
                                <li class="comment">
                                    <div class="vcard bio">
                                        <img src="{{ asset('img/blankavatar.png') }}" alt="Avatar">
                                    </div>
                                    <div class="comment-body">
                                        <h3>{{ $commentaire->nom_user . ' ' . $commentaire->prenom_user }}</h3>
                                        <div class="meta mb-2">
                                            {{ date('d M Y à H:i:s', strtotime($commentaire->date_com)) }}
                                        </div>
                                        <p>{{ $commentaire->contenu_com }}</p>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        <!-- END comment-list -->

                        <div class="comment-form-wrap pt-5">
                            <h3 class="mb-5 h4 font-weight-bold">Laisser un commentaire</h3>
                            <form action="{{ route('post-commentaire') }}" class="p-5 bg-light" method="POST">
                                @method('POST')
                                @csrf
                                <div class="form-group">
                                    <input type="hidden" class="form-control" name="id_article" id="id_article"
                                        value="{{ $article->id }}">
                                    <label for="nom_user">Nom</label>
                                    <input type="text" class="form-control" name="nom_user" id="nom_user" required>
                                </div>
                                <div class="form-group">
                                    <label for="prenom_user">Prénoms</label>
                                    <input type="text" class="form-control" name="prenom_user" id="prenom_user"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Adresse mail</label>
                                    <input type="email" class="form-control" name="email" id="email" required>
                                </div>

                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea name="message" id="message" cols="30" rows="10" class="form-control" required></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Envoyer le commentaire"
                                        class="btn py-3 px-4 btn-primary">
                                </div>

                            </form>
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
                        <h3>Articles récents</h3>
                        @foreach ($articles_recents as $recent)
                            <div class="block-21 mb-4 d-flex">
                                <a class="blog-img mr-4"
                                    style='background-image: url("{{ $recent->img_article != null ? asset($recent->img_article) : asset('img/articles/blog3.jpg') }}");'></a>
                                <div class="text">
                                    <h3 class="heading" style="font-size: 13px;"><a
                                            href="{{ url('/blog-details?id=' . $recent->id) }}">{{ $recent->resume_article }}</a>
                                    </h3>
                                    <div class="meta">
                                        <div><span class="icon-calendar"></span>
                                            {{ date('d M Y', strtotime($recent->date_publication)) }}
                                        </div>
                                        <div><span class="icon-person"></span> Admin</div>
                                        <div><span class="icon-chat"></span> 19</div>
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
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


    @include('components.js')

</body>

</html>
