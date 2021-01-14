<?php 
$id=$_GET['id'];
include('connect.php');
$sql="DELETE FROM contact WHERE id = '$id'";
$query = mysqli_query($con,$sql);
	if($query) {
echo "<script>alert('ลบข้อมูลเรียบร้อย');window.location.href = '../show_contact.php';</script>";
	}
	else
	{
		echo "เกิดข้อผิดพลาดในการเพิ่มข้อมูล".mysqli_errno($con);
	}

?>