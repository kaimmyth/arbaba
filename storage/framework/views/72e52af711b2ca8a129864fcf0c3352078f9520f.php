<style type="text/css">
  .row {
    margin-right: 0px;
    margin-left: 0px;
  }

</style>
<!-- Start content -->
<div class="content-page" >
    <div class="content">
        <div class="container-fluid">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">

                <ol class="breadcrumb pull-right">
                    <li><a href="#">Home </a></li>
                    <li><a href="#">Sales </a></li>
                    <li class="active">Products & Services</li>
                </ol>
                </div>
            </div>



            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-border card-primary">
                        <div class="card-header">
                            <button type="button" class="btn btn-inverse btn-rounded waves-effect waves-light m-b-5" onclick="addaccounts();" style="float:right;">Account</button>
                        </div> 
                        <div class="card-body">

                
                            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                    <th><input type="checkbox" name="chkall[]" id="selectall" onClick="selectAll(this)" /></th>
                                    <th>Name</th>
                                    <th>Account type</th>
                                    <th>Detail type</th>
                                    <th>Default tax code</th>
                                    <th>Balance</th>
                                    <th>As of</th>
                                    <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                 <?php $__currentLoopData = $toReturn; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                    <td>&nbsp;<input type="checkbox" name="ids[]" value="" /></td>
                                    <td><?php echo e($items['name']); ?></td>
                                    <td><?php echo e($items['account_type']); ?></td>
                                    <td><?php echo e($items['detail_type']); ?></td>
                                    <td><?php echo e($items['default_tax_code']); ?></td>
                                    <td><?php echo e($items['balance']); ?></td>
                                    <td><?php echo e($items['as_of']); ?></td>
                                    <td>
                                        <a href="javascript:void();" onclick="viewEditProductsAndServices('view', <?php echo e($items['id']); ?>);"><i class="fas fa-eye"></i></a> &nbsp; 
                                        <a href="javascript:void();" onclick="viewEditProductsAndServices('edit', <?php echo e($items['id']); ?>);"><i class="fas fa-pencil-alt"></i></a> &nbsp; 
                                        <a href="<?php echo e(url('accounting/delete/'.$items['id'])); ?>" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fas fa-trash"></i></a>
                                    </td>

                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>




<div class="modal account fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
   <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title mt-0" id="myLargeModalLabel"><i class="fa fa-users"></i>&nbsp;&nbsp;Accounts</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="padding: 0px 0;">
                <?php if($errors->any()): ?>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
                <form action="<?php echo e(url('accounting/add')); ?>" method="post" id="accounts-forms">
                    <?php echo csrf_field(); ?>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Account type:</label>
                                <select class="form-control" placeholder="account type" name="account_type" id="account_type" required>
                                    <option>Bank</option>
                                    <option>Current assets</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="text">Detail type:</label>
                               <select class="form-control" placeholder="" name="detail_type" id="detail_type" required>
                                    <option>cash and cash equivalent</option>
                                    <option>cash on hand</option>
                                    <option>client trust account</option>
                                    <option>current</option>
                                    <option>Money marcket</option>
                                    <option>other ermarked bank accounts</option>
                                    <option>rents held in trust</option>
                                    <option>savings</option>
                                </select>
                            </div>

                            <div class="form-group">

                                <div style="padding:80px; background-color:lightgrey;"><p></p>

                                </div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                  <label for="pwd">Name:</label>
                                  <input type="text" class="form-control" id="name" placeholder="name" name="name">
                            </div> 

                            <h6 id="name_val"></h6>
                            <div class="form-group"> 
                                  <label for="text">Discription:</label>
                                  <input type="text" class="form-control" id="discription" placeholder="discription" name="discription">
                            </div>   
                            <h6 id="discription_val"></h6>
                             <div class="form-group">
                                    <label for="">Default tax code</label>
                                    <select class="form-control" placeholder="default tax code" name="default_tax_code" id="default_tax_code" required>
                                            <option>18% IGST</option>
                                            <option> 18% IGST</option>
                                            <option>29.00% ST</option>
                                            <option>00% IGST</option>
                                            <option>OPT OF SCOPE</option>
                                            <option>00% GST</option>
                                            <option>14.5% </option>
                                            <option>14.00% VAT</option>
                                            <option>6.00% IGST</option>
                                            <option>28.00% IGST</option>
                                            <option>15.005 ST</option>
                                            <option>28.00% GST</option>
                                            <option>12.0% GST</option>
                                            <option>18.00% GST</option>
                                            <option>3.0% GST</option>
                                            <option>0.28% GST</option>
                                            <option>5.0% GST</option>
                                            <option>6.0% GST</option>
                                            <option>0.28% GST</option>
                                            <option>exempt IGST</option>
                                            <option>3.0% IGST</option>
                                            <option>4.0% VAT</option>
                                            <option>3.05 IGST</option>
                                            <option>12.36% ST</option>
                                            <option>5.0% VAT</option>
                                            <option>exempt GST</option>

                                           
                                        </select>

                             </div> 
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">Balance:</label>
                                        <input type="text" class="form-control" id="balance" placeholder="" name="balance">
                                        <h6 id="balance_val"></h6>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <label for="">As of:</label>
                                        <input type="text" class="form-control" id="as_of" placeholder="" name="as_of">
                                    </div>
                                    <h6 id="as_of_val"></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                        <div style="width:100%; padding: 0.5px;background: #6f6f6f;"></div><br>
                             <div class="d-print-none">
                                 <div class="pull-left">
                                <!-- hidden inputs -->
                                <input type="text" name="hidden_input_id" value="NA" hidden>
                                <input type="text" name="hidden_input_purpose" value="add" hidden>
                                <!-- hidden inputs -->
                                <button type="submit" class="btn btn-primary waves-effect waves-light" id="btnSubmit1">Save</a>
                                </div>
                            <div class="pull-right">
                                <button type="button" class="btn btn-secondary waves-effect waves-light" data-dismiss="modal">Cancel</button>
                        </div>
                                  </div>
                                 </div>
                            </form>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- view model start -->
<div class="modal account-details model fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title mt-0" id="myLargeModalLabel">Account Details</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="padding: 0px 0;">
                <table class="table table-bordered table-striped" border="0">
                    <tbody>
                        
                        <tr style="border: none;">
                            <td><p><strong>Account Type</strong></p></td>
                            <td><p id="v_account_type"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Detail_Type</strong></p></td>
                            <td><p id="v_detail_type"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Name</strong></p></td>
                            <td><p id="v_name"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Discription</strong></p></td>
                            <td><p id="v_discription"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Default Tax Code</strong></p></td>
                            <td><p id="v_default_tax_code"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Balance</strong></p></td>
                            <td><p id="v_balance"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>As of</strong></p></td>
                            <td><p id="v_as_of"></p></td>
                        </tr>
                        
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- end model -->

<script>
$(document).ready(function(){
    $("#name_val").hide();
    $("#discription_val").hide();
    $("#balance_val").hide();
   

    var err_name=true;
    var err_discription=true;
    var err_balance=true;
    


   

    $("#name").blur(function(){
        name_f();
    });
    function name_f(){

        var d = $("#name").val();

        if(d.length==""){
            $("#name_val").show();
            $("#name_val").html("Please insert your name ");
            $("#name_val").focus();
            $("#name_val").css("color","red");

            err_name=false;
            return false;
        }
        else{
            err_name=true;
            $("#name_val").hide();
        }
    }

    $("#discription").blur(function(){
        discription_f();
    });
    function discription_f(){

        var v = $("#discription").val();

        if(v.length==""){
            $("#discription_val").show();
            $("#discription_val").html("Please insert discription ");
            $("#discription_val").focus();
            $("#discription_val").css("color","red");

            err_discription=false;
            return false;
        }
        else{
            err_discription=true;
            $("#discription_val").hide();
        }
    }

  $('#balance').blur(function () {
        balance_f();
    });
    function balance_f()
    {
        
        var balance_val_chk=$("#balance").val();
        var regexOnlyNumbers=/^[0-9]+$/;
        if(balance_val_chk=="" || regexOnlyNumbers.test(balance_val_chk) != true)
        {
            
            $("#balance_val").show();
            $("#balance_val").html("Please enter a valid number");
            $("#balance_val").focus();
            $("#balance_val").css("color","red");
            err_balance=false;
        }
        else
        {
            err_balance=true;
            $("#balance_val").hide();
        }  
    }

   

    $("#btnSubmit1").click(function(){
        err_name = true;
        err_discription = true;
        err_balance=true;
        
        name_f();
        discription_f();
        balance_f();

        // if((err_name==true)&&(err_discription==true)&&(err_balance==true))
        // {
        //     return true;
        // }
        // else{
        //     return false;
        // }
    });
});
</script>

<script>
    var modalOpen="";
    <?php if($errors->any()){ ?>
        modalOpen="yes";
    <?php } ?>
    $(document).ready(function(){
        if(modalOpen=="yes"){
        // call addaccounts to open account modal
        setInterval(addaccounts(), 3000);
        }
    });
    // to get suppliers details from controller through ajax, purpose = edit & view
    //add supplier
    function addaccounts(){
        resetaccounts();
        $(".account").modal('show');
    }
    // reset supplier form fields
    function resetaccounts(){
        // reset all fileds in expenses form model
        document.getElementById("accounts-forms").reset();
        // // assigning hidden inputs
        $("input[name='hidden_input_id'").val("NA");
        $("input[name='hidden_input_purpose'").val("add");
    }
    function viewEditProductsAndServices(purpose, id){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "<?php echo e(url('accounting/get_account_details')); ?>" + "/" + id,
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
                    document.getElementById("v_account_type").innerHTML = data.account_type;
                    document.getElementById("v_detail_type").innerHTML = data.detail_type;
                    document.getElementById("v_name").innerHTML = data.name;
                    document.getElementById("v_discription").innerHTML = data.discription;
                    document.getElementById("v_default_tax_code").innerHTML = data.default_tax_code;
                    document.getElementById("v_balance").innerHTML = data.balance;
                    document.getElementById("v_as_of").innerHTML = data.as_of;
                    
                    $('.account-details').modal('show');
                    
                }
               else if(purpose=="edit"){
                    resetaccounts(); // reseting forms
                    $("#account_type").val(data.account_type);
                    $("#detail_type").val(data.detail_type);
                    $("#name").val(data.name);
                    $("#discription").val(data.discription);
                    $("#default_tax_code").val(data.default_tax_code);
                    $("#balance").val(data.balance);
                    $("#as_of").val(data.as_of);
                    
                    
                    // assigning hidden inputs
                    $("input[name='hidden_input_id'").val(data.id);
                    $("input[name='hidden_input_purpose'").val("edit");
    
                    $('.account').modal('show'); // expense insert form model
                }
                $("#loader1").css("display","none");
            }
        });
    }
</script>

<?php /**PATH C:\xampp\htdocs\arbaba\resources\views/accounting/accounting.blade.php ENDPATH**/ ?>