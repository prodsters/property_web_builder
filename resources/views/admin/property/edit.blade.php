@extends("layouts.admin")
@section("title", "Add Property Features")
@section("page:styles")
@endsection
@section("content")
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Property Features
        <small>supply full details below</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Properties</a></li>
        <li class="active">Add Features</li>
      </ol>
      <br>
      @include("partials.alerts")
    </section>

    <!-- Main content -->
    <section class="content">
    <input type="hidden" id="property_id" value="{{$property->id}}">
      <div class="row">
        <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Add Features</a></li>
              <li><a href="#tab_2" data-toggle="tab">Add Photos</a></li>
              <li><a href="#tab_3" data-toggle="tab">Change Pricing</a></li>
              <li><a href="#tab_4" data-toggle="tab">Change Location</a></li>
              <li><a href="#tab_5" data-toggle="tab">Change Basic Details</a></li>
            </ul>
            <div class="tab-content">

              <div class="tab-pane active" id="tab_1">
                  <p class="text-muted"> Mark the available features and click the update button when you are done</p>
                  <div class="box">
                      <div class="box-header with-border">
                        <h3 class="box-title">Available Amenities</h3>
                      </div>
                      <!-- /.box-header -->
                        <div class="box-body">
                        <form action="{{route('admin.property.update.features')}}" method="post" id="updatedFeatures">
                        <input type="hidden" name="property_id" value="{{$property->id}}">
                        <input type="hidden" name="ids">                          
                          {{csrf_field()}}

                          @for($i = 0; $i < count($features); $i++)
                          <div class="row">
                            @for($j = 0; $j < 3; $j++)  
                            <div class="col-sm-4">
                              <div class="checkbox icheck">
                                    <label>
                                      <input type="checkbox" @if(in_array($features[$i]['id'], $property_features)) checked @endif id="{{$features[$i]['id']}}" name="features_checkbox" > {{$features[$i]['name']}}
                                    </label>
                               </div>
                          </div>
                           <?php $i++; ?>
                          @endfor     
                          </div>
                          @endfor
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                          <button id="updatedFeaturesBt" class="btn btn-info pull-left">Save Changes</button>
                        </div>
                        <!-- /.box-footer -->
                  </div>
                  </form>
                    <!-- /.box -->
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="tab_2">
                    <div class="box box-info">
                      <div class="box-header with-border">
                        <h3 class="box-title">Photos</h3>
                        <br>
                        <br>
                         <a class="btn btn-success btn-app" id="addPhotoBt">
                          <i class="fa fa-plus-square"></i> Add Photo
                        </a>
                        <div id="photo-inputs">
                          <input type="file" name="photos" id="photos" style="display: none;">
                        </div>
                      </div>
                      <!-- /.box-header -->
                        <div class="box-body">
                          <?php $im = 0;?>
                          @while($im < count($photos) )
                              <div class="row">
                              <?php $jm = 0; ?>
                            @while($jm < 3 && $im < count($photos))
                            <?php $rowId = str_random(5); ?>
                                <div class="col-sm-4" id="col{{$rowId}}">
                                  <img class="img-responsive" src="{{asset($photos[$im]['url'])}}"/>
                                  <button class="btn btn-xs btn-danger img-del" data-img="{{$photos[$im]['url']}}" data-col="col{{$rowId}}">DELETE</button> 
                                </div>  
                                <?php $jm++; $im++; ?>
                            @endwhile                            
                              </div>
                              <br>
                          @endwhile
                          <br>
                           <div class="row" id="photo-box-body">
                              
                           </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->   
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="tab_3">
                  <div class="box box-info" id="pricing-info-box">
                    <div class="box-body">
                    <form action="{{route('admin.property.update.pricing')}}" method="POST" id="updatePricing">
                       <input type="hidden" name="property_id" value="{{$property->id}}">
                          {{csrf_field()}}
                      <div class="row">
                        <div class="col-sm-6">
                            <div class="col-sm-3">
                              <div class="checkbox icheck">
                                <label>
                                  <input type="checkbox" name="sale" @if($property->sale) checked @endif> For Sale
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-3">
                              <div class="checkbox icheck">
                                <label>
                                  <input type="checkbox" name="rental" @if($property->rental) checked @endif> For Rent
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
                                  <input type="checkbox" name="is_public" @if($property->is_public)checked @endif> Show on Site
                                </label>
                              </div>
                            </div>
                            <br>
                            <div id="selling_price" @if(!$property->sale) style="display: none;" @endif>
                              <div class="form-group">
                                <label for="current_selling_price">Current Selling Price</label>
                                <input type="number" min="0" class="form-control" id="current_selling_price" name="current_selling_price" value="{{$property->current_selling_price}}">
                              </div>
                              <div class="form-group">
                                <label for="original_selling_price">Original Selling Price</label>
                                <input type="number" min="0" class="form-control" id="original_selling_price" name="original_selling_price" value="{{$property->original_selling_price}}">
                              </div>
                            </div>
                            <div id="rental_price" @if(!$property->rental) style="display: none;" @endif>  
                              <div class="form-group">
                                <label for="current_rental_price">Current Rental Price</label>
                                <input type="number" min="0" class="form-control" id="current_rental_price" name="current_rental_price" value="{{$property->current_rental_price}}">
                              </div>
                              <div class="form-group">
                                <label for="original_rental_price">Original Rental Price</label>
                                <input type="number" min="0" class="form-control" id="original_rental_price" name="original_rental_price" value="{{$property->original_rental_price}}">
                              </div>
                            </div>  
                            <div class="form-group">
                              <label for="currency_id">Currency</label>
                              <select class="form-control" name="currency_id" required>
                                @foreach($currencies as $currency)
                                <option @if($currency->id == $property->currency_id) selected @endif value="{{$currency->id}}">{{$currency->name}}  (<span>{!!$currency->symbol!!}</span>)</option>
                                @endforeach
                              </select>
                            </div>
                            <br>
                        </div>
                      </div>    
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                      <button id="updatePricingBt" class="btn btn-info pull-left">Save Changes</button>
                    </div>
                    <!-- /.box-footer -->
                    </form>
                  </div>
                  <!-- /.box --> 
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="tab_4">
                  <div class="row">
                      <div class="col-sm-6">
                        <!-- Form Element sizes -->
                        <form action="{{route('admin.property.update.location')}}" method="post" id="updateLocation">
                           <input type="hidden" name="property_id" value="{{$property->id}}">
                          {{csrf_field()}}
                          <div class="box box-info">
                            <div class="box-body">
                                <div class="form-group">
                                  <label for="street_address">Street Address</label>
                                   <textarea class="form-control" id="street_address" name="street_address" rows="5" required>{{$property->street_address}}</textarea>
                                </div>
                                <div class="form-group">
                                  <label for="street_number">Street Number</label>
                                  <input type="number" min="0" class="form-control" id="street_number" name="street_number" value="{{$property->street_number}}">
                                </div>
                                <div class="row">
                                  <div class="col-sm-6">
                                      <div class="form-group">
                                        <label for="city">City</label>
                                        <input type="text" class="form-control" id="city" name="city" value="{{$property->city}}" required>
                                      </div>
                                  </div>
                                  <div class="col-sm-6">   
                                      <div class="form-group">
                                        <label for="region">Region</label>
                                        <input type="text" class="form-control" id="region" name="region" value="{{$property->region}}" required>
                                      </div>
                                  </div>   
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">      
                                      <div class="form-group">
                                        <label for="postal_code">Postal Code</label>
                                        <input type="text" class="form-control" id="postal_code" name="postal_code"  value="{{$property->postal_code}}" required>
                                      </div>
                                    </div>
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <label for="country">Country</label>
                                        <input type="text" class="form-control" id="country" name="country" value="{{$property->country}}" required>
                                      </div>
                                    </div>
                                </div>    
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                              <button id="updateLocationBt" class="btn btn-info pull-left">Save Changes</button>
                            </div>
                            <!-- /.box-footer -->
                          </div>
                          <!-- /.box -->
                        </form>  
                      </div>
                      <div class="col-sm-6">
                        <!-- Form Element sizes -->
                          <div class="box">
                            <!-- <div class="box-header with-border">
                              <h3 class="box-title">Pick Location from Map</h3>
                            </div> -->
                            <div class="box-body">
                                <div class="form-group">
                                  <label for="street_address">type address here to search on map</label>
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
              </div>

              <div class="tab-pane" id="tab_5">

                <div class="row">
                    <!-- right column -->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="box box-primary">
                            <div class="box-body">
                             <form action="{{route('admin.property.update.details')}}" method="post" id="updateDetails">
                           <input type="hidden" name="property_id" value="{{$property->id}}">
                          {{csrf_field()}}

                              <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" max="240" class="form-control" id="title" name="title" value="{{$property->title}}" required>
                              </div>
                              <div class="form-group">
                                <label for="description">Description</label>
                                <textarea max="300" style="resize:resize-y;" class="form-control" rows="5" name="description" required>{{$property->description}}</textarea>
                              </div>
                            </div>
                        </div>
                    </div>    

                    <!--/.col (left) -->
                    <div class="col-sm-6">
                        <div class="box box-primary">
                          <div class="box-body">
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
                            <div class="row">
                                <div class="col-sm-4">
                                  <div class="form-group">
                                    <label for="bedroom_count">Bedrooms</label>
                                    <input type="number" min="0" class="form-control" id="bedroom_count" name="bedroom_count" value="{{$property->bedroom_count}}" required >
                                  </div>
                                </div>
                                <div class="col-sm-4">
                                  <div class="form-group">
                                    <label for="bathroom_count">Bathrooms</label>
                                    <input type="number" min="0" class="form-control" id="bathroom_count" name="bathroom_count" value="{{$property->bathroom_count}}" required >
                                  </div>
                                </div>
                                <div class="col-sm-4">
                                  <div class="form-group">
                                    <label for="garage_count">Garages</label>
                                    <input type="number" min="0" class="form-control" id="garage_count" name="garage_count" value="{{$property->garage_count}}" required >
                                  </div>
                                </div>
                             </div>
                            <div class="row">
                              <div class="col-sm-4">
                                <div class="form-group">
                                  <label for="plot_area">Plot Area</label>
                                  <input type="number" min="0" class="form-control" id="plot_area" name="plot_area" value="{{$property->plot_area}}" required >
                                </div>
                              </div>
                               <div class="col-sm-4">
                                <div class="form-group">
                                  <label for="construction_area">Construction Area</label>
                                  <input type="number" min="0" class="form-control" id="construction_area" name="construction_area" value="{{$property->construction_area}}" required >
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
                       </div>
                       <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div> 
                <!-- /.row -->

                <div class="row">
                    <div class="col-sm-6">
                        <div class="box box-info">
                          <div class="box-footer">
                            <button id="updateDetailsBt" class="btn btn-info pull-left">Save Changes</button>
                          </div>
                          <!-- /.box-footer -->
                        </div>
                    </div>    
                </div>
               </form> 
              </div>    
              <!-- tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
    
    </section>
    <!-- /.content -->
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

    $("#updateLocationBt").on("click", function(event) {
        event.preventDefault();
        displayWait(".content");
        document.getElementById("updateLocation").submit();
    });
    
    $("#updateDetailsBt").on("click", function(event) {
        event.preventDefault();
        displayWait(".content");
        document.getElementById("updateDetails").submit();
    });

    $("#updatePricingBt").on("click", function(event) {
            event.preventDefault();
            if(!validatePricingInfo()) {
              return false;
            }
            displayWait(".content");
            document.getElementById("updatePricing").submit();
        });

    $("#updatedFeaturesBt").on("click", function(event) {
        event.preventDefault();
        displayWait(".content");
        var ids = ""; 
        $("input[name='features_checkbox']:checked").each(function() {
          ids = ids + $(this).attr("id") + ",";
        });
        $("input[name='ids']").val(ids);
        document.getElementById("updatedFeatures").submit();
    });

    var inputId = 0;
    var rowId= 0; //this is used to track the count of <div class='row'
    var colCount = 0; //this is used to track the number of <div class='col' in a row

    $("#addPhotoBt").on("click", function() {
      //generate random Id
      inputId = Math.floor(Math.random() * 2000);
      // console.log("idFile = " + inputId);
       //add an invisible file picker to the DOM
       $("#photo-inputs").append('<input type="file" name="photos" id="photos_' + inputId + '" style="display: none;" />'); 

       //attach a listener to the invisible file picker
       $("#photos_" + inputId).on("change", function() {
         var file = document.getElementById("photos_" + inputId).files[0];
         console.log("photo changed");
         console.log(file);
         //upload the image to the server
         //and add a preview on the client's browser
         uploadImage(file);
       });

       //trigger click on the invisible file picker
       $("#photos_" + inputId).trigger("click");
    });


    $(document).on("click", ".img-del", function(event) {
        event.preventDefault();
        deleteImage($(this).attr("data-img"), $(this).attr("data-col"));
    });


  });

  function verifyImage(file) {

      // console.log("previewImage called " + file);

        if(!file) { 
          return false;
        }

         if(file.type.indexOf("image") < 0) { //not an image
            swal("Oops", "Only Images are supported as Profile Picture", "error");
            return false;
         }

         if(file.size > 9000000) { //max 9mb
          swal("Oops", "Image File Too Large, max is 9MB", "error");
          return false;
         }

         return true;
  }

  function uploadImage(file, colCount) {

      if(!verifyImage(file)) { return false; }

      //first uplaod the cover_pic
      var formData = new FormData();
      formData.append('file', file);
      formData.append("_token", token);
      formData.append("id", $("#property_id").val());
      $.ajax({
          url: baseUrl + "/admin/property/image/add",
          method: "post",
          data: formData,
          processData: false,
          contentType: false,
          beforeSend: function() {
            displayWait(".tab-content");
          },
          success: function(data) {
              // console.log("url = " + data.url);
              swal("info", "Image uploaded successfully", "info");
              cancelWait(".tab-content");
              previewImage(data);
          },
          error: function (error) {
              swal("error uploading file");
              console.log("error \n" + JSON.stringify(error));
              cancelWait(".tab-content");
              return false;
          }
      });
  }

  function previewImage(data) {

              //count the number of columns created already 
              colCount = $("[id^=col_]").length;

              rowId = Math.floor(Math.random() * 50);

              if(colCount <= 0 || (colCount % 3) == 0) { 
                //create new row when there are 3 columns in the last row
               console.log("create new row");
                var output = '<div class="row" id="row_' + rowId + '"> <div id="col_' + rowId + '" class="col-sm-4"><img class="img-responsive" src="' + baseUrl + '/' + data.url + '" /><button class="btn btn-xs btn-danger img-del" data-img="' + data.url + '" data-col="col_' + rowId + '">DELETE</button> </div> </div>';
                // console.log("generated div = " + output);
                $("#photo-box-body").append(output);
              } else {
                console.log("append column");
                //append to the last row created
                var output = '<div id="col_' + rowId + '" class="col-sm-4"><img class="img-responsive" src="' + baseUrl + '/' + data.url + '" /> <button class="btn btn-xs btn-danger img-del" data-img="' + data.url + '" data-col="col_' + rowId + '">DELETE</button> </div>';
                // console.log(" generated div = " + output);
                var divL = $("[id^=row_]").length;
                console.log("divL == " + divL);
                $("[id^=row_]:last-child").append(output);
                console.log("div content " + $("[id^=row_]")[divL - 1]);
              }
  }

  function deleteImage(imageName, colId) {
      // console.log("delete Image called " + imageName + " COL " + colId);
      $.ajax({
          url: baseUrl + "/admin/property/image/delete",
          method: "post",
          data: {"_token":token,"image":imageName, "id":$("#property_id").val()},
          beforeSend: function() {
            displayWait("#"+colId);
          },
          success: function(data) {
              console.log("delete resp = " + JSON.stringify(data));
              swal("info", "Image Deleted Successfully", "info");
              cancelWait("#"+colId);
              $("#"+colId).remove();
          },
          error: function (error) {
              swal("error deleting file");
              console.log("error \n" + JSON.stringify(error));
              cancelWait("#"+colId);
              return false;
          }
      });
  }

  function validatePricingInfo() {
     
      if(!$("input[name='sale']").is(":checked") && !$("input[name='rental']").is(":checked")) {
           swal("You have not specify either this property is for sale or rental"); 
           return false; 
        }

        if( $("input[name='sale']").is(":checked") && !$("#current_selling_price").val() && !$("#original_selling_price").val()) {
           swal("Current and Original Selling Price can not be zero though they can be the same"); 
           return false; 
        }
         if( $("input[name='rental']").is(":checked") && !$("#current_rental_price").val() && !$("#original_rental_price").val()) {
           swal("Current and Original Rental Price can not be zero though they can be the same");
           return false; 
        }

        return true;
  }






</script>
@endsection