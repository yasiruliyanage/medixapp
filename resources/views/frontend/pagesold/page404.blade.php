@extends('frontend.layouts.front')
@section('content')
      <!-- Page 404 Start -->
      <div class="page-404">
         <div class="wrap-404">
            <strong class="title-404">404</strong>
            <h2>Ooops!</h2>
            <h3>Page Not Found.</h3>
            <p>The Requested Page Can’t be Found</p>
            <div class="search">
               <strong> Search</strong>
               <form class="search-form">
                  <input type="text" class="form-control" placeholder="Search">
                  <button type="submit" class="btn"><i class="fas fa-search"></i></button>
               </form>
               <a class="back" href="index.html"><i class="fas fa-home"></i> Back to Home</a> 
            </div>
         </div>
      </div>
      <!-- Page 404 End -->
      @endsection    