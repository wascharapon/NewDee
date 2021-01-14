<?php 
include('connect.php');
$name = $_POST['name'];
$category = $_POST['category'];
$body= $_POST['body'];
$time = (date("Y-m-d",time()));


//upload image
$Logo = pathinfo(basename($_FILES['Logo']['name']),PATHINFO_EXTENSION);
$new_image_name =time().".".$Logo;
$image_path ="../img/photo/";
$upload_path = $image_path.$new_image_name;
 $succes=move_uploaded_file($_FILES['Logo']['tmp_name'],$upload_path);
 if($succes == false)
 {
	 echo "ไม่สามารถ upload รูปภาพได้ ";
	 exit();
 }
$sql ="INSERT INTO news (subject,photo,category,body,date) VALUES ('$name','$new_image_name','$category','$body','$time');";

$query = mysqli_query($con,$sql);
	if($query) {
echo "<script>alert('เพื่มข้อมูลเรียบร้อย');window.location.href = '../show_data.php';</script>";
	}
	else
	{
		echo "เกิดข้อผิดพลาดในการเพิ่มข้อมูล".mysqli_errno($con);
	}


?>