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
            if (isset($_SESSION['error'])) {
                echo "<div class='alert alert-danger' role='alert'>" . $_SESSION['error'] . "</div>";
            }
            include_once "Models/class_product.php";
            product::seach();
        ?>
</html>