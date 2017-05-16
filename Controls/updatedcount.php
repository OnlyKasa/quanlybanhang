<?php
/**
 * Created by PhpStorm.
 * User: Then
 * Date: 4/21/2017
 * Time: 1:00 AM
 */
session_start();
include '../Models/connectDB.php';
$did=$_POST['did'];
$dcount=$_POST['dcount'];
$_SESSION['msg']=$dcount;
//$sql = "UPDATE productdetail SET dcount ='".$_REQUEST['dcount']."'where did = '".$_REQUEST['did']."'";
//mysqli_query($conn, $sql);


?>