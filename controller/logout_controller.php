<?php
include_once '../lib.php';
session_start();
session_destroy();
header('Location: ' . get_base() .'controller/user_controller.php');
