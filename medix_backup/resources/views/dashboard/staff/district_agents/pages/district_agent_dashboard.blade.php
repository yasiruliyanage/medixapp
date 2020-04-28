 @extends('staff.district_agents.layouts.main')
 @section('title')
 District Agent Dashboard CTSU
 @endsection
 @section('content')
 <div class="container-fluid">
     <div class="row">
         <div class="col-md-12">
             <div class="card">
                 <div class="card-header card-header-icon" data-background-color="green">
                     <i class="material-icons">donut_small</i>
                 </div>
                 <div class="card-content">
                     <h4 class="card-title">Quick View</h4>
                     <div class="row">

                         <div class="col-lg-3 col-md-6 col-sm-6">
                             <div class="card card-stats">
                                 <div class="card-header" data-background-color="orange">
                                     <i class="material-icons">person</i>
                                 </div>
                                 <div class="card-content">
                                     <p class="category">pending Requests</p>
                                     <h3 class="card-title">10</h3>
                                 </div>
                                 <div class="card-footer">
                                   <div class="stats">
                                       <i class="material-icons text-success">touch_app</i> <a href="pending_reg_disa">View...</a>
                                   </div>
                                 </div>
                             </div>
                         </div>

                         <div class="col-lg-3 col-md-6 col-sm-6">
                             <div class="card card-stats">
                                 <div class="card-header" data-background-color="rose">
                                     <i class="material-icons">supervisor_account</i>
                                 </div>
                                 <div class="card-content">
                                     <p class="category">Zonal Agents</p>
                                     <h3 class="card-title">6</h3>
                                 </div>
                                 <div class="card-footer">
                                   <div class="stats">
                                       <i class="material-icons text-success">touch_app</i> <a href="mng_z_a_disa">View...</a>
                                   </div>
                                 </div>
                             </div>
                         </div>

                         <div class="col-lg-3 col-md-6 col-sm-6">
                             <div class="card card-stats">
                                 <div class="card-header" data-background-color="blue">
                                     <i class="material-icons">supervisor_account </i>
                                 </div>
                                 <div class="card-content">
                                     <p class="category">Division Agents</p>
                                     <h3 class="card-title">9</h3>
                                 </div>
                                 <div class="card-footer">
                                   <div class="stats">
                                       <i class="material-icons text-success">touch_app</i> <a href="mng_div_a_disa">View...</a>
                                   </div>
                                 </div>
                             </div>
                         </div>

                         <div class="col-lg-3 col-md-6 col-sm-6">
                             <div class="card card-stats">
                                 <div class="card-header" data-background-color="green">
                                     <i class="material-icons">supervisor_account</i>
                                 </div>
                                 <div class="card-content">
                                     <p class="category"> School Agents</p>
                                     <h3 class="card-title">8</h3>
                                 </div>
                                 <div class="card-footer">
                                   <div class="stats">
                                       <i class="material-icons text-success">touch_app</i> <a href="mng_s_a_disa">View...</a>
                                   </div>
                                 </div>
                             </div>
                         </div>

                     </div>
                 </div>
             </div>


         </div>
     </div>
 </div>





 </div>
 @endsection
