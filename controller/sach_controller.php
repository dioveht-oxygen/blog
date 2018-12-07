<?php
// lid thư viện hàm dùng chung
include_once '../lib.php';
include_once '../model/sach_model.php';
session_start();
// blog model truy xuất dữ liệu tất cả trong sql có table là blog
class SachController {
    public function index() {
        $data = [];
        if (!isset($_SESSION['save']) && !isset($_SESSION['user'])){
            load_view('../view/user.php', $data);exit;
        }
        load_view('../view/sach.php', $data);
    }
}

$controller = new SachController();
$controller-> index();

