@extends('staff.division_agents.layouts.main')
 @section('title')
 Edit Division CTSU
 @endsection
 @section('content')

 <div class="col-md-12">
     <div class="col-md-12">
         <div class="card">
             <h4 align="center" style="font-weight:500;font-size:20px;">Edit School </h4>
             <form method="post" action="" class="form-horizontal">

                 <div class="card-content">
                     <div class="row">
                         <label class="col-sm-2 label-on-left">Province</label>

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
                         <label class="col-sm-2 label-on-left">District</label>

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
                         <label class="col-sm-2 label-on-left">Division</label>

                         <div class="col-sm-10">
                             <div class="form-group label-floating is-empty">
                                 <label class="control-label"></label>
                                 <select class="form-control" name="" id="">
                                     <option value="">Select Division</option>
                                     <option value="">Division 1</option>
                                     <option value="">Division 2</option>
                                 </select>
                                 <span class="help-block">Please select Zone.</span>
                             </div>
                         </div>
                     </div>
                     <div class="row">
                         <label class="col-sm-2 label-on-left">School</label>

                         <div class="col-sm-10">
                             <div class="form-group label-floating is-empty">
                                 <label class="control-label"></label>
                                 <input type="text" class="form-control" name="">
                                 <span class="help-block">Please enter School.</span>
                             </div>
                         </div>
                     </div>
                     <a href="mng_school_diva" class="btn btn-danger pull-right">Cancel</a>
                     <input class="btn btn-success pull-right" type="submit" value="Update">

                 </div>
             </form>
         </div>
     </div>
 </div>

 @endsection
