 @extends('dashboard.layouts.main')
@section('title')
  Home-Manage Events CEB UNION
@endsection
@section('content')

	<!--######################## Events Form #######################-->


		<div class="col-md-12">
			<div class="card">
				<h4 align="center">Event Details</h4>
                  @foreach($events as $event)
				<form method="post" action="{{ route('event.edit',$event->id) }}" class="form-horizontal"  enctype="multipart/form-data">
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
									<input type="text" class="form-control" name="e_heading" value="{{$event->header_title}}">
									<span class="help-block">Please enter event heading.</span>
								</div>
                            </div>
						</div>
						<div class="row">
							<label class="col-sm-2 label-on-left">Short Description</label>

                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label"></label>
									<input type="text" class="form-control" name="e_shortdesc"  value="{{$event->short_desc}}">
									<span class="help-block">Please enter short description.</span>
								</div>
                            </div>
                        </div>
                        <div class="row">
                                <label class="col-sm-2 label-on-left">Full Description</label>
    
                                <div class="col-sm-10">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <input type="text" class="form-control" name="e_longdesc" value="{{ $event->long_desc }}">
                                        <span class="help-block">Please enter full description.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                    <label class="col-sm-2 label-on-left">Organizer</label>
        
                                    <div class="col-sm-10">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label"></label>
                                            <input type="text" class="form-control" name="organizer_name" value="{{$event->orgnizer}}">
                                            <span class="help-block">Please enter organizer name.</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                        <label class="col-sm-2 label-on-left">Contact No</label>
            
                                        <div class="col-sm-10">
                                            <div class="form-group label-floating is-empty">
                                                <label class="control-label"></label>
                                                <input type="text" name="contact_no" class="form-control" value="{{ $event->contactno }}">
                                                <span class="help-block">Please enter contact number.</span>
                                            </div>
                                        </div>
                                    </div>
						
							<div class="row">
                                        <label class="col-sm-2 label-on-left">Date</label>
            
                                        <div class="col-sm-10">
                                            <div class="form-group label-floating is-empty">
                                                <label class="control-label"></label>
                                                <input type="date" name="e_date" class="form-control" value="{{ $event->e_date }}">
                                                <span class="help-block">Please enter date.</span>
                                            </div>
                                        </div>
                                    </div>
						         	<div class="row">
                                        <label class="col-sm-2 label-on-left">Time</label>
            
                                        <div class="col-sm-10">
                                            <div class="form-group label-floating is-empty">
                                                <label class="control-label"></label>
                                                <input type="time" name="e_time" class="form-control" value="{{ $event->e_time }}">
                                                <span class="help-block">Please enter time.</span>
                                            </div>
                                        </div>
                                    </div>
						            	<div class="row">
                                        <label class="col-sm-2 label-on-left">Venue</label>
            
                                        <div class="col-sm-10">
                                            <div class="form-group label-floating is-empty">
                                                <label class="control-label"></label>
                                                <input type="text" name="e_venue" class="form-control" value="{{ $event->e_venue }}">
                                                <span class="help-block">Please enter venue.</span>
                                            </div>
                                        </div>
                                    </div>
						

                        <!--##########################################################-->

                       <div class="row">
                            <label class="col-sm-2 label-on-left">Main Image</label>
                            <label class="btn btn-file ">

                                Browse <input type="file" name="main_image" value="">

                            </label>
                        </div>
                        <div class="row">
                                <label class="col-sm-2 label-on-left">Gallery Images(Max 5 Images)</label>
                                <label class="btn btn-file ">
    
                                    Browse <input type="file" name="gallery_img[]" value="" multiple="multiple" >
    
                                </label>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 label-on-left">Video URL</label>
    
                                <div class="col-sm-10">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <input type="text" class="form-control" name="event_video" value="{{$event->video }}">
                                        <span class="help-block">Please enter Video embed code</span>
                                    </div>
                                </div>
                            </div>       
                        <a href="/events" class="btn btn-danger pull-right"  >Cancel</a>
                        <input class="btn btn-success pull-right" type="submit" value="Post">
                        
					</div>
				</form>
                @endforeach
			</div>
        </div>
        
    


@endsection