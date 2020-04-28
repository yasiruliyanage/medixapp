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
                
                      <a href="{{route('group.add')}}" type="button" class="btn btn-primary center-block">Create New Group</a>
                     <form action="/recycleAllgroups"  method="post">
                                @csrf
                                @method('DELETE')
                    <table id="datatables" class="table table-striped table-no-bordered table-hover"  cellspacing="0" width="100%" style="width:100%" style="border: 1px solid black; ">
                        <thead>
                            <tr >
								<th>No</th>
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
									<td></td>
                                        <td> <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="ids[]"   class="selectbox" value="{{$group->id}}" >
                                                        </label>
                                                    </div> </td>
                                        <th scope="row">{{$group->id}}</th>
                                        <td>{{$group->groupname}}</td>
                                        <td class="td-actions text-left">
                                              
                                               <a href="{{action('GroupsController@edit',$group->id)}}" type="button"><i class="material-icons btn-primary">create</i></a>
                                               
                                                   <a type="button" class="btn btn-info" href="{{route('group.show',$group->id)}}" ><i class="material-icons">person</i></a>

                                                     <a type="button" class="btn btn-danger" href="{{route('group.recycle',$group->id)}}" onclick="return confirm('Are you sure you want to Delete?')"  ><i class="material-icons">delete</i></a>
                                              
                                         </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                      <button formaction="/recycleAllgroups" class="btn btn-danger" type="submit" onclick="return confirm('Are you sure you want to Delete?')" >Delete All Selected </button>
                </form>
               
            </div>
        </div>
        
    </div>
    
    
    
    
    </div>
    
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
