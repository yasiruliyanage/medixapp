 @extends('dashboard.layouts.main')
@section('title')
  Home-Create Message CEB UNION
@endsection
@section('content')
            <div class="container-fluid">
                                     <div class="row">
                                     							<!--######################## Send SMS Form #######################-->

                                <div class="col-md-12">
            <div class="card">
                <h4 align="center" style="font-weight:500;font-size:20px;">Send Single Message</h4>
                <form method="post" action="{{ route('message.singlesend') }}"  class="form-horizontal">
                    
                    <div class="card-content">

            {{csrf_field()}}
                    <!--div class="card-header card-header-text" data-background-color="rose">
                        <h4 class="card-title"></h4>
                    </div-->
                     @if(count($errors) > 0 )
                                        @foreach($errors->all() as $error)
                                            <p class="alert alert-danger">{{$error}}</p>
                                        @endforeach
                                    @endif
                      
                       <div class="row">
                            <label style="color: black;" class="col-sm-2 label-on-left"> NIC</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" name="nic" class="form-control autocomplete_txt" data-type="nic" id='nic' >
                                    <span class="help-block">Please enter NIC</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label style="color: black;" class="col-sm-2 label-on-left"> Emp ID</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" name="emp_id" class="form-control autocomplete_txt" data-type="emp_id" id='emp_id' >
                                    <span class="help-block">Please enter Employee ID</span>
                                </div>
                            </div>
                        </div>
                     

                        <div class="row">
                            <label style="color: black;" class="col-sm-2 label-on-left">Mobile Number</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" name="mobile_number" class="form-control autocomplete_txt"  data-type="mobile" id='mobile'  >
                                    <span class="help-block">Please enter Mobile Number.</span>
                                </div>
                            </div>
                        </div>
						   <div class="row">
                            <label style="color: black;" class="col-sm-2 label-on-left">Member Name</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" name="name" class="form-control autocomplete_txt"  data-type="name" id='name'  >
                                    <span class="help-block">Please enter Name.</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <label style="color: black;" class="col-sm-2 label-on-left">Message</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="textarea" name="message" class="form-control" value>
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

		  @endsection