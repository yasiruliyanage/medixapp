 @extends('dashboard.layouts.main')
@section('title')
  Home-Manage Workplace CEB UNION
@endsection
@section('content')

<div class="col-md-12">
  <div class="col-md-12">
      @foreach($provinces as $province)
      <div class="card">
        <h4 align="center">Provonce Manage</h4>
            <form method="post" action="{{route('province.edit',$province->id)}}" class="form-horizontal">
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
                <label style="color: black;" class="col-sm-2 label-on-left">Update Depo </label>

                <div class="col-sm-10">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label"></label>
                        <input type="text" name="place_name" class="form-control" value="{{$province->placename}}">
                        <span class="help-block">Please enter Province Name.</span>
                    </div>
                </div>
            </div>
            <a href="/admin/home" class="btn btn-danger pull-right" >Cancel</a>
            <input class="btn btn-success pull-right" type="submit" value="Update">
            
        </div>
    </form>
</div>
@endforeach
</div>
</div>

@endsection