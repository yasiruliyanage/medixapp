 @extends('dashboard.layouts.main')

@section('title')
  Profile - Manage Downloads CEB UNION
@endsection
@section('content')
            <div class="container-fluid">
                                     <div class="row">
<div class="col-md-12">
	@foreach($downloads as $download)
			<div class="card">
				<h4 align="center">Download Item Details - {{$download->name}} </h4>
				  <form method="get"  class="form-horizontal">
					<!--div class="card-header card-header-text" data-background-color="rose">
						<h4 class="card-title"></h4>
					</div-->
					<div class="card-content">
						
                 <div class="row">
                   <label class="col-sm-2 label-on-left"> Name</label>

                   <div class="col-sm-10">
                    <div class="form-group label-floating is-empty">
                     <label class="control-label"></label>
                     <input type="text" class="form-control" value="{{$download->description}}" disabled>
                     
                 </div>
             </div>
         </div>
     


<!--##########################################################-->





<div class="row">
   <label class="col-sm-2 label-on-left">Description</label>

   <div class="col-sm-10">
    <div class="form-group label-floating is-empty">
     <label class="control-label"></label>
     <input type="text" class="form-control"  value="{{$download->description}}" disabled>
     
 </div>
</div>




<a href="/admin/downloaditems" class="btn btn-info pull-right">Back</a>


</div>
</form>
				
			</div>
		</div>
	</div>
</div>
@endforeach

		  @endsection