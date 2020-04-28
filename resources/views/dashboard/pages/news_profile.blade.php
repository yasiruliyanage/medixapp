   @extends('dashboard.layouts.main')

@section('title')
  Profile - Manage Members CEB UNION
@endsection
@section('content')
  <div class="container-fluid">
                                     <div class="row">
<div class="col-md-12">
		@foreach($news as $new)
			<div class="card">
				<h4 align="center">News Details</h4>
				<form method="post" action="" class="form-horizontal">
					<!--div class="card-header card-header-text" data-background-color="rose">
						<h4 class="card-title"></h4>
					</div-->
					<div class="card-content">
						<div class="row">
							<label class="col-sm-2 label-on-left"> News Heading</label>

                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label"></label>
									<input type="text" class="form-control"  value="{{$new->header_title}}" disabled>
								
								</div>
                            </div>
						</div>
						
						<div class="row">
							<label class="col-sm-2 label-on-left">Full Description</label>

                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label"></label>
									<input type="text" class="form-control"  value="{{$new->long_desc}}"  disabled>
								
								</div>
                            </div>
                        </div>
                     <div class="row">
    <label class="col-sm-2 label-on-left">News Category</label>

    <div class="col-sm-10">
        <div class="form-group label-floating is-empty">
            <label class="control-label"></label>
            <input type="text" class="form-control"  value="{{$new->newstag}}"  disabled>
            
        </div>
    </div>
</div>
						

                        <!--##########################################################-->

                        <div class="row">
                                <label class="col-sm-2 label-on-left">Main Image</label>
                                  <div class="col-md-3 col-sm-4 col-xs-6"><img class="img-responsive" src="{{URL::to('/')}}/news/mainimg/{{$new->main_image}}" /></div>
                               
                            </div>
                            <div class="row" style="padding-top: 40px;">
                                    <label class="col-sm-2 label-on-left">Gallery Images</label>
                                    
                                    
                                         @foreach (explode(",",$new->gallery_img) as $gallery_img)
                                                  
                                                 
                                               <div class="col-md-2 col-sm-4 col-xs-6 " style="padding-top: 5px;padding-bottom: 5px;"><img class="img-responsive" src="{{URL::to('/')}}/news/news_gallery_images/{{$gallery_img}}" /></div>
                                      
                                       
                                        @endforeach
                                </div>
                                @if(!empty($new->video))
                            <div class="row">
                                    <label class="col-sm-2 label-on-left">Video</label>
                                    <video width="400" controls>
                                            <source src="$" type="video/mp4">
                                           
                                          </video>
                                </div> 
                                @endif      
                        <a href="{{route('news.newses')}}" class="btn btn-info pull-right" >Back</a>
                        <!--a href="{{action('NewsController@edit',$new->id)}}" class="btn btn-success pull-right" >Edit</a-->
                        <!--form   method="post"> 
                        <button type="submit" formaction="{{action('NewsController@destroy',$new->id)}}" class="btn btn-danger pull-right" onclick="return confirm('Are you sure you want to Delete?')" >Delete</button>      
                        
                    </form-->
                        
					</div>
				</form>
			</div>
        </div>
       </div>
      </div>

     @endforeach

		  @endsection
