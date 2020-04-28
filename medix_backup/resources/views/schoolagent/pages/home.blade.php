 @extends('schoolagent.layouts.main')
@section('title')
  Home-Department Admin Dashboard  Medix.lk
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
                                 <div class="card-header" data-background-color="rose">
                                     <i class="material-icons">supervisor_account</i>
                                 </div>
                                 <div class="card-content">
                                     <p class="category">Department Admins</p>
                                     <h3 class="card-title">
                                     
                                        <?php $sid = $user->school ?>
                                    
                             <?php
                            $schoolinfo= DB::select('select * from schools where id=?',[$sid]);
                            $sagentscount= $schoolinfo[0]->s_a_count;

                            ?><?php echo $sagentscount;?>
                                
                            </h3>
                                 </div>
                                 <div class="card-footer">
                                   <div class="stats">
                                       <i class="material-icons text-success">touch_app</i> <a href="#">View...</a>
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
                                     <p class="category">Users</p>
                                     <h3 class="card-title"> 
                                         <?php
                          
                            $membercount= $schoolinfo[0]->t_count;

                            ?><?php echo $membercount;?>
                                 </div>
                                 <div class="card-footer">
                                   <div class="stats">
                                       <i class="material-icons text-success">touch_app</i> <a href="{{route('schoolagentmember.members')}}">View...</a>
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