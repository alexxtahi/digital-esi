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

    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image:url({{ asset('img/entree-inp2.jpg') }});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-start"
                    data-scrollax-parent="true">
                    <div class="col-md-7 ftco-animate mb-md-5">
                        <span class="subheading">Ecole Supérieure d'Industrie</span>
                        <h1 class="mb-4">Informatique, Electronique, Chimie et bien d'autres</h1>
                        <p><a href="#specs" class="btn btn-primary px-4 py-3 mt-3">Nos Spécialités</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image:url({{ asset('img/header-pic.jpg') }});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-start"
                    data-scrollax-parent="true">
                    <div class="col-md-7 ftco-animate mb-md-5">
                        <span class="subheading">Ecole Supérieure d'Industrie</span>
                        <h1 class="mb-4">Techniciens et ingénieurs qualifiés dans les domaines de l'industrie
                        </h1>
                        <p><a href="#specs" class="btn btn-primary px-4 py-3 mt-3">Nos Spécialités</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Formulaire de demande de renseignemens -->
    @include('components.askinfo-form')
    <!-- Message après soumission de la requête -->
    @if (isset($result))
    <script>
        alert("Votre demande a bien été prise en compte. Nous vous reviendrons d'ici peu.")
    </script>
    @include('components.modal', [$result])
    @endif

    <section class="ftco-intro ftco-no-pb img" style="background-image: url(negotiate-master/images/bg_3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 text-center heading-section heading-section-white ftco-animate">
                    <h2 class="mb-0">Nous formons les élites de l'industrie</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-about ftco-no-pt ftco-no-pb ftco-counter" id="section-counter">
        <div class="container consult-wrap">
            <div class="row d-flex align-items-stretch">
                <div class="col-md-6 wrap-about align-items-stretch d-flex">
                    <div class="img" style="background-image: url({{ asset('img/blog/blog2.jpg') }});">
                    </div>
                </div>
                <div class="col-md-6 wrap-about ftco-animate py-md-5 pl-md-5">
                    <div class="heading-section mb-4">
                        <span class="subheading">Bienvenue à l'Ecole Supérieure d'Industrie</span>
                        <h2>L'école qui forme les Ingénieurs et Techniciens de demain !</h2>
                    </div>
                    <p>Nos disposons d'enseignants et de chercheurs compétents dans les domaines de l'électronique, de
                        l'informatique, de la chimie et de l'électrotechnique.</p>
                    <div class="tabulation-2 mt-4">
                        <ul class="nav nav-pills nav-fill d-md-flex d-block">
                            <li class="nav-item">
                                <a class="nav-link active py-2" data-toggle="tab" href="#home1"><span
                                        class="ion-ios-clipboard mr-2"></span> Notre Mission</a>
                            </li>
                            <li class="nav-item px-lg-2">
                                <a class="nav-link py-2" data-toggle="tab" href="#home2"><span
                                        class="ion-ios-eye mr-2"></span> Notre Vision</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link py-2" data-toggle="tab" href="#home3"><span
                                        class="ion-ios-medal mr-2"></span> Nos Valeurs</a>
                            </li>
                        </ul>
                        <div class="tab-content bg-light rounded mt-2">
                            <div class="tab-pane container p-0 active" id="home1">
                                <p>Nous avons pour but de former les étudiants sur les nouvelles technologies du monde
                                    de l'industrie.</p>
                            </div>
                            <div class="tab-pane container p-0 fade" id="home2">
                                <p>Intégrer à la société de demain des ingénieurs et techniciens supérieurs compétents
                                    et qualifiés.</p>
                            </div>
                            <div class="tab-pane container p-0 fade" id="home3">
                                <p>Humilité - Discipline - Efficience - Efficacité</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="icon"><span class="flaticon-doctor"></span></div>
                                <div class="text">
                                    <strong class="number" data-number="2">0</strong>
                                    <span>Diplomés</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="icon"><span class="flaticon-doctor"></span></div>
                                <div class="text">
                                    <strong class="number" data-number="6">0</strong>
                                    <span>Enseignants</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="icon"><span class="flaticon-doctor"></span></div>
                                <div class="text">
                                    <strong class="number" data-number="3">0</strong>
                                    <span>Etudiants</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row no-gutters justify-content-center mb-5">
                <div class="col-md-6 text-center heading-section ftco-animate">
                    <span class="subheading">Concrétisation</span>
                    <h2 class="mb-4">Projets Réalisés</h2>
                    <p>Ci-dessous les projets réalisés par nos étudiants grâce à la formation donnée par les enseignants
                        de l'école supérieure d'industrie</p>
                    <p></p>
                </div>
            </div>
            <div class="row">
                @foreach ($projets as $projet)
                <div class="col-md-4">
                    <div class="project">
                        @if (isset($projet->img_projet) && !empty($projet->img_projet))
                        <div class="img rounded mb-4"
                            style='background-image: url("{{ asset($projet->img_projet) }}");'></div>
                        @else
                        <div class="img rounded mb-4"
                            style="background-image: url({{ asset('img/contactbanner.png') }});"></div>
                        @endif
                        <div class="text w-100 text-center">
                            <span class="cat">{{ $projet->domaine_projet }}</span>
                            <h3><a href="#">{{ $projet->titre_projet }}</a></h3>
                            <p>{{ $projet->description_projet }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Nos formations -->

    <section class="ftco-section ftco-no-pt">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <span class="subheading">Formation</span>
                    <h2 class="mb-4" id="specs">Nos Spécialités</h2>
                    <p>Les spécialités de nos formations dans le domaine de l'industrie</p>
                </div>
            </div>
            <div class="row tabulation mt-4 ftco-animate">
                <div class="col-md-4">
                    <ul class="nav nav-pills nav-fill d-md-flex d-block flex-column">
                        <li class="nav-item text-left">
                            <a class="nav-link active py-4" data-toggle="tab" href="#services-1"><span
                                    class="flaticon-analysis mr-2"></span> Informatique</a>
                        </li>
                        <li class="nav-item text-left">
                            <a class="nav-link py-4" data-toggle="tab" href="#services-2"><span
                                    class="flaticon-business mr-2"></span> Electronique</a>
                        </li>
                        <li class="nav-item text-left">
                            <a class="nav-link py-4" data-toggle="tab" href="#services-3"><span
                                    class="flaticon-insurance mr-2"></span> Electrotechnique</a>
                        </li>
                        <li class="nav-item text-left">
                            <a class="nav-link py-4" data-toggle="tab" href="#services-4"><span
                                    class="flaticon-money mr-2"></span> Mécatronique</a>
                        </li>
                        <li class="nav-item text-left">
                            <a class="nav-link py-4" data-toggle="tab" href="#services-5"><span
                                    class="flaticon-rating mr-2"></span> Alimentation</a>
                        </li>
                        <li class="nav-item text-left">
                            <a class="nav-link py-4" data-toggle="tab" href="#services-6"><span
                                    class="flaticon-search-engine mr-2"></span> Production de masse</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-8">
                    <div class="tab-content">
                        <div class="tab-pane container p-0 active" id="services-1">
                            <div class="img" style="background-image: url({{ asset('img/specialites/info.jpg') }});">
                            </div>
                            <h3><a href="#">Informatique</a></h3>
                            <p>Le parcours des passionés des technologies du digital: Développement, Sécurité
                                informatique, Conception de SI, Bases de données, Intelligence artificielle, etc.</p>
                        </div>
                        <div class="tab-pane container p-0 fade" id="services-2">
                            <div class="img"
                                style="background-image: url({{ asset('img/specialites/electronics.jpg') }});"></div>
                            <h3><a href="#">Electronique</a></h3>
                            <p>Formation sur les technologies embarquées, les systèmes électroniques et informatiques,
                                les réseaux et la télécommunication.</p>
                        </div>
                        <div class="tab-pane container p-0 fade" id="services-3">
                            <div class="img"
                                style="background-image: url({{ asset('img/specialites/electrotech.jpg') }});"></div>
                            <h3><a href="#">Electrotechnique</a></h3>
                            <p>Formation pour les intéressés des circuits éléectriques, du courant et de ses
                                applications dans nos équipements.</p>
                        </div>
                        <div class="tab-pane container p-0 fade" id="services-4">
                            <div class="img"
                                style="background-image: url({{ asset('img/specialites/mecatronic.jpg') }});"></div>
                            <h3><a href="#">Mécatronique</a></h3>
                            <p>Formation sur les technologies touchant au domaine de l'automobile et de l'électronique
                                axée sur les véhicules de nos jours.</p>
                        </div>
                        <div class="tab-pane container p-0 fade" id="services-5">
                            <div class="img"
                                style="background-image: url({{ asset('img/specialites/alimentation.jpg') }});">
                            </div>
                            <h3><a href="#">Alimentation</a></h3>
                            <p>Formation aux métiers de l'alimentation, de la nutrition et des sciences de production.
                            </p>
                        </div>
                        <div class="tab-pane container p-0 fade" id="services-6">
                            <div class="img"
                                style="background-image: url({{ asset('img/specialites/production.jpg') }});"></div>
                            <h3><a href="#">Production de masse</a></h3>
                            <p>Formation sur les sytèmes et outils de production de masse dans l'industrie, les chaines
                                de production et bien d'autres.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-intro ftco-no-pb img"
        style="background-image: url({{ asset('negotiate-master/images/bg_1.jpg') }});">
        <div class="container">
            <div class="row justify-content-center">
                <div
                    class="col-lg-9 col-md-8 d-flex align-items-center heading-section heading-section-white ftco-animate">
                    <h2 class="mb-3 mb-md-0">Qualité d'enseignement supérieure</h2>
                </div>
                <div class="col-lg-3 col-md-4 ftco-animate">
                    <p class="mb-0"><a href="#quoteForm" class="btn btn-secondary py-3 px-4">Soumettre une
                            requête</a></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section">
        <div class="container-fluid px-md-5">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <span class="subheading">Les dires</span>
                    <h2 class="mb-4">Quelques Mots Des Dirigeants</h2>
                    <p>Ces hommes qui tiennent l'Ecole Supérieur d'Industrie</p>
                </div>
            </div>
            <div class="row ftco-animate justify-content-center">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">
                        <!-- DG INP -->
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                {{-- <div class="user-img"
                                    style="background-image: url({{ asset('negotiate-master/images/person_2.jpg') }})">
                                </div> --}}
                                <div class="text pl-4">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                    <p>L'INP-HB compte en son sein des écoles prestigieuses dont je peux citer l'Ecole
                                        Supérieur d'Industrie.</p>
                                    <p class="name">M. MOUSSA Adbul Kader Diaby</p>
                                    <span class="position">Directeur général de l'INP-HB</span>
                                </div>
                            </div>
                        </div>
                        <!-- DG ESI -->
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                {{-- <div class="user-img"
                                    style="background-image: url({{ asset('negotiate-master/images/person_2.jpg') }})">
                                </div> --}}
                                <div class="text pl-4">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                    <p>De l'Ecole Supérieure d'Industrie sont sortis de nombreux talents qui sont
                                        actuellement des pièces maitresses dans le développement du pays.</p>
                                    <p class="name">M. TANOH Aka</p>
                                    <span class="position">Directeur général de l'ESI</span>
                                </div>
                            </div>
                        </div>
                        <!-- DE ESI -->
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                {{-- <div class="user-img"
                                    style="background-image: url({{ asset('negotiate-master/images/person_1.jpg') }})">
                                </div> --}}
                                <div class="text pl-4">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                    <p>De mon poste de directeur des études, j'ai eu l'occasion de rencontrer de
                                        nombreux professeurs tous excellents dans leurs domaines.</p>
                                    <p class="name">M. Siriky KONE</p>
                                    <span class="position">Directeur des études de l'ESI</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <span class="subheading">Articles récents</span>
                    <h2 class="mb-4">Actualités</h2>
                    <p>Toute l'actualité de l'Ecole Supérieure d'Industrie sur le blog.</p>
                </div>
            </div>
            <div class="row">
                <!-- Chargement des articles de blog récents -->
                @foreach ($blog_articles as $article)
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="blog-entry">
                        {{-- <a href="blog-single.html" class="block-20 d-flex align-items-end"
                            style="background-image: url({{ asset($article->image_article) }});"> --}}
                            <a href="{{ url('/blog-details?id=' . $article->id ) }}"
                                class="block-20 d-flex align-items-end"
                                style="background-image: url({{ asset($article->image_article) }});">
                                <div class="meta-date text-center p-2">
                                    <span class="day">{{ date('d', strtotime($article->date_publication)) }}</span>
                                    <span class="mos">{{ date('M', strtotime($article->date_publication)) }}</span>
                                    <span class="yr">{{ date('Y', strtotime($article->date_publication)) }}</span>
                                </div>
                            </a>
                            <div class="text border border-top-0 p-4">
                                <h3 class="heading">{{ $article->titre_article }}</h3>
                                <p>{{ $article->resume_article }}</p>
                                <div class="d-flex align-items-center mt-4">
                                    <p class="mb-0"><a href="{{ url('/blog-details?id=' . $article->id ) }}"
                                            class="btn btn-primary">Lire l'article <span
                                                class="ion-ios-arrow-round-forward"></span></a></p>
                                    <p class="ml-auto mb-0">
                                    <p>Admin</p>
                                    <p><span class="icon-chat"></span> 63</p>
                                    </p>
                                </div>
                            </div>
                    </div>
                </div>
                @endforeach
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
