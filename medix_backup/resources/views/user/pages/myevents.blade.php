 @extends('user.layouts.main')
@section('title')
  User -My Events
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
                <h4 class="card-title">Event Details</h4>
                
                     <form action=""  method="post">
                              
                    <table id="datatables" class="table table-striped table-no-bordered table-hover"  cellspacing="0" width="100%" style="width:100%" style="border: 1px solid black; ">
                        <thead>
                            <tr >
                               
                                    <th scope="col">ID</th>
                                    <th scope="col">Heading</th>
                                
                                    <th scope="col">Short Description</th>
                                    <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach($myevents as $event)
                                <tr>
                                       
                                        <th scope="row">{{$event->id}}</th>
									<td> {{$event->header_title}}</td>
                                        <td>
                                            <p>{{$event->short_desc}}</p>
                                        </td>
                                        <td class="td-actions text-left">
                                                <a type="button" class="btn btn-info" href="" ><i class="material-icons">person</i></a>
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


@endsection
