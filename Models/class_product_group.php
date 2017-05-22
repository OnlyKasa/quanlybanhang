<?php
	class productgroup
	{
		var $gid;
		var $gname;
		public function setgid($gid){
			$this->gid=$gid;
		}
		public function getgid(){
			return $this->gid;
		}
		public function setgname($gname){
			$this->gname=$gname;
		}
		public function getname(){
			return $this->gname;
		}
		public function view(){
			include 'connectDB.php';
			$sql="Select * from productgroup";
			$query=mysqli_query($conn,$sql);
			$data=array();
			while($row=mysqli_fetch_assoc($query)){
				$data[]=$row;
				}
            echo "<div class='col-lg-4'>";
			echo "<table class='table table-striped table-bordered'>";
			echo "<tr>";
			echo "<td>Tên loại</td>";
			echo "<td>Sửa</td>";
			echo "<td>Xóa</td>";
			echo "</tr>";
			foreach ($data as $value) {
				echo "<tr>";;
				echo "<td>".$value['gname']."</td>";
				echo "<td><a href='?page=editg&gid=".$value['gid']."&gname=".$value['gname']."'><span class='glyphicon glyphicon-edit'></a></td>";
				echo "<td><a href='Controls/ctl_delete_product_group.php?gid=".$value['gid']."'><span class='glyphicon glyphicon-trash'></span></a></td>";
				echo "</tr>";
			}
			echo "</table>";
			echo "</div>";
		}
		public function add(){
			include 'connectDB.php';
			$sql="INSERT into productgroup(gname) values ('".$this->gname."')";
			mysqli_query($conn,$sql);

		}
		public function edit(){
		    include 'connectDB.php';
            $sql="UPDATE productgroup SET gname='".$this->gname."' WHERE gid='".$this->gid."'";
            mysqli_query($conn,$sql);
            echo "Cập nhật thành công";
        }
        public function del(){
		    include 'connectDB.php';
            $sql="DELETE from productgroup where gid='".$this->gid."'";
            mysqli_query($conn,$sql);
            echo "Xóa thành công";
    }
	}
?>