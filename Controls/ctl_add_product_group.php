<?php
session_start();
include_once "Models/class_product_group.php";
$pg = new productgroup();
if (isset($_POST['cmd'])) {
    if ($_POST['gname'] == "") {
        $_SESSION['error'] = "Bạn chưa nhập tên loại sản phẩm";
        header("location:?page=addg");
    } else {
        $_SESSION['error'] = "Thêm thành công!";
        $pg->setgname($_POST['gname']);
        $pg->add();
        header("location:?page=viewg");
    }
}
?>