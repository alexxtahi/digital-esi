<!DOCTYPE html>
<html lang="en">

<head>
    <title>Negotiate - Free Bootstrap 4 Template by Colorlib</title>
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
                    <p class="breadcrumbs"><span class="mr-2"><a href={{url('/')}}>Accueil <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a
                                href={{url('/blog')}}>Blog <i class="ion-ios-arrow-forward"></i></a></span> <span>Details du
                            blog <i class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ftco-animate">
                    <h2 class="mb-3">#2. Séminaire sur le fonctionnement des projets de l'INP-HB</h2>
                    <p>A l'initiative du Directeur Général de l'INP-HB, un séminaire de réflexion sur le
                         mécanisme de gestion des projets de l'Institut s'est tenu, le jeudi 20 janvier 2022, au salon d'honneur du site centre.</p>
                    <p>
                        <img src="{{asset('negotiate-master/images/blog1.jpg')}}" alt="" class="img-fluid">
                    </p>
                    <p>Ce séminaire avait pour objectif de proposer une démarche consensuelle
                         et incitative en harmonie avec les pratiques règlementaires en vigueur,
                          pour la gestion des projets à l'INP-HB. Pour ce faire,
                           il s'est agi de proposer des mécanismes permettant une meilleure contribution
                         de l'INP-HB au budget général grâce aux ressources propres dont la gestion intègrera des clés de répartition approuvées.</p>
                    <p>Selon Dr Moussa Diaby, pour faire face au budget général qui décroît depuis 2018, les projets représentent la majeure source de ressources propres permettant un appoint pour le fonctionnement de l'INP-HB. Cependant, la participation des projets au budget général tel que défini par le ministère de tutelle, reste peu visible.</p>
                    <p>A en croire M. Boidou, Agent Comptable Principal (ACP), l'INP-HB dispose d'infrastructures et d'un fort potentiel pour capter un certain nombre de ressources additives si seulement l'ensemble des acteurs fait preuve d'imagination.</p>
                    <p>Au cours de ce séminaire, la démarche privilégiée par les organisateurs était le travail en atelier. Cet atelier a regroupé environ 90 experts internes qui ont travaillé en commissions. Trois commissions à savoir la commission « projets de formation », la commission « projets de recherche » et la commission « projets de production et expertise », subdivisées en trois équipes, ont permis de relever des solutions pertinentes.</p>
                    <p>Les recommandations suggérées par les groupes de travail sont entre autres, la nécessité de faire la typologie des projets pour mieux les comprendre et affecter les financements, la formation des acteurs impliqués dans les projets, la création d'un service central d'accompagnement des projets, la conception d’un manuel de procédures pour la gestion financière afin de s’accorder sur une clé de répartition et la création d’un guichet unique de gestion des projets. Aussi quelques marges en gestion de projet ont-elles été proposées. Ces propositions seront passées au peigne fin par les spécialistes en finance en vue de les rendre conformes aux normes de la réglementation.</p>
                    <p>Pour conclure, le Directeur Général a reconnu qu’il n’existe aucun doute concernant la contribution des projets au fonctionnement de l’Institut. Toutefois, il va falloir trouver des stratégies non seulement pour alimenter le budget général mais également pour rehausser le niveau des ressources propres. Ainsi pour donner le ton, il a annoncé que le centre de production subira une réforme pour devenir le centre de production et d’expertise. Afin d'aider les acteurs dans le management des projets, le 10 février 2022, M. Boidou donnera une formation sur la gestion financière des projets qui sera suivie le 17 février M. MORO par une autre formation portant sur la gestion administrative des projets.</p>



                    <div class="about-author d-flex p-4 bg-light">
                        <div class="bio mr-5">
                            <img src={{asset('negotiate-master/images/blankavatar.png')}} alt="Image placeholder" class="img-fluid mb-4"
                            style="height: 80px;">
                        </div>
                        <div class="desc">
                            <h3>Yvette N'Goran</h3>
                            <p></p>
                        </div>
                    </div>


                    <div class="pt-5 mt-5">
                        <h3 class="mb-5 h4 font-weight-bold">6 Commentaires</h3>
                        <ul class="comment-list">
                            <li class="comment">
                                <div class="vcard bio">
                                    <img src="{{asset('negotiate-master/images/blankavatar.png')}}" alt="Image placeholder">
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
                                    <img src="{{asset('negotiate-master/images/blankavatar.png')}}" alt="Image placeholder">
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
                                            <img src="{{asset('negotiate-master/images/blankavatar.png')}}" alt="Image placeholder">
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
                                                    <img src="{{asset('negotiate-master/images/blankavatar.png')}}" alt="Image placeholder">
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
                                                            <img src="{{asset('negotiate-master/images/blankavatar.png')}}" alt="Image placeholder">
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
                                    <label for="website">Site web</label>
                                    <input type="url" class="form-control" id="website">
                                </div>

                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea name="" id="message" cols="30" rows="10"
                                        class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Envoyer le commentaire" class="btn py-3 px-4 btn-primary">
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
                            <a class="blog-img mr-4" style="background-image: url({{asset('negotiate-master/images/blog2.jpg')}});"></a>
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
                            <a class="blog-img mr-4" style="background-image: url({{asset('negotiate-master/images/blog3.jpg')}});"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#">Cérémonie de décoration de l'Administration Générale du Cnam</a></h3>
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
                            <li><a href="#">December 2018 <span>(30)</span></a></li>
                            <li><a href="#">Novemmber 2018 <span>(20)</span></a></li>
                            <li><a href="#">September 2018 <span>(6)</span></a></li>
                            <li><a href="#">August 2018 <span>(8)</span></a></li>
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
