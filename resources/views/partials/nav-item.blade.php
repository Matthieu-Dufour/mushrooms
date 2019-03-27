<li class="nav-item {{ request()->is($link) ? 'active' : '' }}">
    <a href="{{ url($link) }}" class="nav-link">{{ $text }}</a>
</li>