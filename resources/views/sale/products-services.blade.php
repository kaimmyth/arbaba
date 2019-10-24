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
            <li class="active">Products</li>
          </ol>
        </div>
      </div>



      <div class="row">
        <div class="col-lg-12">
         <div class="card">
          <div class="row">
            <div class="col-md-12">
              <div class="col-md-12" style="text-align: right; margin-bottom: 4px;">
                <button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">New</button>
              </div>

              <div class="tab-content colm">
                <div class="tab-pane show active" id="home-2" role="tabpanel" aria-labelledby="home-tab-2" style="">
                 <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                  <thead>
                    <tr>
                      <th><input type="checkbox" name="chkall[]" id="selectall" onClick="selectAll(this)" /></th>
                      <th>Name</th>
                      <th>SKU</th>
                      <th>HSN/SAC</th>
                      <th>Type</th>
                      <th>Sales Description</th>
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
                      <td>{{$items['sku']}}</td>
                      <td>{{$items['hsn_code']}}</td>
                      <td>{{$items['sac_code']}}</td>
                      <td>{{$items['category']}}</td>
                      <td>{{$items['description']}}</td>
                      <td>p{{$items['cost']}}</td>
                       
                      <td style="color: #0077C5; font-weight: 600; cursor: pointer;">Edit <i class="fa fa-caret-down" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black; font-size: 15px;"></i>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">Make Inactive</a>
                          <a class="dropdown-item" href="#">Run Report</a>
                          <a class="dropdown-item" href="#">Duplicate</a>
                        </div>
                        <a href="{{url('sale/products-and-services/delete/'.$items['id'])}}" onclick="return confirm('Are you sure you want to delete this item?');">Delete <i class="fas fa-trash"></i></a>
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
</div>
</div>



<form action="{{url('sale/products-and-services/add')}}" method="POST">
  @csrf
  <!--  Modal content for the above example -->
  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
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
                <select class="form-control">
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
                <select name="income_acount" class="form-control" id="income_acount">

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
          <button type="submit" class="btn btn-primary waves-effect" id="btn">Save</button>
          <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
        </div>
      </div><!-- /.modal-content -->

    </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
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
            $("#name_val").html("**please input the user name");
            $("#name_val").focus();
            $("#name_val").css("color","red");

              err_name=false;
              return false;
          }else{

            $("#name_val").hide();
          }

            if((k.length<3)||(k.length>10)){

            $("#name_val").show();
            $("#name_val").html("**user name must be between 3 to 10");
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
            $("#sku_val").html("**this field is required");
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
            $("#hsn_val").html("**please input HSN ");
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
            $("#sac_val").html("**please input sac code ");
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

          var l = $("#unit").val();

          if(l.length==""){

            $("#unit_val").show();
            $("#unit_val").html("**please input unit  ");
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
            $("#category_val").html("**please input category ");
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
            $("#cost_val").html("**please input numbers between 0-9 ");
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
            $("#sale_price_val").html("**please input numbers between 0-9 ");
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
            $("#inclusive_tax_val").html("**plesee check the button ");
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
// $(document).ready(function(){
     

//      $("#btn").click(function(){

//      if((err_name==true)&&(err_sku==true)&&(err_hsn==true)&&(err_sac==true)&&(err_unit==true)&&(err_category==true)&&(err_cost==true)&&(err_sale_price==true))
//      {
//       return true;
//      }else{
//       return false;

//      }

//      });
      
// });


     
    </script>