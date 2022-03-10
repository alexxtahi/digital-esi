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

    <section class="hero-wrap hero-wrap-2" style="background-image: url({{asset($article->image_article)}});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">{{$article->titre_article}}</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href={{url('/')}}>Accueil <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a
                                href={{url('/blog')}}>Blog <i class="ion-ios-arrow-forward"></i></a></span>
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
                    <h2 class="mb-3">#. {{$article->titre_article}}</h2>
                    <p>
                        <img src="{{asset($article->image_article)}}" alt="" class="img-fluid">
                    </p>

                    {!! $article->contenu_article !!}


                    <div class="about-author d-flex p-4 bg-light">
                        <div class="bio mr-5">
                            <img src={{asset('img/blankavatar.png')}} alt="Image placeholder" class="img-fluid mb-4"
                                style="height: 80px;">
                        </div>
                        <div class="desc">
                            <h3>{{$author->nom_user . " " . $author->prenom_user}}</h3>
                            <p></p>
                        </div>
                    </div>


                    <div class="pt-5 mt-5">
                        <h3 class="mb-5 h4 font-weight-bold">6 Commentaires</h3>
                        <ul class="comment-list">
                            <li class="comment">
                                <div class="vcard bio">
                                    <img src="{{asset('img/blankavatar.png')}}" alt="Image placeholder">
                                </div>
                                <div class="comment-body">
                                    <h3>John Doe</h3>
                                    <div class="meta mb-2">Jan. 22, 2022 at 2:21pm</div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum
                                        necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim
                                        sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                    <p><a href="#" class="reply">Reply</a></p>
                                </div>
                            </li>

                            <li class="comment">
                                <div class="vcard bio">
                                    <img src="{{asset('img/blankavatar.png')}}" alt="Image placeholder">
                                </div>
                                <div class="comment-body">
                                    <h3>John Doe</h3>
                                    <div class="meta mb-2">Jan. 22, 2022 at 2:21pm</div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum
                                        necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim
                                        sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                    <p><a href="#" class="reply">Reply</a></p>
                                </div>

                                <ul class="children">
                                    <li class="comment">
                                        <div class="vcard bio">
                                            <img src="{{asset('img/blankavatar.png')}}" alt="Image placeholder">
                                        </div>
                                        <div class="comment-body">
                                            <h3>John Doe</h3>
                                            <div class="meta mb-2">Jan. 22, 2022 at 2:21pm</div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem
                                                laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat
                                                saepe enim sapiente iste iure! Quam voluptas earum impedit
                                                necessitatibus, nihil?</p>
                                            <p><a href="#" class="reply">Reply</a></p>
                                        </div>


                                        <ul class="children">
                                            <li class="comment">
                                                <div class="vcard bio">
                                                    <img src="{{asset('img/blankavatar.png')}}" alt="Image placeholder">
                                                </div>
                                                <div class="comment-body">
                                                    <h3>John Doe</h3>
                                                    <div class="meta mb-2">Jan. 22, 2022 at 2:21pm</div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                        Pariatur quidem laborum necessitatibus, ipsam impedit vitae
                                                        autem, eum officia, fugiat saepe enim sapiente iste iure! Quam
                                                        voluptas earum impedit necessitatibus, nihil?</p>
                                                    <p><a href="#" class="reply">Reply</a></p>
                                                </div>

                                                <ul class="children">
                                                    <li class="comment">
                                                        <div class="vcard bio">
                                                            <img src="{{asset('img/blankavatar.png')}}"
                                                                alt="Image placeholder">
                                                        </div>
                                                        <div class="comment-body">
                                                            <h3>John Doe</h3>
                                                            <div class="meta mb-2">Jan. 22, 2022 at 2:21pm</div>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                                Pariatur quidem laborum necessitatibus, ipsam impedit
                                                                vitae autem, eum officia, fugiat saepe enim sapiente
                                                                iste iure! Quam voluptas earum impedit necessitatibus,
                                                                nihil?</p>
                                                            <p><a href="#" class="reply">Reply</a></p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>


                        </ul>
                        <!-- END comment-list -->

                        <div class="comment-form-wrap pt-5">
                            <h3 class="mb-5 h4 font-weight-bold">Laisser un commentaire</h3>
                            <form action="#" class="p-5 bg-light">
                                <div class="form-group">
                                    <label for="name">Nom *</label>
                                    <input type="text" class="form-control" id="name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Prénoms *</label>
                                    <input type="email" class="form-control" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="website">Tel</label>
                                    <input type="url" class="form-control" id="website">
                                </div>

                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
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
                    <div class="sidebar-box">
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
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3>Articles populaires</h3>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4"
                                style="background-image: url({{asset('img/blog/blog2.jpg')}});"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#">Visite de la Direction Générale
                                        de Total-Energies Côte d'Ivoire à l'INP-HB</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> 14. Jan, 2022</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Yvette N'Goran</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4"
                                style="background-image: url({{asset('img/blog/blog3.jpg')}});"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#">Cérémonie de décoration de l'Administration Générale du
                                        Cnam</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> 23. Dec, 2021</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Yvette N'Goran</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3>Archives</h3>
                        <ul class="categories">
                            <li><a href="#">Decembre 2018 <span>(30)</span></a></li>
                            <li><a href="#">Novemmbre 2018 <span>(20)</span></a></li>
                            <li><a href="#">Septembre 2018 <span>(6)</span></a></li>
                            <li><a href="#">Août 2018 <span>(8)</span></a></li>
                        </ul>
                    </div>

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
