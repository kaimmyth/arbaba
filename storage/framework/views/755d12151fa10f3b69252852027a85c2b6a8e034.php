<?php if(auth()->guard()->guest()): ?>
<script>
  <?php Session::flash('warning', 'You are not a Authoriesd User..!'); ?>
  window.location = "<?php echo e(url('/')); ?>";
</script>
<?php if(Route::has('register')): ?>
<script>
  <?php Session::flash('warning', 'Your Session had been Expired..!'); ?>
  window.location = "<?php echo e(url('/')); ?>";
</script>
<?php endif; ?>
<?php else: ?>

<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
  <meta charset="utf-8" />
  <title><?php echo e(config('app.name', 'Dashboard')); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- CSRF Token -->
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <link rel="shortcut icon" href="<?php echo e(asset('public/assets/images/favicon_1.ico')); ?>">
  <link href="<?php echo e(asset('public/assets/plugins/sweetalert2/sweetalert2.css')); ?>" rel="stylesheet" type="text/css">
  <!-- Fontawasom -->
  <link href="<?php echo e(asset('public/assets/fontawesome/css/fontawesome.min.css')); ?>" rel="stylesheet">
  <!-- Plugins css -->
  <link href="<?php echo e(asset('public/assets/plugins/modal-effect/css/component.css')); ?>" rel="stylesheet">
  <!--Form Wizard-->
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/assets/plugins/jquery-steps/jquery.steps.css')); ?>">

  <!-- Custom Files -->
  <link href="<?php echo e(asset('public/assets/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />
  <link href="<?php echo e(asset('public/assets/css/icons.css')); ?>" rel="stylesheet" type="text/css" />
  <link href="<?php echo e(asset('public/assets/css/style.css')); ?>" rel="stylesheet" type="text/css" />
  <script src="<?php echo e(asset('public/assets/js/modernizr.min.js')); ?>"></script>

  <!-- Date And TimePicker -->
  <link href="<?php echo e(asset('public/assets/plugins/timepicker/bootstrap-timepicker.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('public/assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')); ?>" rel="stylesheet">

  <!-- DataTables -->
  <link href="<?php echo e(asset('public/assets/plugins/datatables/jquery.dataTables.min.css')); ?>" rel="stylesheet" type="text/css" />
  <link href="<?php echo e(asset('public/assets/plugins/datatables/buttons.bootstrap4.min.css')); ?>" rel="stylesheet" type="text/css" />
  <link href="<?php echo e(asset('public/assets/plugins/datatables/fixedHeader.bootstrap4.min.css')); ?>" rel="stylesheet" type="text/css" />
  <link href="<?php echo e(asset('public/assets/plugins/datatables/responsive.bootstrap4.min.css')); ?>" rel="stylesheet" type="text/css" />
  <link href="<?php echo e(asset('public/assets/plugins/datatables/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet" type="text/css" />
  <link href="<?php echo e(asset('public/assets/plugins/datatables/scroller.bootstrap4.min.css')); ?>" rel="stylesheet" type="text/css" />
  <link href="<?php echo e(asset('public/assets/icons/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css" />
  <!-- Font -->
  <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
  <!-- Alert -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/js/gijgo.min.js" type="text/javascript"></script>
  <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/css/gijgo.min.css" rel="stylesheet" type="text/css" />

  <!-- typeahead -->
  <script type="text/javascript" src="<?php echo e(asset('public/assets/plugins/typeahead/typeahead.bundle.js')); ?>"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/assets/plugins/typeahead/typeahead.css')); ?>">

  <style type="text/css">
    body{
     /* background: #FFF url("https://i.imgur.com/KheAuef.png") top left repeat-x;*/
     font-family: 'Play', sans-serif;
   }

   #loader {
    display: block;
  }
  #loading {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 100;
    width: 100vw;
    height: 100vh;
    background-color: rgba(192, 192, 192, 0.5);
    background-image: url(<?php echo e(url('public/assets/images/loader.gif')); ?>);
background-repeat: no-repeat;
background-position: center;
}
</style>
<style type="text/css">
  .pace-active{display: none!important;}
  .popupbox {
    background-color:rgba(248,248,248,.60);
    position:fixed;
    height:100%;
    width:100%;
    z-index:111;
    top:0;
  }
  .loaderpopupbox {
    background-color:rgba();
    position:fixed;
    height:100%;
    width:100%;
    z-index:100;
    top:0;
  }
  .popup {
    margin: 15% 30%;
    padding: 8px;
    position: relative;
    width: 40%;
    border-radius:5px;
  }
  @media(max-width:767px){
    .popup {
      margin: 40% 30%;
      width: 40%;
      border-radius:5px;
    }
    .popupbox .popup .loader12 img{width:100px; height:100px;}
    .ml-bg{ background-position: bottom left;
      background-color: #4cc0bf;;
    }
    .loaderpopupbox .popup .loader10 img{width:50px; height:50px;}
    .ml-bg{ background-position: bottom left;
      background-color: #4cc0bf;;
    }
    .blank-loader .content-wrapper .flexbox-container {
      display: -webkit-box;
      display: -webkit-flex;
      display: -moz-box;
      display: -ms-flexbox;
      display: block;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -moz-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      height: fit-content;
    }
  }

</style>
</head>

<!-- Page Loader  -->
<body class="fixed-left" id="loader" >
  <div id="loading"></div>

  <!-- Ajax Page Loader -->
  <div class="preload popupbox loader1" id="loader1" style="display:none;">
    <div class="popup">
      <center>
        <span class="loader12" style="display:block;"><img src="<?php echo e(url('public/assets/images/loader.gif')); ?>" height="70" /></span>
      </center>
    </div>
  </div>
  <!-- Begin page -->
  <div id="wrapper">

    <!-- Top Bar Start -->
    <div class="topbar">
      <!-- LOGO -->
      <div class="topbar-left">
        <div class="text-center">
          <a href="<?php echo e(URL::to('dashboard')); ?>" class="logo"><i class="md md-terrain"></i> <span>AR Baba</span></a>
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
          <ul class="nav navbar-left float-center list-inline" >
            <li style="color: white; font-size: 20px;" >Welcome <?php echo e(Auth::user()->name ?? ""); ?></li>
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
              <!-- <li class="d-none d-sm-block">
                <a href="#" class="right-bar-toggle waves-effect waves-light"><i class="md md-chat"></i></a>
              </li> -->

              <li class="dropdown open">
                <?php  $logo = DB::table('org')->where('users_id',Auth::user()->id)->selectRaw("concat('".url('public/images/company/').'/'."',photo) as logo")->first();  ?>
                <a href="#" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="<?php if(@$logo->logo!=''): ?> <?php echo e(@$logo->logo); ?> <?php else: ?> <?php echo e(asset('public/assets/images/users/avatar-1.jpg')); ?> <?php endif; ?>" alt="user-img" class="rounded-circle"> &nbsp;&nbsp;<?php echo e(Auth::user()->username); ?> </a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo e(url('user-profile')); ?>" class="dropdown-item"><i class="md md-face-unlock mr-2"></i> Profile</a></li>
                  <li><a href="javascript:void(0)" class="dropdown-item"><i class="md md-settings mr-2"></i> Settings</a></li>
                  <li><a href="javascript:void(0)" class="dropdown-item"><i class="md md-lock mr-2"></i> Lock screen</a></li>
                  <li><a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();" class="dropdown-item"><i class="md md-settings-power mr-2"></i> <?php echo e(__('Logout')); ?></a></li>
                  <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                    <?php echo csrf_field(); ?>
                  </form>
                </ul>
              </li>

            </ul>
          </div>
        </nav>
      </div>
      <!-- Top Bar End -->

      <!-- Left Menu Panel -->
      <?php echo $__env->make('layouts.menubar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php endif; ?><?php /**PATH C:\xampp\htdocs\arbaba\resources\views/layouts/header.blade.php ENDPATH**/ ?>