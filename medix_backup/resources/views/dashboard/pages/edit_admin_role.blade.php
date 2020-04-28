 @extends('dashboard.layouts.main')
@section('title')
  Home-Edit  Download Item CEB UNION
@endsection
@section('content')
            <div class="container-fluid">
                                     <div class="row">
<div class="col-md-12">
			<div class="card">
				<h4 align="center" style="font-weight:500;font-size:20px;">Download Item Details</h4>
				@if($message = Session::get('danger'))
				  <div class="alert alert-danger">
				  	<strong>{{$message}}</strong>
				  </div>
				@endif
				@foreach($admins as $admin)

				<form method="POST" action="{{route('manageadmins.adminedit',$admin->id)}}" class="form-horizontal" enctype="multipart/form-data">
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
                    <input type="hidden" name="id"   value="{{$admin->id}}" class="form-control" >
						
						<div class="row">
							<label style="color: black;" class="col-sm-2 label-on-left">Name</label>
                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label"></label>
									<input type="text" name="name"   value="{{$admin->name}}" class="form-control" >
									<span class="help-block">Please enter First Name of the download item.</span>
								</div>
                            </div>
						</div>
					
						
					<div class="row">
                            <label style="color: black;" class="col-sm-2 label-on-left">Select  role </label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <select class="form-control" name="roleid" value=""  id="pwsid"  >
                                        
                                    	<span style="display: none;">{{ $oldroleid =$adminroleid }} </span>
                                         @foreach($roles as $role)
                                         <span style="display: none;">{{$newrole =$role->id }} </span>
                                        <option value="{{$role->id}}" {{  $oldroleid== $newrole  ? 'selected' : '' }} >{{$role->name}} </option>
                                        @endforeach
                                     
                                    </select>
                                    <span class="help-block">Please select role of the admin</span>
                                </div>
                            </div>
                        </div>
                        	
							
						
					
                        
                    
						
                    

                        <!--##########################################################-->

                   
                    
                        <a href="/admin/contacts" class="btn btn-danger pull-right" >Cancel</a>
                        <input class="btn btn-success pull-right" type="submit" value="Update">
                        
					</div>
				</form>
				@endforeach
			</div>
		</div>
	</div>
</div>

		  @endsection