@extends('layouts.default')
@section('content')
        <!-- Content  -->
<div id="pageTitle">
    <div class="container">
        <!-- Breadcrumbs Block -->
        <div class="breadcrumbs">
            <ul class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active">Blog Posts</li>
            </ul>
        </div>
        <!-- //Breadcrumbs Block -->
        <h1>Blog <span class="color">Posts</span></h1>
    </div>
</div>
<div id="pageContent">
    <div class="container">
        <div class="row">
            <div class="col-md-9 column-center">
                <div class="blog-post single">
                    <div class="post-image">
                        <a href="/blog_single"><img src="/assets/images/blog/blog-post-img-1.jpg" alt=""></a>
                    </div>
                    <ul class="post-meta">
                        <li><i class="icon icon-clock"></i><span>Thursday, May 01, 2017</span></li>
                        <li><i class="icon icon-comments"></i><span>3</span></li>
                    </ul>
                    <h3 class="post-title">Troubleshooting Anti-Lock Brakes</h3>
                    <div class="post-author"> <img src="/assets/images/blog/author-1.jpg" alt=""> <i>by</i> <b>Paul Johnson</b> </div>
                    <div class="post-text">
                        <p>Over the river and through the woods was more dangerous back when cars had crummy bias-ply tires, rear-wheel drive and ordinary brakes. So, tonight you feel confident driving home through several inches of freshly fallen snow after a sumptuous holiday dinner. Your front-drive car has excellent all-season tires and ABS (antilock braking system)—although the ABS light has been on since you banzai'd the berm at the end of the driveway an hour ago. This may explain the loss of steering control when you're slowing down for a corner. Like this downhill turn, right ... there, as you blow straight past it with the wheels skidding and the steering cranked over hard against the stop.</p>
                        <p class="quote-simple">ABS has become pretty much standard equipment on most vehicles. Sensors tell a computer when a wheel stops rotating, which indicates—at least when the vehicle still has forward speed—that the brakes have overpowered the available traction at that particular wheel. The computer then directs a hydraulic valve to release some brake fluid pressure to the wheel to let it rotate again.</p>
                        <p>This process repeats many times per second until the vehicle stops or you lift your foot off the brake pedal. The ABS computer does a power-on self test every time you cycle the ignition. If it finds it's lacking data, or a hydraulic pump or valve isn't responding, it illuminates the ABS warning light on the dash.</p>
                    </div>
                    <div class="divider-sm"></div>
                    <ul class="tags-list">
                        <li><a href="#">Car</a></li>
                        <li><a href="#">Repairs</a></li>
                        <li><a href="#">Mechanics</a></li>
                    </ul>
                </div>
                <div class="divider-line"></div>
                <h3>Comments</h3>
                <div class="comments">
                    <div class="comment">
                        <div class="userpic"><span class="icon icon-people-3"></span></div>
                        <div class="text">
                            <div class="meta"><b>Paul Johnson</b> <a href="#">Reply</a></div>
                            <div class="date"><i class="icon icon-clock"></i><span>Thursday, May 01, 2017</span></div>
                            <p>Thousands of you have already taken advantage of this service where we bundle all these activities and give you a discount to perform these services. Of course we do these things year round, but in the spring when most clients need it we do it for a reduced price.</p>
                        </div>
                    </div>
                    <div class="comment replay">
                        <div class="userpic"><span class="icon icon-people-3"></span></div>
                        <div class="text">
                            <div class="meta"><b>Paul Johnson</b> <a href="#">Reply</a></div>
                            <div class="date"><i class="icon icon-clock"></i><span>Thursday, May 01, 2017</span></div>
                            <p>Thousands of you have already taken advantage of this service where we bundle all these activities and give you a discount to perform these services. Of course we do these things year round, but in the spring when most clients need it we do it for a reduced price.</p>
                        </div>
                    </div>
                </div>
                <div class="divider-lg"></div>
                <h3>Leave a Comment</h3>
                <div class="divider-sm"></div>
                <form class="contact-form" name="contactform" method="post">
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="input-wrapper">
                                <input type="text" class="input-custom input-full" name="name" placeholder="First name">
                            </div>
                            <div class="input-wrapper">
                                <input type="text" class="input-custom input-full" name="name" placeholder="Last name">
                            </div>
                            <div class="input-wrapper">
                                <input type="text" class="input-custom input-full" name="name" placeholder="E-mail">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-10">
                            <textarea class="textarea-custom input-full" name="message" placeholder="Comment"></textarea>
                        </div>
                    </div>
                    <div class="divider-sm"></div>
                    <button type="submit" id="submit" class="btn"><span>Leave a Comment</span></button>
                </form>
                <div class="divider"></div>
            </div>
            <div class="col-md-3 column-right">
<!--                <div class="side-block">
                    <h3>Archives</h3>
                    <div class="calendar">
                        <div class="calendar__header">November 2016</div>
                        <table>
                            <tr>
                                <th>S</th>
                                <th>M</th>
                                <th>T</th>
                                <th>W</th>
                                <th>Th</th>
                                <th>F</th>
                                <th>S</th>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>7</td>
                                <td>8</td>
                                <td>9</td>
                                <td>10</td>
                                <td>11</td>
                                <td>12</td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>14</td>
                                <td>15</td>
                                <td>16</td>
                                <td class="selected">17</td>
                                <td>18</td>
                                <td>19</td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td>21</td>
                                <td>22</td>
                                <td>23</td>
                                <td>24</td>
                                <td>25</td>
                                <td>26</td>
                            </tr>
                            <tr>
                                <td>27</td>
                                <td>28</td>
                                <td>29</td>
                                <td>30</td>
                                <td>31</td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                        <div class="calendar__footer"><a href="#">« Sep</a></div>
                    </div>
                </div>-->
                <div class="side-block">
                    <h3>Post Categories</h3>
                    <ul class="category-list">
                        <li><a href="#">Audios  <span>(2)</span></a></li>
                        <li><a href="#">Daily Inspiration  <span>(7)</span></a></li>
                        <li><a href="#">Freelance  <span>(3)</span></a></li>
                        <li><a href="#">Links  <span>(1)</span></a></li>
                        <li><a href="#">Mobile  <span>(1)</span></a></li>
                        <li><a href="#">Photography  <span>(5)</span></a></li>
                        <li><a href="#">Quotes  <span>(1)</span></a></li>
                        <li><a href="#">Resources  <span>(3)</span></a></li>
                        <li><a href="#">Status  <span>(1)</span></a></li>
                    </ul>
                </div>
                <div class="side-block">
                    <h3>Popular tags</h3>
                    <ul class="tags-list">
                        <li><a href="#">Car</a></li>
                        <li><a href="#">Repairs</a></li>
                        <li><a href="#">Mechanics</a></li>
                        <li><a href="#">Transmissions</a></li>
                        <li><a href="#">Brakes</a></li>
                        <li><a href="#">Oil Change</a></li>
                        <li><a href="#">Auto Body</a></li>
                        <li><a href="#">Car Service</a></li>
                        <li><a href="#">Auto</a></li>
                    </ul>
                </div>
                <div class="side-block">
                    <h3>Featured Posts</h3>
                    <div class="blog-post post-preview">
                        <div class="post-image">
                            <a href="/blog_single"><img src="/assets/images/blog/blog-post-featured-1.jpg" alt=""></a>
                        </div>
                        <ul class="post-meta">
                            <li><i class="icon icon-clock"></i><span>Thursday, May 01, 2017</span></li>
                            <li class="pull-right"><i class="icon icon-interface"></i><span>3</span></li>
                        </ul>
                        <h5 class="post-title"><a href="/blog_single">Can All-Season Tires Really Handle the Snow?</a></h5>
                        <ul class="post-meta">
                            <li class="author">by <b><i>Paul Johnson</i></b></li>
                        </ul>
                        <div class="post-teaser">
                            <p>The question comes up year as the snow starts to fall...</p>
                        </div>
                    </div>
                    <div class="blog-post post-preview">
                        <div class="post-image">
                            <a href="/blog_single"><img src="/assets/images/blog/blog-post-featured-2.jpg" alt=""></a>
                        </div>
                        <ul class="post-meta">
                            <li><i class="icon icon-clock"></i><span>Thursday, May 01, 2017</span></li>
                            <li class="pull-right"><i class="icon icon-interface"></i><span>3</span></li>
                        </ul>
                        <h5 class="post-title"><a href="/blog_single">How and Why to Change Your Manual Transmission Fluid</a></h5>
                        <ul class="post-meta">
                            <li class="author">by <b><i>Paul Johnson</i></b></li>
                        </ul>
                        <div class="post-teaser">
                            <p>Your stick shift works better when it's got fresh oil. Here's a step-by-step on how to swap it.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- // Content  -->
@endsection