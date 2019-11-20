<style type="text/css">
    .row {
        margin-right: 0px;
        margin-left: 0px;
    }
    
    .custom-table td,
    .custom-table th {
        padding: 10px 5px !important;
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
                        <li><a href="#">Sales </a></li>
                        <li class="active">customer Estimate</li>
                    </ol>
                </div>
            </div>

           
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="card card-border card-primary">
                        <div class="card-body">
                            <div class="content" style="background-color:lightgrey; padding:20px;">
                                <div class="header">
                                    <h3 class="modal-title mt-0" id="myLargeModalLabel">Create Customer Statement</h3>
                                </div>
                            </div>
                            <div class="form-group">

                                <h4 style="font-style:normal"></h4>
                                <h5 style="font-style:normal; "></h5>
                                <h5 style="font-style:normal "></h5>
                                <h5 style="font-style:normal "></h5>

                            </div> 
                        </div>
                          <form>  
                             <div class="col-md-12">
                                  <div style="float:right;">    
                                    <div class="form-group" id="total">
                                            <label for="">Total Balance for 1 Customer
                                           <h1>Total &nbsp; &nbsp;<i class="fa fa-rupee-sign sz" aria-hidden="true"></i><span id="subtotal-span">0.00</span></h1>
                                    </div>
                                  </div>
                                </div>
                             <div class="col-md-12">
                                  <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="statement_date">Statement Type</label>  
                                           <select class="form-control" name="" id="level_id" >
                                                <option value="" disableSelect >--select--</option>
                                                <option value="transaction_statement" >Trasaction Statemant</option>
                                                <option value="Balance-1">Balance Forward</option>
                                                <option value="Balance-2">Open Item</option>    
                                           </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group" id="statement_date">
                                                <label for="statement_date">Statement Date</label>  
                                                <input type="date" class="form-control" placeholder="Statement Date">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group" id="start_date">
                                            <label for="statrt_date">Start Date</label> 
                                            <input type="date" class="form-control" placeholder="Start Date">    
                                        </div>
                                    </div> 
                                    <div class="col-md-3">
                                        <div class="form-group" id="end_date">
                                            <label for="statrt_date">End Date</label> 
                                            <input type="date" class="form-control" placeholder="Start Date">
                                        </div>
                                    </div> 
                                       <div class="col-md-12">
                                          <div class="row">
                                            <div class="form-group">
                                                <button type="button" class="btn btn-primary" id="apply_btn">Apply</button>
                                            </div>
                                          </div>
                                       </div>   
                                </div>
                        </form>
                         <nav id="table_details">
                    <div class="nav nav-tabs" id="nav-tab" role="tablist" >
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Missing Email Address</a>
                    </div>
                     
            <div class="tab-content" id="nav-tabContent" >
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <table class="table table-striped custom-table">
                            <thead>
                                <tr>
                                    <td style="font-weight:bold;">RECIPANTS</td>
                                    <td></td>
                                    <td style="font-weight:bold;">EMAIL ADDRESS</td>
                                    <td style="font-weight:bold;">BALANCE</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($toReturn['customer_statement'] as $customer_statement)
                                <tr>
                                    <?php $customer_name=DB::table('sales_customers')->where('id',$customer_statement['customer_name'])->first();
                                    // print_r($customer_name);
                                    // exit;
                                     ?>
                                    <td style="font-weight:bold;">{{$customer_name->first_name}}</td>
                                    <td></td>
                                    <td style="font-weight:bold;">{{$customer_name->email_id}}</td>
                                    <td style="font-weight:bold;"></td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                    </table>
                 </div>
             </div>
           </nav>
         </div>
      </div>    
  </div>
</div>

   <script>
        $(document).ready(function(){

            


            $("#level_id").change(function(){
            changeSelect();
        });
            function changeSelect(){
       
        level = $("#level_id").val();
        if(level=="Balance-1"){
            $("#statement_date").show(500);
            $("#end_date").show(500);
             $("#start_date").show(500);
            $("#total").hide(500);
            $("#table_details").hide(500);
        }else if
             (level=="transaction_statement")
             {
            $("#statement_date").show(500);
            $("#start_date").show(500);
             $("#end_date").show(500);
            $("#total").show(500);
             $("#table_details").show(500);
        }else if
            (level=="Balance-2")
            {
             $("#end_date").hide(500);
             $("#total").hide(500);
             $("#start_date").hide(500);
        }
       
    }

       $("#apply_btn").click(function(){
        
        $("#statement_date").toggle(500);
        $("#end_date").toggle(500);
        $("#start_date").toggle(500);
        $("#total").toggle(500);
       });

});
   </script>