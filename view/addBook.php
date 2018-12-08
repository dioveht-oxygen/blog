<?php
    include_once '../layouts/header.php';
    $stt = 1;
?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form action="<?php echo get_base(); ?>controller/addBook_controller.php" method="post" enctype="multipart/form-data">
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
                                    <input class="form-control" name="title" type="text">
                                </div>
                            </div>
                            <div class="row justify-content-between mb-2">
                                <div class="col-lg-6">
                                    <h4>Tác giả</h4>
                                </div>
                                <div class="col-lg-6">
                                    <input class="form-control" name="author" type="text">
                                </div>
                            </div>
                            <div class="row justify-content-between mb-2">
                                <div class="col-lg-6">
                                    <h4>Thể loại</h4>
                                </div>
                                <div class="col-lg-6">
                                    <input class="form-control" name="category" type="text">
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
                                <textarea id="book" name="description" cols="100" rows="5">

                                </textarea>
                                    <script>
                                        CKEDITOR.replace('book');
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
    </div>
<?php
    include_once '../layouts/footer.php';
?>
