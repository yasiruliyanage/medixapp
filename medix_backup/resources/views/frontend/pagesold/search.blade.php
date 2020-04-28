@extends('frontend.layouts.front')
@section('content')
      

         <!--Sub Header Start-->
         <section>
               <div class="subh">
                 
                        <img src="{{URL::asset('assets/images/subheaderbg.jpg')}}" >
                        <div class="top-left">
                           <h2>Search Results </h2>

                            <h2>Showing Result for keyword :{{$q}} </h2>
                            <h2> {{$membercount}} members found</h2>
                             <h2>{{$downloadscount}} downloaditems found</h2>
                               <h2>{{$newscount}} news found</h2>
                                <h2>{{$eventscount}} events found</h2>

                        </div>
                 
                  
                  
               </div>
            </section>
         <!--Sub Header End--> 
         <!--Main Content Start-->
         <div class="main-content">
            <!--Contact Us Start-->
            <div class="contact-details-two graybg p80">
               <div class="container">
                  <div class="row">
                     <!-- Address Box Start -->
                     <div class="row">
                            
                             @if($membercount>0)
                               @foreach($members as $member )
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-header card-header-icon" data-background-color="rose">
                                        <i class="material-icons"></i>
                                    </div>
                                   
                                    <div class="card-content">
                                        <h4 class="card-title"></h4>
                                        <form method="#" action="#">
                                            <div class="form-group label-floating">
                                                       
                                                        <picture>
                                                            <img src="{{URL::asset('assets/images/suser.jpg')}}" alt="" style="width:250px;height: 250px;" disabled>
                                                          </picture>
                                             </div>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Name</label>
                                                <input type="text" class="form-control" value="{{$member->name}}">
                                            </div>
                                            <div class="form-group label-floating">
                                                <label class="control-label">EMP No</label>
                                                <input type="text" class="form-control" value="{{$member->employee_id}}">
                                            </div>
                                         
                                        </form>
                                    </div>
                                   
                                </div>
                            </div>
                             @endforeach

                            @endif


                            
                  </div>
               </div>
               <div class="row">
                     <!-- Address Box Start -->
                     <div class="row">
                            
                             @if($downloadscount>0)
                               @foreach($downloads as $download )
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-header card-header-icon" data-background-color="rose">
                                        <i class="material-icons"></i>
                                    </div>
                                   
                                    <div class="card-content">
                                        <h4 class="card-title"></h4>
                                        <form method="#" action="#">
                                            <div class="form-group label-floating">
                                                       
                                                        <picture>
                                                            <img src="{{URL::asset('assets/images/suser.jpg')}}" alt="" style="width:250px;height: 250px;" disabled>
                                                          </picture>
                                             </div>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Report Name</label>
                                                <input type="text" class="form-control" value="{{$download->name}}">
                                            </div>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Description</label>
                                                <input type="text" class="form-control" value="{{$download->description}}">
                                            </div>
                                         
                                        </form>
                                    </div>
                                   
                                </div>
                            </div>
                             @endforeach

                            @endif

                            
                            
                  </div>
               </div>

                <div class="row">
                     <!-- Address Box Start -->
                     <div class="row">
                            
                             @if($newscount>0)
                               @foreach($news as $new )
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-header card-header-icon" data-background-color="rose">
                                        <i class="material-icons"></i>
                                    </div>
                                   
                                    <div class="card-content">
                                        <h4 class="card-title"></h4>
                                        <form method="#" action="#">
                                            <div class="form-group label-floating">
                                                       
                                                        <picture>
                                                            <img src="{{URL::asset('assets/images/suser.jpg')}}" alt="" style="width:250px;height: 250px;" disabled>
                                                          </picture>
                                             </div>
                                            <div class="form-group label-floating">
                                                <label class="control-label">header Title</label>
                                                <input type="text" class="form-control" value="{{$new->header_title}}">
                                            </div>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Long Description</label>
                                                <input type="text" class="form-control" value="{{$new->long_desc}}">
                                            </div>
                                         
                                        </form>
                                    </div>
                                   
                                </div>
                            </div>
                             @endforeach

                            @endif

                            
                            
                  </div>
               </div>
                <div class="row">
                     <!-- Address Box Start -->
                     <div class="row">
                            
                             @if($eventscount>0)
                               @foreach($events as $event )
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-header card-header-icon" data-background-color="rose">
                                        <i class="material-icons"></i>
                                    </div>
                                   
                                    <div class="card-content">
                                        <h4 class="card-title"></h4>
                                        <form method="#" action="#">
                                            <div class="form-group label-floating">
                                                       
                                                        <picture>
                                                            <img src="{{URL::asset('assets/images/suser.jpg')}}" alt="" style="width:250px;height: 250px;" disabled>
                                                          </picture>
                                             </div>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Event </label>
                                                <input type="text" class="form-control" value="{{$event->header_title}}">
                                            </div>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Description</label>
                                                <input type="text" class="form-control" value="{{$event->short_desc}}">
                                            </div>
                                         
                                        </form>
                                    </div>
                                   
                                </div>
                            </div>
                             @endforeach

                            @endif

                            
                            
                  </div>
               </div>
            </div>
         </div>
        
         @endsection    
      