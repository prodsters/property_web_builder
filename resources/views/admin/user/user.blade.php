@extends("layouts.admin")
@section("title", "Admin Users")
@section("page:styles")
 <!-- DataTables -->
@endsection
@section("content")

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('admin.dashboard.index')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"><a href="{{ route('admin.user.index')}}">Users</a></li>
        <li class="active"><a href="#">{{$user->first_name}}</a></li>
      </ol>
       <br>
      @include("partials.alerts")
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
          <!-- left column -->
          <div class="col-md-offset-2 col-md-8">
              <!-- general form elements -->
              <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Profile</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <!-- <form role="form"> -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="user-panel">
                                    <img src="http://localhost:8000/assets/admin/img/avatar5.png" class="img-circle" alt="User Image">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <br>
                                <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label class="control-label col-sm-4">First Name:</label>
                                        <div class="col-sm-8">
                                            <p class="form-control-static">{{ $user->first_name }}</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4">Last Name:</label>
                                        <div class="col-sm-8">
                                            <p class="form-control-static">{{ $user->last_name }}</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4">Email:</label>
                                        <div class="col-sm-8">
                                            <p class="form-control-static">{{ $user->email }}</p>
                                        </div>
                                    </div>
                                </form>
                            </div>
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
          <div class="col-sm-offset-2 col-sm-8">
              <div class="box box-success">
                  <!-- /.box-body -->
                  <div class="box-footer text-center">
                      <a href="{{ route('admin.user.index')}}" type="submit" class="btn btn-success btn-lg">Back to Users</a>
                  </div>
              </div>
              <!-- /.box -->
          </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
@section("page:scripts")
<!-- DataTables -->
<script src="{{asset('assets/admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/admin/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>

@endsection