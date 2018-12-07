<?php
session_start();
// lid thư viện hàm dùng chung
include_once '../lib.php';
include_once '../model/user_model.php';
// blog model truy xuất dữ liệu tất cả trong sql có table là blog
class UserController {
    public function index() {
        $data = [];
        $user = new UserModel();
        $users = $user->getAll();
        if(isset($_REQUEST['userlg']) && isset($_REQUEST['passwordlg'])){
            foreach ($users as $key=>$val){
                $pass = md5($_REQUEST['passwordlg']);
                if($_REQUEST['userlg'] == $val['username'] && $pass == $val['pass']){
                    if (isset($_REQUEST['save'])){
                        $_SESSION['save'] = 'true';
                        $_SESSION['user'] = $val['nameuser'];
                        $_SESSION['id'] = $val['id'];
                    }
                    $data['success'] = "Nice to meet you Ò.Ó" ;
                    load_view('../view/sach.php', $data);exit;
                }
            }
            $data['error'] = "Bạn nhập sai tài khoản hoặc mật khẩu !";
        }
        else if (isset($_REQUEST['usersg']) && isset($_REQUEST['passwordsg']) && isset($_REQUEST['passwordsgagain']) && isset($_REQUEST['mail'])){
            if ($_REQUEST['passwordsgagain'] != $_REQUEST['passwordsg']){
                $data['error'] = "Mật khẩu không giống nhau !";
                load_view('../view/user.php', $data);exit;
            }
            foreach ($users as $key => $val){
                if ($_REQUEST['usersg'] == $val['username']){
                    $data['error'] = "Tài khoản đã tồn tại !";
                    load_view('../view/user.php', $data);exit;
                }
            }
            $pass = md5($_REQUEST['passwordsg']);
            $user->insertUser('New Users',$_REQUEST['usersg'],$pass,$_REQUEST['mail']);
        }
        else if(isset($_SESSION['save'])){
            $data['success'] = "Nice to meet you again ÒvÓ" ;
            load_view('../view/sach.php', $data);exit;
        }
        load_view('../view/user.php', $data);
    }
}

$controller = new UserController();
$controller-> index();

