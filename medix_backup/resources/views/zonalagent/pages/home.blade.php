 @extends('zonalagent.layouts.main')
@section('title')
  Home-Province Agent Dashboard  CTSU
@endsection
@section('content')
<?php $nav = 'dashboard'; ?>
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
                                 <div class="card-header" data-background-color="green">
                                     <i class="material-icons">supervisor_account</i>
                                 </div>
                                 <div class="card-content">
                                     <p class="category"> Division Agents</p>
                                     <h3 class="card-title"> 
                                         <?php $zid = $user->zone ?>
                                    
                             <?php
                            $zoneinfo= DB::select('select * from zones where id=?',[$zid]);
                            $divagentscount= $zoneinfo[0]->div_a_count;

                            ?>
                                         <?php echo $divagentscount;?>
                                 </div>
                                 <div class="card-footer">
                                   <div class="stats">
                                       <i class="material-icons text-success">touch_app</i> <a href="{{route('zonaldivisionagent.agents')}}">View...</a>
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
                                     <h3 class="card-title"> 
                            
                              <?php
                            $sagentscount=  $zoneinfo[0]->s_a_count;
                            ?>
                            <?php echo $sagentscount;?>
                                
                            </h3>
                                 </div>
                                 <div class="card-footer">
                                   <div class="stats">
                                       <i class="material-icons text-success">touch_app</i> <a href="{{route('zonalagentuser.schools')}}">View...</a>
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