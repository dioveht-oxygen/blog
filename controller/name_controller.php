<?php
session_start();
// lid thư viện hàm dùng chung
include_once '../lib.php';
include_once '../model/user_model.php';
include_once '../model/sach_model.php';
// blog model truy xuất dữ liệu tất cả trong sql có table là blog
class NameController {
    public function index() {
        $data = [];
        $users = new UserModel();
        if(isset($_SESSION['id'])){
            if(isset($_GET['fix'])){
                if(!isset($_REQUEST['nameuser'])){
                    $data['error'] = 'Bạn còn thiếu tên';
                }
                elseif(!isset($_REQUEST['mail'])){
                    $data['error'] = 'Bạn còn thiếu tên';
                }
                elseif(!isset($_REQUEST['sex'])){
                    $data['error'] = 'Bạn còn thiếu tên';
                }
                elseif(!isset($_REQUEST['DoB'])){
                    $data['error'] = 'Bạn còn thiếu tên';
                }
                $users->update($_SESSION['id'],$_REQUEST['nameuser'],$_REQUEST['sex'],$_REQUEST['DoB'],$_REQUEST['mail']);
                $_SESSION['user'] = $_REQUEST['nameuser'];
                $data['success'] = 'Cập nhật thành công';
            }
            $user = $users->getId($_SESSION['id']);
            $book = new SachModel();
            $data['soSachDaDang'] = $book->count($_SESSION['id']);
            $data['user'] = $user;
            $data['books'] = $book->getAllInId($_SESSION['id']);
            load_view('../view/name.php', $data);
        }
    }
}

$controller = new NameController();
$controller-> index();

