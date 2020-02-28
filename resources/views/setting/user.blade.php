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
          <h4 class="pull-left page-title">Add User </h4>
          <ol class="breadcrumb pull-right">
            <li><a href="#">Home</a></li>
            <li><a href="#">Setting</a></li>
            <li class="active">User</li>
          </ol>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header" style="background-color: #317eeb;"></div>
            <div class="card-body">
                                      <div class="col-md-12 col-sm-12 col-12">
                                        <button type="button" class="btn btn-primary" style="float:right;margin-top: 1%;" onclick="userFormOpen()"><i class="md md-add-circle-outline"></i> Add</button><br>
                                       <!--<---------------------------user view table start----------------------------------->
                                       <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                          <thead>
                                            <tr>
                                              <th>Image</th>
                                              <th>Name</th>
                                              <!-- <th>Company Id</th>
                                              <th>Company Name</th> -->
                                              <!-- <th>Role</th> -->
                                              <th>Email</th>
                                              <th>Phone Number</th>
                                              <th>City</th>
                                              <th>State</th>
                                              <th>Action</th>    
                                            </tr>
                                          </thead>
                                          <tbody>
                                              @foreach($userdetails as $data)
                                                 
                                            <tr>
                                              <td><img width="50" height="40" src="{{url('public/images')}}/{{$data->profile_image}}/"></td>

                                                   <!-- <td>{{$data->name}}</td> -->
                                                   <td>{{$data->company_name}}</td>
                                                   <td>{{$data->user_role}}</td>
                                                   <td>{{$data->org_id}}</td> 
                                                   <td>{{$data->email}}</td>
                                                   <td>{{$data->phone}}</td>
                                                   <td>{{$data->city_district}}</td>
                                                   <td>{{$data->state_provence}}</td>
                                                   <td class="actions">
                                                    <a href="javascript:void();" onclick="viewEditProductsAndServices('view', {{$data->id}});"><i class="fas fa-eye"></i></a> &nbsp; 
                                                    <a href="javascript:void();" onclick="viewEditProductsAndServices('edit', {{$data->id}});"><i class="fas fa-pencil-alt"></i></a> &nbsp; 
                                                    <a href="{{url('setting/user/delete')}}/{{$data->id}}" onclick=""><i class="fas fa-trash"></i></a> 
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
                            </div> <!-- End Row -->
                          </div> <!-- card -->                                                  
                        </div> <!-- container -->
                      </div> <!-- content -->
                       <!------------------------------------------------user view table ends---------------------------------------->

                       <form action="{{url('setting/user/add')}}" method="POST" enctype="multipart/form-data" id="user-form">
                        @csrf
                      <!--------------------------------------- user add modal start-------------------------------------------->                   
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
                                                       <h6 id="name_val"> 
                                              </div>
                                              <!-- <div class="col-md-4">
                                                      <div class="form-group">
                                                          <label for="">Role</label>
                                                           <input type="text" name="user_role" class="form-control" placeholder="" id="user_role">   
                                                      </div>
                                              </div> -->
                                              <div class="col-md-4">
                                                      <div class="form-group">
                                                          <label for="">Email</label>
                                                           <input type="email" name="email" class="form-control" placeholder="" id="email">   
                                                      </div>
                                                       <h6 id="email_val"> 
                                              </div>
                                               <div class="col-md-4">
                                                      <div class="form-group">
                                                          <label for="">Phone</label>
                                                           <input type="text" name="phone" class="form-control" placeholder="" id="phone" maxlength="12">   
                                                      </div> 
                                                      <h6 id="phone_val">  
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
                                                          <input name="gender" id="gender" value="male" type="radio" />Male 
                                                      </div>
                                                  </div>
                                              </div>
                                              
                                              <div class="col-md-2">
                                                  <div class="card-body">
                                                      <div class="form-group" style="padding:25px; text-align:left;">
                                                         <input name="gender" id="gender" value="female" type="radio" />Female
                                                      </div>

                                                  </div>
                                              </div>
                                            </div>
                                            <div class="row">
                                              <div class="col-md-6">
                                                      <div class="form-group">
                                                          <label for="">Company Name</label>
                                                           <input type="text" name="company_name" class="form-control" placeholder="" id="company_name">   
                                                      </div> 
                                                      <h6 id="company_name_val"> 
                                                 </div>
                                               </div>
                                                <div class="row">
                                               <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="">Address Line1</label>
                                                             <input type="text" name="address_line1" class="form-control" placeholder="" id="address_line1">   
                                                        </div> 
                                                </div>
                                                <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="">Address Line2</label>
                                                             <input type="text" name="address_line2" class="form-control" placeholder="" id="address_line2">   
                                                        </div> 
                                                </div>
                                                  <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="">City/District</label>
                                                             <input type="text" name="city_district" class="form-control" placeholder="City/District" id="city_district">   
                                                        </div> 
                                                </div>
                                                 <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="">State/Provence</label>
                                                             <input type="text" name="state_provence" class="form-control" placeholder="State/Provence" id="state_provence">   
                                                        </div> 
                                                </div>
                                                <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="">Pin Code</label>
                                                             <input type="text" name="pin_code" class="form-control" placeholder="Pin/Code" id="pin_code">   
                                                        </div> 
                                                        <h6 id="pin_code_val"> 
                                                </div>
                                                <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="">Country</label>
                                                              <select class="select2 form-control" id="country" name="country" required="" aria-required="true" data-placeholder="Choose a Country...">
                                                                  <option value="">Choose a Country...</option>
                                                                  @foreach($countries as $country)
                                                                  <option value="{{$country->id}}">{{$country->country}}</option>
                                                                  @endforeach
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
                                                             <input type="text" name="username" class="form-control" placeholder="Username" id="username">   
                                                        </div> 
                                                        <h6 id="username_val"> 
                                                </div>
                                                <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="">Password</label>
                                                             <input type="password" name="password" class="form-control" placeholder="Password" id="password">   
                                                        </div> 
                                                        <h6 id="password_val"> 
                                                </div> 
                                                <div class="col-md-12 portlets">
                                                    <div class="form-group">
                                                      <label for="">Profile Image</label>
                                                        <div class="m-b-30">
                                                          <div class="dropzone" id="dropzone" style="min-height: 55px">
                                                            <div class="fallback">
                                                             <input name="profile_image" id="profile_image" type="file">
                                                            </div>
                                                          </div>
                                                        </div>
                                                    </div>
                                                </div>   
                                                <div class="col-md-12"> 
                                                  <div class="modal-footer">
                                                    <!-- hidden inputs -->
                                                    <input type="text" name="hidden_input_id" id="hidden_input_id" value="NA" hidden>
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
                                    </form>
                                  </div>  
                                
                              </div>
                          </div>
                      </div>
                     <!--  <--------------------------------------------------user add modal ends--------------------------------> 
                      <!--  !-- view model start --> 
                      <div class="modal user-details-model fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
                          <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h4 class="modal-title mt-0" id="myLargeModalLabel">User Details</h4>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                      </button>
                                  </div>
                                  <div class="modal-body" style="padding: 0px 0;">
                                      <table class="table table-bordered table-striped" border="0">
                                          <tbody>
                                              
                                              <tr style="border: none;">
                                                  <td><p><strong>Name</strong></p></td>
                                                  <td><p id="v_name"></p></td>
                                              </tr>
                                              <tr style="border: none;">
                                                  <td><p><strong>Role</strong></p></td>
                                                  <td><p id="v_user_role"></p></td>
                                              </tr>
                                              <tr style="border: none;">
                                                  <td><p><strong>Email</strong></p></td>
                                                  <td><p id="v_email"></p></td>
                                              </tr>
                                              <tr style="border: none;">
                                                  <td><p><strong>Phone</strong></p></td>
                                                  <td><p id="v_phone"></p></td>
                                              </tr>
                                              <tr style="border: none;">
                                                  <td><p><strong>Gender</strong></p></td>
                                                  <td><p id="v_gender"></p></td>
                                              </tr>
                                               <tr style="border: none;">
                                                  <td><p><strong>Company Name</strong></p></td>
                                                  <td><p id="v_company_name"></p></td>
                                              </tr>
                                              <tr style="border: none;">
                                                  <td><p><strong>Address Line1</strong></p></td>
                                                  <td><p id="v_address_line1"></p></td>
                                              </tr>
                                              <tr style="border: none;">
                                                  <td><p><strong>City/District</strong></p></td>
                                                  <td><p id="v_city_district"></p></td>
                                              </tr>
                                              <tr style="border: none;">
                                                  <td><p><strong>State/Provence</strong></p></td>
                                                  <td><p id="v_state_provence"></p></td>
                                              </tr>
                                              <tr style="border: none;">
                                                  <td><p><strong>Country</strong></p></td>
                                                  <td><p id="v_country"></p></td>
                                              </tr>
                                              <tr style="border: none;">
                                                  <td><p><strong>Pin Code</strong></p></td>
                                                  <td><p id="v_pin_code"></p></td>
                                              </tr>
                                              <tr style="border: none;">
                                                  <td><p><strong>Username</strong></p></td>
                                                  <td><p id="v_username"></p></td>
                                              </tr>
                                             
                                              <tr style="border: none;">
                                                  <td><p><strong>Profile Image</strong></p></td>
                                                  <td><p id="v_profile_image"></p></td>
                                              </tr>
                                          </tbody>
                                      </table>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- view model end  -->

<!-- --------------------------------------user/edit/view jawascript---------------------------->
<script>
// reset supplier form fields
    function resetProductsAndServicesForms(){
        // reset all fileds in expenses form model
        document.getElementById("user-form").reset();
        // // assigning hidden inputs
        $("input[name='hidden_input_id'").val("NA");
        $("input[name='hidden_input_purpose'").val("add");
    }
    function userFormOpen(){
      resetProductsAndServicesForms();
       $('.user-modal').modal('show');
    }
    function viewEditProductsAndServices(purpose, id){

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "{{url('setting/user/get_user_details')}}" + "/" + id,
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
                    document.getElementById("v_name").innerHTML = data.name;
                    document.getElementById("v_user_role").innerHTML = data.user_role;
                    document.getElementById("v_email").innerHTML = data.email;
                    document.getElementById("v_phone").innerHTML = data.phone;
                    document.getElementById("v_gender").innerHTML = data.gender;
                    document.getElementById("v_company_name").innerHTML = data.company_name;
                    document.getElementById("v_address_line1").innerHTML = data.address_line1;
                    document.getElementById("v_city_district").innerHTML = data.city_district;
                    document.getElementById("v_state_provence").innerHTML = data.state_provence;
                    document.getElementById("v_pin_code").innerHTML = data.pin_code;
                    document.getElementById("v_country").innerHTML = data.country;
                    document.getElementById("v_username").innerHTML = data.username;
                    document.getElementById("v_profile_image").innerHTML = "<img src='"+"{{url('public/images')}}/"+data.profile_image+"'>";
                 
                    $('.user-details-model').modal('show');
                }
                if(purpose=="edit"){
                    resetProductsAndServicesForms(); // reseting forms
                    $("#name").val(data.name);
                    $("#user_role").val(data.user_role);
                    $("#email").val(data.email);
                    $("#phone").val(data.phone);
                    $("input[name='gender'][value='"+data.gender+"']").prop("checked", true);
                    $("#company_name").val(data.company_name);
                    $("#address_line1").val(data.address_line1);
                    $("#city_district").val(data.city_district);
                    $("#state_provence").val(data.state_provence);
                    $("#pin_code").val(data.pin_code);
                    $("#country").val(data.country);
                    $("#username").val(data.username);
                    $("#password").val(data.password);
                    // $("#profile_image").val(data.profile_image);
                   
                    // assigning hidden inputs
                    $("input[name='hidden_input_id']").val(data.id);
                    $("input[name='hidden_input_purpose']").val("edit");
    
                    $('.user-modal').modal('show'); // expense insert form model
                }
                $("#loader1").css("display","none");
            }
        });
} 

</script>
 <!--  -----------------------j query validation-------------------------- -->

 <script>
      
      $("document").ready(function(){

        $("#name_val").hide();
        $("#company_name_val").hide();
        $("#phone_val").hide();
        $("#email_val").hide();
        $("#pin_code_val").hide();
        $("#username_val").hide();
        $("#password_val").hide();
        
 
        var err_name =true;
        var err_company_name =true;
        var err_phone =true;
        var err_email = true;
        var err_pin_code=true;
        var err_username=true;
        var err_password=true;
       

        $("#name").blur(function(){

           name_f();
        });
        function name_f(){

          var k = $("#name").val();

          if(k.length==""){

            $("#name_val").show();
            $("#name_val").html("Please input the user name");
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
       

        $("#company_name").blur(function(){

            company_name_f();
        });
        function company_name_f(){

          var s = $("#company_name").val();

          if(s.length==""){

            $("#company_name_val").show();
            $("#company_name_val").html("This field is required");
            $("#company_name_val").focus();
            $("#company_name_val").css("color","red");

              err_company_name=false;
              return false;
          }else{
            err_company_name=true;
            $("#company_name_val").hide();
          }
        }


             $("#email").blur(function(){

            email_f();
           });
             function email_f(){
            
               var m = $("#email").val();
               var v =/^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
               var result = m.match(v); 

          if(result == null){

            $("#email_val").show();
            $("#email_val").html("Please insert valid email ");
            $("#email_val").focus();
            $("#email_val").css("color","red");

              err_email=false;
              
          }else{
            err_email=true;
            $("#email_val").blur();
          }
        }



         $("#phone").blur(function(){

            phone_f();
        });
        function phone_f(){

          var q = $("#phone").val();

          var regexOnlyNumbers=/^[0-9() -]+$/;
          if(regexOnlyNumbers.test(q)!=true){

            $("#phone_val").show();
            $("#phone_val").html("Please insert valid phone number ");
            $("#phone_val").focus();
            $("#phone_val").css("color","red");

              err_phone=false;
              
          }else{
            err_phone=true;
            $("#phone_val").hide();
          }
        }


         $("#pin_code").blur(function(){

            pin_code_f();
        });
        function pin_code_f(){
           var regexOnlyNumbers=/^[0-9]+$/;
          var c = $("#pin_code").val();

         if(regexOnlyNumbers.test(c)!=true){

            $("#pin_code_val").show();
            $("#pin_code_val").html("Please insert valid pin code ");
            $("#pin_code_val").focus();
            $("#pin_code_val").css("color","red");

              err_pin_code=false;
              
          }else{
            err_pin_code=true;
            $("#pin_code_val").hide();
          }
        }

           $("#username").blur(function(){

            username_f();
        });
        function username_f(){

          var l = $("#username").val();

          if(l.length==""){

            $("#username_val").show();
            $("#username_val").html("Please insert username");
            $("#username_val").focus();
            $("#username_val").css("color","red");

              err_username=false;
              return false;
          }else{
            err_username=true;
            $("#username_val").hide();
          }
        }

         $("#password").blur(function(){

           password_f();
        });
        function password_f(){

          var q = $("#password").val();

          var regexOnlyNumbers=/^[0-9]+$/;
          if((q=="")|| regexOnlyNumbers.test(q)!=true){

            $("#password_val").show();
            $("#password_val").html("Please insert valid password ");
            $("#password_val").focus();
            $("#password_val").css("color","red");

              err_password=false;
              return false;
          }else{
            err_password=true;
            $("#password_val").hide();
          }
        }


       $("#btnSubmit").click(function(){

        err_name=true;
        err_company_name=true;
        err_phone=true;
        err_email=true;
        err_pin_code=true;
        err_username=true;
        err_password=true;
        name_f();
        company_name_f();
        phone_f();
        email_f();
        pin_code_f();
        username_f();
        password_f();
      

       if((err_name==true)&&(err_company_name==true)&&(err_phone==true)&&(err_email==true)&&(err_pin_code=true)&&(err_username==true)&&(err_password==true))
       {
          return true;
       }else{
          return false;

       }

       });
  });

</script>
<!-- -----------------------------j query validation ends------------------------------- -->