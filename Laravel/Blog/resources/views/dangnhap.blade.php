@extends('layouts.style1')

@section('title', 'Đăng Nhập')

@section('sidebar')
    @@parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('menu')
    <div class="container text-center">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 mt-md-5 mt-lg-5 mt-sm-0 col-sm-12">
                <form class="form-signin" action="{{App::make('url')->to('xuly/dangnhap')}}" method="post" onsubmit="return kiemTraDangNhap('inputEmail','inputPassword')">
                    <h1 class="h3 mb-3 font-weight-normal">Sign in</h1>
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="text" name="user" id="inputEmail" class="form-control" placeholder="Email address or Username" oninvalid="this.setCustomValidity('Hãy điền chỗ còn trống')"
                           oninput="setCustomValidity('')"  required autofocus>
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="Password" oninvalid="this.setCustomValidity('Hãy điền chỗ còn trống')"
                           oninput="setCustomValidity('')" required>
                    <div class="checkbox mb-3 mt-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                    <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
@endsection
