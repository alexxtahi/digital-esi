<li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#{{ $id }}" aria-expanded="false"
        aria-controls="{{ $id }}">
        @if (!empty($icon))
            <i class="mdi {{ $icon }} menu-icon"></i>
        @else
            <i class="mdi mdi-circle-outline menu-icon"></i>
        @endif
        <span class="menu-title">{{ $title }}</span>
        <i class="menu-arrow"></i>
    </a>
    <div class="collapse" id="{{ $id }}">
        <ul class="nav flex-column sub-menu">
            @foreach ($routes as $route => $name)
                <li class="nav-item">
                    <a class="nav-link" href="{{ route($route) }}">{{ $name }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</li>
