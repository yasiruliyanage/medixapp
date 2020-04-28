 @extends('dashboard.layouts.main')
@section('title')
  Home-Edit  Decession - Medix
@endsection
@section('content')
<?php $nav = 'school_admin'; ?>
            <div class="container-fluid">
                                     <div class="row">
<div class="col-md-12">
			<div class="card">
				<h4 align="center" style="font-weight:500;font-size:20px;">Question Details</h4>
				@if($message = Session::get('danger'))
				  <div class="alert alert-danger" style="display: none;">
				  	<strong>{{$message}}</strong>
				  </div>
				@endif
                @if($message = Session::get('success'))
                  <div class="alert alert-danger" style="display: none;">
                    <strong>{{$message}}</strong>
                  </div>
                @endif
				@foreach($covid_decession as $decession)
				<form method="POST" action="{{ route('covid19questions.decessionedit',$decession->id)}}" class="form-horizontal" enctype="multipart/form-data">0
				{{csrf_field()}}
					
					<!--div class="card-header card-header-text" data-background-color="rose">
						<h4 class="card-title"></h4>
					</div-->
                     @if(count($errors) > 0 )
                                        @foreach($errors->all() as $error)
                                            <p class="alert alert-danger" style="display: none;">{{$error}}</p>
                                        @endforeach
                                    @endif
					<div class="card-content">

						<div class="row">
                        
						<div class="row">
							<label style="color: black;" class="col-sm-2 label-on-left">Decession Name</label>

                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label"></label>
									<input type="text" name="decession_fact"   value="{{$decession->decission_factor}}" class="form-control" disabled >
									<span class="help-block">Please enter decession fact</span>
								</div>
                            </div>
						</div>
						<div class="row">
							<label style="color: black;" class="col-sm-2 label-on-left">Percentage</label>

                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label"></label>
									<input type="text" name="percentage"   value="{{$decession->percentage}}"  class="form-control" value>
									<span class="help-block">Please enter Percentage</span>
								</div> 
                            </div>
						</div>
                         
                      
                       
                    
                        <a href="/covid19questions/decessions" class="btn btn-danger pull-right" >Cancel</a>
                        <input class="btn btn-success pull-right" type="submit" value="Update">
                        
					</div>
				</form>
				@endforeach
			</div>
		</div>
	</div>
</div>

		  @endsection