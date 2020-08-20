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
                        <h3>Login</h3>
                    </div>
                    <ul class="breadcrumb-bg">
                        <li class="home-bread"><a href="/" style="color: white;">Home</a></li>
                        <li>resetpassword</li>
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
                        <h4 class="login-title">Reset password</h4>
                        <div class="row">
                            @if (session("success"))
                            <div class="alert alert-success" role="alert">{{ session("success") }}</div>
                            @endif
                            @if (session("error"))
                            <div class="alert alert-danger" role="alert">{{ session("error") }}</div>
                            @endif
                            <form id="contactForm" method="POST" action="/resetpassword" class="log-form">
                                @csrf
                                @method('PUT')
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                <input type="hidden" name="verifycode" value="{{$_GET['verifycode']}}">
                                    <input type="password" name="newpassword" class="form-control" placeholder="New password"
                                        required data-error="Please enter your Email Address">
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input type="password" name="newpassword-confirm" class="form-control" placeholder="Password"
                                        required data-error="Enter same password as in above field">
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <button type="submit" id="submit" class="login-btn">Update password</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
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