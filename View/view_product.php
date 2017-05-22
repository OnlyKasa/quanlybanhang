
<html>
    <ol class="breadcrumb">
        <li>
            <i class="glyphicon glyphicon-heart-empty"></i> Sản phẩm
        </li>
        <li class="active">
            </i>Danh sách sản phẩm
        </li>
    </ol>
    <?php
        include "Models/class_product.php";
        $p= new product();
        $p->view();
    ?>
</html>
