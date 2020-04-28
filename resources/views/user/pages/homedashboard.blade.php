 @extends('user.layouts.main')
@section('title')
  Home- User Dashboard CEB Union
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
                            <p class="category">Members</p>
                            <h3 class="card-title">
								 <?php 
                                          $members= DB::select('select * from users');
                                          $membercount= count($members);
                                       ?>
                                       <?php 
                                          echo $membercount;
                                       ?>
							</h3>
                        </div>
                        <div class="card-footer">
                            
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="rose">
                            <i class="material-icons">equalizer</i>
                        </div>
                        <div class="card-content">
                            <p class="category">News Items</p>
                            <h3 class="card-title">
								<?php 
                                          $events=DB::select('select * from news');
                                          $event_count=count($events);
                                          echo $event_count;
                                       ?>
							</h3>
                        </div>
                        <div class="card-footer">
                            
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="green">
                            <i class="material-icons">supervisor_account</i>
                        </div>
                        <div class="card-content">
                            <p class="category">Events</p>
                            <h3 class="card-title">
								<?php 
                                          $events=DB::select('select * from events');
                                          $event_count=count($events);
                                          echo $event_count;
                                       ?>
							</h3>
                        </div>
                        <div class="card-footer">
                            
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="green">
                            <i class="material-icons">supervisor_account</i>
                        </div>
                        <div class="card-content">
                            <p class="category"> Groups</p>
                            <h3 class="card-title">
								 <?php 
                                          $groups=DB::select('select * from groups');
                                          $group_count=count($groups);
                                          echo $group_count;
                                       ?>
							
							</h3>
                        </div>
                        <div class="card-footer">
                           
                        </div>
                    </div>
                </div>

            </div>
        </div>
   </div>

   
</div>
</div>
<div class="row">
  <?php   $verifystate = Auth::user()->isverified; ?>
   @if($verifystate==0)
   <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="green">
                            <i class="material-icons">supervisor_account</i>
                        </div>
                           <form method="post" action="{{route('user.verifymobile')}}" class="form-horizontal">
          <!--div class="card-header card-header-text" data-background-color="rose">
            <h4 class="card-title"></h4>
        </div-->
        <div class="card-content">

            <div class="row">
                    {{csrf_field()}}
                    <!--div class="card-header card-header-text" data-background-color="rose">
                        <h4 class="card-title"></h4>
                    </div-->
                     @if(count($errors) > 0 )
                                        @foreach($errors->all() as $error)
                                            <p class="alert alert-danger">{{$error}}</p>
                                        @endforeach
                                    @endif
            </div>
            <div class="row">
                <label style="color: black;" class="col-sm-2 label-on-left">Verify Mobile</label>

                <div class="col-sm-10">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label"></label>
                        <input type="text" class="form-control" name="otp_code" placeholder="Enter Verification Code">
                        <span class="help-block">Please enter verification code.</span>
                    </div>
                </div>
            </div>
            <input class="btn btn-success pull-right" type="submit" value="Verify">
            
        </div>
                        <div class="card-footer">
                           
                        </div>
                    </div>
                </div>

                @endif

  </div>
</div>





</div>
@endsection