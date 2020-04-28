@extends('staff.login.layouts.main')
@section('title')
Staff Login
@endsection
@section('content')
<form method="POST" action="">
      {{csrf_field()}}
      <div class="card card-login card-hidden">
          <div class="card-header text-center" data-background-color="green">
              <h4 class="card-title">Staff Login</h4>
          </div>

          <div class="card-content">

              <div class="input-group">
                  <span class="input-group-addon">
                      <i class="material-icons">person</i>
                  </span>

                  <div class="form-group label-floating">
                      <label class="control-label">Username</label>
                      <input type="text" name="" id="" class="form-control">
                  </div>
              </div>

              <div class="input-group">
                  <span class="input-group-addon">
                      <i class="material-icons">lock_outline</i>
                  </span>
                  <div class="form-group label-floating">
                      <label class="control-label">Password</label>
                      <input type="password" name="" id="" class="form-control">
                  </div>
              </div>



          </div>
          <div class="footer text-center">
              <a type="submit" class="btn btn-primary" href="dash">Login</a>
              <div class="form-group row">

                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="" id="">
                      <label class="form-check-label" for="remember">
                          {{ __('Remember Me') }}
                      </label><br>
                      <a href="">Forgot Password</a>


                  </div>
              </div>
          </div>
      </div>
</form>
@endsection
