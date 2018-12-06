@extends('layouts.style1')

@section('title', 'Admin')

@section('sidebar')
    @@parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('menu')
<div class="container">
    <div class="row mt-lg-5 mt-md-5 mt-sm-5">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div>
                <form name="sach" method="post" class="form-horizontal" action="{{App::make('url')->to('book')}}" onsubmit="return test()">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <div>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-8 text-center">
                                    <h3>Thêm Sách</h3>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                        </div>
                        <div>
                            <div class="row text-center">
                                <div class="col-md-4">
                                    <label for="title"><h5>Tên Sách</h5></label>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" maxlength="100" name="title">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="row text-center">
                                <div class="col-md-4">
                                    <label for="title"><h5>Mô tả</h5></label>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" maxlength="2000" name="description">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="row text-center">
                                <div class="col-md-4">
                                    <label for="title"><h5>Tác Giả</h5></label>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" name="author">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="row text-center">
                                <div class="col-md-4">
                                    <label for="title"><h5>Thể Loại</h5></label>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" name="category">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="row text-center">
                                <div class="col-md-4">
                                    <label for="title"><h5>Tình Trạng</h5></label>
                                </div>
                                <div class="col-md-8">
                                    <select class="form-control" name="status">
                                        <option class="text-success">Hoàn Thành</option>
                                        <option class="text-info">Chưa Hoàn Thành</option>
                                        <option class="text-danger">Tạm Dừng</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-info w-100">Add</button>
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
@endsection
@section('script')
<script>
    document.title = 'Thêm Sách';
    function test() {
        if( $( "input[name*='title']" ).val().length == 0 ){
            swal("Lỗi dữ liệu", "Bạn thiếu tên của sách", "error", {
                button: "Xác nhận",
            });
            return false;
        }
        else if( $( "input[name*='author']" ).val().length == 0 ){
            swal("Lỗi dữ liệu", "Bạn thiếu tên tác giả", "error", {
                button: "Xác nhận",
            });
            return false;
        }
    }
</script>
@endsection
