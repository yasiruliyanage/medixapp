@extends('frontend.layouts.front')
@section('title')
Contact Us
@endsection
@section('content')
<!--Sub Header Start-->
         <section>
               <div class="subh">
                        <img src="{{URL::asset('assets/images/subheaderbg.jpg')}}" >
                        <div class="top-left">
                           <h2>Contact Us</h2>
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
                     <div class="col-md-4 col-sm-4">
                        <div class="add-box-2">
                           <i class="fas fa-map-marker-alt"></i>
                           <h5>Our Location</h5>
                           <p>Ceylon Electricity Board Technicians Union,<br>
                            Ceylon Electricity Board,<br>
                            Head Quarters,<br>
                             No.540,<br>
                             Sir Chittampalam Gardiner Mawatha,<br>
                              Colombo 02.<br>
                           </p>
                        </div>
                     </div>
                     <!-- Address Box End --> 
                     <!-- Address Box Start -->
                     <div class="col-md-4 col-sm-4">
                        <div class="add-box-2 br">
                           <i class="fas fa-phone"></i>
                           <h5>Call us</h5>
                           <p>Chairman: 071 6876975 </p>
                           <p>Mobile: 071 0355414 </p>
                          <p>Fax   :    076 7860970</p>
                        </div>
                     </div>
                     <!-- Address Box End --> 
                     <!-- Address Box Start -->
                     <div class="col-md-4 col-sm-4">
                        <div class="add-box-2">
                           <i class="far fa-envelope"></i>
                           <h5>Mail  us</h5>
                           <p><a href="#">info@cebtu.lk</a></p>

                        </div>
                     </div>
                     <!-- Address Box End --> 
                  </div>
               </div>
            </div>
            <!--Contact Us Start--> 
            <!-- Google Map with Contact Form -->
            <div class="map-form p80">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12 contact-form m80">
                        <h3 class="stitle text-center">Get in Touch</h3>
						   @if($message = Session::get('success'))
                          <div class="alert alert sucess">
                            {{$message}}

                        </div>
                      


                        @endif
						
					<!--div class="card-header card-header-text" data-background-color="rose">
						<h4 class="card-title"></h4>
					</div-->
                     @if(count($errors) > 0 )
                                        @foreach($errors->all() as $error)
                                            <p class="alert alert-danger">{{$error}}</p>
                                        @endforeach
                    @endif
                        <form  method="post" action="{{ route('contactfront.send') }}"  enctype="multipart/form-data">
							 {{csrf_field()}}
                           <ul>
                              <li class="col-md-6">
                                 <input type="text" placeholder="Full Name" name="name" required>
                              </li>
                              <li class="col-md-6">
                                 <input type="text" placeholder="Enter Email" name="email"  required>
                              </li>
                              <li class="col-md-6">
                                 <input type="text" placeholder="Phone" name="phone">
                              </li>
                              <li class="col-md-6">
                                 <input type="text" placeholder="Subject" name="subject" >
                              </li>
                              <li class="col-md-12">
                                 <textarea placeholder="Write Message" name="message"></textarea>
                              </li>
                              <li class="col-md-12">
                                 <input type="submit" value="Send Message">
                              </li>
                           </ul>
                        </form>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.6671925758988!2d79.84489321470527!3d6.930323894992726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae259235234e38b%3A0x9da0057cdeb9d765!2sCeylon+Electricity+Board+-+Head+Office!5e0!3m2!1sen!2slk!4v1564212161814!5m2!1sen!2slk" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Google Map with Contact Form End --> 
         </div>
         <!--Main Content End--> 
         <!--Footer Start-->
       
         <!--Footer Start--> 
         <!--Footer Start-->
         @endsection    