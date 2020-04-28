 @extends('dashboard.layouts.main')
@section('title')
  Home-Add Depo
@endsection
@section('content')

<div class="col-md-12">
  <div class="col-md-12">
      <div class="card">
        <h4 align="center" style="font-weight:500;font-size:20px;">Depo Manage</h4>
            <form method="post" action="{{route('depo.add')}}" class="form-horizontal">
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
                <label style="color: black;" class="col-sm-2 label-on-left">Add New  Depo</label>

                <div class="col-sm-10">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label"></label>
                        <input type="text" class="form-control" name="place_name">
                        <span class="help-block">Please enter depo name.</span>
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