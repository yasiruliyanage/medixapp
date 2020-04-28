

@extends('dashboard.layouts.authenticationsection')
@section('title')
  Member Login -Dashboard CEB Union
@endsection
@section('content')

 <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                        <form method="POST" action="{{route('login')}}">
                            {{csrf_field()}}
                            <div class="card card-login card-hidden">
                                <div class="card-header text-center" data-background-color="blue">
                                    <h4 class="card-title">User Login</h4>
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
                                            <label class="control-label">username</label>
                                            <input type="text"  name="username" id="name"  class="form-control">
                                        </div>
                                    </div>

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">lock_outline</i>
                                        </span> 
                                        <div class="form-group label-floating">
                                            <label class="control-label">Password</label>
                                            <input type="password"  name="password"  id="password" class="form-control">
                                        </div>
                                    </div>
                                 
                                  

                                </div>
                                <div class="footer text-center">
                                    <button type="submit" class="btn btn-info">Let's go</button>
                                    <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                              <div class="form-group row mb-0">
                            <div class="col-md-12 offset-md-4">

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
								<p style="color: green;">Not a member?</p>
                                <a class="btn btn-link btn-primary" href="/onlineregister">Register</a>
                            </div>
                        </div>

                        </div>

                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>

    @endsection
