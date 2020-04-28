 @extends('dashboard.layouts.main')
@section('title')
  Home-Manage Designation Medix
@endsection
@section('content')


        
        <div class="content">
                <div class="container-fluid">
                         <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-icon" data-background-color="rose">
                <i class="material-icons">business</i>
            </div>
    
            <div class="card-content">
                <h4 class="card-title">Designations</h4>
                
                      <!--a href="{{route('workplace.add')}}" type="button" class="btn btn-primary pull-right">Create New Work Place</a-->
                     <form action="/deleteallhospitaldesignations"  method="post">
                                @csrf
                                @method('DELETE')
						  <a href="{{route('subject.add')}}" type="button" class="btn btn-primary center-block">Create New Designation</a>
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
                                    <th scope="col">Designation name</th>
                                    <th scope="col">Users</th>

                                    
                                    <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                             @foreach($subjects as $subject)
                                <tr>

									<td></td>
                                        <td> <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="ids[]"   class="selectbox" value="{{$subject->id}}" >
                                                        </label>
                                                    </div> </td>

                                        <th scope="row">{{$subject->id}}</th>
                                        <th scope="row">{{$subject->subname}}</th>
                                         <td>{{$subject->t_count}}</td>
                                      
                                        <td class="td-actions text-left">
                                              
                                               <a href="{{action('SubjectController@edit',$subject->id)}}" type="button"><i class="material-icons btn-primary">create</i></a>
                                              
                                                 <button type="submit" formaction="{{action('SubjectController@destroy',$subject->id)}}" onclick="return confirm('Are you sure you want to Delete?')" ><i class="material-icons  btn btn-danger ">delete</i> </button>
                                         </td>
                                        
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                      <button formaction="/deleteallsubject" class="btn btn-danger" type="submit" onclick="return confirm('Are you sure you want to Delete?')" >Delete All Selected </button>
                </form>
                
            </div>
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
