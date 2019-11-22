
<style type="text/css">
  .row {
    margin-right: 0px;
    margin-left: 0px;
  }

</style>
<!-- Start content -->
<div class="content-page">
    <div class="content">
        <div class="container-fluid">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">

                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Home </a></li>
                        <li><a href="#">Tools/master </a></li>
                        <li class="active">Currency</li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-border card-primary">
                        <div class="card-header">
                            <button type="button" class="btn btn-inverse btn-rounded waves-effect waves-light m-b-5" data-toggle="modal" data-target=".add_new_currency" style="float:right;">Add New </button>

                        </div>
                        <div class="card-body">
                            <table id="datatable" class="table table-striped table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Currency Name</th>
                                        <th>Currency Code</th>
                                        <th>Symbol</th>
                                        <th>Formate</th>
                                        <th>Exchange Reate</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $sl_no=1; ?>

                                        <?php $__currentLoopData = $toReturn; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <?php $id=$value['id']; ?> 
                                                <td><?php echo e($sl_no++); ?></td>
                                                <td><?php echo e($value['name']); ?></td>
                                                <td><?php echo e($value['code']); ?></td>
                                                <td><?php echo e($value['symbol']); ?></td>
                                                <td><?php echo e($value['format']); ?></td>
                                                <td><?php echo e($value['exchange_rate']); ?></td>
                                                <td class="actions">
                                                    <a href="#" class="on-default edit-row" data-currency_id="<?php echo e($id); ?>" data-currency_name="<?php echo e($value['name']); ?>" data-currency_code="<?php echo e($value['code']); ?>" data-currency_symbol="<?php echo e($value['symbol']); ?>" data-currency_formate="<?php echo e($value['format']); ?>" data-currency_exchange_rate="<?php echo e($value['exchange_rate']); ?>" data-toggle="modal" data-target="#edit_model_currency" title="edit" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                    <a href="<?php echo e(url('tools-master/delete_currency/'.$value['id'])); ?>" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fas fa-trash"></i></a>
                                                </td>
                                              

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

<!-- model for update-->
<div id="edit_model_currency" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog"> 
        <div class="modal-content"> 
            <div class="modal-header">
                <h4 class="modal-title mt-0">Edit Time Zone</h4> 
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div> 
            <div class="modal-body"> 
                <form action ="<?php echo e(url('tools-master/update_currency')); ?>" method="post">
                    <div class="row"> 
                        <div class="col-md-12"> 
                            <div class="form-group">
                                <input type="hidden" name="_token" value = "<?php echo e(csrf_token()); ?>" > 
                                    <label for="field-1" class="control-label">Currency Name</label> 
                                        <input type="hidden" id="currency_id" name="currency_id"> 
                                        <input type="text" class="form-control"  name="currency_name" id="currency_name"  required placeholder="enter here...about"> 
                            </div> 
                            <div class="form-group">
                                    <label for="field-1" class="control-label">Currency Code</label> 
                                        <input type="text" class="form-control"  name="currency_code" id="currency_code"  required placeholder="enter here...about"> 
                            </div>
                            <div class="form-group">
                                    <label for="field-1" class="control-label">Currency Symbol</label> 
                                        <input type="text" class="form-control"  name="currency_symbol" id="currency_symbol"  required placeholder="enter here...about"> 
                            </div>
                            <div class="form-group">
                                    <label for="field-1" class="control-label">Currency Formate</label> 
                                        <input type="text" class="form-control"  name="currency_formate" id="currency_formate"  required placeholder="enter here...about"> 
                            </div>
                            <div class="form-group">
                                    <label for="field-1" class="control-label">Currency Exchange Rate</label> 
                                        <input type="text" class="form-control"  name="currency_exchange_rate" id="currency_exchange_rate"  required placeholder="enter here...about"> 
                            </div>
                        </div> 
                    </div> 
                  
            </div> 
            <div class="modal-footer"> 
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button> 
                <button type="submit" class="btn btn-info waves-effect waves-light" name="save">Edited</button> 
            </div> 
            </form>
        </div> 
    </div>
</div>
<!-- modal end-->

<script >
    $(document).ready(function() {
    $('#edit_model_currency').on('show.bs.modal' , function (event){
        var button = $(event.relatedTarget)
        var currency_id = button.data('currency_id')
        var  currency_name = button.data('currency_name')
        var currency_code = button.data('currency_code')
        var currency_symbol = button.data('currency_symbol')
        var currency_formate = button.data('currency_formate')
        var currency_exchange_rate = button.data('currency_exchange_rate')

        var modal = $(this)

        modal.find('.modal-body #currency_id').val(currency_id);
        modal.find('.modal-body #currency_name').val(currency_name);
        modal.find('.modal-body #currency_code').val(currency_code);
        modal.find('.modal-body #currency_symbol').val(currency_symbol);
        modal.find('.modal-body #currency_formate').val(currency_formate);
        modal.find('.modal-body #currency_exchange_rate').val(currency_exchange_rate);

    })
    });
</script>


<!-- modal for add-->
    <div class="modal fade bs-example-modal-md add_new_currency" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title mt-0" id="myLargeModalLabel">New Currency</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="<?php echo e(url('tools-master/add_currency')); ?>" method="POST">
                   <?php echo csrf_field(); ?>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter Currency Name</label>
                            <input type="text" name="currency_name" class="form-control" value="" id="currency_name" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter Currency Code</label>
                            <input type="text" name="currency_code" class="form-control" value="" id="currency_code" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter Syamboll</label>
                            <input type="text" name="currency_symbol" class="form-control" value="" id="currency_symbol" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter Formate</label>
                            <input type="text" name="currency_formate" class="form-control" value="" id="currency_formate" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter Exchange Rate</label>
                            <input type="text" name="currency_exchange_rate" class="form-control" value="" id="currency_exchange_rate" required>
                        </div>
                    </div>

                    <div class="col-md-12" style="text-align: right;">
                        <button type="submit" class="btn btn-primary waves-effect" id="btn">Save</button>
                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
<!-- end of model  -->














































































<?php /**PATH C:\xampp\htdocs\arbaba\resources\views/tools-master/currency.blade.php ENDPATH**/ ?>