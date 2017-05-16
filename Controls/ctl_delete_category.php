<?php
session_start();
/**
 * Created by PhpStorm.
 * User: Then
 * Date: 3/25/2017
 * Time: 9:40 PM
 */
include '../Models/class_category.php';
$cg = new category();
$cg->setcid($_REQUEST['cid']);
$cg->del();
$_SESSION['error']="Xóa thành công!";
header("location:../?page=viewc");
?>
