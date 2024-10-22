@extends("layouts.app")

@section("head-title", "DC Comics")

@section("main-content")
<div class="container">
    <div class="current-series"><span>current series</span></div>
    <section id="content">
<ul id="comic-list">
    <li>
        <div class="comic-image">

        </div>
    </li>
</ul>
    </section>
    <button>
        LOAD MORE
    </button>
</div>
@endsection
