@extends('frontend.layouts.front')
@section('title')
  About Us
@endsection
@section('content')

         <!--Subheader Start-->
         <section>
                     <div class="subh">
                     
                              <img src="{{URL::asset('assets/images/subheaderbg.jpg')}}" >
                              <div class="top-left">
                                 <h2>About Us</h2>
                              </div>
                     </div>
                  </section>
         <!--Subheader End--> 

         <!--Main Content Start-->
         <div class="main-content">


            


            <!--Local Boards & Services-->
            <section class="Mayor-video-msg">
               <div class="container">
                  <div class="row">
                     <div class="col-md-8 col-sm-7">
                        <div class="Mayor-welcome">
                           <h2 style="color: white;">Vision</h2>
                           <p style="font-size: 20px;color: white;">To strengthen the professional life of the Technicians working in the Ceylon Electricity Board which illuminates the whole nation and to generate a unique technologist to the country.</p>
                           <h2 style="color: white;">Mission</h2>
                           <p style="font-size: 20px;color:white;">To give pre-eminence to the Technician of the Ceylon Electricity Board, to appraise his identity and his service to the entire nation preserving his professional esteem and to bestow him a higher acceptance in the society.</p>
                        </div>
                     </div>
                     <div class="col-md-4 col-sm-5">
                        <!--Mayor Msg Start-->
                        <div class="city-tour galleryd">
                         <strong> President of CEBTU</strong>
                           <img style="height: auto;width:auto;" src="{{URL::asset('assets/images/k_about.jpg')}}" alt="">
                        </div>
                        <!--Mayor Msg End--> 
                     </div>
                  </div>
               </div>
            </section>
            <!--Local Boards & Services End--> 
            <!--Read Some Facts Start-->
            <section class="wf100 p80 fact-newsletter">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="title-style-1 white">
                           <h2>About CEBTU</h2>
                           <p>From Begining to this day... </p>
                        </div>
                        <div class="row">
                           <ul class="counter">
                              <li class="col-md-4 col-sm-4">
                                 <div class="fact-box"> <i class="fas fa-flag"></i> <strong>1993</strong> <span>Established</span> </div>
                              </li>
                              <li class="col-md-4 col-sm-4">
                                 <div class="fact-box"> <i class="fas fa-user-friends"></i>
                                    <strong>
                                       <?php 
                                          $members= DB::select('select * from users');
                                          $membercount= count($members);
                                       ?>
                                       <?php 
                                          echo $membercount;
                                       ?>
                                    </strong><span>Members</span>
                                 </div>
                              </li>
                              <li class="col-md-4 col-sm-4">
                                 <div class="fact-box"> <i class="fas fa-users-cog"></i>
                                    <strong>
                                         <?php 
                                          $staff=DB::select('select * from staff');
                                          $staff_count=count($staff);
                                          echo $staff_count;
                                       ?>
                                    </strong><span>Staff</span> </div>
                              </li>
                              <li class="col-md-4 col-sm-4">
                                 <div class="fact-box"> <i class="fas fa-building"></i>
                                    <strong>
                                       <?php 
                                          $workplaces=DB::select('select * from workplaces');
                                          $workplace_count=count($workplaces);
                                       ?>
                                       <?php 
                                          echo $workplace_count;
                                       ?>
                                    </strong><span>Work Stations</span> </div>
                              </li>
                              <li class="col-md-4 col-sm-4">
                                 <div class="fact-box"> <i class="fas fa-users"></i>
									 <strong>
										  <?php 
                                          $groups=DB::select('select * from groups');
                                          $group_count=count($groups);
                                          echo $group_count;
                                       ?>
									 </strong>
									 <span>Groups</span> </div>
                              </li>
                              <li class="col-md-4 col-sm-4">
                                 <div class="fact-box"> <i class="fas fa-briefcase"></i>
                                    <strong>
                                       <?php 
                                          $events=DB::select('select * from events');
                                          $event_count=count($events);
                                          echo $event_count;
                                       ?>
                                    </strong> <span>Completed Events</span> </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                     
                  </div>
               </div>
            </section>
            <!--Read Some Facts End-->
            <!--Little About Start-->
            <div class="main-content p80">
            <!--Department Details Page Start-->
            <div class="department-details">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <!--Department Details Txt Start-->
                        <div class="deprt-txt">
                           <h3>About Us</h3>
                           <p> </p>
                           <p></p>

                           <h5>Our Policies</h5>

                           <p>01. Continuing as a democratic and prigressive Trade Union honouring all ideas and proposals</p>
                           <p>02. Protecting the esteem and identity of the technician within the
C.E.B. which is a Technical Institute.</p>
                           <p>03. Working with the existing government peacefully, without geting involved in any political party, in order to win the prodesional
rights.</p>
                           <p>04. Maintaining the concept that all functions of the technical
section of the CEB should be performed by the Technician and
objecting to handing over of the same to the private sector.</p>
<p>05. Appearing for and opposing the injustices done to the Technician by the Supplies Divisions and Officers of the CEB.</p>
<p>06.Strongly opposing if and when old Technicians are subject toinjustie at time when new Technicians are recruited by the CEB.</p>
<p>07. Speaking up if and when Technicians are reruited to the CEB
without adhering to the circulars and proper methods of recruitment.</p>
<p>08. Opposing if and when Technicians are recruited to the CEB on
man-power, daily-paid or contract basis.</p>
                 <!--ul class="gallery-3-col">
                              <li><img src="images/drtp-img-1.jpg" alt=""></li>
                              <li><img src="images/drtp-img-2.jpg" alt=""></li>
                              <li><img src="images/drtp-img-3.jpg" alt=""></li>
                           </ul-->
                           
                    
                        </div>
                        <!--Department Details Txt End--> 
                     </div>
                     <!--Sidebar Start-->
                     
                     <!--Sidebar End--> 
                  </div>
               </div>
            </div>
            <!--Department Details Page End--> 
         </div>
             <!--Little About End-->
         </div>
 @endsection    