<?php
    session_start();

    include_once 'Models/connectDB.php';
    $did=$_POST['did'];
    $dcount=$_POST['dcount'];
    $_SESSION['msg']=$dcount;
    //$sql = "UPDATE productdetail SET dcount ='".$_REQUEST['dcount']."'where did = '".$_REQUEST['did']."'";
    //mysqli_query($conn, $sql);

?>