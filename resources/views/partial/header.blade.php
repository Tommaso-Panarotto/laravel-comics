<!--Header-->
<header>
    <div class="container">
        <!--LOGO-->
        <section id="logo">
            <img src="../../img/dc-logo.png" alt="DC Main Logo">
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
