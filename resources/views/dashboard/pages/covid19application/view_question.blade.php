 @extends('dashboard.layouts.main')
@section('title')
  Home-Edit  Question - Medix
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
				@foreach($covid_questions as $question)
				<form method="POST"  class="form-horizontal" enctype="multipart/form-data">
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
							<label style="color: black;" class="col-sm-2 label-on-left">Question Sinhala</label>

                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label"></label>
									<input type="text" name="question_si"   value="{{$question->question_si}}" class="form-control" disabled>
									<span class="help-block">Please enter Question in  sinhala</span>
								</div>
                            </div>
						</div>
						<div class="row">
							<label style="color: black;" class="col-sm-2 label-on-left">Question English</label>

                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label"></label>
									<input type="text" name="question_en"   value="{{$question->question_en}}"  class="form-control" disabled>
									<span class="help-block">Please enter Question Sinhala</span>
								</div> 
                            </div>
						</div>
                          <div class="row">
                            <label style="color: black;" class="col-sm-2 label-on-left">Question in Tamil</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" name="question_ta" class="form-control" placeholder="{{$question->question_ta}}" value="{{$question->question_ta}}" disabled >
                                    <span class="help-block">Please enter Question Sinhala</span>
                                </div>
                            </div>
                        </div>
                      
                       
                    
                        <a href="/covid19questions" class="btn btn-danger pull-right" >Cancel</a>
                        <input class="btn btn-success pull-right" type="submit" value="Update">
                        
					</div>
				</form>
				@endforeach
			</div>
		</div>
	</div>
</div>

		  @endsection