 @extends('dashboard.layouts.main')
@section('title')
  Home-Manage Downloads
@endsection
@section('content')
            <div class="container-fluid" style="padding-bottom:0px;">
                                     <div class="row">
<div class="col-md-12">
			<div class="card">
				<h4 align="center" style="font-weight:500;font-size:20px;">Application for Add New Download Item </h4>
				@if($message = Session::get('danger'))
				  <div class="alert alert-danger">
				  	<strong>{{$message}}</strong>
				  </div>


				@endif
				<form id="myfrm" method="post" action="{{ route('downloaditems.add') }}" class="form-horizontal" enctype="multipart/form-data">
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

					
						<div class="row">
							<label style="color: black;" class="col-sm-2 label-on-left">Name</label>

                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label"></label>
									<input type="text" name="name" value="{{ old('name') }}" class="form-control" value>
									<span class="help-block">Please enter  Name of the download item.</span>
								</div>
                            </div>
						</div>
					
						
					
						
							
							<div class="row">
							<label style="color: black;" class="col-sm-2 label-on-left">Description</label>

                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label"></label>
									<input type="text" name="description"  value="{{ old('description') }}" class="form-control" value>
									<span class="help-block">Please enter description about download item.</span>
								</div>
                            </div>
                        </div>
							
						
					
                        
                       <div class="row">
                            <label style="color: black;" class="col-sm-2 label-on-left">Attachment</label>
                            <label class="btn btn-file">

                                Upload File <input type="file" name="attachmentfile" value="{{ old('attachmentfile') }}">

                            </label>
                        </div>
						
					
						
					
						
						
                        <!--##########################################################-->
						
                        <a href="/admin/home" class="btn btn-danger pull-right" >Back</a>
						<a href="" onclick="" class="btn btn-primary pull-right" >Reset</a>
                        <input class="btn btn-success pull-right" type="submit" value="Save">
                        <input class="btn btn-warning pull-right" type="submit" value="Save And New">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script>
function myFunction() {
  document.getElementById("myfrm").reset();
}
</script>
		  @endsection