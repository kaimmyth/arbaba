
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
                            <table id="datatable" class="table table-striped table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>TERMS</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $sl_no=1; ?>
                                   
                                        @foreach ($toReturn as $value)
                                        <tr>
                                        <?php $id=$value['id']; ?>
                                            <td>{{$sl_no++}}</td>
                                            <td>{{$value['terms']}}</td>
                                            <td class="actions">
                                                <a href="#" class="on-default edit-row" data-terms_id="{{$id}}" data-terms_terms="{{$value['terms']}}"
                                                data-toggle="modal" data-target="#edit_model_practic" title="edit" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                <a href="{{url('terms/delete/'.$value['id'])}}" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fas fa-trash"></i></a>
                                            </td>
                                            <!-- <td></td> -->
                                           
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


<!-- model -->
<div id="edit_model_practic" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog"> 
        <div class="modal-content"> 
            <div class="modal-header">
                <h4 class="modal-title mt-0">Edit about and Text</h4> 
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div> 
            <div class="modal-body"> 
                <form action ="{{url('terms/update')}}" method="post">
                    <div class="row"> 
                        <div class="col-md-12"> 
                            <div class="form-group">
                                <input type="hidden" name="_token" value = "{{ csrf_token()  }}" > 
                                    <label for="field-1" class="control-label">About</label> 
                                        <input type="hidden" id="terms_id" name="terms_id"> 
                                        <input type="text" class="form-control"  name="terms_terms" id="terms_terms"  required placeholder="enter here...about"> 
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
<!-- /.modal -->





<script >
    $(document).ready(function() {
    $('#edit_model_practic').on('show.bs.modal' , function (event){
        var button = $(event.relatedTarget)
        // var practic_para = button.data('practic_para')
        var  terms_terms = button.data('terms_terms')
        var terms_id = button.data('terms_id')
        var modal = $(this)


        // modal.find('.modal-body #practic_para').val(practic_para);
        modal.find('.modal-body #terms_terms').val(terms_terms);
        modal.find('.modal-body #terms_id').val(terms_id);

    })
    });
</script>




<!-- modal -->


    <!--  Modal content for the above example -->
    <div class="modal fade bs-example-modal-md recurring-expenses" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title mt-0" id="myLargeModalLabel">New Terms</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action={{url('terms/add_new_terms')}} method="POST">
                   @csrf
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter Terms</label>
                            <input type="text" name="new_terms" class="form-control" value="" id="new_terms">
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


















































































