 @extends('dashboard.layouts.main')

@section('title')
  Profile - Manage Contacts CEB UNION
@endsection
@section('content')
            <div class="container-fluid">
                                     <div class="row">
<div class="col-md-12">
	@foreach($contacts as $contact)
			<div class="card">
				<h4 align="center">Contact Details - {{$contact->name}} </h4>
				  <form method="get" action="manage_member.html" class="form-horizontal">
					<!--div class="card-header card-header-text" data-background-color="rose">
						<h4 class="card-title"></h4>
					</div-->
					<div class="card-content">
						
                 <div class="row">
                   <label class="col-sm-2 label-on-left"> Name</label>

                   <div class="col-sm-10">
                    <div class="form-group label-floating is-empty">
                     <label class="control-label"></label>
                     <input type="text" class="form-control" value="{{$contact->name}}" disabled>
                     
                 </div>
             </div>
         </div>
     


<!--##########################################################-->

<div class="row">
    <label class="col-sm-2 label-on-left">Photo</label>
    <picture>
        <img src="{{URL::to('/')}}/contacts/profileimg/{{$contact->profile_img}}" alt="" style="width:200px;height: 200px;" disabled>
      </picture>
</div>

<div class="row">
   <label class="col-sm-2 label-on-left">Mobile Number</label>

   <div class="col-sm-10">
    <div class="form-group label-floating is-empty">
     <label class="control-label"></label>
     <input type="text"   value="{{$contact->mobile}}" class="form-control" disabled>
    
 </div>
</div>
</div>

<div class="row">
   <label class="col-sm-2 label-on-left">Address</label>

   <div class="col-sm-10">
    <div class="form-group label-floating is-empty">
     <label class="control-label"></label>
     <input type="text" class="form-control"  value="{{$contact->address}}" disabled>
     
 </div>
</div>




<div class="row">
    <label class="col-sm-2 label-on-left">Gender</label>

    <div class="col-sm-10">
        <div class="form-group label-floating is-empty">
            <label class="control-label"></label>
            <input type="text" class="form-control"  value="{{$contact->gender}}"  disabled>
            
        </div>
    </div>
</div>



<a href="/admin/contacts" class="btn btn-info pull-right">Back</a>


</div>
</form>
				
			</div>
		</div>
	</div>
</div>
@endforeach

		  @endsection