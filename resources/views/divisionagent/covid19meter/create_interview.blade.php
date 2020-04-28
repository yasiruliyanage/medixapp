 @extends('divisionagent.layouts.main')
@section('title')
 Home - Create Interview
@endsection
@section('content')

<div class="col-md-12">
  <div class="col-md-12">
   <div class="card">
    <h4 align="center">Patient Details</h4>
        <form method="POST" action="{{route('covid19meterinterviewsave')}}" class="form-horizontal" enctype="multipart/form-data">
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
                   <label class="col-sm-2 label-on-left">Patient No</label>

                   <div class="col-sm-10">
                    <div class="form-group label-floating is-empty">
                     <label class="control-label"></label>
                     <input type="text" class="form-control"  value="MEDIX/CAP/{{$patientid}}" disabled >
                      <input type="hidden" class="form-control" name="patient_no"  value="MEDIX/CAP/{{$patientid}}">
                 </div>
             </div>
         </div>
          <div class="row">
                   <label class="col-sm-2 label-on-left">Name</label>

                   <div class="col-sm-10">
                    <div class="form-group label-floating is-empty">
                     <label class="control-label"></label>
                     <input type="text" class="form-control" name="name"  value="{{ old('name') }}" >
                     
                 </div>
             </div>
         </div>
       
<div class="row">
        <label class="col-sm-2 label-on-left">NIC</label>
     
        <div class="col-sm-10">
         <div class="form-group label-floating is-empty">
          <label class="control-label"></label>
          <input type="text" class="form-control" name="nic" value="{{ old('nic') }}" >
          
      </div>
     </div>
</div>

<div class="row">
        <label class="col-sm-2 label-on-left">Phone</label>
     
        <div class="col-sm-10">
         <div class="form-group label-floating is-empty">
          <label class="control-label"></label>
          <input type="text" class="form-control"  name="phone" value="{{ old('phone') }}"  >
          
      </div>
     </div>
 </div>

 <div class="row">
              <label style="color: black;" class="col-sm-2 label-on-left">Date of Birth</label>

                          <div class="col-sm-10">
                <div class="form-group label-floating is-empty">
                  <label class="control-label"></label>
                  <input type="date" name="dob" value="{{ old('dob') }}" class="form-control" >
                  <span class="help-block">Please enter Date Of Birth of the user.</span>
                </div>
                            </div>
                        </div>

<!--##########################################################-->

<div class="row">
       <label class="col-sm-2 label-on-left">Photo</label>
                            <label class="btn btn-file ">

                                Upload Photo <input type="file" name="profile_img" value="{{ old('profile_img') }}"  >

                            </label>
</div>

  
            <div class="row">
              <label style="color: black;" class="col-sm-2 label-on-left">Gender</label>
                            <div class="col-sm-10 checkbox-radios">
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

   <div class="row">
                            <label class="col-sm-2 label-on-left">Select Patient Status</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <select class="form-control" name="patient_state" value="{{ old('patient_state') }}" id="patient_state">
                                        <option value="" disable="true" selected="true">Select status</option>
                                         <option value="1" >Can talk and active</option>
                                          <option value="2" >Can't talk and decative</option>
                                    </select>
                                    <span class="help-block">Please select patient status</span>
                                </div>
                            </div>
                        </div>


  <div class="row">
                            <label class="col-sm-2 label-on-left">Details From</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <select class="form-control" name="details_from" value="{{ old('details_from') }}" id="details_from">
                                        <option value="" disable="true" selected="true">Select details from</option>
                                         <option value="1"  >Direct from patient</option>
                                          <option value="2"  >From patient relative or owner</option>
                                    </select>
                                    <span class="help-block">Please select where details from</span>
                                </div>
                            </div>
                        </div>

<div class="row">
   <label class="col-sm-2 label-on-left">Address</label>

   <div class="col-sm-10">
    <div class="form-group label-floating is-empty">
     <label class="control-label"></label>
     <input type="text" class="form-control"  name="address" value="" >
     
 </div>
</div>
   <input class="btn btn-success pull-right btn-lg" type="submit" value="Next">

</div>


</form>
</div>
</div>
</div>

@endsection