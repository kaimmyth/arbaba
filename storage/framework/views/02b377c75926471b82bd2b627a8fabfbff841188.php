<style>
    div.dataTables_wrapper div.dataTables_paginate ul.pagination {
        margin: 2px 0;
        white-space: nowrap;
        justify-content: flex-end;
        display: none;
    }
</style>
<!-- Start content -->                   
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <!--<h4 class="pull-left page-title">Other Charts</h4>-->
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Expenses</a></li>
                                    <li class="active">All Expenses</li>
                                </ol>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card card-border card-primary">
                                    <div class="card-header"> 
                                        <button type="button" class="btn btn-inverse btn-rounded waves-effect waves-light m-b-5" data-toggle="modal" data-target=".expense" style="float:right;">Add an Expense</button>
                                    </div> 
                                    <div class="card-body"> 
                                        <table id="datatable" class="table table-striped table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                              <tr>
                                                <th>DATE</th>
                                                <th>REF NO</th>
                                                <th>PAYEE</th>
                                                <th>CATEGORY</th>
                                                <th>AMOUNT</th>
                                                <th>TAX</th>
                                                <th>TOTAL</th>
                                                <th>ACTION</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                                <?php $__currentLoopData = $return; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e(date("d-m-Y",strtotime($items['payment_date']))); ?></td>
                                                        <td><?php echo e($items['ref_no']); ?></td>
                                                        <td><?php echo e($items['payee_id']); ?></td>
                                                        <td>Category</td>
                                                        <td>Payment Amount</td>
                                                        <td>Tax</td>
                                                        <td>Payment Amount</td>
                                                        <td><i class="fas fa-eye"></i> &nbsp; <i class="fas fa-trash"></i></td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                    </div><!--card body--> 
                                </div><!--card border-->
                            </div><!--col-->
                        </div><!--end of row-->
                    </div><!--end of container fluid-->
                </div><!--end of content-->
            </div><!--end of content page-->




<form action="<?php echo e(url('expenses/add')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <!---------------------------------------modal start-------------------------------------------->                   
    <div class="modal expense" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title mt-0" id="myLargeModalLabel"><i class="fas fa-clock"></i>&nbsp;&nbsp;Expenses</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="padding: 0px 0;">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="">Payee</label>
                                        <div class="input-group">
                                            
                                            <input type="text" name="expenses_payee_id" id="expenses_payee_id" class="form-control" placeholder="Who do you pay?">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Payment Account</label>
                                        <div class="input-group">
                                            <select class="form-control" name="expenses_payment_account" id="expenses_payment_account">
                                                <option value="" disabled selected>How do you pay?</option>
                                                <option value="1">Balance 1</option>
                                                <option value="2">Balance-2</option>
                                                <option value="3">Balance-3</option>
                                            </select>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-credit-card"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- card-body -->
                            </div><!--col-->

                        <!--toggle down-->
                            <div class="col-md-4">
                                <div class="card-body">
                                        <div class="form-group">
                                            <label for="">Payment date</label>
                                            <div class="input-group">
                                                <input type="text" name="expenses_payment_date" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="md md-event"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Payment Method</label>
                                            <div class="input-group">
                                            <select class="form-control" name="expenses_payment_method" id="expenses_payment_method">
                                                <option value="" disabled selected>What did you pay with?</option>
                                                <option value="1">Cash</option>
                                                <option value="2">Cheque</option>
                                                <option value="3">Credit Card</option>
                                            </select>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-credit-card"></i></span>
                                            </div>
                                        </div>
                                    </div>
                            </div><!-- card-body -->
                        </div><!--col-->
                            <div class="col-md-4">
                                <br>
                                <p><strong>Amount</strong><h2>₹0.00</h2></p>
                                <div class="form-group row">
                                    <label for="" class="control-label">Ref No.</label><br>
                                    <input type="text" class="form-control" name="expenses_ref_no" id="expenses_ref_no" placeholder="">
                                </div>                                       
                            </div>
                        </div>
                        <hr>
                        <div class="tab-content colm">
                            <div class="tab-pane show active" id="home-2" role="tabpanel" aria-labelledby="home-tab-2" style="">
                                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Category</th>
                                            <th>Discription</th>
                                            <th>Amount</th>
                                            <th>Tax</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                
                                                <td>
                                                    <select class="form-control input-sm" name="expenses_details_tax_category" id="expenses_details_tax_category">
                                                        <option value="" disabled selected>-Select-</option>
                                                        <option value="1">Advertisement</option>
                                                        <option value="2">Office Supplies</option>
                                                        <option value="3">Bank Deposit</option>
                                                    </select>
                                                </td>
                                                <td><input type="text" name="expenses_details_description" class="form-control input-sm" placeholder="What did you pay for?"></td>
                                                <td><input type="text" name="expenses_details_amount" class="form-control input-sm" placeholder="Enter Amount"></td>
                                                <td style="cursor: pointer;width: 14%;">
                                                    <select class="form-control input-sm" name="expenses_details_tax" id="expenses_tax">
                                                        <option value="" disabled selected>-Select-</option>
                                                        <option value="0.25">0.25% IGST</option>
                                                        <option value="5">5% IGST</option>
                                                        <option value="10">10% IGST</option>
                                                        <option value="2">18% IGST</option>
                                                    </select>
                                                </td>                                          
                                                <td><i class="fas fa-trash-alt"></i></td>
                                            </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Memo</label>
                                <textarea name="expenses_memo" id="expenses_memo" class="form-control" rows="4" id="example-textarea-input"></textarea>          
                            </div>
                        </div>
                        <div class="col-md-6 portlets">
                            <div class="form-group">
                                <label for="">Attachments</label>
                            <div class="m-b-30">
                                <div class="fallback">
                                <input name="expenses_attachment" id="expenses_attachment" type="file">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="border-radius: 0px">
                    <div class="col-md-3 offset-md-9">
                        <p class="text-right"><b>Sub-total:</b> 2930.00</p>
                        <p class="text-right"><b>Total:</b> 12.9%</p>
                    </div>
                </div>
            <div style="width:100%; padding: 0.5px;background: #6f6f6f;"></div><br>
                <div class="d-print-none">
                    <div class="pull-left">
                        <a href="javascript:window.print()" class="btn btn-inverse waves-effect waves-light"><i class="fa fa-print"></i></a>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Save & Close</button>
                    </div>
                    <div class="pull-right">
                        <a href="#" class="btn btn-secondary waves-effect waves-light" data-dismiss="modal" aria-label="Close">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-----------------------------------------------------------end of modal-------------------------------------------->
        
    
    <!-- Modal -->
        <div class="modal" id="payee" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
            <div class="modal-dialog" style="margin-top: 16em;">
                <div class="modal-content" style="padding: 18px;">
                    <h4 style="color: #000;">New Name</h4><div style="width:100%; padding: 0.5px;background: #6f6f6f;"></div>
                        <div class="modal-body">
                            <div class="form-group">
                                    <label for="">Name<font style="color:red";>*</font></label>
                                    <input type="" class="form-control" id="" placeholder="">
                                </div>
                                <label>Type<font style="color:red";>*</font></label><br>
                                <div class="radio radio-info form-check-inline">
                                    <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="checked">
                                    <label for="inlineRadio1">Supplier</label>
                                </div>
                                <div class="radio radio-info form-check-inline">
                                    <input type="radio" id="inlineRadio2" value="option2" name="radioInline">
                                    <label for="inlineRadio2">Customer</label>
                                </div>
                                <div class="radio radio-info form-check-inline">
                                    <input type="radio" id="inlineRadio2" value="option2" name="radioInline">
                                    <label for="inlineRadio2">Employee</label>
                                </div>
                                <button type="button" class="btn btn-inverse btn-custom waves-effect waves-light m-b-5" style="float:right;">Save</button>
                            </div>
                            <div style="width:100%; padding: 0.5px;background: #6f6f6f;"></div><br>
                                <p style="color:#03A9F4;">Got a Gmail account?</p>
                            <center>
                                <button type="button" class="btn btn-outline-secondary waves-effect m-b-5" style="width: 60%;">Connect Your Gmail Account</button>
                            </center><br>
                            <p style="text-align:center;">After you connect, your contacts will appear in a holding list.<br>You can then choose which ones to add to QuickBooks.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
  

                       <?php /**PATH D:\xampp\htdocs\arbaba\resources\views/expenses/expenses.blade.php ENDPATH**/ ?>