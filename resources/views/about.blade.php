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
                        <h3>About us</h3>
                    </div>
                    <ul class="breadcrumb-bg">
                        <li class="home-bread">Home</li>
                        <li>About us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End breadcumb Area -->
<!-- about-area start -->
<div class="about-area page-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="about-image">
                    <img src="img/about/ab.jpg" alt="">
                    <div class="video-content">
                        <a href="https://www.youtube.com/watch?v=O33uuBh6nXA" class="video-play vid-zone">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="about-content">
                    <h5>Our intention is to simplify this to the understanding of even a 10-year-old. So, to smoothly do
                        this, we will be discussing Cryptoprofusion under these subheadings;</h5>
                    <div class="about-details">
                        <ul class="marker-list">
                            <li>Cryptoprofusion: Company Overview</li>
                            <li>How does it work?</li>
                            <li>How is the 5% weekly ROI Generated?</li>
                            <li>How do I register?</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- column end -->
        </div>
    </div>
</div>
<!-- about-area end -->
<div class="about-feature-area bg-color area-padding-2">
    <div class="container">
        <!-- end Row -->
        <div class="row">
            <div class="about-mission">
                <!-- Start column -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="mission-about">
                        <div class="mission-icon">
                            <i class="flaticon-004-bar-chart"></i>
                        </div>
                        <div class="mission-text">
                            <h5>Cryptoprofusion: Company Overview</h5>
                            <p>Cryptoprofusion is a robust multi-dimensional crypto-financial platform whose aim is to
                                give individuals as well as corporations
                                access to life-transforming financial services using the Ethereum Blockchain.</p>
                            <p>Cryptoprofusion company is made up of experts in computer science, financial computing,
                                software Engineering, and Blockchain developers who have years of experience in
                                lecturing, research, trading, and financial services. Our exparts where able to develop
                                a trading bot that trades Forex without fail.
                                We called this the Cryptoprofusion Breakthrough Trading System (CBTS).</p>
                        </div>
                    </div>
                </div>
                <!-- Start column -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="mission-about">
                        <div class="mission-icon">
                            <i class="flaticon-023-management"></i>
                        </div>
                        <div class="mission-text">
                            <h5>How does it work?</h5>
                            <p>The Cryptoprofusion company pays investors 5% of their investment amount in USD weekly
                                for 6 months.
                                At the end of the 6th month, 100% of the initial invested amount will also be sent to
                                the investor.</p>
                            <p>To further clarify this, if you invest $1000, you will receive $50 weekly for 6 months
                                i.e a total of $1,200 at the end of the 6th month, you will also receive $1000 which is
                                100% of your investment.
                                Thus, for an investment amount of $1000, you will receive a total of $2,200 in 6 months.
                            </p>
                            <p>Note that, Investments and payout are made in BTC.</p>
                            <span class="d-block">Minimum investment.........$300</span>
                            <span class="d-block">Maximum investment............$80,000</span>
                        </div>
                    </div>
                </div>
                <!-- End column -->
                <!-- Start column -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="mission-about">
                        <div class="mission-icon">
                            <i class="flaticon-023-management"></i>
                        </div>
                        <div class="mission-text">
                            <h5>How is the 5% Weekly Return Generated?</h5>
                            <p>The investors’ capital is used to trade Forex using the Cryptoprofusion Breakthrough
                                Trading Bot as explained above. The bot over the past 3 year recorded a 99.9% success
                                rate. The truth is that CBTS generate
                                almost a 50% of investment monthly and investor are paid 20% of there investment
                                monthly.</p>
                        </div>
                    </div>
                </div>
                <!-- End column -->
                <!-- Start column -->
                {{-- <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="mission-about">
                        <div class="mission-icon">
                            <i class="flaticon-023-management"></i>
                        </div>
                        <div class="mission-text">
                            <h5>Is Bluekey Registered and Regulated?</h5>
                            <p>The BlueKey is fully registered and it is currently working on obtaining its license for
                                its Forex Brokerage platform.</p>
                        </div>
                    </div>
                </div> --}}
                <!-- End column -->
                <!-- Start column -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="mission-about">
                        <div class="mission-icon">
                            <i class="flaticon-023-management"></i>
                        </div>
                        <div class="mission-text">
                            <h5>Can I top up my investment at anytime?</h5>
                            <p>Yes, you can top up your investment at anytime and as many times as possible.</p>
                        </div>
                    </div>
                </div>
                <!-- End column -->
                <!-- Start column -->
                <div class="col-md-10 col-sm-10 col-xs-12" style="margin-left: 7%">
                    <div class="mission-about">
                        <div class="mission-icon">
                            <i class="flaticon-023-management"></i>
                        </div>
                        <div class="mission-text">
                            <h5>Very simple registration</h5>
                            <p>Register and Verify your account by uploading a copy of any of the below identification
                                cards;</p>
                            <p>International Passport.</p>
                            <p>Drivers License</p>
                            <p>Staff Identification. Or any I.D with your photo and detailed information. (make sure
                                your ID file size is below 2mb). After upload, you get verified in less than 24 hours.
                            </p>
                            <p>Update your profile with the bitcoin wallet address where you will send your Investment
                                from as well as receive your weekly ROI.</p>
                            <p>After updating profile, you are then free to start investing as much as you can.</p>
                            <p>On every payment made by you to the wallet address specified, you are required to upload
                                a proof of payment which after verified within 24 hours of payment, your payment would
                                be
                                approved.</p>
                            <p><b>Now relax as your weekly earning will be sent to you every week.</b></p>
                        </div>
                    </div>
                </div>
                <!-- End column -->
            </div>
        </div>
    </div>
</div>
<!-- Start About Area -->
{{-- <div class="about-feature-area bg-color area-padding-2">
            <div class="container">
                <!-- end Row -->
                <div class="row">
                    <div class="about-mission">
                        <!-- Start column -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="mission-about">
                                <div class="mission-icon">
                                    <i class="flaticon-004-bar-chart"></i>
                                </div>
                                <div class="mission-text">
                                    <h4>Our Mission</h4>
                                    <p>The phrasal sequence of the Lorem Ipsum text is now so widespread and commonplace that many DTP programme</p>
                                </div>
                            </div>
                        </div>
                        <!-- Start column -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="mission-about">
                                <div class="mission-icon">
                                    <i class="flaticon-031-release"></i>
                                </div>
                                <div class="mission-text">
                                    <h4>Our Vision</h4>
                                    <p>The phrasal sequence of the Lorem Ipsum text is now so widespread and commonplace that many DTP programme</p>
                                </div>
                            </div>
                        </div>
                        <!-- Start column -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="mission-about">
                                <div class="mission-icon">
                                    <i class="flaticon-023-management"></i>
                                </div>
                                <div class="mission-text">
                                    <h4>Our Experience</h4>
                                    <p>The phrasal sequence of the Lorem Ipsum text is now so widespread and commonplace that many DTP programme</p>
                                </div>
                            </div>
                        </div>
                        <!-- End column -->
                    </div>
                </div>
            </div>
        </div> --}}
<!-- End About Area -->

@include('partials.footer')
@include('partials.scripts')
@endsection