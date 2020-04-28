 @extends('divisionagent.layouts.main')
@section('title')
  Home-Manage Departments Medix
@endsection
@section('content')
<?php $nav = 'covid19meter'; ?>

        
        <div class="content">
                <div class="container-fluid">
                         <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-icon" data-background-color="rose">
                <i class="material-icons">business</i>
            </div>
    
            <div class="card-content">
                <h4 class="card-title">Departments </h4>
                
                      <!--a href="{{route('workplace.add')}}" type="button" class="btn btn-primary pull-right">Create New Work Place</a-->
                     <form action="/deleteallhospitaldepartments"  method="post">
                                @csrf
                                @method('DELETE')
						  <a href="{{route('divschools.add')}}" type="button" class="btn btn-primary center-block">Create New Department</a>
                    <table id="datatables" class="table table-striped table-no-bordered table-hover"  cellspacing="0" width="100%" style="width:100%" style="border: 1px solid black; ">
                        <thead>
                            <tr>
								<th>No</th>
                                <th scope="col"> 
                                 <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="optionsCheckboxes"   class="selectall" >
                                                        </label>
                                 </div>
                                               </th>
                                    <th scope="col">ID</th>
                                    <th scope="col">Department Name</th>
                                    <th scope="col">Users</th>
                                    
                                    <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                             @foreach($schools as $school)
                                <tr>
									<td></td>
                                     <td>
                                      <div class="checkbox">
                                      <label>
                                        <input type="checkbox" name="ids[]"   class="selectbox" value="{{$school->id}}" >
                                      </label>
                                       </div> 
                                       </td>
                                        <th scope="row" >{{$school->id}}</th>
                                        <td>{{$school->placename}}</td>
                                         <td>{{$school->t_count}}</td>
                                        <td class="td-actions text-left">
                                               <a href="{{action('Divisionagent\DivisionSchoolController@edit',$school->id)}}" type="button"><i class="material-icons btn-primary">create</i></a>
                                              
                                                 <button type="submit" formaction="{{action('Divisionagent\DivisionSchoolController@destroy',$school->id)}}" onclick="return confirm('Are you sure you want to Delete?')" ><i class="material-icons  btn btn-danger ">delete</i> </button>
                                         </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                      <button formaction="/deleteallhospitaldepartment" class="btn btn-danger" type="submit" onclick="return confirm('Are you sure you want to Delete?')" >Delete All Selected </button>
                </form>
                
            </div>
        </div>
        
    </div>
    
    
    
    
    </div>
    
                </div>
            </div>


@endsection
