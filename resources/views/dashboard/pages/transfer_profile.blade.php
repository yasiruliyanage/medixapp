 @extends('dashboard.layouts.main')

@section('title')
  Profile - Manage Members CEB UNION
@endsection
@section('content')
            <div class="container-fluid">
                                     <div class="row">
<div class="col-md-12">
	@foreach($members as $member)
			<div class="card">
				<h4 align="center">Member Details - {{$member->name}} {{$member->lname}} , {{$member->employee_id}}</h4>
				  <form method="get" action="manage_member.html" class="form-horizontal">
					<!--div class="card-header card-header-text" data-background-color="rose">
						<h4 class="card-title"></h4>
					</div-->
					<div class="card-content">
						<div class="row">
							<label class="col-sm-2 label-on-left">Union ID</label>

                         <div class="col-sm-10">
                            <div class="form-group label-floating is-empty">
                             <label class="control-label"></label>
                             <input type="text"  value="{{$member->union_id}}"class="form-control" disabled>
                            
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
        <img src="{{URL::to('/')}}/members/profileimg/{{$member->profile_img}}" alt="" style="width:200px;height: 200px;" disabled>
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
    <label class="col-sm-2 label-on-left">Employee ID</label>

    <div class="col-sm-10">
        <div class="form-group label-floating is-empty">
            <label class="control-label"></label>
            <input type="text" class="form-control" value="{{$member->employee_id}}" disabled>
        
        </div>
    </div>
</div>
<div class="row">
    <label class="col-sm-2 label-on-left">Designation</label>

    <div class="col-sm-10">
        <div class="form-group label-floating is-empty">
            <label class="control-label"></label>
            <?php $designationid=$member->designation;
            foreach ($designations as $designation) {
                $designationdbid = $designation->id;

                if( $designationid == $designationdbid ) {
             ?>
            

            <input type="text" class="form-control" value="{{$designation->designation}}" disabled>

        <?php }else{ ?>


            


    <?php } ?>
        <?php



         } ?>
          
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

<div class="row">
    <label class="col-sm-2 label-on-left">Work Place</label>

    <div class="col-sm-10">
        <div class="form-group label-floating is-empty">
            <label class="control-label"></label>
                <?php $workplaceid=$member->work_place;
            foreach ($workplaces as $workplace) {
                $workplacedbid = $workplace->id;

                if( $workplaceid == $workplacedbid ) {
             ?>
            

            <input type="text" class="form-control" value="{{$workplace->placename}}" disabled>

        <?php }else{ ?>


             


    <?php } ?>
        <?php



         } ?>
            
          
        </div>
    </div>
</div>

<a href="/admin/members" class="btn btn-info pull-right">Back</a>


</div>
</form>
				
			</div>
		</div>
	</div>
</div>
@endforeach

		  @endsection