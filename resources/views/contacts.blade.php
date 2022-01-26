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

    <section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('negotiate-master/images/contactbanner.png')}});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Contact</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href={{url('/')}}>Accueil <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i
                                class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section">
        <div class="container">
            <div class="row d-flex mb-5 contact-info justify-content-center">
                <div class="col-md-10">
                    <div class="row mb-5">
                        <div class="col-md-4 text-center d-flex">
                            <div class="border w-100 p-4">
                                <div class="icon">
                                    <span class="icon-map-o"></span>
                                </div>
                                <p><span>Adresse:</span> BP 1093 Yamoussoukro, Côte d'Ivoire</p>
                            </div>
                        </div>
                        <div class="col-md-4 text-center d-flex">
                            <div class="border w-100 p-4">
                                <div class="icon">
                                    <span class="icon-tablet"></span>
                                </div>
                                <p><span>Téléphone:</span> <a href="tel://1234567920">Appelez-nous : + 225 XX XX XX XX XX</a></p>
                            </div>
                        </div>
                        <div class="col-md-4 text-center d-flex">
                            <div class="border w-100 p-4">
                                <div class="icon">
                                    <span class="icon-envelope-o"></span>
                                </div>
                                <p><span>Email:</span> <a href="mailto:info@yoursite.com">sg@inphb.ci</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row block-9 justify-content-center mb-5">
                <div class="col-md-10 mb-md-5">
                    <h2 class="text-center">Si vous avez des questions, <br>n'hésitez pas à nous faire parvenir un message
                    </h2>
                    <form action="#" class="border p-5 contact-form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Votre nom">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Votre email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Sujet">
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="7" class="form-control"
                                placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Envoyer un message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
    <!--

    <section class="ftco-section ftco-no-pb ftco-no-pt">
        <div class="container-fluid px-0">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div id="map" class="bg-white"></div>
                </div>
            </div>
        </div>
    </section>
    -->

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
