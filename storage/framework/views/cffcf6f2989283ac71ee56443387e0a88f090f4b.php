<style>
.emp-detail{
    float:left;
    width:32%;
    margin-left:1%;

}
.display-detail{
    float:left;
    width:48%;
    margin-left:1%;

}
.add-detail{
    float:left;
    width:24%;
    margin-left:1%;

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
                                    <li><a href="#">Employee</a></li>
                                    <li class="active">All Employee</li>
                                </ol>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card card-border card-primary">
                                    <div class="card-header"> 
                                        <button type="button" class="btn btn-inverse btn-rounded waves-effect waves-light m-b-5" data-toggle="modal" data-target=".employee" style="float:right;">Add an Employee</button>
                                    </div> 
                                    <div class="card-body"> 
                                       
                                    </div><!--card body--> 
                                </div><!--card border-->
                            </div><!--col-->
                        </div><!--end of row-->
                    </div><!--end of container fluid-->
                </div><!--end of content-->
            </div><!--end of content page-->




<!---------------------------------------modal start-------------------------------------------->                   
<div class="modal employee" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title mt-0" id="myLargeModalLabel"><i class="fa fa-users"></i>&nbsp;&nbsp;Employee</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="padding: 0px 0;">
                    <form action=<?php echo e(url('employee/add')); ?> method="post">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-md-12"><br>
                            <div class="form-group emp-detail">
                                <label for="">Title</label>
                                    <div class="input-group">
                                        <input type="" class="form-control" id="title" name="title" placeholder="">
                                    </div>
                                </div><!--form-group-->

                                <div class="form-group emp-detail">
                                <label for="">First Name</label>
                                    <div class="input-group">
                                        <input type="" class="form-control" id="first_name" name="first_name" placeholder="First Name">
                                    </div>
                                </div><!--form-group-->

                                <div class="form-group emp-detail">
                                <label for="">Last Name</label>
                                    <div class="input-group">
                                        <input type="" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
                                    </div>
                                </div><!--form-group-->

                            <div class="form-group display-detail">
                                <label for="">Display Name as</label>
                                    <div class="input-group">
                                        <input type="" class="form-control" id="display_name_as" name="display_name_as" placeholder="" disabled>
                                    </div>
                                </div><!--form-group-->

                            <div class="form-group display-detail">
                                <label for="">Email Id.</label>
                                    <div class="input-group">
                                        <input type="email" class="form-control" id="email_id" name="email_id" placeholder="eg.example@gmail.com">
                                    </div>
                                </div><!--form-group-->

                            <div class="form-group display-detail">
                                <label for="">Phone No.</label>
                                    <div class="input-group">
                                    <input type="text" placeholder="" data-mask="(999) 999-9999" name="phone_no" id="phone_no" class="form-control">
                                    </div>
                                </div><!--form-group-->

                            <div class="form-group display-detail">
                                <label for="">Mobile No.</label>
                                    <div class="input-group">
                                    <input type="text" placeholder="" data-mask="(999) 999-9999" name="mobile_no" id="mobile_no" class="form-control">
                                    </div>
                                </div><!--form-group-->

                            <div class="form-group">
                                <label for="">Address</label>
                                    <div class="input-group">
                                        <textarea class="form-control" rows="5" id="address" name="address"></textarea>
                                    </div>
                                </div><!--form-group-->

                            <div class="form-group add-detail">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="" placeholder="City/Town" name="city" id="address">
                                    </div>
                                </div><!--form-group-->  

                                <div class="form-group add-detail">
                                    <div class="input-group">
                                        <input type="" class="form-control"  placeholder="State" name="state" id="state">
                                    </div>
                                </div><!--form-group-->

                                <div class="form-group add-detail">
                                    <div class="input-group">
                                        <input style="display: block;width: 100;" type="text" class="form-control" id="pin_code" name="pin_code" placeholder="PIN Code">
                                        <span id="pin_code_check"></span>
                                    </div>
                                </div><!--form-group-->

                                <div class="form-group add-detail">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="country" name="country" placeholder="Country">
                                    </div>
                                </div><!--form-group-->

                            <div class="form-group display-detail">
                                <label for="">Billing Rate</label>
                                    <div class="input-group">
                                        <input type="" class="form-control" id="billing_rate" name="billing_rate" placeholder="">
                                    </div>
                                </div><!--form-group--> 

                                <div class="form-group display-detail"><br><br>
                                    <div class="checkbox checkbox-info">
                                        <input id="checkbox4" type="checkbox">
                                        <label for="checkbox4">
                                            Billable by default
                                        </label>
                                    </div>
                                </div><!--form-group--> 

                            <div class="form-group emp-detail">
                                <label for="">Employee ID No.</label>
                                    <div class="input-group">
                                        <input type="" class="form-control" id="employee_id_no" name="employee_id_no" placeholder="Employee ID No.">
                                    </div>
                                </div><!--form-group-->

                                <div class="form-group emp-detail">
                                <label for="">Employee ID</label>
                                    <div class="input-group">
                                        <input type="" class="form-control" id="employee_id" name="employee_id" placeholder="Employee ID">
                                    </div>
                                </div><!--form-group-->

                                <div class="form-group emp-detail">
                                <label for="">Gender</label>
                                    <select class="form-control" placeholder="Gender" name="gender" id="gender">
                                            <option>--select--</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                           
                                        </select>
                                    </div>
                                </div><!--form-group--> 


                                <div class="form-group emp-detail">
                                <label for="">Hire Date</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker" id="hire_date" name="hire_date">
                                           
                                        </div>
                                </div><!--form-group-->

                            <div class="form-group emp-detail">
                                <label for="">Release Date</label>
                                    <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker2" name="release_date" id="release_date">
                                       
                                </div><!--form-group-->

                                <div class="form-group emp-detail">
                                    <label for="">Date of Birth</label>
                                        <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker3" name="dob" id="dob">
                                            
                                </div><!--form-group--> 
                            </div>
                        </div>
                <hr>  
            <div style="width:100%; padding: 0.5px;background: #6f6f6f;"></div><br>
                <div class="d-print-none">
                    <div class="pull-left">
                        <button type="submit" class="btn btn-primary waves-effect waves-light" id="btnSubmit">Save</a>
                    </div>
                    <div class="pull-right">
                        <button type="button" class="btn btn-secondary waves-effect waves-light" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </div>
<!-----------------------------------------------------------end of modal-------------------------------------------->
<script>
        $(document).ready(function () {
            $('#first_name').keyup(function () {
                display_name();                
            });
            $('#title').keyup(function () {
                display_name();                
            });
           
            function display_name() {
    
                var t_1 = $("#title").val();
                var t_2 = $("#first_name").val();
              
                document.getElementById("display_name_as").value=t_1+" "+t_2;
                
            }
    
        });



    
    </script>  

    <script>
$(document).ready(function()
 {
   $("#pin_code_check").hide();
  
  

 var err_pin_code=true;
 
 $("#pin_code").blur(function()
		{
			check_bill_pin();
		});
        function check_bill_pin()
{
  
var pin_val=$("#pin_code").val();

var regexOnlyNumbers=/^[0-9]+$/;
if (pin_val==""||regexOnlyNumbers.test(pin_val) != true)
{
$("#pin_code_check").show();
$("#pin_code_check").html("Please enter a valid pin");

$("#pin_code_check").focus();
$("#pin_code_check").css("color","red");

err_pin_code=false;
}
else
{
err_pin_code=true;
$("#billing_pin_check").hide();
}
}


$("#btnSubmit").click(function()
 {
    check_bill_pin();
  
if((err_pin_code==true) )
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
<?php /**PATH C:\xampp\htdocs\arbaba\resources\views/Expenses/employee.blade.php ENDPATH**/ ?>