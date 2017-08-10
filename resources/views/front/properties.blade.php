<?php $active = "properties"; ?>
@extends("layouts.front")
@section("banner-class", "banner1")
@section("content")
<!-- properties -->
<div class="services">
    <div class="container">
        <div class="w3layouts_header">
            <p><span><i class="fa fa-building-o" aria-hidden="true"></i></span></p>
            <h5>Available <span>Properties</span></h5>
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
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //properties -->
@endsection