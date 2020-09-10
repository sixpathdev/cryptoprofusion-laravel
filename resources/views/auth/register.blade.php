@extends('layout')
@section('content')
@include('partials.header')
<!-- Start breadcumb Area -->
<div class="page-area">
    <div class="breadcumb-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb text-center">
                    <div class="section-headline white-headline">
                        <h3>REGISTRATION</h3>
                    </div>
                    <ul class="breadcrumb-bg">
                        <li class="home-bread"><a href="/" style="color: white;">Home</a></li>
                        <li>REGISTRATION</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End breadcumb Area -->
<!-- Start Slider Area -->
<div class="login-area page-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="login-page">
                    <div class="login-form">
                        <h4 class="login-title">REGISTRATION</h4>
                        <div class="row">
                        @if (session("error"))
                        <div class="alert alert-danger" role="alert">{{ session("error") }}</div>
                        @endif
                            <form id="contactForm" method="POST" action="/register" class="log-form">
                                @csrf
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <label for="fullname">Full Name</label>
                                    <input type="text" id="fullname" name="fullname" class="form-control" placeholder="E.g John Doe"
                                        required data-error="Please enter your Full name">
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <label for="fullname">Email Address</label>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Email address"
                                        required data-error="Please enter your Email Address">
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password"
                                        required data-error="Please enter your password">
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <label for="c_password">Confirm password</label>
                                    <input type="password" name="password_confirmation" id="c_password" class="form-control" placeholder="Confirm Password"
                                        required data-error="Please enter your correct password">
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <label for="ref">Who referred you? (Referral's email address)</label>
                                    <input type="email" name="ref" class="form-control" placeholder="referral@gmail.com" id="ref" value="{{ isset($_GET['ref']) ? base64_decode($_GET['ref']) : '' }}">
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <label for="fullname">Phone</label>
                                    <input type="tel" id="phone" name="phone" class="form-control" placeholder="+1 312-883-3771"
                                        required data-error="Telephone contact">
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <button type="submit" name="submit" class="login-btn">Register</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="clear"></div>
                                    <div class="sign-icon">
                                        <div class="acc-not">Already have an account? <a href="/login"
                                                style="color: #76A140"> Login</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('partials.footer')
@include('partials.scripts')
@endsection