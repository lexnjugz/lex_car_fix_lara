@extends('layouts.default')
@section('content')
<!-- Content  -->
<div id="pageTitle">
    <div class="container">
        <!-- Breadcrumbs Block -->
        <div class="breadcrumbs">
            <ul class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active">About Us</li>
            </ul>
        </div>
        <!-- //Breadcrumbs Block -->
        <h1>About <span class="color">Us</span></h1>
    </div>
</div>
<div id="pageContent">
    <div class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img src="/assets/images/about-img.jpg" alt="" class="img-responsive">
                </div>
                <div class="divider visible-sm visible-xs"></div>
                <div class="col-md-7">
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
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment Block -->
    <div class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-appointment">
                        <h2 class="h-lg">Schedule <span class="color">Your Appointment</span> Today</h2>
                        <p class="info">Your Automotive Repair & Maintenance Service Specialist</p>
                        <h2 class="h-phone">Call: +254 701-064-117</h2>
                        <div class="btn-inline"><a href="#" class="btn btn-invert" data-toggle="modal" data-target="#appointmentForm"><span>Appointment</span></a><a class="btn" href="contact.html"><span>Get Pricing</span></a></div>
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
    <!-- How It Works -->
    <div class="block bg-2" data-bg="images/block-bg-3.jpg">
        <div class="container">
            <h2 class="h-lg text-center">Our <span class="color">Advantages</span></h2>
            <div class="row how-works-row">
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
                            <h5>Years of experience</h5></div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="stat-box">
                        <div><span class="number"><span class="count" data-to="32" data-speed="1000">32</span></span><span class="icon"><i class="icon-people-1"></i></span></div>
                        <div class="text">
                            <h5>Technicians & workers</h5></div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="stat-box">
                        <div><span class="number"><span class="count" data-to="2500" data-speed="1000">2500</span></span><span class="icon"><i class="icon-people"></i></span></div>
                        <div class="text">
                            <h5>Satisfied customers</h5></div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="stat-box">
                        <div><span class="number"><span class="count" data-to="1900" data-speed="1000">1900</span></span><span class="icon"><i class="icon-transport"></i></span></div>
                        <div class="text">
                            <h5>Vehicle Repaired</h5></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //Statistics Block -->
    <!-- Team Block -->
    <div class="block">
        <div class="container">
            <h2 class="h-lg text-center">Our <span class="color">Team</span></h2>
            <p class="info text-center">Meet Our Specialists from Car Repair Service</p>
            <div class="row person-carousel">
                <div class="col-sm-6 col-md-3">
                    <div class="person">
                        <div class="image image-scale-color"><img src="/assets/images/person-01.jpg" alt="" class="img-responsive" />
                            <div class="hover"></div>
                        </div>
                        <h5 class="name">John Doe</h5>
                        <h6 class="position">Service Advisor</h6>
                        <div class="text">We use only quality parts because we never compromise on the quality of our service.</div>
                        <div class="link">
                            <a class="icon icon-facebook-logo" href="#"></a>
                            <a class="icon icon-twitter-logo" href="#"></a>
                            <a class="icon icon-instagram-logo" href="#"></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="person">
                        <div class="image image-scale-color"><img src="/assets/images/person-02.jpg" alt="" class="img-responsive" />
                            <div class="hover"></div>
                        </div>
                        <h5 class="name">Jane Doe</h5>
                        <h6 class="position">First Mechanic</h6>
                        <div class="text">We use only quality parts because we never compromise on the quality of our service.
                        </div>
                        <div class="link">
                            <a class="icon icon-facebook-logo" href="#"></a>
                            <a class="icon icon-twitter-logo" href="#"></a>
                            <a class="icon icon-instagram-logo" href="#"></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="person">
                        <div class="image image-scale-color"><img src="/assets/images/person-03.jpg" alt="" class="img-responsive" />
                            <div class="hover"></div>
                        </div>
                        <h5 class="name">Alex Doe</h5>
                        <h6 class="position">Certified Technician</h6>
                        <div class="text">We use only quality parts because we never compromise on the quality of our service.</div>
                        <div class="link">
                            <a class="icon icon-facebook-logo" href="#"></a>
                            <a class="icon icon-twitter-logo" href="#"></a>
                            <a class="icon icon-instagram-logo" href="#"></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="person">
                        <div class="image image-scale-color"><img src="/assets/images/person-04.jpg" alt="" class="img-responsive" />
                            <div class="hover"></div>
                        </div>
                        <h5 class="name">John Doe</h5>
                        <h6 class="position">General Manager</h6>
                        <div class="text">We use only quality parts because we never compromise on the quality of our service.</div>
                        <div class="link">
                            <a class="icon icon-facebook-logo" href="#"></a>
                            <a class="icon icon-twitter-logo" href="#"></a>
                            <a class="icon icon-instagram-logo" href="#"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //Team Block -->
</div>
<!-- // Content  -->

@endsection