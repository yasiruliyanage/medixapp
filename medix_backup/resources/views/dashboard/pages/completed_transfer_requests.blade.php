 @extends('dashboard.layouts.main')
@section('title')
  All Transfer Requests-CEB UNION
@endsection
@section('content')
            <div class="container-fluid" style="padding-bottom:0px;">
                                     <div class="row">
<div class="col-md-12">
			<div class="card">

				<h4 align="center" style="font-weight:500;font-size:20px;">Completed Transfer Requests </h4>
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
				 <form action="/recycleAll"  method="post">
                                @csrf
                                @method('DELETE')
                                <button formaction="/deletealltransferrequests" class="btn btn-danger" type="submit" >Delete All Selected </button>
                                <table id="datatables" class="table table-striped table-no-bordered table-hover"  cellspacing="0" width="100%" style="width:100%" style="border: 1px solid black; ">
                                    <thead>
                                        <tr >
                                            <th scope="col">  <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="optionsCheckboxes"   class="selectall" >
                                                        </label>
                                                    </div>
                                               </th>
                                                <th scope="col">TR No</th>
                                                <th scope="col">Emp No</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Present Work Station</th>
                                                 <th scope="col">Years</th>
                                                <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($transferrequests as $transferrequest)
                                        <tr>
                                             <td> <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="ids[]"   class="selectbox" value="{{$transferrequest->t_ref_id}}" >
                                                        </label>
                                                    </div> </td>
                                            <td>{{$transferrequest->t_ref_id}}</td>
                                            <td>{{$transferrequest->emp_id}}</td>
                                            <td>{{$transferrequest->name}}</td>
                                            <td>{{$transferrequest->p_w_s}}</td>
                                            <td>{{$transferrequest->years}}</td>

                                          
                                            <td class="td-actions text-left">
                                                  <a href="{{route('transfer.requestinfo',$transferrequest->t_ref_id)}}" type="button"><i class="material-icons btn-success">person</i></a>
                                                 <a href="{{action('TransferBoardController@transferInfoProfile',$transferrequest->t_ref_id)}}" onclick="return confirm('Are you sure you want to transfer?')" type="button" class="btn-success"><i class="material-icons btn-success ">transfer_within_a_station</i></a>
                                                    <a href="{{action('TransferBoardController@getedittransferrequest',$transferrequest->t_ref_id)}}" type="button"><i class="material-icons btn-primary">create</i></a>

                                                 <a href="{{route('transfer.deleteimported',$transferrequest->t_ref_id)}}" onclick="return confirm('Are you sure you want to Delete?')" type="button"><i class="material-icons btn-danger">delete</i></a>
                                               
                                          

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
<script>
function myFunction() {
  document.getElementById("myfrm").reset();
}
</script>
		  @endsection