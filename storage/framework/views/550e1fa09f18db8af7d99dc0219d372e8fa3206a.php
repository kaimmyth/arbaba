<style type="text/css">
  .row {
    margin-right: 0px;
    margin-left: 0px;
  }

  .nav.nav-tabs > li > a.active {
    background-color: #dcdcdc !important;
    border: 1px solid black !important;
  }

  .nav.nav-tabs + .tab-content {
    background: #ffffff;
    margin-bottom: 30px;
    padding: 8px !important;
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
            <li><a href="#">purchase </a></li>
            <li class="active">vendor</li>
            
          </ol>
        </div>
      </div>


          <div class="col-md-12">
            <div class="col-md-12" style="text-align: right; margin-bottom: 4px;">
              <button class="btn btn-primary" onclick="addvendor()">New Vendor</button>
            </div>

            <div class="tab-content colm">
              <div class="tab-pane show active" id="home-2" role="tabpanel" aria-labelledby="home-tab-2" style="">
                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                  <thead>
                    <tr>
                      
                      <th><input type="checkbox" name="chkall[]" id="selectall" onClick="selectAll(this)" /></th>
                      <th>Customer/Company</th>
                      <th>Name</th>
                      <th>Open Balance</th>
                      <th>Mobile</th>
                      <th>Phone</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                     <?php $__currentLoopData = $toReturn; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><input type="checkbox" name="chkall[]" id="selectall" onClick="selectAll(this)" /></td>
                      <td><?php echo e($value['company_name']); ?></td>
                      <td><?php echo e($value['first_name']); ?></td>
                      <td><?php echo e($value['opening_balance']); ?></td>
                      <td><?php echo e($value['mobile']); ?></td>
                      <td><?php echo e($value['phone']); ?></td>
                     <td><a href="javascript:void();" onclick="viewvendor('view', <?php echo e($value['id']); ?>);">
                      <i class="fas fa-eye"></i></a> &nbsp; <a href="javascript:void();" onclick="viewvendor('edit', <?php echo e($value['id']); ?>);">
                      <i class="fas fa-pencil-alt"></i></a> &nbsp; <a href="<?php echo e(url('purchases/vendor/delete/'.$value['id'])); ?>" onclick="return confirm('Are you sure you want to delete this item?');">
                        <i class="fas fa-trash"></i></a></td>
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
</div>
</div>
</div>
<!-- view model start -->
<div class="modal vendor-details-model fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title mt-0" id="myLargeModalLabel">Vendor Details</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <br>
            <br>
            <div class="modal-body" style="padding: 0px 0;">
                
                <table class="table table-bordered table-striped" border="0">
                    <tbody>
                        <tr style="border: none;">
                            <td><p><strong>First Name</strong></p></td>
                            <td><p id="v_first_name"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Last Name</strong></p></td>
                            <td><p id="v_last_name"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Company Name</strong></p></td>
                            <td><p id="v_company_name"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Phone No</strong></p></td>
                            <td><p id="v_phone"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Mobile No</strong></p></td>
                            <td><p id="v_mobile"></p></td>
                        </tr>
                         <tr style="border: none;">
                            <td><p><strong>Vendor Email</strong></p></td>
                            <td><p id="v_vendor_email"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Billing Address</strong></p></td>
                            <td><p id="v_billing_address"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Contact Person name</strong></p></td>
                            <td><p id="v_contact_first_name"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Contact Person Phone</strong></p></td>
                            <td><p id="v_contact_phone"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Contact Person Email</strong></p></td>
                            <td><p id="v_contact_email"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Designation</strong></p></td>
                            <td><p id="v_designation"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Department</strong></p></td>
                            <td><p id="v_department"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Opening Balance</strong></p></td>
                            <td><p id="v_opening_balance"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Currency</strong></p></td>
                            <td><p id="v_currency"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>website</strong></p></td>
                            <td><p id="v_website"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Payment Terms</strong></p></td>
                            <td><p id="v_payment_terms"></p></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- end model -->

    <div class="modal vendor fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title mt-0" id="myLargeModalLabel">Add New Vendor </h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="<?php echo e(url('purchases/vendor/add_edit_vendor')); ?>" method="post" id="form-vendor" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Title</label>
                      <input type="text" class="form-control" value="" id="title" name="title" required>
                      <h6 id="title_val"></h6>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputEmail1">First Name</label>
                      <input type="text" class="form-control" value="" id="first_name" name="first_name" maxlength="20" required>
                      <h6 id="first_name_val"></h6>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Last Name</label>
                      <input type="text" class="form-control" value="" id="last_name" name="last_name" required  maxlength="20">
                    </div>
                    <h6 id="last_name_val"></h6>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Company name</label>
                      <input type="text" class="form-control" value="" id="company_name" name="company_name">
                      
                    </div>
                    <h6 id="company_val"></h6>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputEmail1"> Vendor Display name </label>
                      <input type="text" class="form-control" value="" id="display_name_as" name="display_name_as" readonly>
                    </div>
                  </div>

                   <div class="col-md-2">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Phone</label>
                      <input type="text" class="form-control" value="" id="phone" name="phone" data-mask="(999) 999-9999" required>
                    </div>
                    <h6 id="phone_val"></h6>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Mobile</label>
                      <input type="text" class="form-control" value="" id="mobile" name="mobile" data-mask="(999) 999-9999" required>
                    </div>
                    <h6 id="mobile_val"></h6>
                  </div>                  <div class="col-md-4">
                  <div class="form-group">
                      <label for="exampleInputEmail1">Skype Name/Number</label>
                      <input type="text" class="form-control" value="" id="skype_name" name="skype_name" required>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Designation</label>
                      <input type="text" class="form-control" value="" id="designation" name="designation" required>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Department</label>
                      <input type="text" class="form-control" value="" id="department" name="department" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1"> Vender Email</label>
                      <input type="email" required pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" class="form-control" id="vendor_email" name="vendor_email" placeholder="Enter email" >
                    </div>
                    <h6 id="vendor_email_val"></h6>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Website</label>
                      <input type="text" class="form-control" value="" id="website" name="website" required>
                    </div>
                  </div>
            <div class="col-md-12">
              <ul class="nav nav-tabs" role="tablist">
               
                 <li class="nav-item">
                  <a class="nav-link" id="message-tab" data-toggle="tab" href="#message" role="tab" aria-controls="message" aria-selected="false" required>
                    <span class="d-block d-sm-none"><i class="fa fa-envelope-o"></i></span>
                    <span class="d-none d-sm-block">Others</span>
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false" required>
                    <span class="d-block d-sm-none"><i class="fa fa-home"></i></span>
                    <span class="d-none d-sm-block">Address</span>
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" id="setting-tab" data-toggle="tab" href="#contact_person" role="tab" aria-controls="contact_person" aria-selected="false" required>
                    <span class="d-block d-sm-none"><i class="fa fa-cog"></i></span>
                    <span class="d-none d-sm-block">Contact Person</span>
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true" required>
                    <span class="d-block d-sm-none"><i class="fa fa-user"></i></span>
                    <span class="d-none d-sm-block">Remarks</span>
                  </a>
                </li>
               
                
                <li class="nav-item">
                  <a class="nav-link" id="note-tab" data-toggle="tab" href="#note" role="tab" aria-controls="note" aria-selected="false" required>
                    <span class="d-block d-sm-none"><i class="fa fa-cog"></i></span>
                    <span class="d-none d-sm-block">Attachments</span>
                  </a>
                </li>
              </ul>
              <div class="tab-content" style="border: 1px solid;">
                <div class="tab-pane  show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <div class="row">
                    <div class="col-md-6">
                      <h5>Billing Address</h5>
                      <div class="row">
                        <div class="col-md-12">
                          <textarea class="form-control" rows="2" id="billing_address" name="billing_address" required></textarea>
                        </div>
                        <div class="col-md-6" style="margin-top: 6px;">
                          <input type="text" class="form-control" id="billing_city_town" name="billing_city_town" placeholder="City/Town" required>
                        </div>
                        <h6 id="city_town_val"></h6>
                        <div class="col-md-6" style="margin-top: 6px;">
                          <input type="text" class="form-control" id="billing_state" name="billing_state" placeholder="State" required>
                        </div>

                        <div class="col-md-6" style="margin-top: 6px;">
                          <input type="text" class="form-control" id="billing_pin_code" name="billing_pin_code" placeholder="Pincode">
                            <h6 id="billing_pin_code_val"></h6>
                        </div>
                        
                        <div class="col-md-6" style="margin-top: 6px;">
                          <input type="text" class="form-control" id="billing_country" name="billing_country" placeholder="Country" required>
                        </div>
                        <h6 id="country_val"></h6>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <h5>Shipping Address &nbsp; &nbsp;   <input id="checkbox1" type="checkbox"> Same as billing address</h5>
                      <div class="row">
                        <div class="col-md-12">
                          <textarea class="form-control" rows="2" id="shipping_address" name="shipping_address" required></textarea>
                        </div>
                        <div class="col-md-6" style="margin-top: 6px;">
                          <input type="text" class="form-control" id="shipping_city_town" name="shipping_city_town" placeholder="City/Town" required>
                        </div>

                        <div class="col-md-6" style="margin-top: 6px;">
                          <input type="text" class="form-control" id="shipping_state" name="shipping_state" placeholder="State" required>
                        </div>

                        <div class="col-md-6" style="margin-top: 6px;">
                          <input type="text" class="form-control" id="shipping_pin_code" name="shipping_pin_code" placeholder="Pincode" required>
                        <h6 id="shipping_pin_code_val"></h6>
                      </div>
                        
                        <div class="col-md-6" style="margin-top: 6px;">
                          <input type="text" class="form-control" id="shipping_country" name="shipping_country" placeholder="Country" required>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                  <h5>Remarks</h5>
                  <div class="col-md-12">
                    <textarea class="form-control" rows="3" id="remark" name="remark"></textarea>
                  </div>

                </div>
                <div class="tab-pane" id="message" role="tabpanel" aria-labelledby="message-tab">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Currency</label>
                        <input type="text" class="form-control" id="currency" name="currency" placeholder="" required>
                      </div>
                      <h6 id="currency_val"></h6>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Opening Balance</label>
                        <input type="text" class="form-control" id="opening_balance" name="opening_balance" placeholder="" required>
                      </div>
                      <h6 id="opening_balance_val"></h6>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Payment Terms</label>
                        <input type="text" class="form-control" id="payment_terms" name="payment_terms" placeholder="" required>
                      </div>
                            <h6 id=""></h6>
                    </div>

                    
                  </div>
                </div>
                <div class="tab-pane" id="contact_person" role="tabpanel" aria-labelledby="note-tab">
                 <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputEmail1">First Name</label>
                      <input type="text" class="form-control" value="" id="contact_first_name" name="contact_first_name" required  maxlength="20">
                    </div>
                    <h6 id="contact_first_name_val"></h6>
                  </div>
                   <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Last Name</label>
                      <input type="text" class="form-control" value="" id="contact_last_name" name="contact_last_name" required  maxlength="20">
                    </div>
                    <h6 id="contact_last_name_val"></h6>
                  </div>
                   <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email Address</label>
                      <input type="text" class="form-control" value="" id="contact_email" name="contact_email" required  maxlength="20">
                    </div>
                    <h6 id="contact_email_val"></h6>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Work Phone</label>
                      <input type="text" class="form-control" value="" id="contact_phone" name="contact_phone" required  maxlength="20" data-mask="(999) 999-9999">
                    </div>
                    <h6 id="last_name_val"></h6>
                  </div>
                   <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Mobile</label>
                      <input type="text" class="form-control" value="" id="contact_mobile" name="contact_mobile" required  maxlength="20" data-mask="(999) 999-9999">
                    </div>
                    <h6 id="contact_mobile_val"></h6>
                  </div>
                </div>
              </div>
            </div>

              <div class="tab-pane" id="note" role="tabpanel" aria-labelledby="note-tab">
                 <div class="col-md-12">
                   <div class="form-group">
                    <label for="exampleInputEmail1">Attachments</label>
                    <div class="dropzone" id="dropzone" style="min-height: 55px">
                      <div class="fallback">
                        <input name="attachment" type="file" id="attachment">
                      </div>
                    </div>
                  </div>
                </div>
              </div>  
            </div>
          </div>
          <div class="modal-footer">
                 <input type="text" name="hidden_input_id" value="NA" hidden>
                 <input type="text" name="hidden_input_purpose" value="add" hidden>
                 <input type="text" name="hidden_input_attachment" value="NA" hidden>
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary waves-effect waves-light" id="save" name="save">Save</button>
              </div> 
        </div>
      </div> 
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>
</div>
</div>
</form>




<!--jquery validation-->


<script>
  $("document").ready(function(){

        
        $("#first_name_val").hide();
        $("#last_name_val").hide();
        $("#company_val").hide();
        $("#email_id_val").hide();
        $("#mobile_no_val").hide();
        $("#pin_code_val").hide();
        $("#pin_code_shipping_val").hide();
        $("#pan_no_val").hide();
        $("#opening_balance_val").hide();
        $("#currency_val").hide(); 
        $("#contact_first_name_val").hide();
        $("contact_email_val").hide();

        var err_first_name =true;
        var err_last_name =true;
        var err_company =true;
        var err_email_id =true;
        var err_mobile_no = true;
        var err_pin_code=true;
        var err_pin_code_shipping=true;
        var err_tax_reg_no=true;
        var err_cst_reg_no=true;
        var err_pan_no=true;
        var err_opening_balance=true;
        var err_contact_first_name=true;
        var err_contact_email=true;
        $("#first_name").blur(function(){

            first_name_f();

        });
        function first_name_f(){

          var c = $("#first_name").val();
          
          var regexOnlyText = /^[a-zA-Z]+$/;
          if (c==""||regexOnlyText.test(c) != true){
            $("#first_name_val").show();
            $("#first_name_val").html("This field is required");
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

            last_name_f();

        });
        function last_name_f(){

          var j = $("#last_name").val();
           var regexOnlyText = /^[a-zA-Z]+$/;
          if (j==""||regexOnlyText.test(j) != true){
            $("#last_name_val").show();
            $("#last_name_val").html("This field is required");
            $("#last_name_val").focus();
            $("#last_name_val").css("color","red");
            err_last_name=false;
            return false;
          }else{
            err_last_name=true;
            $("#last_name_val").hide();
          }

     
        }


        $("#first_name").keyup(function(){

            display_name_as_append();

        });
        $("#last_name").keyup(function(){

            display_name_as_append();

        });
        function display_name_as_append(){
          $("#display_name_as").val($("#first_name").val()+" "+$("#last_name").val());
        }

        $("#company").blur(function(){

            company_f();
        });

        
        function company_f(){

          var f = $("#company").val();

          if(f.length==""){

            $("#company_val").show();
            $("#company_val").html("This field is required");
            $("#company_val").focus();
            $("#company_val").css("color","red");

              err_company=false;
              return false;
          }else{
            err_company=true;
            $("#company_val").hide();
          }
        }


         $("#vendor_email").blur(function(){

            email_id_f();
        });
        function email_id_f(){

          var m = $("#vendor_email").val();
           var v =/^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
           var result = m.match(v); 

          if((m.length=="")||(result == null)){

            $("#vendor_email_val").show();
            $("#vendor_email_val").html("Please insert valid email ");
            $("#vendor_email_val").focus();
            $("#vendor_email_val").css("color","red");
            
              err_email_id=false;
              return false;
          }else{
            err_email_id=true;
            $("#vendor_email_val").hide();
          }
        }


         $("#mobile").blur(function(){

            mobile_no_f();
        });
        function mobile_no_f(){

          var q = $("#mobile").val();

          var regexOnlyNumbers=/^[0-9() -]+$/;
          if((q=="")|| regexOnlyNumbers.test(q)!=true){

            $("#mobile_val").show();
            $("#mobile_val").html("This field is required ");
            $("#mobile_val").focus();
            $("#mobile_val").css("color","red");

              err_mobile_no=false;
              return false;
          }else{
            err_mobile_no=true;
            $("#mobile_val").hide();
          }
        }

        $("#billing_pin_code").blur(function(){
            pin_code_f();
        });
        function pin_code_f(){
           var regexOnlyNumbers=/^[0-9]+$/;
          var c = $("#billing_pin_code").val();

         if((c=="")|| regexOnlyNumbers.test(c)!=true){
            $("#billing_pin_code_val").show();
            $("#billing_pin_code_val").html("Please input pin code ");
            $("#billing_pin_code_val").focus();
            $("#billing_pin_code_val").css("color","red");

              err_pin_code=false;
              return false;
          }else{
            err_pin_code=true;
            $("#billing_pin_code_val").hide();
          }
        }
       

        $("#shipping_pin_code").blur(function(){

            pin_code_shipping_f();
        });
        function pin_code_shipping_f(){
          var regexOnlyNumbers=/^[0-9]+$/;
          var w = $("#shipping_pin_code").val();

          if((w=="")|| regexOnlyNumbers.test(w)!=true){

            $("#shipping_pin_code_val").show();
            $("#shipping_pin_code_val").html("Please insert pin code ");
            $("#shipping_pin_code_val").focus();
            $("#shipping_pin_code_val").css("color","red");

              err_pin_code_shipping=false;
              return false;
          }else{
            err_pin_code_shipping=true;
            $("#shipping_pin_code_val").hide();
          }
        }

        $("#currency").blur(function(){

            tax_reg_f();
        });
        function tax_reg_f(){
          var z = $("#currency").val();

             if(z==""){

            $("#currency_val").show();
            $("#currency_val").html("This field is required ");
            $("#currency_val").focus();
            $("#currency_val").css("color","red");

              err_currency=false;
              return false;
          }else{
            err_currency=true;
            $("#currency_val").hide();
          }
        }
                

         $("#opening_balance").blur(function(){
             cst_reg_no_f();
           });
        function cst_reg_no_f(){

          var regexOnlyNumbers=/^[0-9a-zA-Z]+$/;
          var u = $("#opening_balance").val();

          if((u=="")|| regexOnlyNumbers.test(u)!=true){

            $("#opening_balance_val").show();
            $("#opening_balance_val").html("This field is required ");
            $("#opening_balance_val").focus();
            $("#opening_balance_val").css("color","red");

              err_cst_reg_no=false;
              return false;
          }
           else {
            err_cst_reg_no = true;
            $("#cst_reg_no_val").hide();

          }
        }

        $("#contact_first_name").keyup(function(){
            contact_first_name_f();
        });
        function contact_first_name_f(){

          var p = $("#contact_first_name").val();

          if(p.length==""){
            $("#contact_first_name_val").show();
            $("#contact_first_name_val").html("This field is required");
            $("#contact_first_name_val").focus();
            $("#contact_first_name_val").css("color","red");

              err_contact_first_name=false;
              return false;
          }else{
            err_contact_first_name=true;
            $("#contact_first_name_val").hide();
          }
        }

        $("#contact_mobile").blur(function(){
            contact_mobile_f();
        });
        function contact_mobile_f(){

          var regexOnlyNumbers=/^[0-9]+$/;
          var w = $("#contact_mobile").val();

          if((w=="")|| regexOnlyNumbers.test(w)!=true){

            $("#contact_mobile_val").show();
            $("#contact_mobile_val").html("Please insert pin code ");
            $("#contact_mobile_val").focus();
            $("#contact_mobile_val").css("color","red");

              err_contact_mobile=false;
              return false;
          }else{
            err_contact_mobile=true;
            $("#contact_mobile_val").hide();
          }
        }

        $("#contact_email").blur(function(){
            contact_email_f();
        });
        function contact_email_f(){

           var m = $("#contact_email").val();
           var v =/^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
           var result = m.match(v); 

          if((m.length=="")||(result == null)){
            $("#contact_email_val").show();
            $("#contact_email_val").html("Please insert valid phone no ");
            $("#contact_email_val").focus();
            $("#contact_email_val").css("color","red");

              err_contact_email=false;
              return false;
          }else{
            err_contact_email=true;
            $("#contact_email_val").hide();
          }
        }
      

     $("#save").click(function(){

      
      err_first_name=true;
      err_company=true;
      err_email_id=true;
      err_mobile_no=true;
      err_pin_code=true;
      err_pin_code_shipping=true;
      err_tax_reg_no=true;
      err_cst_reg_no=true;
      err_pan_no=true;
      err_opening_balance=true;
      first_name_f();
      company_f();
      email_id_f();
      mobile_no_f();
      pin_code_f();
      pin_code_shipping();
      tax_reg_no_f();
      cst_reg_no_f();
      pan_no_f();
      opening_balance_f();
      

     if((err_first_name==true)&&(err_company==true)&&(err_vendor_email==true)&&(err_mobile==true)&&(err_billing_pin_code==true)&&(err_shipping_pin_code==true)(err_opening_balance=true))
     {
        return true;
     }else{
        return false;

     }

     });
         




  });
</script>
<script>
// to get employee details from controller through ajax, purpose = edit & view
//add employees
function addvendor(){
  
    resetvendorforms();
    $(".bs-example-modal-lg").modal('show');
}
// reset expensess form fields
function resetvendorforms(){
    // reset all fileds in employee form model
    document.getElementById("form-vendor").reset();
    // assigning hidden inputs
    $("input[name='hidden_input_id'").val("NA");
    $("input[name='hidden_input_purpose'").val("add");
    $("input[name='hidden_input_attachment'").val("NA");
}
  
function viewvendor(purpose, id){       
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: "<?php echo e(url('purchases/vendor/get-vendor-details')); ?>" + "/" + id,
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
            if(purpose =="view")
            { 
              
                document.getElementById("v_first_name").innerHTML = data.first_name;
                document.getElementById("v_last_name").innerHTML =data.last_name;
                document.getElementById("v_company_name").innerHTML = data.company_name;
                document.getElementById("v_phone").innerHTML = data.phone;
                document.getElementById("v_mobile").innerHTML = data.mobile;
                document.getElementById("v_designation").innerHTML = data.designation;
                document.getElementById("v_billing_address").innerHTML = data.address+"<br/>"+data.billing_city_town+", "+data.billing_state+" "+data.billing_country+"<br/>Pin: "+data.billing_pin_code;
                document.getElementById("v_department").innerHTML = data.department;
                document.getElementById("v_vendor_email").innerHTML = data.vendor_email;
                document.getElementById("v_website").innerHTML = data.website;
                document.getElementById("v_currency").innerHTML = data.currency;
                document.getElementById("v_opening_balance").innerHTML = data.opening_balance;
                document.getElementById("v_payment_terms").innerHTML = data.payment_terms;
                document.getElementById("v_contact_first_name").innerHTML = data.contact_first_name;
                document.getElementById("v_contact_phone").innerHTML = data.contact_phone;
                document.getElementById("v_contact_email").innerHTML = data.contact_email;
                 $('.vendor-details-model').modal('show');

            }
            else if(purpose=="edit"){
                resetvendorforms(); // reseting forms
                $("#title").val(data.title);
                $("#first_name").val(data.first_name);
                $("#last_name").val(data.last_name);
                $("#company_name").val(data.company_name);
                $("#phone").val(data.phone);
                $("#mobile").val(data.mobile);
                $("#skype_name").val(data.skype_name);
                $("#designation").val(data.designation);
                $("#department").val(data.department);
                $("#vendor_email").val(data.vendor_email);
                $("#website").val(data.website);
                $("#currency").val(data.currency);
                $("#opening_balance").val(data.opening_balance);
                $("#payment_terms").val(data.payment_terms);
                $("#billing_address").val(data.billing_address);
                $("#billing_city_town").val(data.billing_city_town);
                $("#billing_state").val(data.billing_state);
                $("#billing_country").val(data.billing_country);
                $("#billing_pin_code").val(data.billing_pin_code);
                $("#shipping_address").val(data.shipping_address);
                $("#shipping_city_town").val(data.shipping_city_town);
                $("#shipping_state").val(data.shipping_state);
                $("#shipping_country").val(data.shipping_country);
                $("#shipping_pin_code").val(data.shipping_pin_code);
                $("#contact_first_name").val(data.contact_first_name);
                $("#contact_first_name").val(data.contact_first_name);
                $("#contact_last_name").val(data.contact_last_name);
                $("#contact_email").val(data.contact_email);
                $("#contact_phone").val(data.contact_phone);
                $("#contact_mobile").val(data.contact_mobile);
                $("#remark").val(data.remark);

                // assigning hidden inputs
                $("input[name='hidden_input_id'").val(data.id);
                $("input[name='hidden_input_purpose'").val("edit");
                $("input[name='hidden_input_attachment']").val(data.attachment);

                $('.bs-example-modal-lg').modal('show'); // expense insert form model
            }
            $("#loader1").css("display","none");
        }
    });
}

</script><?php /**PATH C:\xampp\htdocs\arbaba\resources\views/purchases/vendor.blade.php ENDPATH**/ ?>