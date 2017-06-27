

    <nav class="navbar" id="slide-nav">
        <div class="container">
            <div class="header-row">
                <div class="logo">
                    <a href="/"><img src="/assets/images/logo.png" alt="Logo"></a>
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
                        <div class="header-phone"><span class="text">SCHEDULE YOUR APPOINTMENT TODAY</span><span class="phone-number"><span class="code">+254</span>-701-064-117</span>
                        </div>
                    </div>
                </div>
            </div>
            <div id="slidemenu">
                <div class="row">
                    <div class="col-md-9">
                        <div class="close-menu"><i class="icon-close-cross"></i></div>
                        <ul class="nav navbar-nav">

                            <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/"><span>Home</span></a></li>
                            <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="/about"><span>About Us</span></a></li>
                            <li class="dropdown {{ Request::is('services') ? 'active' : '' }}">
                                <a href="/services" data-toggle="dropdown" data-submenu=""><span>Services</span><span class="ecaret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="/services">A/C Repair</a></li>
                                    <li><a href="/services">Battery Installation</a></li>
                                    <li><a href="/services">Brake Repair</a></li>
                                    <li><a href="/services">Engine Repair</a></li>
                                    <li><a href="/services">Engine Tune-Ups</a></li>
                                    <li><a href="/services">Oil Changes</a></li>
                                </ul>
                            </li>
                            <li class="dropdown {{ Request::is('blog*') ? 'active' : '' }}">
                                <a href="/blog" data-toggle="dropdown" data-submenu=""><span>Blog</span><span class="ecaret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="/blog">Blog Classic</a></li>
                                    <!--<li><a href="/blog_card">Blog Post Card</a></li>-->
                                    <li><a href="/blog_single">Blog Single post</a></li>
                                </ul>
                            </li>
<!--                            <li class="{{ Request::is('gallery') ? 'active' : '' }}"><a href="/gallery"><span>Gallery</span></a>
                            </li>-->
                            <li class="{{ Request::is('faq') ? 'active' : '' }}"><a href="/faq"><span>FAQ</span></a>
                            </li>
                            <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="/contact"><span>Contacts</span></a>
                            </li>
                        </ul>
                    </div>
<!--                    <div class="col-md-3">
                        <div class="search-container">
                            <input placeholder="search" type="text">
                            <a class="button">
                                <i class="icon icon-search"></i>
                            </a>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
    </nav>
