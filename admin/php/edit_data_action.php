<?php 
$id=$_GET['id'];
include('connect.php');
$subject = $_POST['name'];
$category = $_POST['category'];
$body= $_POST['body'];
if(pathinfo(basename($_FILES['Logo_new']['name']),PATHINFO_FILENAME)!='')
{
//upload image
$Logo = pathinfo(basename($_FILES['Logo_new']['name']),PATHINFO_EXTENSION);
$new_image_name =time().".".$Logo;
$image_path ="../img/photo/";
$upload_path = $image_path.$new_image_name;
 $succes=move_uploaded_file($_FILES['Logo_new']['tmp_name'],$upload_path);
 if($succes == false)
 {
	 echo "ไม่สามารถ upload รูปภาพได้ ";
	 exit();
 }
 
 $sql ="UPDATE news
SET subject='$subject',body='$body',category='$category',photo='$new_image_name'
WHERE ID = '$id'";

}
else
{
	 $sql ="UPDATE news
SET subject='$subject',body='$body',category='$category'
WHERE ID = '$id'";
}

$query = mysqli_query($con,$sql);
	if($query) {
echo "<script>alert('เพื่มข้อมูลเรียบร้อย');window.location.href = '../show_data.php';</script>";
	}
	else
	{
		echo "เกิดข้อผิดพลาดในการเพิ่มข้อมูล".mysqli_errno($con);
	}


?>