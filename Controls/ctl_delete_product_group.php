<?php
    session_start();

    include_once 'Models/class_product_group.php';
    $pg = new productgroup();
    $pg->setgid($_REQUEST['gid']);
    $pg->del();
    $_SESSION['error']="Xóa thành công!";
    header("location:?page=viewg");
?>
