@extends('administrare.main')

@section('register')

<div class="register-box">
    <div class="register-logo">
        <a href="../../index2.html"><b>Admin</b>LTE</a>
    </div>

    <div class="register-box-body">
        <p class="login-box-msg">Register a new membership</p>
        {!! Form::open() !!}
        <div class="form-group has-feedback">
            <input name='username' type="text" class="form-control" placeholder="Full name"/>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input name='email' type="email" class="form-control" placeholder="Email"/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input name="password" type="password" class="form-control" placeholder="Retype password"/>
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
        </div>
        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox"> I agree to the <a href="#">terms</a>
                    </label>
                </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
            </div><!-- /.col -->
        </div>
        {!! Form::close() !!}

        <a href="login.html" class="text-center">I already have a membership</a>
    </div><!-- /.form-box -->
</div><!-- /.register-box -->
@endsection