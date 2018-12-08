<?php
session_start();
// lid thư viện hàm dùng chung
include_once '../lib.php';
include_once '../model/user_model.php';
include_once '../model/sach_model.php';
include_once '../model/chapter_model.php';
// blog model truy xuất dữ liệu tất cả trong sql có table là blog
class WriteController {
    public function index() {
        if(isset($_SESSION['id']) && isset($_GET['idbook'])){
            $data = [];
            $user = new UserModel();
            $book = new SachModel();
            $data['id_book'] = $_GET['idbook'];
            $chapter = new ChapterModel();
            $chaps = $chapter->getAllInBook($_REQUEST['idbook']);
            $data['chaps'] = $chaps;
            load_view('../view/addChapter.php', $data);
        }
        else{
            header('Location: '.get_base() .'controller/name_controller.php');
        }
    }
}

$controller = new WriteController();
$controller-> index();

