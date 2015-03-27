@extends('app')

@section('content')
    <body class="login-page">

    <div class="login-box">
        <div class="login-logo">
            <a href="{{ url('/') }}"><b>Admin</b>LTE</a>
        </div><!-- /.login-logo -->

        <div class="login-box-body">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong>  Er zijn wat problemen gevonden bij je invoer.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @else
                    <p class="login-box-msg">Reset your password</p>
            @endif


            <form  role="form" method="POST" action="{{ url('/password/email') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>

                <div class="row">
                    <div class="col-md-7 col-md-offset-5">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Send Password Reset Link</button>
                    </div><!-- /.col -->
                </div>
            </form>

        </div><!-- /.login-box-body -->
    </div>


@endsection
