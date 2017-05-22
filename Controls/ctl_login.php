<?php
    include_once '../Models/connectDB.php';
    session_start();
    $user = $_REQUEST['user'];
    $pass = $_REQUEST['pass'];
    $sql = "Select * from account WHERE aid='".$user."' and apassword='".$pass."'";
    $query = mysqli_query($conn, $sql);
    $data = array();
    while ($row = mysqli_fetch_assoc($query)) {
        $data[] = $row;
    }
        if ($data!=null) {
            $_SESSION['r'] = "ok";
            $_SESSION['user'] = $user;
            header('location:../index.php');
       }
      else
          {
           $_SESSION['r'] = "Sai thông tin đăng nhập";
           header('location:../login.php');
        }
?>