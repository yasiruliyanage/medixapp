@extends('frontend.layouts.front')
@section('title')
News
@endsection
@section('content')
         <!--Sub Header Start-->
         <section>
               <div class="subh">
                 
                        <img src="{{URL::asset('assets/images/subheaderbg.jpg')}}" >
                        <div class="top-left">
                           <h2>News</h2>
                        </div>
                 
                  
                  
               </div>
            </section>
         <!--Sub Header End--> 
         <!--Main Content Start-->
         <div class="main-content p80">
            <!--Events Start-->
            <div class="news-wrapper news-grid">
               <div class="container">
                <div id="news_data">
					@include('frontend/pages/newsdata')
				   </div>
                
               </div>
            </div>
            <!--Events End--> 
         </div>
         @endsection    