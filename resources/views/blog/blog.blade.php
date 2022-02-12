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
                    <p class="breadcrumbs"><span class="mr-2"><a href={{url('/')}}>Accueil <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i
                                class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">

                @foreach ($blog_articles as $article)
                    <div class="col-md-6 col-lg-4 ftco-animate">
                        <div class="blog-entry">
                            <a href={{url('/blog-details?id=' . $article->id )}} class="block-20 d-flex align-items-end"
                                style="background-image: url({{asset($article->image_article)}});">
                                <div class="meta-date text-center p-2">
                                    <span class="day">{{ date('d', strtotime($article->date_publication)) }}</span>
                                    <span class="mos">{{ date('M', strtotime($article->date_publication)) }}</span>
                                    <span class="yr">{{ date('Y', strtotime($article->date_publication)) }}</span>
                                </div>
                            </a>
                            <div class="text border border-top-0 p-4">
                                <h3 class="heading"><a href="#">{{$article->titre_article}}</a></h3>
                                <p>{{$article->resume_article}}</p>
                                <div class="d-flex align-items-center mt-4">
                                    <p class="mb-0"><a href={{url('/blog-details?id=' . $article->id )}} class="btn btn-primary">Voir plus <span
                                                class="ion-ios-arrow-round-forward"></span></a></p>
                                    <p class="ml-auto mb-0">
                                        <a href="#" class="mr-2">Admin</a>
                                        <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

               

                
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
