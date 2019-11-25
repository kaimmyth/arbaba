
<style type="text/css">
    .row {
        margin-right: 0px;
        margin-left: 0px;
    }
    
    .custom-table td,
    .custom-table th {
        padding: 10px 5px !important;
    }
</style>

<!-- Start content -->
<div class="content-page">
    <div class="content">
        <div class="container-fluid">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Home </a></li>
                        <li><a href="#">Sales </a></li>
                        <li class="active">customer details</li>
                    </ol>
                </div>
            </div>

            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Transaction Details</a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Customer Details</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                    <div class="card card-border card-primary">
                        <div class="card-body">
                            <div class="content" style="background-color:lightgrey; padding:20px;">
                                <div class="header">
                                    <h3 class="modal-title mt-0" id="myLargeModalLabel">Transaction Details</h3>
                                </div>
                            </div>
                            <div class="form-group">

                                <h4 style="font-style:normal">{{$details['first_name']}}</h4>
                                <h5 style="font-style:normal; ">{{$details['company']}}</h5>
                                <h5 style="font-style:normal ">{{$details['email_id']}}</h5>
                                <h5 style="font-style:normal ">{{$details['mobile_no']}}</h5>

                            </div>

                            <div class="form-group">
                                <table class="table table-striped custom-table">
                                    <thead>
                                        <tr>

                                            <th scope="col">Invoice No</th>
                                            <th scope="col">Due Date</th>
                                            <th scope="col">Balance</th>
                                            <th scope="col">Tax</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Status</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($invoices as $invoice)

                                        <tr>

                                            <td>{{$invoice['invoice_no']}}</td>
                                            <td>{{$invoice['due_date']}}</td>

                                            <?php
                                                          $total=0;
                                                          if($invoice["invoice_details"]!="")
                                                          {
                                                              $tmp = $invoice["invoice_details"];
                                                              $tmp = explode(":",$tmp);
                                                              for($i=0;$i<count($tmp);$i++){
                                                                  $to_show = explode(",",$tmp[$i]);
                                                                  $taxes=(($to_show[5]*$to_show[6])/100);
                                                                  $total+=$to_show[5]+$taxes;
                                                              }
                                                          }
                                                          ?>

                                                <td>{{$total}}</td>
                                                <td>{{$taxes}}</td>
                                                <td>{{$total}}</td>
                                                <td>
                                                    <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                                                    <?php
                                                            if($invoice['due_date'] < date("Y-m-d"))
                                                            {
                                                                echo "Expired(Opened)";
                                                            }
                                                            elseif($invoice['status'] == 2)

                                                            {
                                                             echo "Paid(Closed)";
                                                              }
                                                            else{
                                                               $diff = strtotime($invoice['due_date']) - strtotime(date("Y-m-d"));
                                                                   if($diff==0) { echo "Expires Today(Opened)"; }
                                                                   else { echo "Due in ".abs(round($diff / 86400))." Days(Opened)"; }
                                                               }
                                                             ?>

                                                </td>
                                        </tr>

                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="card card-border card-primary">
                        <div class="card-body">
                            <div class="content" style="background-color:lightgrey; padding:20px;">
                                <div class="header">
                                    <h3 class="modal-title mt-0" id="myLargeModalLabel">Customer Details</h3>
                                </div>
                            </div>
                            <table class="table table-striped custom-table">
                                <thead>

                                    <tr>
                                        <td style="font-weight:bold;">Title</td>
                                        <td>{{$details['title']}}</td>
                                        <td style="font-weight:bold;"></td>
                                        <td></td>
                                    </tr>

                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="font-weight:bold;">First Name</td>
                                        <td>{{$details['first_name']}}</td>
                                        <td style="font-weight:bold;">Email Id</td>
                                        <td>{{$details['email_id']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight:bold;">Company</td>
                                        <td>{{$details['company']}}</td>
                                        <td style="font-weight:bold;">Website</td>
                                        <td>{{$details['website']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight:bold;">GST Reg No</td>
                                        <td>{{$details['gst_reg_type']}}</td>
                                        <td style="font-weight:bold;">GST In</td>
                                        <td>{{$details['gst_in']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight:bold;">Mobile No</td>
                                        <td>{{$details['mobile_no']}}</td>
                                        <td style="font-weight:bold;">Phone No</td>
                                        <td>{{$details['phone_no']}}</td>
                                    </tr>

                                    <tr>
                                        <td style="font-weight:bold;">City/Town</td>
                                        <td>{{$details['city_town']}}</td>
                                        <td style="font-weight:bold;">State</td>
                                        <td>{{$details['state']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight:bold;">Pin Code</td>
                                        <td>{{$details['pin_code']}}</td>
                                        <td style="font-weight:bold;">Country</td>
                                        <td>{{$details['country']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight:bold;">TAX Registration No</td>
                                        <td>{{$details['tax_reg_no']}}</td>
                                        <td style="font-weight:bold;">CST Registration No</td>
                                        <td>{{$details['cst_reg_no']}}</td>

                                    </tr>
                                    <tr>
                                        <td style="font-weight:bold;">PAN No</td>
                                        <td>{{$details['pan_no']}}</td>
                                        <td style="font-weight:bold;">Opening Balance</td>
                                        <td>{{$details['opening_balance']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight:bold;">Terms</td>
                                        <td>{{$details['terms']}}</td>
                                        <td style="font-weight:bold;">Preferred payment Method</td>
                                        <td>{{$details['preferred_payment_method']}}</td>
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