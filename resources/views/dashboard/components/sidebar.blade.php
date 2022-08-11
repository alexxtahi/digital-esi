<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        {{-- {{ $view_name }} --}}
        <li @if ($view_name == 'dashboard-admin-index') class="nav-item active" @else class="nav-item" @endif>
            <a class="nav-link" href="{{ url('/dashboard') }}">
                <i class="mdi mdi-view-dashboard menu-icon"></i>
                <span class="menu-title">Tableau de bord</span>
            </a>
        </li>
        {{-- Actualités --}}
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#articles" aria-expanded="false"
                aria-controls="articles">
                <i class="mdi mdi-information menu-icon"></i>
                <span class="menu-title">Actualités</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="articles">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard.pages.articles.index') }}">Aperçu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard.pages.articles.create') }}">Ajouter une
                            info</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#projets" aria-expanded="false"
                aria-controls="projets">
                <i class="mdi mdi-toolbox menu-icon"></i>
                <span class="menu-title">Projets</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="projets">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard.pages.projets.index') }}">Aperçu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard.pages.projets.create') }}">Ajouter un
                            projet</a>
                    </li>
                </ul>
            </div>
        </li>
        {{-- Enquêtes --}}
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#enquetes" aria-expanded="false"
                aria-controls="enquetes">
                <i class="mdi mdi-search-web menu-icon"></i>
                <span class="menu-title">Enquêtes</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="enquetes">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard.pages.enquetes.index') }}">Aperçu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard.pages.enquetes.create') }}">Ajouter une
                            enquête</a>
                    </li>
                </ul>
            </div>
        </li>
        {{-- Livres --}}
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#livres" aria-expanded="false"
                aria-controls="livres">
                <i class="mdi mdi-book menu-icon"></i>
                <span class="menu-title">Livres</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="livres">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard.pages.livres.index') }}">Aperçu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard.pages.livres.create') }}">Ajouter un
                            livre</a>
                    </li>
                </ul>
            </div>
        </li>
        {{-- Profil --}}
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard.pages.profil.index') }}">
                <i class="mdi mdi-account menu-icon"></i>
                <span class="menu-title">Profil</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/') }}">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">Retour à l'accueil</span>
            </a>
        </li>



    </ul>
</nav>
