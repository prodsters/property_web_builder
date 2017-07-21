@extends("layouts.admin")
@section("title", "Admin Add Property States")
@section("content")

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Add new Property State
                <small>Add new property states below</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('admin.dashboard.index')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li><a href="{{route('admin.property_state.index')}}">Property states</a></li>
                <li class="active">Add</li>
            </ol>
            <br>
            @include("partials.alerts")
        </section>

        <form role="form" id="addProperty" method="POST" action="{{route('admin.property_state.add')}}">
        {{csrf_field()}}
        <!-- Main content -->
            <section class="content">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-offset-3 col-md-6">
                        <!-- general form elements -->
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Property state form</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <!-- <form role="form"> -->
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="title">Property state</label>
                                    <input type="text" class="form-control" id="state" name="state" placeholder="Example Under Construction" required>
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
                                <button type="submit" class="btn btn-success btn-lg">Add new Property state</button>
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