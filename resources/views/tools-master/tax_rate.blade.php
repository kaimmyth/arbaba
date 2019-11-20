
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
                        <li class="active">Tax Rate</li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-border card-primary">
                        <div class="card-header">
                            <button type="button" class="btn btn-inverse btn-rounded waves-effect waves-light m-b-5" data-toggle="modal" data-target=".add_new_tax_rate" style="float:right;">Add New </button>

                        </div>
                        <div class="card-body">
                            <table id="datatable" class="table table-striped table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tax Name</th>
                                        <th>Tax Type</th>
                                        <th>Tax Discription</th>
                                        <th>Tax Validity</th>
                                        <th>Tax Rate</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $sl_no=1; ?>

                                        @foreach ($toReturn as $value)
                                        <tr>
                                            <?php $id=$value['id']; ?> 
                                                <td>{{$sl_no++}}</td>
                                                <td>{{$value['tax_name']}}</td>
                                                <td>{{$value['tax_type']}}</td>
                                                <td>{{$value['tax_discription']}}</td>
                                                <td>{{$value['tax_validity']}}</td>
                                                <td>{{$value['tax_rate']}}</td>
                                                <td class="actions">
                                                    <a href="#" class="on-default edit-row" data-tax_id="{{$id}}" data-tax_name="{{$value['tax_name']}}" data-tax_type="{{$value['tax_type']}}" data-tax_discription="{{$value['tax_discription']}}" data-tax_validity="{{$value['tax_validity']}}" data-tax_rate="{{$value['tax_rate']}}" data-toggle="modal" data-target="#edit_model_tax_rate" title="edit" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                    <a href="{{url('tools-master/delete_tax_rate/'.$value['id'])}}" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fas fa-trash"></i></a>
                                                </td>
                                              

                                        </tr>
                                        @endforeach
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
<div id="edit_model_tax_rate" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog"> 
        <div class="modal-content"> 
            <div class="modal-header">
                <h4 class="modal-title mt-0">Edit Time Zone</h4> 
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div> 
            <div class="modal-body"> 
                <form action ="{{url('tools-master/update_tax_rate')}}" method="post">
                    <div class="row"> 
                        <div class="col-md-12"> 
                            <div class="form-group">
                                <input type="hidden" name="_token" value = "{{ csrf_token()  }}" > 
                                    <label for="field-1" class="control-label">Tax  Name</label> 
                                        <input type="hidden" id="tax_id" name="tax_id"> 
                                        <input type="text" class="form-control"  name="tax_name" id="tax_name"  required placeholder="enter here...about"> 
                            </div> 
                            <div class="form-group">
                                    <label for="field-1" class="control-label">Tax Type</label> 
                                        <input type="text" class="form-control"  name="tax_type" id="tax_type"  required placeholder="enter here...about"> 
                            </div>
                            <div class="form-group">
                                    <label for="field-1" class="control-label">Tax Discription</label> 
                                        <input type="text" class="form-control"  name="tax_discription" id="tax_discription"  required placeholder="enter here...about"> 
                            </div>
                            <div class="form-group">
                                    <label for="field-1" class="control-label">Tax Validity</label> 
                                        <input type="text" class="form-control"  name="tax_validity" id="tax_validity"  required placeholder="enter here...about"> 
                            </div>
                            <div class="form-group">
                                    <label for="field-1" class="control-label">Tax Rate</label> 
                                        <input type="text" class="form-control"  name="tax_rate" id="tax_rate"  required placeholder="enter here...about"> 
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
    $('#edit_model_tax_rate').on('show.bs.modal' , function (event){
        var button = $(event.relatedTarget)
        var tax_id = button.data('tax_id')
        var  tax_name = button.data('tax_name')
        var tax_type = button.data('tax_type')
        var tax_discription = button.data('tax_discription')
        var tax_validity = button.data('tax_validity')
        var tax_rate = button.data('tax_rate')

        var modal = $(this)

        modal.find('.modal-body #tax_id').val(tax_id);
        modal.find('.modal-body #tax_name').val(tax_name);
        modal.find('.modal-body #tax_type').val(tax_type);
        modal.find('.modal-body #tax_discription').val(tax_discription);
        modal.find('.modal-body #tax_validity').val(tax_validity);
        modal.find('.modal-body #tax_rate').val(tax_rate);

    })
    });
</script>


<!-- modal for add-->
    <div class="modal fade bs-example-modal-md add_new_tax_rate" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title mt-0" id="myLargeModalLabel">New Tax Rate</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="{{url('tools-master/add_tax_rate')}}" method="POST">
                   @csrf
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter Tax Name</label>
                            <input type="text" name="tax_name" class="form-control" value="" id="tax_name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter Tax Type</label>
                            <input type="text" name="tax_type" class="form-control" value="" id="tax_type">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter Tax Discription</label>
                            <input type="text" name="tax_discription" class="form-control" value="" id="tax_discription">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter Tax Validity</label>
                            <input type="text" name="tax_validity" class="form-control" value="" id="tax_validity">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter Tax Rate</label>
                            <input type="text" name="tax_rate" class="form-control" value="" id="tax_rate">
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














































































