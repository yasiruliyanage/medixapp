@extends('staff.zonal_agents.layouts.main')
 @section('title')
 Register Members CTSU
 @endsection
 @section('content')
 <div class="container-fluid" style="padding-bottom:0px;">
     <div class="row">
         <div class="col-md-12">
             <div class="card">
                 <h4 align="center" style="font-weight:500;font-size:20px;">Application of New Member Registration </h4>

                 <form id="myfrm" method="post" action="" class="form-horizontal" enctype="multipart/form-data">
                     <div class="card-content">

                         <div class="row">
                             <label style="color: black;" class="col-sm-2 label-on-left">Registration ID</label>

                             <div class="col-sm-10">
                                 <div class="form-group label-floating is-empty">
                                     <label class="control-label"></label>
                                     <input type="text" name="" value="" class="form-control">
                                     <span class="help-block">Please enter Registration ID of the user.</span>
                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <label style="color: black;" class="col-sm-2 label-on-left">First Name</label>

                             <div class="col-sm-10">
                                 <div class="form-group label-floating is-empty">
                                     <label class="control-label"></label>
                                     <input type="text" name="" value="" class="form-control">
                                     <span class="help-block">Please enter First Name of the user.</span>
                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <label style="color: black;" class="col-sm-2 label-on-left">Last Name</label>

                             <div class="col-sm-10">
                                 <div class="form-group label-floating is-empty">
                                     <label class="control-label"></label>
                                     <input type="text" name="" value="" class="form-control">
                                     <span class="help-block">Please enter Last Name of the user.</span>
                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <label style="color: black;" class="col-sm-2 label-on-left">Paysheet Number</label>

                             <div class="col-sm-10">
                                 <div class="form-group label-floating is-empty">
                                     <label class="control-label"></label>
                                     <input type="text" name="" class="form-control">
                                     <span class="help-block">Please enter Paysheet number of the user.</span>
                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <label style="color: black;" class="col-sm-2 label-on-left">If a Trainee</label>

                             <div class="col-sm-10">
                                 <div class="form-group label-floating is-empty">
                                     <label class="control-label"></label>
                                     <input type="text" name="" class="form-control" placeholder="Name Of the training college" >

                                     <input type="text" name="" class="form-control" placeholder="Year" >

                                     <input type="text" name="" class="form-control" placeholder="Department of training" >

                                 </div>
                             </div>

                         </div>

                         <div class="row">
                             <label style="color: black;" class="col-sm-2 label-on-left">NIC Number</label>

                             <div class="col-sm-10">
                                 <div class="form-group label-floating is-empty">
                                     <label class="control-label"></label>
                                     <input type="text" name="" class="form-control">
                                     <span class="help-block">Please enter NIC number of the user.</span>
                                 </div>
                             </div>
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
                                         <input type="radio" name="gender" value="female">
                                         Female
                                     </label>
                                 </div>

                             </div>
                         </div>
                         <div class="row">
                             <label style="color: black;" class="col-sm-2 label-on-left">Date of Birth</label>

                             <div class="col-sm-10">
                                 <div class="form-group label-floating is-empty">
                                     <label class="control-label"></label>
                                     <input type="date" name="" value="" class="form-control">
                                     <span class="help-block">Please enter Date Of Birth of the user.</span>
                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <label style="color: black;" class="col-sm-2 label-on-left">Permenant Address</label>

                             <div class="col-sm-10">
                                 <div class="form-group label-floating is-empty">
                                     <label class="control-label"></label>
                                     <input type="text" name="" value="" class="form-control">
                                     <span class="help-block">Please enter Permenant Address of the user.</span>
                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <label style="color: black;" class="col-sm-2 label-on-left">Mobile Number</label>

                             <div class="col-sm-10">
                                 <div class="form-group label-floating is-empty">
                                     <label class="control-label"></label>
                                     <input type="text" name="" value="" class="form-control">
                                     <span class="help-block">Please enter Mobile Number of the user.</span>
                                 </div>
                             </div>
                         </div>

                         <div class="row">
                             <label style="color: black;" class="col-sm-2 label-on-left">Home Phone Number</label>

                             <div class="col-sm-10">
                                 <div class="form-group label-floating is-empty">
                                     <label class="control-label"></label>
                                     <input type="text" name="" value="" class="form-control">
                                     <span class="help-block">Please enter Home Phone Number of the user.</span>
                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <label style="color: black;" class="col-sm-2 label-on-left">Province</label>

                             <div class="col-sm-10">
                                 <div class="form-group label-floating is-empty">
                                     <label class="control-label"></label>
                                     <select class="form-control" name="" id="">
                                         <option value="">Select Province</option>
                                         <option value="">Province 1</option>
                                         <option value="">Province 2</option>
                                     </select>
                                     <span class="help-block">Please select Province.</span>
                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <label style="color: black;" class="col-sm-2 label-on-left">District</label>

                             <div class="col-sm-10">
                                 <div class="form-group label-floating is-empty">
                                     <label class="control-label"></label>
                                     <select class="form-control" name="" id="">
                                         <option value="">Select District</option>
                                         <option value="">District 1</option>
                                         <option value="">District 2</option>
                                     </select>
                                     <span class="help-block">Please select District.</span>
                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <label style="color: black;" class="col-sm-2 label-on-left">Zone</label>

                             <div class="col-sm-10">
                                 <div class="form-group label-floating is-empty">
                                     <label class="control-label"></label>
                                     <select class="form-control" name="" id="">
                                         <option value="">Select Zone</option>
                                         <option value="">Zone 1</option>
                                         <option value="">Zone 2</option>
                                     </select>
                                     <span class="help-block">Please select Zone.</span>
                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <label style="color: black;" class="col-sm-2 label-on-left">Division</label>

                             <div class="col-sm-10">
                                 <div class="form-group label-floating is-empty">
                                     <label class="control-label"></label>
                                     <select class="form-control" name="" id="">
                                         <option value="">Select Division</option>
                                         <option value="">Division 1</option>
                                         <option value="">Division 2</option>
                                     </select>
                                     <span class="help-block">Please select Division.</span>
                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <label style="color: black;" class="col-sm-2 label-on-left">School</label>

                             <div class="col-sm-10">
                                 <div class="form-group label-floating is-empty">
                                     <label class="control-label"></label>
                                     <select class="form-control" name="" id="">
                                         <option value="">Select School</option>
                                         <option value="">School 1</option>
                                         <option value="">School 2</option>
                                     </select>
                                     <span class="help-block">Please select School.</span>
                                 </div>
                             </div>
                         </div>

                         <div class="row">
                             <label style="color: black;" class="col-sm-2 label-on-left">Photo</label>
                             <label class="btn btn-file ">

                                 Browse <input type="file" name="" value="">

                             </label>
                         </div>


                         <div class="row">
                             <label style="color: black;" class="col-sm-2 label-on-left">Email</label>

                             <div class="col-sm-10">
                                 <div class="form-group label-floating is-empty">
                                     <label class="control-label"></label>
                                     <input type="text" name="" value="" class="form-control" value>
                                     <span class="help-block">Please enter email the user.</span>
                                 </div>
                             </div>
                         </div>

                         <div class="row">
                             <label style="color: black;" class="col-sm-2 label-on-left">Username</label>

                             <div class="col-sm-10">
                                 <div class="form-group label-floating is-empty">
                                     <label class="control-label"></label>
                                     <input type="text" name="" value="" class="form-control" value>
                                     <span class="help-block">Username</span>
                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <label style="color: black;" class="col-sm-2 label-on-left">Password</label>

                             <div class="col-sm-10">
                                 <div class="form-group label-floating is-empty">
                                     <label class="control-label"></label>
                                     <input type="text" name="" value="" class="form-control" value>
                                     <span class="help-block">password</span>
                                 </div>
                             </div>
                         </div>

                         <!--##########################################################-->

                         <a href="zonal_dash" class="btn btn-danger pull-right">Cancel</a>
                         <a href="" onclick="" class="btn btn-primary pull-right">Reset</a>
                         <input class="btn btn-success pull-right" type="submit" value="Save">
                         <input class="btn btn-warning pull-right" type="submit" value="Save And New">
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>
 <script>
     function myFunction() {
         document.getElementById("myfrm").reset();
     }

 </script>
 @endsection
