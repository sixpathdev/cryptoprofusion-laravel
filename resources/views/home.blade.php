@extends('layout')
@section('content')
@include('partials.header')

<!-- Start Intro Area -->
<div class="slide-area fix" data-stellar-background-ratio="0.6">
    <div class="display-table">
        <div class="display-table-cell">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <!-- Start Slider content -->
                        <div class="slide-content text-center">
                            <span class="title2">Invest and Earn Weekly with over 5% Weekly</span>
                            <div class="layer-1-3">
                                <a href="/register" class="ready-btn left-btn">Get started</a>
                            </div>
                        </div>
                        <!-- End Slider content -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Intro Area -->
<!-- Start Count area -->
<div class="counter-area fix area-padding-2">
    <div class="container">
        <!-- Start counter Area -->
        <div class="row">
            <div class="fun-content">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <!-- fun_text  -->
                    <div class="fun_text">
                        <span class="counter-icon"><i class="flaticon-035-savings"></i></span>
                        <span class="counter">$59,745,440</span>
                        <h4>Deposited</h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <!-- fun_text  -->
                    <div class="fun_text">
                        <span class="counter-icon"><i class="flaticon-034-reward"></i></span>
                        <span class="counter">472,991</span>
                        <h4>Members</h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <!-- fun_text  -->
                    <div class="fun_text">
                        <span class="counter-icon"><i class="flaticon-016-graph"></i></span>
                        <span class="counter">$3974544</span>
                        <h4>Total Payments</h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <!-- fun_text  -->
                    <div class="fun_text">
                        <span class="counter-icon"><i class="flaticon-043-world"></i></span>
                        <span class="counter">42 </span>
                        <h4>Countries</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Count area -->
<!-- Start Invest area -->
<div class="invest-area bg-color area-padding-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h3>Investment Plans</h3>
                    <p>You receive the percentage on choice of plan weekly for 6months and after 6months you get back
                        your capital.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="pricing-content">
                <div class="pricing-content-item col-md-3 col-sm-6 col-xs-12">
                    <div class="pri_table_list">
                        <div class="top-price-inner">
                            <div class="rates text-center"
                                style="display: flex;flex-direction:column;align-items:center;">
                                <span class="users h2" style="color: silver;">Silver</span><span
                                    class="prices">5%</span>
                            </div>
                        </div>
                        <ol class="pricing-text">
                            <li class="check">Minimum Invest : $300</li>
                            <li class="check">Maximum Invest : $40,000</li>
                        </ol>
                        <div class="price-btn blue" style="display:flex;justify-content:center;">
                            <a class="blue" href="/login">Deposit</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="pri_table_list">
                        <div class="top-price-inner">
                            <span class="base">Popular</span>
                            <div class="rates" style="display: flex;flex-direction:column;align-items:center;">
                                <span class="users h2" style="color: gold;">Gold</span>
                                <span class="prices">7%</span>
                            </div>
                        </div>
                        <ol class="pricing-text">
                            <li class="check">Minimum Invest : $45,000</li>
                            <li class="check">Maximum Invest : $80,000</li>
                        </ol>
                        <div class="price-btn blue" style="display:flex;justify-content:center;">
                            <a class="blue" href="/login">Deposit</a>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="pri_table_list">
                        <span class="base">Best sale</span>
                        <div class="top-price-inner">
                            <div class="rates" style="display: flex;flex-direction:column;align-items:center;">
                                <span class="users h2" style="color: gold;">Gold</span>
                                <span class="prices">6%</span>
                            </div>
                        </div>
                        <ol class="pricing-text">
                            <li class="check">Minimum Invest : $10,000</li>
                            <li class="check">Maximum Invest : $50,000</li>
                        </ol>
                        <div class="price-btn blue" style="display:flex;justify-content:center;">
                            <a class="blue" href="/login">Deposit</a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>
<!-- End Invest area -->
<!-- Start Support-service Area -->
<div class="support-service-area fix area-padding-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h3>100% Secured</h3>
                    <p>Help agencies to define their new business objectives and then create professional software.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="support-all">
            </div>
            <!-- Start About -->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="support-services ">
                    <a class="support-images" href="index.html#"><i class="flaticon-036-security"></i></a>
                    <div class="support-content">
                        <h4>Secure investment</h4>
                        <p>Investing with us is secured as we always keep to our promises. Our clients who have been with us can attest fully to this fact.</p>
                    </div>
                </div>
            </div>
            <!-- Start services -->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="support-services">
                    <a class="support-images" href="index.html#"><i class="flaticon-042-wallet"></i></a>
                    <div class="support-content">
                        <h4>Instant withdrawal</h4>
                        <p>As soon as payment is due, you get paid into your wallet address within 24 hours as stated. Our system regularly checks for users due for payment.</p>
                    </div>
                </div>
            </div>
            <!-- Start services -->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="support-services ">
                    <a class="support-images" href="index.html#"><i class="flaticon-032-report"></i></a>
                    <div class="support-content">
                        <h4>Verified security</h4>
                        <p>Be rest assured that investing and having an account with us is risk free as we stay always to ensure our reputation remains intact positively.</p>
                    </div>
                </div>
            </div>
            <!-- Start services -->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="support-services">
                    <a class="support-images" href="index.html#"><i class="flaticon-024-megaphone"></i></a>
                    <div class="support-content">
                        <h4>Customer support</h4>
                        <p>If having any troubles, our support mail is support@cryptoprofusion.com and we respond swiftly to our users.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- End Support-service Area -->
<!-- Start Self-area -->
<div class="self-area area-padding">
    <div class="container">
        <div class="row">
            <!-- column end -->
            <div class="col-md-6 col-sm-6 col-xs-12">
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="self-content">
                    <h5>Provides weekly profits while when investment is made with us. We help your satele to future
                        life and then create the road. Grow Money speedly without
                        any risk. </h5>
                    <span class="talk-text">- Zayn</span>
                </div>
            </div>
            <!-- column end -->
        </div>
    </div>
</div>
<!-- End Self-area -->
<!-- Start Work proses Area -->
<div class="work-proses fix bg-color area-padding-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h3>Referral bonus level</h3>
                    <p>Help agencies to define their new business objectives and then create professional software.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="work-proses-inner text-center">
                        <div class="col-md-12 col-sm-4 col-xs-12">
                            <div class="single-proses">
                                <div class="proses-content">
                                    <div class="proses-icon point-blue">
                                        <span class="point-view">01</span>
                                        <a href="index.html#"><i class="ti-briefcase"></i></a>
                                    </div>
                                    <div class="proses-text">
                                        <h4>Instant 5% commision on first payment of your referral</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End column -->
                        {{-- <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-proses">
                                <div class="proses-content">
                                    <div class="proses-icon point-orange">
                                        <span class="point-view">02</span>
                                        <a href="index.html#"><i class="ti-layers"></i></a>
                                    </div>
                                    <div class="proses-text">
                                        <h4>Level 02 instant 20% commission</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End column -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-proses last-item">
                                <div class="proses-content">
                                    <div class="proses-icon point-green">
                                        <span class="point-view">03</span>
                                        <a href="index.html#"><i class="ti-bar-chart-alt"></i></a>
                                    </div>
                                    <div class="proses-text">
                                        <h4>Level 03 instant 10% commission</h4>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <!-- End column -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Work proses Area -->
<!--Start payment-history area -->
<div class="payment-history-area bg-color fix area-padding-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h3>Deposit and withdrawals history</h3>
                    <p>Help agencies and individuals to save while working on business objectives.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="deposite-content">
                    <div class="diposite-box">
                        <h4>Last deposits</h4>
                        <span><i class="flaticon-005-savings"></i></span>
                        <div class="deposite-table">
                            <table>
                                <tr>
                                    <th>Name</th>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>Currency</th>
                                </tr>
                                <tr>
                                    <td>Gabriel Jacks</td>
                                    <td>May 06, 2020</td>
                                    <td>$1700</td>
                                    <td>Bitcoin</td>
                                </tr>
                                <tr>
                                    <td>Williams</td>
                                    <td>March 19, 2020</td>
                                    <td>$950</td>
                                    <td>Bitcoin</td>
                                </tr>
                                <tr>
                                    <td>Angel Wilson</td>
                                    <td>May 02, 2020</td>
                                    <td>$1700</td>
                                    <td>Bitcoin</td>
                                </tr>
                                <tr>
                                    <td>Anjel july</td>
                                    <td>Jan 05, 2020</td>
                                    <td>$1200</td>
                                    <td>Bitcoin</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="deposite-content">
                    <div class="diposite-box">
                        <h4>Last withdrawals</h4>
                        <span><i class="flaticon-042-wallet"></i></span>
                        <div class="deposite-table">
                            <table>
                                <tr>
                                    <th>Name</th>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>Currency</th>
                                </tr>
                                <tr>
                                    <td>James</td>
                                    <td>June 04, 2020</td>
                                    <td>$1600</td>
                                    <td>Bitcoin</td>
                                </tr>
                                <tr>
                                    <td>Peter Jackson</td>
                                    <td>May 14, 2020</td>
                                    <td>$2300</td>
                                    <td>Bitcoin</td>
                                </tr>
                                <tr>
                                    <td>Nisha</td>
                                    <td>March 05, 2020</td>
                                    <td>$8000</td>
                                    <td>Bitcoin</td>
                                </tr>
                                <tr>
                                    <td>Jackson Gabriel</td>
                                    <td>February 25, 2020</td>
                                    <td>$4500</td>
                                    <td>Bitcoin</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End payment-history area -->
<!-- Start Banner Area -->
<div class="banner-area area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="banner-all area-80 text-center">
                    <div class="banner-content">
                        <h3>Our investment plan is easily upgraded even during an ongoing investment</h3>
                        <a class="banner-btn" href="/register">Sign up now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Banner Area -->
{{-- <!-- Start reviews Area -->
<div class="reviews-area fix area-padding">
    <div class="container">
        <div class="row">
            <div class="reviews-top">
                <div class="col-md-5 col-sm-5 col-xs-12">
                    <div class="testimonial-inner">
                        <div class="review-head">
                            <h3>Our customer say about our company work</h3>
                            <p>The phrasal sequence of the Lorem Ipsum text is now so widespread and commonplace that
                                many DTP programmes can generate dummy. The phrasal sequence of the Lorem Ipsum text is
                                now so widespread and commonplace that many DTP programmes can generate dummy</p>
                            <a class="reviews-btn" href="/reviews">More
                                reviews</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-sm-7 col-xs-12">
                    <div class="reviews-content">
                        <!-- start testimonial carousel -->
                        <div class="testimonial-carousel item-indicator">
                            <div class="single-testi">
                                <div class="testi-text">
                                    <div class="clients-text">
                                        <div class="client-rating">
                                            <a href="index.html#"><i class="ti-star"></i></a>
                                            <a href="index.html#"><i class="ti-star"></i></a>
                                            <a href="index.html#"><i class="ti-star"></i></a>
                                            <a href="index.html#"><i class="ti-star"></i></a>
                                            <a href="index.html#"><i class="ti-star"></i></a>
                                        </div>
                                        <p>When replacing a multi-lined selection of text, the generated dummy text
                                            maintains the amount of lines. When replacing a selection. help agencies.
                                        </p>
                                    </div>
                                    <div class="testi-img ">
                                        <img src="img/review/1.jpg" alt="">
                                        <div class="guest-details">
                                            <h4>Hamilton</h4>
                                            <span class="guest-rev">Clients - <a href="index.html#">General
                                                    customer</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End single item -->
                            <div class="single-testi">
                                <div class="testi-text">
                                    <div class="clients-text">
                                        <div class="client-rating">
                                            <a href="index.html#"><i class="ti-star"></i></a>
                                            <a href="index.html#"><i class="ti-star"></i></a>
                                            <a href="index.html#"><i class="ti-star"></i></a>
                                            <a href="index.html#"><i class="ti-star"></i></a>
                                            <a href="index.html#"><i class="ti-star"></i></a>
                                        </div>
                                        <p>When replacing a multi-lined selection of text, the generated dummy text
                                            maintains the amount of lines. When replacing a selection. help agencies.
                                        </p>
                                    </div>
                                    <div class="testi-img ">
                                        <img src="img/review/2.jpg" alt="">
                                        <div class="guest-details">
                                            <h4>Angel lima</h4>
                                            <span class="guest-rev">Clients - <a href="index.html#">General
                                                    customer</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End reviews Area --> --}}
<!-- Start FAQ area -->
<div class="faq-area bg-color area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h3>Some important FAQ</h3>
                    <p>Here are popular questions and their respectives replies given.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Start Column Start -->
            <div class="col-md-7 col-sm-6 col-xs-12">
                <div class="company-faq">
                    <div class="faq-full">
                        <div class="faq-details">
                            <div class="panel-group" id="accordion">
                                <!-- Panel Default -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="check-title">
                                            <a data-toggle="collapse" class="active" data-parent="#accordion"
                                                href="index.html#check1">
                                                <span class="acc-icons"></span>Why should I invest in Bitcoin
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="check1" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <p>
                                                Bitcoin’s protocol limits it to 21 million coins in total, which gives
                                                it scarcity, and therefore potentially gives it value… if there is
                                                demand for it. There is no central authority that can unilaterally
                                                change that limit;
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Panel Default -->
                                <!-- Panel Default -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="check-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="index.html#check2">
                                                <span class="acc-icons"></span>Is Bitcoin a Scam.
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="check2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>
                                                Initially most clients had their doubts about the emergence of
                                                cryptocurrency, and the strange fact that it is not controlled by a
                                                single body. 7years ago, those having 5 BTC are now major millionaires,
                                                having businesses and investments in places.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Panel Default -->
                                <!-- Panel Default -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="check-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="index.html#check3">
                                                <span class="acc-icons"></span>Should I Trust This Platform?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="check3" class="panel-collapse collapse ">
                                        <div class="panel-body">
                                            <p>
                                                Same way bitcoin was a probability initially, but now everyone is
                                                hopping on the ride seeing it is a promising one. Trust us to invest and
                                                issue your profits weekly.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Panel Default -->
                                <!-- Panel Default -->
                                {{-- <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="check-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="index.html#check4">
                                                <span class="acc-icons"></span>We are the best online flatform
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="check4" class="panel-collapse collapse ">
                                        <div class="panel-body">
                                            <p>
                                                When replacing a multi-lined selection of text, the generated dummy text
                                                maintains the amount of lines. When replacing a selection of text within
                                                a single line, the amount of words is roughly being maintained.
                                            </p>
                                        </div>
                                    </div>
                                </div> --}}
                                <!-- End Panel Default -->
                            </div>
                        </div>
                        <!-- End FAQ -->
                    </div>
                </div>
            </div>
            <!-- End Column -->
            <div class="col-md-5 col-sm-6 col-xs-12">
                <div class="faq-content">
                    <h4>Have a any question?</h4>
                    <div class="faq-quote">
                        <div class="row">
                            <form id="contactForm" method="POST" action="/contact-us" class="contact-form">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" id="name" class="form-control" placeholder="Name" required
                                        data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                    <input type="email" class="email form-control" id="email" placeholder="Email"
                                        required data-error="Please enter your email">
                                    <div class="help-block with-errors"></div>
                                    <input type="text" id="msg_subject" class="form-control" placeholder="Subject"
                                        required="" data-error="Please enter your message subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <textarea id="message" rows="7" placeholder="Massage" class="form-control" required
                                        data-error="Write your message"></textarea>
                                    <div class="help-block with-errors"></div>
                                    <button type="submit" id="submit" class="quote-btn">Submit</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Column -->
        </div>
    </div>
</div>
<!-- End FAQ area -->

@include('partials.footer')
@include('partials.scripts')
@endsection