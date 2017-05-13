@extends("layouts.admin")
@section("title", "Add Property Features")
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

    <form role="form" method="POST" action="{{route('admin.property.add.features')}}">
      {{csrf_field()}}
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Property Amenities</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <!-- <form role="form"> -->
              <div class="box-body">
                @for($i = 0; $i < count($features); $i++)
                <div class="row">
                	@for($j = 0; $j < 3; $j++)	
                	<div class="col-sm-4">
		              	<div class="checkbox icheck">
		                      <label>
		                        <input type="checkbox" name="{{$features[$i]['id']}}" > {{$features[$i]['name']}}
		                      </label>
		                 </div>
		            </div>
		             <?php $i++; ?>
		            @endfor     
                </div>
                @endfor
              </div>
              <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
        
        <!-- right column -->
        <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Photos</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <!-- <form class=""> -->
              <div class="box-body">

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
  });
</script>
@endsection