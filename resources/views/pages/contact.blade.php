@extends('layouts.default')
        @section('content')
<!-- Content  -->
<div id="pageTitle">
    <div class="container">
        <!-- Breadcrumbs Block -->
        <div class="breadcrumbs">
            <ul class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active">Contacts</li>
            </ul>
        </div>
        <!-- //Breadcrumbs Block -->
        <h1>Contacts</h1>
    </div>
</div>
<div id="pageContent">
    <!-- Block -->
    <div class="block offset-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3>Call: +254 701-064-117</h3>
                </div>
                <div class="col-md-8">If you have any questions or comments regarding us or your vehicle, please fill out a contact request form below. Or if you prefer, you can reach us at the following address:</div>
            </div>
            <div class="row row-grey">
                <div class="col-sm-4">
                    <div class="contact-info">
                        <h5>Post Address</h5>
                        <i class="icon icon-locate"></i>Nairobi,
                        <br> Kenya
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="contact-info">
                        <h5>Opening Date/Time</h5>
                        <i class="icon icon-clock"></i><b>Monday - Saturday:</b> 7:00AM - 6:00PM
                        <br> <b>Sunday &AMP; Public Holidays:</b> Closed
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="contact-info">
                        <h5>Follow Us</h5>
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
            </div>
            <h2>Contact Us</h2>
            <form id="contactform" class="contact-form" name="contactform" method="post" novalidate>
                <div id="success" class="successform">
                    <p>Your message was sent successfully!</p>
                </div>
                <div id="error" class="errorform">
                    <p>Something went wrong, try refreshing and submitting the form again.</p>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="input-wrapper">
                            <input type="text" class="input-custom input-full" name="name" placeholder="Your name">
                        </div>
                        <div class="input-wrapper">
                            <input type="text" class="input-custom input-full" name="phone" placeholder="Your Phone">
                        </div>
                        <div class="input-wrapper">
                            <input type="text" class="input-custom input-full" name="email" placeholder="E-mail">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <textarea class="textarea-custom input-full" name="message" placeholder="Comment"></textarea>
                    </div>
                </div>
                <div class="divider-sm"></div>
                <button type="submit" id="submit-contact" class="btn"><i class="icon icon-lightning"></i><span>Send Message</span></button>
            </form>
        </div>
    </div>
    <!-- //Block -->
</div>
<!-- // Content  -->
@endsection