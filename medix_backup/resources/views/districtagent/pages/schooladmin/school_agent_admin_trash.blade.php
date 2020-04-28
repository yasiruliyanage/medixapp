  @extends('districtagent.layouts.main')
@section('title')
  Home-Manage  School Agents CTSU
@endsection
@section('content')
<?php $nav = 'school_admin'; ?>
            <div class="container-fluid">
                                     <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-icon" data-background-color="rose">
                            <i class="material-icons">assignment</i>
                        </div>
                       @if($message = Session::get('success'))
                          <div class="alert alert sucess">
                            {{$message}}

                        </div>
                      


                        @endif
                        
                         <div class="card-content">
                            <h4 class="card-title">Deleted School Agents</h4>
                            
                              <form action="/deleteall"  method="post">
                                @csrf
                                @method('DELETE')
                                <button formaction="/deleteall" class="btn btn-danger" type="submit" onclick="return confirm('Are you sure you want to Delete?')" >Delete All Selected </button>
                                <button formaction="/restoreall" class="btn btn-danger" type="submit" onclick="return confirm('Are you sure you want to Restore?')">Restore All Selected </button>
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
                                                <th scope="col">Photo</th>
                                                <th scope="col">Reg ID</th>
                                                <th scope="col">Paysheet No</th>
                                                <th scope="col">First Name</th>
                                                
                                                <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($agents as $member)
                                        <tr>
                                             
                                             <td> <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="ids[]"   class="selectbox" value="{{$member->id}}" >
                                                        </label>
                                                    </div> </td>
                                            <td>{{$member->id}}</td>
                                            <td>
                                                <img class="memphoto" style="width:30px;height:30px;"  src="{{URL::to('/')}}/schoolagents/profileimg/{{$member->profile_img}}" alt="" border=3></img>
                                            </td>
                                            <td>{{$member->reg_id}}</td>
                                            <td>{{$member->ps_number}}</td>
                                            <td>{{$member->name}}</td>
                                            <td class="td-actions text-left">
                                               
                                                
                                                 <a href="{{route('schoolagent.restore',$member->id)}}" onclick="return confirm('Are you sure you want to restore?')" type="button"><i class="material-icons btn-primary">restore_page</i></a>
                                              

                                                 <button type="submit" formaction="{{action('SchoolAgentAdminController@destroy',$member->id)}}" onclick="return confirm('Are you sure you want to Delete?')" ><i class="material-icons  btn btn-danger ">delete</i> </button>
                                          

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
            <script type="text/javascript">
    $(document).ready(function() {
        $('#datatables').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            responsive: true,
            language: {
            search: "_INPUT_",
            searchPlaceholder: "Search records",
            }

        });


        var table = $('#datatables').DataTable();

        // Edit record
        table.on( 'click', '.edit', function () {
            $tr = $(this).closest('tr');

            var data = table.row($tr).data();
            alert( 'You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.' );
        } );

        // Delete a record
        table.on( 'click', '.remove', function (e) {
            $tr = $(this).closest('tr');
            table.row($tr).remove().draw();
            e.preventDefault();
        } );

        //Like record
        table.on( 'click', '.like', function () {
            alert('You clicked on Like button');
        });

        $('.card .material-datatables label').addClass('form-group');
    });

    </script>
            @endsection
        
