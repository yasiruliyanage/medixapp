 @extends('staff.province_agents.layouts.main')
 @section('title')
 Pending Member Profile CTSU
 @endsection
 @section('content')
 <div class="container-fluid">
     <div class="row">
         <div class="col-md-12">

             <div class="card">
                 <h4 align="center">Member Details -(First Name,Registration ID)</h4>
                 <form method="get" action="manage_member.html" class="form-horizontal">

                     <div class="card-content">
                         <div class="row">
                             <label class="col-sm-2 label-on-left">Registration ID</label>

                             <div class="col-sm-10">
                                 <div class="form-group label-floating is-empty">
                                     <label class="control-label"></label>
                                     <input type="text" value="" class="form-control" disabled>

                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <label class="col-sm-2 label-on-left">First Name</label>

                             <div class="col-sm-10">
                                 <div class="form-group label-floating is-empty">
                                     <label class="control-label"></label>
                                     <input type="text" class="form-control" value="" disabled>

                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <label class="col-sm-2 label-on-left">Last Name</label>

                             <div class="col-sm-10">
                                 <div class="form-group label-floating is-empty">
                                     <label class="control-label"></label>
                                     <input type="text" class="form-control" value="" disabled>

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
                             <label style="color: black;" class="col-sm-2 label-on-left">School Name</label>

                             <div class="col-sm-10">
                                 <div class="form-group label-floating is-empty">
                                     <label class="control-label"></label>
                                     <input type="text" name="" class="form-control" >

                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <label style="color: black;" class="col-sm-2 label-on-left">If a Trainee</label>

                             <div class="col-sm-10">
                                 <div class="form-group label-floating is-empty">
                                     <label class="control-label"></label>
                                     <input type="text" name="" class="form-control" placeholder="" >

                                     <input type="text" name="" class="form-control" placeholder="" >

                                     <input type="text" name="" class="form-control" placeholder="" >

                                 </div>
                             </div>

                         </div>
                         <div class="row">
                             <label class="col-sm-2 label-on-left">Date Of Birth</label>

                             <div class="col-sm-10">
                                 <div class="form-group label-floating is-empty">
                                     <label class="control-label"></label>
                                     <input type="text" class="form-control" value="" disabled>

                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <label class="col-sm-2 label-on-left">NIC Number</label>

                             <div class="col-sm-10">
                                 <div class="form-group label-floating is-empty">
                                     <label class="control-label"></label>
                                     <input type="text" class="form-control" value="" disabled>

                                 </div>
                             </div>
                         </div>


                         <div class="row">
                             <label class="col-sm-2 label-on-left">Photo</label>
                             <picture>
                                 <img src="" alt="" style="width:200px;height: 200px;" disabled>
                             </picture>
                         </div>

                         <div class="row">
                             <label class="col-sm-2 label-on-left">Mobile Number</label>

                             <div class="col-sm-10">
                                 <div class="form-group label-floating is-empty">
                                     <label class="control-label"></label>
                                     <input type="text" value="" class="form-control" disabled>

                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <label class="col-sm-2 label-on-left">Home Phone Number</label>

                             <div class="col-sm-10">
                                 <div class="form-group label-floating is-empty">
                                     <label class="control-label"></label>
                                     <input type="text" value="" class="form-control" disabled>

                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <label class="col-sm-2 label-on-left">Permenant Address</label>

                             <div class="col-sm-10">
                                 <div class="form-group label-floating is-empty">
                                     <label class="control-label"></label>
                                     <input type="text" class="form-control" value="" disabled>

                                 </div>
                             </div>

                             <div class="row">
                                 <label class="col-sm-2 label-on-left">Province</label>

                                 <div class="col-sm-10">
                                     <div class="form-group label-floating is-empty">
                                         <label class="control-label"></label>
                                         <input type="text" class="form-control" value="" disabled>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <label class="col-sm-2 label-on-left">District</label>

                                 <div class="col-sm-10">
                                     <div class="form-group label-floating is-empty">
                                         <label class="control-label"></label>
                                         <input type="text" class="form-control" value="" disabled>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <label class="col-sm-2 label-on-left">Zone</label>

                                 <div class="col-sm-10">
                                     <div class="form-group label-floating is-empty">
                                         <label class="control-label"></label>
                                         <input type="text" class="form-control" value="" disabled>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <label class="col-sm-2 label-on-left">Division</label>

                                 <div class="col-sm-10">
                                     <div class="form-group label-floating is-empty">
                                         <label class="control-label"></label>
                                         <input type="text" class="form-control" value="" disabled>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <label class="col-sm-2 label-on-left">School</label>

                                 <div class="col-sm-10">
                                     <div class="form-group label-floating is-empty">
                                         <label class="control-label"></label>
                                         <input type="text" class="form-control" value="" disabled>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <label class="col-sm-2 label-on-left">Set user Status</label>

                                 <div class="col-sm-10">
                                     <div class="form-group label-floating is-empty">
                                         <label class="control-label"></label>
                                         <select class="form-control" name="status">

                                             <span style="display: none;"></span>
                                             <option value="1">Active </option>
                                             <option value="0">Inactive </option>

                                         </select>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <label class="col-sm-2 label-on-left">Gender</label>

                                 <div class="col-sm-10">
                                     <div class="form-group label-floating is-empty">
                                         <label class="control-label"></label>
                                         <input type="text" class="form-control" value="" disabled>

                                     </div>
                                 </div>
                             </div>


                             <a href="province_dash" class="btn btn-info pull-right">Back</a>
                             <a href="" class="btn btn-success pull-right">Accept</a>
                             <a href="" class="btn btn-danger pull-right">Reject</a>
                         </div>
                 </form>

             </div>
         </div>
     </div>
 </div>
 @endsection
