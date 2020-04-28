@extends('dashboard.layouts.authenticationsection')
@section('title')
  Admin Login -Dashboard CEB Union
@endsection
@section('content')

 <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                        <form method="POST" action="/adminlogin">
                        	{{csrf_field()}}
                            <div class="card card-login card-hidden">
                                <div class="card-header text-center" data-background-color="rose">
                                    <h4 class="card-title">Login</h4>
                                  
                                </div>
                               
                                <div class="card-content">
                                   
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>

                                        <div class="form-group label-floating">
                                            <label class="control-label">email</label>
                                            <input type="email"  name="email" class="form-control">
                                        </div>
                                    </div>

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">lock_outline</i>
                                        </span>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Password</label>
                                            <input type="password"  name="password" class="form-control">
                                        </div>
                                    </div>

                               

                                </div>
                                <div class="footer text-center">
                                    <button type="submit" class="btn btn-rose btn-simple btn-wd btn-lg">Let's go</button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

    @endsection