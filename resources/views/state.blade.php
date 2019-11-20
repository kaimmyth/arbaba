
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
                        <li class="active">State</li>
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
                            <table id="datatable" class="table table-striped table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>State Name</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php $sl_no=1; ?>

                                        @foreach ($toReturn['state'] as $value)
                                        <tr>
                                        <?php $id=$value['id']; ?> 
                                                <td>{{$sl_no++}}</td>
                                                <td>{{$value['state']}}</td>
                                                <td class="actions">
                                                    <a href="#" class="on-default edit-row" data-state_id="{{$id}}" data-state_name="{{$value['state']}}" data-toggle="modal" data-target="#edit_model_state" title="edit" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                    <a href="{{url('tools-master/delete_state/'.$value['id'])}}" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fas fa-trash"></i></a>
                                                </td>
                                              

                                        </tr>
                                        @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!--card body-->
                    </div>
                    <!--card border-->
                </div>
                <!--col-->
            </div>
            <!--end of row-->
        </div>
    </div>
</div>
</div>

<!-- model for update-->
<div id="edit_model_state" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog"> 
        <div class="modal-content"> 
            <div class="modal-header">
                <h4 class="modal-title mt-0">Edit State</h4> 
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div> 
            <div class="modal-body"> 
                <form action ="{{url('tools-master/update_state')}}" method="post">
                    <div class="row"> 
                        <div class="col-md-12"> 
                            <div class="form-group">
                                <input type="hidden" name="_token" value = "{{ csrf_token()  }}" > 
                                    <label for="field-1" class="control-label">State</label> 
                                        <input type="hidden" id="state_id" name="state_id"> 
                                        <input type="text" class="form-control"  name="state_name" id="state_name"  required placeholder="enter here...about"> 
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
    $('#edit_model_state').on('show.bs.modal' , function (event){
        var button = $(event.relatedTarget)
        var  state_name = button.data('state_name')
        var state_id = button.data('state_id')
        var modal = $(this)

        modal.find('.modal-body #state_name').val(state_name);
        modal.find('.modal-body #state_id').val(state_id);

    })
    });
</script>


<!-- modal for add-->
    <div class="modal fade bs-example-modal-md recurring-expenses" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title mt-0" id="myLargeModalLabel">New State</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="{{url('tools-master/add_new_state')}}" method="POST">
                   @csrf
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Select Country</label>
                            <select class="form-control" onchange="terms_details_show(this.value)"  name="country_id" id="country_id"  required>
                            <option>-Select-</option>
                                @foreach($toReturn['country'] as $value)
                                <option value="{{$value['id']}}" >{{$value['country_name']}} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter State</label>
                            <input type="text" name="state_name" class="form-control" value="" id="state_name">
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














































































