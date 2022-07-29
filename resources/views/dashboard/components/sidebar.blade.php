<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        {{-- {{ $view_name }} --}}
        <li @if ($view_name == 'dashboard-admin-index') class="nav-item active" @else class="nav-item" @endif>
            <a class="nav-link" href="{{ url('/dashboard') }}">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">Tableau de bord</span>
            </a>
        </li>
        {{-- Actualités --}}
        @include('dashboard.components.sidebar-item', [
            'id' => 'articles',
            'icon' => 'mdi-information',
            'title' => 'Actualités',
            'routes' => [
                'dashboard.pages.articles.index' => 'Aperçu',
                'dashboard.pages.articles.create' => 'Ajouter une info',
            ],
        ])
        {{-- Projets --}}
        @include('dashboard.components.sidebar-item', [
            'id' => 'projets',
            'icon' => 'mdi-toolbox',
            'title' => 'Projets',
            'routes' => [
                'dashboard.pages.projets.index' => 'Aperçu',
                'dashboard.pages.projets.create' => 'Ajouter un projet',
            ],
        ])

        <li class="nav-item">
            <a class="nav-link" href="{{ url('/') }}">
                <i class="mdi mdi-view-headline menu-icon"></i>
                <span class="menu-title">Retour à l'accueil</span>
            </a>
        </li>



    </ul>
</nav>
