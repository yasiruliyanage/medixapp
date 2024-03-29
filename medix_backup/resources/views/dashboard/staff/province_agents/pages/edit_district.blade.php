 @extends('staff.province_agents.layouts.main')
 @section('title')
 Edit District CTSU
 @endsection
 @section('content')

 <div class="col-md-12">
     <div class="col-md-12">
         <div class="card">
             <h4 align="center">Edit District </h4>
             <form method="get" action="work_place.html" class="form-horizontal">

                 <div class="card-content">


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
                         <label class="col-sm-2 label-on-left">District</label>

                         <div class="col-sm-10">
                             <div class="form-group label-floating is-empty">
                                 <label class="control-label"></label>
                                 <input type="text" name="" class="form-control" value="">
                                 <span class="help-block">Please enter District.</span>
                             </div>
                         </div>
                     </div>
                     <a href="mng_district_pa" class="btn btn-danger pull-right">Cancel</a>
                     <input class="btn btn-success pull-right" type="submit" value="Update">

                 </div>
             </form>
         </div>
     </div>
 </div>

 @endsection
