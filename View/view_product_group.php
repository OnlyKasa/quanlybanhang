
<ol class="breadcrumb">
    <li>
        <i class="glyphicon glyphicon-heart-empty"></i> Loại sản phẩm
    </li>
    <li class="active">
        </i>Danh sách
    </li>
</ol>
<div>
<a href="index.php?page=addg"><i class='glyphicon glyphicon-new-window'></i> Thêm</a>
</div>
<?php

/**
 * Created by PhpStorm.
 * User: Then
 * Date: 3/26/2017
 * Time: 12:20 AM
 */
include "Models/class_product_group.php";
$pg = new productgroup();
$pg->view();
?>