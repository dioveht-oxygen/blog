<?php
session_start();
// lid thư viện hàm dùng chung
include_once '../lib.php';
include_once '../model/sach_model.php';
include_once  '../model/user_model.php';
// blog model truy xuất dữ liệu tất cả trong sql có table là blog
class UpdateBookController {
    public function index() {
        if(isset($_REQUEST['title']) && isset($_REQUEST['author']) && isset($_REQUEST['category']) && isset($_REQUEST['description'])){
            $data = [];
            $book = new SachModel();
            $user = new UserModel();
            $books = $book->getAll();
            $users = $user->getAll();
            foreach ($books as $key => $val){
                if($val['title'] === $_REQUEST['title'] && $val['id_user'] == $_SESSION['id']){
                    if(isset($_SESSION['id'])){
                        $data['books'] = $book->getAllInId($_SESSION['id']);
                        $data['user'] = $user->getId($_SESSION['id']);
                        $data['soSachDaDang'] = $book->count($_SESSION['id']);
                    }
                    $data['error'] = 'Bạn sửa bị trùng sách "'.$_REQUEST['title'].'"!';
                    load_view('../view/name.php', $data); exit;
                }
            }
            if(isset($_FILES['image'])){
                $errors= array();
                $file_name = $_FILES['image']['name'];
                $file_size =$_FILES['image']['size'];
                $file_tmp =$_FILES['image']['tmp_name'];
                $file_type=$_FILES['image']['type'];
                $fileName      = $file_name;
                $tmp           = explode('.', $fileName);
                $file_ext = end($tmp);
                $expensions= array("jpeg","jpg","png");
                if(!$tmp === ''){
                    if(in_array($file_ext,$expensions)=== false){
                        $data['error'] = 'File bạn đưa lên không phải hình';
                        load_view('../view/addBook.php', $data); exit;
                    }
                }
                if($file_size > 2097152){
                    $errors[]='Kích cỡ file nên là 2 MB';
                }

                if(empty($errors)==true){
                    move_uploaded_file($file_tmp,"../upload/".$file_name);
                    $data['success'] = 'Sửa sách thành công';
                }
                else{
                    print_r($errors);exit;
                }
            }
            else{
                $file_name ="Null";
            }
            if(isset($_SESSION['id'])){
                
            }
            else{
                header('Location: '.get_base() .'controller/name_controller.php');
            }
            $book->updateBook($_REQUEST['id'],$_REQUEST['title'],$_REQUEST['description'] , $_REQUEST['author'] , $_REQUEST['category'],$file_name,$_REQUEST['status'] );
            $data['books'] = $book->getAllInId($_SESSION['id']);
            $data['user'] = $user->getId($_SESSION['id']);
            $data['soSachDaDang'] = $book->count($_SESSION['id']);
            //header('Location: '.get_base() .'controller/name_controller.php?success=true');
            load_view('../view/name.php', $data);
        }
    }
}

$controller = new UpdateBookController();
$controller-> index();

