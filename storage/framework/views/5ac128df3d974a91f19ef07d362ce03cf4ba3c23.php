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
      <li class="active">Invoice</li>
    </ol>
  </div>
</div>
<div class="row">
  <div class="col-lg-12">
   <div class="card">
    <div class="row">
      <div class="col-md-6" style="border: 1px solid;">
        <div class="row">
          <div class="col-md-4">
           <h4 class="unp"><i class="fa fa-rupee-sign sz" aria-hidden="true"></i> &nbsp; 11,000.00 Unpaid</h4>
         </div>
         <div class="col-md-8">
          <p style="margin-top: 12px;">LAST 365 DAYS </p>
        </div>

        <div class="col-md-6">
         <h3><i class="fa fa-rupee-sign sz" aria-hidden="true"></i> 0.00</h3> OVERDUE
       </div>
       <div class="col-md-6" style="text-align: right;">
         <h3><i class="fa fa-rupee-sign sz" aria-hidden="true"></i> 118,000.00</h3> NOT DUE YET
       </div>

       <div class="col-md-12" style="margin-top: 18px;">
         <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:40%; background-color: #d8900e;"></div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-6" style="border: 1px solid;">
   <div class="row">
    <div class="col-md-4">
     <h4><i class="fa fa-rupee-sign sz" aria-hidden="true"></i> &nbsp; 0.00 Paid</h4>
   </div>
   <div class="col-md-8">
    <p style="margin-top: 12px;">LAST 30 DAYS </p>
  </div>

  <div class="col-md-6">
   <h3><i class="fa fa-rupee-sign sz" aria-hidden="true"></i> 0.00</h3> NOT DEPOSITED
 </div>
 <div class="col-md-6" style="text-align: right;">
   <h3><i class="fa fa-rupee-sign sz" aria-hidden="true"></i> 0.00</h3> DEPOSITED
 </div>

 <div class="col-md-12" style="margin-top: 18px;">
         <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:60%; background-color: #18a96d;"></div>
        </div>
      </div>
</div>
</div>
</div>
<div class="row">
 <div class="col-md-12">
  <div class="col-md-12" style="text-align: right; margin-bottom: 4px; margin-top: 4px;">
   <button class="btn btn-primary" data-toggle="modal" data-target="#full-width-modal"  >New transaction</button>
 </div>
 <div class="tab-content colm">
   <div class="tab-pane show active" id="home-2" role="tabpanel" aria-labelledby="home-tab-2" style="">
    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
     <thead>
      <tr>
       <th><input type="checkbox" name="chkall[]" id="selectall" onClick="selectAll(this)" /></th>
       <th>Invoice</th>
       <th>Customer</th>
       <th>Date</th>
       <th>Due Date</th>
       <th>Balance</th>
       <th>Total</th>
       <th>Status</th>
       <th>Action</th>
     </tr>
   </thead>
   <tbody>
      
          <?php $__currentLoopData = $toReturn; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 
        <tr>
        <td>&nbsp;<input type="checkbox" name="ids[]" value="" /></td>
        <td><?php echo e($value['invoice_no']); ?></td>
        <td><?php echo e($value['customer']); ?></td>
        <td><?php echo e($value['invoice_date']); ?></td>
        <td><?php echo e($value['due_date']); ?></td>
        <td></td>
        <td></td>
        <td><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Due in 30 days (Undelivered)</td>
        <td style="color: #0077C5; font-weight: 600; cursor: pointer;">
         Receive payment <i class="fa fa-caret-down" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black; font-size: 15px;"></i>
         <div class="dropdown-menu resp" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">Print</a>
         <a class="dropdown-item" href="<?php echo e(url('sale/invoice/email/'.$value['id'])); ?>">Send</a>
          <a class="dropdown-item" href="#">Send remainder</a>
          <a class="dropdown-item" href="#">Share Invoice Link</a>
          <a class="dropdown-item" href="#">Print Delivery Challan</a>
          <a class="dropdown-item" href="#">View/Edit</a>
          <a class="dropdown-item" href="#">Copy</a>
          <a class="dropdown-item" href="#">Delete</a>
        </div>
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
</div>
</div>
</div>




<div id="full-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none">
 <div class="modal-dialog modal-full">
  <div class="modal-content">
   <div class="modal-header">
    <h4 class="modal-title mt-0" id="full-width-modalLabel">Invoice no.<span id="check_invoice_no"></span></h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
<form action="<?php echo e(url('sale/invoice/add')); ?>" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="row">
        <div class="col-md-3">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Customer</label>
                        

                        <select class="form-control" id="customer" name="customer" required>
                            <option value="">-Select Customer-</option>
                            <option style="color: green;">Add New +</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                 <div class="form-group">
                    <label for="exampleInputEmail1">Customer Email</label>
                    <input type="email" class="form-control" id="customer_email" name="customer_email" placeholder="Enter email" required>
                </div>
            </div>
        </div>

    </div>

    <div class="col-md-9" style="text-align: right;">
        <h4>BALANCE DUE</h4>
        <h2><i class="fa fa-rupee-sign sz" aria-hidden="true"></i><span id="total-span-h">0.00</span></h2>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Billing address</label>
                    <textarea class="form-control" rows="2" id="billing_address" name="billing_address" style="margin-top: 0px; margin-bottom: 0px; height: 87px;" required></textarea>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Terms</label>
                    <select class="form-control" name="terms" id="terms" required>
                        <option value="">-Select Customer-</option>
                        <option style="color: green;">Add New +</option>
                        <option>Due on receipt</option>
                        <option>Net 15</option>
                        <option>Net 30</option>
                        <option>Net 60</option>
                    </select>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Invoice date</label>
                    <div class="input-group">
                        <input type="text" class="form-control autodate" placeholder="mm/dd/yyyy" id="invoice_date" name="invoice_date" required>
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="md md-event"></i></span>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Due date</label>
                    <div class="input-group">
                        <input type="text" class="form-control autodate" placeholder="mm/dd/yyyy" id="due_date" name="due_date" required>
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="md md-event"></i></span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="col-md-6">
        <div class="col-md-3"  style="float: right;">
            <div class="form-group">
                <label for="exampleInputEmail1">Invoice no.</label>
                <input type="text" class="form-control" value="" id="invoice_no" name="invoice_no" required>
                <span id="invoice_check"></span>
            </div>
        </div>

    </div>
</div>


<div class="col-md-2">
  <div class="form-group">
    <label for="exampleInputEmail1">Place of Supply</label>
    <select class="form-control" name="place_of_supply" id="place_of_supply" required>
        <option value="">-Please Select a Location-</option>
        <option>Andhra Pradesh</option>
        <option>Arunachal Pradesh</option>
        <option>Chandigarh</option>
        <option>Delhi</option>
        <option>Goa</option>
    </select>
</div>
</div>
<hr>

<div class="col-md-12">
    <div class="tab-content">
     <div class="tab-pane show active" id="home-2" role="tabpanel" aria-labelledby="home-tab-2">
      <table id="datatable" class="table table-striped table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
       <thead>
        <tr>
         <th><input type="checkbox" name="chkall[]" id="selectall" onClick="selectAll(this)" /></th>
         <th>Product/Service</th>
         <th>HSN/SAC</th>
         <th>Description</th>
         <th>Qty</th>
         <th>Rate</th>
         <th>Amount</th>
         <th>Tax</th>
         <th>Action</th>
     </tr>
 </thead>
 <tbody id="mytable">
    <tr>
     <td>&nbsp;<input  type="checkbox" name="ids[]" value="" /></td>
     <td>
            <select class="form-control input-sm" name="product_service[]" required>
                    <option value="" disabled selected>-Select-</option>
                    <option value="add_new" style="color: green;">Add New +</option>
                    <option value="hours">Hours</option>
                    <option value="services">Services</option>
                   
                </select>  
     </td>
     <td><input type="text" class="form-control" name="hsn_sac[]" required></td>
     <td><input type="text" class="form-control" name="description[]" required></td>
     <td><input type="text" class="form-control" name="qty[]" required></td>
     <td><input type="text" class="form-control"  name="rate[]" required></td>
     <td><input class="form-control" type="text" name="amt[]"></td>
     
            <td >
                    <select class="form-control input-sm" name="tax[]" required>
                        <option value="0" disabled selected>-Select-</option>
                        <option value="0.25">0.25% IGST</option>
                        <option value="5">5% IGST</option>
                        <option value="10">10% IGST</option>
                        <option value="2">18% IGST</option>
                    </select>
                </td>     
     
     <td>
            <button class="btn" id="del"><i class="fa fa-trash" style="color: blue;"></i></button>
    
     </td>
 </tr>


</tbody>
<tbody>
    <tr>
        <td colspan="8"></td>
        <td><a href="#" onclick="myFunction()"><i class="fa fa-plus-circle" aria-hidden="true" style="color:green" id="insert_more" ></i></td>
    </tr>
</tbody>
</table>
</div>
</div>
</div>
<br>

<div class="row">
    <div class="col-md-6">
        <div class="col-md-3">
            <div class="form-group">
                <label for="exampleInputEmail1">Message on invoice</label>
                <textarea class="form-control" rows="2" id="msg_on_invoice" name="msg_on_invoice" required></textarea>
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="exampleInputEmail1">Message on statement</label>
                <textarea class="form-control" rows="2" id="msg_on_statement" name="msg_on_statement" required></textarea>
            </div>
        </div>
    </div>

    <div class="col-md-6" style="text-align: right;">
        <h4>Subtotal  &nbsp; &nbsp;<i class="fa fa-rupee-sign sz" aria-hidden="true"></i><span id="subtotal-span">0.00</span></h4>
        <h4>Taxes  &nbsp; &nbsp;<i class="fa fa-rupee-sign sz" aria-hidden="true"></i><span id="taxes-span"><span>0.00</h4>
        <h4>Balance Due  &nbsp; &nbsp;<i class="fa fa-rupee-sign sz" aria-hidden="true"></i><span id="total-span">0.00</span></h4>
    </div>
</div>

<div class="col-md-4">
 <div class="form-group">
    <label for="exampleInputEmail1">Attachments</label>
    <div class="dropzone" id="dropzone" style="min-height: 55px">
        <div class="fallback">
          <input  type="file"  name="attachment" id="attachment" required>
      </div>
  </div>
</div>
</div>



</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary waves-effect waves-light" id="btnSubmit">Save changes</button>
</div>
</form>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<script>

 function myFunction()
     {

     var data='<tr>'+
     '<td>&nbsp;<input  type="checkbox" name="ids[]" value="" /></td>'+
     '<td>'+
           ' <select class="form-control input-sm" name="product_service[]" >'+
                    '<option value="" disabled selected>-Select-</option>'+
                    '<option value="add_new" style="color: green;">Add New +</option>'+
                   ' <option value="hours">Hours</option>'+
                   ' <option value="services">Services</option>'+
                   
               ' </select>'+
     '</td>'+
     '<td><input type="text" class="form-control" name="hsn_sac[]"></td>'+
     '<td><input type="text" class="form-control" name="description[]"></td>'+
     '<td><input type="text" class="form-control" name="qty[]" required></td>'+
     '<td><input type="text" class="form-control"  name="rate[]" required></td>'+
     '<td><input class="form-control" type="text" name="amt[]" ></td>'+
     
            '<td>'+
                   ' <select class="form-control input-sm" name="tax[]">'+
                        '<option value="0" disabled selected>-Select-</option>'+
                        '<option value="0.25">0.25% IGST</option>'+
                        '<option value="5">5% IGST</option>'+
                        '<option value="10">10% IGST</option>'+
                        '<option value="2">18% IGST</option>'+
                    '</select>'+
                '</td>'+     
     
     '<td>'+
          
            '<button class="btn" id="del"><i class="fa fa-trash" style="color: blue;"></i></button>'+

    
     '</td>'+
 '</tr>';
 $("#mytable").append(data);
     }
  

</script>
<script>
     $(document).ready(function () {

$("#check_invoice_no").hide();


$('#invoice_no').keyup(function () {

    invoice_no_check();                     
            });

            function invoice_no_check()
            {
                var invoice_val=$('#invoice_no').val();
                 
                 
                $("#check_invoice_no").html(invoice_val);
                $("#check_invoice_no").show();
               
                
            }

     });
</script>

<script>
     $(document).ready(function () {

    $("#invoice_check").hide();

    var err_invoice=false;
    $('#invoice_no').blur(function () {
    check_invoice();
});

function check_invoice()
{
    
    var invoice_no_val=$("#invoice_no").val();
    var regexOnlyNumbers=/^[0-9]+$/;
    if(invoice_no_val=="" || regexOnlyNumbers.test(invoice_no_val) != true)
    {
        
$("#invoice_check").show();
$("#invoice_check").html("Please enter a valid number");
$("#invoice_check").focus();
$("#invoice_check").css("color","red");
err_invoice=false;
}
else
{
 err_invoice=true;
$("#invoice_check").hide();
}
    
}
$("#btnSubmit").click(function()
 {
    check_invoice();
  
if(( err_invoice==true) )
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
$("#mytable").delegate("#del", "click", function (){
$(this).closest("tr").remove();
getSalesDetailsValues();
});
</script>

<script>
    // calculate amounts
    $("#mytable").delegate("input[name='qty[]']", "change", function (){
        getSalesDetailsValues();
    });
    $("#mytable").delegate("input[name='rate[]']", "change", function (){
        getSalesDetailsValues();
    });
    $("#mytable").delegate("select[name='tax[]']", "change", function (){
        getSalesDetailsValues();
    });
    function getSalesDetailsValues(){
        var fieldsQty = document.getElementsByName("qty[]");
        var fieldsRate = document.getElementsByName("rate[]");
        var fieldsTax = document.getElementsByName("tax[]");
        var fieldsAmount = document.getElementsByName("amt[]");

        
            var amount=0;
            var subtotal=0;
            var taxes=0;
            var total=0;
    
            for(var i=0;i<fieldsAmount.length;i++)
            {
                if(fieldsQty[i].value&&fieldsRate[i].value){
                    amount=fieldsQty[i].value*fieldsRate[i].value;
                    taxes+=(amount*fieldsTax[i].value)/100;
                    subtotal+=amount;
                    fieldsAmount[i].value = amount;
                }
            }
    
            total+=parseFloat(subtotal)+parseFloat(taxes);
            $("#subtotal-span").html(subtotal);
            $("#taxes-span").html(taxes);
            $("#total-span").html(total);
            $("#total-span-h").html(total); // large text
        
    }
    </script>

   <?php /**PATH C:\xampp\htdocs\arbaba\resources\views/sale/invoice.blade.php ENDPATH**/ ?>