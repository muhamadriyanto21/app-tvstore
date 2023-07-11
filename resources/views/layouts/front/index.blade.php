<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="front/img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Tv Store | Shop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="{{ asset('front/css/linearicons.css') }}">
	<link rel="stylesheet" href="{{ asset('front/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('front/css/themify-icons.css') }}">
	<link rel="stylesheet" href="{{ asset('front/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('front/css/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ asset('front/css/nice-select.css') }}">
	<link rel="stylesheet" href="{{ asset('front/css/nouislider.min.css') }}">
	<link rel="stylesheet" href="{{ asset('front/css/ion.rangeSlider.css') }}" />
	<link rel="stylesheet" href="{{ asset('front/css/ion.rangeSlider.skinFlat.css') }}" />
	<link rel="stylesheet" href="{{ asset('front/css/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ asset('front/css/main.css') }}">
    {{-- my css for change mobile size navbar --}}
    <style>
        @media (max-width: 767px) {
            .navbar {
                padding-top: 20px !important;
                padding-bottom: 20px !important;
            }
        }
        </style>
</head>

<body>
    {{-- @php
    use Illuminate\Support\Facades\Request;
    use Collective\Html\FormFacade as Form;
    use Collective\Html\HtmlFacade as Html;
@endphp --}}
<!-- Start Header Area -->
<header class="header_area sticky-header">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light main_box pl-0">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="{{ route('front.home') }}">TV Store</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="{{ route('front.home') }}"><i class="fa-solid fa-house"></i>  Home</a></li>
                        <li class="nav-item">
                            <a href="{{ route('front.products') }}" class="nav-link"><i class="fa-solid fa-cart-shopping"></i>  Products</a>
                        </li>
                        {{-- <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                             aria-expanded="false"><i class="fa-solid fa-webhook"></i><i class="fa-brands fa-slack"></i>  Blog</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="{{ route('front.blog') }}">Blog</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('front.single-blog') }}">Blog Details</a></li>
                            </ul>
                        </li> --}}
                        {{-- <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                             aria-expanded="false"><i class="fa-solid fa-user"></i>  Pages</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="{{ route('front.login') }}">Login</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('front.tracking') }}">Tracking</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('front.elements') }}">Elements</a></li>
                            </ul>
                        </li> --}}
                        <li class="nav-item"><a class="nav-link" href="{{ route('front.aboutus') }}"><i class="fa-solid fa-address-card"></i>  About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('front.contact') }}"><i class="fa-solid fa-address-card"></i>  Contact</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        {{-- <li class="nav-item"><a href="#" class="cart"><span class="ti-bag"></span></a></li> --}}
                        <li class="nav-item">
                            <a title="Login" href="{{ route('front.login') }}"><span class="fa-solid fa-user"></span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="search_input" id="search_input_box">
        <div class="container">
            <form class="d-flex justify-content-between">
                <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                <button type="submit" class="btn"></button>
                <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
            </form>
        </div>
    </div>
</header>
<!-- End Header Area -->

    @yield('content')

<!-- start footer Area -->
<footer class="footer-area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-3  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>About Us</h6>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore
                        magna aliqua.
                    </p>
                </div>
            </div>
            <div class="col-lg-4  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Newsletter</h6>
                    <p>Stay update with our latest</p>
                    <div class="" id="mc_embed_signup">

                        <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                         method="get" class="form-inline">

                            <div class="d-flex flex-row">

                                <input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
                                 required="" type="email">


                                <button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                                <div style="position: absolute; left: -5000px;">
                                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                </div>

                                <!-- <div class="col-lg-4 col-md-4">
                                            <button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
                                        </div>  -->
                            </div>
                            <div class="info"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3  col-md-6 col-sm-6">
                <div class="single-footer-widget mail-chimp">
                    <h6 class="mb-20">Instragram Feed</h6>
                    <ul class="instafeed d-flex flex-wrap">
                        <li><img src="{{ asset('front/img/i1.jpg') }}" alt=""></li>
                        <li><img src="{{ asset('front/img/i2.jpg') }}" alt=""></li>
                        <li><img src="{{ asset('front/img/i3.jpg') }}" alt=""></li>
                        <li><img src="{{ asset('front/img/i4.jpg') }}" alt=""></li>
                        <li><img src="{{ asset('front/img/i5.jpg') }}" alt=""></li>
                        <li><img src="{{ asset('front/img/i6.jpg') }}" alt=""></li>
                        <li><img src="{{ asset('front/img/i7.jpg') }}" alt=""></li>
                        <li><img src="{{ asset('front/img/i8.jpg') }}" alt=""></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Follow Us</h6>
                    <p>Let us be social</p>
                    <div class="footer-social d-flex align-items-center">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
            <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Website <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">TV Store</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
        </div>
    </div>
</footer>
<!-- End footer Area -->




	<script src="{{ asset('front/js/vendor/jquery-2.2.4.min.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="{{ asset('front/js/vendor/bootstrap.min.js') }}"></script>
	<script src="{{ asset('front/js/jquery.ajaxchimp.min.js') }}"></script>
	<script src="{{asset('front/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{asset('front/js/jquery.sticky.js')}}"></script>
	<script src="{{ asset('front/js/nouislider.min.js') }}"></script>
	<script src="{{ asset('front/js/countdown.js') }}"></script>
	<script src="{{ asset('front/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="{{asset('front/js/gmaps.min.js')}}"></script>
	<script src="{{ asset('front/js/main.js') }}"></script>
        <script>
    function togglePasswordVisibility() {
        var passwordInput = document.getElementById("password");
        var toggleIcon = document.getElementById("toggleIcon");

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            toggleIcon.classList.remove("fa-eye-slash");
            toggleIcon.classList.add("fa-eye");
        } else {
            passwordInput.type = "password";
            toggleIcon.classList.remove("fa-eye");
            toggleIcon.classList.add("fa-eye-slash");
        }
    }
    </script>

</body>

</html>
