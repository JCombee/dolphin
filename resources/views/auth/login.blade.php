@extends('template.frame')


@section('title', 'Login')


@section('frame')

<div class="login-panel panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Please Sign In</h3>
    </div>
    <div class="panel-body">
        <form role="form" method="post" action="{{ route('auth.login') }}">
            <fieldset>
                <div class="form-group">
                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                </div>
                <div class="checkbox">
                    <label>
                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                    </label>
                </div>
                <!-- Change this to a button or input when using this as a form -->
                <input type="submit" class="btn btn-lg btn-success btn-block" value="Login">
                {!! csrf_field() !!}
            </fieldset>
        </form>
    </div>
    <div class="panel-footer">
        <a href="{{ route('auth.register') }}">Register</a>
    </div>
</div>

@endsection