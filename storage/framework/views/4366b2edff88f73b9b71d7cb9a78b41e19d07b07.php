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
                                        <button type="button" class="btn btn-inverse btn-rounded waves-effect waves-light m-b-5" onclick="addEmployee();" data-toggle="modal" data-target=".employee" style="float:right;">Add an Employee</button>
                                    </div> 
                                    <div class="card-body"> 
                                        <table id="datatable" class="table table-striped table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                <th>#</th>
                                                <th>NAME</th>
                                                <th>PHONE NO.</th>
                                                <th>EMAIL ADDRESS</th>
                                                <th>ACTION</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $sl_no=1; ?>
                                                <?php $__currentLoopData = $toReturn; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($sl_no++); ?></td>
                                                        <td><?php echo e($value['first_name']); ?></td>
                                                        <td><?php echo e($value['phone_no']); ?></td>
                                                        <td><?php echo e($value['email_id']); ?></td>
                                                        <td><a href="javascript:void();" onclick="viewEditEmployee('view', <?php echo e($value['id']); ?>);"><i class="fas fa-eye"></i></a> &nbsp; <a href="javascript:void();" onclick="viewEditEmployee('edit', <?php echo e($value['id']); ?>);"><i class="fas fa-pencil-alt"></i></a> &nbsp; <a href="<?php echo e(url('employee/delete/'.$value['id'])); ?>" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fas fa-trash"></i></a></td>
                                                    </tr>
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




<!---------------------------------------modal start-------------------------------------------->                   
<div class="modal employee fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title mt-0" id="myLargeModalLabel"><i class="fa fa-users"></i>&nbsp;&nbsp;Employee</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="padding: 0px 0;">
                    <form action=<?php echo e(url('employee/add-edit-employee')); ?> method="post" id="form-employee">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-md-12"><br>
                            <div class="form-group emp-detail">
                                <label for="">Title</label>
                                    <div class="input-group">
                                        <input type="" class="form-control" id="title" name="title" placeholder="" required>
                                    </div>
                                </div><!--form-group-->

                                <div class="form-group emp-detail">
                                <label for="">First Name</label>
                                    <div class="input-group">
                                        <input type="" class="form-control" id="first_name" name="first_name" placeholder="First Name" required>

                                    </div>
                                   <h6 id="first_name_val"></h6>
                                </div><!--form-group-->

                                <div class="form-group emp-detail">
                                <label for="">Last Name</label>
                                    <div class="input-group">
                                        <input type="" class="form-control" id="last_name" name="last_name" placeholder="Last Name" >
                                    </div>
                                    <h6 id="last_name_val"></h6>
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
                                        <input type="email" class="form-control" id="email_id" name="email_id" placeholder="eg.example@gmail.com" required>
                                    </div>
                                    <h6 id="email_id_val"></h6>
                                </div><!--form-group-->

                            <div class="form-group display-detail">
                                <label for="">Phone No.</label>
                                    <div class="input-group">
                                    <input type="text" placeholder="" data-mask="(999) 999-9999" name="phone_no" id="phone_no" class="form-control" required>
                                    </div>
                                </div><!--form-group-->

                            <div class="form-group display-detail">
                                <label for="">Mobile No.</label>
                                    <div class="input-group">
                                    <input type="text" placeholder="" data-mask="(999) 999-9999" name="mobile_no" id="mobile_no" class="form-control">
                                    </div>
                                    <h6 id="mobile_no_val"></h6>
                                </div><!--form-group-->

                            <div class="form-group">
                                <label for="">Address</label>
                                    <div class="input-group">
                                        <textarea class="form-control" rows="5" id="address" name="address" required></textarea>
                                    </div>
                                    <h6 id="address_val"></h6>
                                </div><!--form-group-->

                            <div class="form-group add-detail">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="City/Town" name="city" id="city" required>
                                    </div>
                                </div><!--form-group-->  

                                <div class="form-group add-detail">
                                    <div class="input-group">
                                        <input type="" class="form-control"  placeholder="State" name="state" id="state" required>
                                    </div>
                                </div><!--form-group-->

                                <div class="form-group add-detail">
                                    <div class="input-group">
                                        <input style="display: block;width: 100;" type="text" class="form-control" id="pin_code" name="pin_code" placeholder="PIN Code" required>
                                        <span id="pin_code_check"></span>
                                    </div>

                                </div><!--form-group-->

                                <div class="form-group add-detail">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="country" name="country" placeholder="Country" required>
                                    </div>
                                </div><!--form-group-->

                            <div class="form-group display-detail">
                                <label for="">Billing Rate</label>
                                    <div class="input-group">
                                        <input type="" class="form-control" id="billing_rate" name="billing_rate" placeholder="" required>
                                    </div>
                                    <h6 id="billing_rate_val"></h6>
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
                                        <input type="" class="form-control" id="employee_id_no" name="employee_id_no" placeholder="Employee ID No." required>
                                    </div>
                                    <h6 id="employee_id_no_val"></h6>
                                </div><!--form-group-->

                                <div class="form-group emp-detail">
                                <label for="">Employee ID</label>
                                    <div class="input-group">
                                        <input type="" class="form-control" id="employee_id" name="employee_id" placeholder="Employee ID" required>
                                    </div>
                                    <h6 id="employee_id_val"></h6>
                                </div><!--form-group-->

                                <div class="form-group emp-detail">
                                <label for="">Gender</label>
                                    <select class="form-control" placeholder="Gender" name="gender" id="gender" required>
                                            <option>--select--</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                           
                                        </select>
                                    </div>
                                </div><!--form-group--> 


                                <div class="form-group emp-detail">
                                <label for="">Hire Date</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker" name="hire_date" required>
                                           
                                        </div>
                                </div><!--form-group-->

                            <div class="form-group emp-detail">
                                <label for="">Release Date</label>
                                    <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker2" name="release_date" required>
                                       
                                </div><!--form-group-->

                                <div class="form-group emp-detail">
                                    <label for="">Date of Birth</label>
                                        <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker3" name="dob" required>
                                            
                                </div><!--form-group--> 
                            </div>
                        </div>
                <hr>  
            <div style="width:100%; padding: 0.5px;background: #6f6f6f;"></div><br>
                <div class="d-print-none">
                    <div class="pull-left">
                        <!-- hidden inputs -->
                        <input type="text" name="hidden_input_id" value="NA" hidden>
                        <input type="text" name="hidden_input_purpose" value="add" hidden>
                        <!-- hidden inputs -->
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



<!-- view model start -->
<div class="modal employee-details-model fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title mt-0" id="myLargeModalLabel">Employee Details</h4>
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
                            <td><p><strong>Display Name</strong></p></td>
                            <td><p id="v_display_name"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Email ID</strong></p></td>
                            <td><p id="v_email_id"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>phone_no</strong></p></td>
                            <td><p id="v_phone_no"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Mobile No</strong></p></td>
                            <td><p id="v_mobile_no"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Address</strong></p></td>
                            <td><p id="v_address"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Billing Rate</strong></p></td>
                            <td><p id="v_billing_rate"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Employee ID No</strong></p></td>
                            <td><p id="v_employee_id_no"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Employee ID</strong></p></td>
                            <td><p id="v_employee_id"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>gender</strong></p></td>
                            <td><p id="v_gender"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Hire Date</strong></p></td>
                            <td><p id="v_hire_date"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Release Date</strong></p></td>
                            <td><p id="v_release_date"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>DOB</strong></p></td>
                            <td><p id="v_dob"></p></td>
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
   $("#first_name_val").hide();
   $("#last_name_val").hide();
   $("#email_id_val").hide();
   $("#mobile_no_val").hide();
   $("#address_val").hide();
   $("#billing_rate_val").hide();
   $("#employee_id_no_val").hide();
   $("#employee_id_val").hide();
  
  

    var err_pin_code=true;
    var err_first_name =true;
    var err_last_name =true;
    var err_email_id =true;
    var err_mobile_no = true;
    var err_address=true;
    var err_billing_rate=true;
    var err_employee_id_no=true;
    var err_employee_id = true;






 
    $("#pin_code").blur(function()
        {
            username1();
        });
        function username1()
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

        $("#first_name").blur(function(){

            username2();
        });
        function username2(){

          var k = $("#first_name").val();

          if(k.length==""){

            $("#first_name_val").show();
            $("#first_name_val").html("**please input the first name");
            $("#first_name_val").focus();
            $("#first_name_val").css("color","red");

              err_first_name=false;
              return false;
          }

          else{
                err_first_name=true;
              $("#first_name_val").hide();
              
          }
        }

         $("#last_name").blur(function(){

            username3();
        });
        function username3(){

          var s = $("#last_name").val();

          if(s.length==""){

            $("#last_name_val").show();
            $("#last_name_val").html("**please input last name");
            $("#last_name_val").focus();
            $("#last_name_val").css("color","red");

              err_last_name=false;
              return false;
          }else{
            err_last_name=true;
            $("#last_name_val").hide();
          }
        }


             $("#email_id").keyup(function(){

            username4();
        });
        function username4(){

          var h = $("#email_id").val();
          var v =/^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
          var result = h.match(v);

          if((h.length=="")||(result == null)){

            $("#email_id_val").show();
            $("#email_id_val").html("**please input valid email ");
            $("#email_id_val").focus();
            $("#email_id_val").css("color","red");

              err_email_id=false;
              return false;
          }else{
            err_email_id=true;
            $("#email_id_val").hide();
          }
        }

        $("#mobile_no").keyup(function(){

            username5();
        });
        function username5(){

          var q = $("#mobile_no").val();

          var regexOnlyNumbers=/^[0-9]+$/;
          if((q=="")|| regexOnlyNumbers.test(q)!=true){

            $("#mobile_no_val").show();
            $("#mobile_no_val").html("**please input numbers between 0-9 ");
            $("#mobile_no_val").focus();
            $("#mobile_no_val").css("color","red");

              err_mobile_no=false;
              return false;
          }else{
            err_mobile_no=true;
            $("#mobile_no_val").hide();
          }
        }


         $("#address").blur(function(){

            username6();
        });
        function username6(){

          var l = $("#address").val();

          if(l.length==""){

            $("#address_val").show();
            $("#address_val").html("**please insert address  ");
            $("#address_val").focus();
            $("#address_val").css("color","red");

              err_address=false;
              return false;
          }else{
            err_address=true;
            $("#address_val").hide();
          }
        }

        $("#billing_rate").blur(function(){

            username7();
        });
        function username7(){

          var q = $("#billing_rate").val();

          var regexOnlyNumbers=/^[0-9]+$/;
          if((q=="")|| regexOnlyNumbers.test(q)!=true){

            $("#billing_rate_val").show();
            $("#billing_rate_val").html("**please input numbers between 0-9 ");
            $("#billing_rate_val").focus();
            $("#billing_rate_val").css("color","red");

              err_billing_rate=false;
              return false;
          }else{
            err_billing_rate=true;
            $("#billing_rate_val").hide();
          }
        }

         $("#employee_id_no").blur(function(){

            username8();
        });
        function username8(){

          var e = $("#employee_id_no").val();

          var regexOnlyNumbers=/^[0-9]+$/;
          if((e=="")|| regexOnlyNumbers.test(e)!=true){

            $("#employee_id_no_val").show();
            $("#employee_id_no_val").html("**please input numbers between 0-9 ");
            $("#employee_id_no_val").focus();
            $("#employee_id_no_val").css("color","red");

              err_employee_id_no=false;
              return false;
          }else{
            err_employee_id_no=true;
            $("#employee_id_no_val").hide();
          }
        }

             $("#employee_id").blur(function(){

            username8();
        });
        function username8(){

          var p = $("#employee_id").val();

          if(p.length==""){

            $("#employee_id_val").show();
            $("#employee_id_val").html("**please input employee id");
            $("#employee_id_val").focus();
            $("#employee_id_val").css("color","red");

              err_employee_id=false;
              return false;
          }

          else{
                err_employee_id=true;
              $("#employee_id_val").hide();
              
          }
        }
 $("#btnSubmit").click(function(){

      err_first_name=true;
      err_last_name=true;
      err_email_id=true;
      err_mobile_no=true;
      err_address=true;
      err_billing_rate=true;
      err_employee_id_no=true;
      err_employee_id=true;
     

      username1();
      username2();
      username3();
      username4();
      username5();
      username6();
      username7();
      username8();
     


     if((err_first_name==true)&&(err_last_name==true)&&(err_email_id==true)&&(err_mobile_no==true)&&(err_address==true)&&(err_billing_rate==true)&&(err_employee_id_no==true)&&(err_employee_id==true))
        {
            return true;
        }
        else{
            return false;
            
        }

    });
         




  });
    </script>


<script>
// to get employee details from controller through ajax, purpose = edit & view
//add employees
function addExpenses(){
    resetEmployeeForms();
    $(".employee").modal('show');
}
// reset expensess form fields
function resetEmployeeForms(){
    // reset all fileds in employee form model
    document.getElementById("form-employee").reset();
    // assigning hidden inputs
    $("input[name='hidden_input_id'").val("NA");
    $("input[name='hidden_input_purpose'").val("add");
}
function viewEditEmployee(purpose, id){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: "<?php echo e(url('employee/get-employee-details')); ?>" + "/" + id,
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
                document.getElementById("v_full_name").innerHTML = data.title+" "+data.first_name+" "+data.last_name;
                document.getElementById("v_display_name").innerHTML = data.display_name_as;
                document.getElementById("v_email_id").innerHTML = data.email_id;
                document.getElementById("v_phone_no").innerHTML = data.phone_no;
                document.getElementById("v_mobile_no").innerHTML = data.mobile_no;
                document.getElementById("v_address").innerHTML = data.address+"<br/>"+data.city+", "+data.state+" "+data.country+"<br/>Pin: "+data.pin_code;
                document.getElementById("v_billing_rate").innerHTML = data.billing_rate;
                document.getElementById("v_employee_id_no").innerHTML = data.employee_id_no;
                document.getElementById("v_employee_id").innerHTML = data.employee_id;
                document.getElementById("v_gender").innerHTML = data.gender;
                document.getElementById("v_hire_date").innerHTML = data.hire_date;
                document.getElementById("v_release_date").innerHTML = data.release_date;
                document.getElementById("v_dob").innerHTML = data.dob;
                document.getElementById("v_created_at").innerHTML = data.created_at;
                $('.employee-details-model').modal('show');
            }
            else if(purpose=="edit"){
                resetEmployeeForms(); // reseting forms
                $("#title").val(data.title);
                $("#first_name").val(data.first_name);
                $("#last_name").val(data.last_name);
                $("#display_name_as").val(data.display_name_as);
                $("#email_id").val(data.email_id);
                $("#phone_no").val(data.phone_no);
                $("#mobile_no").val(data.mobile_no);
                $("#address").val(data.address);
                $("#city").val(data.city);
                $("#state").val(data.state);
                $("#country").val(data.country);
                $("#pin_code").val(data.pin_code);
                $("#billing_rate").val(data.billing_rate);
                $("#employee_id_no").val(data.employee_id_no);
                $("#employee_id").val(data.employee_id);
                $("#gender").val(data.gender);
                $("input[name='hire_date']").datepicker('setDate', data.hire_date);
                $("input[name='release_date']").datepicker('setDate', data.release_date);
                $("input[name='dob']").datepicker('setDate', data.dob);

                // assigning hidden inputs
                $("input[name='hidden_input_id'").val(data.id);
                $("input[name='hidden_input_purpose'").val("edit");

                $('.employee').modal('show'); // expense insert form model
            }
            $("#loader1").css("display","none");
        }
    });
}
</script><?php /**PATH C:\xampp\htdocs\arbaba\resources\views/employee/employee.blade.php ENDPATH**/ ?>