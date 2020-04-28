 @extends('dashboard.layouts.main')

@section('title')
  Transfer Request Info
@endsection
@section('content')
            <div class="container-fluid">
                                     <div class="row">
<div class="col-md-12">
	@foreach($requestsinfo as $requestinfo)
			<div class="card">
				<h4 align="center">Transfer Request Details - {{$requestinfo->t_ref_id}} {{$requestinfo->emp_id}} , {{$requestinfo->name}}</h4>
				  <form method="get" action="manage_member.html" class="form-horizontal">
					<!--div class="card-header card-header-text" data-background-color="rose">
						<h4 class="card-title"></h4>
					</div-->
					<div class="card-content">
						<div class="row">
							<label class="col-sm-2 label-on-left">Employee ID</label>

                         <div class="col-sm-10">
                            <div class="form-group label-floating is-empty">
                             <label class="control-label"></label>
                             <input type="text"  value="{{$requestinfo->emp_id}}"class="form-control" disabled>
                            
                         </div>
                     </div>
                 </div>
                 <div class="row">
                   <label class="col-sm-2 label-on-left">Employee Name</label>

                   <div class="col-sm-10">
                    <div class="form-group label-floating is-empty">
                     <label class="control-label"></label>
                     <input type="text" class="form-control" value="{{$requestinfo->name}}" disabled>
                     
                 </div>
             </div>
         </div>
         <div class="row">
           <label class="col-sm-2 label-on-left">Reference ID</label>

           <div class="col-sm-10">
            <div class="form-group label-floating is-empty">
             <label class="control-label"></label>
             <input type="text" class="form-control" value="{{$requestinfo->ref_id}}" disabled>
           
         </div>
     </div>
 </div>
 <div class="row">
   <label class="col-sm-2 label-on-left">Date Of Birth</label>

   <div class="col-sm-10">
    <div class="form-group label-floating is-empty">
     <label class="control-label"></label>
     <input type="text" class="form-control" value="{{$requestinfo->dob}}" disabled>
     
 </div>
</div>
</div>
<div class="row">
        <label class="col-sm-2 label-on-left">Present Work Station</label>
        <div class="col-sm-10">
         <div class="form-group label-floating is-empty">
          <label class="control-label"></label>
          <input type="text" class="form-control" value="{{$requestinfo->p_w_s}}" disabled>
          
      </div>
     </div>
</div>

     <div class="row">
        <label class="col-sm-2 label-on-left">Work Started Date</label>
     
        <div class="col-sm-10">
         <div class="form-group label-floating is-empty">
          <label class="control-label"></label>
          <input type="text" class="form-control" value="{{$requestinfo->r_d_f_p_w_s}}" disabled>
          
      </div>
     </div>
     </div>

<!--##########################################################-->



<div class="row">
   <label class="col-sm-2 label-on-left">Martitial Status</label>

   <div class="col-sm-10">
    <div class="form-group label-floating is-empty">
     <label class="control-label"></label>
     <input type="text"   value="{{$requestinfo->m_s}}" class="form-control" disabled>
    
 </div>
</div>
</div>
<div class="row">
   <label class="col-sm-2 label-on-left">Service Years</label>

   <div class="col-sm-10">
    <div class="form-group label-floating is-empty">
     <label class="control-label"></label>
     <input type="text" value="{{$requestinfo->years}}" class="form-control" disabled>
  
 </div>
</div>
</div>
<div class="row">
   <label class="col-sm-2 label-on-left">1 st preference</label>

   <div class="col-sm-10">
    <div class="form-group label-floating is-empty">
     <label class="control-label"></label>
     <input type="text" class="form-control"  value="{{$requestinfo->p_1}}" disabled>
     
 </div>
</div>
</div>
<div class="row">
   <label class="col-sm-2 label-on-left">2 nd preference</label>

   <div class="col-sm-10">
    <div class="form-group label-floating is-empty">
     <label class="control-label"></label>
     <input type="text" class="form-control"  value="{{$requestinfo->p_2}}" disabled>
     
 </div>
</div>
</div>
<div class="row">
   <label class="col-sm-2 label-on-left">3 rd preference</label>

   <div class="col-sm-10">
    <div class="form-group label-floating is-empty">
     <label class="control-label"></label>
     <input type="text" class="form-control"  value="{{$requestinfo->p_3}}" disabled>
     
 </div>
</div>
</div>

<div class="row">
    <label class="col-sm-2 label-on-left">Address</label>

    <div class="col-sm-10">
        <div class="form-group label-floating is-empty">
            <label class="control-label"></label>
            <input type="text" class="form-control" value="{{$requestinfo->address}}" disabled>
        
        </div>
    </div>
</div>


<div class="row">
    <label class="col-sm-2 label-on-left">Transfer Status</label>

    <div class="col-sm-10">
        <div class="form-group label-floating is-empty">
            <label class="control-label"></label>
            <span style="display: none;">{{ $status =$requestinfo->t_state }} </span>
            <input type="text" class="form-control" value="{{  $status== 1 ? 'Transfer Completed' : 'Transfer Not Completed' }}" disabled>

        </div>
    </div>
</div>




<a href="/admin/transfersboard/allrequests" class="btn btn-info pull-right">Back</a>


</div>
</form>
				
			</div>
		</div>
	</div>
</div>
@endforeach

		  @endsection