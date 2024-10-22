<!--Header-->
<header>
    <div class="container">
        <!--LOGO-->
        <section id="logo">
            <img src="{{URL::asset('img/dc-logo.png')}}" alt="dc-logo" width="100px">
        </section>

        <!--LINKS-->
        <nav id="navbar-links">
            <ul>
                @foreach ($headerLinks as $link)
                <li>
                    <a href="#">{{$link}}</a>
                </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>
