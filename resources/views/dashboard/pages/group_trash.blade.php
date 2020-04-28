 @extends('dashboard.layouts.main')
@section('title')
  Home-Manage News CEB UNION
@endsection
@section('content')


        
        <div class="content">
                <div class="container-fluid">
                         <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-icon" data-background-color="rose">
                <i class="material-icons">assignment</i>
            </div>
    
            <div class="card-content">
                <h4 class="card-title">Groups </h4>
               
                      <!--a href="{{route('group.add')}}" type="button" class="btn btn-primary pull-right">Create New Group</a-->
                     <form action="/deleteallgroups"  method="post">
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

                                    <th scope="col">ID</th>
                                    <th scope="col">Group name</th>
                                    <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                             @foreach($groups as $group)
                                <tr>
                                       
                                        <td> <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="ids[]"   class="selectbox" value="{{$group->id}}" >
                                                        </label>
                                                    </div> </td>
                                        <th scope="row">{{$group->id}}</th>
                                        <td>{{$group->groupname}}</td>
                                        <td class="td-actions text-left">
                                              
                                               
                                            
                                                   <a type="button" class="btn btn-info" href="{{route('group.restore',$group->id)}}" onclick="return confirm('Are you sure you want to restore?')" ><i class="material-icons">restore_page</i></a>
                                              
                                                 <button type="submit" formaction="{{action('GroupsController@destroy',$group->id)}}" onclick="return confirm('Are you sure you want to Delete?')" ><i class="material-icons  btn btn-danger ">delete</i> </button>
                                         </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                      <button formaction="/deleteallgroups" class="btn btn-danger" type="submit" onclick="return confirm('Are you sure you want to Delete?')" >Delete All Selected </button>
                        <button formaction="/restoreallgroups" class="btn btn-danger" type="submit" onclick="return confirm('Are you sure you want to Restore?')" >Restore All Selected </button>
                </form>
                
            </div>
        </div>
        
    </div>
    
    
    
    
    </div>
    
                </div>
            </div>


@endsection
