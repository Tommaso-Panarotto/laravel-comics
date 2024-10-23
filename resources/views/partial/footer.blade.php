<!--Footer-->
<footer>
    <div id="footer-top" class="container">
        <!--General Links-->
        <nav id="general-links">
            <div class="dc-comics">
                <h3>DC COMICS</h3>
                <ul>
                    @foreach ($dcComics as $dcComic)
                    <li><a href="#">{{ $dcComic }}</a></li>
@endforeach
                </ul>
            </div>
            <div class="shop">
                <h3>SHOP</h3>
                <ul>
                    @foreach ($shops as $shop)
                    <li><a href="#">{{ $shop }}</a></li>
@endforeach
                </ul>
            </div>
            <div class="dc">
                <h3>DC</h3>
                <ul>
                    @foreach ($dc as $conditions)
                    <li><a href="#">{{ $conditions }}</a></li>
@endforeach
                </ul>
            </div>
            <div class="sites">
                <h3>SITES</h3>
                <ul>
                    @foreach ($sites as $site)
                    <li><a href="#">{{ $site }}</a></li>
@endforeach
                </ul>
            </div>
        </nav>
        <div id="logo-bg"></div>
    </div>
    <!--sign-up and socials-->
    <section id="footer-info">
        <div class="container">
            <div class="footer-link">
                <!--Sign-up-->
                <div id="sign"><button>SIGN-UP NOW!</button></div>
                <!--Socials-->
                <div id="socials">
                    <h3>FOLLOW US</h3>
                    <ul>
                        <li><a href="#"><img src="/img/footer-facebook.png" alt="facebook"></a></li>
                        <li><a href="#"><img src="/img/footer-twitter.png" alt="twitter"></a></li>
                        <li><a href="#"><img src="/img/footer-youtube.png" alt="YouTube"></a></li>
                        <li><a href="#"><img src="/img/footer-pinterest.png" alt="pinterest"></a></li>
                        <li><a href="#"><img src="/img/footer-periscope.png" alt="Maps"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</footer>
