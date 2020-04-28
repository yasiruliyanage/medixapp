 @extends('dashboard.layouts.main')
@section('title')
  Home-Edit School
@endsection
@section('content')

<div class="col-md-12">
  <div class="col-md-12">
      @foreach($schools as $school)
      <div class="card">
        <h4 align="center">School Manage</h4>
            <form method="post" action="{{route('school.edit',$school->id)}}" class="form-horizontal">
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
                                    <span style="display: none;">{{ $oldprovince = $school->p_id }} </span>
                                    <select class="form-control" name="p_id" value="{{ old('p_id') }}" id="pid">
                                        <option value=""></option>
                                    @foreach($provinces as $province)
                                         <span style="display: none;">{{ $newprovince = $province->id }} </span>
                                        <option value="{{$province->id}}" {{  $oldprovince== $newprovince ? 'selected' : '' }}>{{$province->placename}}</option>
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
                                    <span style="display: none;">{{ $olddistrict = $school->d_id }} </span>
                                    <select class="form-control" name="d_id" value="{{ old('d_id') }}" id="did">
                                        <option value=""></option>
                                    @foreach($districts as $district)
                                         <span style="display: none;">{{ $newdistrict = $district->id }} </span>
                                        <option value="{{$district->id}}" {{  $olddistrict== $newdistrict ? 'selected' : '' }}>{{$district->placename}}</option>
                                     @endforeach
                                    </select>
                                    <span class="help-block">Please select district.</span>
                                </div>
                            </div>
                          </div>


                          <div class="row">
                            <label class="col-sm-2 label-on-left">Select Zone</label>
                        <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <span style="display: none;">{{ $oldzone = $school->z_id }} </span>
                                    <select class="form-control" name="z_id" value="{{ old('d_id') }}" id="zid">
                                        <option value=""></option>
                                    @foreach($zones as $zone)
                                         <span style="display: none;">{{ $newzone = $zone->id }} </span>
                                        <option value="{{$zone->id}}" {{  $oldzone== $newzone ? 'selected' : '' }}>{{$zone->placename}}</option>
                                     @endforeach
                                    </select>
                                    <span class="help-block">Please select Zone.</span>
                                </div>
                            </div>
                          </div>

                          <div class="row">
                            <label class="col-sm-2 label-on-left">Select Division</label>
                        <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <span style="display: none;">{{ $olddiv = $school->div_id }} </span>
                                    <select class="form-control" name="div_id" value="{{ old('div_id') }}" id="divid">
                                        <option value=""></option>
                                    @foreach($divisions as $division)
                                         <span style="display: none;">{{ $newdiv = $division->id }} </span>
                                        <option value="{{$division->id}}" {{  $olddiv== $newdiv ? 'selected' : '' }}>{{$division->placename}}</option>
                                     @endforeach
                                    </select>
                                    <span class="help-block">Please select Division.</span>
                                </div>
                            </div>
                          </div>
  
            <div class="row">
                <label style="color: black;" class="col-sm-2 label-on-left">School name </label>

                <div class="col-sm-10">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label"></label>
                        <input type="text" name="place_name" class="form-control" value="{{$school->placename}}">
                        <span class="help-block">Please enter School Name.</span>
                    </div>
                </div>
            </div>
            <a href="/admin/Schools" class="btn btn-danger pull-right" >Cancel</a>
            <input class="btn btn-success pull-right" type="submit" value="Update">
            
        </div>
    </form>
</div>
@endforeach
</div>
</div>

@endsection