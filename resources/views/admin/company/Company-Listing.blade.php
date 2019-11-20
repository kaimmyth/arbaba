<style>
  hr {
    margin-top: 1rem;
    margin-bottom: 1rem;
    border: 0;
    border-top: 1px solid rgba(0, 0, 0, .1);
    border: 1px solid gainsboro;
    border-radius: 5px;
    width: 100%;
  }
  .pro {
    margin-top: -74px;
  }
</style>

<div class="content-page">

  <!-- Start content -->
  <div class="content">
    <div class="container-fluid">
      <!-- Page-Title -->
      <div class="row">
        <div class="col-sm-12">
          <h4 class="pull-left page-title">Manage Company</h4>
          <ol class="breadcrumb pull-right">
            <li><a href="{{ URL::to('home') }}">Home</a></li>
            <li><a href="{{URL::to('home')}}">Company</a></li>
            <li class="active">Manage company</li>
          </ol>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Company info</h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-6">
                  <div class="m-b-30">
                    <button id="addToTable" class="btn btn-primary waves-effect waves-light" data-toggle="modal"
                    onclick="addRecords()">Add <i class="md md-add-circle-outline"></i></button>
                  </div>
                </div>
              </div>
              <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap"
              style="border-collapse: collapse; border-spacing: 0; width: 100%;">
              <thead>
                <tr>
                  <th>Logo</th>
                  <th>Company Name</th>
                  <th>Ph. No</th>
                  <th>Email</th>
                  <th>Website</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($cmpnydata as $val)
                <tr>
                  <td><img src="{{asset('public/images/company/'.$val->photo)}}" width="50" height="40"></td>
                  <td>{{$val->org_name}}</td>
                  <td>{{$val->contact_no}}</td>
                  <td>{{$val->email}}</td>
                  <td>{{$val->website}}</td>
                  <td class="actions">
                    <a href="javascript::void(0)" onclick="editCompany({{$val->id}})" data-toggle="tooltip"
                      data-placement="top" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a>
                      &nbsp;&nbsp;&nbsp;
                      <a href="javascript::void(0)" onclick="viewCompany({{$val->id}})" data-toggle="tooltip"
                        data-placement="top" title="" data-original-title="View"><i class="fa fa-eye"></i></a>

                        &nbsp;&nbsp;&nbsp;
                        <a href="{{ URL::to('company/destroy',$val->id)}}"
                          onclick="return confirm('Are you sure you want to delete this item?');"
                          class="on-default remove-row" data-toggle="tooltip" data-placement="top" title=""
                          data-original-title="Delete"><i class="fas fa-trash"></i></a>
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

      <script type="text/javascript">
        function editCompany(id) {
          $("#loader1").css("display","block");
          $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
          $.ajax({
            url: "{{url('company/edit/')}}" + '/' + id,
            method: "POST",
            contentType: 'application/json',
            success: function (data) {
        // console.log(data);
        document.getElementById("ids").value = data.id;
        document.getElementById("org_name").value = data.org_name;
        document.getElementById("address").innerHTML = data.address;
        document.getElementById("logo").value = data.photo;
        document.getElementById("contact_no").value = data.contact_no;
        document.getElementById("zip").value = data.zipcode;
        document.getElementById("email").value = data.email;
        document.getElementById("website").value = data.website;
        document.getElementById("city_id").value = data.city_id;
        document.getElementById("state_id").value = data.state_id;
        document.getElementById("country_id").value = data.country_id;
        document.getElementById("pf_no").value = data.pf_no;
        document.getElementById("esic_no").value = data.esic_no;
        document.getElementById("tax_no").value = data.tax_no;
        document.getElementById("policy_no").value = data.policy_no;
        document.getElementById("gratuity_no").value = data.gratuity_no;
        document.getElementById("username").value = data.username;

       // document.getElementById("uname").style.display = 'none';
       document.getElementById("pass").style.display = 'none';
       document.getElementById("repass").style.display = 'none';
       document.getElementById("submitbtn").innerText = 'UPDATE';
       var val = data.org_type;

       if (val == 1) {
        $('input[name=company_type][value=' + val + ']').prop('checked', true);
      } else {
        $('input[name=company_type][value=' + val + ']').prop('checked', true);
      }
      var val = data.login_status;
      if (val == 1) {
        $('input[name=login_status][value=' + val + ']').prop('checked', true);
      } else {
        $('input[name=login_status][value=' + val + ']').prop('checked', true);
      }
      var val = data.status;
      if (val == 1) {
        $('input[name=company_status][value=' + val + ']').prop('checked', true);
      } else {
        $('input[name=company_status][value=' + val + ']').prop('checked', true);
      }
      var public_path = {!! json_encode(url('public')) !!};
      $("#e_logo").attr("src", public_path + '/images/company/'+ data.photo);
      $('#add-company-modal').modal('show');
      $("#loader1").css("display","none");
    }
  });
        }
        function viewCompany(id) {
          $("#loader1").css("display","block");
          $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
          $.ajax({
            url: "{{url('company/edit/')}}" + '/' + id,
            method: "POST",
            contentType: 'application/json',
            success: function (data) {
        // console.log(data);
        document.getElementById("v_cmp_name").innerHTML = data.org_name;
        document.getElementById("v_username").innerHTML = data.username;
        document.getElementById("v_phone").innerHTML = data.contact_no;
        document.getElementById("v_cmp_id").innerHTML = data.org_code;
        document.getElementById("v_address").innerHTML = data.address;
        document.getElementById("v_email").innerHTML = data.email;
        document.getElementById("v_website").innerHTML = data.website;
        document.getElementById("v_city").innerHTML = data.city_id;
        document.getElementById("v_state").innerHTML = data.state_id;
        document.getElementById("v_country").innerHTML = data.country_id;
        document.getElementById("v_created_date").innerHTML = data.created_at;
        if (data.login_status == 0) { document.getElementById("v_login_status").innerHTML = 'De-Active'; } else { document.getElementById("v_login_status").innerHTML = 'Active'; }
        if (data.status == 0) { document.getElementById("v_branch_status").innerHTML = 'De-Active'; } else { document.getElementById("v_branch_status").innerHTML = 'Active'; }

        var public_path = {!! json_encode(url('public')) !!};
        $("#v_logo").attr("src", public_path + '/images/company/'+ data.photo);
        $('.bs-example-modal-lg').modal('show');
        $("#loader1").css("display","none");
      }
    });
        }

        function addRecords() {
          $("#loader1").css("display","block");
          document.getElementById("submitbtn").innerText ='Save';
          document.getElementById("address").innerHTML = '';
          document.getElementById("FormValidation").reset();
          var public_path = {!! json_encode(url('public')) !!};
          $("#e_logo").attr("src", public_path + '/assets/images/user.jpg');
          $('#add-company-modal').modal('show');
          $("#loader1").css("display","none");
        }
      </script>

      <!-- View company info -->
      <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
      aria-hidden="true" style="display: none">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-sm-12 col-md-12">
                <div class="widget reviews-section-average table-responsive">
                  <p><strong>Company Info</strong></p>

                  <table class="table table-bordered" border="0">
                    <tbody>
                      <tr style="border: none;">
                        <td>
                          <p><strong>Company ID</strong></p>
                        </td>
                        <td>
                          <p id="v_cmp_id"></p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <p><strong>Company Logo</strong></p>
                        </td>
                        <td>
                          <p><img id="v_logo" width="50" height="40"></p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <p><strong>Company Name</strong></p>
                        </td>
                        <td>
                          <p id="v_cmp_name"></p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <p><strong>Phonne Number</strong></p>
                        </td>
                        <td>
                          <p id='v_phone'></p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <p><strong>Email ID</strong></p>
                        </td>
                        <td>
                          <p id="v_email"></p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <p><strong>Company Address</strong></p>
                        </td>
                        <td>
                          <p id="v_address"></p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <p><strong>Website</strong></p>
                        </td>
                        <td>
                          <p id="v_website"></p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <p><strong>Country</strong></p>
                        </td>
                        <td>
                          <p id="v_country"></p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <p><strong>State</strong></p>
                        </td>
                        <td>
                          <p id="v_state"></p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <p><strong>City</strong></p>
                        </td>
                        <td>
                          <p id="v_city"></p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <p><strong>User Name</strong></p>
                        </td>
                        <td>
                          <p id="v_username"></p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <p><strong>Branch Status</strong></p>
                        </td>
                        <td>
                          <p id="v_branch_status"></p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <p><strong>Login Status</strong></p>
                        </td>
                        <td>
                          <p id="v_login_status"></p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <p><strong>Created Date</strong></p>
                        </td>
                        <td>
                          <p id="v_created_date"></p>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div>

    <!-- Add Company Model  -->
    <div id="add-company-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true" style="display: none">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title mt-0">Company Info</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <form action="{{ URL::to('company/store')}}" method="POST" id="FormValidation" enctype="multipart/form-data">
            @csrf
            <input type="hidden" id="ids" name="ids">
            <div class="row">

              <div class="col-md-9">
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-4 control-label">Name of the company</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="company_name" id="org_name" required="" placeholder="Name of the company">
                  </div>
                </div>
              </div>

              <div class="col-md-9">
                <div class="form-group row">
                  <label class="col-md-4 control-label" for="example-textarea-input">Company Address</label>
                  <div class="col-md-7">
                    <textarea class="form-control" rows="2" required="" name="address" id="address" ></textarea>
                  </div>
                </div>
              </div>


              <div class="col-md-3 pro">
                <div class="container">
                  <div class="picture-container">
                    <div class="picture">
                      <img src="{{asset('public/assets/images/user.png')}}" class="picture-src" style="width: 100px;
                      height: 100px;" id="e_logo" title="">
                      <input type="file" name="logo" id="wizard-picture" value=""  class="">
                      <input type="hidden" id="logo" name="new_logo">

                    </div>
                    <h6 class="">Choose Picture</h6>

                  </div>
                </div>

              </div>

            </div>

            <div class="row">

              <div class="col-md-3">
                <div class="form-group">
                  <label for="field-2" class="control-label">Country <font color="red">*</font></label>
                  <select class="select2 form-control" id="country_id" name="country" required="" aria-required="true"
                  data-placeholder="Choose a Country...">
                  <option value="">Choose a Country...</option>
                  @foreach($countries as $country)
                  <option value="{{$country->id}}">{{$country->country}}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="col-md-3">
              <div class="form-group">
                <label for="field-2" class="control-label">City <font color="red">*</font></label>
                <select class="select2 form-control" name="city" id="city_id" aria-required="true"
                data-placeholder="Choose a City...">
                @foreach($cities as $city)
                <option value="{{$city->id}}">{{$city->city}}</option>
                @endforeach
              </select>
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group">
              <label for="field-2" class="control-label">State <font color="red">*</font></label>
              <select class="select2 form-control" name="state" id="state_id" aria-required="true"
              data-placeholder="Choose a State...">
              <option value="">Choose a State...</option>
              @foreach($state as $state)
              <option value="{{$state->id}}">{{$state->state}}</option>
              @endforeach

            </select>
          </div>
        </div>


        <div class="col-md-3">
          <div class="form-group">
            <label for="field-2" class="control-label">Zip <font color="red">*</font></label>
            <input type="text" name="zip" class="form-control" id="zip"
            onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" required=""
            aria-required="true" placeholder="Zip">
          </div>
        </div>
      </div>
      <hr>


      <h4 class="modal-title mt-0">Other Details</h4>
      <div class="row">
        <div class="col-md-4">
         <div class="form-group"> 
          <label for="field-2" class="control-label">TAX No<font color="red">*</font></label> 
          <input type="text" name="tax_num" id="tax_no"  class="form-control"  onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"  required="" aria-required="true" placeholder="TAX No."> 
        </div> 
      </div>

      <div class="col-md-4">
        <div class="form-group">
          <label for="field-2" class="control-label">Gratuity No. <font color="red">*</font></label>
          <input type="text" name="gratuity_num" id="gratuity_no" class="form-control"
          onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" aria-required="true" placeholder="Gratuity No.">
        </div>
      </div>


      <div class="col-md-4">
        <div class="form-group">
          <p class="control-label"><b>Company Type</b>
            <font color="red">*</font>
          </p>
          <div class="radio radio-info form-check-inline">
            <input type="radio" value="1" name="company_type" checked="checked">
            <label for="inlineRadio1"> Live </label>
          </div>
          <div class="radio radio-info form-check-inline">
            <input type="radio" id="demo" value="0" name="company_type">
            <label for="inlineRadio1"> Demo </label>
          </div>
        </div>
      </div>


      <div class="col-md-4">
        <div class="form-group">
          <p class="control-label"><b>Company Status</b>
            <font color="red">*</font>
          </p>
          <div class="radio radio-info form-check-inline">
            <input type="radio" id="active" value="1" name="company_status" checked="checked">
            <label for="inlineRadio1"> Active </label>
          </div>
          <div class="radio radio-info form-check-inline">
            <input type="radio" id="inactive" value="0" name="company_status">
            <label for="inlineRadio1"> Inactive </label>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="form-group">
          <label for="field-2" class="control-label">Website <font color="red">*</font></label>
          <input type="text" name="website" class="form-control" id="website" aria-required="true"
          placeholder="Website">
        </div>
      </div>


      <div class="col-md-4">
        <div class="form-group">
          <label for="field-2" class="control-label">Phone No. <font color="red">*</font></label>
          <input type="text" id="contact_no" name="ph_num" class="form-control"
          onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" required=""
          aria-required="true" placeholder="Phone No.">
        </div>
      </div>

      <div class="col-md-4">
        <div class="form-group">
          <label for="field-2" class="control-label">Email <font color="red">*</font></label>
          <input type="email" name="email" class="form-control" id="email" required="" aria-required="true"
          placeholder="Email">
        </div>
      </div>

      <div class="col-md-4">
        <div class="form-group">
          <label for="field-2" class="control-label">Policy No. <font color="red">*</font></label>
          <input type="text" name="policy_num" id="policy_no" class="form-control"
          onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" aria-required="true" placeholder="Policy No.">
        </div>
      </div>

      <div class="col-md-4">
        <div class="form-group">
          <label for="field-2" class="control-label">PF No. <font color="red">*</font></label>
          <input type="text" name="pf_num" id="pf_no" class="form-control"
          onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" aria-required="true" placeholder="PF No.">
        </div>
      </div>

      <div class="col-md-4">
        <div class="form-group">
          <label for="field-2" class="control-label">ESCI No. <font color="red">*</font></label>
          <input type="text" name="esci_num" class="form-control" id="esic_no"
          onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" aria-required="true" placeholder="ESCI No.">
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label for="field-2" class="control-label">Currency<font color="red">*</font></label>
                  <select class="select2 form-control" id="currencies" name="currencies" required="" aria-required="true" data-placeholder="Choose a Country...">
                    <option value="">Choose a Currency...</option>
                    @foreach($currencies as $currency)
                    <option value="{{$currency->id}}">{{$currency->symbol}} - {{$currency->code}}</option>
                    @endforeach
                  </select>
        </div>
      </div>
        <div class="col-md-4">
        <div class="form-group">
          <label for="field-2" class="control-label">Time zone<font color="red">*</font></label>
                  <select class="select2 form-control" id="time_zone" name="time_zone"  data-placeholder="Choose a Time zone...">
                    <option value="">Choose a Time zone...</option>
                    @foreach($time_zone as $time_zone)
                    <option value="{{$time_zone->id}}">{{$time_zone->time_zone_name}} - {{$time_zone->change_time}}</option>
                    @endforeach
                  </select>
        </div>
      </div>
    </div>
    <hr>
    <h4 class="modal-title mt-0">User Login Details</h4>
    <div class="row">
      <div class="col-md-4" id="uname">
        <div class="form-group">
          <label for="field-2" class="control-label">User Name <font color="red">*</font></label>
          <input type="text" name="username" class="form-control" id="username" required="" aria-required="true"
          placeholder="User Name">
        </div>
      </div>

      <div class="col-md-4" id="pass">
        <div class="form-group">
          <label for="field-2" class="control-label">Password <font color="red">*</font></label>
          <input type="password" name="password" class="form-control" required="" aria-required="true"
          placeholder="Password">
        </div>
      </div>

      <div class="col-md-4" id="repass">
        <div class="form-group">
          <label for="field-2" class="control-label">Confirm Password <font color="red">*</font></label>
          <input type="password" name="confirm_password" class="form-control" required="" aria-required="true"
          placeholder="Confirm Password">
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <p class="control-label"><b>Login Status</b>
            <font color="red">*</font>
          </p>
          <div class="radio radio-info form-check-inline">
            <input type="radio" id="active" value="1" name="login_status" checked="checked">
            <label for="inlineRadio1"> Active </label>
          </div>
          <div class="radio radio-info form-check-inline">
            <input type="radio" id="inactive" value="0" name="login_status">
            <label for="inlineRadio1"> Inactive </label>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <button type="submit" id="submitbtn" class="btn btn-info waves-effect waves-light">Save</button>
    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
  </div>
</form>
</div>
</div>
</div>
</div>


<script>
  $(document).ready(function () {
    // Prepare the preview for profile picture
    $("#wizard-picture").change(function () {
      readURL(this);
    });
  });
  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
        $('#e_logo').attr('src', e.target.result).fadeIn('slow');
      }
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>
<!-- /.End modal -->