<style type="text/css">
  .row {
    margin-right: 0px;
    margin-left: 0px;
  }

  hr {
    margin-top: 1rem;
    margin-bottom: 1rem;
    border: 0;
    border-top: 1px solid rgba(0, 0, 0, .1);
    border: 1px solid gainsboro;
    border-radius: 5px;
    width: 100%;
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
            <li class="active">Payments History</li>
          </ol>
        </div>
      </div>


      <div class="card">
        <h4 style="margin-left: 4px;">Payments History</h4>
        <div class="col-md-12" style="text-align: right;">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg" style="float:right;margin-top: 1%;" ><i class="md md-add-circle-outline"></i> Add Tax</button>  
        </div>
        <div class="row"><br><br><br>
          <div class="col-md-12 col-sm-12 col-12">
           <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#custom-width-modal" style="float:right;margin-top: 1%;" >Record Payment</button>  
           <br>
           <table id="datatable" class="table table-striped table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
            <thead>
              <tr>
                <th>DATE</th>
                <th>TYPE</th>
                <th>TAX PERIOD</th>
                <th>AMOUNT</th>
                <th>MEMO</th>
                <th>ACTION</th>
              </tr>
            </thead>
            <tbody>

             
              <?php $__currentLoopData = $toReturn; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              
             
              <tr>
                <td><?php echo e($value['payment_date']); ?></td> 
                <td>Payment</td>
                <td>01/01/2019 - 31/01/2019</td>
                <td><?php echo e($value['payment_amount']); ?>&nbsp;Rs.</td>
                <td><?php echo e($value['pay_memo']); ?></td>
                <td><i class="fas fa-eye"></i> &nbsp; <a href="<?php echo e(url('tax/payment-history/delete/'.$value['id'])); ?>"><i class="fas fa-trash" title="delete"></i></a></td>
              </tr>
            </tbody>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title mt-0" id="myLargeModalLabel">Customer information</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
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
                        <input type="text" class="form-control" placeholder="">
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <textarea class="form-control" rows="2" style="height: 38px;"></textarea>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Tax agency</label>
                        <select class="form-control">
                          <option>Choose a tax agency</option>
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
                        <input type="text" class="form-control" placeholder="%" style="width: 70px;">
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Account</label>
                        <select class="form-control">
                          <option>Select</option>
                          <option>Liability</option>
                          <option>Expense</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Show tax amount on return line</label>
                        <select class="form-control">
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
                      <input type="text" class="form-control" placeholder="%" style="width: 70px;">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Account</label>
                      <select class="form-control">
                        <option>Select</option>
                        <option>Liability</option>
                        <option>Expense</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Show tax amount on return line</label>
                      <select class="form-control">
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
                <input type="text" class="form-control" placeholder="">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputEmail1">Description</label>
                <textarea class="form-control" rows="2" style="height: 38px;"></textarea>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Tax rate</label>
                <select class="form-control">
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
                <select class="form-control">
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
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Description</label>
                <textarea class="form-control" rows="2" style="height: 38px;"></textarea>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Tax agency name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Registration number</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Start of current tax period</label>
                <select class="form-control">
                  <option>Start of current tax period</option>
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
                <select class="form-control">
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
                <select class="form-control">
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
                  <input type="text" class="form-control" placeholder="%" style="width: 70px;">
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12 check box" style="display:none">
            <div class="row">
              <div class="col-md-2">
               <div class="form-group">
                <label for="exampleInputEmail1">Purchase rate</label>
                <input type="text" class="form-control" placeholder="%" style="width: 70px;">
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
  <button type="button" class="btn btn-primary waves-effect waves-light">Save</button>
</div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->




<!-- Custom Modals -->
<form action="<?php echo e(url('tax/payment-history/add')); ?>" method="POST">
	<?php echo csrf_field(); ?>
	<div id="custom-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none">
	<div class="modal-dialog" style="width:55%">
		<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title mt-0" id="custom-width-modalLabel">Record CST payment</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body">
			<div class="row">
			<div class="col-md-5">
				<div class="form-group">
				<label for="rec_cst_pay_purpose"></label>
				<select class="form-control" name="rec_cst_pay_purpose" id="rec_cst_pay_purpose">
					<option>Cash on hand</option>
					<option style="color: green;">Add New +</option>                
				</select>
				</div>
			</div> 

			<div class="col-md-6" style="text-align: right;">
				<div class="form-group">
				<label>Payment Amount</label>
				<h3><i class="fa fa-rupee-sign sz" aria-hidden="true"></i><span id="rec_cst_pay_payment_amount_span">0.00</span></h3>
				</div>
			</div>

			<h5 style="margin-left: 12px; margin-top: 0px;">Balance &nbsp;<i class="fa fa-rupee-sign" aria-hidden="true"></i>-1,20,189.00</h5>
			<hr>
			</div>

			<div class="row">
			<div class="col-md-6">
				<div class="form-group">
				<label for="rec_cst_pay_cst_period">CST period</label>
				<input type="text" class="form-control" name="rec_cst_pay_cst_period" id="rec_cst_pay_cst_period" placeholder="Upcoming filing" value="Upcoming filling" readonly>
				</div>
			</div>

			<div class="col-md-6">
				<div class="form-group">
				<label for="rec_cst_pay_payment_date">Payment date</label>
				<div class="input-group">
					<input type="text" class="form-control autodate" name="rec_cst_pay_payment_date" id="rec_cst_pay_payment_date" placeholder="mm/dd/yyyy">
					<div class="input-group-append">
					<span class="input-group-text"><i class="md md-event"></i></span>
					</div>
				</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="form-group">
				<label for="rec_cst_pay_payment_amount">Payment amount</label>
				<input type="text" class="form-control" name="rec_cst_pay_payment_amount" id="rec_cst_pay_payment_amount" placeholder="">
				<span id="rec_cst_pay_payment_amount_check">Please enter payment amount</span>
				</div>
			</div>

			<div class="col-md-6">
				<div class="form-group">
				<label for="rec_cst_pay_memo">Memo</label>
				<input type="text" class="form-control" name="rec_cst_pay_memo" id="rec_cst_pay_memo" placeholder="">
				<span id="rec_cst_pay_memo_check">Please enter memo</span>
				</div>
			</div>
			</div>

		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
			<button type="submit" class="btn btn-primary waves-effect waves-light" id="rec_cst_pay_submit">Save changes</button>
		</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
</form>




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
	$(document).ready(function(){
		$("#rec_cst_pay_payment_amount").keyup(function(){
			var tmp = $("#rec_cst_pay_payment_amount").val();
			//$("#rec_cst_pay_payment_amount").val(tmp.replace(/[^\d]/g, ""));
			$("#rec_cst_pay_payment_amount").val(tmp.replace(/[^0-9]/g, ''));
			$("#rec_cst_pay_payment_amount_span").html($("#rec_cst_pay_payment_amount").val());
		});

		$("#rec_cst_pay_payment_amount_check").hide();
		$("#rec_cst_pay_memo_check").hide();

		var err_rec_cst_pay_payment_amount=true;
		var err_rec_cst_pay_memo=true;

		// cst amount validation
		$("#rec_cst_pay_payment_amount").blur(function(){
			check_rec_cst_pay_payment_amount();
		});
		function check_rec_cst_pay_payment_amount(){
			var tmp = $("#rec_cst_pay_payment_amount").val();
			if(tmp==""){
				$("#rec_cst_pay_payment_amount_check").show();
				$("#rec_cst_pay_payment_amount_check").css("color","red");
				err_rec_cst_pay_payment_amount=false;
			}
			else{
				err_rec_cst_pay_payment_amount=true;
				$("#rec_cst_pay_payment_amount_check").hide();
			}
		}

		// cst memo validation
		$("#rec_cst_pay_memo").blur(function(){
			check_rec_cst_pay_memo();
		});
		function check_rec_cst_pay_memo(){
			var tmp = $("#rec_cst_pay_memo").val();
			if(tmp==""){
				$("#rec_cst_pay_memo_check").show();
				$("#rec_cst_pay_memo_check").css("color","red");
				err_rec_cst_pay_memo=false;
			}
			else{
				err_rec_cst_pay_memo=true;
				$("#rec_cst_pay_memo_check").hide();
			}
		}

		$("#rec_cst_pay_submit").click(function(){
			check_rec_cst_pay_payment_amount();
			check_rec_cst_pay_memo();

			if((err_rec_cst_pay_payment_amount==true)&&(err_rec_cst_pay_memo==true)){
				return true;
			}
			else{
				return false;
			}
		});

	});
</script><?php /**PATH D:\xampp\htdocs\arbaba\resources\views/taxes/payment_history.blade.php ENDPATH**/ ?>