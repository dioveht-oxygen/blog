<html>
<head>
    <title>@yield('title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="{{App::make('url')->to('bootstrap-4.1.3/dist/css/bootstrap.css')}}" />
</head>
<body>
@section('sidebar')
@endsection
<div>
    @yield('menu')
</div>
<div class="container">
    @yield('content')
</div>
<script type="text/javascript" src="{{App::make('url')->to('bootstrap-4.1.3/dist/js/jquery-3.3.1.slim.js')}}"></script>
<script type="text/javascript" src="{{App::make('url')->to('bootstrap-4.1.3/dist/js/jquery-1.11.0.min.js')}}"></script>
<script type="text/javascript" src="{{App::make('url')->to('bootstrap-4.1.3/dist/js/jquery-migrate-1.2.1.min.js')}}"></script>
<script type="text/javascript" src="{{App::make('url')->to('bootstrap-4.1.3/dist/js/poper.js')}}"></script>
<script type="text/javascript" src="{{App::make('url')->to('bootstrap-4.1.3/dist/js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{App::make('url')->to('sweetalert/src/sweetalert.min.js')}}"></script>
<script type="text/javascript" src="{{App::make('url')->to('js/action.js')}}"></script>
@yield('script')
</body>
</html>