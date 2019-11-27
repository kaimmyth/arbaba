
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
                        <li class="active">Terms</li>
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
                                        <th>TERMS TYPE </th>
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
                                                <td>{{$value['terms_type']}}</td>
                                                <td class="actions">
                                                    <a href="#" class="on-default edit-row" data-terms_id="{{$id}}" data-terms_terms="{{$value['terms']}}" data-terms_type="{{$value['terms_type']}}" data-toggle="modal" data-target="#edit_model_practic" title="edit" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                    <a href="{{url('terms/delete_terms/'.$value['id'])}}" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fas fa-trash"></i></a>
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

<!-- model for update-->
<div id="edit_model_practic" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog"> 
        <div class="modal-content"> 
            <div class="modal-header">
                <h4 class="modal-title mt-0">Edit Terms</h4> 
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div> 
            <div class="modal-body"> 
                <form action ="{{url('terms/update_terms')}}" method="post">
                    <div class="row"> 
                        <div class="col-md-12"> 
                            <div class="form-group">
                                <input type="hidden" name="_token" value = "{{ csrf_token()  }}" > 
                                    <label for="field-1" class="control-label">Terms</label> 
                                        <input type="hidden" id="terms_id" name="terms_id"> 
                                        <input type="text" class="form-control"  name="terms_terms" id="terms_terms"   placeholder="enter here...about"> 
                            </div> 
                            <h6 id="term_term_val"></h6>
                            <div class="form-group">
                               
                                    <label for="field-1" class="control-label">Terms Type</label> 
                                        <input type="text" class="form-control"  name="terms_type" id="terms_type" required placeholder="enter here...about"> 
                            </div> 
                        </div> 
                    </div> 
            </div> 
            <div class="modal-footer"> 
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button> 
                <button type="submit" id="edit_submit" class="btn btn-info waves-effect waves-light" name="save">Edited</button> 
            </div> 
            </form>
        </div> 
    </div>
</div>
<!-- modal end-->

<script >
    $(document).ready(function() {
    $('#edit_model_practic').on('show.bs.modal' , function (event){
        var button = $(event.relatedTarget)
        var  terms_terms = button.data('terms_terms')
        var terms_id = button.data('terms_id')
        var terms_type = button.data('terms_type')
        var modal = $(this)

        modal.find('.modal-body #terms_terms').val(terms_terms);
        modal.find('.modal-body #terms_id').val(terms_id);
        modal.find('.modal-body #terms_type').val(terms_type);

    })
    });
</script>


<!-- modal for add-->
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
                <form action="{{url('terms/add_new_terms')}}" method="POST">
                   @csrf
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter Terms</label>
                            <input type="text" name="new_terms" class="form-control" value="" id="new_terms" >
                        </div>
                        <h6 id="new_terms_val"></h6>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter Terms Type</label>
                            <input type="text" name="terms_type" class="form-control" value="" id="terms_typee" >
                        </div>
                        <h6 id="terms_type_val"></h6>
                    </div>

                    <div class="col-md-12" style="text-align: right;">
                        <button type="submit" class="btn btn-primary waves-effect"  id="btnSubmit">Save</button>
                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
<!-- end of model  -->






<!-- for validation  -->

<script>
$(document).ready(function()
 {
   $("#new_terms_val").hide();
   $("#terms_type_val").hide();
   $("#term_term_val").hide();
   

   

        $("#new_terms").blur(function(){
            username2();
        });
        $("#terms_typee").blur(function(){
            username3();
        });
        $("#terms_terms").blur(function(){
            username4();
        });
       
        
       
        function username2(){
          var k = $("#new_terms").val();
          var regexOnlyNumbers=/^[0-9]+$/;
          if(k.length==""||regexOnlyNumbers.test(k) != true){
            $("#new_terms_val").show();
            $("#new_terms_val").html("Please input numbers");
            $("#new_terms_val").focus();
            $("#new_terms_val").css("color","red");

                err_new_terms=false;
                    return false;
          }
          else{
                err_new_terms=true;
              $("#new_terms_val").hide();
              
          }
        }

        function username3(){
          var p = $("#terms_typee").val();
          if(p.length==""){
            $("#terms_type_val").show();
            $("#terms_type_val").html("Please input the Terms");
            $("#terms_type_val").focus();
            $("#terms_type_val").css("color","red");

                err_terms_type=false;
                    return false;
          }
          else{
                err_terms_type=true;
              $("#terms_type_val").hide();
              
          }
        }

        function username4(){
          var k = $("#terms_terms").val();
          var regexOnlyNumbers=/^[0-9]+$/;
          if(k.length==""||regexOnlyNumbers.test(k) != true){
            $("#term_term_val").show();
            $("#term_term_val").html("Please input numbers");
            $("#term_term_val").focus();
            $("#term_term_val").css("color","red");

                err_terms_terms=false;
                    return false;
          }
          else{
                err_terms_terms=true;
              $("#term_term_val").hide();
              
          }
        }

       

        

        $("#btnSubmit").click(function(){

        err_new_terms=true;
        err_terms_type=true;

        username2();
        username3();

        if((err_new_terms==true)&&(err_terms_type==true))
        {
            return true;
        }
        else{
            return false;
            
        }

        });

        $("#edit_submit").click(function(){

            err_terms_terms=true;
            err_terms_type_edit=true;
       

        username4();
        
       
        if(err_terms_terms==true)
        {
            return true;
        }
        else{
            return false;
            
        }

        });


  });
    </script>











































































