@extends('layouts.style1')

@section('title', 'Admin')

@section('sidebar')
    @@parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('menu')
    <div>
        <form method="post" class="form-group" action="{{App::make('url')->to('xuly/addBooks')}}" >
            {{ csrf_field() }}
            <div>
                <div class="row text-center">
                    <div class="col-md-2">
                        <label for="title"><h5>tieu de</h5></label>
                    </div>
                    <div class="col-md-3">
                        <input class="form-control" name="title">
                    </div>
                </div>
            </div>
            <div>
                <div class="row text-center">
                    <div class="col-md-2">
                        <label for="title"><h5>mo ta</h5></label>
                    </div>
                    <div class="col-md-3">
                        <input class="form-control" name="description">
                    </div>
                </div>
            </div>
            <div>
                <div class="row text-center">
                    <div class="col-md-2">
                        <label for="title"><h5>tac gia</h5></label>
                    </div>
                    <div class="col-md-3">
                        <input class="form-control" name="author">
                    </div>
                </div>
            </div>
            <div>
                <div class="row text-center">
                    <div class="col-md-2">
                        <label for="title"><h5>the loai</h5></label>
                    </div>
                    <div class="col-md-3">
                        <input class="form-control" name="kind">
                    </div>
                </div>
            </div>
            {{--<div>--}}
                {{--<div class="row text-center">--}}
                    {{--<div class="col-md-2">--}}
                        {{--<label for="title"><h5>chuong</h5></label>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-3">--}}
                        {{--<input class="form-control" name="title_chap">--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div>--}}
                {{--<div class="row text-center">--}}
                    {{--<div class="col-md-2">--}}
                        {{--<label for="title"><h5>tap</h5></label>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-3">--}}
                        {{--<input class="form-control" name="title_tap">--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div>--}}
                {{--<div class="row text-center">--}}
                    {{--<div class="col-md-2">--}}
                        {{--<label for="title"><h5>noi dung</h5></label>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-10">--}}
                        {{--<textarea type="text" class="form-control" cols="8" rows="5" name="content"></textarea>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            <button type="submit" class="btn btn-info">Add</button>
        </form>
    </div>
    <script>

    </script>
@endsection
