@extends('frontend.layouts.main')
@section('title')
Home - Medix
@endsection
@section('content')
    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-xl-5">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5>We are here for your care</h5>
                            <h1>Best Care &
                                Better</h1>
							<h3>Ministry of Health, Nutrition and Indigenous Medicine</h3>
                            <p  style="text-align:justify">The Ministry of Health, Nutrition and Indigenous Medicine is the central government ministry of Sri Lanka responsible for health. The ministry is responsible for formulating and implementing national policy on health, nutrition, indigenous medicine and other subjects which come under its purview. </p>
<p  style="text-align:justify">Provincial councils are constitutionally responsible for operating the majority of the Sri Lanka's public hospitals but some, known as line ministry hospitals, come under the direct control of the central government in Colombo. As of 2016 there were 47 line ministry hospitals (including all of the country's teaching hospitals), accounting for 47% (36,000) of all public hospital beds in the country.</p>
<p  style="text-align:justify">The current Minister of Health, Nutrition Indigenous Medicine is Honorable minister Pavithra Vanniarachchi. </p>
 </p>
                            <a href="#" class="btn_2">COVID 19 Test</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="banner_img">
                        <img src="{{URL::asset('medix/img/banner_img1.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- about us part start-->
    <section class="about_us padding_top">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6 col-lg-6">
                    <div class="about_us_img">
                        <img src="{{URL::asset('medix/img/ability_img1.png')}}" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="about_us_text">
                        <h2>About us</h2>
                        <p style="text-align:justify">Coronavirus disease 2019 (COVID-19) is an infectious disease caused by severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2). The disease was first identified in December 2019 in Wuhan, the capital of China's Hubei province, and has since spread globally, resulting in the ongoing 2019–20 coronavirus pandemic. Common symptoms include fever, cough and shortness of breath. Other symptoms may include fatigue, muscle pain, diarrhea, sore throat, loss of smell and abdominal pain. While the majority of cases result in mild symptoms, some progress to viral pneumonia and multi-organ failure. As of 8 April 2020, more than 1.43 million cases have been reported in more than 200 countries and territories, resulting in more than 82,100 deaths. More than 301,000 people have recovered. </p>
                        <a class="btn_2 " href="/About">learn more</a>
                        <div class="banner_item">
                            <div class="single_item">
                                <img src="{{URL::asset('medix/img/icon/banner_1.svg')}}" alt="">
                                <h5>Emergency</h5>
                            </div>
                            <div class="single_item">
                                <img src="{{URL::asset('medix/img/icon/banner_2.svg')}}" alt="">
                                <h5>Appointment</h5>
                            </div>
                            <div class="single_item">
                                <img src="{{URL::asset('medix/img/icon/banner_3.svg')}}" alt="">
                                <h5>Qualfied</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about us part end-->

    <!-- feature_part start-->
    <section class="feature_part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <h2>Our services</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-3 col-sm-12">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="{{URL::asset('medix/img/icon/Self_covid_19_test.svg')}}" alt=""></span>
                            <h4>Self covid 19 test</h4>
                            <p>Darkness multiply rule Which from without life creature blessed
                                give moveth moveth seas make day which divided our have.</p>
                        </div>
                    </div>
					<div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="{{URL::asset('medix/img/icon/Covid_19_treatment.svg')}}" alt=""></span>
                            <h4>Covid 19 treatment </h4>
                            <p>Darkness multiply rule Which from without life creature blessed
                                give moveth moveth seas make day which divided our have.</p>
                        </div>
                    </div>
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="{{URL::asset('medix/img/icon/OPD_covid_19_test.svg')}}" alt=""></span>
                            <h4>OPD covid 19 test</h4>
                            <p>Darkness multiply rule Which from without life creature blessed
                                give moveth moveth seas make day which divided our have.</p>
                        </div>
                    </div>
					<div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="{{URL::asset('medix/img/icon/Normal_admit.svg')}}" alt=""></span>
                            <h4>Normal admit  </h4>
                            <p>Darkness multiply rule Which from without life creature blessed
                                give moveth moveth seas make day which divided our have.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="single_feature_img">
                        <img src="{{URL::asset('medix/img/service1.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="{{URL::asset('medix/img/icon/Mobile_covid_19_test.svg')}}" alt=""></span>
                            <h4>Mobile covid 19 test</h4>
                            <p>Darkness multiply rule Which from without life creature blessed
                                give moveth moveth seas make day which divided our have.</p>
                        </div>
                    </div>
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="{{URL::asset('medix/img/icon/Hospital_covid_19_test.svg')}}" alt=""></span>
                            <h4>Hospital covid 19 test</h4>
                            <p>Darkness multiply rule Which from without life creature blessed
                                give moveth moveth seas make day which divided our have.</p>
                        </div>
                    </div>
					  <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img  src="{{URL::asset('medix/img/icon/Quarantine.svg')}}" alt=""></span><!--style="width:40px; height:25px;"-->
                           <h4>Quarantine</h4>
                            <p>Darkness multiply rule Which from without life creature blessed
                                give moveth moveth seas make day which divided our have.</p>
                        </div>
                    </div>
					 <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="{{URL::asset('medix/img/icon/Self_Quarantine.svg')}}" alt=""></span>
                            <h4>Self-quarantine</h4>
                            <p>Darkness multiply rule Which from without life creature blessed
                                give moveth moveth seas make day which divided our have.</p>
                        </div>
                    </div>
					 
					
					
                </div>
            </div>
        </div>
    </section>
    <!-- feature_part start-->

    <!-- our depertment part start-->
    <section class="our_depertment section_padding">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xl-12">
                    <div class="depertment_content">
                        <div class="row justify-content-center">
                            <div class="col-xl-8">
                                <h2>Our Doctors</h2>
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                             <div class="single_blog_img">
                            <img src="medix/img/doctor/Dr.AnilJasinghe.png" alt="doctor">
                          
											</div>
											<p>&nbsp;</p>
                                            <h4>Dr Anil Jasinghe</h4>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <div class="single_blog_img">
                            <img src="medix/img/doctor/Dr.AnuruddhaPadeniya.png" alt="doctor">
                          
											</div>
											<p>&nbsp;</p>
                                            <h4>Dr Anurdhdha Padeniya</h4>
                                           
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                             <div class="single_blog_img">
                            <img src="medix/img/doctor/Dr.ArjunadeSilva.png" alt="doctor">
                          
											</div>
											<p>&nbsp;</p>
                                            <h4>Dr . Arjuna De Silva</h4>
                                           
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <div class="single_blog_img">
                            <img src="medix/img/doctor/Dr.JayaruwanBandara.png" alt="doctor">
                          
											</div>
											<p>&nbsp;</p>
                                            <h4>Dr Jayaruwan Bandara</h4>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our depertment part end-->

    <!--::doctor_part start::-->
    <section class="doctor_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <h2> Our Guidance  </h2>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-lg-3">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="medix/img/doctor/img02.png" alt="doctor">
                            <div class="social_icon">
                                <ul>
                                    <li><a href="#"> <i class="ti-facebook"></i> </a></li>
                                    <li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
                                    <li><a href="#"> <i class="ti-instagram"></i> </a></li>
                                    <li><a href="#"> <i class="ti-skype"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single_text">
                            <div class="single_blog_text">
                                <h3>Gotabaya rajapaksha </h3>
                                <p>President</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-3">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="medix/img/doctor/img04.png" alt="doctor">
                            <div class="social_icon">
                                <ul>
                                    <li><a href="#"> <i class="ti-facebook"></i> </a></li>
                                    <li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
                                    <li><a href="#"> <i class="ti-instagram"></i> </a></li>
                                    <li><a href="#"> <i class="ti-skype"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single_text">
                            <div class="single_blog_text">
                                <h3>Mahinda rajapaksha</h3>
                                <p>Prime Minister</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-3">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="medix/img/doctor/img03.png" alt="doctor">
                            <div class="social_icon">
                                <ul>
                                    <li><a href="#"> <i class="ti-facebook"></i> </a></li>
                                    <li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
                                    <li><a href="#"> <i class="ti-instagram"></i> </a></li>
                                    <li><a href="#"> <i class="ti-skype"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single_text">
                            <div class="single_blog_text">
                                <h3>Pawithra wanniarachchi </h3>
                                <p>Minister</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-3">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="medix/img/doctor/img01.png" alt="doctor">
                            <div class="social_icon">
                                <ul>
                                    <li><a href="#"> <i class="ti-facebook"></i> </a></li>
                                    <li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
                                    <li><a href="#"> <i class="ti-instagram"></i> </a></li>
                                    <li><a href="#"> <i class="ti-skype"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single_text">
                            <div class="single_blog_text">
                                <h3>Shavendra silva </h3>
                                <p>chief of covid 19 STF</p>
                            </div>
                        </div>
                    </div>
                </div>
				
            </div>
        </div>
    </section>
    <!--::doctor_part end::-->

   

   
    @endsection