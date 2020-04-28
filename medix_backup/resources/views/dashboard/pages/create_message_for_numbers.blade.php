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
                <h4 align="center" style="font-weight:500;font-size:20px;">Send Messages To Selected Numbers</h4>
                <form  method="post" action="{{ route('message.multiplesendusers') }}" class="form-horizontal">
                    <div class="card-content">
  {{csrf_field()}}
                       @if(count($errors) > 0 )
                                        @foreach($errors->all() as $error)
                                            <p class="alert alert-danger">{{$error}}</p>
                                        @endforeach
                                    @endif


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
                          <a href="/admin/home" class="btn btn-danger pull-right" >Cancel</a>
                        <input class="btn btn-success pull-right" type="submit" value="Send">
                        </div>
                        <div class="row">
                              <div class="table-responsive">

                             <!--div id="scrll" style="border:2px solid lightgray;height: 500px;width: 100%;overflow-y: scroll;padding-left:20px; "-->

++

                                <table  id="datatables" class="table table-striped table-no-bordered table-hover table-fixed"  cellspacing="0" width="100%" style="width:100%;" style="border: 1px solid black; ">

                                    <thead>
                                        <tr  >
                                            <th scope="col">  <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="optionsCheckboxes"   class="selectall2" >
                                                        </label>
                                                    </div>
                                            </th>
                                            <th  scope="col">EMP ID</th>
                                            <th  scope="col">NIC</th>
                                            <th  scope="col">NAME</th>
                                            <th  scope="col">MOBILE</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($members as $member)
                                        <tr>
                                             <td> <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="ids[]"   class="selectbox2" value="{{$member->emp_id}}" >
                                                        </label>
                                                    </div>

                                                     </td>


                                            <td >{{$member->emp_id}}</td>
                                            <td >{{$member->nic}}</td>
                                            <td >{{$member->name}}</td>
                                            <td >{{$member->mobile}}</td>

                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </form>
                            </div>

                        </div>


                       </div>



                    </div>


	</div>
</div>

		  @endsection
