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
      <li class="active">All Sales</li>
  </ol>
</div>
</div>
<div class="row">
    <div class="col-lg-12">
     <div class="card">
      <div class="row">
       <div class="col-md-12">
        <h4>Sales Transactions</h4>
        <div class="row">
         <div class="col-md-12" style="text-align: right;">
          <button class="btn btn-primary" data-toggle="modal" data-target="#full-width-modal">New transaction</button>
      </div>
      <div class="col-md-3 dv" style="background-color: #21ABF6;">
          <i class="fa fa-calculator sz" aria-hidden="true"></i>  0
          <p style="font-size: 15px; font-weight: 600;">0 ESTIMATE</p>
      </div>
      <div class="col-md-3 dv" style="background-color: #0077C5;">
          <i class="fa fa-file sz" aria-hidden="true"></i>  0
          <p style="font-size: 15px; font-weight: 600;">0 UNBILLED ACTIVITY</p>
      </div>
      <div class="col-md-3 dv" style="background-color: #FF8000;">
          <i class="fa fa-clock sz" aria-hidden="true"></i>  0
          <p style="font-size: 15px; font-weight: 600;">0 OVERDUE</p>
      </div>
      <div class="col-md-3 dv" style="background-color: #BABEC5;">
          <i class="fa fa-address-book sz" aria-hidden="true"></i>  0
          <p style="font-size: 15px; font-weight: 600;">0 Open Invoice</p>
      </div>
      <div class="col-md-3 dv" style="background-color: #7FD000;">
          <i class="fa fa-rupee-sign sz" aria-hidden="true"></i>  0
          <p style="font-size: 15px; font-weight: 600;">0 PAID LAST 30 DAYS</p>
      </div>
  </div>
  <div class="tab-content colm">
     <div class="tab-pane show active" id="home-2" role="tabpanel" aria-labelledby="home-tab-2" style="">
      <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
       <thead>
        <tr>
         <th><input type="checkbox" name="chkall[]" id="selectall" onClick="selectAll(this)" /></th>
         <th>Date</th>
         <th>Type</th>
         <th>No.</th>
         <th>Customer</th>
         <th>Due Date</th>
         <th>Total Before Tax</th>
         <th>Tax</th>
         <th>Total</th>
         <th>Status</th>
         <th>Action</th>
     </tr>
 </thead>
 <tbody>
    <?php $__currentLoopData = $toReturn; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
     <td>&nbsp;<input type="checkbox" name="ids[]" value="" /></td>
     <td><?php echo e($value['invoice_date']); ?></td>
     <td>Invoice</td>
    <td><?php echo e($value['invoice_no']); ?></td>
     <td><?php echo e($value['customer']); ?></td>
     <td><?php echo e($value['due_date']); ?></td>
     <?php
     $total_before_tax=0;
     $taxes=0;
     $total=0;
     if($value["invoice_details"]!="")
     {
         $tmp = $value["invoice_details"];
         $tmp = explode(":",$tmp);
         for($i=0;$i<count($tmp);$i++){
             $to_show = explode(",",$tmp[$i]);
             $total_before_tax += $to_show[5];
             $taxes += (($to_show[5]*$to_show[6])/100);
         }
     }
    $total = $total_before_tax + $taxes;
     ?>
    <td><?php echo e($total_before_tax); ?></td>
    <td><?php echo e($taxes); ?></td>
    <td><?php echo e($total); ?></td>
     <td>
         <?php
         if($value['due_date'] < date("Y-m-d"))
         {
             echo "Expired";
         }
         else{
            $diff = strtotime($value['due_date']) - strtotime(date("Y-m-d"));
                if($diff==0) { echo "Expires Today"; }
                else { echo "Due in ".abs(round($diff / 86400))." Days"; }
            }
          ?>
     </td>
     <td style="color: #0077C5; font-weight: 600; cursor: pointer;">
      Receive payment <i class="fa fa-caret-down" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black; font-size: 15px;"></i>
      <div class="dropdown-menu resp" aria-labelledby="dropdownMenuButton">
       <a class="dropdown-item" href="#">Print</a>
       <a class="dropdown-item" href="#">Send</a>
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
    <h4 class="modal-title mt-0" id="full-width-modalLabel">Invoice no.1001</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <div class="row">
        <div class="col-md-3">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Customer</label>
                        <select class="form-control">
                            <option>-Select Customer-</option>
                            <option style="color: green;">Add New +</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                 <div class="form-group">
                    <label for="exampleInputEmail1">Customer Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
            </div>
        </div>

    </div>

    <div class="col-md-9" style="text-align: right;">
        <h4>BALANCE DUE</h4>
        <h2><i class="fa fa-rupee-sign sz" aria-hidden="true"></i> 0.00</h2>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Billing address</label>
                    <textarea class="form-control" rows="2" id="example-textarea-input" style="margin-top: 0px; margin-bottom: 0px; height: 87px;"></textarea>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Terms</label>
                    <select class="form-control">
                        <option>-Select Customer-</option>
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
                        <input type="text" class="form-control autodate" placeholder="mm/dd/yyyy">
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
                        <input type="text" class="form-control autodate" placeholder="mm/dd/yyyy">
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
                <input type="text" class="form-control" value="1001" id="example-text-input">
            </div>
        </div>

    </div>
</div>


<div class="col-md-2">
  <div class="form-group">
    <label for="exampleInputEmail1">Place of Supply</label>
    <select class="form-control">
        <option>-Please Select a Location-</option>
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
         <th>Descrip[tion</th>
         <th>Qty</th>
         <th>Rate</th>
         <th>Amount</th>
         <th>Tax</th>
         <th>Action</th>
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
     <td></td>
     <td></td>
     <td></td>
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
                <textarea class="form-control" rows="2" id="example-textarea-input"></textarea>
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="exampleInputEmail1">Message on statement</label>
                <textarea class="form-control" rows="2" id="example-textarea-input"></textarea>
            </div>
        </div>
    </div>

    <div class="col-md-6" style="text-align: right;">
        <h4>Subtotal  &nbsp; &nbsp;<i class="fa fa-rupee-sign sz" aria-hidden="true"></i> 0.00</h4>
        <h4>Total  &nbsp; &nbsp;<i class="fa fa-rupee-sign sz" aria-hidden="true"></i> 0.00</h4>
        <h4>Balance Due  &nbsp; &nbsp;<i class="fa fa-rupee-sign sz" aria-hidden="true"></i> 0.00</h4>
    </div>
</div>

<div class="col-md-4">
 <div class="form-group">
    <label for="exampleInputEmail1">Attachments</label>
    <div class="dropzone" id="dropzone" style="min-height: 55px">
        <div class="fallback">
          <input name="file" type="file" multiple="multiple">
      </div>
  </div>
</div>
</div>



</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
</div>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<?php /**PATH C:\xampp\htdocs\arbaba\resources\views/sale/allsale.blade.php ENDPATH**/ ?>