  @extends('divisionagent.layouts.main')

@section('title')
  Profile - Manage Department Admins Medix
@endsection
@section('content')
<?php $nav = 'school_admin'; ?>
            <div class="container-fluid">
                                     <div class="row">
<div class="col-md-12">
	@foreach($agents as $member)
			<div class="card">
				<h4 align="center">Department Admin Details - {{$member->name}} {{$member->lname}} </h4>
				  <form method="get" action="manage_member.html" class="form-horizontal">
					<!--div class="card-header card-header-text" data-background-color="rose">
						<h4 class="card-title"></h4>
					</div-->
					<div class="card-content">
                       
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
                            <label class="col-sm-2 label-on-left">Department</label>
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



<a href="/hospitaladmin/departmentadmins" class="btn btn-info pull-right">Back</a>


</div>
</form>
				
			</div>
		</div>
	</div>


   
</div>
@endforeach

		  @endsection