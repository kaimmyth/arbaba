<!-- ========== Left Sidebar Start ========== -->

<div class="left side-menu">

  <div class="sidebar-inner slimscrollleft">

    <div class="user-details">

    </div>

    <!--- Divider -->

    <div id="sidebar-menu">
     <?php if(Session::get('userRole')==3): ?>
     <ul>
      <li><a href="<?php echo e(URL::to('dashboard')); ?>" class="waves-effect"><i class="fa fa-home"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>HRM Dashboard</span></a></li>
      <li><a href="<?php echo e(URL::to('update-site')); ?>" class="waves-effect"><i class="fa fa-home"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Personal Infromation</span></a></li>

    </ul>
    <?php elseif(Session::get('userRole')==4): ?>
    <ul>
      <li><a href="<?php echo e(URL::to('update-site')); ?>" class="waves-effect"><i class="fa fa-home"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Employee Dashboard</span></a></li>
      <li><a href="<?php echo e(URL::to('update-site')); ?>" class="waves-effect"><i class="fa fa-home"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Personal Infromation</span></a></li>
      <li><a href="<?php echo e(URL::to('update-site')); ?>" class="waves-effect"><i class="fa fa-home"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Leave info</span></a></li>
      <li><a href="<?php echo e(URL::to('update-site')); ?>" class="waves-effect"><i class="fa fa-home"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Timesheet</span></a></li>
      <li><a href="<?php echo e(URL::to('update-site')); ?>" class="waves-effect"><i class="fa fa-home"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Leave Managment </span></a></li>
      <li><a href="<?php echo e(URL::to('update-site')); ?>" class="waves-effect"><i class="fa fa-home"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Setting </span></a></li>
      <li><a href="<?php echo e(URL::to('employee-profile')); ?>" class="waves-effect"><i class="fa fa-home"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>See Your Details </span></a></li>
    </ul>
    <?php elseif(Session::get('userRole')==5): ?>
    <ul>
      <li><a href="<?php echo e(URL::to('dashboard')); ?>" class="waves-effect"><i class="fa fa-home"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>RM Dashboard</span></a></li>
      <li><a href="<?php echo e(URL::to('update-site')); ?>" class="waves-effect"><i class="fa fa-home"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Personal Infromation</span></a></li>
      <li><a href="<?php echo e(URL::to('update-site')); ?>" class="waves-effect"><i class="fa fa-home"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Leave info</span></a></li>
      <li><a href="<?php echo e(URL::to('update-site')); ?>" class="waves-effect"><i class="fa fa-home"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Timesheet</span></a></li>
      <li><a href="<?php echo e(URL::to('update-site')); ?>" class="waves-effect"><i class="fa fa-home"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Leave Managment </span></a></li>
      <li><a href="<?php echo e(URL::to('update-site')); ?>" class="waves-effect"><i class="fa fa-home"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Setting </span></a></li>
      <li><a href="<?php echo e(URL::to('employee-profile')); ?>" class="waves-effect"><i class="fa fa-home"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>See Your Details </span></a></li>
    </ul>
    <?php else: ?>
    <ul>
      <li>
        <a href="<?php echo e(URL::to('dashboard')); ?>" class="waves-effect"><i class="fa fa-home"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Dashboard</span></a>
      </li>
      <li class="has_sub">
        <a href="#" class="waves-effect"><i class="fas fa-users"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Items</span><span class="pull-right"><i class="md md-add"></i></span></a>
        <ul class="list-unstyled">
          <li><a href="<?php echo e(url('update-site')); ?>">Emploee Details</a></li>
        </ul>
      </li>
      <li class="has_sub">
        <a href="#" class="waves-effect"><i class="fas fa-calculator"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Banking</span><span class="pull-right"><i class="md md-add"></i></span></a>
        <ul class="list-unstyled">
          <li><a href="<?php echo e(url('update-site')); ?>">Attendance</a></li>        
        </ul>
      </li>
      <li class="has_sub">
       <a href="#" class="waves-effect"><i class="fas fa-hand-holding-usd"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Sales</span><span class="pull-right"><i class="md md-add"></i></span></a>
       <ul class="list-unstyled">
        <li><a href="<?php echo e(url('sale/all-sale')); ?>">All Sales</a></li>
        <li><a href="<?php echo e(url('sale/invoice')); ?>">Invoices</a></li>
        <li><a href="<?php echo e(url('sale/customers')); ?>">Customers</a></li>
        <li><a href="<?php echo e(url('sale/products&services')); ?>">Products & Services</a></li>
      </ul>
    </li>
    <li class="has_sub">
     <a href="#" class="waves-effect"><i class="fas fa-id-card-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Purchases</span><span class="pull-right"><i class="md md-add"></i></span></a>
     <ul class="list-unstyled">
      <li><a href="<?php echo e(url('update-site')); ?>">Candidates</a></li>
    </ul>
  </li>
  <li class="has_sub">
    <a href="#" class="waves-effect"><i class="fas fa-id-card-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Taxes</span><span class="pull-right"><i class="md md-add"></i></span></a>
    <ul class="list-unstyled">
      <li><a href="<?php echo e(url('tax/return')); ?>">Return</a></li>
      <li><a href="<?php echo e(url('tax/payment-history')); ?>">Payment History</a></li>
    </ul>
  </li>
  <li class="has_sub">
    <a href="#" class="waves-effect"><i class="fas fa-id-card-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Expenses</span><span class="pull-right"><i class="md md-add"></i></span></a>
    <ul class="list-unstyled">
      <li><a href="<?php echo e(url('expenses')); ?>">Expenses</a></li>
      <li><a href="<?php echo e(url('expenses/suppliers')); ?>">Suppliers</a></li>
    </ul>
  </li>
  <li>
    <a href="<?php echo e(url('employee')); ?>" class="waves-effect"><i class="fa fa-id-card-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Employee</span></a>
  </li>
  <li class="has_sub">
   <a href="#" class="waves-effect"><i class="fas fa-id-card-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Accountant</span><span class="pull-right"><i class="md md-add"></i></span></a>
   <ul class="list-unstyled">
    <li><a href="<?php echo e(url('update-site')); ?>">Candidates</a></li>
  </ul>
</li>
<li class="has_sub">
  <a href="#" class="waves-effect"><i class="fas fa-tools"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Tools/Master </span><span class="pull-right"><i class="md md-add"></i></span></a>
  <ul class="list-unstyled">

  </ul>
</li>
<li class="has_sub">
  <a href="#" class="waves-effect"><i class="fas fa-users-cog"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Settings</span><span class="pull-right"><i class="md md-add"></i></span></a>
  <ul class="list-unstyled">
    <?php if(Session::get('gorgID')==1): ?>
    <li>
      <a href="<?php echo e(URL::to('company')); ?>" class="waves-effect"><span>Company </span></a>
    </li>
    <?php endif; ?>
    <li><a href="<?php echo e(url('update-site')); ?>"><span>Organization structure</span></a></li>
  </ul>
</li>
</ul>
<?php endif; ?>
<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
</div>
</div>
<!-- Left Sidebar End --> 
<?php /**PATH D:\xampp\htdocs\arbaba\resources\views/layouts/menubar.blade.php ENDPATH**/ ?>