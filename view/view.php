<?php
    include_once "../layouts/header.php";
?>
<script>
    document.title = "<?php echo $books[0]['title']; ?>" ;
</script>
<div class="container">
    <div class="row pt-4">
        <div class="col-lg-4 mr-2">
            <div class="row">
                <div class="col-lg-12 rounded " style="height: 450px; background-image: url('../upload/<?php echo $books[0]['image']; ?>'); background-size: cover; background-repeat: no-repeat; background-position: center;">
                </div>
            </div>
            <div class="row justify-content-center pt-3">
                <button class="btn btn-danger mr-2" data-toggle="modal" data-target="#read" >Đọc</button>
                <a href="#" class="btn btn-warning">Đánh đấu</a>
                <div class="modal fade" id="read" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title"><?php echo $books[0]['title']; ?></h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div id="carousel" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="../upload/<?php echo $books[0]['image']; ?>" width="100%" >
                                                </div>
                                                <?php foreach ($chapters as $key => $val): ?>
                                                    <div class="carousel-item">
                                                        <div>
                                                            <h4><?php echo $val['title']; ?></h4>
                                                        </div>
                                                        <div>
                                                            <?php echo $val['content']; ?>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                    <script>
                                        $('#carousel').carousel({
                                            interval: 100000,
                                            keyboard: true
                                        })
                                    </script>
                                </div>
                            </div>
                            <div class="modal-footer">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-lg-12 text-center">
                   <div class="row justify-content-between">
                        <div class="col-lg-6">Tác giả :</div>
                       <div class="col-lg-6"><b> <?php echo $books[0]['author']; ?></b></div>
                   </div>
                </div>
                <div class="col-lg-12 text-center">
                   <div class="row justify-content-between">
                       <div class="col-lg-6">Thể loại :</div>
                       <div class="col-lg-6"><b> <?php echo $books[0]['category']; ?></b></div>
                   </div>
                </div>
                <div class="col-lg-12 text-center">
                    <div class="row justify-content-between">
                        <div class="col-lg-6">Ngày đăng :</div>
                        <div class="col-lg-6"><b> <?php  $date = date_create($books[0]['date_up']);
                                echo date_format($date, 'd-m-Y'); ?></b></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="row">
                <h3 class="text-warning"><?php echo $books[0]['title']; ?></h3>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <?php echo $books[0]['description']; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    include_once "../layouts/footer.php";
?>