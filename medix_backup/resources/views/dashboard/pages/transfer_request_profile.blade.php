 @extends('dashboard.layouts.main')
@section('title')
  Home-Edit transfer request CEB UNION
@endsection
@section('content')
            <div class="container-fluid">
                                     <div class="row">
<div class="col-md-12">
			<div class="card">
				<h4 align="center" style="font-weight:500;font-size:20px;">Complete Transfer Request</h4>
				@if($message = Session::get('danger'))
				  <div class="alert alert-danger">
				  	<strong>{{$message}}</strong>
				  </div>
				@endif
                @if($message = Session::get('success'))
                  <div class="alert alert-danger">
                    <strong>{{$message}}</strong>
                  </div>
                @endif
				@foreach($requestsinfo as $transferrequest)
				<form method="POST" action="{{ route('transfer.requestcomplete',$transferrequest->t_ref_id)}}" class="form-horizontal" enctype="multipart/form-data">
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
                             <input type="hidden" name="emp_id" value="{{$transferrequest->emp_id}}" >
                            <label style="color: black;" class="col-sm-2 label-on-left">Emp ID </label>
                            
                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" name="emp_id_sample"  value="{{$transferrequest->emp_id}}"class="form-control" disabled>
                                    <span class="help-block">Please enter Employee ID of the user.</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label style="color: black;" class="col-sm-2 label-on-left">Name</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" name="name" value="{{$transferrequest->name}}" class="form-control" disabled>
                                    <span class="help-block">Please enter First Name of the user.</span>
                                </div>
                            </div>
                        </div>
                         <div class="row">
                            <label style="color: black;" class="col-sm-2 label-on-left">Current Workstation</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" name="name" value="{{$transferrequest->p_w_s}}" class="form-control" disabled>
                                    <span class="help-block">Please enter First Name of the Current workstation</span>
                                </div>
                            </div>
                        </div>
				
						 <div class="row">
                            <label style="color: black;" class="col-sm-2 label-on-left">Service Started Date on current Depo</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="date" name="r_d_f_p_w_s" value="{{ $transferrequest->r_d_f_p_w_s }}" class="form-control" disabled>
                                    <span class="help-block">Service Started Date on Current Depo</span>
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
                            <label style="color: black;" class="col-sm-2 label-on-left">Select your preference</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <select class="form-control" name="preference" value=""  id="p1"  >
                                        
                                         <option value="" >Select Your Preference</option>
                                    <?php if(!empty($preference1name)){?>
                                        <option value="{{$preference1name}}"  >1st-{{$preference1name}}-vacancies-{{$preference1vcount}}  </option>
                                     <?php }?>
                                     <?php if(!empty($preference2name)){?>
                                         <option value="{{$preference2name}}"  >2nd-{{$preference2name}}-vacancies-{{$preference2vcount}}  </option>
                                     <?php }?>
                                      <?php if(!empty($preference3name)){?>
                                         <option value="{{$preference3name}}"  >3rd-{{$preference3name}}-vacancies-{{$preference3vcount}}  </option>
                                     <?php }?>
                                     <?php foreach ($depos as  $depo) {



                                        if($depo->placename==$transferrequest->p_w_s){

                                        }else{
                                            ?>
                                        <option value="{{$depo->placename}}">{{$depo->placename}}-vacancies-{{$depo->v_count}}</option>

                                       <?php }

                                        
                                         
                                     }?>

   
                                       
                                     
                                    </select>
                                    <span class="help-block">Please select preference of transfer request.</span>
                                </div>
                            </div>
                        </div>
                      <div class="row">
                            <label style="color: black;" class="col-sm-2 label-on-left">Special Notes(Required)</label>
                        <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
    <textarea class="form-control" name="notes" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
</div>
</div>
                        

                        


                          
						
                        
                    
                        <a href="/admin/transfersboard/allrequests" class="btn btn-danger pull-right" >Cancel</a>
                        <input class="btn btn-success pull-right" type="submit" value="Complete Transfer">
                        
					</div>
				</form>
				@endforeach
			</div>
		</div>
	</div>
</div>

		  @endsection