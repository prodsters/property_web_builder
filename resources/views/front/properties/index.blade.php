<?php $active = "properties"; ?>
@extends("layouts.front")
@section("banner-class", "banner1")
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

<!-- properties -->
<div class="services" style="padding-top: 0px;">
    <div class="container">
        @if(count($properties) > 0)
        <div class="w3layouts_header">
            {{--<p><span><i class="fa fa-building-o" aria-hidden="true"></i></span></p>--}}
            <h5>Available <span>Properties {{$type??""}}</span></h5>
        </div>
        <div class="w3_services_grids">
                @for($i = 0; $i < count($properties); $i++)
                  <div class="row">
                    @for($j = 0; $j < 3 && $i < count($properties); $j++)
                   <a href="{{route("front.properties.detail", ["id" => $properties[$i]['id']])}}">
                    <div class="col-md-4 w3l_services_grid">
                        <div class="w3ls_services_grid agileits_services_grid">
                            <div class="agile_services_grid1_sub">
                                <p>$ {{$properties[$i]['current_selling_price']}}</p>
                            </div>
                            <div class="agileinfo_services_grid_pos">
                                <i class="fa fa-user-o" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="wthree_service_text">
                            <h3>{{$properties[$i]['title']}}</h3>
                            <p>Location: {{$properties[$i]['street_address']}}, {{$properties[$i]['city']}}, {{$properties[$i]['region']}}</p>
                            <a href="{{route("front.properties.detail", ["id" => $properties[$i]['id']])}}" class="w3_agileits_service">View Details</a>
                        </div>
                    </div>
                   </a>
                    <?php $i++; ?>
                    @endfor
                  </div>
                @endfor
            @else
                <div class="w3layouts_header">
                    <p><span><i class="fa fa-building-o" aria-hidden="true"></i></span></p>
                    <h5>No Available <span>Properties</span> {{$type}}.
                        <br><br>
                        <span>Use the Find Button to Search for one</span>
                    </h5>
                </div>
            @endif
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //properties -->
  @include("partials.search-modal")
@endsection
