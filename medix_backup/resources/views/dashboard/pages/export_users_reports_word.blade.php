 @extends('dashboard.layouts.main')
@section('title')
  Home-Export Users Reports to  Word Documents
@endsection
@section('content')

<div class="col-md-12">
    <div class="row">
  <div class="col-md-12">
      <div class="card">
        <h4 align="center" style="font-weight:500;font-size:20px;">Export Members By Groups </h4>
            <form method="get" action="{{route('wordreports.exportgroupword')}}" class="form-horizontal">
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
            <a href="{{route('depo.depos')}}" class="btn btn-danger pull-right" >Cancel</a>
            <button class="btn btn-primary pull-right" type="submit">
  <i class="far fa-file-word" style="font-size: 16px;"></i> Export Word
</button>
           <!-- <input class="btn btn-success pull-right" type="submit" value="Export PDF">-->
            
        </div>
    </form>
</div>
</div>
</div>
 <div class="row">
 <div class="col-md-12">
      <div class="card">
        <h4 align="center" style="font-weight:500;font-size:20px;">Export Members By Workplace </h4>
            <form method="get" action="{{route('wordreports.exportworkplaceword')}}" class="form-horizontal">
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
                            <label style="color: black;" class="col-sm-2 label-on-left">Select Work Place</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <select class="form-control" name="work_place" id="workplaceid">
                                        <option value="">Select Workplace</option>
                                           @foreach($workplaces as $workplace)
                                        <option value="{{$workplace->id}}" >{{$workplace->placename}}</option>
                                        @endforeach
                                     
                                    </select>
                                    <span class="help-block">Please select of the user work place .</span>
                                </div>
                            </div>
                        </div>
            <a href="{{route('depo.depos')}}" class="btn btn-danger pull-right" >Cancel</a>
           <button class="btn btn-primary pull-right" type="submit">
  <i class="far fa-file-word" style="font-size: 16px;"></i> Export Word
</button>
            
        </div>
    </form>
</div>
</div>
</div>
<div class="row">

     <div class="col-md-12">
      <div class="card">
        <h4 align="center" style="font-weight:500;font-size:20px;">Export Members By Designation </h4>
            <form method="get" action="{{route('wordreports.exportdesignationword')}}" class="form-horizontal">
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
                            <label style="color: black;" class="col-sm-2 label-on-left">Select Designation</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <select class="form-control" name="designation" value="{{ old('designation') }}" id="nameid">
                                        <option value=""></option>
                                    @foreach($designations as $designation)

                                        <option value="{{$designation->id}}">{{$designation->designation}}</option>
                                     @endforeach
                                    </select>
                                    <span class="help-block">Please select designation of the user.</span>
                                </div>
                            </div>
                        </div>
            <a href="{{route('depo.depos')}}" class="btn btn-danger pull-right" >Cancel</a>
           <button class="btn btn-primary pull-right" type="submit">
  <i class="far fa-file-word" style="font-size: 16px;"></i> Export Word
</button>
            
        </div>
    </form>
</div>
</div>
</div>
<div class="row">
     <div class="col-md-12">  
      <div class="card">
        <h4 align="center" style="font-weight:500;font-size:20px;">Export Single Member Report </h4>
            <form method="get" action="{{route('wordreports.exportuserword')}}" class="form-horizontal">
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
                            <label style="color: black;" class="col-sm-2 label-on-left">Select Designation</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <select class="form-control" name="union_id" value="{{ old('union_id') }}" id="memberid">
                                        <option value=""></option>
                                    @foreach($members as $member)

                                        <option value="{{$member->union_id}}">{{$member->union_id}}</option>
                                     @endforeach
                                    </select>
                                    <span class="help-block">Please select member union ID.</span>
                                </div>
                            </div>
                        </div>
            <a href="{{route('depo.depos')}}" class="btn btn-danger pull-right" >Cancel</a>
            <button class="btn btn-primary pull-right" type="submit">
  <i class="far fa-file-word" style="font-size: 16px;"></i> Export Word
</button>
            
        </div>
    </form>
</div>
</div>
</div>
</div>

@endsection