   @extends('dashboard.layouts.main')

@section('title')
  Profile - Events CEB UNION
@endsection
@section('content')
  <div class="container-fluid">
                                     <div class="row">
<div class="col-md-12">
		@foreach($events as $event)
			<div class="card">
				<h4 align="center" style="font-weight:500;font-size:20px;">Event Details</h4>
				<form method="post" action="" class="form-horizontal">
					<!--div class="card-header card-header-text" data-background-color="rose">
						<h4 class="card-title"></h4>
					</div-->
					<div class="card-content">
						<div class="row">
							<label class="col-sm-2 label-on-left"> Event Heading</label>

                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label"></label>
									<input type="text" class="form-control"  value="{{$event->header_title}}" disabled>
								
								</div>
                            </div>
						</div>
							<div class="row">
							<label class="col-sm-2 label-on-left">Short Description</label>

                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label"></label>
									<input type="text" class="form-control"  value="{{$event->short_desc}}"  disabled>
								
								</div>
                            </div>
                        </div>
						<div class="row">
							<label class="col-sm-2 label-on-left">Full Description</label>

                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label"></label>
									<input type="text" class="form-control"  value="{{$event->long_desc}}"  disabled>
								
								</div>
                            </div>
                        </div>
                        <div class="row">
                                <label class="col-sm-2 label-on-left">Organizer</label>
    
                                <div class="col-sm-10">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <input type="text" class="form-control" value="{{$event->orgnizer}}" disabled>
                                    
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                    <label class="col-sm-2 label-on-left">Contact No</label>
        
                                    <div class="col-sm-10">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label"></label>
                                            <input type="text" class="form-control"  value="{{$event->contactno}}" disabled>
                                        
                                        </div>
                                    </div>
                                </div>
						  <div class="row">
                                    <label class="col-sm-2 label-on-left">Date</label>
        
                                    <div class="col-sm-10">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label"></label>
                                            <input type="text" class="form-control"  value="{{$event->e_date}}" disabled>
                                        
                                        </div>
                                    </div>
                                </div>
						  <div class="row">
                                    <label class="col-sm-2 label-on-left">Time</label>
        
                                    <div class="col-sm-10">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label"></label>
                                            <input type="text" class="form-control"  value="{{$event->e_time}}" disabled>
                                        
                                        </div>
                                    </div>
                                </div>
						  <div class="row">
                                    <label class="col-sm-2 label-on-left">Venue</label>
        
                                    <div class="col-sm-10">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label"></label>
                                            <input type="text" class="form-control"  value="{{$event->e_venue}}" disabled>
                                        
                                        </div>
                                    </div>
                                </div>
						

                        <!--##########################################################-->

                        <div class="row">
                                <label class="col-sm-2 label-on-left">Main Image</label>
                                  <div class="col-md-3 col-sm-4 col-xs-6"><img class="img-responsive" src="{{URL::to('/')}}/event/mainimg/{{$event->main_image}}" /></div>
                               
                            </div>
                            <div class="row" style="padding-top: 40px;">
                                    <label class="col-sm-2 label-on-left">Gallery Images</label>
                                    
                                    
                                         @foreach (explode(",",$event->gallery_img) as $gallery_img)
                                                  
                                                 
                                               <div class="col-md-2 col-sm-4 col-xs-6 " style="padding-top: 5px;padding-bottom: 5px;"><img class="img-responsive" src="{{URL::to('/')}}/event/event_gallery_images/{{$gallery_img}}" /></div>
                                      
                                       
                                        @endforeach
                                </div>
                                @if(!empty($event->video))
                            <div class="row">
                                    <label class="col-sm-2 label-on-left">Video</label>
                                    <video width="400" controls>
                                            <source src="$" type="video/mp4">
                                           
                                          </video>
                                </div> 
                                @endif      
                        <a href="{{route('event.events')}}" class="btn btn-info pull-right" >Back</a>
                        <!--a href="{{action('EventController@edit',$event->id)}}" class="btn btn-success pull-right" >Edit</a-->
                        <!--form   method="post"> 
                        <button type="submit" formaction="{{action('EventController@destroy',$event->id)}}" class="btn btn-danger pull-right" onclick="return confirm('Are you sure you want to Delete?')" >Delete</button>      
                        
                    </form-->
                        
					</div>
				</form>
			</div>
        </div>
       </div>
      </div>

      @endforeach

		  @endsection
