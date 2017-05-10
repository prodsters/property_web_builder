@extends("layouts.login_register")
@section("title", "Admin Register")
@section("page:class", "register-page")
@section("content")

<div class="register-box">
  <div class="register-logo">
     <a href="{{route('front.index')}}"><b>Admin</b> <br>Properties Web Builder</a>
  </div>
   <br>
  @include("partials.alerts")

  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>

    <form method="POST" action="{{ route('register') }}">
      {{csrf_field()}}

      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Full name" name="name" value="{{ old('name') }}" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Retype password" name="password_confirmation" required>
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <!-- <input type="checkbox"> I agree to the <a href="#">terms</a> -->
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button typ-e="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <a href="{{ route('login') }}" class="text-center">I have registered already</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->
@endsection
@section("page:scripts")
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
@endsection