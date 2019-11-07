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
              <button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">New Vendor</button>
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
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td style="color: #0077C5; font-weight: 600; cursor: pointer;">Receive payment <i class="fa fa-caret-down" id="receive_payment" name="receive_payment" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black; font-size: 15px;"></i>
                      </td>
                      <div class="dropdown-menu resp" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Send reminder</a>
                        <a class="dropdown-item" href="#">Create Customer Statement</a>
                        <a class="dropdown-item" href="#">Create Invoice</a>
                        <a class="dropdown-item" href="#">Create Sales Receipt</a>
                        <a class="dropdown-item" href="#">Create Estimate</a>
                      <a class="dropdown-item" href="#">Delete</a>
                      </div></td>

                    </tr>
                   



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

<form action="#" method="POST">
  @csrf
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title mt-0" id="myLargeModalLabel">Vendor information</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
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
                      <input type="text" class="form-control" value="" id="company" name="company">
                      
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
                      <input type="text" class="form-control" value="" id="phone_no" name="phone_no" data-mask="(999) 999-9999" required>
                    </div>
                    <h6 id="phone_val"></h6>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Mobile</label>
                      <input type="text" class="form-control" value="" id="mobile_no" name="mobile_no" data-mask="(999) 999-9999" required>
                    </div>
                    <h6 id="mobile_no_val"></h6>
                  </div>

       
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Skype Name/Number</label>
                      <input type="text" class="form-control" value="" id="other" name="other" required>
                    </div>
                  </div>

                 <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Designation</label>
                      <input type="text" class="form-control" value="" id="other" name="other" required>
                    </div>
                  </div>

                 <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Department</label>
                      <input type="text" class="form-control" value="" id="other" name="other" required>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1"> Vender Email</label>
                      <input type="email" required pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" class="form-control" id="email_id" name="email_id" placeholder="Enter email" >
                    </div>
                    <h6 id="email_id_val"></h6>
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
                          <input type="text" class="form-control" id="city_town "name="city_town" placeholder="City/Town" required>
                        </div>
                        <h6 id="city_town_val"></h6>
                        <div class="col-md-6" style="margin-top: 6px;">
                          <input type="text" class="form-control" id="state" name="state" placeholder="State" required>
                        </div>

                        <div class="col-md-6" style="margin-top: 6px;">
                          <input type="text" class="form-control" id="pin_code" name="pin_code" placeholder="Pincode">
                            <h6 id="pin_code_val"></h6>
                        </div>
                        
                        <div class="col-md-6" style="margin-top: 6px;">
                          <input type="text" class="form-control" id="country" name="country" placeholder="Country" required>
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
                          <input type="text" class="form-control" id="city_town_shipping" name="city_town_shipping" placeholder="City/Town" required>
                        </div>

                        <div class="col-md-6" style="margin-top: 6px;">
                          <input type="text" class="form-control" id="state_shipping" name="state_shipping" placeholder="State" required>
                        </div>

                        <div class="col-md-6" style="margin-top: 6px;">
                          <input type="text" class="form-control" id="pin_code_shipping" name="pin_code_shipping" placeholder="Pincode" required>
                        <h6 id="pin_code_shipping_val"></h6>
                      </div>
                        
                        <div class="col-md-6" style="margin-top: 6px;">
                          <input type="text" class="form-control" id="country_shipping" name="country_shipping" placeholder="Country" required>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                  <h5>Remarks</h5>
                  <div class="col-md-12">
                    <textarea class="form-control" rows="3" id="notes" name="notes" required></textarea>
                  </div>

                </div>
                <div class="tab-pane" id="message" role="tabpanel" aria-labelledby="message-tab">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Currency</label>
                        <input type="text" class="form-control" id="tax_reg_no" name="tax_reg_no" placeholder="" required>
                      </div>
                      <h6 id="tax_reg_no_val"></h6>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Opening Balance</label>
                        <input type="text" class="form-control" id="cst_reg_no" name="cst_reg_no" placeholder="" required>
                      </div>
                      <h6 id="cst_reg_no_val"></h6>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Payment Terms</label>
                        <input type="text" class="form-control" id="pan_no" name="pan_no" placeholder="" required>
                      </div>
                            <h6 id="pan_no_val"></h6>
                    </div>

                    
                  </div>
                </div>
                

                <div class="tab-pane" id="contact_person" role="tabpanel" aria-labelledby="note-tab">
                 <div class="col-md-12">
                   <table id="datatable" class="table table-striped table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                           <thead>
                            <tr>
                             <th><input type="checkbox" name="chkall[]" id="selectall" onClick="selectAll(this)" /></th>
                             <th>First Name</th>
                             <th>Last Name</th>
                             <th>Email Address</th>
                             <th>Work Phone</th>
                             <th>Mobile</th>
                             
                         </tr>
                     </thead>
                     <tbody>
                        <tr>
                         <td>&nbsp;<input type="checkbox" name="ids[]" value="" /></td>
                         <td></td>
                         <td></td>
                         <td></td>
                         <td></td>
                         <td></td>
                         
                     </tr>
                     </tbody>
                  </table>
                </div>
              </div>

              <div class="tab-pane" id="note" role="tabpanel" aria-labelledby="note-tab">
                 <div class="col-md-12">
                   <div class="form-group">
                    <label for="exampleInputEmail1">Attachments</label>
                    <div class="dropzone" id="dropzone" style="min-height: 55px">
                      <div class="fallback">
                        <input name="attachment" type="file" id="attachments">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary waves-effect waves-light" id="save" name="save">Save</button>
      </div>
    </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->

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
        $("#tax_reg_no_val").hide();
        $("#cst_reg_no_val").hide();
        $("#pan_no_val").hide();
         $("#opening_balance_val").hide();
 
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


             $("#email_id").blur(function(){

            email_id_f();
        });
        function email_id_f(){

          var m = $("#email_id").val();
           var v =/^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
           var result = m.match(v); 

          if((m.length=="")||(result == null)){

            $("#email_id_val").show();
            $("#email_id_val").html("Please insert valid email ");
            $("#email_id_val").focus();
            $("#email_id_val").css("color","red");

              err_email_id=false;
              return false;
          }else{
            err_email_id=true;
            $("#email_id_val").hide();
          }
        }


         $("#mobile_no").blur(function(){

            mobile_no_f();
        });
        function mobile_no_f(){

          var q = $("#mobile_no").val();

          var regexOnlyNumbers=/^[0-9() -]+$/;
          if((q=="")|| regexOnlyNumbers.test(q)!=true){

            $("#mobile_no_val").show();
            $("#mobile_no_val").html("Please input numbers between 0-9 ");
            $("#mobile_no_val").focus();
            $("#mobile_no_val").css("color","red");

              err_mobile_no=false;
              return false;
          }else{
            err_mobile_no=true;
            $("#mobile_no_val").hide();
          }
        }




         $("#pin_code").blur(function(){

            pin_code_f();
        });
        function pin_code_f(){
           var regexOnlyNumbers=/^[0-9]+$/;
          var c = $("#pin_code").val();

         if((c=="")|| regexOnlyNumbers.test(c)!=true){

            $("#pin_code_val").show();
            $("#pin_code_val").html("Please input pin code ");
            $("#pin_code_val").focus();
            $("#pin_code_val").css("color","red");

              err_pin_code=false;
              return false;
          }else{
            err_pin_code=true;
            $("#pin_code_val").hide();
          }
        }
       

           $("#pin_code_shipping").blur(function(){

            pin_code_shipping_f();
        });
        function pin_code_shipping_f(){
          var regexOnlyNumbers=/^[0-9]+$/;
          var w = $("#pin_code_shipping").val();

          if((w=="")|| regexOnlyNumbers.test(w)!=true){

            $("#pin_code_shipping_val").show();
            $("#pin_code_shipping_val").html("Please insert pin code ");
            $("#pin_code_shipping_val").focus();
            $("#pin_code_shipping_val").css("color","red");

              err_pin_code_shipping=false;
              return false;
          }else{
            err_pin_code_shipping=true;
            $("#pin_code_shipping_val").hide();
          }
        }




         $("#tax_reg_no").blur(function(){

            tax_reg_f();
        });
        function tax_reg_f(){
          var regexOnlyNumbers=/^[0-9a-zA-Z]+$/;
          var z = $("#tax_reg_no").val();

             if((z=="")|| regexOnlyNumbers.test(z)!=true){

            $("#tax_reg_no_val").show();
            $("#tax_reg_no_val").html("This field is required ");
            $("#tax_reg_no_val").focus();
            $("#tax_reg_no_val").css("color","red");

              err_tax_reg_no=false;
              return false;
          }else{
            err_tax_reg_no=true;
            $("#tax_reg_no_val").hide();
          }
        }
                

         $("#cst_reg_no").blur(function(){
             cst_reg_no_f();
           });
        function cst_reg_no_f(){

          var regexOnlyNumbers=/^[0-9a-zA-Z]+$/;
          var u = $("#cst_reg_no").val();

          if((u=="")|| regexOnlyNumbers.test(u)!=true){

            $("#cst_reg_no_val").show();
            $("#cst_reg_no_val").html("This field is required ");
            $("#cst_reg_no_val").focus();
            $("#cst_reg_no_val").css("color","red");

              err_cst_reg_no=false;
              return false;
          }
           else {
            err_cst_reg_no = true;
            $("#cst_reg_no_val").hide();

          }
        }



         $("#pan_no").blur(function(){
             pan_no_f();
           });
        function pan_no_f(){
          var regexOnlyNumbers=/^[0-9a-zA-Z]+$/;
          var r = $("#pan_no").val();

          if((r=="")|| regexOnlyNumbers.test(r)!=true){

            $("#pan_no_val").show();
            $("#pan_no_val").html("Please enter pan no ");
            $("#pan_no_val").focus();
            $("#pan_no_val").css("color","red");

              err_pan_no=false;
              return false;
          }
           else {
            err_pan_no=true;
            $("#pan_no_val").hide();
          }

          }

           $("#opening_balance").blur(function(){
             opening_balance_f();
           });
        function opening_balance_f(){
          var regexOnlyNumbers=/^[0-9]+$/;
          var op_bal = $("#opening_balance").val();

          if((op_bal=="")|| regexOnlyNumbers.test(op_bal)!=true){

            $("#opening_balance_val").show();
            $("#opening_balance_val").html("This field is required");
            $("#opening_balance_val").focus();
            $("#opening_balance_val").css("color","red");

              err_opening_balance=false;
              return false;
          }
           else {
            err_opening_balance=true;
            $("#opening_balance_val").hide();
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
      

     if((err_first_name==true)&&(err_company==true)&&(err_email_id==true)&&(err_mobile_no==true)&&(err_pin_code==true)&&(err_pin_code_shipping==true)&&(err_tax_reg_no=true)&&(err_cst_reg_no=true)&&(err_pan_no=true)&&(err_opening_balance=true))
     {
        return true;
     }else{
        return false;

     }

     });
         




  });
</script>