 @extends('dashboard.layouts.main')
@section('title')
  Home-Manage News CEB UNION
@endsection
@section('content')


        
        <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
  <div class="col-md-12">
      <div class="card">
        <h4 align="center">Add New member to Group</h4>
            <form method="post" action="{{route('group.addmemberingroup')}}" class="form-horizontal">
          <!--div class="card-header card-header-text" data-background-color="rose">
            <h4 class="card-title"></h4>
        </div-->
        <div class="card-content">
   @foreach($groups as $group)
            <div class="row">
                    {{csrf_field()}}
                    <!--div class="card-header card-header-text" data-background-color="rose">
                        <h4 class="card-title"></h4>
                    </div-->
                     @if(count($errors) > 0 )
                                        @foreach($errors->all() as $error)
                                            <p class="alert alert-danger">{{$error}}</p>
                                        @endforeach
                   @endif
            </div>
            <div class="row">
                <label class="col-sm-2 label-on-left">NIC</label>
                 <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" name="nic" class="form-control autocomplete_txt_group" data-type="nic" id='nic' >
                                    <input type="hidden" name="group_id" class="form-control"  value="{{$group->id}}">
                                    <span class="help-block">Please enter NIC</span>
                                </div>
                 </div>

            </div>
            <div class="row">
                            <label class="col-sm-2 label-on-left">Member Name</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" name="member_name" class="form-control autocomplete_txt_group" data-type="name" id='name' >
                                    <span class="help-block">Please enter name</span>
                                </div>
                            </div>
            </div>
               <div class="row">
                            <label class="col-sm-2 label-on-left"> Emp ID</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" name="emp_id" class="form-control autocomplete_txt_group" data-type="emp_id" id='emp_id' >
                                    <span class="help-block">Please enter Employee ID</span>
                                </div>
                            </div>
                        </div>
                     

                        <div class="row">
                            <label class="col-sm-2 label-on-left">Mobile Number</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" name="mobile_number" class="form-control autocomplete_txt_group"  data-type="mobile" id='mobile'  >
                                    <span class="help-block">Please enter Mobile Number.</span>
                                </div>
                            </div>
                        </div>
            <a href="/admin/home" class="btn btn-danger pull-right" >Cancel</a>-
            <input class="btn btn-success pull-right" type="submit" value="Save">
            
        </div>
    </form>
</div>
</div>
</div>
                    </div>
                         <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-icon" data-background-color="rose">
                <i class="material-icons">assignment</i>
            </div>
   
            <div class="card-content">
                <h4 class="card-title">Group {{$group->groupname}}  </h4>
                <div class="table-responsive">
                      <a href="/admin/groups" type="button" class="btn btn-primary "> Back </a>
                     <form action="{{route('group.deleteallmembers')}}"  method="post">
                       <input type="hidden" name="group_id" value="{{$group->id}}"/>
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
                                    <th scope="col">Member ID</th>
                                    <th scope="col">Member Name</th>
                                     <th scope="col">Member Mobile</th>
                                    <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                             @foreach($groupmembers as $groupmember)
                                <tr>
                                        <td> <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="ids[]"   class="selectbox" value="{{$groupmember->member_id}}" >
                                                        </label>
                                                    </div> </td>
                                        <th scope="row">{{$groupmember->member_id}}</th>
                                        <td>{{$groupmember->member_name}}</td>
                                         <td>{{$groupmember->member_mobile}}</td>
                                        <td class="td-actions text-left">                                             
                                               <a href="{{action('MembershipController@edit',$groupmember->member_id)}}" type="button"><i class="material-icons btn-primary">create</i></a>
                                                   <form method="post"  action="{{route('group.destroymember')}}" >
                                                      @csrf
                                                    <input type="hidden" name="union_id" value="{{$groupmember->member_id}}"/>
                                                     <input type="hidden" name="group_id" value="{{$group->id}}"/>
                                                   <button type="submit"  ><i class="material-icons  btn btn-danger"  onclick="return confirm('Are you sure you want to Delete this member?')">delete</i> </button>
                                                 </form>
                                         </td>
                                </tr>
                                @endforeach
                         
                        </tbody>
                    </table>

                      <button  class="btn btn-danger" type="submit" onclick="return confirm('Are you sure you want to Delete?')" >Delete All Selected </button>
                </form>

         @endforeach
                </div>
            </div>
        </div>
        
    </div>
    
    
    
    
    </div>
    
                </div>
            </div>


@endsection
