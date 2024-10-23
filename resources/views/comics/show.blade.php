@extends("layouts.app")

@section("head-title", "DC Comics")

@section("main-content")
<div class="container">
    <div class="current-series"><span>current serie</span></div>
    <section id="content">
<div class="card mb-3 bg-transparent border-0" id="comic-list">
    <div class="row g-0">
      <div class="col-md-4 d-flex">
        <img src="{{$comic["thumb"]}}" alt="{{$comic["series"]}}">
      </div>
      <div class="col-md-8 text-white">
        <div class="card-body h-100 d-flex flex-column justify-content-center">
            <h4 class="card-title py-5">{{$comic["series"]}}</h4>
            <h5 class="card-title pb-4">{{$comic["title"]}}</h5>
          <p class="card-text">{{$comic["description"]}}</p>
          <div class="card-text w-100 d-flex justify-content-between pt-5"><div class="type">{{$comic["type"]}}</div><div class="d-flex"><span>{{$comic["sale_date"]}}:</span><div class="price text-danger">{{$comic["price"]}}</div></div></div>
        </div>
      </div>
    </div>
  </div>
    </section>
</div>
@endsection
