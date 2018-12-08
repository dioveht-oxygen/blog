<?php
session_start();
// lid thư viện hàm dùng chung
include_once '../lib.php';
include_once '../model/user_model.php';
include_once '../model/sach_model.php';
include_once '../model/chapter_model.php';
// blog model truy xuất dữ liệu tất cả trong sql có table là blog
class UpdateChapterController {
    public function index() {
        if(isset($_SESSION['id']) && isset($_REQUEST['id_book']) && isset($_REQUEST['title']) && isset($_REQUEST['content']) && isset($_REQUEST['id']) ){
            $data = [];
            $user = new UserModel();
            $book = new SachModel();
            $data['id_book'] = $_GET['idbook'];
            $chapter = new ChapterModel();
            $chaps = $chapter->getAllInBook($_REQUEST['id_book']);
            foreach ($chaps as $key => $val){
                if($val['title'] == $_REQUEST['title']){
                    $data['error'] = 'Tên trùng';
                    $data['chaps'] = $chapter->getAllInBook($_REQUEST['id_book']);
                    load_view('../view/addChapter.php', $data);
                }
            }
            $result = $chapter->update($_REQUEST['id'] , $_REQUEST['title'] , $_REQUEST['content']);

            $data['chaps'] = $chapter->getAllInBook($_REQUEST['id_book']);
            if($result === false){
                $data['error'] = 'Sửa thất bại';
            }
            else{
                $data['success'] = 'Sửa thành công';
            }
            load_view('../view/addChapter.php', $data);
        }
        else{
            header('Location: '.get_base() .'controller/name_controller.php');
        }
    }
}

$controller = new UpdateChapterController();
$controller-> index();

