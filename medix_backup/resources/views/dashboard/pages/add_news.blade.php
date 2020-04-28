 @extends('dashboard.layouts.main')
@section('title')
  Home-Manage News CEB UNION
@endsection
@section('content')

	<!--######################## Events Form #######################-->


		<div class="col-md-12">
			<div class="card">
				<h4 align="center">News Details</h4>
				<form method="post" action="{{ route('news.add') }}" class="form-horizontal"  enctype="multipart/form-data">
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
							<label class="col-sm-2 label-on-left"> News Heading</label>

                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label"></label>
									<input type="text" class="form-control" name="e_heading" value="{{ old('e_heading') }}">
									<span class="help-block">Please enter news heading.</span>
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
                            <label class="col-sm-2 label-on-left">Select News Tag</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <select class="form-control" name="tag" value="{{ old('newstag') }}">
                                        <option value="Community">Community </option>
                                        <option value="Government">Government </option>
                                        <option value="Welfare">Welfare</option>
                                        <option value="Branch">Branch</option>
                                    </select>
                                    <span class="help-block">Please select news  category</span>
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
                                        <input type="text" class="form-control" name="news_video" value="{{ old('news_video') }}">
                                        <span class="help-block">Please enter Video embed code</span>
                                    </div>
                                </div>
                            </div>      
                        <a href="{{route('news.newses')}}" class="btn btn-danger pull-right"  >Cancel</a>
                        <input class="btn btn-success pull-right" type="submit" value="Post">
                        
					</div>
				</form>
			</div>
        </div>
        
    


@endsection