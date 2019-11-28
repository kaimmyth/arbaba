
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
                        <li><a href="#">Tools/master </a></li>
                        <li class="active">Department</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-border card-primary">
                        <div class="card-header">
                            <button type="button" class="btn btn-primary" onclick="adddepartment();" style="float:right;">Add New </button>

                        </div>
                        <div class="card-body">
                            <table id="datatable" class="table table-striped table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Department Name</th>
                                        <th>Department Type</th>
                                        <th>Department HOD</th>
                                        <th>Company Name</th>
                                        <th>Branch</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                    <?php $__currentLoopData = $toReturn; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                                <td>&nbsp;<input type="checkbox" name="ids[]" value=""/></td>
                                                <td><?php echo e($value['department_name']); ?></td>
                                                <td><?php echo e($value['department_type']); ?></td>
                                                <td><?php echo e($value['department_hod']); ?></td>
                                                <td><?php echo e($value['company_name']); ?></td>
                                                <td><?php echo e($value['branch']); ?></td>
                                                <td class="actions">
                                                    <a href="javascript:void();" onclick="vieweditdepartment('view', <?php echo e($value['id']); ?>);"><i class="fas fa-eye"></i></a> &nbsp;
                                                   <a href="javascript:void();" onclick="vieweditdepartment('edit', <?php echo e($value['id']); ?>);"><i class="fas fa-pencil-alt"></i></a> &nbsp; 
                                                    <a href="<?php echo e(url('tools-master/delete/department/'.$value['id'])); ?>" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fas fa-trash"></i></a>
                                                </td>
                                        </tr>
                                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        
                                </tbody>
                            </table>
                        </div>
                        <!--card body-->
                    </div>
                    <!--card border-->
                </div>
                <!--col-->
            </div>
            <!--end of row-->
        </div>
    </div>
</div>
</div>


<!-- modal for add department-->
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title mt-0" id="myLargeModalLabel">Department</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo e(url('tools-master/add_department')); ?>" method="POST" id="form-department">
                        <?php echo csrf_field(); ?>
                             <div class="row" style="margin:0 -10px 0 -10px !important;">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Department Name<font color="red">*</font></label>
                                        <input type="text" name="department_name" class="form-control" value="" id="department_name">
                                    </div>
                                        <h6 id="department_name_val"></h6>
                                 </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Department Type<font color="red">*</font></label>
                                        <input type="text" name="department_type" class="form-control" value="" id="department_type">
                                    </div>
                                        <h6 id="department_type_val"></h6>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Department HOD<font color="red">*</font></label>
                                        <input type="text" name="department_hod" class="form-control" value="" id="department_hod">
                                    </div>
                                        <h6 id="department_hod_val"></h6>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Company_name<font color="red">*</font></label>
                                        <input type="text" name="company_name" class="form-control" value="" id="company_name">
                                    </div>
                                        <h6 id="company_name_val"></h6>
                                 </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Branch<font color="red">*</font></label>
                                        <input type="text" name="branch" class="form-control" value="" id="branch"> 
                                    </div>
                                        <h6 id="branch_val"></h6>
                                </div>
                            </div> 
                            <hr/>
                            <div class="col-md-12" style="text-align: right;">
                                    <input type="text" name="hidden_input_id" value="NA" hidden>
                                    <input type="text" name="hidden_input_purpose" value="add" hidden>
                                    <button type="submit" class="btn btn-primary waves-effect" id="btnSubmit">Save</button>
                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button> 
                            </div>    
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- end of model  -->

<!-- view model start -->
<div class="modal department-details-model fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title mt-0" id="myLargeModalLabel">Department Details</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="padding: 0px 0;">
                <table class="table table-bordered table-striped" border="0">
                    <tbody>
                       <br>
                        <tr style="border: none;">
                            <td><p><strong>Department Name</strong></p></td>
                            <td><p id="v_department_name"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Dipartment Type</strong></p></td>
                            <td><p id="v_dipartment_type"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Department HOD</strong></p></td>
                            <td><p id="v_department_hod"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Company_name</strong></p></td>
                            <td><p id="v_company_name"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Branch</strong></p></td>
                            <td><p id="v_branch"></p></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- end model -->


            
    


<script>
// to get employee details from controller through ajax, purpose = edit & view
//add employees
function adddepartment(){

    resetdepartmentForms();
  
    $(".bs-example-modal-lg").modal('show');
}
// reset expensess form fields
function resetdepartmentForms(){
    // reset all fileds in employee form model
    document.getElementById("form-department").reset();
    // assigning hidden inputs
    $("input[name='hidden_input_id'").val("NA");
    $("input[name='hidden_input_purpose'").val("add");
}
function vieweditdepartment(purpose, id){
    
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: "<?php echo e(url('tools-master/get-department-details')); ?>" + "/" + id,
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
               
                document.getElementById("v_department_name").innerHTML = data.department_name;
                document.getElementById("v_dipartment_type").innerHTML = data.department_type;
                document.getElementById("v_department_hod").innerHTML = data.department_hod;
                document.getElementById("v_company_name").innerHTML = data.company_name;
                document.getElementById("v_branch").innerHTML = data.branch;
               
                $('.department-details-model').modal('show');
            }
            else if(purpose=="edit"){
                
                resetdepartmentForms(); // reseting forms
                $("#department_name").val(data.department_name);
                $("#department_type").val(data.department_type);
                $("#department_hod").val(data.department_hod);
                $("#company_name").val(data.company_name);
                $("#branch").val(data.branch);
                
                // assigning hidden inputs
                $("input[name='hidden_input_id'").val(data.id);
                $("input[name='hidden_input_purpose'").val("edit");
                
                $('.bs-example-modal-lg').modal('show'); // department insert form model
            }
            $("#loader1").css("display","none");
        }
    });
}
</script>
<script>
        $("#department_name_val").hide();
        $("#department_type_val").hide();
        $("#department_hod_val").hide();
        $("#company_name_val").hide();
        $("#branch_val").hide();

       var err_department_name = true;
       var err_department_type = true;
       var err_department_hod = true;
       var err_company_name = true;
       var err_branch = true;


       $(document).ready(function(){

            $("#department_name").blur(function(){
                department_name_f();
            });
            function department_name_f(){
                var w =$("#department_name").val();
                var regexOnlyText = /^[a-zA-Z]+$/;
                if (w==""||regexOnlyText.test(w) != true){

                    $("#department_name_val").show();
                    $("#department_name_val").html("This field is required");
                    $("#department_name_val").focus();
                    $("#department_name_val").show();
                    $("#department_name_val").css("color","red",);

                    err_department_name=false;
                }
                else{
                    err_department_name=true;
                    $("#department_name_val").hide();
                }
            }
             $("#department_type").blur(function(){
                department_type_f();
            });
            function department_type_f(){
                var z =$("#department_type").val();
                var regexOnlyText = /^[a-zA-Z]+$/;
                if (z==""||regexOnlyText.test(z) != true){

                    $("#department_type_val").show();
                    $("#department_type_val").html("This field is required");
                    $("#department_type_val").focus();
                    $("#department_type_val").show();
                    $("#department_type_val").css("color","red");
                    err_department_type=false;
                }
                else{
                    err_department_type=true;
                    $("#department_type_val").hide();
                }
            }
            $("#department_hod").blur(function(){
                department_hod_f();
            });
            function department_hod_f(){
                var l =$("#department_hod").val();
                var regexOnlyText = /^[a-zA-Z]+$/;
                if (l==""||regexOnlyText.test(l) != true){

                    $("#department_hod_val").show();
                    $("#department_hod_val").html("This field is required");
                    $("#department_hod_val").focus();
                    $("#department_hod_val").show();
                    $("#department_hod_val").css("color","red");
                    err_department_hod=false;
                }
                else{
                    err_department_hod=true;
                    $("#department_hod_val").hide();
                }
            }
            $("#company_name").blur(function(){
                company_name_f();
            });
            function company_name_f(){
                var z =$("#company_name").val();
                var regexOnlyText = /^[a-zA-Z]+$/;
                if (z==""||regexOnlyText.test(z) != true){

                    $("#company_name_val").show();
                    $("#company_name_val").html("This field is required");
                    $("#company_name_val").focus();
                    $("#company_name_val").show();
                    $("#company_name_val").css("color","red");
                    company_name=false;
                }
                else{
                    company_name=true;
                    $("#company_name_val").hide();
                }
            }
             $("#branch").blur(function(){
                branch_f();
            });
            function branch_f(){
                var t =$("#branch").val();
                var regexOnlyText = /^[a-zA-Z]+$/;
                if (t==""||regexOnlyText.test(t) != true){

                    $("#branch_val").show();
                    $("#branch_val").html("This field is required");
                    $("#branch_val").focus();
                    $("#branch_val").show();
                    $("#branch_val").css("color","red");
                   err_branch=false;
                }
                else{
                   err_branch=true;
                    $("#branch_val").hide();
                }
            }
            $("#btnSubmit").click(function(){

                err_department_name = true;
                err_department_type = true;
                err_department_hod = true;
                err_company_name = true;
                err_branch = true;

                department_name_f();
                department_type_f();
                department_hod_f();
                company_name_f();
                branch_f();

                if((err_department_name==true)&&(err_department_type==true)&&(err_department_hod==true)&&(err_company_name==true)&&(err_branch==true))
                {
                    return true;
                }else{
                    return false;
                }
            });


       });

</script><?php /**PATH C:\xampp\htdocs\arbaba\resources\views/tools-master/department.blade.php ENDPATH**/ ?>