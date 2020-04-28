 @extends('dashboard.layouts.main')
@section('title')
  Home-Add Hospitaltype Admin Medix
@endsection
@section('content')
            <div class="container-fluid" style="padding-bottom:0px;">
                                     <div class="row">
<div class="col-md-12">
			<div class="card">
				<h4 align="center" style="font-weight:500;font-size:20px;">Application of Add New Hospital Type Admin </h4>
				@if($message = Session::get('danger'))
				  <div class="alert alert-danger">
				  	<strong>{{$message}}</strong>
				  </div>


				@endif
				@if($message = Session::get('success'))
				  <div class="alert alert-success">
				  	<strong>{{$message}}</strong>
				  </div>


				@endif
				<form id="myfrm" method="post" action="{{ route('hospitaltypegent.add') }}" class="form-horizontal" enctype="multipart/form-data">
					{{csrf_field()}}
					<!--div class="card-header card-header-text" data-background-color="rose">
						<h4 class="card-title"></h4>
					</div-->
                     @if(count($errors) > 0 )
                                        @foreach($errors->all() as $error)
                                            <p class="alert alert-danger">{{$error}}</p>
                                        @endforeach
                    @endif
					<div class="card-content">

						<div class="row">
							<label style="color: black;" class="col-sm-2 label-on-left">Member ID</label>

                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label"></label>
									<input type="text"   value="MEDIX/HTA/{{ $newregid }}"class="form-control" disabled>
									<input type="hidden" name="reg_id"  value="MEDIX/HTA/{{ $newregid }}"class="form-control" >
									<span class="help-block">Please enter Union ID of the user.</span>
								</div>
                            </div>
						</div>
						<div class="row">
							<label style="color: black;" class="col-sm-2 label-on-left">First Name</label>

                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label"></label>
									<input type="text" name="name" value="{{ old('name') }}" class="form-control">
									<span class="help-block">Please enter First Name of the user.</span>
								</div>
                            </div>
						</div>
						<div class="row">
							<label style="color: black;" class="col-sm-2 label-on-left">Last Name</label>

                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label"></label>
									<input type="text" name="lname" value="{{ old('lname') }}"  class="form-control" >
									<span class="help-block">Please enter Last Name of the user.</span>
								</div> 
                            </div>
						</div>
						            <input type="hidden" name="emp_id" class="form-control" value="noempid" >
                                   
							
                                    <input type="hidden" name="ps_number" value="nopsnumber" class="form-control" >
                                 

                        
						<div class="row">
                                <label style="color: black;" class="col-sm-2 label-on-left">NIC Number</label>
                             
                                <div class="col-sm-10">
                                 <div class="form-group label-floating is-empty">
                                  <label class="control-label"></label>
                                  <input type="text" name="nic"  value="{{old('nic')}}"  class="form-control" >
                                  <span class="help-block">Please enter NIC number of the user.</span>
                              </div>
                             </div>
                             </div>				
						<div class="row">
							<label style="color: black;" class="col-sm-2 label-on-left">Gender</label>
                            <div class="col-sm-10 checkbox-radios">
                            	<div class="radio">
									<label>
										<input type="radio" name="gender" value="male" checked="true">
										Male
									</label>
								</div>

								<div class="radio">
									<label>
										<input type="radio" name="gender" value="female" >
										Female
									</label>
								</div>
								
                            </div>
                        </div>
							<div class="row">
							<label style="color: black;" class="col-sm-2 label-on-left">Date of Birth</label>

                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label"></label>
									<input type="date" name="dob" value="{{ old('dob') }}" class="form-control" >
									<span class="help-block">Please enter Date Of Birth of the user.</span>
								</div>
                            </div>
                        </div>
							<div class="row">
							<label style="color: black;" class="col-sm-2 label-on-left">Permenant Address</label>

                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label"></label>
									<input type="text" name="address"  value="{{ old('address') }}" class="form-control" >
									<span class="help-block">Please enter Permenant Address of the user.</span>
								</div>
                            </div>
                        </div>
						<div class="row">
							<label style="color: black;" class="col-sm-2 label-on-left">Mobile Number</label>

                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label"></label>
									<input type="text" name="mobile" value="{{ old('mobile') }}" class="form-control" >
									<span class="help-block">Please enter Mobile Number of the user.</span>
								</div>
                            </div>
						</div>
						
						<div class="row">
							<label style="color: black;" class="col-sm-2 label-on-left">Home Phone Number</label>

                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label"></label>
									<input type="text" name="homephone" value="{{ old('homephone') }}" class="form-control" >
									<span class="help-block">Please enter Home Phone Number of the user.</span>
								</div>
                            </div>
						</div>
					  <div class="row">
                            <label class="col-sm-2 label-on-left">Select Province</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <select class="form-control" name="p_id" value="{{ old('p_id') }}" id="pid">
                                        <option value="" disable="true" selected="true">Select Province</option>
                                    @foreach($provinces as $province)

                                        <option value="{{$province->id}}">{{$province->placename}}</option>
                                     @endforeach
                                    </select>
                                    <span class="help-block">Please select province.</span>
                                </div>
                            </div>
                        </div>

                         <div class="row">
                            <label class="col-sm-2 label-on-left">Select District</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <select class="form-control" name="d_id" value="{{ old('d_id') }}" id="did">
                                        <option value="" disable="true" selected="true">Select District</option>
                                    @foreach($districts as $district)

                                        <option value="{{$district->id}}">{{$district->placename}}</option>
                                     @endforeach
                                    </select>
                                    <span class="help-block">Please select district</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 label-on-left">Select Hospital Type</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <select class="form-control" name="z_id" value="{{ old('z_id') }}" id="zid">
                                        <option value="" disable="true" selected="true">Select Hospital Type</option>
                                    @foreach($zones as $zone)
                                        <option value="{{$zone->id}}">{{$zone->placename}}</option>
                                     @endforeach
                                    </select>
                                    <span class="help-block">Please select zone</span>
                                </div>
                            </div>
                        </div>
                    
                        
                       <div class="row">
                            <label style="color: black;" class="col-sm-2 label-on-left">Photo</label>
                            <label class="btn btn-file ">

                                Browse <input type="file" name="profile_img" value="{{ old('profile_img') }}">

                            </label>
                        </div>
						
					
						<div class="row">
							<label style="color: black;" class="col-sm-2 label-on-left">Email</label>

                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label">Email</label>
									<input type="text" name="email" value="{{ old('email') }}" class="form-control" >
									<span class="help-block">Please enter email the user.</span>
								</div>
                            </div>
						</div>
					
						<div class="row">
							<label style="color: black;" class="col-sm-2 label-on-left">Username</label>

                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label"></label>
									<input type="text" name="username" value="{{ old('username') }}"  class="form-control" >
									<span class="help-block">Username</span>
								</div> 
                            </div>
						</div>
						<div class="row">
							<label style="color: black;" class="col-sm-2 label-on-left">Password</label>

                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label"></label>
									<input type="text" name="password" value="{{ old('password') }}"  class="form-control">
									<span class="help-block">password</span>
								</div> 
                            </div>
						</div>
						
                        <!--##########################################################-->
						
                        <a href="/admin/hospitaltypeadmins" class="btn btn-danger pull-right" >Back</a>
						<a href="" onclick="" class="btn btn-primary pull-right" >Reset</a>
                        <input class="btn btn-success pull-right" type="submit" value="Save">
                        <input class="btn btn-warning pull-right" type="submit" value="Save And New">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script>
function myFunction() {
  document.getElementById("myfrm").reset();
}
</script>
		  @endsection