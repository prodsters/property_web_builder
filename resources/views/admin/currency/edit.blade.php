@extends("layouts.admin")
@section("title", "Admin Add Features")
@section("content")

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Update Property type
                <small>update property type below</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('admin.dashboard.index')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li><a href="{{route('admin.currency.index')}}">Currency</a></li>
                <li class="active">Update</li>
            </ol>
            <br>
            @include("partials.alerts")
        </section>

        <form role="form" id="addProperty" method="POST">
        {{csrf_field()}}
        <!-- Main content -->
            <section class="content">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-offset-3 col-md-6">
                        <!-- general form elements -->
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Update Property type form</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <!-- <form role="form"> -->
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="title">Name</label>
                                    <input type="text" value="{{$currency->name}}" class="form-control" id="name" name="name" placeholder="Example Flat" required>
                                </div>
                                <div class="form-group">
                                    <label for="title">Symbol</label>
                                    <input type="text" value="{{htmlspecialchars($currency->symbol)}}" class="form-control" id="symbol" name="symbol" placeholder="Example Flat" required>
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
                                <button type="submit" class="btn btn-success btn-lg">Update Property type</button>
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