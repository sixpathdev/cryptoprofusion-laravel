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
                <div class="contact-icon text-center">
                    <div class="single-icon">
                        <span style="display: block;margin-bottom: 15px;">Office Address:</span>
                        <p>
                            Place Centrale 7 <br>
                            1305 Penthalaz, Switzerland
                        </p>
                    </div>
                </div>
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