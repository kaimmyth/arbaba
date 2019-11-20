<html>
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>
      
        <div class="container" id="printable-area">
            <div  style="border-style:lightgrey;background-color:rgb(240, 240, 240); padding: 20px; !important">
                @foreach ($toReturn as $value)
               <?php
               $customer_details=DB::table('sales_customers')->where('id',$value['customer'])->first();
              
                ?>
                <div class="col-md-12"> 
                    <div class="col-md-12">
                        <div>
                            <h3><b>{{@$customer_details->company}}</b></h3>
                            <h4>{{@$customer_details->first_name}}</h4>
                            <h4>{{@$value['billing_address']}}</h4>
                            <h4>{{@$customer_details->email_id}}</h4>
                            <h4>{{@$customer_details->mobile_no}}</h4>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <h1 style="color:cornflowerblue">Tax Invoice</h1> 
                        </div>
                        <hr>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <h4><b>INVOICE TO</b></h4>{{@$customer_details->billing_address}}
                        </div>
                    </div>  
                    <div class="col-md-4">
                        <div class="form-group">
                            <h4><b>SHIPPED TO</b></h4>{{@$customer_details->shipping_address}}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                                <h5><b>INVOICE NO :</b>&nbsp;&nbsp;{{@$customer_details->invoice_no}}</h5>
                                <h5><b>DATE :</b>&nbsp;&nbsp;{{@$customer_details->due_date}}</h5>
                                <h5><b>DUE DATE :</b>&nbsp;&nbsp;{{@$customer_details->due_date}}</h5>
                                <h5><b>TERMS :</b>&nbsp;&nbsp;{{@$customer_details->terms}}</h5>   
                         </div>  
                          
                    </div>
                    <hr>
                     <div class="col-md-6">
                        <div class="form-group">
                               <h5><b>PLACE OF SUPPLY :</b>&nbsp;&nbsp;{{$value['place_of_supply']}}</h5>   
                         </div>   
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
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
                     
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <div style="margin-left:90%;">
                                 <?php  echo "<b>Subtotal:</b>".$subtotal."<br/><b>Taxes:</b>".$taxes."<br/><b>Total:</b>".$total; ?>
                                 @endforeach
                            </div>
                        </div>
                    </div>  

                </div>                
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <center>
                                <br/><br/><br/><br/>
                                <input name="" id="print_btn" class="btn btn-primary"  type="button" onclick="printDiv('printable-area');" value="Print">
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
            </div>
        </div>
    
</html>