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
<style>
.swal2-modal h2 {
    color: #595959;
    font-size: 18px;
    text-align: center;
    font-weight: 600;
    text-transform: none;
    position: relative;
    margin: 0;
    padding: 0;
    line-height: 60px;
    display: block;
}
.swal2-container {
  z-index:300000 !important;
}
</style>




</head>


<body >
	<div class="wrapper">

       <div class="sidebar" data-active-color="rose" data-background-color="black" data-image="{{URL::asset('assets/assets/img/sidebar-1.jpg')}}">
    <!--
        Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
        Tip 2: you can also add an image using data-image tag
        Tip 3: you can change the color of the sidebar with data-background-color="white | black"
    -->

    <div class="logo">
      
   </div>

   <div class="sidebar-wrapper">
    <div class="user">
        <div class="photo">
            <img src="{{URL::to('/')}}/districtagents/profileimg/{{Auth::user()->profile_img}}" />
        </div>
        <div class="info">
            <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                <span>
                      {{ Auth::user()->name }} <br>
                       District Agent
                   <b class="caret"></b>
               </span>
           </a>
           <div class="clearfix"></div>
           <div class="collapse" id="collapseExample">
            <ul class="nav">
                 <li class="@if ($nav == 'my_profile') active @endif">
                    <a href="{{route('districtagentuser.profile')}}">
                        <span class="sidebar-mini"> MP </span>
                        <span class="sidebar-normal"> My Profile </span>
                    </a>
                </li>
                <li class="@if ($nav == 'edit_profile') active @endif">
                    <a href="{{route('districtagentuser.editprofile')}}">
                        <span class="sidebar-mini"> EP </span>
                        <span class="sidebar-normal"> Edit Profile </span>
                    </a>
                </li>
                 <li class="@if ($nav == 'change_pass') active @endif">
                    <a href="{{route('districtagentuser.changepassword')}}">
                        <span class="sidebar-mini"> CP </span>
                        <span class="sidebar-normal">Change Password </span>
                    </a>
                </li>
               
            </ul>
        </div>
    </div>
</div>
<ul class="nav">

    <li >
        <a href="{{route('districtagentuser.home')}}">
            <i class="material-icons">dashoard </i>
            <p>District Agent Dashboard  </p>
        </a>
    </li>

    

    <!--############################   Members   #####################################-->
    
    <li class="@if ($nav == 'member_admin') active @endif">
        <a data-toggle="collapse" href="#pagesExamples">
            <i class="material-icons">account_circle</i>
            <p> Users 
             <b class="caret"></b>
         </p>
     </a>

     <div class="collapse" id="pagesExamples">
        <ul class="nav">
            <li>
                <a href="{{route('districtagentuser.members')}}">
                    <span class="sidebar-mini"> TIP </span>
                    <span class="sidebar-normal">Users in District</span>
                </a>
            </li>
        </ul>
    </div>
</li>

  
<!--############################  Staff Members   #####################################-->

	 <li class="@if ($nav == 'distict_admin') active @endif">
        <a data-toggle="collapse" href="#pagesExamplesS">
            <i class="material-icons">assignment_ind</i>
            <p>Hospital Type Admins
             <b class="caret"></b>
         </p>
     </a>

     <div class="collapse" id="pagesExamplesS">
        <ul class="nav">
            
			  <li>
                <a href="{{route('districtzonalagent.add')}}">
                    <span class="sidebar-mini"> ZDA </span>
                    <span class="sidebar-normal"> Register Hospital Type Admin </span>
                </a>
            </li>
		
            
			<li>
                <a href="{{route('districtzonalagent.agents')}}">
                    <span class="sidebar-mini"> ZDA </span>
                    <span class="sidebar-normal"> Manage Hospital Type Admin </span>
                </a>
            </li>
			 
			 <li>
                <a href="{{route('districtzonalagent.deletedagents')}}">
                    <span class="sidebar-mini"> ZDA </span>
                    <span class="sidebar-normal"> Deleted Hospital Type Admin</span>
                </a>
            </li>
			
			
        </ul>
    </div>
</li>



<!--############################  Staff Members   #####################################-->

     <li class="@if ($nav == 'divisional_admin') active @endif">
        <a data-toggle="collapse" href="#pagesExamplesDIVA">
            <i class="material-icons">assignment_ind</i>
            <p>Hospital Admins
             <b class="caret"></b>
         </p>
     </a>

     <div class="collapse" id="pagesExamplesDIVA">
        <ul class="nav">
            
              <li>
                <a href="{{route('districtagentuser.divisions')}}">
                    <span class="sidebar-mini"> HA </span>
                    <span class="sidebar-normal"> Hospital Admins </span>
                </a>
            </li>
        
            
          
            
            
        </ul>
    </div>
</li>
<!--############################  Staff Members   #####################################-->

     <li class="@if ($nav == 'school_admin') active @endif">
        <a data-toggle="collapse" href="#pagesExamplesSCA">
            <i class="material-icons">assignment_ind</i>
            <p>Department Admins
             <b class="caret"></b>
         </p>
     </a>

     <div class="collapse" id="pagesExamplesSCA">
        <ul class="nav">
            
              <li>
                <a href="{{route('districtagentuser.schools')}}">
                    <span class="sidebar-mini"> DA </span>
                    <span class="sidebar-normal"> Department Admins </span>
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
            <a class="navbar-brand" href="#"> District Agent Dashboard - {{$dname}} District  @if (session('status'))
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
            Copyright © 2019. Ceylon Teachers Service  Union Developed By <a href="https://www.cisworld.lk/" target="_blank"> CIS WORLD</a>
        </p>
    </div>
</footer>


</div>
</div>
  @include('sweetalert::alert')
</body>


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
        placeholder:'Select Zone',
        allowClear:true
    });
</script>
<script type="text/javascript">
    $('#divid').select2({
        placeholder:'Select Division',
        allowClear:true
    });
</script>
<script type="text/javascript">
    $('#sid').select2({
        placeholder:'Select School',
        allowClear:true
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#datatables').DataTable({
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
        var table = $('#datatables').DataTable();

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
  
  if(type =='employee_id' ) autoType='employee_id'; 
   if(type =='member_id' ) autoType='member_id'; 
  if(type =='mobile' )  autoType='mobile'; 
   if(type =='union_id' )  autoType='union_id'; 
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
           $('#union_id').val(data.union_id);
           $('#name').val(data.name);
            $('#employee_id').val(data.employee_id);
            $('#mobile').val(data.mobile);
             $('#nic').val(data.nic);
               $('#member_id').val(data.member_id);

       }
   });
   
   
});
</script>
<script type="text/javascript">
          


        


//autocomplete script
$(document).on('focus','.autocomplete_txt_group',function(){
  type = $(this).data('type');
  
  if(type =='union_id' ) autoType='union_id'; 
  if(type =='mobile' )  autoType='mobile'; 
  if(type =='name' )  autoType='name'; 
  if(type =='employee_id' )  autoType='employee_id'; 
  
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
           $('#union_id').val(data.union_id);
           $('#name').val(data.name);
            $('#employee_id').val(data.employee_id);
            $('#mobile').val(data.mobile);
             $('#nic').val(data.nic);
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

