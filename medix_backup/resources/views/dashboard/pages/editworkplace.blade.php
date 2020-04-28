 @extends('dashboard.layouts.main')
@section('title')
  Home-Manage Workplace CEB UNION
@endsection
@section('content')

<div class="col-md-12">
  <div class="col-md-12">
      <div class="card">
        <h4 align="center">Workplace Manage</h4>
            <form method="get" action="work_place.html" class="form-horizontal">
          <!--div class="card-header card-header-text" data-background-color="rose">
            <h4 class="card-title"></h4>
        </div-->
        <div class="card-content">

            <div class="row">
            </div>
            <div class="row">
                <label style="color: black;" class="col-sm-2 label-on-left">Add New Work Place</label>

                <div class="col-sm-10">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label"></label>
                        <input type="text" name="workplace" class="form-control" value="{{$workplace->place_name}}">
                        <span class="help-block">Please enter work place.</span>
                    </div>
                </div>
            </div>
            <a href="dashboard.html" class="btn btn-danger pull-right" >Cancel</a>
            <input class="btn btn-success pull-right" type="submit" value="Insert">
            
        </div>
    </form>
</div>
</div>
</div>

@endsection