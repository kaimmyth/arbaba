
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
                    <li class="active">Payments Made</li>
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
                                    <th>payment</th>
                                    <th>Reference </th>
                                    <th>Vendor Name</th>
                                    <th>Bill</th>
                                    <th>Mode</th>
                                    <th>Amount</th>
                                    <th>Unused Amount</th> 
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
          <h4 class="modal-title mt-0" id="myLargeModalLabel">Payments Made</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
                 


          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Vendor Name</label>
                <input type="text" name="vendor_name" class="form-control" value="" id="vendor_name" maxlength="20">
                <h6 id="vendor_name_val"></h6>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Amount</label>
                <input type="text" name="amount" class="form-control" value="" id="amount" maxlength="18">
              </div>
                <h6 id="amount_val"></h6>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Payment Date</label>
                <input type="date" name="payment_date" class="form-control" value="" id="payment_date" placeholder="dd/mm/yyyy">
                <h6 id="payment_date_val"></h6>
              </div>
            </div>


         <div class="col-md-4">
            <div class="form-group row">
              <label class="exampleInputEmail1">Payment Mode</label>
                <select class="form-control" name="payment_mode" id="payment_mode">
                  <option></option>
                  <option>xyz</option>
                  <option>abc</option>
                  <option>abhh</option>
                  <option>areg</option>
                </select>  
            </div>
              <h6 id="payment_mode_val"></h6>
          </div>

            <div class="col-md-4">
            <div class="form-group row">
              <label class="exampleInputEmail1">Paid Through</label>
                <select class="form-control" name="paid_through" id="paid_through">
                  <option>-Select-</option>
                  <option></option>
                  <option></option>
                  <option></option>
                  <option></option>
                </select>  
            </div>
              <h6 id="paid_thgough_val"></h6>
          </div>

             <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Reference</label>
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
                                    <th>Date</th>
                                    <th>Bill</th>
                                    <th>Purchase Order</th>
                                    <th>Bill Amount</th>
                                    <th>Amount Due</th>
                                    <th>Payment</th>
                                    </tr>
                                </thead>
                               <tbody>
                               		<tr>
                               			<td><input type="checkbox" name="chkall[]" id="selectall" onClick="selectAll(this)" /></td>
                                    	<td>iteams12</td>
                                    	<td>123456789</td>
                                    	<td>12</td>
                                    	<td>500</td>
                                      <td>    </td>
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
                  <h4>Total  &nbsp; &nbsp;<i class="fa fa-rupee-sign sz" aria-hidden="true"></i><span id="subtotal-span">0.00</span></h4>
                 
            </div>
          </div>
          <hr/>
            </div>

                      
            <div class="col-md-12">
			    <div class="row">
					<div class="col-md-12" style="text-align: right;">
						<tr>
					        <td><h4>Amount Paid  &nbsp; &nbsp;<i class="fa fa-rupee-sign sz" aria-hidden="true"></i><span id="subtotal-span">0.00</span></h4></td>
					        <td><h4>Amount Used For Payments  &nbsp; &nbsp;<i class="fa fa-rupee-sign sz" aria-hidden="true"></i><span id="taxes-span"><span>0.00</h4></td>
                   <td><h4>Amount Refunded &nbsp; &nbsp;<i class="fa fa-rupee-sign sz" aria-hidden="true"></i><span id="taxes-span"><span>0.00</h4></td>  
					        <td><h4>Amount In Excess  &nbsp; &nbsp;<i class="fa fa-rupee-sign sz" aria-hidden="true"></i><span id="total-span">0.00</span></h4></td>
					     </tr>   
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
    $("#amount_val").hide();
    $("#payment_date_val").hide();
    $("#payment_mode_val").hide();


    
    var err_vendor_name_val=true;
    var err_amount_val=true;
    var err_payment_date_val=true;
    var err_payment_mode_val=true;




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

    $("#amount").blur(function () {
        amount_f();
    });
    function amount_f()
    {
         var c=$("#amount").val();
        var regexOnlyNumbers=/^[0-9]+$/;
        if(c=="" || regexOnlyNumbers.test(c) != true)
        {
      
            
            $("#amount_val").show();
            $("#amount_val").html("This field is required");
            $("#amount_val").focus();
            $("#amount_val").css("color","red");
            err_amount_val=false;
        }
        else
        {
            err_amount_val=true;
            $("#amount_val").hide();
        }  
    }

     $('#payment_date').blur(function () {
        payment_date_f();
    });
    function payment_date_f()
    {
        
        var o=$("#payment_date").val();
       
        if(o.length=="")
        {
            
            $("#payment_date_val").show();
            $("#payment_date_val").html("This field is required");
            $("#payment_date_val").focus();
            $("#payment_date_val").css("color","red");
            err_payment_date_val=false;
        }
        else
        {
            err_payment_date_val=true;
            $("#payment_date_val").hide();
        }  
    }


     $('#payment_mode').blur(function () {
        payment_mode_f();
    });
    function payment_mode_f()
    {
        
        var p=$("#payment_mode").val();
       
        if(p.length=="")
        {
            
            $("#payment_mode_val").show();
            $("#payment_mode_val").html("This field is required");
            $("#payment_mode_val").focus();
            $("#payment_mode_val").css("color","red");
            err_payment_mode_val=false;
        }
        else
        {
            err_payment_mode_val=true;
            $("#payment_mode_val").hide();
        }  
    }



    $("#btn").click(function(){
    
     err_vendor_name_val=true;
     err_amount_val=true;
     err_payment_date_val=true;
     err_payment_mode_val=true;

        
        
        vendor_name_f();
        amount_f();
        payment_mode_f();
        payment_date_f();

        if((err_vendor_name_val==true)&&(err_amount_val==true)&&(err_payment_date_val==true)&&(err_payment_mode_val==true))
        {
            return true;
        }
        else{
            return false;
        }
    });
});
</script>