<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/moltran/blue/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jun 2019 12:15:19 GMT -->
<head>
        <meta charset="utf-8" />
        <title>CRM</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon_1.ico">

        <link href="../plugins/sweetalert2/sweetalert2.css" rel="stylesheet" type="text/css">

        <!-- Custom Files -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>
		<style>
		.form-control{
	border: 1px solid #A0A0A0;
	width: 84%;
}
.active, .btn:hover {
  background-color: #000000;
  color: white;
}
		.control-label{
	font-family: inherit;
}
		</style>
        
    </head>


    <body class="fixed-left">
        
        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="index.html" class="logo"><i class="md md-terrain"></i> <span>CRM</span></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <ul class="list-inline menu-left mb-0">
                            <li class="float-left">
                                <a href="#" class="button-menu-mobile open-left">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </li>
                            <li class="hide-phone float-left">
                                <form role="search" class="navbar-form">
                                    <input type="text" placeholder="Type here for search..." class="form-control search-bar">
                                    <a href="#" class="btn btn-search"><i class="fa fa-search"></i></a>
                                </form>
                            </li>
                        </ul>
    
                        <ul class="nav navbar-right float-right list-inline">
                            <li class="dropdown d-none d-sm-block">
                                <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                    <i class="md md-notifications"></i> <span class="badge badge-pill badge-xs badge-danger">3</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-lg">
                                    <li class="text-center notifi-title">Notification</li>
                                    <li class="list-group">
                                       <!-- list item-->
                                       <a href="javascript:void(0);" class="list-group-item">
                                          <div class="media">
                                             <div class="media-left pr-2">
                                                <em class="fa fa-user-plus fa-2x text-info"></em>
                                             </div>
                                             <div class="media-body clearfix">
                                                <div class="media-heading">New user registered</div>
                                                <p class="m-0">
                                                   <small>You have 10 unread messages</small>
                                                </p>
                                             </div>
                                          </div>
                                       </a>
                                       <!-- list item-->
                                        <a href="javascript:void(0);" class="list-group-item">
                                          <div class="media">
                                             <div class="media-left pr-2">
                                                <em class="fa fa-diamond fa-2x text-primary"></em>
                                             </div>
                                             <div class="media-body clearfix">
                                                <div class="media-heading">New settings</div>
                                                <p class="m-0">
                                                   <small>There are new settings available</small>
                                                </p>
                                             </div>
                                          </div>
                                        </a>
                                        <!-- list item-->
                                        <a href="javascript:void(0);" class="list-group-item">
                                          <div class="media">
                                             <div class="media-left pr-2">
                                                <em class="fa fa-bell-o fa-2x text-danger"></em>
                                             </div>
                                             <div class="media-body clearfix">
                                                <div class="media-heading">Updates</div>
                                                <p class="m-0">
                                                   <small>There are
                                                      <span class="text-primary">2</span> new updates available</small>
                                                </p>
                                             </div>
                                          </div>
                                        </a>
                                       <!-- last list item -->
                                        <a href="javascript:void(0);" class="list-group-item">
                                          <small>See all notifications</small>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="d-none d-sm-block">
                                <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="md md-crop-free"></i></a>
                            </li>
                            <li class="d-none d-sm-block">
                                <a href="#" class="right-bar-toggle waves-effect waves-light"><i class="md md-chat"></i></a>
                            </li>
                            <li class="dropdown open">
                                <a href="#" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="assets/images/users/avatar-1.jpg" alt="user-img" class="rounded-circle"> </a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)" class="dropdown-item"><i class="md md-face-unlock mr-2"></i> Profile</a></li>
                                    <li><a href="javascript:void(0)" class="dropdown-item"><i class="md md-settings mr-2"></i> Settings</a></li>
                                    <li><a href="javascript:void(0)" class="dropdown-item"><i class="md md-lock mr-2"></i> Lock screen</a></li>
                                    <li><a href="javascript:void(0)" class="dropdown-item"><i class="md md-settings-power mr-2"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- Top Bar End -->

            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <div class="user-details">
                        <div class="pull-left">
                            <img src="assets/images/users/avatar-1.jpg" alt="" class="thumb-md rounded-circle">
                        </div>
                        <div class="user-info">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        John Doe
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)" class="dropdown-item"><i class="md md-face-unlock mr-2"></i> Profile<div class="ripple-wrapper"></div></a></li>
                                    <li><a href="javascript:void(0)" class="dropdown-item"><i class="md md-settings mr-2"></i> Settings</a></li>
                                    <li><a href="javascript:void(0)" class="dropdown-item"><i class="md md-lock mr-2"></i> Lock screen</a></li>
                                    <li><a href="javascript:void(0)" class="dropdown-item"><i class="md md-settings-power mr-2"></i> Logout</a></li>
                                </ul>
                            </div>
                            
                            <p class="text-muted m-0">Administrator</p>
                        </div>
                    </div>
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="index.html" class="waves-effect"><i class="md md-home"></i><span> Dashboard </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-mail"></i><span> Service Agreement </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="mail-inbox.html">Property/Land</a></li>
                                    <li><a href="mail-compose.html">Lease Agreement </a></li>
                                    <li><a href="mail-read.html"> Accounts</a></li>
									 <li><a href="mail-read.html">  Report </a></li>
                                </ul>
                            </li>
							<li>
                                <a href="index.html" class="waves-effect"><i class="md md-home"></i><span> Contact</span></a>
                            </li>

                            <li>
                                <a href="calendar.html" class="waves-effect"><i class="md md-event"></i><span> Setting </span></a>
                            </li>                            
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End --> 
			   <body class="fixed-left">
	<div class="wrapper" style="background-color: #fff;">
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <div class="row"> 							
                    <div class="col-md-10">
                        <div class="card" style="border: 1px #C0C0C0 solid;">
                           <div class="card-header" style="background-color: #29b6f6;">
		                     <h3 class="card-title" style="color:#fff;text-transform: none; font-size:large">Add Your Property</h3></div>
                               <div class="card-body">
							   	 
								
									 <!--Member-->	                                  
									 <div class="form-group row">
										<label class="col-sm-4 control-label">Member<span style="color:red;">*</span> </label>
											<div class="col-sm-8">
												<select class="form-control" style="max-width:350px; border: 1px solid #737373">													
													 <option value="" selected>Select Email List</option>
												</select>
										   </div>
									</div>
									<!--end of Member-->
									 <!--Date -->	                                  
									 <div class="form-group row">
										<label class="col-sm-4 control-label">Date </label>
											<div class="col-md-8">
                                                    <div class="input-group" style="width:85%">
                                                        <input type="email" id="example-input2-group1" name="example-input2-group1" class="form-control" placeholder="19-07-2019">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
									</div>
									<!--end of Date -->
									 <!--Property Type-->	                                  
									 <div class="form-group row">
										<label class="col-sm-4 control-label">Property Type<span style="color:red;">*</span> </label>
											<div class="col-sm-8">
												<select class="form-control" style="max-width:85%; border: 1px solid #737373">													
													 <option value="" selected>-Select-</option>
												</select>
										   </div>
									</div>
									<!--end of Property Type-->
									 <!--Property Type-->	                                  
									 <div class="form-group row">
										<label class="col-sm-4 control-label">Property Condition</label>
											<div class="col-sm-8">
												<select class="form-control" style="max-width:85%; border: 1px solid #737373">													
													 <option value="" selected>-Select-</option>
												</select>
										   </div>
									</div>
									<!--end of Property Type-->
								 <!--Property For-->	                                  
									 <div class="form-group row">
										<label class="col-sm-4 control-label">Property For</label>
											<div class="col-sm-8">
												<select class="form-control" style="max-width:85%; border: 1px solid #737373">													
													 <option value="" selected>-Select-</option>
												</select>
										   </div>
									</div>
									<!--end of Property For-->
								<!--Location-->	   
									<div class="form-group row">
										<label for="" class="control-label col-lg-4"> Location</label>
											<div class="col-lg-8">
												<input class="form-control" id="" name="" ><p>Address Line 1</p>
											</div>									
										<label for="" class="control-label col-lg-4"> </label>
											<div class="col-lg-8">
												<input class="form-control" id="" name="" ><p>Address Line 2</p>
											</div>											
										<label for="" class="control-label col-lg-4"> </label>
											<div class="col-lg-3">
												<input class="form-control" id="" name="" ><p>City/Distric</p>
											</div>
											<div class="col-lg-3">
												<input class="form-control" id="" name="" ><p>State/Province</p>
											</div>
												<label for="" class="control-label col-lg-4"> </label>
											<div class="col-lg-3">
												<input class="form-control" id="" name="" ><p>Postal Code</p>
											</div>
											<div class="col-lg-3">
												<select class="form-control" style="max-width:85%; border: 1px solid #737373"> <p>Postal Code</p>													
													 <option value="" selected>-Select-</option>
													
												</select>
											</div>												
											
									  </div>
								<!--end of Location-->
								<!--City-->	                                  
									 <div class="form-group row">
										<label class="col-sm-4 control-label">City</label>
											<div class="col-sm-8">
												<select class="form-control" style="max-width:85%; border: 1px solid #737373">													
													 <option value="" selected>-Select-</option>
												</select>
										   </div>
									</div>
									<!--end of Cityr-->	
									<!--Total area-->	                                  
									 <div class="form-group row">
										<label class="col-sm-4 control-label">Total area (in Square feet)<span style="color:red;">*</span> </label>
											<div class="col-lg-8">
												<input class="form-control" id="" name="" >
											</div>
									</div>
									<!--end of Total area-->
									<!--Nearest Landmark-->	                                  
									 <div class="form-group row">
										<label class="col-sm-4 control-label">Nearest Landmark<span style="color:red;">*</span> </label>
											<div class="col-lg-8">
												<input class="form-control" id="" name="" >
											</div>
									</div>
									<!--end of Nearest Landmark-->	
										<!--Rent Per Month -->	                                  
									 <div class="form-group row">
										<label class="col-sm-4 control-label">Rent Per Month </label>
											<div class="col-md-8">
                                                    <div class="input-group" style="width:85%">
                                                        <input type="email" id="example-input2-group1" name="example-input2-group1" class="form-control" placeholder="##########">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="fa fa-inr" aria-hidden="true"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
									</div>
									<!--end of Rent Per Month -->	
									<!--Rent Per Month -->	                                  
									 <div class="form-group row">
										<label class="col-sm-4 control-label">Rent(Per Square Feet) </label>
											<div class="col-md-8">
                                                    <div class="input-group" style="width:85%">
                                                        <input type="email" id="example-input2-group1" name="example-input2-group1" class="form-control" placeholder="##########">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="fa fa-inr" aria-hidden="true"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
									</div>
									<!--end of Rent Per Month -->										
									<div class="form-group">
									    <center><button class="btn btn-info waves-effect waves-light m-b-5" type="submit">Submit</button> </center>
										</div>																   
                                         </form>                                      
                                    </div> <!-- card-body -->
                                </div> <!-- card -->
                            </div> <!-- col -->
                        </div> <!-- End row -->
                    </div> <!-- container -->
                </div> <!-- content -->
            </div>
        </div>
        <!-- END wrapper -->

          
           

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        
        <!-- jQuery -->
        <script src="../plugins/moment/moment.min.js"></script>
        
        <!-- Counter js  -->
        <script src="../plugins/waypoints/lib/jquery.waypoints.js"></script>
        <script src="../plugins/counterup/jquery.counterup.min.js"></script>
        
        <!-- sweet alerts -->
        <script src="../plugins/sweetalert2/sweetalert2.js"></script>
        
        <!-- flot Chart -->
        <script src="../plugins/flot-chart/jquery.flot.min.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.time.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.resize.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.pie.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.selection.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.stack.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.crosshair.js"></script>

        <!-- Todoapp -->
        <script src="assets/pages/jquery.todo.js"></script>
        
        <!-- jQuery  -->
        <script src="assets/pages/jquery.chat.js"></script>
        
        <!-- Dashboard js  -->
        <script src="assets/pages/jquery.dashboard.js"></script>

        <!-- App js  -->
        <script src="assets/js/jquery.app.js"></script>
        
        <script>
            /* ==============================================
            Counter Up
            =============================================== */
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
            
        </script>

    
    </body>

<!-- Mirrored from coderthemes.com/moltran/blue/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jun 2019 12:15:40 GMT -->
</html>