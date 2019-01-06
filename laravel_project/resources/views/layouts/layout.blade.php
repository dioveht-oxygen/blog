<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('themeforest/assets/images/favicon.png') }}">
    <title>@yield('title')</title>

    <!-- Custom CSS -->
    <link href="{{ asset('themeforest/eliteadmin/dist/css/style.min.css') }}" rel="stylesheet">
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    @stack('css')
</head>
<body id="@yield('bodyId')" style="@yield('bodyStyle')" class="@yield('bodyClass')">

@yield('main')

<script src="{{ asset('themeforest/assets/node_modules/jquery/jquery-3.2.1.min.js') }}"></script>
<!-- Bootstrap popper Core JavaScript -->
<script src="{{ asset('themeforest/assets/node_modules/popper/popper.min.js') }}"></script>
<script src="{{ asset('themeforest/assets/node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/sweetalert.min.js') }}"></script>
@stack('js')
</body>

</html>