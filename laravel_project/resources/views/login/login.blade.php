@extends('layouts.layout')

@push('css')
<link rel="stylesheet" href="{{ asset('themeforest/eliteadmin/dist/css/pages/login-register-lock.css') }}">
@endpush
@section('main')
<section id="wrapper" class="login-register login-sidebar" style="background-image:url({{ asset('themeforest/assets/images/background/login-register.jpg') }});">
    <div class="login-box card">
        <div class="card-body">
            <form class="form-horizontal form-material" id="loginform" method="post">
                {{ csrf_field() }}
                <div class="row justify-content-center">
                    <div class="col-md-1">
                        <a href="javascript:void(0)" class="text-center db"><img src="{{ asset('themeforest/assets/images/logo-icon.png') }}" alt="Home" /></a>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-3">
                        <img src="{{ asset('themeforest/assets/images/logo-text.png') }}" alt="Home" />
                    </div>
                </div>
                <div class="form-group m-t-40">
                    <div class="col-xs-12">
                        <input class="form-control" name="account" type="text" placeholder="Tài khoản">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" name="password" type="password" placeholder="Mật khẩu">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="remember" value="true" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Remember me</label>
                            <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Forgot pwd?</a>
                        </div>
                    </div>
                </div>
                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-info btn-lg btn-block text-uppercase btn-rounded" type="submit">Đăng nhập</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                        <div class="social"><a href="javascript:void(0)" class="btn  btn-facebook" data-toggle="tooltip" title="Login with Facebook"> <i aria-hidden="true" class="fa fa-facebook"></i> </a> <a href="javascript:void(0)" class="btn btn-googleplus" data-toggle="tooltip" title="Login with Google"> <i aria-hidden="true" class="fa fa-google-plus"></i> </a> </div>
                    </div>
                </div>
                <div class="form-group m-b-0">
                    <div class="col-sm-12 text-center">
                        Chưa có tài khoản ? <a href="{{ route('register.get.register') }}" class="text-primary m-l-5"><b>Đăng ký</b></a>
                    </div>
                </div>
            </form>
            <form class="form-horizontal" id="recoverform" action="index.html">
                <div class="form-group ">
                    <div class="col-xs-12">
                        <h3>Recover Password</h3>
                        <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                    </div>
                </div>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" required="" placeholder="Email">
                    </div>
                </div>
                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection

@push('js')
<script src="{{ asset('themeforest/assets/node_modules/register-steps/jquery.easing.min.js') }}"></script>
<script src="{{ asset('themeforest/assets/node_modules/register-steps/register-init.js') }}"></script>

<script type="text/javascript">
    $(function() {
        $(".preloader").fadeOut();
    });
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    });
    // ==============================================================
    // Login and Recover Password
    // ==============================================================
    $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });
    $(document).ready(function () {
        {!! $err !!}
    });
</script>
@endpush