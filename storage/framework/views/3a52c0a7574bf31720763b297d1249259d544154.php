<style>
input[type=text]:focus {
  border: 1px solid #317eeb;
  box-shadow:1px 1px 0.5px 0.5px #317eeb; 
}
</style>

<!-- Start content -->                   
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <!--<h4 class="pull-left page-title">Other Charts</h4>-->
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Expenses</a></li>
                        <li class="active">Suppliers</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-border card-primary">
                        <div class="card-header">
                            <button type="button" class="btn btn-inverse btn-rounded waves-effect waves-light m-b-5" data-toggle="modal" onclick="addSupplier();" style="float:right;">Add Supplier</button>
                        </div> 
                        <div class="card-body"> 
                            <table id="datatable" class="table table-striped table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>SUPPLIER</th>
                                        <th>GST REG TYPE</th>
                                        <th>GSTIN</th>
                                        <th>PHONE</th>
                                        <th>EMAIL</th>
                                        <th>OPENING BALANCE</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $sl_no=1; ?>
                                    <?php $__currentLoopData = $return; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($sl_no); ?></td>
                                            <td><?php echo e($items["title"]." ".$items["first_name"]." ".$items["middle_name"]." ".$items["last_name"]); ?></td>
                                            <td><?php echo e($items["gst_reg_type"]); ?></td>
                                            <td><?php echo e($items["gstin"]); ?></td>
                                            <td><?php echo e($items["mobile_no"]); ?></td>
                                            <td><?php echo e($items["email_id"]); ?></td>
                                            <td><?php echo e($items["opening_balance"]); ?></td>
                                            <td><a href="javascript:void();" onclick="viewEditSupplier('view', <?php echo e($items['id']); ?>);"><i class="fas fa-eye"></i></a> &nbsp; <a href="javascript:void();" onclick="viewEditSupplier('edit', <?php echo e($items['id']); ?>);"><i class="fas fa-pencil-alt"></i></a> &nbsp; <a href="<?php echo e(url('expenses/suppliers/delete/'.$items['id'])); ?>" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fas fa-trash"></i></a></td>
                                        </tr>
                                        <?php $sl_no++; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div><!--card body--> 
                    </div><!--card border-->
                </div><!--col-->
            </div><!--end of row-->
        </div><!--end of container fluid-->
    </div><!--end of content-->
</div><!--end of content page-->


<form action="<?php echo e(url('expenses/suppliers/add-edit')); ?>" method="POST" enctype="multipart/form-data" id="form-suppliers">
    <?php echo csrf_field(); ?>
    <!---------------------------------------modal start-------------------------------------------->                   
    <div class="modal suppliers fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title mt-0" id="myLargeModalLabel"><i class="fas fa-clock"></i>&nbsp;&nbsp;Supplier</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- model body starts -->
                <div class="modal-body" style="padding: 0px 0;">
                    <div class="row">
                        <div class="col-md-3" style="float:left;">
                            <div class="form-group">
                                <label for="">Title</label>
                                    <div class="input-group">
                                        <input type="text" id="title" name="title" class="form-control" placeholder="Title">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                                    </div>
                                </div><!--input group-->
                            </div><!--end of from group-->
                            <div class="form-group">
                                <label for="">Last Name</label>
                                    <div class="input-group">
                                        <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Last Name">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                                    </div>
                                </div><!--input group-->
                            </div><!--end of from group-->
                            <div class="form-group">
                                <label for="">Company</label>
                                    <div class="input-group">
                                        <input type="text" id="company" name="company" class="form-control" placeholder="Company">
                                </div><!--input group-->
                            </div><!--end of from group-->

                            <div class="form-group">
                                <label for="">Address</label>
                                    <div class="input-group">
                                    <textarea class="form-control" rows="3" id="address" name="address"></textarea>
                                </div><!--input group-->
                            </div><!--end of from group-->

                            <div class="form-group"style="width:49%;float:left;">
                                <input type="text" id="city" name="city" class="form-control" placeholder="City/Town">
                            </div>
                            <div class="form-group"style="width:49%; float:left; margin-left:2%;">
                                <input type="text" id="state" name="state" class="form-control" placeholder="State">
                            </div>

                            <div class="form-group"style="width:49%;float:left;">
                                <input type="text" id="pin_code" name="pin_code" class="form-control" placeholder="PIN Code">
                            </div>
                            <div class="form-group"style="width:49%; float:left; margin-left:2%;">
                                <input type="text" id="country" name="country" class="form-control" placeholder="Country">
                            </div>
                        </div><!--col-->

                    <div class="col-md-3" style="float:left;">
                        <div class="form-group">
                                <label for="">First name</label>
                                    <div class="input-group">
                                        <input type="text" id="first_name" name="first_name" class="form-control" placeholder="First Name">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                                    </div>
                                </div><!--input group-->
                            </div><!--end of from group-->
                            <div class="form-group">
                                <label for="">Middle Name</label>
                                    <div class="input-group">
                                        <input type="text" id="middle_name" name="middle_name" class="form-control" placeholder="Middle Name">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                                    </div>
                                </div><!--input group-->
                            </div><!--end of from group-->

                            <div class="form-group">
                                <label for="">Display Name as</label>
                                <input type="text" id="display_name_as" name="display_name_as" class="form-control" placeholder="Middle Name">

                            </div><!--end of from group-->
                            <div class="form-group">
                                <label for="">PAN NO.</label>
                                    <div class="input-group">
                                        <input type="text" id="pan_no" name="pan_no" class="form-control" placeholder="">
                                </div><!--input group-->
                            </div><!--end of from group-->


                            <div class="form-group">
                                <input type="checkbox" id="myCheck" class="checkbox checkbox-success" onclick="myFunction()">&nbsp;&nbsp;<b>Apply TDS for this supplier</b><br>
                                    <div id="options" style="display:none;">
                                        <div class="form-group"style="width:49%;float:left;">
                                            <label for="">Entity</label>  <br> 
                                                <div class="input-group">
                                                    <select class="form-control">
                                                        <option>Choose a TDS ENTRY</option>
                                                        <option>Resident Indivisual</option>
                                                        <option>Resident Other</option>
                                                        <option>NRI Indivisual/HUF</option>
                                                        <option>NRI Other</option>
                                                    </select>
                                            </div><!--input group-->
                                        </div>
                                        <div class="form-group"  style="width:49%;margin-left:2%;float:left;">
                                            <label for="">Section</label> 
                                                <div class="input-group">
                                                    <select class="form-control">
                                                        <option>Choose a TDS ENTRY</option>
                                                        <option>Resident Indivisual</option>
                                                        <option>Resident Other</option>
                                                        <option>NRI Indivisual/HUF</option>
                                                        <option>NRI Other</option>
                                                    </select>
                                            </div><!--input group-->
                                    </div>
                                 <input type="checkbox" id="check1"><b>&nbsp;&nbsp;Override calculation threshold</b>
                            </div>
                        </div><!--end of p-->
                    </div><!--col-->
                       

                    <div class="col-md-3" style="float:left;">
                        <div class="form-group">
                                <label for="">Email Id.</label>
                                    <div class="input-group">
                                        <input type="text" id="email_id" name="email_id" class="form-control" placeholder="eg.company@gmail.com">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                    </div>
                                </div><!--input group-->
                            </div><!--end of from group-->
                           
                            <div class="form-group">
                                <label for="">Company</label>
                                    <div class="input-group">
                                        <input type="text" id="company_name" name="company_name" class="form-control" placeholder="Company Name">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-building-o"></i></span>
                                    </div>
                                </div><!--input group-->
                            </div><!--end of from group-->
                            <div class="form-group">
                                <label for="">Website</label>
                                    <div class="input-group">
                                        <input type="text" id="website" name="website" class="form-control" placeholder="eg.www.example.com">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-globe" aria-hidden="true"></i></span>
                                    </div>
                                </div><!--input group-->
                            </div><!--end of from group-->

                        <div class="form-group">
                             <label for="">Terms</label>
                                <div class="input-group">
                                    <select class="form-control" name="terms" id="terms">
                                        <option value="">--select--</option>
                                        <option>Due On receipt</option>
                                        <option>Net 15</option>
                                        <option>Nwt 30</option>
                                        <option>Nwt 60</option>
                                    </select>
                                </div><!--input group-->
                            </div><!--end of from group-->
                                <div class="form-group">
                                    <label for="">Account No.</label>
                                        <div class="input-group">
                                            <input type="text" id="account_no" name="account_no" class="form-control" placeholder="Appear in memo in terms of all payment"> 
                                    </div><!--input group-->
                                </div><!--end of from group-->
                                <div class="form-group">
                                    <label for="">GSTIN</label>
                                        <div class="input-group">
                                            <input type="text" id="gstin" name="gstin" class="form-control" placeholder="For eg. 29KHIT67895"> 
                                    </div><!--input group-->
                                </div><!--end of from group-->
                            </div>

                    <div class="col-md-3" style="float:left;">
                        <div class="form-group">
                            <label for="">Mobile No.</label>
                                <div class="input-group">
                                    <input type="text" placeholder="" data-mask="(999) 999-9999" name="mobile_no" id="mobile_no" class="form-control">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-mobile" aria-hidden="true"></i></span>
                                </div>
                            </div><!--input group-->
                        </div><!--end of fron group-->
                        <div class="form-group">
                            <label for="">Other</label>
                                <div class="input-group">
                                    <input type="text" placeholder="" class="form-control" name="other" id="other">
                            </div><!--input group-->
                        </div><!--end of fron group-->
                        <div class="form-group">
                            <label for="">Billing Rate(/hr)</label>
                                <div class="input-group">
                                <input type="text" id="billing_rate" name="billing_rate" class="form-control" placeholder="">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                </div>
                            </div><!--input group-->
                        </div><!--end of fron group-->

                        
                        <div class="form-group" style="width:49%;float:left;">
                            <label for="">Opening Balance</label>
                                <div class="input-group">
                                <input type="text" id="opening_balance" name="opening_balance" class="form-control" placeholder="">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                </div>
                            </div><!--input group-->
                        </div><!--end of fron group-->
                        <div class="form-group" style="width:49%; float:left; margin-left:2%;">
                            <label for="">as of</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="datepicker" placeholder="mm/dd/yyyy" name="as_of" autocomplete="off">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="md md-event"></i></span>
                                </div>
                            </div>
                        </div><!--end of fron group-->

                        <div class="form-group">
                            <label for="">GST registration type</label>
                                <div class="input-group">
                                <select class="form-control" name="gst_reg_type" id="gst_reg_type">
                                    <option>--select--</option>
                                    <option>GST Registered Regular</option>
                                    <option>GST Registered Composition</option>
                                    <option>Oversas</option>
                                    <option>SEZ</option>
                                </select>
                            </div><!--input group-->
                        </div><!--end of from group-->
                         <div class="form-group" style="width:49%;float:left;">
                            <label for="">Tax Registration Number</label>
                                <div class="input-group">
                                <input type="text" id="tax_reg_no" name="tax_reg_no" class="form-control" placeholder="">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                </div>
                            </div><!--input group-->
                        </div><!--end of fron group-->
                        <div class="form-group" style="width:49%; float:left; margin-left:2%;">
                            <label for="">Effective<br/>Date</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker2" name="effective_date" autocomplete="off">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="md md-event"></i></span>
                                </div>
                            </div>
                        </div><!--end of fron group-->
                    </div>
                </div><!-- card-body -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Notes</label>
                                <div class="input-group">
                                <textarea class="form-control" rows="3" id="notes" name="notes"></textarea>
                            </div><!--input group-->
                        </div><!--end of from group-->
                    </div>
                    <div class="col-md-6 portlets">
                            <div class="form-group">
                                <label for="">Attachments</label>
                                    <div class="m-b-30">
                                        <div class="dropzone" id="dropzone" style="min-height: 80px;">
                                            <div class="fallback">
                                                <input  type="file" name="attachment" id="attachment">
                                            </div>
                                        </div>
                                        <span id="e_supplier_attachment"></span>
                                    </div>
                                </div>
                            </div>
                        <hr>
                        <div style="float:right;">
                            <!-- hidden inputs -->
                            <input type="text" name="hidden_input_id" value="NA" hidden>
                            <input type="text" name="hidden_input_purpose" value="add" hidden>
                            <input type="text" name="hidden_input_attachment" value="NA" hidden>
                            <!-- hidden inputs -->
                            <button type="submit" class="btn btn-info waves-effect waves-light w-md m-b-5">Save</button>
                            <button type="button" class="btn btn-inverse btn-custom waves-effect waves-light m-b-5" class="close" data-dismiss="modal" aria-label="Close">Cancel</button>
                        </div>
                    </div>
                </div> <!-- modal body ends -->
            </div>
        </div>
    </div>
</form>


<!-- Start content -->                   



<!-- view model start -->
<div class="modal supplier-details-model fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title mt-0" id="myLargeModalLabel">Supplier Details</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="padding: 0px 0;">
                <table class="table table-bordered table-striped" border="0">
                    <tbody>
                        <tr style="border: none;">
                            <td><p><strong>ID</strong></p></td>
                            <td><p id="v_id"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Full Name</strong></p></td>
                            <td><p id="v_full_name"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Display Name As</strong></p></td>
                            <td><p id="v_display_name_as"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Email ID</strong></p></td>
                            <td><p id="v_email_id"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Company Name</strong></p></td>
                            <td><p id="v_company_name">Company Name</p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Other</strong></p></td>
                            <td><p id="v_other"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Company</strong></p></td>
                            <td><p id="v_company"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Website</strong></p></td>
                            <td><p id="v_website"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Billing Rate</strong></p></td>
                            <td><p id="v_billing_rate"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Address</strong></p></td>
                            <td><p id="v_address"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Pan No</strong></p></td>
                            <td><p id="v_pan_no"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Terms</strong></p></td>
                            <td><p id="v_terms"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Opening Balance</strong></p></td>
                            <td><p id="v_opening_balance"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>As Of</strong></p></td>
                            <td><p id="v_as_of"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Account No</strong></p></td>
                            <td><p id="v_account_no"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>GST Registration Type</strong></p></td>
                            <td><p id="v_gst_reg_no"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>GSTIN</strong></p></td>
                            <td><p id="v_gstin"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Tax Registration No</strong></p></td>
                            <td><p id="v_tax_reg_no"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Effective Date</strong></p></td>
                            <td><p id="v_effective_date"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Notes</strong></p></td>
                            <td><p id="v_notes"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Attachment</strong></p></td>
                            <td><p id="v_attachment"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Created At</strong></p></td>
                            <td><p id="v_created_at"></p></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- end model -->



<script>
    function myFunction() {
    var checkBox = document.getElementById("myCheck");
    var options = document.getElementById("options");
    if (checkBox.checked == true){
        options.style.display = "block";
    } else {
        options.style.display = "none";
    }
    }
</script>

<script>
    // to get suppliers details from controller through ajax, purpose = edit & view
    //add supplier
    function addSupplier(){
        resetSupplierForms();
        $(".suppliers").modal('show');
    }
    // reset supplier form fields
    function resetSupplierForms(){
        // reset all fileds in expenses form model
        document.getElementById("form-suppliers").reset();
        // assigning hidden inputs
        $("input[name='hidden_input_id'").val("NA");
        $("input[name='hidden_input_purpose'").val("add");
        $("input[name='hidden_input_attachment'").val("NA");
        //remove old attachment span (link)
        $("#e_supplier_attachment").html("");
    }
    function viewEditSupplier(purpose, id){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "<?php echo e(url('expenses/suppliers/get-suppliers-details')); ?>" + "/" + id,
            method: "GET",
            contentType: 'application/json',
            dataType: "json",
            beforeSend: function(data){
                $("#loader1").css("display","block");
            },
            error: function(xhr){
                alert("error"+xhr.status+", "+xhr.statusText);
            },
            success: function (data) {
                console.log(data);
                if(purpose=="view")
                { 
                    document.getElementById("v_id").innerHTML = data.id;
                    document.getElementById("v_full_name").innerHTML = data.title+" "+data.first_name+" "+data.middle_name+" "+data.last_name;
                    document.getElementById("v_company_name").innerHTML = data.company_name;
                    document.getElementById("v_display_name_as").innerHTML = data.display_name_as;
                    document.getElementById("v_email_id").innerHTML = data.email_id;
                    document.getElementById("v_other").innerHTML = data.other;
                    document.getElementById("v_company").innerHTML = data.company;
                    document.getElementById("v_website").innerHTML = data.website;
                    document.getElementById("v_billing_rate").innerHTML = data.billing_rate;
                    document.getElementById("v_address").innerHTML = data.address+"<br/>"+data.city+", "+data.state+", "+data.country+"<br/>Pin Code: "+data.pin_code;
                    document.getElementById("v_pan_no").innerHTML = data.pan_no;
                    document.getElementById("v_terms").innerHTML = data.terms;
                    document.getElementById("v_opening_balance").innerHTML = data.opening_balance;
                    document.getElementById("v_as_of").innerHTML = data.as_of;
                    document.getElementById("v_account_no").innerHTML = data.account_no;
                    document.getElementById("v_gst_reg_no").innerHTML = data.gst_reg_type;
                    document.getElementById("v_gstin").innerHTML = data.gstin;
                    document.getElementById("v_tax_reg_no").innerHTML = data.tax_reg_no;
                    document.getElementById("v_effective_date").innerHTML = data.effective_date;
                    document.getElementById("v_notes").innerHTML = data.notes;
                    document.getElementById("v_attachment").innerHTML = "<a target='_blank' href='<?php echo e(url('public/images')); ?>"+"/"+data.attachment+"'>View Attachment</a>";
                    document.getElementById("v_created_at").innerHTML = data.created_at;
                    $('.supplier-details-model').modal('show');
                }
                else if(purpose=="edit"){
                    resetSupplierForms(); // reseting forms
                    $("#title").val(data.title);
                    $("#first_name").val(data.first_name);
                    $("#email_id").val(data.email_id);
                    $("#mobile_no").val(data.mobile_no);
                    $("#last_name").val(data.last_name);
                    $("#middle_name").val(data.middle_name);
                    $("#company_name").val(data.company_name);
                    $("#other").val(data.other);
                    $("#company").val(data.company);
                    $("#display_name_as").val(data.display_name_as);
                    $("#website").val(data.website);
                    $("#billing_rate").val(data.billing_rate);
                    $("#address").val(data.address);
                    $("#city").val(data.city);
                    $("#state").val(data.state);
                    $("#pin_code").val(data.pin_code);
                    $("#country").val(data.country);
                    $("#pan_no").val(data.pan_no);
                    $("#terms").val(data.terms);
                    $("#opening_balance").val(data.opening_balance);
                    $("input[name='as_of']").datepicker('setDate', data.as_of);
                    $("#account_no").val(data.account_no);
                    $("#gst_reg_type").val(data.gst_reg_type);
                    $("#gstin").val(data.gstin);
                    $("#tax_reg_no").val(data.tax_reg_no);
                    $("input[name='effective_date']").datepicker('setDate', data.effective_date);
                    $("#notes").val(data.notes);
                    $("#e_supplier_attachment").html("<a target='_blank' href='<?php echo e(url('public/images')); ?>"+"/"+data.attachment+"'>View Previous Attachment</a>");
                    // // assigning hidden inputs
                    $("input[name='hidden_input_id'").val(data.id);
                    $("input[name='hidden_input_purpose'").val("edit");
                    $("input[name='hidden_input_attachment'").val(data.attachment);
    
                    $('.suppliers').modal('show'); // expense insert form model
                }
                $("#loader1").css("display","none");
            }
        });
    }
</script><?php /**PATH C:\xampp\htdocs\arbaba\resources\views/expenses/suppliers.blade.php ENDPATH**/ ?>