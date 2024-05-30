
<ul class="list-inline flex-wrap mb-0">
    @foreach ($icons as $icon)
        <li class="list-inline-item">
            <a href="{{$icon->url}}" class="btn btn-icon btn-light text-facebook rounded-circle"><i class="{{$icon->image}}"></i></a>
        </li>
    @endforeach
</ul>