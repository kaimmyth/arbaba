
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
                        <li><a href="#">Setting</a></li>
                        <li class="active">User Role</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-border card-primary">
                        <div class="card-header">
                            <button type="button" class="btn btn-primary" data-toggle="modal"  onclick="adduser_role();" style="float:right;">Add New </button>

                        </div>
                        <div class="card-body">
                            <table id="datatable" class="table table-striped table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>User Role</th>
                                        <th>Is Add</th>
                                        <th>Is Edit</th>
                                        <th>Is View</th>
                                        <th>Is Delete</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                    <?php $__currentLoopData = $toReturn; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td>&nbsp;<input type="checkbox" name="ids[]" value=""/></td>
                                            <td><?php echo e($value['user_role']); ?></td>
                                            <td><?php echo e($value['is_add']); ?></td>
                                            <td><?php echo e($value['is_edit']); ?></td>
                                            <td><?php echo e($value['is_view']); ?></td>
                                            <td><?php echo e($value['is_delete']); ?></td>
                                            <td class="actions">
                                                <a href="javascript:void();" onclick="viewedituser('view', <?php echo e($value['id']); ?>);"><i class="fas fa-eye"></i></a> &nbsp;
                                                <a href="javascript:void();" onclick="viewedituser('edit', <?php echo e($value['id']); ?>);"><i class="fas fa-pencil-alt"></i></a> &nbsp; 
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
    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title mt-0" id="myLargeModalLabel">User Role</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo e(url('setting/user_role/add')); ?>" method="POST" id="form_user_role">
                        <?php echo csrf_field(); ?>
                             <div class="row" style="margin:0 -10px 0 -10px !important;">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">User Role<font color="red">*</font></label>
                                        <input type="text" name="user_role" class="form-control" value="" id="user_role">
                                    </div>
                                 </div>
                                 <br>
                                 <br>
                                 <div class="col-md-12" style="margin:10px;">
                                    <div class="row">
                                        <div class="col-md-3">
                                          <label class="checkbox-inline"> <input type="checkbox"  value="yes"  name="is_add" id="is_add">Is Add</label>
                                      </div>
                                      <div class="col-md-3">
                                          <label class="checkbox-inline"><input type="checkbox" value="yes"  name="is_edit" id="is_edit">Is Edit</label>
                                      </div>
                                      <div class="col-md-3">
                                          <label class="checkbox-inline"> <input type="checkbox"  value="yes" name="is_view" id="is_view">Is View</label>
                                      </div>
                                       <div class="col-md-3">
                                          <label class="checkbox-inline"> <input type="checkbox"  value="yes" name="is_delete" id="is_delete">Is Delete</label>
                                      </div>
                                  </div>
                                  </div>
                            </div> 
                            <br>
                            <hr/>
                            <br>
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
<div class="modal user_role-details-model fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title mt-0" id="myLargeModalLabel">User Role Details</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="padding: 0px 0;">
                <table class="table table-bordered table-striped" border="0">
                    <tbody>
                       <br>
                        <tr style="border: none;">
                            <td><p><strong>User Role</strong></p></td>
                            <td><p id="v_user_role"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Is Add</strong></p></td>
                            <td><p id="v_is_add"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Is Edit</strong></p></td>
                            <td><p id="v_is_edit"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Is View</strong></p></td>
                            <td><p id="v_is_view"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Is Delete</strong></p></td>
                            <td><p id="v_is_delete"></p></td>
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
function adduser_role(){

    resetuser_role();
  
    $(".bs-example-modal-sm").modal('show');
}
// reset expensess form fields
function resetuser_role(){
    // reset all fileds in employee form model
    document.getElementById("form_user_role").reset();
    // assigning hidden inputs
    $("input[name='hidden_input_id'").val("NA");
    $("input[name='hidden_input_purpose'").val("add");
}
function viewedituser(purpose, id){
    
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: "<?php echo e(url('setting/user_role/get_user_role_details/')); ?>" + "/" + id,
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
               
                document.getElementById("v_user_role").innerHTML = data.module_name;
                document.getElementById("v_is_add").innerHTML = data.is_add;
                document.getElementById("v_is_edit").innerHTML = data.is_edit;
                document.getElementById("v_is_view").innerHTML = data.is_view;
                document.getElementById("v_is_delete").innerHTML = data.is_delete;
               
                $('.user_role-details-model').modal('show');
            }
             else if(purpose=="edit"){
                
                resetuser_role(); // reseting forms
                $("#user_role").val(data.user_role);
                $("#is_add"). prop("checked", data.is_add);
                $("#is_edit").prop("checked",data.is_edit);
                $("#is_view").prop("checked",data.is_view);
                $("#is_delete").prop("checked",data.is_delete);
                // assigning hidden inputs
                $("input[name='hidden_input_id'").val(data.id);
                $("input[name='hidden_input_purpose'").val("edit");
                
                $('.bs-example-modal-sm').modal('show'); // department insert form model
            }
            $("#loader1").css("display","none");
        }
    });
}
</script><?php /**PATH C:\xampp\htdocs\arbaba\resources\views/setting/user_role.blade.php ENDPATH**/ ?>