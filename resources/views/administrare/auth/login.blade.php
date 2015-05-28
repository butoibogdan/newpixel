@extends('administrare.main')
@section('login')
    <div class="login-box">
      <div class="login-logo">
        <a href="../../index2.html"><b>Travel</b>CMS</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Bine ai venit 2015 - sa fie bine</p>

        {!!Form::open(array())!!}
          <div class="form-group has-feedback">
            <input name='email' type="email" class="form-control" placeholder="E-mail"/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
              <input name="password" type="password" class="form-control" placeholder="Parola"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> Tine-ma minte
                </label>
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
            </div><!-- /.col -->
          </div>
        {!!Form::close()!!}
        <a href="#">Am uitat parola</a><br>
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
@endsection