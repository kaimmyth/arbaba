<style>
input[type=text]:focus {
  border: 1px solid #317eeb;
  box-shadow:1px 1px 0.5px 0.5px #317eeb; 
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
                                    <li><a href="#">Spplier</a></li>
                                    <li class="active">All Supplier</li>
                                </ol>
                            </div>
                        </div>
                      
                        <div class="card card-border card-primary">                                                                                                                                                                         
                            <div class="card-header"> </div> 
                                <div class="card-body">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-3" style="float:left;">
                                                    <div class="form-group">
                                                        <label for="">Title</label>
                                                            <div class="input-group">
                                                                <input type="text" id="" name="" class="form-control" placeholder="Title">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                                                            </div>
                                                        </div><!--input group-->
                                                    </div><!--end of from group-->
                                                    <div class="form-group">
                                                        <label for="">Last Name</label>
                                                            <div class="input-group">
                                                                <input type="text" id="" name="" class="form-control" placeholder="Last Name">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                                                            </div>
                                                        </div><!--input group-->
                                                    </div><!--end of from group-->
                                                    <div class="form-group">
                                                        <label for="">Company</label>
                                                            <div class="input-group">
                                                                <input type="text" id="" name="" class="form-control" placeholder="Company">
                                                        </div><!--input group-->
                                                    </div><!--end of from group-->

                                                    <div class="form-group">
                                                        <label for="">Address</label>
                                                            <div class="input-group">
                                                            <textarea class="form-control" rows="3" id="example-textarea-input"></textarea>
                                                        </div><!--input group-->
                                                    </div><!--end of from group-->

                                                    <div class="form-group"style="width:49%;float:left;">
                                                        <input type="text" id="" name="" class="form-control" placeholder="City/Town">
                                                    </div>
                                                    <div class="form-group"style="width:49%; float:left; margin-left:2%;">
                                                        <input type="text" id="" name="" class="form-control" placeholder="State">
                                                    </div>

                                                    <div class="form-group"style="width:49%;float:left;">
                                                        <input type="text" id="" name="" class="form-control" placeholder="PIN Code">
                                                    </div>
                                                    <div class="form-group"style="width:49%; float:left; margin-left:2%;">
                                                        <input type="text" id="" name="" class="form-control" placeholder="Country">
                                                    </div>
                                                </div><!--col-->

                                            <div class="col-md-3" style="float:left;">
                                                <div class="form-group">
                                                        <label for="">First name</label>
                                                            <div class="input-group">
                                                                <input type="text" id="" name="" class="form-control" placeholder="First Name">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                                                            </div>
                                                        </div><!--input group-->
                                                    </div><!--end of from group-->
                                                    <div class="form-group">
                                                        <label for="">Middle Name</label>
                                                            <div class="input-group">
                                                                <input type="text" id="" name="" class="form-control" placeholder="Middle Name">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                                                            </div>
                                                        </div><!--input group-->
                                                    </div><!--end of from group-->

                                                    <div class="form-group">
                                                        <label for="">Display Name as</label>
                                                            <div class="input-group">
                                                                <select class="form-control">
                                                                   
                                                                </select>
                                                            </div><!--input group-->
                                                    </div><!--end of from group-->
                                                    <div class="form-group">
                                                        <label for="">PAN NO.</label>
                                                            <div class="input-group">
                                                                <input type="text" id="" name="" class="form-control" placeholder="">
                                                        </div><!--input group-->
                                                    </div><!--end of from group-->


                                                    <div class="form-group">
                                                        <input type="checkbox" id="myCheck" class="checkbox checkbox-success" onclick="myFunction()">&nbsp;&nbsp;<b>Apply TDS for this supplier</b><br>
                                                            <div id="options" style="display:none;">
                                                                <div class="form-group"style="width:49%;float:left;">
                                                                    <label for="">Entity</label>  <br> 
                                                                        <div class="input-group">
                                                                            <select class="form-control">
                                                                                <option>Choose a TDS ENTRY</option>
                                                                                <option>Resident Indivisual</option>
                                                                                <option>Resident Other</option>
                                                                                <option>NRI Indivisual/HUF</option>
                                                                                <option>NRI Other</option>
                                                                            </select>
                                                                    </div><!--input group-->
                                                                </div>
                                                                <div class="form-group"  style="width:49%;margin-left:2%;float:left;">
                                                                    <label for="">Section</label> 
                                                                        <div class="input-group">
                                                                            <select class="form-control">
                                                                                <option>Choose a TDS ENTRY</option>
                                                                                <option>Resident Indivisual</option>
                                                                                <option>Resident Other</option>
                                                                                <option>NRI Indivisual/HUF</option>
                                                                                <option>NRI Other</option>
                                                                            </select>
                                                                    </div><!--input group-->
                                                            </div>
                                                         <input type="checkbox" id="check1"><b>&nbsp;&nbsp;Override calculation threshold</b>
                                                    </div>
                                                </div><!--end of p-->
                                            </div><!--col-->
                                               

                                            <div class="col-md-3" style="float:left;">
                                                <div class="form-group">
                                                        <label for="">Email Id.</label>
                                                            <div class="input-group">
                                                                <input type="text" id="" name="" class="form-control" placeholder="eg.company@gmail.com">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                                            </div>
                                                        </div><!--input group-->
                                                    </div><!--end of from group-->
                                                   
                                                    <div class="form-group">
                                                        <label for="">Company</label>
                                                            <div class="input-group">
                                                                <input type="text" id="" name="" class="form-control" placeholder="Company Name">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa fa-building-o"></i></span>
                                                            </div>
                                                        </div><!--input group-->
                                                    </div><!--end of from group-->
                                                    <div class="form-group">
                                                        <label for="">Website</label>
                                                            <div class="input-group">
                                                                <input type="text" id="" name="" class="form-control" placeholder="eg.www.example.com">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa fa-globe" aria-hidden="true"></i></span>
                                                            </div>
                                                        </div><!--input group-->
                                                    </div><!--end of from group-->

                                                <div class="form-group">
                                                     <label for="">Terms</label>
                                                        <div class="input-group">
                                                            <select class="form-control">
                                                                <option>--select--</option>
                                                                <option>Due On receipt</option>
                                                                <option>Net 15</option>
                                                                <option>Nwt 30</option>
                                                                <option>Nwt 60</option>
                                                            </select>
                                                        </div><!--input group-->
                                                    </div><!--end of from group-->
                                                        <div class="form-group">
                                                            <label for="">Account No.</label>
                                                                <div class="input-group">
                                                                    <input type="text" id="" name="" class="form-control" placeholder="Appear in memo in terms of all payment"> 
                                                            </div><!--input group-->
                                                        </div><!--end of from group-->
														<div class="form-group">
                                                            <label for="">GSTIN</label>
                                                                <div class="input-group">
                                                                    <input type="text" id="" name="" class="form-control" placeholder="For eg. 29KHIT67895"> 
                                                            </div><!--input group-->
                                                        </div><!--end of from group-->
                                                    </div>

                                            <div class="col-md-3" style="float:left;">
                                                <div class="form-group">
                                                    <label for="">Mobile No.</label>
                                                        <div class="input-group">
                                                            <input type="text" placeholder="" data-mask="(999) 999-9999" class="form-control">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fa fa-mobile" aria-hidden="true"></i></span>
                                                        </div>
                                                    </div><!--input group-->
                                                </div><!--end of fron group-->
                                                <div class="form-group">
                                                    <label for="">Other</label>
                                                        <div class="input-group">
                                                            <input type="text" placeholder="" class="form-control">
                                                    </div><!--input group-->
                                                </div><!--end of fron group-->
                                                <div class="form-group">
                                                    <label for="">Billing Rate(/hr)</label>
                                                        <div class="input-group">
                                                        <input type="text" id="" name="" class="form-control" placeholder="">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                                        </div>
                                                    </div><!--input group-->
                                                </div><!--end of fron group-->

                                                
                                                <div class="form-group" style="width:49%;float:left;">
                                                    <label for="">Opening Balance</label>
                                                        <div class="input-group">
                                                        <input type="text" id="" name="" class="form-control" placeholder="">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                                        </div>
                                                    </div><!--input group-->
                                                </div><!--end of fron group-->
                                                <div class="form-group" style="width:49%; float:left; margin-left:2%;">
                                                    <label for="">as of</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="md md-event"></i></span>
                                                        </div>
                                                    </div>
                                                </div><!--end of fron group-->

                                                <div class="form-group">
                                                    <label for="">GST registration type</label>
                                                        <div class="input-group">
                                                        <select class="form-control">
                                                            <option>--select--</option>
                                                            <option>GST Registered Regular</option>
                                                            <option>GST Registered Composition</option>
                                                            <option>Oversas</option>
                                                            <option>SEZ</option>
                                                        </select>
                                                    </div><!--input group-->
                                                </div><!--end of from group-->
												 <div class="form-group" style="width:49%;float:left;">
                                                    <label for="">Tax Registration Number</label>
                                                        <div class="input-group">
                                                        <input type="text" id="" name="" class="form-control" placeholder="">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                                        </div>
                                                    </div><!--input group-->
                                                </div><!--end of fron group-->
                                                <div class="form-group" style="width:49%; float:left; margin-left:2%;">
                                                    <label for="">Effective Date</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="md md-event"></i></span>
                                                        </div>
                                                    </div>
                                                </div><!--end of fron group-->
                                            </div>
                                        </form>
                                    </div><!-- card-body -->
                                    <div class="row">
									    <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Notes</label>
                                                    <div class="input-group">
                                                    <textarea class="form-control" rows="3" id="example-textarea-input"></textarea>
                                                </div><!--input group-->
                                            </div><!--end of from group-->
                                        </div>
										   <div class="col-md-6 portlets">
												<div class="form-group">
													<label for="">Attachments</label>
														<div class="m-b-30">
															<form action="#" class="dropzone" id="dropzone" style="min-height: 80px;">
															<div class="fallback">
																<input name="file" type="file" multiple="multiple">
																</div>
															</form>
														</div>
													</div>
												</div>
											</div>
                                            <hr>
                                            <div style="float:right;">
                                                <button type="button" class="btn btn-info waves-effect waves-light w-md m-b-5">Save</button>
                                                <button type="button" class="btn btn-inverse btn-custom waves-effect waves-light m-b-5">Cancel</button>
                                        </div>
                                    </div><!--card border-->
                                </div><!--end of row-->
                            </div><!--end of container fluid-->
                        </div><!--end of content-->
                    </div><!--end of content page-->
<script>
    function myFunction() {
    var checkBox = document.getElementById("myCheck");
    var options = document.getElementById("options");
    if (checkBox.checked == true){
        options.style.display = "block";
    } else {
        options.style.display = "none";
    }
    }
</script><?php /**PATH D:\xampp\htdocs\arbaba\resources\views/expenses/supplier.blade.php ENDPATH**/ ?>