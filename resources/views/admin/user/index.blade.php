@extends("layouts.admin")
@section("title", "Admin Users")
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
        Users
        <small>list of all users on the platform</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('admin.dashboard.index')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"><a href="#">Users</a></li>
      </ol>
      <form action="{{route('admin.user.delete')}}" method="post" id="deleteForm">
          {{csrf_field()}}
          <input type="hidden" name="id"> 
      </form>
       <br>
      @include("partials.alerts")
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
              <table id="usersTable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>E-mail</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                <tr>
                  <td>
                    @if($user->is_admin)
                      <i class="fa fa-key">
                    @endif
                  </td>
                  <td>{{$user->first_name}}</td>
                  <td>{{$user->last_name}}</td>
                  <td>{{$user->email}}</td>
                  <td>
                  	<a class="btn btn-xs btn-danger del" data-id="{{$user->id}}" href="#">DEL</a>
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
    });

    $(document).on("click", ".del", function() {
        
        $("input[name='id']").val( $(this).attr("data-id") );
        eModal.confirm({message:"Are you sure you want to delete? It can't be reversed once done!", title: "Confirm", size: "sm"}).then(function() {
                //ok button clicked
                displayWait("#usersTable");
                document.getElementById("deleteForm").submit();
              }, 
              function() {
                //cancel bt clicked
                //do nothing;
              });
    }); 

  });
</script>
@endsection