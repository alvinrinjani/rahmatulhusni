<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>rahmatulhusni.com | {{ $title }} </title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico" />

    <!-- Bootstrap Icons  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="/css/core-style.css" />
    <link rel="stylesheet" href="/css/fonts.css" />
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/css/helper.css" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Dongle&display=swap" rel="stylesheet" />
</head>

<body>
    <!-- Search Wrapper Area Start -->
    <div class="search-wrapper section-padding-100">
        <div class="search-close">
            <i class="bi bi-x-circle" aria-hidden="true"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-content">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type your keyword..." />
                            <button type="submit">
                                <img src="img/core-img/search.png" alt="" />
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Wrapper Area End -->

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">
        <!-- Mobile Nav (max width 767px)-->
        <div class="mobile-nav">
            <!-- Navbar Brand -->
            <div class="amado-navbar-brand">
                <a href="/"><img src="img/core-img/logo4.png" alt="" /></a>
            </div>
            <!-- Navbar Toggler -->
            <div class="amado-navbar-toggler">
                <span></span><span></span><span></span>
            </div>
        </div>

        <!-- Header Area Start -->
        <header class="header-area clearfix">
            <!-- Close Icon -->
            <div class="nav-close">
                <i class="bi bi-x-circle" aria-hidden="true"></i>
            </div>
            <!-- Logo -->
            <div class="logo">
                <a href="index.html"><img src="img/core-img/logo4.png" alt="" /></a>
            </div>
            <!-- Amado Nav -->
            <nav class="amado-nav handlee">
                <ul>
                    <li class="handlee {{ $title === 'home' ? 'active' : '' }}"><a href="/">Home</a></li>
                    <li class="handlee {{ $title === 'Artikel Ilmiah' ? 'active' : '' }}"><a
                            href="{{ route('artikel-ilmiah') }}">Artikel Ilmiah</a></li>
                    <li class="handlee {{ $title === 'Psikologi Islam' ? 'active' : '' }}"><a href="">Psikologi
                            Islam</a></li>
                    <li class="handlee {{ $title === 'Tantangan Pemikiran' ? 'active' : '' }}"><a
                            href="">Tantangan Pemikiran</a></li>
                    <li class="handlee {{ $title === 'English Studies' ? 'active' : '' }}"><a href="">English for
                            Islamic Studies</a></li>
                </ul>
            </nav>
            <!-- Button Group -->
            <div class="amado-btn-group mt-30 mb-100">
                <a href="{{ route('register') }}" class="btn amado-btn mb-15 handlee">Sign Up</a>
                <a href="{{ route('login') }}" class="btn amado-btn handlee">Sign In</a>
            </div>
            <!-- Cart Menu -->
            <div class="cart-fav-search mb-100">
                {{-- <a href="cart.html" class="cart-nav handlee"><img src="img/core-img/cart.png" alt="" /> Cart
                    <span>(0)</span></a> --}}
                <a href="#" class="fav-nav handlee"><img src="img/core-img/favorites.png" alt="" />
                    Favourite</a>
                <a href="#" class="search-nav handlee"><img src="img/core-img/search.png" alt="" />
                    Search</a>
            </div>
            <!-- Social Button -->
            <div class="social-info d-flex justify-content-center">
                <a href="https://www.instagram.com/rahmatul_husni/" target="_blank"><i class="bi bi-instagram mx-2"
                        aria-hidden="true"></i></a>
                <a href="https://www.facebook.com/rimadiresti" target="_blank"><i class="bi bi-facebook mx-2"
                        aria-hidden="true"></i></a>
            </div>
        </header>
        <!-- Header Area End -->

        <!-- Product Catagories Area Start -->
        @yield('content')
        <!-- Product Catagories Area End -->
    </div>
    <!-- ##### Main Content Wrapper End ##### -->

    <!-- ##### Newsletter Area Start ##### -->
    <section class="newsletter-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-center">
                <!-- Newsletter Text -->
                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="newsletter-text mb-100">
                        <h2>Get in Touch with <span>Rahmatul Husni</span></h2>
                        <p>
                            Senang dapat berbagi cerita dengan anda.
                            <br>
                            Kirimkan alamat email anda pada kolom di bawah
                            untuk dapat berbincang lebih lanjut. <em>It's Free...!!</em>
                        </p>
                    </div>
                </div>
                <!-- Newsletter Form -->
                <div class="col-12 col-lg-6 col-xl-5">
                    <div class="newsletter-form mb-100">
                        <form action="#" method="post">
                            @csrf
                            {{-- <input type="email" name="email" class="nl-email" placeholder="Your E-mail" />
                            <input type="submit" value="Subscribe" /> --}}

                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Email anda..."
                                    aria-label="Email anda..." aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn amado-btn dongle" type="button"
                                        id="button-addon2">Subscribe</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Newsletter Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer_area clearfix">
        <div class="container">
            <div class="row align-items-center">
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-4">
                    <div class="single_widget_area">
                        <!-- Logo -->
                        <div class="footer-logo mr-50">
                            <a href="index.html"><img src="img/core-img/logo5.png" alt="" /></a>
                        </div>
                        <!-- Copywrite Text -->
                        <p class="copywrite">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            <a href="">rahmatulhusni.com</a>
                            ||
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            <br>
                            This website is made with
                            <i class="bi bi-heart-fill" aria-hidden="true"></i> by her
                            <a href="">husband</a>
                            .
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-8">
                    <div class="single_widget_area">
                        <!-- Footer Menu -->
                        <div class="footer_menu">
                            <nav class="navbar navbar-expand-lg justify-content-end">
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#footerNavContent" aria-controls="footerNavContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <i class="bi bi-list"></i>
                                </button>
                                <div class="collapse navbar-collapse" id="footerNavContent">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item">
                                            <a class="nav-link handlee" href="">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link handlee" href="">Artikel Ilmiah</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link handlee" href="">Psikologi Islam</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link handlee" href="">Tantangan Pemikiran</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link handlee" href="">English for Islamic Studies</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
    <script src="/js/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="/js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="/js/plugins.js"></script>
    <!-- Active js -->
    <script src="/js/active.js"></script>
</body>

</html>
