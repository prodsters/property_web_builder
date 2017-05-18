@extends("layouts.admin")
@section("title", "Admin Add Properties")
@section("content")

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add new Property
        <small>supply full details below</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Properties</a></li>
        <li class="active">Add</li>
      </ol>
      <br>
      @include("partials.alerts")
    </section>

    <form role="form" id="addProperty" method="POST" action="{{route('admin.property.add')}}">
      {{csrf_field()}}
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">1. Basic Info</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <!-- <form role="form"> -->
              <div class="box-body">
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" max="240" class="form-control" id="title" name="title" placeholder="Example Bungalow" required>
                </div>
                <div class="form-group">
                  <label for="description">Description</label>
                  <textarea max="300" style="resize:resize-y;" class="form-control" rows="5" name="description" required placeholder="This is where you describe the property succintly"></textarea>
                </div>
                <div class="form-group">
                  <label for="type_id">Property Type</label>
                  <select class="form-control" name="type_id">
                    @foreach($types as $type)
                    <option value="{{$type->id}}">{{$type->type}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="state_id">Property State</label>
                  <select class="form-control" name="state_id">
                    @foreach($states as $state)
                    <option value="{{$state->id}}">{{$state->state}}</option>
                    @endforeach
                  </select>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="bedroom_count">Bedrooms</label>
                      <input type="number" min="0" class="form-control" id="bedroom_count" name="bedroom_count" value="0"required >
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="bathroom_count">Bathrooms</label>
                      <input type="number" min="0" class="form-control" id="bathroom_count" name="bathroom_count" value="0"required >
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="garage_count">Garages</label>
                      <input type="number" min="0" class="form-control" id="garage_count" name="garage_count" value="0"required >
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="plot_area">Plot Area</label>
                      <input type="number" min="0" class="form-control" id="plot_area" name="plot_area" value="0" required >
                    </div>
                  </div>
                   <div class="col-sm-4">
                    <div class="form-group">
                      <label for="construction_area">Construction Area</label>
                      <input type="number" min="0" class="form-control" id="construction_area" name="construction_area" value="0" required >
                    </div>
                  </div>
                   <div class="col-sm-4">
                    <div class="form-group">
                      <label>Area Unit</label>
                      <select class="form-control" name="area_unit">
                        <option selected>meter-square</option>
                        <option>feet-square</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
        
        <!-- right column -->
        <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info" id="pricing-info-box">
            <div class="box-header with-border">
              <h3 class="box-title">2. Pricing Info</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <!-- <form class=""> -->
              <div class="box-body">

                <div class="row">
                  <div class="col-sm-3">
                    <div class="checkbox icheck">
                      <label>
                        <input type="checkbox" name="sale"> For Sale
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="checkbox icheck">
                      <label>
                        <input type="checkbox" name="rental"> For Rent
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="checkbox icheck">
                      <label>
                        <input type="checkbox" name="is_featured"> Featured
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="checkbox icheck">
                      <label>
                        <input type="checkbox" name="is_public" checked> Show on Site
                      </label>
                    </div>
                  </div>
                </div>
                <br>
                <div id="selling_price" style="display: none;">
                  <div class="form-group">
                    <label for="current_selling_price">Current Selling Price</label>
                    <input type="number" min="0" class="form-control" id="current_selling_price" name="current_selling_price">
                  </div>
                  <div class="form-group">
                    <label for="original_selling_price">Original Selling Price</label>
                    <input type="number" min="0" class="form-control" id="original_selling_price" name="original_selling_price" >
                  </div>
                </div>
                <div id="rental_price" style="display: none;">  
                  <div class="form-group">
                    <label for="current_rental_price">Current Rental Price</label>
                    <input type="number" min="0" class="form-control" id="current_rental_price" name="current_rental_price" >
                  </div>
                  <div class="form-group">
                    <label for="original_rental_price">Original Rental Price</label>
                    <input type="number" min="0" class="form-control" id="original_rental_price" name="original_rental_price">
                  </div>
                </div>  
                <div class="form-group">
                  <label for="currency_id">Currency</label>
                  <select class="form-control" name="currency_id" required>
                    @foreach($currencies as $currency)
                    <option value="{{$currency->id}}">{{$currency->name}}  (<span>{!!$currency->symbol!!}</span>)</option>
                    @endforeach
                  </select>
                </div>

                <br>
              </div>
              <!-- /.box-body -->
            <!-- </form> -->
          </div>
          <!-- /.box -->
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
      <div class="row">
          <div class="col-sm-6">
            <!-- Form Element sizes -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">3. Property Location</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                      <label for="street_address">Street Address</label>
                      <textarea class="form-control" id="street_address" name="street_address" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                      <label for="street_number">Street Number</label>
                      <input type="number" min="0" class="form-control" id="street_number" name="street_number" value="0">
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                          <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="city" name="city" required>
                          </div>
                      </div>
                      <div class="col-sm-6">   
                          <div class="form-group">
                            <label for="region">Region</label>
                            <input type="text" class="form-control" id="region" name="region" required>
                          </div>
                      </div>   
                    </div>
                    <div class="row">
                        <div class="col-sm-6">      
                          <div class="form-group">
                            <label for="postal_code">Postal Code</label>
                            <input type="text" class="form-control" id="postal_code" name="postal_code" required>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="country">Country</label>
                            <input type="text" class="form-control" id="country" name="country" required>
                          </div>
                        </div>
                    </div>    
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
          </div>
          <div class="col-sm-6">
            <!-- Form Element sizes -->
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Pick Location from Map</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                      <label for="street_address">Features (You can add more than one)</label>
                      <input type="text" class="form-control" placeholder="search map">
                    </div>
                    <div class="form-group">
                      <p class="help-block">Map View</p>
                    </div>  
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
          </div>
      </div>
      <div class="row">
          <div class="col-sm-offset-3 col-sm-6">
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Finalize</h3>
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <button type="submit" class="btn btn-success btn-lg">Create Property Profile</button>
                </div>
              </div>
              <!-- /.box -->
          </div>
      </div>
    </section>
    <!-- /.content -->

    </form>
  </div>
  <!-- /.content-wrapper -->

@endsection
@section("page:scripts")

<script>
  $(function () {

    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      // increaseArea: '20%' // optional
    });

    $("input[name='sale']").on('ifChanged', function(event) {
       if(event.target.checked) {
          $("#selling_price").show("slow");
       } else {
           $("#selling_price").hide("fast");
       }
    });

    $("input[name='rental']").on('ifChanged', function(event) {
       if(event.target.checked) {
          $("#rental_price").show("slow");
       } else {
           $("#rental_price").hide("fast");
       }
    });

    $("#addProperty").on("submit", function(event) {
        event.preventDefault();

        if(!$("input[name='sale']").is(":checked") && !$("input[name='rental']").is(":checked")) {
           showErrorAndNavigate("You have not specify either this property is for sale or rental", "#pricing-info-box"); 
           return false; 
        }

        if( $("input[name='sale']").is(":checked") && !$("#current_selling_price").val() && !$("#original_selling_price").val()) {
           showErrorAndNavigate("Current and Original Selling Price can not be zero though they can be the same", "#pricing-info-box"); 
           return false; 
        }
         if( $("input[name='rental']").is(":checked") && !$("#current_rental_price").val() && !$("#original_rental_price").val()) {
           showErrorAndNavigate("Current and Original Rental Price can not be zero though they can be the same", "#pricing-info-box"); 
           return false; 
        }

        document.getElementById("addProperty").submit();
        
    });


  });

  function showErrorAndNavigate(message, selector) {
    //message to show
    //selector to navigate to
        swal({
                title: "Error",
                text: ""+message,
                type: "error",
                showCancelButton: false,
                confirmButtonText: "OK",
                showConfirmButton: true,
                closeOnConfirm: false
              },
              function(){
                swal.close();
                $(document.body).animate({
                  'scrollTop':   $(''+selector).offset().top
                  }, 300);
              });
  }
</script>
@endsection