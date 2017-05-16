<?php
session_start();
include "../Models/class_product.php";
$p = new product();
if (isset($_POST['cmd'])) {
    if ($_POST['pname'] == "" || $_POST['pprice'] == "" || $_POST['pdescription'] == "") {
        $_SESSION['error'] = "Bạn cần nhập các trường!";
        header("location:../?page=editp&pid=".$_POST['pid']."");
    } else {
        $_SESSION['error'] = "Sửa thành công!";
        $p->setpid($_REQUEST['pid']);
        $p->setcid($_REQUEST['slcid']);
        $p->setpname($_REQUEST['pname']);
        $p->setpprice($_REQUEST['pprice']);
        $p->setpdescription($_REQUEST['pdescription']);
        $p->edit();
        header("location:../?page=viewp");
    }
}
?>

