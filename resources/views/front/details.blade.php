@extends("layouts.front")


@section('content')
<!-- banner -->
<div class="banner1">
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
                        <li><a href="index.html"><span>Home</span></a></li>
                        <li class="active"><a href="properties.html"><span>Properties</span></a></li>
                        <li><a href="about.html"><span>About Us</span></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span data-hover="Short Codes">Short Codes</span> <b class="caret"></b></a>
                            <ul class="dropdown-menu agile_short_dropdown">
                                <li><a href="icons.html">Web Icons</a></li>
                                <li><a href="typography.html">Typography</a></li>
                            </ul>
                        </li>
                        <li><a href="mail.html"><span>Mail Us</span></a></li>
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
        <div class="agileits_properties_banner">
            <h2>Properties</h2>
        </div>
    </div>
</div>
<!-- //banner -->
<!-- services -->
<div class="services">
    <div class="container">
        <div class="w3layouts_header">
            <p><span><i class="fa fa-key" aria-hidden="true"></i></span></p>
            <h5>Property</h5>
        </div>
        <div class="w3_services_grids">
            <div class="col-md-3 w3l_services_grid">
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
            </div>
            <div class="col-md-9 w3l_services_grid">
                <div class="w3ls_services_grid agileits_services_grid2">
                    <h1 id="h1.-bootstrap-heading">h1. Bootstrap heading</h1>
                    <p></p>
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
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- services -->
@stop
