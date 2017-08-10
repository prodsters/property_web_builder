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
                <!-- banner-bottom -->
                <div class="banner-bottom">
                    <div class="container">
                        <div class="col-md-6 w3layouts_banner_bottom_left">
                            <h3>real estate investing, even on a very small scale, remains a tried and true
                                means of building an individual's cash flow and wealth</h3>
                        </div>
                        <div class="clearfix"> </div>
                        <div class="w3_banner_bottom_pos">
                            <form action="#" method="post">
                                <h2>Find a property</h2>
                                <div class="agile_book_section_top">
                                    <select onchange="change_country(this.value)" required="">
                                        <option value="">Filter By Keywords</option>
                                        <option value="">Property By Id</option>
                                        <option value="">Location</option>
                                        <option value="">Type</option>
                                        <option value="">Status</option>
                                        <option value="">Price</option>
                                    </select>
                                </div>
                                <div class="agileits_w3layouts_book_section_single">
                                    <div class="w3_agileits_section_room">
                                        <select onchange="change_country(this.value)" required="">
                                            <option value="">Any Type</option>
                                            <option value="">Single</option>
                                            <option value="">Duplex</option>
                                            <option value="">Retail</option>
                                            <option value="">Multi Family</option>
                                        </select>
                                    </div>
                                    <div class="w3_agileits_section_room">
                                        <select onchange="change_country(this.value)" required="">
                                            <option value="">Any Location</option>
                                            <option value="">Australia</option>
                                            <option value="">Sweden</option>
                                            <option value="">Netherlands</option>
                                            <option value="">Bangkok</option>
                                        </select>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="bath">
                                    <h4>Bed rooms</h4>
                                    <input type="number" class="text_box" value="3" min="1">
                                </div>
                                <div class="bath">
                                    <h4>Bath rooms</h4>
                                    <input type="number" class="text_box" value="4" min="1">
                                </div>
                                <div class="clearfix"></div>
                                <div class="wthree_range_slider">
                                    <h4>Price range</h4>
                                    <div id="slider-range"></div>
                                    <input type="text" id="amount" style="border: 0;" />

                                </div>
                                <input type="submit" value="Find properties">
                            </form>
                        </div>
                    </div>
                </div>
                <!-- //banner-bottom -->
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
    });
</script>