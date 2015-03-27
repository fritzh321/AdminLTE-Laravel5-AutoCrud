<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <title>Laravel</title>

    <link href="{{ elixir('css/all.css')  }}" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"
          type="text/css"/>
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css"/>

    @yield('header')

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>


    @unless (Auth::guest())
        <body class="skin-purple">
        <div class="wrapper">
        @include('partials.nav')
        @include('partials.sidebar')
    @endunless

    @yield('template')

    @unless (Auth::guest())
        @include('partials.footer')
        </div>
        <!-- ./wrapper -->
    @endunless

                <!-- Scripts -->
        <script src="{{ elixir('js/all.js')  }}"></script>
        @yield('footer')

        </body>
</html>