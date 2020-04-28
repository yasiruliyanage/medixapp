<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title')</title>
<!-- CSS Files -->

<link rel="stylesheet" href="{{URL::asset('assets/css/1.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
<link href="{{URL::asset('assets/css/custom.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/css/responsive.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/css/color.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/css/all.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/css/owl.carousel.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/css/prettyPhoto.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/css/font-awesome.css')}}" rel="stylesheet">
<link rel="icon" href="{{URL::asset('assets/images/favicon.png')}}" type="image/png">



<style type="text/css">

      body
      {
         background: url("{{URL::asset('assets/images/subheaderbg.jpg')}}") no-repeat;
         width: 100%;
         float: left;
         height: 100vh;
         background-size: cover;
      }
      .wrapwel
      {
         width: 600px;
         margin: 250px auto 0;
         text-align: center;
      }
     .wrapwel h2
     {
         color: white;
         margin-bottom: 15px;
      }

     @media screen and (max-width:900px){


         .wrapwel{
            width: 100%;
         }

     }

</style>
</head>

<body>
      <div class="pagewel">
         <div class="wrapwel">
            <h1 style="color: white;">සාදරයෙන් පිළිගනිමු...!</h1>
			 <h1 style="color: white;">வரவேற்பு...!</h1>
			 <h1 style="color: white;">Welcome...!</h1>
            
            <div class="search">
               <a style="width: 200px;font-size: 30px;" class=" btn btn-default" href="/"><i class="fas fa-home"></i> Home </a>
            </div>
         </div>
      </div>


<script src="{{URL::asset('assets/js/jquery.min.js')}}"></script>
<script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{URL::asset('assets/js/custom.js')}}"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
  var scrolltotop={setting:{startline:100,scrollto:0,scrollduration:1e3,fadeduration:[500,100]},controlHTML:'<img src="{{URL::asset('assets/images/1.png')}}" />',controlattrs:{offsetx:5,offsety:5},anchorkeyword:"#top",state:{isvisible:!1,shouldvisible:!1},scrollup:function(){this.cssfixedsupport||this.$control.css({opacity:0});var t=isNaN(this.setting.scrollto)?this.setting.scrollto:parseInt(this.setting.scrollto);t="string"==typeof t&&1==jQuery("#"+t).length?jQuery("#"+t).offset().top:0,this.$body.animate({scrollTop:t},this.setting.scrollduration)},keepfixed:function(){var t=jQuery(window),o=t.scrollLeft()+t.width()-this.$control.width()-this.controlattrs.offsetx,s=t.scrollTop()+t.height()-this.$control.height()-this.controlattrs.offsety;this.$control.css({left:o+"px",top:s+"px"})},togglecontrol:function(){var t=jQuery(window).scrollTop();this.cssfixedsupport||this.keepfixed(),this.state.shouldvisible=t>=this.setting.startline?!0:!1,this.state.shouldvisible&&!this.state.isvisible?(this.$control.stop().animate({opacity:1},this.setting.fadeduration[0]),this.state.isvisible=!0):0==this.state.shouldvisible&&this.state.isvisible&&(this.$control.stop().animate({opacity:0},this.setting.fadeduration[1]),this.state.isvisible=!1)},init:function(){jQuery(document).ready(function(t){var o=scrolltotop,s=document.all;o.cssfixedsupport=!s||s&&"CSS1Compat"==document.compatMode&&window.XMLHttpRequest,o.$body=t(window.opera?"CSS1Compat"==document.compatMode?"html":"body":"html,body"),o.$control=t('<div id="topcontrol">'+o.controlHTML+"</div>").css("z-index","99999").css({position:o.cssfixedsupport?"fixed":"absolute",bottom:o.controlattrs.offsety,right:o.controlattrs.offsetx,opacity:0,cursor:"pointer"}).attr({title:"Scroll to Top"}).click(function(){return o.scrollup(),!1}).appendTo("body"),document.all&&!window.XMLHttpRequest&&""!=o.$control.text()&&o.$control.css({width:o.$control.width()}),o.togglecontrol(),t('a[href="'+o.anchorkeyword+'"]').click(function(){return o.scrollup(),!1}),t(window).bind("scroll resize",function(t){o.togglecontrol()})})}};scrolltotop.init();</script>

  </body>
</html>
