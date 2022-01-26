<!DOCTYPE html>
<html lang="en">

<head>
    <title>Negotiate - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">

    @include('components/css')

</head>

<body>
    @include('components/header')

    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('negotiate-master/images/bg_1.jpg')}});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Présentation du personnel</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href={{url('/')}}>Accueil <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Personnel <i
                                class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff border">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch" style="background-image: url({{asset('negotiate-master/images/blankavatar.png')}});">
                            </div>
                        </div>
                        <div class="text pt-3 px-3 pb-4 text-center">
                            <h3>M. TANOH Aka</h3>
                            <span class="position mb-2">Directeur</span>
                            <div class="faded">
                                <p>Directeur général de l'école supérieure d'industrie.</p>
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="icon-google-plus"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="icon-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff border">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch" style="background-image: url({{asset('negotiate-master/images/blankavatar.png')}});">
                            </div>
                        </div>
                        <div class="text pt-3 px-3 pb-4 text-center">
                            <h3>M. KONÉ Siriky</h3>
                            <span class="position mb-2">Directeur des études</span>
                            <div class="faded">
                                <p>Directeurs des études, chargé du parcours TS STIC.</p>
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="icon-google-plus"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="icon-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!--
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff border">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch" style="background-image: url(images/staff-3.jpg);">
                            </div>
                        </div>
                        <div class="text pt-3 px-3 pb-4 text-center">
                            <h3>Ian Smith</h3>
                            <span class="position mb-2">Advisor</span>
                            <div class="faded">
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="icon-google-plus"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="icon-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff border">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch" style="background-image: url(images/staff-4.jpg);">
                            </div>
                        </div>
                        <div class="text pt-3 px-3 pb-4 text-center">
                            <h3>Alicia Henderson</h3>
                            <span class="position mb-2">Financial</span>
                            <div class="faded">
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="icon-google-plus"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="icon-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff border">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch" style="background-image: url(images/staff-5.jpg);">
                            </div>
                        </div>
                        <div class="text pt-3 px-3 pb-4 text-center">
                            <h3>Lloyd Wilson</h3>
                            <span class="position mb-2">Advisor</span>
                            <div class="faded">
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="icon-google-plus"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="icon-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff border">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch" style="background-image: url(images/staff-6.jpg);">
                            </div>
                        </div>
                        <div class="text pt-3 px-3 pb-4 text-center">
                            <h3>Rachel Parker</h3>
                            <span class="position mb-2">Accountant</span>
                            <div class="faded">
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="icon-google-plus"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="icon-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff border">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch" style="background-image: url(images/staff-7.jpg);">
                            </div>
                        </div>
                        <div class="text pt-3 px-3 pb-4 text-center">
                            <h3>Ian Smith</h3>
                            <span class="position mb-2">Financial</span>
                            <div class="faded">
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="icon-google-plus"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="icon-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff border">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch" style="background-image: url(images/staff-8.jpg);">
                            </div>
                        </div>
                        <div class="text pt-3 px-3 pb-4 text-center">
                            <h3>Fred Henderson</h3>
                            <span class="position mb-2">Advisor</span>
                            <div class="faded">
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="icon-google-plus"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="icon-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            -->
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



    @include('components/js')

</body>

</html>
