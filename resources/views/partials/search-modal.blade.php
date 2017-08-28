<!-- Modal -->
<div id="searchModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                <form role="form" action="#" method="POST" id="searchForm">
                    {{csrf_field()}}

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="forn-group">
                                <div class="input-group">
                                    <label for="category">Category</label>
                                    <select name="category" class="form-control">
                                        <option value="rent">For Rent</option>
                                        <option value="sale">For Sale</option>
                                        <option value="lease">For Lease</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="input-group">
                                <label for="state">State</label>
                                <select name="state" class="form-control">
                                    <option value="rent">New</option>
                                    <option value="sale">Under Construction</option>
                                    <option value="lease">Needs Refurbishing</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <label for="state">State</label>
                                <select name="state" class="form-control">
                                    <option value="rent">New</option>
                                    <option value="sale">Under Construction</option>
                                    <option value="lease">Needs Refurbishing</option>
                                </select>
                            </div>
                        </div>
                    </div>

                        <div class="input-group">
                            <label for="category">Category</label>
                            <select name="category" class="form-control">
                                <option value="rent">For Rent</option>
                                <option value="sale">For Sale</option>
                                <option value="lease">For Lease</option>
                            </select>
                        </div>

                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $(document).on("click", "#searchBt", function (event) {
            event.preventDefault();
            $("#searchModal").modal();
        });

//        $("#searchModal").modal();
    });
</script>