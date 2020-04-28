 @extends('dashboard.layouts.main')
@section('title')
  Home-My Profile
@endsection
@section('content')

<div class="col-md-12">
  <div class="col-md-12">
   <div class="card">
    <h4 align="center">Admin Details</h4>
        <form method="get" action="manage_member.html" class="form-horizontal">
          <!--div class="card-header card-header-text" data-background-color="rose">
            <h4 class="card-title"></h4>
          </div-->
          <div class="card-content">
          
                 <div class="row">
                   <label class="col-sm-2 label-on-left">Name</label>

                   <div class="col-sm-10">
                    <div class="form-group label-floating is-empty">
                     <label class="control-label"></label>
                     <input type="text" class="form-control"  value="{{Auth::user()->name}}"disabled>
                     
                 </div>
             </div>
         </div>
       

<div class="row">
        <label class="col-sm-2 label-on-left">NIC Number</label>
     
        <div class="col-sm-10">
         <div class="form-group label-floating is-empty">
          <label class="control-label"></label>
          <input type="text" class="form-control" value="{{Auth::user()->nic}}" disabled>
          
      </div>
     </div>
     </div>

<!--##########################################################-->

<div class="row">
    <label class="col-sm-2 label-on-left">Photo</label>
    <picture>
        <img src="{{URL::to('/')}}/public/profileimg/{{Auth::user()->profile_img}}" alt="" style="width:200px;height: 200px;" disabled>
      </picture>
</div>

<div class="row">
   <label class="col-sm-2 label-on-left">Mobile Number</label>

   <div class="col-sm-10">
    <div class="form-group label-floating is-empty">
     <label class="control-label"></label>
     <input type="text" class="form-control" value="{{Auth::user()->mobile}}" disabled>
    
 </div>
</div>
</div>

<div class="row">
   <label class="col-sm-2 label-on-left">Permenant Address</label>

   <div class="col-sm-10">
    <div class="form-group label-floating is-empty">
     <label class="control-label"></label>
     <input type="text" class="form-control" value="{{Auth::user()->address}}" disabled>
     
 </div>
</div>
<a href="{{route('admin.editprofile')}}" class="btn btn-warning pull-right" >Edit</a>
<a href="{{route('admin.home')}}" class="btn btn-info pull-right">Back</a>
</div>
</form>
</div>
</div>
</div>

@endsection