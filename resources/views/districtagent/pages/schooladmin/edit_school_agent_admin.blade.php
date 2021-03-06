 @extends('districtagent.layouts.main')
@section('title')
  Home-Edit  District Agents  CTSU
@endsection
@section('content')
<?php $nav = 'school_admin'; ?>
            <div class="container-fluid">
                                     <div class="row">
<div class="col-md-12">
			<div class="card">
				<h4 align="center" style="font-weight:500;font-size:20px;">Province Agent  Details</h4>
				@if($message = Session::get('danger'))
				  <div class="alert alert-danger">
				  	<strong>{{$message}}</strong>
				  </div>
				@endif
				@foreach($agents as $member)
				<form method="POST" action="{{ route('schoolagent.edit',$member->id)}}" class="form-horizontal" enctype="multipart/form-data">
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
                            <label style="color: black;" class="col-sm-2 label-on-left">Registration ID</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" name="reg_id"  value="{{ $member->reg_id }}"class="form-control" >
                                    <span class="help-block">Please enter Union ID of the user.</span>
                                </div>
                            </div>
                        </div>
						<div class="row">
							<label style="color: black;" class="col-sm-2 label-on-left">First Name</label>

                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label"></label>
									<input type="text" name="name"   value="{{$member->name}}" class="form-control" >
									<span class="help-block">Please enter First Name of the user.</span>
								</div>
                            </div>
						</div>
						<div class="row">
							<label style="color: black;" class="col-sm-2 label-on-left">Last Name</label>

                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label"></label>
									<input type="text" name="lname"   value="{{$member->lname}}"  class="form-control" value>
									<span class="help-block">Please enter Last Name of the user.</span>
								</div> 
                            </div>
						</div>
                          <div class="row">
                            <label style="color: black;" class="col-sm-2 label-on-left">Employee ID</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" name="emp_id" class="form-control" placeholder="{{$member->emp_id}}" value="{{$member->emp_id}}"  >
                                    <span class="help-block">Please enter employee ID  of the user.</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label style="color: black;" class="col-sm-2 label-on-left">Paysheet Number</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" name="ps_number" value="{{$member->ps_number}}" class="form-control" >
                                    <span class="help-block">Please enter paysheet number  of the user.</span>
                                </div>
                            </div>
                        </div>
						<div class="row">
							<label style="color: black;" class="col-sm-2 label-on-left">Username</label>

                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label"></label>
									<input type="text" name="username"  value="{{$member->username}}"  class="form-control" value>
									<span class="help-block">Username</span>
								</div> 
                            </div>
						</div>
                       

						<!--<div class="row">
							<label style="color: black;" class="col-sm-2 label-on-left">Password</label>

                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label"></label>
									<input type="text" name="password"  value="{{$member->password}}"   class="form-control" value>
									<span class="help-block">password</span>
								</div> 
                            </div>
						</div>-->

						<div class="row">
							<label style="color: black;" class="col-sm-2 label-on-left">Date Of Birth</label>

                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label"></label>
									<input type="date" name="dob"  value="{{$member->dob}}"  class="form-control" value>
									<span class="help-block">Please enter Date Of Birth of the user.</span>
								</div>
                            </div>
                        </div>
                        <div class="row">
                                <label style="color: black;" class="col-sm-2 label-on-left">NIC Number</label>
                             
                                <div class="col-sm-10">
                                 <div class="form-group label-floating is-empty">
                                  <label class="control-label"></label>
                                  <input type="text" name="nic"   value="{{$member->nic}}"  class="form-control" placeholder="{{$member->nic}}" >
                                  <span class="help-block">Please enter NIC number of the user.</span>
                              </div>
                             </div>
                             </div>

                        <!--##########################################################-->

                       <div class="row">
                            <label style="color: black;" class="col-sm-2 label-on-left">Photo</label>
                            <label class="btn btn-file ">

                                Browse <input type="file" name="profile_img"  value="{{$member->profile_img}}" >

                            </label>
                        </div>

						<div class="row">
							<label style="color: black;" class="col-sm-2 label-on-left">Mobile Number</label>

                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label"></label>
									<input type="text" name="mobile"    class="form-control"  value="{{$member->mobile}}" placeholder="{{$member->mobile}}">
									<span class="help-block">Please enter Mobile Number of the user.</span>
								</div>
                            </div>
						</div>
						<div class="row">
							<label style="color: black;" class="col-sm-2 label-on-left">Home Phone Number</label>

                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label"></label>
									<input type="text" name="homephone"   value="{{$member->homephone}}"  class="form-control" value>
									<span class="help-block">Please enter Home Phone Number of the user.</span>
								</div>
                            </div>
						</div>
						<div class="row">
							<label style="color: black;" class="col-sm-2 label-on-left">email</label>

                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label">Email</label>
									<input type="text" name="email"  value="{{$member->email}}"  class="form-control" value>
									<span class="help-block">Please enter First Name of the user.</span>
								</div>
                            </div>
						</div>
						<div class="row">
							<label style="color: black;" class="col-sm-2 label-on-left">Permenant Address</label>

                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label"></label>
									<input type="text" name="address"   value="{{$member->address}}"  class="form-control" value>
									<span class="help-block">Please enter Permenant Address of the user.</span>
								</div>
                            </div>
                        </div>
                         <div class="row">
                            <label class="col-sm-2 label-on-left"> Province</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <span style="display: none;">{{ $oldprovince = $member->province }} </span>
                                    <select class="form-control" name="p_id" value="{{ old('p_id') }}" id="pid" >
                                        <option value=""></option>
                                    @foreach($provinces as $province)
                                         <span style="display: none;">{{ $newprovince = $province->id }} </span>
                                        <option value="{{$province->id}}" {{  $oldprovince== $newprovince ? 'selected' : '' }}>{{$province->placename}}</option>
                                     @endforeach
                                    </select>
                                    <span class="help-block">Please select province.</span>
                                </div>
                            </div>
                              
                        </div>
                        <div class="row">
                            <label class="col-sm-2 label-on-left"> District</label>
                        <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <span style="display: none;">{{ $olddistrict = $member->district }} </span>
                                    <select class="form-control" name="d_id" value="{{ old('d_id') }}" id="did" >
                                        <option value=""></option>
                                    @foreach($districts as $district)
                                         <span style="display: none;">{{ $newdistrict = $district->id }} </span>
                                        <option value="{{$district->id}}" {{  $olddistrict== $newdistrict ? 'selected' : '' }}>{{$district->placename}}</option>
                                     @endforeach
                                    </select>
                                    <span class="help-block">Please select district.</span>
                                </div>
                            </div>
                          </div>


                          <div class="row">
                            <label class="col-sm-2 label-on-left"> Zone</label>
                        <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <span style="display: none;">{{ $oldzone = $member->zone }} </span>
                                    <select class="form-control" name="z_id" value="{{ old('d_id') }}" id="zid" >
                                        <option value=""></option>
                                    @foreach($zones as $zone)
                                         <span style="display: none;">{{ $newzone = $zone->id }} </span>
                                        <option value="{{$zone->id}}" {{  $oldzone== $newzone ? 'selected' : '' }}>{{$zone->placename}}</option>
                                     @endforeach
                                    </select>
                                   
                                </div>
                            </div>
                          </div>

                          <div class="row">
                            <label class="col-sm-2 label-on-left"> Division</label>
                        <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <span style="display: none;">{{ $olddiv = $member->division }} </span>
                                    <select class="form-control" name="div_id" value="{{ old('div_id') }}" id="divid" >
                                        <option value=""></option>
                                    @foreach($divisions as $division)
                                         <span style="display: none;">{{ $newdiv = $division->id }} </span>
                                        <option value="{{$division->id}}" {{  $olddiv== $newdiv ? 'selected' : '' }}>{{$division->placename}}</option>
                                     @endforeach
                                    </select>
                                   
                                </div>
                            </div>
                          </div>
                            <div class="row">
                            <label class="col-sm-2 label-on-left">School</label>
                        <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <span style="display: none;">{{ $oldschool = $member->school }} </span>
                                    <select class="form-control" name="s_id" value="{{ old('div_id') }}" id="sid"  >
                                        <option value=""></option>
                                    @foreach($schools as $school)
                                         <span style="display: none;">{{ $newschool = $school->id }} </span>
                                        <option value="{{$school->id}}" {{  $oldschool== $newschool ? 'selected' : '' }}>{{$school->placename}}</option>
                                     @endforeach
                                    </select>
                                   
                                </div>
                            </div>
                          </div>
						 <div class="row">
                            <label style="color: black;" class="col-sm-2 label-on-left">Password</label>

                            <div class="col-sm-10">
                              <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" name="password" class="form-control"  value=""  >
                                    <span class="help-block">Please enter new password:(if you want to update the user password)</span>
                                </div>
                            </div>
                        </div>
                        
                           <div class="row">
                            <label style="color: black;" class="col-sm-2 label-on-left">Set user Status</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <select class="form-control" name="status" >

                                    	<span style="display: none;">{{ $olddesig =$member->status }} </span>
                                        <option value="1" {{  $olddesig== 1 ? 'selected' : '' }} >Active </option>
                                        <option value="0"  {{  $olddesig== 0 ? 'selected' : '' }}>Inactive </option>
                                      
                                    </select>
                                    <span class="help-block">Please select designation of the user.</span>
                                </div>
                            </div>
                        </div>
						<div class="row">
							<label style="color: black;" class="col-sm-2 label-on-left">Gender</label>
                            <div class="col-sm-10 checkbox-radios">
                            	<span style="display: none;">{{ $oldgender= $member->gender}}
                            	
                                      <?php if($oldgender === 'male'){
                                      	$genderindicator= 1 ;
                                      }else{
                                      	  $genderindicator= 0;
                            	    }
                                      ?>
                            	 </span>
                            	<div class="radio">
									<label>
										<input type="radio" name="gender" value="male" {{$genderindicator== 1 ? 'checked' : '' }}>
										Male
									</label>
								</div>

								<div class="radio">
									<label>
										<input type="radio" name="gender" value="female"  {{ $genderindicator== 0 ? 'checked' : '' }}>
										Female
									</label>
								</div>
								
                            </div>
                        </div>
                       
                    
                        <a href="/admin/members" class="btn btn-danger pull-right" >Cancel</a>
                        <input class="btn btn-success pull-right" type="submit" value="Update">
                        
					</div>
				</form>
				@endforeach
			</div>
		</div>
	</div>
</div>

		  @endsection