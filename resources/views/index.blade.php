<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="html 5 template">
    <meta name="author" content="tonytemplates.com">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" href="favicon.ico">
    <title>Car Repair Services - HTML 5 TEMPLATE</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/plugins/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/plugins/bootstrap-submenu.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/plugins/animate.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/plugins/slick.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/plugins/bootstrap-datetimepicker.css') }}">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Icon Font-->
    <link rel="stylesheet" href="{{ URL::asset('assets/iconfont/style.css') }}">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Google map -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
</head>
<body class="home">
<!-- Loader -->
<div id="loader-wrapper">
    <div class="loader">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="subline"></div>
        <div class="subline"></div>
        <div class="subline"></div>
        <div class="subline"></div>
        <div class="subline"></div>
        <div class="loader-circle-1">
            <div class="loader-circle-2"></div>
        </div>
        <div class="needle"></div>
        <div class="loading">Loading</div>
    </div>
</div>
<!-- //Loader -->
<!-- Header -->
<header class="page-header">
    <nav class="navbar" id="slide-nav">
        <div class="container">
            <div class="header-row">
                <div class="logo">
                    <a href="{{ route('main.index') }}"><img src="/assets/images/logo.png" alt="Logo"></a>
                </div>
                <div class="header-right">
                    <button type="button" class="navbar-toggle"><i class="icon icon-lines-menu"></i></button>
                    <div class="header-right-top">
                        <div class="address">
                            Monday-Saturday <span class="custom-color">7:00AM - 6:00PM</span>
                        </div>
                        <a href="#" class="appointment" data-toggle="modal" data-target="#appointmentForm"><i class="icon-shape icon"></i><span>Appointment</span></a>
                    </div>
                    <div class="header-right-bottom">
                        <div class="header-phone"><span class="text">SCHEDULE YOUR APPOINTMENT TODAY</span><span class="phone-number">1-<span class="code">800</span>-123-4567</span>
                        </div>
                    </div>
                </div>
            </div>
            <div id="slidemenu">
                <div class="row">
                    <div class="col-md-9">
                        <div class="close-menu"><i class="icon-close-cross"></i></div>
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="{{ route('main.index') }}"><span>Home</span></a></li>
                            <li><a href="{{ route('main.index') }}"><span>About Us</span></a></li>
                            <li class="dropdown">
                                <a href="{{ route('main.services') }}" data-toggle="dropdown" data-submenu=""><span>Services</span><span class="ecaret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ route('main.services') }}">A/C Repair</a></li>
                                    <li><a href="{{ route('main.services') }}">Battery Installation</a></li>
                                    <li><a href="{{ route('main.services') }}">Brake Repair</a></li>
                                    <li><a href="{{ route('main.services') }}">Engine Repair</a></li>
                                    <li><a href="{{ route('main.services') }}">Engine Tune-Ups</a></li>
                                    <li><a href="{{ route('main.services') }}">Oil Changes</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="{{ route('main.blog') }}" data-toggle="dropdown" data-submenu=""><span>Blog</span><span class="ecaret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ route('main.blog') }}">Blog Classic</a></li>
                                    <li><a href="{{ route('main.blog_card') }}">Blog Post Card</a></li>
                                    <li><a href="{{ route('main.blog_single') }}">Blog Single post</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('main.gallery') }}"><span>Gallery</span></a>
                            </li>
                            <li><a href="{{ route('main.faq') }}"><span>FAQ</span></a>
                            </li>
                            <li><a href="{{ route('main.contact') }}"><span>Contacts</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <div class="search-container">
                            <input placeholder="search" type="text">
                            <a class="button">
                                <i class="icon icon-search"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<!-- // Header -->
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
                        <div class="btn-inline"><a class="btn btn-invert" href="#"><span>Appointment</span></a><a class="btn" href="{{ route('main.contact') }}"><span>Get Pricing</span></a></div>
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
<!-- Footer -->
<div class="page-footer">
    <div class="footer-content">
        <div class="footer-col-left">
            <div class="inside">
                <div class="footer-phone">
                    <h2 class="h-phone">Call: <span class="number">1-800-1234567</span></h2>
                </div>
                <div class="contact-info"><i class="icon icon-locate"></i>2605 Caton Hill Road, Woodbridge,
                    <br> VA 22192
                </div>
                <div class="contact-info"><i class="icon icon-clock"></i>Monday-Saturday <span class="color">7:00AM - 6:00PM</span>
                    <br> Sunday Closed
                </div>
                <div class="social-links">
                    <ul>
                        <li>
                            <a class="icon icon-facebook-logo" href="#"></a>
                        </li>
                        <li>
                            <a class="icon icon-twitter-logo" href="#"></a>
                        </li>
                        <li>
                            <a class="icon icon-instagram-logo" href="#"></a>
                        </li>
                        <li>
                            <a class="icon icon-google-plus-logo" href="#"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-col-right">
            <div id="footer-map" class="footer-map"></div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="copyright">© 2017 Car Repair Services, All Rights Reserved</div>
        </div>
    </div>
</div>
<!-- //Footer -->
<div class="darkout-menu"></div>
<!--Get Form Info-->
<div class="modal modal-info fade" id="tab1Modal">
    <div class="modal-dialog container">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <div class="col-xs-9">
                        <h3>The Tires Price</h3>
                    </div>
                    <div class="col-xs-3">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon-close-cross"></i></button>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae in, perspiciatis iusto rerum non temporibus tenetur.
                <ul class="marker-list-sm">
                    <li><b>Price:</b> $49.95</li>
                    <li><b>Your discount:</b> -20%</li>
                    <li><b>Total Price:</b> $39.95</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- //Get Form Info -->
<!--Get Form Info-->
<div class="modal modal-info fade" id="tab2Modal">
    <div class="modal-dialog container">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <div class="col-xs-9">
                        <h3>Oil Change Price</h3>
                    </div>
                    <div class="col-xs-3">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon-close-cross"></i></button>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae in, perspiciatis iusto rerum non temporibus tenetur.
                <ul class="marker-list-sm">
                    <li><b>Price:</b> $49.95</li>
                    <li><b>Your discount:</b> -20%</li>
                    <li><b>Total Price:</b> $39.95</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- //Get Form Info -->
<!--Get Form Info-->
<div class="modal modal-info fade" id="tab3Modal">
    <div class="modal-dialog container">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <div class="col-xs-9">
                        <h3>Batteries Price</h3>
                    </div>
                    <div class="col-xs-3">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon-close-cross"></i></button>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae in, perspiciatis iusto rerum non temporibus tenetur.
                <ul class="marker-list-sm">
                    <li><b>Price:</b> $49.95</li>
                    <li><b>Your discount:</b> -20%</li>
                    <li><b>Total Price:</b> $39.95</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- //Get Form Info -->
<!--Get Form Info-->
<div class="modal modal-info fade" id="tab4Modal">
    <div class="modal-dialog container">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <div class="col-xs-9">
                        <h3>Brakes Price</h3>
                    </div>
                    <div class="col-xs-3">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon-close-cross"></i></button>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae in, perspiciatis iusto rerum non temporibus tenetur.
                <ul class="marker-list-sm">
                    <li><b>Price:</b> $49.95</li>
                    <li><b>Your discount:</b> -20%</li>
                    <li><b>Total Price:</b> $39.95</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- //Get Form Info -->
<!--Get Form Info-->
<div class="modal modal-info fade" id="tab5Modal">
    <div class="modal-dialog container">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <div class="col-xs-9">
                        <h3>Aligment Price</h3>
                    </div>
                    <div class="col-xs-3">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon-close-cross"></i></button>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae in, perspiciatis iusto rerum non temporibus tenetur.
                <ul class="marker-list-sm">
                    <li><b>Price:</b> $49.95</li>
                    <li><b>Your discount:</b> -20%</li>
                    <li><b>Total Price:</b> $39.95</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- //Get Form Info -->
<!--Get Recalls-->
<div class="modal modal-info fade" id="getRecallsModal">
    <div class="modal-dialog container">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <div class="col-xs-9">
                        <h3>Recalls, Investigations & Complaints</h3>
                    </div>
                    <div class="col-xs-3">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon-close-cross"></i></button>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae in, perspiciatis iusto rerum non temporibus tenetur.
                <ul class="marker-list-sm">
                    <li>Lorem ipsum dolor sit amet, consectetur</li>
                    <li>Repellendus alias unde tempore assumenda fugiat</li>
                    <li>Blanditiis impedit repellat, quos minus dolorem autem</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- //Get Recalls -->
<!-- Appointment Form -->
<div class="modal fade" id="appointmentForm">
    <div class="modal-dialog container">
        <div class="modal-content">
            <div class="modal-header"><a href="#" class="appointment" data-toggle="modal" data-target="#appointmentForm"><i class="icon-shape icon"></i><span>Appointment</span></a>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon-close-cross"></i></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4 hidden-xs hidden-sm">
                            <div class="animate"><img src="/assets/images/appointment-bg.png" class="img-responsive" alt=""></div>
                        </div>
                        <div class="col-md-7">
                            <h2>Schedule Auto Service</h2>
                            <p>To schedule an appointment with your friendly neighborhood experts at Car Repair Services, give us a call at 1-800-123-4567 or fill out the form below with your information and requested services. One of our team members will get back to you as soon as possible to confirm your appointment. </p>
                            <div class="divider"></div>
                            <form id="appointment-form" class="contact-form form-horizontal col-md-8" name="contactform" method="post">
                                <div id="successAppointment" class="successform">
                                    <p>Your message was sent successfully!</p>
                                </div>
                                <div id="errorAppointment" class="errorform">
                                    <p>Something went wrong, try refreshing and submitting the form again.</p>
                                </div>
                                <h5>Contact information</h5>
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control input-custom" value="" placeholder="First name">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="lastname" class="form-control input-custom" value="" placeholder="Last name">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control input-custom" value="" placeholder="Phone number">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control input-custom" value="" placeholder="Your E-mail">
                                </div>
                                <div class="divider"></div>
                                <h5>Appointment details</h5>
                                <div class="form-group">
                                    <div class='input-group date' id='datetimepicker1'>
                                        <input name="date1" type='text' class="form-control input-custom" />
												<span class="input-group-addon">
													<span class="icon-calendar"></span>
												</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class='input-group date' id='datetimepicker2'>
                                        <input name="date2" type='text' class="form-control input-custom" />
												<span class="input-group-addon">
													<span class="icon-calendar"></span>
												</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class='input-group date' id='datetimepicker3'>
                                        <input name="date3" type='text' class="form-control input-custom" />
												<span class="input-group-addon">
													<span class="icon-calendar"></span>
												</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class='input-group date' id='datetimepicker4'>
                                        <input name="time1" type='text' class="form-control input-custom" />
												<span class="input-group-addon">
													<span class="icon-clock"></span>
												</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input name="autoinfo" type="text" class="form-control input-custom" value="" placeholder="Vehicle Year, Make and Model">
                                </div>
                                <p>I'm making an appointment for</p>
                                <div class="form-group">
                                    <div class="select-wrapper">
                                        <select name="select1" class="input-custom">
                                            <option value="Brake Inspections">Brake Inspections</option>
                                            <option value="Air Filtration Services">Air Filtration Services</option>
                                            <option value="Cooling System Services">Cooling System Services</option>
                                            <option value="Transmission Services">Transmission Services</option>
                                            <option value="Fuel System Cleaning">Fuel System Cleaning</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea name="message" class="form-control textarea-custom" placeholder="Comments and Questions"></textarea>
                                </div>
                                <p><i>Maximum of 250 characters</i></p>
                                <button type="submit" id="submit" class="btn btn-lg"><span>SUBMIT</span></button>
                                <div class="divider"></div>
                                <p><i>Please note that the date and time you requested may not be available. We will contact you to confirm your actual appointment details.</i></p>
                                <div class="divider"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //Appointment Form -->
<!-- External JavaScripts -->
<script src="{{ URL::asset('assets/js/jquery.js') }}"></script>
<script src="{{ URL::asset('assets/js/plugins/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/plugins/slick.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/plugins/jquery.form.js') }}"></script>
<script src="{{ URL::asset('assets/js/plugins/jquery.validate.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/plugins/moment.js') }}"></script>
<script src="{{ URL::asset('assets/js/plugins/bootstrap-datetimepicker.js') }}"></script>
<script src="{{ URL::asset('assets/js/plugins/jquery.waypoints.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/plugins/jquery.countTo.js') }}"></script>
<!-- Custom JavaScripts -->
<script src="{{ URL::asset('assets/js/custom.js') }}"></script>
<script src="{{ URL::asset('assets/js/forms.js') }}"></script>
</body>
</html>