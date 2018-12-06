<?php
// lid thư viện hàm dùng chung
include_once '../lib.php';
include_once '../model/sach_model.php';
// blog model truy xuất dữ liệu tất cả trong sql có table là blog
class SachController {
    public function index() {
        $data = [];
        load_view('../view/sach.php', $data);
    }
}

$controller = new SachController();
$controller-> index();

