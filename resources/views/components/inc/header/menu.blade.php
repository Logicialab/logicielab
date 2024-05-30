<div class="navbar-collapse collapse" id="navbarCollapse">
    <ul class="navbar-nav navbar-nav-scroll dropdown-hover mx-auto">
        @foreach ($menus as $menu)
            <li class="nav-item">
                <a class="nav-link{{ Request::is($menu->url) ? ' active' : '' }}"  href="{{$menu->url}}">{{$menu->title}}</a>
            </li>
        @endforeach
    </ul>
</div>