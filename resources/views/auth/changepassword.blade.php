 @extends('user.layouts.main')
@section('title')
  Home-Edit Profile
@endsection
@section('content')

<div class="col-md-12">
  <div class="col-md-12">
   <div class="card">
    <h4 align="center">Change Password</h4>
        <form method="POST" action="{{route('user.changepassword')}}" class="form-horizontal" enctype="multipart/form-data">
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
                   <label class="col-sm-2 label-on-left">Old Password</label>

                   <div class="col-sm-10">
                    <div class="form-group label-floating is-empty">
                     <label class="control-label"></label>
                     <input type="password" class="form-control" name="oldpassword"  value="" >
                      <input type="hidden" class="form-control" name="id"  value="{{Auth::user()->id}}">
                        <input type="hidden" class="form-control" name="currentpassword"  value="{{Auth::user()->password}}">
                 </div>
             </div>
         </div>
       
<div class="row">
        <label class="col-sm-2 label-on-left">New Password</label>
     
        <div class="col-sm-10">
         <div class="form-group label-floating is-empty">
          <label class="control-label"></label>
          <input type="password" class="form-control" name="password" value=""  >
          
      </div>
     </div>
     </div>

<div class="row">
        <label class="col-sm-2 label-on-left">Confirm Password</label>
     
        <div class="col-sm-10">
         <div class="form-group label-floating is-empty">
          <label class="control-label"></label>
          <input type="password" class="form-control"  name="password_confirmation" value=""  >
          
      </div>
     </div>
     </div>


<div class="row">
 
   <input class="btn btn-success pull-right" type="submit" value="Save">
<a href="{{route('admin.home')}}" class="btn btn-info pull-right">Back</a>
</div>
</form>
</div>
</div>
</div>

@endsection