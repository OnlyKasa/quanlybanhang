<?php
session_start();
include "../Models/class_product_detail.php";
include "../Models/class_product.php";
$p = new product();
if (isset($_POST['cmd'])) {
    if ($_POST['dimage'] == "" || $_POST['dsize'] == "" || $_POST['dcolor'] == "" || $_POST['dcount'] == "" || $_POST['ddate'] == "") {
        $_SESSION['error'] = "Bạn cần nhập các trường!";
        header("location:../?page=editd&pid=".$_REQUEST['pid']."&did=".$_REQUEST['did']."");
    } else {
        $_SESSION['error'] = "Sửa thành công!";
        $pd = new productdetail();
        $pd->setdid($_REQUEST['did']);
        $pd->setdimage($_REQUEST['dimage']);
        $pd->setpid($_REQUEST['pid']);
        $pd->setdcolor($_REQUEST['dcolor']);
        $pd->setdsize($_REQUEST['dsize']);
        $pd->setdcount($_REQUEST['dcount']);
        $pd->setddate($_REQUEST['ddate']);
        $pd->edit();
        header('location:../?page=viewd&pid='.$_REQUEST['pid']);
    }
}
?>





