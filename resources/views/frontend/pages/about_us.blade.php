@extends('frontend.layouts.main')
@section('title')
About Us - Medix
@endsection
@section('content')


<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<style>
   .text-overflow {
      
      height:350px;
      display:block; 
      overflow:hidden;
      word-break: break-word;
      word-wrap: break-word;
  }

  .btn-overflow {
    display: none;
    text-decoration: none; 
  }
</style>
<!-- breadcrumb start-->
<section class="breadcrumb_part breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item">
                        <h2>About us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->

<!-- about us part start-->
<section class="about_us single_about_padding">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-6 col-lg-6">
                <div class="about_us_img">
                    <img src="medix/img/top_service1.png" alt="">
                </div>
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="about_us_text">
                    <h2>About us</h2>
                    <p class="text-overflow" style="text-align:justify;">Coronavirus disease 2019 (COVID-19) is an 
                    infectious disease caused by severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2). 
                    The disease was first identified in December 2019 in Wuhan, the capital of China's Hubei 
                    province, and has since spread globally, resulting in the ongoing 2019–20 coronavirus pandemic. 
                    Common symptoms include fever, cough and shortness of breath. Other symptoms may include fatigue, 
                    muscle pain, diarrhea, sore throat, loss of smell and abdominal pain. While the majority of 
                    cases result in mild symptoms, some progress to viral pneumonia and multi-organ failure. 
                    As of 8 April 2020, more than 1.43 million cases have been reported in more than 200 countries 
                    and territories, resulting in more than 82,100 deaths. More than 301,000 people have recovered.
                    <br>
                    The virus is mainly spread during close contact and by small 
                    droplets produced when those infected cough, sneeze or talk. These droplets may also be produced 
                    during breathing; however, they rapidly fall to the ground or surfaces and are not generally 
                    spread through the air over large distances. People may also become infected by touching a 
                    contaminated surface and then their face. The virus can survive on surfaces for up to 72 hours. 
                    It is most contagious during the first three days after onset of symptoms, although spread may 
                    be possible before symptoms appear and in later stages of the disease. The time from exposure 
                    to onset of symptoms is typically around five days, but may range from two to 14 days. The 
                    standard method of diagnosis is by real-time reverse transcription polymerase chain reaction 
                    (rRT-PCR) from a nasopharyngeal swab. The infection can also be diagnosed from a combination 
                    of symptoms, risk factors and a chest CT scan showing features of pneumonia.<br>
                    Recommended measures to prevent infection include frequent 
                    hand washing, social distancing (maintaining physical distance from others, especially from 
                    those with symptoms), covering coughs and sneezes with a tissue or inner elbow and keeping 
                    unwashed hands away from the face. The use of masks is recommended for those who suspect 
                    they have the virus and their caregivers. Recommendations for mask use by the general public 
                    vary, with some authorities recommending against their use, some recommending their use and 
                    others requiring their use. Currently, there is no vaccine or specific antiviral treatment 
                    for COVID-19. Management involves treatment of symptoms, supportive care, isolation and 
                    experimental measures. <br>
                    The World Health Organization (WHO) declared the 2019–20 
                    coronavirus outbreak a Public Health Emergency of International Concern (PHEIC) on 30 
                    January 2020 and a pandemic on 11 March 2020. Local transmission of the disease has 
                    been recorded in many countries across all six WHO regions. </p>
                    <a class="btn_2 btn-overflow" href="#">Show more...</a>
                    <div class="banner_item">
                        <div class="single_item">
                            <img src="medix/img/icon/banner_1.svg" alt="">
                            <h5>Emergency</h5>
                        </div>
                        <div class="single_item">
                            <img src="medix/img/icon/banner_2.svg" alt="">
                            <h5>Appointment</h5>
                        </div>
                        <div class="single_item">
                            <img src="medix/img/icon/banner_3.svg" alt="">
                            <h5>Qualfied</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about us part end-->
<!-- our depertment part start-->
<section class="our_depertment section_padding">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-xl-12">
                <div class="depertment_content">
                    <div class="row justify-content-center">
                        <div class="col-xl-8">
                            <h2>Our Depertment</h2>
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="single_our_depertment">
                                        <span class="our_depertment_icon"><img src="medix/img/icon/feature_2.svg"
                                                alt=""></span>
                                        <h4>Better Future</h4>
                                        <p>Darkness multiply rule Which from without life creature blessed
                                            give moveth moveth seas make day which divided our have.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="single_our_depertment">
                                        <span class="our_depertment_icon"><img src="medix/img/icon/feature_2.svg"
                                                alt=""></span>
                                        <h4>Better Future</h4>
                                        <p>Darkness multiply rule Which from without life creature blessed
                                            give moveth moveth seas make day which divided our have.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="single_our_depertment">
                                        <span class="our_depertment_icon"><img src="medix/img/icon/feature_2.svg"
                                                alt=""></span>
                                        <h4>Better Future</h4>
                                        <p>Darkness multiply rule Which from without life creature blessed
                                            give moveth moveth seas make day which divided our have.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="single_our_depertment">
                                        <span class="our_depertment_icon"><img src="medix/img/icon/feature_2.svg"
                                                alt=""></span>
                                        <h4>Better Future</h4>
                                        <p>Darkness multiply rule Which from without life creature blessed
                                            give moveth moveth seas make day which divided our have.</p>
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
<script>
var text = $('.text-overflow'),
     btn = $('.btn-overflow'),
       h = text[0].scrollHeight; 

if(h > 120) {
	btn.addClass('less');
	btn.css('display', 'block');
}

btn.click(function(e) 
{
  e.stopPropagation();

  if (btn.hasClass('less')) {
      btn.removeClass('less');
      btn.addClass('more');
      btn.text('Show less');

      text.animate({'height': h});
  } else {
      btn.addClass('less');
      btn.removeClass('more');
      btn.text('Show more');
      text.animate({'height': '350px'});
  }  
});
</script>
@endsection