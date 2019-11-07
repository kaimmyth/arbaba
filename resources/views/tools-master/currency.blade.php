
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
                    <li><a href="#">tools/master </a></li>
                    <li class="active">curencies</li>
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
                                    <th>Name</th>
                                    <th>Symbol</th>
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
  <div class="modal fade bs-example-modal-md recurring-expenses" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title mt-0" id="myLargeModalLabel">New Currency</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
                 


           <div class="col-md-12">
            <div class="form-group row">
              <label class="exampleInputEmail1">Currency Code</label>
                <select class="form-control" name="product_type" id="product_type">
                  <option>AED - VAE Dirham</option>
                  <option>AFM - Afghan Afghan</option>
                  <option>ALL - Albanianlek</option>
                  <option>AMD - Aemenian Dram</option>
                </select>  
            </div>
          </div>

        
            <div class="col-md-12">
              <div class="form-group">
                <label for="exampleInputEmail1">Currency Symbol</label>
                <input type="text" name="name" class="form-control" value="" id="name">
              </div>
            </div>
        
            <div class="col-md-12">
              <div class="form-group">
                <label for="exampleInputEmail1">Currency Name</label>
                <input type="text" name="name" class="form-control" value="" id="name">
                <h6 id="name_val"></h6>
              </div>
            </div>


         

             <div class="col-md-12">
            <div class="form-group row">
              <label class="exampleInputEmail1">Decimal Places</label>
                <select class="form-control" name="product_type" id="product_type">
                  <option>-Select-</option>
                  <option>0</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                </select>  
            </div>
          </div>

           <div class="col-md-12">
            <div class="form-group row">
              <label class="exampleInputEmail1">Format</label>
                <select class="form-control" name="product_type" id="product_type">
                  <option>-Select-</option>
                  <option></option>
                  <option></option>
                  <option></option>
                  <option></option>
                </select>  
            </div>
            <hr/>
          </div>

        <div class="col-md-12" style="text-align: right;">
            <button type="submit" class="btn btn-primary waves-effect" id="btn">Save</button>
            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
        </div>
      </div><!-- /.modal-content -->

    </div><!-- /.modal-dialog -->
 </div><!-- /.modal -->
</div>
