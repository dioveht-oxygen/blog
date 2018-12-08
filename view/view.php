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
                <button class="btn btn-danger mr-2">Đọc</button>
                <button class="btn btn-warning">Đánh dấu</button>
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