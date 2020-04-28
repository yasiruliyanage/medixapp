 @extends('dashboard.layouts.main')
@section('title')
  Home-Manage Workplace CEB UNION
@endsection
@section('content')

<div class="col-md-12">
  <div class="col-md-12">
      <div class="card">
        <h4 align="center">Add New member to Group</h4>
            <form method="post" action="{{route('group.addmember')}}" class="form-horizontal">
          <!--div class="card-header card-header-text" data-background-color="rose">
            <h4 class="card-title"></h4>
        </div-->
        <div class="card-content">

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
                                    <input type="text" name="emp_id" class="form-control autocomplete_txt_group" data-type="employee_id" id='employee_id' >
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
              <div class="row">
                            <label class="col-sm-2 label-on-left">Select Group</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <select class="form-control" name="group_id" id="groupid">
                                        <option value="">Select Group </option>
                                     @foreach ($groups as $group)
                                        <option value="{{$group->id}}">{{$group->groupname}} </option>
                                    @endforeach
                                    </select>
                                    <span class="help-block">Please select group of the user.</span>
                                </div>
                            </div>
                        </div>
            <a href="/admin/home" class="btn btn-danger pull-right" >Cancel</a>
            <input class="btn btn-success pull-right" type="submit" value="Save">
            
        </div>
    </form>
</div>
</div>
</div>

@endsection