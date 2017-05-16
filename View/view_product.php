

<ol class="breadcrumb">
    <li>
        <i class="glyphicon glyphicon-heart-empty"></i> Sản phẩm
    </li>
    <li class="active">
        </i>Danh sách sản phẩm
    </li>
</ol>
<?php
/**
 * Created by PhpStorm.
 * User: Then
 * Date: 3/25/2017
 * Time: 10:37 PM
 */
include "Models/class_product.php";
$p= new product();
$p->view();
?>

