@extends('layouts.layout')

@push('css')
<link href="{{ asset('themeforest/assets/node_modules/register-steps/steps.css') }}" rel="stylesheet">
<link href="{{ asset('themeforest/eliteadmin/dist/css/pages/register3.css') }}" rel="stylesheet">
@endpush
@section('bodyClass') skin-default card-no-border @endsection
@section('main')
    <section id="wrapper" class="step-register">
        <div class="register-box">
            <div class="">
                <a href="javascript:void(0)" class="text-center m-b-40"><img
                            src="{{ asset('themeforest/assets/images/logo-icon.png') }}" alt="Home"/><br/><img
                            src="{{ asset('themeforest/assets/images/logo-text.png') }}" alt="Home"/></a>
                <!-- multistep form -->
                <form id="msform" method="post" onsubmit="return check()">
                    <!-- progressbar -->
                    {!! csrf_field() !!}
                    <ul id="eliteregister">
                        <li class="active">Thiết lập tài khoản</li>
                        <li>Hồ sơ xã hội</li>
                        <li>Thông tin cá nhân</li>
                    </ul>
                    <div class="row justify-content-center mb-3">
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-lg btn-info">Đăng ký</button>
                        </div>
                    </div>
                    <!-- fieldsets -->
                    <fieldset>
                        <h2 class="fs-title">Tạo tài khoản của bạn</h2>
                        <h3 class="fs-subtitle">Bước 1</h3>
                        <input type="text" name="account" maxlength="20" placeholder="Tài khoản (độ dài ký tự > 4)"/>
                        <input type="password" name="password" maxlength="20" placeholder="Mật khẩu (độ dài ký tự > 6)"/>
                        <input type="password" id="cpass" maxlength="20" placeholder="Nhập lại mật khẩu"/>
                        <input type="button" class="next action-button" id="tltk" onclick="checkTLTK()" value="Tiếp"/>
                    </fieldset>
                    <fieldset>
                        <h2 class="fs-title">Mạng xã hội</h2>
                        <h3 class="fs-subtitle">Bạn có dùng mạng xã hội nào dưới đây ?</h3>
                        <input type="text" name="social_profiles[twitter]" placeholder="Twitter"/>
                        <input type="text" name="social_profiles[facebook]" placeholder="Facebook"/>
                        <input type="text" name="social_profiles[gplus]" placeholder="Google Plus"/>
                        <input type="button" class="previous action-button" value="Trở lại"/>
                        <input type="button" class="next action-button" value="Tiếp"/>
                    </fieldset>
                    <fieldset>
                        <h2 class="fs-title">Thông tin cá nhân</h2>
                        <h3 class="fs-subtitle">.♡ Thông tin của bạn sẽ được bảo mật ♡.</h3>
                        <input type="text" name="first_name" placeholder="Tên (độ dài ký tự > 3)"/>
                        <input type="text" name="last_name" placeholder="Họ (độ dài ký tự > 3"/>
                        <select name="sex" class="form-control mb-4">
                            <option value="0">Nữ</option>
                            <option value="1">Nam</option>
                        </select>
                        <input type="text" name="email" placeholder="Mail"/>
                        <input type="button" class="previous action-button" value="Trở lại"/>
                    </fieldset>
                </form>
                <div class="clear"></div>
            </div>
        </div>
    </section>

@endsection

@push('js')
<script src="{{ asset('themeforest/assets/node_modules/register-steps/jquery.easing.min.js') }}"></script>
<script src="{{ asset('themeforest/assets/node_modules/register-steps/register-init.js') }}"></script>

<script type="text/javascript">
    function check() {

        if($('input[name="password"]').val().length > 6){
            if($('input[name="password"]').val() != $('input[id="cpass"]').val()){
                swal({
                    title: "Lỗi!",
                    text: "Mật khẩu không giống nhau ÒwÓ",
                    icon: "error",
                });
                return false;
            }
        }
        else{
            swal({
                title: "Lỗi!",
                text: "Mật khẩu bạn quá yếu Ò.Ó?",
                icon: "error",
            });
            return false;
        }

        if ($('input[name="account"]').val().length < 4 || $('input[name="first_name"]').val().length < 3 ||
            $('input[name="last_name"]').val().length < 3 || $('input[name="email"]').val().length == 0
        )
        {
            swal({
                title: "Lỗi!",
                text: "Thông tin bạn bị thiếu hãy kiểm tra lại ÒwÓ",
                icon: "error",
            });
            return false;
        }
        else if ($('input[name="email"]').val().length > 0){
            var mail = $('input[name="email"]').val();
            var at = mail.indexOf("@");
            var dot = mail.lastIndexOf(".");
            var space = mail.indexOf(" ");

            if ((at != -1) &&  (at != 0) && (dot != -1) && (dot > at + 1) && (dot < mail.length - 1) && (space == -1))
            {} else {

                swal({
                    title: "Lỗi!",
                    text: "Mail của bạn không hợp lệ ÒwÓ",
                    icon: "error",
                });

                return false;
            }
        }
    }


    $(function () {
        $(".preloader").fadeOut();
    });
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });
    // ==============================================================
    // Login and Recover Password
    // ==============================================================
    $('#to-recover').on("click", function () {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });

</script>
@endpush