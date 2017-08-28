<?php $active = "properties"; ?>
<?php $title = $property->title . " - Properties Web Builder"; ?>
@extends("layouts.front")
@section("banner-class", "banner1")
@section("page:styles")
<link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/flexisel.css')}}">
@endsection
@section("content")
<div class="header_address_mail" style="background: #fff;text-align:left;">
    <div class="container">
        <div class="agileits_w3layouts_header_address_grid" style="float:left;">
            <ul>
                <li style="color:#000;text-align:justify;">
                    <button id="searchBt" class="btn btn-lg"><span class="fa fa-search-plus"></span> Find Property</button>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="services" style="padding-top: 0px;">
    <div class="container">
        <div class="row">
            <div class="col-sm-offset-1 col-sm-6">
                <div class="w3layouts_header" style="text-align: left;">
                    <h5 style="color: #333333 !important;">{{$property->title}}</h5>
                    <br>
                    <span>{{$property->description}}</span>
                </div>
                <hr>
                <p><strong>Location:</strong> {{$property->street_address}}, {{$property->city}}, {{$property->country}}</p>
                <br>
                @if($property->sale)
                  <p><strong>Current Selling Price:</strong> {{$property->currency->symbol}} {{$property->current_selling_price}}</p>
                   <br>
                @endif
                @if($property->rental)
                    <p><strong>Current Rental Price:</strong> {{$property->currency->symbol}} {{$property->current_rental_price}}</p>
                    <br>
                @endif
                <p><strong>State:</strong> {{$property->state->state}} | <strong>Type:</strong> {{$property->type->type}}</p>
                <br>
                <p><span class="fa fa-bath"></span> {{$property->bathroom_count}} | <span class="fa fa-bed"></span> {{$property->bedroom_count}} | <span class="fa fa-car"></span> {{$property->garage_count}}</p>
                <br>
                <p><a href="#" id="viewAgentContact" onclick="javascript: event.preventDefault(); $('#agc').show();">View Agent's Contact</a></p>
                <br>
                <div id="agc" style="display: none;">
                    <h4>You can reach the Agent for this property via:</h4>
                    <br>
                    <p><span class="fa fa-headphones"></span> {{$property->author['phone']}} </p>
                    <br>
                    <p><span class="fa fa-envelope"></span> {{$property->author['email']}} </p>
                </div>
            </div>
            <div class="col-sm-4">
                <ul id="pictures">
                    <li><img src="{{asset('assets/front/images/1.jpg')}}" class="img-responsive" alt=""/></li>
                    <li><img src="{{asset('assets/front/images/2.jpg')}}" class="img-responsive" alt=""/></li>
                    <li><img src="{{asset('assets/front/images/3.jpg')}}" class="img-responsive" alt=""/></li>
                    <li><img src="{{asset('assets/front/images/4.jpg')}}" class="img-responsive" alt=""/></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@include("partials.search-modal")
@endsection
@section("page:scripts")
    <script type="text/javascript" src="{{asset('assets/front/js/jquery.flexisel.js')}}"></script>
    <script type="text/javascript">
        $(window).load(function() {

            $("#pictures").flexisel({
                visibleItems: 1,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: {
                    portrait: {
                        changePoint:480,
                        visibleItems: 1
                    },
                    landscape: {
                        changePoint:640,
                        visibleItems: 1
                    },
                    tablet: {
                        changePoint:768,
                        visibleItems: 1
                    }
                }
            });

        });
    </script>

@endsection