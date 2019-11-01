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
                <div style="margin-top:30px;"><h4><b>Billing Address</b></h4><br>{{$value['billing_address']}}</div>
                    <br>
                    
                    <h1 style="color:cornflowerblue">Delivery Challan</h1>
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
                    
                        <th>Description</th>
                        <th>Qty</th>
                    
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
                                
                                    echo "<td>".$to_show[2]."</td>"; // description
                                    echo "<td>".$to_show[3]."</td>"; // qty
                                

                                    $subtotal+=$to_show[5];
                                    $taxes+=$to_show[6];
                                    $total+=$subtotal+$taxes;
                                ?></tr><?php
                            }
                        }
                        ?>
                    </table>
                
                

                    @endforeach
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