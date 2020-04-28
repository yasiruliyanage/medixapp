@extends('dashboard.layouts.authenticationsection')
@section('title')
  Sign up -Dashboard CEB Union
@endsection
@section('content')

 <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                        <form method="POST" action="{{ route('admin.register') }}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="card card-login card-hidden">
                                <div class="card-header text-center" data-background-color="rose">
                                    <h4 class="card-title">Signup</h4>
                                  
                                </div>
                               
                                <div class="card-content">
                                 
                                       @if(count($errors) > 0 )
                                        @foreach($errors->all() as $error)
                                            <p class="alert alert-danger">{{$error}}</p>
                                        @endforeach
                                    @endif
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>

                                        <div class="form-group label-floating">
                                            <label class="control-label">Username</label>
                                            <input type="text"  name="username"  value="{{ old('username') }}"  class="form-control">
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
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">lock_outline</i>
                                        </span>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Confirm Password</label>
                                            <input type="password"  name="password_confirmation" class="form-control">
                                        </div>
                                    </div>

                                     <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>

                                        <div class="form-group label-floating">
                                            <label class="control-label">Name</label>
                                            <input type="name" name="name" value="{{ old('name') }}" class="form-control">
                                        </div>
                                    </div>
                                       <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>

                                        <div class="form-group label-floating">
                                            <label class="control-label">NIC NO</label>
                                            <input type="nic" name="nic" value="{{ old('nic') }}" class="form-control">
                                        </div>
                                    </div>
                                       <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>

                                        <div class="form-group label-floating">
                                            <label class="control-label">MOBILE</label>
                                            <input type="mobile"  name="mobile"   value="{{ old('mobile') }}" class="form-control">
                                        </div>
                                    </div>
                                      <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>

                                        <div class="form-group label-floating">
                                            <label class="control-label"> Email</label>
                                            <input type="email" name="email"   value="{{ old('email') }}"   class="form-control">
                                        </div>
                                    </div>
                                     <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>

                                        <div class="form-group label-floating">
                                            <label class="control-label"> Address</label>
                                            <input type="address" name="address" value="{{ old('address') }}"  class="form-control">
                                        </div>
                                    </div>
                                      <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>

                                        <div class="form-group label-floating">
                                            <label class="control-label"> Secret code</label>
                                            <input type="code" name="code" id="activationcode" class="form-control" value="{{ old('activationcode') }}">
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        

                                     <label class="btn btn-file ">

                                Browse <input type="file" name="profile_img" value="{{ old('profile_img') }}" >

                            </label>
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