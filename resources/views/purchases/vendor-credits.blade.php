
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
                    <li><a href="#">purchase </a></li>
                    <li class="active">Vendor Credits</li>
                </ol>
                </div>
            </div>



            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-border card-primary">
                        <div class="card-header">
                            <button type="button" class="btn btn-inverse btn-rounded waves-effect waves-light m-b-5" data-toggle="modal" data-target=".recurring-expenses" style="float:right;">Add New </button>
                        </div> 
                        <div class="card-body"> 
                            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                    <th><input type="checkbox" name="chkall[]" id="selectall" onClick="selectAll(this)" /></th>
                                    <th>Date</th>
                                    <th>Credit Note</th>
                                    <th>Reference Number</th>
                                    <th>Vendor Name</th>
                                    <th>Status</th>
                                    <th>Amount</th>
                                    <th>Balance </th> 
                                    </tr>
                                </thead> 
                            </table>
                        </div>
                    </div>
                </div>
            


            </div>
        </div>
    </div>
</div>


<!-- modal -->

<form action="#" method="POST">
  @csrf
  <!--  Modal content for the above example -->
  <div class="modal fade bs-example-modal-lg recurring-expenses" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title mt-0" id="myLargeModalLabel">New Vendor Credits</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
                 


          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputEmail1">Vendor Name</label>
                <input type="text" name="vendor_name" class="form-control" value="" id="vendor_name" maxlength="20">
               
              </div>
               <h6 id="name_val"></h6>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputEmail1">Credit Note</label>
                <input type="text" name="name" class="form-control" value="" id="name">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputEmail1">Order Number</label>
                <input type="text" name="order_number" class="form-control" value="" id="order_number" maxlength="20">
               
              </div>
               <h6 id="order_number_val"></h6>
            </div>


           <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputEmail1">Vendor Credit Date</label>
                <input type="date" name="credit_date" class="form-control" value="" id="credit_date" placeholder="dd/mm/yyyy">
                
              </div>
              <h6 id="credit_date_val"></h6>
            </div>

           
         
       
            
                <div class="col-lg-12">
                     <hr/>
                        <div class="form-group row"> 
                            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                    <th><input type="checkbox" name="chkall[]" id="selectall" onClick="selectAll(this)" /></th>
                                    <th>Iteam Details</th>
                                    <th>Account</th>
                                    <th>Quantity</th>
                                    <th>Rate</th>
                                    <th>Amount</th>
                                    </tr>
                                </thead>
                               <tbody>
                               		<tr>
                               			<td><input type="checkbox" name="chkall[]" id="selectall" onClick="selectAll(this)" /></td>
                                    	<td>iteams12</td>
                                    	<td>123456789</td>
                                    	<td>12</td>
                                    	<td>500</td>
                                      <td>500</td>
                                    	
                                    </tr>
                               </tbody>
                            </table>
                        </div>
                    </div>   
            </div>

                      
            <div class="col-md-12">
			    <div class="row">
					<div class="col-md-12" style="text-align: right;">
						<tr>
					        <td><h4>Subtotal  &nbsp; &nbsp;<i class="fa fa-rupee-sign sz" aria-hidden="true"></i><span id="subtotal-span">0.00</span></h4></td>
					        <td><h4>Discount  &nbsp; &nbsp;<i class="fa fa-rupee-sign sz" aria-hidden="true"></i><span id="taxes-span"><span>0.00</h4></td>                  
					        <td><h4>Adjustment  &nbsp; &nbsp;<i class="fa fa-rupee-sign sz" aria-hidden="true"></i><span id="total-span">0.00</span></h4></td>
					     </tr>   
			    	</div>	
			    </div>
			    <hr/>
            </div>

            <div class="col-md-12">
			    <div class="row">
					<div class="col-md-12" style="text-align: right;">
					        <h4>Total  &nbsp; &nbsp;<i class="fa fa-rupee-sign sz" aria-hidden="true"></i><span id="subtotal-span">0.00</span></h4>
					       
			    	</div>
			    </div>
			    <hr/>
            </div>


           <div class="col-md-12">
           	
            <div class="form-group">
                <label class="notes">Notes</label>
                <textarea class="form-control" rows="3" id="notes" name="notes" required></textarea>
            </div>
           </div>

        </div>

            <div class="col-md-12">
				 <div class="form-group">
				    <label for="exampleInputEmail1">Attachments</label>
				    <div class="dropzone" id="dropzone" style="min-height: 55px">
				        <div class="fallback">
				          <input  type="file"  name="attachment" id="attachment">
				        </div>
		            </div>
                 </div>
                 <hr/>
            </div>
        
        <div class="col-md-12" style="text-align: right;">
            <button type="submit" class="btn btn-primary waves-effect" id="btn">Save</button>
            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
        </div>
      </div><!-- /.modal-content -->

    </div><!-- /.modal-dialog -->
 </div><!-- /.modal -->
</div>



<!--jquery validation-->

<script> 

  $(document).ready(function(){

    $("#name_val").hide();
    $("#order_number_val").hide();
     $("#credit_date_val").hide();


    err_name_val = true;
    err_order_number=true;
    err_credit_date = true;

      $("#vendor_name").blur(function(){

            name_f();
         });
                 function name_f(){

              var m = $("#vendor_name").val();
             
            if(m.length==""){

                $("#name_val").show();
                $("#name_val").html("This field is required ");
                $("#name_val").focus();
                $("#name_val").css("color","red");

                  err_name_val=false;
                        return false;
                }else{
                  err_name_val=true;
                  $("#name_val").hide();
                }
        }




             $("#order_number").blur(function(){

            order_number_f();
        });
        function order_number_f(){

          var d = $("#order_number").val();

          if(d.length==""){

            $("#order_number_val").show();
            $("#order_number_val").html("This field is required");
            $("#order_number_val").focus();
            $("#order_number_val").css("color","red");

              err_order_number=false;
              return false;
          }else{
            err_order_number=true;
            $("#order_number_val").hide();
          }
        }

          $("#credit_date").blur(function(){

            credit_date_f();
        });
        function credit_date_f(){

          var p = $("#credit_date").val();

          
          if(p==""){

            $("#credit_date_val").show();
            $("#credit_date_val").html("This field is required ");
            $("#credit_date_val").focus();
            $("#credit_date_val").css("color","red");

              err_credit_date=false;
              return false;
          }else{
            err_credit_date=true;
            $("#credit_date_val").hide();
          }
        }

            $("#btn").click(function(){

      
       err_name_val = true;
       err_order_number=true;
       err_credit_date = true;

     


    
      name_f();
      order_number_f();
      credit_date_f();
      

     if((err_name_val==true)&&(err_order_number==true)&&(err_credit_date==true))
     {
        return true;
     }else{
        return false;

     }

     });
         

  });

</script>