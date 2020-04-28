 @extends('dashboard.layouts.main')
@section('title')
  Home-Create Message CTSU
@endsection
@section('content')
            <div class="container-fluid">
                                     <div class="row">
                                     							<!--######################## Send SMS Form #######################-->

                                <div class="col-md-12">
            <div class="card">
                <h4 align="center" style="font-weight:500;font-size:20px;">Send Message To All Members </h4>
                <form  method="post" action="{{ route('message.multiplesend') }}" class="form-horizontal">
                    <div class="card-content">
  {{csrf_field()}}
                       @if(count($errors) > 0 )
                                        @foreach($errors->all() as $error)
                                            <p class="alert alert-danger">{{$error}}</p>
                                        @endforeach
                                    @endif

                      
                        <div class="row">
                            <label style="color: black;" class="col-sm-2 label-on-left"> Message </label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="textarea" name="message" class="form-control" value=>
                                    <span class="help-block">Message.</span>
                                </div>
                            </div>
                            <div class="col-md-10 col-sm-2 label-on-left">
                                <label class=" control-label form-group" ><p style="color:red" >Note: { } [ ] | \ ^ ~ are counted as two characters each (encoding standard). Please avoid using these unless it is unavoidable.</p></label>
                            </div>
                            
                        </div>
                        
                       </div>
                        <a href="/admin/home" class="btn btn-danger pull-right" >Cancel</a>
                        <input class="btn btn-success pull-right" type="submit" value="Send">
                        
                        
                    </div>
                </form>
            </div>
	</div>

     <div class="row">
                                                                <!--######################## Send SMS Form #######################-->

                                <div class="col-md-12">
            <div class="card">
                <h4 align="center" style="font-weight:500;font-size:20px;">Send Message To All Members in province</h4>
                <form  method="post" action="{{ route('message.multiplesendprovince') }}" class="form-horizontal">
                    <div class="card-content">
  {{csrf_field()}}
                       @if(count($errors) > 0 )
                                        @foreach($errors->all() as $error)
                                            <p class="alert alert-danger">{{$error}}</p>
                                        @endforeach
                                    @endif

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
                            <label style="color: black;" class="col-sm-2 label-on-left">Message</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="textarea" name="message" class="form-control" value=>
                                    <span class="help-block">Message.</span>
                                </div>
                            </div>
                            <div class="col-md-10 col-sm-2 label-on-left">
                                <label class=" control-label form-group" ><p style="color:red" >Note: { } [ ] | \ ^ ~ are counted as two characters each (encoding standard). Please avoid using these unless it is unavoidable.</p></label>
                            </div>
                            
                        </div>
                        
                       </div>
                        <a href="/admin/home" class="btn btn-danger pull-right" >Cancel</a>
                        <input class="btn btn-success pull-right" type="submit" value="Send">
                        
                        
                    </div>
                </form>
            </div>
    </div>

     <div class="row">
                                                                <!--######################## Send SMS Form #######################-->

                                <div class="col-md-12">
            <div class="card">
                <h4 align="center" style="font-weight:500;font-size:20px;">Send Message To All Members in District</h4>
                <form  method="post" action="{{ route('message.multiplesenddistrict') }}" class="form-horizontal">
                    <div class="card-content">
  {{csrf_field()}}
                       @if(count($errors) > 0 )
                                        @foreach($errors->all() as $error)
                                            <p class="alert alert-danger">{{$error}}</p>
                                        @endforeach
                                    @endif

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
                            <label style="color: black;" class="col-sm-2 label-on-left">Message</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="textarea" name="message" class="form-control" value=>
                                    <span class="help-block">Message.</span>
                                </div>
                            </div>
                            <div class="col-md-10 col-sm-2 label-on-left">
                                <label class=" control-label form-group" ><p style="color:red" >Note: { } [ ] | \ ^ ~ are counted as two characters each (encoding standard). Please avoid using these unless it is unavoidable.</p></label>
                            </div>
                            
                        </div>
                        
                       </div>
                        <a href="/admin/home" class="btn btn-danger pull-right" >Cancel</a>
                        <input class="btn btn-success pull-right" type="submit" value="Send">
                        
                        
                    </div>
                </form>
            </div>
    </div>

     <div class="row">
                                                                <!--######################## Send SMS Form #######################-->

                                <div class="col-md-12">
            <div class="card">
                <h4 align="center" style="font-weight:500;font-size:20px;">Send Message To zone</h4>
                <form  method="post" action="{{ route('message.multiplesendzone') }}" class="form-horizontal">
                    <div class="card-content">
  {{csrf_field()}}
                       @if(count($errors) > 0 )
                                        @foreach($errors->all() as $error)
                                            <p class="alert alert-danger">{{$error}}</p>
                                        @endforeach
                                    @endif

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
                            <label style="color: black;" class="col-sm-2 label-on-left">Message</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="textarea" name="message" class="form-control" value=>
                                    <span class="help-block">Message.</span>
                                </div>
                            </div>
                            <div class="col-md-10 col-sm-2 label-on-left">
                                <label class=" control-label form-group" ><p style="color:red" >Note: { } [ ] | \ ^ ~ are counted as two characters each (encoding standard). Please avoid using these unless it is unavoidable.</p></label>
                            </div>
                            
                        </div>
                        
                       </div>
                        <a href="/admin/home" class="btn btn-danger pull-right" >Cancel</a>
                        <input class="btn btn-success pull-right" type="submit" value="Send">
                        
                        
                    </div>
                </form>
            </div>
    </div>

     <div class="row">
                                                                <!--######################## Send SMS Form #######################-->

                                <div class="col-md-12">
            <div class="card">
                <h4 align="center" style="font-weight:500;font-size:20px;">Send Message To division</h4>
                <form  method="post" action="{{ route('message.multiplesenddivision') }}" class="form-horizontal">
                    <div class="card-content">
  {{csrf_field()}}
                       @if(count($errors) > 0 )
                                        @foreach($errors->all() as $error)
                                            <p class="alert alert-danger">{{$error}}</p>
                                        @endforeach
                                    @endif

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
                            <label style="color: black;" class="col-sm-2 label-on-left">Message</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="textarea" name="message" class="form-control" value=>
                                    <span class="help-block">Message.</span>
                                </div>
                            </div>
                            <div class="col-md-10 col-sm-2 label-on-left">
                                <label class=" control-label form-group" ><p style="color:red" >Note: { } [ ] | \ ^ ~ are counted as two characters each (encoding standard). Please avoid using these unless it is unavoidable.</p></label>
                            </div>
                            
                        </div>
                        
                       </div>
                        <a href="/admin/home" class="btn btn-danger pull-right" >Cancel</a>
                        <input class="btn btn-success pull-right" type="submit" value="Send">
                        
                        
                    </div>
                </form>
            </div>
    </div>

     <div class="row">
                                                                <!--######################## Send SMS Form #######################-->

                                <div class="col-md-12">
            <div class="card">
                <h4 align="center" style="font-weight:500;font-size:20px;">Send Message To School</h4>
                <form  method="post" action="{{ route('message.multiplesendschool') }}" class="form-horizontal">
                    <div class="card-content">
  {{csrf_field()}}
                       @if(count($errors) > 0 )
                                        @foreach($errors->all() as $error)
                                            <p class="alert alert-danger">{{$error}}</p>
                                        @endforeach
                                    @endif
                    
                       <div class="row">
                            <label class="col-sm-2 label-on-left">Select School</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <select class="form-control" name="s_id" value="{{ old('s_id') }}" id="sid">
                                        <option value="" disable="true" selected="true">Select School</option>
                                    @foreach($schools as $school)
                                        <option value="{{$school->id}}">{{$school->placename}}</option>
                                     @endforeach
                                    </select>
                                    <span class="help-block">Please select school</span>
                                </div>
                            </div>
                        </div>
                      
                        <div class="row">
                            <label style="color: black;" class="col-sm-2 label-on-left">Message</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="textarea" name="message" class="form-control" value=>
                                    <span class="help-block">Message.</span>
                                </div>
                            </div>
                            <div class="col-md-10 col-sm-2 label-on-left">
                                <label class=" control-label form-group" ><p style="color:red" >Note: { } [ ] | \ ^ ~ are counted as two characters each (encoding standard). Please avoid using these unless it is unavoidable.</p></label>
                            </div>
                            
                        </div>
                        
                       </div>
                        <a href="/admin/home" class="btn btn-danger pull-right" >Cancel</a>
                        <input class="btn btn-success pull-right" type="submit" value="Send">
                        
                        
                    </div>
                </form>
            </div>
    </div>

</div>

		  @endsection