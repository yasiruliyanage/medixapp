 @extends('user.layouts.main')
@section('title')
 Covid19 meter result
@endsection
@section('content')

<div class="col-md-12">
  <div class="col-md-12">
    
   <div class="card">
    <h4 align="center">Meter Results</h4>
       
          <!--div class="card-header card-header-text" data-background-color="rose">
            <h4 class="card-title"></h4>
          </div-->
          <div class="card-content">
          <div class="card card-nav-tabs">
  <div class="card-header card-header-warning">
   
  </div>

<?php if($state=='normal'){?>

 <div class="progress-container progress-primary">
    
    <div class="progress">
        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{$predict_percentage}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$predict_percentage}}%;">
        </div>
    </div>
</div>
 
    <div class="alert alert-success" role="alert" style="font-size: 60px;">
  <center>{{$predict_percentage}}</center>
</div>
      <div class="alert alert-success" role="alert" style="font-size:55px;">
 <center> {{$decession}}</center>
</div>

<?php }else if($state=='OPD'){?>

 <div class="progress-container progress-primary">
   
    <div class="progress">
        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="{{$predict_percentage}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$predict_percentage}}%;">
        </div>
    </div>
</div>
    <div class="alert alert-info" role="alert" style="font-size: 60px;">
  <center>{{$predict_percentage}}</center>
</div>
      <div class="alert alert-info" role="alert" style="font-size:55px;">
 <center> {{$decession}}</center>
</div>
<?php }else if($state == 'selfquarantine'){?>

 <div class="progress-container progress-primary">
   
    <div class="progress">
        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="{{$predict_percentage}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$predict_percentage}}%;">
        </div>
    </div>
</div>
    <div class="alert alert-warning" role="alert" style="font-size: 60px;">
  <center>{{$predict_percentage}}</center>
</div>
      <div class="alert alert-warning" role="alert" style="font-size:55px;">
 <center> {{$decession}}</center>
</div>

<?php }else if($state == 'covid19positive'){?>
<div class="progress-container progress-primary">
   
    <div class="progress">
        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="{{$predict_percentage}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$predict_percentage}}%;">
        </div>
    </div>
</div>
 <div class="alert alert-danger" role="alert" style="font-size: 60px;">
  <center>{{$predict_percentage}}</center>
</div>
      <div class="alert alert-danger" role="alert" style="font-size:55px;">
 <center> {{$decession}}</center>
</div>
<?php }?>
   
    <a href="{{route('covid19meterinterview')}}" class="btn btn-primary">Save and Create New</a>
  </div>
</div> 
       



  





</div>
</div>
</div>

@endsection