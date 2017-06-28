@extends("layouts.admin")
@section("title", "Admin Add Features")
@section("content")

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add new Feature
        <small>supply full details below</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Features</a></li>
        <li class="active">Add</li>
      </ol>
      <br>
      @include("partials.alerts")
    </section>

    <form role="form" id="addProperty" method="POST" action="{{route('admin.feature.add')}}">
      {{csrf_field()}}
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-offset-3 col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Feature form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <!-- <form role="form"> -->
              <div class="box-body">
                <div class="form-group">
                  <label for="title">Feature Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Example Air Conditioned" required>
                </div>
              </div>
              <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
      <div class="row">
          <div class="col-sm-offset-3 col-sm-6">
              <div class="box box-success">
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <button type="submit" class="btn btn-success btn-lg">Add New Feature</button>
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