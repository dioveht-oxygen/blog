<?php
    include_once "../lib.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="<?php echo get_base(); ?>css/style.css">
    <link type="text/css" rel="stylesheet" href="<?php echo get_base(); ?>bootstrap-4.1.3/dist/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo get_base(); ?>bootstrap-4.1.3/dist/css/bootstrap-grid.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo get_base() ?>swiper-4.4.1\dist\css\swiper.min.css">
    <script src="<?php echo get_base(); ?>js/jquery-1.11.0.min.js"></script>
    <script src="<?php echo get_base(); ?>js/jquery-migrate-1.2.1.min.js"></script>
    <script src="<?php echo get_base(); ?>js/poper.js"></script>
    <script src="<?php echo get_base(); ?>bootstrap-4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo get_base(); ?>bootstrap-4.1.3/dist/js/bootstrap.bundle.js"></script>
    <script src="<?php echo get_base() ?>ckeditor/ckeditor.js"></script>
    <script src="<?php echo get_base() ?>swiper-4.4.1\dist\js\swiper.min.js"></script>
    <script src="<?php echo get_base() ?>swiper-4.4.1\dist\js\swiper.esm.js"></script>
    <script src="<?php echo get_base() ?>swiper-4.4.1\dist\js\swiper.esm.bundle.js"></script>
</head>
<body>
<div class="menu">
    <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
        <a class="navbar-brand" href="https://www.facebook.com/nhamnhi.kuso"><h3>Dioveht</h3></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_base() ?>controller/user_controller.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.facebook.com/nhamnhi.kuso">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">About me</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_base(); ?>controller/logout_controller.php">Log out</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo get_base(); ?>controller/name_controller.php"><?php
                                if(isset($_SESSION['user'])){
                                    echo $_SESSION['user'];
                                }
                            ?>
                    </a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
</div>
