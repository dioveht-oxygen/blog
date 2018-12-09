<?php
session_start();
// lid thư viện hàm dùng chung
include_once '../lib.php';
include_once '../model/user_model.php';
include_once '../model/sach_model.php';
include_once '../model/chapter_model.php';
// blog model truy xuất dữ liệu tất cả trong sql có table là blog
class ViewController {
    public function index() {
        if(isset($_SESSION['id']) && isset($_GET['id_book'])){
            $data = [];
            $user = new UserModel();
            $book = new SachModel();
            $chapter = new ChapterModel();
            $data['books'] = $book->getOne($_GET['id_book']);
            $data['chapters'] = $chapter->getAllInBook($_GET['id_book']);
            load_view('../view/view.php', $data);
        }
        else{
            header('Location: '.get_base() .'controller/sach_controller.php');
        }
    }
}

$controller = new ViewController();
$controller-> index();

