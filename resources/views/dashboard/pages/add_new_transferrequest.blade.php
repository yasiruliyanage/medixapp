 @extends('dashboard.layouts.main')
@section('title')
  Add New Transfer Request 
@endsection
@section('content')
            <div class="container-fluid" style="padding-bottom:0px;">
                                     <div class="row">
<div class="col-md-12">
			<div class="card">
				<h4 align="center" style="font-weight:500;font-size:20px;">Add New Transfer Request </h4>
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
				<form id="myfrm" method="post" action="{{ route('transfer.addrequest') }}" class="form-horizontal" enctype="multipart/form-data">
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
							<label style="color: black;" class="col-sm-2 label-on-left">Emp ID </label>

                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label"></label>
									<input type="text" name="emp_id"  value="{{ old('emp_id') }}"class="form-control" value>
									<span class="help-block">Please enter Employee ID of the user.</span>
								</div>
                            </div>
						</div>
						<div class="row">
							<label style="color: black;" class="col-sm-2 label-on-left">Name</label>

                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label"></label>
									<input type="text" name="name" value="{{ old('name') }}" class="form-control" value>
									<span class="help-block">Please enter First Name of the user.</span>
								</div>
                            </div>
						</div>
						
					
						<div class="row">
							<label style="color: black;" class="col-sm-2 label-on-left">Maritial Status</label>
                            <div class="col-sm-10 checkbox-radios">
                            	<div class="radio">
									<label>
										<input type="radio" name="ms" value="Married" checked="true">
										Married
									</label>
								</div>

								<div class="radio">
									<label>
										<input type="radio" name="ms" value="Unmarried" >
										Unmarried
									</label>
								</div>
								
                            </div>
                        </div>
							<div class="row">
							<label style="color: black;" class="col-sm-2 label-on-left">Date of Birth</label>

                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label"></label>
									<input type="date" name="dob" value="{{ old('dob') }}" class="form-control" value>
									<span class="help-block">Please enter Date Of Birth of the user.</span>
								</div>
                            </div>
                        </div>

                        <div class="row">
							<label style="color: black;" class="col-sm-2 label-on-left">Service Started Date on current Depo</label>

                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label"></label>
									<input type="date" name="r_d_f_p_w_s" value="{{ old('r_d_f_p_w_s') }}" class="form-control" value>
									<span class="help-block">Service Started Date on Current Depo</span>
								</div>
                            </div>
                        </div>
							<div class="row">
							<label style="color: black;" class="col-sm-2 label-on-left">Permenant Address</label>

                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label"></label>
									<input type="text" name="address"  value="{{ old('address') }}" class="form-control" value>
									<span class="help-block">Please enter Permenant Address of the user.</span>
								</div>
                            </div>
                        </div>
							<div class="row">
							<label style="color: black;" class="col-sm-2 label-on-left">Worked Years </label>

                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label"></label>
									<input type="text" name="years" value="{{ old('years') }}" class="form-control" value>
									<span class="help-block"> Please enter Worked years on that depo. </span>
								</div>
                            </div>
						</div>
							<div class="row">
							<label style="color: black;" class="col-sm-2 label-on-left"> Reason For Transfer </label>

                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label"></label>
									<input type="text" name="r_f_t"  value="{{ old('r_f_t') }}" class="form-control" value>
									<span class="help-block"> Please enter Reason For Transfer.</span>
								</div>
                            </div>
                        </div>
						<div class="row">
                            <label style="color: black;" class="col-sm-2 label-on-left">Select current working depo</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <select class="form-control" name="p_w_s" value="{{ old('p_w_s') }}" id="pwsid">
                                    	<option value=""></option>
                                    @foreach($pwsdepos as $pwsdepo)

                                        <option value="{{$pwsdepo->placename}}">{{$pwsdepo->placename}}</option>
                                     @endforeach
                                    </select>
                                    <span class="help-block">Please select current depo of the employee.</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label style="color: black;" class="col-sm-2 label-on-left">Select First Preference</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <select class="form-control" name="p1" value="{{ old('p1') }}" id="p1">
                                    	<option value=""></option>
                                    @foreach($p1s as $p1)

                                        <option value="{{$p1->placename}}">{{$p1->placename}}</option>
                                     @endforeach
                                    </select>
                                    <span class="help-block">Please select first preference depo.</span>
                                </div>
                            </div>
                        </div>
						 <div class="row">
                            <label style="color: black;" class="col-sm-2 label-on-left">Select Second Preference </label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <select class="form-control" name="p2" value="{{ old('p2') }}" id="p2">
                                    	<option value=""></option>
                                    @foreach($p2s as $p2)

                                        <option value="{{$p2->placename}}">{{$p2->placename}}</option>
                                     @endforeach
                                    </select>
                                    <span class="help-block">Please select designation of the user.</span>
                                </div>
                            </div>
                        </div>
						
                        <div class="row">
                            <label style="color: black;" class="col-sm-2 label-on-left">Select third Preference</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <select class="form-control" name="p3" id="p3">
                                    	<option value="">Select Depo</option>
                                    	   @foreach($p3s as $p3)
                                        <option value="{{$p3->placename}}" >{{$p3->placename}}</option>
                                        @endforeach
                                     
                                    </select>
                                    <span class="help-block"> Please select third preference </span>
                                </div>
                            </div>
                        </div>
                        
                   
						
                        <!--##########################################################-->
						
                        <a href="/admin/home" class="btn btn-danger pull-right" >Back</a>
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