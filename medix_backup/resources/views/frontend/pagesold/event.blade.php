@extends('frontend.layouts.front')
@section('content')
         <!--Sub Header Start-->
         <section>
               <div class="subh">
                 
                        <img src="{{URL::asset('assets/images/subheaderbg.jpg')}}" >
                        <div class="top-left">
                           <h2>Events</h2>
                        </div>
               </div>
            </section>
         <!--Sub Header End--> 
         <!--Main Content Start-->
         <div class="main-content">
            <!--Events Start-->
            <div class="events-wrapper">
               <div class="container">
                   <div id="event_data">
					   @include('frontend/pages/eventdata')
				   </div>
                  </div>
               </div>
            </div>
            <!--Events End--> 
         </div>
         <!--Main Content End--> 
         @endsection       