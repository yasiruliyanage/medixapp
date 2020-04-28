 @extends('dashboard.layouts.main')
@section('title')
  Home-Create Message CEB UNION
@endsection
@section('content')
            <div class="container-fluid">
                                     <div class="row">
                                     							<!--######################## Send SMS Form #######################-->

                                <div class="col-md-12">
           <div class="card">
           <h4 align="center" style="font-weight:500;font-size:20px;">Select a Group to Send Group Messages</h4>
                    <div class="card-content">
                  
                              
                       <div class="row">
                            <label style="color: black;" class="col-sm-2 label-on-left">Send Message To:</label>
                            <div class="col-sm-10" >
                                            <div id="scrll" style="border:2px solid lightgray;height: 100px; overflow-y: scroll;padding-left:10px;padding-right:10px; ">
                                                <div class="checkbox checkbox-inline">
                                                    <label>
                                                        <input type="checkbox" name="optionsCheckboxes" class="selectall try" value="0">Select all
                                                    </label>
                                                </div>
                                                <?php $groups =DB::table('groups')->orderby('groupname','ASC')->get();?>
                                                  @foreach($groups as $group)
                                                <div class="checkbox checkbox-inline">
                                                    <label>
                                                        <input type="checkbox" name="ids[]"  id="groupid" class="selectbox try" value="{{$group->id}}">{{$group->groupname}}
                                                    </label>
                                                </div>
                                                @endforeach
                                             
                                               

                                            </div>
                            </div>
                        </div>
                        


                       
                        
                      
                        
                       </div>
                       
                      
                         
                    </div>
               
            </div>
       
            </div>
           
             
              <div id="updateDiv">

            </div>
       
    </div>
      
         



		  @endsection