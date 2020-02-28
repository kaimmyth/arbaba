<style type="text/css">
    .row {
        margin-right: 0px;
        margin-left: 0px;
    }
</style>
<!-- Start content -->
<div class="content-page">
    <div class="content">
        <div class="container-fluid">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">

                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Home </a></li>
                        <li><a href="#">purchase </a></li>
                        <li class="active">Purchase Orders</li>
                    </ol>
                </div>
            </div>



            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-border card-primary">
                        <div class="card-header">
                            <button type="button" class="btn btn-inverse btn-rounded waves-effect waves-light m-b-5" data-toggle="modal" data-target=".recurring-expenses" style="float:right;">Add New </button>
                        </div>
                        <div class="card-body">
                            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" name="chkall[]" id="selectall" onClick="selectAll(this)" /></th>
                                        <th>Date</th>
                                        <th>Purchase Order</th>
                                        <th>Reference</th>
                                        <th>client Name</th>
                                        <th>Status</th>
                                        <th>Bill Status</th>
                                        <th>Amount</th>
                                        <th>Expected Delivery Date</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
</div>


<!-- modal -->


    <!--  Modal content for the above example -->
    <div class="modal fade bs-example-modal-lg recurring-expenses" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
        <div class="modal-dialog modal-lg">
            <form action="{{url('purchases/add')}}" method="post">
                @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title mt-0" >Purchase Orders</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Client Name</label>
                                <input type="text" name="client_name" class="form-control" value="" id="client_name">
                            </div>
                            <h6 id="client_name_val"></h6>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                            <label for="exampleInputEmail1">Client  Address</label>
                            <input type="text" name="client_address" class="form-control" value="" id="client_address">
                            </div>
                            <h6 id="client_address_val"></h6>
                        </div>
                        <!-- <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Purchase Order NO.</label>
                                <input type="text" name="purchase_order" class="form-control" value="" id="purchase_order">
                            </div>
                            <h6 id="purchase_order_val"></h6>
                        </div> -->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Candidate</label>
                                <input type="text" name="Candidate_name" class="form-control" value="" id="Candidate_name">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Job Title</label>
                                <input type="date" name="job_title" class="form-control" value="" id="job_title" placeholder="dd/mm/yyyy">

                            </div>
                            <h6 id="job_title_val"></h6>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Start Date</label>
                                <input type="date" name="start_date" class="form-control" value="" id="start_date" placeholder="dd/mm/yyyy">
                            </div>
                            <h6 id="start_date_val"></h6>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Invoice Cycle:: </label>
                                <input type="text" name="invoice_cycle" class="form-control" value="" id="invoice_cycle">
                            </div>
                            <h6 id="invoice_cycle_val"></h6>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Duration: </label>
                                <input type="text" name="duration" class="form-control" value="" id="duration">
                            </div>
                            <h6 id="duration_val"></h6>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Work Hours: </label>
                                <input type="text" name="work_hours" class="form-control" value="" id="work_hours">
                            </div>
                            <h6 id="work_hours_val"></h6>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Over Time: </label>
                                <input type="text" name="over_time" class="form-control" value="" id="over_time">
                            </div>
                            <h6 id="over_time_val"></h6>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Billing Rate: </label>
                                <input type="text" name="billingrate" class="form-control" value="" id="billingrate">
                            </div>
                            <h6 id="billingrate_val"></h6>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Pay Terms: </label>
                                <input type="text" name="pay_terms" class="form-control" value="" id="pay_terms">
                            </div>
                            <h6 id="pay_terms_val"></h6>
                        </div>
                    </div>
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="modal-title mt-0" >Client Signature</h4>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="notes">Name: </label>
                                <input type="text" name="client_hr_name" class="form-control" value="" id="client_hr_name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="notes">Title:  </label>
                                <input type="text" name="client_hr_title" class="form-control" value="" id="client_hr_title">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="notes">Date: </label>
                                <input type="text" name="client_hr_date" class="form-control" value="" id="client_hr_date">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="modal-title mt-0" >Supplier Signature</h4>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="notes">Timesheets: </label>
                                <input type="text" name="pay_terms" class="form-control" value="" id="pay_terms">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="notes">Timesheets: </label>
                                <input type="text" name="pay_terms" class="form-control" value="" id="pay_terms">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="notes">Timesheets: </label>
                                <input type="text" name="pay_terms" class="form-control" value="" id="pay_terms">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="notes">Timesheets: </label>
                                <input type="text" name="pay_terms" class="form-control" value="" id="pay_terms">
                        </div>
                    </div>
                </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="notes">Timesheets: </label>
                            <textarea class="form-control" rows="3" id="imesheets" name="timesheets" required></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="notes">Invoices: </label>
                            <textarea class="form-control" rows="3" id="invoices" name="invoices" required></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">

                        <div class="form-group">
                            <label class="notes">Notes</label>
                            <textarea class="form-control" rows="3" id="notes" name="notes" required></textarea>
                        </div>
                    </div>

                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Attachments</label>
                        <div class="dropzone" id="dropzone" style="min-height: 55px">
                            <div class="fallback">
                                <input type="file" name="attachment" id="attachment">
                            </div>
                        </div>
                    </div>
                    <hr />
                </div>

                <div class="col-md-12" style="text-align: right;">
                    <button type="submit" class="btn btn-primary waves-effect" id="btn">Save</button>
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
            </form>
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    </div>



    <script>
        $(document).ready(function () {
            $("#client_name_val").hide();
            $("#start_date_val").hide();
            $("#delivery_date_val").hide();
            $("#purchase_order_val").hide();
            var err_client_name_val = true;
            var err_start_date_val = true;
            var err_delivery_date_val = true;
            var err_purchase_order_val = true;
            $("#client_name").blur(function () {
                client_name_f();
            });
            function client_name_f() {

                var d = $("#client_name").val();

                if (d.length == "") {
                    $("#client_name_val").show();
                    $("#client_name_val").html("This field is required ");
                    $("#client_name_val").focus();
                    $("#client_name_val").css("color", "red");

                    err_client_name_val = false;
                    return false;

                }
                else {
                    err_client_name_val = true;
                    $("#client_name_val").hide();
                }
            }

            $('#start_date').blur(function () {
                start_date_f();
            });
            function start_date_f() {

                var k = $("#start_date").val();

                if (k.length == "") {

                    $("#start_date_val").show();
                    $("#start_date_val").html("This field is required");
                    $("#start_date_val").focus();
                    $("#start_date_val").css("color", "red");
                    err_start_date_val = false;
                }
                else {
                    err_start_date_val = true;
                    $("#start_date_val").hide();
                }
            }

            $('#delivery_date').blur(function () {
                delivery_date_f();
            });
            function delivery_date_f() {
                var o = $("#delivery_date").val();
                if (o.length == "") {
                    $("#delivery_date_val").show();
                    $("#delivery_date_val").html("This field is required");
                    $("#delivery_date_val").focus();
                    $("#delivery_date_val").css("color", "red");
                    err_delivery_date_val = false;
                }
                else {
                    err_delivery_date_val = true;
                    $("#delivery_date_val").hide();
                }
            }


            $('#purchase_order').blur(function () {
                purchase_order_f();
            });
            function purchase_order_f() {
                var b = $("#purchase_order").val();
                if (b.length == "") {
                    $("#purchase_order_val").show();
                    $("#purchase_order_val").html("This field is required");
                    $("#purchase_order_val").focus();
                    $("#purchase_order_val").css("color", "red");
                    err_purchase_order_val = false;
                }
                else {
                    err_purchase_order_val = true;
                    $("#purchase_order_val").hide();
                }
            }


            $("#btn").click(function () {
                err_client_name_val = true;
                err_start_date_val = true;
                err_purchase_order_val = true;
                err_delivery_date_val = true;
                client_name_f();
                start_date_f();
                purchase_order_f();
                delivery_date_f();

                if ((err_client_name_val == true) && (err_start_date_val == true) && (err_purchase_order_val == true) && (err_delivery_date_val == true)) {
                    return true;
                }
                else {
                    return false;
                }
            });
        });
    </script>