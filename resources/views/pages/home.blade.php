
@extends('layouts.default')
@section('content')

<!-- Slider -->
<div id="mainSliderWrapper">
    <div id="mainSlider">
        <div class="slide">
            <div class="img--holder" style="background-image: url(/assets/images/slider/slide1.jpg);"></div>
            <div class="slide-content center">
                <div class="vert-wrap container">
                    <div class="vert">
                        <div class="container">
                            <h4 data-animation="zoomIn" data-animation-delay="0.5s">Looking for Right Vehicle</h4>
                            <h3 data-animation="scaleOut" data-animation-delay="0.2s">Repair Service?</h3>
                            <p data-animation="fadeIn" data-animation-delay="0.9s">Get your fair-price repair estimates</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="img--holder" style="background-image: url(/assets/images/slider/slide2.jpg);"></div>
            <div class="slide-content container left">
                <div class="vert-wrap">
                    <div class="vert">
                        <div class="container">
                            <h4 data-animation="fadeInLeft" data-animation-delay="0.2s">Full Service of</h4>
                            <h3 data-animation="flipInX" data-animation-delay="0.8s">Auto Repair</h3>
                            <h3 data-animation="flipInX" data-animation-delay="1.2s">& Maintenance</h3>
                            <p data-animation="fadeIn" data-animation-delay="1.5s">Over 35 Years Of Quality Auto Service</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="img--holder" style="background-image: url(/assets/images/slider/slide3.jpg);"></div>
            <div class="slide-content container center">
                <div class="vert-wrap">
                    <div class="vert">
                        <div class="container">
                            <h4 data-animation="zoomIn" data-animation-delay="0.8s">Trust Your Vehicle to</h4>
                            <h3 data-animation="fadeInUp" data-animation-delay="0.2s">Certified</h3>
                            <h3 data-animation="fadeInUp" data-animation-delay="0.5s">Technicians</h3>
                            <p data-animation="fadeIn" data-animation-delay="1.2s">SERVICE, MAINTENANCE & REPAIR BY THE CERTIFIED SERVICE EXPERTS</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Slider -->
<!-- Content  -->
<div id="pageContent">
    <!-- Under Slider Banner -->
    <div class="block banner-under-slider">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <h2>After Hours</h2>
                            <h2 class="h-lg text-right"><span class="color">Drop-OFF</span></h2>
                        </div>
                        <div class="col-md-6">
                            <p>We realize that you lead a busy life, so we've made it easy for you to drop off your vehicle 24/7.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-6">
                    <div class="row">
                        <div class="col-md-6 col-lg-8">
                            <div class="negative-margin"><img src="/assets/images/banner-key.png" class="img-responsive" alt=""></div>
                        </div>
                        <div class="col-md-6 col-lg-4 action hidden-xs">
                            <a href="#" class="btn btn-full btn-border"><span>Know more</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- // Under Slider Banner -->
    <!-- Services Banner Block -->
    <div class="block">
        <div class="container">
            <div class="text-center">
                <h2 class="h-lg">What We Do</h2>
                <p class="info">We offer full service auto repair & maintenance</p>
            </div>
            <div class="services-block services-carousel">
                <div class="service">
                    <div class="image"><img src="/assets/images/service-1-bg.png" alt="#"></div>
                    <div class="caption">
                        <div class="vert-wrap">
                            <div class="vert">
                                <h3>Preventative</h3>
                                <h2>Maintenance</h2>
                                <div class="text">The best way to minimize breakdowns is doing routine maintenance
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service">
                    <div class="image image-scale"><img src="/assets/images/service-2-bg.jpg" alt="#"></div>
                </div>
                <div class="service">
                    <div class="image"><img src="/assets/images/service-3-bg.jpg" alt="#"></div>
                    <div class="caption">
                        <div class="vert-wrap">
                            <div class="vert">
                                <h3>Brake</h3>
                                <h2>Repair & Service</h2>
                                <div class="text">Brakes wear out over time
                                    <br>requiring service
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service">
                    <div class="image image-scale"><img src="/assets/images/service-4-bg.jpg" alt="#"></div>
                </div>
                <div class="service dark">
                    <div class="image"><img src="/assets/images/service-5-bg.jpg" alt="#"></div>
                    <div class="caption">
                        <div class="vert-wrap">
                            <div class="vert">
                                <h3>Transmission</h3>
                                <h2>Service & Repair</h2>
                                <div class="text">The transmission is complicated
                                    <br> and important components of your car
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service">
                    <div class="image image-scale"><img src="/assets/images/service-6-bg.jpg" alt="#"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- //Services Banner Block -->
    <!-- Services List Block -->
    <div class="block bg-1">
        <div class="container">
            <h2 class="h-lg text-center">Our <span class="color">Services</span></h2>
            <p class="info text-center">Below are some of the many auto repair services we offer:</p>
            <div class="row" id="slideMobile">
                <div class="col-sm-4 col-md-4">
                    <ul class="marker-list">
                        <li>FREE Loaner Cars</li>
                        <li>FREE Shuttle Service</li>
                        <li>General Auto Repair & Maintenance</li>
                        <li>Transmission Repair & Replacement</li>
                        <li>Manufacturer Recommended Service</li>
                        <li>Brake Repair and Replacement</li>
                        <li>Air Conditioning A/C Repair</li>
                        <li>Tire Repair and Replacement</li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-4 view-more-mobile">
                    <ul class="marker-list">
                        <li>Fuel System Repair</li>
                        <li>Exhaust System Repair</li>
                        <li>Engine Cooling System Maintenance</li>
                        <li>Electrical Diagnostics</li>
                        <li>Starting and Charging Repair</li>
                        <li>Wheel Alignment</li>
                        <li>CV Axles</li>
                        <li>Computer Diagnostic Testing
                        </li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-4 view-more-mobile">
                    <ul class="marker-list">
                        <li>Vehicle Preventative Maintenance</li>
                        <li>State Emissions Inspection</li>
                        <li>Emission Repair Facility</li>
                        <li>Tune Up</li>
                        <li>Oil Change</li>
                        <li>Brake Job / Brake Service</li>
                        <li>Engine Cooling System Flush &amp; Repair</li>
                        <li>Steering and Suspension Work</li>
                    </ul>
                </div>
            </div>
            <div class="text-center"><a href="#slideMobile" class="view-more-link color"><span class="more">All Services</span><span class="less">Hide All Services</span></a>
            </div>
        </div>
    </div>
    <!-- //Services List Block -->
    <!-- Block -->
    <div class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-5">
                    <div class="vertical-tab-container" id="tabForm">
                        <div class="vertical-tab-menu">
                            <div class="list-group">
                                <a href="#" class="list-group-item active text-center">
                                    <span>Tires</span>
                                    <i class="icon icon-car-wheel"></i>
                                </a>
                                <a href="#" class="list-group-item text-center">
                                    <span>Oil change</span>
                                    <i class="icon icon-oil"></i>
                                </a>
                                <a href="#" class="list-group-item text-center">
                                    <span>Batteries</span>
                                    <i class="icon icon-power"></i>
                                </a>
                                <a href="#" class="list-group-item text-center">
                                    <span>Brakes</span>
                                    <i class="icon icon-disc-brake"></i>
                                </a>
                                <a href="#" class="list-group-item text-center">
                                    <span>Alignment</span>
                                    <i class="icon icon-balance"></i>
                                </a>
                            </div>
                        </div>
                        <div class="vertical-tab">
                            <!-- Tires section -->
                            <div class="vertical-tab-content active">
                                <h3>Get the Right Tires</h3>
                                <div class="clearfix">
                                    <a href="#tabForm" class="toggle-btn active">By Vehicle</a><a href="#tabForm" class="toggle-btn">By Tire</a>
                                </div>
                                <p class="comment">All fields are required</p>
                                <form id="tab1-form">
                                    <div class="form-group">
                                        <div class="select-wrapper">
                                            <select name="select1" class="input-custom">
                                                <option value="">Year</option>
                                                <option value="">2010</option>
                                                <option value="">2015</option>
                                                <option value="">2016</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="select-wrapper">
                                            <select name="select2" class="input-custom">
                                                <option value="">Make</option>
                                                <option value="">Ford</option>
                                                <option value="">Audi</option>
                                                <option value="">Honda</option>
                                                <option value="">Toyota</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="select-wrapper">
                                            <select name="select3" class="input-custom">
                                                <option value="">Model</option>
                                                <option value="">Escort</option>
                                                <option value="">Prius</option>
                                                <option value="">Camaro</option>
                                                <option value="">Civic</option>
                                                <option value="">240DL</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="select-wrapper">
                                            <select name="select4" class="input-custom">
                                                <option value="">Submodel</option>
                                                <option value="">Sedan</option>
                                                <option value="">Hatchback</option>
                                                <option value="">Regular Cab</option>
                                                <option value="">Crew Cab</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-7">
                                            <div class="form-group">
                                                <div class="select-wrapper">
                                                    <select name="select5" class="input-custom">
                                                        <option value="">TPMS</option>
                                                        <option value="">RDKS</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-5"><a href="#" class="comment">What’s this?</a></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-7">
                                                <div class="form-group">
                                                    <div class="select-wrapper">
                                                        <select name="select6" class="input-custom">
                                                            <option value="">60605</option>
                                                            <option value="">20105</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-5"><a href="#" class="comment">Why?</a></div>
                                        </div>
                                    </div>
                                    <a class="btn btn-lg btn-full" data-toggle="modal" data-target="#tab1Modal"><span>Get Tire Pricing</span></a>
                                </form>
                            </div>
                            <!-- Oil section -->
                            <div class="vertical-tab-content">
                                <h3>Get the Right Oil</h3>
                                <div class="clearfix">
                                    <a href="#tabForm" class="toggle-btn active">By Vehicle</a><a href="#tabForm" class="toggle-btn">By Tire</a>
                                </div>
                                <p class="comment">All fields are required</p>
                                <form id="tab2-form">
                                    <div class="form-group">
                                        <div class="select-wrapper">
                                            <select name="select1" class="input-custom">
                                                <option value="">Year</option>
                                                <option value="">2010</option>
                                                <option value="">2015</option>
                                                <option value="">2016</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="select-wrapper">
                                            <select name="select2" class="input-custom">
                                                <option value="">Make</option>
                                                <option value="">Ford</option>
                                                <option value="">Audi</option>
                                                <option value="">Honda</option>
                                                <option value="">Toyota</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="select-wrapper">
                                            <select name="select3" class="input-custom">
                                                <option value="">Model</option>
                                                <option value="">Escort</option>
                                                <option value="">Prius</option>
                                                <option value="">Camaro</option>
                                                <option value="">Civic</option>
                                                <option value="">240DL</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="select-wrapper">
                                            <select name="select4" class="input-custom">
                                                <option value="">Submodel</option>
                                                <option value="">Sedan</option>
                                                <option value="">Hatchback</option>
                                                <option value="">Regular Cab</option>
                                                <option value="">Crew Cab</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-7">
                                            <div class="form-group">
                                                <div class="select-wrapper">
                                                    <select name="select5" class="input-custom">
                                                        <option value="">TPMS</option>
                                                        <option value="">RDKS</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-5"><a href="#" class="comment">What’s this?</a></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-7">
                                                <div class="form-group">
                                                    <div class="select-wrapper">
                                                        <select name="select6" class="input-custom">
                                                            <option value="">60605</option>
                                                            <option value="">20105</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-5"><a href="#" class="comment">Why?</a></div>
                                        </div>
                                    </div>
                                    <a class="btn btn-lg btn-full" data-toggle="modal" data-target="#tab2Modal"><span>Get Oil Pricing</span></a>
                                </form>
                            </div>
                            <!-- Batteries section -->
                            <div class="vertical-tab-content">
                                <h3>Select the Model</h3>
                                <div class="clearfix">
                                    <a href="#tabForm" class="toggle-btn active">By Vehicle</a><a href="#tabForm" class="toggle-btn">By Tire</a>
                                </div>
                                <p class="comment">All fields are required</p>
                                <form id="tab3-form">
                                    <div class="form-group">
                                        <div class="select-wrapper">
                                            <select name="select1" class="input-custom">
                                                <option value="">Year</option>
                                                <option value="">2010</option>
                                                <option value="">2015</option>
                                                <option value="">2016</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="select-wrapper">
                                            <select name="select2" class="input-custom">
                                                <option value="">Make</option>
                                                <option value="">Ford</option>
                                                <option value="">Audi</option>
                                                <option value="">Honda</option>
                                                <option value="">Toyota</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="select-wrapper">
                                            <select name="select3" class="input-custom">
                                                <option value="">Model</option>
                                                <option value="">Escort</option>
                                                <option value="">Prius</option>
                                                <option value="">Camaro</option>
                                                <option value="">Civic</option>
                                                <option value="">240DL</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="select-wrapper">
                                            <select name="select4" class="input-custom">
                                                <option value="">Submodel</option>
                                                <option value="">Sedan</option>
                                                <option value="">Hatchback</option>
                                                <option value="">Regular Cab</option>
                                                <option value="">Crew Cab</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-7">
                                            <div class="form-group">
                                                <div class="select-wrapper">
                                                    <select name="select5" class="input-custom">
                                                        <option value="">TPMS</option>
                                                        <option value="">RDKS</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-5"><a href="#" class="comment">What’s this?</a></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-7">
                                                <div class="form-group">
                                                    <div class="select-wrapper">
                                                        <select name="select6" class="input-custom">
                                                            <option value="">60605</option>
                                                            <option value="">20105</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-5"><a href="#" class="comment">Why?</a></div>
                                        </div>
                                    </div>
                                    <a class="btn btn-lg btn-full" data-toggle="modal" data-target="#tab3Modal"><span>Get Batteries Pricing</span></a>
                                </form>
                            </div>
                            <!-- Brakes section -->
                            <div class="vertical-tab-content">
                                <h3>Select the Model</h3>
                                <div class="clearfix">
                                    <a href="#tabForm" class="toggle-btn active">By Vehicle</a><a href="#tabForm" class="toggle-btn">By Tire</a>
                                </div>
                                <p class="comment">All fields are required</p>
                                <form id="tab4-form">
                                    <div class="form-group">
                                        <div class="select-wrapper">
                                            <select name="select1" class="input-custom">
                                                <option value="">Year</option>
                                                <option value="">2010</option>
                                                <option value="">2015</option>
                                                <option value="">2016</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="select-wrapper">
                                            <select name="select2" class="input-custom">
                                                <option value="">Make</option>
                                                <option value="">Ford</option>
                                                <option value="">Audi</option>
                                                <option value="">Honda</option>
                                                <option value="">Toyota</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="select-wrapper">
                                            <select name="select3" class="input-custom">
                                                <option value="">Model</option>
                                                <option value="">Escort</option>
                                                <option value="">Prius</option>
                                                <option value="">Camaro</option>
                                                <option value="">Civic</option>
                                                <option value="">240DL</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="select-wrapper">
                                            <select name="select4" class="input-custom">
                                                <option value="">Submodel</option>
                                                <option value="">Sedan</option>
                                                <option value="">Hatchback</option>
                                                <option value="">Regular Cab</option>
                                                <option value="">Crew Cab</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-7">
                                            <div class="form-group">
                                                <div class="select-wrapper">
                                                    <select name="select5" class="input-custom">
                                                        <option value="">TPMS</option>
                                                        <option value="">RDKS</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-5"><a href="#" class="comment">What’s this?</a></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-7">
                                                <div class="form-group">
                                                    <div class="select-wrapper">
                                                        <select name="select6" class="input-custom">
                                                            <option value="">60605</option>
                                                            <option value="">20105</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-5"><a href="#" class="comment">Why?</a></div>
                                        </div>
                                    </div>
                                    <a class="btn btn-lg btn-full" data-toggle="modal" data-target="#tab4Modal"><span>Get Brakes Pricing</span></a>
                                </form>
                            </div>
                            <!-- Alignment section -->
                            <div class="vertical-tab-content">
                                <h3>Select the Model</h3>
                                <div class="clearfix">
                                    <a href="#tabForm" class="toggle-btn active">By Vehicle</a><a href="#tabForm" class="toggle-btn">By Tire</a>
                                </div>
                                <p class="comment">All fields are required</p>
                                <form id="tab5-form">
                                    <div class="form-group">
                                        <div class="select-wrapper">
                                            <select name="select1" class="input-custom">
                                                <option value="">Year</option>
                                                <option value="">2010</option>
                                                <option value="">2015</option>
                                                <option value="">2016</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="select-wrapper">
                                            <select name="select2" class="input-custom">
                                                <option value="">Make</option>
                                                <option value="">Ford</option>
                                                <option value="">Audi</option>
                                                <option value="">Honda</option>
                                                <option value="">Toyota</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="select-wrapper">
                                            <select name="select3" class="input-custom">
                                                <option value="">Model</option>
                                                <option value="">Escort</option>
                                                <option value="">Prius</option>
                                                <option value="">Camaro</option>
                                                <option value="">Civic</option>
                                                <option value="">240DL</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="select-wrapper">
                                            <select name="select4" class="input-custom">
                                                <option value="">Submodel</option>
                                                <option value="">Sedan</option>
                                                <option value="">Hatchback</option>
                                                <option value="">Regular Cab</option>
                                                <option value="">Crew Cab</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-7">
                                            <div class="form-group">
                                                <div class="select-wrapper">
                                                    <select name="select5" class="input-custom">
                                                        <option value="">TPMS</option>
                                                        <option value="">RDKS</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-5"><a href="#" class="comment">What’s this?</a></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-7">
                                                <div class="form-group">
                                                    <div class="select-wrapper">
                                                        <select name="select6" class="input-custom">
                                                            <option value="">60605</option>
                                                            <option value="">20105</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-5"><a href="#" class="comment">Why?</a></div>
                                        </div>
                                    </div>
                                    <a class="btn btn-lg btn-full" data-toggle="modal" data-target="#tab5Modal"><span>Get Pricing</span></a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="divider-lg visible-sm visible-xs"></div>
                <div class="col-md-6 col-lg-7">
                    <h2>About Car Repair Services</h2>
                    <p>Our service facility is independently owned and operated providing full-service repair and maintenance services. We use the latest diagnostic equipment to guarantee your vehicle is repaired or serviced properly and in a timely fashion. We are a member of Professional Auto Service, an elite performance network, where independent service facilities share common goals of being world-class automotive service centers.</p>
                    <ul class="marker-list-sm">
                        <li>24 Month / 24,000km Nationwide Warranty</li>
                        <li>ASE Certified Technicians</li>
                        <li>Customer Rewards Program</li>
                        <li>24-Hour Roadside Assistance</li>
                        <li>Courtesy Local Shuttle Service</li>
                        <li>Courtesy Loaner Vehicle</li>
                    </ul>
                    <div class="promo-banner">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="text">
                                    <div class="title"><span>$25</span> OFF Repair!</div>
                                    <p>$25 off any repair and service. New Customers only. One Special per visit. Not valid with other offer or special. </p>
                                </div>
                            </div>
                            <div class="divider hidden-lg"></div>
                            <div class="col-lg-4">
                                <div class="action"> <i class="icon icon-lg icon-arrows-2"></i>
                                    <a href="#" class="btn btn-lg"><span>REDEEM NOW</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //Block -->
    <!-- How It Works -->
    <div class="block bg-2">
        <div class="container">
            <h2 class="h-lg text-center">How It <span class="color">Works</span></h2>
            <div class="row how-works-row shifted">
                <div class="col-sm-6 col-md-3">
                    <div class="how-works-block">
                        <div class="image">
                            <div class="image-scale"><img src="/assets/images/how-works-img-1.jpg" alt=""></div>
                        </div>
                        <div class="caption">
                            <div class="inside">
                                <div class="number"><span>1</span></div>
                                <div class="text">
                                    <h5>Make an Appointment</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="how-works-block">
                        <div class="image">
                            <div class="image-scale"><img src="/assets/images/how-works-img-2.jpg" alt=""></div>
                        </div>
                        <div class="caption">
                            <div class="inside">
                                <div class="number"><span>2</span></div>
                                <div class="text">
                                    <h5>Select Services</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="how-works-block">
                        <div class="image">
                            <div class="image-scale"><img src="/assets/images/how-works-img-3.jpg" alt=""></div>
                        </div>
                        <div class="caption">
                            <div class="inside">
                                <div class="number"><span>3</span></div>
                                <div class="text">
                                    <h5>Select Quote, Confirm Request</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="how-works-block">
                        <div class="image">
                            <div class="image-scale"><img src="/assets/images/how-works-img-4.jpg" alt=""></div>
                        </div>
                        <div class="caption">
                            <div class="inside">
                                <div class="number"><span>4</span></div>
                                <div class="text">
                                    <h5>GET YOUR CAR</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //How It Works -->
    <!-- Services Block -->
    <div class="block">
        <div class="container">
            <h2 class="h-lg text-center">Why Choose Certified Service?</h2>
            <p class="info text-center">We partnered with RepairPal to bring you the most sophisticated fair-price estimates </p>
            <div class="row text-icon-carousel">
                <div class="col-sm-4 col-md-4">
                    <div class="text-icon">
                        <div class="icon-wrapper"><span><i class="icon icon-technology"></i><span class="icon-hover"></span></span>
                        </div>
                        <h3 class="title">Estimates</h3>
                        <p class="text">We bring you the most accurate and fair-price service estimates</p>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="text-icon">
                        <div class="icon-wrapper"><span><i class="icon icon-tool"></i><span class="icon-hover"></span></span>
                        </div>
                        <h3 class="title">Trusted</h3>
                        <p class="text">Trusted Service Centers
                            <br> are certified for high quality
                        </p>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="text-icon">
                        <div class="icon-wrapper"><span><i class="icon icon-diploma"></i><span class="icon-hover"></span></span>
                        </div>
                        <h3 class="title">Service Centers</h3>
                        <p class="text">We connect you with service centers who will honor the fair-price estimates
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //Services Block -->
    <!-- Testimonials Block -->
    <div class="block bg-3">
        <div class="container-fluid">
            <h2 class="h-lg text-center">What <span class="color">Our Clients</span> Say</h2>
            <div class="testimonials">
                <div class="testimonials-item">
                    <div class="inside">
                        <div class="meta"><span class="rating"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span><span class="username">Joseph C. Lane</span></div>
                        <div class="text">Yesterday's crown preparation went great. I expected the same level of discomfort that I had experienced with another crown done by different dentist. Technique caused so much less difficulty that I went away with a smile on my face.</div>
                    </div>
                    <div class="bg-image" style="background-image: url(images/testimonial-bg-1.jpg);"></div>
                </div>
                <div class="testimonials-item">
                    <div class="inside">
                        <div class="meta"><span class="rating"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span><span class="username">Joseph M. Fischer</span></div>
                        <div class="text">Fast and painless service, very happy with this establishment. I Highly Recommend them. I had my semiannual cleaning and checkup. And as always, it was an excellent experience.</div>
                    </div>
                    <div class="bg-image" style="background-image: url(/assets/images/testimonial-bg-2.jpg);"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- //Testimonials Block -->
    <!-- Statistics Block -->
    <div class="block">
        <div class="container">
            <h2 class="h-lg text-center">Some Statistics <span class="color">About Us</span></h2>
            <p class="info text-center">Auto Repair Technical Statistics You Must Know</p>
            <div class="row" id="counterBlock">
                <div class="col-sm-6 col-md-3">
                    <div class="stat-box">
                        <div><span class="number"><span class="count" data-to="10" data-speed="1000">10</span></span><span class="icon"><i class="icon-rocket"></i></span></div>
                        <div class="text">
                            <h5>Years of experience</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="stat-box">
                        <div><span class="number"><span class="count" data-to="32" data-speed="1000">32</span></span><span class="icon"><i class="icon-people-1"></i></span></div>
                        <div class="text">
                            <h5>Technicians & workers</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="stat-box">
                        <div><span class="number"><span class="count" data-to="2500" data-speed="1000">2500</span></span><span class="icon"><i class="icon-people"></i></span></div>
                        <div class="text">
                            <h5>Satisfied customers</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="stat-box">
                        <div><span class="number"><span class="count" data-to="1900" data-speed="1000">1900</span></span><span class="icon"><i class="icon-transport"></i></span></div>
                        <div class="text">
                            <h5>Vehicle Repaired</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //Statistics Block -->
    <!-- Recalls Block -->
    <div class="block bg-dark full-block pad-sm">
        <div class="container">
            <div class="text-center">
                <h2 class="h-lg">Safety <span class="color">&</span> Recalls</h2>
                <p class="info">Are there any recalls on your car? Find out!
                </p>
            </div>
            <form action="#" class="form-table">
                <div class="form-group form-group-cell">
                    <div class="select-wrapper">
                        <select  class="input-custom">
                            <option value="">Enter make</option>
                            <option value="">Enter make</option>
                        </select>
                    </div>
                </div>
                <div class="form-group form-group-cell">
                    <div class="select-wrapper">
                        <select  class="input-custom">
                            <option value="">Enter model</option>
                            <option value="">Enter model</option>
                        </select>
                    </div>
                </div>
                <div class="form-group form-group-cell sm">
                    <div class="select-wrapper">
                        <select  class="input-custom">
                            <option value="">Year</option>
                            <option value="">2015</option>
                        </select>
                    </div>
                </div>
                <div class="form-group form-group-cell sm">
                    <input type="text" class="form-control input-custom" placeholder="ZIP">
                </div>
                <div class="form-group form-group-cell action">
                    <a class="btn btn-full btn-invert" data-toggle="modal" data-target="#getRecallsModal"><span>Get Recalls</span></a>
                </div>
            </form>
        </div>
    </div>
    <!-- //Recalls Block -->
    <!-- Appointment Block -->
    <div class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-appointment">
                        <h2 class="h-lg">Schedule <span class="color">Your Appointment</span> Today</h2>
                        <p class="info">Your Automotive Repair & Maintenance Service Specialist</p>
                        <h2 class="h-phone">Call: 1-800-123-4567</h2>
                        <div class="btn-inline"><a class="btn btn-invert" href="#"><span>Appointment</span></a><a class="btn" href="/contact"><span>Get Pricing</span></a></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img-move animation" data-animation="fadeInRight" data-animation-delay="0s">
                        <img src="/assets/images/img-car-move.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //Appointment Block -->
</div>
<!-- // Content  -->



@endsection