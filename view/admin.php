<?php
include_once "../lib.php";
$stt = 1;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="<?php echo get_base(); ?>css/style.css">
    <link type="text/css" rel="stylesheet" href="<?php echo get_base(); ?>bootstrap-4.1.3/dist/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo get_base(); ?>bootstrap-4.1.3/dist/css/bootstrap-grid.min.css">
    <script src="<?php echo get_base(); ?>js/jquery-1.11.0.min.js"></script>
    <script src="<?php echo get_base(); ?>js/jquery-migrate-1.2.1.min.js"></script>
    <script src="<?php echo get_base(); ?>js/poper.js"></script>
    <script src="<?php echo get_base(); ?>bootstrap-4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo get_base(); ?>bootstrap-4.1.3/dist/js/bootstrap.bundle.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-end">
            <div class="col-lg-3 text-right">
                <a href="<?php echo get_base() ?>controller/sach_controller.php" class="btn btn-success">Back to home</a>
            </div>
        </div>
        <div class="row justify-content-center">
            <h1 class="text-success">
                Administration
                <hr>
            </h1>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <h3>Quản lý người dùng</h3>
            <table class="table text-center">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Họ tên</th>
                    <th scope="col">Tài khoản</th>
                    <th scope="col">Ngày sinh</th>
                    <th scope="col">Giới tính</th>
                    <th scope="col">Mail</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($user as $key => $val): ?>
                <tr>
                    <th scope="row"><?php echo $stt++; ?></th>
                    <td><?php echo $val['nameuser']; ?></td>
                    <td><?php echo $val['username']; ?></td>
                    <td><?php $date = date_create($val['DoB']);
                        echo date_format($date, 'd-m-y'); ?></td>
                    <td><?php echo $val['sex'] = 1 ? 'Nam' : 'Nữ';  ?></td>
                    <td><?php echo $val['mail'];  ?></td>
                    <td>
                        <span>
                            <a class="btn btn-sm btn-danger" href="#">Xóa</a>
                        </span>
                        <span>
                            <a class="btn btn-sm btn-warning" href="#">Sửa</a>
                        </span>
                    </td>
                </tr>
                <?php endforeach;$stt = 1; ?>
                </tbody>
            </table>
        </div>
        <div class="row">
            <h3>Quản lý Sách</h3>
            <table class="table text-center">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên sách</th>
                    <th scope="col">Ngày đăng</th>
                    <th scope="col">Tác giả</th>
                    <th scope="col">người đăng</th>
                    <th scope="col">Thể loại</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($book as $key => $val): ?>
                <tr>
                    <th scope="row"><?php echo $stt++; ?></th>
                    <td><?php echo $val['title']; ?></td>
                    <td><?php $date = date_create($val['date_up']);
                        echo date_format($date, 'd-m-y'); ?></td>
                    <td><?php echo $val['author']; ?></td>
                    <td><?php foreach ($user as $key => $value){ if($val['id_user'] == $value['id']) echo $value['nameuser'] ;} ?></td>
                    <td><?php echo $val['category'];  ?></td>
                    <td>
                        <span>
                            <a class="btn btn-sm btn-danger" href="#">Xóa</a>
                        </span>
                        <span>
                            <a class="btn btn-sm btn-warning" href="#">Sửa</a>
                        </span>
                    </td>
                </tr>
                <?php endforeach; $stt = 1; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>