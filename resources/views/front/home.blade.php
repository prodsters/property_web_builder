@extends("layouts.front")


@section('content')
<!-- banner -->
<div class="banner">
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="navbar-header navbar-left">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <nav class="link-effect-12">
                    <ul class="nav navbar-nav w3_agile_nav">
                        <li class="active"><a href="index.html"><span>Home</span></a></li>
                        <li><a href="properties.html"><span>Properties</span></a></li>
                        <li><a href="about.html"><span>About Us</span></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span data-hover="Short Codes">Short Codes</span> <b class="caret"></b></a>
                            <ul class="dropdown-menu agile_short_dropdown">
                                <li><a href="icons.html">Web Icons</a></li>
                                <li><a href="typography.html">Typography</a></li>
                            </ul>
                        </li>
                        <li><a href="mail.html"><span>Mail Us</span></a></li>
                        @if(!Auth::check())
                            <li><a href="{{ url('/login') }}"><span>Register/Log In</span></a></li>
                        @else
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <span>Log Out</span>
                                </a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        @endif
                    </ul>
                    <div class="w3_agileits_search_form">
                        <form action="#" method="post">
                            <input type="search" name="Search" placeholder="Search" required="">
                            <input type="submit" value=" ">
                        </form>
                    </div>
                </nav>
            </div>
        </nav>
    </div>
</div>
<!-- //banner -->
<!-- banner-bottom -->
<div class="banner-bottom">
    <div class="container">
        <div class="col-md-6 w3layouts_banner_bottom_left">
            <h3>real estate investing, even on a very small scale, remains a tried and true
                means of building an individual's cash flow and wealth</h3>
        </div>
        <div class="clearfix"> </div>
        <div class="w3_banner_bottom_pos">
            <form action="#" method="post">
                <h2>Find a property</h2>
                <div class="agile_book_section_top">
                    <select onchange="change_country(this.value)" required="">
                        <option value="">Filter By Keywords</option>
                        <option value="">Property By Id</option>
                        <option value="">Location</option>
                        <option value="">Type</option>
                        <option value="">Status</option>
                        <option value="">Price</option>
                    </select>
                </div>
                <div class="agileits_w3layouts_book_section_single">
                    <div class="w3_agileits_section_room">
                        <select onchange="change_country(this.value)" required="">
                            <option value="">Any Type</option>
                            <option value="">Single</option>
                            <option value="">Duplex</option>
                            <option value="">Retail</option>
                            <option value="">Multi Family</option>
                        </select>
                    </div>
                    <div class="w3_agileits_section_room">
                        <select onchange="change_country(this.value)" required="">
                            <option value="">Any Location</option>
                            <option value="">Australia</option>
                            <option value="">Sweden</option>
                            <option value="">Netherlands</option>
                            <option value="">Bangkok</option>
                        </select>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="bath">
                    <h4>Bed rooms</h4>
                    <input type="number" class="text_box" value="3" min="1">
                </div>
                <div class="bath">
                    <h4>Bath rooms</h4>
                    <input type="number" class="text_box" value="4" min="1">
                </div>
                <div class="clearfix"></div>
                <div class="wthree_range_slider">
                    <h4>Price range</h4>
                    <div id="slider-range"></div>
                    <input type="text" id="amount" style="border: 0;" />

                </div>
                <input type="submit" value="Find properties">
            </form>
        </div>
    </div>
</div>
<!-- //banner-bottom -->
<!-- services -->
<div class="services">
    <div class="container">
        <div class="w3layouts_header">
            <p><span><i class="fa fa-key" aria-hidden="true"></i></span></p>
            <h5>Our <span>Services</span></h5>
        </div>
        <div class="w3_services_grids">
            <div class="col-md-4 w3l_services_grid">
                <a href="{{ route('front.detail') }}">
                    <div class="w3ls_services_grid agileits_services_grid">
                        <div class="agile_services_grid1_sub">
                            <p>$ 32,000</p>
                        </div>
                        <div class="agileinfo_services_grid_pos">
                            <i class="fa fa-user-o" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="wthree_service_text">
                        <h3>2 Bedroom house for rent</h3>
                        <h4 class="w3_agileits_service">Reality Agency</h4>
                        <ul>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                            <li>(543)</li>
                        </ul>
                    </div>
                </a>
            </div>
            <div class="col-md-4 w3l_services_grid">
                <a href="{{ route('front.detail') }}">
                    <div class="w3ls_services_grid agileits_services_grid2">
                        <div class="agile_services_grid1_sub agileits_w3layouts_ser_sub1">
                            <p>$ 12,000</p>
                        </div>
                        <div class="agileinfo_services_grid_pos agile_services_grid_pos1">
                            <i class="fa fa-bath" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="wthree_service_text">
                        <h3>High rise Buildings for rent</h3>
                        <h4 class="w3_agileits_service2">Reality Agency</h4>
                        <ul>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
                            <li>(4321)</li>
                        </ul>
                    </div>
                </a>
            </div>
            <div class="col-md-4 w3l_services_grid">
                <a href="{{ route('front.detail') }}">
                    <div class="w3ls_services_grid agileits_services_grid1">
                        <div class="agile_services_grid1_sub agileits_w3layouts_ser_sub">
                            <p>$ 45,000</p>
                        </div>
                        <div class="agileinfo_services_grid_pos agile_services_grid_pos">
                            <i class="fa fa-home" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="wthree_service_text">
                        <h3>Big luxury house for rent</h3>
                        <h4 class="w3_agileits_service1">Reality Agency</h4>
                        <ul>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                            <li>(854)</li>
                        </ul>
                    </div>
                </a>
            </div>
            <div class="col-md-6 w3l_services_grid">
                <a href="{{ route('front.detail') }}">
                    <div class="w3ls_services_grid agileits_services_grid3">
                        <div class="agile_services_grid1_sub agileits_w3layouts_ser_sub2">
                            <p>$ 23,543</p>
                        </div>
                        <div class="agileinfo_services_grid_pos agile_services_grid_pos2">
                            <i class="fa fa-home" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="wthree_service_text">
                        <h3>Low rise Buildings for rent</h3>
                        <h4 class="w3_agileits_service3">Reality Agency</h4>
                        <ul>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                            <li>(231)</li>
                        </ul>
                    </div>
                </a>
            </div>
            <div class="col-md-6 w3l_services_grid">
                <a href="{{ route('front.detail') }}">
                    <div class="w3ls_services_grid agileits_services_grid4">
                        <div class="agile_services_grid1_sub agileits_w3layouts_ser_sub3">
                            <p>$ 45,426</p>
                        </div>
                        <div class="agileinfo_services_grid_pos agile_services_grid_pos3">
                            <i class="fa fa-home" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="wthree_service_text">
                        <h3>Low rise Buildings for rent</h3>
                        <h4 class="w3_agileits_service4">Reality Agency</h4>
                        <ul>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                            <li>(653)</li>
                        </ul>
                    </div>
                </a>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //services -->

<div class="newsletter">
    <div class="container">
        <div class="w3layouts_header w3_agile_head">
            <p><span><i class="fa fa-envelope-o" aria-hidden="true"></i></span></p>
            <h5>Subscribe to our <span>Newsletter</span></h5>
        </div>
        <div class="w3layouts_skills_grids w3l_newsletter_form">
            <form action="#" method="post">
                <input type="text" name="Name" placeholder="Name" required="">
                <input type="email" name="Email" placeholder="Email" required="">
                <input type="submit" value="Send">
            </form>
        </div>
        <div class="w3ls_footer_grid">
            <div class="col-md-4 w3ls_footer_grid_left">
                <div class="w3ls_footer_grid_leftl">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                </div>
                <div class="w3ls_footer_grid_leftr">
                    <h4>Location</h4>
                    <p>3481 Melrose Place, EF23 Beverly Hills, New York City, USA 90210.</p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-4 w3ls_footer_grid_left">
                <div class="w3ls_footer_grid_leftl">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                </div>
                <div class="w3ls_footer_grid_leftr">
                    <h4>Email</h4>
                    <a href="mailto:info@example.com">info@example.com</a>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-4 w3ls_footer_grid_left">
                <div class="w3ls_footer_grid_leftl">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                </div>
                <div class="w3ls_footer_grid_leftr">
                    <h4>Call Us</h4>
                    <p>(+000) 123 4571 121</p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
@stop