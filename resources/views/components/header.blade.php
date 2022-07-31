<div class="bg-top navbar-light d-flex flex-column-reverse">
    <div class="container py-3">
        <div class="row no-gutters d-flex align-items-center">
            <div class="col-md-4 d-flex align-items-center py-4">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('img/logo-esi.png') }}" class="custom-logo-esi" alt="" srcset="">
                </a>
            </div>
            <div class="col-lg-8 d-block">
                <div class="row d-flex">
                    <div class="col-md d-flex topper align-items-center py-md-4">
                        <div class="icon d-flex justify-content-center align-items-center"><span
                                class="ion-ios-mail custom-icon-color"></span></div>
                        <div class="text">
                            <span>Adresse mail</span>
                            <span>esi@inphb.ci</span>
                        </div>
                    </div>
                    <div class="col-md d-flex topper align-items-center py-md-4">
                        <div class="icon d-flex justify-content-center align-items-center"><span
                                class="ion-ios-call custom-icon-color"></span></div>
                        <div class="text">
                            <span>Contact</span>
                            <span>+225 27 30 64 66 80
                                {{-- / +225 07 08 58 40 34 --}}
                            </span>
                        </div>
                    </div>
                    <div class="col-md d-flex topper align-items-center py-md-4">
                        <div class="icon d-flex justify-content-center align-items-center"><span
                                class="ion-ios-locate custom-icon-color"></span></div>
                        <div class="text">
                            <span>Lieu</span>
                            <span>BP 1093 Yamousoukro CI</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="top-social-menu py-2 bg-light">
        <div class="container">
            <div class="row">
                <div class="col justify-content-between" style="display: flex; flex-direction: row;">
                    <p class="social mb-0">
                        <a href="https://www.facebook.com/inphb.polytech"><i
                                class="ion-logo-facebook custom-icon-color"></i><span
                                class="sr-only">Facebook</span></a>
                        <a href="https://twitter.com/inphbpolytech"><i
                                class="ion-logo-twitter custom-icon-color"></i><span class="sr-only">Twitter</span></a>
                        <a href="https://www.instagram.com/inphb/?hl=fr"><i
                                class="ion-logo-instagram custom-icon-color"></i><span
                                class="sr-only">Instagram</span></a>
                    </p>
                    @if (Auth::check())
                        <!-- Si l'utilisateur est connecté -->
                        <!-- Formulaire de déconnexion -->
                        <div class="social mb-0">
                            <span style="margin-right: 15px;">Bonjour, M. {{ Auth::user()->nom_user }}</span>
                            <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                                @csrf
                                <a href="" class="btn-link"
                                    onclick="event.preventDefault(); this.closest('form').submit();">Se
                                    déconnecter</a>
                            </form>
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="btn-link">Se connecter</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light custom-bg-primary" id="ftco-navbar">
    <div class="container d-flex align-items-center">
        {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <form action="#" class="searchform order-lg-last">
            <div class="form-group d-flex">
                <input type="text" class="form-control pl-3" placeholder="Recherche">
                <button type="submit" placeholder="" class="form-control search"><span
                        class="ion-ios-search"></span></button>
            </div>
        </form> --}}
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav mr-auto">
                <li @if ($view_name == 'home') class="nav-item custom-active" @else class="nav-item" @endif>
                    <a href="{{ route('home') }}" class="nav-link">Accueil</a>
                </li>

                <li @if ($view_name == 'galerie') class="nav-item custom-active" @else class="nav-item" @endif>
                    <a href="{{ route('galerie') }}" class="nav-link">Galérie</a>
                </li>

                <li @if ($view_name == 'services') class="nav-item custom-active" @else class="nav-item" @endif>
                    <a href="{{ route('services') }}" class="nav-link">Services</a>
                </li>

                <li @if ($view_name == 'contacts') class="nav-item custom-active" @else class="nav-item" @endif>
                    <a href={{ route('contacts') }} class="nav-link">Contacts</a>
                </li>

                <li @if ($view_name == 'about') class="nav-item custom-active" @else class="nav-item" @endif>
                    <a href="{{ route('dashboard.index') }}" class="nav-link">Tableau de bord</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
