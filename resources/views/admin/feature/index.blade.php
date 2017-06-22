@extends("layouts.admin")
@section("title", "Admin Features")
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
                Features
                <small>list of all features on the platform</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('admin.dashboard.index')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active"><a href="">Features</a></li>
            </ol>
            <form action="{{route('admin.feature.delete')}}" method="post" id="deleteForm">
                {{csrf_field()}}
                <input type="hidden" name="id">
            </form>
            <br>
            @include("partials.alerts")
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-sm-offset-2 col-sm-8 col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <a href="{{route('admin.feature.add')}}" class="btn btn-sm btn-primary"><strong>Add new Feature</strong></a>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="propertiesTable" class="table table-bordered table-striped">
                                <caption class="text-center">All Features</caption>
                                <thead>
                                <tr>
                                    <th>Feature Name</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($features as $feature)
                                    <tr>
                                        <td>{{$feature->name}}</td>
                                        <td>
                                            <a class="btn btn-xs btn-success" href="{{route('admin.feature.edit',['id'=>$feature->id])}}">EDIT</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-xs btn-danger del" data-id="{{$feature->id}}" href="#">DELETE</a>

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
                        displayWait("#propertiesTable");
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