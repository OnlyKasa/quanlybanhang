<?php
    session_start();

    include_once 'Models/class_category.php';
    $cg = new category();
    $cg->setcid($_REQUEST['cid']);
    $cg->del();
    $_SESSION['error']="Xóa thành công!";
    header("location:?page=viewc");
?>
