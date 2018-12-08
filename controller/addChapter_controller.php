<?php
session_start();
// lid thư viện hàm dùng chung
include_once '../lib.php';
include_once '../model/sach_model.php';
include_once  '../model/user_model.php';
include_once '../model/chapter_model.php';
// blog model truy xuất dữ liệu tất cả trong sql có table là blog
class AddChapterController {
    public function index() {
        if(!isset($_REQUEST['title']) || $_REQUEST['title'] == ''){
            $data['error'] = 'Bạn chưa nhập tiêu đề Chương';
            load_view('../view/addChapter.php', $data);exit;
        }
        elseif (!isset($_REQUEST['content'])){
            $data['error'] = 'Bạn chưa nhập nôi dung chương';
            load_view('../view/addChapter.php', $data);exit;
        }
        elseif(isset($_REQUEST['title']) && isset($_REQUEST['content']) && isset($_REQUEST['id_book'])){
            $data = [];
            $chapter = new ChapterModel();
            $chaps = $chapter->getAllInBook($_REQUEST['id_book']);
            $data['chaps'] = $chaps;
            foreach ($chaps as $key=>$val){
                if($val['title'] == $_REQUEST['title']){
                    $data['error'] = 'Chap bị trùng lặp';
                    load_view('../view/addChapter.php', $data);exit;
                }
            }
            $data['id_book'] = $_GET['idbook'];
            $result = $chapter->insert($_REQUEST['title'], $_REQUEST['content'] , $_REQUEST['id_book'] );
            if($result == false){
                header('Location: '.get_base() .'controller/name_controller.php');
            }
            $data['success'] = 'Thêm chương thành công';
        //header('Location: '.get_base() .'controller/name_controller.php?success=true');
          load_view('../view/addChapter.php', $data);
        }
    }
}

$controller = new AddChapterController();
$controller-> index();

