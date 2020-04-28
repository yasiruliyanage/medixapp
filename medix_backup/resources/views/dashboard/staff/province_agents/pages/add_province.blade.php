 @extends('staff.province_agents.layouts.main')
 @section('title')
 Add Province CTSU
 @endsection
 @section('content')

 <div class="col-md-12">
     <div class="col-md-12">
         <div class="card">
             <h4 align="center" style="font-weight:500;font-size:20px;">Add Province </h4>
             <form method="post" action="" class="form-horizontal">

                 <div class="card-content">
                     <div class="row">
                         <label class="col-sm-2 label-on-left">Add New Province</label>

                         <div class="col-sm-10">
                             <div class="form-group label-floating is-empty">
                                 <label class="control-label"></label>
                                 <input type="text" class="form-control" name="">
                                 <span class="help-block">Please enter Province.</span>
                             </div>
                         </div>
                     </div>
                     <a href="mng_province_pa" class="btn btn-danger pull-right">Cancel</a>
                     <input class="btn btn-success pull-right" type="submit" value="Save">

                 </div>
             </form>
         </div>
     </div>
 </div>

 @endsection
