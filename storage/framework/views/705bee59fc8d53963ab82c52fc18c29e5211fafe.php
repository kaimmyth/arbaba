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
        
        
                <?php $__currentLoopData = $toReturn; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <div style="margin-top:30px;"> <?php echo e($value['billing_address']); ?></div>
                <br>
                <br>
                <h1 style="color:cornflowerblue">Tax Invoice</h1>
                <br>
                <h5><b>INVOICE TO :</b>&nbsp;&nbsp;<?php echo e($value['customer']); ?></h5>
                
                <h5><b>PLACE OF SUPPLY :</b>&nbsp;&nbsp;<?php echo e($value['place_of_supply']); ?></h5>
                <div style="float:right">
                <h5><b>INVOICE NO :</b>&nbsp;&nbsp;<?php echo e($value['invoice_no']); ?></h5>
                <h5><b>DATE :</b>&nbsp;&nbsp;<?php echo e($value['invoice_date']); ?></h5>
                <h5><b>DUE DATE :</b>&nbsp;&nbsp;<?php echo e($value['due_date']); ?></h5>
                <h5><b>TERMS :</b>&nbsp;&nbsp;<?php echo e($value['terms']); ?></h5>
                </div>

               
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
    
    </body>
</html><?php /**PATH C:\xampp\htdocs\arbaba\resources\views/emails/sales_invoice_mail.blade.php ENDPATH**/ ?>