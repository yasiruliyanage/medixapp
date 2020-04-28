 @extends('user.layouts.main')
@section('title')
  Home-Edit Profile
@endsection
@section('content')

<div class="col-md-12">
  <div class="col-md-12">
   <div class="card">
    <h4 align="center">Edit Profile</h4>
        <form method="POST" action="{{route('user.editprofile')}}" class="form-horizontal" enctype="multipart/form-data">
          {{csrf_field()}}
               @if(count($errors) > 0 )
                                        @foreach($errors->all() as $error)
                                            <p class="alert alert-danger">{{$error}}</p>
                                        @endforeach
                                    @endif
          <!--div class="card-header card-header-text" data-background-color="rose">
            <h4 class="card-title"></h4>
          </div-->
          <div class="card-content">
          
                 <div class="row">
                   <label class="col-sm-2 label-on-left">Name</label>

                   <div class="col-sm-10">
                    <div class="form-group label-floating is-empty">
                     <label class="control-label"></label>
                     <input type="text" class="form-control" name="name"  value="{{Auth::user()->name}}" >
                      <input type="hidden" class="form-control" name="id"  value="{{Auth::user()->id}}">
                 </div>
             </div>
         </div>
       
<div class="row">
        <label class="col-sm-2 label-on-left">Username</label>
     
        <div class="col-sm-10">
         <div class="form-group label-floating is-empty">
          <label class="control-label"></label>
          <input type="text" class="form-control" name="username" value="{{Auth::user()->username}}"  >
          
      </div>
     </div>
     </div>

<div class="row">
        <label class="col-sm-2 label-on-left">NIC Number</label>
     
        <div class="col-sm-10">
         <div class="form-group label-floating is-empty">
          <label class="control-label"></label>
          <input type="text" class="form-control"  name="nic" value="{{Auth::user()->nic}}"  >
          
      </div>
     </div>
     </div>

<!--##########################################################-->

<div class="row">
                            <label class="col-sm-2 label-on-left">Photo</label>
                            <label class="btn btn-file ">

                                Browse <input type="file" name="profile_img" value="{{Auth::user()->profile_img}}"  >

                            </label>
</div>


<div class="row">
   <label class="col-sm-2 label-on-left">Mobile Number</label>

   <div class="col-sm-10">
    <div class="form-group label-floating is-empty">
     <label class="control-label"></label>
     <input type="text" class="form-control" name="mobile" value="{{Auth::user()->mobile}}"  >
    
 </div>
</div>
</div>
<div class="row">
   <label class="col-sm-2 label-on-left">Email</label>

   <div class="col-sm-10">
    <div class="form-group label-floating is-empty">
     <label class="control-label"></label>
     <input type="text" class="form-control" name="email" value="{{Auth::user()->email}}"  >
    
 </div>
</div>
</div>

<div class="row">
   <label class="col-sm-2 label-on-left">Permenant Address</label>

   <div class="col-sm-10">
    <div class="form-group label-floating is-empty">
     <label class="control-label"></label>
     <input type="text" class="form-control"  name="address" value="{{Auth::user()->address}}" >
     
 </div>
</div>
   <input class="btn btn-success pull-right" type="submit" value="Save">
<a href="{{route('admin.home')}}" class="btn btn-info pull-right">Back</a>
</div>
</form>
</div>
</div>
</div>

@endsection