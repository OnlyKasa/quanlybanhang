<?php
    include_once 'Models/connectDB.php';
    $sql = "Select * from customer";
    $query = mysqli_query($conn, $sql);
    $data = array();
    while ($row = mysqli_fetch_assoc($query)) {
        $data[] = $row;
    }
?>
<ol class="breadcrumb">
    <li>
        <i class="glyphicon glyphicon-heart-empty"></i> Khách hàng
    </li>
    <li class="active">
        </i>Danh sách khách hàng
    </li>
</ol>
<table id="example" class="display" cellspacing="0" width="100%">
    <thead>
    <tr>
        <td>Tài khoản</td>
        <td>Mật khẩu</td>
        <td>Tên khách hàng</td>
        <td>Giới tính</td>
        <td>Ngày sinh</td>
        <td>Địa chỉ khách hàng</td>
        <td>Email</td>
        <td>SDT</td>
        <td>Đơn hàng đã mua</td>
        <td>Xóa</td>
    </tr>
    </thead>
    <?php
        foreach ($data as $value) {
            if ($value['cusex'] == 0){
                $text = "nam";
            }
            else {
                $text = "nữ";
            }
            echo "<tr>";
            echo "<td>" . $value['cuuser'] . "</td>";
            echo "<td>" . $value['cupassword'] . "</td>";
            echo "<td>" . $value['cuname'] . "</td>";
            echo "<td>" . $text . "</td>";
            echo "<td>" . $value['cudateofbirth'] . "</td>";
            echo "<td>" . $value['cuaddress'] . "</td>";
            echo "<td>" . $value['cuemail'] . "</td>";
            echo "<td>" . $value['cuphone'] . "</td>";
            echo "<td><a href='?page=viewbcu&cuuser=" . $value['cuuser'] . "'><span class='glyphicon glyphicon-list-alt'></span></a></td>";
            echo "<td><a href='Controls/xulydelcul.php?cuuser=" . $value['cuuser'] . "'><span class='glyphicon glyphicon-trash'></span></a></td>";
            echo "</tr>";
        }
    ?>
</table>
