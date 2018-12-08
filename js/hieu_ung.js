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
function hiden(id){
    $('#'+id).each(function () {
        var hsClass = $(this).hasClass('hidden');
        if(hsClass){
            $(this).removeClass("hidden");
        }
        else {
            $(this).addClass("hidden");
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