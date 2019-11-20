
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
                        <li><a href="#">tools/master </a></li>
                        <li class="active">city</li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-border card-primary">
                        <div class="card-header">
                            <button type="button" class="btn btn-inverse btn-rounded waves-effect waves-light m-b-5" data-toggle="modal" data-target=".add_new_city_model" style="float:right;">Add New </button>

                        </div>
                        <div class="card-body">
                            <table id="datatable" class="table table-striped table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>City Name</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $sl_no=1; ?>

                                        @foreach ($toReturn['cities'] as $value)
                                        <tr>
                                            <?php $id=$value['id']; ?>
                                                <td>{{$sl_no++}}</td>
                                                <td>{{$value['city']}}</td>
                                                <td class="actions">
                                                    <a href="#" class="on-default edit-row" data-city_id="{{$id}}"  data-city_name="{{$value['city']}}" data-toggle="modal" data-target="#edit_model_city" title="edit" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                    <a href="{{url('tools-master/delete_city/'.$value['id'])}}" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fas fa-trash"></i></a>
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


<!-- model for update-->
<div id="edit_model_city" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog"> 
        <div class="modal-content"> 
            <div class="modal-header">
                <h4 class="modal-title mt-0">Edit State</h4> 
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div> 
            <div class="modal-body"> 
                <form action ="{{url('tools-master/update_city')}}" method="post">
                    <div class="row"> 
                        <div class="col-md-12"> 
                            <div class="form-group">
                                <input type="hidden" name="_token" value = "{{ csrf_token()  }}" > 
                                    <label for="field-1" class="control-label">State</label> 
                                        <input type="hidden" id="city_id" name="city_id"> 
                                        <input type="text" class="form-control"  name="city_name" id="city_name"  required placeholder="enter here...about"> 
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
    $('#edit_model_city').on('show.bs.modal' , function (event){
        var button = $(event.relatedTarget)
        var  city_name = button.data('city_name')
        var city_id = button.data('city_id')
        var modal = $(this)

        modal.find('.modal-body #city_name').val(city_name);
        modal.find('.modal-body #city_id').val(city_id);

    })
    });
</script>


<!-- modal for add-->
    <div class="modal fade bs-example-modal-md add_new_city_model" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title mt-0" id="myLargeModalLabel">New State</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="{{url('tools-master/add_new_city')}}" method="POST">
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
                            <label for="exampleInputEmail1">Select State</label>
                            <select class="form-control"   name="state_id" id="state_id"  required>
                            <option>-Select-</option>
                            <option id="state_name"></option>

                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter City</label>
                            <input type="text" name="city_name" class="form-control" value="" id="city_name">
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



<script>
        function terms_details_show(id) {

        $('#state_id').empty();
        // alert(id);
        $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });

        $.ajax({
                url: "{{url('tools-master/fetch_according_to_country')}}" + "/" + id,
                method: "GET",
                success: function (data) {
                            $.each(data,function(i,content){
                            $("#state_id").append("<option value='"+content.id+"'>"+content.state+"</option>");
                        });
                        console.log(data);

                    }
        });
}
</script>


<!-- $("#content").empty();
    $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
                });
                $.ajax({
                    url: "{{url('employer/marketing/listtemplate')}}",
                    type: 'get',
                    dataType: "json",

                    success: function(data) {
                            $.each(data,function(i,content){
                            $("#content").append("<option>"+content.et_sender_name+"</option>");
                        });
                        console.log(data);

                    }
                }); -->








































































