<?php
session_start();

include '/Models/class_product.php';
$p = new product();
$p->setpid($_REQUEST['pid']);
$p->del();
$_SESSION['error']="Xóa thành công!";
header("location:?page=viewp");
?>