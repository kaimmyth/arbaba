<html>
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <body style="background-color:rgb(82, 86, 89);">

        <div class="container" id="printable-area" style="background-color:rgb(240, 240, 240);height:90%; ">
            <div class="row" style="border-style:; padding: 20px; !important">

                <?php $__currentLoopData = $toReturn; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="col-md-12">
                            <div class="form-group" style="margin-top:30px;"><h4><b>Billing Address</b></h4><br><?php echo e($value['billing_address']); ?></div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                               <h1 style="color:cornflowerblue">Delivery Challan</h1>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">
                               <h5><b>INVOICE TO :</b></h5>&nbsp;&nbsp;<?php echo e($value['customer']); ?> 
                            </div>
                        </div>
                         <div class="col-md-4">
                            <div class="form-group">
                               <h5><b>SHIP TO :</b></h5>&nbsp;&nbsp;<?php echo e($value['billing_address']); ?> 
                            </div>
                        </div>
                         <div class="col-md-4">
                            <div class="form-group">
                                <h5><b>INVOICE NO :</b>&nbsp;&nbsp;<?php echo e($value['invoice_no']); ?></h5>
                                <h5><b>DATE :</b>&nbsp;&nbsp;<?php echo e($value['invoice_date']); ?></h5>   
                            </div>
                            <hr/>

                            <br>
                        </div>
                        <div class="col-md-12">
                                <div class="form-group">
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
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
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


    </body>
</html><?php /**PATH C:\xampp\htdocs\arbaba\resources\views/sales_allsales_delivery_challan.blade.php ENDPATH**/ ?>