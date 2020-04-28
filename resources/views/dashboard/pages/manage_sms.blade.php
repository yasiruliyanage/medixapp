 @extends('dashboard.layouts.main')
@section('title')
  Home-Manage News CEB UNION
@endsection
@section('content')

<script type="text/javascript">
   
</script>
        
        <div class="content">
                <div class="container-fluid">
                         <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-icon" data-background-color="rose">
                <i class="material-icons">assignment</i>
            </div>
    
            <div class="card-content">
                <h4 class="card-title"> Send Group Message Details </h4>
                
                      
                     <form action="/deleteall"  method="post">
                                @csrf
                                @method('DELETE')
                    <table id="datatables2" class="table table-striped table-no-bordered table-hover"  cellspacing="0" width="100%" style="width:100%" style="border: 1px solid black; ">
                        <thead>
                            <tr >
                                <th scope="col">No</th>
                                <th scope="col">  <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="optionsCheckboxes"   class="selectall" >
                                                        </label>
                                                    </div>
                                               </th>
									                  
                                    <th scope="col">Group ID</th>
                                    <th scope="col">Group Name</th>
                                    <th scope="col">Msg Body</th>
                                    <th scope="col">Sent Date</th>
                                    <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                             @foreach($groupmessages as $groupmessage )

                                <tr>
                                        <td></td>
                                        <td> <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="ids[]"   class="selectbox" value="{{$groupmessage->group_id}}" >
                                                        </label>
                                                    </div> </td>
									                      
                                        <th scope="row">{{$groupmessage->group_id}}</th>
                                        <td>{{$groupmessage->group_name}}</td>
                                            <td>{{$groupmessage->msg_body}}</td>
                                                <td>{{$groupmessage->created_at}}</td>
                                        <td class="td-actions text-left">
                                              
                                               <!--a href="{{action('GroupsController@edit',$groupmessage->group_id)}}" type="button"><i class="material-icons btn-primary">create</i></a>
                                               -->
                                                   
                                              
                                                 <button type="submit" formaction="{{action('GroupsController@destroy',$groupmessage->group_id)}}" onclick="return confirm('Are you sure you want to Delete?')" ><i class="material-icons  btn btn-danger ">delete</i> </button>
                                         </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                      <button formaction="/deleteall" class="btn btn-danger" type="submit" onclick="return confirm('Are you sure you want to Delete?')" >Delete All Selected </button>
                </form>
                
            </div>
        </div>
        
    </div>
    
    
    
    
    </div>

    <!--send single & all messeges-->
    <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-icon" data-background-color="rose">
                <i class="material-icons">assignment</i>
            </div>
    
            <div class="card-content">
                <h4 class="card-title"> Send Single Message Details </h4>
              
                     
                     <form action="/deleteall"  method="post">
                                @csrf
                                @method('DELETE')
                    <table id="datatables" class="table table-striped table-no-bordered table-hover"  cellspacing="0" width="100%" style="width:100%" style="border: 1px solid black; ">
                        <thead>
                            <tr >
                                <th scope="col">  <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="optionsCheckboxes"   class="selectall" >
                                                        </label>
                                                    </div>
                                               </th>
								<th scope="col">No</th>
                                    <th scope="col">Msg ID</th>
                                     <th scope="col">Name</th>
                                      <th scope="col">Mobile </th>
                                    <th scope="col">Msg Body</th>
                                    <th scope="col">Sent Date</th>
                                    <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                             @foreach($singlemesseges as $singlemessege)
                                <tr>
                                        <td> <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="ids[]"   class="selectbox" value="{{$singlemessege->msg_id}}" >
                                                        </label>
                                                    </div> </td>
									<td></td>
                                        <th scope="row">{{$singlemessege->msg_id}}</th>
                                        <td>{{$singlemessege->recivername}}</td>
                                        <td>{{$singlemessege->mobile_number}}</td>
                                        <td>{{$singlemessege->msg_body}}</td>
                                        <td>{{$singlemessege->created_at}}</td>
                                        <td class="td-actions text-left">
                                              
                                               <!--a href="{{action('GroupsController@edit',$singlemessege->msg_id)}}" type="button"><i class="material-icons btn-primary">create</i></a>
                                               -->
                                                
                                              
                                                 <button type="submit" formaction="{{action('GroupsController@destroy',$singlemessege->msg_id)}}" onclick="return confirm('Are you sure you want to Delete?')" ><i class="material-icons  btn btn-danger ">delete</i> </button>
                                         </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                      <button formaction="/deleteall" class="btn btn-danger" type="submit" onclick="return confirm('Are you sure you want to Delete?')" >Delete All Selected </button>
                </form>
                
            </div>
        </div>
        
    </div>
    
    
    
    
    </div>
    <!--end single& all messeges-->
    
                </div>
            </div>
            

<script type="text/javascript">
            
          var table = document.getElementsByTagName('table')[0],
        rows = table.getElementsByTagName('tr'),
        text = 'textContent' in document ? 'textContent' : 'innerText';
      console.log(text);
        for (var i = 1, len = rows.length; i < len; i++){
            rows[i].children[0][text] = i + rows[i].children[0][text];
        }
        </script>

@endsection
