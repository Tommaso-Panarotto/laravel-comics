@extends("layouts.app")

@section("head-title", "DC Comics")

@section("main-content")
<div class="container">
    <div class="current-series"><span>current series</span></div>
    <section id="content">
<ul id="comic-list">
    @foreach ($comics as $index => $comic)
    <li>
        <a href="{{ route("comics.show", $index)}}">
        <div class="card bg-transparent border-0" >
            <div class="comic-image">
    <img src="{{$comic["thumb"]}}" alt="{{$comic["series"]}}">
            </div>
            <div class="card-body text-white">
          <h5 class="card-title">{{$comic["series"]}}</h5>
      </div>
    </a>
    </li>
    @endforeach
</ul>
    </section>
    <button>
        LOAD MORE
    </button>
</div>
@endsection
