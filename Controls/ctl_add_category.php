<?php
session_start();
include_once "Models/class_category.php";
$cg = new category();


if (isset($_POST['cmd'])) {
    if ($_POST['cname'] == "") {
        $_SESSION['error'] = "Bạn chưa nhập tên danh mục";
        header("location:?page=addc");
    } else {
        $_SESSION['error'] = "Thêm thành công!";
        $cg->setcname($_POST['cname']);
        $cg->setgid($_POST['slgid']);
        $cg->add();
        header("location:?page=viewc");
    }
}

?>
