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
                    <h4 class="pull-left page-title">Welcome <?php echo e(Auth::user()->name ?? ""); ?> !</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Home </a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </div>
            </div>



            <div class="row">
              <div class="col-lg-12">
               <div class="card">
                <div class="card-header"></div>
                <div class="row">

                    <div class="col-md-6">
                        <h3>Total Receivables &nbsp;<i class="fa fa-rupee-sign"></i></h3>
                        <div class="col-md-12 set">
                            <p>Add the .progress-bar-animated class to animate the progress bar:</p> 
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:60%; background-color: #18a96d;"></div>
                            </div>
                        </div>

                        <div class="row set1">
                            <div class="col-md-6" style="border-right: 1px solid #9a9090;">
                                <h4 style="color: #1773d2;">Current</h4>
                                <h3><i class="fa fa-rupee-sign"></i> 0.00</h3>
                            </div>
                            <div class="col-md-6">
                                <h4 style="color: #c50f0f;">Overdue</h4>
                                <div class="dropdown" style="cursor: pointer;">
                                    <h3><i class="fa fa-rupee-sign"></i> 0.00 

                                        <i class="fa fa-caret-down" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                          <a class="dropdown-item" href="#">1</a>
                                          <a class="dropdown-item" href="#">2</a>
                                          <a class="dropdown-item" href="#">3</a>
                                          
                                      </div>


                                  </h3>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="col-md-6">
                     <h3>Total Payables &nbsp;<i class="fa fa-rupee-sign"></i></h3>
                     <div class="col-md-12 set">
                        <p>Add the .progress-bar-animated class to animate the progress bar:</p> 
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:40%; background-color: #d8900e;"></div>
                        </div>
                    </div>

                    <div class="row set1">
                        <div class="col-md-6" style="border-right: 1px solid #9a9090;">
                            <h4 style="color: #1773d2;">Current</h4>
                            <h3><i class="fa fa-rupee-sign"></i> 0.00</h3>
                        </div>
                        <div class="col-md-6">
                            <h4 style="color: #c50f0f;">Overdue</h4>
                            <div class="dropdown" style="cursor: pointer;">
                                <h3><i class="fa fa-rupee-sign"></i> 0.00 

                                    <i class="fa fa-caret-down" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="#">1</a>
                                      <a class="dropdown-item" href="#">2</a>
                                      <a class="dropdown-item" href="#">3</a>
                                  </div>


                              </h3>
                          </div>
                      </div>
                  </div>
              </div>
          </div>



          <div class="col-xl-12" style="margin-top: 20px;">
            <div class="portlet"><!-- /portlet heading -->
                <div class="portlet-heading">
                    <h3 class="portlet-title text-dark text-uppercase">
                        Cash Flow &nbsp;<i class="fa fa-rupee-sign"></i>
                    </h3>
                    <div class="portlet-widgets">
                        <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                        <span class="divider"></span>
                        <a data-toggle="collapse" href="#portlet1"><i class="ion-minus-round"></i></a>
                        <span class="divider"></span>
                        <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div id="portlet1" class="panel-collapse collapse show">
                    <div class="portlet-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div id="website-stats" style="position: relative;height: 320px"></div>
                                <div class="row text-center m-t-30">
                                    <div class="col-sm-4">
                                        <h4 class="counter">86,956</h4>
                                        <small class="text-muted"> Weekly Report</small>
                                    </div>
                                    <div class="col-sm-4">
                                        <h4 class="counter">86,69</h4>
                                        <small class="text-muted">Monthly Report</small>
                                    </div>
                                    <div class="col-sm-4">
                                        <h4 class="counter">948,16</h4>
                                        <small class="text-muted">Yearly Report</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /Portlet -->
        </div> <!-- end col -->




        <div class="row">
            <div class="col-md-6">
                <div class="portlet"><!-- /portlet heading -->
                    <div class="portlet-heading">
                        <h3 class="portlet-title text-dark text-uppercase">
                            Income and Expense
                        </h3>
                        <div class="portlet-widgets">
                            <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                            <span class="divider"></span>
                            <a data-toggle="collapse" href="#portlet1"><i class="ion-minus-round"></i></a>
                            <span class="divider"></span>
                            <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div id="portlet1" class="panel-collapse collapse show">
                        <div class="portlet-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="website-stats" style="position: relative;height: 320px"></div>
                                    <div class="row text-center m-t-30">
                                        <div class="col-sm-4">
                                            <h4 class="counter">86,956</h4>
                                            <small class="text-muted"> Weekly Report</small>
                                        </div>
                                        <div class="col-sm-4">
                                            <h4 class="counter">86,69</h4>
                                            <small class="text-muted">Monthly Report</small>
                                        </div>
                                        <div class="col-sm-4">
                                            <h4 class="counter">948,16</h4>
                                            <small class="text-muted">Yearly Report</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- /Portlet -->
            </div> <!-- end col -->

            <div class="col-md-6">
                <div class="portlet"><!-- /portlet heading -->
                    <div class="portlet-heading">
                        <h3 class="portlet-title text-dark text-uppercase">
                            Your Top Expense
                        </h3>
                        <div class="portlet-widgets">
                            <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                            <span class="divider"></span>
                            <a data-toggle="collapse" href="#portlet2"><i class="ion-minus-round"></i></a>
                            <span class="divider"></span>
                            <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div id="portlet2" class="panel-collapse collapse show">
                        <div class="portlet-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="pie-chart">
                                        <div id="pie-chart-container" class="flot-chart" style="height: 320px">
                                        </div>
                                    </div>

                                    <div class="row text-center m-t-30">
                                        <div class="col-sm-6">
                                            <h4 class="counter">86,956</h4>
                                            <small class="text-muted"> Weekly Report</small>
                                        </div>
                                        <div class="col-sm-6">
                                            <h4 class="counter">86,69</h4>
                                            <small class="text-muted">Monthly Report</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- /Portlet -->
            </div> <!-- end col -->
        </div> <!-- End row -->





    </div>
</div>
</div>





</div>
</div>
</div>
<?php /**PATH D:\xampp\htdocs\arbaba\resources\views/admin/home.blade.php ENDPATH**/ ?>