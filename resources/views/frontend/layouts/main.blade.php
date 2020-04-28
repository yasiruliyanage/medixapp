<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!--link rel="icon" href="img/favicon.png"-->
    <link href="{{URL::asset('medix/img/favicon.png')}}" rel="shortcut icon" type="image/png">
    <!-- Bootstrap CSS -->
    <!--link rel="stylesheet" href="css/bootstrap.min.css"-->
    <link href="{{URL::asset('medix/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <!-- animate CSS -->
    <!--link rel="stylesheet" href="css/animate.css"-->
    <link href="{{URL::asset('medix/css/css/animate.css')}}" rel="stylesheet" type="text/css">
	<link href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css" rel="stylesheet" type="text/css">
	
    <!-- owl carousel CSS -->
    <!--link rel="stylesheet" href="css/owl.carousel.min.css"-->
    <link href="{{URL::asset('medix/css/owl.carousel.min.css')}}" rel="stylesheet" type="text/css">
    <!-- themify CSS -->
    <!--link rel="stylesheet" href="css/themify-icons.css"-->
    <link href="{{URL::asset('medix/css/themify-icons.css')}}" rel="stylesheet" type="text/css">
    <!-- flaticon CSS -->
    <!--link rel="stylesheet" href="css/flaticon.css"-->
    <link href="{{URL::asset('medix/css/flaticon.css')}}" rel="stylesheet" type="text/css">
    <!-- magnific popup CSS -->
    <!--link rel="stylesheet" href="css/magnific-popup.css"-->
    <link href="{{URL::asset('medix/css/magnific-popup.css')}}" rel="stylesheet" type="text/css">
    <!-- nice select CSS -->
    <!--link rel="stylesheet" href="css/nice-select.css"-->
    <link href="{{URL::asset('medix/css/nice-select.css')}}" rel="stylesheet" type="text/css">
    <!-- swiper CSS -->
    <!--link rel="stylesheet" href="css/slick.css"-->
    <link href="{{URL::asset('medix/css/slick.css')}}" rel="stylesheet" type="text/css">
    <!-- style CSS -->
    <!--link rel="stylesheet" href="css/style.css"-->
    <link href="{{URL::asset('medix/css/style.css')}}" rel="stylesheet" type="text/css">
     <!--link rel="stylesheet" href="css/custom.css"-->
     <link href="{{URL::asset('medix/css/custom.css')}}" rel="stylesheet" type="text/css">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> <img src="{{URL::asset('medix/img/medix_logo.png')}}" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-center"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item active">
                                    <a class="nav-link" href="/Home">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/About">About</a>
                                </li>
                              

                               

                                <li class="nav-item">
                                    <a class="nav-link" href="/Contact">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="loginBtn-wrap text-center">
                        <a class="btn_2" href="/login">TESTER LOGIN</a>
                        <a class="btn_2 ml-2" href="/admin/login">STAFF LOGIN</a>
                        <a class="btn_2 test-covid ml-2" href="/selftest">COVID-19 SELF TEST</a>
                        </div>
                        
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->
    <!-- Start main-content -->
    @yield('content')
    <!-- end main-content -->
    <!-- footer part start-->
    <footer class="footer-area">
        <div class="footer section_padding">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-2 col-md-4 col-sm-6 single-footer-widget">
                        <a href="#" class="footer_logo"> <img src="img/medix_logo.png" alt="/Home"> </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
                        <div class="social_logo">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"> <i class="ti-twitter"></i> </a>
                            <a href="#"><i class="ti-instagram"></i></a>
                            <a href="#"><i class="ti-skype"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-2 col-sm-6 col-md-4 single-footer-widget">
                        <h4>Quick Links</h4>
                        <ul>
							<li><a href="/Home">Home</a></li>
                            <li><a href="/About">About us</a></li>                            
                            <li><a href="/Contact">Contact</a></li>
                            <!--li><a href="#">Careers</a></li>
                            <li><a href="#">Department</a></li-->
                        </ul>
                    </div>
                    <div class="col-xl-2 col-sm-6 col-md-4 single-footer-widget">
                        <h4>Explore</h4>
                        <ul>
                            <li><a target="empty" href="http://www.epid.gov.lk/">Epidemiology Unit</a></li>
                            <li><a target="empty" href="http://www.health.gov.lk/">Ministry of Health</a></li>
                            <li><a target="empty" href="https://www.natureindex.com/">National Institute of Infectious Diseases </a></li>
                            <li><a target="empty" href="http://www.nhsl.health.gov.lk/">Tha National Hospital of Sri Lanka</a></li>
                            <li><a target="empty" href="https://www.gmoa.lk/">GMOA Sri Lanka</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-2 col-sm-6 col-md-6 single-footer-widget">
                        <h4>Resources</h4>
                        <ul>
                            <li><a href="#">Lights were season</a></li>
                            <li><a href="#"> Their is let wherein</a></li>
                            <li><a href="#">which given over</a></li>
                            <li><a href="#">Without given She</a></li>
                            <li><a href="#">Isn two signs think</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-md-6 single-footer-widget">
                        <h4>Newsletter</h4>
                        <p>Seed good winged wherein which night multiply
                            midst does not fruitful</p>
                        <div class="form-wrap" id="mc_embed_signup">
                            <form target="_blank"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="form-inline">
                                <input class="form-control" name="EMAIL" placeholder="Your Email Address"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '"
                                    required="" type="email">
                                <button class="click-btn btn btn-default text-uppercase"> <i class="ti-angle-right"></i>
                                </button>
                                <div style="position: absolute; left: -5000px;">
                                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
                                        type="text">
                                </div>

                                <div class="info"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

		 <div class="row">
            <div class="col-12 text-right mb-3">
                <a class="btn_2 go-top mr-4 text-white" style="cursor: pointer; padding: 16px 25px;"><i class="ti-angle-up"></i></a>
            </div>
        </div>
		
        <div class="copyright_part">
            <div class="container">
                <div class="row align-items-center">
                    <p class="footer-text m-0 col-lg-8 col-md-12">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                        </script> All rights reserved Medix.lk | Developed By <i class="ti-heart"
                            aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">CIS WORLD</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                    <div class="col-lg-4 col-md-12 text-center text-lg-right footer-social">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"> <i class="ti-twitter"></i> </a>
                        <a href="#"><i class="ti-instagram"></i></a>
                        <a href="#"><i class="ti-skype"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- footer part end-->

    
		
	<script>
 $(document).ready(function () {
                
    function progress(){
              var marks = [];

            $.each($("input[name='ids[]']:checked"), function(){            
                marks.push($(this).val());
            });
 
         var total =  0;
            for(var i=0;i<marks.length;i++)
              {                  
                if(isNaN(marks[i])){
                continue;
                 }
                  total += Number(marks[i]);
               }
        //return total;


            

          console.log('sum',total);
		
           var checked  = $('input:checkbox:checked:not("#select_all")').length;
           var count  = $('input:checkbox').length;
           if( $('#select_all:checkbox:checked').length > 0 ){
              checked = count;
           }
             
           if(checked == 0){
               var result = 0;
           } else {
               var result = (checked * 100) / count;

               var newresult = Math.round(result);
           }

           $('.progress-bar').css('width', result+'%').attr('aria-valuenow', result);

          //  $('.progress-bar').css('width', result+'%').attr('aria-valuenow', result);
        var percentage1=$('#decfactor1').val();
		var percentage2=$('#decfactor2').val();
		var percentage3=$('#decfactor3').val();
		var percentage4=$('#decfactor4').val();
		var totalmarks=$('#totalmarks').val();
		
		console.log('perentage1',percentage1);
	  // alert('percentage1',percentage1);
		 
		 var calculatedpercentage = Math.round((total/totalmarks)*100);
		
		 //  $('#scoredmarks').val(total);
		   $('#percentage').val(calculatedpercentage);
		
		document.getElementById('scoreoutof').innerHTML = total;
           $('#myValues').val(calculatedpercentage);
		
		//$("#decession").html($('#decession').html() + " <br>New content!");
		
		if(calculatedpercentage>percentage1){
			 $("#decession").html("You are positive to covid19 symptoms"); 
			var state = 'covid19positive';
			 $('#state').val(state);
			
			
			  $("#decessionanimation").html("<img src='{{URL::asset('covidmeter/images/gotohospital.gif')}}' style='width:300px;height:300px;' />"); 
		}else if(calculatedpercentage>percentage3){
				 $("#decession").html("You are need to Self Quarantine");
			var state = 'selfquarantine';
			 $('#state').val(state);
			 $("#decessionanimation").html("<img src='{{URL::asset('covidmeter/images/homequarantine.gif')}}' style='width:100px;height:100px;' />"); 
		 }else if(calculatedpercentage>percentage4){
			 
			$("#decession").html("You are need to go to OPD"); 
			  $("#decessionanimation").html("<img src='{{URL::asset('covidmeter/images/quiz-01.gif')}}' style='width:100px;height:100px;' />"); 
			var state = 'OPD';
			 $('#state').val(state); 
		 }else if(calculatedpercentage>percentage2){
			 
			 $("#decession").html("You are normal"); 
			  $("#decessionanimation").html("<img src='{{URL::asset('covidmeter/images/normal.gif')}}' style='width:100px;height:100px;' />"); 
			 var state = 'normal';
			 $('#state').val(state);
		 }else{
			  $("#decession").html("Fill the Questionary correctly to  get decesssion");
			 $("#decessionanimation").html("<img src='{{URL::asset('covidmeter/images/normal.gif')}}' style='width:100px;height:100px;' />");  
		 }
								   
		
       
		
		
            $('.myValues').triggerHandler('change','input',function(event){
                alert('test');
                console.log('test new log');
            
                event.preventDefault();
            });

            // $('#myValues').myfunc({divFact:10,eventListenerType:'trigger'});



     }
     
     progress();
           
           
     $(document).on('change', 'input', function(e){
           progress();
           
     })
});
</script>
<script type="text/javascript">
	$(document).ready(function() {
    $('.group_ctrl').change(function () {
        // gets data-group value and uses it in the outer selector
        // to select the inputs it controls and sets their disabled 
        // property to the negated value of it's checked property 
        $("." + $(this).data("group")).prop('disabled', !this.checked);
    }).change();
});
</script>
<script type="text/javascript">


     $("#myValues").myfunc({divFact:10,eventListenerType:'change'});
   
  
  
   // $("#myValues2").myfunc({divFact:30});
</script>
	  <script type="text/javascript">
        $(document).ready(function() {
            // Show or hide the sticky footer button
            $(window).scroll(function() {
                if ($(this).scrollTop() > 200) {
                    $('.go-top').fadeIn(200);
                } else {
                    $('.go-top').fadeOut(200);
                }
            });

            // Animate the scroll to top
            $('.go-top').click(function(event) {
                event.preventDefault();

                $('html, body').animate({
                    scrollTop: 0
                }, 700);
            })
        });

    </script>

</body>

</html>