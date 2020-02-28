<style type="text/css">
 .row {
     margin-right: 0px;
     margin-left: 0px;
 }
 
 
</style>

<-- javascript for send reminder   -->
<script>
function sendReminder(email,id,name){
var subject=`Reminder: Invoice `+id+` from technical`;
var messageText = `Dear `+name+`,
Just a reminder that we have not received a payment for this invoice yet. 
Let us know if you have questions.
Thanks for your business!`;
$("#reminder_recipient_email").val(email);
$("#id_no").html(id);
$("#reminderModal").modal("show");
$("#message_text").val(messageText);
$("#subject").val(subject);
}
 
function sendReminder(email,id,name){
var subject=`Reminder: Invoice `+id+` from technical`;
var messageText = `Dear `+name+`,
Here is your invoice ! we appreciate your prompt payment.
Thanks for your business!`;
$("#reminder_recipient_email").val(email);
$("#id_no").html(id);
$("#reminderModal").modal("show");
$("#message_text").val(messageText);
$("#subject").val(subject);
$("#cc").show(cc);
}
</script>


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
         <a href="{{url('sale/invoice?invoice=yes')}}" class="btn btn-primary">New transaction</a>
      </div>
      <?php
      $overdue_count=$overdue_amount=$open_invoice_count= $estimate_count= $estimate_amount=$paid_count=$paid_amount=0;
      $total_before_tax=0;
     $taxes=0;
     $total=0;
      ?>
      @foreach($toReturn as $value)
        <?php
       
        // overdue
        if($value['due_date'] < date("d-m-Y")&&$value['status']==1)
        {
            $overdue_count++;
            if($value["invoice_details"]!="")
            {
                $tmp = $value["invoice_details"];
                $tmp = explode(":",$tmp);
                for($i=0;$i<count($tmp);$i++){
                    $tmp_2 = explode(",",$tmp[$i]);
                    $overdue_amount += ($tmp_2[5] + (($tmp_2[5]*$tmp_2[6])/100));
                    $overdue_amount = sprintf('%0.2f',$overdue_amount );
                  
                }
            }
        }
        
         //open invoice
         if($value['status'] == 1)
            {
                $open_invoice_count++;
            }
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
    $total = sprintf('%0.2f',$total );
    //estimate
    if($value['due_date'] > date("d-m-Y") && $value['status']==1)
        {
            $estimate_count++;
            if($value["invoice_details"]!="")
            {
                $tmp = $value["invoice_details"];
                $tmp = explode(":",$tmp);
                for($i=0;$i<count($tmp);$i++){
                    $tmp_2 = explode(",",$tmp[$i]);
                    $estimate_amount += ($tmp_2[5] + (($tmp_2[5]*$tmp_2[6])/100));
                    $estimate_amount = sprintf('%0.2f',$estimate_amount );
                }
            }
        }

        //paid
        if($value['status'] == 2 && date('d-m-Y', strtotime('today - 30 days')))
        {
            $paid_count++;
            if($value["invoice_details"]!="")
            {
                $tmp = $value["invoice_details"];
                $tmp = explode(":",$tmp);
                for($i=0;$i<count($tmp);$i++){
                    $tmp_2 = explode(",",$tmp[$i]);
                    $paid_amount += ($tmp_2[5] + (($tmp_2[5]*$tmp_2[6])/100));
                    $paid_amount = sprintf('%0.2f',$paid_amount );
                }
            }
        }
         ?>
      @endforeach
      <div class="col-md-3 dv" style="background-color: Tomato;">
          <i class="fa fa-calculator sz" aria-hidden="true"></i>  {{$estimate_amount}}
      <p style="font-size: 15px; font-weight: 600;">{{$estimate_count}} ESTIMATE</p>
      </div>
      <div class="col-md-3 dv" style="background-color: SlateBlue;">
          <i class="fa fa-file sz" aria-hidden="true"></i> NA
          <p style="font-size: 15px; font-weight: 600;">NA UNBILLED ACTIVITY</p>
      </div>
      <div class="col-md-3 dv" style="background-color: Violet;">
          <i class="fa fa-rupee-sign sz" aria-hidden="true"></i>  {{$overdue_amount}}
          <p style="font-size: 15px; font-weight: 600;">{{$overdue_count}} OVERDUE</p>
      </div>
      <div class="col-md-3 dv" style="background-color: LightGray;">
          <i class="fa fa-rupee-sign sz" aria-hidden="true"></i> {{$total}}
      <p style="font-size: 15px; font-weight: 600;">{{$open_invoice_count}} Open Invoice</p>
      </div>
      <div class="col-md-3 dv" style="background-color: MediumSeaGreen;">
          <i class="fa fa-rupee-sign sz" aria-hidden="true"></i>  {{$paid_amount}}
          <p style="font-size: 15px; font-weight: 600;">{{$paid_count}} PAID LAST 30 DAYS</p>
      </div>
  </div>
  <div class="tab-content colm">
     <div class="tab-pane show active" id="home-2" role="tabpanel" aria-labelledby="home-tab-2" style="">
      <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
       <thead>
        <tr>
        
         <th style="text-align: right;">Date</th>
         <th>Type</th>
         <th>No.</th>
         <th>Customer</th>
         <th style="text-align: right;" >Due Date</th>
         <th>Total Before Tax</th>
         <th>Tax</th>
         <th>Total</th>
         <th>Status</th>
         <th>Action</th>
     </tr>
 </thead>
 <tbody>
    @foreach($toReturn as $value)
    <tr>
     
     <td style="text-align: right;">{{date('d-m-Y',strtotime($value['invoice_date']))}}</td>
     <td>Invoice</td>
    <td>{{$value['invoice_no']}}</td>
     <td>{{$value['customer']}}</td>
     <td style="text-align: right;">{{date('d-m-Y',strtotime($value['due_date']))}}</td>
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
    <td>{{$total_before_tax}}</td>
    <td>{{$taxes}}</td>
    <td>{{$total}}</td>
     <td>
            <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
         <?php
         if($value['due_date'] < date("d-m-Y"))
         {
             echo "Expired(Opened)";
         }
         elseif($value['status'] == 2)
         
         {
             echo "Paid(Closed)";
         }
         else{
            $diff = strtotime($value['due_date']) - strtotime(date("d-m-Y"));
                if($diff==0) { echo "Expires Today(Opened)"; }
                else { echo "Due in ".abs(round($diff / 86400))." Days(Opened)"; }
            }
          ?>
     </td>
     <td><span  onclick="receivePayment({{$value['id']}})" style="color: #0077C5; font-weight: 600; cursor: pointer;">Receive Payment</span>&nbsp;<i class="fa fa-caret-down" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black; font-size: 15px;"></i>
      
     {{-- <td style="color: #0077C5; font-weight: 600; cursor: pointer;" >
      Receive payment <i class="fa fa-caret-down" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black; font-size: 15px;"></i> --}}
     
        <div class="dropdown-menu resp" aria-labelledby="dropdownMenuButton">
         <a class="dropdown-item" href="{{url('sale/all-sale/print/'.@$value['id'])}}">Print</a>
         <a class="dropdown-item" href="javascript:void();" onclick="sendReminder('{{$value['customer_email']}}','{{$value['invoice_no']}}','{{$value['customer']}}');">Send reminder</a>
         <a class="dropdown-item" href="javascript:void();"  onclick="sendReminder('{{$value['customer_email']}}','{{$value['invoice_no']}}','{{$value['customer']}}');">Send</a>
         <!-- <a class="dropdown-item" href="#">Share Invoice Link</a> -->
         <a class="dropdown-item" href="{{url('sale/allsales/delivery_challan/'.$value['id'])}}">Print Delivery Challan</a>
         <a class="dropdown-item" href="#">View/Edit</a>
         <!-- <a class="dropdown-item" href="#">Copy</a> -->
         <a class="dropdown-item" href="#">Delete</a>
        </div>   
   </td>
   </tr>
  @endforeach   

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
                <h6 id="email_val"></h6>
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
                <h6 id="billing_address_val"></h6>
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
                        <input type="text" class="form-control autodate" placeholder="dd/mm/yyyy">
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
                        <input type="text" class="form-control autodate" placeholder="dd/mm/yyyy">
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
            <h6 id="invoice_no_val"></h6>
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
         <!-- <th><input type="checkbox" name="chkall[]" id="selectall" onClick="selectAll(this)" /></th> -->
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
     <!-- <td>&nbsp;<input type="checkbox" name="ids[]" value="" /></td> -->
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
    <button type="button" class="btn btn-primary waves-effect waves-light" id="btn">Save changes</button>
</div>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->

{{-- --------------------------------------------------Model for Sending Reminder-------------------------------------------------------- --}}
<div class="modal fade" id="reminderModal" tabindex="-1" role="dialog" aria-labelledby="reminderModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Send reminder email for&nbsp;<span id="id_no"></span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{url('sale/all-sale/remainder_mail/'.@$value['id'])}}" method="POST">
        @csrf
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">To:</label>
            <input type="text" class="form-control" id="reminder_recipient_email" name="reminder_recipient_email">
          </div>
          <div class="form-group">
                <label for="subject" class="col-form-label">Subject:</label>
                <input type="text" class="form-control" id="subject" name="subject">
              </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message_text" name="message_text" rows="6"></textarea>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Send</button>
      </div>
    </form>
    </div>
  </div>
</div>

{{-- --------------------------------------------------Model for Send-------------------------------------------------------- --}}
<div class="modal fade" id="reminderModal" tabindex="-1" role="dialog" aria-labelledby="reminderModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Send email for&nbsp;<span id="id_no"></span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{url('sale/invoice/remainder_mail/'.@$value['id'])}}" method="POST">
        @csrf
          <div class="form-group">
                <label for="recipient-name" class="col-form-label">To:</label>
                <input type="text" class="form-control" id="reminder_recipient_email" name="reminder_recipient_email">
          </div>
           <div class="form-group" id="cc">
                <label for="" class="col-form-label" id="">Cc:</label>
                <input type="text" class="form-control" id="" name="">
            </div>
           <div class="form-group">
                <label for="" class="col-form-label">Bcc:</label>
                <input type="text" class="form-control" id="" name="">
          </div>
          <div class="form-group">
                <label for="subject" class="col-form-label">Subject:</label>
                <input type="text" class="form-control" id="subject" name="subject">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message_text" name="message_text" rows="6"></textarea>
          </div>

       </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Send</button>
      </div>
    </form>
    </div>
  </div>
</div>


{{-- ------------------------------------Payment Received Model------------------------------------------}}

<div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="paymentModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="paymentModalLabel">Receive Payment</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                
            <form action="{{url('sale/invoice/payment_received')}}" method="post" enctype="multipart/form-data">
                 @csrf
                  <div class="row">
                         
                  <div class="col-md-4">
                    <div class="form-group">
                  <label for="customer" class="col-form-label">Customer</label>
                    <input type="text" class="form-control" id="payment_received_customer" name="payment_received_customer">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="email" class="col-form-label">Email</label>
                <input type="text" class="form-control" id="payment_received_email" name="payment_received_email">
                </div>
              </div>
              
          </div>
          <div class="row">
                <div class="col-md-3">
                <div class="form-group">
                      <label for="payment-date" class="col-form-label">Payment Date</label>
                      <input type="text" id="datepicker3" name="payment_received_payment_date" class="form-control">
                    </div>
                  </div>
              </div>
              <div class="row">
                    <div class="col-md-3">
                          <div class="form-group">
                              <label for="payment-method">Payment method</label>
                              <select class="form-control" name="payment_received_method" id="payment_received_method">
                                  <option value="0" selected>---Select---</option>
                                  <option value="Cash">Cash</option>
                                  <option value="Cheque">Cheque</option>
                                  <option value="Credit Card">Credit Card</option>
                                  <option value="Debit Card">Debit Card</option>
                                  <option value="Net Banking">Net Banking</option>
                                 
                              </select>
                          </div>
                      </div>
                      <div class="col-md-3">
                              <div class="form-group">
                                    <label for="reference-no" class="col-form-label">Reference No.</label>
                                    <input type="text" class="form-control" id="payment_received_reference_no" name="payment_received_reference_no">
                                  </div>
                                </div>
                                <div class="col-md-3">
                                      <div class="form-group">
                                          <label for="deposited-to">Deposited To</label>
                                          <select class="form-control" name="payment_received_deposited_to" id="payment_received_deposited_to">
                                              <option value="0" selected>---Select---</option>
                                              <option value="Axis Bank">Axis Bank</option>
                                              <option value="ICICI">ICICI</option>
                                              
                                             
                                          </select>
                                      </div>
                                  </div> 
                                  <div class="col-md-3">
                                          <div class="form-group">
                                                <label for="amount-received" class="col-form-label">Amount Received</label>
                                                <input type="text" class="form-control" id="payment_received_amount" name="payment_received_amount">
                                              </div>
                                            </div>  
      
              </div>
               <br><br><br>
              <table id="datatable" class="table table-striped table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                      <thead>
                          <tr>
                          <th>#</th>
                          <th>DESCRIPTION</th>
                          <th>DUE DATE</th>
                          <th>AMOUNT</th>
                          <th>TAX</th>
                          <th>TOTAL</th>
                         
                          </tr>
                      </thead>
                      <tbody id="receive_payment_details">
                          {{-- appending datas --}}
                      </tbody>
                  </table>
                 
                  <div style="float:right;">
                                     <div class="form-group">
                                <label for="amount-to-apply" class="col-form-label">Total Payable Amount&nbsp;:<i class="fa fa-rupee-sign sz" aria-hidden="true"></i></label>
                                <span id="payment_received_amount_to_apply" name="payment_received_amount_to_apply"></span>
                          </div>
                  
                 
                     
                 
              </div>
                  
            </div>
      
           
              <div class="form-group">
                    <label for="memo" class="col-form-label">Memo</label>
                    <input type="text" class="form-control" id="payment_received_memo" name="payment_received_memo">
              </div>
      
              <div class="col-md-4">
                  <div class="form-group">
                     <label for="attachment">Attachments</label>
                     <div class="dropzone" id="dropzone" style="min-height: 55px">
                         <div class="fallback">
                           <input  type="file"  name="payment_received_attachment" id="payment_received_attachment">
                         </div>
                     </div>
                 </div>
                 </div>
      
      
            <div class="modal-footer">
                <!-- hidden fields -->
                <input type="hidden" name="payment_received_invoice_id" id="payment_received_invoice_id">
                <input type="hidden" name="payment_received_description" id="payment_received_description">
                <input type="hidden" name="payment_received_due_date" id="payment_received_due_date">
                <input type="hidden" name="payment_received_subtotal" id="payment_received_subtotal">
                <input type="hidden" name="payment_received_tax" id="payment_received_tax"> 
                <input type="hidden" name="payment_received_total_amount" id="payment_received_total_amount">
                
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Clear Payment</button>
            </div>
           
          </form>
          
          </div>
        </div>
      </div>
     <script> 
      function receivePayment(id){
        $("#receive_payment_details").html("");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "{{url('sale/invoice/get-invoice-details')}}" + "/" + id,
            method: "get",
            contentType: 'application/json',
            dataType: "json",
            beforeSend: function(data){
                $("#loader1").css("display","block");
            },
            error: function(xhr){
                alert("error"+xhr.status+", "+xhr.statusText);
            },
            success: function (data) {
                $("#payment_received_customer").val(data.customer);
                $("input[name='payment_received_payment_date']").datepicker('setDate', '<?php echo date('d-m-Y'); ?>');
                $("#payment_received_email").val(data.customer_email);
                $("#payment_received_amount_to_apply").html(data.total);
                $("#payment_received_invoice_id").val(id);
               
                $("#paymentModal").modal("show");
    
                var payment_receive_invoice_details='<tr style="border: none; background:white !important;"><td><input  type="checkbox" name="ids[]" value="" /></td><td>Invoice#'+data.invoice_no+'</td><td>'+data.due_date+'</td><td>'+data.subtotal+'</td><td>'+data.total_tax+'</td><td>'+data.total+'</td></tr>';
                $("#receive_payment_details").html(payment_receive_invoice_details);
                $("#payment_received_amount").val(data.total);
                $("#payment_received_description").val('Invoice#'+data.invoice_no);
                $("#payment_received_due_date").val(data.due_date);
                $("#payment_received_subtotal").val(data.subtotal);
                $("#payment_received_tax").val(data.total_tax);
                $("#payment_received_total_amount").val(data.total);
    
                $("#loader1").css("display","none");
            }
        });
    }
    </script>
<script> 

  $(document).ready(function(){

    $("#email_val").hide();
    $("#billing_address_val").hide();
     $("#invoice_no_val").hide();


    err_email_val = true;
    err_biiling_address=true;
    err_invoice_no = true;

      $("#exampleInputEmail1").blur(function(){

            email_id_f();
         });
            function email_id_f(){

               var m = $("#exampleInputEmail1").val();
               var v =/^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
               var result = m.match(v); 
               
            if((m.length=="")||(result == null)){

                $("#email_val").show();
                $("#email_val").html("**please insert valid email ");
                $("#email_val").focus();
                $("#email_val").css("color","red");

                  err_email_val=false;
                        return false;
                }else{
                  err_email_val=true;
                  $("#email_val").hide();
                }
             }




             $("#example-textarea-input").blur(function(){

            billing_address_f();
        });
        function billing_address_f(){

          var d = $("#example-textarea-input").val();

          if(d.length==""){

            $("#billing_address_val").show();
            $("#billing_address_val").html("**please insert billing address ");
            $("#billing_address_val").focus();
            $("#billing_address_val").css("color","red");

              err_billing_address=false;
              return false;
          }else{
            err_billing_address=true;
            $("#billing_address_val").hide();
          }
        }

          $("#example-text-input").blur(function(){

            invoice_no_f();
        });
        function invoice_no_f(){

          var p = $("#example-text-input").val();

          var regexOnlyNumbers=/^[0-9]+$/;
          if((p=="")|| regexOnlyNumbers.test(p)!=true){

            $("#invoice_no_val").show();
            $("#invoice_no_val").html("**please input numbers between 0-9 ");
            $("#invoice_no_val").focus();
            $("#invoice_no_val").css("color","red");

              err_invoice_no=false;
              return false;
          }else{
            err_invoice_no=true;
            $("#invoice_no_val").hide();
          }
        }

            $("#btn").click(function(){

      
       err_email_val = true;
       err_biiling_address=true;
       err_invoice_no = true;

     


    
      email_id_f();
      billing_address_f();
      invoice_no_f();
      

     if((err_email_val==true)&&(err_billing_address==true)&&(err_invoice_no==true))
     {
        return true;
     }else{
        return false;

     }

     });
         

  });

</script>
