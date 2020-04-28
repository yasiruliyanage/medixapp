 @extends('staff.province_agents.layouts.main')
 @section('title')
 Profile - Manage District Agent CTSU
 @endsection
 @section('content')

 <div class="container-fluid">
     <div class="row">
         <div class="col-md-12">

             <div class="card">
                 <h4 align="center">District Agent Details - FIRSTNAME,LASTNAME,Registration ID</h4>
                 <form method="" action="view_mem" class="form-horizontal">
                     <div class="card-content">
                         <div class="row">
                             <label class="col-sm-2 label-on-left">Registration ID</label>

                             <div class="col-sm-10">
                                 <div class="form-group label-floating is-empty">
                                     <label class="control-label"></label>
                                     <input type="text" value="" class="form-control">

                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <label class="col-sm-2 label-on-left">First Name</label>

                             <div class="col-sm-10">
                                 <div class="form-group label-floating is-empty">
                                     <label class="control-label"></label>
                                     <input type="text" class="form-control" value="">

                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <label class="col-sm-2 label-on-left">Last Name</label>

                             <div class="col-sm-10">
                                 <div class="form-group label-floating is-empty">
                                     <label class="control-label"></label>
                                     <input type="text" class="form-control" value="">

                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <label style="color: black;" class="col-sm-2 label-on-left">Paysheet Number</label>

                             <div class="col-sm-10">
                                 <div class="form-group label-floating is-empty">
                                     <label class="control-label"></label>
                                     <input type="text" name="" class="form-control">

                                 </div>
                             </div>
                         </div>

                         <div class="row">
                             <label class="col-sm-2 label-on-left">Date Of Birth</label>

                             <div class="col-sm-10">
                                 <div class="form-group label-floating is-empty">
                                     <label class="control-label"></label>
                                     <input type="date" class="form-control" value="">

                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <label class="col-sm-2 label-on-left">NIC Number</label>

                             <div class="col-sm-10">
                                 <div class="form-group label-floating is-empty">
                                     <label class="control-label"></label>
                                     <input type="text" class="form-control" value="">

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
                             <label class="col-sm-2 label-on-left">Mobile Number</label>

                             <div class="col-sm-10">
                                 <div class="form-group label-floating is-empty">
                                     <label class="control-label"></label>
                                     <input type="text" value="" class="form-control">

                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <label class="col-sm-2 label-on-left">Home Phone Number</label>

                             <div class="col-sm-10">
                                 <div class="form-group label-floating is-empty">
                                     <label class="control-label"></label>
                                     <input type="text" value="" class="form-control">

                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <label class="col-sm-2 label-on-left">Permenant Address</label>

                             <div class="col-sm-10">
                                 <div class="form-group label-floating is-empty">
                                     <label class="control-label"></label>
                                     <input type="text" class="form-control" value="">

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
                                 <label style="color: black;" class="col-sm-2 label-on-left">Status</label>

                                 <div class="col-sm-10">
                                     <div class="form-group label-floating is-empty">
                                         <label class="control-label"></label>
                                         <select class="form-control" name="" id="">
                                             <option value="">Select Status</option>
                                             <option value="">Active</option>
                                             <option value="">Inactive</option>
                                         </select>
                                         <span class="help-block">Please select of the user work place .</span>
                                     </div>
                                 </div>
                             </div>


                             <div class="row">
                                 <label style="color: black;" class="col-sm-2 label-on-left">Gender</label>

                                 <div class="col-sm-10">
                                     <div class="form-group label-floating is-empty">
                                         <label class="control-label"></label>
                                         <select class="form-control" name="" id="">
                                             <option value="">Select </option>
                                             <option value=""> Male</option>
                                             <option value=""> Female</option>
                                         </select>
                                         <span class="help-block"></span>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <label class="col-sm-2 label-on-left">User Name</label>

                                 <div class="col-sm-10">
                                     <div class="form-group label-floating is-empty">
                                         <label class="control-label"></label>
                                         <input type="text" class="form-control" value="">

                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <label class="col-sm-2 label-on-left">Password</label>

                                 <div class="col-sm-10">
                                     <div class="form-group label-floating is-empty">
                                         <label class="control-label"></label>
                                         <input type="text" class="form-control" value="">

                                     </div>
                                 </div>
                             </div>
                             <a href="mng_dis_a_pa" class="btn btn-danger pull-right">Cancel</a>
                             <a href="" class="btn btn-success pull-right">Update</a>
                         </div>
                 </form>

             </div>
         </div>
     </div>
 </div>


 @endsection
