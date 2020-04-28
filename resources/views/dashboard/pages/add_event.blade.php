 @extends('dashboard.layouts.main')
@section('title')
  Home-Manage Events
@endsection
@section('content')

	<!--######################## Events Form #######################-->


		<div class="col-md-12">
			<div class="card">
				<h4 align="center">Event Details</h4>
				<form method="post" action="{{ route('event.add') }}" class="form-horizontal"  enctype="multipart/form-data">
					<!--div class="card-header card-header-text" data-background-color="rose">
						<h4 class="card-title"></h4>
					</div-->
					<div class="card-content">
						@if($message = Session::get('danger'))
                  <div class="alert alert-danger">
                    <strong>{{$message}}</strong>
                  </div>


                @endif
                {{csrf_field()}}
                    <!--div class="card-header card-header-text" data-background-color="rose">
                        <h4 class="card-title"></h4>
                    </div-->
                     @if(count($errors) > 0 )
                                        @foreach($errors->all() as $error)
                                            <p class="alert alert-danger">{{$error}}</p>
                                        @endforeach
                                    @endif
						<div class="row">
							<label class="col-sm-2 label-on-left"> Event Heading</label>

                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label"></label>
									<input type="text" class="form-control" name="e_heading" value="{{ old('e_heading') }}">
									<span class="help-block">Please enter event heading.</span>
								</div>
                            </div>
						</div>
						<div class="row">
							<label class="col-sm-2 label-on-left">Short Description</label>

                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label"></label>
									<input type="text" class="form-control" name="e_shortdesc"  value="{{ old('e_shortdesc') }}">
									<span class="help-block">Please enter short description.</span>
								</div>
                            </div>
                        </div>
                        <div class="row">
                                <label class="col-sm-2 label-on-left">Full Description</label>
    
                                <div class="col-sm-10">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <input type="text" class="form-control" name="e_longdesc" value="{{ old('e_longdesc') }}">
                                        <span class="help-block">Please enter full description.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                    <label class="col-sm-2 label-on-left">Organizer</label>
        
                                    <div class="col-sm-10">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label"></label>
                                            <input type="text" class="form-control" name="organizer_name" value="{{ old('organizer_name') }}">
                                            <span class="help-block">Please enter organizer name.</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                        <label class="col-sm-2 label-on-left">Contact No</label>
            
                                        <div class="col-sm-10">
                                            <div class="form-group label-floating is-empty">
                                                <label class="control-label"></label>
                                                <input type="text" name="contact_no" class="form-control" value="{{ old('contact_no') }}">
                                                <span class="help-block">Please enter contact number.</span>
                                            </div>
                                        </div>
                                    </div>
								<div class="row">
                                        <label class="col-sm-2 label-on-left">Date</label>
            
                                        <div class="col-sm-10">
                                            <div class="form-group label-floating is-empty">
                                                <label class="control-label"></label>
                                                <input type="date" name="e_date" class="form-control" value="">
                                                <span class="help-block">Please enter date.</span>
                                            </div>
                                        </div>
                                    </div>
						         	<div class="row">
                                        <label class="col-sm-2 label-on-left">Time</label>
            
                                        <div class="col-sm-10">
                                            <div class="form-group label-floating is-empty">
                                                <label class="control-label"></label>
                                                <input type="time" name="e_time" class="form-control" value="">
                                                <span class="help-block">Please enter time.</span>
                                            </div>
                                        </div>
                                    </div>
						            	<div class="row">
                                        <label class="col-sm-2 label-on-left">Venue</label>
            
                                        <div class="col-sm-10">
                                            <div class="form-group label-floating is-empty">
                                                <label class="control-label"></label>
                                                <input type="text" name="e_venue" class="form-control" value="">
                                                <span class="help-block">Please enter venue.</span>
                                            </div>
                                        </div>
                                    </div>
						       

                        <!--##########################################################-->

                       <div class="row">
                            <label class="col-sm-2 label-on-left">Main Image</label>
                            <label class="btn btn-file ">

                                Browse <input type="file" name="main_image">

                            </label>
                        </div>
                        <div class="row">
                                <label class="col-sm-2 label-on-left">Gallery Images(Max 5 Images)</label>
                                <label class="btn btn-file ">
    
                                    Browse <input type="file" name="gallery_img[]" multiple="multiple" >
    
                                </label>
                            </div>
                              <div class="row">
                                <label class="col-sm-2 label-on-left">Video Embed Code</label>
    
                                <div class="col-sm-10">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <input type="text" class="form-control" name="event_video" value="{{old('event_video') }}">
                                        <span class="help-block">Please enter Video embed code</span>
                                    </div>
                                </div>
                            </div>      
                        <a href="/events" class="btn btn-danger pull-right"  >Cancel</a>
                        <input class="btn btn-success pull-right" type="submit" value="Post">
                        
					</div>
				</form>
			</div>
        </div>
        
    


@endsection