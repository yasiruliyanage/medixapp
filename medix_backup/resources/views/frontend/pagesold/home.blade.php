
 @extends('frontend.layouts.main')
@section('title')
  Ceylon Electricity Board Technicians Union
@endsection
@section('content')
<!--Header End--> 

  <!--Slider Start-->
  
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
              <img src="{{URL::asset('assets/images/banar2.jpg')}}" alt=""> </div>
            <!--Item End--> 
      
            <!--Item Start-->
            <div class="item">
              <div class="h3-slider-caption text-center">
              </div>
              <img src="{{URL::asset('assets/images/banar3.jpg')}}" alt=""> </div>
      
            <!--Item End--> 
      
             <!--Item Start-->
             <div class="item">
              <div class="h3-slider-caption text-center">
              </div>
              <img src="{{URL::asset('assets/images/banar4.jpg')}}" alt=""> </div>
      
            <!--Item End--> 
      
          </div>
        </div>
  
  
  <!--Slider End--> 




  <!--Main Content Start-->
  <div class="main-content"> 
    <!--Local Boards & Services-->
    <section class="wf100 p80-0">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-8">
            <div class="h2-Mayor-msg">
              <div class="Mayor-img"> <span class="msig"> <img src="{{URL::asset('assets/images/mayer-signature.png')}}" alt=""> </span> <img src="{{URL::asset('assets/images/mayer2.jpg')}}" alt=""></div>
              <div class="Mayor-txt"> <strong>Mayor of the City</strong>
                <h4>Edward Robert</h4>
                <p> The Hightst Glory of the Citizen’s revolution was this; it connected in one indissoluble bond the principles of civil government with the principles of humanity. </p>
                <a href="#">Contact Me</a> </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4"> 
            <!--Mayor Msg Start-->
            <div class="city-tour gallery"> <strong> vibrant city </strong> <a href="http://youtu.be/VVvgm7AhFc8" data-rel="prettyPhoto" title="City Tour"><img src="{{URL::asset('assets/images/playicon.png')}}" alt=""></a> <img src="{{URL::asset('assets/images/cityvideobg.jpg')}}" alt=""> </div>
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
              <h2>Local Boards & Services</h2>
              <p>For the beginning of a new paragraph marks a change of topic or a step in the development of an Usce portado class rproin aesent auctorcr nec facilis<br>
                Leocras scras massacra sque nibh sodale cusut morb.</p>
            </div>
          </div>
        </div>
        <div class="row m5">
          <div class="col-md-9 col-sm-8">
            <div class="row"> 
              <!--Start-->
              <div class="col-md-4 col-sm-6 p5">
                <div class="lb-box">
                  <h6>History & Culture</h6>
                  <img src="{{URL::asset('assets/images/cityvideobg.jpg')}}images/cul1.jpg" alt=""> </div>
              </div>
              <!--End--> 
              
              <!--Start-->
              <div class="col-md-4 col-sm-6 p5">
                <div class="lb-box">
                  <h6>Economy & Stats</h6>
                  <img src="{{URL::asset('assets/images/cityvideobg.jpg')}}images/cul2.jpg" alt=""> </div>
              </div>
              <!--End--> 
              
              <!--Start-->
              <div class="col-md-4 col-sm-6 p5">
                <div class="lb-box">
                  <h6>Constitution & Laws</h6>
                  <img src="{{URL::asset('assets/images/cityvideobg.jpg')}}images/cul3.jpg" alt=""> </div>
              </div>
              <!--End--> 
              
              <!--Start-->
              <div class="col-md-4 col-sm-6 p5">
                <div class="lb-box">
                  <h6>Citizen’s Rights</h6>
                  <img src="{{URL::asset('assets/images/cityvideobg.jpg')}}images/cul4.jpg" alt=""> </div>
              </div>
              <!--End--> 
              
              <!--Start-->
              <div class="col-md-4 col-sm-6 p5">
                <div class="lb-box">
                  <h6>Business</h6>
                  <img src="{{URL::asset('assets/images/cityvideobg.jpg')}}images/cul5.jpg" alt=""> </div>
              </div>
              <!--End--> 
              
              <!--Start-->
              <div class="col-md-4 col-sm-6 p5">
                <div class="lb-box">
                  <h6>Library & Education</h6>
                  <img src="{{URL::asset('assets/images/cityvideobg.jpg')}}images/cul6.jpg" alt=""> </div>
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
                    <h6> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Mayor Office </a> </h6>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                      <ul>
                        <li> <i class="fas fa-user-tie"></i> Edward Robert</li>
                        <li> <i class="far fa-building"></i> 93002 Green Avenue</li>
                        <li> <i class="fas fa-phone"></i> 333 111 333</li>
                        <li> <i class="fas fa-fax"></i> 777 555 666 </li>
                        <li> <i class="far fa-envelope"></i> Mayor@balad.org </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--Panel End--> 
                <!--Panel Start-->
                <div class="panel">
                  <div class="panel-heading" role="tab" id="heading2">
                    <h6> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2"> City Council </a> </h6>
                  </div>
                  <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                    <div class="panel-body">
                      <ul>
                        <li> <i class="fas fa-user-tie"></i> Edward Robert</li>
                        <li> <i class="far fa-building"></i> 93002 Green Avenue</li>
                        <li> <i class="fas fa-phone"></i> 333 111 333</li>
                        <li> <i class="fas fa-fax"></i> 777 555 666 </li>
                        <li> <i class="far fa-envelope"></i> Mayor@balad.org </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--Panel End--> 
                <!--Panel Start-->
                <div class="panel">
                  <div class="panel-heading" role="tab" id="heading3">
                    <h6> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3"> Police Emergency </a> </h6>
                  </div>
                  <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                    <div class="panel-body">
                      <ul>
                        <li> <i class="fas fa-user-tie"></i> Edward Robert</li>
                        <li> <i class="far fa-building"></i> 93002 Green Avenue</li>
                        <li> <i class="fas fa-phone"></i> 333 111 333</li>
                        <li> <i class="fas fa-fax"></i> 777 555 666 </li>
                        <li> <i class="far fa-envelope"></i> Mayor@balad.org </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--Panel End--> 
                <!--Panel Start-->
                <div class="panel">
                  <div class="panel-heading" role="tab" id="heading4">
                    <h6> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="true" aria-controls="collapse4"> Ambulance </a> </h6>
                  </div>
                  <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                    <div class="panel-body">
                      <ul>
                        <li> <i class="fas fa-user-tie"></i> Edward Robert</li>
                        <li> <i class="far fa-building"></i> 93002 Green Avenue</li>
                        <li> <i class="fas fa-phone"></i> 333 111 333</li>
                        <li> <i class="fas fa-fax"></i> 777 555 666 </li>
                        <li> <i class="far fa-envelope"></i> Mayor@balad.org </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--Panel End--> 
                <!--Panel Start-->
                <div class="panel">
                  <div class="panel-heading" role="tab" id="heading5">
                    <h6> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="true" aria-controls="collapse5"> E-Services </a> </h6>
                  </div>
                  <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
                    <div class="panel-body">
                      <ul>
                        <li> <i class="fas fa-user-tie"></i> Edward Robert</li>
                        <li> <i class="far fa-building"></i> 93002 Green Avenue</li>
                        <li> <i class="fas fa-phone"></i> 333 111 333</li>
                        <li> <i class="fas fa-fax"></i> 777 555 666 </li>
                        <li> <i class="far fa-envelope"></i> Mayor@balad.org </li>
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
    
    <!--Emergency Numbers Start-->
    <section class="wf100 emergency-numbers">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-5">
            <div class="newsletter-form">
              <h5>Be Updated with us</h5>
              <ul class="row">
                <li class="col-md-6">
                  <input type="text" class="form-control" placeholder="Your Name">
                </li>
                <li class="col-md-6">
                  <input type="text" class="form-control" placeholder="Email Address">
                </li>
                <li class="col-md-6">
                  <p>Signup to get the updates on email from the city & town affairs!</p>
                </li>
                <li class="col-md-6">
                  <button>Subscribe</button>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-sm-7">
            <div  class="e-numbers">
              <h5>Emergency Numbers</h5>
              <p>Dial these numbers in case of any emergency</p>
              <div class="info-num"> <strong>For any Information</strong>
                <h3>(08)00 9876</h3>
              </div>
              <ul class="row">
                <li class="col-md-4 col-sm-4">
                  <div class="em-box"> <i class="fas fa-user-secret"></i> <strong class="em-num">911</strong> <strong class="em-deprt">Police
                    Department</strong> </div>
                </li>
                <li class="col-md-4 col-sm-4">
                  <div class="em-box"> <i class="fas fa-ambulance"></i> <strong class="em-num">177</strong> <strong class="em-deprt"> Ambulance
                    Services</strong> </div>
                </li>
                <li class="col-md-4 col-sm-4">
                  <div class="em-box"> <i class="fas fa-fire-extinguisher"></i> <strong class="em-num">103</strong> <strong class="em-deprt">Fire Brigade
                    Department</strong> </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Emergency Numbers End--> 
    <!--Event Festivals & News Articles Start-->
    <section class="wf100 p80 h2-news-articles">
      <div class="container">
        <div class="row">
          <div class="title-style-2 wf100">
            <div class="col-md-4">
              <h2>Event Festivals &
                News Articles</h2>
            </div>
            <div class="col-md-6">
              <p> Faucibu facilis pretiu gravidas volutp tur gravida. Dictumst liberout pornam erat nullam netus.Vallis facilisi sim quam teger sce aliquet nulla. </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8 col-sm-12">
            <div class="event-post-full">
              <div class="thumb"> <a href="#"><i class="fas fa-link"></i></a> <img src="{{URL::asset('assets/images/cityvideobg.jpg')}}images/h2e1.jpg" alt=""> </div>
              <div class="event-post-content">
                <div class="event-post-txt"> <span class="ecat c1">Medical Event</span> 
                  
                  <!--Share Start-->
                  <div class="btn-group share-post">
                    <button type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-share-alt"></i> Share </button>
                    <ul class="dropdown-menu">
                      <li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
                      <li><a href="#" class="insta"><i class="fab fa-instagram"></i></a></li>
                      <li><a href="#" class="linken"><i class="fab fa-linkedin-in"></i></a></li>
                      <li><a href="#" class="yt"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                  </div>
                  <!--Share End-->
                  
                  <h5><a href="#">Social Awareness Seminar</a></h5>
                  <ul class="event-meta">
                    <li><i class="far fa-calendar-alt"></i> 3-5 March, 2019</li>
                    <li><i class="far fa-clock"></i> 09:00am - 06:00pm</li>
                  </ul>
                  <p>Culus ent nislae lum teger quamphas. Miin diam eger lus quamnull dictumst llam pretium metusdo.</p>
                </div>
                <div class="event-post-loc"> <i class="fas fa-map-marker-alt"></i> Millenia Orlando, USA <a href="#"><i class="fas fa-arrow-right"></i></a> </div>
              </div>
            </div>
          </div>
          <!--News Post-->
          <div class="col-md-4 col-sm-6">
            <div class="news-post image-post">
              <div class="thumb"><img src="{{URL::asset('assets/images/cityvideobg.jpg')}}images/h2news1.jpg" alt=""></div>
              <div class="news-post-txt"> <span class="ecat c2">Medical Event</span> 
                <!--Share Start-->
                <div class="btn-group share-post">
                  <button type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-share-alt"></i> Share </button>
                  <ul class="dropdown-menu">
                    <li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" class="insta"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#" class="linken"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#" class="yt"><i class="fab fa-youtube"></i></a></li>
                  </ul>
                </div>
                <!--Share End-->
                <h5><a href="#">Framework Policy for Local Community</a></h5>
                <p> Nulla litora tate metus nean noninte ssed. Sodales laut esent mus vulput potent maurisd primis senectus eratfus. </p>
                <ul class="news-meta">
                  <li class="post-user"> <img src="{{URL::asset('assets/images/cityvideobg.jpg')}}images/user2.jpg" alt=""> Gabby Tim </li>
                  <li><i class="far fa-calendar-alt"></i> 3 November, 2019</li>
                </ul>
              </div>
            </div>
          </div>
          <!--News Post End--> 
          
          <!--News Post-->
          <div class="col-md-4 col-sm-6">
            <div class="news-post">
              <div class="news-post-txt"> <span class="ecat c3">Govt. News</span> 
                <!--Share Start-->
                <div class="btn-group share-post">
                  <button type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-share-alt"></i> Share </button>
                  <ul class="dropdown-menu">
                    <li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" class="insta"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#" class="linken"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#" class="yt"><i class="fab fa-youtube"></i></a></li>
                  </ul>
                </div>
                <!--Share End-->
                <h5><a href="#">Convention on Rights of
                  Persons with Disabilities </a></h5>
                <p> Saepe eveniet voluptates etena repudiandae sint et molestiae recusandae. Itaque earum rerum hic tenetur a sapientet. </p>
                <ul class="news-meta">
                  <li class="post-user"> <img src="{{URL::asset('assets/images/cityvideobg.jpg')}}images/user2.jpg" alt=""> Gabby Tim </li>
                  <li><i class="far fa-calendar-alt"></i> 3 November, 2019</li>
                </ul>
              </div>
            </div>
          </div>
          <!--News Post End--> 
          
          <!--News Post-->
          <div class="col-md-4 col-sm-6">
            <div class="news-post small-img-post">
              <div class="thumb"> <span class="ecat c4">Medical Event</span> <img src="{{URL::asset('assets/images/cityvideobg.jpg')}}images/h2news2.jpg" alt=""></div>
              <div class="news-post-txt">
                <h5><a href="#">Framework Policy for Local Community</a></h5>
                <ul class="news-meta">
                  <li class="post-user"> <img src="{{URL::asset('assets/images/cityvideobg.jpg')}}images/user2.jpg" alt=""> Gabby Tim </li>
                  <li><i class="far fa-calendar-alt"></i> 3 November, 2019</li>
                </ul>
              </div>
            </div>
          </div>
          <!--News Post End--> 
          
          <!--News Post-->
          <div class="col-md-4 col-sm-6">
            <div class="news-post">
              <div class="news-post-txt"> <span class="ecat c5">Govt. News</span> 
                <!--Share Start-->
                <div class="btn-group share-post">
                  <button type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-share-alt"></i> Share </button>
                  <ul class="dropdown-menu">
                    <li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" class="insta"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#" class="linken"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#" class="yt"><i class="fab fa-youtube"></i></a></li>
                  </ul>
                </div>
                <!--Share End-->
                <h5><a href="#">Community support on
                  rural development</a></h5>
                <p> Quamnunc tristiq aesent eclass turpisp penatib nislae rissed consequa. Sque ipsum pretiu dictumst platea urnavest. </p>
                <ul class="news-meta">
                  <li class="post-user"> <img src="{{URL::asset('assets/images/cityvideobg.jpg')}}images/user2.jpg" alt=""> Gabby Tim </li>
                  <li><i class="far fa-calendar-alt"></i> 3 November, 2019</li>
                </ul>
              </div>
            </div>
          </div>
          <!--News Post End--> 
          
        </div>
      </div>
    </section>
    <!--Event Festivals & News Articles End--> 
    <!--Highlights & Cityscapes Start-->
    <section class="p80-0 wf100 highlights-cityscapes">
      <div class="container">
        <div class="section-title text-center">
          <h2>Highlights & Cityscapes</h2>
          <p>Facili facilis vehicula iennam ibulum sce dolor turpis. Ultricie elementu lla sacras vel blandit pharetra liquam. <br>
            argument or of a story. In writing essays or other compositions too include. </p>
        </div>
      </div>
      <div id="highlight-slider-2" class="owl-carousel owl-theme"> 
        <!--Box Start-->
        <div class="item">
          <div class="hc-box"> <img src="{{URL::asset('assets/images/cityvideobg.jpg')}}images/hc1.jpg" alt="">
            <div class="hc-box-cap">
              <h5><a href="#">Food & Restaurants</a></h5>
              <ul>
                <li><a href="#"><i class="far fa-image"></i> 48 Photos</a></li>
                <li><a href="#"><i class="fas fa-play-circle"></i> 21 Videos</a></li>
              </ul>
              <p> Sque nunc odio isque sodales elementu elementu risusvi mus. Est duis iam eratphas vehicula bulum. </p>
            </div>
          </div>
        </div>
        <!--Box End--> 
        <!--Box Start-->
        <div class="item">
          <div class="hc-box"> <img src="{{URL::asset('assets/images/cityvideobg.jpg')}}images/hc2.jpg" alt="">
            <div class="hc-box-cap">
              <h5><a href="#">Hoteling & Hostels</a></h5>
              <ul>
                <li><a href="#"><i class="far fa-image"></i> 48 Photos</a></li>
                <li><a href="#"><i class="fas fa-play-circle"></i> 21 Videos</a></li>
              </ul>
              <p> Fusce leocras anunc iam uris sed. Ent tsed nas fringi duis facili augueph eleifend. </p>
            </div>
          </div>
        </div>
        <!--Box End--> 
        <!--Box Start-->
        <div class="item">
          <div class="hc-box"> <img src="{{URL::asset('assets/images/cityvideobg.jpg')}}images/hc3.jpg" alt="">
            <div class="hc-box-cap">
              <h5><a href="#">Night Life Entertainments</a></h5>
              <ul>
                <li><a href="#"><i class="far fa-image"></i> 48 Photos</a></li>
                <li><a href="#"><i class="fas fa-play-circle"></i> 21 Videos</a></li>
              </ul>
              <p> If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
            </div>
          </div>
        </div>
        <!--Box End--> 
        <!--Box Start-->
        <div class="item">
          <div class="hc-box"> <img src="{{URL::asset('assets/images/cityvideobg.jpg')}}images/hc1.jpg" alt="">
            <div class="hc-box-cap">
              <h5><a href="#">Food & Restaurants</a></h5>
              <ul>
                <li><a href="#"><i class="far fa-image"></i> 48 Photos</a></li>
                <li><a href="#"><i class="fas fa-play-circle"></i> 21 Videos</a></li>
              </ul>
              <p> Pretium tfusce oin eget acum iain nequesed est nunccras quamal. Lectus sapien leosed ultricie nunc ipsumves estmorbi sce.  </p>
            </div>
          </div>
        </div>
        <!--Box End--> 
        <!--Box Start-->
        <div class="item">
          <div class="hc-box"> <img src="{{URL::asset('assets/images/cityvideobg.jpg')}}images/hc2.jpg" alt="">
            <div class="hc-box-cap">
              <h5><a href="#">Hoteling & Hostels</a></h5>
              <ul>
                <li><a href="#"><i class="far fa-image"></i> 48 Photos</a></li>
                <li><a href="#"><i class="fas fa-play-circle"></i> 21 Videos</a></li>
              </ul>
              <p> If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
            </div>
          </div>
        </div>
        <!--Box End--> 
        <!--Box Start-->
        <div class="item">
          <div class="hc-box"> <img src="{{URL::asset('assets/images/cityvideobg.jpg')}}images/hc3.jpg" alt="">
            <div class="hc-box-cap">
              <h5><a href="#">Night Life Entertainments</a></h5>
              <ul>
                <li><a href="#"><i class="far fa-image"></i> 48 Photos</a></li>
                <li><a href="#"><i class="fas fa-play-circle"></i> 21 Videos</a></li>
              </ul>
              <p> Pretium tfusce oin eget acum iain nequesed est nunccras quamal. Lectus sapien leosed ultricie nunc ipsumves estmorbi sce.  </p>
            </div>
          </div>
        </div>
        <!--Box End--> 
      </div>
    </section>
    <!--Highlights & Cityscapes End--> 
    <!--Citizens & Community Corner Start-->
    <section id="u"  class="wf100 p80 community-links">
      <div class="container">
        <div class="section-title text-center">
          <h2>Citizens & Community Corner</h2>
          <p>For the beginning of a new paragraph marks a change of topic or a step in the development of an<br>
            argument or of a story. In writing essays or other compositions too include. </p>
        </div>
        <div class="row"> 
          <!--Department Box Start-->
          <div class="col-md-3 col-sm-6">
            <div class="community-box mb30">
              <h6>Agriculture &amp; Food</h6>
              <ul>
                <li><a href="#"><i class="fas fa-circle"></i> Farming Sector</a></li>
                <li><a href="#"><i class="fas fa-circle"></i> Agri Industry Development</a></li>
                <li><a href="#"><i class="fas fa-circle"></i> Forestry</a></li>
                <li><a href="#"><i class="fas fa-circle"></i> Rural Environment</a></li>
                <li><a href="#"><i class="fas fa-circle"></i> Food Safety</a></li>
              </ul>
              <a class="see-more" href="#">See More</a> <span><img src="{{URL::asset('assets/images/cityvideobg.jpg')}}images/ccc-icon1.png" alt=""></span> </div>
          </div>
          <!--Department Box End--> 
          <!--Department Box Start-->
          <div class="col-md-3 col-sm-6">
            <div class="community-box mb30">
              <h6>Employment Affairs</h6>
              <ul>
                <li><a href="#"><i class="fas fa-circle"></i> Find Your Job</a></li>
                <li><a href="#"><i class="fas fa-circle"></i> Employers &amp; Employment</a></li>
                <li><a href="#"><i class="fas fa-circle"></i> Public Service Identity</a></li>
                <li><a href="#"><i class="fas fa-circle"></i> Retirements &amp; Older People</a></li>
                <li><a href="#"><i class="fas fa-circle"></i> Work Licence Permit</a></li>
              </ul>
              <a class="see-more" href="#">See More</a> <span><img src="{{URL::asset('assets/images/cityvideobg.jpg')}}images/ccc-icon2.png" alt=""></span> </div>
          </div>
          <!--Department Box End--> 
          <!--Department Box Start-->
          <div class="col-md-3 col-sm-6">
            <div class="community-box mb30">
              <h6>Housing &amp; Planning</h6>
              <ul>
                <li><a href="#"><i class="fas fa-circle"></i> Residents &amp; Commercial Areas</a></li>
                <li><a href="#"><i class="fas fa-circle"></i> Building Standards</a></li>
                <li><a href="#"><i class="fas fa-circle"></i> National Planning Framework</a></li>
                <li><a href="#"><i class="fas fa-circle"></i> Water Filteration Authority</a></li>
                <li><a href="#"><i class="fas fa-circle"></i> State Parks &amp; Developments</a></li>
              </ul>
              <a class="see-more" href="#">See More</a> <span><img src="{{URL::asset('assets/images/cityvideobg.jpg')}}images/ccc-icon3.png" alt=""></span> </div>
          </div>
          <!--Department Box End--> 
          <!--Department Box Start-->
          <div class="col-md-3 col-sm-6">
            <div class="community-box mb30">
              <h6>Education and Skills </h6>
              <ul>
                <li><a href="#"><i class="fas fa-circle"></i> The Education System</a></li>
                <li><a href="#"><i class="fas fa-circle"></i> Publications & Media Library</a></li>
                <li><a href="#"><i class="fas fa-circle"></i> School, Colleges, Universities</a></li>
                <li><a href="#"><i class="fas fa-circle"></i> Boards of Management</a></li>
                <li><a href="#"><i class="fas fa-circle"></i> Educational Events</a></li>
              </ul>
              <a class="see-more" href="#">See More</a> <span><img src="{{URL::asset('assets/images/cityvideobg.jpg')}}images/ccc-icon4.png" alt=""></span> </div>
          </div>
          <!--Department Box End--> 
          <!--Department Box Start-->
          <div class="col-md-3 col-sm-6">
            <div class="community-box">
              <h6>Health &amp; Securities</h6>
              <ul>
                <li><a href="#"><i class="fas fa-circle"></i> Hospitals &amp; Emergencies</a></li>
                <li><a href="#"><i class="fas fa-circle"></i> Healty State Life</a></li>
                <li><a href="#"><i class="fas fa-circle"></i> Public Safety</a></li>
                <li><a href="#"><i class="fas fa-circle"></i> Police Department</a></li>
                <li><a href="#"><i class="fas fa-circle"></i> Fire Brigade &amp; Rescue Officials</a></li>
              </ul>
              <a class="see-more" href="#">See More</a> <span><img src="{{URL::asset('assets/images/cityvideobg.jpg')}}images/ccc-icon5.png" alt=""></span> </div>
          </div>
          <!--Department Box End--> 
          <!--Department Box Start-->
          <div class="col-md-3 col-sm-6">
            <div class="community-box">
              <h6>Laws &amp; Justice</h6>
              <ul>
                <li><a href="#"><i class="fas fa-circle"></i> Constitution &amp; Bylaws</a></li>
                <li><a href="#"><i class="fas fa-circle"></i> Legal Services</a></li>
                <li><a href="#"><i class="fas fa-circle"></i> Courts Policy</a></li>
                <li><a href="#"><i class="fas fa-circle"></i> Children &amp; Family Cases</a></li>
                <li><a href="#"><i class="fas fa-circle"></i> Equality &amp; Integration</a></li>
              </ul>
              <a class="see-more" href="#">See More</a> <span><img src="{{URL::asset('assets/images/cityvideobg.jpg')}}images/ccc-icon6.png" alt=""></span> </div>
          </div>
          <!--Department Box End--> 
          <!--Department Box Start-->
          <div class="col-md-3 col-sm-6">
            <div class="community-box">
              <h6>Roads &amp; Transport</h6>
              <ul>
                <li><a href="#"><i class="fas fa-circle"></i> Civil Aviation</a></li>
                <li><a href="#"><i class="fas fa-circle"></i> Maritime Services</a></li>
                <li><a href="#"><i class="fas fa-circle"></i> Sustainable Transport</a></li>
                <li><a href="#"><i class="fas fa-circle"></i> Roads &amp; Directions</a></li>
                <li><a href="#"><i class="fas fa-circle"></i> Corporate Information</a></li>
              </ul>
              <a class="see-more" href="#">See More</a> <span><img src="{{URL::asset('assets/images/cityvideobg.jpg')}}images/ccc-icon7.png" alt=""></span> </div>
          </div>
          <!--Department Box End--> 
          <!--Department Box Start-->
          <div class="col-md-3 col-sm-6">
            <div class="community-box">
              <h6>Environment</h6>
              <ul>
                <li><a href="#"><i class="fas fa-circle"></i> National Mitigation Plan</a></li>
                <li><a href="#"><i class="fas fa-circle"></i> Solar System & Windmills</a></li>
                <li><a href="#"><i class="fas fa-circle"></i> Natural Resources</a></li>
                <li><a href="#"><i class="fas fa-circle"></i> Strategic Energy Policy</a></li>
                <li><a href="#"><i class="fas fa-circle"></i> Geological Survey Report</a></li>
              </ul>
              <a class="see-more" href="#">See More</a> <span><img src="{{URL::asset('assets/images/cityvideobg.jpg')}}images/ccc-icon8.png" alt=""></span> </div>
          </div>
          <!--Department Box End--> 
        </div>
      </div>
    </section>
    <!--Citizens & Community Corner End--> 
    <!--Read Some Facts Start-->
 
    <!--Read Some Facts End--> 
    <!--City Official Members Start-->
    <div id="stfcntnr">
      <h4 id="stfhead" align="Center">Staff Of  Ceylon Electricity Board Technicians Union</h4>
    </div>
    <section id="stfms" class="wf100 official-members row ">
      <div class="col-sm-4 col-md-4 ">
        <div class="row ">
          <!--Team Box Start-->
          <div class="col-sm-12 col-md-6">
            <div class="team-box">
              <div class="team-thumb"> <a href="#"><i class="fas fa-link"></i></a> <img src="{{URL::asset('assets/images/cityvideobg.jpg')}}images/cha.jpg" alt=""></div>
              <div id="txtteam" class="team-txt">
                <h5 class="ph1">Kosala Abeysinghe</h5>
                <strong class="dep">President</strong>
                <p class="memp">
                  Telephone:+94716876975 <br>
                  Email:kosalaabeysinghe777@hmail.com
                 </p>
                <ul class="team-social">
                  <li><em>Connect:</em></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                  <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <!--Team Box End--> 
          <!--Team Box Start-->
          <div class="col-sm-12 col-md-6">
            <div class="team-box">
               <div class="team-thumb"> <a href="#"><i class="fas fa-link"></i></a> <img src="{{URL::asset('assets/images/cityvideobg.jpg')}}images/p.d.chamith jeewantha.jpg" alt=""></div>
              <div class="team-txt">
                <h5 class="ph1">P.D Chamith Jeewantha</h5>
                <strong class="dep">Co-Secretary</strong>
                <p> Harry Wilson is Minister of Health Department, look after all matters related health in the city. </p>
                <ul class="team-social">
                  <li><em>Connect:</em></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                  <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-md-4">
          <div class="row">
            <!--Team Box Start-->
            <div class="col-sm-12 col-md-6">
                <div class="team-box">
                    <div class="team-thumb"> <a href="#"><i class="fas fa-link"></i></a> <img src="{{URL::asset('assets/images/cityvideobg.jpg')}}images/srs.JPG" alt=""></div>
                    <div class="team-txt">
                       <h5 class="ph1">S.R  Samanthapala</h5>
                       <strong class="dep">Co-Secretary</strong>
                      <p> James Scott is very strong person who coordinate in all the events and marketing strategies. </p>
                      <ul class="team-social">
                        <li><em>Connect:</em></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                      </ul>
                    </div>
                  </div>
            </div>
            <!--Team Box End--> 
            <!--Team Box Start-->
            <div class="col-sm-12 col-md-6">
              <div class="team-box">
                 <div class="team-thumb"> <a href="#"><i class="fas fa-link"></i></a> <img src="{{URL::asset('assets/images/cityvideobg.jpg')}}images/p.d.chamith jeewantha.jpg" alt=""></div>
                <div class="team-txt">
                  <h5 class="ph1">P.D Chamith Jeewantha</h5>
                  <strong class="dep">Co-Secretary</strong>
                  <p> Harry Wilson is Minister of Health Department, look after all matters related health in the city. </p>
                  <ul class="team-social">
                    <li><em>Connect:</em></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4 col-md-4">
            <div class="row">
             
              <!--Team Box Start-->
              <div class="col-sm-12 col-md-6">
                <div class="team-box">
                  <div class="team-thumb"> <a href="#"><i class="fas fa-link"></i></a> <img src="images/cha.jpg" alt=""></div>
                  <div class="team-txt">
                    <h5 class="ph1">Kosala Abeysinghe</h5>
                    <strong class="dep">President</strong>
                    <p> Stephen Paul is very Compitent and very agile person who assist to Mayor of the City. </p>
                    <ul class="team-social">
                      <li><em>Connect:</em></li>
                      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                      <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <!--Team Box End--> 
              <!--Team Box Start-->
              <div class="col-sm-12 col-md-6">
                <div>
                  <p style="padding-top: 140px;">
                    <h4>For more Staff</h4></p>
                  <a href="/staff" class="btn btn-primary" >Go</a>
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


<!--Wrapper End-->
<div class="overlay"></div>
<section id="c">
  <img src="images/3.jpg" alt="">
   
  </section>
  <!--Call 2 Action End--> 
@endsection