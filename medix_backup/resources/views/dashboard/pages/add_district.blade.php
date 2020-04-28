 @extends('dashboard.layouts.main')
@section('title')
  Home-Add District
@endsection
@section('content')

<div class="col-md-12">
  <div class="col-md-12">
      <div class="card">
        <h4 align="center" style="font-weight:500;font-size:20px;">District Manage</h4>
            <form method="post" action="{{route('district.add')}}" class="form-horizontal">
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
                                        <option value=""></option>
                                    @foreach($provinces as $province)

                                        <option value="{{$province->id}}">{{$province->placename}}</option>
                                     @endforeach
                                    </select>
                                    <span class="help-block">Please select province.</span>
                                </div>
                            </div>
                        </div>
            <div class="row">
                <label style="color: black;" class="col-sm-2 label-on-left">District Name</label>

                <div class="col-sm-10">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label"></label>
                        <input type="text" class="form-control" name="place_name">
                        <span class="help-block">Please enter District name.</span>
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