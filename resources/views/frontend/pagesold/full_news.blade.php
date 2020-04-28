@extends('frontend.layouts.front')
@section('title')
  News Details
@endsection
@section('content')

<div class="photo-gallery main-content overlayfix">
	<section class="wf100 p80 ">
        <div class="container">
			@foreach($news as $new)
            <div class="intro">
                <h3 class="text-center">{{$new->header_title}}</h3>
                <p class="text-center"> </p>
            </div>
			<div class="outro col-md-10" style="padding-top: 20px;">
                <div class="form-group label-floating is-empty">
                    <label class="control-label">News Tag</label>
                    <input type="text" class="form-control" name="e_heading" value="{{$new->newstag}}" disabled>
                </div>
            </div>
            <div class="outro col-md-10" style="padding-top: 20px;">
               
                 <textarea rows="15" class="form-control" disabled>
                    {{$new->long_desc}}
                </textarea>
            </div>
            
            <div class="outro col-md-10" style="padding-top: 20px;">
                <div class="form-group label-floating is-empty">
                    <label class="control-label">Video Link: </label>
                    <a href="{{$new->video}}" target="_blank">{{$new->video}}</a>
                    
                    
                </div>
            </div>
          <div class="row photos col-md-12">
				   @foreach (explode(",",$new->gallery_img) as $gallery_img)
                                                  
                                                  
                                                     <div class="col-sm-3 col-md-2  item">
                    <a  href="{{URL::to('/')}}/news/news_gallery_images/{{$gallery_img}}" data-lightbox="photos">
                        <img style="width: 175px;height: 130px;padding-right: 1px;padding-top: 10px;"  class="img-fluid" src="{{URL::to('/')}}/news/news_gallery_images/{{$gallery_img}}">
                    </a>
                </div>
                                        @endforeach
              
              
            </div>
            <div class="col-sm-10">
               <button  class="btn btn-warning pull-right" onclick="goBack()">Go Back</button>
                
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