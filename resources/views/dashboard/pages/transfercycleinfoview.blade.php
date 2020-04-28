 @extends('dashboard.layouts.main')
@section('title')
  Transfer Cycle Info -CEB UNION
@endsection
@section('content')
            <div class="container-fluid" style="padding-bottom:0px;">
                                     <div class="row">
<div class="col-md-12">
			<div class="card">

				<h4 align="center" style="font-weight:500;font-size:20px;">Transfer Cycle Information Cycle Id {{$cycle_id}} </h4>
                
                
                <div class="row">
                    <div class="container-fluid">
                    <div class="col-md-3">
                        <h4 align="left" style="font-weight:400;font-size:16px;">Cycle Started Point </h4>
                        <h4 align="left" style="font-weight:400;font-size:16px;">Cycle End Point  </h4>
                        <h4 align="left" style="font-weight:400;font-size:16px;">Total Transfered:  </h4>
                        <h4 align="left" style="font-weight:400;font-size:16px;">Transfer Cycle Status:  </h4>
                    </div>
                     <div class="col-md-9">
                       <h4 align="left" style="font-weight:500;font-size:16px;color:red;">{{$s_point}} </h4>
                        <h4 align="left" style="font-weight:500;font-size:16px;color:red;">{{$e_point}} </h4>
                        <h4 align="left" style="font-weight:500;font-size:16px;color:red;">{{$t_p_c}} employees</h4>
                        <h4 align="left" style="font-weight:500;font-size:16px;color:red;"> <span style="display: none;">{{ $cstatus =$c_state}} </span> 
                        {{  $cstatus== 1 ? 'Transfer Cycle Completed' : 'Transfer Cycle Not Completed' }} </h4>
                    </div>
                </div>
                </div>
				@if($message = Session::get('danger'))
				  <div class="alert alert-danger">
				  	<strong>{{$message}}</strong>
				  </div>


				@endif
				@if($message = Session::get('success'))
				  <div class="alert alert-success">
				  	<strong>{{$message}}</strong>
				  </div>
				@endif

     
		     
			<div class="row">
				<div class="col-md-12">
					<div class="container-fluid">
			
                                <table id="datatables" class="table table-striped table-no-bordered table-hover"  cellspacing="0" width="100%" style="width:100%" style="border: 1px solid black; ">
                                    <thead>
                                        <tr >   
                                                <th scope="col">Order</th>
                                                <th scope="col">CI ID</th>
                                                <th scope="col">Refrence No</th>
                                                <th scope="col">Emp No</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Transferd From</th>
                                                <th scope="col">Transfered To</th>
                                                <th scope="col">Reason</th>
                                                <th scope="col">Transfer Note</th>
                                               
                                                
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($transfercyclerecords as $transfercyclerecord)
                                        <tr>
                                            <td>{{$transfercyclerecord->t_order}}</td>
                                            <td>{{$transfercyclerecord->ci_id}}</td>
                                            <td>{{$transfercyclerecord->t_ref_id}}</td>
                                            <td>{{$transfercyclerecord->emp_no}}</td>
                                            <td>{{$transfercyclerecord->name}}</td>
                                            <td>{{$transfercyclerecord->t_from}}</td>
                                            <td>{{$transfercyclerecord->t_to}}</td>
                                            <td>{{$transfercyclerecord->t_reason}}</td>
                                            <td>{{$transfercyclerecord->s_reason}}</td>
                                           
                                        </tr>
                                        @endforeach
                                     
                                      
                                    
                                    
                                    </tbody>
                                </table>
                           
				
			</div>
			</div>
			</div>
			</div>
		</div>
	</div>
</div>
<script>
function myFunction() {
  document.getElementById("myfrm").reset();
}
</script>
		  @endsection