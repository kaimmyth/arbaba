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
            <li><a href="#">Sales </a></li>
            <li class="active">Products</li>
          </ol>
        </div>
      </div>



      <div class="row">
        <div class="col-lg-12">
         <div class="card">
          <div class="row">
            <div class="col-md-12">
              <div class="col-md-12" style="text-align: right; margin-bottom: 4px;">
                <button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">New</button>
              </div>

              <div class="tab-content colm">
                <div class="tab-pane show active" id="home-2" role="tabpanel" aria-labelledby="home-tab-2" style="">
                 <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                  <thead>
                    <tr>
                      <th><input type="checkbox" name="chkall[]" id="selectall" onClick="selectAll(this)" /></th>
                      <th>Name</th>
                      <th>SKU</th>
                      <th>HSN/SAC</th>
                      <th>Type</th>
                      <th>Sales Description</th>
                      <th>Sales Price</th>
                      <th>Cost</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>

                   <tr>
                    <td>&nbsp;<input type="checkbox" name="ids[]" value="" /></td>
                    <td>Abc</td>
                    <td></td>
                    <td></td>
                    <td>Sercices</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style="color: #0077C5; font-weight: 600; cursor: pointer;">Edit <i class="fa fa-caret-down" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black; font-size: 15px;"></i>

                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Make Inactive</a>
                        <a class="dropdown-item" href="#">Run Report</a>
                        <a class="dropdown-item" href="#">Duplicate</a>
                      </div></td>


                    </tr>



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
</div>




<!--  Modal content for the above example -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title mt-0" id="myLargeModalLabel">Product/Service information</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-5">
          <div class="form-group row">
            <label class="col-sm-3 control-label">Type</label>
            <div class="col-sm-9">
              <select class="form-control">
                <option>-Select-</option>
                <option>Non-inventory</option>
                <option>Service</option>
                <option>Bundle</option>
                <option>Inventory</option>
              </select>
            </div>
          </div>
        </div>       


        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="text" class="form-control" value="" id="example-text-input">
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label for="exampleInputEmail1">SKU</label>
              <input type="text" class="form-control" value="" id="example-text-input">
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label for="exampleInputEmail1">HSN code</label>
              <input type="text" class="form-control" value="" id="example-text-input">
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label for="exampleInputEmail1">SAC code</label>
              <input type="text" class="form-control" value="" id="example-text-input">
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label for="exampleInputEmail1">Unit</label>
              <input type="text" class="form-control" value="" id="example-text-input">
            </div>
          </div>


          <div class="col-md-4">
            <div class="form-group">
              <label for="exampleInputEmail1">Category</label>
              <input type="text" class="form-control" value="" id="example-text-input">
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label for="exampleInputEmail1">Sale price/Rate</label>
              <input type="text" class="form-control" value="" id="example-text-input">
            </div>
          </div>


          <div class="col-md-4">
            <div class="form-group">
              <label for="exampleInputEmail1">Income Account</label>
              <select class="form-control">
                <option>-Select-</option>
              </select>
            </div>
          </div>


          <div class="col-md-4">
            <div class="checkbox checkbox-primary">
              <input id="checkbox1" type="checkbox">
              <label for="checkbox1">
                Inclusive of tax
              </label>
            </div>
          </div>


          <div class="col-md-4">
            <div class="form-group">
              <label for="exampleInputEmail1">Tax</label>
              <select class="form-control">
                <option>-Select-</option>
                <option>28.0% GST</option>
                <option>18.0% GST</option>
                <option>15.0% GST</option>
                <option>14.5% GST</option>
                <option>14.00% GST</option>
                <option>14.0% GST</option>
                <option>12.36% GST</option>
              </select>
            </div>
          </div>


          <div class="col-md-4">
            <div class="form-group">
              <label for="exampleInputEmail1">Description</label>
              <textarea class="form-control" rows="2" id="example-textarea-input"></textarea>
            </div>
          </div>


          <div class="col-md-4">
            <div class="form-group">
              <label for="exampleInputEmail1">Purchasing information</label>
              <textarea class="form-control" rows="2" id="example-textarea-input"></textarea>
            </div>
          </div>


          <div class="col-md-4">
            <div class="form-group">
              <label for="exampleInputEmail1">Cost</label>
              <input type="text" class="form-control" value="" id="example-text-input">
            </div>
          </div>



          <div class="col-md-4">
            <div class="form-group">
              <label for="exampleInputEmail1">Expense account</label>
              <select class="form-control">
                <option>-Select-</option>
                <option>Purchases</option>
                <option>Rent Expense</option>
                <option>Small Tools and Equipment</option>
                <option>Swachh Bharat Cess Expense</option>
                <option>Taxes - Property</option>
                <option>Telephone Expense</option>
              </select>
            </div>
          </div>


          <div class="col-md-4">
            <div class="form-group">
              <label for="exampleInputEmail1">Purchase tax</label>
              <select class="form-control">
                <option>-Select-</option>
                <option>28.0% GST</option>
                <option>18.0% GST</option>
                <option>15.0% GST</option>
                <option>14.5% GST</option>
                <option>14.00% GST</option>
                <option>14.0% GST</option>
                <option>12.36% GST</option>
              </select>
            </div>
          </div>


          <div class="col-md-4">
            <div class="form-group">
              <label for="exampleInputEmail1">Reverse charge %</label>
              <input type="text" class="form-control" value="" id="example-text-input">
            </div>
          </div>


          <div class="col-md-4">
            <div class="form-group">
              <label for="exampleInputEmail1">Preferred Supplier</label>
              <select class="form-control">
                <option>-Select-</option>
              </select>
            </div>
          </div>

        </div>



      </div>
      <div class="col-md-12" style="text-align: right;">
        <button type="button" class="btn btn-primary waves-effect">Save</button>
        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->

  </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->