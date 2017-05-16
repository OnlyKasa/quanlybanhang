<?php
/**
 * Created by PhpStorm.
 * User: Then
 * Date: 3/30/2017
 * Time: 7:40 AM
 */
include 'Models/connectDB.php';
$sql="Select * from bill";
$query=mysqli_query($conn,$sql);
$data=array();
while($row=mysqli_fetch_assoc($query)) {
    $data[] = $row;
}

?>
<ol class="breadcrumb">
    <li>
        <i class="glyphicon glyphicon-heart-empty"></i> Đơn hàng
    </li>
    <li class="active">
        Tất cả đơn hàng
    </li>
</ol>

<table id="example" class="display" cellspacing="0" width="100%">
    <thead>
    <tr>
        <td>Mã đơn hàng</td>
        <td>Ngày đặt</td>
        <td>Tên khách hàng</td>
        <td>Địa chỉ khách hàng</td>
        <td>Email</td>
        <td>SDT</td>
        <td>Tổng tiền</td>
        <td>Vận chuyển</td>
        <td>Thanh toán</td>
        <td>Chi tiết</td>
        <td>Huỷ</td>
    </tr>
    </thead>
    <tbody>

        <?php
        foreach ($data as $value) {
            if ($value['bstatus1'] == 0)
            {
                $text1 = "<span class='glyphicon glyphicon-remove'></span>";
            }
            else
            { $text1 = "<span class='glyphicon glyphicon-ok'></span>";}

            if ($value['bstatus2'] == 0)
            {
                $text2 = "<span class='glyphicon glyphicon-remove'></span>";
            }
            else
                $text2 = "<span class='glyphicon glyphicon-ok'></span>";
            echo "<tr>";
            echo "<td>".$value['bid']."</td>";
            echo "<td>".$value['bcreatedate']."</td>";
            echo "<td>".$value['bcustomername']."</td>";
            echo "<td>".$value['baddress']."</td>";
            echo "<td>".$value['bemail']."</td>";
            echo "<td>".$value['bphone']."</td>";
            echo "<td>".$value['btotalmoney']."</td>";
            echo "<td>".$text1."</td>";
            echo "<td>".$text2."</td>";
            echo "<td><a href='?page=viewbda&bid=".$value['bid']."'><span class='glyphicon glyphicon-list-alt'></span></a></td>";
            echo "<td><a href='Controls/xulydelbill.php?bid=".$value['bid']."'><span class='glyphicon glyphicon-trash'></span></a></td>";
        echo "</tr>";
        }

        ?>
    </tbody>

</table>


