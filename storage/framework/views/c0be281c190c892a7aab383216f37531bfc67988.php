
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
                    <li class="active">Purchase Orders</li>
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
                                    <th>Purchase Order</th>
                                    <th>Reference</th>
                                    <th>Vendor Name</th>
                                    <th>Status</th>
                                    <th>Bill Status</th>
                                    <th>Amount</th>
                                    <th>Expected Delivery Date</th> 
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
  <?php echo csrf_field(); ?>
  <!--  Modal content for the above example -->
  <div class="modal fade bs-example-modal-lg recurring-expenses" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title mt-0" id="myLargeModalLabel">Purchase Orders</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
                 


          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Vendor Name</label>
                <input type="text" name="vendor_name" class="form-control" value="" id="vendor_name">
               
              </div>
                 <h6 id="vendor_name_val"></h6>
            </div>


          <div class="col-md-4">
          	<br/>
          	<br/>
            <div class="form-group row">
                <input type="radio" id="bc-1" name="optradio" checked>&nbsp;<label for="bc-1" style="margin:0;">Customer</label>
            </div>
          </div>
          <div class="col-md-4">
          	<br/>
          	<br/>
            <div class="form-group row">
				<input type="radio" id="bc-2" name="optradio">&nbsp;<label for="bc-2" style="margin:0;">Organisation</label>
            </div>
          </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Purchase Order</label>
                <input type="text" name="purchase_order" class="form-control" value="" id="purchase_order">
              </div>
                <h6 id="purchase_order_val"></h6>
            </div>


           
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Reference</label>
                <input type="text" name="name" class="form-control" value="" id="name">
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Start Date</label>
                <input type="date" name="start_date" class="form-control" value="" id="start_date" placeholder="dd/mm/yyyy">
                 
              </div>
              <h6 id="start_date_val"></h6>
            </div>

           <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Expected Delivery Date</label>
                <input type="date" name="delivery_date" class="form-control" value="" id="delivery_date" placeholder="dd/mm/yyyy">
                 
              </div>
                 <h6 id="delivery_date_val"></h6>
            </div>


          <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Shipment Preference</label>
                <input type="text" name="name" class="form-control" value="" id="name">
              </div>
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
                                    	<td>5000</td>
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



<script>
$(document).ready(function(){
   
    $("#vendor_name_val").hide();
    $("#start_date_val").hide();
    $("#delivery_date_val").hide();
    $("#purchase_order_val").hide();


    
    var err_vendor_name_val=true;
    var err_start_date_val=true;
    var err_delivery_date_val=true;
    var err_purchase_order_val=true;




    $("#vendor_name").blur(function(){
        vendor_name_f();
    });
    function  vendor_name_f(){

        var d = $("#vendor_name").val();

        if(d.length==""){
            $("#vendor_name_val").show();
            $("#vendor_name_val").html("This field is required ");
            $("#vendor_name_val").focus();
            $("#vendor_name_val").css("color","red");

            err_vendor_name_val=false;
            return false;
    
    }
        else{
           err_vendor_name_val=true;
            $("#vendor_name_val").hide();
        }
    }

    $('#start_date').blur(function () {
        start_date_f();
    });
    function start_date_f()
    {
        
        var k=$("#start_date").val();
       
        if(k.length=="")
        {
            
            $("#start_date_val").show();
            $("#start_date_val").html("This field is required");
            $("#start_date_val").focus();
            $("#start_date_val").css("color","red");
            err_start_date_val=false;
        }
        else
        {
            err_start_date_val=true;
            $("#start_date_val").hide();
        }  
    }

     $('#delivery_date').blur(function () {
        delivery_date_f();
    });
    function delivery_date_f()
    {
        
        var o=$("#delivery_date").val();
       
        if(o.length=="")
        {
            
            $("#delivery_date_val").show();
            $("#delivery_date_val").html("This field is required");
            $("#delivery_date_val").focus();
            $("#delivery_date_val").css("color","red");
            err_delivery_date_val=false;
        }
        else
        {
            err_delivery_date_val=true;
            $("#delivery_date_val").hide();
        }  
    }


     $('#purchase_order').blur(function () {
        purchase_order_f();
    });
    function purchase_order_f()
    {
        
        var b=$("#purchase_order").val();
       
        if(b.length=="")
        {
            
            $("#purchase_order_val").show();
            $("#purchase_order_val").html("This field is required");
            $("#purchase_order_val").focus();
            $("#purchase_order_val").css("color","red");
            err_purchase_order_val=false;
        }
        else
        {
            err_purchase_order_val=true;
            $("#purchase_order_val").hide();
        }  
    }



    $("#btn").click(function(){
    
     err_vendor_name_val=true;
     err_start_date_val=true;
     err_purchase_order_val=true;
     err_delivery_date_val=true;

        
        
        vendor_name_f();
        start_date_f();
        purchase_order_f();
        delivery_date_f();

        if((err_vendor_name_val==true)&&(err_start_date_val==true)&&(err_purchase_order_val==true)&&(err_delivery_date_val==true))
        {
            return true;
        }
        else{
            return false;
        }
    });
});
</script><?php /**PATH C:\xampp\htdocs\arbaba\resources\views/purchases/purchase-order.blade.php ENDPATH**/ ?>