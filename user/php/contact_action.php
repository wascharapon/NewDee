<?php 
include('connect.php');
$name = $_POST['name'];
$text = $_POST['text'];
$sql ="INSERT INTO contact (name,text) VALUES ('$name','$text');";

$query = mysqli_query($con,$sql);
	if($query) {
echo "<script>alert('ส่งข้อมูลเรียบร้อย');window.location.href = 'http://localhost/mini_projects/user/contact.php';</script>";
	}
	else
	{
		echo "เกิดข้อผิดพลาดในการเพิ่มข้อมูล".mysqli_errno($con);
	}


?>