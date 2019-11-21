
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
                        <li class="active">Time Zone</li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-border card-primary">
                        <div class="card-header">
                            <button type="button" class="btn btn-inverse btn-rounded waves-effect waves-light m-b-5" data-toggle="modal" data-target=".add_new_time_zone" style="float:right;">Add New </button>

                        </div>
                        <div class="card-body">
                            <table id="datatable" class="table table-striped table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Country Short Name</th>
                                        <th>Time Zone Name</th>
                                        <th>Change Time</th>
                                        <th>Value</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $sl_no=1; ?>

                                        @foreach ($toReturn as $value)
                                        <tr>
                                            <?php $id=$value['id']; ?> 
                                                <td>{{$sl_no++}}</td>
                                                <td>{{$value['short_name']}}</td>
                                                <td>{{$value['time_zone_name']}}</td>
                                                <td>{{$value['change_time']}}</td>
                                                <td>{{$value['cal_value']}}</td>
                                                <td class="actions">
                                                    <a href="#" class="on-default edit-row" data-time_zone_id="{{$id}}" data-time_zone_name="{{$value['time_zone_name']}}" data-time_zone_short_name="{{$value['short_name']}}" data-time_zone_change_time="{{$value['change_time']}}" data-time_zone_value="{{$value['cal_value']}}" data-toggle="modal" data-target="#edit_model_time_zone" title="edit" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                    <a href="{{url('tools-master/delete_time_zone/'.$value['id'])}}" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fas fa-trash"></i></a>
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
<div id="edit_model_time_zone" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog"> 
        <div class="modal-content"> 
            <div class="modal-header">
                <h4 class="modal-title mt-0">Edit Time Zone</h4> 
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div> 
            <div class="modal-body"> 
                <form action ="{{url('tools-master/update_time_zone')}}" method="post">
                    <div class="row"> 
                        <div class="col-md-12"> 
                            <div class="form-group">
                                <input type="hidden" name="_token" value = "{{ csrf_token()  }}" > 
                                    <label for="field-1" class="control-label">Time Zone</label> 
                                        <input type="hidden" id="time_zone_id" name="time_zone_id"> 
                                        <input type="text" class="form-control"  name="time_zone_name" id="time_zone_name"  required placeholder="enter here...about" required> 
                            </div> 
                            <div class="form-group">
                                    <label for="field-1" class="control-label">Country Short Name</label> 
                                        <input type="text" class="form-control"  name="time_zone_short_name" id="time_zone_short_name"  required placeholder="enter here...about" required> 
                            </div>
                            <div class="form-group">
                                    <label for="field-1" class="control-label">Change Time</label> 
                                        <input type="text" class="form-control"  name="time_zone_change_time" id="time_zone_change_time"  required placeholder="enter here...about" required> 
                            </div>
                            <div class="form-group">
                                    <label for="field-1" class="control-label">Value</label> 
                                        <input type="text" class="form-control"  name="time_zone_value" id="time_zone_value"  required placeholder="enter here...about" required> 
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
    $('#edit_model_time_zone').on('show.bs.modal' , function (event){
        var button = $(event.relatedTarget)
        var  time_zone_name = button.data('time_zone_name')
        var time_zone_id = button.data('time_zone_id')
        
        var time_zone_short_name = button.data('time_zone_short_name')
        var time_zone_change_time = button.data('time_zone_change_time')
        var time_zone_value = button.data('time_zone_value')

        var modal = $(this)

        modal.find('.modal-body #time_zone_name').val(time_zone_name);
        modal.find('.modal-body #time_zone_id').val(time_zone_id);

        modal.find('.modal-body #time_zone_short_name').val(time_zone_short_name);
        modal.find('.modal-body #time_zone_change_time').val(time_zone_change_time);
        modal.find('.modal-body #time_zone_value').val(time_zone_value);

    })
    });
</script>


<!-- modal for add-->
    <div class="modal fade bs-example-modal-md add_new_time_zone" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title mt-0" id="myLargeModalLabel">New Time Zone Name</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="{{url('tools-master/add_time_zone')}}" method="POST">
                   @csrf
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter Country Short Name</label>
                            <input type="text" name="time_zone_short_name" class="form-control" value="" id="time_zone_short_name" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter Time Zone Name</label>
                            <input type="text" name="time_zone_name" class="form-control" value="" id="time_zone_name" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter Change Time</label>
                            <input type="text" name="time_zone_change_time" class="form-control" value="" id="time_zone_change_time" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter Value</label>
                            <input type="text" name="time_zone_value" class="form-control" value="" id="time_zone_value" required>
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














































































