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
            <li><a href="#">Sales </a></li>
            <li class="active">Customer</li>
          </ol>
        </div>
      </div>


      <?php
      $overdue_count=$overdue_amount=$open_invoice_count= $estimate_count= $estimate_amount=$paid_count=$paid_amount=0;
      $total_before_tax=0;
     $taxes=0;
     $total=0;
      ?>
      @foreach($toReturnInvoice as $value)
        <?php
        // overdue
        if($value['due_date'] < date("Y-m-d")&&$value['status']==1)
        {
            $overdue_count++;
            if($value["invoice_details"]!="")
            {
                $tmp = $value["invoice_details"];
                $tmp = explode(":",$tmp);
                for($i=0;$i<count($tmp);$i++){
                    $tmp_2 = explode(",",$tmp[$i]);
                    $overdue_amount += ($tmp_2[5] + (($tmp_2[5]*$tmp_2[6])/100));
                }
            }
        }

         //open invoie
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

    //estimate
    if($value['due_date'] > date("Y-m-d") && $value['status']==1)
        {
            $estimate_count++;
            if($value["invoice_details"]!="")
            {
                $tmp = $value["invoice_details"];
                $tmp = explode(":",$tmp);
                for($i=0;$i<count($tmp);$i++){
                    $tmp_2 = explode(",",$tmp[$i]);
                    $estimate_amount += ($tmp_2[5] + (($tmp_2[5]*$tmp_2[6])/100));
                }
            }
        }

        //paid
        if($value['status'] == 2 && date('Y-m-d', strtotime('today - 30 days')))
        {
            $paid_count++;
            if($value["invoice_details"]!="")
            {
                $tmp = $value["invoice_details"];
                $tmp = explode(":",$tmp);
                for($i=0;$i<count($tmp);$i++){
                    $tmp_2 = explode(",",$tmp[$i]);
                    $paid_amount += ($tmp_2[5] + (($tmp_2[5]*$tmp_2[6])/100));
                }
            }
        }
         ?>
      @endforeach
      <div class="row">
        <div class="col-lg-12">
         <div class="card">
          <div class="row">
           <div class="col-md-3 dv" style="background-color: #21ABF6;">
            <i class="fa fa-calculator sz" aria-hidden="true"></i>  {{$estimate_amount}}
            <p style="font-size: 15px; font-weight: 600;">{{$estimate_count}} ESTIMATE</p>
          </div>
          <div class="col-md-3 dv" style="background-color: #0077C5;">
            <i class="fa fa-file sz" aria-hidden="true"></i>  {{$total}}
            <p style="font-size: 15px; font-weight: 600;">{{$open_invoice_count}} UNBILLED ACTIVITY</p>
          </div>
          <div class="col-md-3 dv" style="background-color: #FF8000;">
            <i class="fa fa-clock sz" aria-hidden="true"></i>  {{$overdue_amount}}
            <p style="font-size: 15px; font-weight: 600;">{{$overdue_count}} OVERDUE</p>
          </div>
          <div class="col-md-3 dv" style="background-color: #BABEC5;">
            <i class="fa fa-address-book sz" aria-hidden="true"></i>  {{$total}}
            <p style="font-size: 15px; font-weight: 600;">{{$open_invoice_count}} Open Invoice</p>
          </div>
          <div class="col-md-3 dv" style="background-color: #7FD000;">
            <i class="fa fa-rupee-sign sz" aria-hidden="true"></i>  {{$paid_amount}}
            <p style="font-size: 15px; font-weight: 600;">{{$paid_count}} PAID LAST 30 DAYS</p>
          </div>
          <div class="col-md-12">
            <div class="col-md-12" style="text-align: right; margin-bottom: 4px;">
              <button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">New Customer</button>
            </div>

            <div class="tab-content colm">
              <div class="tab-pane show active" id="home-2" role="tabpanel" aria-labelledby="home-tab-2" style="">
                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                  <thead>
                    <tr>
                      <th><input type="checkbox" name="chkall[]" id="selectall" onClick="selectAll(this)" /></th>
                      <th>Customer/Company</th>
                      <th>GST Registration Type</th>
                      <th>GSTIN</th>
                      <th>Phone</th>
                      <th>Open Balance</th>
                      <th>Action</th>

                    </tr>
                  </thead>
                  <tbody>

                     @foreach ($toReturn as $items1)
                     <tr>
                      <td>&nbsp;<input type="checkbox" name="ids[]" value="" /></td>
                      <td>{{$items1['company']}}</td>
                      <td>{{$items1['gst_reg_type']}}</td>
                      <td>{{$items1['gst_in']}}</td>
                      <td>{{$items1['phone_no']}}</td>
                      <td>{{$items1['opening_balance']}}</td>
                      <td style="color: #0077C5; font-weight: 600; cursor: pointer;" onclick="myFun()">Receive payment <i class="fa fa-caret-down" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black; font-size: 15px;"></i>

                      <div class="dropdown-menu resp" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Send reminder</a>
                        <a class="dropdown-item" href="#">Create Customer Statement</a>
                        <a class="dropdown-item" href="#">Create Invoice</a>
                        <a class="dropdown-item" href="#">Create Sales Receipt</a>
                        <a class="dropdown-item" href="#">Create Estimate</a>
                      <a class="dropdown-item" href="{{url('sale/customer/delete/'.$items1['id'])}}">Delete</a>
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


<!--  Modal content for the above example -->

    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title mt-0" id="myLargeModalLabel">Customer information</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <form action="{{url('sale/customers/add')}}" method="POST">
                @csrf
            <div class="row">
              <div class="col-md-6">
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

                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Company</label>
                      <input type="text" class="form-control" value="" id="company" name="company">
                      
                    </div>
                    <h6 id="company_val"></h6>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Display name as</label>
                      <input type="text" class="form-control" value="" id="display_name_as" name="display_name_as" readonly>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1" name="  gst_reg_type">GST registration type</label>
                      <select class="form-control" id="gst_reg_type" name="gst_reg_type">
                        <option>Consumer</option>
                        <option>GST registered- Regular</option>
                        <option>GST registered- Composition</option>
                        <option>GST unregistered</option>
                        <option>Overseas</option>
                        <option>SEZ</option>
                        <option>Deemed exports- EOU's, STP's EHTP's etc</option>
                      </select>
                    </div>
                        <h6 id="gst_reg__val"></h6>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">GSTIN</label>
                      <input type="text" class="form-control" value="35AABCS1429B1ZX" id="gst_in" name="gst_in" readonly >
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="row">

                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" required pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" class="form-control" id="email_id" name="email_id" placeholder="Enter email" >
                    </div>
                    <h6 id="email_id_val"></h6>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Phone</label>
                      <input type="text" class="form-control" value="" id="phone_no" name="phone_no" data-mask="(999) 999-9999" required>
                    </div>
                    <h6 id="phone_val"></h6>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Mobile</label>
                      <input type="text" class="form-control" value="" id="mobile_no" name="mobile_no" data-mask="(999) 999-9999" required>
                    </div>
                    <h6 id="mobile_no_val"></h6>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Fax</label>
                      <input type="text" class="form-control" value="" id="fax" name="fax" data-mask="99-999-9999999" required>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Other</label>
                      <input type="text" class="form-control" value="" id="other" name="other" required>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Website</label>
                      <input type="text" class="form-control" value="" id="website" name="website" required>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="checkbox checkbox-primary">
                      <input id="checkbox1" type="checkbox">
                      <label for="checkbox1">
                        Is sub-customer
                      </label>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                     <select class="form-control" id="enter_parent_cutomer" name="enter_parent_customer">
                      <option>Enter Parent Customer</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <select class="form-control" id="bill_with_partener" name="bill_with_partner">
                      <option>Bill With Partner</option>
                      <option>Bill With Customer</option>
                    </select>
                  </div>
                </div>

              </div>
            </div>




            <div class="col-md-12">
              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false" required>
                    <span class="d-block d-sm-none"><i class="fa fa-home"></i></span>
                    <span class="d-none d-sm-block">Address</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true" required>
                    <span class="d-block d-sm-none"><i class="fa fa-user"></i></span>
                    <span class="d-none d-sm-block">Notes</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="message-tab" data-toggle="tab" href="#message" role="tab" aria-controls="message" aria-selected="false" required>
                    <span class="d-block d-sm-none"><i class="fa fa-envelope-o"></i></span>
                    <span class="d-none d-sm-block">Tax Info</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="setting-tab" data-toggle="tab" href="#setting" role="tab" aria-controls="setting" aria-selected="false" required>
                    <span class="d-block d-sm-none"><i class="fa fa-cog"></i></span>
                    <span class="d-none d-sm-block">Payment and Billing</span>
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
                  <h5>Notes</h5>
                  <div class="col-md-12">
                    <textarea class="form-control" rows="3" id="notes" name="notes" required></textarea>
                  </div>

                </div>
                <div class="tab-pane" id="message" role="tabpanel" aria-labelledby="message-tab">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Tax Reg. No.</label>
                        <input type="text" class="form-control" id="tax_reg_no" name="tax_reg_no" placeholder="" required>
                      </div>
                      <h6 id="tax_reg_no_val"></h6>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInputEmail1">CST reg. no.</label>
                        <input type="text" class="form-control" id="cst_reg_no" name="cst_reg_no" placeholder="" required>
                      </div>
                      <h6 id="cst_reg_no_val"></h6>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInputEmail1">PAN No.</label>
                        <input type="text" class="form-control" id="pan_no" name="pan_no" placeholder="" required>
                      </div>
                            <h6 id="pan_no_val"></h6>
                    </div>

                    <div class="col-md-4">
                      <div class="checkbox checkbox-primary">
                        <input id="checkbox1" type="checkbox">
                        <label for="checkbox1">
                          Apply TDS for this customer
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="setting"  role="tabpanel" aria-labelledby="setting-tab">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Preferred payment method</label>
                        <select class="form-control" id="=preferred_payment_method" name="preferred_payment_method" required>
                          <option value="0">-Select-</option>
                          <option>Cash</option>
                          <option>Cheque</option>
                          <option>Credit Card</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Preferred delivery method</label>
                        <select class="form-control" id="=preferred_delivery_method" name="preferred_delivery_method" required>
                          <option>-Select-</option>
                          <option>Print Later</option>
                          <option>Send Later</option>
                          <option>None</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Terms</label>
                        <select class="form-control" id="terms" name="terms" required>
                          <option>-Select Customer-</option>
                          <option style="color: green;">Add New +</option>
                          <option>Due on receipt</option>
                          <option>Net 15</option>
                          <option>Net 30</option>
                          <option>Net 60</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Opening balance</label>
                        <input type="text" class="form-control" id="opening_balance" name="opening_balance" placeholder="" required>
                      </div>
                      <h6 id="opening_balance_val"></h6>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInputEmail1">as of</label>
                        <div class="input-group">
                          <input type="text" class="form-control autodate" placeholder="mm/dd/yyyy" id="as_of" name="as_of" required autocomplete="off">
                          <div class="input-group-append">
                            <span class="input-group-text"><i class="md md-event"></i></span>
                          </div>
                        </div>
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
    </form>
    </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->



{{-- ------------------------------------Payment Received Model---------------------------------------- --}}

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
        <form action="" method="">
         <div class="row">
            <div class="col-md-4">
              <div class="form-group">
            <label for="customer" class="col-form-label">Customer</label>
            <input type="text" class="form-control" id="customer">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="email" class="col-form-label">Email</label>
            <input type="text" class="form-control" id="email">
          </div>
        </div>
        
    </div>
    <div class="row">
          <div class="col-md-3">
          <div class="form-group">
                <label for="payment-date" class="col-form-label">Payment Date</label>
                <input type="date" class="form-control" id="datepicker">
              </div>
            </div>
        </div>
        <div class="row">
              <div class="col-md-3">
                    <div class="form-group">
                        <label for="payment-method">Payment method</label>
                        <select class="form-control" name="payment-method" id="payment-method" required>
                            <option value="0" selected>---Select---</option>
                            <option value="">Cash</option>
                            <option value="">Cheque</option>
                            <option value="">Credit Card</option>
                            <option value="">Debit Card</option>
                            <option value="">Net Banking</option>
                           
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                        <div class="form-group">
                              <label for="reference-no" class="col-form-label">Reference No.</label>
                              <input type="text" class="form-control" id="reference-no">
                            </div>
                          </div>
                          <div class="col-md-3">
                                <div class="form-group">
                                    <label for="deposited-to">Deposited To</label>
                                    <select class="form-control" name="deposited-to" id="deposited-to" required>
                                        <option value="0" selected>---Select---</option>
                                        <option value="">Axis Bank</option>
                                        <option value="">ICICI</option>
                                        
                                       
                                    </select>
                                </div>
                            </div> 
                            <div class="col-md-3">
                                    <div class="form-group">
                                          <label for="amount-received" class="col-form-label">Amount Received</label>
                                          <input type="text" class="form-control" id="amount-received">
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
                    <th>ORIGINAL AMOUNT</th>
                    <th>OPENING BALANCE</th>
                    <th>PAYMENT</th>
                   
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input  type="checkbox" name="ids[]" value="" /></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><input type="text" class="form-control"></td>
                       
                    </tr>
                </tbody>
            </table>
           
            <div class="col-md-3">
                    <div class="form-group">
                          <label for="amount-to-apply" class="col-form-label">Amount to Apply</label>
                          <input type="text" class="form-control" id="amount-to-apply" >
                    </div>
            </div> 
            <div class="col-md-3">
                <div class="form-group">
                      <label for="amount-to-credit" class="col-form-label">Amount to Credit</label>
                      <input type="text" class="form-control" id="amount-to-credit" >
                </div>
        </div> 
            
     

     
        <div class="form-group">
              <label for="memo" class="col-form-label">Memo</label>
              <input type="text" class="form-control" id="memo" >
        </div>

        <div class="col-md-4">
            <div class="form-group">
               <label for="attachment">Attachments</label>
               <div class="dropzone" id="dropzone" style="min-height: 55px">
                   <div class="fallback">
                     <input  type="file"  name="attachment" id="attachment">
                   </div>
               </div>
           </div>
           </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Clear Payment</button>
      </div>
    </form>
  </div>
    </div>
  </div>
</div>

<script>
  function myFun()
  {
    $('#paymentModal').modal('show');
    
  }
</script>



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
            $("#first_name_val").html("Please input alphabets");
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
            $("#last_name_val").html("Please input alphabets");
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
            $("#cst_reg_no_val").html("Plesee insert cst reg no ");
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
            $("#opening_balance_val").html("Please insert numbers only ");
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


