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
                    <li><a href="#">purchase </a></li>
                    <li class="active">Recurring Expanses</li>
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
                            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                    <th><input type="checkbox" name="chkall[]" id="selectall" onClick="selectAll(this)" /></th>
                                    <th>Profile Name</th>
                                    <th>Expense Account</th>
                                    <th>Vendor Name</th>
                                    <th>Frequency</th>
                                    <th>Last Expense Date</th>
                                    <th>Next Expense Date</th>
                                    <th>Status</th>
                                    <th>Amount</th>
                                    </tr>
                                </thead>
                               
                            </table>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>


<!-- modal -->

<form action="#" method="POST">
  @csrf
  <!--  Modal content for the above example -->
  <div class="modal fade bs-example-modal-lg recurring-expenses" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title mt-0" id="myLargeModalLabel">New Recurring Expenses</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
                 


          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name" class="form-control" value="" id="name">
                <h6 id="name_val"></h6>
              </div>
            </div>

           

            <div class="col-md-4">
            <div class="form-group row">
              <label class="exampleInputEmail1">Repeat every</label>
                <select class="form-control" name="" id="">
                  <option>Week</option>
                  <option>2 Week </option>
                  <option>2 Month</option>
                  <option></option>
                  <option></option>
                </select>  
            </div>
          </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Start Date</label>
                <input type="date" name="start_date" class="form-control" value="" id="start_date" placeholder="dd/mm/yyyy">
                 <h6 id="start_date_val"></h6>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Ends On</label>
                <input type="date" name="ends_on" class="form-control" value="" id="ends_on" placeholder="dd/mm/yyyy">
                 <h6 id="ends_on_val"></h6>
              </div>
            </div>

           
            <div class="col-md-4">
            <div class="form-group row">
              <label class="exampleInputEmail1">Expense Account</label>
                <select class="form-control" name="product_type" id="product_type">
                  <option>Job of Good Sold</option>
                  <option>Job Casting</option>
                  <option>Material</option>
                  <option>Sub Contractor</option>
                  <option></option>
                </select>  
            </div>
          </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Amount</label>
                <input type="text" name="amount" class="form-control" value="" id="amount">   
              </div>
                <h6 id="amount_val"></h6>
            </div>

           <div class="col-md-4">
            <div class="form-group row">
              <label class="exampleInputEmail1">Paid Through</label>
                <select class="form-control" name="product_type" id="product_type">
                <option>Advance Through</option>
                  <option>Employee Advance</option>
                  <option>Prepaid Expenses</option>
                  <option></option>
                  <option></option>
                </select>  
            </div>
          </div>


           <div class="col-md-4">
            <div class="form-group row">
              <label class="exampleInputEmail1">Vendor Name</label>
                <select class="form-control" name="vendor_name" id="vendor_name">
                  
                  <option></option>
                  <option></option>
                  <option></option>
                  <option></option>
                </select>  
            </div>
              <h6 id="vendor_name_val"></h6>
          </div>


            <div class="col-md-4">
            <div class="form-group row">
              <label class="exampleInputEmail1">Customer Name</label>
                <select class="form-control" name="product_type" id="product_type">
                  <option>-Select-</option>
                  <option></option>
                  <option></option>
                  <option></option>
                  <option></option>
                </select>  
            </div>
          </div>

           <div class="col-md-12">
            <div class="form-group">
                <label class="notes">Notes</label>
                <textarea class="form-control" rows="3" id="notes" name="notes" required></textarea>
            </div>
           </div>
       </div>
       
        <hr/>
                <div class="col-md-12" style="text-align: right;">
                    <button type="submit" class="btn btn-primary waves-effect" id="btn">Save</button>
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div>
    </div><!-- /.modal-dialog -->    
</div><!-- /.modal -->



<script>
$(document).ready(function(){
    $("#name_val").hide();
    $("#vendor_name_val").hide();
    $("#start_date_val").hide();
    $("#ends_on_val").hide();
    $("#amount_val").hide();


    var err_name_val=true;
    var err_vendor_name_val=true;
    var err_start_date_val=true;
    var err_amount_val=true;
    var err_ends_on_val=true;


    $("#name").blur(function(){
        name_f();
    });
    function name_f(){
        var m = $("#name").val();
        

        if(m.length==""){

        $("#name_val").show();
        $("#name_val").html("This field is required ");
        $("#name_val").focus();
        $("#name_val").css("color","red");

        err_name_val=false;
            return false;
        }
        else{
            err_name_val=true;
            $("#email_val").hide();
        }
    }


    $("#vendor_name").blur(function(){
        vendor_name_f();
    });
    function  vendor_name_f(){

        var d = $("#vendor_name").val();

        if(d.length==""){
            $("#vendor_name_val").show();
            $("#vendor_name_val").html("This field is required ");
            $("#vendor_name_val").focus();
            $("#vendor_name_val").css("color","red");

            err_vendor_name_val=false;
            return false;
        }
        else{
           err_vendor_name_val=true;
            $("#vendor_name_val").hide();
        }
    }

    $('#start_date').blur(function () {
        start_date_f();
    });
    function start_date_f()
    {
        
        var k=$("#start_date").val();
       
        if(k.length=="")
        {
            
            $("#start_date_val").show();
            $("#start_date_val").html("This field is required");
            $("#start_date_val").focus();
            $("#start_date_val").css("color","red");
            err_start_date_val=false;
        }
        else
        {
            err_start_date_val=true;
            $("#start_date_val").hide();
        }  
    }

     $('#ends_on').blur(function () {
        ends_on_f();
    });
    function ends_on_f()
    {
        
        var o=$("#ends_on").val();
       
        if(o.length=="")
        {
            
            $("#ends_on_val").show();
            $("#ends_on_val").html("This field is required");
            $("#ends_on_val").focus();
            $("#ends_on_val").css("color","red");
            err_ends_on_val=false;
        }
        else
        {
            err_ends_on_val=true;
            $("#ends_on_val").hide();
        }  
    }


     $('#amount').blur(function () {
        amount_f();
    });
    function amount_f()
    {
        
        var b=$("#amount").val();
        var regexOnlyNumbers=/^[0-9]+$/;
        if(b=="" || regexOnlyNumbers.test(b) != true)
        {
            
            $("#amount_val").show();
            $("#amount_val").html("Please enter a valid number");
            $("#amount_val").focus();
            $("#amount_val").css("color","red");
            err_amount_val=false;
        }
        else
        {
            err_amount_val=true;
            $("#amount_val").hide();
        }  
    }



    $("#btn").click(function(){
     err_name_val=true;
     err_vendor_name_val=true;
     err_start_date_val=true;
     err_amount_val=true;
     err_ends_on_val=true;

        
        name_f();
        vendor_name_f();
        start_date_f();
        ends_on_f();
        amount_f();

        if((err_name_val==true)&&(err_vendor_name_va==true)&&(err_start_date_val==true)&&(err_amount_val==true)&&(err_ends_on_val==true))
        {
            return true;
        }
        else{
            return false;
        }
    });
});
</script>