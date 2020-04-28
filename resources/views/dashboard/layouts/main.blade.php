<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="{{URL::asset('assets/assets/img/apple-icon.png')}}" />
	<link rel="icon" type="image/png" href="{{URL::asset('assets/img/favicon.png')}}" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>@yield('title')</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />

	<!-- Bootstrap core CSS     -->
	<link href="{{URL::asset('assets/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <!--select 2 integraton-->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
	<!--image crop css -->
  <link rel="stylesheet" href="{{ asset('css/croppie.css') }}">


	<!--  Material Dashboard CSS    -->
    <link href="{{URL::asset('assets/assets/css/material-dashboard.css?v=1.3.0')}}" rel="stylesheet" />

	<!--  CSS for Demo Purpose, don't include it in your project     -->
     <link href="{{URL::asset('assets/assets/css/demo.css')}}" rel="stylesheet" />


	<!--     Fonts and icons     -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
  rel="stylesheet">
	<link rel="icon" href="{{URL::asset('assets/images/favicon.png')}}" type="image/png">

<!--   Core JS Files   -->
<script src="{{URL::asset('assets/assets/js/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/assets/js/material.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/assets/js/perfect-scrollbar.jquery.min.js')}}" type="text/javascript"></script>

<!--<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" type="text/javascript"></script>-->

<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

<!-- Library for adding dinamically elements -->
<script src="{{URL::asset('assets/assets/js/arrive.min.js')}}" type="text/javascript"></script>

<!-- Forms Validations Plugin -->
<script src="{{URL::asset('assets/assets/js/jquery.validate.min.js')}}"></script>

<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="{{URL::asset('assets/assets/js/moment.min.js')}}"></script>

<!--  Charts Plugin, full documentation here: https://gionkunz.github.io/chartist-js/ -->
<script src="{{URL::asset('assets/assets/js/chartist.min.js')}}"></script>

<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="{{URL::asset('assets/assets/js/jquery.bootstrap-wizard.js')}}"></script>

<!--  Notifications Plugin, full documentation here: http://bootstrap-notify.remabledesigns.com/    -->
<script src="{{URL::asset('assets/assets/js/bootstrap-notify.js')}}"></script>

<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="{{URL::asset('assets/assets/js/bootstrap-datetimepicker.js')}}"></script>

<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="{{URL::asset('assets/assets/js/jquery-jvectormap.js')}}"></script>

<!-- Sliders Plugin, full documentation here: https://refreshless.com/nouislider/ -->
<script src="{{URL::asset('assets/assets/js/nouislider.min.js')}}"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

<!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="{{URL::asset('assets/assets/js/jquery.select-bootstrap.js')}}"></script>

<!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
<script src="{{URL::asset('assets/assets/js/jquery.datatables.js')}}"></script>

<!-- Sweet Alert 2 plugin, full documentation here: https://limonte.github.io/sweetalert2/ -->
<script src="{{URL::asset('assets/assets/js/sweetalert2.js')}}"></script>

<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{URL::asset('assets/assets/js/jasny-bootstrap.min.js')}}"></script>

<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="{{URL::asset('assets/assets/js/fullcalendar.min.js')}}"></script>

<!-- Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="{{URL::asset('assets/assets/js/jquery.tagsinput.js')}}"></script>

<!-- Material Dashboard javascript methods -->
<script src="{{URL::asset('assets/assets/js/material-dashboard.js?v=1.3.0')}}"></script>

<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="{{URL::asset('assets/assets/js/demo.js')}}"></script>
<!--select 2 integraton-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <style>
    .emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}
</style>
</head>


<body >
	<div class="wrapper">

       <div class="sidebar " data-active-color="blue" data-background-color="white" data-image="{{URL::asset('assets/assets/img/sidebar-1.jpg')}}">
    <!--
        Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
        Tip 2: you can also add an image using data-image tag
        Tip 3: you can change the color of the sidebar with data-background-color="white | black"
    -->

    <div class="logo">

   </div>

   <div class="sidebar-wrapper">
    <div class="user">
		
        
		 <div class="photo" style="width:60px;height:60px">
			<?php if(empty(Auth::user()->profile_img)){?>
			   <?php if(Auth::user()->gender == 'male'){?>
            <img src="{{URL::to('/')}}/admins/profileimg/male-avatar.png" />
			<?php }else {?>
			<img src="{{URL::to('/')}}/admins/profileimg/female-avatar.png" />
			<?php }?>
	

			<?php } else {?>
			 <img src="{{URL::to('/')}}/divisionalagents/profileimg/{{Auth::user()->profile_img}}" />
			<?php }?>
        </div>
        <div class="info">
            <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                <span>
                      {{ Auth::user()->name }}

                   <b class="caret"></b>
               </span>
           </a>
           <div class="clearfix"></div>
           <div class="collapse" id="collapseExample">
            <ul class="nav">
                 <li>
                    <a href="{{route('admin.profile')}}">
                        <span class="sidebar-mini"> MP </span>
                        <span class="sidebar-normal"> My Profile </span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.editprofile')}}">
                        <span class="sidebar-mini"> EP </span>
                        <span class="sidebar-normal"> Edit Profile </span>
                    </a>
                </li>
                 <li>
                    <a href="{{route('admin.changepassword')}}">
                        <span class="sidebar-mini"> CP </span>
                        <span class="sidebar-normal">Change Password </span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>
<ul class="nav">

    <li class="active">
        <a href="{{route('admin.home')}}">
            <i class="material-icons">dashboard</i>
            <p> Dashboard </p>
        </a>
    </li>



    <!--############################   Members   #####################################-->

    <li>
        <a data-toggle="collapse" href="#pagesExamples">
            <i class="material-icons">account_circle</i>
            <p> Users
             <b class="caret"></b>
         </p>
     </a>

     <div class="collapse" id="pagesExamples">
        <ul class="nav">
            <li>
                <a href="{{route('member.add')}}">
                    <span class="sidebar-mini"> RNU </span>
                    <span class="sidebar-normal"> Register New User </span>
                </a>
            </li>
             <li>
                <a href="{{route('member.import')}}">
                    <span class="sidebar-mini"> INU </span>
                    <span class="sidebar-normal"> Import User</span>
                </a>
            </li>


            <li>
                <a href="{{route('member.members')}}">
                    <span class="sidebar-mini"> MU </span>
                    <span class="sidebar-normal"> Manage Users </span>
                </a>
            </li>

			  <li>
                <a href="{{route('member.deletedmembers')}}">
                    <span class="sidebar-mini"> DU </span>
                    <span class="sidebar-normal"> Deleted Users </span>
                </a>
            </li>



        </ul>
    </div>
</li>

 <!--############################   Province Agents  #####################################-->

    <li>
        <a data-toggle="collapse" href="#pagesExamplesprovince">
            <i class="material-icons">account_circle</i>
            <p> Province Admins
             <b class="caret"></b>
         </p>
     </a>

     <div class="collapse" id="pagesExamplesprovince">
        <ul class="nav">
             <li>
                <a href="{{route('provinceagent.add')}}">
                    <span class="sidebar-mini"> RNPA </span>
                    <span class="sidebar-normal"> Register New Province Admin </span>
                </a>
             </li>
              <li>
                <a href="{{route('provinceagent.agents')}}">
                    <span class="sidebar-mini"> MPA </span>
                    <span class="sidebar-normal"> Manage Province Admin </span>
                </a>
             </li>
              <li>
                <a href="{{route('provinceagent.deletedagents')}}">
                    <span class="sidebar-mini"> DPA </span>
                    <span class="sidebar-normal"> Deleted Province Admin </span>
                </a>
              </li>



        </ul>
    </div>
</li>

<!--############################  District Agents  #####################################-->

    <li>
        <a data-toggle="collapse" href="#pagesExamplesdistrict">
            <i class="material-icons">account_circle</i>
            <p> District Admins
             <b class="caret"></b>
         </p>
     </a>

     <div class="collapse" id="pagesExamplesdistrict">
        <ul class="nav">
             <li>
                <a href="{{route('districtagent.add')}}">
                    <span class="sidebar-mini"> RNPA </span>
                    <span class="sidebar-normal"> Register New District Admin </span>
                </a>
             </li>
              <li>
                <a href="{{route('districtagent.agents')}}">
                    <span class="sidebar-mini"> MPA </span>
                    <span class="sidebar-normal"> Manage District Admin </span>
                </a>
             </li>
              <li>
                <a href="{{route('districtagent.deletedagents')}}">
                    <span class="sidebar-mini"> DPA </span>
                    <span class="sidebar-normal"> Deleted District Admin </span>
                </a>
              </li>



        </ul>
    </div>
</li>

<!--############################  Zonal agents #####################################-->

    <li>
        <a data-toggle="collapse" href="#pagesExampleszonal">
            <i class="material-icons">account_circle</i>
            <p> Hospital type  Admins
             <b class="caret"></b>
         </p>
     </a>

     <div class="collapse" id="pagesExampleszonal">
        <ul class="nav">
             <li>
                <a href="{{route('hospitaltypegent.add')}}">
                    <span class="sidebar-mini"> RNHTA </span>
                    <span class="sidebar-normal"> Register New Hospital  Type Admin </span>
                </a>
             </li>
              <li>
                <a href="{{route('hospitaltypegent.agents')}}">
                    <span class="sidebar-mini"> MPA </span>
                    <span class="sidebar-normal"> Manage Hospital Type  Admin </span>
                </a>
             </li>
              <li>
                <a href="{{route('hospitaltypegent.deletedagents')}}">
                    <span class="sidebar-mini"> DPA </span>
                    <span class="sidebar-normal"> Deleted Hospital Type Admin </span>
                </a>
              </li>



        </ul>
    </div>
</li>

<!--############################ Division agents #####################################-->

    <li>
        <a data-toggle="collapse" href="#pagesExamplesdivision">
            <i class="material-icons">account_circle</i>
            <p> Hospital Admin
             <b class="caret"></b>
         </p>
     </a>

     <div class="collapse" id="pagesExamplesdivision">
        <ul class="nav">
             <li>
                <a href="{{route('hospitalagent.add')}}">
                    <span class="sidebar-mini"> RNHA </span>
                    <span class="sidebar-normal"> Register New Hospital Admin </span>
                </a>
             </li>
              <li>
                <a href="{{route('hospitalagent.agents')}}">
                    <span class="sidebar-mini"> MHA </span>
                    <span class="sidebar-normal"> Manage Hospital Admin </span>
                </a>
             </li>
              <li>
                <a href="{{route('hospitalagent.deletedagents')}}">
                    <span class="sidebar-mini"> DHA </span>
                    <span class="sidebar-normal"> Deleted Hospital Admins </span>
                </a>
              </li>



        </ul>
    </div>
</li>


<!--############################  School agents #####################################-->

    <li>
        <a data-toggle="collapse" href="#pagesExamplesschool">
            <i class="material-icons">account_circle</i>
            <p> Department Admins
             <b class="caret"></b>
         </p>
     </a>

     <div class="collapse" id="pagesExamplesschool">
        <ul class="nav">
             <li>
                <a href="{{route('departmentagent.add')}}">
                    <span class="sidebar-mini"> RNDA </span>
                    <span class="sidebar-normal"> Register New Department Admin </span>
                </a>
             </li>
              <li>
                <a href="{{route('departmentagent.agents')}}">
                    <span class="sidebar-mini"> MDA </span>
                    <span class="sidebar-normal"> Manage Department  Admin </span>
                </a>
             </li>
              <li>
                <a href="{{route('departmentagent.deletedagents')}}">
                    <span class="sidebar-mini"> DDA </span>
                    <span class="sidebar-normal"> Deleted Department Admins </span>
                </a>
              </li>

        </ul>
    </div>
</li>




    <!--############################   Members   #####################################-->

    <li>
        <a data-toggle="collapse" href="#contacts">
            <i class="material-icons">perm_contact_calendar</i>
            <p> Covid 19 Application
             <b class="caret"></b>
         </p>
     </a>

     <div class="collapse" id="contacts">
        <ul class="nav">
            <li>
                <a href="{{route('covid19questions.add')}}">
                    <span class="sidebar-mini"> RNC </span>
                    <span class="sidebar-normal"> Add New Question </span>
                </a>
            </li>


            <li>
                <a href="{{route('covid19questions.questions')}}">
                    <span class="sidebar-mini"> MQ </span>
                    <span class="sidebar-normal"> Manage Questions </span>
                </a>
            </li>

              <li>
                <a href="{{route('covid19questions.deletedquestions')}}">
                    <span class="sidebar-mini"> DQ </span>
                    <span class="sidebar-normal"> Deleted Questions </span>
                </a>
            </li>
             <li>
                <a href="{{route('covid19questions.decessions')}}">
                    <span class="sidebar-mini"> DC </span>
                    <span class="sidebar-normal"> Manage Decessions </span>
                </a>
            </li>




        </ul>
    </div>
</li>


	










<!--############################   Settings   #####################################-->

<li>
    <a data-toggle="collapse" href="#formsExamples">
        <i class="material-icons">build</i>
        <p>Settings
         <b class="caret"></b>
     </p>
 </a>

 <div class="collapse" id="formsExamples">
    <ul class="nav">
        <li>
            <a href="{{route('province.provinces')}}">
                <span class="sidebar-mini"> PM </span>
                <span class="sidebar-normal">Province Manage </span>
            </a>
        </li>
          <li>
            <a href="{{route('district.districts')}}">
                <span class="sidebar-mini"> DM </span>
                <span class="sidebar-normal">District Manage </span>
            </a>
        </li>
        <li>
            <a href="{{route('zone.zones')}}">
                <span class="sidebar-mini"> Hospital Type</span>
                <span class="sidebar-normal">Hospital Type Manage </span>
            </a>
        </li>

        <li>
            <a href="{{route('division.divisions')}}">
                <span class="sidebar-mini"> Hospital   </span>
                <span class="sidebar-normal">Hospital Manage </span>
            </a>
        </li>
          <li>
            <a href="{{route('school.schools')}}">
                <span class="sidebar-mini"> DM  </span>
                <span class="sidebar-normal">Department Manage </span>
            </a>
        </li>
        <li>
            <a href="{{route('subject.subjects')}}">
                <span class="sidebar-mini"> DM  </span>
                <span class="sidebar-normal">Designation Manage </span>
            </a>
        </li>

    </ul>
</div>
</li>
</ul>
</div>
</div>


<div class="main-panel">

 <nav class="navbar navbar-transparent navbar-absolute">
    <div class="container-fluid">
        <div class="navbar-minimize">
            <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                <i class="material-icons visible-on-sidebar-regular">more_vert</i>
                <i class="material-icons visible-on-sidebar-mini">view_list</i>
            </button>
        </div>
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"> Dashboard  @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>

                </li>

                 <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="material-icons">person</i>

                        <p class="hidden-lg hidden-md">
                            Logout
                            <b class="caret"></b>
                        </p>
                    </a>
                    <ul class="dropdown-menu">

                        <li><a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" >Logout</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                    </ul>
                </li>


             <li class="separator hidden-lg hidden-md"></li>
         </ul>


         <form class="navbar-form navbar-right" role="search">
            <div class="form-group form-search is-empty">
                <input type="text" class="form-control" placeholder=" Search ">
                <span class="material-input"></span>
            </div>
            <button type="submit" class="btn btn-white btn-round btn-just-icon">
                <i class="material-icons">search</i><div class="ripple-container"></div>
            </button>
        </form>
    </div>
</div>
</nav>




<div class="content">
  <!--dynamic content will display here-->
  @yield('content')
  <!--dynamic contet area end-->
</div>




<footer style="padding-top:0px;" class="footer">
    <div class="container-fluid">
        <p class="copyright text-center">
            Copyright © <?php echo date('Y') ?>.Medix.lk Developed By <a  href="https://www.cisworld.lk/" target="_blank"> CIS WORLD</a>
        </p>
    </div>
</footer>


</div>
</div>
</body>
 <script src="{{ asset('js/croppie.js') }}"></script>
<script>

    
    $(document).ready(function() {
        var imgName = null
        $(".img_upload").click(function() {
            imgName = $(this).attr("img_name");
            //alert($(this).attr("img_name"));
        });

        $(window).on("resize", function (e) {
        checkScreenSize();
    });

    checkScreenSize();

    function checkScreenSize(){
        var newWindowWidth = $(window).width();
        if (newWindowWidth < 481) {
            $image_crop = $('#image_demo').croppie({
            enableExif: true,
            viewport: {
                width: 205,
                height: 205,
                type: 'square' //circle
            },
            boundary: {
                width: 255,
                height: 255
            }
        });
        }
        else
        {
            $image_crop = $('#image_demo').croppie({
            enableExif: true,
            viewport: {
                width: 400,
                height: 400,
                type: 'square' //circle
            },
            boundary: {
                width: 450,
                height: 450
            }
        });
        }
    }

       

        

        $('.img_upload').on('change', function() {
            var reader = new FileReader();
            reader.onload = function(event) {
                $image_crop.croppie('bind', {
                    url: event.target.result
                }).then(function() {
                    console.log('jQuery bind complete');
                });
            }
            reader.readAsDataURL(this.files[0]);
            $('#uploadimageModal').modal('show');
        });

        $('.crop_image').click(function(event) {
            $image_crop.croppie('result', {
                type: 'canvas',
                size: 'viewport'
            }).then(function(response) {

                $(imgName).val(response);
                $('#closeModel').click();
                //alert(imgName);


            })
        });

    });

</script>

<script type="text/javascript">
    $(document).ready(function(){

		// Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.initVectorMap();
    });
</script>

<script type="text/javascript">
    $('#nameid').select2({
        placeholder:'select a designation',
        allowClear:true
    });
</script>
<script type="text/javascript">
    $('#workplaceid').select2({
        placeholder:'select a workplace',
        allowClear:true
    });
</script>
<script type="text/javascript">
    $('#groupid').select2({
        placeholder:'select a group',
        allowClear:true
    });
</script>
<script type="text/javascript">
    $('#memberid').select2({
        placeholder:'select a union id',
        allowClear:true
    });
</script>
<script type="text/javascript">
    $('#pwsid').select2({
        placeholder:'select your current workstation',
        allowClear:true
    });
</script>
<script type="text/javascript">
    $('#p1').select2({
        placeholder:'select your first preference',
        allowClear:true
    });
</script>
<script type="text/javascript">
    $('#p2').select2({
        placeholder:'select your second preference',
        allowClear:true
    });
</script>
<script type="text/javascript">
    $('#p3').select2({
        placeholder:'select your third  preference',
        allowClear:true
    });
</script>
<script type="text/javascript">
    $('#p4').select2({
        placeholder:'select your third  preference new',
        allowClear:true
    });
</script>
<script type="text/javascript">
    $('#pid').select2({
        placeholder:'Select Province',
        allowClear:true
    });
</script>

<script type="text/javascript">
    $('#did').select2({
        placeholder:'Select District',
        allowClear:true
    });
</script>
<script type="text/javascript">
    $('#zid').select2({
        placeholder:'Select Hospital Type',
        allowClear:true
    });
</script>
<script type="text/javascript">
    $('#divid').select2({
        placeholder:'Select Hospital',
        allowClear:true
    });
</script>
<script type="text/javascript">
    $('#sid').select2({
        placeholder:'Select Department',
        allowClear:true
    });
</script>

<script type="text/javascript">
    $('#subid').select2({
        placeholder:'Select Designation',
        allowClear:true
    });
</script>



   <script type="text/javascript">
    $(document).ready(function() {
        $('#datatables2').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [[100, 250, 500, -1], [100, 250, 500, "All"]],
            responsive: true,
            "scrollY": 300,
            "scrollX": false,
            language: {
            search: "_INPUT_",
            searchPlaceholder: "Search records",

            }

        });
        var table = $('#datatables2').DataTable();

        // Edit record
        table.on( 'click', '.edit', function () {
            $tr = $(this).closest('tr');

            var data = table.row($tr).data();
            alert( 'You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.' );
        } );

        // Delete a record
        table.on( 'click', '.remove', function (e) {
            $tr = $(this).closest('tr');
            table.row($tr).remove().draw();
            e.preventDefault();
        } );

        //Like record
        table.on( 'click', '.like', function () {
            alert('You clicked on Like button');
        });

        $('.card .material-datatables label').addClass('form-group');
        $('.dataTables_length').addClass('bs-select');
    });

    </script>
        <!--meber manage form js-->
                <script type="text/javascript">
                    $('.selectall').click(function(){
                        $('.selectbox').prop('checked',$(this).prop('checked'));
                       // $('.selectall2').prop('checked',$(this).prop('checked'));

                    })

                    $('.selectbox').change(function(){
                        var total = $('.selectbox').length;
                        var number = $('.selectbox:checked').length;
                        if(total == number ){
                            $('.selectall').prop('checked',true);
                        }else{
                             $('.selectall').prop('checked',false);
                        }
                    })



                </script>
                <!--group messge formm-->
                <script type="text/javascript">
                    $('.selectall2').click(function(){
                        $('.selectbox2').prop('checked',$(this).prop('checked'));
                       // $('.selectall2').prop('checked',$(this).prop('checked'));

                    })

                    $('.selectbox2').change(function(){
                        var total = $('.selectbox2').length;
                        var number = $('.selectbox2:checked').length;
                        if(total == number ){
                            $('.selectall2').prop('checked',true);
                        }else{
                             $('.selectall2').prop('checked',false);
                        }
                    })



                </script>

                <script type="text/javascript">

    $(document).ready(function() {

      $(".btn-success").click(function(){
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){
          $(this).parents(".multiple-row").remove();
      });

    });

</script>
<script type="text/javascript">






//autocomplete script
$(document).on('focus','.autocomplete_txt',function(){
  type = $(this).data('type');

  if(type =='emp_id' ) autoType='emp_id';
   if(type =='member_id' ) autoType='member_id';
  if(type =='mobile' )  autoType='mobile';
   if(type =='nic' )  autoType='nic';
	  if(type =='name' )  autoType='name';

   $(this).autocomplete({
       minLength: 0,
       source: function( request, response ) {
            $.ajax({
                url: "{{ route('searchmember') }}",
                dataType: "json",
                data: {
                    term : request.term,
                    type : type,
                },
                success: function(data) {
                    var array = $.map(data, function (item) {
                       return {
                           label: item[autoType],
                           value: item[autoType],
                           data : item
                       }
                   });
                    response(array)
                }
            });
       },
       select: function( event, ui ) {
           var data = ui.item.data;
         //  id_arr = $(this).attr('id');
         //  id = id_arr.split("_");
       //    elementId = id[id.length-1];
           $('#nic').val(data.nic);
           $('#name').val(data.name);
            $('#emp_id').val(data.emp_id);
            $('#mobile').val(data.mobile);
               $('#member_id').val(data.member_id);

       }
   });


});
</script>
<script type="text/javascript">






//autocomplete script
$(document).on('focus','.autocomplete_txt_group',function(){
  type = $(this).data('type');

  if(type =='nic' ) autoType='nic';
  if(type =='mobile' )  autoType='mobile';
  if(type =='name' )  autoType='name';
  if(type =='emp_id' )  autoType='emp_id';

   $(this).autocomplete({
       minLength: 0,
       source: function( request, response ) {
            $.ajax({
                url: "{{ route('searchmembergroup') }}",
                dataType: "json",
                data: {
                    term : request.term,
                    type : type,
                },
                success: function(data) {
                    var array = $.map(data, function (item) {
                       return {
                           label: item[autoType],
                           value: item[autoType],
                           data : item
                       }
                   });
                    response(array)
                }
            });
       },
       select: function( event, ui ) {
           var data = ui.item.data;
         //  id_arr = $(this).attr('id');
         //  id = id_arr.split("_");
       //    elementId = id[id.length-1];
           $('#nic').val(data.nic);
           $('#name').val(data.name);
            $('#emp_id').val(data.emp_id);
            $('#mobile').val(data.mobile);
               $('#member_id').val(data.member_id);

       }
   });


});
</script>
<script type="text/javascript">

    $(function(){

        $("#slider-range").slider({
            range:true,
            min:0,
            max:100,
            values:(15,65),
            slide:function(event,ui){

                $("#amount_start").val();
                $("#amount_end").val();

                var start = $('#amount_start').val();
                var end = $('$amount_end').val();

               $.ajax({
                type:'get',
                dataType:'html',
                url:'',
                data:"start="+ start + "& end="+end,

                success:function(response){
                    console.log(response);

                    $('#updateDiv').html(response);
                }


               });


            }

        });





       $('.try').click(function(){

        //alert('yasiru');

        var group = [];

        $('.try').each(function(){

            if($(this).is(":checked")){

               group.push($(this).val());

            }

        });
        Finalgroup = group.toString();

        //console.log(Finalgroup);
        var type=1;

          $.ajax({
                type:'get',
                dataType:'html',
                url:'',
                data:"group="+Finalgroup+"& type="+type,

                success:function(response){
                    console.log(response);

                    $('#updateDiv').html(response);
                }


               });


      });
 });
</script>

<script type="text/javascript">

    $('#pid').on('change',function(e){
        console.log(e);

        var p_id = e.target.value;

        $.get('/json-districts?p_id='+p_id,function(data){
            console.log(data);

            $('#did').empty();

            $('#did').append('<option value="" disable="true" selected="true">Select District</option>');
            $.each(data,function(index,didObj) {
                 $('#did').append('<option value="'+ didObj.id +'" >'+didObj.placename+'</option>');
            })




        });
    });

     $('#did').on('change',function(e){
        console.log(e);

        var d_id = e.target.value;

        $.get('/json-zones?d_id='+d_id,function(data){
            console.log(data);

            $('#zid').empty();

            $('#zid').append('<option value="" disable="true" selected="true">Select Zone</option>');
            $.each(data,function(index,zidObj) {
                 $('#zid').append('<option value="'+ zidObj.id +'" >'+zidObj.placename+'</option>');
            })




        });
    });

       $('#zid').on('change',function(e){
        console.log(e);

        var z_id = e.target.value;

        $.get('/json-divisions?z_id='+z_id,function(data){
            console.log(data);

            $('#divid').empty();

            $('#divid').append('<option value="" disable="true" selected="true">Select Division</option>');
            $.each(data,function(index,dividObj) {
                 $('#divid').append('<option value="'+ dividObj.id +'" >'+dividObj.placename+'</option>');
            })




        });
    });

    $('#divid').on('change',function(e){
        console.log(e);

        var div_id = e.target.value;

        $.get('/json-schools?div_id='+div_id,function(data){
            console.log(data);

            $('#sid').empty();

            $('#sid').append('<option value="" disable="true" selected="true">Select Division</option>');
            $.each(data,function(index,sidObj) {
                 $('#sid').append('<option value="'+ sidObj.id +'" >'+sidObj.placename+'</option>');
            })




        });
    });
</script>


</html>
