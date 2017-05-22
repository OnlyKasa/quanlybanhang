<?php
    session_start();

    include_once 'Models/class_product_detail.php';
    $pd = new productdetail();
    $pd->setdid($_REQUEST['did']);
    $pd->del();
    include "Models/class_product.php";
    $p = new product();
    $_SESSION["error"]="Xóa thành công!";
    header("location:?page=viewd&pid=".$_REQUEST['pid']."")
?>