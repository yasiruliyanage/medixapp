<!DOCTYPE html>
<html>
<head>
  @section('title')
Online Member Register
@endsection
<link href="{{URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
<script src="{{URL::asset('assets/js/jquery.min.js')}}"></script>
<script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script> 
 <!--select 2 integraton-->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
 <!--select 2 integraton-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">

<style type="text/css">
   
</style> 
</head>
<body>
   <section id="tr" class="" style="">
    <div class="main-content">
    <form class="well form-horizontal" method="post" action="{{ route('onlinemember.add') }}"  enctype="multipart/form-data"  id="contact_form">
<fieldset>

<legend style="text-align: center;font-weight: 700; ">Online Member Registration Form</legend>
@if($message = Session::get('danger'))
          <div class="alert alert-danger">
            <strong>{{$message}}</strong>
          </div>


        @endif
        {{csrf_field()}}
          <!--div class="card-header card-header-text" data-background-color="rose">
            <h4 class="card-title"></h4>
          </div-->
                     @if(count($errors) > 0 )
                                        @foreach($errors->all() as $error)
                                            <p class="alert alert-danger">{{$error}}</p>
                                        @endforeach
                    @endif


<div class="form-group">
  <label class="col-md-4 control-label">Union ID</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon glyphicon-flag"></i></span>
 <input type="text" name="union_id"  value="{{ old('union_id') }}"class="form-control" value>
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Employee ID</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon glyphicon-flag"></i></span>
 <input type="text" name="employee_id" class="form-control" value>
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">First Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input type="text" name="name" value="{{ old('name') }}" class="form-control" value>
    </div>
  </div>
</div>



<div class="form-group">
  <label class="col-md-4 control-label" >Last Name</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
 <input type="text" name="lname" value="{{ old('lname') }}"  class="form-control" value>
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" >NIC Number</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input type="text" name="nic"   class="form-control" >
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" >Gender</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="radio">
                           <label>
                             <input type="radio" name="gender" value="male" checked="true">
                              Male
                           </label>
                        </div>

                        <div class="radio">
                           <label>
                             <input type="radio" name="gender" value="female" >
                              Female
                           </label>
                        </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" >Date of Birth</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon glyphicon-calendar"></i></span>
  <input type="date" name="dob" value="{{ old('dob') }}" class="form-control" value>
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" >Address</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon glyphicon-home"></i></span>
  <input type="text" name="address"  value="{{ old('address') }}" class="form-control" value>
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Mobile Phone Number</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
    <input type="text" name="mobile" value="{{ old('mobile') }}" class="form-control" value>
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Home Phone Number</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
 <input type="text" name="homephone" value="{{ old('homephone') }}" class="form-control" value>
    </div>
  </div>
</div>

  <div class="form-group"> 
  <label class="col-md-4 control-label">Designation</label>
    <div class="col-md-4 ">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
       <select class="form-control" name="designation" value="{{ old('designation') }}" id="nameid">
                                      <option value=""></option>
                                    @foreach($designations as $designation)

                                        <option value="{{$designation->id}}">{{$designation->designation}}</option>
                                     @endforeach
                                    </select>
  </div>
</div>
</div>
 
  <div class="form-group"> 
  <label class="col-md-4 control-label">Work Place</label>
    <div class="col-md-4 ">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
     <select class="form-control" name="work_place" id="workplaceid">
                                      <option value="">Select Workplace</option>
                                         @foreach($workplaces as $workplace)
                                        <option value="{{$workplace->id}}" >{{$workplace->placename}}</option>
                                        @endforeach
                                     
                                    </select>
  </div>
</div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Photo</label>
  <div class="col-md-4 inputGroupContainer">  
     <input type="file" name="profile_img" value="{{ old('profile_img') }}">
 </div>
</div>
   
<div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input type="text" name="email" value="{{ old('email') }}" class="form-control" value>
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Username</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input type="text" name="username" value="{{ old('username') }}"  class="form-control" value>
    </div>
  </div>
</div>



<div class="form-group">
  <label class="col-md-4 control-label" >Password</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
  <input type="text" name="password" value="{{ old('password') }}"  class="form-control" value>
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4"><br>
   <button type="submit" class="btn btn-success" >
      Submit <span class="glyphicon glyphicon-send"></span>
   </button>
   <button class="btn btn-warning" >
      Reset <span class="glyphicon glyphicon-refresh"></span>
   </button>
    <a href="/login" class="btn btn-danger pull-right" >Back</a>
  </div>
</div>

</fieldset>
</form>
</div>
    </div>
 </section>
 <script type="text/javascript">
    $('#nameid').select2({
        placeholder:'select a designation',
        allowClear:true
    });
</script>
<script type="text/javascript">
    $('#workplaceid').select2({
        placeholder:'select a workplace',
        allowClear:true
    });
</script>
</body>
</html>

      