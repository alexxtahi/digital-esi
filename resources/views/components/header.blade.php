<div class="bg-top navbar-light d-flex flex-column-reverse">
    <div class="container py-3">
        <div class="row no-gutters d-flex align-items-center align-items-stretch">
            <div class="col-md-4 d-flex align-items-center py-4">
                <a class="navbar-brand" href="{{ route('home') }}">ESI <span>Ecole Supérieure d'Industrie</span></a>
            </div>
            <div class="col-lg-8 d-block">
                <div class="row d-flex">
                    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                        <div class="icon d-flex justify-content-center align-items-center"><span
                                class="ion-ios-paper-plane"></span></div>
                        <div class="text">
                            <span>Adresse mail</span>
                            <span>siriky.kone@inphb.ci</span>
                        </div>
                    </div>
                    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                        <div class="icon d-flex justify-content-center align-items-center"><span
                                class="ion-ios-call"></span></div>
                        <div class="text">
                            <span>Contact</span>
                            <span>+225 07 47 26 05 05</span>
                        </div>
                    </div>
                    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                        <div class="icon d-flex justify-content-center align-items-center"><span
                                class="ion-ios-time"></span></div>
                        <div class="text">
                            <span>Heures de travail</span>
                            <span>Lundi - Vendredi 8H - 18H</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="top-social-menu py-2 bg-light">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="social mb-0">
                        <a href="https://www.facebook.com/inphb.polytech"><i class="ion-logo-facebook"></i><span
                                class="sr-only">Facebook</span></a>
                        <a href="https://twitter.com/inphbpolytech"><i class="ion-logo-twitter"></i><span
                                class="sr-only">Twitter</span></a>
                        <a href="https://www.instagram.com/inphb/?hl=fr"><i class="ion-logo-instagram"></i><span
                                class="sr-only">Instagram</span></a>
                    </p>
                </div>
                <div class="col-md-5 text-right">
                    @if (Auth::check())
                    <!-- Si l'utilisateur est connecté -->
                    <!-- Formulaire de déconnexion -->
                    <span style="margin-right: 15px;">Bonjour, M. {{ Auth::user()->nom_user
                        }}</span>
                    <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                        @csrf
                        <a href="" class="btn-link" onclick="event.preventDefault(); this.closest('form').submit();">Se
                            déconnecter</a>
                    </form>
                    @else
                    <a href="{{ route('login') }}" class="btn-link">Se connecter</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container d-flex align-items-center">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <form action="#" class="searchform order-lg-last">
            <div class="form-group d-flex">
                <input type="text" class="form-control pl-3" placeholder="Recherche">
                <button type="submit" placeholder="" class="form-control search"><span
                        class="ion-ios-search"></span></button>
            </div>
        </form>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav mr-auto">
                <li @if ($view_name=='home' )class="nav-item active" @else class="nav-item" @endif>
                    <a href="{{ route('home') }}" class="nav-link">Accueil</a>
                </li>

                <li @if ($view_name=='personnel' )class="nav-item active" @else class="nav-item" @endif>
                    <a href="{{ route('personnel') }}" class="nav-link">Personnel</a>
                </li>

                <li @if ($view_name=='portfolio' )class="nav-item active" @else class="nav-item" @endif>
                    <a href="{{ route('portfolio') }}" class="nav-link">Portfolio</a>
                </li>

                <li @if ($view_name=='services' )class="nav-item active" @else class="nav-item" @endif>
                    <a href="{{ route('services') }}" class="nav-link">Services</a>
                </li>

                <li @if (strpos($view_name, 'blog' ) !==false)class="nav-item active" @else class="nav-item" @endif>
                    <a href={{ route('blog') }} class="nav-link">Blog</a>
                </li>

                <li @if ($view_name=='contacts' )class="nav-item active" @else class="nav-item" @endif>
                    <a href={{ route('contacts') }} class="nav-link">Contacts</a>
                </li>

                <li @if ($view_name=='about' )class="nav-item active" @else class="nav-item" @endif>
                    <a href="{{ route('dashboard.index') }}" class="nav-link">Tableau de bord</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
