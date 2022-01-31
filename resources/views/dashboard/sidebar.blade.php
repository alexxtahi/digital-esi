<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{url('/admin')}}">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">Tableau de bord</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                aria-controls="ui-basic">
                <i class="mdi mdi-circle-outline menu-icon"></i>
                <span class="menu-title">Articles</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link"
                        href="{{url('/articles')}}">Aperçu</a></li>

                    <li class="nav-item"> <a class="nav-link"
                            href="{{url('articles/add')}}">Ajouter un article</a></li>
                    <li class="nav-item"> <a class="nav-link"
                            href="{{url('articles/add')}}">Modifier un article</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/forms/basic_elements.html">
                <i class="mdi mdi-view-headline menu-icon"></i>
                <span class="menu-title">Form elements</span>
            </a>
        </li>

        
        
    </ul>
</nav>