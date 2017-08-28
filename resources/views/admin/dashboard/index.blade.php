@extends("layouts.admin")
@section("title", "Admin Dashboard")
@section("page:styles")
<!-- jvectormap -->
  <link rel="stylesheet" href="{{asset('assets/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
  {!! Charts::styles() !!}
@endsection
@section("content")
 
  <!-- Content Wrapper. Contains page content -->
 
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        @if(Auth::user()->is_admin)SuperAdmin @else Admin @endif Dashboard
      </h1>
      <ol class="breadcrumb">
        <li class="active">Dashboard</li>
      </ol>
      <br>
      @include("partials.alerts")
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-home-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">PROPERTIES</span>
              <span class="info-box-number">{{$propertyCount}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">USERS</span>
              <span class="info-box-number">{{$userCount}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Properties Distribution Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="chart">
                    <!-- Main Application (Can be VueJS or other JS framework) -->
                      <center>
                        {!! $chart->html() !!}
                      </center>
                    <!-- End Of Main Application -->
                    {!! Charts::scripts() !!}
                    {!! $chart->script() !!}
                  </div>
                  <!-- /.chart-responsive -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- ./box-body -->
            <div class="box-footer">
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->
@endsection


@section("page:scripts")
<!-- Sparkline -->
<script src="{{asset('assets/admin/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{asset('assets/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('assets/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- ChartJS 1.0.1 -->
<script src="{{asset('assets/admin/plugins/chartjs/Chart.min.js')}}"></script>
<script src="{{asset('assets/admin/js/pages/dashboard2.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('assets/admin/js/demo.js')}}"></script>
@endsection