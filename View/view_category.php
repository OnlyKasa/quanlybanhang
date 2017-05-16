<ol class="breadcrumb">
    <li>
        <i class="glyphicon glyphicon-heart-empty"></i> Danh mục
    </li>
    <li class="active">
        </i>Danh sách danh mục
    </li>
</ol>
<div>
    <a href="?page=addc"><i class='glyphicon glyphicon-new-window'></i> Thêm</a>
</div>
<?php

include "Models/class_category.php";
$cg = new  category();

$cg->view();
?>