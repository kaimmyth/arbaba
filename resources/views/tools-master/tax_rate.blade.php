
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
                                        <input type="text" class="form-control"  name="tax_name" id="tax_name"  required placeholder="enter here...about" required> 
                            </div> 
                            <div class="form-group">
                                    <label for="field-1" class="control-label">Tax Type</label> 
                                        <input type="text" class="form-control"  name="tax_type" id="tax_type"  required placeholder="enter here...about" required> 
                            </div>
                            <div class="form-group">
                                    <label for="field-1" class="control-label">Tax Discription</label> 
                                        <input type="text" class="form-control"  name="tax_discription" id="tax_discription"  required placeholder="enter here...about" required> 
                            </div>
                            <div class="form-group">
                                    <label for="field-1" class="control-label">Tax Validity</label> 
                                        <input type="text" class="form-control"  name="tax_validity" id="tax_validity"  required placeholder="enter here...about" required> 
                            </div>
                            <div class="form-group">
                                    <label for="field-1" class="control-label">Tax Rate</label> 
                                        <input type="text" class="form-control"  name="tax_rate" id="tax_rate"  required placeholder="enter here...about" required> 
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
                            <input type="text" name="tax_name" class="form-control" value="" id="tax_name_add" >
                        </div>
                        <h6 id="tax_name_val"></h6>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter Tax Type</label>
                            <input type="text" name="tax_type" class="form-control" value="" id="tax_type_add" >
                        </div>
                        <h6 id="tax_type_val"></h6>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter Tax Discription</label>
                            <input type="text" name="tax_discription" class="form-control" value="" id="tax_discription_add" >
                        </div>
                        <h6 id="tax_discription_val"></h6>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter Tax Validity</label>
                            <input type="text" name="tax_validity" class="form-control" value="" id="tax_validity_add_new" >
                        </div>
                        <h6 id="tax_validity_val"></h6>

                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter Tax Rate</label>
                            <input type="text" name="tax_rate" class="form-control" value="" id="tax_rate_add" >
                        </div>
                        <h6 id="tax_rate_val"></h6>
                       
                        
                    </div>

                    <div class="col-md-12" style="text-align: right;">
                        <button type="submit" class="btn btn-primary waves-effect" id="btnSubmit">Save</button>
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
  
   $("#tax_name_val").hide();
   $("#tax_type_val").hide();
   $("#tax_discription_val").hide();
   $("#tax_validity_val").hide();
   $("#tax_rate_val").hide();


   $("#country_name_edit_val").hide();
   

        $("#tax_name_add").blur(function(){
            username1();
        });
        $("#tax_type_add").blur(function(){
            username2();
        });
        $("#tax_discription_add").blur(function(){
            username3();
        });
        $("#tax_validity_add_new").blur(function(){
            username4();
        });
        $("#tax_rate_add").blur(function(){
            username5();
        });



        $("#country_name").blur(function(){
            username4();
        });
       
        
        function username1(){
          var p = $("#tax_name_add").val();
          if(p.length==""){
            $("#tax_name_val").show();
            $("#tax_name_val").html("Please input Tax Name");
            $("#tax_name_val").focus();
            $("#tax_name_val").css("color","red");

                err_add_tax_name=false;
                    return false;
          }
          else{
                err_add_tax_name=true;
              $("#tax_name_val").hide();
              
          }
        }

        function username2(){
          var p = $("#tax_type_add").val();
          if(p.length==""){
            $("#tax_type_val").show();
            $("#tax_type_val").html("Please input Tax Type");
            $("#tax_typee_val").focus();
            $("#tax_type_val").css("color","red");

                err_add_tax_type=false;
                    return false;
          }
          else{
                err_add_tax_type=true;
              $("#tax_type_val").hide();
              
          }
        }

        function username3(){
          var p = $("#tax_discription_add").val();
          if(p.length==""){
            $("#tax_discription_val").show();
            $("#tax_discription_val").html("Please input Tax Discription");
            $("#tax_discription_val").focus();
            $("#tax_discription_val").css("color","red");

                err_add_tax_discription=false;
                    return false;
          }
          else{
                err_add_tax_discription=true;
              $("#tax_discription_val").hide();
              
          }
        }

        function username4(){
          var p = $("#tax_validity_add_new").val();
          if(p.length==""){
            $("#tax_validity_val").show();
            $("#tax_validity_val").html("Please input Tax Validity");
            $("#tax_validity_val").focus();
            $("#tax_validity_val").css("color","red");

                err_add_tax_validity=false;
                    return false;
          }
          else{
                err_add_tax_validity=true;
              $("#tax_validity_val").hide();
              
          }
        }

        function username5(){
          var p = $("#tax_rate_add").val();
          var regexOnlyNumbers=/^[0-9]+$/;
          if(p.length==""||regexOnlyNumbers.test(p) != true){
            $("#tax_rate_val").show();
            $("#tax_rate_val").html("Please input tax Rate");
            $("#tax_rate_val").focus();
            $("#tax_rate_val").css("color","red");

                err_add_tax_rate=false;
                    return false;
          }
          else{
                err_add_tax_rate=true;
              $("#tax_rate_val").hide();
              
          }
        }








         


        $("#btnSubmit").click(function(){
        err_add_tax_name=true;
        err_add_tax_type=true;
        err_add_tax_discription=true;
        err_add_tax_discription=true;
        err_add_tax_rate=true;
        username1();
        username2();
        username3();
        username4();
        username5();
        if((err_add_tax_name==true)&&(err_add_tax_type==true)&&(err_add_tax_discription==true)&&(err_add_tax_discription==true)&&(err_add_tax_rate==true))
        {
            return true;
        }
        else{
            return false;
        }
        });

       


  });
    </script>















































































