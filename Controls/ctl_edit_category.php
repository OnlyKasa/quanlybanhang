<?php
session_start();
include_once "Models/class_category.php";
$cg = new category();


if (isset($_POST['cmd'])) {
    if ($_POST['cname'] == "") {
        $_SESSION['error'] = "Bạn chưa nhập tên danh mục";
        header("location:?page=editc&cid=".$_POST['cid']."");
    } else {
        $_SESSION['error'] = "Sửa thành công!";
        $cg->setcid($_REQUEST['cid']);
        $cg->setgid($_REQUEST['slgid']);
        $cg->setcname($_REQUEST['cname']);
        $cg->edit();
        header("location:?page=viewc");
    }
}

?>
