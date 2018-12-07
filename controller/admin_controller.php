<?php
// lid thư viện hàm dùng chung
include_once '../lib.php';
include_once '../model/sach_model.php';
include_once '../model/user_model.php';
// blog model truy xuất dữ liệu tất cả trong sql có table là blog
class AdminController {
    public function index() {
        $user = new UserModel();
        $book = new SachModel();
        $data = [];
        $data['user'] = $user->getAll();
        $data['book'] = $book->getAll();
        load_view('../view/admin.php', $data);
    }
}

$controller = new AdminController();
$controller-> index();

