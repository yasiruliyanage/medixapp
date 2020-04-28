 @extends('dashboard.layouts.main')
@section('title')
  Home-Edit transfer request CEB UNION
@endsection
@section('content')
            <div class="container-fluid">
                                     <div class="row">
<div class="col-md-12">
			<div class="card">
				<h4 align="center" style="font-weight:500;font-size:20px;">Member Details</h4>
				@if($message = Session::get('danger'))
				  <div class="alert alert-danger">
				  	<strong>{{$message}}</strong>
				  </div>
				@endif
				@foreach($transferrequests as $transferrequest)
				<form method="POST" action="{{ route('transfer.editrequest',$transferrequest->t_ref_id)}}" class="form-horizontal" enctype="multipart/form-data">
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
                             <input type="hidden" name="t_ref_id" value="{{$transferrequest->t_ref_id}}" >
                            <label style="color: black;" class="col-sm-2 label-on-left">Emp ID </label>
                            
                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" name="emp_id"  value="{{$transferrequest->emp_id}}"class="form-control" value>
                                    <span class="help-block">Please enter Employee ID of the user.</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label style="color: black;" class="col-sm-2 label-on-left">Name</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" name="name" value="{{$transferrequest->name}}" class="form-control" value>
                                    <span class="help-block">Please enter First Name of the user.</span>
                                </div>
                            </div>
                        </div>
						<div class="row">
							<label style="color: black;" class="col-sm-2 label-on-left">Date Of Birth</label>

                        	<div class="col-sm-10">
								<div class="form-group label-floating is-empty">
									<label class="control-label"></label>
									<input type="date" name="dob"  value="{{$transferrequest->dob}}"  class="form-control" value>
									<span class="help-block">Please enter Date Of Birth of the user.</span>
								</div>
                            </div>
                        </div>
                      

                    
						 <div class="row">
                            <label style="color: black;" class="col-sm-2 label-on-left">Service Started Date on current Depo</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="date" name="r_d_f_p_w_s" value="{{ $transferrequest->r_d_f_p_w_s }}" class="form-control" value>
                                    <span class="help-block">Service Started Date on Current Depo</span>
                                </div>
                            </div>
                        </div>
                            <div class="row">
                            <label style="color: black;" class="col-sm-2 label-on-left">Permenant Address</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" name="address"  value="{{ $transferrequest->address }}" class="form-control" value>
                                    <span class="help-block">Please enter Permenant Address of the user.</span>
                                </div>
                            </div>
                        </div>
                            <div class="row">
                            <label style="color: black;" class="col-sm-2 label-on-left">Worked Years </label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" name="years" value="{{ $transferrequest->years }}" class="form-control" value>
                                    <span class="help-block"> Please enter Worked years on that depo. </span>
                                </div>
                            </div>
                        </div>
                            <div class="row">
                            <label style="color: black;" class="col-sm-2 label-on-left"> Reason For Transfer </label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" name="r_f_t"  value="{{ $transferrequest->r_f_t }}" class="form-control" value>
                                    <span class="help-block"> Please enter Reason For Transfer.</span>
                                </div>
                            </div>
                        </div>
                      
						
                        <div class="row">
                            <label style="color: black;" class="col-sm-2 label-on-left">Select  Current Workplace </label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <select class="form-control" name="p_w_s" value=""  id="pwsid"  >
                                        
                                    	<span style="display: none;">{{ $oldpws =$transferrequest->p_w_s }} </span>
                                         @foreach($pwsdepos as $pwsdepo)
                                         <span style="display: none;">{{ $newpws =$pwsdepo->placename }} </span>
                                        <option value="{{$pwsdepo->placename}}" {{  $oldpws== $newpws  ? 'selected' : '' }} >{{$pwsdepo->placename}} </option>
                                        @endforeach
                                     
                                    </select>
                                    <span class="help-block">Please select current workplace of the user.</span>
                                </div>
                            </div>
                        </div>

                           <div class="row">
                            <label style="color: black;" class="col-sm-2 label-on-left">Select 1st preference</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <select class="form-control" name="p1" value=""  id="p1"  >
                                        <option value=" " >Select your Preference </option>
                                        <span style="display: none;">{{ $oldp1s =$transferrequest->p_1 }} </span>
                                         @foreach($p1s as $p1)
                                         <span style="display: none;">{{ $newp1s =$p1->placename }} </span>
                                        <option value="{{$p1->placename}}" {{  $oldp1s== $newp1s  ? 'selected' : '' }} >{{$p1->placename}} </option>
                                        @endforeach
                                     
                                    </select>
                                    <span class="help-block">Please select current workplace of the user.</span>
                                </div>
                            </div>
                        </div>
                         <div class="row">
                            <label style="color: black;" class="col-sm-2 label-on-left">Select 2nd preference</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <select class="form-control" name="p2" value=""  id="p2"  >
                                        <option value=" " >Select your Preference </option>
                                        <span style="display: none;">{{ $oldp2s =$transferrequest->p_2 }} </span>
                                         @foreach($p2s as $p2)
                                         <span style="display: none;">{{ $newp2s =$p2->placename }} </span>
                                        <option value="{{$p2->placename}}" {{  $oldp2s== $newp2s  ? 'selected' : '' }} >{{$p2->placename}} </option>
                                        @endforeach
                                     
                                    </select>
                                    <span class="help-block">Please select current workplace of the user.</span>
                                </div>
                            </div>
                        </div>
                      

                            <div class="row">
                            <label style="color: black;" class="col-sm-2 label-on-left">Select 3rd preference</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <select class="form-control" name="p3" value=""  id="p3"  >
                                        
                                         <option value=" " >Select your Preference </option>
                                        <span style="display: none;">{{ $oldp3s =$transferrequest->p_3 }} </span>
                                         @foreach($p3s as $p3)
                                         <span style="display: none;">{{ $newp3s =$p3->placename }} </span>
                                        <option value="{{$p3->placename}}" {{  $oldp3s== $newp3s  ? 'selected' : '' }} >{{$p3->placename}} </option>
                                        @endforeach
                                     
                                    </select>
                                    <span class="help-block">Please select current workplace of the user.</span>
                                </div>
                            </div>
                        </div>


                      
                         


                          
						<div class="row">
							<label style="color: black;" class="col-sm-2 label-on-left">Maritial Status</label>
                            <div class="col-sm-10 checkbox-radios">
                            	<span style="display: none;">{{ $oldms= $transferrequest->m_s}}
                            	
                                      <?php if($oldms === 'Married'){
                                      	$msindicator= 'Married' ;
                                      }else{
                                      	  $msindicator= 'Unmarried';
                            	    }
                                      ?>
                            	 </span>
                            	<div class="radio">
									<label>
										<input type="radio" name="ms" value="Married" {{$msindicator== 'Married'  ? 'checked' : '' }}>
										Married
									</label>
								</div>

								<div class="radio">
									<label>
										<input type="radio" name="ms" value="Unmarried"  {{ $msindicator== 0 ? 'Unmarried' : '' }}>
										Unmarried
									</label>
								</div>
								
                            </div>
                        </div>
                        
                    
                        <a href="/admin/members" class="btn btn-danger pull-right" >Cancel</a>
                        <input class="btn btn-success pull-right" type="submit" value="Update">
                        
					</div>
				</form>
				@endforeach
			</div>
		</div>
	</div>
</div>

		  @endsection