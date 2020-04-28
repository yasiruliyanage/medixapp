  @extends('dashboard.layouts.main')
@section('title')
  Home-Manage admins Items CEB UNION
@endsection
@section('content')
            <div class="container-fluid">
                                     <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-icon" data-background-color="rose">
                            <i class="material-icons">cloud_download</i>
                        </div>
                       @if($message = Session::get('success'))
                          <div class="alert alert sucess">
                            {{$message}}

                        </div>
                      


                        @endif
                        
                         <div class="card-content">
                            <h4 class="card-title">Downloads</h4>
                           
                              <form action="/recycleAlldownloads"  method="post">
                                @csrf
                              
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
                                                <th scope="col">Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($admins as  $admin) {

                                         $adminid=Auth::user()->id;

                                        if($admin->id==$adminid){

                                        }else{
                                            ?>
                                       <tr>
                                             <td> <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="ids[]"   class="selectbox" value="{{$admin->id}}" >
                                                        </label>
                                                    </div> </td>
                                            <td>{{$admin->id}}</td>
                                             <td>{{$admin->name}}</td>
                                             <td>{{$admin->email}}</td>
                                          
                                           
                                            
                                            

                                           
                                            <td class="td-actions text-left">
                                               
                                              
                                                 <a href="{{action('AdminManagerController@edit',$admin->id)}}" type="button"><i class="material-icons btn-primary">create</i></a>
                                                
                                               
                                          

                                            </td>
                                        </tr>

                                       <?php }

                                        
                                         
                                     }?>
                                       
                                     
                                      
                                    
                                    
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
        
