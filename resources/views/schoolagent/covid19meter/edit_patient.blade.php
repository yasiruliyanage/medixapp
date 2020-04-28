 @extends('schoolagent.layouts.main')
@section('title')
 Home - Edit Patient Details
@endsection
@section('content')
<?php $nav = 'covid19meter'; ?>
<div class="col-md-12">
  <div class="col-md-12">
   <div class="card">
    <h4 align="center">Edit Patient Details</h4>
       @foreach ($covidpatient as $patient)
        <form method="POST" action="{{route('depadminpatientinfoupdate',$patient->id)}}" class="form-horizontal" enctype="multipart/form-data">
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
                     <input type="text" class="form-control"  value="MEDIX/CAP/{{$patient->patient_no}}" disabled >
                      <input type="hidden" class="form-control" name="patient_no"  value="MEDIX/CAP/{{$patient->patient_no}}">
                 </div>
             </div>
         </div>
          <div class="row">
                   <label class="col-sm-2 label-on-left">Name</label>

                   <div class="col-sm-10">
                    <div class="form-group label-floating is-empty">
                     <label class="control-label"></label>
                     <input type="text" class="form-control" name="name"  value="{{ $patient->name}}" >
                     
                 </div>
             </div>
         </div>
       
<div class="row">
        <label class="col-sm-2 label-on-left">NIC</label>
     
        <div class="col-sm-10">
         <div class="form-group label-floating is-empty">
          <label class="control-label"></label>
          <input type="text" class="form-control" name="nic" value="{{ $patient->nic }}" >
          
      </div>
     </div>
</div>

<div class="row">
        <label class="col-sm-2 label-on-left">Phone</label>
     
        <div class="col-sm-10">
         <div class="form-group label-floating is-empty">
          <label class="control-label"></label>
          <input type="text" class="form-control"  name="phone" value="{{ $patient->phone }}"  >
          
      </div>
     </div>
 </div>

 <div class="row">
              <label style="color: black;" class="col-sm-2 label-on-left">Date of Birth</label>

                          <div class="col-sm-10">
                <div class="form-group label-floating is-empty">
                  <label class="control-label"></label>
                  <input type="date" name="dob" value="{{ $patient->dob }}" class="form-control" >
                  <span class="help-block">Please enter Date Of Birth of the user.</span>
                </div>
                            </div>
                        </div>

<!--##########################################################-->

<div class="row">
       <label class="col-sm-2 label-on-left">Photo</label>
                            <label class="btn btn-file ">

                                Upload Photo <input type="file" name="profile_img" value="{{ $patient->profile_img }}"  >

                            </label>
</div>

  
           <div class="row">
              <label style="color: black;" class="col-sm-2 label-on-left">Gender</label>
                            <div class="col-sm-10 checkbox-radios">
                              <span style="display: none;">{{ $oldgender= $patient->gender}}
                              
                                      <?php if($oldgender === 'male'){
                                        $genderindicator= 1 ;
                                      }else{
                                          $genderindicator= 0;
                                  }
                                      ?>
                               </span>
                              <div class="radio">
                  <label>
                    <input type="radio" name="gender" value="male" {{$genderindicator== 1 ? 'checked' : '' }}>
                    Male
                  </label>
                </div>

                <div class="radio">
                  <label>
                    <input type="radio" name="gender" value="female"  {{ $genderindicator== 0 ? 'checked' : '' }}>
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
                                     <span style="display: none;">{{ $oldstatus = $patient->patient_state_onhospital }} </span>
                                    <select class="form-control" name="patient_state" value="{{ old('patient_state') }}" id="patient_state">
                                        <option value="" disable="true" selected="true">Select status</option>
                                         <option value="1"  {{  $oldstatus == 1 ? 'selected' : '' }} >Can talk and active</option>
                                          <option value="2" {{  $oldstatus == 2 ? 'selected' : '' }} >Can't talk and decative</option>
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
                                     <span style="display: none;">{{ $olddetailsfrom = $patient->details_from }} </span>
                                    <select class="form-control" name="details_from" value="{{ old('details_from') }}" id="details_from">
                                        <option value="" disable="true" selected="true">Select details from</option>
                                         <option value="1" {{  $olddetailsfrom == 1 ? 'selected' : '' }} >Direct from patient</option>
                                          <option value="2" {{  $olddetailsfrom == 2 ? 'selected' : '' }}  >From patient relative or owner</option>
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
     <input type="text" class="form-control"  name="address" value="{{$patient->address}}" >
     
 </div>
</div>
   <input class="btn btn-success pull-right btn-lg" type="submit" value="Save">

</div>


</form>
@endforeach
</div>
</div>
</div>

@endsection