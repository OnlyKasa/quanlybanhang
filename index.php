<?php
session_start();
if (!isset($_SESSION['r'])) {
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Trang chủ</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css"
          href="css/datatables.min.css"/>
    <script type="text/javascript"
            src="js/datatables.min.js"></script>
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <?php include 'Menu/header.php' ?>
        <?php include 'Menu/menu1.php' ?>
    </nav>
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="content" style="min-height: 700px">
                <?php
                if (isset($_SESSION['error'])) {
                    echo "<div class='alert alert-danger' role='alert'>" . $_SESSION['error'] . "</div>";
                    unset($_SESSION['error']);
                }
                $page = isset($_GET['page']) ? $_GET['page'] : "";
                switch ($page) {
                    case 'addg':
                        include("View/add_product_group_view.php");
                        break;
                    case 'viewg':
                        include("View/view_product_group.php");
                        break;
                    case 'addc':
                        include("View/add_category_view.php");
                        break;
                    case 'viewc':
                        include("View/view_category.php");
                        break;
                    case 'addp':
                        include("View/add_product_view.php");
                        break;
                    case 'viewp':
                        include("View/view_product.php");
                        break;
                    case 'viewbt':
                        include("View/viewbillt.php");
                        break;
                    case 'viewbp':
                        include("View/viewbillp.php");
                        break;
                    case 'viewba':
                        include("View/view_sale_all.php");
                        break;
                    case 'seach':
                        include('View/seach_product_view.php');
                        break;
                    case 'logout':
                        header("location:login.php");
                        unset($_SESSION['r']);
                        break;
                    case 'editg':
                        include('View/edit_product_group_view.php');
                        break;
                    case 'editc':
                        include('View/edit_category_view.php');
                        break;
                    case 'editp':
                        include('View/edit_product_view.php');
                        break;
                    case 'editd':
                        include('View/edit_product_detail_view.php');
                        break;
                    case 'viewbdt':
                        include("View/view_trans_sale_detail.php");
                        break;
                    case 'viewbda':
                        include("View/view_all_sale_detail.php");
                        break;
                    case 'viewbdp':
                        include("View/view_pay_sale_detail.php");
                        break;
                    case 'viewd':
                        include("View/view_product_detail.php");
                        break;
                    case 'addd':
                        include("View/add_product_detail_view.php");
                        break;
                    case 'viewcu':
                        include("View/view_customer.php");
                        break;
                    case 'viewbcu':
                        include("View/viewbillcu.php");
                        break;
                    default : include("View/view_category.php");
                }
                ?>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('#example')
        .removeClass('display')
        .addClass('table table-striped table-bordered');
</script>
</body>
</html>