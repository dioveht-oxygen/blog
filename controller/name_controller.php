<?php
session_start();
// lid thư viện hàm dùng chung
include_once '../lib.php';
include_once '../model/user_model.php';
// blog model truy xuất dữ liệu tất cả trong sql có table là blog
class NameController {
    public function index() {
        $data = [];
        $users = new UserModel();
        $user = $users->getId($_SESSION['id']);
        $data['user'] = $user;
        load_view('../view/name.php', $data);
    }
}

$controller = new NameController();
$controller-> index();

