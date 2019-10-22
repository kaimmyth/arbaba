<style type="text/css">
  .row {
    margin-right: 0px;
    margin-left: 0px;
  }
</style>
<!-- Start content -->
<div class="content-page" >
  <div class="content">
    <div class="container-fluid">

      <!-- Page-Title -->
      <div class="row">
        <div class="col-sm-12">

          <ol class="breadcrumb pull-right">
            <li><a href="#">Home </a></li>
            <li><a href="#">Taxes </a></li>
            <li class="active">Return</li>
          </ol>
        </div>
      </div>


      <div class="card">
        <h4 style="margin-left: 4px;">Returns</h4>
        <div class="row"><br><br><br>
          <div class="col-md-12 col-sm-12 col-12">
           <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg" style="float:right;margin-top: 1%;" ><i class="md md-add-circle-outline"></i> Add Tax</button><br>
           <table id="datatable" class="table table-striped table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
            <thead>
              <tr>
                <th>START DATE</th>
                <th>END DATE</th>
                <th>PAYMENTS</th>
                <th>STATUS</th>
                <th>ACTION </th>
              </tr>
            </thead>
            <tbody>

              <tr>
                <td>15/10/19</td>
                <td>20/10/19</td>
                <td>2000 Rs.</td>
                <td>Open</td>
                <td><a href="<?php echo e(URL::to('tax/return/calender')); ?>">Tax adjustment</a></td>
              </tr>
              
              <?php $__currentLoopData = $toReturn; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               
              <tr>
                <td><?php echo e($toReturn[$key]->payment_date); ?></td>
                <td></td>
                <td><?php echo e($toReturn[$key]->payment_amount); ?></td>
                <td>Open</td>
                <td><a href="<?php echo e(URL::to('tax/return/calender')); ?>">Tax adjustment</a></td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           </tbody>
          </table>

        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>


<!--  Modal content for the above example -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"  style="display: none">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title mt-0" id="myLargeModalLabel">Customer information</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
    <form action="<?php echo e(url('tax/return/add')); ?>" method="post">
      <?php echo e(csrf_field()); ?>

      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">
                  <span class="d-block d-sm-none"><i class="fa fa-home"></i></span>
                  <span class="d-none d-sm-block">Tax Rate</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">
                  <span class="d-block d-sm-none"><i class="fa fa-user"></i></span>
                  <span class="d-none d-sm-block">Group Rate</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="message-tab" data-toggle="tab" href="#message" role="tab" aria-controls="message" aria-selected="false">
                  <span class="d-block d-sm-none"><i class="fa fa-envelope-o"></i></span>
                  <span class="d-none d-sm-block">Custom Tax</span>
                </a>
              </li>
            </ul>

            
            <div class="tab-content" style="border: 1px solid;">
              <div class="tab-pane  show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="row">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Tax Name</label>
                        <input type="text"  name="tax_name"class="form-control" placeholder="" required>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <textarea class="form-control" name="tax_description" rows="2" style="height: 38px;" required></textarea>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Tax agency</label>
                        <select class="form-control" name="tax_agency" required>
                          <option value="">Choose a tax agency</option>
                          <option>GST</option>
                          <option>VAT</option>
                          <option>SERVICE TAX</option>
                          <option>Swachh Bharat Cess</option>
                          <option>Krishi Kalyan Cess</option>
                          <option>CST</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="checkbox checkbox-primary">
                        <input id="chkPassport" type="checkbox">
                        <label for="checkbox1">
                          Sales
                        </label>
                      </div>
                    </div>


                    <div class="col-md-4">
                      <div class="checkbox checkbox-primary">
                        <input id="chkStatus" type="checkbox">
                        <label for="checkbox">
                          Purchases
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12" id="dvPassport" style="display: none">
                    <div class="row">
                     <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Sales rate</label>
                        <input type="text" class="form-control" name="sales_rate" id="sales_rate" placeholder="%" style="width: 70px;">
                        <span id="sale_check"></span>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Account</label>
                        <select class="form-control" name="sales_account" required>
                          <option value="">Select</option>
                          <option>Liability</option>
                          <option>Expense</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Show tax amount on return line</label>
                        <select class="form-control" name="sales_tax_amount" required>
                            <option value="">Select</option>
                          <option>Output - CGST</option>
                          <option>Output - SGST</option>
                          <option>Output - IGST</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Show net amount on return line</label>
                        <p>Not applicable (N/A)</p>
                      </div>
                    </div>

                  </div>
                </div>


                <div class="col-md-12" id="testdiv" style="display:none">
                  <div class="row">
                   <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Purchase rate</label>
                      <input type="text" class="form-control" name="purchase_rate" id="purchase_rate" placeholder="%" style="width: 70px;">
                      <span id="purchase_check"><span>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Account</label>
                      <select class="form-control" name="purchase_account" required>
                        <option value="">Select</option>
                        <option>Liability</option>
                        <option>Expense</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Show tax amount on return line</label>
                      <select class="form-control" name="purchase_tax_amount" required>
                          <option value="">Select</option>
                        <option>Output - CGST</option>
                        <option>Output - SGST</option>
                        <option>Output - IGST</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Show net amount on return line</label>
                      <p>Not applicable (N/A)</p>
                    </div>
                  </div>

                </div>
              </div>


            </div>
          </div>
          <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
           <div class="row">
             <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputEmail1">Group name</label>
                <input type="text" class="form-control" name="group_name" placeholder="" required>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputEmail1">Description</label>
                <textarea class="form-control" name="group_description" rows="2" style="height: 38px;" required></textarea>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Tax rate</label>
                <select class="form-control" name="tax_rate" required>
                    <option value="">Select</option>
                  <option>Purchase CGST 0.125%</option>
                  <option>Sales IGST Exempt</option>
                  <option>Purchase IGST 3%</option>
                  <option>Purchase CGST Exempt</option>
                  <option>Purchase SGST 0.125%</option>
                  <option>Sales CGST Exempt</option>
                  <option>Sales IGST 6.0%</option>
                </select>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Applicable on</label>
                <select class="form-control" name="applicable_on" required>
                    <option value="">Select</option>
                  <option>Net amount</option>
                  <option>Tax amount</option>
                  <option>Net + Tax amount</option>
                </select>
              </div>
            </div>
          </div>

        </div>
        <div class="tab-pane" id="message" role="tabpanel" aria-labelledby="message-tab">
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Tax name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="custom_tax_name" placeholder="" required>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Description</label>
                <textarea class="form-control"  name="custom_description" rows="2" style="height: 38px;" required></textarea>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Tax agency name</label>
                <input type="text" class="form-control" name="tax_agency_name" id="exampleInputEmail1" placeholder="" required>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Registration number</label>
                <input type="text" class="form-control" name="registration_number" id="registration_number" placeholder="">
                <span id="reg_no_check"><span>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Start of current tax period</label>
                <select class="form-control" name="tax_period" required>
                  <option value="">Start of current tax period</option>
                  <option>January</option>
                  <option>February</option>
                  <option>March</option>
                  <option>April</option>
                  <option>May</option>
                  <option>June</option>
                  <option>July</option>
                  <option>August</option>
                  <option>September</option>
                  <option>October</option>
                  <option>November</option>
                  <option>December</option>
                </select>
              </div>
            </div>


            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Filing frequency</label>
                <select class="form-control" name="filling_frequency" required>
                    <option value="">Select</option>
                  <option>Monthly</option>
                  <option>Quarterly</option>
                  <option>Half-yearly</option>
                  <option>Yearly</option>
                </select>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Reporting method</label>
                <select class="form-control" name="reporting_method" required>
                    <option value="">Select</option>
                  <option>Accural</option>
                  <option>Cash</option>
                </select>
              </div>
            </div>

            <div class="col-md-4">
              <div class="checkbox checkbox-primary">
                <input id="check" onclick="myFunction()" type="checkbox">
                <label for="checkbox">
                  This tax is collected on sales
                </label>
              </div>
            </div>

            <div class="col-md-4">
              <div class="checkbox checkbox-primary">
                <input value="check" type="checkbox">
                <label for="checkbox">
                  This tax is collected on purchases
                </label>
              </div>
            </div>

            <div class="col-md-12" id="fld" style="display:none">
              <div class="row">
                <div class="col-md-4">
                 <div class="form-group">
                  <label for="exampleInputEmail1">Sales rate</label>
                  <input type="text" class="form-control"  name="tax_collected_on_sales"  id="tax_collected_on_sales" placeholder="%" style="width: 70px;">
                <span id="tax_sales"></span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12 check box" style="display:none">
            <div class="row">
              <div class="col-md-2">
               <div class="form-group">
                <label for="exampleInputEmail1">Purchase rate</label>
                <input type="text" class="form-control" name="tax_collected_on_purchase" id="tax_collected_on_purchase" placeholder="%" style="width: 70px;">
                <span id="tax_purchase"></span>
              </div>
            </div>

            <div class="col-md-6">
              <div class="checkbox checkbox-primary">
                <input type="checkbox">
                <label for="checkbox">
                  This tax is collected on purchases
                </label>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>
</div>

</div>
</div>

<div class="modal-footer">
  <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
  <button type="submit" class="btn btn-primary waves-effect waves-light" id="validateform">Save</button>
</div>
    </form>    
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<script type="text/javascript">
  $(function () {
    $("#chkPassport").click(function () {
      if ($(this).is(":checked")) {
        $("#dvPassport").show();
      } else {
        $("#dvPassport").hide();
      }
    });
  });
</script>
<script type="text/javascript">
  $(function () {
    $('#chkStatus').change(function () {
      if ($('#chkStatus').is(':checked'))
        $("#testdiv").fadeIn();
      else
        $('#testdiv').fadeOut();
    });
  });
</script>

<script type="text/javascript">
  function myFunction() {
    if($('#check').prop('checked')) {
     $('#fld').css('display','block');
   } else {
    $('#fld').css('display','none');
  }
}
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $('input[type="checkbox"]').click(function() {
      var inputValue = $(this).attr("value");
      $("." + inputValue).toggle();
    });
  });
</script>

<script>
 $(document).ready(function()
 {
   $("#sale_check").hide();
   $("#purchase_check").hide();
   $("#reg_no_check").hide();
   $("#tax_sales").hide();
   $("#tax_purchase").hide();

 var err_sale=true;
 var err_purchase=true;
 var err_reg_no=true;
 var err_tax_sale=true;
 var err_tax_purchase=true;


 $("#sales_rate").blur(function()
		{
			check_sales();
		});

    function check_sales()
{
  
var sale_val=$("#sales_rate").val();

var regexOnlyNumbers=/^[0-9]+$/;
if (sale_val==""||regexOnlyNumbers.test(sale_val) != true){
$("#sale_check").show();
$("#sale_check").html("Please enter values between 1-9");

$("#sale_check").focus();
$("#sale_check").css("color","red");

err_sale=false;
}
else
{
err_sale=true;
$("#sale_check").hide();
}
}

$("#purchase_rate").blur(function()
		{
			check_purchase();
		});

    function check_purchase()
{
  
var purchase_val=$("#purchase_rate").val();

var regexOnlyNumbers=/^[0-9]+$/;

if (purchase_val==""||regexOnlyNumbers.test(purchase_val) != true){
$("#purchase_check").show();
$("#purchase_check").html("Please enter values between 1-9");

$("#purchase_check").focus();
$("#purchase_check").css("color","red");
err_purchase=false;
}
else
{
err_purchase=true;
$("#purchase_check").hide();
}
}

$("#registration_number").blur(function()
		{
			check_reg_no();
		});

    function check_reg_no()
{
var reg_no_val=$("#registration_number").val();

var regexOnlyNumbers=/^[0-9]+$/;

if (reg_no_val==""||regexOnlyNumbers.test(reg_no_val) != true){
$("#reg_no_check").show();
$("#reg_no_check").html("Please enter values between 1-9");

$("#reg_no_check").focus();
$("#reg_no_check").css("color","red");
err_reg_no=false;
}
else
{
err_reg_no=true;
$("#reg_no_check").hide();
}
}

$("#tax_collected_on_sales").blur(function()
		{
			check_tax_sales();
		});

    function check_tax_sales()
{
  
var tax_sale_val=$("#tax_collected_on_sales").val();

var regexOnlyNumbers=/^[0-9]+$/;
if (tax_sale_val==""||regexOnlyNumbers.test(tax_sale_val) != true){
$("#tax_sales").show();
$("#tax_sales").html("Please enter values between 1-9");

$("#tax_sales").focus();
$("#tax_sales").css("color","red");

err_tax_sale=false;
}
else
{
  err_tax_sale=true;
$("#tax_sales").hide();
}
}


$("#tax_collected_on_purchase").blur(function()
		{
			check_tax_purchase();
		});

    function check_tax_purchase()
{
  
var tax_purchase_val=$("#tax_collected_on_purchase").val();

var regexOnlyNumbers=/^[0-9]+$/;
if (tax_purchase_val==""||regexOnlyNumbers.test(tax_purchase_val) != true){
$("#tax_purchase").show();
$("#tax_purchase").html("Please enter values between 1-9");

$("#tax_purchase").focus();
$("#tax_purchase").css("color","red");

err_tax_purchase=false;
}
else
{
  err_tax_purchase=true;
$("#tax_purchase").hide();
}
}
 
 $("#validatefrm").click(function()
 {
  check_sales();
	check_purchase();
	check_reg_no();
  check_tax_sales();
  check_tax_purchase();

   if((err_sale==true) && (err_purchase==true) && (err_reg_no==true) && (err_tax_sale==true) && (err_tax_purchase==true))
   {
     return true;
   }  
   else
   {
        return false;
   }
 });

 });
</script>

<?php /**PATH C:\xampp\htdocs\arbaba\resources\views/taxes/return.blade.php ENDPATH**/ ?>