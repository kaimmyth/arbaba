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
                    <li><a href="#">purchase </a></li>
                    <li class="active">Recurring Expanses</li>
                </ol>
                </div>
            </div>



            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-border card-primary">
                        <div class="card-header">
                            <button type="button" class="btn btn-inverse btn-rounded waves-effect waves-light m-b-5" data-toggle="modal" data-target=".recurring-expenses" style="float:right;">Add New </button>
                        </div> 
                        <div class="card-body"> 
                            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                    <th><input type="checkbox" name="chkall[]" id="selectall" onClick="selectAll(this)" /></th>
                                    <th>Profile Name</th>
                                    <th>Expense Account</th>
                                    <th>Vender Name</th>
                                    <th>Frequency</th>
                                    <th>Last Expense Date</th>
                                    <th>Next Expense Date</th>
                                    <th>Status</th>
                                    <th>Amount</th>
                                    </tr>
                                </thead>
                               
                            </table>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>


<!-- modal -->

<form action="#" method="POST">
  @csrf
  <!--  Modal content for the above example -->
  <div class="modal fade bs-example-modal-lg recurring-expenses" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title mt-0" id="myLargeModalLabel">New Recurring Expenses</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
                 


          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name" class="form-control" value="" id="name">
                <h6 id="name_val"></h6>
              </div>
            </div>

           

            <div class="col-md-4">
            <div class="form-group row">
              <label class="exampleInputEmail1">Repeat every</label>
                <select class="form-control" name="product_type" id="product_type">
                  <option>Week</option>
                  <option>2 Week </option>
                  <option>2 Month</option>
                  <option></option>
                  <option></option>
                </select>  
            </div>
          </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Start Date</label>
                <input type="date" name="" class="form-control" value="" id="" placeholder="dd/mm/yyyy">
                 <h6 id="hsn_val"></h6>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Ends On</label>
                <input type="date" name="" class="form-control" value="" id="" placeholder="dd/mm/yyyy">
                 <h6 id="sac_val"></h6>
              </div>
            </div>

           
            <div class="col-md-4">
            <div class="form-group row">
              <label class="exampleInputEmail1">Expense Account</label>
                <select class="form-control" name="product_type" id="product_type">
                  <option>Job of Good Sold</option>
                  <option>Job Casting</option>
                  <option>Material</option>
                  <option>Sub Contractor</option>
                  <option></option>
                </select>  
            </div>
          </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Amount</label>
                <input type="text" name="category" class="form-control" value="" id="category">   
              </div>
            </div>

           <div class="col-md-4">
            <div class="form-group row">
              <label class="exampleInputEmail1">Paid Through</label>
                <select class="form-control" name="product_type" id="product_type">
                <option>Advance Through</option>
                  <option>Employee Advance</option>
                  <option>Prepaid Expenses</option>
                  <option></option>
                  <option></option>
                </select>  
            </div>
          </div>


           <div class="col-md-4">
            <div class="form-group row">
              <label class="exampleInputEmail1">Vender Name</label>
                <select class="form-control" name="product_type" id="product_type">
                  <option>-Select-</option>
                  <option></option>
                  <option></option>
                  <option></option>
                  <option></option>
                </select>  
            </div>
          </div>


            <div class="col-md-4">
            <div class="form-group row">
              <label class="exampleInputEmail1">Customer Name</label>
                <select class="form-control" name="product_type" id="product_type">
                  <option>-Select-</option>
                  <option></option>
                  <option></option>
                  <option></option>
                  <option></option>
                </select>  
            </div>
          </div>

           <div class="col-md-12">
            <div class="form-group">
                <label class="notes">Notes</label>
                <textarea class="form-control" rows="3" id="notes" name="notes" required></textarea>
            </div>
           </div>
       </div>
       
        <hr/>
                <div class="col-md-12" style="text-align: right;">
                    <button type="submit" class="btn btn-primary waves-effect" id="btn">Save</button>
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div>
    </div><!-- /.modal-dialog -->    
</div><!-- /.modal -->
