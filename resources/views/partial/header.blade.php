<!--Header-->
<header>
    <div class="container">
        <!--LOGO-->
        <section id="logo">
            <a href="{{ route("home")}}"><img src="img/dc-logo.png" alt="dc-logo" width="100px"></a>
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
