<?php
include_once '../layouts/header.php';
$stt = 1;
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <form action="<?php echo get_base(); ?>controller/addChapter_controller.php?idbook=<?php echo $id_book; ?>"
                  method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-12 text-center" onclick="hiden('newBook')">
                        <h3 class="text-success">Viết Chương</h3>
                        <hr>
                        <?php
                        if (isset($error)) {
                            echo " <div class='alert alert-warning'>$error</div>";
                        }
                        if (isset($success)) echo " <div class='alert alert-success'>$success</div>";
                        ?>
                    </div>
                    <div class="hiden col-lg-12" id="newBook">
                        <div class="row justify-content-between mb-2">
                            <div class="col-lg-6">
                                <h4>Tên chương</h4>
                            </div>
                            <div class="col-lg-6">
                                <input class="form-control" name="title" type="text">
                            </div>
                        </div>
                        <input type="hidden" value="<?php echo $id_book; ?>" name="id_book">
                        <div class="row justify-content-between mb-3">
                            <div class="col-lg-12 text-center">
                                <h4>Nôi dung chương</h4>
                                <textarea id="chapter" name="content" cols="100" rows="5">

                                </textarea>
                                <script>
                                    CKEDITOR.replace('chapter');
                                </script>
                            </div>
                        </div>
                        <div class="justify-content-center row">
                            <button type="submit" name="button" class="btn btn-outline-success">
                                Tạo
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row mt-4">
        <h3>Danh sách chapter</h3>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tên Chapter</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            <?php
            if (isset($chaps)) {
                foreach ($chaps as $key => $val):
                    ?>
                    <tr>
                        <th scope="row"><?php echo $stt; ?></th>
                        <td><?php echo $val['title']; ?></td>
                        <td>
                            <a href="" class="btn btn-sm btn-danger" data-toggle="modal"
                               data-target="#delete<?php echo $stt; ?>">Xóa</a>
                            <a href="#" class="btn btn-warning btn-sm" data-toggle="modal"
                               data-target="#Modal<?php echo $stt; ?>">Sửa</a>
                        </td>
                        <div class="modal fade" id="Modal<?php echo $stt; ?>" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Sửa thông tin Chapter</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <form
                                                    action="<?php echo get_base(); ?>controller/updateChapter_controller.php?idbook=<?php echo $id_book; ?>"
                                                    method="post" enctype="multipart/form-data">
                                                    <input type="hidden" name="id" value="<?php echo $val['id']; ?>">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="row justify-content-between mb-2">
                                                                <div class="col-lg-6">
                                                                    <h4>Tên chương</h4>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <input class="form-control"
                                                                           value="<?php echo $val['title']; ?>"
                                                                           name="title"
                                                                           type="text">
                                                                </div>
                                                            </div>
                                                            <input type="hidden" value="<?php echo $id_book; ?>"
                                                                   name="id_book">
                                                            <div class="row justify-content-between mb-3">
                                                                <div class="col-lg-12">
                                                                    <h4>Nôi dung chương</h4>
                                                                <textarea id="chapter<?php echo $stt; ?>"
                                                                          name="content" cols="100"
                                                                          rows="5">
                                                                    <?php echo $val['content']; ?>
                                                                </textarea>
                                                                    <script>
                                                                        CKEDITOR.replace('chapter<?php echo $stt; ?>');
                                                                    </script>
                                                                </div>
                                                            </div>
                                                            <div class="justify-content-center row">
                                                                <button type="submit" name="button"
                                                                        class="btn btn-outline-success">
                                                                    Sửa
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="delete<?php echo $stt++; ?>" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <form action="<?php echo get_base() ?>controller/deleteChapter_controller.php"
                                              method="post">
                                            <input type="hidden" value="<?php echo $val['id']; ?>" name="id">
                                            <div class="row justify-content-around">
                                                <button class="btn btn-danger btn-lg" type="submit">Xóa</button>
                                                <button type="button" class="btn btn-lg btn-info" data-dismiss="modal">
                                                    Không xóa
                                                </button>
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
<?php
include_once '../layouts/footer.php';
?>
