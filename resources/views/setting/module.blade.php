
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
                        <li class="active">Module</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-border card-primary">
                        <div class="card-header">
                            <button type="button" class="btn btn-primary" data-toggle="modal"  onclick="addmodule();" style="float:right;">Add New </button>

                        </div>
                        <div class="card-body">
                            <table id="datatable" class="table table-striped table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Module Name</th>
                                        <th>Is Admin</th>
                                        <th>Is Company</th>
                                        <th>Is User</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                      @foreach ($toReturn as $value)
                                        <tr>
                                            <td>&nbsp;<input type="checkbox" name="ids[]" value=""/></td>
                                            <td>{{$value['module_name']}}</td>
                                            <td>{{$value['is_admin']}}</td>
                                            <td>{{$value['is_company']}}</td>
                                            <td>{{$value['is_user']}}</td>
                                            <td class="actions">
                                                <a href="javascript:void();" onclick="vieweditmodule('view', {{$value['id']}});"><i class="fas fa-eye"></i></a> &nbsp;
                                                <a href="javascript:void();" onclick="vieweditmodule('edit', {{$value['id']}});"><i class="fas fa-pencil-alt"></i></a> &nbsp; 
                                            </td>
                                        </tr>
                                         @endforeach
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
                    <h4 class="modal-title mt-0" id="myLargeModalLabel">Module</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{url('setting/module/add')}}" method="POST" id="form-module">
                        @csrf
                             <div class="row" style="margin:0 -10px 0 -10px !important;">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Module Name<font color="red">*</font></label>
                                        <input type="text" name="module_name" class="form-control" value="" id="module_name">
                                    </div>
                                 </div>
                                 <br>
                                 <br>
                                 <div class="col-md-12" style="margin:10px;">
                                    <div class="row">
                                        <div class="col-md-4">
                                          <label class="checkbox-inline"> <input type="checkbox"  value="yes"  name="is_admin" id="is_admin">Is Admin</label>
                                      </div>
                                      <div class="col-md-4">
                                          <label class="checkbox-inline"><input type="checkbox" value="yes"  name="is_company" id="is_company">Is Company</label>
                                      </div>
                                      <div class="col-md-4">
                                          <label class="checkbox-inline"> <input type="checkbox"  value="yes" name="is_user" id="is_user">Is User</label>
                                      </div>
                                  </div>
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
<div class="modal module-details-model fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title mt-0" id="myLargeModalLabel">Module Details</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="padding: 0px 0;">
                <table class="table table-bordered table-striped" border="0">
                    <tbody>
                       <br>
                        <tr style="border: none;">
                            <td><p><strong>Module Name</strong></p></td>
                            <td><p id="v_module_name"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Is Admin</strong></p></td>
                            <td><p id="v_is_admin"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Is Company</strong></p></td>
                            <td><p id="v_is_company"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Is User</strong></p></td>
                            <td><p id="v_is_user"></p></td>
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
function addmodule(){

    resetmoduleForms();
  
    $(".bs-example-modal-sm").modal('show');
}
// reset expensess form fields
function resetmoduleForms(){
    // reset all fileds in employee form model
    document.getElementById("form-module").reset();
    // assigning hidden inputs
    $("input[name='hidden_input_id'").val("NA");
    $("input[name='hidden_input_purpose'").val("add");
}
function vieweditmodule(purpose, id){
    
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: "{{url('setting/module/get-module-details/')}}" + "/" + id,
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
               
                document.getElementById("v_module_name").innerHTML = data.module_name;
                document.getElementById("v_is_admin").innerHTML = data.is_admin;
                document.getElementById("v_is_company").innerHTML = data.is_company;
                document.getElementById("v_is_user").innerHTML = data.is_user;
               
                $('.module-details-model').modal('show');
            }
             else if(purpose=="edit"){
                
                resetmoduleForms(); // reseting forms
                $("#module_name").val(data.module_name);
                $("#is_admin"). prop("checked", data.is_admin);
                $("#is_company").prop("checked",data.is_company);
                $("#is_user").prop("checked",data.is_user);
                // assigning hidden inputs
                $("input[name='hidden_input_id'").val(data.id);
                $("input[name='hidden_input_purpose'").val("edit");
                
                $('.bs-example-modal-sm').modal('show'); // department insert form model
            }
            $("#loader1").css("display","none");
        }
    });
}
</script>