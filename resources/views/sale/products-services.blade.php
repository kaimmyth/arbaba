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
                    <li class="active">Products & Services</li>
                </ol>
                </div>
            </div>



            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-border card-primary">
                        <div class="card-header">
                            <button type="button" class="btn btn-inverse btn-rounded waves-effect waves-light m-b-5" data-toggle="modal" onclick="addProductsAndServices();" style="float:right;">Add New Products & Services</button>
                        </div> 
                        <div class="card-body"> 
                            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                    <th><input type="checkbox" name="chkall[]" id="selectall" onClick="selectAll(this)" /></th>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>SKU</th>
                                    <th>HSN/SAC</th>
                                    <th>Type</th>
                                    <th>Sales Price</th>
                                    <th>Cost</th>
                                    <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                @foreach ($toReturn as $items)
                                    <tr>
                                    <td>&nbsp;<input type="checkbox" name="ids[]" value="" /></td>
                                    <td>{{$items['name']}}</td>
                                    <td>{{$items['product_type']}}</td>
                                    <td>{{$items['sku']}}</td>
                                    <td>{{$items['hsn_code']}}</td>
                                    <td>{{$items['sac_code']}}</td>
                                    <td>{{$items['category']}}</td>
                                    <td>{{$items['cost']}}</td>
                                    <td>
                                        <a href="javascript:void();" onclick="viewEditProductsAndServices('view', {{$items['id']}});"><i class="fas fa-eye"></i></a> &nbsp; 
                                        <a href="javascript:void();" onclick="viewEditProductsAndServices('edit', {{$items['id']}});"><i class="fas fa-pencil-alt"></i></a> &nbsp; 
                                        <a href="{{url('sale/products-and-services/delete/'.$items['id'])}}" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fas fa-trash"></i></a>
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



<form action="{{url('sale/products-and-services/add-edit')}}" method="POST" id="products-and-services-forms">
  @csrf
  <!--  Modal content for the above example -->
  <div class="modal fade bs-example-modal-lg products-and-services" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
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
                <select class="form-control" name="product_type" id="product_type">
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
                <input type="text" name="name" class="form-control" value="" id="name">
                <h6 id="name_val"></h6>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputEmail1">SKU</label>
                <input type="text" name="sku" class="form-control" value="" id="sku">
                 <h6 id="sku_val"></h6>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputEmail1">HSN code</label>
                <input type="text" name="hsn_code" class="form-control" value="" id="hsn_code">
                 <h6 id="hsn_val"></h6>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputEmail1">SAC code</label>
                <input type="text" name="sac_code" class="form-control" value="" id="sac_code">
                 <h6 id="sac_val"></h6>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Unit</label>
                <input type="text" name="unit" class="form-control" value="" id="unit">
                 <h6 id="unit_val"></h6>
              </div>
            </div>


            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Category</label>
                <input type="text" name="category" class="form-control" value="" id="category">
                 <h6 id="category_val"></h6>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Sale price/Rate</label>
                <input type="text" name="sale_price" class="form-control" value="" id="sale_price">
                 <h6 id="sale_price_val"></h6>
              </div>
            </div>


            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Income Account</label>
                <select name="income_account" class="form-control" id="income_account">

                  <option>-Select-</option>
                   <option>fgjnfgn</option>
                    <option>cgjngn</option>
                </select>
              </div>
            </div>


            <div class="col-md-4">
              <div class="checkbox checkbox-primary">
                <input id="inclusive_tax" type="checkbox" name="inclusive_tax">
                <label for="checkbox1">
                  Inclusive of tax
                </label>
                <h6 id="inclusive_tax_val"></h6>
              </div>
            </div>


            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Tax</label>
                <select class="form-control" name="tax" id="tax">
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
                <textarea name="description" class="form-control" rows="2" id="description"></textarea>
                <h6 id="description_val"></h6>
              </div>
            </div>


            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Purchasing information</label>
                <textarea name="purchasing_information" class="form-control" rows="2" id="purchasing_information"></textarea>
                 <h6 id="purchasing_information_val"></h6>
              </div>
            </div>


            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Cost</label>
                <input type="text" name="cost" class="form-control" value="" id="cost">
                <h6 id="cost_val"></h6>
              </div>
            </div>



            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Expense account</label>
                <select name="expense_account" class="form-control" id="expense_account">
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
                <select class="form-control" name="purchase_tax" id="purchase_tax">
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
                <input type="text" class="form-control" value="" id="reverse_change" name="reverse_change">
                <h6 id="reverse_change_val"></h6>
              </div>
            </div>


            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Preferred Supplier</label>
                <select class="form-control" name="preferred_supplier" id="preferred_supplier">
                  <option>-Select-</option>
                </select>
              </div>
            </div>

          </div>



        </div>
        <div class="col-md-12" style="text-align: right;">
            <!-- hidden inputs -->
            <input type="text" name="hidden_input_id" value="NA" hidden>
            <input type="text" name="hidden_input_purpose" value="add" hidden>
            <!-- hidden inputs -->
            <button type="submit" class="btn btn-primary waves-effect" id="btn">Save</button>
            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
        </div>
      </div><!-- /.modal-content -->

    </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


<!-- view model start -->
<div class="modal products-and-services-details-model fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title mt-0" id="myLargeModalLabel">Supplier Details</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="padding: 0px 0;">
                <table class="table table-bordered table-striped" border="0">
                    <tbody>
                        <tr style="border: none;">
                            <td><p><strong>ID</strong></p></td>
                            <td><p id="v_id"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Product Type</strong></p></td>
                            <td><p id="v_product_type"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>SKU</strong></p></td>
                            <td><p id="v_sku"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Name</strong></p></td>
                            <td><p id="v_name"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>HSN Code</strong></p></td>
                            <td><p id="v_hsn_code"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>SAC Code</strong></p></td>
                            <td><p id="v_sac_code"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Unit</strong></p></td>
                            <td><p id="v_unit"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Category</strong></p></td>
                            <td><p id="v_category"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Sale Price</strong></p></td>
                            <td><p id="v_sale_price"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Income Account</strong></p></td>
                            <td><p id="v_income_account"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Inclusive Taxes</strong></p></td>
                            <td><p id="v_inclusive_tax"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Tax</strong></p></td>
                            <td><p id="v_tax"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Description</strong></p></td>
                            <td><p id="v_description"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Purchasing Information</strong></p></td>
                            <td><p id="v_purchasing_information"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Cost</strong></p></td>
                            <td><p id="v_cost"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Expense Account</strong></p></td>
                            <td><p id="v_expense_account"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Purchase Tax</strong></p></td>
                            <td><p id="v_purchase_tax"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Reverse Change</strong></p></td>
                            <td><p id="v_reverse_change"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Preferred Supplier</strong></p></td>
                            <td><p id="v_preferred_supplier"></p></td>
                        </tr>
                        <tr style="border: none;">
                            <td><p><strong>Created At</strong></p></td>
                            <td><p id="v_created_at"></p></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- end model -->




    <script>
      
      $("document").ready(function(){

        $("#name_val").hide();
        $("#sku_val").hide();
        $("#hsn_val").hide();
        $("#sac_val").hide();
        $("#unit_val").hide();
        $("#category_val").hide();
        $("#cost_val").hide();
        $("#sale_price_val").hide();
        $("#description_val").hide();
        $("#reverse_change_val").hide();
        $("#inclusive_tax_val").hide();
 
        var err_name =true;
        var err_sku =true;
        var err_hsn =true;
        var err_sac = true;
        var err_unit=true;
        var err_category=true;
        var err_cost=true;
        var err_sale_price = true;
        var err_inclusive_tax =true;

        $("#name").blur(function(){

            username1();
        });
        function username1(){

          var k = $("#name").val();

          if(k.length==""){

            $("#name_val").show();
            $("#name_val").html("please input the user name");
            $("#name_val").focus();
            $("#name_val").css("color","red");

              err_name=false;
              return false;
          }else{

            $("#name_val").hide();
          }

            if((k.length<2)||(k.length>20)){

            $("#name_val").show();
            $("#name_val").html("User name must be between 2 to 20");
            $("#name_val").focus();
            $("#name_val").css("color","red");

              err_name=false;
              return false;
          }else{
            name_val_r=true;
            $("#name_val").hide();
          } 
        }
       

        $("#sku").blur(function(){

            username2();
        });
        function username2(){

          var s = $("#sku").val();

          if(s.length==""){

            $("#sku_val").show();
            $("#sku_val").html("This field is required");
            $("#sku_val").focus();
            $("#sku_val").css("color","red");

              err_sku=false;
              return false;
          }else{
            err_sku=true;
            $("#sku_val").hide();
          }
        }


             $("#hsn_code").blur(function(){

            username3();
        });
        function username3(){

          var h = $("#hsn_code").val();

          if(h.length==""){

            $("#hsn_val").show();
            $("#hsn_val").html("Please input HSN ");
            $("#hsn_val").focus();
            $("#hsn_val").css("color","red");

              err_hsn=false;
              return false;
          }else{
            err_hsn=true;
            $("#sku_val").hide();
          }
        }



             $("#sac_code").blur(function(){

            username4();
        });
        function username4(){

          var j = $("#sac_code").val();

          if(j.length==""){

            $("#sac_val").show();
            $("#sac_val").html("Please input sac code ");
            $("#sac_val").focus();
            $("#sac_val").css("color","red");

              err_sac=false;
              return false;
          }else{
            err_sac=true;
            $("#sac_val").hide();
          }
        }


         $("#unit").blur(function(){

            username5();
        });
        function username5(){
          var regexOnlyNumbers=/^[0-9]+$/;
          var l = $("#unit").val();

         if((l=="")|| regexOnlyNumbers.test(l)!=true){

            $("#unit_val").show();
            $("#unit_val").html("Please input numbers  ");
            $("#unit_val").focus();
            $("#unit_val").css("color","red");

              err_unit=false;
              return false;
          }else{
            err_unit=true;
            $("#unit_val").hide();
          }
        }
       

           $("#category").blur(function(){

            username6();
        });
        function username6(){

          var l = $("#category").val();

          if(l.length==""){

            $("#category_val").show();
            $("#category_val").html("Please input category ");
            $("#category_val").focus();
            $("#category_val").css("color","red");

              err_category=false;
              return false;
          }else{
            err_categoryt=true;
            $("#category_val").hide();
          }
        }

         $("#cost").blur(function(){

            username7();
        });
        function username7(){

          var q = $("#cost").val();

          var regexOnlyNumbers=/^[0-9]+$/;
          if((q=="")|| regexOnlyNumbers.test(q)!=true){

            $("#cost_val").show();
            $("#cost_val").html("Please input numbers between 0-9 ");
            $("#cost_val").focus();
            $("#cost_val").css("color","red");

              err_cost=false;
              return false;
          }else{
            err_cost=true;
            $("#cost_val").hide();
          }
        }



         $("#sale_price").blur(function(){

            username8();
        });
        function username8(){
          var z = $("#sale_price").val();

          var regexOnlyNumbers=/^[0-9]+$/;
          if((z=="")|| regexOnlyNumbers.test(z)!=true){

            $("#sale_price_val").show();
            $("#sale_price_val").html("Please input numbers between 0-9 ");
            $("#sale_price_val").focus();
            $("#sale_price_val").css("color","red");

              err_sale_price=false;
              return false;
          }else{
            err_sale_price=true;
            $("#sale_price_val").hide();
          }
        }
                

         $("#inclusive_tax").change(function(){
             username9();
        });
        function username9(){
          
          if($("#inclusive_tax").prop("checked") == false){

            $("#inclusive_tax_val").show();
            $("#inclusive_tax_val").html("Plesee check the button ");
            $("#inclusive_tax_val").focus();
            $("#inclusive_tax_val").css("color","red");

              err_sale_price=false;
              return false;
          }
           else if($("#inclusive_tax").prop("checked") == true){
            $("#inclusive_tax_val").hide();

          }
        }


     $("#btn").click(function(){

      err_name=true;
      err_sku=true;
      err_hsn=true;
      err_sac=true;
      err_unit=true;
      err_category=true;
      err_cost=true;
      err_sale_price=true;


      username1();
      username2();
      username3();
      username4();
      username5();
      username6();
      username7();
      username8();
      username9();

     if((err_name==true)&&(err_sku==true)&&(err_hsn==true)&&(err_sac==true)&&(err_unit==true)&&(err_category==true)&&(err_cost==true)&&(err_sale_price==true))
     {
        return true;
     }else{
        return false;

     }

     });
         




  });

     
    </script>

<script>
    // to get suppliers details from controller through ajax, purpose = edit & view
    //add supplier
    function addProductsAndServices(){
        resetProductsAndServicesForms();
        $(".products-and-services").modal('show');
    }
    // reset supplier form fields
    function resetProductsAndServicesForms(){
        // reset all fileds in expenses form model
        document.getElementById("products-and-services-forms").reset();
        // // assigning hidden inputs
        $("input[name='hidden_input_id'").val("NA");
        $("input[name='hidden_input_purpose'").val("add");
    }
    function viewEditProductsAndServices(purpose, id){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "{{url('sale/products-and-services/get_products_and_services_details')}}" + "/" + id,
            method: "GET",
            contentType: 'application/json',
            dataType: "json",
            beforeSend: function(data){
                $("#loader1").css("display","block");
            },
            error: function(xhr){
                alert("error"+xhr.status+", "+xhr.statusText);
            },
            success: function (data) {
                console.log(data);
                if(purpose=="view")
                {
                    document.getElementById("v_id").innerHTML = data.id;
                    document.getElementById("v_product_type").innerHTML = data.product_type;
                    document.getElementById("v_name").innerHTML = data.name;
                    document.getElementById("v_sku").innerHTML = data.sku;
                    document.getElementById("v_hsn_code").innerHTML = data.hsn_code;
                    document.getElementById("v_sac_code").innerHTML = data.sac_code;
                    document.getElementById("v_unit").innerHTML = data.unit;
                    document.getElementById("v_category").innerHTML = data.category;
                    document.getElementById("v_sale_price").innerHTML = data.sale_price;
                    document.getElementById("v_income_account").innerHTML = data.income_account;
                    document.getElementById("v_inclusive_tax").innerHTML = data.inclusive_tax;
                    document.getElementById("v_tax").innerHTML = data.tax;
                    document.getElementById("v_description").innerHTML = data.description;
                    document.getElementById("v_purchasing_information").innerHTML = data.purchasing_information;
                    document.getElementById("v_cost").innerHTML = data.cost;
                    document.getElementById("v_expense_account").innerHTML = data.expense_account;
                    document.getElementById("v_purchase_tax").innerHTML = data.purchase_tax;
                    document.getElementById("v_reverse_change").innerHTML = data.reverse_change;
                    document.getElementById("v_preferred_supplier").innerHTML = data.preferred_supplier;
                    document.getElementById("v_created_at").innerHTML = data.created_at;
                    $('.products-and-services-details-model').modal('show');
                }
                else if(purpose=="edit"){
                    resetProductsAndServicesForms(); // reseting forms
                    $("#title").val(data.title);
                    $("#name").val(data.name);
                    $("#sku").val(data.sku);
                    $("#hsn_code").val(data.hsn_code);
                    $("#sac_code").val(data.sac_code);
                    $("#unit").val(data.unit);
                    $("#category").val(data.category);
                    $("#sale_price").val(data.sale_price);
                    $("#income_account").val(data.income_account);
                    $("#inclusive_tax").val(data.inclusive_tax);
                    $("#tax").val(data.tax);
                    $("#description").val(data.description);
                    $("#purchasing_information").val(data.purchasing_information);
                    $("#cost").val(data.cost);
                    $("#expense_account").val(data.expense_account);
                    $("#purchase_tax").val(data.purchase_tax);
                    $("#reverse_change").val(data.reverse_change);
                    $("#preferred_supplier").val(data.preferred_supplier);
                    
                    // assigning hidden inputs
                    $("input[name='hidden_input_id'").val(data.id);
                    $("input[name='hidden_input_purpose'").val("edit");
    
                    $('.products-and-services').modal('show'); // expense insert form model
                }
                $("#loader1").css("display","none");
            }
        });
    }
</script>