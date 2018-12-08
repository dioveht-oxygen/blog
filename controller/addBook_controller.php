<?php
session_start();
// lid thư viện hàm dùng chung
include_once '../lib.php';
include_once '../model/sach_model.php';
include_once  '../model/user_model.php';
// blog model truy xuất dữ liệu tất cả trong sql có table là blog
class AddBookController {
    public function index() {
        if(!isset($_REQUEST['title'])){
            $data['error'] = 'error : Bạn chưa nhập tiêu đề sách';
            load_view('../view/addBook.php', $data);exit;
        }
        if(!isset($_REQUEST['category'])){
            $data['error'] = 'error : Bạn chưa nhập thể loại sách';
            load_view('../view/addBook.php', $data);exit;
        }
        if(!isset($_REQUEST['author'])){
            $data['error'] = 'error : Bạn chưa nhập tác giả sách';
            load_view('../view/addBook.php', $data);exit;
        }
        if(isset($_REQUEST['title']) && isset($_REQUEST['author']) && isset($_REQUEST['category']) && isset($_REQUEST['description'])){
            $data = [];
            $book = new SachModel();
            $user = new UserModel();
            $books = $book->getAll();
            $users = $user->getAll();
            foreach ($books as $key => $val){
                if($val['title'] === $_REQUEST['title'] && $val['id_user'] == $_SESSION['id']){
                    $data['error'] = 'Bạn đã có sách "'.$_REQUEST['title'].'" này rồi !';
                    load_view('../view/addBook.php', $data); exit;
                }
            }
            if(isset($_FILES['image'])){
                $errors= array();
                $file_name = $_FILES['image']['name'];
                $file_size =$_FILES['image']['size'];
                $file_tmp =$_FILES['image']['tmp_name'];
                $file_type =$_FILES['image']['type'];
                $fileName      = $file_name;
                $tmp           = explode('.', $fileName);
                $file_ext = end($tmp);


                $expensions= array("jpeg","jpg","png");

                if(in_array($file_ext,$expensions)=== false){
                    $data['error'] = 'File bạn đưa lên không phải hình hoặc không có';
                    load_view('../view/addBook.php', $data); exit;
                }

                if($file_size > 2097152){
                    $errors[]='Kích cỡ file nên là 2 MB';
                }

                if(empty($errors)==true){
                    move_uploaded_file($file_tmp,"../upload/".$file_name);
                    $data['success'] = 'Tạo sách thành công';
                }
                else{
                    print_r($errors);exit;
                }
            }
            else{
                $file_name = 'Null';
            }
            $book->insertBook($_REQUEST['title'],$_REQUEST['description'], $_SESSION['id'] , $_REQUEST['author'] , $_REQUEST['category'],$file_name,$_REQUEST['status'] );
           //header('Location: '.get_base() .'controller/name_controller.php?success=true');
            load_view('../view/addBook.php', $data);
        }
    }
}

$controller = new AddBookController();
$controller-> index();

