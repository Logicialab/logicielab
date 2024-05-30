<div class="col-6 col-md-4">
    <h6 class="mb-2 mb-md-4">الخدمات</h6>
    <ul class="nav flex-column">
        @foreach ($services as $service)
            <a class="nav-link" href="{{$service->url}}">{{$service->title}}</a>
        @endforeach
    </ul>
</div>