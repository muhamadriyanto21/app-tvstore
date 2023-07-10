{{-- @php
    use Illuminate\Support\Facades\Request;
    use Collective\Html\FormFacade as Form;
    use Collective\Html\HtmlFacade as Html;
@endphp --}}
<!-- Start Header Area -->
<header class="header_area sticky-header">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
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
                            <a href="{{ route('front.category') }}" class="nav-link"><i class="fa-solid fa-cart-shopping"></i>  Products</a>
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
                        <li class="nav-item"><a class="nav-link" href="{{ route('front.contact') }}"><i class="fa-solid fa-address-card"></i>  About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('front.contact') }}"><i class="fa-solid fa-address-card"></i>  Contact</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        {{-- <li class="nav-item"><a href="#" class="cart"><span class="ti-bag"></span></a></li> --}}
                        <li class="nav-item">
                            <button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
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
