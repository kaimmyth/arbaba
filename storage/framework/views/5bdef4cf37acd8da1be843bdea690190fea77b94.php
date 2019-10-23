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



      <div class="row">
        <div class="col-lg-12">
         <div class="card">
          <div class="row">
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

                   <tr>
                    <td>&nbsp;<input type="checkbox" name="ids[]" value="" /></td>
                    <td>abc </td>
                    <td>Consumer</td>
                    <td>-</td>
                    <td>9988776644</td>
                    <td>8,000</td>
                    <td style="color: #0077C5; font-weight: 600; cursor: pointer;">Receive payment <i class="fa fa-caret-down" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black; font-size: 15px;"></i>

                      <div class="dropdown-menu resp" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Send reminder</a>
                        <a class="dropdown-item" href="#">Create Customer Statement</a>
                        <a class="dropdown-item" href="#">Create Invoice</a>
                        <a class="dropdown-item" href="#">Create Sales Receipt</a>
                        <a class="dropdown-item" href="#">Create Estimate</a>
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
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" class="form-control" value="" id="example-text-input">
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">First Name</label>
                  <input type="text" class="form-control" value="" id="example-text-input">
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Last Name</label>
                  <input type="text" class="form-control" value="" id="example-text-input">
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Company</label>
                  <input type="text" class="form-control" value="" id="example-text-input">
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Display name as</label>
                  <input type="text" class="form-control" value="" id="example-text-input">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">GST registration type</label>
                  <select class="form-control">
                    <option>Consumer</option>
                    <option>GST registered- Regular</option>
                    <option>GST registered- Composition</option>
                    <option>GST unregistered</option>
                    <option>Overseas</option>
                    <option>SEZ</option>
                    <option>Deemed exports- EOU's, STP's EHTP's etc</option>
                  </select>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">GSTIN</label>
                  <input type="text" class="form-control" value="35AABCS1429B1ZX" id="example-text-input" readonly="">
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="row">

              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Phone</label>
                  <input type="text" class="form-control" value="" id="example-text-input">
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Mobile</label>
                  <input type="text" class="form-control" value="" id="example-text-input">
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Fax</label>
                  <input type="text" class="form-control" value="" id="example-text-input">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Other</label>
                  <input type="text" class="form-control" value="" id="example-text-input">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Website</label>
                  <input type="text" class="form-control" value="" id="example-text-input">
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
                 <select class="form-control">
                  <option>Enter Parent Customer</option>
                </select>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <select class="form-control">
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
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">
                <span class="d-block d-sm-none"><i class="fa fa-home"></i></span>
                <span class="d-none d-sm-block">Address</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">
                <span class="d-block d-sm-none"><i class="fa fa-user"></i></span>
                <span class="d-none d-sm-block">Notes</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="message-tab" data-toggle="tab" href="#message" role="tab" aria-controls="message" aria-selected="false">
                <span class="d-block d-sm-none"><i class="fa fa-envelope-o"></i></span>
                <span class="d-none d-sm-block">Tax Info</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="setting-tab" data-toggle="tab" href="#setting" role="tab" aria-controls="setting" aria-selected="false">
                <span class="d-block d-sm-none"><i class="fa fa-cog"></i></span>
                <span class="d-none d-sm-block">Payment and Billing</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="note-tab" data-toggle="tab" href="#note" role="tab" aria-controls="note" aria-selected="false">
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
                      <textarea class="form-control" rows="2" id="example-textarea-input"></textarea>
                    </div>
                    <div class="col-md-6" style="margin-top: 6px;">
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="City/Town">
                    </div>
                    <div class="col-md-6" style="margin-top: 6px;">
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="State">
                    </div>

                    <div class="col-md-6" style="margin-top: 6px;">
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Pincode">
                    </div>
                    <div class="col-md-6" style="margin-top: 6px;">
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Country">
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <h5>Shipping Address &nbsp; &nbsp;   <input id="checkbox1" type="checkbox"> Same as billing address</h5>
                  <div class="row">
                    <div class="col-md-12">
                      <textarea class="form-control" rows="2" id="example-textarea-input"></textarea>
                    </div>
                    <div class="col-md-6" style="margin-top: 6px;">
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="City/Town">
                    </div>
                    <div class="col-md-6" style="margin-top: 6px;">
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="State">
                    </div>

                    <div class="col-md-6" style="margin-top: 6px;">
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Pincode">
                    </div>
                    <div class="col-md-6" style="margin-top: 6px;">
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Country">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <h5>Notes</h5>
              <div class="col-md-12">
                <textarea class="form-control" rows="3" id="example-textarea-input"></textarea>
              </div>

            </div>
            <div class="tab-pane" id="message" role="tabpanel" aria-labelledby="message-tab">
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tax Reg. No.</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputEmail1">CST reg. no.</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputEmail1">PAN No.</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                  </div>
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
            <div class="tab-pane" id="setting" role="tabpanel" aria-labelledby="setting-tab">
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Preferred payment method</label>
                    <select class="form-control">
                      <option>-Select-</option>
                      <option>Cash</option>
                      <option>Cheque</option>
                      <option>Credit Card</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Preferred delivery method</label>
                    <select class="form-control">
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

                <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Opening balance</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputEmail1">as of</label>
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

            <div class="tab-pane" id="note" role="tabpanel" aria-labelledby="note-tab">
             <div class="col-md-12">
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
        </div>
      </div>

    </div>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary waves-effect waves-light">Save</button>
  </div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
 </div><!-- /.modal --><?php /**PATH C:\xampp\htdocs\arbaba\resources\views/sale/customer.blade.php ENDPATH**/ ?>