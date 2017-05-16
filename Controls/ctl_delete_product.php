<?php
session_start();
/**
 * Created by PhpStorm.
 * User: Then
 * Date: 3/26/2017
 * Time: 12:06 AM
 */
include '../Models/class_product.php';
$p = new product();
$p->setpid($_REQUEST['pid']);
$p->del();
$_SESSION['error']="Xóa thành công!";
header("location:../?page=viewp");
?>