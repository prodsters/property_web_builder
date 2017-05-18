@extends("layouts.admin")
@section("title", "Admin Properties")
@section("page:styles")
 <!-- DataTables -->
<link rel="stylesheet" href="{{asset('assets/admin/plugins/datatables/dataTables.bootstrap.css')}}">
@endsection
@section("content")

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Properties
        <small>list of all properties on the platform</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('admin.dashboard.index')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"><a href="">Properties</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Properties</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="propertiesTable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Title</th>
                  <th>Location</th>
                  <th>For</th>
                  <th>Posted By</th>
                  <th>Posted On</th>
                  <th>Ref. No</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($properties as $property)
                <tr>
                  <td>{{$property->title}}</td>
                  <td>{{$property->city}},{{$property->country}}</td>
                  <td>@if($property->sale)Sale @else Rent @endif</td>
                  <td>{{$property->author}}</td>
                  <td>{{$property->created_at}}</td>
                  <td>{{$property->reference_no}}</td>
                  <td>
                  	<a class="btn btn-xs btn-success" href="{{route('admin.property.edit',['id'=>$property->id])}}">EDIT</a>
                  	<a class="btn btn-xs btn-danger" href="#">DEL</a>
                  </td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
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
<!-- DataTables -->
<script src="{{asset('assets/admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/admin/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
<script type="text/javascript">
	$(function () {
    $('#propertiesTable').DataTable({
      "paging": true,
      // "lengthChange": false,
      // "ordering": true,
      // "info": true,
      // "autoWidth": false
    });
  });
</script>
@endsection