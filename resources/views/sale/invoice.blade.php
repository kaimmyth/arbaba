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
   <button class="btn btn-primary" data-toggle="modal" data-target="#full-width-modal">New transaction</button>
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
    <tr>
     <td>&nbsp;<input type="checkbox" name="ids[]" value="" /></td>
     <td>101</td>
     <td>abc</td>
     <td>10/10/2019</td>
     <td>09/11/2019</td>
     <td>8000</td>
     <td>8000</td>
     <td><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Due in 30 days (Undelivered)</td>
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
<form action="{{url('sale/invoice/add')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-3">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Customer</label>
                        {{-- <input type="text" class="form-control" id="customer" name="customer" placeholder=""> --}}

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
        <h2><i class="fa fa-rupee-sign sz" aria-hidden="true"></i> 0.00</h2>
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
          <input  type="file"  name="attachment" id="attachment" required>
      </div>
  </div>
</div>
</div>



</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary waves-effect waves-light">Save changes</button>
</div>
</form>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->