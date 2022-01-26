<!DOCTYPE html>
<html lang="en">

<head>
    <title>ESI - Ecole Supérieure d'Industrie</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('components.css')

</head>

<body>
    @include('components.header')
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('negotiate-master/images/bg_1.jpg')}});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Blog</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href={{url('/accueil')}}>Accueil <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i
                                class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="blog-entry">
                        <a href={{url('/blog-details')}} class="block-20 d-flex align-items-end"
                            style="background-image: url({{asset('negotiate-master/images/blog1.jpg')}});">
                            <div class="meta-date text-center p-2">
                                <span class="day">22</span>
                                <span class="mos">Jan.</span>
                                <span class="yr">2022</span>
                            </div>
                        </a>
                        <div class="text border border-top-0 p-4">
                            <h3 class="heading"><a href="#">Séminaire sur le fonctionnement des projets
                                    de l'INP-HB</a></h3>
                            <p>A l'initiative du Directeur Général de l'INP-HB, un séminaire de réflexion sur le mécanisme de gestion des projets de l'Institut s'est tenu,
                                 le jeudi 20 janvier 2022, au salon d'honneur du site cen...</p>
                            <div class="d-flex align-items-center mt-4">
                                <p class="mb-0"><a href="#" class="btn btn-primary">Voir plus <span
                                            class="ion-ios-arrow-round-forward"></span></a></p>
                                <p class="ml-auto mb-0">
                                    <a href="#" class="mr-2">Admin</a>
                                    <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="blog-entry">
                        <a href={{url('/blog-details')}} class="block-20 d-flex align-items-end"
                            style="background-image: url({{asset('negotiate-master/images/blog2.jpg')}});">
                            <div class="meta-date text-center p-2">
                                <span class="day">14</span>
                                <span class="mos">Jan.</span>
                                <span class="yr">2022</span>
                            </div>
                        </a>
                        <div class="text border border-top-0 p-4">
                            <h3 class="heading"><a href="#">Visite de la Direction Générale de Total-Energies Côte d'Ivoire à l'INP-HB</a></h3>
                            <p>Une délégation de Total-Energies Côte d'Ivoire, composée de M. Fabien Voisin, Directeur Général, de M. Boni,
                                 Directeur Général Adjoint et du Directeur des Ressources Humaines, M. Koffi, a effectué une visite, le jeu...</p>
                            <div class="d-flex align-items-center mt-4">
                                <p class="mb-0"><a href="#" class="btn btn-primary">Voir plus <span
                                            class="ion-ios-arrow-round-forward"></span></a></p>
                                <p class="ml-auto mb-0">
                                    <a href="#" class="mr-2">Admin</a>
                                    <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="blog-entry">
                        <a href={{url('/blog-details')}} class="block-20 d-flex align-items-end"
                            style="background-image: url({{asset('negotiate-master/images/blog3.jpg')}});">
                            <div class="meta-date text-center p-2">
                                <span class="day">23</span>
                                <span class="mos">Dec.</span>
                                <span class="yr">2021</span>
                            </div>
                        </a>
                        <div class="text border border-top-0 p-4">
                            <h3 class="heading"><a href="#">Cérémonie de décoration de l'Administration Générale du Cnam</a></h3>
                            <p>Le Ministère de l'Enseignement Supérieur et de la Recherche Scientifique (MESRS) a fait Commandeur dans l'ordre du mérite national
                                 le Professeur Olivier Faron, Administrateur Gé...</p>
                            <div class="d-flex align-items-center mt-4">
                                <p class="mb-0"><a href="#" class="btn btn-primary">Voir plus <span
                                            class="ion-ios-arrow-round-forward"></span></a></p>
                                <p class="ml-auto mb-0">
                                    <a href="#" class="mr-2">Admin</a>
                                    <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!--
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="blog-entry">
                        <a href="blog-single.html" class="block-20 d-flex align-items-end"
                            style="background-image: url({{asset('negotiate-master/images/image_4.jpg')}});">
                            <div class="meta-date text-center p-2">
                                <span class="day">15</span>
                                <span class="mos">Oct.</span>
                                <span class="yr">2019</span>
                            </div>
                        </a>
                        <div class="text border border-top-0 p-4">
                            <h3 class="heading"><a href="#">Finance And Legal Working Streams Occur
                                    Throughout</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts.</p>
                            <div class="d-flex align-items-center mt-4">
                                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span
                                            class="ion-ios-arrow-round-forward"></span></a></p>
                                <p class="ml-auto mb-0">
                                    <a href="#" class="mr-2">Admin</a>
                                    <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="blog-entry">
                        <a href="blog-single.html" class="block-20 d-flex align-items-end"
                            style="background-image: url({{asset('negotiate-master/images/image_5.jpg')}});">
                            <div class="meta-date text-center p-2">
                                <span class="day">15</span>
                                <span class="mos">Oct.</span>
                                <span class="yr">2019</span>
                            </div>
                        </a>
                        <div class="text border border-top-0 p-4">
                            <h3 class="heading"><a href="#">Finance And Legal Working Streams Occur
                                    Throughout</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts.</p>
                            <div class="d-flex align-items-center mt-4">
                                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span
                                            class="ion-ios-arrow-round-forward"></span></a></p>
                                <p class="ml-auto mb-0">
                                    <a href="#" class="mr-2">Admin</a>
                                    <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="blog-entry">
                        <a href="blog-single.html" class="block-20 d-flex align-items-end"
                            style="background-image: url({{asset('negotiate-master/images/image_5.jpg')}});">
                            <div class="meta-date text-center p-2">
                                <span class="day">15</span>
                                <span class="mos">Oct.</span>
                                <span class="yr">2019</span>
                            </div>
                        </a>
                        <div class="text border border-top-0 p-4">
                            <h3 class="heading"><a href="#">Finance And Legal Working Streams Occur
                                    Throughout</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts.</p>
                            <div class="d-flex align-items-center mt-4">
                                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span
                                            class="ion-ios-arrow-round-forward"></span></a></p>
                                <p class="ml-auto mb-0">
                                    <a href="#" class="mr-2">Admin</a>
                                    <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            -->
            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&gt;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('components.footer')



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg>
    </div>


    @include('components.js')

</body>

</html>
