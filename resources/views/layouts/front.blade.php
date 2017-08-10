<!DOCTYPE html>
<html lang="en">
<head>
    <title>@if(isset($title)) {{$title}} @else Property Web Builder @endif</title>
    <!-- custom-theme -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Tenements Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    {{--<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);--}}
        {{--function hideURLbar(){ window.scrollTo(0,1); }--}}
    {{--</script>--}}
    <!-- //custom-theme -->
    <link href="{{asset('assets/front/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('assets/front/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- //js -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/jquery-ui1.css')}}">

    <!-- font-awesome-icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- //font-aweso   me-icons -->

    <link href="//fonts.googleapis.com/css?family=Oswald:300,400,700&amp;subset=latin-ext" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

    @yield("page:styles")

<!-- jQuery 2.2.3 -->
    <script src="{{asset('assets/admin/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>

</head>

<body>
<!-- header -->
<div class="header">
    <div class="container">
        <div class="w3_agile_logo">
            <h1><a href="{{route('front.index')}}"><span>P</span>roperty <span>W</span>eb <span>B</span>uilder</a></h1>
        </div>
        <div class="agile_header_social">
            <ul class="agileits_social_list">
                <li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                <li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>

<div class="header_address_mail">
    <div class="container">
        <div class="agileits_w3layouts_header_address_grid">
            <ul>
                <li><a href="mailto:info@example.com">info@example.com</a></li>
                <li><i class="fa fa-phone" aria-hidden="true"></i></li>
                <li>+(234) 123 234 22</li>
            </ul>
        </div>
    </div>
</div>
<!-- header -->

<!-- banner -->
<div class="@yield("banner-class")">
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
                    <?php if(!isset($active) || $active == null) $active = ""; ?>
                    <ul class="nav navbar-nav w3_agile_nav">
                        <li class="@if($active == "home") active @endif"><a href="{{route("front.index")}}"><span>Home</span></a></li>
                        <li class="@if($active == "properties") active @endif"><a href="{{route('front.properties')}}"><span>Properties</span></a></li>
                        <li class="@if($active == "about") active @endif"><a href="#"><span>About Us</span></a></li>
                        <li><a href="#"><span>Contact Us</span></a></li>
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
                </nav>
            </div>
        </nav>
    </div>
</div>
<!-- //banner -->



@yield('content')

<!-- footer -->
<div class="newsletter">
    <div class="w3l_footer_pos">
        <p>© 2017 Tenements. All Rights Reserved | Design by <a href="https://w3layouts.com/">W3layouts</a></p>
        <div class="w3ls_newsletter_social">
            <ul class="agileits_social_list">
                <li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                <li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
</div>
{{--footer--}}

<!-- Bootstrap 3.3.6 -->
<script src="{{asset('assets/admin/bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/jquery-ui.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/easing.js')}}"></script>

@yield("page:scripts")



</body>
</html>