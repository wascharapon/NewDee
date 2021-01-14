<?php 
include'connect.php';
$pass =$_POST['pass'];
$pass_new =$_POST['pass_new'];
$confirm_pass =$_POST['confirm_pass'];
if($pass_new==$confirm_pass){
$sql = "SELECT * FROM account WHERE pass='$pass'";
$rs = mysqli_query($con,$sql);
$num = mysqli_num_rows($rs);
if($num==1)
{
	 $sql ="UPDATE account SET pass= '$pass_new' WHERE 1";
	$rs = mysqli_query($con,$sql);
		echo "<script>alert('เปลี่ยนรหัสผ่านเรียบร้อย');window.location.href = '../index.php';</script>";
}
else 
{
 	echo "<script>alert('รหัสผ่านเดิมไม่ถูกต้อง');window.location.href = '../index.php';</script>";
}
}
else 
{
 	echo "<script>alert('รหัสผ่านใหม่ไม่ตรงกัน');window.location.href = '../index.php';</script>";
}
?>