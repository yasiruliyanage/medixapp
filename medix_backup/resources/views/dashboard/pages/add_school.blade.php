 @extends('dashboard.layouts.main')
@section('title')
  Home-Add School Medix
@endsection
@section('content')

<div class="col-md-12">
  <div class="col-md-12">
      <div class="card">
        <h4 align="center" style="font-weight:500;font-size:20px;">School Manage</h4>
            <form method="post" action="{{route('school.add')}}" class="form-horizontal">
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
                            <label class="col-sm-2 label-on-left">Select Province</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <select class="form-control" name="p_id" value="{{ old('p_id') }}" id="pid">
                                        <option value="" disable="true" selected="true">Select Province</option>
                                    @foreach($provinces as $province)

                                        <option value="{{$province->id}}">{{$province->placename}}</option>
                                     @endforeach
                                    </select>
                                    <span class="help-block">Please select province.</span>
                                </div>
                            </div>
                        </div>
                         <div class="row">
                            <label class="col-sm-2 label-on-left">Select District</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <select class="form-control" name="d_id" value="{{ old('d_id') }}" id="did">
                                        <option value="" disable="true" selected="true">Select District</option>
                                    @foreach($districts as $district)

                                        <option value="{{$district->id}}">{{$district->placename}}</option>
                                     @endforeach
                                    </select>
                                    <span class="help-block">Please select district</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 label-on-left">Select Zone</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <select class="form-control" name="z_id" value="{{ old('z_id') }}" id="zid">
                                        <option value="" disable="true" selected="true">Select Zone</option>
                                    @foreach($zones as $zone)
                                        <option value="{{$zone->id}}">{{$zone->placename}}</option>
                                     @endforeach
                                    </select>
                                    <span class="help-block">Please select zone</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 label-on-left">Select Division</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <select class="form-control" name="div_id" value="{{ old('div_id') }}" id="divid">
                                        <option value="" disable="true" selected="true">Select Division</option>
                                    @foreach($divisions as $division)
                                        <option value="{{$division->id}}">{{$division->placename}}</option>
                                     @endforeach
                                    </select>
                                    <span class="help-block">Please select division</span>
                                </div>
                            </div>
                        </div>
            <div class="row">
                <label style="color: black;" class="col-sm-2 label-on-left">School Name</label>

                <div class="col-sm-10">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label"></label>
                        <input type="text" class="form-control" name="place_name" >
                        <span class="help-block">Please enter school name.</span>
                    </div>
                </div>
            </div>
            <a href="{{route('depo.depos')}}" class="btn btn-danger pull-right" >Cancel</a>
            <input class="btn btn-success pull-right" type="submit" value="Save">
            
        </div>
    </form>
</div>
</div>
</div>

@endsection