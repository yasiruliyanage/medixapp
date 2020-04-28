 @extends('districtagent.layouts.main')

@section('title')
  Profile - Manage District  Agents CTSU
@endsection
@section('content')
<?php $nav = 'school_admin'; ?>
            <div class="container-fluid">
                                     <div class="row">
<div class="col-md-12">
	@foreach($agents as $member)
			<div class="card">
				<h4 align="center">Province Agent Details - {{$member->name}} {{$member->lname}} , {{$member->ps_number}}</h4>
				  <form method="get" action="manage_member.html" class="form-horizontal">
					<!--div class="card-header card-header-text" data-background-color="rose">
						<h4 class="card-title"></h4>
					</div-->
					<div class="card-content">
                        <div class="row">
                            <label class="col-sm-2 label-on-left">Emp No</label>

                         <div class="col-sm-10">
                            <div class="form-group label-floating is-empty">
                             <label class="control-label"></label>
                             <input type="text"  value="{{$member->emp_id}}"class="form-control" disabled>
                            
                         </div>
                     </div>
                 </div>
						<div class="row">
							<label class="col-sm-2 label-on-left">Reg  ID</label>

                         <div class="col-sm-10">
                            <div class="form-group label-floating is-empty">
                             <label class="control-label"></label>
                             <input type="text"  value="{{$member->reg_id}}"class="form-control" disabled>
                            
                         </div>
                     </div>
                 </div>
                 <div class="row">
    <label class="col-sm-2 label-on-left">Paysheet Number</label>

    <div class="col-sm-10">
        <div class="form-group label-floating is-empty">
            <label class="control-label"></label>
            <input type="text" class="form-control" value="{{$member->ps_number}}" disabled>
        
        </div>
    </div>
</div>

                 <div class="row">
                   <label class="col-sm-2 label-on-left">First Name</label>

                   <div class="col-sm-10">
                    <div class="form-group label-floating is-empty">
                     <label class="control-label"></label>
                     <input type="text" class="form-control" value="{{$member->name}}" disabled>
                     
                 </div>
             </div>
         </div>
         <div class="row">
           <label class="col-sm-2 label-on-left">Last Name</label>

           <div class="col-sm-10">
            <div class="form-group label-floating is-empty">
             <label class="control-label"></label>
             <input type="text" class="form-control" value="{{$member->lname}}" disabled>
           
         </div>
     </div>
 </div>

 <div class="row">
   <label class="col-sm-2 label-on-left">Date Of Birth</label>

   <div class="col-sm-10">
    <div class="form-group label-floating is-empty">
     <label class="control-label"></label>
     <input type="text" class="form-control" value="{{$member->dob}}" disabled>
     
 </div>
</div>
</div>
<div class="row">
        <label class="col-sm-2 label-on-left">NIC Number</label>
     
        <div class="col-sm-10">
         <div class="form-group label-floating is-empty">
          <label class="control-label"></label>
          <input type="text" class="form-control" value="{{$member->nic}}" disabled>
          
      </div>
     </div>
     </div>

<!--##########################################################-->

<div class="row">
    <label class="col-sm-2 label-on-left">Photo</label>
    <picture>
        <img src="{{URL::to('/')}}/provinceagents/profileimg/{{$member->profile_img}}" alt="" style="width:200px;height: 200px;" disabled>
      </picture>
</div>

<div class="row">
   <label class="col-sm-2 label-on-left">Mobile Number</label>

   <div class="col-sm-10">
    <div class="form-group label-floating is-empty">
     <label class="control-label"></label>
     <input type="text"   value="{{$member->mobile}}" class="form-control" disabled>
    
 </div>
</div>
</div>
<div class="row">
   <label class="col-sm-2 label-on-left">Home Phone Number</label>

   <div class="col-sm-10">
    <div class="form-group label-floating is-empty">
     <label class="control-label"></label>
     <input type="text" value="{{$member->homephone}}" class="form-control" disabled>
  
 </div>
</div>
</div>
<div class="row">
   <label class="col-sm-2 label-on-left">Permenant Address</label>

   <div class="col-sm-10">
    <div class="form-group label-floating is-empty">
     <label class="control-label"></label>
     <input type="text" class="form-control"  value="{{$member->address}}" disabled>
     
 </div>
</div>

    <div class="row">
                            <label class="col-sm-2 label-on-left"> Province</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <span style="display: none;">{{ $oldprovince = $member->province }} </span>
                                    <select class="form-control" name="p_id" value="{{ old('p_id') }}" id="pid" disabled>
                                        <option value=""></option>
                                    @foreach($provinces as $province)
                                         <span style="display: none;">{{ $newprovince = $province->id }} </span>
                                        <option value="{{$province->id}}" {{  $oldprovince== $newprovince ? 'selected' : '' }}>{{$province->placename}}</option>
                                     @endforeach
                                    </select>
                                    <span class="help-block">Please select province.</span>
                                </div>
                            </div>
                              
                        </div>
                         <div class="row">
                            <label class="col-sm-2 label-on-left"> District</label>
                        <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <span style="display: none;">{{ $olddistrict = $member->district }} </span>
                                    <select class="form-control" name="d_id" value="{{ old('d_id') }}" id="did" disabled >
                                        <option value=""></option>
                                    @foreach($districts as $district)
                                         <span style="display: none;">{{ $newdistrict = $district->id }} </span>
                                        <option value="{{$district->id}}" {{  $olddistrict== $newdistrict ? 'selected' : '' }}>{{$district->placename}}</option>
                                     @endforeach
                                    </select>
                                    <span class="help-block">Please select district.</span>
                                </div>
                            </div>
                          </div>


                          <div class="row">
                            <label class="col-sm-2 label-on-left"> Zone</label>
                        <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <span style="display: none;">{{ $oldzone = $member->zone }} </span>
                                    <select class="form-control" name="z_id" value="{{ old('d_id') }}" id="zid" disabled >
                                        <option value=""></option>
                                    @foreach($zones as $zone)
                                         <span style="display: none;">{{ $newzone = $zone->id }} </span>
                                        <option value="{{$zone->id}}" {{  $oldzone== $newzone ? 'selected' : '' }}>{{$zone->placename}}</option>
                                     @endforeach
                                    </select>
                                   
                                </div>
                            </div>
                          </div>

                          <div class="row">
                            <label class="col-sm-2 label-on-left"> Division</label>
                        <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <span style="display: none;">{{ $olddiv = $member->division }} </span>
                                    <select class="form-control" name="div_id" value="{{ old('div_id') }}" id="divid" disabled >
                                        <option value=""></option>
                                    @foreach($divisions as $division)
                                         <span style="display: none;">{{ $newdiv = $division->id }} </span>
                                        <option value="{{$division->id}}" {{  $olddiv== $newdiv ? 'selected' : '' }}>{{$division->placename}}</option>
                                     @endforeach
                                    </select>
                                   
                                </div>
                            </div>
                          </div>
                            <div class="row">
                            <label class="col-sm-2 label-on-left">School</label>
                        <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <span style="display: none;">{{ $oldschool = $member->school }} </span>
                                    <select class="form-control" name="s_id" value="{{ old('div_id') }}" id="sid"  disabled >
                                        <option value=""></option>
                                    @foreach($schools as $school)
                                         <span style="display: none;">{{ $newschool = $school->id }} </span>
                                        <option value="{{$school->id}}" {{  $oldschool== $newschool ? 'selected' : '' }}>{{$school->placename}}</option>
                                     @endforeach
                                    </select>
                                   
                                </div>
                            </div>
                          </div>
 
<div class="row">
    <label class="col-sm-2 label-on-left">Status</label>

    <div class="col-sm-10">
        <div class="form-group label-floating is-empty">
            <label class="control-label"></label>
            <span style="display: none;">{{ $status =$member->status }} </span>
            <input type="text" class="form-control" value="{{  $status== 1 ? 'active' : 'inactive' }}" disabled>

        </div>
    </div>
</div>
<div class="row">
    <label class="col-sm-2 label-on-left">Gender</label>

    <div class="col-sm-10">
        <div class="form-group label-floating is-empty">
            <label class="control-label"></label>
            <input type="text" class="form-control"  value="{{$member->gender}}"  disabled>
            
        </div>
    </div>
</div>



<a href="/provinceagent/schoolagents" class="btn btn-info pull-right">Back</a>


</div>
</form>
				
			</div>
		</div>
	</div>


   
</div>
@endforeach

		  @endsection