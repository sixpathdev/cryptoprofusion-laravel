@extends('layout')
@section('content')

<div id="preloader"></div>
<header class="header-one">
    <!-- Start top bar -->
    <div class="topbar-area fix hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="topbar-left">
                        <ul>
                            <li><a href="index.html#"><i class="fa fa-envelope"></i> support@cryptoprofusion.com</a>
                            </li>
                            <li><a href="index.html#"><i class="fa fa-phone"></i>+1 312-883-3771</a></li>
                        </ul>
                    </div>
                </div>
                <div class=" col-md-6 col-sm-6">
                    <div class="topbar-right">
                        <div class="top-social">
                            {{-- <ul>
                                <li><a href="index.html#"><i class="fa fa-skype"></i></a></li>
                                <li><a href="index.html#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="index.html#"><i class="fa fa-google"></i></a></li>
                                <li><a href="index.html#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="index.html#"><i class="fa fa-facebook"></i></a></li>
                            </ul> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End top bar -->
    <!-- header-area start -->
    <div id="sticker" class="header-area hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="row">
                        <!-- logo start -->
                        <div class="col-md-3 col-sm-3">
                            <div class="logo">
                                <!-- Brand -->
                                <a class="navbar-brand page-scroll white-logo" href="/">
                                    <img src="img/logo/logo3.png" alt="">
                                </a>
                                <a class="navbar-brand page-scroll black-logo" href="/">
                                    <img src="img/logo/logo.png" alt="">
                                </a>
                            </div>
                            <!-- logo end -->
                        </div>
                        <div class="col-md-9 col-sm-9">
                            <div class="header-right-link">
                                <!-- search option end -->
                                <a class="s-menu" href="/login">Login</a>
                            </div>
                            <!-- mainmenu start -->
                            <nav class="navbar navbar-default">
                                <div class="collapse navbar-collapse" id="navbar-example">
                                    <div class="main-menu">
                                        <ul class="nav navbar-nav navbar-right">
                                            {{-- <li><a class="pages"
                                                    href="/">Home</a>
                                                <ul class="sub-menu">
                                                    <li><a href="/">Home
                                                            01</a></li>
                                                    <li><a href="http://rockstheme.com/rocks/aievari-live/index-2.html">Home
                                                            02</a></li>
                                                </ul>
                                            </li> --}}
                                            <li><a href="/about-us">About
                                                    us</a></li>
                                            <li><a class="pages" href="index.html#">Pages</a>
                                                <ul class="sub-menu">
                                                    <li><a href="/login">Login</a>
                                                    </li>
                                                    <li><a href="/register">Register</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="/contact-us">Contact
                                                    us</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <!-- mainmenu end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-area end -->
    <!-- mobile-menu-area start -->
    <div class="mobile-menu-area hidden-lg hidden-md hidden-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile-menu">
                        <div class="logo">
                            <a href="/"><img src="img/logo/logo.png" alt="" /></a>
                        </div>
                        <nav id="dropdown">
                            <ul>
                                {{-- <li><a class="pages" href="/">Home</a>
                                    <ul class="sub-menu">
                                        <li><a href="/">Home 01</a>
                                        </li>
                                        <li><a href="http://rockstheme.com/rocks/aievari-live/index-2.html">Home 02</a>
                                        </li>
                                    </ul>
                                </li> --}}
                                <li><a href="/about-us">About us</a></li>
                                <li><a href="http://rockstheme.com/rocks/aievari-live/investment.html">Investment</a>
                                </li>
                                <li><a class="pages" href="index.html#">Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="http://rockstheme.com/rocks/aievari-live/team.html">team</a></li>
                                        <li><a href="http://rockstheme.com/rocks/aievari-live/faq.html">FAQ</a></li>
                                        <li><a href="http://rockstheme.com/rocks/aievari-live/review.html">Reviews</a>
                                        </li>
                                        <li><a href="/login">Login</a></li>
                                        <li><a href="http://rockstheme.com/rocks/aievari-live/signup.html">Register</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="pages" href="index.html#">Blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="http://rockstheme.com/rocks/aievari-live/blog.html">Blog grid</a>
                                        </li>
                                        <li><a href="http://rockstheme.com/rocks/aievari-live/blog-sidebar.html">Blog
                                                Sidebar</a></li>
                                        <li><a href="http://rockstheme.com/rocks/aievari-live/blog-details.html">Blog
                                                Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="/contact-us">contacts</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile-menu-area end -->
</header>
<!-- header end -->
<!-- Start breadcumb Area -->
<div class="page-area">
    <div class="breadcumb-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb text-center">
                    <div class="section-headline white-headline">
                        <h3>Contact us</h3>
                    </div>
                    <ul class="breadcrumb-bg">
                        <li class="home-bread">Home</li>
                        <li>Contact us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End breadcumb Area -->
<!-- Start contact Area -->
<div class="contact-area page-padding">
    <div class="container">
        <div class="row">
            <div class="contact-inner">
                <!-- Start contact icon column -->
                <div class="col-md-5 col-sm-5 col-xs-12">
                    <div class="contact-icon text-center">
                        <div class="single-icon">
                            <i class="fa fa-mobile"></i>
                            <p>
                                Call : +1 312-883-3771<br>
                                <span>Monday-Friday (9am-5pm)</span>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Start contact icon column -->
                <div class="col-md-5 col-sm-5 col-xs-12">
                    <div class="contact-icon text-center">
                        <div class="single-icon">
                            <i class="fa fa-envelope-o"></i>
                            <p>
                                Email : support@cryptoprofusion.com<br>
                                <span>Web: www.cryptoprofusion.com</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <!-- Start Map -->
                <div class="map-area">
                    <div id="googleMap" style="width:100%;height:380px;"></div>
                </div>
                <!-- End Map -->
            </div>
            <!-- Start Left contact -->
            <div class="col-md-6 col-sm-6 col-xs-12">
                @if (session("success"))
                <div class="alert alert-success" role="alert">{{ session("success") }}</div>
                @endif
                @if (session("error"))
                <div class="alert alert-danger" role="alert">{{ session("error") }}</div>
                @endif
                <div class="contact-form">
                    <div class="row">
                        <form id="contactFormNull" method="POST" action="/contactsupport" class="contact-form">
                            @csrf
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="name" class="form-control" name="name" placeholder="Name"
                                    required data-error="Please enter your name">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="email" class="email form-control" name="email" id="email"
                                    placeholder="Email" required data-error="Please enter your email">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <input type="text" id="msg_subject" class="form-control" name="subject"
                                    placeholder="Subject" required data-error="Please enter your message subject">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <textarea id="message" rows="7" placeholder="Message" name="message"
                                    class="form-control" required data-error="Write your message"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                <button type="submit" id="submit" name="submit" class="add-btn contact-btn">Send
                                    Message</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Left contact -->
        </div>
    </div>
</div>
@include('partials.footer')
@include('partials.scripts')
@endsection