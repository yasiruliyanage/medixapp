<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{URL::asset('assets/assets/img/apple-icon.png')}}" />
    <link rel="icon" href="{{URL::asset('assets/images/nav.png')}}" type="image/png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>@yield('title')</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="{{URL::asset('assets/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <!--select 2 integraton-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />



    <!--  Material Dashboard CSS    -->
    <link href="{{URL::asset('assets/assets/css/material-dashboard.css?v=1.3.0')}}" rel="stylesheet" />

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{URL::asset('assets/assets/css/demo.css')}}" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" href="{{URL::asset('assets/images/favicon.png')}}" type="image/png">
    <style type="text/css">
      h4{
          font-weight:500;
          font-size:20px;
      }
    </style>
</head>


<body>
    <div class="wrapper">

        <div class="sidebar" data-active-color="rose" data-background-color="black" data-image="{{URL::asset('assets/assets/img/sidebar-t.jpg')}}">

            <div class="logo">

            </div>

            <div class="sidebar-wrapper">
                <div class="user">
                    <div class="photo">
                        <img src="{{URL::asset('assets/assets/img/admin.jpg')}}">
                    </div>
                    <div class="info">
                        <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                            <span>User
                                <b class="caret"></b>
                            </span>
                        </a>
                        <div class="clearfix"></div>
                        <div class="collapse" id="collapseExample">
                            <ul class="nav">
                                <li>
                                    <a href="view_s_a_pro">
                                        <span class="sidebar-mini"> MP </span>
                                        <span class="sidebar-normal"> My Profile </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="edit_s_a_pro">
                                        <span class="sidebar-mini"> EP </span>
                                        <span class="sidebar-normal"> Edit Profile </span>
                                    </a>
                                </li>
                                 <li>
                                    <a href="/">
                                        <span class="sidebar-mini"> LO </span>
                                        <span class="sidebar-normal"> Logout </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="nav">

                    <li class="active">
                        <a href="school_dash">
                            <i class="material-icons">dashboard</i>
                            <p>School Agent Dashboard </p>
                        </a>
                    </li>

                    <!--############################   Members   #####################################-->

                    <li>
                        <a data-toggle="collapse" href="#pagesExamples">
                            <i class="material-icons">account_circle</i>
                            <p> Members
                                <b class="caret"></b>
                            </p>
                        </a>

                        <div class="collapse" id="pagesExamples">
                            <ul class="nav">
                                <li>
                                    <a href="add_mem_sa">
                                        <span class="sidebar-mini"> RNM </span>
                                        <span class="sidebar-normal"> Register New Member </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="pending_reg_sa">
                                        <span class="sidebar-mini"> PR </span>
                                        <span class="sidebar-normal"> Pending Registrations </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="mng_mem_sa">
                                        <span class="sidebar-mini"> MM </span>
                                        <span class="sidebar-normal"> Manage Members </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="dlt_mem_sa">
                                        <span class="sidebar-mini"> DM </span>
                                        <span class="sidebar-normal"> Deleted Members </span>
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
                                    <a href="mng_school_sa">
                                        <span class="sidebar-mini"> MS </span>
                                        <span class="sidebar-normal">Manage School </span>
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
                        <a class="navbar-brand" href="#">School Agent Dashboard

                        </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>

                            </li>

                            <!--li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">person</i>

                                    <p class="hidden-lg hidden-md">
                                        Logout
                                        <b class="caret"></b>
                                    </p>
                                </a>
                                <ul class="dropdown-menu">

                                    <li><a href="" onclick="">Logout</a></li>
                                    <form id="logout-form" action="" method="POST" style="display: none;">

                                    </form>

                                </ul>
                            </li-->


                            <li class="separator hidden-lg hidden-md"></li>
                        </ul>

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
                        Copyright © 2019.Ceylon Teachers Service Union Developed By <a href="https://www.cisworld.lk/" target="_blank"> CIS WORLD</a>
                    </p>
                </div>
            </footer>


        </div>
    </div>
</body>

<!--   Core JS Files   -->
<script src="{{URL::asset('assets/assets/js/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/assets/js/material.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/assets/js/perfect-scrollbar.jquery.min.js')}}" type="text/javascript"></script>

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

<script type="text/javascript">
    $(document).ready(function() {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.initVectorMap();
    });

</script>

<script type="text/javascript">
    $('#nameid').select2({
        placeholder: 'select a designation',
        allowClear: true
    });

</script>
<script type="text/javascript">
    $('#workplaceid').select2({
        placeholder: 'select a workplace',
        allowClear: true
    });

</script>
<script type="text/javascript">
    $('#groupid').select2({
        placeholder: 'select a group',
        allowClear: true
    });

</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#datatables').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
                [100, 250, 500, -1],
                [100, 250, 500, "All"]
            ],
            responsive: true,
            "scrollY": 300,
            "scrollX": false,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search records",

            }

        });
        var table = $('#datatables').DataTable();

        // Edit record
        table.on('click', '.edit', function() {
            $tr = $(this).closest('tr');

            var data = table.row($tr).data();
            alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
        });

        // Delete a record
        table.on('click', '.remove', function(e) {
            $tr = $(this).closest('tr');
            table.row($tr).remove().draw();
            e.preventDefault();
        });

        //Like record
        table.on('click', '.like', function() {
            alert('You clicked on Like button');
        });

        $('.card .material-datatables label').addClass('form-group');
        $('.dataTables_length').addClass('bs-select');
    });

</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#datatables2').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
                [100, 250, 500, -1],
                [100, 250, 500, "All"]
            ],
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
        table.on('click', '.edit', function() {
            $tr = $(this).closest('tr');

            var data = table.row($tr).data();
            alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
        });

        // Delete a record
        table.on('click', '.remove', function(e) {
            $tr = $(this).closest('tr');
            table.row($tr).remove().draw();
            e.preventDefault();
        });

        //Like record
        table.on('click', '.like', function() {
            alert('You clicked on Like button');
        });

        $('.card .material-datatables label').addClass('form-group');
        $('.dataTables_length').addClass('bs-select');
    });

</script>
<!--meber manage form js-->
<!--script type="text/javascript">
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



                </script-->
<!--group messge formm-->
<!--script type="text/javascript">
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



                </script-->

<!--script type="text/javascript">

    $(document).ready(function() {

      $(".btn-success").click(function(){
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){
          $(this).parents(".multiple-row").remove();
      });

    });

</script-->
<script type="text/javascript">
    $(document).ready(function() {

        $(".btn-success").click(function() {
            var html = $(".clone").html();
            $(".increment").after(html);
        });

        $("body").on("click", ".btn-danger", function() {
            $(this).parents(".multiple-row").remove();
        });

    });

</script>

</html>
