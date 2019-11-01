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
                <?php $__currentLoopData = $toReturn; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div><h4><b>Billing Address</b></h4><br><?php echo e($value['billing_address']); ?></div>
                    <br>
                    
                    <h1 style="color:cornflowerblue">Tax Invoice</h1>
                    <br>
                    
                    <div class="row">
                            <div class="col-sm-6" >
                    <h5><b>INVOICE TO :</b>&nbsp;&nbsp;<?php echo e($value['customer']); ?></h5>  
                    
                    <h5><b>PLACE OF SUPPLY :</b>&nbsp;&nbsp;<?php echo e($value['place_of_supply']); ?></h5>
                            </div>
                    <div  class="col-sm-6">
                    <h5><b>INVOICE NO :</b>&nbsp;&nbsp;<?php echo e($value['invoice_no']); ?></h5>
                    <h5><b>DATE :</b>&nbsp;&nbsp;<?php echo e($value['invoice_date']); ?></h5>
                    <h5><b>DUE DATE :</b>&nbsp;&nbsp;<?php echo e($value['due_date']); ?></h5>
                    <h5><b>TERMS :</b>&nbsp;&nbsp;<?php echo e($value['terms']); ?></h5>
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

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
</html><?php /**PATH C:\xampp\htdocs\arbaba\resources\views/sales_invoice_print.blade.php ENDPATH**/ ?>