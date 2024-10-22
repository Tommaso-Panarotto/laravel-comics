<!--Icons-->
<div class="icons-link">
    <div class="container">
        <ul>
            @foreach ($icons as $icon)
            <li>
                <img src="img/{{$icon["imageUrl"]}}" alt="{{$icon["name"]}}">
                <p>{{ $icon["name"] }}</p>
            </li>
            @endforeach

        </ul>
    </div>
</div>
