<style>
    input[type=text]:focus {
        border: 1px solid #317eeb;
        box-shadow: 1px 1px 0.5px 0.5px #317eeb;
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
                        <li><a href="#">Spplier</a></li>
                        <li class="active">All Supplier</li>
                    </ol>
                </div>
            </div>

            <div class="card card-border card-primary">
                <div class="card-header"> </div>
                <div class="card-body">
                    <form method="post" action="<?php echo e(url('customer/add')); ?>" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <div class="row">
                            <div class="col-md-3" style="float:left;">
                                <div class="form-group">
                                    <label for="">Title</label>
                                    <div class="input-group">
                                        <input type="text" id="title" name="title" class="form-control"
                                            placeholder="Title" required>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                                        </div>
                                    </div>
                                    <!--input group-->
                                </div>
                                <!--end of from group-->
                                <div class="form-group">
                                    <label for="">Last Name</label>
                                    <div class="input-group">
                                        <input type="text" id="last_name" name="last_name" class="form-control"
                                            placeholder="Last Name" required>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                                        </div>
                                    </div>
                                    <!--input group-->
                                </div>
                                <!--end of from group-->
                                <div class="form-group">
                                    <label for="">Company</label>
                                    <div class="input-group">
                                        <input type="text" id="company" name="company" class="form-control"
                                            placeholder="Company" required>
                                    </div>
                                    <!--input group-->
                                </div>
                                <!--end of from group-->
                            </div>
                            <!--col-->

                            <div class="col-md-3" style="float:left;">
                                <div class="form-group">
                                    <label for="">First name</label>
                                    <div class="input-group">
                                        <input type="text" id="first_name" name="first_name" class="form-control"
                                            placeholder="First Name" required>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                                        </div>
                                    </div>
                                    <!--input group-->
                                </div>
                                <!--end of from group-->
                                <div class="form-group">
                                    <label for="">Middle Name</label>
                                    <div class="input-group">
                                        <input type="text" id="middle_name" name="middle_name" class="form-control"
                                            placeholder="Middle Name" >
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                                        </div>
                                    </div>
                                    <!--input group-->
                                </div>
                                <!--end of from group-->

                                <div class="form-group">
                                    <label for="">Display Name as</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="display_name_as" id="display_name_as" disabled>
                                          
                                    </div>
                                    <!--input group-->
                                </div>
                                <!--end of from group-->
                            </div>
                            <!--col-->


                            <div class="col-md-3" style="float:left;">
                                <div class="form-group">
                                    <label for="">Email Id.</label>
                                    <div class="input-group">
                                        <input type="email" id="email_id" name="email_id" class="form-control"
                                            placeholder="eg.company@gmail.com" required>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-envelope"
                                                    aria-hidden="true"></i></span>
                                        </div>
                                    </div>
                                    <!--input group-->
                                </div>
                                <!--end of from group-->

                                <div class="form-group">
                                    <label for="">Company</label>
                                    <div class="input-group">
                                        <input type="text" id="company_name" name="company_name" class="form-control"
                                            placeholder="Company Name" required>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-building-o"></i></span>
                                        </div>
                                    </div>
                                    <!--input group-->
                                </div>
                                <!--end of from group-->

                                <div class="form-group">
                                    <label for="">Website</label>
                                    <div class="input-group">
                                        <input type="text" id="website" name="website" class="form-control"
                                            placeholder="eg.www.example.com" required>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-globe"
                                                    aria-hidden="true"></i></span>
                                        </div>
                                    </div>
                                    <!--input group-->
                                </div>
                                <!--end of from group-->
                            </div>

                            <div class="col-md-3" style="float:left;">
                                <div class="form-group" style="width:49%;float:left;">
                                    <label for="">Mobile No.</label>
                                    <div class="input-group">
                                        <input type="text" id="mobile_no" name="mobile_no" placeholder=""
                                            data-mask="(999) 999-9999" class="form-control" required>
                                    </div>
                                    <!--input group-->
                                </div>
                                <!--end of from group-->

                                <div class="form-group" style="width:49%; float:left; margin-left:2%;">
                                    <label for="">Phone No.</label>
                                    <div class="input-group">
                                        <input type="text" id="phone_no" name="phone_no" placeholder=""
                                            data-mask="(999) 999-9999" class="form-control">
                                    </div>
                                    <!--input group-->
                                </div>
                                <!--end of from group-->


                                <div class="form-group">
                                    <label for="">Other</label>
                                    <div class="input-group">
                                        <input type="text" id="other" name="other" placeholder="" class="form-control">
                                    </div>
                                    <!--input group-->
                                </div>
                                <!--end of fron group-->


                                <div class="form-group">
                                    <div class="checkbox checkbox-info">
                                        <input id="checkbox3" type="checkbox">
                                        <label for="checkbox3">
                                            Is sub-customer
                                        </label>
                                    </div>
                                    <div class="form-group" style="width:49%;float:left;">
                                        <div class="input-group">
                                            <select class="form-control" name="parent_customer" id="parent_customer" >
                                                <option>Enter parent customer</option>
                                            </select>
                                        </div>
                                        <!--input group-->
                                    </div>
                                    <div class="form-group" style="width:49%;margin-left:2%;float:left;">
                                        <div class="input-group">
                                            <select class="form-control" name="bill_with" id="bill_with" >
                                                <option>Bill with Parents</option>
                                                <option>Bill with Customer</option>
                                            </select>
                                        </div>
                                        <!--input group-->
                                    </div>
                                </div>
                                <!--end of from group-->
                            </div>

                        </div>
                        <!--end of row-->
                        <br><br>
                        <div class="col-xl-12" style="margin-left: -2em;">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                        aria-controls="home" aria-selected="false">
                                        <span class="d-block d-sm-none"><i class="fa fa-home"></i></span>
                                        <span class="d-none d-sm-block"><button type="button"
                                                class="btn btn-inverse btn-custom waves-effect waves-light m-b-5"
                                                style="width:150%">Address</button></span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                        aria-controls="profile" aria-selected="true">
                                        <span class="d-block d-sm-none"><i class="fa fa-user"></i></span>
                                        <span class="d-none d-sm-block"><button type="button"
                                                class="btn btn-inverse btn-custom waves-effect waves-light m-b-5"
                                                style="width:160%">Notes</button></span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="message-tab" data-toggle="tab" href="#message" role="tab"
                                        aria-controls="message" aria-selected="false">
                                        <span class="d-block d-sm-none"><i class="fa fa-envelope-o"></i></span>
                                        <span class="d-none d-sm-block"><button type="button"
                                                class="btn btn-inverse btn-custom waves-effect waves-light m-b-5"
                                                style="width:150%">Tax Info</button></span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="setting-tab" data-toggle="tab" href="#setting" role="tab"
                                        aria-controls="setting" aria-selected="false">
                                        <span class="d-block d-sm-none"><i class="fa fa-cog"></i></span>
                                        <span class="d-none d-sm-block"><button type="button"
                                                class="btn btn-inverse btn-custom waves-effect waves-light m-b-5"
                                                style="width:130%">Payment & Billing</button></span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="attch-tab" data-toggle="tab" href="#attch" role="tab"
                                        aria-controls="attch" aria-selected="false">
                                        <span class="d-block d-sm-none"><i class=""></i></span>
                                        <span class="d-none d-sm-block"><button type="button"
                                                class="btn btn-inverse btn-custom waves-effect waves-light m-b-5"
                                                style="width:130%">Attachments</button></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane  show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Billing Address</label>
                                                <div class="input-group">
                                                    <textarea class="form-control" rows="3" name="billing_address"
                                                        id="billing_address" placeholder="street" required></textarea>
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-map-marker"
                                                                aria-hidden="true"></i></span>
                                                    </div>
                                                </div>
                                                <!--input group-->
                                            </div>
                                            <!--end of from group-->
                                            <div class="form-group" style="width:49%;float:left;">
                                                <input type="text" id="billing_city" name="billing_city"
                                                    class="form-control" placeholder="City/Town" required>
                                            </div>
                                            <div class="form-group" style="width:49%; float:left; margin-left:2%;">
                                                <input type="text" id="billing_state" name="billing_state"
                                                    class="form-control" placeholder="State" required>
                                            </div>

                                            <div class="form-group" style="width:49%;float:left;">
                                                <input type="text" id="billing_pin" name="billing_pin"
                                                    class="form-control" placeholder="PIN Code">
                                                    <span id="billing_pin_check"></span>
                                            </div>
                                            <div class="form-group" style="width:49%; float:left; margin-left:2%;">
                                                <input type="text" id="billing_country" name="billing_country"
                                                    class="form-control" placeholder="Country" required>
                                            </div>
                                        </div>
                                        <!--col-->

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Shipping Address</label>
                                                <div class="input-group">
                                                    <textarea class="form-control" rows="3" id="shipping_address"
                                                        name="shipping_address" placeholder="street"></textarea>
                                                    <div class="input-group-prepend" required>
                                                        <span class="input-group-text"><i class="fa fa-map-marker"
                                                                aria-hidden="true"></i></span>
                                                    </div>
                                                </div>
                                                <!--input group-->
                                            </div>
                                            <!--end of from group-->
                                            <div class="form-group" style="width:49%;float:left;">
                                                <input type="text" id="shipping_city" name="shipping_city"
                                                    class="form-control" placeholder="City/Town" required>
                                            </div>
                                            <div class="form-group" style="width:49%; float:left; margin-left:2%;">
                                                <input type="text" id="shipping_state" name="shipping_state"
                                                    class="form-control" placeholder="State" required>
                                            </div>

                                            <div class="form-group" style="width:49%;float:left;">
                                                <input type="text" id="shipping_pin" name="shipping_pin"
                                                    class="form-control" placeholder="PIN Code" >
                                                    <span id="shipping_pin_check"></span>
                                            </div>
                                            <div class="form-group" style="width:49%; float:left; margin-left:2%;">
                                                <input type="text" id="shipping_country" name="shipping_country"
                                                    class="form-control" placeholder="Country" required>
                                            </div>
                                        </div>
                                        <!--col-->
                                    </div>
                                    <!--row-->
                                </div>
                                <!--tab-pane-->


                                <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Notes</label>
                                                <div class="input-group">
                                                    <textarea class="form-control" rows="5" id="notes"
                                                        name="notes" required></textarea>
                                                </div>
                                                <!--input group-->
                                            </div>
                                            <!--end of from group-->
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="message" role="tabpanel" aria-labelledby="message-tab">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Tax Reg. No.</label>
                                                <div class="input-group">
                                                    <input type="text" id="tax_reg_no" name="tax_reg_no"
                                                        class="form-control" placeholder="" required>
                                                </div>
                                            </div>
                                            <!--end of from group-->
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">CST reg. no.</label>
                                                <div class="input-group">
                                                    <input type="text" id="cst_reg_no" name="cst_reg_no"
                                                        class="form-control" placeholder="" required>
                                                </div>
                                            </div>
                                            <!--end of from group-->
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">PAN No.</label>
                                                <div class="input-group">
                                                    <input type="text" id="pan_no" name="pan_no" class="form-control"
                                                        placeholder="" required>
                                                </div>
                                            </div>
                                            <!--end of from group-->
                                        </div>

                                        <div class="col-md-3">
                                            <div class="checkbox checkbox-info"><br><br>
                                                <input id="checkbox4" type="checkbox">
                                                <label for="checkbox4">
                                                    Apply TDS for this customer
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="tab-pane" id="setting" role="tabpanel" aria-labelledby="setting-tab">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="" style="color:#000;">Preferred payment method</label>
                                                <div class="input-group" style="width: 50%;">
                                                    <select class="form-control" name="payment_method"
                                                        id="payment_method" required>
                                                        <option value="">--select--</option>
                                                        <option>Cash</option>
                                                        <option>Cheque</option>
                                                        <option>credit card</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--end of from group-->
                                            <div class="form-group">
                                                <label for="" style="color:#000;">Preferred delivery method</label>
                                                <div class="input-group" style="width: 50%;">
                                                    <select class="form-control" name="delivery_method"
                                                        id="delivery_method" required>
                                                        <option>--select--</option>
                                                        <option>None</option>
                                                        <option>Print Later</option>
                                                        <option>Send Later</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--end of from group-->
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="" style="color:#000;">Terms</label>
                                                <div class="input-group" style="width: 50%;">
                                                    <select class="form-control" name="terms" id="terms" required>
                                                        <option>--select--</option>
                                                        <option>Due On receipt</option>
                                                        <option>Net 15</option>
                                                        <option>Nwt 30</option>
                                                        <option>Nwt 60</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--end of from group-->

                                            <div class="form-group" style="width:49%;float:left;">
                                                <label for="" style="color:#000;">Opening Balance</label>
                                                <div class="input-group">
                                                    <input type="text" id="opening_balance" name="opening_balance"
                                                        class="form-control" placeholder="" required>
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"  id=""><i class="fa fa-clock-o"
                                                                aria-hidden="true"></i></span>
                                                    </div>
                                                </div>
                                                <!--input group-->
                                            </div>
                                            <!--end of fron group-->


                                            <div class="form-group" style="width:49%; float:left; margin-left:2%;">
                                                <label for="" style="color:#000;">as of</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="mm/dd/yyyy"
                                                        id="datepicker" name="as_of" required>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><i
                                                                class="md md-event"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end of fron group-->
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="attch" role="tabpanel" aria-labelledby="attch-tab">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Attachments</label>
                                            <div class="m-b-30">
                                                <div action="#" class="dropzone" id="dropzone"
                                                    style="min-height: 80px;">
                                                    <div class="fallback">
                                                        <input type="file" name="attachment" id="attachment">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div style="float:right;">
                            <button type="submit" class="btn btn-info waves-effect waves-light w-md m-b-5"
                                id="btnSubmit">Save</button>
                            <button type="button"
                                class="btn btn-inverse btn-custom waves-effect waves-light m-b-5">Cancel</button>
                        </div>
                    </form>
                </div>
                <!--card border-->
            </div>
            <!--end of row-->
        </div>
        <!--end of container fluid-->
    </div>
    <!--end of content-->
</div>
<!--end of content page-->

<script>
    $(document).ready(function () {
        $('#first_name').keyup(function () {
            hello();                
        });
        $('#title').keyup(function () {
            hello();                
        });
       
        function hello() {

            var t_1 = $("#title").val();
            var t_2 = $("#first_name").val();
          
            document.getElementById("display_name_as").value=t_1+" "+t_2;
            
        }
        


    });

</script>

<script>
$(document).ready(function()
 {
   $("#billing_pin_check").hide();
   $("#shipping_pin_check").hide();
  

 var err_billing_pin=true;
 var err_shipping_pin=true;

 $("#billing_pin").blur(function()
		{
			check_bill_pin();
		});
        function check_bill_pin()
{
  
var bill_val=$("#billing_pin").val();

var regexOnlyNumbers=/^[0-9]+$/;
if (bill_val==""||regexOnlyNumbers.test(bill_val) != true)
{
$("#billing_pin_check").show();
$("#billing_pin_check").html("Please enter values between 1-9");

$("#billing_pin_check").focus();
$("#billing_pin_check").css("color","red");

err_billing_pin=false;
}
else
{
err_billing_pin=true;
$("#billing_pin_check").hide();
}
}

$("#shipping_pin").blur(function()
		{
			check_ship_pin();
		});
        function check_ship_pin()
{
  
var ship_val=$("#shipping_pin").val();

var regexOnlyNumbers=/^[0-9]+$/;
if (ship_val==""||regexOnlyNumbers.test(ship_val) != true)
{
$("#shipping_pin_check").show();
$("#shipping_pin_check").html("Please enter values between 1-9");

$("#shipping_pin_check").focus();
$("#shipping_pin_check").css("color","red");

err_shipping_pin=false;
}
else
{
err_shipping_pin=true;
$("#shipping_pin_check").hide();
}
}
$("#btnSubmit").click(function()
 {
    check_bill_pin();
  check_ship_pin();
if((err_billing_pin==true) && (err_shipping_pin==true))
   {
     return true;
   }  
   else
   {
        return false;
   }
 });
 });
</script>
<?php /**PATH C:\xampp\htdocs\arbaba\resources\views/Expenses/customer.blade.php ENDPATH**/ ?>