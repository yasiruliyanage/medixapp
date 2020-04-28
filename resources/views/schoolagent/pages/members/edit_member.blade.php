 @extends('schoolagent.layouts.main')
@section('title')
  Home-Edit  Member Medix
@endsection
@section('content')
<?php $nav = 'member'; ?>
            <div class="container-fluid">
                                     <div class="row">
<div class="col-md-12">
			<div class="card">
				<h4 align="center" style="font-weight:500;font-size:20px;">Member Details</h4>
				@if($message = Session::get('danger'))
				  <div class="alert alert-danger">
				  	<strong>{{$message}}</strong>
				  </div>
				@endif
				@foreach($members as $member)
				<form method="POST" action="{{route('schoolagentmember.edit',$member->id)}}" class="form-horizontal" enctype="multipart/form-data">
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
                            <label style="color: black;" class="col-sm-2 label-on-left">Union ID</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
									<input type="hidden" name="reg_id"  value="{{$member->reg_id }}"class="form-control" >
                                    <input type="text"   value="{{ $member->reg_id}}"class="form-control" disabled>
                                    <span class="help-block">Please enter Union ID of the user.</span>
                                </div>
                            </div>
                        </div>
						<div class="row">
                            <label style="color: black;" class="col-sm-2 label-on-left">Registered At</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
									
                                    <input type="text"   value="{{ $member->created_at }}"class="form-control" disabled>
                                  
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
                         
                                      <input type="hidden" name="emp_id" class="form-control" placeholder="noempid" value="noempid"  >
                                 
                      
                                    <input type="hidden" name="ps_number" value="nopsnumber" class="form-control" >
                                  
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
                            <label class="col-sm-2 label-on-left">Select Designation</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                     <span style="display: none;">{{ $oldsubject = $member->sub_code }} </span>
                                    <select class="form-control" name="sub_id" value="{{ old('sub_id') }}" id="subid">
                                        <option value="" disable="true" selected="true">Select School</option>
                                    @foreach($subjects as $subject)
                                     <span style="display: none;">{{ $newsubject = $subject->id }} </span>

                                        <option value="{{$subject->id}}" {{  $oldsubject== $newsubject ? 'selected' : '' }}>{{$subject->subname}}</option>
                                     @endforeach
                                    </select>
                                    <span class="help-block">Please select Designation</span>
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
<div id="uploadimageModal" class="modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div id="image_demo"></div>

                    </div>



                </div>
                <div class="row">
                    <div class="col-sm-6 float-left">
                        <button class="btn btn-success crop_image">Crop & Upload Image</button>
                    </div>
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-default" data-dismiss="modal" id='closeModel'>Close</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

		  @endsection