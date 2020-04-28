 @extends('dashboard.layouts.main')
@section('title')
  Create Question
@endsection
@section('content')
<?php $nav = 'school_admin'; ?>
            <div class="container-fluid" style="padding-bottom:0px;">
                                     <div class="row">
<div class="col-md-12">
			<div class="card">
				<h4 align="center" style="font-weight:500;font-size:20px;">Add New Questions  </h4>
				@if($message = Session::get('danger'))
				  <div class="alert alert-danger" style="display: none;">
				  	<strong>{{$message}}</strong>
				  </div>


				@endif
				@if($message = Session::get('success'))
				  <div class="alert alert-success" style="display: none;">
				  	<strong>{{$message}}</strong>
				  </div>


				@endif
				<form id="myfrm" method="post" action="{{ route('covid19questions.add') }}" class="form-horizontal" enctype="multipart/form-data">
					{{csrf_field()}}
               @if(count($errors) > 0 )
                                        @foreach($errors->all() as $error)
                                            <p class="alert alert-danger">{{$error}}</p>
                                        @endforeach
                                    @endif
					<div class="card-content">

						
						<div class="row">
							<label style="color: black;" class="col-sm-2 label-on-left">Question Sinhala</label>

                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label"></label>
									<input type="text" name="question_si" value="{{ old('question_si') }}" class="form-control">
									<span class="help-block">Please enter question sinhala.</span>
								</div>
                            </div>
						</div>
						<div class="row">
							<label style="color: black;" class="col-sm-2 label-on-left">Question English</label>

                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label"></label>
									<input type="text" name="question_en" value="{{ old('question_en') }}"  class="form-control" >
									<span class="help-block">Please enter question English</span>
								</div> 
                            </div>
						</div>
						<div class="row">
                            <label style="color: black;" class="col-sm-2 label-on-left">Question Tamil</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" name="question_ta" class="form-control" value="{{old('question_ta')}}" >
                                    <span class="help-block">Please enter question tamil</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label style="color: black;" class="col-sm-2 label-on-left">Marks</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" name="marks" class="form-control" value="{{old('marks')}}" >
                                    <span class="help-block">Please enter Marks for Question</span>
                                </div>
                            </div>
                        </div>
						
						
                        <!--##########################################################-->
						
                        <a href="/covid19appliction" class="btn btn-danger pull-right" >Back</a>
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