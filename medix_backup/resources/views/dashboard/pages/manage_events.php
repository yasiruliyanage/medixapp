 @extends('dashboard.layouts.main')
@section('title')
  Home-Manage Events CEB UNION
@endsection
@section('content')

	<!--######################## Events Form #######################-->


		<div class="col-md-12">
			<div class="card">
				<h4 align="center">Event Details</h4>
				<form method="post" action="" class="form-horizontal">
					<!--div class="card-header card-header-text" data-background-color="rose">
						<h4 class="card-title"></h4>
					</div-->
					<div class="card-content">
						<div class="row">
							<label class="col-sm-2 label-on-left">Event ID</label>

                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label"></label>
									<input type="text" class="form-control" value>
									<span class="help-block">Please enter Event ID.</span>
								</div>
                            </div>
						</div>
						<div class="row">
							<label class="col-sm-2 label-on-left"> Event Heading</label>

                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label"></label>
									<input type="text" class="form-control" value>
									<span class="help-block">Please enter event heading.</span>
								</div>
                            </div>
						</div>
						<div class="row">
							<label class="col-sm-2 label-on-left">Short Description</label>

                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label"></label>
									<input type="text" class="form-control" value>
									<span class="help-block">Please enter short description.</span>
								</div>
                            </div>
                        </div>
                        <div class="row">
                                <label class="col-sm-2 label-on-left">Full Description</label>
    
                                <div class="col-sm-10">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <input type="text" class="form-control" value>
                                        <span class="help-block">Please enter full description.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                    <label class="col-sm-2 label-on-left">Organizer</label>
        
                                    <div class="col-sm-10">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label"></label>
                                            <input type="text" class="form-control" value>
                                            <span class="help-block">Please enter organizer name.</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                        <label class="col-sm-2 label-on-left">Contact No</label>
            
                                        <div class="col-sm-10">
                                            <div class="form-group label-floating is-empty">
                                                <label class="control-label"></label>
                                                <input type="text" class="form-control" value>
                                                <span class="help-block">Please enter contact number.</span>
                                            </div>
                                        </div>
                                    </div>
						

                        <!--##########################################################-->

                       <div class="row">
                            <label class="col-sm-2 label-on-left">Main Image</label>
                            <label class="btn btn-file ">

                                Browse <input type="file">

                            </label>
                        </div>
                        <div class="row">
                                <label class="col-sm-2 label-on-left">Gallery Images(Max 5 Images)</label>
                                <label class="btn btn-file ">
    
                                    Browse <input type="file">
    
                                </label>
                            </div>
                            <div class="row">
                                    <label class="col-sm-2 label-on-left">Video</label>
                                    <label class="btn btn-file ">
        
                                        Browse <input type="file">
        
                                    </label>
                                </div>       
                        <a href="event.html" class="btn btn-danger pull-right"  >Cancel</a>
                        <input class="btn btn-success pull-right" type="submit" value="Post">
                        
					</div>
				</form>
			</div>
        </div>
        
        <div class="content">
                <div class="container-fluid">
                         <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-icon" data-background-color="rose">
                <i class="material-icons">assignment</i>
            </div>
    
            <div class="card-content">
                <h4 class="card-title">Event Details</h4>
                <div class="table-responsive">
                     <form action="/deleteall"  method="post">
                                @csrf
                                @method('DELETE')
                    <table id="datatables" class="table table-striped table-no-bordered table-hover"  cellspacing="0" width="100%" style="width:100%" style="border: 1px solid black; ">
                        <thead>
                            <tr >

                                    <th scope="col">ID</th>
                                    <th scope="col">Heading</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Short Description</th>
                                    <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                             @foreach($events as $event)
                                <tr>
                                     <td> <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="ids[]"   class="selectbox" value="{{$member->id}}" >
                                                        </label>
                                                    </div> </td>
                                        <th scope="row">{{$event->id}}</th>
                                        <td>{{$event->header_title}}</td>
                                        <td>
                                            <img src="{{URL::to('/')}}/event/mainimg/{{$event->main_image}}" alt="">
                                             @foreach (explode(', ', $event->json_decode(gallery_img)) as $gallery_img)
                                                  
                                                   <img src="{{URL::to('/')}}/event/mainimg/event_gallery_images/{{ $gallery_img }}" alt="">
                                        @endforeach
                                        </td>
                                        <td>
                                            <p>{{$event->short_desc}}</p>
                                        </td>
                                        <td class="td-actions text-left">
                                                <a type="button" class="btn btn-info" href="{{route('event.show',$event->id)}}" ><i class="material-icons">person</i></a>
                                                <a href="{{action('EventController@edit',$event->id)}}" type="button"><i class="material-icons btn-primary">create</i></a>
                                              
                                                 <button type="submit" formaction="{{action('EventController@destroy',$event->id)}}" ><i class="material-icons  btn btn-danger ">delete</i> </button>
                                         </td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                  </form>
                </div>
            </div>
        </div>
        <a type="button" href="event.html" class="btn btn-danger pull-right" onclick="return confirm('Are you sure you want to Delete?')">Delete All</a>
    </div>
    
    
    
    
    </div>
    
                </div>
            </div>


@endsection
