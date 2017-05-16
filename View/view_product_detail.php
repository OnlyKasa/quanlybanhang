<ol class="breadcrumb">
    <li>
        <i class="glyphicon glyphicon-heart-empty"></i> Loại sản phẩm
    </li>
    <li class="active">
        </i>Danh sách
    </li>
</ol>
<div>
    <a href='?page=addd&pid=<?php echo $_REQUEST['pid']?>'><i class='glyphicon glyphicon-new-window'></i> Thêm</a>
</div>
<?php
    include 'Models/class_product.php';
    $p = new product();
    $p->setpid($_REQUEST['pid']);
    $p->viewd();

    ?>

