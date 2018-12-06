var hieuChinh = 0;
function an(tag_can_an) {
    if ($('#' + tag_can_an).hasClass('an') == true) {
        document.getElementById(tag_can_an).classList.remove('an');
    }
    else {
        document.getElementById(tag_can_an).classList.add('an');
    }
}
function tatden(tag_tuong_tac) {
    if ($('#' + tag_tuong_tac).hasClass('tatden') == true) {
        document.getElementById(tag_tuong_tac).classList.remove('tatden');
    }
    else {
        document.getElementById(tag_tuong_tac).classList.add('tatden');
    }
}
function backHome(base) {
    alert(base);
    //window.location= base;
}
function kiem_tra_form_dang_ky() {
    var ten = document.dang_ky.ten.value.length;
    var user = document.dang_ky.user.value.length;
    var thienthi = document.dang_ky.tenhienthi.value.length;
    var pass = document.dang_ky.pass.value;
    var xpass = document.dang_ky.pass_again.value;
    var email = document.dang_ky.email.value;
    if (ten < 2) {
        alert("Bạn chưa nhập tên");
        return false;
    }
    if (user < 6) {
        alert("Bạn nhập tên tài khoản quá ngắn");
        return false;
    }
    if ( thienthi < 1) {
        alert("Tên để hiển thị không có");
        return false;
    }
    if (pass.length < 1) {
        alert("Bạn chưa nhập mật khẩu");
        return false;
    }
    if (pass != xpass) {
        alert("Mật khẩu không giống !");
        return false;
    }
    var aCong = email.indexOf("@");
    var dauCham = email.lastIndexOf(".");
    if (email == "") {
        alert("Email không được để trống");
        return false;
    }
    else if ((aCong < 1) || (dauCham < aCong + 2) || (dauCham + 2 > email.length)) {
        alert("Ops. Email bạn nhập không hợp lệ");
        return false;
    }
}
function ajax( method , action){

    var xhr = new XMLHttpRequest();

// Open the connection.
    xhr.open(method, action, false);

    xhr.send('');

    return xhr.responseText;

}
function Redirect(path) {
    window.location= path;
}
function hieuUngXoa(){
    swal({
            title: "Bạn có chắn chứ !",
            text: "Bạn sẽ không phục hồi lại được đâu :(",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: '#DD6B55',
            confirmButtonText: 'Tôi muốn xóa',
            cancelButtonText: "Không",
            closeOnConfirm: false,
            closeOnCancel: false
        },
        function(isConfirm){
            if (isConfirm){
                swal("Thành Công", "Đã xóa", "success");
            } else {
                swal("Hủy", "Hihi :)", "error");
            }
        });
};
function hienThi(idHien,idAn){
    $('#'+idHien).each(function () {
        var hsClass = $(this).hasClass('an-tuong-tac');
        if(hsClass){
            $(this).removeClass("an-tuong-tac");
            $('#'+idAn).addClass("an-tuong-tac");
        }
        else {
            $(this).addClass("an-tuong-tac");
            $('#'+idAn).removeClass("an-tuong-tac");
        }
    });
}
function hienThiChuong(idHien){
    $('#'+idHien).each(function () {
        var hsClass = $(this).hasClass('an-tuong-tac');
        if(hsClass){
            $(this).removeClass("an-tuong-tac");
        }
        else {
            $(this).addClass("an-tuong-tac");
        }
    });
}
function Refresh()
{
    setTimeout("location.reload(true)",200);
}
function Xoa(path,ten) {
    swal(
        {
            title: "Bạn có chắn sẽ xóa chứ !",
            text: "Bạn sẽ không phục hồi lại '"+ ten +"' được đâu :(",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: '#DD6B55',
            confirmButtonText: 'Tôi muốn xóa',
            cancelButtonText: "Không",
            closeOnConfirm: false,
            closeOnCancel: false
        },
        function(isConfirm){
            if (isConfirm){
                //Redirect(path);
                var kq = ajax("get",path);
                swal(kq , "Đã xóa '" + ten + "'", "success");
                setTimeout("location.reload(true)",2000);

            } else {
                swal("Hủy", "Hihi :)", "error");
            }
        }
    );
}
function XoaHinh(path,id) {
    swal(
        {
            title: "Bạn có chắn sẽ xóa chứ !",
            text: "Bạn sẽ không phục hồi lại được đâu :(",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: '#DD6B55',
            confirmButtonText: 'Tôi muốn xóa',
            cancelButtonText: "Không",
            closeOnConfirm: false,
            closeOnCancel: false
        },
        function(isConfirm){
            if (isConfirm){
                //Redirect(path);
                var kq = ajax("get",path);
                if(kq == "Xóa Thành Công"){
                    swal(kq , "Đã xóa", "success");
                    $("#"+id).remove();
                    console.log(kq);
                }
                else{swal(kq ,"O-O?", "error");}
            } else {
                swal("Hủy", "Hihi :)", "error");
            }
        }
    );
}
function Sua(path,ten,giaTriSua) {
    path +="&giatri=" + document.getElementById("" + giaTriSua).value;
    swal(
        {
            title: "Bạn có chắn sẽ sửa chứ !",
            text: "Bạn sẽ không phục hồi lại '"+ ten +"' được đâu :(",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: '#DD6B55',
            confirmButtonText: 'Tôi muốn sửa',
            cancelButtonText: "Không",
            closeOnConfirm: false,
            closeOnCancel: false
        },
        function(isConfirm){
            if (isConfirm){
                //Redirect(path);
                var kq = ajax("get",path);
                swal( kq , "Thành công" , "success");
                setTimeout("location.reload(true)",2000);
            } else {
                swal("Hủy", "Hihi :)", "error");
            }
        }
    );
}
function clickZoom(id,ht,wt) {
    if(ht > wt){
        $("#"+id).addClass("zoomHinhD");
    }
    else {
        $("#"+id).addClass("zoomHinhNg");
    }

}

function clickZoomOut(id) {
    var w = screen.availWidth;
    var h = screen.availHeight;
    $("#"+id).removeClass("zoomHinhNg");
    $("#"+id).removeClass("zoomHinhD");
}
function Zoom(id,h,w){
    if(hieuChinh==0){
        clickZoom(id,h,w);
        hieuChinh=1;
    }
    else{
        clickZoomOut(id);
        hieuChinh=0;
    }

}
$(document).ready(function(){
    // event trong de chay su kien bootstrap !
    $('.modal').on('slid.bs.carousel', function () {
        $(this).animate({ scrollTop: 0 }, 600);
        return false;
    })
});