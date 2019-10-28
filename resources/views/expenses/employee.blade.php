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
                                                @foreach ($toReturn as $value)
                                                    <tr>
                                                        <td>{{$sl_no++}}</td>
                                                        <td>{{$value['first_name']}}</td>
                                                        <td>{{$value['phone_no']}}</td>
                                                        <td>{{$value['email_id']}}</td>
                                                        <td><a href="javascript:void();" onclick="viewEditEmployee('view', {{$value['id']}});"><i class="fas fa-eye"></i></a> &nbsp; <a href="javascript:void();" onclick="viewEditEmployee('edit', {{$value['id']}});"><i class="fas fa-pencil-alt"></i></a> &nbsp; <a href="{{url('employee/delete/'.$value['id'])}}" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fas fa-trash"></i></a></td>
                                                    </tr>
                                                @endforeach
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
                    <form action={{url('employee/add-edit-employee')}} method="post" id="form-employee">
                    @csrf
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
                                </div><!--form-group-->

                                <div class="form-group emp-detail">
                                <label for="">Last Name</label>
                                    <div class="input-group">
                                        <input type="" class="form-control" id="last_name" name="last_name" placeholder="Last Name" >
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
                                        <input type="email" class="form-control" id="email_id" name="email_id" placeholder="eg.example@gmail.com" required>
                                    </div>
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
                                </div><!--form-group-->

                            <div class="form-group">
                                <label for="">Address</label>
                                    <div class="input-group">
                                        <textarea class="form-control" rows="5" id="address" name="address" required></textarea>
                                    </div>
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
                                </div><!--form-group-->

                                <div class="form-group emp-detail">
                                <label for="">Employee ID</label>
                                    <div class="input-group">
                                        <input type="" class="form-control" id="employee_id" name="employee_id" placeholder="Employee ID" required>
                                    </div>
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
        url: "{{url('employee/get-employee-details')}}" + "/" + id,
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
</script>