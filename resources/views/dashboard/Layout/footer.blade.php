<!-- footer-area -->
<footer id="contact-us">
    <div class="footer-top-wrap">
        <div class="container">
            <div class="footer-menu-wrap">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="footer-logo">
                            <a href="{{route('dashboard.movies.movie')}}"><img src="{{asset('img/logo/logo.png')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="footer-menu">
                            <nav>
                                <ul class="navigation">
                                    <li><a href="{{route('dashboard.movies.movie')}}">Home</a></li>
                                    <li><a href="{{route('dashboard.movies.movie')}}">Movies</a></li>
                                    <li><a href="index.html">tv show</a></li>
                                    <li><a href="{{route('dashboard.Layout.aboutus')}}">About Us</a></li>
                                    <li><a href="{{route('dashboard.Layout.coupon')}}">Coupon</a></li>
                                </ul>
                                <div class="footer-search">
                                    <form action="#">
                                        <input type="text" placeholder="Find Favorite Movie">
                                        <button><i class="fas fa-search"></i></button>
                                    </form>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-quick-link-wrap">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <div class="quick-link-list">
                            <ul>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="footer-social">
                            <ul>
                                <li><a href="https://www.facebook.com/amctheatres" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.instagram.com/amctheatres" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="https://www.tiktok.com/@amctheatres" target="_blank" rel="noopener noreferrer"><i class="fab fa-tiktok"></i></a></li>
                                <li><a href="https://www.youtube.com/user/amctheatres" target="_blank" rel="noopener noreferrer"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="https://twitter.com/amctheatres" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="copyright-text">
                        <p>Copyright &copy; 2024. All Rights Reserved By <a href="{{route('dashboard.movies.movie')}}">Movflx</a></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="payment-method-img text-center text-md-right">
                        <img src="{{asset('img/images/card_img.png')}}" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
