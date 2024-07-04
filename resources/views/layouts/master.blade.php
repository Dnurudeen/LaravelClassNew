<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="assets/images/alpher.png" type="image/x-icon">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('assets/web/assets/mobirise-icons2/mobirise2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/tether/tether.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap-reboot.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/animatecss/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dropdown/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/formstyler/jquery.formstyler.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/formstyler/jquery.formstyler.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/datepicker/jquery.datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/socicon/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/theme/css/style.css') }}">
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"></noscript>
    <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

</head>
<body>
    <header class="menu menu3 cid-tvKC3zTVkY" once="menu" id="menu3-0">
        <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
            <div class="container">
                <div class="navbar-brand">
                    <span class="navbar-logo">
                        <a href="index.html">
                            <img src="assets/images/alpher.png" alt="logo" style="height: 3rem;">
                        </a>
                    </span>

                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-success text-primary display-4" href="{{ url('/') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link link text-success text-primary display-4" href="{{ url('/about-us') }}">About us</a></li>
                        <li class="nav-item"><a class="nav-link link text-success text-primary display-4" href="{{ url ('/academy') }}">Academy</a></li>
                        <li class="nav-item"><a class="nav-link link text-success text-primary display-4" href="career.html">Career</a>
                        </li><li class="nav-item"><a class="nav-link link text-success text-primary display-4" href="resource.html">Resource</a></li><li class="nav-item"><a class="nav-link link text-success text-primary display-4" href="contact.html">Contacts</a></li></ul>
                    <div class="icons-menu">

                            <span class="p-2 mbr-iconfont socicon-facebook socicon" style="color: rgb(17, 27, 89); fill: rgb(17, 27, 89); font-size: 20px;"></span>


                            <span class="p-2 mbr-iconfont socicon-twitter socicon" style="color: rgb(17, 27, 89); fill: rgb(17, 27, 89); font-size: 20px;"></span>


                            <span class="p-2 mbr-iconfont socicon-instagram socicon" style="color: rgb(17, 27, 89); fill: rgb(17, 27, 89); font-size: 20px;"></span>


                    </div>

                </div>
            </div>
        </nav>
    </header>

    @yield('content')

    <footer class="footer4 cid-tvKNmZML7F" once="footers" id="footer4-7">
        <div class="container">
            <div class="row mbr-white">
                <div class="col-6 col-lg-3">
                    <div class="media-wrap col-md-8 col-12">
                        <a href="index.html">
                            <img src="assets/images/alpher-1.png" alt="logo-footer">
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7"><strong>Who we Are</strong></h5>
                    <p class="mbr-text mbr-fonts-style mb-4 display-4">We are a Company that is committed to Tech Training &amp; Consultancy&nbsp;<br></p>
                    <h5 class="mbr-section-subtitle mbr-fonts-style mb-3 display-7">
                        <strong>Follow Us</strong>
                    </h5>
                    <div class="social-row display-7">
                        <div class="soc-item">
                            <a href="https://twitter.com/mobirise" target="_blank">
                                <span class="mbr-iconfont socicon socicon-facebook"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://twitter.com/mobirise" target="_blank">
                                <span class="mbr-iconfont socicon socicon-twitter"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://twitter.com/mobirise" target="_blank">
                                <span class="mbr-iconfont socicon socicon-instagram"></span>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7"><strong>Links</strong></h5>
                    <ul class="list mbr-fonts-style display-4">
                        <li class="mbr-text item-wrap"><span style="font-size: 1.1rem;"><a href="index.html" class="text-success">Home</a></span></li><li class="mbr-text item-wrap"><span style="font-size: 1.1rem;"><a href="about.html" class="text-success">About Us</a></span></li><li class="mbr-text item-wrap"><a href="academy.html" class="text-success">Academy</a></li><li class="mbr-text item-wrap"><a href="career.html" class="text-success">Career</a></li><li class="mbr-text item-wrap"><a href="resource.html" class="text-success">Resource</a></li><li class="mbr-text item-wrap"><span style="font-size: 1.1rem;"><a href="contact.html" class="text-success">Contact</a></span><br></li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7">
                        <strong>Our Contacts&nbsp;</strong></h5>
                    <ul class="list mbr-fonts-style display-4">
                        <li class="mbr-text item-wrap"><span style="font-size: 1.1rem;"><a href="tel:08187667876" class="text-success">(234) 813 456 654</a></span></li><li class="mbr-text item-wrap"><span style="font-size: 1.1rem;"><a href="mailto:info@alpherlimited.com" class="text-success">info@alpherlimited.com</a></span></li><li class="mbr-text item-wrap"><span style="font-size: 1.1rem;">23 Demo Street, Lagos,</span></li><li class="mbr-text item-wrap"><span style="font-size: 1.1rem;">Nigeria</span><br></li>
                    </ul>
                </div>
                <div class="col-12 mt-4">
                    <p class="mbr-text mb-0 mbr-fonts-style copyright align-center display-7">
                        © Copyright 2023 Alpher Ltd - All Rights Reserved
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <section style="background-color: #fff; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif; color:#aaa; font-size:12px; padding: 0; align-items: center; display: flex;"><p style="flex: 0 0 auto; margin:0; padding-right:1rem;"><a href="https://mobirise.site/s" style="color:#aaa;"></a></p></section><script src="assets/web/assets/jquery/jquery.min.js"></script>  <script src="assets/popper/popper.min.js"></script>  <script src="assets/tether/tether.min.js"></script>  <script src="assets/bootstrap/js/bootstrap.min.js"></script>  <script src="assets/smoothscroll/smooth-scroll.js"></script>  <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>  <script src="assets/dropdown/js/nav-dropdown.js"></script>  <script src="assets/dropdown/js/navbar-dropdown.js"></script>  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>  <script src="assets/formstyler/jquery.formstyler.js"></script>  <script src="assets/formstyler/jquery.formstyler.min.js"></script>  <script src="assets/datepicker/jquery.datetimepicker.full.js"></script>  <script src="assets/theme/js/script.js"></script>  <script src="assets/formoid/formoid.min.js"></script>


 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
    <input name="animation" type="hidden">
</body>
</html>

{{-- END --}}
