 @extends('dashboard.layouts.main')
@section('title')
  Home-Add Staff CTSU
@endsection
@section('content')
            <div class="container-fluid">
                                     <div class="row">
<div class="col-md-12">
			<div class="card">
				<h4 align="center">Staff Member Details</h4>
				@if($message = Session::get('danger'))
				  <div class="alert alert-danger">
				  	<strong>{{$message}}</strong>
				  </div>


				@endif
				<form method="post" action="{{ route('staff.add') }}" class="form-horizontal" enctype="multipart/form-data">
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
							<label class="col-sm-2 label-on-left">Full Name</label>

                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label"></label>
									<input type="text" name="name"  value="{{ old('name') }}"class="form-control" value>
									<span class="help-block">Please enter Union name</span>
								</div>
                            </div>
						</div>
						<div class="row">
                                <label  class="col-sm-2 label-on-left">NIC Number</label>
                             
                                <div class="col-sm-10">
                                 <div class="form-group label-floating is-empty">
                                  <label class="control-label"></label>
                                  <input type="text" name="nic"  value="{{old('nic')}}"  class="form-control" >
                                  <span class="help-block">Please enter NIC number of the user.</span>
                              </div>
                             </div>
                             </div>
                             	<div class="row">
							<label  class="col-sm-2 label-on-left">Gender</label>
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
							<label  class="col-sm-2 label-on-left">Date of Birth</label>

                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label"></label>
									<input type="date" name="dob" value="{{ old('dob') }}" class="form-control" >
									<span class="help-block">Please enter Date Of Birth of the user.</span>
								</div>
                            </div>
                        </div>

						<div class="row">
							<label class="col-sm-2 label-on-left">Mobile Phone</label>

                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label"></label>
									<input type="text" name="phone" value="{{ old('phone') }}" class="form-control" value>
									<span class="help-block">Please enter Mobile Phone  number of the user.</span>
								</div>
                            </div>
						</div>
							<div class="row">
							<label class="col-sm-2 label-on-left">Home Phone</label>

                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label"></label>
									<input type="text" name="homephone" value="{{ old('homephone') }}" class="form-control" value>
									<span class="help-block">Please enter Home Phone number  of staff member.</span>
								</div>
                            </div>
						</div>
						<div class="row">
							<label  class="col-sm-2 label-on-left">Permenant Address</label>

                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label"></label>
									<input type="text" name="address"  value="{{ old('address') }}" class="form-control" >
									<span class="help-block">Please enter Permenant Address of the user.</span>
								</div>
                            </div>
                        </div>
						<div class="row">
							<label class="col-sm-2 label-on-left">Facebook Link</label>

                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label"></label>
									<input type="text" name="fblink" value="{{ old('fblink') }}"  class="form-control" value>
									<span class="help-block">Please enter facebook link</span>
								</div> 
                            </div>
						</div>
						<div class="row">
							<label class="col-sm-2 label-on-left">Twitter Link</label>

                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label"></label>
									<input type="text" name="twlink" value="{{ old('twlink') }}"  class="form-control" value>
									<span class="help-block">Please enter twitter </span>
								</div> 
                            </div>
						</div>
							<div class="row">
							<label class="col-sm-2 label-on-left">instagram Link</label>

                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label"></label>
									<input type="text" name="instalink" value="{{ old('instalink') }}"  class="form-control" value>
									<span class="help-block">Please enter instagram link  </span>
								</div> 
                            </div>
						</div>
						<div class="row">
							<label class="col-sm-2 label-on-left">Linkedin Link</label>

                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label"></label>
									<input type="text" name="linkedinlink" value="{{ old('linkedinlink') }}"  class="form-control" value>
									<span class="help-block">Please enter Linkedin link  </span>
								</div> 
                            </div>
						</div>
						<div class="row">
							<label class="col-sm-2 label-on-left">email</label>

                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label"></label>
									<input type="text" name="email" value="{{ old('email') }}"  class="form-control" value>
									<span class="help-block">email</span>
								</div> 
                            </div>
						</div>

					

                       <div class="row">
                            <label class="col-sm-2 label-on-left">Photo</label>
                            <label class="btn btn-file ">

                                Browse <input type="file" name="photo" value="{{ old('photo') }}">

                            </label>
                        </div>

					
                        <div class="row">
                            <label class="col-sm-2 label-on-left">Staff Position</label>

                            <div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label"></label>
									<input type="text" name="position" value="{{ old('position') }}"  class="form-control" value>
									<span class="help-block">staff position</span>
								</div> 
                            </div>

                        </div>
					
                    
                        <a href="/admin/home" class="btn btn-danger pull-right" >Cancel</a>
                        <input class="btn btn-success pull-right" type="submit" value="Insert">
                        
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

		  @endsection