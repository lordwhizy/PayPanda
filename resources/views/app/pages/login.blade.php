@extends('app.authlayout')

@section('title', 'Signin | SuyaBay')

@section('content')

<div class="col s12 m6 l12 spacer">

    <div class="row center-align">
        <h2>Log in to your account</h2>
    </div>

    <div>
        <form class="col s6 center offset-s3">
            <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">
            <div class="input-field">
                <i class="material-icons prefix">perm_identity</i>
                <textarea id="username" class="materialize-textarea"></textarea>
                <label for="icon_prefix1">
                    Username
                </label>
            </div>

            <div class="input-field">
                <i class="material-icons prefix">lock_outline</i>
                <input id="password" type="password" class="validate">
                <label for="password">Password</label>
            </div>

            <div>
                <p class="left">
                    <input type="checkbox" class="filled-in" id="remember-me" checked="checked" />
                    <label for="remember-me">Remember Me</label>
                </p>

                <a class="waves-effect waves-light btn right" onclick="login()">
                    Sign In
                </a>
            </div>
        </form>
    </div>

    <div class="col s6 center offset-s3">
        <span>
            <small>
                Don't have an account?
            </small>
        </span>

        <span>
            <small>
                <a href="{{ URL::to('signup') }}"> Sign Up</a> |
            </small>
        </span>

        <span>
            <small>
                <a href="{{ URL::to('passwordreset') }}"> Forgot password?</a>
            </small>
        </span>

    </div>
</div>

@endsection