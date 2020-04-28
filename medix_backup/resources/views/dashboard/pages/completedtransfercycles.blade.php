 @extends('dashboard.layouts.main')
@section('title')
  completed Transfer Cycles - CEB UNION
@endsection
@section('content')
            <div class="container-fluid" style="padding-bottom:0px;">
                                     <div class="row">
<div class="col-md-12">
			<div class="card">

				<h4 align="center" style="font-weight:500;font-size:20px;">Completed Transfer Cycles </h4>
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
				 <form action="/deleteallcycles"  method="post">
                                @csrf
                                @method('DELETE')
                                <button formaction="/deleteallcycles" class="btn btn-danger" type="submit" >Delete All Selected </button>
                                <table id="datatables" class="table table-striped table-no-bordered table-hover"  cellspacing="0" width="100%" style="width:100%" style="border: 1px solid black; ">
                                    <thead>
                                        <tr >
                                            <th scope="col">  <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="optionsCheckboxes"   class="selectall" >
                                                        </label>
                                                    </div>
                                               </th>
                                                <th scope="col">C ID</th>
                                                <th scope="col">Started At</th>
                                                <th scope="col">Ended At</th>
                                               
                                                <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($ctransfercycles as $transfercycle)
                                        <tr>
                                             <td> <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="ids[]"   class="selectbox" value="{{$transfercycle->c_id}}" >
                                                        </label>
                                                    </div> </td>
                                            <td>{{$transfercycle->c_id}}</td>
                                            <td>{{$transfercycle->started_at}}</td>
                                            <td>{{$transfercycle->ended_at}}</td>
                                           

                                          
                                            <td class="td-actions text-left">
                                                  <a href="{{route('transfer.cycleinfoview',$transfercycle->c_id)}}" type="button"><i class="material-icons btn-success">person</i></a>
                                                 <a href="{{action('TransferBoardController@getCycleInfo',$transfercycle->c_id)}}" onclick="return confirm('Are you sure you want to transfer?')" type="button" class="btn-success"><i class="material-icons btn-success ">transfer_within_a_station</i></a>
                                                   
                                                 <a href="{{route('transfer.deletecycle',$transfercycle->c_id)}}" onclick="return confirm('Are you sure you want to Delete?')" type="button"><i class="material-icons btn-danger">delete</i></a>
                                               
                                          

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