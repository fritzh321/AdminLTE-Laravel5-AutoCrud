@extends('base')
@section('header')
<link href="{{ url('js/plugins/iCheck/square/blue.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('template')
    <body class="login-page">

    <div class="login-box">
        <div class="login-logo">
            <a href="{{ url('/') }}"><b>Admin</b>LTE</a>
        </div><!-- /.login-logo -->

        <div class="login-box-body">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> Er zijn wat problemen gevonden bij je invoer.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @else
                <p class="login-box-msg">Sign in to start your session</p>
            @endif


            <form role="form" method="POST" action="{{ url('/auth/login') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox" name="remember"> Remember Me
                            </label>
                        </div>
                    </div><!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div><!-- /.col -->
                </div>
            </form>

            {{--<div class="social-auth-links text-center">--}}
                {{--<p>- OR -</p>--}}
                {{--<a href="{{ url('/password/email') }}" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>--}}
                {{--<a href="#" class="btn btn-block btn-social btn-google-plus btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>--}}
            {{--</div><!-- /.social-auth-links -->--}}

            <a href="{{ url('/password/email') }}">I forgot my password</a><br>
            <a href="{{ url('/auth/register') }}" class="text-center">Register a new membership</a>

        </div><!-- /.login-box-body -->
    </div>

@endsection

@section('footer')
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
