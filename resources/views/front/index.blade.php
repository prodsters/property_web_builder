<?php $active = "home"; ?>
@extends("layouts.front")
@section("banner-class", "banner")
@section('content')
<!-- banner-bottom -->
<div class="banner-bottom">
    <div class="container">
        <div class="col-md-6 w3layouts_banner_bottom_left">
            <h3>Find your dream Property. A Place your heart long for. Affordable properties for all</h3>
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
            <h5>Curated <span>Properties</span></h5>
        </div>
        <div class="w3_services_grids">
            <a href="{{route('front.properties.type', ['type' => 'rent'])}}">
                <div class="col-md-4 w3l_services_grid">
                <div class="w3ls_services_grid agileits_services_grid">
                    <div class="agile_services_grid1_sub">
                        <p>For Rent</p>
                    </div>
                    <div class="agileinfo_services_grid_pos">
                        <i class="fa fa-user-o" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="wthree_service_text">
                    <h3>Properties For Rent</h3>
                    <small>There are 20 properties for rent starting from $300</small>
                    <h4 class="w3_agileits_service">View All</h4>
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
            </a>
            <a href="{{route('front.properties.type', ['type'=>'sale'])}}">
                <div class="col-md-4 w3l_services_grid">
                <div class="w3ls_services_grid agileits_services_grid2">
                    <div class="agile_services_grid1_sub agileits_w3layouts_ser_sub1">
                        <p>For Sale</p>
                    </div>
                    <div class="agileinfo_services_grid_pos agile_services_grid_pos1">
                        <i class="fa fa-bath" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="wthree_service_text">
                    <h3>Properties for sale</h3>
                    <small>There are 20 properties for sale starting from $300</small>
                    <h4 class="w3_agileits_service2">View All</h4>
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
            </a>

            <div class="col-md-4 w3l_services_grid">
                <div class="w3ls_services_grid agileits_services_grid1">
                    <div class="agile_services_grid1_sub agileits_w3layouts_ser_sub">
                        <p>$ 45,000</p>
                    </div>
                    <div class="agileinfo_services_grid_pos agile_services_grid_pos">
                        <i class="fa fa-home" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="wthree_service_text">
                    <h3>Lands</h3>
                    <small>There are 20 pieces of land for sale starting from $700</small>
                    <h4 class="w3_agileits_service1">View All</h4>
                    <ul>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                        <li>(854)</li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6 w3l_services_grid">
                <div class="w3ls_services_grid agileits_services_grid3">
                    <div class="agile_services_grid1_sub agileits_w3layouts_ser_sub2">
                        <p>$ 23,543</p>
                    </div>
                    <div class="agileinfo_services_grid_pos agile_services_grid_pos2">
                        <i class="fa fa-home" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="wthree_service_text">
                    <h3>Featured Property</h3>
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
            </div>

            <div class="col-md-6 w3l_services_grid">
                <div class="w3ls_services_grid agileits_services_grid4">
                    <div class="agile_services_grid1_sub agileits_w3layouts_ser_sub3">
                        <p>$ 45,426</p>
                    </div>
                    <div class="agileinfo_services_grid_pos agile_services_grid_pos3">
                        <i class="fa fa-home" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="wthree_service_text">
                    <h3>Highly Featured Property</h3>
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
                    <p>Commercial Avenue, Sabo, Yaba, Lagos, Nigeria.</p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-4 w3ls_footer_grid_left">
                <div class="w3ls_footer_grid_leftl">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                </div>
                <div class="w3ls_footer_grid_leftr">
                    <h4>Email</h4>
                    <a href="mailto:hello@prodsters.com">hello[at]prodsters.com</a>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-4 w3ls_footer_grid_left">
                <div class="w3ls_footer_grid_leftl">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                </div>
                <div class="w3ls_footer_grid_leftr">
                    <h4>Call Us</h4>
                    <p>(+234) 08109276123, (+234) 08088020249</p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
@endsection
@section("page:scripts")
    <script type='text/javascript'>//<![CDATA[
        $(window).load(function(){
            $( "#slider-range" ).slider({
                range: true,
                min: 0,
                max: 900,
                values: [ 50, 600 ],
                slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
                }
            });
            $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

        });//]]>
    </script>
    <!-- //range -->
    <!-- start-smooth-scrolling -->
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- start-smooth-scrolling -->
    <!-- here stars scrolling icon -->

    <script type="text/javascript">
        $(document).ready(function() {
            /*
             var defaults = {
             containerID: 'toTop', // fading element id
             containerHoverID: 'toTopHover', // fading element hover id
             scrollSpeed: 1200,
             easingType: 'linear'
             };
             */

            $().UItoTop({ easingType: 'easeOutQuart' });

        });
    </script>
    <!-- //here ends scrolling icon -->

@endsection