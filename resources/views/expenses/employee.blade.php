<style>
.emp-detail{
    float:left;
    width:32%;
    margin-left:1%;

}
.display-detail{
    float:left;
    width:48%;
    margin-left:1%;

}
.add-detail{
    float:left;
    width:24%;
    margin-left:1%;

}
</style>
<!-- Start content -->                   
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <!--<h4 class="pull-left page-title">Other Charts</h4>-->
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Employee</a></li>
                                    <li class="active">All Employee</li>
                                </ol>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card card-border card-primary">
                                    <div class="card-header"> 
                                        <button type="button" class="btn btn-inverse btn-rounded waves-effect waves-light m-b-5" data-toggle="modal" data-target=".employee" style="float:right;">Add an Employee</button>
                                    </div> 
                                    <div class="card-body"> 
                                       
                                    </div><!--card body--> 
                                </div><!--card border-->
                            </div><!--col-->
                        </div><!--end of row-->
                    </div><!--end of container fluid-->
                </div><!--end of content-->
            </div><!--end of content page-->




<!---------------------------------------modal start-------------------------------------------->                   
<div class="modal employee" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title mt-0" id="myLargeModalLabel"><i class="fa fa-users"></i>&nbsp;&nbsp;Employee</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="padding: 0px 0;">
                    <div class="row">
                        <div class="col-md-12"><br>
                            <div class="form-group emp-detail">
                                <label for="">Title</label>
                                    <div class="input-group">
                                        <input type="" class="form-control" id="" placeholder="">
                                    </div>
                                </div><!--form-group-->

                                <div class="form-group emp-detail">
                                <label for="">First Name</label>
                                    <div class="input-group">
                                        <input type="" class="form-control" id="" placeholder="First Name">
                                    </div>
                                </div><!--form-group-->

                                <div class="form-group emp-detail">
                                <label for="">Last Name</label>
                                    <div class="input-group">
                                        <input type="" class="form-control" id="" placeholder="Last Name">
                                    </div>
                                </div><!--form-group-->

                            <div class="form-group display-detail">
                                <label for="">Display Name as</label>
                                    <div class="input-group">
                                        <input type="" class="form-control" id="" placeholder="">
                                    </div>
                                </div><!--form-group-->

                            <div class="form-group display-detail">
                                <label for="">Email Id.</label>
                                    <div class="input-group">
                                        <input type="" class="form-control" id="" placeholder="eg.example@gmail.com">
                                    </div>
                                </div><!--form-group-->

                            <div class="form-group display-detail">
                                <label for="">Phone No.</label>
                                    <div class="input-group">
                                    <input type="text" placeholder="" data-mask="(999) 999-9999" class="form-control">
                                    </div>
                                </div><!--form-group-->

                            <div class="form-group display-detail">
                                <label for="">Mobile No.</label>
                                    <div class="input-group">
                                    <input type="text" placeholder="" data-mask="(999) 999-9999" class="form-control">
                                    </div>
                                </div><!--form-group-->

                            <div class="form-group">
                                <label for="">Address</label>
                                    <div class="input-group">
                                        <textarea class="form-control" rows="5" id="example-textarea-input"></textarea>
                                    </div>
                                </div><!--form-group-->

                            <div class="form-group add-detail">
                                    <div class="input-group">
                                        <input type="" class="form-control" id="" placeholder="City/Town">
                                    </div>
                                </div><!--form-group-->  

                                <div class="form-group add-detail">
                                    <div class="input-group">
                                        <input type="" class="form-control" id="" placeholder="State">
                                    </div>
                                </div><!--form-group-->

                                <div class="form-group add-detail">
                                    <div class="input-group">
                                        <input type="" class="form-control" id="" placeholder="PIN Code">
                                    </div>
                                </div><!--form-group-->

                                <div class="form-group add-detail">
                                    <div class="input-group">
                                        <input type="" class="form-control" id="" placeholder="Country">
                                    </div>
                                </div><!--form-group-->

                            <div class="form-group display-detail">
                                <label for="">Billing Rate</label>
                                    <div class="input-group">
                                        <input type="" class="form-control" id="" placeholder="">
                                    </div>
                                </div><!--form-group--> 

                                <div class="form-group display-detail"><br><br>
                                    <div class="checkbox checkbox-info">
                                        <input id="checkbox4" type="checkbox">
                                        <label for="checkbox4">
                                            Billable by default
                                        </label>
                                    </div>
                                </div><!--form-group--> 

                            <div class="form-group emp-detail">
                                <label for="">Employee ID No.</label>
                                    <div class="input-group">
                                        <input type="" class="form-control" id="" placeholder="Employee ID No.">
                                    </div>
                                </div><!--form-group-->

                                <div class="form-group emp-detail">
                                <label for="">Employee ID</label>
                                    <div class="input-group">
                                        <input type="" class="form-control" id="" placeholder="First Name">
                                    </div>
                                </div><!--form-group-->

                                <div class="form-group emp-detail">
                                <label for="">Gender</label>
                                    <select class="form-control" placeholder="gjkghjh">
                                            <option>--select--</option>
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                        </select>
                                    </div>
                                </div><!--form-group--> 


                                <div class="form-group emp-detail">
                                <label for="">Hire Date</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
                                           
                                        </div>
                                </div><!--form-group-->

                            <div class="form-group emp-detail">
                                <label for="">Release Date</label>
                                    <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
                                       
                                </div><!--form-group-->

                                <div class="form-group emp-detail">
                                    <label for="">Date of Birth</label>
                                        <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
                                            
                                </div><!--form-group--> 
                            </div>
                        </div>
                <hr>  
            <div style="width:100%; padding: 0.5px;background: #6f6f6f;"></div><br>
                <div class="d-print-none">
                    <div class="pull-left">
                        <a href="#" class="btn btn-primary waves-effect waves-light">Save & Close</a>
                    </div>
                    <div class="pull-right">
                        <a href="#" class="btn btn-secondary waves-effect waves-light">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-----------------------------------------------------------end of modal-------------------------------------------->
       
