<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!--link rel="icon" href="img/favicon.png"-->
    <link href="{{URL::asset('medix/img/favicon.png')}}" rel="shortcut icon" type="image/png">
    <!-- Bootstrap CSS -->
    <!--link rel="stylesheet" href="css/bootstrap.min.css"-->
    <link href="{{URL::asset('medix/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <!-- animate CSS -->
    <!--link rel="stylesheet" href="css/animate.css"-->
    <link href="{{URL::asset('medix/css/css/animate.css')}}" rel="stylesheet" type="text/css">
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
                                    <a class="nav-link" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">About</a>
                                </li>
                              

                               

                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="loginBtn-wrap text-center">
                        <a class="btn_2" href="/login">TESTER LOGIN</a>
                        <a class="btn_2 ml-2" href="/admin/login">STAFF LOGIN</a>
                        <a class="btn_2 test-covid ml-2" href="">COVID-19 SELF TEST</a>
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
                        <a href="#" class="footer_logo"> <img src="img/logo.png" alt="#"> </a>
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
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Department</a></li>
                            <li><a href="#"> Online payment</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Department</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-2 col-sm-6 col-md-4 single-footer-widget">
                        <h4>Explore</h4>
                        <ul>
                            <li><a href="#">In the community</a></li>
                            <li><a href="#">IU health foundation</a></li>
                            <li><a href="#">Family support </a></li>
                            <li><a href="#">Business solution</a></li>
                            <li><a href="#">Community clinic</a></li>
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

    <!-- jquery plugins here-->

    <script src="js/jquery-1.12.1.min.js"></script>
    <script src="{{URL::asset('medix/js/jquery-1.12.1.min.js')}}"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <script src="{{URL::asset('medix/js/popper.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <script src="{{URL::asset('medix/js/bootstrap.min.js')}}"></script>
    <!-- owl carousel js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="{{URL::asset('medix/js/owl.carousel.min.js')}}"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="{{URL::asset('medix/js/jquery.nice-select.min.js')}}"></script>
    <!-- contact js -->
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="{{URL::asset('medix/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="js/jquery.form.js"></script>
    <script src="{{URL::asset('medix/js/jquery.form.js')}}"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="{{URL::asset('medix/js/jquery.validate.min.js')}}"></script>
    <script src="js/mail-script.js"></script>
    <script src="{{URL::asset('medix/js/mail-script.js')}}"></script>
    <script src="js/contact.js"></script>
    <script src="{{URL::asset('medix/js/contact.js')}}"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
    <script src="{{URL::asset('medix/js/custom.js')}}"></script>
</body>

</html>