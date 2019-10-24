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
                                        <button type="button" class="btn btn-inverse btn-rounded waves-effect waves-light m-b-5" data-toggle="modal" onclick="addExpenses();" style="float:right;">Add an Expense</button>
                                    </div> 
                                    <div class="card-body"> 
                                        <table id="datatable" class="table table-striped table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                <th>#</th>
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
                                                <?php $sl_no=1; ?>
                                                @foreach ($return as $items)
                                                    <tr>
                                                        <td>{{$sl_no}}</td>
                                                        <td>{{date("d-m-Y",strtotime($items['payment_date']))}}</td>
                                                        <td>{{$items['ref_no']}}</td>
                                                        <td>{{$items['payee_id']}}</td>
                                                        <?php
                                                        $category="";
                                                        $payment_amount=0;
                                                        $tax_amount=0;
                                                        if($items["expenses_details"]!="")
                                                        {
                                                            $tmp = $items["expenses_details"];
                                                            $tmp = explode(":",$tmp);
                                                            for($i=0;$i<count($tmp);$i++){
                                                                $tmp_2 = explode(",",$tmp[$i]);
                                                                $category.=$tmp_2[0].", ";
                                                                $payment_amount+=$tmp_2[2];
                                                                $tax_amount+=($tmp_2[2]*$tmp_2[3])/100;
                                                            }
                                                        }
                                                        ?>
                                                        <td>{{rtrim($category, ', ')}}</td>
                                                        <td>{{$payment_amount}}</td>
                                                        <td>{{$tax_amount}}</td>
                                                        <td>{{$payment_amount+$tax_amount}}</td>
                                                        <td><a href="javascript:void();" onclick="viewEditExpenses('view', {{$items['id']}});"><i class="fas fa-eye"></i></a> &nbsp; <a href="javascript:void();" onclick="viewEditExpenses('edit', {{$items['id']}});"><i class="fas fa-pencil-alt"></i></a> &nbsp; <a href="{{url('expenses/delete/'.$items['id'])}}" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fas fa-trash"></i></a></td>
                                                    </tr>
                                                    <?php $sl_no++; ?>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div><!--card body--> 
                                </div><!--card border-->
                            </div><!--col-->
                        </div><!--end of row-->
                    </div><!--end of container fluid-->
                </div><!--end of content-->
            </div><!--end of content page-->




<form action="{{url('expenses/add-edit')}}" method="POST" enctype="multipart/form-data" id="form-expenses">
    @csrf
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
                                            {{-- <button type="button" class="btn btn-outline-secondary waves-effect m-b-5" data-toggle="modal" data-target="#payee" style="width: 100%;">Add New User &nbsp;&nbsp;<i class="fa fa-plus"></i></button> --}}
                                            <input type="text" name="expenses_payee_id" id="expenses_payee_id" class="form-control" placeholder="Who do you pay?">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Payment Account</label>
                                        <div class="input-group">
                                            <select class="form-control" name="expenses_payment_account" id="expenses_payment_account">
                                                <option value="" disabled selected>How do you pay?</option>
                                                <option value="Balance-1">Balance-1</option>
                                                <option value="Balance-2">Balance-2</option>
                                                <option value="Balance-3">Balance-3</option>
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
                                                <option value="Cash">Cash</option>
                                                <option value="Cheque">Cheque</option>
                                                <option value="Credit Card">Credit Card</option>
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
                                <h2>Amount&nbsp; &nbsp;<i class="fa fa-rupee-sign sz" aria-hidden="true"></i><span id="total-span-h">0.00</span></h2>
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
                                    <tbody id="expenses-details-expand">
                                        <tr>
                                            <td>1</td>
                                            {{-- <td><input type="text" name="expenses_details_tax_category" class="form-control input-sm" placeholder="Tax Category?"></td> --}}
                                            <td>
                                                <select class="form-control input-sm" name="expenses_details_tax_category[]">
                                                    <option value="" disabled selected>-Select-</option>
                                                    <option value="Advertisement">Advertisement</option>
                                                    <option value="Office Supplies">Office Supplies</option>
                                                    <option value="Bank Deposit">Bank Deposit</option>
                                                </select>
                                            </td>
                                            <td><input type="text" name="expenses_details_description[]" class="form-control input-sm" placeholder="What did you pay for?"></td>
                                            <td><input type="text" name="expenses_details_amount[]" class="form-control input-sm" placeholder="Enter Amount"></td>
                                            <td style="cursor: pointer;width: 14%;">
                                                <select class="form-control input-sm" name="expenses_details_tax[]">
                                                    {{-- <option value="" disabled selected>-Select-</option> --}}
                                                    <option value="0" selected>0% IGST</option>
                                                    <option value="5">5% IGST</option>
                                                    <option value="10">10% IGST</option>
                                                    <option value="18">18% IGST</option>
                                                </select>
                                            </td>                                          
                                            <td>
                                                <a href="javascript:void();" class="expenses-details-expand-dlt-btn"><i class="fas fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <!-- dynammically insert <tr> expenses details form -->
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <td colspan="5"></td>
                                            <td><a href="javascript:void();" onclick="expensesDetailsExpand();"><i class="fa fa-plus" aria-hidden="true"></i></a></td>
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
                                <div class="dropzone" id="dropzone" style="min-height: 55px">
                                    <div class="fallback">
                                        <input name="expenses_attachment" id="expenses_attachment" type="file">
                                    </div>
                                </div>
                                <span id="e_expenses_attachment"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="border-radius: 0px">
                    <div class="col-md-3 offset-md-9">
                        <p class="text-right"><b>Sub-total: &nbsp; &nbsp;<i class="fa fa-rupee-sign sz" aria-hidden="true"></i></b> <span id="subtotal-span">0</span></p>
                        <p class="text-right"><b>Taxes: &nbsp; &nbsp;<i class="fa fa-rupee-sign sz" aria-hidden="true"></i></b> <span id="taxes-span">0</span></p>
                        <p class="text-right"><b>Total: &nbsp; &nbsp;<i class="fa fa-rupee-sign sz" aria-hidden="true"></i></b> <span id="total-span">0</span></p>
                    </div>
                </div>
            <div style="width:100%; padding: 0.5px;background: #6f6f6f;"></div><br>
                <div class="d-print-none">
                    <div class="pull-left">
                        <a href="javascript:window.print()" class="btn btn-inverse waves-effect waves-light"><i class="fa fa-print"></i></a>
                        <!-- hidden inputs -->
                        <input type="text" name="hidden_input_id" value="NA" hidden>
                        <input type="text" name="hidden_input_purpose" value="add" hidden>
                        <input type="text" name="hidden_input_attachment" value="NA" hidden>
                        <!-- hidden inputs -->
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


<!-- view model start -->
<div class="modal expenses-details-model" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title mt-0" id="myLargeModalLabel">Expanses Details</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="padding: 0px 0;">
                <table class="table table-bordered table-striped" border="0">
                    <tbody>
                        <tr style="border: none;">
                            <td><p><strong>ID</strong></p></td>
                            <td><p id="v_id"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Ref No</strong></p></td>
                            <td><p id="v_ref_no"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Payee ID</strong></p></td>
                            <td><p id="v_payee_id"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Payment Account</strong></p></td>
                            <td><p id="v_payment_account"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Payment Date</strong></p></td>
                            <td><p id="v_payment_date"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Payment Method</strong></p></td>
                            <td><p id="v_payment_method"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td colspan="2">
                                <p><strong>Expenses Details</strong></p>
                                <div id="v_expenses_details">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr style="border: none; background:white !important;">
                                                <th>#</th>
                                                <th>Tax Category</th>
                                                <th>Description</th>
                                                <th>Amount</th>
                                                <th>Tax</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                    <div id="v_expenses_details_amounts">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Memo</strong></p></td>
                            <td><p id="v_memo"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Attachment</strong></p></td>
                            <td><p id="v_attachment"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Created At</strong></p></td>
                            <td><p id="v_created_at"></p></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<script>
// dynamically add fileds
var expensesFormAppendData='<tr><td>2</td><td><select class="form-control input-sm" name="expenses_details_tax_category[]"><option value="" disabled selected>-Select-</option><option value="Advertisement">Advertisement</option><option value="Office Supplies">Office Supplies</option><option value="Bank Deposit">Bank Deposit</option></select></td><td><input type="text" name="expenses_details_description[]" class="form-control input-sm" placeholder="What did you pay for?"></td><td><input type="text" name="expenses_details_amount[]" class="form-control input-sm" placeholder="Enter Amount"></td><td style="cursor: pointer;width: 14%;"><select class="form-control input-sm" name="expenses_details_tax[]"><option value="0" selected>0% IGST</option><option value="5">5% IGST</option><option value="10">10% IGST</option><option value="18">18% IGST</option></select></td><td><a href="javascript:void();" class="expenses-details-expand-dlt-btn"><i class="fas fa-trash-alt"></i></a></td></tr>';
function expensesDetailsExpand(){
    $("#expenses-details-expand").append(expensesFormAppendData);
}
$("#expenses-details-expand").delegate(".expenses-details-expand-dlt-btn", "click", function (){
    $(this).closest("tr").remove();
    getExpensesDetailsValues();
});

// not accepting other than numbers
$("#expenses-details-expand").delegate("input[name='expenses_details_amount[]']", "keyup", function (){
    $(this).val($(this).val().replace(/\D/g, ""));
});


// calculate amounts
$("#expenses-details-expand").delegate("input[name='expenses_details_amount[]']", "change", function (){
    getExpensesDetailsValues();
});
$("#expenses-details-expand").delegate("select[name='expenses_details_tax[]']", "change", function (){
    getExpensesDetailsValues();
});
function getExpensesDetailsValues(){
    
    var amountValues = [];
    var fields = document.getElementsByName("expenses_details_amount[]");
    for(var i = 0; i < fields.length; i++) {
        if(fields[i].value)
        { amountValues.push(parseFloat(fields[i].value)); }
    }

    var amountTaxes = [];
    var fields = document.getElementsByName("expenses_details_tax[]");
    for(var i = 0; i < fields.length; i++) {
        if(fields[i].value)
        { amountTaxes.push(parseFloat(fields[i].value)); }
    }

    // changing html contents
    if(amountValues.length==amountTaxes.length)
    {
        var subtotal=0.0;
        var taxes=0;
        var total=0;

        for(var i=0;i<amountValues.length;i++)
        {
            subtotal+=amountValues[i];
            taxes+=(amountValues[i]*amountTaxes[i])/100;
        }

        total+=parseFloat(subtotal)+parseFloat(taxes);
        $("#subtotal-span").html(subtotal);
        $("#taxes-span").html(taxes);
        $("#total-span").html(total);
        $("#total-span-h").html(total); // large text
    }
}

//add expanses
function addExpenses(){
    resetExpensesForms();
    $(".expense").modal('show');
}
// reset expensess form fields
function resetExpensesForms(){
    // reset all fileds in expenses form model
    document.getElementById("form-expenses").reset();
    // assigning hidden inputs
    $("input[name='hidden_input_id'").val("NA");
    $("input[name='hidden_input_purpose'").val("add");
    $("input[name='hidden_input_attachment'").val("NA");
    // removing extra row forms (expense details)
    $("#expenses-details-expand").find("tr:gt(0)").remove();
    //remove old attachment span (link)
    $("#e_expenses_attachment").html("");
}
function viewEditExpenses(purpose, id){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: "{{url('expenses/get-expanses-details')}}" + "/" + id,
        method: "GET",
        contentType: 'application/json',
        dataType: "json",
        beforeSend: function(data){
            $("#loader1").css("display","block");
        },
        error: function(xhr){
            alert("error"+xhr.status+", "+xhr.statusText);
        },
        success: function (data) {
            console.log(data);
            if(purpose=="view")
            {  
                $("#v_expenses_details tbody").html("");
                document.getElementById("v_id").innerHTML = data.id;
                document.getElementById("v_ref_no").innerHTML = data.ref_no;
                document.getElementById("v_payee_id").innerHTML = data.payee_id;
                document.getElementById("v_payment_account").innerHTML = data.payment_account;
                document.getElementById("v_payment_date").innerHTML = data.payment_date;
                document.getElementById("v_payment_method").innerHTML = data.payment_method;

                // view expenses details
                for(var i=0; i<data.no_of_rows; i++){
                    var e_expenses_details='<tr style="border: none; background:white !important;"><td>1</td><td>'+data.expenses_details_tax_category[i]+'</td><td>'+data.expenses_details_description[i]+'</td><td>'+data.expenses_details_amount[i]+'</td><td>'+data.expenses_details_tax[i]+' ('+data.expenses_details_tax_percent[i]+'%)'+'</td><td>'+parseFloat(parseFloat(data.expenses_details_amount[i])+parseFloat(data.expenses_details_tax[i]))+'</td></tr>';
                    $("#v_expenses_details tbody").append(e_expenses_details);
                }
                $("#v_expenses_details_amounts").html('<div style="text-align:right;padding:5px;"><p><b>Subtotal: ₹</b>'+data.subtotal+'</p><p><b>Taxes: ₹</b>'+data.total_tax+'</p><p><b>Total: ₹</b>'+data.total+'</p></div>');

                document.getElementById("v_memo").innerHTML = data.memo;
                document.getElementById("v_attachment").innerHTML = "<a target='_blank' href='{{url('public/images')}}"+"/"+data.attachment+"'>View Attachment</a>";
                document.getElementById("v_created_at").innerHTML = data.created_at;
                $('.expenses-details-model').modal('show');
            }
            else if(purpose=="edit"){
                resetExpensesForms(); // reseting forms
                $("#expenses_payee_id").val(data.payee_id);
                $("#expenses_payment_account").val(data.payment_account);
                $("input[name='expenses_payment_date']").val(data.payment_date);
                $("#expenses_payment_method").val(data.payment_method);
                $("#expenses_ref_no").val(data.ref_no);
                $("#expenses_memo").val(data.memo);

                $("#e_expenses_attachment").html("<a target='_blank' href='{{url('public/images')}}"+"/"+data.attachment+"'>View Previous Attachment</a>");
                
                // view expenses details
                var expenses_details_tax_category_fields = document.getElementsByName("expenses_details_tax_category[]");
                var expenses_details_description_fields = document.getElementsByName("expenses_details_description[]");
                var expenses_details_amount_fields = document.getElementsByName("expenses_details_amount[]");
                var expenses_details_tax_fields = document.getElementsByName("expenses_details_tax[]");
                for(var i=0; i<data.no_of_rows; i++){
                    if(i!=0){
                        expensesDetailsExpand();
                    }
                    expenses_details_tax_category_fields[i].value = data.expenses_details_tax_category[i];
                    expenses_details_description_fields[i].value = data.expenses_details_description[i];
                    expenses_details_amount_fields[i].value = data.expenses_details_amount[i];
                    $(expenses_details_tax_fields[i]).val(data.expenses_details_tax_percent[i]);
                }

                // assigning hidden inputs
                $("input[name='hidden_input_id'").val(data.id);
                $("input[name='hidden_input_purpose'").val("edit");
                $("input[name='hidden_input_attachment'").val(data.attachment);
                
                getExpensesDetailsValues(); // calculating all values
                $('.expense').modal('show'); // expense insert form model
            }
            $("#loader1").css("display","none");
        }
    });
}
</script>
    

                        