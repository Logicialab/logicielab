<div class="col-6 col-md-4">
    <h6 class="mb-2 mb-md-4">روابط سريعة</h6>
    <ul class="nav flex-column">
        @foreach ($menus as $menu)
            <a class="nav-link" href="{{$menu->url}}">{{$menu->title}}</a>
        @endforeach
    </ul>
</div>