@extends('frontend.layouts.front')
@section('title')
CEBTU - Home
@endsection
@section('content')


  <div class="main-slider wf100">
          <div id="home-slider" class="owl-carousel owl-theme"> 
      
            <!--Item Start-->
      
            <div class="item">
              <div class="h3-slider-caption text-center">
              </div>
              <img src="{{URL::asset('assets/images/banar1.jpg')}}" alt="">
      
            </div>
      
            <!--Item End-->
      
            <!--Item Start-->
      
           <div class="item">
              <div class="h3-slider-caption text-center">
              </div>
              <img src="{{URL::asset('assets/images/banar2.jpg')}}" alt="">
            </div>
            <!--Item End--> 
      
            <!--Item Start-->
            <div class="item">
              <div class="h3-slider-caption text-center">
              </div>
              <img src="{{URL::asset('assets/images/banar3.jpg')}}" alt="">
             </div>
      
            <!--Item End--> 
      
             <!--Item Start-->
             <div class="item">
              <div class="h3-slider-caption text-center">
              </div>
              <img src="{{URL::asset('assets/images/banar4.jpg')}}" alt="">
            </div>
      
            <!--Item End--> 
      
          </div>
        </div>
  
  
  <!--Slider End--> 
  <!--Main Content Start-->
  <div class="main-content"> 
    <!--Local Boards & Services-->
    <section class="wf100 p80-0 wel">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-8">
            <div class="h2-Mayor-msg" style="background-color:#8A2424; ">
              <div class="Mayor-img"> <span class="msig"> </span> <img src="{{URL::asset('assets/images/mayer2.jpg')}}" alt=""></div>
              
            </div>
          </div>
          <div class="col-md-4 col-sm-4"> 
            <!--Mayor Msg Start-->
            <div class="city-tour gallery"> <strong> CEBTU</strong> <a href="https://www.youtube.com/watch?v=NyiheIsromI" data-rel="prettyPhoto" title="Welcome!"><img src="{{URL::asset('assets/images/playicon.png')}}" alt=""></a> <img src="{{URL::asset('assets/images/welcmlamp.jpg')}}" alt=""> </div>
            <!--Mayor Msg End--> 
          </div>
        </div>
      </div>
    </section>
    
    <!--Local Boards & Services Start-->
    <section class="wf100 p80 h2-local-brands">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-title">
              <h2>Photo Gallery</h2>
              <p> <br>
               </p>
            </div>
          </div>
        </div>
        <div class="row m5">
          <div class="col-md-9 col-sm-8">
            <div class="row"> 
              <!--Start-->
              <div class="col-md-4 col-sm-6 p5">
                <div class="lb-box">
                  <h6> </h6>
                  <img src="{{URL::asset('assets/images/galary_1.jpg')}}" alt=""> </div>
              </div>
              <!--End--> 
              
              <!--Start-->
              <div class="col-md-4 col-sm-6 p5">
                <div class="lb-box">
                  <h6></h6>
                  <img src="{{URL::asset('assets/images/galary_2.jpg')}}" alt=""> </div>
              </div>
              <!--End--> 
              
              <!--Start-->
              <div class="col-md-4 col-sm-6 p5">
                <div class="lb-box">
                  <h6> </h6>
                  <img src="{{URL::asset('assets/images/galary_3.jpg')}}" alt=""> </div>
              </div>
              <!--End--> 
              
              <!--Start-->
              <div class="col-md-4 col-sm-6 p5">
                <div class="lb-box">
                  <h6></h6>
                  <img src="{{URL::asset('assets/images/galary_4.jpg')}}" alt=""> </div>
              </div>
              <!--End--> 
              
              <!--Start-->
              <div class="col-md-4 col-sm-6 p5">
                <div class="lb-box">
                  <h6></h6>
                  <img src="{{URL::asset('assets/images/galary_5.jpg')}}" alt=""> </div>
              </div>
              <!--End--> 
              
              <!--Start-->
              <div class="col-md-4 col-sm-6 p5">
                <div class="lb-box">
                  <h6></h6>
                  <img src="{{URL::asset('assets/images/galary_6.jpg')}}" alt=""> </div>
              </div>
              <!--End--> 
              
            </div>
          </div>
          
          <!--Helplines & Emergency Services Start-->
          <div class="col-md-3 col-sm-4">
            <div class="emergency-info lb">
              <h5>Helplines &
                Emergency
                Services </h5>
              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true"> 
                <!--Panel Start-->
                <div class="panel">
                  <div class="panel-heading" role="tab" id="headingOne">
                    <h6> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Head Office </a> </h6>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                      <ul>
                        <li> <i class="fas fa-user-tie"></i> Customer Care</li>
                        <li> <i class="fas fa-phone"></i> 1987</li>
                        <li> <i class="far fa-envelope"></i> eeppp@ceb.lk</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--Panel End--> 
                <!--Panel Start-->
                <div class="panel">
                  <div class="panel-heading" role="tab" id="heading2">
                    <h6> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2"> Ministry of Power </a> </h6>
                  </div>
                  <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                    <div class="panel-body">
                      <ul>
                        <li> <i class="fas fa-user-tie"></i> Head Office</li>
                        <li> <i class="far fa-building"></i> # 72, Ananda Coomarswamy Mw,
Colombo 07,</li>
                        <li> <i class="fas fa-phone"></i> +94 112 574922</li>
                        
                        <li> <i class="far fa-envelope"></i> info@powermin.gov.lk </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--Panel End--> 
                <!--Panel Start-->
                <div class="panel">
                  <div class="panel-heading" role="tab" id="heading3">
                    <h6> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3"> LECO</a> </h6>
                  </div>
                  <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                    <div class="panel-body">
                      <ul>
                        <li> <i class="fas fa-user-tie"></i> Lanka Electricity Company (Private) Limited</li>
                        <li> <i class="far fa-building"></i> 411, Galle Road, Colombo 03</li>
                        <li> <i class="fas fa-phone"></i> +94 112 371 600</li>
                        
                        <li> <i class="far fa-envelope"></i> general@leco.lk</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--Panel End--> 
                <!--Panel Start-->
                <div class="panel">
                  <div class="panel-heading" role="tab" id="heading4">
                    <h6> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="true" aria-controls="collapse4"> Atomic Energy Board </a> </h6>
                  </div>
                  <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                    <div class="panel-body">
                      <ul>
                        <li> <i class="fas fa-user-tie"></i> Head Office</li>
                        <li> <i class="far fa-building"></i> No. 60/460, Baseline Road,Orugodawatta,Wellampitiya</li>
                        <li> <i class="fas fa-phone"></i> +9411-2533427-8</li>
                        
                        <li> <i class="far fa-envelope"></i> officialmail@aeb.gov.lk </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--Panel End--> 
                <!--Panel Start-->
                <div class="panel" style="margin-bottom: -10px;">
                  <div class="panel-heading" role="tab" id="heading5">
                    <h6> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="true" aria-controls="collapse5"> Information Centre</a> </h6>
                  </div>
                  <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
                    <div class="panel-body">
                      <ul>
                        <li> <i class="fas fa-user-tie"></i> Customer Care</li>
                        <li> <i class="far fa-building"></i> 160/24,Kirimandala Mawatha,Colombo 5.</li>
                        <li> <i class="fas fa-phone"></i> 1919</li>
                       
                        <li> <i class="far fa-envelope"></i> info@gic.gov.lk </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--Panel End--> 
              </div>
            </div>
          </div>
          <!--Helplines & Emergency Services End--> 
          
        </div>
      </div>
    </section>
    <!--Local Boards & Services End--> 
    
    
    <!--Event Festivals Start-->
    <section id="evb" class="wf100 p80 h2-news-articles" style="padding-top: 0px;">
      <div class="container">
        <div class="row">
          <div class="title-style-2 wf100">
            <div class="col-md-12">
              <h2>Events </h2>
                
            </div>
            
          </div>
        </div>
		
        <div class="row">
			  @foreach($events as $event)
           <div class="col-md-4 col-sm-6">
            <div class="news-post image-post">
              <div class="thumb">
				  <img style="width:400px; height:250px;" src="{{URL::to('/')}}/event/mainimg/{{$event->main_image}}" alt=""></div>
              <div class="news-post-txt"> <span class="ecat c2"></span> 
               
                <h5><a href="{{route('eventfront.show',$event->id)}}">{{$event->header_title}}</a></h5>
                <p> </p>
                <ul class="news-meta">
                  <li>Organizer {{$event->orgnizer}}</li>
                  <li><?php $date = strtotime($event->e_date);
										$newdate = date('d-F-Y',$date); 
										echo $newdate;?> </li>
                </ul>
              </div>
            </div>
          </div>
			@endforeach
      
        
        </div>
		  
      </div>
    </section>
    <!--Event Festivals End--> 

    <!--News Items Start-->
    <section id="nbg" class="wf100 p80 h2-news-articles" style="padding-top: 0px;">
      <div class="container">
        <div class="row">
          <div class="title-style-2 wf100">
            <div class="col-md-12">
              <h2>News Articles</h2>
                
            </div>
            
          </div>
        </div>
        <div class="row">
          <!--News Post End--> 
           @foreach($news as $new)
           <div class="col-md-4 col-sm-6">
            <div class="news-post image-post">
              <div class="thumb" style="height:250px;text-align: center;" ><img style="width:auto; height:50vh;" src="{{URL::to('/')}}/news/mainimg/{{$new->main_image}} " alt=""></div>
              <div class="news-post-txt"> <span class="ecat c2"></span> 
               
                <h5><a href="{{route('newsfront.show',$new->id)}}">{{$new->header_title}}</a></h5>
                <p> </p>
                <ul class="news-meta">
                  <li> Admin</li>
                  <li> <?php $date = strtotime($event->created_at);
										$newdate = date('d-F-Y',$date); 
										echo $newdate;?></li>
                </ul>
              </div>
            </div>
          </div>
			@endforeach
    <!---->
        </div>
      </div>
    </section>
    <!--News Items End--> 
   

    <!--City Official Members Start-->
   
    <section class="wf100 p80 official-members" style="padding-top: 2px;">
     <div class="container">
		 <div class="row">
          <div class="title-style-2 wf100">
            <div class="col-md-12">
              <h2>Staff Of  Ceylon Electricity Board Technicians Union</h2>
                
            </div>
            
          </div>
        </div>
        <div class="row">
			@foreach($homestaff as $staff)
          <!--Team Box Start-->
          <div class="col-md-3 col-sm-4">
            <div class="team-box">
              <div class="team-thumb"> <a href="ourstaff"><i class="fas fa-link"></i></a> <img src="{{URL::to('/')}}/staff/{{$staff->photo}}" alt=""></div>
              <div id="txtteam" class="team-txt">
                <h5 class="ph1">{{$staff->name}}</h5>
				  	
                
                <p class="memp">
                  <span style="display: none;">{{ $olddesig =$staff->position }} </span>
                                         @foreach($designations as $designation)
                                         <span style="display: none;">{{ $desig =$designation->id }} </span>
				                         <strong class="dep"><?php if($olddesig== $desig){ echo $designation->designation ; } else{} ?></strong>
                                      
                                        @endforeach
                 </p>
               
              </div>
            </div>
			  
          </div>
		@endforeach
          <!--Team Box End--> 
        <div class="col-md-3">
            <div class="team-heading">
              <h2>For more Staff Members</h2>
              <p> You want to know more about our staff members,please visit.. </p>
              <a href="ourstaff">more staff members</a>
            </div>
          </div>
           
              
            </div>
          </div>  
    </section>
    <!--City Official Members End--> 
  </div>
  <!--Main Content End--> 
  <!--Footer Start-->
  <footer id="site-foot" class="main-footer wf100">
    <div class="container">
      <div class="row"> 
        <!--Footer Widget Start-->
        <div class="col-md-4 col-sm-6">
          <div class="textwidget">
            <address>
                <h6>Contact Us</h6>
            <ul>
              <li> <i class="fas fa-university"></i> <strong>Address:</strong> Ceylon Electricity Board Technicians Union,<br>Ceylon Electricity Board,<br>No.209,<br>Athulugama,<br>Bandaragama.
              </li>
              <li> <i class="fas fa-envelope"></i> <strong>Email:</strong> <a id="em" href="info@cebtu.lk">info@cebtu.lk</a> </li>
              <li> <i class="fas fa-phone"></i> <strong>Call us:</strong>+94 716876975 <br>
                +94 767860970<br> +94 710355414 </li>
            </ul>
            </address>
          </div>
        </div>
        <!--Footer Widget End--> 
        <!--Footer Widget Start-->
        <div class="col-md-4 col-sm-6">
          <div class="footer-widget">
            <h6>Important Links</h6>
            <ul>
              <li><a href="http://www.president.gov.lk/" target="_blank"><i class="fas fa-star"></i> President Office</a></li>
              <li><a href="http://www.pmoffice.gov.lk/" target="_blank"><i class="fas fa-star"></i> Prime Minister Office</a></li>
              <li><a href="https://www.ceb.lk/" target="_blank"><i class="fas fa-star"></i>Ceylon Electricity Board</a></li>
              <li><a href="http://powermin.gov.lk/english/" target="_blank"><i class="fas fa-star"></i> Ministry of Power Energy and Business Development</a></li>
              <li><a href="http://www.cebeu.lk/cebeuw/" target="_blank"><i class="fas fa-star"></i> The Ceylon Electricity Board Engineers' Union</a></li>
              <li><a href="http://www.pensions.gov.lk/index.php?lang=en" target="_blank"><i class="fas fa-star"></i> Department of Pensions</a></li>
              <li><a href="http://www.etfb.lk/" target="_blank"><i class="fas fa-star"></i> Employees Trust Fund</a></li>
              <li><a href="http://www.epf.lk/" target="_blank"><i class="fas fa-star"></i> Employees' Provident Fund</a></li>
              
            </ul>
          </div>
        </div>
        <!--Footer Widget End--> 
        <!--Footer Widget Start-->
        <div class="col-md-4 col-sm-6">
          <div class="footer-widget">
            <h6>Important Links</h6>
            <ul>
              
              <li><a href="http://www.pucsl.gov.lk/" target="_blank"><i class="fas fa-star"></i> Public Utility Commission of Sri Lanka </a></li>
              <li><a href="http://www.energy.gov.lk/index.php/en/" target="_blank"><i class="fas fa-star"></i> Sri Lanka Sustainable Energy Authority</a></li>
              <li><a href="http://www.treasury.gov.lk/" target="_blank"><i class="fas fa-star"></i> Ministry of Finance & Mass Media</a></li>
              <li><a href="http://www.hrcsl.lk/" target="_blank"><i class="fas fa-star"></i> Human Rights Commission Of Sri Lanka</a></li>
              <li><a href="http://labourdept.gov.lk/index.php?lang=en" target="_blank"><i class="fas fa-star"></i> Department of Labour</a></li>
              <li><a href="http://www.documents.gov.lk/" target="_blank"><i class="fas fa-star"></i> Department of Goverment Printing</a></li>
              <li><a href="http://www.statistics.gov.lk/" target="_blank"><i class="fas fa-star"></i> Department Of Census And Statistics</a></li>
              <li><a href="http://www.pubad.gov.lk/web/" target="_blank"><i class="fas fa-star"></i> Ministry of Public Administration and Management</a></li>
            </ul>
          </div>
        </div>
        <!--Footer Widget End--> 
        <!--Footer Widget Start-->
        
        <!--Footer Widget End--> 
      </div>
    </div>
  </footer>
</div>
<div class="main-content"> 
    <section class="wf100 p80 official-membersr">
    
     <div class="container">

        <div class="row">
          
        </div>
      </div>
    </section>
    
  </div>
<!--Wrapper End-->
<!--div class="overlay"></div>
<section id="c">
  <img src="{{URL::asset('assets/images/3.jpg')}}" alt=""> 
  </section-->
  <!--Call 2 Action End--> 
  <!--Footer Start-->
@endsection






 
