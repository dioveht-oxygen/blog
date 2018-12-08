<?php
    include_once '../layouts/header.php';
    $stt = 1;
?>
<script>
    document.title = "Trang cá nhân";
</script>
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-lg-3 mr-1">
            <div class="row justify-content-center mb-2">
                <h2><?php echo $user[0]['username']; ?></h2>
            </div>
            <div class="row justify-content-center">
                <h5>Thông tin cá nhân</h5>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Tên thật   : <?php echo $user[0]['nameuser']; ?></li>
                        <li class="list-group-item">Giới tính  : <?php echo $user[0]['sex'] == 0 ? "Nữ" : 'Nam'; ?></li>
                        <li class="list-group-item">Tuổi : <?php  $date = date_create($user[0]['DoB']);
                            echo getAge(date_format($date, 'Y-m-d')); ?></li>
                        <li class="list-group-item">Ngày sinh : <?php  $date = date_create($user[0]['DoB']);
                            echo date_format($date, 'd-m-Y'); ?></li>
                        <li class="list-group-item">Mail : <?php  echo $user[0]['mail']; ?></li>
                        <li class="list-group-item">Số sách đã đăng : <?php echo $soSachDaDang[0]['COUNT(id)'];?></li>
                        <li class="list-group-item">Bộ sưu tập : 0</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-4">
                    <a class="btn btn-outline-danger" data-toggle="modal" data-target="#user"><h5>Sửa Thông Tin Cá Nhân</h5></a>
                    <div class="modal fade" id="user" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Sửa thông tin cá nhân</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form action="<?php echo get_base(); ?>controller/name_controller.php?fix=true" method="post">
                                                <input type="hidden" name="id" value="<?php echo $val['id']; ?>">
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="inputEmail4">Tên Thật</label>
                                                        <input type="text" name="nameuser" value="<?php echo $user[0]['nameuser']; ?>" class="form-control" id="inputEmail4" required placeholder="Name">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="inputPassword4">Mail</label>
                                                        <input type="email" name="mail" class="form-control" value="<?php echo $user[0]['mail']; ?>" id="inputPassword4" required placeholder="Mail">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label for="inputState">Giới tính</label>
                                                        <select id="inputState" name="sex" class="form-control">
                                                            <option value="0" >Nữ</option>
                                                            <option value="1" >Nam</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword7">Ngày sinh</label>
                                                    <input type="date" name="DoB"  value="<?php $date = date_create($user[0]['DoB']);
                                                    echo date_format($date, 'Y-m-d'); ?>"  required class="form-control">
                                                </div>
                                                <div class="row justify-content-center">
                                                    <button type="submit" class="btn btn-primary">Sửa</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <a class="btn btn-outline-primary" href="<?php echo get_base(); ?>controller/writeBook_controller.php"><h5>Viết Sách</h5></a>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-lg-12">
                    <?php
                        if(isset($error)){
                            echo "<div class='alert alert-warning' role='alert'>$error</div>";
                        }elseif(isset($success)){
                            echo "<div class='alert alert-success' role='alert'>$success</div>";
                        }
                    ?>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tên sách</th>
                            <th scope="col">Tác giả</th>
                            <th scope="col">Tình trạng</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if(isset($books)){
                        foreach ($books as $key => $val):
                            ?>
                            <tr>
                                <th scope="row"><?php echo $stt; ?></th>
                                <td><a class="text-dark" target="_blank" href="<?php get_base() ?>view_controller.php?id_book=<?php echo $val['id']; ?>"><?php echo $val['title'];?></a></td>
                                <td><?php echo $val['author'];?></td>
                                <td><?php if( $val['status'] == 0 ){ echo 'Chưa hoàn thành'; } elseif ($val['status'] == 1){ echo 'Hoàn thành'; } else{ echo 'Tạm ngưng'; };?></td>
                                <td>
                                    <a href="" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete<?php echo $stt; ?>">Xóa</a>
                                    <a href="#" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#Modal<?php echo $stt; ?>">Sửa</a>
                                    <a class="btn btn-info btn-sm" href="<?php echo get_base(); ?>controller/writeChapter_controller.php?idbook=<?php echo $val['id']; ?>">Thêm chương</a>
                                </td>
                                <div class="modal fade" id="Modal<?php echo $stt; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Sửa thông tin sách</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <form action="<?php echo get_base(); ?>controller/updateBook_controller.php" method="post" enctype="multipart/form-data">
                                                            <input type="hidden" name="id" value="<?php echo $val['id']; ?>">
                                                            <div class="row">
                                                                <div class="col-lg-12 text-center" onclick="hiden('newBook')">
                                                                    <h3 class="text-success">Tạo sách</h3>
                                                                    <hr>
                                                                    <?php
                                                                    if (isset($error)){
                                                                        echo " <div class='alert alert-warning'>$error</div>";}
                                                                    if(isset($success)) echo " <div class='alert alert-success'>$success</div>";
                                                                    ?>
                                                                </div>
                                                                <div class="hiden col-lg-12" id="newBook">
                                                                    <div class="row justify-content-between mb-2">
                                                                        <div class="col-lg-6">
                                                                            <h4>Tên sách</h4>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <input class="form-control" value="<?php echo $val['title']?>" name="title" type="text">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row justify-content-between mb-2">
                                                                        <div class="col-lg-6">
                                                                            <h4>Tác giả</h4>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <input class="form-control" value=<?php echo $val['author']?>"" name="author" type="text">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row justify-content-between mb-2">
                                                                        <div class="col-lg-6">
                                                                            <h4>Thể loại</h4>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <input class="form-control" value="<?php echo $val['category']?>" name="category" type="text">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row justify-content-between mb-2">
                                                                        <div class="col-lg-6">
                                                                            <h4>Tình trạng</h4>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <select class="form-control" name="status">
                                                                                <option value="0">Chưa hoàn thành</option>
                                                                                <option value="1">Đã hoàn thành</option>
                                                                                <option value="2">Tạm ngưng</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row justify-content-between mb-2">
                                                                        <div class="col-lg-6">
                                                                            <h4>Hình</h4>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <input name="image" type="file">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row justify-content-between mb-2">
                                                                        <div class="col-lg-12 text-center">
                                                                            <h4>Mô tả</h4>
                                                                            <textarea id="book<?php echo $stt; ?>"" name="description" cols="100" rows="5">
                                                                                <?php echo $val['description']?>
                                                                            </textarea>
                                                                            <script>
                                                                                CKEDITOR.replace('book<?php echo $stt; ?>');
                                                                            </script>
                                                                        </div>
                                                                    </div>
                                                                    <div class="justify-content-center row">
                                                                        <button type="submit" name="button" class="btn btn-outline-success">
                                                                            Sửa
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="delete<?php echo $stt++; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <form action="<?php echo get_base() ?>controller/deleteBook_controller.php" method="post">
                                                    <input type="hidden" value="<?php echo $val['id']; ?>" name="id">
                                                    <div class="row justify-content-around">
                                                        <button class="btn btn-danger btn-lg" type="submit">Xóa</button>
                                                        <button type="button" class="btn btn-lg btn-info" data-dismiss="modal">Không xóa</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                            <?php
                        endforeach;
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    include_once '../layouts/footer.php';
?>

