@extends('frontend.layouts.front')
@section('title')
  Event Details
@endsection
@section('content')

<div class="photo-gallery main-content overlayfix ">
	<section class="wf100 p80 ">
        <div  class="container">
				@foreach($events as $event)

            <div  class="intro">
                <h3  class="text-center">{{$event->header_title}}</h3>
            </div>
            
            <!--div id="mimg" class="col-md-12" style="text-align: center;">
                <img id="mmi"  style="width: 600px;height: 400px;" src="{{URL::to('/')}}/event/mainimg/{{$event->main_image}}">
            </div-->
             <div class="col-sm-10">
                <div class="form-group label-floating is-empty">
                    <label class="control-label">Organizer</label>
                    <input type="text" class="form-control" name="e_heading" value="{{$event->orgnizer}}" disabled>
                </div>
            </div>
            <div class="col-sm-10">
                <div class="form-group label-floating is-empty">
                    <label class="control-label">Contact No</label>
                    <input type="text" class="form-control" name="e_heading" value="{{$event->contactno}}" disabled>
                </div>
            </div>
            <div class="col-sm-10">
                <div class="form-group label-floating is-empty">
                    <label class="control-label">Date</label>
                    <input type="text" class="form-control" name="e_heading" value="{{$event->e_date}}" disabled>
                </div>
            </div>
 <div class="col-sm-10">
                <div class="form-group label-floating is-empty">
                    <label class="control-label">Time</label>
                    <input type="text" class="form-control" name="e_heading" value="{{$event->e_time}}" disabled>
                </div>
            </div>
            <div class="outro col-md-10" style="padding-top: 20px;">
                <textarea rows="4" class="form-control" disabled>
                    {{$event->short_desc}}
                </textarea>
               
            </div>
            <div >
            <div class="outro col-md-10" style="padding-top: 20px;">
                <textarea rows="15" class="form-control" disabled>
                    {{$event->long_desc}}
                </textarea>
               
            </div>
            <div class="col-sm-10">
                <div class="form-group label-floating is-empty">
                    <label class="control-label">Video Link: </label>
                    <a href="" target="_blank"></a>
                </div>
            </div>
           
           
				<div class="row photos col-md-12" style="">
        @foreach (explode(",",$event->gallery_img) as $gallery_img)
            <div class="col-sm-3 col-md-2  item">
                <a  href="{{URL::to('/')}}/event/event_gallery_images/{{$gallery_img}}" data-lightbox="photos">
                        <img style="width: 175px;height: 130px;padding-right: 1px;padding-top: 10px;padding-bottom: 20px"  class="img-fluid" src="{{URL::to('/')}}/event/event_gallery_images/{{$gallery_img}}">
                    </a>
                </div>
        @endforeach
            </div>
            <div class="col-sm-10">
                <div class="form-group label-floating is-empty">
                    <label class="control-label">Venue</label>
                    <input type="text" class="form-control" name="e_heading" value="{{$event->e_venue}}" disabled>
                </div>
                 <button  class="btn btn-warning pull-right" onclick="goBack()">Go Back</button>
            </div>

            </div>
           @endforeach
        </div>
</section>
    </div>
 

<script>
function goBack() {
  window.history.back();
}
</script> 


@endsection