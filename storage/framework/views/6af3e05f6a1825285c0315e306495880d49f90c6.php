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
                
                    <h1 style="color:cornflowerblue">Invoice</h1>
                    <br>
                    
                    <div class="row">
                            <div class="col-sm-6" >
                            <table class="table table-borderless">
                            
                            <tr>
                            <?php
                            $customer_name=DB::table('sales_customers')->where('id',$value['customer_name'])->value('display_name_as');
                          
                             ?>
                            <td scope="col"><b>BILL TO</b>:&nbsp&nbsp<?php echo e($customer_name); ?></td>
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col"></td> 
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col"></td> 
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col"></td> 
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col"></td> 
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col">INVOICE NO:<?php echo e($value['invoice_no']); ?></h5>
                            </tr>
                            <tr>
                            <td scope="col">EMAIL:<?php echo e($value['customer_email']); ?></td>
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col"></td> 
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col"></td> 
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col"></td> 
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col"></td> 
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col">DATE:<?php echo e($value['invoice_date']); ?></td>
                            </tr>
                            <tr>
                            <td  scope="col"><?php echo e($value['billing_address']); ?></td>
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col"></td> 
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col"></td> 
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col"></td> 
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col"></td> 
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col">DUE DATE:<?php echo e($value['due_date']); ?></td>
                            </tr>
                            <!-- <tr>
                            <td scope="col">DUE DATE:<?php echo e($value['due_date']); ?></td>
                            <td scope="col"></td>
                             </tr> -->
                             </table>
                              </div>
                          </div>

                            <!-- <?php
                            $customer_name=DB::table('sales_customers')->where('id',$value['customer_name'])->value('display_name_as');
                             ?> -->
                              <!-- <h5><b>BILL TO :</b>&nbsp;&nbsp;<?php echo e($customer_name); ?></h5> -->
                              <!-- <h5><b>EMAIL:</b>&nbsp;&nbsp;<?php echo e($value['customer_email']); ?></h5> -->
                               <!-- <div><?php echo e($value['billing_address']); ?></div> -->
                    <!-- <h5><b>PLACE OF SUPPLY :</b>&nbsp;&nbsp;<?php echo e($value['place_of_supply']); ?></h5>----->
                            <!-- </div>
                   <div  class="col-sm-6">  -->
                    <!-- <h5><b>INVOICE NO :</b>&nbsp;&nbsp;<?php echo e($value['invoice_no']); ?></h5> -->
                    <!-- <h5><b>DATE :</b>&nbsp;&nbsp;<?php echo e($value['invoice_date']); ?></h5> -->
                    <!-- <h5><b>DUE DATE :</b>&nbsp;&nbsp;<?php echo e($value['due_date']); ?></h5>
                    <h5><b>TERMS :</b>&nbsp;&nbsp;<?php echo e($value['terms']); ?></h5> -->
                    <!-- </div>
                </div> -->
            
                <br>
                <br>
                <br>
                    <table class="table table-striped">
                        <tr>
                        <th>Products/Services</th>
                        
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
                                ?><tr> 
                                 
                                  <?php
                                  
                                    $to_show = explode(",",$tmp[$i]);
                                    $activity_name=DB::table('products_and_services')->where('id',$to_show[0])->value('name');
                                    echo "<td>".$activity_name."</td>"; // product service
                                    echo "<td>".$to_show[1]."</td>"; // qty
                                    echo "<td>".$to_show[2]."</td>"; // qty
                                    echo "<td>".$to_show[3]."</td>"; // rate
                                    echo "<td>".$to_show[4]."</td>"; // amount
                                    echo "<td>".$to_show[5]."% IGST</td>"; // tax
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