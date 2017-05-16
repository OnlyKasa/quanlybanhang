<?php

class product
{
    var $pid;
    var $pname;
    var $cid;
    var $pcomment;
    var $pprice;
    var $pdescription;

    public function setpid($pid)
    {
        $this->pid = $pid;
    }

    public function getpid()
    {
        return $this->pid;
    }

    public function setpname($pname)
    {
        $this->pname = $pname;
    }

    public function getpname()
    {
        return $this->pname;
    }

    public function setcid($cid)
    {
        return $this->cid = $cid;
    }

    public function getcid()
    {
        return $this->cid;
    }

    public function setpcomment($pcomment)
    {
        $this->pcomment = $pcomment;
    }

    public function getpcomment()
    {
        return $this->pcomment;
    }

    public function setpprice($pprice)
    {
        $this->pprice = $pprice;
    }

    public function getpprice()
    {
        return $this->pprice;
    }

    public function setpdescription($pdescription)
    {
        $this->pdescription = $pdescription;
    }

    public function getpdescription()
    {
        return $this->pdescription;
    }

    public function view()
    {
        include 'connectDB.php';
        //$sql ="select * from product";
        $sql = "Select product.pid, product.pname, category.cname, product.pcomment, product.pprice, product.pdescription from product INNER JOIN category ON product.cid = category.cid";
        $query = mysqli_query($conn, $sql);
        $data = array();
        while ($row = mysqli_fetch_assoc($query)) {
            $data[] = $row;
        }
        ?>

        <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
        <tr>
            <td>Tên sản phẩm</td>
            <td>Thuộc danh mục</td>
            <td>Giá sản phẩm</td>
            <td>Mô tả sản phẩm</td>
            <td>Sửa</td>
            <td>Xóa</td>
            <td>Xem chi tiết</td>
        </tr>
        </thead>


            <?php
            foreach ($data as $value) {

                echo "<tr>";
                echo "<td>" . $value['pname'] . "</td>";
                echo "<td>" . $value['cname'] . "</td>";
                echo "<td>" . $value['pprice'] . "</td>";
                echo "<td>" . $value['pdescription'] . "</td>";
                echo "<td><a href='?page=editp&pid=" . $value['pid'] . "'> <span class='glyphicon glyphicon-edit'></span></a></td>";
                echo "<td><a href='Controls/ctl_delete_product.php?pid=" . $value['pid'] . "'><span class='glyphicon glyphicon-trash'></span></a></td>";
                echo "<td><a href='.?page=viewd&pid=" . $value['pid'] . "'><span class='glyphicon glyphicon-list-alt'></span></a></td>";
                echo "</tr>";
            }
            ?>
        </tr>

    </table>
    <?php
    }

    public function add()
    {
        include 'connectDB.php';
        $sql = "INSERT into product(pname,cid,pcomment,pprice,pdescription) values ('" . $this->pname . "','" . $this->cid . "','" . $this->pcomment . "','" . $this->pprice . "','" . $this->pdescription . "')";
        mysqli_query($conn, $sql);

    }

    public function edit()
    {
        include 'connectDB.php';
        $sql = "UPDATE product SET pname='" . $this->pname . "',cid='" . $this->cid . "',pcomment='" . $this->pcomment . "',pprice='" . $this->pprice . "',pdescription='" . $this->pdescription . "' WHERE pid='" . $this->pid . "'";
        mysqli_query($conn, $sql);
    }

    public function del()
    {
        include 'connectDB.php';
        $sql = "DELETE from product where pid='" . $this->pid . "'";
        mysqli_query($conn, $sql);
    }

    public function viewd()
    {
        include 'connectDB.php';
        //$sql ="select * from product";
        $sql = "Select productdetail.did, productdetail.pid, productdetail.dimage, product.pname, productdetail.dcolor, productdetail.dsize, productdetail.dcount, productdetail.ddate from productdetail INNER JOIN product ON productdetail.pid = product.pid WHERE productdetail.pid = '" . $_REQUEST['pid'] . "'";
        $query = mysqli_query($conn, $sql);
        $data = array();
        while ($row = mysqli_fetch_assoc($query)) {
            $data[] = $row;
        }
        ?>
        <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
        <tr>
        <td>Tên sản phẩm</td>
        <td>Ảnh</td>
        <td>Màu sắc</td>
        <td>Kích thước</td>
        <td>Số lượng</td>
        <td>Ngày nhập</td>
        <td>Sửa</td>
        <td>Xóa</td>
        </tr>
        </thead>

            <?php
        foreach ($data as $value) { ?>
            <tr>
            <td><?php echo $value['pname'] ?></td>
            <td><img src=images/<?php echo $value['dimage'] ?> width='180px'></td>
            <td><?php echo $value['dcolor']?></td>
            <td><?php echo $value['dsize']?></td>
            <td><?php echo $value['dcount']?></td>
            <td><?php echo $value['ddate']?></td>
            <td><a href='?page=editd&did=<?php echo $value['did'] ?> &pid=<?php echo $_REQUEST['pid'] ?>'> <span class='glyphicon glyphicon-edit'></span></a></td>
            <td><a href='Module/xulydeleteproductdetail.php?did=<?php echo $value['did'] ?>&pid=<?php echo $_REQUEST['pid']?>'><span class='glyphicon glyphicon-trash'></span></a></td>
            </tr>
            <?php
        }
        echo "</table>";

    }

    public function seach()
    {
        include 'connectDB.php';
        $sql = "Select product.pid, product.pname, category.cname, product.pcomment, product.pprice, product.pdescription from product INNER JOIN category ON product.cid = category.cid WHERE product.pname like'%" . $_REQUEST['txt'] . "%'";
        $query = mysqli_query($conn, $sql);
        $data = array();
        while ($row = mysqli_fetch_assoc($query)) {
            $data[] = $row;
        }
        if ($data!=null){
        echo "<div class='form-group'>";
        echo "<form action='?page=seach' method='post'>";
        echo "<input class='col-lg-4' type='text' name='txt' placeholder='Tìm kiếm'>";
        echo "<input type=submit value='Tìm'>";
        echo "</from>";
        echo "</div>";
        echo "<table class='table table-striped table-bordered'>";
        echo "<tr>";
        echo "<td>Tên sản phẩm</td>";
        echo "<td>Thuộc danh mục</td>";
        echo "<td>Bình luận từ người xem</td>";
        echo "<td>Giá sản phẩm</td>";
        echo "<td>Mô tả sản phẩm</td>";
        echo "<td>Sửa</td>";
        echo "<td>Xóa</td>";
        echo "<td>Xem chi tiết</td>";
        echo "</tr>";
        foreach ($data as $value) {
            echo "<tr>";
            echo "<td>" . $value['pname'] . "</td>";
            echo "<td>" . $value['cname'] . "</td>";
            echo "<td>" . $value['pcomment'] . "</td>";
            echo "<td>" . $value['pprice'] . "</td>";
            echo "<td>" . $value['pdescription'] . "</td>";
            echo "<td><a href='?page=editp&pid=" . $value['pid'] . "'> <span class='glyphicon glyphicon-edit'></span></a></td>";
            echo "<td><a href='Controls/ctl_delete_product.php?pid=" . $value['pid'] . "'><span class='glyphicon glyphicon-trash'></span></a></td>";
            echo "<td><a href='.?page=viewd&pid=" . $value['pid'] . "'><span class='glyphicon glyphicon-list-alt'></span></a></td>";
            echo "</tr>";
        }

        } else
            echo "<h3>Không tìm thấy sản phẩm<h3>";
        echo "</table>";
    }


}

?>