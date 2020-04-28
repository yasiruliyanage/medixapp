@extends('frontend.layouts.front')
@section('title')
Staff
@endsection
@section('content')
         <!--Sub Header Start-->
         <section>
               <div class="subh">
                 
                     <img src="{{URL::asset('assets/images/subheaderbg.jpg')}}" >
                     <div class="top-left">
                        <h2>Staff</h2>
                     </div>
               </div>
            </section>
         <!--Sub Header End--> 
         <!--Main Content Start-->
      
        
  <section id="" class="wf100 p80 h2-news-articles" style="padding-top: 0px;">
      <div class="main-content pagebg p80">
            <!--Events Start-->
            <div class="team-grid official-members">
               <div class="container">
                <div id="staff_data">
					@include('frontend.pages.teamdata')
				   </div>
               </div>
               <!--Team End--> 
            </div>
            <!--Main Content End--> 
         </div>
   </section>
         @endsection    