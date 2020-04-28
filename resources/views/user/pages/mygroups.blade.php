 @extends('user.layouts.main')
@section('title')
  User -User groups CEB UNION
@endsection
@section('content')

<script type="text/javascript">
   
</script>
        
        <div class="content">
                <div class="container-fluid">
    <!--send single & all messeges-->
    <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-icon" data-background-color="rose">
                <i class="material-icons">assignment</i>
            </div>
    
            <div class="card-content">
                <h4 class="card-title"> My Groups </h4>
              
                   
                    <table id="datatables" class="table table-striped table-no-bordered table-hover"  cellspacing="0" width="100%" style="width:100%" style="border: 1px solid black; ">
                        <thead>
                            <tr >
                               
								<th scope="col">No</th>
                                    <th scope="col">Group ID</th>
                               
                                    <th scope="col">Group Name</th>
                                   
                                  
                            </tr>
                        </thead>
                        <tbody>
                             @foreach($groups as $group)
                                <tr>
									<td></td>
                                        <th scope="row">{{$group->group_id}}</th>
                                        <td> 
										<span style="display: none;">{{ $oldgroup =$group->group_id }} </span>
                        
                                         @foreach($groupsinfo as $groupinfo)
                                    	 <span style="display: none;">{{ $currentgroup =$groupinfo->id }} </span>
										
										<?php if($currentgroup == $oldgroup ){ ?>
                                         {{$groupinfo->groupname}}
										<?php } else{?>
									    
										<?php }?>
                                        @endforeach
                                  
										</td>
                                       
                                     
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                     
               
                
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
