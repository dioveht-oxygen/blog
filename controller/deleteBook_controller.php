<?php
session_start();
// lid thư viện hàm dùng chung
include_once '../lib.php';
include_once '../model/user_model.php';
include_once '../model/sach_model.php';
// blog model truy xuất dữ liệu tất cả trong sql có table là blog
class DeleteBookController {
    public function index() {
        $data = [];
        $users = new UserModel();
        $user = $users->getId($_SESSION['id']);
        $book = new SachModel();
        if(isset($_REQUEST['id'])){
            $book->Delete($_REQUEST['id']);
            $data['success'] = 'Xóa thành công';
        }
        $data['soSachDaDang'] = $book->count($_SESSION['id']);
        $data['user'] = $user;
        $data['books'] = $book->getAllInId($_SESSION['id']);
        load_view('../view/name.php', $data);
    }
}

$controller = new DeleteBookController();
$controller-> index();

