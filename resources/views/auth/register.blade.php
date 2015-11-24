@extends('template.frame')


@section('title', 'Register')


@section('frame')

<div class="login-panel panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">{{ trans('auth.header.register') }}</h3>
    </div>
    <div class="panel-body">
        <form role="form" method="post" action="{{ route('auth.register') }}">
            <fieldset>
                <div class="form-group">
                    <input class="form-control" placeholder="{{ trans('auth.form.name') }}" name="name" type="text" autofocus>
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="{{ trans('auth.form.email') }}" name="email" type="email">
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="{{ trans('auth.form.password') }}" name="password" type="password" value="">
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="{{ trans('auth.form.password_confirmation') }}" name="password_confirmation" type="password" value="">
                </div>
                <!-- Change this to a button or input when using this as a form -->
                <input type="submit" class="btn btn-lg btn-success btn-block" value="Register">
                {!! csrf_field() !!}
            </fieldset>
        </form>
    </div>
    <div class="panel-footer">
        <a href="{{ route('auth.login') }}">{{ trans('auth.button.login') }}</a>
    </div>
</div>

@endsection