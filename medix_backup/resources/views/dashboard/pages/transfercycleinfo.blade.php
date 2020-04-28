 @extends('dashboard.layouts.main')
@section('title')
  Transfer Cycle Info -CEB UNION
@endsection
@section('content')
            <div class="container-fluid" style="padding-bottom:0px;">
                                     <div class="row">
<div class="col-md-12">
			<div class="card">

				<h4 align="center" style="font-weight:500;font-size:20px;">Transfer Cycle Information </h4>
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
    <?php if($c_state!=1){?>
            <div class="row">
                <div class="col-md-12">
                    <div class="container-fluid">
                    <div id="accordion" role="tablist">
  <div class="card card-collapse">
    <div class="card-header" role="tab" id="headingOne">
      <h5 class="mb-0">
        <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Request By First Preference in Cycle Started Point
          <i class="material-icons">keyboard_arrow_down</i>
        </a>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
         <form action="/recycleAll"  method="post">
                                @csrf
                               
                                <table id="datatables" class="table table-striped table-no-bordered table-hover"  cellspacing="0" width="100%" style="width:100%" style="border: 1px solid black; ">
                                    <thead>
                                        <tr >
                                           
                                                <th scope="col">TR No</th>
                                                <th scope="col">Emp No</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Present Work Station</th>
                                                 <th scope="col">Years</th>
                                                <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($requestdirectfromendpoint1 as $transferrequest1)
                                        <tr>
                                            
                                            <td>{{$transferrequest1->t_ref_id}}</td>
                                            <td>{{$transferrequest1->emp_id}}</td>
                                            <td>{{$transferrequest1->name}}</td>
                                            <td>{{$transferrequest1->p_w_s}}</td>
                                            <td>{{$transferrequest1->years}}</td>

                                          
                                            <td class="td-actions text-left">
                                                  <a href="{{route('transfer.requestinfo',$transferrequest1->t_ref_id)}}" type="button"><i class="material-icons btn-success">person</i></a>
                                                 <a href="{{action('TransferBoardController@transferInfoProfile',$transferrequest1->t_ref_id)}}" onclick="return confirm('Are you sure you want to transfer?')" type="button" class="btn-success"><i class="material-icons btn-success ">transfer_within_a_station</i></a>
                                               
                                            </td>
                                        </tr>
                                        @endforeach
                                     
                                      
                                    
                                    
                                    </tbody>
                                </table>
                            </form>
      </div>
    </div>
  </div>
  <div class="card card-collapse">
    <div class="card-header" role="tab" id="headingTwo">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Request By Second Preference in Cycle Started Point
          <i class="material-icons">keyboard_arrow_down</i>
        </a>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
         <form action="/recycleAll"  method="post">
                                @csrf
                               
                                <table id="datatables" class="table table-striped table-no-bordered table-hover"  cellspacing="0" width="100%" style="width:100%" style="border: 1px solid black; ">
                                    <thead>
                                        <tr >
                                           
                                                <th scope="col">TR No</th>
                                                <th scope="col">Emp No</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Present Work Station</th>
                                                 <th scope="col">Years</th>
                                                <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($requestdirectfromendpoint2 as $transferrequest2)
                                        <tr>
                                            
                                            <td>{{$transferrequest2->t_ref_id}}</td>
                                            <td>{{$transferrequest2->emp_id}}</td>
                                            <td>{{$transferrequest2->name}}</td>
                                            <td>{{$transferrequest2->p_w_s}}</td>
                                            <td>{{$transferrequest2->years}}</td>

                                          
                                            <td class="td-actions text-left">
                                                  <a href="{{route('transfer.requestinfo',$transferrequest2->t_ref_id)}}" type="button"><i class="material-icons btn-success">person</i></a>
                                                 <a href="{{action('TransferBoardController@transferInfoProfile',$transferrequest2->t_ref_id)}}" onclick="return confirm('Are you sure you want to transfer?')" type="button" class="btn-success"><i class="material-icons btn-success ">transfer_within_a_station</i></a>
                                               
                                            </td>
                                        </tr>
                                        @endforeach
                                     
                                      
                                    
                                    
                                    </tbody>
                                </table>
                            </form>
      </div>
    </div>
  </div>
  <div class="card card-collapse">
    <div class="card-header" role="tab" id="headingThree">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Request By Third Preference in Cycle Started Point
          <i class="material-icons">keyboard_arrow_down</i>
        </a>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
         <form action="/recycleAll"  method="post">
                                @csrf
                               
                                <table id="datatables" class="table table-striped table-no-bordered table-hover"  cellspacing="0" width="100%" style="width:100%" style="border: 1px solid black; ">
                                    <thead>
                                        <tr >
                                           
                                                <th scope="col">TR No</th>
                                                <th scope="col">Emp No</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Present Work Station</th>
                                                 <th scope="col">Years</th>
                                                <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($requestdirectfromendpoint3 as $transferrequest3)
                                        <tr>
                                            
                                            <td>{{$transferrequest3->t_ref_id}}</td>
                                            <td>{{$transferrequest3->emp_id}}</td>
                                            <td>{{$transferrequest3->name}}</td>
                                            <td>{{$transferrequest3->p_w_s}}</td>
                                            <td>{{$transferrequest3->years}}</td>

                                          
                                            <td class="td-actions text-left">
                                                  <a href="{{route('transfer.requestinfo',$transferrequest3->t_ref_id)}}" type="button"><i class="material-icons btn-success">person</i></a>
                                                 <a href="{{action('TransferBoardController@transferInfoProfile',$transferrequest3->t_ref_id)}}" onclick="return confirm('Are you sure you want to transfer?')" type="button" class="btn-success"><i class="material-icons btn-success ">transfer_within_a_station</i></a>
                                               
                                            </td>
                                        </tr>
                                        @endforeach
                                     
                                      
                                    
                                    
                                    </tbody>
                                </table>
                            </form>
      </div>
    </div>
  </div>
  <div class="card card-collapse">
    <div class="card-header" role="tab" id="headingFour">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          Requests From Cycle End point to  another Depo
          <i class="material-icons">keyboard_arrow_down</i>
        </a>
      </h5>
    </div>
    <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
      <div class="card-body">
         <form action="/recycleAll"  method="post">
                                @csrf
                               
                                <table id="datatables" class="table table-striped table-no-bordered table-hover"  cellspacing="0" width="100%" style="width:100%" style="border: 1px solid black; ">
                                    <thead>
                                        <tr >
                                           
                                                <th scope="col">TR No</th>
                                                <th scope="col">Emp No</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Present Work Station</th>
                                                 <th scope="col">Years</th>
                                                <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($requestdirectfromendpointother as $transferrequestother)
                                        <tr>
                                            
                                            <td>{{$transferrequestother->t_ref_id}}</td>
                                            <td>{{$transferrequestother->emp_id}}</td>
                                            <td>{{$transferrequestother->name}}</td>
                                            <td>{{$transferrequestother->p_w_s}}</td>
                                            <td>{{$transferrequestother->years}}</td>

                                          
                                            <td class="td-actions text-left">
                                                  <a href="{{route('transfer.requestinfo',$transferrequestother->t_ref_id)}}" type="button"><i class="material-icons btn-success">person</i></a>
                                                 <a href="{{action('TransferBoardController@transferInfoProfile',$transferrequestother->t_ref_id)}}" onclick="return confirm('Are you sure you want to transfer?')" type="button" class="btn-success"><i class="material-icons btn-success ">transfer_within_a_station</i></a>
                                               
                                            </td>
                                        </tr>
                                        @endforeach
                                     
                                      
                                    
                                    
                                    </tbody>
                                </table>
                            </form>
      </div>
    </div>
  </div>
</div>
                    </div>
                </div>
            </div>

            <?php }?>

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