<html>
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>
    <body style="margin-left:20px;">
        
        <div class="container" id="printable-area">
            <div  style="border-style: solid;background-color:#e6f2ff; padding: 20px; !important">
                @foreach ($toReturn as $value)
                <div><h4><b>Billing Address</b></h4>{{$value['billing_address']}}</div>
                    <br>
                    
                    <h1 style="color:cornflowerblue">Tax Invoice</h1>
                    <br>
                    
                    <div class="row">
                            <div class="col-sm-6" >
                    <h5><b>INVOICE TO :</b>&nbsp;&nbsp;{{$value['customer']}}</h5>  
                    
                    <h5><b>PLACE OF SUPPLY :</b>&nbsp;&nbsp;{{$value['place_of_supply']}}</h5>
                            </div>
                    <div  class="col-sm-6">
                    <h5><b>INVOICE NO :</b>&nbsp;&nbsp;{{$value['invoice_no']}}</h5>
                    <h5><b>DATE :</b>&nbsp;&nbsp;{{$value['invoice_date']}}</h5>
                    <h5><b>DUE DATE :</b>&nbsp;&nbsp;{{$value['due_date']}}</h5>
                    <h5><b>TERMS :</b>&nbsp;&nbsp;{{$value['terms']}}</h5>
                    </div>
                </div>
            
                <br>
                <br>
                <br>
                    <table class="table table-striped">
                        <tr>
                        <th>Product/Service</th>
                        <th>HSN/SAC</th>
                        <th>Description</th>
                        <th>Qty</th>
                        <th>Rate</th>
                        <th>Amount</th>
                        <th>Tax</th>
                        </tr>
                        <?php
                        $subtotal=0;
                        $taxes=0;
                        $total=0;
                        if($value["invoice_details"]!="")
                        {
                            $tmp = $value["invoice_details"];
                            $tmp = explode(":",$tmp);
                            for($i=0;$i<count($tmp);$i++){
                                ?><tr><?php
                                    $to_show = explode(",",$tmp[$i]);
                                    echo "<td>".$to_show[0]."</td>"; // product service
                                    echo "<td>".$to_show[1]."</td>"; // hsc sac
                                    echo "<td>".$to_show[2]."</td>"; // description
                                    echo "<td>".$to_show[3]."</td>"; // qty
                                    echo "<td>".$to_show[4]."</td>"; // rate
                                    echo "<td>".$to_show[5]."</td>"; // amount
                                    echo "<td>".$to_show[6]."% IGST</td>"; // tax

                                    $subtotal+=$to_show[5];
                                    $taxes+=(($to_show[6]*$to_show[5])/100);
                                    $total+=$subtotal+$taxes;
                                ?></tr><?php
                            }
                        }
                        ?>
                    </table>
                    <br>
                    <br>
                    <br>
                    <div style="margin-left:90%;">
                        <?php  echo "<b>Subtotal:</b>".$subtotal."<br/><b>Taxes:</b>".$taxes."<br/><b>Total:</b>".$total; ?>

                @endforeach
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <center>
                        <br/><br/><br/><br/>
                        <input name="" id="" class="btn btn-primary"  type="button" onclick="printDiv('printable-area');" value="Print">
                        <script>
                            function printDiv(divName) {
                                    var printContents = document.getElementById(divName).innerHTML;
                                    var originalContents = document.body.innerHTML;

                                    document.body.innerHTML = printContents;

                                    window.print();

                                    document.body.innerHTML = originalContents;
                                }
                            </script>
                    </center>
                </div>
            </div>
        </div>
    </body>
</html>
<!----------------------------SWETA B--------------------------------->
<script>
function viewEditInvoice(purpose, id){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: "{{url('sale/invoice/get-invoice-details')}}" + "/" + id,
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
            if(purpose=="view")
            {  
                $("#v_invoice_details tbody").html("");
                document.getElementById("v_invoice_no").innerHTML = data.id;
                document.getElementById("v_customer").innerHTML = data.customer;
                document.getElementById("v_customer_email").innerHTML = data.customer_email;
                document.getElementById("v_billing_address").innerHTML = data.billing_address;
                document.getElementById("v_terms").innerHTML = data.terms;
                document.getElementById("v_invoice_date").innerHTML = data.invoice_date;
                document.getElementById("v_due_date").innerHTML = data.due_date;
                document.getElementById("v_place_of_supply").innerHTML = data.place_of_supply;
                document.getElementById("v_msg_on_invoice").innerHTML = data.msg_on_invoice;
                document.getElementById("v_msg_on_statement").innerHTML = data.msg_on_statement;
                document.getElementById("v_attachment").innerHTML = "<a target='_blank' href='{{url('public/images')}}"+"/"+data.attachment+"'>View Attachment</a>";
                

                // view invoice details
                for(var i=0; i<data.no_of_rows; i++){
                    var v_invoice_details='<tr style="border: none; background:white !important;"><td>'+data.invoice_details_product_services[i]+'</td><td>'+data.invoice_details_description[i]+'</td><td>'+data.invoice_details_qty[i]+'</td><td>'+data.invoice_details_rate[i]+'</td><td>'+data.invoice_details_amount[i]+'</td><td>'+data.invoice_details_tax[i]+'</td></tr>';
                    $("#v_invoice_details tbody").append(v_invoice_details);
                }
                $("#v_invoice_details_amounts").html('<div style="text-align:right;padding:5px;"><p><b>Subtotal: ₹</b>'+data.subtotal+'</p><p><b>Taxes: ₹</b>'+data.total_tax+'</p><p><b>Total: ₹</b>'+data.total+'</p></div>');
                
                $('.invoice-details-model').modal('show');
            }
            else if(purpose=="edit"){
                resetInvoiceForms(); // reseting forms
                $("#invoice_no").val(data.invoice_no);
                $("#customer").val(data.customer);
                $("#customer_email").val(data.customer_email);
                $("#customer_details").val(data.customer_details);
                $("#billing_address").val(data.billing_address);
                $("#terms").val(data.terms);
                $("input[name='invoice_date']").datepicker('setDate', data.invoice_date);
                $("input[name='due_date']").datepicker('setDate', data.due_date);
                $("#place_of_supply").val(data.place_of_supply);
                $("#msg_on_invoice").val(data.msg_on_invoice);
                $("#msg_on_statement").val(data.msg_on_statement);

                $("#e_invoice_attachment").html("<a target='_blank' href='{{url('public/images')}}"+"/"+data.attachment+"'>View Previous Attachment</a>");
                
                // get form elements details
               var product_service_fields = document.getElementsByName("product_services[]");
              var hsn_sac_fields = document.getElementsByName("hsn_sac[]");
              var description_fields = document.getElementsByName("description[]");
                var qty_fields = document.getElementsByName("qty[]");
               var rate_fields = document.getElementsByName("rate[]");
               var amount_fields = document.getElementsByName("amt[]");
             var tax_fields = document.getElementsByName("tax[]");
              for(var i=0; i<data.no_of_rows; i++){
                   if(i!=0){
                     appendFormContents();
                    }
                   product_service_fields[i].value = data.invoice_details_product_services[i];
                    hsn_sac_fields[i].value = data.invoice_details_hac_sac[i];
                    description_fields[i].value = data.invoice_details_description[i];
                    qty_fields[i].value = data.invoice_details_qty[i];
                    rate_fields[i].value = data.invoice_details_rate[i];
                    amount_fields[i].value = data.invoice_details_amount[i];
                    tax_fields[i].value = data.invoice_details_tax[i];
                }

                // assigning hidden inputs
                $("input[name='hidden_input_id'").val(data.id);
                $("input[name='hidden_input_purpose'").val("edit");
                $("input[name='hidden_input_attachment'").val(data.attachment);
                
                getInvoiceDetailsValues(); // calculating all values, taxes, amount, total etc
                $('.invoice-form-modal').modal('show'); // expense insert form model
            }
            $("#loader1").css("display","none");
        }
    });
}

</script>