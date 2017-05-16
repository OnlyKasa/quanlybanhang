<?php
session_start();
include "../Models/class_product.php";
$p = new product();
if (isset($_POST['cmd'])) {
    if ($_POST['pname'] == "" || $_POST['pprice'] == "" || $_POST['pdescription'] == "") {
        $_SESSION['error'] = "Bạn cần nhập các trường!";
        header("location:../?page=addp");
    } else {
        $_SESSION['error'] = "Thêm thành công!";
        $p->setpname($_POST['pname']);
        $p->setcid($_POST['slcid']);
        $p->setpcomment($_POST['pcomment']);
        $p->setpprice($_POST['pprice']);
        $p->setpdescription($_POST['pdescription']);
        $p->add();
        header("location:../?page=viewp");
    }
}
?>
