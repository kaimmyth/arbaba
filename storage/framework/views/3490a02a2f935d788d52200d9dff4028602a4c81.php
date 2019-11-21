<style>
  .card .card-header {
    padding: 1px 20px;
    border: none;
  }
</style>
<div class="content-page">             
  <div class="content">                                             
    <!-- Start content -->             
    <div class="container-fluid">
      <!-- Page-Title -->
      <div class="row">
        <div class="col-sm-12">
          <h4 class="pull-left page-title">Add Sales People </h4>
          <ol class="breadcrumb pull-right">
            <li><a href="#">Home</a></li>
            <li><a href="#">leads</a></li>
            <li class="active">Sales People Listing</li>
          </ol>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header" style="background-color: #317eeb;"></div>
            <div class="card-body">

                                      <div class="col-md-12 col-sm-12 col-12">
                                        <button type="button" class="btn btn-primary" style="float:right;margin-top: 1%;" data-toggle="modal" data-target=".user-modal"><i class="md md-add-circle-outline"></i> Add</button><br>
                                        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                          <thead>
                                            <tr>
                                              <th>Image</th>
                                              <th>Name</th>
                                              <th>Role</th>
                                              <th>Email</th>
                                              <th>Phone Number</th>
                                              <th>City</th>
                                              <th>State</th>
                                              <th>Create Date</th>
                                              <th>Action</th>    
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
                                             <td><img src="" width="50" height="40"></td>
                                             <td></td>
                                            <td>Executive</td>
                                            <td>Manager</td>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td class="actions">
                                              &nbsp;&nbsp;&nbsp;&nbsp;
                                              <a href="" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil-alt"></i></a>
                                              &nbsp;&nbsp;&nbsp;&nbsp;              
                                            </tr>
                                          </tbody>
                                        </table>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div> <!-- End Row -->
                          </div> <!-- card -->                                                  
                        </div> <!-- container -->
                      </div> <!-- content -->

                      <form action="<?php echo e(url('setting/user/add')); ?>" method="POST" enctype="multipart/form-data" id="customer-form">
                        <?php echo csrf_field(); ?>
                      <!---------------------------------------modal start-------------------------------------------->                   
                      <div class="modal user-modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
                          <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h4 class="modal-title mt-0" id="myLargeModalLabel"><i class="fas fa-clock"></i>&nbsp;&nbsp;Add User</h4>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                          </button>
                                      </div>
                                      <br>
                                      <br>
                                      <div class="modal-body" style="padding: 0px 0;">
                                          <div class="row">
                                              <div class="col-md-4">
                                                      <div class="form-group">
                                                          <label for="">Name</label>
                                                           <input type="text" name="name" class="form-control" placeholder="" id="name">   
                                                      </div>
                                              </div>
                                              <div class="col-md-4">
                                                      <div class="form-group">
                                                          <label for="">Role</label>
                                                           <input type="text" name="role" class="form-control" placeholder="" id="role">   
                                                      </div>
                                              </div>
                                              <div class="col-md-4">
                                                      <div class="form-group">
                                                          <label for="">Email</label>
                                                           <input type="text" name="email" class="form-control" placeholder="" id="email">   
                                                      </div>
                                              </div>
                                               <div class="col-md-4">
                                                      <div class="form-group">
                                                          <label for="">Phone</label>
                                                           <input type="text" name="phone" class="form-control" placeholder="" id="phone">   
                                                      </div> 
                                              </div>
                                               <div class="col-md-4">
                                                      <div class="form-group">
                                                        <div style="text-align:right; padding:40px;">
                                                         <b>Gender</b>
                                                       </div>
                                                      </div>
                                              </div>
                                              <div class="col-md-2">
                                                  <div class="card-body">
                                                      <div class="form-group" style="padding:25px;">
                                                          <input name="gender" id="input-gender-male" value="Male" type="radio" />Male 
                                                      </div>
                                                  </div>
                                              </div>
                                              
                                              <div class="col-md-2">
                                                  <div class="card-body">
                                                      <div class="form-group" style="padding:25px; text-align:left;">
                                                         <input name="gender" id="input-gender-male" value="Male" type="radio" />Female
                                                      </div>
                                                  </div>
                                              </div>
                                               <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="">Address Line1</label>
                                                             <input type="text" name="address_line1" class="form-control" placeholder="" id="phone">   
                                                        </div> 
                                                </div>
                                                <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="">Address Line2</label>
                                                             <input type="text" name="address_line2" class="form-control" placeholder="" id="phone">   
                                                        </div> 
                                                </div>
                                                  <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="">City/District</label>
                                                             <input type="text" name="city_district" class="form-control" placeholder="City/District" id="phone">   
                                                        </div> 
                                                </div>
                                                 <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="">State/Provence</label>
                                                             <input type="text" name="state_provence" class="form-control" placeholder="State/Provence" id="phone">   
                                                        </div> 
                                                </div>
                                                <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="">Pin Code</label>
                                                             <input type="text" name="pin_code" class="form-control" placeholder="Pin/Code" id="phone">   
                                                        </div> 
                                                </div>
                                                <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="">Country</label>
                                                              <select class="select2 form-control" id="country_id" name="country" required="" aria-required="true" data-placeholder="Choose a Country...">
                                                                  <option value="">Choose a Country...</option>
                                                                  <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                  <option value="<?php echo e($country->id); ?>"><?php echo e($country->country); ?></option>
                                                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </select>   
                                                        </div> 
                                                </div>
                                                 <div class="col-md-12">
                                                      <div class="form-group" style="color:grey;">
                                                         <h4 class="modal-title mt-0" id="myLargeModalLabel"><i class="fas fa-clock"></i>&nbsp;&nbsp;User</h4>
                                                      </div>
                                                 </div>
                                                 <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="">Username</label>
                                                             <input type="text" name="username" class="form-control" placeholder="Username" id="phone">   
                                                        </div> 
                                                </div>
                                                <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="">Password</label>
                                                             <input type="password" name="password" class="form-control" placeholder="Password" id="phone">   
                                                        </div> 
                                                </div> 
                                                <div class="col-md-12 portlets">
                                                    <div class="form-group">
                                                      <label for="">Profile Image</label>
                                                        <div class="m-b-30">
                                                          <div class="dropzone" id="dropzone" style="min-height: 55px">
                                                            <div class="fallback">
                                                             <input name="profile_image" id="expenses_attachment" type="file">
                                                            </div>
                                                          </div>
                                                        </div>
                                                    </div>
                                                </div>   
                                                <div class="col-md-12"> 
                                                  <div class="modal-footer">
                                                    <!-- hidden inputs -->
                                                    <input type="text" name="hidden_input_id" value="NA" hidden>
                                                    <input type="text" name="hidden_input_purpose" value="add" hidden>
                                                    <input type="text" name="hidden_input_attachment" value="NA" hidden>
                                                    <!-- hidden inputs -->
                                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light" id="btnSubmit">Save changes</button>
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
                     
<?php /**PATH C:\xampp\htdocs\arbaba\resources\views/setting/user.blade.php ENDPATH**/ ?>